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
define('DB_NAME', 'wpmu');

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
define('AUTH_KEY',         'UAE<.>SYIU:e$#BtNW%H=!W||~/a3p@?iRKLZS]cI$r8%U(CZ8(pk!dy>1PudT;G');
define('SECURE_AUTH_KEY',  '-7k{ua{IdG~=TKav)%&D*5L=Ro^=`%(Bw!Jwn$X~kU2U?*Qa6@Oq9!51AHwHu[h(');
define('LOGGED_IN_KEY',    'v{^*cq#eKEV?h.2bJ(syBvzwh2}WErO+!1(G/(#Hp9?$z7KJimG>PY@j Q9L9_*5');
define('NONCE_KEY',        'hD,D&-gmXNS^Iy<C9lK9sVmJz7UE?}KAGKe2lSg9*wuR0-Zwi57i8w:pD.ZZPT{[');
define('AUTH_SALT',        '<cKtAExZiztr Xt;^+Pm}K&5,Iqg;zXDE?XMj+.}x=}DptIv7,~d~4av ={W><8$');
define('SECURE_AUTH_SALT', '0=k3DWW<XS] qWK3): $f>f HT-eb DApC}?Dt:}YFNC&WhKRwzs-us(7T1$d2E|');
define('LOGGED_IN_SALT',   '1}XZ5VgZy;lw6aJYfyH8g^WBnj/tQrPTjZS9-(vHQ^w!j}D/Mo^h51/sTlz`?z!9');
define('NONCE_SALT',       ')+oTgLa |gE93&`Q?p5797o%{Xf8/$b2[;W*]X;;Vcn~zgceyV9| !_F)>X(tTqW');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wpmu/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
