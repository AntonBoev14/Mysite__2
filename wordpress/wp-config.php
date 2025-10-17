<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite2' );

/** Database username */
define( 'DB_USER', 'Admin5' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '3Vfw#IIq<>_9vR;D>lAE7<HQN-rLozdWOmax#y$tn~U2ju]|kp6XlAu{)C=#QJ~w' );
define( 'SECURE_AUTH_KEY',  '?c0d4+z5a{c!jg8y%CvrJEc-2M2l_/=[h~zW (+d|Ais6G5l N1GQK[*S/3f*lxx' );
define( 'LOGGED_IN_KEY',    'ZTruHO2ZuO<!Ru?:gFh#J/)4DkH1YM|5owO|]X!TgZ|=@]+(cUl><BGaV-%4WeJG' );
define( 'NONCE_KEY',        'a#-yo+5kqVRnPDkA16oL4Dk&c}y-H!KbUM$bWM7fAnh(%_0Al|XjT44s@8E}l=lu' );
define( 'AUTH_SALT',        'vzmg7~b*iI! ) jJciIeD!;;<~}X9}d8nz=:J46|X]*{EB;h+NU[<dUmaNsAG2,}' );
define( 'SECURE_AUTH_SALT', '<dg9|59-Q*&<YjaxC*MDu}`)%?bTR.rfIoGe?}ki^!#IIT;rLB B<sjBE gC?DFI' );
define( 'LOGGED_IN_SALT',   'y0Va%uG<?nGNK*YVgoQ[;]}O`rEGfBUVn,6jrw`h$7cR%:yhS-J3:{ehW~%r,<w?' );
define( 'NONCE_SALT',       '@9&4M{U(SR<t]bD0eCeXOWh;SBTHS@Y]>K[7>@WGe9Od}{#}}9,O5u.:g.AAKnH7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
