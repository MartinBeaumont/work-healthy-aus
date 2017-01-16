<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Local DB config
// if (!defined('DB_NAME')) {
// 	define('DB_NAME', 'wha');
// }
// if (!defined('DB_USER')) {
// 	define('DB_USER', 'root');
// }
// if (!defined('DB_PASSWORD')) {
// 	define('DB_PASSWORD', 'root');
// }

// Staging DB
if (!defined('DB_NAME')) {
	define('DB_NAME', 'factor1m_wha');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'factor1m_wha');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'ku93@;A#EVHb');
}

if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';o+fOP-oo8pnS/lD w8i/}XLYql(|PI,(t74D9V<ba7!:s_qtxltSFt06l*Vf=K.');
define('SECURE_AUTH_KEY',  '~:,0X`L+?(=,Rru:im67w)o CE(>Z(%yI8+R_w+0(xX#+|r|-XtE^j|9y63cF{Hw');
define('LOGGED_IN_KEY',    'WeWaK-o42ph]]3h6]*4aj2&+VBlX{@ *)3Nf>(ij{h&f<1!^rpP+cI1.~-Y37( k');
define('NONCE_KEY',        'WsI]~&#@W=5zz1.(6Mb[fkgICgNx*s~ZHH`]9g%f||Sl4%)avYSuXglF+iG`=^~X');
define('AUTH_SALT',        '%+<0j)Q69I|`l7h;Ptc/{ETVx-z)~miB|:C$)|fTnp(K$~hzB]9M+~7IRD<c#`OE');
define('SECURE_AUTH_SALT', '~,l$HqaFf=eeraI|(k}?!k#|YG[-5L0J<w1|0RTQXF7/2y#[`(bH|KoC0%TZHEa@');
define('LOGGED_IN_SALT',   '%|?Q(/2{;?qZuvd.OB$$w@I+eS-lYz) h-Grus`<asek}%G!?towK/`^x+orsB]y');
define('NONCE_SALT',       'LuNNYo0_mvyB_D6an^5xX~2c_gfpC,z@i.e^(B8Ck22V-KX=mdWGkdv,02M<zi_?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wha_wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
