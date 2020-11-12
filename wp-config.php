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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'Xo3l]zSXw8%buA0{2(BbJRV5TqrmTU7L5*>$MhVXCn)U3ChDPX5J:|Ns`VBk*JpZ' );
define( 'SECURE_AUTH_KEY',  'GFU51s@l{V+45=e%c9un[ZFm@@?l?F@7Q]7@2n^OnVHwNm,4sO)w)PCpEQ}(w *v' );
define( 'LOGGED_IN_KEY',    '!]1O&cq]+!s*z262HGO{E|]okCIecQ@mtMXqs7;wmB2H_@<r$*srk;B9g14Fnqc&' );
define( 'NONCE_KEY',        '5fJhoLp?XM:[ V~&8#wJSVR<7[9..fFVp>k1#A:/4@7/F2?l}!kWlDA:dvrH(*vL' );
define( 'AUTH_SALT',        'dNSB!j6zV`Fx_|:_Qz]v(9/frfiM$k(KYQypSMe!N9T2^rW7qilDP#0deG=LrGJO' );
define( 'SECURE_AUTH_SALT', '[wNc|R4t6:; xa:I@ym4&pSM>X?05JSNjtWr9&4m7%g2OYp 7)E+AHZ|EEoY1C(Q' );
define( 'LOGGED_IN_SALT',   '55yHP(1*6nFfJhjnq[D[CSPQ _oY3T`M3d#Zp>!rtfxFG):y02:jNq](5MmunSkf' );
define( 'NONCE_SALT',       'nT76K20t!|o&*9g j:62wJ|tW1@v2HRNKC*ov8r@UGe{l_JJ%Fdy>eBT2D+.>~] ' );

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
