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
define( 'DB_NAME', 'KOJO-PAPO' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'BplTEaD4SY3qjH3RnGJbg0QWNsIhKe7aNL7oqpU4BBSH4Nk8mC9qbTB6rcJVovBm' );
define( 'SECURE_AUTH_KEY',  'v3lRTV6O4nAC5Rn5lcRcRk23bepJvOE85DXXIbJli5NWp2a0ERjl8S0I01GlkPkM' );
define( 'LOGGED_IN_KEY',    'ilYyx70K20zrK0MNw6MISZQIUsZQrzw0Hy1sqcM0Y8ET6avHbGTmppXVR50AxfwH' );
define( 'NONCE_KEY',        '5t3W5JjE4hRRBemMvDfnOFBIuEJZrBO6zBoYIs0rT7Y7mY5EMd6vknbMTdtUWmqj' );
define( 'AUTH_SALT',        'm49K6gSXSy8cB1vuT21PbjQ6S5NnDBmJNiGJKvibCS0cHmp8kD48dI2FwcQO9mOh' );
define( 'SECURE_AUTH_SALT', '6f1yHQebr1SToRUVA8wrAckrBoNSbsgxONQIkH8CnDCiSs3gZX7oR8tvBeUMVtA4' );
define( 'LOGGED_IN_SALT',   'YBBIiEOtgLBz3OutwfNVKrK5aoHgZjvXTI1hSAVF0bHe0o21kvn34lo8Ur4G0cjX' );
define( 'NONCE_SALT',       'c5WEhAF6GJEM00DTqRasvjE8zTb2Mp5lwYpvMOQ2WFutZIF5ZpNUiySCUo2iVThM' );

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
