<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'pro2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']#>vA6f$nB4<G|g2?IX,NOO?tfR.%D(s^0 ^F7s|~d|cVeel}6 r&Ne~%Vq,Ya1;' );
define( 'SECURE_AUTH_KEY',  'd|zv L&`GL0<:^Jfa#LBg$FDna#_8ykP]M<+IqRrSJu|PnXb<np[WG9h$k^Da1>N' );
define( 'LOGGED_IN_KEY',    '*z3<?O~Bxsgc 4P61(/d.i`.W!;l9$BEl<+(q|&v8#jI[m/3o{3Ns35oVPxZ=-kR' );
define( 'NONCE_KEY',        'IjsjAI_NitQdq71vY(S3HophAvows {q|:$>;e.cAX7:8^`+*Iiz{gP:1NtUI++B' );
define( 'AUTH_SALT',        'o0lDA#BTWzfwNB3!=rbgB=Qw{$tj#;g<9v25d-U]NITtd/m#,B`HC=k7UE!o,}Uk' );
define( 'SECURE_AUTH_SALT', 'c0^l$$vA5uNdfz|Ei8*].6h!?5N; %e*aUi`z{jAN66s}Rz6%tm}W0 j15i`R5^t' );
define( 'LOGGED_IN_SALT',   '9^0j dS|YUx%O!(7zi&Boq_Z4EFZYkL0jzxkoMZxgh?R^Vk%vaHLiAm~ST</-MCN' );
define( 'NONCE_SALT',       '4n<<Ui%WUPucu:`D;lF67v4~r,]9o>a;5.!C=zH<!SCgn<olhQXfcfkO:{DCaqw%' );

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
