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
define('DB_NAME', 'training_lynda_underscores');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'r@(:$:PJKeeL,CX>#xoG?/.K:[OscVq>@t:&jZi@(ChF}Eoj,{Iwx=Bynd:zx12=');
define('SECURE_AUTH_KEY',  'I}Y$E_cf9<y| !aVHQ@,ryfZ1XfXt;TW,lMN!/gTHP2dh`i:/,R_2wp=hzM]V$7&');
define('LOGGED_IN_KEY',    '@=EIx$7JEW`s[7t/:gCA[gq,eS$ihInh/-p[^Z2O9xha5,[z8:Hg3V`a~+[E}9zY');
define('NONCE_KEY',        'ZUs)3GKgn#&NQ?%*L{Fy}i{?x8ZB*$-m{8>uY`:+G]7pPtMZUD#ug6b6`GKX;PaK');
define('AUTH_SALT',        'm[k~=CDZi~^~SI%nZs.#_>P4Wos2_WnL189Ots`Ue1y+<Gm,<qf(o;J7<ho+pk>?');
define('SECURE_AUTH_SALT', ':S[@4ryX)~FSwKk`zrD?3s_o4_eQmsT<.$B.yrfeLBHuOBKpSq35}]Mn)CTGcxwz');
define('LOGGED_IN_SALT',   '!!K2_o*`d?GpExfAA=;0hCbg}r 7h ~l+RrA}rZM_gJ6%a.2eLQEI.!Y[uyqDNk<');
define('NONCE_SALT',       'rsgs(E->X;jP&m@:(O}Yo|d=A],dQP&*tUNS%&7kDd|96/x:o?|oY#yub:56#N>X');

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
