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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbydnzct54h04g' );

/** Database username */
define( 'DB_USER', 'ui9l71krbgewy' );

/** Database password */
define( 'DB_PASSWORD', 'ljsrd18p7psi' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '<#])@YEO]r6d*N2)aLRF3@<?_96~zOYzT}$=OdZ Sd>KEDcH_-|yY!paoy;ir6D}' );
define( 'SECURE_AUTH_KEY',   'y&qww#gS-Am,WZ1@;,|=*H/dDL8RnU#9GUFO#yhST#F^4Bj&}t8runy>+$+s*UVP' );
define( 'LOGGED_IN_KEY',     '].+]Sjh^%feR_M{+-N4YB-nLlU[]6=n|RIEgDq[uCyvD:MJBnD]e%}REg3cs&R#U' );
define( 'NONCE_KEY',         'nHgniXy!Mt-+#OmPR]6UyiuBYz.z6m jza3rSV-k}wBV5270gV/v$P8 wwOINwio' );
define( 'AUTH_SALT',         'Bp7*Ak,b/iirf&O_ku:0FUXNP3S{u?1>p<)vy%Cxq16BdwWB}@EC~S|M<1`S(z*~' );
define( 'SECURE_AUTH_SALT',  'wGx4/Tzeo(UM%OMk4ityJ1Y.UYQ/]-Y2^@l83/)F:Q}~N>hLl!E`JU%CtVg6>SMM' );
define( 'LOGGED_IN_SALT',    '#Wnjl!4kKZR07#mr{xkH7dW~l[0J=w/r*H(iea^G|}ir <5_H|OVBzK`g=OXLUQZ' );
define( 'NONCE_SALT',        'bvuWy5d~.7]S+!r5Ym9fBz%qOu ;gD%6.hNdlX}Q?J?[aHh BKP%E6S(D+*^IG<{' );
define( 'WP_CACHE_KEY_SALT', 'uS#N(4~( %&9CK@THID{zBd1A2:S7L~Dtybycydz%;;oPz^7qCW1N+&`^!?U`K B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kzc_';


/* Add any custom values between this line and the "stop editing" line. */



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
define( 'WP_ENVIRONMENT_TYPE', 'staging' ); // Added by SiteGround WordPress Staging system
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
