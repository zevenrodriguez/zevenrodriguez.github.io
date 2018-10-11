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
define('DB_NAME', 'zevenrodriguez_com');

/** MySQL database username */
define('DB_USER', 'zevenrodriguezco');

/** MySQL database password */
define('DB_PASSWORD', 't!eD8ux9');

/** MySQL hostname */
define('DB_HOST', 'mysql.zevenrodriguez.com');

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
define('AUTH_KEY',         'i(z68`9u^4hd3DezqCZzwIJOy&_sM$vMa#4A*ISux2Aw0yRfI+:1berARrva(2ov');
define('SECURE_AUTH_KEY',  'EGHK|;aIbhGlVko9qfan:~q)2)w22uBPYgliPS)5ClDXK3g#:Ye)uv/8MD(/6_4m');
define('LOGGED_IN_KEY',    'YRc!Gr8;z3:(Pcte;Y2j!*(cFCi~tQvG^zux^*O;B0M|iVUw4Bf~|lhckfFcb?a/');
define('NONCE_KEY',        'aCGasjLQ&"tS/fYJV0rTa1_VCNNYj";|@+V|e;pR7Y$6P9KCxC*huLouuLZ1Nkh;');
define('AUTH_SALT',        '10hx81(o3Ewz#jkc&:hlL$lri3Y0jpt^_rH$v4`BU8CXEeETWn3~^nE41sx!"(`K');
define('SECURE_AUTH_SALT', 'aO|9U8EO4RVRGh?|8J1L|yy0QCT+wwy@CS617dJ~Edv/`8bE@*BR/KUfjldY"^~t');
define('LOGGED_IN_SALT',   'y*B@q!o/"3mBYj0RZO&C@zTIOdN6G95ilcxdlte;@)KI8r?piS&4(Vj)TLd1Zrq!');
define('NONCE_SALT',       '&BI&_%|?xIVjq|0q%Jue+(E?/$;hWHspL*TtKNvYf0"LSK:^6qGV33k(Pgkz!TT0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ww24x3_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

