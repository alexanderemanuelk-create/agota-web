<?php
function agota_setup() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'agota-web'),
  ));
}
add_action('after_setup_theme', 'agota_setup');

function agota_assets() {
  wp_enqueue_style('agota-style', get_stylesheet_uri(), array(), '1.0.0');
  wp_enqueue_script('agota-script', get_template_directory_uri() . '/assets/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'agota_assets');
