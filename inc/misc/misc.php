<?php 
/*
	==========================================
	Disable WordPress emoji support
	==========================================
*/
function disable_wp_emojicons() {
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/*
	==========================================
	Allow SVG
	==========================================
*/
function allow_svg_upload($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

/*
	==========================================
	Remove JQuery Migrate
	==========================================
*/

function remove_jquery_migrate( $scripts ) {
	
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
			
		$script = $scripts->registered['jquery'];
		
		if ( $script->deps ) { 
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

/*
	==========================================
	Disable WordPress Admin Bar for all users
	==========================================
*/
add_filter( 'show_admin_bar', '__return_false' );

/*
	==========================================
	Reorder Admin Menu
	==========================================
*/
add_filter('custom_menu_order', function() { return true; });
add_filter('menu_order', 'my_new_admin_menu_order');

function my_new_admin_menu_order( $menu_order ) {
  $new_positions = array(
    'index.php' => 1,  // Dashboard
    'edit.php' => 8,  // Posts
    'upload.php' => 9,  // Media
    'edit.php?post_type=page' => 1,  // Pages
    'edit-comments.php' => 5,  // Comments
    'separator-last' => 20, // Last separator
  );
  function move_element(&$array, $a, $b) {
    $out = array_splice($array, $a, 1);
    array_splice($array, $b, 0, $out);
  }
  foreach( $new_positions as $value => $new_index ) {
    if( $current_index = array_search( $value, $menu_order ) ) {
      move_element($menu_order, $current_index, $new_index);
    }
  }
  return $menu_order;
};