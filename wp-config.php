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
define('DB_NAME', 'plugins');

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
define('AUTH_KEY',         ',yD~KS#9L+YA:qcH>.cB>q`2+=_.*/MH)N@@)$@83?aw}4eNk|T#!a{3,/(i^.i]');
define('SECURE_AUTH_KEY',  '3R:5WhQa~2s#nwkZT-[gN8JXPXza1Z?eP}1|jzj1bZl14FQoz9l4Hg?UM-,KX_1}');
define('LOGGED_IN_KEY',    'V:tO)%l]fR8-#`qr*kLVy}V-;>.#v)E0Q@2p&D{6c6K>^gAX?O8Q.[5.:h$yCQ<g');
define('NONCE_KEY',        'b;nb/-ZnNINPU?G(+2l%Dl>!GS0UaLJAA]*Gxzu~GrI{Tp?ROe5>0Pc]6-w^(ey_');
define('AUTH_SALT',        'o6?DIs&fN;Xn_-I>A5Ook(c6~bp/JC@&(o?Ng{mFc7>}E8SdGhLR+$&}cAJ]H&?t');
define('SECURE_AUTH_SALT', 'Q^kA&<XJhopD7k*jZ@nZ.nDcG5~H!y3_C%Zlyc5ri )xDc3Dv:#5| jjYw1fFNJc');
define('LOGGED_IN_SALT',   'Mn0^N!}Fll!0Ufu/2::3QMSL5+zW=psTp&{XF{jWk?Hli677GJ#z{:1~)YnLtok~');
define('NONCE_SALT',       '1NS0?$9EZx0&.dq2l{Kd)3M?SVe;p:ssbEH[sKPDbiGMt9#`-e~1*is#jh}-yiX&');

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
