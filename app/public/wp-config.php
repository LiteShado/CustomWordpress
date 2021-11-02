<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CE1nFTmi/NUTU/8k+UheovB+Wny4l8EmIUsBsPmfQHb64t7zXCAx9FheTDdp0DK5Glh4zNf0vrM5yFifYxpAEA==');
define('SECURE_AUTH_KEY',  'DzQzmv9lFN1qXFD4JidtG3TBSM0Hv4gdH5marP11JGNfsm/qRMoreHMpsUiqzapzLP6LZohKZkYu4yh/CCsn2w==');
define('LOGGED_IN_KEY',    '6Y7/vnHliT3xxzSD+DrPSe4vlUn8UsbtRzn4R6HYpvWraF8aU3UCYdBw9UxEBYN/xMBRLL3+V6ymzcU2f3xj0Q==');
define('NONCE_KEY',        'lPfDI0t48/hhWCZUfNTJxN2VZ48Ykz6hFVkX0PxoodpAD4Mk70uQ6lHSkJDy5HEQpMicIekHRwKwRx3Rsmi5cQ==');
define('AUTH_SALT',        '9s4whmE8sPLO+qWNJ6FM3bOF+7bMgyaQRz2x10YPWuaplg5FiABWKsSlF6A8glC1AXLmCOQB1nkgXAKbl6eHtg==');
define('SECURE_AUTH_SALT', 'NH/wxbA1mYGMDMTCl3MMlSCMlkCd//6LRS8Zjwa+8riIz7w23Jpzc8DublkZvzA+DQnp02UlKscaXkauNriXkg==');
define('LOGGED_IN_SALT',   '7q0LSkIjcdRvSD70OJRmWkVbJz7PC/SRJwwV5Jl+AoMQvejLstmAHvBsWOohyKuNyvNOoDy5K87p1c3gkq9U8w==');
define('NONCE_SALT',       'KGhpouAZcjtfhSZkxoE1QzTCjpkcUZrQTvv6YnM1j4LvRZYp5h5ZIXrE8oAPgMzhehneUZ0L5oVBZqqP2kycTQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
