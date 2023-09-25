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
define( 'AUTH_KEY',          '6Szo=ld;<ViEBRa85dy2qG1__-CH8@b$l?7#iw.,b8<@>{XR/?Ob8F3(,Jy|}QN>' );
define( 'SECURE_AUTH_KEY',   'h{iZ8kvCpeYslt$=H814/!c[5k8Fiy;7aiJ`ii.wZLS)4ant8pN@n/*S|o{54%4D' );
define( 'LOGGED_IN_KEY',     'CP ZeE:xfZfNp,7wOO*#-Xu><^PL([ehquXj%4_Q}mi0-wucN=*[MB:s<85/cJuR' );
define( 'NONCE_KEY',         'IVsE`}Y0?B6K=18oASOPE}_{69_*=(UGp>rcVu:/;M7EQa&-^?#~9wd$_8bnL+x1' );
define( 'AUTH_SALT',         'x]D3TA9z?UIR~d~@}5|3Di4n0p?:NGvK$=uK_6d4SeHLk5GO>o~8rR3%f|WsId64' );
define( 'SECURE_AUTH_SALT',  'uj^`q!Y*bncr1OiZ2T0]7t-eV7f.lF/#cL0s803V^@/RPpL4VCslX#&N!8lLK{f+' );
define( 'LOGGED_IN_SALT',    '}3JBe#VZ6NGQ4Kei:Qr*9+EWD `7<$v&oE<EYoG#Qp&vjwKObrFSP]~!_h*{4LmP' );
define( 'NONCE_SALT',        'j>jrsZz!o9wc+~qP@AuG?{B.iHmBOdF:H6WoH4(*`o-Pu,X0}/m`2j*Pr@laj_Ge' );
define( 'WP_CACHE_KEY_SALT', 'Sys]CA5.Pfrt[UW DD~c=8Qj!4i1vzLSAx5mRib)(mXaQ79u0LjWqc3C4>QekeR;' );


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
