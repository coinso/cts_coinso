<?php

/**
 * Fired during plugin activation
 *
 * @link       http://coinso.com/project/ido-barnea
 * @since      1.0.0
 *
 * @package    Cts_coinso
 * @subpackage Cts_coinso/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Cts_coinso
 * @subpackage Cts_coinso/includes
 * @author     Ido Barnea <ido@coinso.com>
 */
class Cts_coinso_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-cts_coinso-admin.php';
        Cts_coinso_Admin::register_testimonials_post_types();

        flush_rewrite_rules();
	}

}
