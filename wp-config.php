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
define( 'DB_NAME', 'auto_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Zzy&GiUU=<{pZDhBV9H*r4WPM&~f2+3ga%ZP6!O#j+=(I_7;9o-iC>!O_vmn{zfW' );
define( 'SECURE_AUTH_KEY',  'J}Rt:HAw,a{?|xY_&j`5x52mw*Nbmi8S0_8N};@?Kx<=vVSB6dMOV&Glr%+J$9F!' );
define( 'LOGGED_IN_KEY',    'TzlBXF0d`IZ8J$nk&/9AKiG;s6sH*,FnA]eUkAr3ijP[Jh7LPH_7js^O]=cE@XNg' );
define( 'NONCE_KEY',        'A8%GKkEy`Vpv=|M)!YyafTEMnhy[JAcQjQS|!5<q+O!|t|<})@u$b063?Iv[>CFZ' );
define( 'AUTH_SALT',        'RN?7iY?uh,Dz30Q<At!nSEaZ8JrqWNCCZMQlT^HTF9uRgZOa%.HLh;5JC05~!r8B' );
define( 'SECURE_AUTH_SALT', 'k$f#VS^/C_7ht5I(Bf?&Zx^bZ_q-QL[)A-%TUcsl}A4Cvd]``3snvx+Ny+[vJ?oI' );
define( 'LOGGED_IN_SALT',   '08[}~I!`Pn}aA},yX6^!]5O%O7>}^KV6h_5TGb^H8Uxjp9*gi;{JP7w)}erTM0CA' );
define( 'NONCE_SALT',       'zB4!Lm2QL:}r~w_d]H*(]zVO=8J(3GE&L{*^8rQIy5sX/c`S1I#8y{uk#{IS!UXV' );

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
