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
define( 'DB_NAME', 'giaoxungoc_wp' );

/** Database username */
define( 'DB_USER', 'giaoxungoc_wp' );

/** Database password */
define( 'DB_PASSWORD', 'L3thanhvu@' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '3l9[@?`E,P!{o&[1qsXQHZp*k$if&fz#V#l+dapJFcD9&bcE!o9[lvG@k7e,*jq-' );
define( 'SECURE_AUTH_KEY',  '<AEMU+v0mnN{_PE&CP?[rApa]!w~ YEBOjZF[r{Zi^@W&&t1A-z^m!&c@J`Fcv6E' );
define( 'LOGGED_IN_KEY',    'WV>9;9[#e8a;~[!wla3$P^T#k_EbW*N`BtY$)EgaYoUf!Wj9*d>S0$kRDONzNTa,' );
define( 'NONCE_KEY',        '62,]X$b?3aYw7X~DpnIJ[HmQ;lH!jIu-%Gg~Wx}>3p<oDQcZ7yRcJL.4XRZX~2%%' );
define( 'AUTH_SALT',        'Z4|=r!V4j6)E4UtEewGF>^B`{LpaLd@rd%pBcI4{~r/%|Ld10FDf_/68SE6rP1iq' );
define( 'SECURE_AUTH_SALT', 'VVK:q.m;Vfyu/m7I#ThX#,{!l}Jd+=Im!rab?h?^Y$P~4g`%X/LwkN_LnJt*F[e-' );
define( 'LOGGED_IN_SALT',   'J +=].JO^O4+9{I2>B$r1q*Fre71).3(5VYnSvR!DKu(dA;Gu`5Ozk>UH6xZ6<`r' );
define( 'NONCE_SALT',       'T|{;NC&<b)L~g4 3lGE8/MwSD(d&Rf5Gt4SlL-gRwxR>FTDENtj1ls8+c2>wwW:o' );

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
