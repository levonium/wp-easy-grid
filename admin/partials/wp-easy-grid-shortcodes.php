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

  return '<div class="easy-grid'. $bordered . $stripped . $grid_class .'"'. $grid_id .'>' . $content . '</div>';
}
add_shortcode( 'easy_grid', 'main_grid_shortcode' );
