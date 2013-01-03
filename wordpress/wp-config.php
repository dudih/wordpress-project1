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
define('DB_NAME', 'wordpress_db1');

/** MySQL database username */
define('DB_USER', 'development');

/** MySQL database password */
define('DB_PASSWORD', 'MJdBSFB746wM7aaK');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '|)-Uiw=gp2<@9jEd+FxP4,5olwb0.,IzT<?hAN&b-`fq3(S&99-S#9c2s0_F YC<');
define('SECURE_AUTH_KEY',  '|y(l7+zHLR!b@EyKtc8_u~sCM+g[do5RKY|pWN/Gz75Zw#:d`wJi#sW{[#@3,e]o');
define('LOGGED_IN_KEY',    '(++%n(qh76;o@4W3+ucGBwk}<Si,2>&ZN.]iq?Au(lhQ%BRbUN_n<4N -:]IoXoL');
define('NONCE_KEY',        'PVm.)g+-nqAiu=KQK<c=rKo4@#E$JQ6,I]N.M:3,kg?tZ1qb}YkI|w@0ok{)0=9*');
define('AUTH_SALT',        ')YR;e<WIi}`:}hd$%cXa(_&Mk)O[gRj$lf/SL=C.(ZjDel(18E@]AZ9-?Sq9,oTb');
define('SECURE_AUTH_SALT', 'wtOyq8>S*b&YW5&R;Y0|&c=Z3)+:.)b5@Gaes*zDV!Md{:2JLiHkSl+1.DY35Cbr');
define('LOGGED_IN_SALT',   'yk[SyEp@r-#+~++xS)JNjt?{u<s8V^L7:3s2)!l+r!5vb-pHF<][NVPTkQuIiFBe');
define('NONCE_SALT',       '+6O:nP#D@|gsw9f~~J5w`%.//.ghR|JhW-IQVSB{TPkf:kSL[;7XKGc|Q9Pg{Kmr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('ENV', 'DEV');	// DEV - development, STG - Staging, PRD - Production
define('WP_DEBUG', true);

if( defined('WP_DEBUG') && WP_DEBUG ) {
	define('WP_DEBUG_DISPLAY', true);
	define('WP_DEBUG_LOG', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

