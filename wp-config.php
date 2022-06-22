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
define( 'DB_NAME', 'peinture' );

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
define( 'AUTH_KEY',         'a#s1L$6Kk%oaLE m-2v3i.7$/Hox`o[z]ad?>~C/L]>5/fngU_=URaZ~@FdkC1m.' );
define( 'SECURE_AUTH_KEY',  'v{dO~9DBC)>wr,9tI&ua?|Ewplos*fn>!3uRFlO0:Up+AA6Q$7f8-BKCmeUhB!{p' );
define( 'LOGGED_IN_KEY',    '%VDGqA&.n~<3By_*vU/eQ9:}XZRoF`oF_zdN.K>d-]w(j.JI:Cj<.)Cy_$!2PI{^' );
define( 'NONCE_KEY',        'eU&h=FMQjK~G^%WB:P9$BmJ*OZj})lemR~|3W7i6`x,$Pmb#t3otmkQ*Yx)SXEs{' );
define( 'AUTH_SALT',        '/#tJb2sK0%,lVazJpu~8n2NFe=8LX3<[-Vx%k{*cIqK$?E;r^t!P|*NEiyjxdA;y' );
define( 'SECURE_AUTH_SALT', '9-YE7htPUxSOb!F-<g5FyqtA>)w=%_F&Z3d|zA`F&bVxo=BM3yEI<&7<;<&1{5z5' );
define( 'LOGGED_IN_SALT',   'aCclPK](`]0B=@8y~y[ejgr~t}N<4Q^@`O*zFS2[bH 3mSV9Ryv u{.7yL-{|ZxQ' );
define( 'NONCE_SALT',       '89bd!yls/9k]H[!N}(7szX/x!KLy,WTut3Vuj&OKW,w@7/mI=jHGD~;sgnH0=M_~' );

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
