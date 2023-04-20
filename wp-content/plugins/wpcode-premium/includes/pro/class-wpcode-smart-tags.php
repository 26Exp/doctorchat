<?php
/**
 * Base class used for Smart Tags throughout the plugin.
 *
 * @package WPCode
 */

class WPCode_Smart_Tags {

	/**
	 * The tags array.
	 *
	 * @var array
	 */
	private $tags;

	/**
	 * Load tags in the instance.
	 *
	 * @return void
	 */
	public function load_tags() {
		$generic_tags = array(
			'id'         => array(
				'label'    => __( 'Content ID', 'wpcode-premium' ),
				'function' => 'get_the_ID',
			),
			'title'      => array(
				'label'    => __( 'Content title', 'wpcode-premium' ),
				'function' => 'get_the_title',
			),
			'categories' => array(
				'label'    => __( 'Content Categories', 'wpcode-premium' ),
				'function' => array( $this, 'tag_value_categories' ),
			),
			'email'      => array(
				'label'    => __( 'User\'s email', 'wpcode-premium' ),
				'function' => array( $this, 'tag_value_email' ),
			),
			'first_name' => array(
				'label'    => __( 'User\'s first name', 'wpcode-premium' ),
				'function' => array( $this, 'tag_value_first_name' ),
			),
			'last_name'  => array(
				'label'    => __( 'User\'s last name', 'wpcode-premium' ),
				'function' => array( $this, 'tag_value_last_name' ),
			),
		);

		$woocommerce_tags = array(
			'wc_order_number'   => array(
				'label'    => __( 'Order number', 'wpcode-premium' ),
				'function' => array( $this, 'tag_value_wc_order_number' ),
			),
			'wc_order_subtotal' => array(
				'label'    => __( 'Order subtotal', 'wpcode-premium' ),
				'function' => array( $this, 'tag_value_wc_order_subtotal' ),
			),
			'wc_order_total'    => array(
				'label'    => __( 'Order total', 'wpcode-premium' ),
				'function' => array( $this, 'tag_value_wc_order_total' ),
			),
		);

		$tags = array(
			'generic'     => array(
				'label' => '',
				'tags'  => $generic_tags,
			),
			'woocommerce' => array(
				'label' => 'Woocommerce',
				'tags'  => $woocommerce_tags,
			),
		);

		$this->tags = apply_filters( 'wpcode_smart_tags', $tags );
	}

	/**
	 * Get smart tags with labels.
	 *
	 * @return array
	 */
	public function get_tags() {
		if ( ! isset( $this->tags ) ) {
			$this->load_tags();
		}

		return $this->tags;
	}

	/**
	 * Get a comma-separated list of categories to replace the smart tag [categories].
	 *
	 * @return string
	 */
	public function tag_value_categories() {
		return strip_tags( get_the_category_list( ',' ) );
	}

	/**
	 * Get the current user email.
	 *
	 * @return string
	 */
	public function tag_value_email() {
		return $this->get_user_detail( 'user_email' );
	}

	/**
	 * Get the first name tag.
	 *
	 * @return string
	 */
	public function tag_value_first_name() {
		return $this->get_user_detail( 'first_name' );
	}

	/**
	 * Get the last name tag.
	 *
	 * @return string
	 */
	public function tag_value_last_name() {
		return $this->get_user_detail( 'last_name' );
	}

	/**
	 * Get an user detail if loggedin.
	 *
	 * @param $detail
	 *
	 * @return int|mixed|string
	 */
	private function get_user_detail( $detail ) {
		if ( ! is_user_logged_in() ) {
			return '';
		}

		$user = wp_get_current_user();

		return isset( $user->$detail ) ? $user->$detail : '';
	}

	/**
	 * Check if WooCommerce is installed & active on the site.
	 *
	 * @return bool
	 */
	public function woocommerce_available() {
		return class_exists( 'woocommerce' );
	}

	/**
	 * Get the Woo order, if available.
	 *
	 * @return bool|WC_Order|WC_Order_Refund
	 */
	public function get_wc_order() {
		if ( ! $this->woocommerce_available() ) {
			return false;
		}

		global $wp;

		// Check cart class is loaded or abort.
		if ( is_null( WC()->cart ) ) {
			return false;
		}

		if ( empty( $wp->query_vars['order-received'] ) ) {
			return false;
		}

		$order_id = $wp->query_vars['order-received'];

		return wc_get_order( $order_id );
	}

	/**
	 * Return the WC order number, if available.
	 *
	 * @return string|int
	 */
	public function tag_value_wc_order_number() {
		$order = $this->get_wc_order();

		if ( ! $order ) {
			return '';
		}

		return $order->get_order_number();
	}

	/**
	 * Return the WC order subtotal,  if available.
	 *
	 * @return string|float
	 */
	public function tag_value_wc_order_subtotal() {
		$order = $this->get_wc_order();

		if ( ! $order ) {
			return '';
		}

		return $order->get_subtotal();
	}

	/**
	 * Return the WC order total, if available.
	 *
	 * @return string|float
	 */
	public function tag_value_wc_order_total() {
		$order = $this->get_wc_order();

		if ( ! $order ) {
			return '';
		}

		return $order->get_total();
	}

	/**
	 * Replace smart tags in the code passed.
	 *
	 * @param string $code The code to replace the smart tags in.
	 *
	 * @return string
	 */
	public function replace_tags_in_snippet( $code ) {

		$tags = $this->get_tags_to_replace();

		foreach ( $tags as $tag => $function ) {
			$tag_code = $this->get_tag_code( $tag );
			if ( false !== strpos( $code, $tag_code ) && is_callable( $function ) ) {
				$code = str_replace( $tag_code, call_user_func( $function ), $code );
			}
		}

		return $code;
	}

	/**
	 * Parse the tags data and return just tag > function pairs.
	 *
	 * @return array
	 */
	public function get_tags_to_replace() {
		$tags_data = $this->get_tags();

		$tags = array();
		foreach ( $tags_data as $category_data ) {
			foreach ( $category_data['tags'] as $tag => $tag_details ) {
				$tags[ $tag ] = $tag_details['function'];
			}
		}

		return $tags;
	}

	/**
	 * Get a tag in the format used in the code.
	 *
	 * @param string $tag The tag to wrap in code format.
	 *
	 * @return string
	 */
	public function get_tag_code( $tag ) {
		return "[{$tag}]";
	}

}
