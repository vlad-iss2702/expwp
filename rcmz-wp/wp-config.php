<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
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
define( 'DB_NAME', 'u238281279_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u238281279_db' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'db_Rcmz49.ru1065' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NFC[VAxe$~%N=Im*d6;WmBt~yR>0Tq=$7~r,c7@{VKJj?}SQM|O?X{]t&FY[0M~K' );
define( 'SECURE_AUTH_KEY',  'x)U#|lCK+{,_IKrlG@xo9/g%e:Z2h)IGo3fDrfq=t;DhC|N<M*9BX/,FovlL3Ik/' );
define( 'LOGGED_IN_KEY',    '*|nHdG(U_XM`0Xq/g#*;3^K!8` [E9vVCLJ<h~:AzH%;EI920)3$$=pf15c3dvUP' );
define( 'NONCE_KEY',        '4P4M^@rfjMm)$29KI Aajy7c#+GSwxHd]C7Iy^ew[o.%/Ku0W3WWY*.x#o=ZzGZf' );
define( 'AUTH_SALT',        ')T*1F$68C7G&Ypp<5VP`gs*UbC3H4n}=`:=D[{,lt6UCY#&!+hAEh* mvT54Xh97' );
define( 'SECURE_AUTH_SALT', 'dUaWwwB{yiLzI*ilcT:)yC50FJjFoP{3@X~3zp%aXd/L!.1:Ep6xW60|K-jz>Bz~' );
define( 'LOGGED_IN_SALT',   '7C5vA]NCMOk#0,<]LjSV8e,nrx<+tmM$=1<~P`b>loGJ;QYZ6#{LsmG@V;DX*&mh' );
define( 'NONCE_SALT',       'wozO8LdO;}x+quuPYy!O$kI~dX!#m#Vxw^hI0=p;<0WNHQ&%7-n>$*n+tik0iSTw' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
