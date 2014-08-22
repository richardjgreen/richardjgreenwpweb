<?php 

/** 
* @package WordPress 
* Testing with Huw
*/ 

define('WP_SITEURL','http://richardjgreen.net');
define('WP_HOME','http://richardjgreen.net');
define('WP_MEMORY_LIMIT', '256M'); 
define('WP_POST_REVISIONS', 3);
define('AUTOSAVE_INTERVAL', 120); 
define(‘COOKIE_DOMAIN’, ‘richardjgreen.net’);
define('FORCE_SSL_ADMIN', true);
 
define('WP_CACHE', true); 
define('WPCACHEHOME', "{$_SERVER['HOME_EXPANDED']}\site\wwwroot\wp-content\plugins\wp-super-cache/"); 
 
define('DB_NAME', getenv('wp_db_name')); 
define('DB_USER', getenv('wp_db_user')); 
define('DB_PASSWORD', getenv('wp_db_password')); 
define('DB_HOST', getenv('wp_db_host')); 
define('DB_TYPE', 'pdo_sqlsrv'); 
define('DB_CHARSET', 'utf8'); 
define('WPLANG', ''); 
 
$table_prefix  = getenv('wp_db_prefix'); 
 
define('AUTH_KEY', getenv('wp_auth_key')); 
define('SECURE_AUTH_KEY', getenv('wp_secure_auth_key')); 
define('LOGGED_IN_KEY', getenv('wp_logged_in_key')); 
define('NONCE_KEY', getenv('wp_nonce_key')); 
define('AUTH_SALT', getenv('wp_auth_salt')); 
define('SECURE_AUTH_SALT', getenv('wp_secure_auth_salt')); 
define('LOGGED_IN_SALT', getenv('wp_logged_in_salt')); 
define('NONCE_SALT', getenv('wp_nonce_salt')); 

if ( !defined('ABSPATH') ) 
	define('ABSPATH', dirname(__FILE__) . '/'); 
require_once(ABSPATH . 'wp-settings.php'); 
