<?php 
add_action('wp_enqueue_scripts', 'childhood_scripts');
add_action('wp_enqueue_scripts', 'childhood_styles');
function childhood_styles(){
	wp_enqueue_style('childhood-style', get_stylesheet_uri());
  wp_enqueue_style('childhood-media', get_template_directory_uri() . '/assets/media.css');
  };
function childhood_scripts (){
wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
wp_deregister_script('jquery');
wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
  };
 add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
$termlink = apply_filters( 'category_link', $termlink, $term->term_id );



















 ?>