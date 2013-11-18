<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_wp_devlog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qwe123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'wa8n/x&}F1zO!u>D@o(?t3gwxhF@+mU->_7z&ypOI_{!|e{={{A)pu=/SPjT_ea?');
define('SECURE_AUTH_KEY',  '|!nN;/pEP4wcSX03FGF2L_<|sA^ElYS|XZSr<zGFRD)uDxEf<Sx[t?|ePXV5iI1r');
define('LOGGED_IN_KEY',    'k`J]V8NHAe1wjYny7Gj3F6Q=8+/&xo) vUg@j@k?uSf~{n[i%Mw(rV]I=0+^|8{d');
define('NONCE_KEY',        'K48*;:+HS:#+eOHT&1tn1`r7xuH%pMdc>QD3Q3|?[Aoh9LT/2jan(yY[[+=hnJ>O');
define('AUTH_SALT',        '^< CV~,U@00^`8lZ>FjYw[qq1RSG$UMC2`y2@Q/A1fJZ{hR8+_T>D~x?]3%?}Ovb');
define('SECURE_AUTH_SALT', 'Z`Y`Gx5@e{vY$q1NVM/~UhU !>P,DYhip;G*43n-;-f0^FfTzxj<*fc;(-MT;;KQ');
define('LOGGED_IN_SALT',   '%DJ,QQwwr#@4!^nX%#oO s6x?cY+SH+8@@z-Ks)*1+7<~b ,v=3lf{L{HmIA2O^0');
define('NONCE_SALT',       '`QM[;mE|O}--^SQZ7+u6gq^qZIFdD3aG[2YD40=?=l_[,d$Ii?nN1n:|Ggvt(g;B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
