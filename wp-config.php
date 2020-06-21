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
define( 'DB_NAME', 'fastlinkinternational_db' );

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
define( 'AUTH_KEY',         '0w*>[mp%iwx$7zIqO5UYzF{Y.gxDuUz8h-q/O62;qQKZN~>{eNeR6coYcyug%}Iy' );
define( 'SECURE_AUTH_KEY',  'yXQCInq}dJ7*n3d#?;^gt7fN#sfT|PQTI)S=+)E)iSFlX9pY)(S~!5X4+QG7M?~K' );
define( 'LOGGED_IN_KEY',    '?.kljDQC3#i0(KQ<2ttG^5-!#C$/o*=fU_X`4BR<A]BWAv%tRJ4o%9W$}<{`$lRn' );
define( 'NONCE_KEY',        'wTyjMGshb6Hzvvhlq0D*UByM8FCJsSsj/kf)W4y4J9WP:zj4SU~8[1r-iUT|H~(i' );
define( 'AUTH_SALT',        '(Yf&!}+T8,CcD2q(u!]OY@;PO9t`O^rs,=ar7(K}L}KJJ#>taGLohjA+-C<-re!X' );
define( 'SECURE_AUTH_SALT', '%)-6e(>q`@]tRHTCpi|#)yc.nssZQ !KkY!|kUtu{X>0>J3lI>ic3G$h -/C?>8~' );
define( 'LOGGED_IN_SALT',   'f|BqNR](B[`2VGM N6.>nmHhIQ{0QYr5Z|%Sc^H:^:>GCY%Vq **k|ewrVuc%7N>' );
define( 'NONCE_SALT',       'wD$bZG}cEd}hP[BkQFfRmC](~Ms~t07s%H$O{6t~%CXQ*^6qc]7oq[tAL{N*.KM<' );

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
