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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'TheVeganNetwork');

/** MySQL database username */
define('DB_USER', 'phpMyAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'phpMyAdmin');

/** MySQL hostname */
define('DB_HOST', 'phpmyadmin.cw637ad2cjeo.us-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'wkL(AbBdSzz}:23duiHYM$VTQ#KU^G3l0HpC9lTB<!)okR@u]M1XlL6UJ:4y/IIp');
define('SECURE_AUTH_KEY',  'k&dM3j$~L$p(2(w{lRydmyDhm8_U%x?!7_kS^u83pb!Cr-}Y]p{da3[n_uQ>`YWd');
define('LOGGED_IN_KEY',    '}bz#HG)MXK88EfImr@J/l~ZKK}xy0Rv0:a4e()oJVG1@V4gD6zD]F Y<&!H1dQH_');
define('NONCE_KEY',        'Z2qds)b`$PP:yELx}!vTZAQoh]utkSS7m%d7=p}jAb=]p!wa`NI%TbKI>][qK=I;');
define('AUTH_SALT',        ')+/P?ig3HU0|RHYuPVJ_,#Fs^]>1[Wl,qC&^q=u#F!>?k6!<LzoL`=zN;1M{;E;U');
define('SECURE_AUTH_SALT', '17L-^31K8Yzz?b$lIed?LrSv4!W|O{S}tdD3ix%d&q4+XirQk8{ZMl@4c]N`D88 ');
define('LOGGED_IN_SALT',   '2O%VGY;]:#hTfr}P 2]|T3f1@;xaJ@6X@[^}+)i0[99.iP,9eP8Ea$=HXKAdIPeo');
define('NONCE_SALT',       '^.LNw. >0lyZR7bCRI80.bWt1wy|4_eKD2{e`VP~_1a=:S$W3DuSumlXzww,kM5f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'VeganWealthandAbundance_';

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
