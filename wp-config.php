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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'e@`;wW?U86F@Vn-e& }$Gs(l?NmN9pM*/Q$n(m=BKDjWUSev$1{3x4xW[az~k*J1' );
define( 'SECURE_AUTH_KEY',  'r=UIF|w=?K)Rq>QL7DHIN-OtR88YDlrW->1!5R|n%a!6N*CU4,tQ8KZ2fn+>?b?(' );
define( 'LOGGED_IN_KEY',    'g$bwnlD,[xHemP T`JM7#m|NjwbzQE|^?1QtrEbrE(aPu1UfF?5KsUaFe{Mz5DL]' );
define( 'NONCE_KEY',        'u,?%~0,TL_/]v8}kcY>y]8u12#Mj?5hD:#l$D]!`R=9XaZxg@7.Dl6*)c+pW_yl-' );
define( 'AUTH_SALT',        'o3^19*|&^+OKGs.Sb>k%u*NW w_<{-TjNr{9LD_Upw&RE;OAwpw@bHzfdl,VBzmV' );
define( 'SECURE_AUTH_SALT', '<GjL,Su+}1Y[;3GaPo2;V-{(EXQ3FAflc2vJ*mOYRC2ZbSNe$;uI]05P.VI)<QVM' );
define( 'LOGGED_IN_SALT',   'D*4UriT45Vqwb!8m[y#93Py8_UH~$?[P$h9;bu#J?y0<hiU,A[t-**N=p_uK?(FM' );
define( 'NONCE_SALT',       'G~9,A&3G=?4Zi!+jgo<E87;G^LOQ]4pCH#R<$j?EvCuDriaEu0qfa-<2ZDo>kS))' );

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
