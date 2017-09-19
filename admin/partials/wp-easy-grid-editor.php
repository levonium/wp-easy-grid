<?php

/**
 * Register WP Editor Button.
 *
 * @since    1.0.0
 */

 add_action('media_buttons', 'add_wp_easy_grid_media_button', 20);

 function add_wp_easy_grid_media_button() {
    echo '<a href="#" id="wp-easy-grid-button" class="button"><span class="dashicons dashicons-screenoptions"></span>' . __( 'Easy Grid', 'wp_easy_grid' ) . '</a>';
  }


  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box' );
  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box_columns' );
  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box_cells' );
  add_action( 'admin_footer-post.php', 'wp_grid_add_select_box_grid' );

  function wp_grid_add_select_box(){
    echo '<div class="wp_grid_select_box"><div class="box_heading">' . __( 'WP EASY GRID', 'wp_easy_grid' ) . '</div>';
    echo '<div class="select_wp_grid wp_grid_show_columns"><h3>' . __( 'Columns', 'wp_easy_grid' ) . '</h3><p>' . __( 'Ready grid columns (grid and cells).', 'wp_easy_grid' )  .'</p></div>
          <div class="select_wp_grid wp_grid_show_cells"><h3>' . __( 'Cells', 'wp_easy_grid' ) . '</h3><p>'. __( 'Select a cell to insert into a grid.', 'wp_easy_grid' )  .'</p></div>
          <div class="select_wp_grid wp_grid_show_grid"><h3>' . __( 'Grid', 'wp_easy_grid' ) . '</h3><p>'. __( 'Insert only an empty grid.', 'wp_easy_grid' )  .'</p></div>';
    echo '</div>';
  }

  function wp_grid_add_select_box_columns(){
    echo '<div class="wp_grid_select_box_inner wp_grid_select_columns">';
    echo '<div class="select_wp_grid shortcode_add" grid-type="col" data-grid="two_halves">' . __( '1/2 + 1/2', 'wp_easy_grid' ) . '</div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="col" data-grid="three_thirds">' . __( '1/3 + 1/3 + 1/3', 'wp_easy_grid' ) . '</div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="col" data-grid="four_fourths">' . __( '1/4 + 1/4 + 1/4 + 1/4', 'wp_easy_grid' ) . '</div>';
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
    echo '<div class="wp_grid_select_box_inner wp_grid_select_grid">';
    echo '<div class="select_wp_grid shortcode_add" grid-type="grid" data-grid="default">' . __( 'Default Grid', 'wp_easy_grid' ) . '</div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="grid" data-grid="no-gap">' . __( 'No Gap between Grid Cells', 'wp_easy_grid' ) . '<br /><code> class="no-gap" </code></div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="grid" data-grid="big-gap">' . __( 'Big Gap between Grid Cells', 'wp_easy_grid' ) . '<br /><code> class="big-gap" </code></div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="grid" data-grid="bordered">' . __( 'Bordered Cells', 'wp_easy_grid' ) . '<br /><code> class="bordered" </code></div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="grid" data-grid="text-center">' . __( 'Cell Text Alignment: Center', 'wp_easy_grid' ) . '<br /><code> class="text-center" </code></div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="grid" data-grid="has_padding">' . __( 'Gris Cells with Padding', 'wp_easy_grid' ) . '<br /><code> class="has_padding" </code></div>';
    echo '<div class="select_wp_grid shortcode_add" grid-type="grid" data-grid="alternate">' . __( 'Alternating Cell Backgrounds', 'wp_easy_grid' ) . '<br /><code> class="alternate" </code></div>';
    echo '</div>';
  }
