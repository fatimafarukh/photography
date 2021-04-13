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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'mp#[ Vi~DJy XRj%knSp[l.PJ$rq5R5&n>FHZ=b6!H.17-sDZ/Snlt82JeI:n2}T' );
define( 'SECURE_AUTH_KEY',  'l.7y]`:jLglzfE4JHyK6_YD<K@wH-Mn<srh0B- gc1$Yl~]qf43[[z!wp[8I/8;T' );
define( 'LOGGED_IN_KEY',    '`h-v?^<;6ton=Z9X7Dx>By&~QYQAp}Dx=Msb9X9z-wx6~a ,hv`e5,t&cvnD=A4&' );
define( 'NONCE_KEY',        '750Yxdf;sMfU;zL):UC?Q=;R}hs3J 9ItSn(E}:tcDF@qTqNg<f.ON!hx:1Z+t12' );
define( 'AUTH_SALT',        ' RFK|~}G-Pk7^8M[!&r11#KXQNe?|@}|pTfyk6S)[+,^ss%D[`BjO`?MlIO%(zB^' );
define( 'SECURE_AUTH_SALT', '{[3{E37ct%]f)[j*fy~r(/mbJX=sVqzoNu8GlZ_WDafmgLu((koiSCeLsL~Jb/5`' );
define( 'LOGGED_IN_SALT',   '#$>i-Jb9<O>~;.mAuJk>?nZ7d%flKsYj]+#yvSjlx/DG5HS].0#+B V<isnI@q7)' );
define( 'NONCE_SALT',       '!TCHf8,mN!@NGCY8~yZ*`,y&Rl{}d&/D{LdxPA-+;Ij!Dq=5:Usc4O-!XjOx,N9B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ms_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
