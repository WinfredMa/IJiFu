<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ijifu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ')zb3DmHEv<Lni,55,@f|Q*kl,+_)BH~[-%yYTNJ-u+94:Jy6.S7e5|g/|TPgTM|5');
define('SECURE_AUTH_KEY',  '1=QiFRDS+3L*Uv> Qn&!Qvx~(7NyPBb.?p?FnG!$;27#s@lh-$h]5i%,KSV_GKpE');
define('LOGGED_IN_KEY',    'IV8H/%E@,uQ>b*e?.X liii)R$!V]|r!g8BBH|9}S$16 y*,TG#S8H @l3k=^-BM');
define('NONCE_KEY',        'rJuG&MnUG1$<)q_] f[]V#U!mTe+>} aWGEL*B.uH9$ISJp8@/nXp@6v+s:q8z<k');
define('AUTH_SALT',        '9Q=HIEBk6ux(Fg@Z/}HImVK7_w|o*Chxe1a^(FnAijwqn!i;=96u)9ECBy4J2f8b');
define('SECURE_AUTH_SALT', 'WJYA)Cku,)T]O<DGR{hy2H+e[H@h1R[SzE<DoI:(89Y/13Fl!G/XAtCfSrTF*Q+6');
define('LOGGED_IN_SALT',   'R=}guqM6]/Mf;!r}qA2_Q:!-Bv=jqR!%2Bizr>w;[11^ToqeT`{FK>bm^@U.DPHs');
define('NONCE_SALT',       ':=TSN@]47(U%F/A^y[<;0/3vvP5EC;COuOy^V8*]kTMq.r#En;n<,Ah ycoWq7d,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
