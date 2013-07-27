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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'ovk[.Mpn=Y5vE10Ua`1jhg5+Coc-KNui:Ghpc.-sdi,|8%-_?)J-GDP [gR$S+-y');
define('SECURE_AUTH_KEY',  'nb=T?mHn%ebQ_?wdjE>v<x60m#=a|sTRfenf;M!y(cQy,uu6-@pUuP9-X)0wY~_:');
define('LOGGED_IN_KEY',    'yr?J8E=+CKB<|O|j=i0#_thTaa=78krm+Nyq8>wq$>]T+|TU40M*`2#OE$5k`Dw/');
define('NONCE_KEY',        'pFdM7#f*w)=t|-1}$kb`~;@_o;LuQOyB9^4g+z09$xOPK-qK9=okAA}_5kQi(q&!');
define('AUTH_SALT',        '(skHrYr%]!dpEBW!e@Bcl|hYpp)wnJ}W$_NRwymw,JPqTk-[mj$;c,%UQ(^bhvT?');
define('SECURE_AUTH_SALT', 'I}-MPdil~N+tmVD*&kV2:4P}H@q(>29d]Q(-*4$W=J{a;w|%u2 ?@t>tq~u+FlOT');
define('LOGGED_IN_SALT',   'PWjz41}[y5$)o:=>n#$ bVF;qG&K8wVMMhnYP,T]l$_;zs1DM:-)XohP0Rg8/W9M');
define('NONCE_SALT',       '6oH@ycm08?#D(1v^Z3|f(PuJ[p~M7KrWDt:04M|pfs<c{;JVa4]|=XPbp!`eJ |1');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
