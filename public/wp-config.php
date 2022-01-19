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
define('AUTH_KEY',         '0Uhfmn+qc0q5fXCLh8xVeByGPpWwCrOg5t3ZObfd+/iD3075vaSgQikxaX1e7e95fLlEwIKjShMOD1KgqCL3qw==');
define('SECURE_AUTH_KEY',  'PeWWHiIeDx/uI4EfrkqxzXMmKTCM/Ffzca6uNt39mKTEbKtqrku5XO5x5VFHn8or8N9jj6F4952s1yAKAy2f1Q==');
define('LOGGED_IN_KEY',    'l1hKiWhkIA2UbdwYFGk2h/COIR14m4QSzahCi/Hj+Qjy3l/agmnCMJBfxXFd+Pl8gLEhX2yUryYxpdNmWG3VeQ==');
define('NONCE_KEY',        'mAL9JxLcUjnrCMrvJJwnj4GveNhavY0k9yPHLbgBKnvqBzVZ6iSigRb7PQ+KhXyOWN1pQeWzCXTnvno7lk4bGw==');
define('AUTH_SALT',        'w0pLYMtBcA9QnIq0k+Kc1gkYVcx/PoOzyBQT4a+f6wclPT7H0NmflhW/SffPVSnEkTfBJkhZKo2yQEFHoEu/Kg==');
define('SECURE_AUTH_SALT', '/eZAd3j0v8cZxRQcVL/pYxBwlhu3Aqi4Fl3jP9bEVVPbDE5F/19G+EurGgSstY2KwchZDQXsVGG9rnM2CprraA==');
define('LOGGED_IN_SALT',   'rux2lzreZ7DJcP+DlJ9Tg7c38mpRBSrCmgCrMZbkdJcdZK371iOf5SGmLyeNvVCz2+x2iAKRFzIeRqsy++fcQw==');
define('NONCE_SALT',       'YYb6PqB21Vd98jOdSl3NNrQD43IL3OgbHbQd/s7sJskcQg4NSieVzM10Bcj/8WcG5DglhwuqCDnOx5qMOHSEEA==');

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
