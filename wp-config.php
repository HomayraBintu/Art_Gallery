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
define('DB_NAME', 'art');

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
define('AUTH_KEY',         'fG4y7jo=&S%Au|XAvQN&R_rn7(?R9+s7)G:tlpOhjB!AZ]%KZl1T3)U<4C?|ar-}');
define('SECURE_AUTH_KEY',  ')$7udN&Eo;K^R%}]x]/oQ3Sn:PW$!&zV@UOFN=J%kX-e)$A<L%r@V:0O{|HNl@K1');
define('LOGGED_IN_KEY',    ';5UbX=rW6D |c!tlrq97;B*H7p<yqybC{Q@9wTp ws6a#!m=X#fh=<hq(`M|3jxE');
define('NONCE_KEY',        ',vrfaPdewWd$8`VzM@loSxF^RP+H`qw}f<bt7dtab3iCCn0^:ztt-T_uHhGbmo-9');
define('AUTH_SALT',        '2yzPYkxVu0~`4I!%<ZEC@~.L;;2B|mtFwPk@kg>VSaP~hGSwX[[bj>7^&jYg7[|8');
define('SECURE_AUTH_SALT', ' 7F)l~>cex,Yq18rd|FOWi`*x glC]geq`i1DqA1{V_[p?[xf^#hsC[,1C)&/|/5');
define('LOGGED_IN_SALT',   'rnj~|3?WM.pNXzRCC1y[:cy&pj[}?W<GJQA(5o~@,VqXYN9~&tRnK{yKxuhYm4Qs');
define('NONCE_SALT',       '+)*1XZpK[StW6i$]|i`GN Uy;5|}1g`e-q14MEk/eAE4,lAUCKU+0mD^zh8RHQVY');

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
