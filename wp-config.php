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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elementor-widget-development' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4+%J??]jLuzkW1F0M>:BTi3 n{/5>}%8/8|!tLzo2%C@`96dXedSM*]M!SCrFvpP' );
define( 'SECURE_AUTH_KEY',  'qNyH *TT,|J64LR:^0QP?.h,^eH,;U)3y2q#r]kyrWcv#I)bJOpQpWQ[}R8r+3t~' );
define( 'LOGGED_IN_KEY',    '6wm^u2z=]/As*2=dBWsYgJQJ2W>0/I,$[kuzoU1ws~0<>ZPj!sgHH2]4K,JC)nFG' );
define( 'NONCE_KEY',        '+21BZg6~43mS!q/s03Gy $??.% C,$9xqBAl41U:xr`<9Oz]b+K=iz/p{xg>iq%)' );
define( 'AUTH_SALT',        'Ti=;xbX~&|vZ}C8F%&og6D1KzyM;E*e#FSb&Z#qR=udDQplf?LBK}R/![-4m1itS' );
define( 'SECURE_AUTH_SALT', 'eVA} FS%e=Ef)B<L|6*9R0:fyZGX+.4sOQO};Z}@8h^h/tE>tp^>$d4BK:y:371F' );
define( 'LOGGED_IN_SALT',   'nqXKvJHn68#.S6fPDzy8!W~%E.px,v5j =/;[!(WBZ&n:,2A*yc{B|x+4G0Upzde' );
define( 'NONCE_SALT',       '[+<?[i|#2t_^Pb>0^kj>DJZ34 @+E]_<Np&4CCpFMp)[^6K+_q@RUk@%5c%)QYbe' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
