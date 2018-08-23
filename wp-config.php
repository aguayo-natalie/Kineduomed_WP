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
define('DB_NAME', 'kineduomed');

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
define('AUTH_KEY',         'QlNP=V)AJ<PK_MYiD=XlC)tx7}5>.70j#0Pd=t.(Ihx=%%``I`f9d6K&~NgYp&Gl');
define('SECURE_AUTH_KEY',  '?}-2v8}fqs[mUT|Ew2j2e;Z%En]UMp)V/JgUqK&_HO^7*[g7?lBn)BG>%50KI!6K');
define('LOGGED_IN_KEY',    'n`OOWXde}942t93IwKj3U`{{MjyD|&Sou:I. Pd/#MHtqQ$h|l6R|-ih`a?~ih|Z');
define('NONCE_KEY',        '+D0b7E5_4@cxl@AqwV!9UFm]gSG)/P7F4c/-@!AE~^+Ls1Gx8!$/6j`7-$b{*Cpu');
define('AUTH_SALT',        'Y13zxz3hzP 7dp7d{9UPT#{8QIe?aU#gr4#FMkbvTBabySE0%oq#UE~&(3^Zm;{K');
define('SECURE_AUTH_SALT', '!/X JOJ651OZzr4j_Bels_sK1)Yu^#g,qlE8.lHvo_Na~_T:thg|0[|:fD?k^XZm');
define('LOGGED_IN_SALT',   '+U2/mQk<R~vKJZu_`D`4 )Od#nO&K(2#}Ky9K6+cz.7DA<.v2hr{-M%0W:;gUT.=');
define('NONCE_SALT',       '$^T$bNNWyxz3hCl4:9yv)}#yUx]D[K[*(BC6*:!18czU#(:s<5j#iElVSj7tVaCj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kd_';

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
