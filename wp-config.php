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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Ny}V|p&DeUAu^8v{B-iZjp*_Q4y!{d`d7F)zu6/`T^m3 P1oc}0p:)oO_oKte>;v' );
define( 'SECURE_AUTH_KEY',   '<W-Fzn 6z7y}4<?brG*l B$C7LSHfZB!:k>:[Ba3!#-sd:/wH#^q?c8*kxm,8bO(' );
define( 'LOGGED_IN_KEY',     '_l-}`x8:JMhn*L73qAvZJUYi!?q^pv&psc|QQ#WP|3zi5$b4^@~8>leis`[#1zkQ' );
define( 'NONCE_KEY',         '-iKTxs4t[?zd~A.^{.~6>^YIu55^7?{;V/(bHM0AL+rXtahS>{d8Y4}kumJ`%(YW' );
define( 'AUTH_SALT',         'qVm~1k{3-X~s2xX4tzMSg#%F=2E+#8{20fZ3Fma3$d8vBa{qz7E%SoiA2 AH]5bZ' );
define( 'SECURE_AUTH_SALT',  'P+k%NHc?DbYNXxnK=W_ayqKe/Hxu)R(T^(Y)>-MkI4)w*@,x^)k/N>{12Myn}e$G' );
define( 'LOGGED_IN_SALT',    '+a8;Y1Xb:/@G}<;m(uAg1ZM@V.=Mp0A#_<vA52GeID4B>sbf%iE5-_wKpTl4==)k' );
define( 'NONCE_SALT',        '`FONii4:rLRvmKI SY4sax7YT_9WrR$_^STSUcwC2ny@+L4s;siiz8v6$-OyHayA' );
define( 'WP_CACHE_KEY_SALT', 'qg<H2t9fM:-,RmRkY(p*|;@e-y08<fVRgbV/4QKW`$d!)=xv-[AXC|f0=|;^1:h(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
