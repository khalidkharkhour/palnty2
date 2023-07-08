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

function add_responsive_class() {
    echo '<script>document.documentElement.className += (("ontouchstart" in document.documentElement) ? " touch" : " no-touch");</script>';
}
/*add_action('wp_footer', 'add_responsive_class');
function set_page_background_color() {
    if (is_admin()) {
        echo '<style>body { background-color: #ece2da; }</style>';
    } elseif (is_page('commande')) {
        echo '<style>body { background-color: #3b8e46; }</style>';
    }
}
add_action('wp_head', 'set_page_background_color');*/

/*function custom_menu_links() {
  if (is_user_logged_in()) {
    echo '<div class="nous-rencontrer valign-text-middle">
            <span><a href="/index.php/nous-rencontrer/" class="syne-normal-black-16px">Nous rencontrer</a></span>
          </div>';
  } else {
    echo '<div class="nous-rencontrer2 valign-text-middle">
            <span><a href="/index.php/nous-rencontrer/" class="syne-normal-black-16px">Nous rencontrer</a></span>
          </div>';
  }

  if (is_user_logged_in()) {
    echo '<div class="nous-rencontrer-1 valign-text-middle">
            <span><a href="http://localhost:8080/wp-admin/" class="syne-normal-black-16px">Admin</a></span>
          </div>';
  }

  if (is_user_logged_in()) {
    echo '<div class="bouton-nav bouton-n">
            <div class="commander valign-text-middle commander-2 syne-bold-white-16px">
              <span><a href="/index.php/commander/" class="syne-bold-white-16px">Commander</a></span>
            </div>
          </div>';
  } else {
    echo '<div class="bouton-nav-2 bouton-1">
            <div class="commander valign-text-middle commander-2 syne-bold-white-16px">
              <span><a href="/index.php/commander/" class="syne-bold-white-16px">Commander</a></span>
            </div>
          </div>';
  }
}*/

function displayHeader() {
  $currentURL = $_SERVER['REQUEST_URI'];
  ?>
  <header class="header syne-normal-black-16px">
    <a href="https://khalidkharkhour.com/"><img class="logo" src="<?php echo child_theme_img_directory(); ?>logo-1@2x.png" alt="Logo" /></a>

    <?php
    wp_nav_menu(array(
      'theme_location' => 'planty',
      'container_class' => 'nav-bar',
      'menu_class' => 'header',
      'fallback_cb' => false
    ));
    ?>

    <?php if (is_user_logged_in()) : ?>
      <div class="nous-rencontrer valign-text-middle">
        <?php if ((is_page('nous-rencontrer') || is_page('commander'))) : ?>
          <span ><a href="/index.php/nous-rencontrer/" class="bold-nous-rencontrer syne-normal-black-16px">Nous rencontrer</a></span>
        <?php else : ?>
          <span><a href="/index.php/nous-rencontrer/" class="syne-normal-black-16px">Nous rencontrer</a></span>
        <?php endif; ?>
      </div>

      <div class="nous-rencontrer-1 valign-text-middle">
        <span><a href="https://khalidkharkhour/wp-admin/" class="syne-normal-black-16px">Admin</a></span>
      </div>

      <div class="bouton-nav bouton-n">
        <div class="syne-bold-white-16px">
          <span ><a href="/index.php/commander/" class="syne-bold-white-16px">Commander</a></span>
        </div>
      </div>
    <?php else : ?>
      <div class="nous-rencontrer2 valign-text-middle">
        <?php if ((is_page('nous-rencontrer') || is_page('commander'))) : ?>
          <span class="bold-nous-rencontrer"><a href="/index.php/nous-rencontrer/" class="syne-normal-black-16px">Nous rencontrer</a></span>
        <?php else : ?>
          <span><a href="/index.php/nous-rencontrer/" class="syne-normal-black-16px">Nous rencontrer</a></span>
        <?php endif; ?>
      </div>

      <div class="bouton-nav bouton-n">
        <div class="syne-bold-white-16px">
          <span><a href="/index.php/commander/" class="syne-bold-white-16px">Commander</a></span>
        </div>
      </div>
    <?php endif; ?>
  </header>
  <?php
}
