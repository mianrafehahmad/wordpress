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
define( 'DB_NAME', 'wordpressenvironment' );

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
define( 'AUTH_KEY',         'v9mgxs${=$9w$:W.1rP2GQl*LO85`14G^5ig;qyw1pA699xs ?cIy((|+.CcQkhF' );
define( 'SECURE_AUTH_KEY',  '0RQFBLV;s*&IhGGbqXj*dI8dxB8*%c_C.k^2F&<<fOeF{],Lq7LB}>%uuL?^xoL-' );
define( 'LOGGED_IN_KEY',    'n/1#KAza8.d$wuB&hwdX/>nWfR(.48hm]gHQcP8S??LhRtnrSnG;yz~W^!+ DM>R' );
define( 'NONCE_KEY',        'Idp2hx|uE7z&5zusgt.uWEs3!$#qFVhApWRNu^8{0xOAj6#LY&Ss#*Q&A/i&X$n{' );
define( 'AUTH_SALT',        'QAY~WztQ?3up{V%gP>88=3f52;]>7M`C-S<{Xl<oA7?Q>6vps[<~x0ZO=UdD)|9,' );
define( 'SECURE_AUTH_SALT', 'J5lZ5cH?.i_h&;YM3h}J;;/2*5(@+K`)oMrki1n.2v| @%DR1rc}y.s2C6EV23(A' );
define( 'LOGGED_IN_SALT',   'ga8=#a^@eej6s}up^_>pxG|n>$DefzT(om!sYG:<pdNqGT0W5gOfi5hc1MEs: eg' );
define( 'NONCE_SALT',       'ExcziVCP.0|Fi}y0FL, ,s0WJuC=YWU]HiGHU-y{i&6W/U7j=gpJTeqrcJx1o[F:' );

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
