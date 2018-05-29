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
define('DB_NAME', 'skgp_real');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'S]:+g&^3fMpeiLlJh~lM! +0M#yMy@SG|{DeAQ$Er,LNXtxxu!8Eg_vB_m}k20tA');
define('SECURE_AUTH_KEY',  't5xi3^$MVZ ))|buG=YIXua_Lf8~ww <#OB&GeZJ;2)8W.mS/7o]/?WN?1QFO5/>');
define('LOGGED_IN_KEY',    'GNOw<Rrxep,GB#t?^J!lX%AZ@saK6YJks.N*OSP:<; -^zkv_vM/hWl|73G`:]M(');
define('NONCE_KEY',        'FW;c6Y =]Y5KWy1!>-D7[&#A<{mm!BBZ7,#/_G1g<vs2mhA6!;/<zx66]#/[d-W{');
define('AUTH_SALT',        'B9k1XOiTBqbo7G.OnS77}*I.[Je7ir;yuh1%mq@$B[/e$:^ %L@[`L*H3k2r[RaB');
define('SECURE_AUTH_SALT', 'BYykhB({PO9XGye457Gg3zAoFzi.7h-&O_c4u2w,cyGU`/d}(1#RCZ4S.J):z}5w');
define('LOGGED_IN_SALT',   'o7T^ >d3! <8+u#/ VEHK2B|l]Xn4$n`{y[r<Vm#c,ea>lEIQork#X^n`xJ(u96>');
define('NONCE_SALT',       'y*SY5}R<VAup8_/$VM6NdD:kN<,8GV +<(42YanuBXS-E>}*XR>ao*>9rzppUC8A');

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

