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
define( 'DB_NAME', 'bootstrap2wordprees' );

/** MySQL database username */
define( 'DB_USER', 'SG' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mama2003' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '7Ij]-LkD[_2}FT3u{o-=2^rH!OtqG&Js>Nn> gr-biDr<UuAC>N~|SJ7Oz$!U9*$');
define('SECURE_AUTH_KEY',  '_.4[]a=&Df<`.}2:Tq7yT1-5t04lfRHlue|SO0YVO|)$^aXKVme</zD?EYFTS.QH');
define('LOGGED_IN_KEY',    '+Ix4TV(Q-+NxVk|F#w`vYqb|^>e|jC}_~yYdV9=J,?`w)D?TvSQ835$,aF$n1^ei');
define('NONCE_KEY',        '&|n)>-Qojw-m_-~7zfxN9VDv 4+;q;bu+[#xqLqE|7(e9%~IWdM1c9_vpJ!m4jPC');
define('AUTH_SALT',        '80fbAGuKSh-j-5vp8t>YETG<}bf+n-[}c?v%IB1^PN)Ui]?EZ/HhKvd5kp_9^y`E');
define('SECURE_AUTH_SALT', 'bRS+cej~x}/PBYRCR[I%9a*Db:4,g+J>x|)lgv[kaP)Xzpv+<UmZZM-i%6 4}^Gx');
define('LOGGED_IN_SALT',   'sy4p[*Jlhk`ZdC54wb3@yM!]7}j-6m+&1`fNQQ`ZD<vkE+5= hy.U?j}~c5[(xF7');
define('NONCE_SALT',       '.K`) uu<Kd@G&JDMP?.60![=<A?h5D2OX0mr:x[ux[?1VF^%w6-YH}ypIz[%F|R-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SG_';

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
