<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'adxs' );

/** Database username */
 define( 'DB_USER', 'root' );
//define( 'DB_USER', 'bhbvhsoacx' );

/** Database password */
define( 'DB_PASSWORD', '' );
//define( 'DB_PASSWORD', 'W2ND8X58WJT71J2O$' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
//define( 'DB_HOST', 'adigxs.azurewebsites.net' );

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
define( 'AUTH_KEY',         'Ei``AyW>l)7gwm0M3f4p0{f/DUf;Na;RFdAKT4k%]m{<P61}.@EJo9+RPs%Hhl5d' );
define( 'SECURE_AUTH_KEY',  'N%! 6hK^{~5|s6s6BwfwT/CDy<~A-c,1+C<=!Z.J0zD<u{0k4}*Lh+iY+aanizRi' );
define( 'LOGGED_IN_KEY',    'i*3+1;$*Vm!v(_6mk{Y2c:r0O%7y68Tm|#gpNa|f,hFn9 B$.wsWb&:e>SS 4xQ~' );
define( 'NONCE_KEY',        'gf:u:|W[|e!V tk!x3cPnVO{/e>sd^-FBF=$Evo0bqwYj ;mICS5ZP6Y$<t$3>{*' );
define( 'AUTH_SALT',        'dvR}u6k@{=dq&NfMXB42ue>A|J-Y#y2Z[6Nhzm717~}TH-[F~EqGNy2m(nbhjt}N' );
define( 'SECURE_AUTH_SALT', '=,nGj?9dacU5&*@X}f&X0,1/@nvIH=%?0+Ng8s6I>.@v_&s%z~V%CI;M(AR;R]Cr' );
define( 'LOGGED_IN_SALT',   'i{f;-AU9g`NcW}kkhQig?!&TD8]??4qhs8)@<^9pVJf|90rkjJx5V8ZSz+pOE2g;' );
define( 'NONCE_SALT',       '9SHk0o=jgex+C#M7C9.Qnhg|>c:_PZSce[nJWLnbe;qm[,xE%yr>4?[]H7yRUALg' );

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
