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
define( 'DB_NAME', 'webng_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$%;tz/>aLTpBIt2&B,A)vvGW}{Q/&qc&)taDvsHw8iRraOeX7c`Nz 9)>F8MNB|&' );
define( 'SECURE_AUTH_KEY',  '3l,z2AkeaW2]w6D!apo+>}cj@]]iIe/]WFox{_b:6,5? Mia1aKRYki7Ii[+Mn,T' );
define( 'LOGGED_IN_KEY',    'YODU+2R!#kH|GPeZ&^@$d (W>p<.Fm)oJH{oyI]`x9iOcw|~~{(_[;3Sq-$=ne$N' );
define( 'NONCE_KEY',        'PZD08t(khwZq#9&@J$<)bB9IdF#PDIGNNHNGbMducuTfo*dYuAn ERtX-H-a[j)O' );
define( 'AUTH_SALT',        '!m!#7L0Nsf_,9LEP$PaSCr9LbS-3l?(x|yY{q%?1*Z5HLhlv7,W69?dL<yYbJjrh' );
define( 'SECURE_AUTH_SALT', '&SXr;[[<^st%N1kSep<TlAui|] ^rFf@P>i{olzrY-qAL8[ htV7KNHJ!|!c(C)m' );
define( 'LOGGED_IN_SALT',   'Q{#eXw|Yp8Z3?4xK;L2_px+$Yj$A@BTW6d3wQj/a>HYDcZr>9EUdsKom~a5^3Q1]' );
define( 'NONCE_SALT',       'YFDU3MmXRd8FPhOtbJ7![,`c~nLO7OLP3w[(K7;cO&./&Tt:/9UvsDmCtc1W_*Zx' );

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
