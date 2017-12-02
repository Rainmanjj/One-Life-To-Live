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
define('DB_NAME', 'demo');

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
define('AUTH_KEY',         'YW&RzLliXYYQzvr))X+B7onT#lg=NLDeu_fq0#A;KPQNxcWG-WM)+R85w14pZIFO');
define('SECURE_AUTH_KEY',  '6E~DIvVjrBL96~fk^GtjfR!9^V?g_AO_9=Cv;3u2 +tdBh8p@<nbz#;BnnCBh|qn');
define('LOGGED_IN_KEY',    '@LzVK4?6Lxic7eF,5;1M&u~*X? MHQg]s=kf%R9:]K2FfU =!r[Ob4q5PWPZ< f=');
define('NONCE_KEY',        'd/224{,#*q!HzEH$O8g.ECiyvfd2gwS=n%/_w,t9|<+df%d8H;a)5z$l&jRZop_j');
define('AUTH_SALT',        'kr065Nj,x5{Q.Oiz95tQ8K}~&je@1qEOz|7w{!t/fl#CY5lTjN.|rgq=$Ou`9p~~');
define('SECURE_AUTH_SALT', ')caU7P(~g]gIVhhi2c9z*6-cqw$F%QO(/o/g,@iMF?7&35fNc0%ZBX3]Pp2N2bMS');
define('LOGGED_IN_SALT',   ')w@b4f~#ZOI|Fcw-Y%uc>uX[dz)fyZpFWWVBRJ8ypr?QKA]@I,?`np09#t}U*3X&');
define('NONCE_SALT',       '=R:4%R;lM!~%FVne#B4SZHArwL_K$ :1QQSl06C66&aG3baz:<xBP1 Iu]K5j!(h');

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
