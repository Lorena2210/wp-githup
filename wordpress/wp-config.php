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
define( 'DB_NAME', 'Lorena' );

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
define( 'AUTH_KEY',         '+k/:Mr)gUnbd#f4JX9-;yw)F.,fyr62`ED?*&xc0qD2{<*m%(=<gB`({n~]@Wz]I' );
define( 'SECURE_AUTH_KEY',  'wyOy_2]O6fl,kRMpsir-<#-tN/>z9PqI65x(sI+p59wFd%zbBJ]|_x_<Is82:(#!' );
define( 'LOGGED_IN_KEY',    ',]6hzKiDp>Pf[ej[<[FKrV-W6dCv5{s~Amww.Re$]gQ4o@VAH`~)1Xg08W)CxMt$' );
define( 'NONCE_KEY',        '%hE<~w1Gn6bi9b7joB08:1Be.x~>&+<1vq&i[wW%,?MX`jBafV_D$Q5:w5MB4e&(' );
define( 'AUTH_SALT',        '@7#>^* g;rmWYstCMaZZkPhXs[O=A1L a9q%fT&!O&?Qaeli03^u qO3D#Vb9pW~' );
define( 'SECURE_AUTH_SALT', 'hbwuOM%d^-U>YwvG&%=j[;**%PF-W)6Wmqfb@2;;%Tj^T%%Vo+aB]B,-W fu7M.0' );
define( 'LOGGED_IN_SALT',   ']Wy*;Ag GQRvEAi;R:G,AQO.FLYvfi]xx4U%noiCve1Z>s`+<23:Y<(X:J ox@H5' );
define( 'NONCE_SALT',       'MA1D`xAl3qN!WEarAg5?E`g,:n>H3`DG@l25ZTv9Ts?7jo4<1`F]8 5(F#lBV{[1' );

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
