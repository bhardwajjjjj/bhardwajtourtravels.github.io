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
define( 'AUTH_KEY',         '5C9DQ`#UQ(^`{ GWE6!_=+,EeJ=`3rzHu0u=@Mi~0i~P!FlZkTkP $+xjlk7bnB(' );
define( 'SECURE_AUTH_KEY',  'xi$0D29Nt,9[l3-VcsW{t9xktdwgZpgIt)@OLAXDb{n#_iTqT.I2rJ-q6G,t#@EN' );
define( 'LOGGED_IN_KEY',    'NSgp^bs=K5cO$2qAV$~dvu^w/aWy{^P4tij`z$g.8|X5]Vvu HhHg0{(zd/#?AS,' );
define( 'NONCE_KEY',        'zygOa1ic<Pr iRu7q&|f;&z>h%SQZ)EwV,DuP2yvr4Q-h-^:dnrrNEn1<Hd+IZ$)' );
define( 'AUTH_SALT',        'dAy&-gu0&s!^0o!yeHT*0dXVMpC)qKk-B)ie^siaS0ix8>0:IIz>F?|MmpRlNA#M' );
define( 'SECURE_AUTH_SALT', 'tVWm<,IqV+Ya7@aV4x*$@5JKMA+ sf`lwnY`^:o3ZV.Aa,}FOS>Dzy| 9~bAX=zI' );
define( 'LOGGED_IN_SALT',   ']%D:=Q8bF^~3~b,JHr?MaINE0n:)N4~hh^T8hZo-aPNmC#=.ph#325 ogxPG7vM-' );
define( 'NONCE_SALT',       'Zq43_p[E11$*Kxb)w52<`fdJ:4urX} g%{[(iNA<{<G0x2(:#cu_O0~RlzKb*{W0' );

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
