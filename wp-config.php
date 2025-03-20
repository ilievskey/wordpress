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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'KVq ,N%413[OdN3?o70?%k2iMU{g13u|,UK0beb,-YQn=lFH|_;ixY *xv6EKybB' );
define( 'SECURE_AUTH_KEY',  'LxUhl0dY:2V`#+-PAV?.g lTtu |o0D12^:%dV*<F lbVuet/va|7;N?ubbRoDRK' );
define( 'LOGGED_IN_KEY',    'Y|Tn,rDFPy#-5r$F9K#>}k;aG_J)f`)mahDNAIHBlfw*Tde.=}`-)yuvQ#9@QbDY' );
define( 'NONCE_KEY',        'YI?]z]Y%HwDj>rCBy:tkZw_nXL3~9? MPtCy)Knngj$uf>P`sYac$JJ#6@]Mvvot' );
define( 'AUTH_SALT',        'Yo7?jTP5n~7d)8/;43#Sz&><l;x2:C8 XXHt]u)MjX#qA[U(`s=-22{H}w1@kl#)' );
define( 'SECURE_AUTH_SALT', 'G|=zY1n/pRP_:AjE$+Z&PvGcFc}#N$*YY+v1Abzo=L1~iP8~ueD+u4e>C!X4UCiC' );
define( 'LOGGED_IN_SALT',   'n=?`<k%{.Z+HJy-<ijMCPFeGJd~Y8$a8bGrk2:cTFu?JgpVOQ Ngh6Nn%CBhe*)I' );
define( 'NONCE_SALT',       '+QF+yLYu4<XnLcH.R)?;oF^]hcrRG@9?pBmsbt%CM7R-dX([/U}|R5},FL.v3vhp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
