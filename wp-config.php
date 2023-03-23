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
define( 'DB_NAME', 'folks' );

/** Database username */
define( 'DB_USER', 'folks' );

/** Database password */
define( 'DB_PASSWORD', 'Padrao123#' );

/** Database hostname */
define( 'DB_HOST', '34.27.178.193' );

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
define('AUTH_KEY',         'd3n:+2DSNL8UHUFF=-I;$gr+;axIVQkCRs~gx&]fMEc!|?@|/|0v|gM:]F3OfgC|');
define('SECURE_AUTH_KEY',  '!Q -?0X>HeqQgi/kXQZ=4q/`fz+@MnkBE=([{oB[Qc=wC0]3Ua,uN*yDR|-^zUNk');
define('LOGGED_IN_KEY',    'EbCt`-exDR5d`J>pU;f8o(o U}KHY)^=|@`fGoKL)iI/!,=SnVa<FUX`!?ibf<b!');
define('NONCE_KEY',        'o2$i2n9#xP7M1|-~9*J]_2N#Z-P[=R5(<+oH>ua+$[vFc!u|;.Z7|.11f#jwLNyO');
define('AUTH_SALT',        ':cTTYW=tdRymx7}o:=>B)|Yz<T;#cH-+qCe&gJ;uN#41]ClM],Ybf ]>:$%z{|bR');
define('SECURE_AUTH_SALT', 'Ou&299^NOcTv6J|aNVQ|wtAnQoH+gt1(E5T_p{`-Pd}>D12<_|@x+#wYeP{dkoXa');
define('LOGGED_IN_SALT',   'o{$tl?a_$_9j%-S^W$smsGOPseN`H!>dGXw<~+O87TM@3(3DL9vl#d F/J9^l5?v');
define('NONCE_SALT',       'V7ACNl*EsKau2,(4DIgeio2ndlJf-=A)rK`>VRf|W/$5 s^` IU|2Mr(Zw=u:@nT');

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
