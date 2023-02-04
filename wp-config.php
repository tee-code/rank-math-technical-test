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
define( 'DB_NAME', 'simple-app' );

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
define( 'AUTH_KEY',         'G<bPh(Gk<=3N.zEnY2whH?%Ur(EVo13V|Z82HP/&%M}%^K>u~ck3aAvDgt4),wgo' );
define( 'SECURE_AUTH_KEY',  'z$jxw.D/M>]vQ!hi<m%+y-?P!ua?kh+BH6=,A0|2v8O`pOtXBG_OU3+H zEI9tJ9' );
define( 'LOGGED_IN_KEY',    'Hz(t<G2n<$q:RTWqwx&b3TXu/G-c*^xbuAKteE{dZ(A,~(2mW>JUaO#6JorIX:DP' );
define( 'NONCE_KEY',        'w|4Z4m8ZMPVKSc.j`XnW[R)F<2LOc@Rb$y.Q|E/un4<ZwX#iP;4]I8o3pU5cC[F-' );
define( 'AUTH_SALT',        'o:?CS6g!x0eEj,[R5v8=Z*<yk>ZuiD0YK0M$q1Mm_9w!I1ZM5zzk,3$|gdOhIe!v' );
define( 'SECURE_AUTH_SALT', ',GF>l]!K.^:UO_Z=dkk*wNW?2Ezj~x9,+C6bzTuEhB@P`h^zV$N5UJzd!~_!;7+>' );
define( 'LOGGED_IN_SALT',   'FH7/26<~.~fA8ZLqdR?h [>7sk[Y$ll(Y>D%e|Ez#qik^It~eZG#y;9ct2:Y}#}]' );
define( 'NONCE_SALT',       'Bp.4Q6pAKLDhQk$WX!Efemzot|DP{)K,}0&NDw~+uGp(0zvRFnD@:2-c<^.[vLBa' );

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
