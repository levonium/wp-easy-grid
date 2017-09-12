<?php

/**
 * Register Grid Shortcodes.
 *
 * @since    1.0.0
 */
function main_grid_shortcode( $atts, $content = null ) {
  $a = shortcode_atts( array(
        'bordered' => 'no',
        'stripped' => 'no',
        'class'    => '',
        'id'       => ''
    ), $atts );

  $bordered   = ( strtolower( $a['bordered'] ) === 'yes' ) ? ' bordered-grid' : '';
  $stripped   = ( strtolower( $a['stripped'] ) === 'yes' ) ? ' alternate-grid' : '';
  $grid_class = ( $a['class'] ) ? ' ' . $a['class'] : '';
  $grid_id    = ( $a['id'] ) ? ' id="'. $a['id'] . '"' : '';

  return '<div class="easy-grid'. $bordered . $stripped . $grid_class .'"'. $grid_id .'>' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'easy_grid', 'main_grid_shortcode' );


function grid_cell_1_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-1">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-1', 'grid_cell_1_shortcode' );


function grid_cell_2_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-2">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-2', 'grid_cell_2_shortcode' );


function grid_cell_3_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-3">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-3', 'grid_cell_3_shortcode' );


function grid_cell_4_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-4">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-4', 'grid_cell_4_shortcode' );


function grid_cell_5_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-5">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-5', 'grid_cell_5_shortcode' );


function grid_cell_6_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-6">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-6', 'grid_cell_6_shortcode' );

function grid_cell_7_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-7">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-7', 'grid_cell_7_shortcode' );


function grid_cell_8_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-8">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-8', 'grid_cell_8_shortcode' );


function grid_cell_9_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-9">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-9', 'grid_cell_9_shortcode' );


function grid_cell_10_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-10">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-10', 'grid_cell_10_shortcode' );


function grid_cell_11_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-11">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-11', 'grid_cell_11_shortcode' );


function grid_cell_12_shortcode( $atts, $content = null ) {

  return '<div class="easy-grid-cell cells-12">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'cells-12', 'grid_cell_12_shortcode' );
