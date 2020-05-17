<?php

// Default settings
include( get_template_directory() . '/inc/default.php' );

// Custom Post Types
include( get_template_directory() . '/inc/cpt.php' );

// Theme functions
include( get_template_directory() . '/inc/theme_functions.php' );

include( get_template_directory() . '/inc/acf.php' );

// Custom Menu Walker
include( get_template_directory() . '/inc/classes.php' );

// // Custom Widgets
include( get_template_directory() . '/inc/widgets.php' );

// // Theme sidebars
include( get_template_directory() . '/inc/sidebars.php' );

// Theme thumbnails
include( get_template_directory() . '/inc/thumbnails.php' );

// Theme menus
include( get_template_directory() . '/inc/menus.php' );

// Theme css & js
include( get_template_directory() . '/inc/scripts.php' );


// Activate WordPress Maintenance Mode
function wp_maintenance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        require_once('pages/template-maintenance.php');
        wp_die();
    }
}
add_action('get_header', 'wp_maintenance_mode');