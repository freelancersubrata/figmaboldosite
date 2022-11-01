<?php
define( 'WP_CACHE', false ); // By SiteGround Optimizer

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
define( 'DB_NAME', 'jobsite' );

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
define( 'AUTH_KEY',         'f`3TQi,*K9t3Yu#m)1hcw5NEj%Xn*GFDR,AD<S[MbH7Y4^*h%odrP3pLKCd|r[k|' );
define( 'SECURE_AUTH_KEY',  'XNqNj<30n Kwzc] cq25QoKfLcD 7ieD HESRLKFr-@0x!k<22MrU6iM:dS:.XwE' );
define( 'LOGGED_IN_KEY',    '_r6%k^^zEnrxHKM#rVM=sIKzM,*MR dE^SXg%#*s?jT^?jN&cUvQOIl/.A$j)Hav' );
define( 'NONCE_KEY',        'jJQX8i^KiEt[&u(V;oSE,!%Iy=ct|3:Ol`nCNeGRzHHg|*GEQsKHO5ngkWg7:~X}' );
define( 'AUTH_SALT',        'ayvr|7BcGyt^B%W( fn)[7x%Qg~n!sY[4MIjy];_4H-D7_:9HJmO:xci4D30#U[i' );
define( 'SECURE_AUTH_SALT', 'P[50Xa%z 5Vp-Jfx!H=t4GZpOM~l&keIMx4fH: IO#f{3S8m-,X4NvqZ} _~3{Q?' );
define( 'LOGGED_IN_SALT',   'X&.mvOpm9+Js}$/EdnO0H#0DHg5#mCW<X9ANyPVWv|&eO|HTPE>yqgNm</+^Zq0:' );
define( 'NONCE_SALT',       '8UiMFZM.)aC[i9_QvL+xf1Y9a3vWMhzPFz@xg,2SVVYmYX{?>QhjQqDCypt]EQ/n' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
