<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'vitaclinic' );
define( 'DB_NAME', 'if0_40038345_vitaclinic' );

/** Database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'if0_40038345' );

/** Database password */
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', 'senhaDephig01' );

/** Database hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'sql104.infinityfree.com' );

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
define( 'AUTH_KEY',         'IC,h[ LXp}DnU-[/n5fHHcRnD~Rl%|ElToUGs-!]v{*_|8k0BzmHbBXJC?>%&C6g' );
define( 'SECURE_AUTH_KEY',  'W}mNu<(S[_o1H1Nj(PJ#4SK5U~C4@ In>>Jhy?H9N-1NKfq1YAI`>A7L&m}!=l-J' );
define( 'LOGGED_IN_KEY',    '+dzcm`x f&RwXb} 5)7&<nlRs%fV/uiQ(IPsk)()J9D3&l8=Irs]0g.6X^9#]Mwj' );
define( 'NONCE_KEY',        'eFTvDg3h[$9FG1]7aBl29UVFLb!sVAEX4Li+ymdZ0_NDaL4{Hsa/%q%3K(|XFB?1' );
define( 'AUTH_SALT',        'u6@Sif^U9!f/3+k{/Fw#9~x_oD76~3Y&9;wL5{1G*HNCX/>XfyR0*sp[@7beyUF*' );
define( 'SECURE_AUTH_SALT', '6:!+CDl4Lp}_U;~^PuqLzIx|.,iB?Ebz2,rekL [blkblFp;=ds,2/#i^1h>4)he' );
define( 'LOGGED_IN_SALT',   '029qHTUGkDJikZ)Flhg, fF/yeMR`edShEw|ObVebiuFO}|r/2n V6wvpzuPr2 n' );
define( 'NONCE_SALT',       'Y9/`Ew[1w3Z>bwU3O=MG%aZ>*#[6LNRf^^T4!c0_-Az8MTSV|:$eZGV:91K}[>M;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
