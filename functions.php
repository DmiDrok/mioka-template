<?php

// Добавление стилей
function add_styles() {
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/src/style.css', [], null, 'all');

  // Build variant
  // wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.bundle.min.css', [], null, 'all');
}

// Добавление скриптов
function add_scripts() {
  wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/js/src/inputmask.js', [], null, true);
  wp_enqueue_script('vanilla-tilt', get_template_directory_uri() . '/assets/js/src/tilt.min.js', [], null, true);
  wp_enqueue_script('js-cookie', get_template_directory_uri() . '/assets/js/src/js-cookie.min.js', [], null, true);
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/src/fancybox.umd.js', [], null, true);
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/src/swiper.min.js', [], null, true);
  wp_enqueue_script('lazyload', get_template_directory_uri() . '/assets/js/src/lazyload.min.js', [], null, true);
  wp_enqueue_script('choices', get_template_directory_uri() . '/assets/js/src/choices.min.js', [], null, true);
  wp_enqueue_script('air-datepicker', get_template_directory_uri() . '/assets/js/src/air-datepicker.js', [], null, true);
  wp_enqueue_script('vue', 'https://unpkg.com/vue@3/dist/vue.global.js', [], null, true);
  wp_enqueue_script('fix-wp', get_template_directory_uri() . '/assets/js/src/fix-wp.js', [], null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/src/main.js', [], null, true);
  
  // Build variant
  // wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.bundle.min.js', [], null, true);
}

add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

// Убрать теги <p> у плагина Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Убрать ненужные теги у Contact Form
add_filter('wpcf7_form_elements', function($content) {
  // Убрать обёртку в виде <span>
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  // Убрать атрибуты size, rows, cols
  $content = preg_replace('/(size|rows|cols)="\d+"/i', '', $content);

  return $content;
});

// Поддержка дополнительных возможностей
add_theme_support('post-thumbnails');
