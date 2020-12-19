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
define( 'DB_NAME', 'EsperantoAtelier' );

/** MySQL database username */
define( 'DB_USER', 'WordPressUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'juiup.;;' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',$c{iWY}f}zli8!lP&+c-I#B*aRK$JR.-k*5A27 q<j7rifQ*F<d,aL8@v-ykJIJ');
define('SECURE_AUTH_KEY',  'ia/:,S*V<`fb+yA}p?(%*}cI4*nv6+8J5-Z|H!jd~qFd$HyzEE_-&k&W9?Zs}x)/');
define('LOGGED_IN_KEY',    'zw4rZ%b4`QMq1M]*<,7@4JIr1qGr`?IQ(F(s5Z1OqP`a!yCPl..E+6*BJ/|/~/K9');
define('NONCE_KEY',        '[B/jh^C/#/:{?It@uN{|NHfoN<[Mw%8di^BoEQLcNO,khdPOHmQS2UU1a5 @#ZI ');
define('AUTH_SALT',        'he8XW-4kxDROurW!c8qKZ_Gd$(&D`Z%!.<T#)bti7Gs1ah^30jDdY3!XoHia]A.`');
define('SECURE_AUTH_SALT', 'UMR$EI<N+`&PfzW=[;k;)P[|My&+Qu|IP.ta-errrLb8%2REdrOC]J*k=<Q#&4>P');
define('LOGGED_IN_SALT',   ',rJN:iaPS~~2$}&O4TDuI8QC[L/=+B^e8KpT-^p,+4S4cPuyorA]=Jp_e!+{#4:Q');
define('NONCE_SALT',       'mRXi|#]gDX!k}H<|l@>|%u.+IXAi _s?;0rE(1]?0^D&w!, gskA>fPLX $Noo4,');

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
