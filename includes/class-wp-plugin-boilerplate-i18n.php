<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://sajuahmed.epizy.com
 * @since      1.0.0
 *
 * @package    Wp_Plugin_Boilerplate
 * @subpackage Wp_Plugin_Boilerplate/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Plugin_Boilerplate
 * @subpackage Wp_Plugin_Boilerplate/includes
 * @author     Riyadh ahmed <riathislam44@gmail.com>
 */
class Wp_Plugin_Boilerplate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-plugin-boilerplate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
