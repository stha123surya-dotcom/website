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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '`<U1xor%!xR)kVx.&^7iEYV(M$5%y`lHO=^i)nVgFA?VP:){4u1g27]`@[Pj#-)V' );
define( 'SECURE_AUTH_KEY',  'sxQ.Vx&34bB[!5!d6sU72F#Qt45*^zcfvM9Rm@XgRER2k+J-b02irL=C4)2r@^fU' );
define( 'LOGGED_IN_KEY',    'TmHIJD2aS4>/I$0=G#APFR]W<6jBHvcu=*eqSp-NZbIcNH=gG@@}cP8f#nc-`I^;' );
define( 'NONCE_KEY',        '{ZSv!laqPLZw(@M8Hr`}M8=RlxbfyD_QoOXKk2bqjR*[;]P8m|>Tdg${ki*mTkmB' );
define( 'AUTH_SALT',        'h<PcFcS*yJuvGY]T5[c6I[w4`AJLx^Ig?>CT:Vz1A5>=yRHI2D~:doHP/2 PRUc.' );
define( 'SECURE_AUTH_SALT', '$hpXIt2OGg1RAh_IE;F6sMgBhh&p~paWdD8yik2J9^}XoYWHE|i<8Wl]|)4:I!sz' );
define( 'LOGGED_IN_SALT',   'V{=)L.aV[LDawG+Z^ogV<{[5[<7itaj_WmR5Z*X)@Y]A~0~b~!b/6< d|>|# p;=' );
define( 'NONCE_SALT',       '*=?J)`82fpT4c9}:q@J7vgS3xq|),#R5Ub }sGuXCFro0YL[rjWPaK7`-f0AMI=s' );

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
