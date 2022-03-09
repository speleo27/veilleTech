<?php
/**
 * Nav
 */

function register_my_menu() {
	register_nav_menu( 'header-menu', __( 'Menu principal' ) );
	register_nav_menu( 'footer-menu', __( 'Menu bas' ) );
}

add_action( 'init', 'register_my_menu' );
