<?php
define('WP_CACHE', true); // WP-Optimize Cache
 // WP-Optimize Cache
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
define( 'DB_NAME', 'u876035774_ZykkJ' );
/** Database username */
define( 'DB_USER', 'u876035774_gVFjZ' );
/** Database password */
define( 'DB_PASSWORD', 'cigby1W0Xy' );
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
define( 'AUTH_KEY',          'WWMwX)6G$`P.U`OF=F~dn|_H$`xOXT],%Sk9T;D1D=yy9&)p)+0o[&H1c@,>ji@V' );
define( 'SECURE_AUTH_KEY',   'KrreuKD<Hbz fWm9AJx?.Cp`/t:L:9RLT~YjuR]q+n,P/f(d9^5OS#2U[/zd7 ~9' );
define( 'LOGGED_IN_KEY',     'i28owOXejSbj_.O&E+&My#Ez^i|NWr} dg6`;.vZ`eu XcH?F|y8I~znGe<[sezh' );
define( 'NONCE_KEY',         'b9^$YQx|zw>*P@5EuLkH6WzbKhJ[PAL%^[*qRmx8}5yl|IP}eZx0ph|`O2BGf?/R' );
define( 'AUTH_SALT',         '~g;wn^00xE7zaTTU@g@/~dL{1uU,-2 P{*k}YDhZ4oPjnt0<kUg%@E2(NREJsLXD' );
define( 'SECURE_AUTH_SALT',  'Er`xLczr.`_{hBxQ]`Rs]=E>SL=mmO8W^gM4!;kz3m<H8U1O;egn~+k@NYXHOo8E' );
define( 'LOGGED_IN_SALT',    '@V~E8vZcnA=LV%4}zgN#gDjn;G|N|-P:E@WZU2~:5/qR-Hvg,yMTiIJags3W7UxP' );
define( 'NONCE_SALT',        ')&Zphs-yc}X*E@j`uAF/CSIG&O7f5H&LE/b:C ,9dF_eI<Jl{@Rb~u -jc;GA#6&' );
define( 'WP_CACHE_KEY_SALT', 'cIH5tObL.E*03I4^W(jvrE,u&iIj}:dG1*?xfF:gM[w3I7JRm3L4I^G@tKJSd>{!' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
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
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';