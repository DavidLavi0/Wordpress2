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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'jw`@~,-&*A)5gvLty@i]H+)9Q^/b!>fxe-t;12yd*^$TXVZS1qD2mQ}Qv/]%al[N' );
define( 'SECURE_AUTH_KEY',  'TDR$.};_B$iT~/Y{&[J&lu7G{5.|t!D3#PnzS6kxOqc-$QD;~1NqZ awYD-Np_Qq' );
define( 'LOGGED_IN_KEY',    '~IE2RYTlE1=H](bYJVLbs=-|Ax!FZHND=~9XLmfnHEv4,?F/WLQ_n:2fx`6*q1m6' );
define( 'NONCE_KEY',        'C[R;elHX7~PV i:kv7Y$AmSSt}*`ZUgNKwgg4T!He;eCU=c!.]6?<dyT:tigd%^M' );
define( 'AUTH_SALT',        'j}UyNf2s)mRT1/C wIh96V-Er(WPnQNt.l`tYmxk^uzF[U[38@W|^GQo:fLhi|km' );
define( 'SECURE_AUTH_SALT', '}ryYqC^YOpI8=qQlrFZ*Zi,cTD~0M35/LP^,~$9bfh+9v_?3]^SG~b]*A9G62~T0' );
define( 'LOGGED_IN_SALT',   ';$]X/$N=:|a2(WN_6$cKI9wA+/S;Q~qOS1NT1dF*s4wGZ, <I<1E)b+nVL-2#7T`' );
define( 'NONCE_SALT',       't:+~0)A _dp).nCE.!bYjo._VKP.UmH77v=H>c*t{8=]TmC66oGq|v_KquEb~-vZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
