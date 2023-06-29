<?php
function planty_block_init() {
  // Skip block registration if Gutenberg is not enabled/merged.
  if ( ! function_exists( 'register_block_type' ) ) {
    return;
  }
  $dir = get_stylesheet_directory() . '/blocks';

  $index_js = 'plant/index.js';
  wp_register_script(
    'planty-block-editor',
    get_stylesheet_directory_uri() . "/blocks/{$index_js}",
    [
      'wp-blocks',
      'wp-i18n',
      'wp-element',
    ],
    filemtime( "{$dir}/{$index_js}" )
  );

  $editor_css = 'plant/editor.css';
  wp_register_style(
    'planty-block-editor',
    get_stylesheet_directory_uri() . "/blocks/{$editor_css}",
    [],
    filemtime( "{$dir}/{$editor_css}" )
  );

  $style_css = 'plant/style.css';
  wp_register_style(
    'planty-block',
    get_stylesheet_directory_uri() . "/blocks/{$style_css}",
    [],
    filemtime( "{$dir}/{$style_css}" )
  );

  register_block_type( 'blocks/plant', [
    'editor_script' => 'planty-block-editor',
    'editor_style'  => 'planty-block-editor',
    'style'         => 'planty-block',
  ] );
}

add_action( 'init', 'planty_block_init' );
