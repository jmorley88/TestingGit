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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp55' );

/** MySQL database username */
define( 'DB_USER', 'wp55' );

/** MySQL database password */
define( 'DB_PASSWORD', '25-!8SERUp' );

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
define( 'AUTH_KEY',         'ik0bwdckgftqljqu3sq3ouzjjziuo1ki86m0sjrhueidgs6vo1b2q2apzcxjbrwy' );
define( 'SECURE_AUTH_KEY',  'uvixnaj7n3qeyrs508d8p6tz35ptkbut4bwg7hvtazwwabr04tjeucir5aeteiyx' );
define( 'LOGGED_IN_KEY',    'jhbcqidcvfutliicxm6nhh0qlmicpernbmxhbfmhruyhx9har8ny3cq8p04zowen' );
define( 'NONCE_KEY',        'fzxknuqkmvr9w0ep5lflawpx09v63olel3sjq2m386owirkj1rveayf45u2rv3s7' );
define( 'AUTH_SALT',        '3opdy3rtfebkxs5ozv54ije5fdjefwefks3ilfqzzgfxa7hati1dyu9r6uhne0xk' );
define( 'SECURE_AUTH_SALT', 'liiympszni2tcbz71h33hjhtuljmwqyg8e8fylyimzvfxdvqusfyoap8ufpzlzd1' );
define( 'LOGGED_IN_SALT',   'ycmydeu22eoqjw88cieppxgszvuqlqminzdpqeexdwiqkudciujcjsy5sjidm9ts' );
define( 'NONCE_SALT',       'hht1m7adq2giliugxoxvej6vpx405rq4yghfq849lkssieerc41lhnjxncnm6hay' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0d_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
