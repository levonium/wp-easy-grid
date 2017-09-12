<?php

/**
 * WP EASY GRID
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           wp_easy_grid
 *
 * @wordpress-plugin
 * Plugin Name:       WP Easy Grid
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       An simple CSS Grid plugin for WP to easily make grid layouts.
 * Version:           1.0.0
 * Author:            Levon Avetyan
 * Author URI:        https://drim.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp_easy_grid
 * Domain Path:       /languages
 */


/*
* plugin-name -> wp-easy-grid
* plugin_name -> wp_easy_grid
* Plugin_Name -> WP_Easy_Grid
*/


 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
 	die;
 }

 /**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-easy-grid-activator.php
 */
function activate_wp_easy_grid() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-easy-grid-activator.php';
	WP_Easy_Grid_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-easy-grid-deactivator.php
 */
function deactivate_wp_easy_grid() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-easy-grid-deactivator.php';
	WP_Easy_Grid_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_easy_grid' );
register_deactivation_hook( __FILE__, 'deactivate_wp_easy_grid' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-easy-grid.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_easy_grid() {

	$plugin = new WP_Easy_Grid();
	$plugin->run();

}
run_wp_easy_grid();
