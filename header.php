<?php
	
/*
	This is the template for the header
	
	@package Sensoria	

*/

?>

<!doctype html>

<!--  This site was built by Studio This (www.studiothis.co.uk)  -->
<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title><?php bloginfo( 'name' ); wp_title('-'); ?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.png">
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part( 'template-parts/global/header', 'header' ); ?>

		<div id="smooth-wrapper">

			<div data-router-wrapper id="smooth-content">