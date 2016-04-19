<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_IE2<FzQX2iPNJ}lcUuWY?A^H[|t{TzM>`1/Gg4sZ-LVJ3f#^Nud)jpUUg$Bxm:t');
define('SECURE_AUTH_KEY',  '*)&YONa#Tw*X5gqK|/J*~-P,%?[EKzrFni% 81[9gY?ztV2C`rz(:]vLe?~TXGK%');
define('LOGGED_IN_KEY',    'y|eU<#4tR,.YBs.p1iPdLCG2)O0g=o$4P2t1d5ElY|#pcPEonymzrI7[f9-IX>)(');
define('NONCE_KEY',        '+yQ`rnWpXH0wP|Qwh9JKK!sMx^IwU]zm/La^6[gh&M4xBx[oJE@soX%c9dw#K}g[');
define('AUTH_SALT',        'Aj)fjqjghpp({zzeG,[MmV%m$<|R}jLY[l e[m8:-!dAXL1|ng(97)3`t;<]e1s[');
define('SECURE_AUTH_SALT', '8N D&tca5Ax)/?~&] ;:[WMO%gWlusBeP;T+8b|3]L#`&R;2+Emit`$G`x>(+Ypp');
define('LOGGED_IN_SALT',   'E{,4c=PYP&mhlcG<T/hi#$@4[@_?]?DXTa{8(TjL&viWL81]:6}t:eJ[AkHA4#%X');
define('NONCE_SALT',       '2{38DFB[>Ni+(<X@yZ8]Off_Az;V}MdQFR~Dam{WffzOQ:<y-^(=}r/!jY4BhRT.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
