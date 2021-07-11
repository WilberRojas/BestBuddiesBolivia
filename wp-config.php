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
define( 'DB_NAME', 'bestbuddiespage' );

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
define( 'AUTH_KEY',         ',x=?cmzES5Tv<?>3h7$xpt;90?U+N{ryI*BhMGmQD{OZZMOo#rP?CF&&-wCsmP 0' );
define( 'SECURE_AUTH_KEY',  'V%Fl#}4O)Br4gv@=>g.2l1%jiVJb3dp4t8$t_;~p^UTo[(9CDMG>$%a)kJotg%SM' );
define( 'LOGGED_IN_KEY',    'x$a_gpTiq>(&.zH<$4K{%?,:YHLG;Zu$[$906s;*VcUr?YI Dk9Po+~Q+[J3M6PS' );
define( 'NONCE_KEY',        '}>T,OiOz:8//FJQfT+4p:1-B>-%5)wxCw0z8pUR|VuE0$!BK=hTO4}|ZV752gwTl' );
define( 'AUTH_SALT',        'G[4^=Z#)UaoFf;$$&Qsse_t; 1syG;n3cF>EHAza_<[g/u6}1.V@5dCD!^]JSbba' );
define( 'SECURE_AUTH_SALT', '(g!:Yft@~}%OYos@w+SgV*p#]9#r[,|i 9(u%o=#lLLLF|P}[qPn?zgcv]5dUy,i' );
define( 'LOGGED_IN_SALT',   'mH-5}V#|1J(=^h1YV~?NM,bMsg#()Mo0kAba?T`p!7h*xf~V7pDKx|MCqWukYecc' );
define( 'NONCE_SALT',       'ZGKG+tCId9!7E@HarvdmDDxHiKYEq3=/X`8;zlxRP@`dy&g|nc)#DeRIHpd[d%^W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
