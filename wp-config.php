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
define('DB_NAME', 'KeyedStrings');

/** MySQL database username */
define('DB_USER', 'KeyedStringsUser');

/** MySQL database password */
define('DB_PASSWORD', '781Harper99*');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'm5B35Dq5+3i9yrS%;Qi93rxtY?krMluv`j*mc`*sc2Y?iz-^SgN=96Y;!~PUc5V%');
define('SECURE_AUTH_KEY',  '!Tl33kT:&18[m~/-{C@V;4@y$O[_@-bVo^4]895t8TfRu|DaZM+98;ezo&Nv=Clt');
define('LOGGED_IN_KEY',    'j]S#>$1OOB*fz_w69ow~+yF@|:*(AM*#Et<WI9AtZTIkn]GyQ,SFyF(Ele>v`tHL');
define('NONCE_KEY',        '.;(;+>XFxLh.$-9G-i?iSQ>;2xBTU|@`/8b<E+$>w3{8sc=^oc@w)} }o!_G@bFR');
define('AUTH_SALT',        '7U;NuVjSxUaUR$I7Lu`i{yjA+cr9-jk(Hj&|+%n%`46%<gsjCb(^Y8t|R6^R|=hc');
define('SECURE_AUTH_SALT', 'B-t.Y7XDfd[`QD|y7Ds|Q^N z(?G1jZ!W;w^D]|+d55~E5:Kfe1q G3P8GrpZ4/V');
define('LOGGED_IN_SALT',   '4Q6U*jYEyjU|.5|9in-Sw]pkt7$`2aqR~$/_r;HP2e[=$obkK|.`x%MC|.]M]P)-');
define('NONCE_SALT',       'Kt27a!)-.gc+SGi@-H@-j#E{]*s29Ugq^6?-Z9,tJ& O,CDSoEo)AY*z@MVP|L+u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpKeyedStrings_';

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
