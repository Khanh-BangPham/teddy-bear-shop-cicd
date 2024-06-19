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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teddy-bear-shop' );

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
define( 'AUTH_KEY',         'P?!s3>O%$c]W`{=Fz% )4HlFiyPb!8Ih#{:^sz]0x^aJ,/]lj8#(PHP],7Sq#yQ:' );
define( 'SECURE_AUTH_KEY',  'KA?m&16s$QPPNsWvy|5vU$~g|G}BEe4oo[|@}jbI7ldnOo{+L*=dWuJ8VF,NB>:X' );
define( 'LOGGED_IN_KEY',    'L)z7g2q@q}ytME@8mBv`OI7^;Ip@YrEjH!32ajeHw3`|*3hdpfBsfhdA~xbC_K[&' );
define( 'NONCE_KEY',        'YKD5T>@AVa.- n):1-Kx]v=o.-6+g<3eh;b2:+EaU1,t7J2l3-#}mzMO%-TE_d?_' );
define( 'AUTH_SALT',        '^{kfIB %w~|M=6F8/Z5K2yyu}?fyO?@>[.?A5w>B%Es}+^]G@d6RB~(^Jd^vN;(4' );
define( 'SECURE_AUTH_SALT', '!=fr]4=D<PYY>Eksmoibd8|2GMzFEP.InY50oxd,;pCV?5reizV.ZT*#|MSXONGi' );
define( 'LOGGED_IN_SALT',   'A|Px?>yLqOxnlb1=od>$=$GGA5Uey8H 9?*[G&6!@PS9v 2yo4D8cK]9}wL+|.8@' );
define( 'NONCE_SALT',       'wVyEca%)u`4`r}Pst-/4=!(1Y=VWVOin} *^c^RrbHj9Enat%scFY@r%DS(R^H<L' );

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
