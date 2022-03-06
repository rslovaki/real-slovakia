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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '2L.WrgU^^Wob?)TBDL(:07yu2&Nu0Zd7zFX(Nb%v(q%lA*:MrFw>C-Mz+}-d~H@=' );
define( 'SECURE_AUTH_KEY',  'jv.StT+7#D=x%`9>OO.b?st#k6Fs/d}Hu=wcJ$ h?cz`W;d97iVSf}9]l&P2(IV`' );
define( 'LOGGED_IN_KEY',    'pYvhq^1rl6b=[+|E$i)m/w%/(QjWF.mAVP0IP/I^9Xj2-@fPP$jAtW2mk1l&$@Q}' );
define( 'NONCE_KEY',        '*#?W844qenSVO#e&X$$K-P_s_E5|!ZZob{h6 pE><`I^)i.3V&:CUQ@ecd/+zdN6' );
define( 'AUTH_SALT',        'DYn&[A[JAl0./^Bv+2b$0hUKXB r9H?;-n?lJ+(8pI=&:H#l>~8BTJ#$$n 75n+:' );
define( 'SECURE_AUTH_SALT', 'ngUk@fr()KL+?-d$MM8[q2&[xos7N@BnCuP3h9@u,kQ$mM]|(+C/!YGHg 9Ss?zQ' );
define( 'LOGGED_IN_SALT',   'UmulJ;- 8~N[PZW4GR)vAi4#-T(5CZ5j^pu $|kY#,#lz&N&Z;d%0bdG+x:!_E2z' );
define( 'NONCE_SALT',       'YezNT%5|CBjb P<AXk50g&eTjqO4T)4%@Hi7i0/N0x>115 oN{qA?yB{I8DZB6J6' );

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
