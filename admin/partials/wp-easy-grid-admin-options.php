<?php
/**
 *  WP EASY GRID Admin Options Page Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

?> <script> console.log("hello"); </script> <?php

/**
 * Register a custom menu page
 */
  function wp_grid_register_options_menu_page() {
      add_menu_page(
  			__( 'WP Easy Grid', 'wp_easy_grid' ),
  			__( 'WP Easy Grid', 'wp_easy_grid' ),
  			'manage_options',
  			'wp_easy_grid_options',
  			'wp_easy_grid_ui',
  			'dashicons-screenoptions',
  			99
      );
  }
  add_action( 'admin_menu', 'wp_grid_register_options_menu_page' );

  function wp_easy_grid_ui(){ ?>

    <div class="wrap">
    	<h1 class="wp-heading">
    		<?php esc_html_e( 'WP Easy Grid', 'wp_easy_grid' ); ?>
    	</h1>

    	<div class="wp_grid_settings">
    		<img src="<?php echo plugin_dir_url( __FILE__ ); ?>../img/wp-easy-grid-examples.png" style="width: 100%;" />
    </div>

  <?php }
