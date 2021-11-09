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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5wXS8;i4*zyAeh_[!{qmC)u~&wO_-2m1]3;m{rx5YYp</~j{> 29fX?CFg^jzQ}?' );
define( 'SECURE_AUTH_KEY',  '2|VrlPBj9So2[hZcWM9mf;A>[^4BQ~)r.N`[3>.L-Jk*RTd;@ *%;DUF@z_AiDd=' );
define( 'LOGGED_IN_KEY',    ')w9z.]32iy&gdXUg$v<MmnoPFK$>oW8s.c{T_&>jT#,F/VykyU3^gs<&*`ELCL12' );
define( 'NONCE_KEY',        '&MDyxRmM#f_I?wvqG:mw>o&|*9LKh$5*;:=u&&)nT(+|{Gu_mS5TSgDgS1N|GUxT' );
define( 'AUTH_SALT',        'J*h/:|+hZ@(Uu1A )e42}%k7Se14^9q+(Ob4H{Ci~?NKIE>#Yp64~>:^u;><P8Wj' );
define( 'SECURE_AUTH_SALT', 'P8V{!+wiZ9!ebO}*@T!XxxLckNL_Jn_$|g)e5]$/0pTng._p$-/6=TU(ackh_ >l' );
define( 'LOGGED_IN_SALT',   'ezKLcPfbCA[qO+b}j[BB`n)i/Ug&LG<]1O&YR@4$&]!9oa!+dveKTwpQ0SB_qp9n' );
define( 'NONCE_SALT',       'bZsLOD7W@.xl74Q#Vp0SLis!{E:OQO~I=J#A^Rd+uT~U[s4CjNR;i~wjC}V38|RX' );

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
