<?php
/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package planty
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function test_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = get_stylesheet_directory() . '/blocks';

	$index_js = 'planty/blocks/test/index.js';
	wp_register_script(
		'test-block-editor',
		get_stylesheet_directory_uri() . "/planty/blocks/{$index_js}",
		[
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		],
		filemtime( "{$dir}/{$index_js}" )
	);

	$editor_css = 'planty/blocks/test/editor.css';
	wp_register_style(
		'test-block-editor',
		get_stylesheet_directory_uri() . "planty/blocks/{$editor_css}",
		[],
		filemtime( "{$dir}/{$editor_css}" )
	);

	$style_css = 'planty/blocks/test/style.css';
	wp_register_style(
		'test-block',
		get_stylesheet_directory_uri() . "planty/blocks/{$style_css}",
		[],
		filemtime( "{$dir}/{$style_css}" )
	);

	register_block_type( 'planty/blocks/test', [
		'editor_script' => 'test-block-editor',
		'editor_style'  => 'test-block-editor',
		'style'         => 'test-block',
	] );
}

add_action( 'init', 'test_block_init' );
