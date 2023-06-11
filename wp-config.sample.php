<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'ABSPATH', __DIR__ . '/wp' );
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/app' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'php' );

/** Database username */
define( 'DB_USER', 'php' );

/** Database password */
define( 'DB_PASSWORD', 'php' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'fDX^A+$Z_:++S~QcMl:a)l|YOLWaQKoextk(`qz9]v_Q/j`D[kb(n37<8|a`d%u}');
define('SECURE_AUTH_KEY',  '|+ ::l)-<zO=EUFt0D?*=Tth0B4=FgD]*9p)s) r:(9sA($j~uksA4T&=7|-Zx.C');
define('LOGGED_IN_KEY',    '|`|KcB/Yi-_Ec^L7^*e)9K[Hb@Ue<]+c=3s[Ote:-}=w-HUx}5dj<06SzB(d}6=G');
define('NONCE_KEY',        'JYqir3O)1q2|,-}9I!9o:Hgw#<_,Hvb|TJ_-^i0X-U]3W%;B&8Tqv$z3D5-&Sk+o');
define('AUTH_SALT',        'BrD`!WQ +2vpB<3+e_LP^Gj#QPyzp/}UIA^U iPZ#D+NpQI;Xp2:;e}?.:YJVj`[');
define('SECURE_AUTH_SALT', 'U?LgXS(6h4[+$SKlSF&A)/T!s)4l4AOG^ckTFwU5=`m|W]%?_|c`^L>yVkjVl`}=');
define('LOGGED_IN_SALT',   ')e<O<Hf<#h-7Mc!yDd_)TeP13*k|1w2emK-$,v(OqdV`&B(P{C<V5P[}*|/x]WtO');
define('NONCE_SALT',       'wGGG@L>;F]Vi}eFKT0g Y!WaApQ1L!,!,}5gWh+lJU[is2e%{oLcm|?l4n`rqI5l');
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
