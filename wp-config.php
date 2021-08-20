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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teste' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k!&yt;)zgI$ZD&MFWxTq,>`>Dd6d}6uaPE|u.2tY^4/(Q%$d|j5aO+ibP,e|G$Ij' );
define( 'SECURE_AUTH_KEY',  '.2AF!w7PCx./!b0Ow+F{cY|_=2xstV>!~W/pVTe#ht~N;3w7XWLWzIHiVBv ga)!' );
define( 'LOGGED_IN_KEY',    '(x.FQrQTn^zuF&8)s2vgw]&%0MMYXDIMkWT3`hmMznj45X]Hap2c5M)#%o(Q{L3Q' );
define( 'NONCE_KEY',        '-VlWM@#frEv:gm5ZjRH,ECY `)B]s }z(GIBVa51{p,eu`KC^cD/?`By#EbdxFm}' );
define( 'AUTH_SALT',        'arv371_0i)M;rJVYKPbBL~3j;>h,KtnTctc#W0gtK*kjO0wqgz.9Q.Pn](]4:>z?' );
define( 'SECURE_AUTH_SALT', 'N=v^u-|Ia#Xpgy:/RHy]`|#*8Xi8V{`DXo9<Ho{d$vD6kA9)ZF!_QBRw?7ToU4&Q' );
define( 'LOGGED_IN_SALT',   'K=jzL#b%p~cW<Ckf6qFG[ b1,Ae<ShS_=oM1Rqb&0z0;.Z;E:saC4<W)X]PItJ|q' );
define( 'NONCE_SALT',       '2TpIe.`*UODaJTU_ <7v=9aY<mnbYsA?ZV!XB,Y/8Nl_@wA;4SyP-M!_zFG2]<&M' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
