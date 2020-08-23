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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'massivemarvel');

/** MySQL database username */
define('DB_USER', 'caesarbonicillo');

/** MySQL database password */
define('DB_PASSWORD', 'Yearofthepig19!');

/** MySQL hostname */
define('DB_HOST', 'mysql.massivemarvel.com');

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
define('AUTH_KEY',         '7AOo)Q"1co_VrM8r1?gQ1sxpc+O(p~0hCBI@p9S_NtVMxodok%9ME6hZyNQ16LsO');
define('SECURE_AUTH_KEY',  '+L64vXap!c_qXQVA`/9|MEzK;U$BQv9U&hA"adY&_6j0YQ9ot_@E5C|Bu`(3^J4w');
define('LOGGED_IN_KEY',    ')cq3!&7_qc`z~`?PRpJWkhVF$i$?d^XE5Qwg!2~Hz5VlUr+t7/J$Qo/Mx#6VO^jq');
define('NONCE_KEY',        'N1HS@!R`4#MkM`RUN|M/fV1$VbdJ+eljIjVIjhuZWr`&b6*LqbyNA#t4I:_o%s6l');
define('AUTH_SALT',        '!Xm3!Y(1aM?e3gNHdU2qVIA/e5E!0:uGKKbwij9hlwbs5)qwAXL2:HFl:H%2/;Ye');
define('SECURE_AUTH_SALT', 'k4Cy30OyiPig0JfDqhSH:VsqNbho/~IBPcJB5q?OmlKxpOpX|FcN`+8d:_+X3?sK');
define('LOGGED_IN_SALT',   'U217)J^((V!*|5LuBU5H$hk+2w8E4V_H/D53#tyEqmn_yDX:o9@?BVTt^8q?e1Zv');
define('NONCE_SALT',       '?Myy|Lz6d`qZyMSbyQ9c%Tz"q&M:XCA(CtMk9QgeqJav!vCc44s6b@plv?S+sUd8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_uvnz6m_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

