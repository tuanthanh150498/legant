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
define( 'DB_NAME', 'legant' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '>z3bEVl9T 18Yu[2Sq=Id 9P5qwXXxZf#P:1Os@^9y{=vXV_i-*G<eF2|q>_4_<N' );
define( 'SECURE_AUTH_KEY',  'Rg=PXlQoTcC84e%}`f8}36S:~~()Wq+cXJoKXbqF4>CM8-C1,iz5]ATTz]@CV~8-' );
define( 'LOGGED_IN_KEY',    '`4>mY:sb[t-!0j36ceO[RqD]rUa#MImS~,C0=*^lizWD dMF@0&8]v/c4(o 5ItH' );
define( 'NONCE_KEY',        '^QabGJ+UK,^*hd063RLz7sJd0Pf/:sslXO!?<nM$YeZy* q(Y|<`RI:EZnOPF<wX' );
define( 'AUTH_SALT',        '3K#72`WyjfHRc@D>z*^_50SHcW}d0&~(R?+/7vrzv7.FS!I$Pet1I_@/@PW-@@!i' );
define( 'SECURE_AUTH_SALT', 'n.aQf=mb~Zx{#X6S3+1@2MD+IS/[x_.7?jHtH7cjZJkTB9NXZEHXh^13|h#r(1-l' );
define( 'LOGGED_IN_SALT',   'sxi*0J`a67]Q:<N,D3N)tU9vy(=H;8{X{5]<y9c}0P?~B77%DMCLejZXt+wg]atR' );
define( 'NONCE_SALT',       'nj,  m=^8oJ1I&LdH7]{#Thu.1+41$=UX)=W ?u2%)J<+Yv/nc=? _Xq?xo.~#>K' );

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
