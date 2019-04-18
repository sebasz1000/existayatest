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
define( 'DB_NAME', 'existaya_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%vqjnU;KQUufA[]s9^[%q]u*(=_7K=jW@8@&0.*b>.hynE9v|kN^od]EkiK~!?-z' );
define( 'SECURE_AUTH_KEY',  'f(;5rDFM51a5SL6fI?@h<(n7yGNj5T+KUdAXtrF}}cT3U;`T}eXp?;W(jjXjbHD@' );
define( 'LOGGED_IN_KEY',    'XjOe=E)GHBy1Y#zC7A%nm+~nk)F}a^o92Zlvd*k#zd{d#BTh8r)eim9C_dpQ=axc' );
define( 'NONCE_KEY',        '2v*A[BT./-VPSt#D9{(EQSaF2iC:zNpu,IZejHw#V7LFE|^r94JA2PaSAkdve6LA' );
define( 'AUTH_SALT',        '=4.PMMFxmgIMb<1.;!ij=ygV;&RD`H+rQRhn~<Dl$r^$TRL2Au*j^Q9u5:.s7P[A' );
define( 'SECURE_AUTH_SALT', 'X`6}$=U@i2p;n,sH!}s+J5t??GkAz2$f=^pr?ub`E0CxMG)CcB_%]fkcPpz~UAeZ' );
define( 'LOGGED_IN_SALT',   '`mVqH6;h_hYMB1aNNYr41+>Mssf Gk8&n8^x=*C.8yU|ZGO5E*^#DvJFE4_VNK{p' );
define( 'NONCE_SALT',       'w4Z^ k-!23x#G<xQ)cm5QvuGPWMMYy1}RwOFcOhacU9A9Z+-xZ !nQ_9j.oK]fY.' );

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
