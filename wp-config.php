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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~D`:@:Ab,<%%+9kQ{afiuKUI >} v7MK8S|F[U#ZC:!FNqY?L;1)64&r`53876H<' );
define( 'SECURE_AUTH_KEY',  'wuY[$bOB}-6n1>Z9voYyd!]95hkpcM$3 `Nu0M}wt{wz^w`l})6VZUB+2:LKhW<Y' );
define( 'LOGGED_IN_KEY',    'R{X${{+<qn=4U@7YUu1*ez=`IiZtT|7ggXCE 53)o}P_Dzt+D%o1<L8M_$(*Aep[' );
define( 'NONCE_KEY',        '^7&]3O4w!EG7[kD~k_!<Lbus}-E1X{f36?18_E4 M1o$ C#$-IzB[Cx_SqJAWEi3' );
define( 'AUTH_SALT',        'qKS =2UX]eRbxdEEMq_RKxW3j,y7=7aE<LRD5`kEHUfZN8^TA}r}~2nqI3BCLE]Q' );
define( 'SECURE_AUTH_SALT', '8O@Sm&78aOH*VYdGR9yF xjCw^:%:V!*TUu#}+V2=0DO2w+O}&eG}h(Ip^q._6.h' );
define( 'LOGGED_IN_SALT',   'J;`OcWi[C;2CGL<+$:c%h{{ZxIc.);_zGSw0jlJ 5H~tgYfD`1U@xwC=2(~~ i,b' );
define( 'NONCE_SALT',       'FaTSCE}2J=*3;0l_ HByfT34zrP-(Wgm:2_f1:b!62!_i*(WY$c9NZ>1]>vX8$dv' );

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
