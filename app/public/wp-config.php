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
define( 'AUTH_KEY',          '[aY3Af.`LRN63M.OhaK@!X=qLw6{{}oA{XpPn?Ap2Li-<n-AZ,-V0KLw_n)xmh@I' );
define( 'SECURE_AUTH_KEY',   '*zsXY<-j$xTr|5U)V3%coUmx1b.kgx.&%7RzhTO&cas)//O~CIc#bUOY@]B.LNP{' );
define( 'LOGGED_IN_KEY',     '!)jZnAa%]VP4I(ZK9CU{2(LiI+GxQr&:)ea75*4iE8749JFjz.$G&(_eh?K&CR=]' );
define( 'NONCE_KEY',         '(5TmjF=NM*Sg+;=ewzeWdZX2i1.U$w.IOLm^`wi==SJH~^^U16}9z9l{77]naO?^' );
define( 'AUTH_SALT',         ']Sj[64z-[OH)|SsRuQRZNXykhN-O<RS% UOWhYCH J]w3Sp^)&8!i{{?;h$^:.9B' );
define( 'SECURE_AUTH_SALT',  ',B,`nBTe__M3T9=tR&/~4$!%Gb@XaP/7628R)WcN_TaZ-|l5z@BWPhj0V{sd:0Hi' );
define( 'LOGGED_IN_SALT',    '67^^|,aPArA~@rf@Z3gyZlmD.=LBLO>kClTq;2Gs%h?]CUhC?G`O^_q=u.*aX3wk' );
define( 'NONCE_SALT',        '-BYLw/+tAT<0AxlYM_f7qb|_4Ng7@[kwIG4vjgFXY<a^a@S2*[]RI)Pm6j8*pDd$' );
define( 'WP_CACHE_KEY_SALT', '*c*OZKB?q]NdPr{LN0_3-hd&]G!Bx?3<nQdJt=ZM!/Z>]L2u0R:$)Sx#KAP`l2v2' );


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
