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
define( 'DB_NAME', 'u876035774_0Tp6G' );

/** Database username */
define( 'DB_USER', 'u876035774_qqvR1' );

/** Database password */
define( 'DB_PASSWORD', 'pga6D5mAfu' );

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
define( 'AUTH_KEY',          '.jn?7:<q2=QR6tG!sM.AftmY{hG$Rpd0L]yHT4T?YXF#>Xx{}~_>!(e`UA;X:aeV' );
define( 'SECURE_AUTH_KEY',   '_wM<a,^(pylru~;S4kcHyaBmi[p^;RZ>M1 e6+#%?^{{Uyx,).vo8wVpz!x/b|=r' );
define( 'LOGGED_IN_KEY',     'A]@Nn[&G%)qsc6BVZgV0#l/f;OjwCi]9*?8_n)!?/;0uoj6IeAB.NzR+Vi  ?!x6' );
define( 'NONCE_KEY',         'b?4xHxv+DIgMW&)mz,*p>agi]R_g*-,LqfO:ya>.JaSo{ywe)S;(j0KRNNlWN}c=' );
define( 'AUTH_SALT',         'h}Rd.w]gaQXb4if`3:!ZCo8{8uCImV7$DeOc-_{CkU[!Khe7.IHr^U6o_9F{^tX/' );
define( 'SECURE_AUTH_SALT',  't<uo75~HFO^5pzWLoP.1zq1VX2.qElHRE4TkWy6qyrH9}6B~jqxsi -8,xTP*9_:' );
define( 'LOGGED_IN_SALT',    '$Mh)m8POT<1GTcwZ`eu[:f/^;{+ynlrfP:S/M2bE> 19jdn=iI%/hbH}j^w13c;,' );
define( 'NONCE_SALT',        'v4CcQKmn25iNC{-Vg>j<xj9I<#ofr)-dJsX$2!GIVT*Fu7YZbg}}zC)D#J./v bq' );
define( 'WP_CACHE_KEY_SALT', ';%&.YB z~#)qC!/X}q2}2$wYR~YHJu^@::RRS&c1898~X*26W*;gOUF^ElimsqvZ' );


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
define( 'COOKIEHASH', '3b7af0a83821c64060007347746cbdfd' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
