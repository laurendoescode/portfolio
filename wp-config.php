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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'prIuL7UF@O?St+]XH_yLsceE#u&P3!5)-2lJNe#E57{.UgBvmgGL3D&_0m.2B$2i');
define('SECURE_AUTH_KEY',  'C;2Z6u-T`h^!n]%v*gQf4[7m&7-<$^k*44(aw1LE+bifC.eX-B3VIwSy,}j-tK3G');
define('LOGGED_IN_KEY',    'D0tuWi=Z4qK!,@n@0$Gt]4xf7}/YNJaeZC:A~na<WhSNi89*4%zI$$J1P]+)g:Sh');
define('NONCE_KEY',        'AfMh!8Z]fQa}J^b}ibEVrQ @lF1&z6D!=S^Yzgb-A4J%$=V;:ZQ.brVo1$ oDh_A');
define('AUTH_SALT',        'h^SkBa8;Ld$DH6UHSBJjQBah&q-Za2j]LWPuBE?I{#58bXfu>:X2$}@cCoB#?,aJ');
define('SECURE_AUTH_SALT', 'Bw% 3*V[;Of}B,f<BP`Z;ISR;KwN5F%QQTpw0}$!v&2}b]ZJ2lt{3eiFiS}E^VV[');
define('LOGGED_IN_SALT',   'FOA*cm^hn[ahGb%<J+Zt&bqUcf~U7&[=DZ::}Yr+nE+91(zDQ)2=wZ3:**:;xjJ7');
define('NONCE_SALT',       '+UpypngU<:IGZr>J&[?wAt J5QsLSZN#B4z8XFD]F,:kbz,cc fAJFq[Hx4pjCi!');

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
