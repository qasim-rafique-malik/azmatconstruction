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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'azmatconst_wp_xw14j' );

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
define( 'AUTH_KEY',         '-em/ZV4>I|}@On7C}R[fg)v~(n/Fri6?DvC9C}{]sWJUE>a+7EuO&kh@SWZt_F*&' );
define( 'SECURE_AUTH_KEY',  '!b[J<+!2 H>l&ldVBtc[y1y^3yvarD|t4]Hb~7=!xUJ)m3A)%Tp@pp#cn@J~g8m$' );
define( 'LOGGED_IN_KEY',    'E.!wg!FpSRGI+6-E(KZsg|Dnw2!P^7(-Q@&5DQK}n}.o?Tsf^fV4^:NIu``nq-hE' );
define( 'NONCE_KEY',        '21({E`O:q$Qt$i4W.S6..z_(&pTv;Wl:v89,#pJ!J8N{wS`iTJu8mS0B&POh-s}`' );
define( 'AUTH_SALT',        '9>]x5hH#)KN+TI/Jtu1;]o[H<XQty76KuT,,{CnW6:9&;=(fK3kaY&`cm<ejh=f^' );
define( 'SECURE_AUTH_SALT', '1u8[qi=CL<me[;n}E7GltbHZ7QwjO`d4hZJ=oqWAm3o7ip{u<)R[G|[9CZVgr|22' );
define( 'LOGGED_IN_SALT',   'pT~3/ethPZB3,QFSa)zm*,Jrp^>zY;taun;=KnR:.Fe_M &X+P-3DYo/F&n7h[|*' );
define( 'NONCE_SALT',       'iNJ~nC[I3Q3yshRk+a; vQ[]@zrQQcu/iYmqZs,_1#;]v~gzxPcKTn;?v5o%d_C>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'azwp_';

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
