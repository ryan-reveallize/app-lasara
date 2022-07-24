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
define( 'DB_NAME', 'lasara' );

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
define( 'AUTH_KEY',         '#BhqX4(#KE43AdbY~H+j$Bc-HHv<oO8SL1{R/z_sqiM*_W8^^mvt9Y#R|KAS_oNZ' );
define( 'SECURE_AUTH_KEY',  'MaJwMhxh0OnC1qa_x4u,tS)xnx<=Pp2lN<$53<&Q#P8e,1u0l~TdGZRn; ]9jq}}' );
define( 'LOGGED_IN_KEY',    '68<yG>[PbE:FEH<p6t>7|abFVuW:?B-aHzlE^]2QKp/RJ~Npj[cGW [LU?!8]f_c' );
define( 'NONCE_KEY',        ' *$Q7{)C= hXZbMRn<<Io0)OU[lu9&-J `k7b&(hp>1:_WyT{3=<[`(j[pjxLoRA' );
define( 'AUTH_SALT',        'bq=Br/VDx<M[.FS/`^m-GPp_Ae0HdV =Q6[PX(`w>l!ybg?c1JI$p#:}QMFVg67 ' );
define( 'SECURE_AUTH_SALT', 'MYkrvq3/zE`p`v[hSY~zhg{#coA1%Lj<LO1:{vIoPj3jma=`?f%pTVHg]^}eh/52' );
define( 'LOGGED_IN_SALT',   'i:6xW8M/w+Om5:hbXf0Yg%nz,;jbE<;6=EWzvqu[zx =e7K^M8ZDj~9$8XmepeJ.' );
define( 'NONCE_SALT',       '1U50P)%SKG]]Exg`~jQIIcm@ P,==_}6o*t,]|N|-7XvkZSzGt%j^@Co89hTD@B^' );

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
