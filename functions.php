<?php

// Добавление стилей
function add_styles() {
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', [], null, 'all');
}

// Добавление скриптов
function add_scripts() {
  wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/js/inputmask.js', [], null, true);
  wp_enqueue_script('vannila-tilt', get_template_directory_uri() . '/assets/js/tilt.min.js', [], null, true);
  wp_enqueue_script('fix-wp', get_template_directory_uri() . '/assets/js/fix-wp.js', [], null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
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

function my_handler() {
  $username = $_POST['username'];
  $usertel = $_POST['usertel'];
  $usermsg = $_POST['usermsg'];

  $bot_token = get_option('token_bot');
  $bot_msg_template = get_option('bot_message');

  $bot_msg_template = str_replace('{username}', $username, $bot_msg_template);
  $bot_msg_template = str_replace('{usertel}', $usertel, $bot_msg_template);
  $bot_msg_template = str_replace('{usermsg}', $usermsg, $bot_msg_template);
  $bot_msg_template = urlencode($bot_msg_template);

  $response = file_get_contents(
    "https://api.telegram.org/bot$bot_token/sendMessage?&chat_id=-687292955&parse_mode=Markdown&text=$bot_msg_template"
  );

  // Перенаправляем на страницу, с которой пришел запрос
  $referer_url = $_SERVER['HTTP_REFERER'];
  header("Location: $referer_url");
}

add_action('admin_post_contact', 'my_handler');
add_action('admin_post_nopriv_contact', 'my_handler');



// Свой пункт меню
function my_menu_page() {
  add_menu_page(
    'Настройка Telegram-сообщений',
    'Настройки TG',
    'manage_options',
    'mioka_tg-opts',
    'get_tg_opts_layout',
    'dashicons-format-aside',
    20,
  );
}

// Разметка к пункту меню
function get_tg_opts_layout() {
  echo '<div class="wrap">
    <h1>' . get_admin_page_title() . '</h1>
    <form method="post" action="options.php">';
  
      settings_fields( 'tg_opts_settings' );
      do_settings_sections( 'tg_opts' );
      submit_button();
  
    echo '</form></div>';
}

// Регистрация полей для страницы настроек
function tg_opts_fields() {
  // Для ввода токена
  register_setting(
    'tg_opts_settings',
    'bot_token',
    '',
  );

  // Для ввода шаблона сообщений
  register_setting(
    'tg_opts_settings',
    'bot_message',
    '',
  );

  add_settings_section(
    'tg_opts_section_id',
    'Настройка отправки сообщений',
    '',
    'tg_opts'
  );

  add_settings_field(
    'bot_token',
    'Токен бота:',
    'tg_bot_token_field', // функция для вывода,
    'tg_opts',
    'tg_opts_section_id',
    array(
      'label_for' => 'tg_opts',
      'class' => 'tg-class',
      'name' => 'bot_token',
    )
  );

  add_settings_field(
    'bot_message',
    'Шаблон сообщения бота:',
    'tg_bot_message_field', // функция для вывода,
    'tg_opts',
    'tg_opts_section_id',
    array(
      'label_for' => 'tg_opts',
      'class' => 'tg-class',
      'name' => 'bot_message',
    )
  );
}

// Вывод поля для ввода токена
function tg_bot_token_field($args) {
  $value = get_option($args['name']);

  printf(
		'<input type="text" id="%s" name="%s" value="%s" />',
		esc_attr( $args[ 'name' ] ),
		esc_attr( $args[ 'name' ] ),
		$value
	);
}

// Вывод поля для ввода шаблона сообщения
function tg_bot_message_field($args) {
  $value = get_option($args['name']);

  printf(
    'Используйте:<br>
    <b>{username}</b> - для подстановки <u>имени</u> пользователя,<br>
    <b>{usertel}</b> - для подстановки <u>телефона</u> пользователя,<br>
    <b>{usermsg}</b> - для подстановки <u>сообщения</u> пользователя
    <hr>
    <textarea name="%s" id="%s" cols="55" rows="13">%s</textarea>',
    esc_attr( $args[ 'name' ] ),
		esc_attr( $args[ 'name' ] ),
    esc_attr( $value )
  );
}

// Кастомное уведомление
function true_custom_notice() {
 
	if(
		isset( $_GET[ 'page' ] )
		&& 'mioka_tg-opts' == $_GET[ 'page' ]
		&& isset( $_GET[ 'settings-updated' ] )
		&& true == $_GET[ 'settings-updated' ]
	) {
		echo '<div class="notice notice-success is-dismissible"><p>Настройки сообщений сохранены</p></div>';
	}
}

add_action('admin_menu', 'my_menu_page');
add_action('admin_init', 'tg_opts_fields');
add_action( 'admin_notices', 'true_custom_notice' );
