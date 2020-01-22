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
define( 'DB_NAME', 'festivales' );

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
define( 'AUTH_KEY',         'Q(@4)e[WD1]d+?zDe7I;@v`!HrqBVcfUtdbgTNQN;Fq|s)g#00=LW.Ycsgyo,~e}' );
define( 'SECURE_AUTH_KEY',  '?*Jm<`s<c(dY*AGkfTv]}Y]*Ejusaw}A=a[p#iHv#>@1#><CX(|lgk >Lc|m^~9_' );
define( 'LOGGED_IN_KEY',    'QlgBtULg2Sb0s))WC2MZok`[CvMu=]JpNA8<[c$RbSl-b):dDy#%r:Ynspw)T%0s' );
define( 'NONCE_KEY',        '}Y3iy6gBP,Ts8d>Z*%0F>9&^exoy.oyU8=4ZdA(yZ^rhPsa@|^]g<m@,e_$ZO}Ys' );
define( 'AUTH_SALT',        '127k/E},!8oj=y;;#s}]nR9P8EvnBN?TDGE[}+}s<9/`6#[hCT]2MLKd;_4%P.|O' );
define( 'SECURE_AUTH_SALT', 'qK9rf9QSp.?&pbLvs+_3`/O+s%bTP|dX60lw+j<^6[5{(S>*kMeumk~f3[M cvA~' );
define( 'LOGGED_IN_SALT',   'vG6w5Z,P|%aI=%?$PvF2G].,%o?{KVq1Bb;`:+vy?uA~A,y7}r4j4eN$trH;h6|{' );
define( 'NONCE_SALT',       'Wwy&&s_qsqk>R5|$u j5Jx>r8b%!i`=MD|~!4OCS6(=6Em</4ic<XTsg*ZcBo`];' );

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
