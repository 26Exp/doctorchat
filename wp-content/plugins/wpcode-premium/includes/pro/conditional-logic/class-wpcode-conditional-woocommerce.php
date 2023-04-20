<?php
/**
 * Class that handles conditional logic related to WooCommerce.
 *
 * @package WPCode
 */

/**
 * The WPCode_Conditional_WooCommerce class.
 */
class WPCode_Conditional_WooCommerce extends WPCode_Conditional_Type {

	/**
	 * The type unique name (slug).
	 *
	 * @var string
	 */
	public $name = 'woocommerce';

	/**
	 * Set the translatable label.
	 *
	 * @return void
	 */
	protected function set_label() {
		$this->label = 'WooCommerce';
	}

	/**
	 * Set the type options for the admin mainly.
	 *
	 * @return void
	 */
	public function load_type_options() {
		$this->options = array(
			'wc_page' => array(
				'label'    => __( 'WooCommerce Page', 'wpcode-premium' ),
				'type'     => 'select',
				'options'  => array(
					array(
						'label' => __( 'Checkout Page', 'wpcode-premium' ),
						'value' => 'checkout',
					),
					array(
						'label' => __( 'Thank You Page', 'wpcode-premium' ),
						'value' => 'thank_you',
					),
					array(
						'label' => __( 'Cart Page', 'wpcode-premium' ),
						'value' => 'cart',
					),
					array(
						'label' => __( 'Single Product Page', 'wpcode-premium' ),
						'value' => 'product',
					),
					array(
						'label' => __( 'Shop Page', 'wpcode-premium' ),
						'value' => 'shop',
					),
					array(
						'label' => __( 'Product Category Page', 'wpcode-premium' ),
						'value' => 'product_cat',
					),
					array(
						'label' => __( 'Product Tag Page', 'wpcode-premium' ),
						'value' => 'product_tag',
					),
					array(
						'label' => __( 'My Account Page', 'wpcode-premium' ),
						'value' => 'account_page',
					),
				),
				'callback' => array( $this, 'get_page_type' ),
			),
		);
		if ( is_admin() ) {
			if ( ! wpcode()->license->get() ) {
				$this->options['wc_page']['upgrade'] = array(
					'title'  => __( 'WooCommerce Page Rules is a Pro Feature', 'wpcode-premium' ),
					'text'   => __( 'Please add your license key in the Settings Panel to unlock all pro features.', 'wpcode-premium' ),
					'link'   => add_query_arg(
						array(
							'page' => 'wpcode-settings',
						),
						admin_url( 'admin.php' )
					),
					'button' => __( 'Add License Key Now', 'wpcode-premium' ),
				);
			} elseif ( ! class_exists( 'WooCommerce' ) ) {
				$this->options['wc_page']['upgrade'] = array(
					'title'  => __( 'WooCommerce Is Not Installed', 'wpcode-premium' ),
					'text'   => __( 'Please install and activate WooCommerce to use this feature.', 'wpcode-premium' ),
					'link'   => admin_url( 'plugin-install.php?s=woocommerce&tab=search&type=term' ),
					'button' => __( 'Install WooCommerce Now', 'wpcode-premium' ),
				);
				$this->set_label();// Reset label.
				$this->label                          = $this->label . __( ' (Not Installed)', 'wpcode-premium' );
			}
		}
	}

	/**
	 * Get the WooCommerce page type.
	 *
	 * @return string
	 */
	public function get_page_type() {
		if ( ! class_exists( 'woocommerce' ) ) {
			return '';
		}
		if ( is_order_received_page() ) {
			return 'thank_you';
		}
		if ( is_checkout() ) {
			return 'checkout';
		}
		if ( is_shop() ) {
			return 'shop';
		}
		if ( is_product() ) {
			return 'product';
		}
		if ( is_product_category() ) {
			return 'product_cat';
		}
		if ( is_product_tag() ) {
			return 'product_tag';
		}
		if ( is_account_page() ) {
			return 'account_page';
		}

		return '';
	}
}

new WPCode_Conditional_WooCommerce();
