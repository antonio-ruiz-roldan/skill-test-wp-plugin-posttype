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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         '~?:C0=vVEr~}AIz#Zkk(bC9Hy&ib~)lltd bqX t^5]:fq8|[%E? ^-QQ.sY-N1?' );
define( 'SECURE_AUTH_KEY',  'dL0Ap0n2BC(E2tc|@[w1Isz7YhH$GyB?VBs{o2NWN$xBp~rQ~;WIzED$2Jbc<k$_' );
define( 'LOGGED_IN_KEY',    '-] T+]~K29X+2nEWIxkF$O*fJ|p6yE*8h(t[#(5g)XS&<]j%)^jyC|W;j6c(2hmf' );
define( 'NONCE_KEY',        'HN]x!N+hwS!mI8C<<dul|F,<vx-e)@~MxVBLl{+0Gksh6+Wu/+b1HpB&k&G$*&4T' );
define( 'AUTH_SALT',        '=0o&7n_]a[}`5bOSS7k<yX D1YLNc7+h)f:w^m?=Or-&`9y{Ona 3(&([(Ax[P8F' );
define( 'SECURE_AUTH_SALT', 'O(i_AW>.>kjo35x]@QarfcO^Vi%aXv#1@iB:3/kG2%r~jlcf+#B?Epb4&`<cB{l^' );
define( 'LOGGED_IN_SALT',   'm}oPz~<=})kK]xg;[lwPHtm)RtLW{ekbi@3VANfU()x0Z&8Hb~?;>jHhh/Bb!^<U' );
define( 'NONCE_SALT',       'RV0A>loe&V}%hnr+#Nu=fRdCHmPIeI3)1OC@o<R.nz +Y YUA%edw>;w/qDVSZ00' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
