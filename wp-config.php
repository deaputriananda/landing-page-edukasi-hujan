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
define( 'DB_NAME', 'website_dea' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Lp,nsC.D6Jex9Qo$RIIZvVIP{GPFz2p:k{CitdGZ1, [Eg{&h0=UouYI/@F>J~A8' );
define( 'SECURE_AUTH_KEY',  '%.y3ZaUlj6[1kx~c7}Mx%2={1SX+BgF[X!s=)x#Z6GAuq[&@iMja!?[u$4qVR@>)' );
define( 'LOGGED_IN_KEY',    '*jgj*Dq/;v;}zS=2epl>X#{XbZT?]_]nscrs#Z!7D-#id/H|q&t.qBp{LUKKo]rO' );
define( 'NONCE_KEY',        ',Nhf2Du;S2<q.*8+(Z(!Bc`noX5N}}:ZfS}it?tzVIA* l[xYOjE&J;>EyD1l]){' );
define( 'AUTH_SALT',        ',T|3!{$$Wb$1)N@Vb;/]~@@2Rv$k!suB>Pu&wA}TfZ2Lgaxq[Tq6iMlLQ2]:k2:q' );
define( 'SECURE_AUTH_SALT', '&E2J:}zd#R)Ou:YMgfV;&ty{ya3}9kZ~XKpDM_Vr#!(.z UzVPS9*Y0p74XAZCg~' );
define( 'LOGGED_IN_SALT',   'O;8yQZJl{%b[~dO.|nS.4;{=BGE `dZ1t))+47zzh2:|8&C_EVC&ON622j`G%HBB' );
define( 'NONCE_SALT',       '(p-B`k@QUn GJ3lM?TbDfF<G+~4y&bKuaQI@eWY(PEmND0EjBQ19>`/4]A!{,^dQ' );

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
