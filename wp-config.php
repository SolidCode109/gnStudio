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
define( 'AUTH_KEY',          'mGM;kS~~6nu6kv1Ni~TCm;BR*Ew-gu%P7N|%.h J%K~1lNwBSg ;N7zOGG4UAs?5' );
define( 'SECURE_AUTH_KEY',   'SIho3Ixyn)|Fr4$<}Lpzpf#U*(XjHuhqRUU/?^w}HK]@Cn95/1Q8xHQ#4T/6]3gO' );
define( 'LOGGED_IN_KEY',     '(;/F{y4]8nkAD~~<r8Y w(0Iz(4+V07Bne1KnWJb</CLU6OcS7 4Y(S3oVYmph|0' );
define( 'NONCE_KEY',         'ZT$?jw0L^}u Ls-3~Kr wB^S,GucVp 4}@lO58}UoIwn #;F.bJwV5@4uK]tas_`' );
define( 'AUTH_SALT',         'yNzdY`;$/>Hg),y.kQ9ynXKM^66$g`f}E8<R;G(PNGfrB95<AJq?H-|~uZ4K:W&&' );
define( 'SECURE_AUTH_SALT',  'd]a?qE>>*k5DH&IqfFU1fw=Oet!uIW+|zLBal0%*]s-,howXerUG]2wY1sP]/JtB' );
define( 'LOGGED_IN_SALT',    'a(Nkfrxj/(lFVf-v9H~h?~&hytbv-9a , Ngub2B+/0PctE r:^_SG_0n()]n>L?' );
define( 'NONCE_SALT',        'fcCO5NO}OUf4a9.^o3wv h!DR&FzEe@G3imGNL{6`kU41HIUUP<uFSHJ, en7sSr' );
define( 'WP_CACHE_KEY_SALT', 'b }<&<dVyMGWPb{cSQ,:z7SWmSDHb8WeM[{f}@<nhHoD0S^JDcIR 4W[rp~zc<[&' );


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
