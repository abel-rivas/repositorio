<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intranet_db' );

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
define( 'AUTH_KEY',         '>KleBbO1@$5nE|_I7RiX%RqenYQ!KR.:Q3T|0ym_Or wFR%md1kM/[{;-9GYLeTq' );
define( 'SECURE_AUTH_KEY',  '$lPS<>i<jHj2Q^O_{2D}SbJdKL)UNU0zx775D_a!=?DUH5u@M>&n=D*LJ`+/7*6&' );
define( 'LOGGED_IN_KEY',    '&<^/<](e]9wkF2y%$AZHm2,E//m-7_aR*7;3K1DB,l9`ScuO:^No;hcRu(6#T(fv' );
define( 'NONCE_KEY',        'Ptxq8X69U5RPNoO^zE2.l5F_<;)CYAR;G|[OU2Jn=ZyiytmrXK%tJ]oKYAV?k.SV' );
define( 'AUTH_SALT',        'Ck])H#i))+B0#c1OF}[1v~B)B3BEkk&U-@V~n0I-I`x<>no_4kp]OS?Rkk>8Y`o!' );
define( 'SECURE_AUTH_SALT', '+;&V=FIrE1$Bt]s-vFNYz^]cvuS_4[ MOn=d1{IP6/n>VhiUf_oT8T1E5U]Q=/I%' );
define( 'LOGGED_IN_SALT',   'd]V[zA;oDNmQBX`& VR=GN^ |e@YMHHgVwKFAn@{C@#i)r*C+E%Gp]t[zS(`YamF' );
define( 'NONCE_SALT',       'w?+|T<:alz:d:`FlBVoi}]*_]zseL{}myu1lswT_]`G]R>.jX;fY]0#UMN+6vf<`' );

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
