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
define('DB_NAME', 'khalidw631');

/** MySQL database username */
define('DB_USER', 'khalidw631');

/** MySQL database password */
define('DB_PASSWORD', '8PHfHRxntBRf');

/** MySQL hostname */
define('DB_HOST', 'khalidw631.mysql.db:3306');

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
define('AUTH_KEY',         'PG1dfJ7TYLtRgwg/inlG9fzHe3K7YTsHf7iE6Ha35bo5pjyflxaK0tgVPhAt');
define('SECURE_AUTH_KEY',  'nVOFmGBimAO5XdAay+/DRxI+rRLlf7e/+r48rR/knLBNyvYUfnRbkI5AGS/Q');
define('LOGGED_IN_KEY',    '559FAyapXYm+mRbzGLRqcIKe8B5Ul4p4yhzLcQc7JxG1c5IAjrlJhnXrWzWt');
define('NONCE_KEY',        '+88u8QhOfXEjW4mz1q/LPwRrUHbaW+NJa4U6+/Bnyi4siUVBaD4or8Q3tN6a');
define('AUTH_SALT',        'TNQLnfILv2GxAuGJ6sSB7BPStNoA9Vt/GmNCIH7DqZavac5vme5U5vV07pL1');
define('SECURE_AUTH_SALT', '+w6V8aprE4GoWOOVhtWjn+qZPUYQJzwBYTlUomWY4UjXyRC8sbd90ad6Lft/');
define('LOGGED_IN_SALT',   '2Q6p4KWwf/38XfTgY4TFKMGa6oyZZya27EP3QSpU1iXiUPxUHrZZMDetNEJf');
define('NONCE_SALT',       'i3ZVcw6UdNRJEO+1CJXDBPSwAgksw4aLgKZIFhdQCupzwvNTfX+T8ydydRl/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod728_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
