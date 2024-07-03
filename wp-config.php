<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'FS_METHOD', 'direct' );

define( 'DB_NAME', 'Tarot' );

/** Database username */
define( 'DB_USER', 'vedika' );

/** Database password */
define( 'DB_PASSWORD', '123test' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'E^?hSIbmMzZB%e9?F3T%/y~aq/3W!Gu5O#S<nf!biK|nYp].@5VTylZ1*bB&3865' );
define( 'SECURE_AUTH_KEY',  '%uGe}+A7$@zmB(uM3K&mHc7%iFdP+-s~K%]7S(l4dAnIWph3ux.]N$7(ftftm}oe' );
define( 'LOGGED_IN_KEY',    'ZpXBJ/*de:;66[FQjd81yJ_e-Dh#X)s0JovoWy)^W3(fu`ncadyDRU;7uH&l@*l ' );
define( 'NONCE_KEY',        'hXCBlM24uG}ZCP_!ef2Vy,/Tc`K#hv])%0!V>4z#Tc!S;r_#+%5p,T6Gsm&<Rwv2' );
define( 'AUTH_SALT',        'xR)!gEbsoNG*>W`+_7#ZU%+ P/6d`[+I-TXF>IQDH~V?~fs8$GGzweM:4SbOjo[@' );
define( 'SECURE_AUTH_SALT', 'l%>CZi:F19j_hSNc6udh1v-fXS^W~$@LT8A*i~Nhus2p_b(r[xjizCgy7hLAo|)M' );
define( 'LOGGED_IN_SALT',   'yk4o%Txdmq+20YTg;>2sL5L@@^uV5_aU*]A@VG< O^CP#+fpfXXcH6oG_gm^<>k(' );
define( 'NONCE_SALT',       '! ;gD^I$/(}/{!ePea:$8TFn7$@D,|R ,@3i DZoI>-|:(VybK+;RL!pbCI.rv*Y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
