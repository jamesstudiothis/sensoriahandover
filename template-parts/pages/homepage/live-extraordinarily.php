<section id="live-extraordinarily" data-colour="black">
	
	<div class="wrap_01">
	
		<h2 data-reveal="chars"><?php echo get_field('section1_headline') ?></h2>
		
		<div class="background-image" data-reveal="obj" data-delay="1" data-duration="2">
			
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/water-splash.png" alt="water-splash" data-mouse_move>
			
		</div>
		
		<p class="title-l" data-reveal="lines02"><?php echo get_field('section1_header') ?></p>
		
		<p data-reveal="lines02"><?php echo get_field('section1_body') ?></p>
	
	</div>
	
	<div class="wrap_02">
	
		<div class="image_01 image-surrounds relative" data-speed="1.05" data-caption>
			
			<span>
				
				<span class="circle"></span>
				
				<?php echo esc_attr(get_field('section1_image')['caption']); ?>
			
			</span>
			
			<img src="<?php echo esc_url(get_field('section1_image')['url']); ?>" alt="<?php echo esc_attr(get_field('section1_image')['alt']); ?>"/>
			
			<div class="blue w-full h-1/2 absolute top-0"></div>
			<div class="gold w-full h-1/2 absolute bottom-0"></div>
			
		</div>
		
		<div class="background"></div>
	
	</div>
	
</section>