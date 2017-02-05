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
define('DB_NAME', 'greece');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'm8M~1IKj*l,=[+#76N|O <M>?qBM-;Uh&lquA*PNs5]sl>fL/;m3r5m1q>cznLF+');
define('SECURE_AUTH_KEY',  'Tn-;2ON+vvDMrVK! Kk0W0F>(<Hk4YTpDbX{lq_|(9mtBB&6mzd:k(m^v!Q2udr-');
define('LOGGED_IN_KEY',    'ss]7J(S?W.AF&++!_6hwk.+#q RVAR(Rr/{QylusP-)YP n]-on|>m*jgz*~jL7l');
define('NONCE_KEY',        'P((bHGCS4AG!DNQr/Z4%t`?/H};+#GKqD6~hBWg&DvtsKM`-d{&,D,Kty_8lS}k ');
define('AUTH_SALT',        '0a,T$`Xr)}uYfEM[()p#/z=FiaA;Uu=j!MP]?U=lo`AOs)z=y=:Ft$K>tGW#$XP9');
define('SECURE_AUTH_SALT', ':#shlrdw]5t@|G4GR*`TdH<XpxX&J6laz)Z8[r6yr4TV$[uDYw-n<nM4/_[7[|TG');
define('LOGGED_IN_SALT',   'R]THG#9AOMK[E+#b|IR>O6bAIIrdN9*mNWASDk!2({/)$*s2BX<!-+mb$hi| qvX');
define('NONCE_SALT',       '?]_z5{=5kL$S#)_::y%aKVc/js8+!&;*D?e,}W]oC(v6MC-R$ _QHXER:}R3r=)y');
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
