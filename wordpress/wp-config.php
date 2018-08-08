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
define('DB_NAME', 'armando');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         '2:zvtE=[bB_h)-c{{o,2ns;kWZXXoMD2otDbr-D|nq=)Il2p4^C^%PkQ-dQ?>ODk');
define('SECURE_AUTH_KEY',  'a,:lLtUfT,T>~)r8&9obTQucIFHB4Z93o_MAlJq VK-tt]K44/bqa?^Y>XDIjR*p');
define('LOGGED_IN_KEY',    'twUh-a$vVBUivZ(W_hlR2PVgcfXN36vochgm0b1jbw]{:^}(q_O$RDc;d_`mYQ|!');
define('NONCE_KEY',        'sOB%]h}]L[upq i{FZ^,HF=X! j$@N/faShq+NO,]j4`pjnG(15A_N_maS#D=QMR');
define('AUTH_SALT',        '[tn|U}G4;4GIq1T<m w.gl`+jQ@jBiZQw*r%VhstIaQ[*?:vV{mUs * 3CU/Stl2');
define('SECURE_AUTH_SALT', 'vVYF~#1o-8xwMVS.H!|7EFwmdW,IP;!tMIaKTAa0cGlra@k&)7G5/G9@N3SK)B=f');
define('LOGGED_IN_SALT',   'AZWk@*O@!7OU,aiUI(oG5$Wo^`H/_f)}|!.pQ`t-`Y}4q@e9<)03mAjT+ap@1Ixr');
define('NONCE_SALT',       'J? oA)Vxt.[ohi02$?%PQI[2SUuSCIQb Y)Q1.+u0wow5*E^f{V-o~i%zE>gy<b(');

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
