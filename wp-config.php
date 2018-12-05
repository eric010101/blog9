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
define('DB_NAME', 'esbcwp_blog9');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog9_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog9_happy');

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
define('AUTH_KEY',         'SceN1YguAMxCrvf9h0eHij8g0960gtIKvKpOKIBGpjVYts6U2HEXxLWwI7rG8gcN');
define('SECURE_AUTH_KEY',  'sTjOmGML2oU5W55YiZYZuglBllZo6UR2WntkBOheLMYHyDkNSdIvx5sw81Xv0kq9');
define('LOGGED_IN_KEY',    'QW6vtRhHmtRwKl2C3TQvHvziUmFtT1LxQauOUQyA6T07onMM5mFPi9bibIv63UL2');
define('NONCE_KEY',        'm9X8yAG9U6VEC28JqaTWC4rlY2PzWf61W6xrE79yEjwRpzh4Kf03S3sDNy6Noz2q');
define('AUTH_SALT',        'DCt4zgXkDBRCRjaqRuQxehhV7X9iKdXbZadtdA6xifMcegcW6oFpQNyEteEcLROo');
define('SECURE_AUTH_SALT', 'DKDxH6DspeNZWwvWoiS0lPvO8xQpfemmDDMHBbEydn5frIWLHtqEazQTGtr5I2ZZ');
define('LOGGED_IN_SALT',   '6pS4jf35DDsd0gV3JlhMxAc2Vdh6Dh4nmd3VQP9WW5cH4upkh8ENZEeWzDYzv4VM');
define('NONCE_SALT',       'JlFjM5PE9jGerxpJcI1R4rFLM3jqsAEC4BFbDK9lZuB5FXXk0QjoHTipwmCExdGj');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
