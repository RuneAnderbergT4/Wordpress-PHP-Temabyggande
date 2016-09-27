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
define('DB_NAME', 'wordpress_php_temabyggande');

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
define('AUTH_KEY',         ':EnSqD ?T6z%eef5O!bc?%?4@QPw+ W_<i$,7$0|Y#=/!3~N2IT4hWAn(=fEcP~G');
define('SECURE_AUTH_KEY',  ';Nj^viT-(X0lsM<_vE4&YOg*X<pb+w#x6@XM>~!62<ZEtA`Z4}BG<Q6E1-<ZXS60');
define('LOGGED_IN_KEY',    'v[ST}~?]nCIQ~[T<k+g1{!v2%e/eC&w^xUod0[);+|hg4Dy&!#eK-)bln36XcL3z');
define('NONCE_KEY',        '#SKUSW=np/PTN;6YX-O+1g#}i|}!>2)|$JlF<6-#<<<}1K>;rB)3H9]vB g$NDG|');
define('AUTH_SALT',        '7+94DqDJUNTxDD+Q;m~Q!E8zsk4rI!C`y8b|atvBS5-O76|#Q+O+-W:;z?+`ks;}');
define('SECURE_AUTH_SALT', '|e|-GH-&!`UuigDQYd*|1brA7oJUeInRZ+9L$uqiI4N5mq)|k|6uWe}Oq*-sjY)#');
define('LOGGED_IN_SALT',   'fwmpQOTW!O5LaA?>-_#hk9N(c9LWyqYh]m=oyT+%7-Mi~_&{?l[x2D%j?~.|-OG2');
define('NONCE_SALT',       'Ly-^$Aoz<E50s2xN:d@8wo!f@_)S.!~>A8q:)6Cg`byF@y~_nu?*p~tyyJdowt`4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphptb_';

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
