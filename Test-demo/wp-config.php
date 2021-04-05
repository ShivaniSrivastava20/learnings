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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'x)6rw^n<d6e}IHWNck;%%ibk>cD+)%K]0Cx U)fuo8ab=NA%[BUJ<e^-@NR978^7' );
define( 'SECURE_AUTH_KEY',  '(F|eLm.X:7bat(jz8sf0vWkuN|!X9EF,R/X:/M8Z%BWMwf~{PMSl9xA2<}Q367+T' );
define( 'LOGGED_IN_KEY',    'PK&?DYCuQ1P+#[7p;~:yUenY/Te(-3(17:-yz-VD$3il^S{g$kR/Vv0gvEL7S`8<' );
define( 'NONCE_KEY',        'bDBr<QzvGL= o-UuS]}#Fv%*5zaXpV6<{3[t+w#D{r&:>Dn]xX#;zXLT;7R,5VhM' );
define( 'AUTH_SALT',        'RC8- lFXV&!7@R^Z rvia d}Zs}1O@bve`8 Tx/n7#C@kTQuQ}m(P>|PFTl&kk>A' );
define( 'SECURE_AUTH_SALT', '02 ~T^S.e>>c3n$gog.LiYw3Jq907zeIIdNGtNovo,nYyf:/~>dF!@>|(PQ.M!AB' );
define( 'LOGGED_IN_SALT',   '|CNHs+.d!|/`O)szhE.%iFk$U%L.e&D.j`i>;x;$.E^g`aC_pCYf1H*Hg2VuVGck' );
define( 'NONCE_SALT',       '+$@9kDX0;n-X; s69TG+Wi^NDel31R~E?g*Sc(sa@Re{6 I^|e~dO8E1F_I]UQ@}' );

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
