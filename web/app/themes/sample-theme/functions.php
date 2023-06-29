<?php
/**
 * Sample-theme Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sample-theme
 */

add_action( 'wp_enqueue_scripts', 'byvex_woocommerce_starter_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function byvex_woocommerce_starter_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'byvex-woocommerce-starter-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'sample-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'byvex-woocommerce-starter-style' ]
	);
}
