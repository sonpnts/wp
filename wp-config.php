<?php

define( 'WP_CACHE', true ); // Added by WP Rocket



define( 'ITSEC_ENCRYPTION_KEY', 'ey1yMDt7NjUgJE5sOSZncXB4S3cmXVQ3SUYzfXo6Vzk5QDBZJigmXyRnOTZiVCMmby5dZyVNLlBVW2dSY01OWg==' );


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

 * * Localized language

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'sonpntsc_sonpnts' );


/** Database username */

define( 'DB_USER', 'sonpntsc_sonpntsc_admin' );


/** Database password */

define( 'DB_PASSWORD', 'SonPham2003@' );


/** Database hostname */

define( 'DB_HOST', 'localhost:3306' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


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

define('AUTH_KEY', '~~4;nC7VAb4+iU5~0~b96rHzjgDx2(9r&Uq&pvyDJYb579b]CSwg%JW3x+/%~iKB');

define('SECURE_AUTH_KEY', 'H-0/q~2m6N81O*ME0Q:nK:1)[Md+m(6LYllt2|LtH0gq3j64%!l4p:eg/0|k[f5u');

define('LOGGED_IN_KEY', '-[U;M&97;q)Yzp~@|d89%L#2L8[:_a~c%yWw%t21Y0&Z4f6#t[:6v07PYxUM0v3z');

define('NONCE_KEY', '4T9-zRsMz8@Gy4br7mOoq6*]4gr-t)nl~ms)Y%b7Sk8aW*h_M6amZ~cTA-;%Wbn/');

define('AUTH_SALT', 'd1*U-jjZ;JW73I0C[027uhje@4~h@06fW6WF2dnCOp-C-lqF%)Zu2tvX2t:AA/!X');

define('SECURE_AUTH_SALT', 'I6zKK2x87)0tf8|!4T9UY1h[C23u3%4S1h_&pS]DCnmN*4:Uu/rR4UPBm11+I:(a');

define('LOGGED_IN_SALT', 'G_2|43e5w3(3)5Q!6~s~4#Ay059@no4K[4gstc#x/*|s3fl(Jw2g0j2vdhzq!/y+');

define('NONCE_SALT', ']:zsKv&%|49F3J0*@1Xz[8ld:53!Hd)7Hr9TB17Q0j12(J3;OZJ++k40hXdaaZlB');


define( 'RANK_MATH_ENCRYPTION_KEY', 'M**EC.{BSdtwS=UtX1cCb6adCt0_jMaL*?cYS^lUkMYQ1vdWuL=xW06§sM_.]j57' );

define( 'RANK_MATH_ENCRYPTION_SALT', 'c.lyZ8TZKFwLb=FI9{g(wn7r^wi[$hr8,Pn(u5VreAEBQUXn}z6w@DAG3u=7Y^hQ' );



/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'sonpnts';



/* Add any custom values between this line and the "stop editing" line. */


define('WP_ALLOW_MULTISITE', true);

define('WP_AUTO_UPDATE_CORE', false);


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

if ( ! defined( 'WP_DEBUG' ) ) {

	define( 'WP_DEBUG', false );

}




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

