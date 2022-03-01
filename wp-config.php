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
define( 'DB_NAME', 'mariage' );

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
define( 'AUTH_KEY',         '#S/l@}0SGFPgfC3ytrLxOZT47u;Jv-pZ4%6nshj;Tts}:OHu4g/)<(<O<3?`9`EV' );
define( 'SECURE_AUTH_KEY',  'Ve%XKdzw|1puMKW|d-Gf5%}?|^Uj!<atl96hl%_Zu)mVbkEmHFpJt=sb.hWpwOkg' );
define( 'LOGGED_IN_KEY',    'z8(HAPQH+q4NQz_rI#@W[|wDJa-w*VnC$FsL]2@-J@3ah 1WTca]f4DyY9NB}!me' );
define( 'NONCE_KEY',        '+>Aa61dT4_8e`[qpIh*1%jHBxOe%]bNN=/cRDP]tL=RN!`e& a<CANYi%5<I8/%6' );
define( 'AUTH_SALT',        'S+$1,<M@Mx,ii`b/__;OH|T%1 #?[@0KiZ7~a}q6uMGw}$g(jcPOAm^o)p}hnV|F' );
define( 'SECURE_AUTH_SALT', 'MP@!Y?^oZf%@24X3!keVkclr/ {KqC/#:CDb>!FXNQkE. sYt#*~ji^->`[9j)<w' );
define( 'LOGGED_IN_SALT',   'AxfA{S_I_.4}tUgpKg-uGW_sLGqy>lr=R,ms`NPJs*XN>)zLDfJ61Ou%q]?1(`7i' );
define( 'NONCE_SALT',       '/PX8l8aZ%PoQw@LVcQpK[KT^My?bN4j<^v`Mh;L={jA?Aj<a^bsP)bEOF;l>v#y,' );

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
