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
define( 'DB_NAME', 'pier' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8d{f{lR9% D93FP.k D{tf;E(5+vme0s0W&!-BJUZz0BsBDw0G[TcEu7Pkrb@m)G' );
define( 'SECURE_AUTH_KEY',  ':;d8A0/;sTa6g?0aWN=bK}wdv0W ?4S?lF+@TK*`lF(-{sRR,h1VF;(cR_ mxP<!' );
define( 'LOGGED_IN_KEY',    'YK%p>AWFf84IgB7W=9+g]z=k0I1u@<W39&MGKEADfQWI?>!h]]5al/0WX/([.?Q*' );
define( 'NONCE_KEY',        '@9h`SCesoy1} 9)Zwp/pGh1Abq~g4LMdk;g7d?BiB:e3smadLhs=3k6lr|3}!{D^' );
define( 'AUTH_SALT',        '0K~ZQJD!6R; [{kMK[fJ@A!pKD{cgP4&zDWf~I/QY~<5m&s&BQ&Vr*$U| HIE0m9' );
define( 'SECURE_AUTH_SALT', 'P4$:$7Q*r);8OY82KJKtCT({ep1m;;mI&EYU`fv2:^4hc6giwX}t?gs=e(J1Awzv' );
define( 'LOGGED_IN_SALT',   '7*pStSG#L?6GQA/;[:zrCf[BYg*GhI;+RJX7s^2}._R6Y~HD@dTsq(V)8s$=*s5m' );
define( 'NONCE_SALT',       'UOzK*6f7<OwRC{W$`N`x!v>5UZmQCc)Y`fFyg4l,>~W/<+4>*NuMl?Y/AG4aw[R}' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
