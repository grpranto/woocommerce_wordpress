<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'woocommerce_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          's0deN&X2@]}lEi{U&]3iJ[*V54!D6Zs{a,[Z{X]^JC_wFoHe8{EK;^c%Rv]ylkx.' );
define( 'SECURE_AUTH_KEY',   ' NBARkmBq>0O#$D;yIzRIHBzNU9hi1pdV8/#|NL>o)88PTLw$a>]`3)!N6cR@T,4' );
define( 'LOGGED_IN_KEY',     'okkd7m`u$DS4xA am<nmJT(PqoPat# 6PJU5S~cI3y-?e!]Xbc^__D`w@&,:7?>h' );
define( 'NONCE_KEY',         'k{<}nOo)5VoC4^r^{z$7Jc)y1(zsz6v;)Q:^s|D2c_<ynbzijJ<Iy+?~g;mLMnUw' );
define( 'AUTH_SALT',         ']TK`SX*$h:Y=k_q5gqRc[C`ISF*OHX^&b( 7=]`5M&lx.-vuyv*0j1@r,:rC^Nib' );
define( 'SECURE_AUTH_SALT',  ' iT<|1Un=O:UM+l~iS)eqVCC.}zlX9nYAhHpJ)QQ2A*{BI+#u5QT3[h`eV_8gD?|' );
define( 'LOGGED_IN_SALT',    'GdNjuExjwFs-F6<Hdo$qM8GGea?iFL+n6<`jCUdiw{RCVV$|MImOPt2ZRE*G8> !' );
define( 'NONCE_SALT',        ',MtZq!{Y?<|f.KX@1km[12dH7hl;J`8v^vr5Ruz#zo dK`BDk;><LfQMHb 6e:0%' );
define( 'WP_CACHE_KEY_SALT', 'nz,ILS~$B[l/OFfR~|6+^=mIy#o|,`-CG.Fq9M/*G}<lubpO-M8eAyOI}1d~F?&&' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
