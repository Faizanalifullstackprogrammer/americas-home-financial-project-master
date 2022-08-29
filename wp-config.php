<?php
define('WP_AUTO_UPDATE_CORE', 'minor');

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
define( 'DB_NAME', 'blaqou5_amhome' );

/** MySQL database username */
define( 'DB_USER', 'blaqou5_america_home' );

/** MySQL database password */
define( 'DB_PASSWORD', ',%sR;94m9[8g' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Xba55s87Gt $:P&[wI5!b?S}bA(sBFhT1bse--RYnY7B0eQ0$6<DjI4K7m`^lbQ[' );
define( 'SECURE_AUTH_KEY',  '9D,]^}*<&[YKSR|V5U7>^WHR!qRjJ)8tjwjsxJ;}/?DAR7~60y(- QaiAUie)E2]' );
define( 'LOGGED_IN_KEY',    '~rEeC*1y5P!/yKav*s1.rY&D?}>WN?u2MQ!;]Jbm<nKLKpbKlAsX@A6up}Ji@;H:' );
define( 'NONCE_KEY',        '*t|9bqL-j@y_qzR{*x.``{;,B)tiOu@i*>XVF;$u(+lIQ}}SUKemN+CKQ`Lezr1G' );
define( 'AUTH_SALT',        'Q`0h_.@uoIy|SFdhy6aMzvS3z-5k<.T4Hs|zuyabu}{wiR_F9B.7/@/,{HYzN[$*' );
define( 'SECURE_AUTH_SALT', 'FGF~@}sUmj+^U;tPbxz0b!rwlu&Gez&L`Wr@x[V[ExIIhq5l^y~Vb6Mo/K]=rcvN' );
define( 'LOGGED_IN_SALT',   'Uz+87l4EQ$Lp)M*U=ll43iiZly7L*yRw` N6`,40jL,R?2ff2<_0:q_>*!{*vs5@' );
define( 'NONCE_SALT',       '%n>`wBQ,D*f>I~BnEPjPp,;q~c=}Yb4o?@sux-3o0J5i+k0mJ?Lf9@2lmWV6P)B9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );