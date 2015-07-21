<?php
/**
 * Plugin Name: Cookies Banner
 * Version: 1.0
 * Plugin URI: http://www.myclientisrich.com
 * Description: Cookies Banner permet d'ajouter le bandeau des cookies obligatoire (CNIL) sur votre site web.
 * Author: My Client is Rich
 * Author URI: https://www.myclientisrich.com/
 * Text Domain: cookiesbanner
 * Domain Path: /lang/
 * License: GPL v3
 */

// Back office
require('back/CB-menu.php');

// Front Office
function CB_render_front(){
	require('front/CB-render.php');
}
add_action( 'wp_footer', 'CB_render_front' );

// Activation
function CB_activate() {

	update_option( 'CB-msg', 0 );
	update_option( 'CB-msg_perso', '' );
	update_option( 'CB-link', get_pages()[0]->ID );
	update_option( 'CB-link_perso', '' );
	update_option( 'CB-place', 'top' );

}
register_activation_hook( __FILE__, 'CB_activate' );