<section id="contact-form" data-colour="black">
	
	<div class="wrap_01">
	
		<h2 data-reveal="chars"><?php echo get_field('contactform_headline') ?></h2>
		
		<p class="title-l" data-reveal="lines02"><?php echo get_field('contactform_header') ?></p>
		
		<p data-reveal="lines02"><?php echo get_field('contactform_body') ?></p>
		
		<?php gravity_form( 1, false, false, false, '', false ); ?>
		
		<div class="social flex">
			
			<?php if( get_field('facebook_url', 'option') ): ?>
			
				<a target="_blank" href="<?php echo get_field('facebook_url', 'option') ?>">
					
					<?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/img/facebook.svg' ); ?>
					
				</a>
			
			<?php endif; ?>
			
			<?php if( get_field('instagram_url', 'option') ): ?>
			
				<a target="_blank" href="<?php echo get_field('instagram_url', 'option') ?>">
					
					<?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/img/instagram.svg' ); ?>
					
				</a>
			
			<?php endif; ?>
			
		</div>
	
	</div>
	
	<div class="background-image" data-reveal="obj" data-delay="1">
		
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/water-splash.png" alt="water-splash">
		
	</div>
	
</section>