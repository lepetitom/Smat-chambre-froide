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
define( 'DB_NAME', 'smat-chambre-froide' );

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
define( 'AUTH_KEY',         'un@E?X6M8#P?2?o4T<QgNxeuB|m>velQ2bMkHiJD}Wj>/!S|WOo4e-)JG<]i/PH%' );
define( 'SECURE_AUTH_KEY',  ':i#mt;dAVqAUAW,2Vuwt[/u7T@,Fj>`9Q2 6YY5{yTEI1lPo 0n?,J68XZ0qzF@h' );
define( 'LOGGED_IN_KEY',    'KM}9PKkr[2RHhz1uh#[KEfi30TMWsiEbZBI#-IsH,_Bv$2Y` z[Fq<)>kX?|!9~3' );
define( 'NONCE_KEY',        '1Ta+My-1-c]@hN$Y^^Z8*!_B2eisRCS=CmiwSN+vUHxB:ht#b8lg2;:SZC;&j)I+' );
define( 'AUTH_SALT',        'o*~? t.OVFa07?~i?Wcf[sXu%[$]9_s(slMVlgj:ERXO#3J<{WPB3EKwy>eQ o<$' );
define( 'SECURE_AUTH_SALT', 'y6]]JD xhWy3tZJqLL@?ew8]Tp3$H-q/]?]SWBF%X6~Zy^#,!p2wMR=I8Mvf%D`/' );
define( 'LOGGED_IN_SALT',   '3$FKOyKZnO@.<gCB>Nv[SN_VCWr|`A`[#SX/6j$tcB#u=Za)=_=DVm4->#ZnsXqY' );
define( 'NONCE_SALT',       'x%duT].U =CAmVBa_{f6E3ag|3L52?C_;aA:6fsP@IMcoSx.JD[.a^xw7Q0#`QYV' );

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
