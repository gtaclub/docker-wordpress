<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://rosaan.com/
 * @since      1.0.0
 *
 * @package    Solar_Edge_Api
 * @subpackage Solar_Edge_Api/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Solar_Edge_Api
 * @subpackage Solar_Edge_Api/includes
 * @author     Rosaan <rosaan@blazesolutions.com.my>
 */
class Solar_Edge_Api_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'solar-edge-api',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
