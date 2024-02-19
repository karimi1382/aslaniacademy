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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aslani' );

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
define( 'AUTH_KEY',         '<XT(pDFR/amSqm$OQ[%m8BQQ2BWb/`_0KI,8TmHxtVA+ax1q(~_> ]3c_neU7NSB' );
define( 'SECURE_AUTH_KEY',  '/ZMNH$%M2kgFd_ H.Gfl}lywv--//)Bql)P:^q<5(FED[]pJ7n_Ig=9:>8AzXN;6' );
define( 'LOGGED_IN_KEY',    'TysjHU7oqA`G]?QalxpCGmOcV-Y?Lf9r0ubq}rz T(N;LSa3?;O/8Z_Tj$2DK)K`' );
define( 'NONCE_KEY',        '^m[>e]M`E`|a+3]15K$B-$.(X*4+-yaQ%*c:2w$, .Lsrg13y. 0-x>|N}{=k`%_' );
define( 'AUTH_SALT',        '?LK>{rOkdbmOHJ/?1[(cSL>,X{-yM+u?^woN{[pmSN9,gdLa{J`_=e7g.SEKFDTs' );
define( 'SECURE_AUTH_SALT', 'je6K&]}!O]3!N+^ x5^Gv5bA@xKFd`%VdY?RUK*)gh/ I)/Y:eywehlf+/eU,LqW' );
define( 'LOGGED_IN_SALT',   'ijDQcxFWJ@-M?AQS9gRM{:.NQ]X~BG$mM7,!$C^n(|aAIr7nw*:)vA[;g:yD^?gt' );
define( 'NONCE_SALT',       '{bo4m{Xy:-` 434r;05h[grK}:lbhc;nj=6FRbVESXlC7e-SH$6.fVZjslzBw(dR' );

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
