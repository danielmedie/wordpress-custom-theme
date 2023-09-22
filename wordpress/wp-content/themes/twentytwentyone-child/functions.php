<?php

add_action( 'after_setup_theme', 'theme_featured_image_setup' );

function theme_featured_image_setup() { 
  add_theme_support( 'post-thumbnails' ); 
}
function custom_theme_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}



add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function register_my_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
  


  function custom_pagination_text($translated_text, $text, $domain) {
    if ($text === 'Previous') {
        return 'Föregående sida';
    }
    if ($text === 'Next') {
        return 'Nästa sida';
    }
    return $translated_text;
}
add_filter('gettext', 'custom_pagination_text', 20, 3);
