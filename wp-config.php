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
define( 'DB_NAME', 'portfoilo_db' );

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
define( 'AUTH_KEY',         '-3;`O`_rj/IK8DsM%)`v:cqpJ#sp;qIkf=B8Tsv*YNT0eAWdHfJxpW$gMr=3.!E$' );
define( 'SECURE_AUTH_KEY',  '4cz4-6>JB[lC=?:qsf~.I[PGqc4/5%Q@6nN!QDZYiwGoKCe+rd~%+~#/Yh?&!,yU' );
define( 'LOGGED_IN_KEY',    '&`Sx&Cp>!iu~/e_ L<lkm*,-l~)`o>.tmg=XW5SUD<r&d5~lq%7pw5]%DZXvGG&m' );
define( 'NONCE_KEY',        ' )dgZ96.[Nz.Nd^jy5RXpI).=sSaJPEkO<Ex$@(0@NTOt)d5?,HjBsLwA4ZGdRIt' );
define( 'AUTH_SALT',        'U_X>OV/M]g,&`A:S.9a1*o6S}1MN4vg]VW=n 6TT1([1|X*>T75T,js?M2!YD4`k' );
define( 'SECURE_AUTH_SALT', 'H,3#sRYFWGBwHlDmW;*o.F>mJRp!<lK2?9E>p/j719I42:gX&9W?Plk,?~`M|dD5' );
define( 'LOGGED_IN_SALT',   'qnXvrPN1J|/Sm(K;5V4::.ow^w^ytL`]KZ :;aseN[c&z@swjT_QsN-AN{VWXGP*' );
define( 'NONCE_SALT',       'hZ~UR|vbqF^qQI4ZFlAqgs@jez${^|bbh?8F@3<igxq7DAcAcAY24jl;bH>:Fdxa' );

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
