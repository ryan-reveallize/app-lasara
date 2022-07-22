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
define( 'DB_NAME', 'lasara' );

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
define( 'AUTH_KEY',         'R:5s/&%RHOl)l[>zG`|T87Pg ?,GJg{X.u5n^x!K1hoiHpJGEQ.o74m=&^b>=eMl' );
define( 'SECURE_AUTH_KEY',  '=d,9y<dQO4m%knp4<Gxm28Xs%FW{?(^&i`s()#!h?Ft>I{nmII<=b8Th[iGc{d#@' );
define( 'LOGGED_IN_KEY',    '#m[h1xtY %#8]Dp<$B[EA_8Mx:,.|vcepN6;bH?LL] *:L/xq}E^G}/GJIJda[A8' );
define( 'NONCE_KEY',        '6hKk,j/{k4P!OIaa81[P#6_Ym!ZpxtS|Daqx,W?eE7;lfEe! Q~V`(^Wz6sJI=D-' );
define( 'AUTH_SALT',        'n5BFeKVt(&4V^}NmKlFo(cnoR{ymjmrBoN&4l@>lt6O3^n[uixpaUf|^CrW}y+:>' );
define( 'SECURE_AUTH_SALT', '}J_yIaGZo; k(Hc1[nuN Y/Ts}_G+3& `ssnrLzKI`GBWx8kb|A@o${B*XGA}Pbr' );
define( 'LOGGED_IN_SALT',   'b*F;uF$R`uZEWzD8h^Enrw[I:IJYeQA:P@t(/&|sf+OPp9P{lT-r2@F(eRWG9Jy@' );
define( 'NONCE_SALT',       '@B)tZmGp!~-^<WgQvIv]##UbxiKPj:Y=b~J4T(vfyP^4#5j}G[h:B[z}!eMDg:Ud' );

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
