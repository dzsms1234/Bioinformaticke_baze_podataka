<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ExampleSite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U$pE[OPW|M(-bo(2]xz?qLwGy]4;44=*.iv6-GoN,=DQ;3mg8]dleZpGKL#R*>*2' );
define( 'SECURE_AUTH_KEY',  '%)kiycpvb826o,e/({|9`6Is(c3|kilD7-$aL&ao4h</[T-pYru~UNtnoaG}(l0H' );
define( 'LOGGED_IN_KEY',    '#3eR{gRRQQ*4]aVbUvhA3n@$kag2Kl~!]s3,GiudjAYrtF>wU]?t9av>/l}]H4J.' );
define( 'NONCE_KEY',        'W!gW+9+(:;K8fTj9N*{KF[G!!kypzqPS+H]XD !N)O*M5Pvp%ge^w.@!wdirOWS=' );
define( 'AUTH_SALT',        ' qOf2.<)l?`2,UT*{?#_$4(_rA7QkvJUO~z7EkVzyF:fU4<?DsR^DnH7*hp9B@c.' );
define( 'SECURE_AUTH_SALT', 'U<HVC~OQwj1*xn@H}?M 04*Mi8~{4L[gcVCE^SGk4qPDV*JJOXAEit,Fw3=_@lP[' );
define( 'LOGGED_IN_SALT',   'Pz|6]t|0JVEP50N,h:[?p2^@/}%4+<o*1|^X}Bh$SL%3,Z+iXd:JXGzci+;^s=5Y' );
define( 'NONCE_SALT',       'NI-G*cRQTXt>aR Xo7R6JB+AP Ky`WQ$~c?;2h!{q@F}a?lP~8{Ol#f71n#jIOQ?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
