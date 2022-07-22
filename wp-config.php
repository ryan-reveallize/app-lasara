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
define( 'DB_NAME', 'app-lasara' );

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
define( 'AUTH_KEY',         '>VSyZIK(_7m[GS&_0U76TAGedVLC(M@44qMJyEfZ;U]mkv{3H#`PbBL]M}TeWmgt' );
define( 'SECURE_AUTH_KEY',  '~PIzA|llle;_b#YT>r[GgNS2[rpu0~?Q)<@.h=4_|L,oT+AxD0NE4VcWVg^Lc=n*' );
define( 'LOGGED_IN_KEY',    '<YlD4o|X]Q3|(2L[,`~O7/2Kd@D0H%*5zE v3l6_NNc9 o85Vj$,DS2k9ix%B1L~' );
define( 'NONCE_KEY',        'qT#dnYNB)>z)#)o993QkrA8=E=-st/<&gm3zZ|RRrFQ3Y AP)FB)C${{Mf_<:,]!' );
define( 'AUTH_SALT',        'Y|33{@9~PE`o~Gp$fily~<eiiME&7py>NMxU5V]JxO]$JCr@~qFhC9{/iW{?kX67' );
define( 'SECURE_AUTH_SALT', 'n#vmj38{WmnNWXL~_bf59q?&6K}&MzO8I<H2}S2C:|H8-i_|1?0h[ST)~DQ:DbVQ' );
define( 'LOGGED_IN_SALT',   '*{;T13FyO#K$^O_:auz=nI]ti-v{9KZdz,UA?C^nvbq,1ei[`SR+yTkN5-Xo9kC5' );
define( 'NONCE_SALT',       'A3MDW#,e[SP$!0{8;qO@yV$^FT:Izyaq=GN]|08]6k{P}FskufJ,&c5e:J(#j+=/' );

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
