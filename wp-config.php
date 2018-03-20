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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{^qzjIrfRS .`ZUDqY+A0C0YZhX d}1p`1^xw]i6tbp*4/|3hqiRcew+-~G_z%Zc');
define('SECURE_AUTH_KEY',  'F2rIBdpj7?CM++BR*Nf+%pdjn5s|?75LVp7$N`XpK.4siF%.!p9k,u6ICMx5E5DE');
define('LOGGED_IN_KEY',    'tPJ%>5P,)|/.q7tY=c+1/(n1fgBMV_}fl5-0SHo/o`JLa/UsgAQhmHLCk9C}]NVa');
define('NONCE_KEY',        'szpHQ3{+:z2%Jo] d_pa?iW1OYEo>&Xg?VpAKh[)m;F{7kp5rb?m sT#~OIBP2NM');
define('AUTH_SALT',        'vG1Ab.80MNzUBjnO9I$-mY-q+EfI&ZM_0~YMN;B^v0vPqkU.{-!0m[9TM|U:QN:t');
define('SECURE_AUTH_SALT', 'cj|LaK]W.>VzRTlD&=Inp#.jn<:^~^|`9Uz LQRVK0p^tl$|(T-}d/]qsP7i##Dh');
define('LOGGED_IN_SALT',   '{9[K0`K5ao:2CODcT[$0o=Dai*t)y>dkDvj!uUT|K9ZL1F_zo2zmP[eX!Wu*M,Pr');
define('NONCE_SALT',       'b*2R&>OO,GFH?6 C]+{T|C=-m&W1tzXh2$jaP9FV:K`b@;v.a|/,!|6vkgZ?F[[B');

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
