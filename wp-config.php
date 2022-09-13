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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adjobsbd' );

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
define( 'AUTH_KEY',         '6Z.42P<p2P`LilMa~t9r%_zZNKU[Zov1bAv79U*mS|06+!Z)Mg.<g{]qV$9TWC$z' );
define( 'SECURE_AUTH_KEY',  '[3, a95rAo9<$9garj Y4Yv+7MjVlmPp9X6wx2$!m#X<y>EQGt9`+aR#4CD|.{J:' );
define( 'LOGGED_IN_KEY',    'r{fp^.Fel~GcAb^9vkTKd%zF.z.MB=o#0K`eC*m8Ln9RY~q<C:!-HfY4&.S@lQdG' );
define( 'NONCE_KEY',        'WlUUkGdQ]SmkxF*[*Xj#0H5Uk^]B;<f;<&BaJ+rzMFzE?H,N bAL=4|Fx^0%s_!*' );
define( 'AUTH_SALT',        'KXd+I mq.5~s|BFL>_IDn)2]@bbw6O9pQ>&%jlcb`ZO&v6,[i$9P4#=GNaHa_8;#' );
define( 'SECURE_AUTH_SALT', '=m7bYj&Y|}c$Txi]GZ[vZO[y9E BM_][lp%wu>VYVTvoUBHr=uEf=6~k^YjO4;sP' );
define( 'LOGGED_IN_SALT',   ';Qt}M7=A59X-[[%2a3JB$BA4Vd&rMY!hI}A>~_i$rI}x9fX*G{0e3$%Hooa]u>+|' );
define( 'NONCE_SALT',       'J9k>b.t%zeKHKbZi}{_gDE9fw^B$r*,VBVmTV]P?,KcA=$.4-qfnEB4<J%Lj)%NP' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
