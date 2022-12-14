<?php
	
/*
	
@package Sensoria
	
	==========================================
	Index
	==========================================
*/

?>

<?php get_header(); ?>

<article data-router-view="default">
	
	<main id="homepage">
		
		<?php get_template_part( 'template-parts/pages/homepage/landing', 'landing' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/live-extraordinarily', 'live-extraordinarily' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/sophisticated-waterfront-luxury', 'sophisticated-waterfront-luxury' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/image-ticker-01', 'image-ticker-01' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/lifes-a-beach', 'lifes-a-beach' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/a-true-work-of-art', 'a-true-work-of-art' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/image-ticker-02', 'image-ticker-02' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/fabulous-world-of-five', 'fabulous-world-of-five' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/image-gallery', 'image-gallery' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/contact-form', 'contact-form' ); ?>

	</main>
	
<?php get_footer(); ?>