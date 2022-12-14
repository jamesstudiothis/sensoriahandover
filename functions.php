<?php
	
/*
	==========================================
	Include Scripts
	==========================================
*/

function sensoria_script_enqueue() {	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/dist/scripts/bundle.css', array(), '1.0.0', 'all');
		
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/dist/scripts/bundle.js', array(), '1.0.0', true );
	wp_localize_script( 'customjs', 'WPURL', array( 'siteurl' => get_template_directory_uri() ));
}
	
add_action( 'wp_enqueue_scripts', 'sensoria_script_enqueue');

/*
	==========================================
	Call Admin
	==========================================
*/
require( get_template_directory() . '/inc/settings.php' );
