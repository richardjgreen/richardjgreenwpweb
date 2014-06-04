<?php

/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

/** Custom Settings to Improve Performance */
define('WP_MEMORY_LIMIT', '128M');
define('AUTOSAVE_INTERVAL', 120);
define('WP_HOME', 'http://richardjgreen.net');
define('WP_SITEURL', 'http://richardjgreen.net');
define('TEMPLATEPATH', "C:\DWASFiles\Sites\${getenv('maws_sitename')}\VirtualDirectory0\site\wwwroot\wp-content\themes\metro");
define('STYLESHEETPATH', "C:\DWASFiles\Sites\${getenv('maws_sitename')}\VirtualDirectory0\site\wwwroot\wp-content\themes\metro");

/** Settings for WordPress Super Cache Plugin */
define('WP_CACHE', true);
define('WPCACHEHOME', "C:\DWASFiles\Sites\${getenv('maws_sitename')}\VirtualDirectory0\site\wwwroot\wp-content\plugins\wp-super-cache/");

// ** SQL Azure database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('wp_db_name'));

/** SQL Azure database username */
define('DB_USER', getenv('wp_db_user'));

/** SQL Azure database password */
define('DB_PASSWORD', getenv('wp_db_password'));

/** Primary SQL Azure Server (North Europe) */
define('DB_HOST', getenv('wp_db_host'));

/** Database Type. Defaults to mysql */
define('DB_TYPE', 'pdo_sqlsrv');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'O<_BwDImT)SQxuBVB]HRgfctwo)7`YavUC7<^i-iIH|H[_QlqNq^RCYq*6Df2gwo');
define('SECURE_AUTH_KEY',  '<O2-$1+K-FDc:+<p?^%N]Q&:zkdv&y)-H4yEO0fh_|fQ_IlVNG4vZ,AJH^`*hj]B');
define('LOGGED_IN_KEY',    '=/c8VIex+s7ANiUyQYH^AmRe=~5!6Z[v _[onF#EkNS]2.z!?2nI$ZHbTvz6%X^A');
define('NONCE_KEY',        'X}+y!O-9<|Kz6`Y-4U !>4o[QK{ZXl/fjXc}#(6weSXNWsmdH:r_uF;S>((mssUl');
define('AUTH_SALT',        'isUq7)|2Jax6+u*fvJCH8h.jL?~9?U1.],ee,qk}reS@Ks}0J-r-r+UDa=VpSaa7');
define('SECURE_AUTH_SALT', '[.}2,CY3<a FI(Mu+yAEd,%q@[[$EIO$B-~ 5,7v:@Q)eKT$_QI.uCZmO=v.ppBo');
define('LOGGED_IN_SALT',   'n0Erw1Yt@+eS@Tq_U-hjrx@;kBOt0Hqwwn~:G+2M>b+%[|NT%ZPJ~6T1Jas@;IJ|');
define('NONCE_SALT',       'tAmX7v=|V&&Y&~fye]_h-Qj6jpTdS=<,|k<}|I+#|~cS8b.jPNA6iL]zL(,h%Y:}');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = getenv('wp_db_prefix');

/** Query Logging Settings */
define('SAVEQUERIES', FALSE);
define('QUERY_LOG', "C:\DWASFiles\Sites\${getenv('maws_sitename')}\VirtualDirectory0\site\wwwroot/wp-content\queries.log");

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

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
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


