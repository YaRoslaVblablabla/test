<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'username' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'password' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W-  ^P1)-p`eu2*{8xliG(Na|tPv67<=Bi2% m sxwXP4?H<`m$k)_+mE>~bjs*&' );
define( 'SECURE_AUTH_KEY',  'yC^G5XR_Ilwo1g&8s<3z$Bcj%l)cK3xSK K6m*[Q!kF!5zp|1DvE7/+(b^re!!;#' );
define( 'LOGGED_IN_KEY',    'Y_)sMo(+w8_<E^BK><5{4D|@CxkT)BmQAw,D;OCh&e/[;`.~f$_C}c=m{5U-C%3>' );
define( 'NONCE_KEY',        '<&N}ol_F+wer4/yOUk:VQ~!X{k`Yzzi[H{!#Fh6mBt0Xh6b$O3P*Q1wU ~Ucly+:' );
define( 'AUTH_SALT',        'dCXGblT o1>%+[3*RJt[|Yjo>S4JnOQqHBII@e<l$bWe3ShhJ(TSb9l$ql^}oP?e' );
define( 'SECURE_AUTH_SALT', 'W`aV:r%*@fPs74v;_S9 |S2]1y5;b>_VpW)E4t`|^:e^7t0/WUl>@}MA0+|VA$MI' );
define( 'LOGGED_IN_SALT',   '}#YJy[6>EZ^lZlYlWW|<E3LfQK&4^W1E `,t4YY]<$CHn~?u#uYJO@X&2LF+B/.j' );
define( 'NONCE_SALT',       'dX;g/.Gin@xkH%qQD(d[m]<+d,pX^iEESEpD?#Du{m@*g3A|V !eXZP4k<%kXWts' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
