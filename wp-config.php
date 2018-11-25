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
define('DB_NAME', 'chatex');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/J`wC>nnk@:(t%%NPy|r$JLYEYi]X<YhLLUwJ)m#?`A&DL>y01U=5#S(3dmS-YyA');
define('SECURE_AUTH_KEY',  'fG^/ErW-;{o9{_$i([qHQNxQcqo^j{h|(PNU(ljt!QU$Kw&3=,iya049(?MuGI!0');
define('LOGGED_IN_KEY',    'uz1BmwV=tD_oY J?xhtTr =4wGh^*t0u?.*/jPrY&[7Od6?@u)/b%hK^F7kuXs7#');
define('NONCE_KEY',        '!C?Y{b([nkjJ.)6uABw6M/VrUJj|B;Dc^1aDbzo(Q-]&=(n[shG@AMc%]r10H7Cg');
define('AUTH_SALT',        '`y$q7nY7O!hNKJ~gOz7,jPo,cq,XS]T:pa)8heE&SY1R^IGCc8o?J_VOQ<.jh0ah');
define('SECURE_AUTH_SALT', 'O#QuCVuxlW)OI@UU|xc{;Lu?&5-Vh;d#]Wn<Vv{QR@D=PjiA()e8 cK1leK7lE<0');
define('LOGGED_IN_SALT',   'i<&A+c`WDPsr)L3@A=HJ9l|YarX~{@o:wAgI&We6r`t(|Jj1hm$-t8&g>u ;4E r');
define('NONCE_SALT',       'el4y)%66bsQkJK2A5C+`}pdyyxR[@x!Hd0&e|)_b@ufHz6RIW}dppjIEa&5JT&T`');

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
