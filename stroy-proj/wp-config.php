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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_stroy' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'RIsF?q^oiG::t/;(<Aw`I B?$<D8RH;EG&Ot)Q~=PA.;d_>i#cGDO80OH.hZVLU;' );
define( 'SECURE_AUTH_KEY',  'T%2<6IHxe3t<dLq/#6{NS28X4qr4k7|:]`:va1-6AvYXX4$|yD=`zo67>,.LAa|R' );
define( 'LOGGED_IN_KEY',    'iD&;0BgZa:6K3th U*+y{m>r1cKk=p6?b4BSktw>.|?2if7BXNEjU8o1iuv9 DnU' );
define( 'NONCE_KEY',        'H_h(uiICLq[F5)uvC}b!q@6NPY4]Mc%T<1fa&!uVa)1%tF}oORj24A@FzST[_NXY' );
define( 'AUTH_SALT',        't~{g2G_>ShV0qh?SQhE&+a?Hkg@GIOz[&;%EaQ7!>63^ycmzXG=ZNDQK1,zRmlk#' );
define( 'SECURE_AUTH_SALT', '|k9;C;2!bhx)17^e<^{B5Vzkgo-`9E&DX!]lhK _@|WU1frkEHap?zMXg!KW{hWz' );
define( 'LOGGED_IN_SALT',   'nK;j~dL;f3_I0[~*tLp31aMat[1Mrf_Ob_*#_Y%uS!MzHY8J!sJ{_:Q,v!^cPalJ' );
define( 'NONCE_SALT',       'F6u/wt|c%J$EE]O@|8y<Ab`*`wC~ve[E4[IcZ%Z0Hb55$1}=^$zCDg+h>L#vTk0i' );

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
