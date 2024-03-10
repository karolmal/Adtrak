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
define( 'AUTH_KEY',          'h2%|mo|@-wW[%/n$xb6*Odyg!R[ij#bfdTvebDPh?93`^X&D6SDT8#3JWse_puTW' );
define( 'SECURE_AUTH_KEY',   'zKbs+0pag,70T|!Bz+LIeG$I}W@XZ)zhrZ+@J+n.s^>SUfY-V.p6di/d?j8`5I:>' );
define( 'LOGGED_IN_KEY',     'za|x?,)wb<v8aMdA!KUOebkI o6rlv}n&z__ZZ7o<z8F;l!}:wa~XthtRM{GK~ O' );
define( 'NONCE_KEY',         '(&;G_(jU(Dj(,z+dv}2MWV4bHDB{*D=a$T9)[ypF-X_7/v79|sVpkK}m]G.CbkK5' );
define( 'AUTH_SALT',         '[^yh+Es4q`=w[9bEgc,7zDoUGj{7i#xR9uL}3iMhHRtu:PStLA,4Ob[c#R8rv%OV' );
define( 'SECURE_AUTH_SALT',  'mO-Gd^`D >1H/_]HA_PR=zTf6e:5B;s!;3<:gf}7:.t,hlY2=Dk}4di94&ACh!4C' );
define( 'LOGGED_IN_SALT',    '`*D(O!o5J-Pm%+KoCFB=7h+bUTVnbf&!q!4}|0,N@nzeP[c1v}/rNG[}K,vJP07?' );
define( 'NONCE_SALT',        'AJvv#V<>&=[ALaR(tRa1<GW<u-~LK6^+U#!.@8>ctZF+xFB!}E xj?1S6W*}^ELr' );
define( 'WP_CACHE_KEY_SALT', '#21HR&/{%@N&T%)Y~$fu!w6nxHu|Npz,qHsU8IDz%p|,VzL_j_0~m.:(;q#1y0yh' );


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
