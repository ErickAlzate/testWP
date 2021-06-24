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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'KMu=!A>XIbX1Pll_GMoI&6!tr]5W0*O6NN!+tU2UY7td9<C,T(633^sK!myL/q@v' );
define( 'SECURE_AUTH_KEY',  'jDr{?SLGLBD]^v#l 57rP;{~C/kQSSuFAWEcjx}=h[/FTdAuE9*S(N@Xt!N2|z2{' );
define( 'LOGGED_IN_KEY',    'I:er}qdQ*l iR}?0WBjkhInZ~blz:nm,&EH)3T~YySW)G^TFa$<2h%#wru[;L0*:' );
define( 'NONCE_KEY',        '$Q(:E4J(=!G8hL([Bauqb~gAo7{3eLKzo_sk>43xq#!D1s9vVsKkBI=;s69(r^C7' );
define( 'AUTH_SALT',        '(Zl{-s]_#~OCC5;p=Eh+`dRu_v6+{3j-=+}u=zA+{s]r4N_L!/ZfL^Pj8B&47g!A' );
define( 'SECURE_AUTH_SALT', 'y0*9pX4+VA9%9#}-ea&iv}6YHs^bT+J/V?L`_p7EyyD~T$]G`y@T-:j$thOLaV3v' );
define( 'LOGGED_IN_SALT',   'wG*d7YX.Cu+3_o>oQNt=h}UkNH$8~K;#@M4!:<idE0hR>1cubBv/$=]a2}#Gs+RW' );
define( 'NONCE_SALT',       ':%v5nFy IcHpyb)orLR6P=pzWHcCTui>=@x1$mV12@;%;8fOT4QkTB%<`IG1;I=a' );

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
