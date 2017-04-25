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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Halo1993');

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
define('AUTH_KEY',         'cM6<hB{H6&Ow}T!v9KT(8bf(#U{@wli%81cn6wAEtd*]]ebAYhrdwRKhi}`vynVH');
define('SECURE_AUTH_KEY',  'aEkv9h8Pv5u;$;C=B+3=&>Iw9#~VlXoopK{F28TtEe-!!}0*:^LI.5aG9 u%{6o1');
define('LOGGED_IN_KEY',    '1xAN)RO/>Cvus0Y vrj+jG76^%;`=9P7za{Pk For98pnbMmHv1ql^N6!l/Hbr.&');
define('NONCE_KEY',        'TU|j_D0s8SJ2<K<!ZG$ZqLa-Bg?*6PT_g43w@jqwQEx&doX,3YhEq2Px>-6{@&e/');
define('AUTH_SALT',        'AqI,@@C#d}VQxr/t=4h#S$-*d}5w|s>>W=7Wr5(pD={Tq?e6,2B5Zq] HadtO`&`');
define('SECURE_AUTH_SALT', 'wVC/=C5*<|GPlpOC=T=u7t$9(Te0PaV9$q|c%Wh[i/,K6X|SfK|v`x=hLh6=Qz_-');
define('LOGGED_IN_SALT',   '}dJHRi@gAuf~8y#R(8DkX[|KYl@9&P81:93yLN=#X#pPA6Fzi=rUVZ^3,4p)R~#c');
define('NONCE_SALT',       'eK[+Uu#b@3ttw*M5bX^@^FQfRSscI(T*:G4S7BNgyU6D`s;G!|5I%}KA!8B_u38j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

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
