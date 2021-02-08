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
define('AUTH_KEY',         'Y37utmvgix6GxPRp/1/x2goU0ohVId4qiUqY54LqwCYFU6duJOyj4s4c4dETdoonqrvNzoQKvXA37d+8rIKnfA==');
define('SECURE_AUTH_KEY',  'oDw7V8tgMsfsHbNTSk9tc4+uDZTx0uOMvM8XslY1knlw92Rs8jv4Y3AqqqDVYGVKdttbSHTcn5nfqXN78EuCtQ==');
define('LOGGED_IN_KEY',    'y+RiDjXX2g6aG0YE68SbLkBLGrM4sNZhyewDgG3AU03+8aFbt4flT15EG4qmlWKSrNjwsmmKVCkI9iPXcNdjyA==');
define('NONCE_KEY',        'GmtWRofcDJuWM6gkZZUb5+5Fjw8bbaICSySqvSjd6U4hQHuK9xd27XpWwGCgh5nbvE9pKftsNcCHuaMjWql8Vw==');
define('AUTH_SALT',        'm3ofnG1Gd5VoSPRDueu8WdTVkUEMCEzpy1EXVuDD0ovpvXbkIhsUYVHSNTY81nkTuqT2XAiRrI7urQU5TL4oIg==');
define('SECURE_AUTH_SALT', '9jPv1GpFuhkhV6gtOwr1GdX3cCiy46sAz9l9Nedgc8DXKfSG1sgYIj4WLQmp1CpbJEqtXmkN3SXsSWIR1y5nEA==');
define('LOGGED_IN_SALT',   'kv0hjEUvH3Bd8lLiNMPD7iqBvykbotoZS3KD9O8M/gDiuXLAs9MEqkXslbriKmb1Rjj9vYDoUw/6ROFNCeN1JA==');
define('NONCE_SALT',       'PlkZkjyBtRVTSOfZCTCpTU66SUEc/k3LoCO2PRlZqTm5gqZrM7c6J/kemd0YHj4ASOBPb5ZuMLs3d/RYZfrXxw==');

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
