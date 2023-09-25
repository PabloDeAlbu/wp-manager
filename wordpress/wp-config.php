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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          ')F;4gOiP^LwU/F/_v00ox{Dt=~l-VRxBHlyX>a=bf*e.wPWV@9|Pznnf_R5]HjTk' );
define( 'SECURE_AUTH_KEY',   'w[Rd)t2`HGN{+Gv-beb^p3Rr5_3n/jr`ZgN#.., si_Bm{R29$N#/|*g-4CC2>U:' );
define( 'LOGGED_IN_KEY',     'nxErP*OF#Lek$a%K?F`7f+iVzjc.%R.BnuPLDmaunlNN5Y;d^q%7,#]l)>80^B!m' );
define( 'NONCE_KEY',         'B`oCdBrffN!JoA2vBaur759/jze|9pVaS1h~?[g-Hf21q/9o8X!{S5`^xSwPaSNt' );
define( 'AUTH_SALT',         'ZrHV}/YZI`Dje~cR)!x`A+Jj@eppQZM!X%^czbB/r-%+/pyaTh&OR(j/(qum&;W_' );
define( 'SECURE_AUTH_SALT',  '`(6>7/GT2d_xmS$2Ou]0R.zL(f7rl5}*8m$UR:VVv3NeOb^6}PTlTcMdjU,j^U= ' );
define( 'LOGGED_IN_SALT',    '5+qy:On-43P,!`ghW{PK>O%g{f[N:E-oj]D{s4m]Pcx^~jEfVgQs+XBwCBEQs*H&' );
define( 'NONCE_SALT',        ';bw5d=SB3?=pxCQSs29`H0RVhbJ^P3B}g@OUn@)1WvjL)FOHP7Hm`k->bDv~/MAC' );
define( 'WP_CACHE_KEY_SALT', 'A@[,&(PFUtb7Jf)-q!{EGD4QaA1:@M;QGB[-qsh)$Yc-![kD8VjG&2#k1HcSW/oV' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
