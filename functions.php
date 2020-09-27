<?php

function default_theme_scripts(){
  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'general-scripts', get_template_directory_uri() . '/js/general-scripts.js', null, 1.0, true );
}



add_action('wp_enqueue_scripts', 'default_theme_scripts');



