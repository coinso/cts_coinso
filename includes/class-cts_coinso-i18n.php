<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://coinso.com/project/ido-barnea
 * @since      1.0.0
 *
 * @package    Cts_coinso
 * @subpackage Cts_coinso/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cts_coinso
 * @subpackage Cts_coinso/includes
 * @author     Ido Barnea <ido@coinso.com>
 */
class Cts_coinso_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cts_coinso',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
