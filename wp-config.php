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
define('DB_NAME', 'justine_test');

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
define('AUTH_KEY',         'qHnTGA{g_!Y=3qSsVeRP6&FeR_gQJ>+]V]ZVI<c6Eiys>+c0`W^tSP&j*jEkTYmn');
define('SECURE_AUTH_KEY',  'HDNcZNq~NpL!s9+VcrXqFlN~M%?i93P+?7.)DuaZG,BhB*q+U8k~B&t4b5P}y`$=');
define('LOGGED_IN_KEY',    'q3TdrQ)(_<izJZDQQ5)I:u*5Zuis>&ooMIpR3Fw3dd^pZ*<2R%`gyk@dofLpyn=3');
define('NONCE_KEY',        '$/>kc*82&ZnGn]Z@/sJ^S:%9I4te0]Ph|F+.iJ6p5<B S$oZYxvLQX+0$#-VK~nk');
define('AUTH_SALT',        '_Cz,G|yM=z#1/#3L`^G)MtBXQ]2G&N>kw;B-F]k{hAT+m,&)Nh^&`pk/-gVSxFcV');
define('SECURE_AUTH_SALT', 'tA>>%][4k2$g.1+dia/Ny79t0GXM&,fiXk(5RX@ZZO+]BN)KSG{gnphf<VPobTE&');
define('LOGGED_IN_SALT',   'd-{~s1TS/wN^ zNj8XnCkD)sq#jD&JUgBf[M+6vtliOMPf:=*?^7^6|=S7FzEx/8');
define('NONCE_SALT',       '9^}?8suW;GCOC]w?C`$<mp`X)$&.Ct2Ty^`UP6;-1ucTV|.s~,]0L|6UBe*,R`w/');

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
