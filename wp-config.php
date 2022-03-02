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
define( 'DB_NAME', 'carlos' );

/** Database username */
define( 'DB_USER', 'admin023' );

/** Database password */
define( 'DB_PASSWORD', 'Gg123456789++' );

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
define( 'AUTH_KEY',         'dk]?*tzcbKl/N:,{e/%>)~ZW_.9,A]l>YtJ0EWiV=rTP:0px9KU)G_;:kqYT4I@Z' );
define( 'SECURE_AUTH_KEY',  ')MQr-~@W@%0{;Pr0.ul:P[jaxl72K*zEr5CY2+-Uh#z$:?0l.*A]g8vym>]ho)-J' );
define( 'LOGGED_IN_KEY',    'dsFzF2 ;9X]YPYNo7;/aE$$UxEkk!|g4/a(GCpWEh{PXZ2{Lw;$66d>D~uflMBR>' );
define( 'NONCE_KEY',        '$*;pjhxudb^CUQ0F**{4<)-tr:[).GOUC.<A:wM0wikM,&uE}8)x$)=Ji6TCwNeX' );
define( 'AUTH_SALT',        'W_*1=D21NJ[-PAvq^z%KV,bxU:&@vx9.I5US/P0|wT9K_KO]X?W.hd4=d{v{XKz{' );
define( 'SECURE_AUTH_SALT', 'c`Rct9Az;DvvXeL98Vrjr58x(oiS&a|=qJEzWt$7Gc}$W_a5tZE^{>Dw[OaRf9,P' );
define( 'LOGGED_IN_SALT',   'BPqsY(StrlAP0U1/x7[lsb?dAX8%<r>0-iDor.Pst>?uw&tF>z(Nq]t] Xkrl$Ur' );
define( 'NONCE_SALT',       'wc YYB(laP7*`734?L`bh[ZC2ijd%UDF cwl-]sfV0<(eAWq>=cek:+#|zdFs3,]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hjtyr12_';

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
