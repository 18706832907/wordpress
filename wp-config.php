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
define('DB_NAME', 'mhxwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'miaow999');

/** MySQL hostname */
define('DB_HOST', '47.95.234.225');

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
define('AUTH_KEY',         ';~W$m_CT8fP&#Z5Rsrw#:RJUWsY9we/F&h$$npvu5;<+jc.+n7$;MktZ2F@F9m&K');
define('SECURE_AUTH_KEY',  'LmQgr5o&1h&Do6Zx2`8)=)s2*hawkq#iGv4u*d;Z{}n)mm)PvM0#pG.+LEP^LE M');
define('LOGGED_IN_KEY',    'wPiOqbA#yVa!DCjMutnJY{?DpiJPFU#`7Z^bE0g#}j7]l!&b7oV[W@tWUHL$^5Ix');
define('NONCE_KEY',        'gC}E/{.bci6rR86,*4ILV4DUDmv`B{X?eLW;ge`Q[{I[+s,C7)<n6e6xRhwznX1h');
define('AUTH_SALT',        'Lcu5pSXq]8HM|[mPWUOVZpaN,nTlauJJ&Vd-3xT4~ji6ij-:+64&:m/pDp`<>)NS');
define('SECURE_AUTH_SALT', 'e/QyW[JuiUeP+|0i2Q+?JkvdX}%.@}s5(ocN_-5vN6.T$N%aN_&1}Wm%gZ?z+Wpb');
define('LOGGED_IN_SALT',   ':-]Ec)9<Z`Oq_Qg>7V{N<*,v+E]g|5HwPvIz*;7)+>Y|nTU6):=2kvUOrme&J=g,');
define('NONCE_SALT',       '9%q|hE(.Lfuy&_Fu Q`.T>qXG}^kOega*fTG$^djynr0pU7*9l.`05g&GNmpiS#%');

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
