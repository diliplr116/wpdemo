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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ',O36nWstO:uM6U@%G4;<Pc6zQ49CSl,k3lRk?K`Z<958&YVE1k06/<hT@GO>w)`a' );
define( 'SECURE_AUTH_KEY',   '^;4=OKIL^+H!c?L|wLymc`bOg2VpV9buGSx3xl~:LA8$d|G!y_ MXcxT em!@v`j' );
define( 'LOGGED_IN_KEY',     '4w3SwGdbNo[Me%E#f-PZCW5EBG_|P Z(BUU0b>$=I~g/P&(F|{w:W=Km`<~TAluZ' );
define( 'NONCE_KEY',         '[PuPNiqYim34*<&KX|> ?0eLR1okpL 9vBxukBQxq<$$Zk6vX+D8QI.m_3e^`F5C' );
define( 'AUTH_SALT',         'MkaO=TR` DaqWn?F#^~f3!ZcU]8:6LPbI/4S%AB;z`s@K3-f6k?4Tq/Bc=cq&gJQ' );
define( 'SECURE_AUTH_SALT',  'BFj)K!_1<JncSxFH][C#Z1QU3eW6b5Z|PZg8`DG6usD^4*xlO<9VSwqcy+aaID#7' );
define( 'LOGGED_IN_SALT',    '5>{(*1bdGBcN=I,~Fxu.,:.]~k/co 2`>Mp@=oQr+fcpphigsd7c)cNF=wZV`Ecc' );
define( 'NONCE_SALT',        'J%JOok-;g-0N&-^^maL+,s1(!S]urAL:IgXS$a=BBZ)#=i;(v]5B6^M?jtO!+vxh' );
define( 'WP_CACHE_KEY_SALT', 'Duy21wS=aycQ5E lP.S*c!F}M5nK53}Qj!*};sT$jq]I~Nf6U54s7`[f,s#P=V5G' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
