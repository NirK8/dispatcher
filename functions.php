<?php 
function dispatcher_styles() {
  // adding stylesheets
  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0.0');
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

  // Enqueue the style
  wp_enqueue_style('normalize');
  wp_enqueue_style('style');
}

// Adds stylesheets and JS files
function dispatcher_scripts() {
  // Google fonts
  wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap', array(), '1.0.0');
  wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2&family=Roboto:wght@400;700&display=swap', array(), '1.0.0');
  // wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
} 

add_action('wp_enqueue_scripts', 'dispatcher_styles');
add_action('wp_enqueue_scripts', 'dispatcher_scripts');

// console log for php
function console_log($output, $with_script_tags = true) {
  $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
  if ($with_script_tags) {
      $js_code = '<script>' . $js_code . '</script>';
  }
  echo $js_code;
}

?>