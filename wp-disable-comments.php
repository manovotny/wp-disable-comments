<?php
/**
 * Plugin Name: WP Disable Comments
 * Plugin URI: https://github.com/manovotny/wp-disable-comments
 * Description: Automatically disables comments on all posts and pages.
 * Version: 1.0.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-disable-comments
 * GitHub Plugin URI: https://github.com/manovotny/wp-disable-comments
 */

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';