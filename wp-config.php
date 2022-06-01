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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Timo' );

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
define( 'AUTH_KEY',         '].|8ur$nmYiaQN<kftW|<UXtktP%ecg/:xBI.=wIrb{p}!a3@t}mW>]`+!!(H;h&' );
define( 'SECURE_AUTH_KEY',  'VoSf#d-%xoJ[qq.vPeH6kIp+<BIPo8RG<#whva! pWq}U:3|X`|bI1G8^0]{w31Q' );
define( 'LOGGED_IN_KEY',    'Pw)wud[`B]K+@}[?!<881Vb87}=Ym->OGlA`ZCuB%vXzPaeOq$!2GhCHp`G;1v=r' );
define( 'NONCE_KEY',        'pYBzDAb/}nUnD67gtWGv03>Z_~*{KpQZ[S1T{Y!0t26?C/#&,/F.=2@fk@#w7J9H' );
define( 'AUTH_SALT',        'tfsWBkOFXM2,mpD DLb}priy),Prqop6VZQ)np$mz39M6=wY~c)Y#=m8- K<@~FP' );
define( 'SECURE_AUTH_SALT', 'm%SLyRUO4t>HPs:>zFN<<>%E|(4zZ,YlPqsaO)__JZ`BLk{`WA~j]f+aY|46;iDd' );
define( 'LOGGED_IN_SALT',   '}E ^R4V{m#_@FcZtJXMW>,62UykE}#2W?36$>m}gSI$BlT*quyq3Y?Jj;pSple]%' );
define( 'NONCE_SALT',       '2]/HR0)TohUJwtI~iDBR-Jw`#V+%Hj?Lk$Pl_R=nq#d(/_xH6%ebYsfze8f!,>Km' );

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
