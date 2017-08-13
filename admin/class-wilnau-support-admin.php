<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://wilnaudesign.com
 * @since      1.0.0
 *
 * @package    Wilnau_Support
 * @subpackage Wilnau_Support/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wilnau_Support
 * @subpackage Wilnau_Support/admin
 * @author     Ian Butler <ianbutler82@yahoo.co.uk>
 */
class Wilnau_Support_Admin {

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
		 * defined in Wilnau_Support_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wilnau_Support_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wilnau-support-admin.css', array(), $this->version, 'all' );

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
		 * defined in Wilnau_Support_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wilnau_Support_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wilnau-support-admin.js', array( 'jquery' ), $this->version, false );

	}

}
	define("wilnau_support", "wilnau_support");
	add_action('admin_menu', 'wilnau_support_menu');
 
        function wilnau_support_menu() {
            add_menu_page('wilnau_support', //page title
            'Wilnau Support', //menu title
            'manage_options', //capabilities
            'Wilnau Support', //menu slug
             wilnau_support, //function
             plugin_dir_url( __FILE__ ) . 'images/wilnau-icon.png' 
            );
    
            // returns the root directory path of particular plugin
            define('ROOTDIR', plugin_dir_path(__FILE__)); 
            require_once(ROOTDIR . 'wilnau-support-form.php');

        }
