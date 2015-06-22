<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/tithos/Desktop/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'ny8g[>`gM9>Cn}f;/<L3bRG;uJmzgbhEO=<rGpl6./9+uGXn70he<pm!]++@#1f<');
define('SECURE_AUTH_KEY',  'EEB9gI:fg!+Qih^|.-L+1g+Q@B~zAeT=x+5}FGlF4Bg_ XakK8Q)+/@T(0&#w|UV');
define('LOGGED_IN_KEY',    'CW=e%F2E+[v=#25dLtg+3yor&368-<^)ojD=[QC|@n5DV1L-L[6JS1)mYC(EHTf[');
define('NONCE_KEY',        'H|%oj4zW%DN^A9Z<-nddF8F>^G#EzZ;x,Ila/Vx1~jJux#0gWv~t}!L*+3fSy[<+');
define('AUTH_SALT',        '_QK7K+(hH+E5r;]-](8,.L!l2WVxLx{xmmWIQJZJy`kxZr-TjB_YZP25R<n6t.=e');
define('SECURE_AUTH_SALT', 'xbOJJ7-xiawJ>S`+e?](|)` |MhYCTL](^b{KrbXEmxy;aryDv`90+Q!g03.@io5');
define('LOGGED_IN_SALT',   'YWGC_oC%k?+9oD$YQWHUN2P05q0H<=g`$+zc-zk]mSAv%Hp!!P:u1|+aI~((]MMA');
define('NONCE_SALT',       'U]NjWrn-Ao$d`MjF1b!Ss7Bsk+I^$e#Eh}Y}-+PfK}ej/=>WB.y!C3}GEZ_g:wRk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
