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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '6V}8Mk> gbkuzya]4^.4|EP?,)o@,Zh.K$Gl?!^EJE[rIgB[nNhQ<wBg?jg ?:{3' );
define( 'SECURE_AUTH_KEY',  'Ziq *+khy,y~!l8-4QxCW2bO<3KV86qGEVj|E@x%aRT%*XlEp=..u=gz:g!5liCa' );
define( 'LOGGED_IN_KEY',    'D<OE&}1C8-]`gR4qyEj,[6c)E|@#M2Y!,<~GX*DgZ9/Aet-ozs}%}JV#//oyY.=<' );
define( 'NONCE_KEY',        'FuTqjZ.b7xz<Q<rF=IJ=bNQG?3#:^/!ON;?!lvt43)5^Bh^0N nDR(@679}uQtDg' );
define( 'AUTH_SALT',        'bb-U1EH96CtO1 _0bV`EiM1OoIG+@)`AJ4#K!u+N}/d;3Z/[&%nO`t$@.FsY:TQG' );
define( 'SECURE_AUTH_SALT', 'K2=z pq4~nW LJ|x(%v!(. y I{`C^Mm`o8!Sw<A_%{)?ekR0Ru3t[*R&d>{4Xd9' );
define( 'LOGGED_IN_SALT',   '+JpaHb]77F`Gd)r=,;{q=&ZDYgZ/]FC9p|x+}e,(E=_#{D^qy>f@f7nF3d#E)$At' );
define( 'NONCE_SALT',       'blNbtiKqjkA*<|J$2kfBf;+*~Y(cdBqSEUk61+Q7kR+5;{`IRS_p@<,w;3Wl#g$x' );

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
