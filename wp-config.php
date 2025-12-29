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
define( 'DB_NAME', 'wsmb_2025_module_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3301' );

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
define( 'AUTH_KEY',         'bDdE|{dM*k|n[FGPa#_P[pjc;OO*y).y6y7V!2Qg)+tZ+>Q7AEC^%Y*%e3t?/0ff' );
define( 'SECURE_AUTH_KEY',  '*pj/jdO|^Ka5GzECE%E<z8s*jK{Le^[,*9d,a,rJQ8z@<G?A:ZK=.D^weUZ5a4U+' );
define( 'LOGGED_IN_KEY',    'i=5O@_. }Y^{Z^3JP@$$ug0UjdW$3e0;31*GW+SBBhbd2b9l@m2KH,aHk=f9|Myn' );
define( 'NONCE_KEY',        '1k<e,O/t)eV9J) JlG #j-xz1uC%_*F@,3UYZsNNm-K`K{< g89{sY:@Ju,|3J!X' );
define( 'AUTH_SALT',        'M*-CQDWd/:n_K}az0mf+f#uZYY01lvso-c0,55WrVq,C$5.m^Hg<(P>/UpE5]*7*' );
define( 'SECURE_AUTH_SALT', 'mZQC 1vK7n*Z69>G[=3mC~qKs.ju bk0bzVtsK3od(<s[ ZI(Z6Io4wVfdcF3&,1' );
define( 'LOGGED_IN_SALT',   ']7,2M`k7XMy}zX;|e;x?{a,h$=Yfb{1>RQ:l<,j{J<<p>9M+bi*iF-NC2ZB|.)kg' );
define( 'NONCE_SALT',       'oZcbd^GSxj{T(W]lh&S(XAB&$x8doCBy7>~8<[4M;Hw}UHkvO2,TJ3TrU/NgvKiX' );

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
