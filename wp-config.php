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
define('DB_NAME', 'mosa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')RMqf*G51dBOc6FB5?#j3_ru~?4e4[VU!oHJh0dX|k_-0:O=e `nHb$?UO?F1[j?');
define('SECURE_AUTH_KEY',  'Ym]h!:r%,;Tk{UHahc%%>OlJ#BA5aymw|%+UXLCovi$-:$mH,*#Z`64)rGJgn8W<');
define('LOGGED_IN_KEY',    '!h^}[H~e`zg^E+ %dNNC9xC^1~=7lvH<Y#z:7yyEY^f?!BQ~xh[<MF@u_t_-w.?h');
define('NONCE_KEY',        'VuKVL+3t[J%=j1t~;1J*I|kOIE7x+ -qejYtLcM,4DGjYx5[CkdDOSNq~ehaUgh=');
define('AUTH_SALT',        'rB_>=^%U}q(<OyGZfoazb/)]p#@.a)Xr9fN@aH>9NqwTdn<~(T4/Xe>W]jRKxw,n');
define('SECURE_AUTH_SALT', '=gA)2N=CVTFS|/vZ3-W<k~CXZUCJt=Wo)Q{30_x~*vC<QIca5LoQsbsOwZoV49Is');
define('LOGGED_IN_SALT',   '/=Fb#qZg*{9PGUQKy&.l/+~^OQ;JW/G4LStU>ag*G&PtQy.FM0HX,%{<(=O7q.Fg');
define('NONCE_SALT',       'onwGXH.^5u1Loa=T>m`~;^-@iIU$(eFf3Gjv%6?7l,AV-H0oCD)IoXb3-0Vda*zM');

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
