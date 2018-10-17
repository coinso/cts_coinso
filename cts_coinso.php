<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://coinso.com/project/ido-barnea
 * @since             1.0.0
 * @package           Cts_coinso
 *
 * @wordpress-plugin
 * Plugin Name:       Coinso Testimonial Slider
 * Plugin URI:        https://github.com/coinso
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ido Barnea
 * Author URI:        http://coinso.com/project/ido-barnea
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cts_coinso
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Used for referring to the plugin file or basename
if ( ! defined( 'CTS_FILE' ) ) {
    define( 'CTS_FILE', plugin_basename( __FILE__ ) );
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cts_coinso-activator.php
 */
function activate_cts_coinso() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cts_coinso-activator.php';
	Cts_coinso_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cts_coinso-deactivator.php
 */
function deactivate_cts_coinso() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cts_coinso-deactivator.php';
	Cts_coinso_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cts_coinso' );
register_deactivation_hook( __FILE__, 'deactivate_cts_coinso' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cts_coinso.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cts_coinso() {

	$plugin = new Cts_coinso();
	$plugin->run();

}
run_cts_coinso();
