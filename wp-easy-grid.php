<?php

/**
 * WP EASY GRID
 *
 * @link              https://drim.io/wp-easy-grid/
 * @since             1.0.0
 * @package           wp_easy_grid
 *
 * @wordpress-plugin
 * Plugin Name:       WP Easy Grid
 * Plugin URI:        https://drim.io/wp-easy-grid/
 * Description:       An simple CSS Grid plugin for WP to easily make grid layouts.
 * Version:           1.0.0
 * Author:            Levon Avetyan
 * Author URI:        https://drim.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp_easy_grid
 * Domain Path:       /languages
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
 * @since    1.0.0
 */
function run_wp_easy_grid() {

	$plugin = new WP_Easy_Grid();
	$plugin->run();

}
run_wp_easy_grid();
