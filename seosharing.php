<?php
/**
 * Plugin Name: SEO Book PRO Sharing
 * Plugin URI: https://seobookpro.com/sharing/
 * Description: Sharing Plugin for WordPress websites
 * Version: 1.0.9
 * Author: Dimitar Krumov
 * Author URI: https://seobookpro.com/
 * Text Domain: seobookprosharing
 * Contributors: (this should be a list of wordpress.org userid's)
 * Tags: SEO Book Pro Sharing Buttons, SEO Sharing Buttons, WordPress Sharing Buttons Plugin, WordPress SEO Plugin for Share Buttons
 * Donate link: https://www.paypal.com/donate/?hosted_button_id=C36EVYX8YLQKN
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package SEO_Book_PRO_Sharing_Buttons_For_WordPress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants.
define( 'SEOBPSBFW_VERSION', '1.0.0' );
define( 'SEOBPSBFW_PLUGIN_FILE', __FILE__ );
define( 'SEOBPSBFW_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SEOBPSBFW_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
// Include required files.
require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/md.php';
require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/mdo.php';
require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/seo/basic-seo.php';
//require_once SEOBPSBFW_PLUGIN_DIR . 'inc/admin/update-share-container.php';
//require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-design-layout.php';
//require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-social-networks.php';
//require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-display-options.php';
//require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-sharing-options.php';
//require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/admin/tabs/tabpanel-page-speed-options.php';
// /wp-content/plugins/seobookprosharing/inc/func/seo/pro/seo-nav.php
// Include all .php files automatically from a specifc folder

//foreach ( glob( plugin_dir_path( __FILE__ ) . "inc/func/router/*.php" ) as $file ) {
  //  include_once $file;
//}

// Enque Bootstrap Framework

function seobpsbfw_load_bootstrap() {

    wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons&display=swap');
    wp_enqueue_style( 'material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap');
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css');
    wp_enqueue_script( 'bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js');
    wp_enqueue_script( 'jquery-3-5-0', 'https://code.jquery.com/jquery-3.5.0.js');
    wp_enqueue_script( 'jquery-min', 'https://code.jquery.com/jquery-3.3.1.min.js');
    wp_enqueue_script( 'platform', 'https://apis.google.com/js/platform.js');

// Add Loader for all CSS files included in to the /css/ folder to load on new file when it's created in the feature
foreach( glob( plugin_dir_path( __FILE__ ) . 'inc/assets/css/*.css' ) as $file ) {
                $filename = substr($file, strrpos($file, '/') + 1);
                wp_enqueue_style( $filename, plugin_dir_url( __FILE__ ) . 'inc/assets/css/' . $filename );
}

// Add Loader for all JavaScript files included in to the /js/ folder to load on new file when it's created in the feature

foreach( glob( plugin_dir_path( __FILE__ ) . 'inc/assets/js/*.js' ) as $file ) {
                 $filename = substr($file, strrpos($file, '/') + 1);
                 wp_enqueue_script( $filename, plugin_dir_url( __FILE__ ) . 'inc/assets/js/' . $filename );
}





}
add_action( 'admin_enqueue_scripts', 'seobpsbfw_load_bootstrap' );


function seobpsbfw_enqueue_custom_styles() {
// Load All CSS Styles and JavaScripts from the main Assets Folder for the Front End

 // Load All CSS Styles from the /inc/css/ Folder
    foreach( glob( plugin_dir_path( __FILE__ ) . 'inc/css/*.css' ) as $file ) {
        $filename = substr($file, strrpos($file, '/') + 1);
        wp_enqueue_style( $filename, plugin_dir_url( __FILE__ ) . 'inc/css/' . $filename );
    }
}
add_action( 'wp_enqueue_scripts', 'seobpsbfw_enqueue_custom_styles' );



// Loading External Styles and Scripts to Get Work in to the Front End of the Plugin for the Public not the admin part
function seobpsbfw_load_external_styles() {
    wp_enqueue_style( 'bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-icons-front', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css' );
}
add_action( 'wp_enqueue_scripts', 'seobpsbfw_load_external_styles' );


// Loading External Styles and Scripts to Get Work in to the Front End of the Plugin for the Public not the admin part
function seobpsbfw_load_external_javascripts() {
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js' );
}
add_action( 'wp_enqueue_scripts', 'seobpsbfw_load_external_javascripts' );

function seobpsbfw_add_menu_pages() {
    add_menu_page(
        __( 'SEO Share Buttons', 'seobookprosharing' ),
        __( 'SEO Share Buttons', 'seobookprosharing' ),
        'manage_options',
                            'seobpsbfw',
        'seobpsbfw_main_page',
        'dashicons-admin-settings',
        44
    );
    add_submenu_page(
      'seobpsbfw',
        __( 'Share Buttons Options', 'seobookprosharing' ),
        __( 'Share Buttons Options', 'seobookprosharing' ),
        'manage_options',
        'seobpsb-social-networks',
        'seobpsbfw_social_networks_page',
        45
    );
    add_submenu_page(
      'seobpsbfw',
        __( 'Basic SEO Options', 'seobookprosharing' ),
        __( 'Basic SEO Options', 'seobookprosharing' ),
        'manage_options',
        'seobpsb-basic-seo',
        'seobpsbfw_basic_seo_page',
        46
    );
    
}

// Add admin dashboard sidebar Main menu pages
add_action( 'admin_menu', 'seobpsbfw_add_menu_pages' );


function seobpsbfw_sharing_register_settings() {
    register_setting( 'seobpsbfw_sharing_options', 'seobpsbfw_sharing_options' );
    // Register the style settings
    // register_setting('seobpsbfw_sharing_options', 'seobpsbfw_share_container_style');
    // register_setting('seobpsbfw_sharing_options', 'seobpsbfw_share_column_style');
    // register_setting('seobpsbfw_sharing_options', 'seobpsbfw_buttons_column_style');
    // register_setting('seobpsbfw_sharing_options', 'seobpsbfw_share_buttons_style');
    // register_setting('seobpsbfw_sharing_options', 'seobpsbfw_sne_style');
}
add_action( 'admin_init', 'seobpsbfw_sharing_register_settings' );
add_filter( 'the_content', 'seobpsbfw_add_share_buttons' );


function seobpsbfw_add_sharing_options() {
    add_option( 'seobpsbfw_sharing_options', array(
        'include_seobpsbfw_facebook' => 1,
        'include_seobpsbfw_twitter' => 1,
        'include_seobpsbfw_linkedin' => 1,
        'include_seobpsbfw_reddit' => 1,
        'include_seobpsbfw_pinterest' => 1,
        'include_seobpsbfw_email' => 1,
        'include_seobpsbfw_pdf' => 1,
        'display_before_content' => 1,
        'display_after_content' => 1,
    ) );

    // Start Enqueue color picker scripts and styles
add_settings_field(
    'seobpsbfw_share_container_style',
    'Share Container Style',
    'seobpsbfw_share_container_style_callback',
    'seobpsbfw_add_sharing_options',
    'seobpsbfw_style_settings'
);

add_settings_section(
    'seobpsbfw_style_settings',
    'Share Buttons Style Settings',
    'seobpsbfw_style_settings_callback',
    'seobpsbfw_add_sharing_options'
);


add_settings_field(
    'seobpsbfw_share_container_background',
    'Share Container Background',
    'seobpsbfw_share_container_background_callback',
    'seobpsbfw_add_sharing_options',
    'seobpsbfw_style_settings'
);
   
   // End Enqueue color picker scripts and styles
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');

// Register the style setting
    register_setting('seobpsbfw_add_sharing_options', 'seobpsbfw_share_container_style');
    register_setting('seobpsbfw_add_sharing_options', 'seobpsbfw_share_container_background');
}
add_action( 'admin_init', 'seobpsbfw_add_sharing_options' );
add_action('admin_head', 'seobpsbfw_share_buttons_admin_styles');







// Register plugin activation and deactivation hooks.
register_activation_hook( __FILE__, 'seobpsbfw_activate' );
register_deactivation_hook( __FILE__, 'seobpsbfw_deactivate' );






// Define activation and deactivation functions.
function seobpsbfw_activate() {
// Do something on activation.
}
function seobpsbfw_deactivate() {
// Do something on deactivation.
}