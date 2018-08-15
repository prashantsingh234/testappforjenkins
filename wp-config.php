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
define('DB_NAME', 'testw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'e-GC}DtqBG*2]z4Ah9Xgq_7mn8d.$)4up*Fb%{y:(QJK?<hDT8LZb<Rf{i9v]4s$');
define('SECURE_AUTH_KEY',  '|dmq5~l*eHd_Ut%PvX!_MH}8<mgSW5ajD^Kw.IW`vR1MI@%fHGDmjsju@U,U;{A&');
define('LOGGED_IN_KEY',    'v}TG[|`z31%qmcKB;x`hfiIm>C~`5zN+~vPI.MxfQP^Sn+=HOaYUce<K0R<89wLF');
define('NONCE_KEY',        '+yy1}.&iK/lKykJV0.ZI_Qy# <Gr>WNjcN:9xQa1$Ur8A~W5Si92F~90eT%z&WS]');
define('AUTH_SALT',        '/^)T>E|-4k5h7Fb}<kwj*-(<e7j{Fyd[kk)b6~/+=xh2&Q_~f5;BT{!&9+f=:N0;');
define('SECURE_AUTH_SALT', 'u-D.}d+m5A ArvIIfI@qN2u`F&|n=/J{<|gE[ns>T=u9CCoKK}hG{55cat4F9zZ2');
define('LOGGED_IN_SALT',   '|oytDxxn.S5gk?e1^VEB*`35@wf@F cNt{i3Hy8XT/?nhB3YW(obm:eiMyA-wx-K');
define('NONCE_SALT',       '!)pzc25 &s5n<9:__!PnYx8cUFM%R<M2Np1yw+Mu=;BiRJt3peSr2oV8Eu^.j,l{');

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
