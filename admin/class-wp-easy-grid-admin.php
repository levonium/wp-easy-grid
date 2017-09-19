<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WP_Easy_grid
 * @subpackage WP_Easy_grid/admin
 */
class WP_Easy_grid_Admin {

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

			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-easy-grid-admin.css', array(), $this->version, 'all' );

		}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
		public function enqueue_scripts() {

			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-easy-grid-admin.js', '', $this->version, true );

		}

	/**
	 * Register Grid Shorctodes
	 *
	 * @since 	1.0.0
	 */
	 	public function wp_grid_register_shortcodes() {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/wp-easy-grid-shortcodes.php';
		}

	/**
	 * Register WP Editor Button
	 *
	 * @since		1.0.0
	 */
		public function wp_grid_edidor_button() {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/wp-easy-grid-editor.php';
		}

	/**
	 * Register Admin options page
	 *
	 * @since		1.0.0
	 */
		public function wp_grid_admin_options_page() {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/wp-easy-grid-admin-options.php';
		}


	/**
	 * Plugin Settings Links
	 *
	 * @since 1.0.0
	 */
	 public function wp_grid_admin_settings_link() {
		 require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/wp-easy-grid-settings-link.php';
	 }

}
