<?php

function nb_theme_styles() {
  wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
  wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css');
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js' );
  wp_enqueue_script( 'script_js', get_template_directory_uri().'/assets/js/script.js' );
}

function nb_after_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('custom-logo');

  register_nav_menu('primary', 'Menu Principal');
  register_nav_menu('top', 'Menu Superior');
}

function nb_widgets() {
  
}