<?php
	
/*
	
@package Sensoria
	
	==========================================
	Login
	==========================================
*/

add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo()
{
    wp_enqueue_style( 'login-custom-style', get_stylesheet_directory_uri(). '/inc/login/css/login-style.css', array('login') );
}

function url(){
	return get_site_url(); 
}
add_filter('login_headerurl', 'url');

/*
	==========================================
	Remove front-end admin bar margin
	==========================================
*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

/*
	==========================================
	Custom Footer
	==========================================
*/
function custom_admin_footer() {
	echo '<strong>' . get_bloginfo( 'name' ) . '</strong> — A website by <a href="https://studiothis.co.uk" target="_blank">Studio This</a>.';
}
add_filter( 'admin_footer_text', 'custom_admin_footer' );

/*
	==========================================
	Custom Logo
	==========================================
*/
function custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	background-image: url(' . get_bloginfo('stylesheet_directory') . '/dist/img/dashboard-logo.svg) !important;
	background-position: 0 0;
	color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: 0 0;
}
</style>
';
}
add_action('wp_before_admin_bar_render', 'custom_logo');