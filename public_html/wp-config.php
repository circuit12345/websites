<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u876035774_4vIrM' );

/** Database username */
define( 'DB_USER', 'u876035774_HcPYT' );

/** Database password */
define( 'DB_PASSWORD', 'fr2Fdklx2p' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '/k2sm,RT9@Q{@H[DwE>O#Xu43dUg`1W-*KU~8J!X$sZ*Rp/Mc+4<eEb`E5nuq7uf' );
define( 'SECURE_AUTH_KEY',   'b0HG[3FJE~~qw]_hZ968$lABcC=~IK:+*nJjy19zmHO4^{)|v6(L!f6/n BNUpLN' );
define( 'LOGGED_IN_KEY',     'w>[+$a!So*8!u9$g&okEBdJR;k|CeK+!e3(=B=(qjSU28?Y-q%HuBn65EwtarHDM' );
define( 'NONCE_KEY',         '+w*~*79SX_,I*IVy 0~K-UU!;0AXTEA~j`R[&1`Ad?I/#&WGm7zl7)/[E=l4@2#:' );
define( 'AUTH_SALT',         'B4?:s,%V)^%8{Qhc(/B2WF7Lr9{3w^N+M9[3O:x+UyZN_r6lP0l1WEz1/k;_jm {' );
define( 'SECURE_AUTH_SALT',  'M{9,$|1h8g/n*WiP uhGcAx;|f4eNWh^[qElb7rIZ8}@a@t.NcEZHsK:mu@z)[bT' );
define( 'LOGGED_IN_SALT',    'JK7g^1jfFI#L,kPCWfgy27$RLPxINX%u1{>M]}z!zEQZc8Sk,udKP@Ul5;/@&ZNX' );
define( 'NONCE_SALT',        '+2>k&**RR=}TR^QXf4%q[#+aR-#.(7ZuA5s~DVOLvRTJ7`%Y2ha= Oby >1xf{oY' );
define( 'WP_CACHE_KEY_SALT', 'v_n<H#H.W.2dKj?kWc&#k4S>R_@bFLrli|4>[WW{Z4Pjz94~L63)>V~r`.#p])q/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
