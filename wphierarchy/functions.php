<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', [
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat'

]);

add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');


// load in our css


function wphierarchy_enqueue_style()
{

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [],
  time(), 'all' );

}




add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_style' );


?>
