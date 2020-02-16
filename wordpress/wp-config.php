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
define( 'DB_NAME', 'WPtest' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jzaVnCtWUkFaT26#1' );

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
define( 'AUTH_KEY',         '#A`hc8%Bt?k80)/Oiwl-<v$q{Vt#|dP@Ut7J)B%sdxfA&&-D0m[,%fzI&B_>jNvP' );
define( 'SECURE_AUTH_KEY',  '02]jr068+(IHtJ[f LbdruQOW*(Kh~hW5RJh1,!E6~pRWa+?7269c},OdFd.Xte/' );
define( 'LOGGED_IN_KEY',    'Xb6uL=;:*u<>-WhwbsO1*Iua3;0kFH=^39g<^PrVB@vWcQWU[dfdWy+zAH((Z}o!' );
define( 'NONCE_KEY',        '8S?JPhMY5$3/`B1j9mwyiLr#--W4gZXca4Gx2dF*G4rc.DH`6VG/&/t]v{.Qt.Js' );
define( 'AUTH_SALT',        '/c+=V7C5-1/bq9-[R:>!Z&bR%R?)ji?u=utIyyPeb(<,X-=dU.hF|l2TM%NBdK;s' );
define( 'SECURE_AUTH_SALT', 'vUOZ{F?_&-Xd/KfA_x/>pF6=e.dBFNoYGk>E_t@)@1z8xMnt1zp)[7p/p:3 ;Rm.' );
define( 'LOGGED_IN_SALT',   '#Hj9!FU4(N@?MC[6Jo8-Gt1!0l5jEc:{+8}F?6sA-EpFGnd=%Z7s4wGn7+gxCuI(' );
define( 'NONCE_SALT',       '<`*z{@2|kZc}?[I>q=SoDixGI-_Trfl_lE*Io,Eh<a%hpdU3KoPp+._u<ykm+}w9' );

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
