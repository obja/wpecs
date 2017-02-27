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
define('DB_NAME', 'dev_wpecs');

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
define('AUTH_KEY',         '6T&xv7fbh:nX7nkOBw.N^njhjjBUN!}UPDDH#hHo=b0z:Ycz [ UV,b9}A|(O}Cj');
define('SECURE_AUTH_KEY',  ']Fz nZR@b2!:-Tw[n*rM}fa-DJ|z/&}E59=W7Kp?]b>ihmgV~-mZ>/aJtq=IG@}%');
define('LOGGED_IN_KEY',    'q)<#>e$R{rv=dwxPwTvzKUrrzB@F7r9k@Z}#GV$-6#7FG#TDuKMDe;ghye2,X=BV');
define('NONCE_KEY',        'aQ))&JvQd)(|E |5Ax$_eu/O|H:>~i3t[2UT}C=3i#}vNocE%`c_;jkz|}!NVZzW');
define('AUTH_SALT',        '@|A_<14HqxILc]<J{LT>Wc/aKS><^|Y=JV)$n<MR(LHpL{_>Q{9I#Nq(CacQV84:');
define('SECURE_AUTH_SALT', '=Uy^$QiL-+=D~jn;(g6cQUDZxlMH$CNi^jmP|rxaJj9-brAf9:GHOOeOOAW;*b|$');
define('LOGGED_IN_SALT',   '<z?<$P(Nb1&by9=2&oR2xi!3@-_=*2N{>hvv}JI|Bw)hUM5tt+UfWV~vCDa0I]%|');
define('NONCE_SALT',       '>le-cg=YEth`5.IX<k>D8e~HFfrT>yCQ(+W A<9]`>`.6LN ` G+X,=.bsqIj4Bl');

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
