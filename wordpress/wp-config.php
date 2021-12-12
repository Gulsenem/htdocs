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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'u64|6YSW_MDc;z9>JE^e`ti1iO^{x3@e<C}N}YtwsH83}x87BFy(ZAI<m=+n?%3C' );
define( 'SECURE_AUTH_KEY',  '3{;upiG@m3=qm=[5 ]w)BljisJU)ZC@tkAiz^XJqb,[G6^#N&Ro[.^o8RKgnP|I1' );
define( 'LOGGED_IN_KEY',    'ONJW)O5oicI2K%T*3ZbD3Tfvk3N9dkh#0MWh_6fcxT%=t0rx4y@+Pneib5UMkJAg' );
define( 'NONCE_KEY',        'fWqSWaNklzdYFp9Ev5D]^!l-]^0bB-K@I4ud2D!8qllC[CaNXnOsCz~0;/QByaKP' );
define( 'AUTH_SALT',        'w/<b]#45e,3F+iVtWh,H00Ej.KjN;%@O8h]}h+vYSxA+h@6jQn5G7$B@~7LFz9*i' );
define( 'SECURE_AUTH_SALT', 'YoIYpf]8C75![:_lE%].1>j6P!2F$mLdn22C<}ei!pt:#0xIi[ju)P!^t}4%FEd>' );
define( 'LOGGED_IN_SALT',   ']QK]Zf]?u%#o3V)1g9S;3|(FA~^^kF^Ci.b(e7|{;uuUpt~Aa Nf7xWqqIfS4Lo=' );
define( 'NONCE_SALT',       'E?qD8R_NJk~{k1H5fvFvjJPC?`IQQCaVtBd@0_tGR6O??V`?;UYh#F9oSFv-, Om' );

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
