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