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
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'Admin123$');

/** MySQL hostname */
define('DB_HOST', 'wpinstance.chgwg93bnf50.ap-northeast-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '&{-n?8=f+Bsx>:%Z6l.aX;Z#1mYs|1>l1&S!nNi*n|#kDndYjd5#RC%+VM-m.o[C');
define('SECURE_AUTH_KEY',  'gGITNk(cGC7g]lJF?B9#g~V0DHC$D3ibML$ 2d_GYg42Rg7Gp_T:#t_maE6S~{l2');
define('LOGGED_IN_KEY',    '/TllwHFyE:V^>.?qrRc %$#|d!QEWl@3gANFF0Zg)rY`@pWN?wO&.1w3AY>(!%%g');
define('NONCE_KEY',        'QL}N8.7/sWM#Q9FDyz 7ng||g?Xzac`:y^u>ln?V/QP{xG3KYj8^0$yGXZ9 }{Ei');
define('AUTH_SALT',        'lHZc$|5`|i>MFYx}VZtMffDXdAw+&Nocjd6ttq<gB=H@98]@l#R??uF}(7,C6DCp');
define('SECURE_AUTH_SALT', '0/~k;&*F%m1Y/myBZWw<$C&MMyf]=z5a(A5Klt10zpl{vY9ocvg!-HfD*F#?ou;B');
define('LOGGED_IN_SALT',   'N=ZO b3jq#<X=[af]J>70$u#aRL1R|=+;S`}/X!1{9Ww>7XxJhx4B.eTN8WaD;J]');
define('NONCE_SALT',       '|WS=#e[fB(@:<R#??=u~`h|6X^|D`ttMM59pfnD.siz}X3hZ@ fU7exmY3RLM<PU');

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

