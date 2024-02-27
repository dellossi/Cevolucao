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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cevol029_wp584' );

/** Database username */
define( 'DB_USER', 'cevol029_wp584' );

/** Database password */
define( 'DB_PASSWORD', 'Xh-5-Sp7Q3' );

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
define( 'AUTH_KEY',         'qsrahmbjeekp0l6de8p0kks0woinrpgd3dnrbpa9wwr2c4tvf9fa7eemptxpkcar' );
define( 'SECURE_AUTH_KEY',  'ls7zcafzwrtu5jihnvcz1bfsnutekkyojlsur1c7tyw3w6jt0ygswo9trjms21ho' );
define( 'LOGGED_IN_KEY',    'hb2fbsgrvwitzp0oeacj0egqhy1kth8p5pati3hwz1oievmzb7svgmcsrqvjq4wf' );
define( 'NONCE_KEY',        'ay4pvevfp7i2hkqh9yfmiv3vowcosazhjbsbfnubfk8lksyokbdic5zwikos4fe2' );
define( 'AUTH_SALT',        'rp2oaopp8d3yayg5csltl0ocade4pzwyq6tori2vhvpausgiviggudtzb4wbvvyo' );
define( 'SECURE_AUTH_SALT', 'sucej0ryztbiyasdk5qg71iezgr0wypgccgm8pl7tgymlkqljp3wf6kjdolhdnkf' );
define( 'LOGGED_IN_SALT',   'p5jdtqbpdoqvloylloexmjklxsuwjo3mmluoi81pzevpx3p4h37sttp41by0pnfz' );
define( 'NONCE_SALT',       'jbz2471wectf4v2jfejena4jlanuxf06rqyfwiul1updiaiyqpepdaby26zgri7m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpl9_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
