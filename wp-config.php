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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Go-KbxO[^v47fxqt$$gSQ%P).~[s~.RzqItzB~Yh,vZGOMiYQo-(bP`3n^D,4.|5' );
define( 'SECURE_AUTH_KEY',  'f%b;Nd.)^gjCEK=PS;!uD)AK=*G^b@@dX{i33)*XGRmqf^6}z$748B3of8D7~l4I' );
define( 'LOGGED_IN_KEY',    ']ywu+yi<_BR&EgS{txvR{dB:b(I>oq(+^BvLW&M,zj/_fz$c{t_T~)Wf*uOZ[O(!' );
define( 'NONCE_KEY',        '!{*.:KPtlKtHF`uxFT(GGz~_:E~%m/r@ocDp+!~}zQ*:c#oa9Tb&OyjpUD7]1yQ_' );
define( 'AUTH_SALT',        'Bu_qXl*7ExNNS@-w<XMrKxl:bOrTc5*#Dcpxq3Q1F|Yoj]Q#>rw?0Ww(xG-OhPw.' );
define( 'SECURE_AUTH_SALT', 'XIo4sm)=Ti<*~7d5m)w%T/YsGHCr(SCa>UlZy2-J{+cYGJ-m[bp=gvNABW}k7L{(' );
define( 'LOGGED_IN_SALT',   'Q$T_Kl6%F^|g,(6RV`P}yS=#niW6i`f~sA9g|^=pT~(5Q-!8m+Zjgj`Dwu$}^I$-' );
define( 'NONCE_SALT',       'W=*03W<P!^5K4fyA``mgf,L*9@a>g]dL>%EoEX_fXz*}zXB7M`D>2`JQ29?|$tw^' );

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
