<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://coinso.com/project/ido-barnea
 * @since      1.0.0
 *
 * @package    Cts_coinso
 * @subpackage Cts_coinso/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cts_coinso
 * @subpackage Cts_coinso/admin
 * @author     Ido Barnea <ido@coinso.com>
 */
class Cts_coinso_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cts_coinso_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cts_coinso_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cts_coinso-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cts_coinso_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cts_coinso_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cts_coinso-admin.js', array( 'jquery' ), $this->version, false );

	}

    /**
     * Creates a new custom post type
     *
     * @since 	1.0.0
     * @access 	public
     * @uses 	register_post_type()
     */

    public static function register_testimonials_post_types() {
        $singular ='Testimonial';
        $plural = 'Testimonials';
        $labels = array(
            'name' => _x( $plural, 'textdomain' ),
            'singular_name' => _x( $singular, 'textdomain' ),
            'add_new' => _x( 'Add New', 'textdomain' ),
            'add_new_item' => _x( 'Add New '. $singular, 'textdomain' ),
            'edit_item' => _x( 'Edit '. $singular, 'textdomain' ),
            'new_item' => _x( 'New '. $singular, 'textdomain' ),
            'view_item' => _x( 'View '. $singular, 'textdomain' ),
            'search_items' => _x( 'Search '. $plural, 'textdomain' ),
            'not_found' => _x( 'No '.$plural.' found', 'textdomain' ),
            'not_found_in_trash' => _x( 'No '.$plural.' found in Trash', 'textdomain' ),
            'parent_item_colon' => _x( 'Parent '. $singular, 'textdomain' ),
            'menu_name' => _x( $plural, 'textdomain' ),
        );

        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'supports' => array( 'title','thumbnail'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'has_archive' => false,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => array( 'slug' => strtolower($plural)),
            'capability_type' => 'post',
            'menu_position' => 22,
            'menu_icon' =>'dashicons-thumbs-up'
        );

        register_post_type( $plural, $args );

    }
}
