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
define('DB_NAME', 'rainwater');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'VJ<j6eE9)5by}/gzHlvcl_ZXqyn_|SIXlO?Xa{gv_;{CPl8*Y$3He_#yY)+TNa0t');
define('SECURE_AUTH_KEY',  ':*`OpyF`!spN=J/8+9QKm[J;^L+ubpTw7Xspv+ARiA<HC~:$F!(SKG^h+{6ZJ+C1');
define('LOGGED_IN_KEY',    'G,u@|G:q,?oawexcK~.u+*Hs]N=4.0gZLdnT*l%KF`r&cOS3ES7G$8a_Lpx,/MoA');
define('NONCE_KEY',        ',#8 PY>k{o[P|P.oFNYt+]zXe/H>_fYObBm.B:?D.@[{CfQwv4VL7TD{j~BnO U|');
define('AUTH_SALT',        'Qa(&Mi*Wf,}<E@h;G$Lft(U` 0yZ^ce}H]~M&,F[eW`6z0>P8=.6B]O<+xSazaGK');
define('SECURE_AUTH_SALT', '_n9`- FQtFcy{V*LwaOt?qvl3nP^+t:wu&U0aE5O.&Up_@AU]3@1VsDf_z5_69)?');
define('LOGGED_IN_SALT',   'Zd=FeP?O9<>~XjI(IP5,=s_urX^3=!^`sM:*e7ch5$?OX3=_;a+U~-yD6yyl8+V@');
define('NONCE_SALT',       ';P@ Jc&%d|n]K;8djC3e[@2zG%gtEkmpuh%>Xq&>(RzK:y+BEcyl<#_ys%4V8uoG');

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
