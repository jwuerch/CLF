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
define('DB_NAME', 'blueFinder');

/** MySQL database username */
define('DB_USER', 'jason');

/** MySQL database password */
define('DB_PASSWORD', 'MZv2XZ7n7BtFrpuS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.W8y$E|]t]&jwI1wFbWtk+kvYtz6KTzg#EFR);mPo}=Brimb[vg2WOrJHe71Pa e');
define('SECURE_AUTH_KEY',  '<M-rmo_x^q<NjOls-o;L>N*vgMmV(IyDQ*^/>$E):Ii`/HtUskcIrc=x&2>=5f(k');
define('LOGGED_IN_KEY',    'SXp*HL;C[ 3:}z3Wpcq]%.) ,W^*x0 f*BpK6;qPRBgx5<Psrr9Gq8OaL+6eY.,+');
define('NONCE_KEY',        '`UYA{r?;N<w$}JPmgN3mzy--W(0f| Y8FH<>pg@]1[vWli7DZm*vvHpREoT76qe]');
define('AUTH_SALT',        '*X>5_4fO+oU=[FQqav38g)#%a#f]?Pu)kFx]VD~v=e_f`6z%B*H99)t3H#tXeRJX');
define('SECURE_AUTH_SALT', '<uQAFh M!R#c1^Dy#BeK>6-W4#).!+,O>2Gzp6JZIR>oUTNY.*~^x7RQtA_HO{g>');
define('LOGGED_IN_SALT',   '}-.e&1g&ty9sdSS{lD|M-|DWo#W8M#bC+~8K+a|_@cwrlQ1Zu6&k%EiB:Rwk{ vA');
define('NONCE_SALT',       'dh-Ml#.q&d<cfqeCq;J(qUJ M*N%~+xkd}3oAB6uNolw]Z19[q`{/9[E9az_FS#K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
