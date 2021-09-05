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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nynews_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1129Elfy' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Y(f$*:Zp%xpzQDIUgOp/BN!ceCKEgr]b(F&T$%nM?(c~tNmBIL@tB4crJ^*h4G(U' );
define( 'SECURE_AUTH_KEY',  '-CKu{bXU5;)lP|M{FZ[$QK@>?j(p@I>m,M>D$:wz*Ty}}Bv=S1cRfL>S(B:X>r=:' );
define( 'LOGGED_IN_KEY',    'MY.p)2?38So)vYLnL~ANYiJ0m%(u:=G,H+`-9O@r0?f>Iw@@xi;q03KkXv5@X2jY' );
define( 'NONCE_KEY',        'DncQJz#_(y~gEWbu@v,})T9MAoGfT~A!3 B~oo_=% pk&^7_2P+E_P@NFS2?En+P' );
define( 'AUTH_SALT',        'ygI5i&pXDiD y(f|n#k5vIW7i0$,Zm,Ex9Q(`qAb}A6IY%LR5mxNUsUr#gkEjk+I' );
define( 'SECURE_AUTH_SALT', '+i9hJ$LiIFLqsr$`hY`Ok3@)<C>el=Xo/z4TjV=g{latIN2ZBC`H.z09<>U(Eq.%' );
define( 'LOGGED_IN_SALT',   'Ls*NU6lo_}ucX,-WmEu%mh>AA9o8^!yc=qMkJ017n1|N0X)L`s)>!,q!(!KrNl:5' );
define( 'NONCE_SALT',       'dU{+UoR9c9[;G:`JkH.yS7S0_A3;4r^Wf4Z`q,qB9j;]Ul@$=%QrW2!|@ jbl7V4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
