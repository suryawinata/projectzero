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
define('DB_NAME', 'project_zero_db');

/** MySQL database username */
define('DB_USER', 'surya_winata');

/** MySQL database password */
define('DB_PASSWORD', 'insolent01');

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
define('AUTH_KEY',         'U?k$P$zFN->`PtLpiox]T{$5x8o=u(!/R3/2|x{-,GkAM@T)5r$-(e/2>zRZRG1*');
define('SECURE_AUTH_KEY',  'Z7t/x-Dm7,Gb!D@okR(JP!DCr4Tf2SOzSJ6X+<$A<<$_gLW?}$:x4y1-7%^Wl-4p');
define('LOGGED_IN_KEY',    '^ZWLlw4+-xHzW T7&Dw^35T7BpRk^<v7b(uwk|5gY;g.nKZ#]fbf*%mOQ8:MJ:k.');
define('NONCE_KEY',        '%7|fGuTg&d?v]o$PbZjUX?K&J@cJTm^uk:AlDCIo)^6a *f.Bdo:`MF%yxn.m+dC');
define('AUTH_SALT',        'WX%+GMjR;Vk6C<e2x_l][P:-v$VLyO>%@$RX_<:s1>GU{y:AZV-I-|:vEP-5-%EO');
define('SECURE_AUTH_SALT', 'H-XaX-4nufy?:.!RkI%VB-iaKd3->o]1!))M7x)T<]4c+dGlpuGyO8 +Qn*yyu?O');
define('LOGGED_IN_SALT',   'IJpu,bS<kooXftuH2mQLr>x`a]+GMAGw|7iD(@rc!d<,UECX}DoY-7tS|Bh.:G1p');
define('NONCE_SALT',       '-6&OX0=tM)4PWMdxlX1sYZ#4jo7$J8dC]A%1NR*,6J6F}L<=vT`$m!L>]ejo_Gx/');

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
