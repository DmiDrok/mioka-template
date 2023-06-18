<?php

// Добавление стилей
function add_styles() {
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', [], null, 'all');
}

// Добавление скриптов
function add_scripts() {
  wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/js/inputmask.js', [], null, true);
  wp_enqueue_script('vannila-tilt', get_template_directory_uri() . '/assets/js/tilt.min.js', [], null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}

add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');