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
define( 'AUTH_KEY',         'xTs1@{?;bdcd/egVqolva/R_3~{HlftbhRpXnQ:J@O>CFm0oi8.U7!F|h!Nr(tJM' );
define( 'SECURE_AUTH_KEY',  'dfMI^Ir]6f>!lq!weL!e,b*Enr-UieU&j!&<`4)p11Ax!X5}%VaNOL{bK^56-E7H' );
define( 'LOGGED_IN_KEY',    '4<7_IX+2Ma]at o`<`o.^-s>cgNlI!rC5)X(67yA%-JdG?Mn~|EpmR9hDovy_WXd' );
define( 'NONCE_KEY',        '{tH<zvh%c3q$^won+RY|abqn-;=`pc9~$p}9#;Y[~h:)@2vG::^[CX+Bi<a[RDh{' );
define( 'AUTH_SALT',        '[4G6z8_+KXz0}sT53.-]F>35%J%AX*^bQ3R9StxYXmw/RnG| eAhAW JAP4YpY/W' );
define( 'SECURE_AUTH_SALT', '<H:j;6l]U<|:xs+SZo&rMx|M7cj&XEGY<OE?ln0q[4XycM;{Dk|xEoe=4Po4?nz6' );
define( 'LOGGED_IN_SALT',   'VP0pYbG|LWJx4ek/(qPj Do42xQdT4L|D$Hi38<Cld193t@X!gHg-h5nr* 71<hp' );
define( 'NONCE_SALT',       '5 %`x|0B$fG{h>kkoO[&9FooW4{X7f5}n!}0=DaQ0A4k}6>_eLz(3xDw~[!U[gl/' );

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
