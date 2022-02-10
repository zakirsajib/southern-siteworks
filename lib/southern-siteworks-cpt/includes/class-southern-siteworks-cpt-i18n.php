<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://zsresume.netlify.app
 * @since      1.0.0
 *
 * @package    Southern_Siteworks_Cpt
 * @subpackage Southern_Siteworks_Cpt/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Southern_Siteworks_Cpt
 * @subpackage Southern_Siteworks_Cpt/includes
 * @author     Zakir Sajib <zakirsajib@gmail.com>
 */
class Southern_Siteworks_Cpt_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'southern-siteworks-cpt',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
