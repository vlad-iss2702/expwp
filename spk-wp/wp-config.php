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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_spk' );

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
define( 'AUTH_KEY',         'Ioud;ia3grn%zJkkeHd{LT.+j.O^E*@sVpf[c{cj|1*3WEODI2s}7.G>;}@hyO}!' );
define( 'SECURE_AUTH_KEY',  'Ts9:!iw,v~w<r]c1E/6sP71hsx>&#.QQ1dc#s!cC%i%lpxHg0A{?Cl+6 V=_WB0e' );
define( 'LOGGED_IN_KEY',    'VH+PXJ8hRwzz/P))&X+> *<KfnyEG_rF+$>p<V7]&!E*o4BkgtTh}:F0|dD$tB[P' );
define( 'NONCE_KEY',        'PC.pcO>pslQZ/O,@|rZ;UN>xfFl{EG]cNrIPw/^)~LN;9CCyToJt9hWzCN{=xzDd' );
define( 'AUTH_SALT',        '~y+ica-:17~Tp$[kh5J;1>qVc%a]l5SyC#.0g>Cg/|LP1V6UQq*.WZ,8%&D>(Dl6' );
define( 'SECURE_AUTH_SALT', '%srg{_MnDTO.N)aiT6rd&43d+N#U2$UjBlD|b&]taa=Ib;E;[!x!SqcF{-2B5]gt' );
define( 'LOGGED_IN_SALT',   'FP_xryzGEKZTYf/]?lt.DEfUw$3tv`6pFE-.do~i904u[N`?3+2zPx5$9WjjMDBr' );
define( 'NONCE_SALT',       'Gr)P`}nuv3ziUU!k*9H{c83lsP)KDCcJiZUQ|aTIk[XN&gCd$(ZTovtmp5+@)5Gu' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
