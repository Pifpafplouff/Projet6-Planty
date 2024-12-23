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
define( 'AUTH_KEY',          '1yN0N.?M!oACf}kXbp.M$VTk-$d$}*p^ehpATt~:J]?X=ne$CHB&aWn]bBv3ERFK' );
define( 'SECURE_AUTH_KEY',   '](dzyFiKXC6Eg{OP&.}Fq1Q]sw:o(sz6Q#P#VrR/MR>fjKzLfwNwu^`>G@-@RUYg' );
define( 'LOGGED_IN_KEY',     'O{E7+NQ<LUJU+hgP58>V7cdIK$mkGEiI~J6b|r=/fcf5RY7;,fAL?tj.%Wz6R/kp' );
define( 'NONCE_KEY',         '$mK{7_0N:Y!QIL(LHOI [k+(5x(y+M`*IRT#-[EI ;UI28bn%LLfF#HXP<pH^#fZ' );
define( 'AUTH_SALT',         'hTbX](US?AN.glU1_&NFH2>LB0DIa$OjF{9e%#*0o96?&)FKYo|y,L+Dxwc=A9Pk' );
define( 'SECURE_AUTH_SALT',  ':]HEw9M!g?o1|14<ivS|?(gmZn4Axz)LIaALRKV&4E~E`7!:N7fa26u2X3%#U<Rp' );
define( 'LOGGED_IN_SALT',    '9E%_&b=Q{5S.[Z25T*/)?nU;ufp`Mdgt:1i,[R)f+4j4~3u5z(+|Z44DxxKxdSRO' );
define( 'NONCE_SALT',        '_Bi>6l_] gXhP5&}`s3=O`Hg]S5.bM0ESY&dLMb>Q4!EtJ$kxAV!K-7fi`.+nFl=' );
define( 'WP_CACHE_KEY_SALT', 'C<!(F&u_ghs^ygv@)@Dy 9L.`bj>e`}Ex-Wu3JlB5WJ=.f@BbK-5]tZto<zw,ZXa' );


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
