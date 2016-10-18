<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'thevegannetwork-001.c4yvp2.0001.usw1.cache.amazonaws.com');

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
define('AUTH_KEY',         '/(<J]MCV}7ycSo%v{p!/nS[FsqzV-lD(=N,Kii?&v[0bD/Zet{sU5$9fWXYRe%2I');
define('SECURE_AUTH_KEY',  '.+ 7zk-~XbiJ*t&)F#r^*u^g,+F;M)gMxv<C9#L]8qCNl}*`jP>X:=|Qoja+_l=G');
define('LOGGED_IN_KEY',    '^,ch,oqMa}te;)g|< ^14d0j-HqZBZAaqrRfG4>X@ddvrA;kW|+|.w-BwZDGi2oz');
define('NONCE_KEY',        'hgQdK|+71f]o=@CUHE]nDoHM2kuqo&3]hsG+S~-VkjvXdT|RxWO-TIMVW>~~G&ps');
define('AUTH_SALT',        '^xfF=P#:JWpYhSQ#&[Da`7C=-kC#o_-x LPB8+74uSBRfX.Q=x)?#g$VQhG61|Hb');
define('SECURE_AUTH_SALT', 'PuaBT?=yr~Y@SFP0VH&{Gg1,|=VI38P8#]%4n-eI0]H<t5+^a]@A!h~//X||r.u[');
define('LOGGED_IN_SALT',   ' AhygRO+m#(CzisVy(d:Ij5Yp|BPB)NMn#+DOS>tHKjnlqid$>bH?mvT6F|5lsgD');
define('NONCE_SALT',       'Rf|IW<+:E,Jt%{cI_|-$>A@cpHfXP|3=jmS+zP%C<C5J@PxVf(COXxLf|bIGq/#g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'VeganWealthandAbundance_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
