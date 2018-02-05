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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '7wrparhPTyXlcBvq8tp8xzKe8Igt1p+2grIZvbkZyOaGPZFztrE9Wp+kjKyjdnCckgm93V5uInezohHfRp1zCg==');
define('SECURE_AUTH_KEY',  'MjZ5JMikDRUFlYrHBIEf3riQ88e8LkvQWB2wrbx6S6uigXpyBeR1aNvD+JbQDv/ZhUh0VXdx8xrogGDDOZ+OHA==');
define('LOGGED_IN_KEY',    'SYyF0lcTLNpxy5d5hWYUY98lf2uNjxsSxpHPQc2pptYvCWy/Hhaio78OBkV/lad8ADmrgwFUxyXzmGY0oDntkA==');
define('NONCE_KEY',        '1XVe255LarjY+U+Y15Zrp2wwoq4Srd7I3FL8oMCYOsfvx7Lb8VJ6VyUzppPzqslpA6Bsr93m/aJskoIbMNFooQ==');
define('AUTH_SALT',        'WuQVqNsewbvCruC87I5igCi15K6SYv5Og6wpbe07HRnzepmpjRxlWuXB3GxYe0XjQoc4Ut6JfTu7weKHxDlpTg==');
define('SECURE_AUTH_SALT', 'JSMDRWkHNfVogZ6lI+w/cefN/aixUsFr+tBF/BHAh7nou75JfWFbvLgrsHhv8b1+tTUINcxtbQQ//rYz2qFpnQ==');
define('LOGGED_IN_SALT',   'wJPyfnF4VpvOSwhZZ22M+jGo5dOYxLDUjEq/IMVbz8IqzVtz32pB1f6hrh71z7FRJ4NhOQrraXN8qcbdeZVwSA==');
define('NONCE_SALT',       'KEOqIJNsZttJzNRcCIiQFMt1UXtLYhX3o5T4Mui8CYT8uMMk8uoksKsQxL7NJyEiC+B25SMJXhvObWUMQ8XW4Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
