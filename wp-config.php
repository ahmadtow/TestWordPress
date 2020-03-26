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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'j=Swj}/,WN_VLO{AKR0ph0BAeK+-$-z)/naiFT=UyrS~:5IS#g;^,[>%!*r08;K^' );
define( 'SECURE_AUTH_KEY',  '(5mn4J[7xR n. d DwmYYfA<hVMgbB!)^rOe@Yb!vezf[2AE^c<%Q.:b)[HN<hKi' );
define( 'LOGGED_IN_KEY',    'fE(wNx242!kLTENMNp,eg+Og|DN-#~R~ya)oyCd4Lk|kr/VmKL>Pl:;u}8ayy(j<' );
define( 'NONCE_KEY',        '{:+Ha1<0^d0Q$P_NDRQel/nl.9 J`SGugUN_H12>zE#0::s(iZJVbk^wD?@+!FEl' );
define( 'AUTH_SALT',        'cb)yHT>/b@8hS0dJB2[(=E<Q:rf)|za4.6ag!]==*Mbiz26G/^~{HSH ljT@Vqdt' );
define( 'SECURE_AUTH_SALT', 'P|{zr9@t<oAxRgccvzr^;M`>A!/Ce^Nws=}XghfAiUA~N_;r1nq}dM,tuJHbFETw' );
define( 'LOGGED_IN_SALT',   'YUJiqu AnjE/n aWYND[AY`eU~Zg5wc=XZF ?1shQ`GcUxe*DQPu5Jy8e%Mc%?p4' );
define( 'NONCE_SALT',       'w> x4K#%7TeAcWKiSx*V6D)hT_lc7@/^6:-YmJD,,>`j5%5d_Dvn%LnxN^?!%tRi' );

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
