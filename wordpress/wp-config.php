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
define('DB_NAME', 'tatianadenisenko');

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
define('AUTH_KEY',         'B;Qdxu*mKIX]: ~s3iWm[o*%d-QlU#i9Y=7,l+dF, ;K:6yI@{zrZpA`vbZJUPB%');
define('SECURE_AUTH_KEY',  '`{Tbn)uGJgvyA/tK!rK YGs6J<Hr}V0*%oM9fvv&[PZ&fpU]iu?72mNJ+1L`Kl/%');
define('LOGGED_IN_KEY',    '}iSM.pT;S)>Tq<K3Ou)zy!H#J~=6Fjg/WZWmP`8ZC80uud<dt9^%q3}2&6~jho[m');
define('NONCE_KEY',        '3=MlvLJ1Wl^tx78Gj6ILiZet.JzgIlE&8mXK^siejav!IHbC_AAN1S5/BXr+5f}@');
define('AUTH_SALT',        '*rGj.oC#a^FR_0)]=H+m&RSM0xVQ4><GD<~n*8hp$Y0-|fmjqL^3`KRVx8cR^fTK');
define('SECURE_AUTH_SALT', 'TNj(N?VJ==K@dXGNN/*;d3)V#_|*%3]R43MrBm~qT_})YMe^94)?<qRz!*3VC|HY');
define('LOGGED_IN_SALT',   'heojM>O+}QA|,WTBM[p3I08GK!F*0M0h#g9`9M;ko]u1HedVm]XA#fhu[z7I1c[:');
define('NONCE_SALT',       'Ie4#4)n6RlQ@22jij%cxu4:a9jpt$>#aKTmn=yEfiwsR!3N.DJj|}vo-ls0(C7g+');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
