<?php
function enqueue_child_planty_styles() {
  wp_enqueue_style('child-planty-style', get_stylesheet_uri());
}
/*function enqueue_commander_css() {
  if (is_page() && get_post_field('post_name') === 'commander') {
    wp_enqueue_style('commander-css', get_stylesheet_directory_uri() . '/css/commander.css');
  }
  if (is_page() && get_post_field('post_name') === 'nous-rencontrer') {
    wp_enqueue_style('nous-rencontrer-css', get_stylesheet_directory_uri() . '/css/reconc.css');
  }
  if (is_page() && get_post_field('post_name') === 'pre-commande') {
    wp_enqueue_style('etiquette-boisson-css', get_stylesheet_directory_uri() . '/css/etiquette-boisson.css');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_commander_css');*/

function child_theme_img_directory() {
  return get_stylesheet_directory_uri() . '/img/';
}

// Ajouter le lien "Admin" dans le menu
function ajouter_lien_admin_menu($items, $args) {
  // Vérifier si l'utilisateur est connecté
  if (is_user_logged_in()) {
    // Ajouter le lien "Admin" à la liste des items du menu
    $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
  }
  return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);

function register_my_dynamic_block() {
  register_block_type('blocks/test', array(
    'render_callback' => 'render_dynamic',
  ));
}
add_action('init', 'register_my_dynamic_block');

function render_dynamic($attributes) {
  // Implémentez ici la logique de rendu de votre bloc
}

add_action('wp_footer', 'custom_form_script');

function custom_form_script() {
  ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const minusButton = document.querySelector('.minus-button');
      const plusButton = document.querySelector('.plus-button');
      const inputField = document.getElementById('input-number');

      minusButton.addEventListener('click', function() {
        const currentValue = parseInt(inputField.value);
        if (currentValue > 0) {
          inputField.value = currentValue - 1;
        }
      });

      plusButton.addEventListener('click', function() {
        const currentValue = parseInt(inputField.value);
        inputField.value = currentValue + 1;
      });
    });
  </script>
  <?php
}
function disable_horizontal_scroll() {
  echo '<style>html, body { overflow-x: hidden; }</style>';
}
add_action('wp_head', 'disable_horizontal_scroll');

