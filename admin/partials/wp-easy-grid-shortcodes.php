<?php

/**
 * Register Grid Shortcodes.
 *
 * @since    1.0.0
 */
 
 /*
  * Main Grid Shrtcode
  */
  function main_grid_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
          'class'    => '',
          'id'       => ''
      ), $atts );

    $grid_class = ( $a['class'] ) ? ' ' . $a['class'] : '';
    $grid_id    = ( $a['id'] ) ? ' id="'. $a['id'] . '"' : '';

    return '<div class="easy-grid '. $grid_class .'"'. $grid_id .'>' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'easy_grid', 'main_grid_shortcode' );

  /*
  * Grid Cells Shortcodes
  */

  function grid_cell_1_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_1">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_1', 'grid_cell_1_shortcode' );


  function grid_cell_2_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_2">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_2', 'grid_cell_2_shortcode' );


  function grid_cell_3_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_3">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_3', 'grid_cell_3_shortcode' );


  function grid_cell_4_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_4">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_4', 'grid_cell_4_shortcode' );


  function grid_cell_5_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_5">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_5', 'grid_cell_5_shortcode' );


  function grid_cell_6_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_6">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_6', 'grid_cell_6_shortcode' );

  function grid_cell_7_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_7">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_7', 'grid_cell_7_shortcode' );


  function grid_cell_8_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_8">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_8', 'grid_cell_8_shortcode' );


  function grid_cell_9_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_9">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_9', 'grid_cell_9_shortcode' );


  function grid_cell_10_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_10">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_10', 'grid_cell_10_shortcode' );


  function grid_cell_11_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_11">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_11', 'grid_cell_11_shortcode' );


  function grid_cell_12_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell cells_12">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'cells_12', 'grid_cell_12_shortcode' );


  /*
  * HALF, THIRD, FOURTH & SIXTH Grid Shortcodes
  */
  function grid_half_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell half_grid">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'half_grid', 'grid_half_shortcode' );

  function grid_third_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell third_grid">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'third_grid', 'grid_third_shortcode' );

  function grid_fourth_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell fourth_grid">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'fourth_grid', 'grid_fourth_shortcode' );

  function grid_sixth_shortcode( $atts, $content = null ) {

    return '<div class="easy-grid-cell sixth_grid">' . do_shortcode( $content ) . '</div>';
  }
  add_shortcode( 'sixth_grid', 'grid_sixth_shortcode' );
