<?php
add_filter('acf/settings/row_index_offset', '__return_zero');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Sensoria',
		'menu_title'	=> 'Sensoria',
		'menu_slug' 	=> 'sensoria',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
	));

}
