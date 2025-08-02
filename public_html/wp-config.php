<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u876035774_RvNdv' );

/** Database username */
define( 'DB_USER', 'u876035774_NRQQS' );

/** Database password */
define( 'DB_PASSWORD', 'uvc3HFOQcn' );

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
define( 'AUTH_KEY',          'K]`z*$pY+gCdxkp?8 1`v*6x@P5P@;T7Mx9dCOQi]o^7yNns2DClF#&dDTZ#wfE>' );
define( 'SECURE_AUTH_KEY',   'bs;OV?a!>-8CHh;(yC7P:NrEEN(/T0@zP_.YCE6A-Oh$,G)AyRn _1O2k5&5R}s2' );
define( 'LOGGED_IN_KEY',     'exPrfO^VdK3JGog_bRegq <h5EZ^q^*PAdonHvIBZY)7FJ5S=;16=E;%7vvbJMP#' );
define( 'NONCE_KEY',         '<r2A=IBNu:EarT+<RX?NwgXhL0H#/^rEqQdLlhRwGpDHE-Iw$`.e*-vtLm y2SPU' );
define( 'AUTH_SALT',         '1_ag5(OFT])v/4J_ZVVVc?7=llTUWM?[UO3vfhnJ3|V$Q}eZAoH_NMj>vhR`d}FR' );
define( 'SECURE_AUTH_SALT',  '(!X;?_GjGft`3Te,!~9mxfBb1G]l=mMSL!}Au4GNIM9s@_Hxvi#lA/u}MVX@_xpV' );
define( 'LOGGED_IN_SALT',    'm[mo^3D3:^`4dh?Yh6qj7)029-Ey2aZyN=m0%w-G/nji]G5|3-FUFBaa@=Uvj>q2' );
define( 'NONCE_SALT',        'y:[{H%Q`<nVh~dv0[V8xqg5<,`HF4qMI?O~q EQhDzSMULOO3_cTEgyn,][0#^oz' );
define( 'WP_CACHE_KEY_SALT', '<>D?<|gFZPBFB4vSs5X,>E[:88vB_#8S5(oxDZMBbw|hFkq84#wi([x=m!;DnA~X' );


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
