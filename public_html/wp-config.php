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
define( 'DB_NAME', 'u876035774_LrAhH' );

/** Database username */
define( 'DB_USER', 'u876035774_iANsh' );

/** Database password */
define( 'DB_PASSWORD', 'EvxhNcIEfj' );

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
define( 'AUTH_KEY',          'Cx8>nvML@9mBNn8!ik;+c1X/}fYd4o[~IjVEu>kX:hzaH C&?y,fzn2j5[/Kvr_K' );
define( 'SECURE_AUTH_KEY',   '@SF}EJ@X)MR6P:(73seHb8p:!.]cvKU_!yN.gC23lyK0aV)w?9N*b6*mKM`o5&Dr' );
define( 'LOGGED_IN_KEY',     'J1}ZX71ajSuXd/Y}LiSj?s}bd,>zlNe>03m,+~^]1d,.M4dnn]]YRvdxM;/MD|zl' );
define( 'NONCE_KEY',         'A@JqNlJvuUVmH@mV:nW^7aj*T@I1^4|?bXi:paE=./__1,*QA]5CH!qnjaW:P]lr' );
define( 'AUTH_SALT',         ';_U0(~:}XZd9p5.)2Z/pT!Ne{prLHCE6 &sl2EnBp7LYfOZOGPjYH<nWsqi];A@!' );
define( 'SECURE_AUTH_SALT',  '%,5 e*oTH&{Qh3uiBQu,Wf6/R[J8e_aC7(x0tmHUrBc|j#`mJ(:py8C~6:jR4rDb' );
define( 'LOGGED_IN_SALT',    'Ni1`kFmCuT+A[pBo7|*;/2iYvW0,Pdzb9`)*Vu~{&SfJr<@UY?c1]E8B|{T 9@kd' );
define( 'NONCE_SALT',        'dkK{A]orYwPzaem8xQA:C]YXQEW~c!L_Q1 S}b*MCuWq^!r-t0=!bA6IV(U/hR>m' );
define( 'WP_CACHE_KEY_SALT', ' u{cKE4}&&d2c#H{sf(^U?id_PC.na>dbwm7ZA|lo0e)@.c*m}{FiXAkj0nOOe$F' );


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
