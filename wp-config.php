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
define('DB_NAME', 'TBGHK189');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9Tqcp-B^^.&2}EF/C:+LW,y|<YjesU|0AD)kaAD[0MYr3K^j(>3}~j^,cF4)BFQA');
define('SECURE_AUTH_KEY',  '-Ro&N/|3wCg<,a0{+)Mvk]lpN`MQegO+@|KizO<YsuB;RrF_-SvEZXlF47MtfWwc');
define('LOGGED_IN_KEY',    '5Kc# soF9p_d OeeW9U}A[[tiEezA5GX7}rZ!+)v!O_~lB]fIM|u(k;n0IlFrKKX');
define('NONCE_KEY',        'I06kTMW!4`+f;<k!|/lbZG|mBa(pqQb76.<[J#t=T3@$8_R!@}MLcu99fP;sMxZ ');
define('AUTH_SALT',        '>|B]|eY#v|I|&32bl#SK]jZQ4f&v&i} ?V+9AS(>9yi_JTBm.Q:=*lkJ1%6o#3{(');
define('SECURE_AUTH_SALT', '6B5)#$))3GQ+gR9pW+`#(nofQ1]&|1Z/TUEA.MbdW<|_zII$BZ/Bcd|=<-FH<n39');
define('LOGGED_IN_SALT',   'w<2J8h_I/lUhAr}X#N=~(U/=s7!O.@1R|<R:VdH|.2/wT{F<F B-]*s?%w.,o;s}');
define('NONCE_SALT',       'p mf,8@X%*IE{q4#54&_f:Wt)t$t~4X)y<5wp3IKCLwK4+4)G~r=z|({um>kS+dH');

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
