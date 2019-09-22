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
define( 'DB_NAME', 'm_app' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'boinet1234' );

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
define( 'AUTH_KEY',         'prK[cP-_nGSJk{~Ih9El)>~$_}0U;OE?)z%]ObmmtrkNSc/[cg:Ns{2<$XGehbV/' );
define( 'SECURE_AUTH_KEY',  '|Nsv6M~?K}YQ);cRNXh~,>-O !u-^UjwQoAT:q]_pY8wk}$G!19Y9AVP7@X1|-#y' );
define( 'LOGGED_IN_KEY',    'yQ`DY[Ke,A#~g_Rwp(?Cu#o:O/<Vc[%#^V bz^:1wT&/Mxp&;61G4k%.# V)U}uG' );
define( 'NONCE_KEY',        '_mVu[Tzx]v!sr&#yTE^;n?8qP/,* ^<6 c]^G9*E2+@FdD&l4;?TCa~|/Ineq]mH' );
define( 'AUTH_SALT',        'JQz27|4.oD~_`ndRU3F;F;imeBjTuL92arKkU}xJ|&Ad5`Fx1 ;F?Lkh_k=fa|,2' );
define( 'SECURE_AUTH_SALT', 'd^6!Ubpxh<wmD] |`B_nm4na6!y|P$u`1=pS3AGc^>TY$ZU9C2[-rHr.VzfW_/.N' );
define( 'LOGGED_IN_SALT',   'JcyN@?9RiJ,v8D*9T:X;,S~nUOndo<[)6/8PBo8p?h!krQO%/9>zm#(2M@Q:f}M.' );
define( 'NONCE_SALT',       '0/};SZe/QSF)9i<51~mJuZp^1rj>%vSS%dVCf+z/^eJ?d$mXC%M&/1EmYcbeqzzP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ma_';

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
