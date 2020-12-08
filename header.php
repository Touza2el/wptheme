<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <header class="site-header">
      <div class="brand-name">
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="search-form">
        <?php get_search_form(); ?>
      </div>
      <div class="header-navigation">
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
      </div>
    </header>
  </div>