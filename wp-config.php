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

if(file_exists(dirname(__FILE__).'/local.php')){
	define('DB_NAME', 'university-site_db');
	define('DB_USER', 'universityadminaaaa');
	define('DB_PASSWORD', '123456789');
	define('DB_HOST', 'localhost');

}else{
    define('DB_NAME', 'id6984583_universitudata');
	define('DB_USER', 'id6984583_admin');
	define('DB_PASSWORD', '123456789');
	define('DB_HOST', 'localhost'); 

}


define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-KFWiUhMjGS3%=zPtg| +5s|{J0PQ+B_&9hjLXtxSzX+mLiauG8Ki6jS8u b|pA+');
define('SECURE_AUTH_KEY',  'T&z5UMv`Ie4^3Jp&|{)Ue=1wMk%nHk|x2FuZa75#Cx6VpaQ]e;hBkD`Gxq]_}1cj');
define('LOGGED_IN_KEY',    'l:dF6aj|RQQ4b=f*&~|dS[:f.JN|iF2t-3t[^lu`=Ug5So,P|d?o@#+Hgb3bt^!>');
define('NONCE_KEY',        'VfBw-;)ppSNe/>$ejKGI$v=?*2a.`Y=CUn<zDMZMC7Azg}<L),nC=#b5}G@krUmD');
define('AUTH_SALT',        '-~_f:;1M=1m&<GP`+&Wvik35A#!qy%``W=2:EB#0--|U`1/W8S,3M9mWV.XC~>Ci');
define('SECURE_AUTH_SALT', 'g7*LxZ,ei|MN>nDNWuUyt:;9c-]t8^+{/9e>01uI+]&j>nV-~E(vP,ld&-g/p=i|');
define('LOGGED_IN_SALT',   'F.=&O6]>b`NNA=p]K$R?|ONS&I%IYia@t l>9M^OHkrecy(C<#1tax?oA]OKr.[.');
define('NONCE_SALT',       '44DwH(|bn?^=zwVVp3Q+B>OU`ZZ/C@b,>q/[` -U&qmI@ZE5i3]dK:3a?N|$hf<=');
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
