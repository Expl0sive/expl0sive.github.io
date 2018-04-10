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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'O(YKRh+I@n61wk17~:#gV {)p!OHtgIXzk1{HWD mhqIA1s2`=[iv7OKVfXo(/O-');
define('SECURE_AUTH_KEY',  'tsy#l(A#eI?A$`yaAS@?P,[}cNA1PZUw5E+fcv:;E J25LotwEBkCIl/w pTua)&');
define('LOGGED_IN_KEY',    ')MHDj|YlxQ7}ydi#KLgG9r$}SR{]j/o^wpQ!il.>7Qr2]3D*_EJa^f=hj/ ^.B*{');
define('NONCE_KEY',        '=Q+kK:@2tt=n,`)x(] }o-H$_!oU0brruU$$23|~z9|J<%y!U=U$x=IrHXN.dKfQ');
define('AUTH_SALT',        'l $=t:zips!Y-1~nd)~_$zO?&Nc9EAx)Omg=wu9DP}E^yEvmd:7#6=0BIHf[J=]7');
define('SECURE_AUTH_SALT', '6 L4Nk,X,l5uSdi7q@KnnKfxDXlw*bG:1K]:`z5218!cVK! >bZ#Z@O/P8e+`r@1');
define('LOGGED_IN_SALT',   'b,[1Rd@Dg6@yioW&kOI f+*8qO>i!),MG/)z&D2/}:K<]<FC]<!u)R)l#^SiKcoU');
define('NONCE_SALT',       '^h9nxNK:zzdp-hPk}$%V9QUk:1c&-i4?/Z~b1I|Ka{>-bbbo4j1Jin[R:M?^)E@#');

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
