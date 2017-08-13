<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://wilnaudesign.com
 * @since      1.0.0
 *
 * @package    Wilnau_Support
 * @subpackage Wilnau_Support/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wilnau_Support
 * @subpackage Wilnau_Support/includes
 * @author     Ian Butler <ianbutler82@yahoo.co.uk>
 */
class Wilnau_Support_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wilnau-support',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
