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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'n>H<wSuB6~?qQ2}bBE%f@&zhYq][PF 67|t+F`HdWfN2A}P,CQ<M(yaRv}5<.X?#' );
define( 'SECURE_AUTH_KEY',   'Nc<@0Xi5Nnk<QiFg?Bh~-lzJ+OUe%Z]|o^<(RXZ:,f!-f(Cxb;x_r/!L-AhK%W:$' );
define( 'LOGGED_IN_KEY',     'v,}QXXKwbr,#dzwW]~G[ 5X<1Bs=.F##j|4#y@E?yl[pr[qSX$BJx_p(GB38^oI,' );
define( 'NONCE_KEY',         'A#]I9)Y$Hw=vSzqUj|[$>j48;O)mMJ1sRp,FMc$Co6MPWt}L+YqM0oUq+4sb!9J6' );
define( 'AUTH_SALT',         '7_>_afo |X}l.os{Q]!lPYAJ:FhU~#:R_{k>=NqN|:7.q?nXGQbd4t}[oEBTie_U' );
define( 'SECURE_AUTH_SALT',  '{lbO|&i$=8fDCeQA5R}A`i>N?~b0 {aZ@R71fdI@CE{0yY>R<[KLzokCUQw)C5gA' );
define( 'LOGGED_IN_SALT',    'yIX`0r1mZGYUj=J+V`Cs:lbND,lK^Ga#-S;#[rT*2la;Vd(L,<e0pwa5N3mDHF;u' );
define( 'NONCE_SALT',        'iuTvC|Vp;MO}S,VW4Vo@M~MP>.+eN2pvOPh]GJghQoocU/22l=<r<r*NZMfO%jtu' );
define( 'WP_CACHE_KEY_SALT', '>4eUu+)D~pp+0}?[O8KR``(v6=RNEmeFaV5JLD-7)ZV22KTZn~+>jH%S#CU0%#[f' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
