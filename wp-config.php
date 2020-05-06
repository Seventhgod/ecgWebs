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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecg1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',x@FGhEr{=)?Y1.1lWX#`-vE8LS[m5,w*SosXY-euJr!^0c12+b-r.PPKT1g}~QE' );
define( 'SECURE_AUTH_KEY',  'V!]C;uz5-2KH<OVL&ta5^pf<4N*zomZ!k]5@lU?N)S3&>Nlyf761oS^BB200F}s0' );
define( 'LOGGED_IN_KEY',    'an;TvJ!I)zKg1-c.*8.qM_=FzpI>Vh!W&Q;7qk;h@YvTrSLr{ehr{Gn8G5mgIRSD' );
define( 'NONCE_KEY',        'Q1^sd9f~1d6.tMRq]@cS[4(V7{q7b_WsTCA)*4>M^Cw{:=dLZ)so#n ]v[hV.bf&' );
define( 'AUTH_SALT',        'nEF%,%rG?F>K[u3-X p/}GAPl[4a?DeBrZ~nfI#]e~ftoP1!~i:1|qDkf!,j9R%z' );
define( 'SECURE_AUTH_SALT', 'iJY}xVdXAR1 yRdW%RdE%]%(g[;.sw$q,--ALi$~H0?%y%4-Bi7ag4@@]f-bdcu:' );
define( 'LOGGED_IN_SALT',   ',63%O0QQ6*5,eV3tRVO8^Q/{p.!@xqeXr%Flu|Zei^[nk7=@MJ|pA]4g0_hGk(.q' );
define( 'NONCE_SALT',       'pCF~k|)Z+kDdAhd!jRky3Fq!vm[cg*d:7) #$H~k444m/%S2+/vsGxT!ky@.Pa[P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
