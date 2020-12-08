<?php

// Add Theme Styles
function add_theme_styles(){ 
  wp_enqueue_style('root-style',get_stylesheet_uri());
  wp_enqueue_style('main-style',get_template_directory_uri().'/css/style.css');
} 

// Add Theme Scripts
function add_theme_scripts(){
  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js',array(),false,true );
}

// Register Navigation Menus
function register_navigation_menus(){
  register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      'footer-menu' => 'Footer Menu',
    )
  );
}

// Register Sidebar
function theme_sidebar(){
  register_sidebar(array(
    'name'          => 'Main Sidebar',
    'id'            => 'main-sidebar',
    'description'   => 'The Main Sidebar of The Theme',
    'class'         => 'main-sidebar',
    'before_widget' => '<div class="widget-content">',
    'after_widget'  => '</div>', 
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>', 
  ));
}

// Add Theme Support
function theme_setup(){
  add_theme_support( 'post-thumbnails' );
} 

add_action('wp_enqueue_scripts','add_theme_styles'); //Add Theme Styles
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ); // Add Theme Scripts
add_action('init','register_navigation_menus'); // Register Menus
add_action('widgets_init','theme_sidebar'); // Register Sidebar
add_action('after_setup_theme', 'theme_setup'); // Add Theme Support

