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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ohboy_ohboy6' );

/** Database username */
define( 'DB_USER', 'ohboy_ohboy6' );

/** Database password */
define( 'DB_PASSWORD', 'ohboy_ohboy6' );

/** Database hostname */
define( 'DB_HOST', '162.241.194.62' );

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
define( 'AUTH_KEY',         'T=e~P+o3uaq&~jk[1$)m.kP0,,9mu?c(d1:bQn-|:(5^4DqU6a5cp.;0N.AqZy)q' );
define( 'SECURE_AUTH_KEY',  'qE1:g(-=`i3|0Y:_S!_Ma3bTVj=sT4~pgJVwYCyqR>I;1O2ksAFTSI2o.A-PKqI&' );
define( 'LOGGED_IN_KEY',    'UlNPug=YKitwWX2J3+R>Ubi pIl}z]<o4#*:bAHq (~*t{9w7pBtP8Ut%qv`YQ] ' );
define( 'NONCE_KEY',        'zD?4[B0TB/<QNLOJLo;8+|)D+jfbN0`$uXfB6 -Yqz[sMwb~munK$,^ie,WqxQGv' );
define( 'AUTH_SALT',        'wi2RFCsklMXS^ejD$l}={8*Z.x7>dG/kVShytA,6U[Co~a$w|=@ij||O%,-zy.mS' );
define( 'SECURE_AUTH_SALT', '<=dh.20<Z@1b3[q2^M]:>(n8fK)fMxYy_oAuQ5 }L|0B%>TkL(o.;~r#l<~|B(vS' );
define( 'LOGGED_IN_SALT',   ']K8o)5|2pgy/7v+;&]UbL3*JKlLdf,2heTS 9A_3tk0PGlR+>i=!F!%[&Dk;[HIH' );
define( 'NONCE_SALT',       'buS&]d!&>2<{546R8SZ~/4N:nq>O$DgkRNrAM<QiI,6Y+SMl<;bAyv++V>@!E%%^' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
