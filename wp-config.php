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
define( 'DB_NAME', 'hjpuzyed_wp320' );

/** Database username */
define( 'DB_USER', 'hjpuzyed_wp320' );

/** Database password */
define( 'DB_PASSWORD', 'G37!A1p[SW' );

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
define( 'AUTH_KEY',         'k7ienckdgtxauzmntr5tcdyfknwnsqxac9jzlz3axsub0sgisuajnchqgeetfdsj' );
define( 'SECURE_AUTH_KEY',  'eynkcjtq85ut0ab9puxejwwblfsbjuycdfmbpjkqhbigflszxfvrupli1ltxornz' );
define( 'LOGGED_IN_KEY',    'hvjt5muefu8yrsgvrjtrkp3rr9cqyt7obw1bvgpqoohuvqyshgkyr2vhsnprnzm4' );
define( 'NONCE_KEY',        'ope99otegalttew9y69t816tutdidjj2su6xsdhqgojvjnr4gcrsqvpmbtyhkviy' );
define( 'AUTH_SALT',        'oijeyew6opi0cys2drs4ehb5uppfmdrztqgh2mxenqpuvkzlwap2b0abqv70ikal' );
define( 'SECURE_AUTH_SALT', 'kciyzwix2xamezv3ha7zhe7fmof2gekefbkn6fi00kxoki1jjiffiodzwmkkgg3x' );
define( 'LOGGED_IN_SALT',   'is0b8tbromz9lrhqpv8spuknhudl475aehh5cetuyq42oknml35kj303elldszl1' );
define( 'NONCE_SALT',       '7pnxxdogx3xnulinht5gixkrd74oyyg3whef0mavp1r6zircgpcppen80l8rhewf' );

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
