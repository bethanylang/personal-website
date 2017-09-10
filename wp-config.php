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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bethanylang_com');

/** MySQL database username */
define('DB_USER', 'bethanylangcom');

/** MySQL database password */
define('DB_PASSWORD', 'YCLLr24T');

/** MySQL hostname */
define('DB_HOST', 'mysql.bethanylang.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '990*?83Gr_U%B+*2n?EVU+?mzjScvj?Pv*@9;(PbEq4!sgD3UlMj8bwTL1nfVKl&');
define('SECURE_AUTH_KEY',  'O/gyHqm_`o?oVEu3S:FuI^CKL$j!SnFHB5|W!q_Mb/w`o?:&&^8t!$R2ul!$!OuJ');
define('LOGGED_IN_KEY',    'U$LlRZWJCk29kGAhEf^7P;MhhBTS%G%8qk"XJEvc1?:bRlf!n2|3Mf?Q$(%DphsC');
define('NONCE_KEY',        'i1Ej+S1G%9nFK&nmfOCjzmkrbv1|3WDnN+CMOFWK(X6oza1lq`A"g?T"2kRPW#a~');
define('AUTH_SALT',        'k"H7H~Rx?w&Kt^F%&t(eSNgV0Q60YPctSfR*9zkY#1^Z;$4Y^kpEj$3%Ud;*EKWr');
define('SECURE_AUTH_SALT', 'eSCorb(odT*?zG_dh`l+LHM8o!vr7|PK+wCLWT`AJTm?b^U_f*z#ibN/o%$kq|9K');
define('LOGGED_IN_SALT',   '8D6S8z3|YKDDK?/JNKbjC"o_EoTP0PTvzeGEFk9AEkBo&ABvWQOBWHWi&:_XZi@~');
define('NONCE_SALT',       ':Uj*wuM/3T;8;GiHT+@s#%D9oC|fV9|6t#P"TOhW)D0~"Q:g~eBv@Gy/KG!ozf+R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_xm6xzv_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

