<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'bc_db');

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
define('AUTH_KEY',         't+Y]E@Td0pUo`mVCxqT!<[wC@:3TbK*T7a_VahmW+|z<qnh{wCNtOMFQZ#gPT:M6');
define('SECURE_AUTH_KEY',  'FClm##&1NgEzRi9=KcSHyzC6R5Hw9&GZA{Eo8R[j{G$7NvFy55fe+XV`r69(KOp/');
define('LOGGED_IN_KEY',    ';wGTVG)Dva>j676-5R0c2,Q=YC(_eKmmp ]7Sg{8kI6E7j/ayqBi]l<4%v7d^r=m');
define('NONCE_KEY',        '&s@0,.E0%Eo[-S#tz#`_pib]scRlI<P=Hx15gWvH*HMltblBjKfzH9Q4x.5Y4Zs[');
define('AUTH_SALT',        '+oT{]1$E<&b%D5t$cL|#h@ -an%E9%yk`bBCaf*}Yehj:>6jZJ9E(p)R[=Q/s#3#');
define('SECURE_AUTH_SALT', 'k)Ve$}HE<.4jo9&>0G{5Bu238Z/ml$Qp=]r,>vU40t[fGk >1W03zrN.YV6nZyk*');
define('LOGGED_IN_SALT',   '0V(R!_d8Al:! M;*%a00_m9XH!:~lE@,&kWv>-T^1c]Bx.8oH^zcNr0DacTx{ [i');
define('NONCE_SALT',       'TRJitx)Sw^F_=@X 0VJEP)5-[B1}*V:q&+5scig(N9+=!Ewk!9yT+WSS-qObYc0r');

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
