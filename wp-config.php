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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'artlit');

/** MySQL database password */
define('DB_PASSWORD', 'y22^.|Te>s$HS{6e');

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
define('AUTH_KEY',         'hdb+GAS|Jc|H(<@nr4TRn{utQO}wsQA `JBn^fkaY!@B@yhkHbUhF0-uc,`d7KB%');
define('SECURE_AUTH_KEY',  'fvOc4.rk og;r4}U=6225/TL]<*>Z[d0-W(|/QK8ob=51kwD8^g1+mpI&1[?-1>U');
define('LOGGED_IN_KEY',    'LJm}:e/O;e;)v4C*p{o{?gf,a=:XPct=)cblaQkA$U{E>7|y8N_5rig*kS#3JB-.');
define('NONCE_KEY',        'OljXP~Bf(&H+IWm930<;?$FWiT^+ye|X7R=D-yKpyb?|z;po$U{n01P+;*~Q<+JZ');
define('AUTH_SALT',        'On5|M]nv(--ob:GK UpZqs0t?BZ#EuUibk^y>#71pBJ#Y1J&R)&C7PekAjF7uf65');
define('SECURE_AUTH_SALT', 'V&rF{/;lZUFG.^dL;oF<2e pf@*.oH*F#qbAM ~8=Ri8%se--.|h6JXAm1;#{9M7');
define('LOGGED_IN_SALT',   'Uws|i@+G.*GP+O]cUWa!&m&*+.Q|]MkshU`H]CU+s-}}S`FjX2k^.lrkjr(i)-?(');
define('NONCE_SALT',       'gI-5QSFaS04_FoXBgw[]~U^gw(lD4`(!2a/,1F9k=XLhRNes*Y<`nn0Me#I2ds!}');

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
