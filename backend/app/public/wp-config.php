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
define('AUTH_KEY',         'vWfkcH1V9eFVO1T2EE26LYX7QWRDgwtB/2BBQGgRjykiRTHXXp72cm4Ll+BzBxxqGiJtDe0ILnAQfcqxDQti3w==');
define('SECURE_AUTH_KEY',  'Cwwf556Yf8BeuYQ4Mhnjw+cqu7lybJ+r5seAto2DB0lCKdg0HmMpQTsRm3fEZyTmk/2tJUD1xlHKa3TUu9veaA==');
define('LOGGED_IN_KEY',    'MOhcH3usFBCZLOjpBAEP/lZKzrdVg5DyvR5ISrKzf4IELanZCyHhMcEGw1DF3GXbKbGhdBr6oaLJuPcK0iI4iA==');
define('NONCE_KEY',        'tvaiMgC1A4GVx4VYr5pGUGo4CAdnQFwwELR/ng1ferJOhXowBnVuyn5hpcZbVWscaH26cE+6Fr8nuz9LpZ9jlQ==');
define('AUTH_SALT',        'PUbmLdP+8Q4gDiWx05/hwnDhVselaWc5mNi4lqL2buny4/cFboRNu3FKmDBFjqoArKEYilmcS+Wi+FyG8THTZA==');
define('SECURE_AUTH_SALT', '3iEQ3qgZe1ZYu1GrAJvT7qLN4Ck3fGqE4SI9wr2noOPiqB/6laHUxipa36KoRuf6nPE+idopuck9SKRqwuAkFQ==');
define('LOGGED_IN_SALT',   'tyUIF2uhunfxpuuxblOY1jXahWfa8bxCrEmsicIDczFPhWOb5Zz6NjpXogVGbm/b1N/iI5G40DQpYuXqK7/cUw==');
define('NONCE_SALT',       'Pl2E6Uok3+N+4VKEu7MrynB+vOOhxcYP69xU27+35iSJjSEWCeuHhKoB1mAKWSwl1k/vu+wnhMBndcCTIIGqTQ==');

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
