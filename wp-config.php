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
define('AUTH_KEY',         'SZ|xlI+yW8h#[W?+;mH^wy_xPT%v2$jZaFL+t?.A6$.1[}kVBz vztH&[A3o9%wc');
define('SECURE_AUTH_KEY',  'Tq]_T8L5?bSjB:+*@ct]D:Fs*I!p(*a4<J$zLR>a(0UWG)n9n~,gnI|>-Jh=r+|o');
define('LOGGED_IN_KEY',    'zbk9Id?%0+9/MXhu^`*R5;l/Ja)t=gI9lhG^-F2%aEbzg=f<~kuBrI9OiT|^GI,5');
define('NONCE_KEY',        'tx/jE/|jM{ hgL-w+OtDy@BUto=6BSDS3jRI`R9aH#_}9bG?2iH(B3#,9QY7au3L');
define('AUTH_SALT',        'dnI]p,^Up-b=@/6@]l:qKfN[jU!/9R&Pn/gqP>1l!l93Ts+7<(0Z|Kq?+c$F(6Fp');
define('SECURE_AUTH_SALT', '!@|flS@6!V`s8MPjfGp93Xx38d%$ZGpX8K`d#cQ@<-7BMM-XHD1xEisgwTrckc*^');
define('LOGGED_IN_SALT',   'H2h.o,0Es5Z!-[^(2LT=GZRpz37f*d]zz`|KMFM)z.$[I%bM`c!OF#Da6B!,j20E');
define('NONCE_SALT',       'g< q0ez2d=4:00#5Gx5_&jNSiGlJ_/-P!)R/JdW0AEu~0 ?J)5=s]T-0a{usX(2>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
