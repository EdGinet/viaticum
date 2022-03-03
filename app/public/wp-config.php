<?php
# BEGIN SecuPress debugging
define( 'WP_DEBUG_DISPLAY', false );
# END SecuPress


# BEGIN SecuPress repair
define( 'WP_ALLOW_REPAIR', false );
# END SecuPress


# BEGIN SecuPress locations
define( 'RELOCATE', false );
define( 'WP_SITEURL', 'http://viaticum.local' );
define( 'WP_HOME', 'http://viaticum.local' );
# END SecuPress


# BEGIN SecuPress file_edit
define( 'DISALLOW_FILE_EDIT', true );
# END SecuPress


# BEGIN SecuPress dieondberror
define( 'DIEONDBERROR', false );
# END SecuPress


# BEGIN SecuPress unfiltered_uploads
define( 'ALLOW_UNFILTERED_UPLOADS', false );
# END SecuPress


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
// mysql://b6db1b3eafffdd:bd206ce7@us-cdbr-east-05.cleardb.net/heroku_bbfd78ffd291116?reconnect=true

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'CWas9NkILQKlhqzSkw7RJAFcXVHa/3qLU+0icZYjcJFuBYrmW3koyuCQ+64UrJW/ElrIf9j0VmHSyazPsDSyNw==');
define('SECURE_AUTH_KEY',  'N2z+OaUY1Cx7pvZT3ssHtOZkzixiWO5185cHPNaieAaMoE5etYXGFReQRWc2IbueeFzHdl5KYSWI49kG5qAvgg==');
define('LOGGED_IN_KEY',    'DxGEZoFH/h1WdyZwxNrXeN5VTstUUtmC5ERvblrRACoyT9+R1xBMzQw76KlXVWd9Raugq894GLxb3qWIjDu9Ew==');
define('NONCE_KEY',        '/hVWzEhhFKMN42WmvDtSuPsIeW192yuO7Z45edghvLEZXphF55KvNGylkqRx1AMc7fX9++GOPopuD1Qe08u4Eg==');
define('AUTH_SALT',        '8ERDP6s1j/llgA6JM2TjlxRwG6DueRp/AX5tbgjmXNMA4vXUtXI/cwtBFZQoYoA1W3VtCxtUD4eaRASbYk5Osg==');
define('SECURE_AUTH_SALT', 'AdCDP0IpLjXNT4D5d49CnO20ugHaguJlo8TAbUWBLgylhAuWABnKzDF9JgdmZVGcNLfFwbhw8hnOzhUkySc8yA==');
define('LOGGED_IN_SALT',   '0jmLxF1GXcCo6L8U6kVW7EV0k+NLE4v4L7JBJSyCK0yBwtpoCSsQHA3lCRZ1QAsuiBdHgGVscfvKMDwvAkueeA==');
define('NONCE_SALT',       'etkScaqxDUuxOn55NKFYtLLcH+aNFylzC5Zt0Fmm8x9z6nSClPOSZpBkUURyXI7zNkNrvVK+4PUCmL5DkYhFFg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cljczm_'; // Modified by SecuPress.
/** Commented by SecuPress. */ // $table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
