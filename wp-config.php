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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hwdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ') L]>2=XJ{KHqaPFp<J?}LpLy0# dfx|z)^`T+upZ_<--y-3:G<cp*&2oo7SqKg^');
define('SECURE_AUTH_KEY',  'Y^kvi-#-|iaH}#K`-[~{ZSe<JHK{^wH$PWM@cC;UL|>5`GjOrIS0]$lKAqY+2B<`');
define('LOGGED_IN_KEY',    'cl}ilQ<}yF]KA3(4[/L+;n#`+)`]W=1$pnSHG_,:W #~Z*5Qq>4xW|5NCVb5 R5M');
define('NONCE_KEY',        ':.;n`?LL>-=)vY=jb4u9hd|8z8ttv8GU36/u;rSwkJB!_~y1`m-l@X8d$6w[~j1U');
define('AUTH_SALT',        'O2-)~c<O+G` w^E6,V7|e%N:khGC.7){s@Mw-2JqM{t?R!9SKRQ%e8+Dcrp-+:sQ');
define('SECURE_AUTH_SALT', 'CB`5IPgD(!cM),yWk$s]=kj@pbxDo.w*bS0Ewa|Bn}Vcn~-@8aGT_q%uFJZ>6eX(');
define('LOGGED_IN_SALT',   '=gus-, OP>-,xqI :1iJaf$~IuDEn;@E-3R,(-xHwh5+S@ EVT,r%h,|Zg*}+=~%');
define('NONCE_SALT',       '#GdFyN[TBLF]%8<X3I.Vw?|J>g{5mmKtbmr =O6++ug|NkLy+ywvqGXh$t-Z%M*W');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
