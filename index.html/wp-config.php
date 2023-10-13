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
define( 'DB_NAME', 'if0_35198566_wp97' );

/** Database username */
define( 'DB_USER', '35198566_1' );

/** Database password */
define( 'DB_PASSWORD', '4]!pS7yP8A' );

/** Database hostname */
define( 'DB_HOST', 'sql304.byetcluster.com' );

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
define( 'AUTH_KEY',         'enilfeabl6api8ztu0gaujthcpifhjymel7ftrzuwbzfgzn1rxvplk6nyu2ii4hc' );
define( 'SECURE_AUTH_KEY',  'i0vetdpmz46rystpl1meucvjtzzeof95cmisicpasyrckwiyhenyr9gp7cjrobnr' );
define( 'LOGGED_IN_KEY',    'lu0uh7dfnfe90nu9sib5uavhcr0srrlft0yff8pzdtg1azfnqvgr6vfskzav7bcw' );
define( 'NONCE_KEY',        'lzmtxct5devxzet034gdxbmfqw39ngooqydm2cr8rfeojtsluppsebotcxdi3pf3' );
define( 'AUTH_SALT',        'jo6zeorxdlnalvi87wjjamwocto1wt8zvzlowwrfhzgt5v0lj60mqauogdiqh2ms' );
define( 'SECURE_AUTH_SALT', '5z9hnhlzrm3imqepllyzt3ttxzilkkkkfp3elsn7n3hdv94zgjgblulxu4mi7gej' );
define( 'LOGGED_IN_SALT',   'irwaxs3vkxfjo8rmhapshawwj8tk1kb5djxabbcdzpbt9mc4ddrdctn6tkjtnfwg' );
define( 'NONCE_SALT',       '8ya0gylxxvac4ngesx1ntikhdjzss7duwefy5lus77doohyg8wi3wk2ew7tkfjsa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsn_';

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
