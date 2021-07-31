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
define( 'DB_NAME', 'xyz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'JH[*qx&[C6X%/d9EXoZe )om3^n/?lVMt%WNGNYf13@oZBs>co)VyDP&3T[,%ACw' );
define( 'SECURE_AUTH_KEY',  '^d1L)_V[8.LO^<9 kQ;L 9@6E?En[T=!mq ;$~=xsLYnt #mbG02Rj6FD0+VlEk|' );
define( 'LOGGED_IN_KEY',    'R}:7/yyNv#&$5Por7!UDIfxC*UF^3;`t6lb*ZFTWq-rEk1;vMrcpAHpc4C-(yimJ' );
define( 'NONCE_KEY',        '4cA)zXw&e QQA3g(?~k/(b-Fb+gtDz~>w0/M.t%/b1uE%2zc<9Jb4,HsZdTW::ev' );
define( 'AUTH_SALT',        'U|V7[G`>?dPt~?S4T;T>v1c7N+T^ #2#w?ogkhO(qHGk)u1WyJQ|x}/1IBAqjZLX' );
define( 'SECURE_AUTH_SALT', '8da=zwQ%1$w=J+vsr):tl*(#2,.FQ2_rp8Z#D`s]/|=.%2NAh#$RBrpb]02eV}31' );
define( 'LOGGED_IN_SALT',   'C5dp;P51i@-s(*A|?cc<6{M3Pl=>b8j8Z?j1*tqBK{2.+TO&A@&MdT,;a35=3%mH' );
define( 'NONCE_SALT',       '|2Y%[q tdJ8,Y?z?<gX,+?G*Tn%Qkmc`WEGNHgI/m?+{ekmT.s31fA(wOYG)rf$<' );

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
