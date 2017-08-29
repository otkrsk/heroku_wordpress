<?php

// Require the Dotenv plugin
require __DIR__ . '/vendor/autoload.php';
$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#E0J7oYQR>+2a-hlh}`.)r^9dzoMj;h,WOYEZmDA/>R,wM&Qn%N}^G7$5`E^M}BD');
define('SECURE_AUTH_KEY',  '/uxLmCX~l(TG[-lweR+`~?@ahXw;FuN+c&!wku7)b-Q<VJ6%69(o|)FPdlh#Q>tR');
define('LOGGED_IN_KEY',    'f!T/zn<W^P0?vNZu-.{i>.^,r|Y^Ob&/4:f=RC/d<z^-k]p)qaArQGmJ[d^3Ev6p');
define('NONCE_KEY',        'KDq{6p=b6CoCzjO?e@U)e=q>_+WI3?5<?@cnobMFqk+LNsEbo~e2dMm}=n,q<|%l');
define('AUTH_SALT',        'VBtW8q8D);5IlT.|[.6`Lqsi=M]$FwsR?|eV<CgmGah(&`M!e?X.wvb*T^5wt#P ');
define('SECURE_AUTH_SALT', 'ncG;dhvU^T$?W:P<PVj<h2uFv:Di4_2N#1izk)zvwn(B =@:k*mQK-5~Bn7~%LTT');
define('LOGGED_IN_SALT',   '~L,Tal8o/+MVhe9%D,KM@3Cn{Uo-Us$D<z>GJ,YzK$=s@eraZB8|f``wzOikhpEI');
define('NONCE_SALT',       '@^8tzWtz:JWEvRbaCQ%ct-%m+*K%]f(||wg6{bg9CiLhFB;vU.* mA-&1P?Y#HrY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
