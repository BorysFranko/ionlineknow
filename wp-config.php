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
// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));
/** MySQL database username */
define('DB_USER', $db["user"]);
/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);
/** MySQL hostname */
define('DB_HOST', $db["host"]);
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tO<yEoKo%Lk,+w0[vy)_l}Gq.^faPdZaC}iN64[toqP6XPR[M xKIR@x!aR92JF&');
define('SECURE_AUTH_KEY',  'raLQ0lIX!5qQK^yRm:@uSz?7H9Z&@hC%-p4u w8^e4WZd`S]((Mr%.;ve-jR.UHd');
define('LOGGED_IN_KEY',    'R2Zlp@r|Yah&g$`iD0%jL9H]:,ifJ[isiP]._{*Iug%5W5;BOnw,Lxe~Y6so|Ok%');
define('NONCE_KEY',        'q$!2sqxzhQ+,56-/A`R$!&R[e/WSGVpwc|`|zTFx285c=A4[3D8}=V9K=GmZ0~iv');
define('AUTH_SALT',        '8.53L  $btsK{6oH3{9IEhcKAJ4Pq;A>!1LJZ;q^8rz_n.,%B#+2^}E+T=+;lkan');
define('SECURE_AUTH_SALT', '6*7+Ib~lsXsYy6xPEV|joY{:Xd:wsgI?CsgY!Nind&UWQL{OEHezKr?Ew>;MSFQ7');
define('LOGGED_IN_SALT',   ' mrgI$C$*qiJya6liz<DCsG$z%uye&U-X=(?2Rs3()2_!j4arc,ERD:{,3?S(B1~');
define('NONCE_SALT',       '0VLKZUyYA)u]|QcXbNEPsn*O/E.=[h1p5:#Q+d hbvH+@OJ-r03(E|J`{&?np5=~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
