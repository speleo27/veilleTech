<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
add_theme_support( 'comments' );
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
add_theme_support( 'widgets' );
add_theme_support( 'widgets-block-editor' );
/**
 * style css
 */
function add_theme_style() {
	wp_enqueue_style( 'global', get_template_directory_uri() . '/dist/main.css',
		false, '1.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'add_theme_style' );

/**
 * scripts js
 */
function add_theme_scripts() {
	wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/app.js', [], 'false',true );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/**
 * ajout de class sur li
 */
function add_additional_class_on_li( $classes, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );