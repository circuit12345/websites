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
define( 'DB_NAME', 'u876035774_jLHEJ' );

/** Database username */
define( 'DB_USER', 'u876035774_kZa06' );

/** Database password */
define( 'DB_PASSWORD', 'zk7iaSZTlp' );

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
define( 'AUTH_KEY',          'QDH^GKK$!Dm(iLugd7r8C@Yf,V]l8{>u!LO3mOqp>6-Ylv&%(wOFS;,IpIfDqYq[' );
define( 'SECURE_AUTH_KEY',   '8sHkGI{lB2-e(7<SD3o?-MB;5KTNmcWafe1#93GTQTKnu_q6_o<UvSBMzy0nONA8' );
define( 'LOGGED_IN_KEY',     '~EGe@# #3b6`*j5p3rj2;IU=Gxoo.hgXuvoqR;)h#In 9+8C;pU.GVH09qhBjc0-' );
define( 'NONCE_KEY',         ' ,?&tIxH6geXbm9F,rZni7,pE},W)M03LEC|JXnn2xgYK#{i@Fa/J.Zm.]6?|m0t' );
define( 'AUTH_SALT',         '-G!6[Q(PR-!0j1zMW(t`/tE0??9J$ojXzA5ZC~&`jsjhbISpaSdn?UU0%7f{n(5G' );
define( 'SECURE_AUTH_SALT',  '6y^*iaGha9;M]TwB&oY{rQ0w@~)hEC|0ywYbB)Na#rMP7an%eiGMdKO|o5#td^r:' );
define( 'LOGGED_IN_SALT',    '8NVXNklWM+w{I*Hu(*0M*=pFL)n3n0A2?1O51G]z$,UYPOB=z(fk|-P%^+#O5`nt' );
define( 'NONCE_SALT',        'LqC~s[N,}R:*ulT^_=x,+?gXz^5f(^^Gne.KF*gM9Z6;^8ch5=rpH%*FqiA=6Gd6' );
define( 'WP_CACHE_KEY_SALT', '?iG[ o=NH6DLTkdN40lE[~lzr4Y`BYljP%]!]k}&OxBwH51:/FjZul+!VADO<q)8' );


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
define( 'COOKIEHASH', '4a41048d0f0baa1682c3fa2cf2bd5a11' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
