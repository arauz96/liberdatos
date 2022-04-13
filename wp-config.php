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
define( 'DB_NAME', 'liberdatos_db' );

/** Database username */
define( 'DB_USER', 'PhpAdministrator' );

/** Database password */
define( 'DB_PASSWORD', 'Passw0rd@Php' );

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
define( 'AUTH_KEY',         '=UfTyjayaQ:02:O5`87+Dt)})U=HSk|8i |2#3z?vr</0cgY|4eXhX/)}yuhP!bE' );
define( 'SECURE_AUTH_KEY',  'unBQ}dEP/,ZHkucmx%aKU2j{<V=.<wiczm_Agg6#B)1/!DHAaLA.T9|!1oc53c5&' );
define( 'LOGGED_IN_KEY',    'BQNi{Zdlp!y z@j6d!h;AA6Yz&/uOR@q3VSxU8TO8,PDD#6+nX.EG@CzfM11Y[nX' );
define( 'NONCE_KEY',        'Q`>vEjW=9Pkz@/m#nCY7HTjn1}N|Zl_I/@*4V5ks?a2k7?I_=rt`.@gFeco3_YcL' );
define( 'AUTH_SALT',        '$F{Cl&I|hq!g+!e]Y&R26{v^@0N!V?gg*S4#95&xPmwZy4,Pp-ZnG4ZP2+O~:53F' );
define( 'SECURE_AUTH_SALT', 'TZ%?+aOABt5Wce;QL0ij3XY^M5EqvStN7!`FvSL.FNK:,!xiRV;_]/,`RM#Nu^;}' );
define( 'LOGGED_IN_SALT',   'y6DS[*><i5]@SVd>5qQeZ#>9A&5!:E]yK(4~s]Ks#(lJakcD?<#f_#i*EQ NlA9[' );
define( 'NONCE_SALT',       'H#Cm;QS@|jAxH$+MQXn>?TCWt>m +K6@r|K_zG-wfXh}J[ARCf`6hg!Zr{^upUCp' );

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
