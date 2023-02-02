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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'S*1@y/0XU;:wHRxle,^v--gjDB.f)5-TJ3Dte3p(.!6(y@@viC%K_}W1%Vo`P0U(' );
define( 'SECURE_AUTH_KEY',  '#@_q7`p8TU+ygmggE?aFY=$`UY(3wV$%R*:t 0~zKLd$|V6!p)jJin[BbkPzA.Bu' );
define( 'LOGGED_IN_KEY',    'H,sMEP /$U7LIbt:Wd01(qimmhX>?[Psojc[QL5;gk-48+lu=1vcOq)@Y=sF}}[?' );
define( 'NONCE_KEY',        'Z(`A)3AY~A9Q@|}feydSZNz!,RZoYU*3&SZWuJx|#@dX[0r5B^]vX|+#.gn&^<:.' );
define( 'AUTH_SALT',        '#y8t^if*h[m?xgadDpjCW~ {[= q^9a8rDh: UbL]ou)Y FhE0AY7sF|m+fv!z*u' );
define( 'SECURE_AUTH_SALT', '9 iABd:n{#qz[_4C.9M}[$IuoC[qK~B:_[(>5vC7+pES?<dNPWj2@li+Tu={JNi8' );
define( 'LOGGED_IN_SALT',   'lUX_C+OK{xyoH-1Jnm:Y#Bk%)&L1MwA@e-S)`f1I+5lWr2YW*aNd;QJRDI|8($x5' );
define( 'NONCE_SALT',       '-geG:vi=t{H$RTvb&xcPS#N(uEc3?]JK,aC5q8P&}IB_:lm[1r=aq/XnRwD!j;}d' );

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
