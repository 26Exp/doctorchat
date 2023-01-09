<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

function footer_widget_one() {
    register_sidebar( array(
        'name' => 'Footer 1',
        'id' => 'footer-one',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
}

function footer_widget_two() {
    register_sidebar( array(
        'name' => 'Footer 2',
        'id' => 'footer-two',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
}

add_action( 'widgets_init', 'footer_widget_one' );
add_action( 'widgets_init', 'footer_widget_two' );

function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

function disable_real_mime_check( $data, $file, $filename, $mimes ) {
    $wp_filetype = wp_check_filetype( $filename, $mimes );

    $ext = $wp_filetype['ext'];
    $type = $wp_filetype['type'];
    $proper_filename = $data['proper_filename'];

    return compact( 'ext', 'type', 'proper_filename' );
}
add_filter( 'wp_check_filetype_and_ext', 'disable_real_mime_check', 10, 4 );

function dm_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );


function get_speciality(): array
{
    $args = array(
        'post_type' => 'doctors',
        'tax_query' => array(
            array(
                'taxonomy' => 'speciality',
                'field' => 'slug',
                'terms' => get_queried_object(),
            ),
        ),
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);

    return $query->get_posts();
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Translated Label');
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4 );

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// Check if doctor has reviews
function get_reviews() {
    // Get all reviews post_type=review
    $args = array(
        'post_type' => 'review',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => 'doctor',
                'value' => get_the_ID(),
                'compare' => '=',
            ),
        ),
    );

    $query = new WP_Query($args);

    return $query->get_posts();
}

function get_articles() {
    $user = get_field('doctor', get_the_ID());

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'author' => $user->ID,
    );

    $query = new WP_Query($args);

    return $query->get_posts();
}

function get_doctors_by_speciality_id($id) {
    $args = array(
        'post_type' => 'doctors',
        'tax_query' => array(
            array(
                'taxonomy' => 'speciality',
                'field' => 'term_id',
                'terms' => $id,
            ),
        ),
        'posts_per_page' => -1,
        'meta_key' => 'rating',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    return $query->get_posts();
}

<?php

add_action( 'admin_init', 'user_move_init' );
add_action( 'admin_menu', 'user_move_add_page' );

/**
 * Init plugin options to white list our options
 */
function user_move_init(){
    register_setting( 'user_move', 'user_move', 'user_move_validate' );
}

/**
 * Load up the menu page
 */
function user_move_add_page() {
    add_users_page( __( 'User Import', 'user_move' ), __( 'User Import', 'user_move' ), 'edit_theme_options', 'theme_options', 'user_move_do_page' );
}

/**
 * Create the options page
 */
function user_move_do_page() {

    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;

    ?>

    <div class="wrap">
        <h2><?php echo __( ' User Network Import', 'user_move' ) ; ?></h2>

        <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <p>Starting transfer</p><?php
            global $wpdb;
            switch_to_blog(2);

            $aUsersID = $wpdb->get_col( $wpdb->prepare("SELECT $wpdb->users.ID FROM $wpdb->users" ));
            /*
            Once we have the IDs we loop through them with a Foreach statement.
            */
            foreach ( $aUsersID as $iUserID ) :
                /*
                We use get_userdata() function with each ID.
                */
                $user = get_userdata( $iUserID );

                $capabilities = $user->{$wpdb->prefix . 'capabilities'};
                if(!empty($capabilities)){

                    if ( !isset( $wp_roles ) ){
                        $wp_roles = new WP_Roles();
                    }
                    $r = '';
                    foreach ( $wp_roles->role_names as $role => $name ) :
                        if ( array_key_exists( $role, $capabilities ) ){
                            $r = $role;
                            break;
                        }

                    endforeach;
                }
                if(empty($r)){
                    $r = 'subscriber';
                }

                /*
                Here we finally print the details wanted.
                Check the description of the database tables linked above to see
                all the fields you can retrieve.
                To echo a property simply call it with $user->name_of_the_column.
                In this example I print the first and last name.
                */
                echo '<li>Transfering '.$user->user_login.' ('. ucwords( strtolower( $user->first_name . ' ' . $user->last_name ) ) . '), '.$r.'</li>';

                add_user_to_blog(1,$iUserID,$r);

                /*
                 The strtolower and ucwords part is to be sure
                 the full names will all be capitalized.
                */
            endforeach;

            restore_current_blog();

            ?><p>Transfer complete</p>

        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields( 'user_move' ); ?>
            <p>Click to import Users from the blog site to the main site</p>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e( 'Start Import', 'user_move' ); ?>" />
            </p>
        </form>
    </div>
    <?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function user_move_validate( $input ) {
    return $input;
}
