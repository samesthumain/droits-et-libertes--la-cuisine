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
define( 'DB_NAME', 'droits_et_libertes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_A;6X-8lXh]7h$GwS&{JPhp YE2L*f6<2k1T:8}G.w>4_e28+7T;>c=B|/o7Kc~X' );
define( 'SECURE_AUTH_KEY',  '=_(PngVv%#]=&NJhtIKqS<^wb/dAnKn.M3f83PN v6bD[qQGde@_#{oN$zQ30S)L' );
define( 'LOGGED_IN_KEY',    'aS:2&rlKYB%N:0:RsnfS1VWU6Pfy[C:o*M vLR<DMxd9Ai;dGk5H{7RkOQ/e4:yX' );
define( 'NONCE_KEY',        'k{{{.S(~l=R yj1tu*:``gF3EKS`+64ZX&K9Ju;/8|$}Xb@3:gZf45U,jsh%yx~c' );
define( 'AUTH_SALT',        'j;&)VYP}>Z?j3kOtR@ofQ&8HZX_Mg(<(W1$[idy+=8tG4R}1HX+fC<xf;&QuhY|@' );
define( 'SECURE_AUTH_SALT', 'v1_tW3ZZhTDATNU#a4zRfj9#xOJcexKN)(v3!3PADL:XX6{V`Ov0/|Nnpo@Y!o |' );
define( 'LOGGED_IN_SALT',   'MK9V]7PSGS3)^V:b0#-G_*yW_Q)Uhr3:OXjdrLitfflO1wObaT96*Ee-Kx5cqRIr' );
define( 'NONCE_SALT',       '!)C}Cut=W8$Q|zv.`2jR6gUojTtztEp[*)~zNLYVz~iJiT-^q|ExZ[5pm4FZ+RL6' );

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
