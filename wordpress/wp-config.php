<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '_Ttn$s+}w;O2A+9/KT -|*@?o{uaQyfaw`+VbLM&Q|*uf4sR$=B=H|PHW5UbWuz*');
define('SECURE_AUTH_KEY',  'aaF}7PvT,_w#j0=1vbA|p4?~p7A._/qAbV>SotG,-Erx]e#rp.{&E^bn|odM=|]o');
define('LOGGED_IN_KEY',    '|F|XEmswPS?P,nhxK;xGh?|sA!g7gA2=M-`?:tG=r#5*:{GnFC,a+e8;#qTn?50U');
define('NONCE_KEY',        'm,%++m^v!YwZ.J:czmQ&onH6nEE1Jzoq8y!-~{OZxeBv>}mqp4[fC8H61ysLMj~b');
define('AUTH_SALT',        '.RU-ra$^+XY_A>p)_Z^ T%O]]1@(|+O5&Tq/T ?-PO;6i0@oBox{RASs!.p%b<0;');
define('SECURE_AUTH_SALT', '+rh_[Ra8 lng-v,B`E`}JnHP?jeG4B5]Y8)zVs] E(&zHxaGr?VQT+9-/py7}R2^');
define('LOGGED_IN_SALT',   '&+?7u1[#1ZaZsLXieBr=:tag1XM^Q+Y|S)>e;gwA{7!gwMB<AxX!H6|/|2c+z_Hv');
define('NONCE_SALT',       '=-#ffR@zN39!D&RrxJ|h=[RNr_ $:i*J9R4+Q^!2L-(n-6)~%%P;%f`,ZcnX|vF`');

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
