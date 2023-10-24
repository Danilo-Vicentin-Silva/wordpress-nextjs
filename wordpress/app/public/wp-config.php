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
define( 'AUTH_KEY',          '4;~7SX(=Vbml>8ZD=#!s+!t35L.FlnFqy] EkTQ[EsJj*N:cwZ_])Rx :hP/5@nT' );
define( 'SECURE_AUTH_KEY',   '^8T2%1^1I[Y$km4oFD<7x.QEmp|X9njC0&dtEmxB$&}OC/eZ)[kIc;p[a>[[vN}c' );
define( 'LOGGED_IN_KEY',     'JH5}rlm[.4w[nz6{Q&Td!Ad,4J5k}eyf5Q..y,DRVvLpOTd$PAzFfM~54/(4NeWp' );
define( 'NONCE_KEY',         '^WebaF{Y8u<g5 W.@*7g <}l0dVq3OsKU?=TvcU*ks+]UC(st$)9(R<}CG!1R^N0' );
define( 'AUTH_SALT',         '`9jqNFzC$1Qyn=$Kggllt@/|@!woao2Z/+V=8G(*!*%,Gx-=ykokC :l52ctt3#,' );
define( 'SECURE_AUTH_SALT',  'P`V*,I ?RVCb]j3s-kHV>$.puo-v?pZN;41[jK}&c]:h]]aovt-%4GD8&A(_<)8y' );
define( 'LOGGED_IN_SALT',    'X<Ow<RytoTN|o/DKfxx!4*1K *qfKnPLl^j7Nt]}!4nL[<CnqaO1&|.@D>@>ExD}' );
define( 'NONCE_SALT',        '33Qt9_:3*!#L$oDXTPoAUKl:KTC0|@uIc,P0$CGCOnG!Ie?9guKm-3LYz0mSxP!c' );
define( 'WP_CACHE_KEY_SALT', '?k]I<,TyKPzu60_.KsxDZyieY:dAMFJ 9jrzV8~FlyuS%`:mVT`T0:OlhJcrfQ|=' );


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
