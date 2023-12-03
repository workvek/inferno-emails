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
define( 'DB_NAME', 'infernomedia' );

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
define( 'AUTH_KEY',         '464*O92D;dM+C!XKRmV)fcJ^W60=g+q&^3C8nqsIvcVsum*3un/$h9z8Z<8m/0cN' );
define( 'SECURE_AUTH_KEY',  '!d+C_`&KP@9O94?>B Eh](#PKHvYnf46rCI[Uue}/Zu*-Z?6fP8$?k1Sc7>%H*On' );
define( 'LOGGED_IN_KEY',    'tc!MV^sZDnZ0aOs>DtTy[.&,*TpI51>{jC11{tU>QSduNwp~!}L#DNS0e=Dxf)FA' );
define( 'NONCE_KEY',        '[ [#L)c0:`!xraZ}~DrwNU?<r*!OXHcwP},&[q)e!8)1Vq?S|4h04Jg<?JnJfIH|' );
define( 'AUTH_SALT',        '!Rd{BvT56u5;t=:f2MkHt=mJtlOQxUa}Z+5EVI60:6Gtm:qV!q)vjf9zM|dw`|%H' );
define( 'SECURE_AUTH_SALT', ']kP`=.:9tBfm~3nzJ=@G#<vHR>FRN+HRhXm0zgasHcB%{wvKq*eDz}(jp2(zI#Hg' );
define( 'LOGGED_IN_SALT',   'pM[/l6rW#s RTpAgc#Vpjqg]d+>kHKZJC|/)c{L0yS)wOsr&1qi(YkQL9R/LLh~I' );
define( 'NONCE_SALT',       '=^M0y0KhNy/8cI735,~B*(^wZj0e; +?n~kOrx8]AEj30+2+k=7kfBGo!? _f&FR' );

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
