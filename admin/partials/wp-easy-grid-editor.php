<?php

/**
 * Register WP Editor Button.
 *
 * @since    1.0.0
 */

 add_action('media_buttons', 'add_wp_easy_grid_media_button', 20);

 function add_wp_easy_grid_media_button() {
    echo '<a href="#" id="wp-easy-grid-button" class="button"><span class="dashicons dashicons-screenoptions"></span>' . __( "Easy Grid", "wp_easy_grid" ) . '</a>';
  }


  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box' );
  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box_columns' );
  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box_cells' );
  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box_grid' );

  function wp_grid_add_select_box(){
    echo '<div class="wp_grid_select_box">';
    echo '<div class="select_wp_grid wp_grid_show_columns">' . __( "Columns", "wp_easy_grid" ) . '</div>
          <div class="select_wp_grid wp_grid_show_cells">' . __( "Cells", "wp_easy_grid" ) . '</div>
          <div class="select_wp_grid wp_grid_show_grid">' . __( "Grid", "wp_easy_grid" ) . '</div>';
    echo '</div>';
  }

  function wp_grid_add_select_box_columns(){
    echo '<div class="wp_grid_select_box_inner wp_grid_select_columns">';
    echo '<div class="select_wp_grid shortcode_add" grid-type="col" data-grid="two_halves">' . __( "1/2 + 1/2", "wp_easy_grid" ) . '</div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="col" data-grid="three_thirds">' . __( "1/3 + 1/3 + 1/3", "wp_easy_grid" ) . '</div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="col" data-grid="four_fourths">' . __( "1/4 + 1/4 + 1/4 + 1/4", "wp_easy_grid" ) . '</div>';
    echo '</div>';
  }

  function wp_grid_add_select_box_cells(){
    echo '<div class="wp_grid_select_box_inner wp_grid_select_cells">';
    for ( $i = 1; $i <= 12; $i++ ) {
      echo '<div class="select_wp_grid shortcode_add" grid-type="cell" data-grid="'.$i.'">Cell '. $i .' / 12 </div>';
    }
    echo '</div>';
  }

  function wp_grid_add_select_box_grid(){

  }
