<?php
// Theme css & js

function base_scripts_styles() {
	$in_footer = true;

	// Loads JavaScript file with functionality specific.
	wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', ['jquery'], '', $in_footer );
	wp_enqueue_script( 'base-script', get_template_directory_uri() . '/js/jquery.main.js', ['jquery'], '', $in_footer );
	$path_info = array(
		'base' => get_template_directory_uri() . '/',
		'css' => 'css/',
		'js' => 'js/',
		'swf' => 'swf/',
	);
	wp_localize_script( 'base-script', 'pathInfo', $path_info );

	// Add bootstrap styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array() );

	// Loads our main stylesheet.
	wp_enqueue_style( 'base-style', get_stylesheet_uri(), array() );
	
}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );