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
define( 'DB_NAME', 'woocommerce-theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V9JUVIZ^iiHajmWZ!RGSO8fR^Jtr)-MCs1p88>mfo&TrF*h]e@WK,9X&4lMTAoU%' );
define( 'SECURE_AUTH_KEY',  'Vcv;~OQPooirkr3%wfgdbU%!tFU{tQzb1O%W1Z`t%4YVB+esj>bBK|<J2!LgZeD.' );
define( 'LOGGED_IN_KEY',    'gTGC,7:/68Yh1Q3!Ko)vgDWMLU;(TWbfFr77>!fRs = LWNNg)ZUnmzc*tL#@>/$' );
define( 'NONCE_KEY',        'x8~Ks_p%|cokm8+7hT3u%8-8?g}cZ@@$XTR-L}i(p]5}JxHXEn`L0#{Q`Vk!=Zra' );
define( 'AUTH_SALT',        'eTo!d?;kWZ7X~bsd5oo,#~J=gl}n- x&eEk^&!-.w#Mt-Is.]uz&cUv.?YY.Un`F' );
define( 'SECURE_AUTH_SALT', 'ew~S,&sLWC4yY>cf][Pu{`s=xFw*oeakmul^}{XP-}6Vhr_XQ !=*,E?YoDoAiyu' );
define( 'LOGGED_IN_SALT',   '?s>$?2>6R$ Ys6X,[+ z|^3*)N1jV?;GXD6+rQV<+(aPBII-EzkY&^{Yu~Y&drV3' );
define( 'NONCE_SALT',       'F7jS!|!PzeURh*pR99!i{|NfI(Yom[/]3o N7@C&ojeRKnTk~_$aOvF3)v &|,#9' );

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
