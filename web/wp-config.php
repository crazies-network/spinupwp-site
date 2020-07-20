<?php
/**
 * Core Configuration File
 *
 * @package <APP_NAME>
 */

ini_set( 'html_errors', true );
require_once dirname( __DIR__ ) . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load( dirname( __DIR__ ) . '/.env' );

/**
 * Database Configuration
 *
 * This configuration is handled by the .env file, which is autoloaded.
 *
 * @uses $_ENV
 */
define( 'DB_NAME',     $_ENV['DB_NAME'] );
define( 'DB_USER',     $_ENV['DB_USER'] );
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );
define( 'DB_HOST',     $_ENV['DB_HOST'] );
define( 'DB_CHARSET',  $_ENV['DB_CHARSET'] );
define( 'DB_COLLATE',  $_ENV['DB_CHARSET'] );

// Required WordPress database table prefix.
$table_prefix = 'wp_';

/**
 * Authentication Unique Keys and Salts.
 *
 * @link https://api.wordpress.org/secret-key/1.1/salt/
 *
 * @uses $_ENV
 */
define( 'AUTH_KEY',          $_ENV['AUTH_KEY'] );
define( 'SECURE_AUTH_KEY',   $_ENV['SECURE_AUTH_KEY'] );
define( 'LOGGED_IN_KEY',     $_ENV['LOGGED_IN_KEY'] );
define( 'NONCE_KEY',         $_ENV['NONCE_KEY'] );
define( 'AUTH_SALT',         $_ENV['AUTH_SALT'] );
define( 'SECURE_AUTH_SALT',  $_ENV['SECURE_AUTH_SALT'] );
define( 'LOGGED_IN_SALT',    $_ENV['LOGGED_IN_SALT'] );
define( 'NONCE_SALT',        $_ENV['NONCE_SALT'] );
define( 'WP_CACHE_KEY_SALT', $_ENV['WP_CACHE_KEY_SALT'] );

/**
 * Site URLs the WordPress application expects.
 *
 * @link https://wordpress.org/support/article/changing-the-site-url/#edit-wp-config-php
 */
define( 'WP_HOME',    $_ENV['WP_HOME'] );
define( 'WP_SITEURL', $_ENV['WP_SITEURL'] );

// Absolute path to the Application directory.
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// Bootstrap WordPress.
require_once ABSPATH . 'wp-settings.php';
