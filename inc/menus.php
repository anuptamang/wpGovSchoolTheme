<?php
// Theme menus

register_nav_menus( array(
  'primary' => __( 'Primary Navigation', 'wordpress' ),
  'top' => __( 'Top Navigation', 'wordpress' ),
) );

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );