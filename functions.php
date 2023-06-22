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

// Обработчик формы обратной связи
function my_handler() {
  error_log('success');

  $username = $_POST['username'];
  $usertel = $_POST['usertel'];
  $usermsg = $_POST['usermsg'];

  if (empty($username) || empty($usertel) || empty($usermsg)) {
    return;
  }

  // Начало настройки сообщения
  $bot_token = get_option('bot_token');
  $bot_chat_id = get_option('bot_chat_id');
  $bot_msg_template = get_option('bot_message');

  $bot_msg_template = str_replace('{username}', $username, $bot_msg_template);
  $bot_msg_template = str_replace('{usertel}', $usertel, $bot_msg_template);
  $bot_msg_template = str_replace('{usermsg}', $usermsg, $bot_msg_template);
  $bot_msg_template = urlencode($bot_msg_template);

  $response = file_get_contents(
    "https://api.telegram.org/bot$bot_token/sendMessage?&chat_id=$bot_chat_id&parse_mode=Markdown&text=$bot_msg_template"
  );

  // Перенаправляем на страницу, с которой пришел запрос
  $referer_url = $_SERVER['HTTP_REFERER'];
  header("Location: $referer_url");
}

// add_action('admin_post_contact', 'my_handler');
// add_action('admin_post_nopriv_contact', 'my_handler');
// Ajax-отправка
add_action('wp_ajax_contact', 'my_handler');
add_action('wp_ajax_nopriv_contact', 'my_handler');

add_theme_support('post_thumbnails');