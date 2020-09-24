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
define( 'DB_NAME', 'wordpresschallenge' );

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
define( 'AUTH_KEY',         ',0BSe 4 P}Jj=t&`2:PBa`&*.YyHz-=@xo4QKgxB:qo_W_kdzax7K*`yJ=^btwFX' );
define( 'SECURE_AUTH_KEY',  'euVDog}#{qTb6RE+Oqa@#o]sJ| D06uhv&@f=u6j9F&},>{e0Nhl=_ISTZ6lT{0u' );
define( 'LOGGED_IN_KEY',    'k#Lg5EX.7rnVl<ruiBhKwH=2N4=n07$9t#rVW-SN3k2to;JDVx+qVEg]&d6X)6_j' );
define( 'NONCE_KEY',        '|xLg+.df$Al?F/VyK-JL^Uaz]c[c&M|=7-l3Ufyw){p1Aja|oc7S9+htTy=c%Ec=' );
define( 'AUTH_SALT',        '/^@dfS`b0wiF;*8aPZ/7Vltx:kEk?3Bi0Sy$p{=FyXu_@$O]hB?OSCp)/RpEK6z.' );
define( 'SECURE_AUTH_SALT', 'TVg>M@fXX/f G?ZT=TM<$wtw=9$!WIE>Q5#Zn9W`k9uS>|-^[;9EoVQ;}X!UwhTA' );
define( 'LOGGED_IN_SALT',   'v3&nJ$~bhylZw_}0]VK*W*Qw;#38_ynNg;^|!dWIg7@B9%iH+13Mt?zsK=)~vTJ2' );
define( 'NONCE_SALT',       '8,U{%dSx+^#TSLJvjeF [fTkqU7h<i)o&[+(E.$#6^Z4Kh3OpT6/S(.7g(q5Dp$B' );

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
