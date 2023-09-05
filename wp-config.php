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
define( 'DB_NAME', 'kondou' );

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
define( 'AUTH_KEY',         'ASt9D`a,B!Neo3AqPhDK,qq9p-$Ow8R#y<i#^N8^g]U~d%k:EHdd8!_@?Hdl1yV(' );
define( 'SECURE_AUTH_KEY',  '{57hrR,2IAHS|QBHs:G$[Dv|aDT4G%G%D:r2FV822Dk6:Iim3C|rRK24YUaaOW_V' );
define( 'LOGGED_IN_KEY',    'IvKWxW66a~y.3+&Pk8J]|[zahVw|?qm4shOm98nLlK4/2WP_%sp(-&H*N:RAM9Kq' );
define( 'NONCE_KEY',        't:FUg&8>)ey/i[SQ]%2Mh4p.#K}wFA|K&[ZUMkv~?LQmTuV:Zj9wfK7j/$Wj-pe=' );
define( 'AUTH_SALT',        'cC?<JL9N:$SSF+bmA,t.]h,cZ4:Af0HHq7_AM)o)j:yKJzMIk:OkRdw9*(IGA5wo' );
define( 'SECURE_AUTH_SALT', '!.%j4=Ig}`}Ehp;@Y</V6,Y^@Y99OK@3&H7LljBvbp|JzZX%p{~uuYgjpb8N:<tE' );
define( 'LOGGED_IN_SALT',   'JhSS?hABQos]_.XEm%dHn@}g1z89io&qiwPi=t__Tk?:AOx823jGfbVKH@R<<y>z' );
define( 'NONCE_SALT',       '{Y5-*I[f{X~y;6<@A<v5#_p14lwq;@l(Z7{#S|[*g,~ev0XLi+tM~h_XbRnX},6K' );

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
