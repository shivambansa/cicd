<?php
/**
 * WordPress Database Configuration.
 */

// ** MySQL settings - You can get this information from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shivam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '10.3.0.6:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put_your_unique_key_here');
define('SECURE_AUTH_KEY',  'put_your_unique_key_here');
define('LOGGED_IN_KEY',    'put_your_unique_key_here');
define('NONCE_KEY',        'put_your_unique_key_here');
define('AUTH_SALT',        'put_your_unique_key_here');
define('SECURE_AUTH_SALT', 'put_your_unique_key_here');
define('LOGGED_IN_SALT',   'put_your_unique_key_here');
define('NONCE_SALT',       'put_your_unique_key_here');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique prefix.
 * Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
