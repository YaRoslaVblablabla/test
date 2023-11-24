<?php
// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function theme_add_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style-name', get_template_directory_uri().'/assets/css/style.css' );

	// подключаем js файл темы
	wp_enqueue_script( 'script-name', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0', true );
}