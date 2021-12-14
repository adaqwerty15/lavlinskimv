<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'lavlin_mv' );
/** Имя пользователя MySQL */
define( 'DB_USER', 'lavlin_mv' );
/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'zyfc4943nrhry%' );
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
define('AUTH_KEY',         ':I~:[1lP)(BzRd?-}}.cXdz_/:b0WU85zL9|W1>sT=1Sm5C|X|1%ayWFGo*C=n%z');
define('SECURE_AUTH_KEY',  'MYCX#,W~R-jx0z]@P1`8sEKsV)a,=hdv6>(_y*%%[uc?x,I.xW==D6>E63z%_39m');
define('LOGGED_IN_KEY',    '[0Lk0mQe^H60x[x!gf+[%CoB-P;d*x]oQPNQQ6nGIsD8qLLBB0FvT+&?FyluQ4|c');
define('NONCE_KEY',        'YvKH_hA7QP||=?;-j~h&$fB||y]7x-ZtI^c+[aKH5?(ju(`<cr@,-~&j#TAdW:*i');
define('AUTH_SALT',        '2<P,)z.Alf?gq>^L>v^h=M-C,3G^mH!!M4e##:]D+~x,#R+[lHc$g, 72v+g|.&7');
define('SECURE_AUTH_SALT', '$grf+-n T-Bm4C>o!2J-kZ0~iKky$vYoR-[(YxLf?9YW|54pK%iH_K?rRb-]0s-~');
define('LOGGED_IN_SALT',   '$ YBx[l?4ABs!]%C*@:)).gO_BoyL3OLD=+f:q(XQ+F%eH+IH2hRWQr:(Z(W{[sl');
define('NONCE_SALT',       '<68Frp/ZHeS>:ZEW2H3iU NsKVZqt40f!w|!bGqwr!QeY}x/-&7-7#Z*dGAUD$tu');
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
define('FS_METHOD', 'direct');