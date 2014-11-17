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
define('DB_NAME', 'viseed2015');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4Jp}D4-Xg]E{vckfgN`Mi<O(hTE1)]dlQJ:}Xtj!k+l/q@=._]#NnFh]*[+B(Ya4');
define('SECURE_AUTH_KEY',  'OuO8+h|_+aJ~d1~Txm5P1+-)pwy|JBslC-?k_A hrzB3XIW;t>9k |JU#)%{pe)Z');
define('LOGGED_IN_KEY',    'd[yVrlObUTX|0u^{[`CmZ*vVLY=^o~CTu73wM-]&F8?0.M&;{(Y[ +nY|1,hzIXS');
define('NONCE_KEY',        'JjiQ4V0(-VD;3UT8+k[oR<f|MbHZAzuLr#L;-wbpps.Gs(Nz}kr52$7#=p8<Ns+9');
define('AUTH_SALT',        ' $)1+;o-b <Jn2?7gpghCY^57d6<r%qbY3(-;b4qKWUHg$.)>ygU&<|F9HNL*;-+');
define('SECURE_AUTH_SALT', '2KY1`RL|AH~c(ktp2G#iRMsr)!?F9k@b^3~~Dr+w=5?Cu+eL_=#ddfs;spcIv9gr');
define('LOGGED_IN_SALT',   'C4PX?+9nfpR>s R4{DVrUuNZ<|T;TtW&+}ST<[LxK763T&V-~baBf8%+N#ty)uaM');
define('NONCE_SALT',       '+l%~w|TH2FUE%sQ:[?z-pMut]:r8<a<S|P&`snZ(),*}0Z-C?&*AbBkEKUr|@-<~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vs2015_';

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
