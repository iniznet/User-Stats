<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       Users Stats
 * Description:       Monitor user daily performance.
 * Version:           1.0.0
 * Author:            niznet
 * Author URI:        https://niznet.my.id/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       users-stats
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'USERS_STATS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-users-stats-activator.php
 */
function activate_users_stats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-users-stats-activator.php';
	Users_Stats_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-users-stats-deactivator.php
 */
function deactivate_users_stats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-users-stats-deactivator.php';
	Users_Stats_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_users_stats' );
register_deactivation_hook( __FILE__, 'deactivate_users_stats' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-users-stats.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_users_stats() {

	$plugin = new Users_Stats();
	$plugin->run();

}
run_users_stats();
