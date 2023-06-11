<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sinonjs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ex}{<dho(yE=[5v^L`EK7i@E?*n;kvs*1>5b13==DO6fI&^TLvj>b4bb/_Cj<cM}' );
define( 'SECURE_AUTH_KEY',  'NWC&*$4(Wyq}ea|NM!E@{c!Q_N^KPgIXEP6O<.<KvRTLjAs,RW$CV+tStUMY4B+u' );
define( 'LOGGED_IN_KEY',    'CS98)`B(W621!F.[N=%a`QebYyZ<UOyzJI<^u^)a%1I<$!#*mxhTT`a:mPjXdo]&' );
define( 'NONCE_KEY',        'OW[}E!DC&zHsB<IVrp/(D`LjZ%ycO@4c7k0FT=LArqN+xl)+Rc-3;&n}!w.XIqLX' );
define( 'AUTH_SALT',        '$E@JHY[g0Sfpo]7B%hV?rVr$./J#5&wap2M^IAU*c8ycuk,TF9ft3aSg~3.:C{mr' );
define( 'SECURE_AUTH_SALT', '2HEa-8?3IywPxB@Q,*!WbqSY#,hP9u(H{Al`L`M#X8%F3H<TvNTUw+T_AXF^IGYj' );
define( 'LOGGED_IN_SALT',   'BT@p#G1&Wcxz;DZsTthXEj.lFF>.pK;pISgg+x}Wr;P>3_HK(=.a$H3?fj#;]xC/' );
define( 'NONCE_SALT',       'u@*2DQ@P<AB#9iYgY9|SLN%W]]er0dttm!jwU85>xOgOJ,do|T*g2Vt+y:B!dQbZ' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
