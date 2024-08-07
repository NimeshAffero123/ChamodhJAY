<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word_press' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':kLa5+KE-d/K|96@.]KMG/%O/ `18>_jo9n]^},4rT]@@!Ck7NU_D]p1LVHB)KFP' );
define( 'SECURE_AUTH_KEY',  '7wx/kI;gx13VR*IY}<EtYqF6|XH.Qr#(;YFR5bm ~=<MV5k0_5[Im%kEs2xa]f$E' );
define( 'LOGGED_IN_KEY',    '<&XH$eT &YK*iXice8 I/f}T$F J-K-#)J;;#>Y@z1.n8~[JNfyad@-2{s@P5DRg' );
define( 'NONCE_KEY',        'lx<7SUjgkzK+tClq3O?&L{JSf2Y4d;k<^>:Ygf.{@?McU>xsxc!Xf&Wq9EvoZd,(' );
define( 'AUTH_SALT',        '$;ZB&BRta))KHs+OV[4S_W8!,(U[y5+8Fu(hN8hiE&?[8y?$yZ?u+2<nW;(lX:F$' );
define( 'SECURE_AUTH_SALT', '0%?l;e/({rl$6=L?71fsnp.t@gpHHdR{b+fEEN#So@ Kn[~[rs:uKrK)_~,5BE@Q' );
define( 'LOGGED_IN_SALT',   '3%lA:D^ <(*_my4DX7VIp=hy;,y,O|I`m3rzn{2lcH9jJZ>Z``~+XJp}QBsTw]M)' );
define( 'NONCE_SALT',       'aT@Lp]qDVq-X_gC v;qylwa>Y{~:2^_BjPyt}#x){e6ULGu-spx,C_G-E6_[eM}C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
