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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'AskMe@Invest0421' );

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
define( 'AUTH_KEY',         'vNKCinhYo!D8Jf^;AtDQ?_%-_QNht%3-s4W/!B+:Z.dYi^eFVIONFbgs0A+)VD{D' );
define( 'SECURE_AUTH_KEY',  ',!a}c9Tk&[)jm+?H/eJp_]~N173~n7$:n dr@o;U=0lbI#;3:Yx!Fy 4l~lGwzS7' );
define( 'LOGGED_IN_KEY',    'RDny8)UO~2Jt==]q80#tqgv447bU}&&hbR_~gI>5B/sWO!~=7z}}j1>6^Fp[DC2Y' );
define( 'NONCE_KEY',        's$L(*Vuezuxbsr,#49Sx}W2kV:yt%F!Wf7 ;V|FEMeKJj$|KEN,)9g9J|$H04(~U' );
define( 'AUTH_SALT',        'O~0k!Ag@gOvWJ@NS~C<e#Y@wxOdH0?q+8.^D#W>Dqcqu-p@z YtGE|&#^5U`E1Le' );
define( 'SECURE_AUTH_SALT', 'kc7D8Q A$Ci,W?+s)q M6cXa:}n%V#fxR[Akt ?+AfOps^V1MRG *|sodtlexE[I' );
define( 'LOGGED_IN_SALT',   'P)BtS@hf=?k~<TfdD%CQ}BO)%:PTkygVgdk8vWRcRy_>nR5Ng^f,[g/D2iWx4%p7' );
define( 'NONCE_SALT',       'D%e>!R:w@%!6$~lO>d!~M;L]T1.DZb=%DW1{xqNyz|TXBt(@sWs>FoP@-`dM%63S' );

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
