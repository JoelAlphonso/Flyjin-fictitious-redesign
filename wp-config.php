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
define('DB_NAME', 'flyjin');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', '');


/** MySQL hostname */
define('DB_HOST', '127.0.0.1');


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
define('AUTH_KEY',         '{}pnd7F[J5[uWh>s=)>WLopU`<i~(T+$|GTj||VCU&svsQ[*0ML~T0f,cy6-,D/t');

define('SECURE_AUTH_KEY',  '5sDTkvU^($|y(a`%cq5g!R%HL?H77X<}9|)o{pysy$my` Sd7ZZ5Q-ZCP^VLOO|y');

define('LOGGED_IN_KEY',    'miF>JyHW<$VfP.Ah-}ng6Q.gB-]!,a(+A*gxI}P_7kZcYCObek>sNc}CTh^qd2..');

define('NONCE_KEY',        ';f:^NU2ZqdH2}Wm/MOZQl<9 ]/.D|`Gl<1;T&94VYu==i|`(Q||~B;yrAzFnI5jG');

define('AUTH_SALT',        '&m}BZkPatyAZkGSIn*Sopsk<-tgCB>}T&2iH.+ 1=wv8$:7SMD}EEMc*j-J5+}d%');

define('SECURE_AUTH_SALT', '_a@/!TLxCV_|Q~Iv;U+S:gtf4:bMdcD1Mb[6r8npJ3ECCp9~V/-JvT5aXNLm-c6O');

define('LOGGED_IN_SALT',   'K(@p+,V3Mo-+T)l*-(sJs_GoEo*s,Wnv;m.O(dQ0rF<B^<uI,0DZVP?YHhkVD1Ha');

define('NONCE_SALT',       '$(z }J!]VpknIHdemEc}VR$G0~J+MYd1L-He6+!Z:)3g>N*~w7o[wr{-w?VS:|%8');


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
