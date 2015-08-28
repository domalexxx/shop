<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'domashev_shopp');

/** MySQL database username */
define('DB_USER', 'domashev_shopp');

/** MySQL database password */
define('DB_PASSWORD', 'SsP@!o8q30');

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
define('AUTH_KEY',         'uypmnn87xtl5zazeq5cc4068g7biovms5c7noprv8wqvut2wldsfzhuemzawqaur');
define('SECURE_AUTH_KEY',  'afis3skpnigzjn8iyjoyaiwqf2acsqlo5ieyeraspbleziv9xumbeadvj4bxozbp');
define('LOGGED_IN_KEY',    'erwmcnvzofw67jhg3scvafqfswccwldj944lqhfcb8hluail89wtfjwyve3a6gcv');
define('NONCE_KEY',        '4ju2sg8o2kttvhiasgg8zbvs38gb9p5vennm7sjijbv81uwzd2n7lzosddacpvqs');
define('AUTH_SALT',        'ei7kidtqu0gt3kcutxbir5vn5ye0kapd2cflosqcs4pf54z1ianzkz1ieg8zqbjm');
define('SECURE_AUTH_SALT', 'ezw5izonqpmrhqf6vteqgvjl7obsy8wzqy31jddqxhcxrbgtvx9gttvx7jl1mucp');
define('LOGGED_IN_SALT',   'qgwjy0x9frleklfxlftyvcfrxnlyq1hpfrnfoetcpku5oo6uzezxteyelsvtwkzv');
define('NONCE_SALT',       'gqdstgjuj6bcrwfcrpeyrwd2gq1wh3z7pht9jksukw7goy52aystcdjiuv18tlu2');

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
