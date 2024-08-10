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
define( 'DB_NAME', 'agora' );

/** Database username */
define( 'DB_USER', 'agora' );

/** Database password */
define( 'DB_PASSWORD', 'agora' );

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
define( 'AUTH_KEY',         'pE26Fkd.4^F293_MPFMEX?.mvq,(4@91<t86|6cjesrR1@pJ`cU;^ 6Zt%/;[Ll;' );
define( 'SECURE_AUTH_KEY',  'ha&T*P@Aa^-PY9TEtK165L9vr:l^:c&q7En#3&QWdsjwiT$f#3!CBy2#QDzHnSQ-' );
define( 'LOGGED_IN_KEY',    '5.%5;K}.5fMS70f Ke@#:*g1p.)T=_qC~dU]>k8W`_#m5=gYolkL}C.GvoQQ*Me}' );
define( 'NONCE_KEY',        'OF5Th,P#k`Qu=bm4`oKz=];K~-Sj;_hE?VC7`26g]{-c/P,UZ1r?g?x_61RGQ7V$' );
define( 'AUTH_SALT',        'e0K>t`8bVvrM?)P.0H.k.&BkOP;rW#AfW[reGasdbl[<.BdX[PU,TrBl:740l*<9' );
define( 'SECURE_AUTH_SALT', '6$4D5VS!Snx!?!Ytsx[C+PR]9.#L7mZOK4bp}E4-/E02A~)h9wm)[A#S4LpGWA<,' );
define( 'LOGGED_IN_SALT',   '#KN Lxay8t=?II<~<oJRW*x-uS>)$e?h4w`Y7e+bBm]#]f?<^sbF)5T#&@y(?oP?' );
define( 'NONCE_SALT',       '(W,56[2[Ap g`WOOc&P`CbRwD*B(B+ezjWpNG1]~je9b,3htX Crs#ORhFu#~cI!' );

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
