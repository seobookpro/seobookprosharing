<?php
/**
 * Plugin Name: SEO Book PRO Sharing
 * Plugin URI: https://seobookpro.com/sharing/
 * Description: SEO Book Pro - WordPress Plugin for Share Buttons. The SEO Book Pro Sharing Buttons Plugin is a powerful WordPress plugin that allows you to easily add social sharing 
   buttons to your content. By enabling social sharing, you can boost engagement with your audience and drive more traffic to your website. With a range of customization options and 
   innovative button styles, this plugin gives you full control over how your content is shared on popular social networks.
 * Version: 1.0.2
 * Author: Dimitar Krumov - Prime
 * Author URI: https://seobookpro.com/barmolino/
 * Text Domain: seobookprosharing
 * Contributors: (this should be a list of wordpress.org userid's)
 * Tags: SEO Book Pro Sharing Buttons, SEO Sharing Buttons, WordPress Sharing Buttons Plugin, WordPress SEO Plugin for Share Buttons, Share Button, Buttons for Share, Social Networks Sharing Buttons
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


// At the Rows Below staring from 34 we are include the required files for our Share Buttons Plugin for WordPress to Work without interruption

require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/md.php';
require_once SEOBPSBFW_PLUGIN_DIR . 'inc/func/mdo.php';


register_activation_hook( __FILE__, 'seobpsbfw_activate' );
register_deactivation_hook( __FILE__, 'seobpsbfw_deactivate' );

// Here we are define the activation and deactivation functions for our WordPress Plugin
function seobpsbfw_activate() {
// Do something on activation.
}
function seobpsbfw_deactivate() {
// Do something on deactivation.
}
