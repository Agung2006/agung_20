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
define( 'DB_NAME', 'agung20' );

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
define( 'AUTH_KEY',         'F:ghZJx`Mqjq4pH7d0D;Ha_:W!Qbrp=R^LH4LQg6e@A_+O9TtV+I!%&nq<:pd={R' );
define( 'SECURE_AUTH_KEY',  'Oo-FGlw22F=&X+&,rRU{WyT$b*{SK#eRzp/U7y_bbCu15}DHrA7~&HQ5gKa_xt,}' );
define( 'LOGGED_IN_KEY',    'RV::$pgu]O|Yg86Ds^4E0>PRMps~{Fy$W&4,,C^ dXh[#@KfHI5NLPOmE7,D=GV3' );
define( 'NONCE_KEY',        'B,-GuhzI[dXqU%>-5K6n`DYhDI:pad~QYcf 9_Qa`~Qw!:IPABxJ|WSSR@Pr`enz' );
define( 'AUTH_SALT',        '0i>WZU1cu}VSsLw;atA@2GeHBGFv2&I:AG?$3Q%8:^r&kf}{R+|b`M_po5uif& k' );
define( 'SECURE_AUTH_SALT', 'ei-0=;mW]Qjgyz!BYlbPXHa6I##=vL5B?QprzE|@*+I#f<UdDBx?wws4J%-PlKX0' );
define( 'LOGGED_IN_SALT',   '47{IrX_82x[.$-k3+Q.A2l_G1.c0$z{qse$d=1rN*VXxA`4V]JvL4tUR2:v%^r@:' );
define( 'NONCE_SALT',       'jD{i+w^:5(/]%$O^6^E)W;XVSyTd&_Xqcw2!VdtPhpMsFynO.~B?~BL:*W>JsV,5' );

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
