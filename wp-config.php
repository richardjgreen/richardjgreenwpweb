<?php

/**
* @package WordPress
*/

$site_path = $_SERVER['HOME_EXPANDED'];
$table_prefix  = getenv('wp_db_prefix');

define('WP_MEMORY_LIMIT', '128M');
define('AUTOSAVE_INTERVAL', 120);
define('WP_HOME', 'http://richardjgreen.net');
define('WP_SITEURL', 'http://richardjgreen.net');

define('WP_CACHE', true);
define('WPCACHEHOME', "{$site_path}\site\wwwroot\wp-content\plugins\wp-super-cache/");

define('DB_NAME', getenv('wp_db_name'));
define('DB_USER', getenv('wp_db_user'));
define('DB_PASSWORD', getenv('wp_db_password'));
define('DB_HOST', getenv('wp_db_host'));
define('DB_TYPE', 'pdo_sqlsrv');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'O<_BwDImT)SQxuBVB]HRgfctwo)7`YavUC7<^i-iIH|H[_QlqNq^RCYq*6Df2gwo');
define('SECURE_AUTH_KEY',  '<O2-$1+K-FDc:+<p?^%N]Q&:zkdv&y)-H4yEO0fh_|fQ_IlVNG4vZ,AJH^`*hj]B');
define('LOGGED_IN_KEY',    '=/c8VIex+s7ANiUyQYH^AmRe=~5!6Z[v _[onF#EkNS]2.z!?2nI$ZHbTvz6%X^A');
define('NONCE_KEY',        'X}+y!O-9<|Kz6`Y-4U !>4o[QK{ZXl/fjXc}#(6weSXNWsmdH:r_uF;S>((mssUl');
define('AUTH_SALT',        'isUq7)|2Jax6+u*fvJCH8h.jL?~9?U1.],ee,qk}reS@Ks}0J-r-r+UDa=VpSaa7');
define('SECURE_AUTH_SALT', '[.}2,CY3<a FI(Mu+yAEd,%q@[[$EIO$B-~ 5,7v:@Q)eKT$_QI.uCZmO=v.ppBo');
define('LOGGED_IN_SALT',   'n0Erw1Yt@+eS@Tq_U-hjrx@;kBOt0Hqwwn~:G+2M>b+%[|NT%ZPJ~6T1Jas@;IJ|');
define('NONCE_SALT',       'tAmX7v=|V&&Y&~fye]_h-Qj6jpTdS=<,|k<}|I+#|~cS8b.jPNA6iL]zL(,h%Y:}');

define('WPLANG', '');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');


