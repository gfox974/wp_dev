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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<?xMDc~H;>iih-$-!IDh~{l~t5`B0%El`4i#L!sxK3gj@ksXqA!Hv])h2BFp,C]]' );
define( 'SECURE_AUTH_KEY',  '&pb1Y&2cCE@#~1srZKGvSt[*,5/e,noO6`-?m%}mR1zzPs-:]A,-ul_qLaruaj !' );
define( 'LOGGED_IN_KEY',    'to.pV3tneaD1K8X >^{{yknPCr2x>h8l3aw|Z&dGSQv^[0e ?ov%.8;=@je[:$gH' );
define( 'NONCE_KEY',        '<],rUYXG`xlaUGz{hU!,=13q/nx4;*)a;LQ70}wrN0#i8bu<%m@bH?V5TUI8fAc_' );
define( 'AUTH_SALT',        'p3ugK :(NsWyH1xW{zj2N[F{gL@pJ)ceeVB;$Q<M}^KYatME6TCBiTl5UlJ0MPR<' );
define( 'SECURE_AUTH_SALT', 'J{IFnwPL ZZ{REYu`h-Yv=iJLEducT)@)}&oBWs&^IRL6dB]IK_3l)=|i_s`j}yq' );
define( 'LOGGED_IN_SALT',   ';5Y+iLWX2,maH,+`4USrU&~bo|3^(,sCa;6v*G2u<}zx@P|01XDtu{-Z=M3~rX{o' );
define( 'NONCE_SALT',       '92IDs)`Ij-m<y+6;7ek1ttsDqu0ZD35*%gS,xnx2NdYibOOH]Pg)f)a.S80g3Qp3' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
