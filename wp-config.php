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
define( 'DB_NAME', 'wp_professional.loc' );

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
define( 'AUTH_KEY',         '<#` $PBb7 sx@2:M`x:Z-}bUUxEsLY$WoSDhvV5]zFfl!S7wYS4^<E0~Cs,=G?]v' );
define( 'SECURE_AUTH_KEY',  'lsXa;95m%Qk;dc6VGVi8k$:j[HK9uAnk202bAU2M>G=Hq~*xz}3]yM^EeODmn<]q' );
define( 'LOGGED_IN_KEY',    '|O9qR,3,6a`M]8>1*3X<Bp<q/2 gQyJkye#(PjGMS+kzUaj28@)Fku|XwvcJB55$' );
define( 'NONCE_KEY',        'aED_+TzqlhkBy<;1$(Ib2^~Sf$b*YfD/[iks!HA^!:f%_EclTa;`u|*4D6@uik3a' );
define( 'AUTH_SALT',        ')(*HgI;2WsgP3i7]_7jM@oYg3f[Y$b*qa!*RJ.. #/lTm&z|Jx6,PS]PHJD;`uP!' );
define( 'SECURE_AUTH_SALT', '//};G~$h?]6kM]AB(NF|o:6bz[AVt`k4Y,Vk68l+O.vyD Yq{{huX+*4g9TJKAW-' );
define( 'LOGGED_IN_SALT',   'hHlt6t `u!p^AbXdp/_R;<jLJiEKXGn!Gl<K6 }!ZQ6Az5Td7!4#vp3b,%7a0f-%' );
define( 'NONCE_SALT',       'x-9w}Qe2uwl[2Qc&I;OOA^|wH9bqY_VnJz%qk!!LdV*LeF;<(ZQF+ e<iz#rd|q)' );

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
