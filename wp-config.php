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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define('AUTH_KEY',         'q4P/sFk+87+W7ApJxIV0ZLqDZYsCo/2K6CW/F6fgEOwINZHQQxaSTwpAF4gl8vvpJa0oJiZXcOzvYwJSkj1a1A==');
define('SECURE_AUTH_KEY',  'RqXaSt8iuGW+YoLRHGxcaTNJQqWI+eTka1aSsRHn/Y5MavEuVzmIMzvC4dPKzZumaq9eh7z9qFtAaA6IMqkK5A==');
define('LOGGED_IN_KEY',    'F6T2svc0KP1FO/twu6YL/3H4h4Rvo/xS9bwQbiA7eCZNjVMyaU7d0TZxAgZoF5vdbCYNDlzbLfCYCIRymBDj5A==');
define('NONCE_KEY',        'TLIgAjZ27udLuNKWaieTiNpFLx0/NYalNYxJd1vLv4htb9ssz1vfv9a3nSGc1PXZ7utBpU9EjkmZACvabgJ3rw==');
define('AUTH_SALT',        'BjFHiTa91mormSRa1SwefkSe4M7d1pDJdqI0knc23XtPpmj6RPlf4mC7TPYOrQwGeC/vXM7hhFVVA4mDMzSZ2A==');
define('SECURE_AUTH_SALT', 'zgKhgggGzUzaxP35URT2Yke/AHLfMW1ektjcWDXfhe9PXaCBWYinEcGNPfdB6IYckC34qG1hI6+SECcv9w8Plw==');
define('LOGGED_IN_SALT',   'AlVFySmMy0HjJZzkiBlRj3vNMQKMFH2T1sZOmRgy5lwn2nhSdiiOLxQQvLJYu4YESMqQvHkgJ1QXO2jX/ApvwA==');
define('NONCE_SALT',       'JUyu9zrLQ+IcSf4Fos/AOPcw5VEweITgS7LOxxJE2Gl0pcXiGU4a6buTmt4l59BxL0LTmwARPebqpEzgin4fWA==');

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
