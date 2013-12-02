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
define('DB_NAME', 'forage');

/** MySQL database username */
define('DB_USER', 'forage');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'WGB?+{Y64yq6lli3 ?-T;B7>dC+Ckydw+&~C`VO3ZirPTAiLbb%:L6N|M+trM&tc');
define('SECURE_AUTH_KEY',  '2nTjgZ{mT0c!ZGd0:+%K+P<<|_3PBh+2wtGDbls6]P_}`,&6]7K(b|eHexZpjSpJ');
define('LOGGED_IN_KEY',    'B-~e(&C;~HB 1u*{=gq(q1lkH~Ckx#A2E|%Z9t.8o7^ x!;*1XY|H65*xF1a=a86');
define('NONCE_KEY',        ':++XxB+x)P!I&tekmeP#F<K`OSdaqlBtZ!Kk8AkClW@Ie3 u)<d/7v|*v< _(vyW');
define('AUTH_SALT',        'MxWnX0bQ@Yy.#kiE@o:r^44i}:W>i2VrUKd*;$)M~14^wRVxqi><c%0&glU|8WV-');
define('SECURE_AUTH_SALT', 'YS.oY@k.SsIFF[nX$]B4! TX-2klzJa!u[<,}NU0h8co)pe0,,1<x G.&:|@mt:-');
define('LOGGED_IN_SALT',   ' DZD+U*Z8r5i.+-p{cB`K-Mz3-~-/^eaxUS1BAi^0:97mOm$9xEO>;|wU3CbvRVw');
define('NONCE_SALT',       'Aa&RI}*m!/J)eUb{wk>d TO!LR;xdh/=- 5B;,m>RTl0B-Na|VGop3-qH%Ez[e)H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
