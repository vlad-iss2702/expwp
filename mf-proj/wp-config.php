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
define( 'DB_NAME', 'wp_mf' );


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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M05Z%tn*7`f%@gG&cW7VK{mfK@36N*!kwk1sbWR,<LGuNnp%/vke @&AL2(JM-rL' );

define( 'SECURE_AUTH_KEY',  'C7.2|@Xda8#aD^^`ppv*=X&-l<|]T4KClgT%KGx!GA+1BmL-3<@Z9/o*JB,Lgv7N' );

define( 'LOGGED_IN_KEY',    '!MZ=[[Sx$q8yCs4X$,8nco7d,|e+O[kU=d{e]v&p9*Nu]/X^iCv n%paP<s&SE*v' );

define( 'NONCE_KEY',        'N+LNSl8j@*-gLq89%SWS@xseyr;OoTu0}x!3zjWz=?HMyvFmstl4QPz^4C04<miC' );

define( 'AUTH_SALT',        'Bs>}:qzvWw5y:/-o}BDp<^o2lN0FpTI@ara=YAihN(mlo&N@~#fUbuU&?^pw#&t0' );

define( 'SECURE_AUTH_SALT', 'Ib!hTAU%nPgkWG[H9AxUNh9 AT]^ptjKOr902Y}2=1q?$ef?cvn]1+4zbS O3}Z1' );

define( 'LOGGED_IN_SALT',   '`4>gkK WLHh2IW-?OytY|t#1-5`{T*jc;W4fqN6;Rr k5`} ^O}pMQ}I, %K(nJD' );

define( 'NONCE_SALT',       '$6n!wuAc2%^.T?xFM9#Y1cVCok?)Cj[iSak{D`T>>Gj0&r(_1u[d~)Ys+bZwG8~Q' );


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
//define( 'WP_DEBUG', false );

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
