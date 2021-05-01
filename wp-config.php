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
define( 'DB_NAME', 'smat-chambre-froide' );

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
define( 'AUTH_KEY',         'ub/t}8bYxo&,+_=B2marNy*-QAUvxb)c~DICO;i xP.{Bi-xyBv>]|]f<D9=>K89' );
define( 'SECURE_AUTH_KEY',  ']hk$:S))*:6t[Z;[EIdFiHo9~(;mfs1XQ;V-l&ubT0zgV6x*zt`y=%;^s@j$(w+T' );
define( 'LOGGED_IN_KEY',    'y5`k|D T_}rgD/iPT=pq/5[QK?N9Gkr>H uu- L2f$Kf`05=Q*?4,KJQiv*b4F=h' );
define( 'NONCE_KEY',        'HRA0gD=+#)pH9V[Q-8sF0>;dbiLFEAy2rL.q$BGLyT~~HRKn=SA7%WtFVh<)5,qu' );
define( 'AUTH_SALT',        'j)1?2A}izdr@QQ,uwz%jELK#z{oQlyA/y%n{X;Rb;q2lgH%.(@^j~EPHc1F!<I7q' );
define( 'SECURE_AUTH_SALT', 'U&!WJYe%lSyKy-}C8X6t!-6.pMpUbKL-<Cn~vi@.9{?z~a})xmqQTr&?WDu+SnwF' );
define( 'LOGGED_IN_SALT',   '._Coq13uQN#qD-C))GCYm?uhe{6,n:VtV-(TZig1>VX2] sW!o&SS4m/AHM>d`Zj' );
define( 'NONCE_SALT',       'sGgC5fblzOoeLh2-A{hKJ;z?uJ?jE7]^22jcgI`A<TKo@=^a<&EU ov++7~hb?s9' );

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
