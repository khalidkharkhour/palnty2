<header class="header syne-normal-black-16px">
  <img class="logo" src="<?php echo child_theme_img_directory(); ?>logo-1@2x.png" alt="Logo" />

  <?php
  wp_nav_menu(array(
    'theme_location' => 'planty',
    'container_class' => 'nav-bar',
    'menu_class' => 'header',
    'fallback_cb' => false
  ));
  ?>

  <div class="nous-rencontrer valign-text-middle">
    <span><a href="/index.php/nous-rencontrer/" class="syne-normal-black-16px">Nous rencontrer</></a>
  </div>

  <?php if (is_user_logged_in()) : ?>
    <div class="nous-rencontrer-1 valign-text-middle">
      <span><span class="syne-normal-black-16px">Admin</span></span>
    </div>
  <?php endif; ?>

  
    <?php if (is_user_logged_in()) : ?>
      <div class="bouton-nav bouton-n">
      <div class="commander valign-text-middle commander-2 syne-bold-white-16px">
        <span><a href="/index.php/commander/" class="syne-bold-white-16px">Commander</a></span>
      </div>
    <?php else : ?>
      <div class="bouton-nav-2 bouton-1">
      <div class="commander valign-text-middle commander-2 syne-bold-white-16px">
        <span><a href="/index.php/commander/" class="syne-bold-white-16px">Commander</a></span>
      </div>
    <?php endif; ?>

</header>
