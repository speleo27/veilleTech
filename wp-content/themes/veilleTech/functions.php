<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

/**
 * style css
 */
function add_theme_style() {
	wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/sass/main.css',
		false, '1.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'add_theme_style' );

/*
 * scripts js
 */
function add_theme_scripts() {
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js' );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/*
 * Nav
 */

function register_my_menu() {
	register_nav_menu( 'header-menu', __( 'Menu principal' ) );
}

add_action( 'init', 'register_my_menu' );

function add_additional_class_on_li( $classes, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );


register_sidebar( array(
	'id'   => 'search',
	'name' => 'Blog',
) );