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
define('DB_NAME', 'Tonifix');

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
define('AUTH_KEY',         'uF@<G%5`G-a,`r1b<|pAcmB97(0QC[m`+Sr!%V(prY.IB;7.dG@6%S~#%Hp3IG3e');
define('SECURE_AUTH_KEY',  '0&SPpoL_)pPwF/%H$qiguB?j%Q)>):n3hF^gnVViU41giyhSpm7gA&8)q~2bm &6');
define('LOGGED_IN_KEY',    '56~>>jYGJ5~<11&lz29#XFkq` e*/7oZJ`yZd-m s[cHl6<N]<*OMu^K?1+/5~^[');
define('NONCE_KEY',        'E9/*4]}T+<NSoV=Jl Sg8Su,Q^Brz9yHW@Jr(`ckQ6EY}TrcTP&5~DsQ<Ix&yox7');
define('AUTH_SALT',        'u?Z}D^s-&(5w?hIicAvaM0Mto@{GABnoSOnq=.r$v7QI9pvdq~FTTWu}nVUk/#+n');
define('SECURE_AUTH_SALT', '=$!MV/7!(3l{(u}Ex@`1lIr tXun~[~(q}e^hV6lCwP^O5OGi%VP+R*FUe@v%2f+');
define('LOGGED_IN_SALT',   'CG^6biVD`L4oeZjAZ-XJJ9z,c5N9wub(,IoH.NeZ4;Cq56g.k~9b#bPiQw@kI_h;');
define('NONCE_SALT',       '^m|xzPK2{o92beqG4CB*&tX o[1FPVP)@agXRm ULNd$0Rl@/^~hvZIp=Bwe}  Q');

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
