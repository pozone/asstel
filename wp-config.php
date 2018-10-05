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
define('DB_NAME', 'asstel_db');

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
define('AUTH_KEY',         'EV*r5A-Zt-6KO-0Hrb|X4KRhsrj,Ls6;7<H;L)<%(A*rc)u(s&{&pj|X*H]Sm8na');
define('SECURE_AUTH_KEY',  'xM,c%@GQ0oYO$1!9~#7&Gi3#cgC?lV+NiS~@yiB,I@Xy-S?Ko5B>x)E@^<5lR)d^');
define('LOGGED_IN_KEY',    'MSs8DiTMQvL]Xl6*2c9b.9ICt7F|F|?/,lYC>/k*0KKnDi`3O>Fk2ERcp_C(w?A|');
define('NONCE_KEY',        'y(=DO>s}i=bg*YUwO+hWH>2 _T/CGn&0W0W3#}=jDx<ld96S*5}Eab2qIX)taM^H');
define('AUTH_SALT',        'Z_2e>88gP<qDi<|`Ksg ;e(DdBFuM*4RBD]DpOX qx?VL~EwsAJ$9p E]r^>d2A#');
define('SECURE_AUTH_SALT', '0]45UU=iriZKA.ZIV~*HZCTeQuQZgxNHsT yp!x(+a--5R/Zh,,|usFCP#s;x,K<');
define('LOGGED_IN_SALT',   'oJa6$zmzWdY9CzLIrO5>x=24K)ZMBWbmz)@!E[gN#Xiq$qNdUk Fbdp,7 75|Ij&');
define('NONCE_SALT',       '(bAedt(]h>DZ0^Qc.O@bamK}_;1Z `-AV%8~:;QM~=}HWm`CRd {g[A`RVH3vR[k');

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
