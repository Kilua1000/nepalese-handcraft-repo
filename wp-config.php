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
define( 'DB_NAME', 'handcraft' );

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
define( 'AUTH_KEY',         '#_{@Vwq:<qH0dz@qHh]dq@saI=T:QD!uKKEnv[>-8ud c%#,d2#QqJqeouwj?S+X' );
define( 'SECURE_AUTH_KEY',  'Q%5tm{$` YtenL.XCmtZr7HBxmN0R,x-m~{(h<GrkdK4`;-NO<:ENk?uBHl`j3}H' );
define( 'LOGGED_IN_KEY',    '+D11~#bbnWk4=yVHZC|~4D5-lcD%h`Lvi2.U|$eXq.=dpG%0@I^;y(W#p37%oDX{' );
define( 'NONCE_KEY',        '4qA3(4C=Q2?R(zS>_Y*74`)K2(*$E#S|@Y7*UeGvEElykOO}D[<oD#D9j_xI%4CE' );
define( 'AUTH_SALT',        'z+(Dp0vJ%K-f&C2r*Z~9XN163bIH7ei5Q2P_]nq:Oo2-O_BXtYeH;NrGvQ^&z,JZ' );
define( 'SECURE_AUTH_SALT', '+qav>t&zBS=RrBRCZ3^n}`10*YU&.}t][pzT:B87&A&QCHle(=,EbF~%F*0LdZMH' );
define( 'LOGGED_IN_SALT',   'A:MO423KISzOIV/ffqRxZG2,U7PEh79(Bni4aF(:.U1_q+9E9Qm$jt2GhXQ-PF]|' );
define( 'NONCE_SALT',       ',FGbeqDY#:rRgV7em!+2K]W0n2%RIb1:8:VUu%y:n8s+KKTRhDOT.&dH4|0<]dDO' );

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
