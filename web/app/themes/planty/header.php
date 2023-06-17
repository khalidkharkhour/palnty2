<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Planty, c’est la première boisson énergisante composée
   à 100 % de produits naturels. Avec son goût frais et fruité, retrouvez votre énergie grâce
    aux plantes riches en vitamine B2, à n’importe quel moment de la journée.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>Planty</title>
  <?php wp_head() ?>
</head>
<body >
   
    
      <div class="screen " id="layout">
<div class="nav-bar <?php echo (is_user_logged_in()) ? '' : 'not-logged-in'; ?>">


  <?php get_header('planty'); ?>
</div>
<?php
if (has_nav_menu('planty')) {
    wp_nav_menu(array(
        'theme_location' => 'planty',
        'menu_class'     => 'planty',
    ));
}
?>
