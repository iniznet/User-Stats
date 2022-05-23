<?php
/**
 * Plugin Name: WP User Statistics
 * Version: 1.0.0
 * Plugin URI:
 * Description: WP User Statistics
 * Author: noogen
 * Author URI:
 * Requires at least: 5.6
 * Tested up to: 5.8.3
 * Requires PHP: 7.4
 *
 * Text Domain: wp_user_statistics
 * Domain Path: /languages/
 *
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

// don't call the file directly
if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
 */

require __DIR__ . '/vendor/autoload.php';

/**
 * Returns the main instance to prevent the need to use globals.
 */
$instance = \WPUserStatistics\Main::get_instance(__FILE__, '1.0.0');
$instance->run();

return $instance;
