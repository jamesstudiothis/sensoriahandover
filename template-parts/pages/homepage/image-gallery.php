<section id="image-gallery">
	
	<div class="mouse-over" data-colour="gold"></div>
	
	<div class="main">
		
		<div class="image_01">
			
			<img src="<?php echo esc_url(get_field('gallery_3')[0]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_3')[0]['alt']); ?>" />
			
		</div>
		
		<div class="image_02">
			
			<img src="<?php echo esc_url(get_field('gallery_3')[1]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_3')[1]['alt']); ?>" />
			
		</div>
		
		<div class="image_03">
			
			<span>
				
				<span class="circle"></span>
				
				<?php echo esc_attr(get_field('gallery_3')[2]['caption']); ?>
			
			</span>
			
			<img src="<?php echo esc_url(get_field('gallery_3')[2]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_3')[2]['alt']); ?>" />
			
		</div>
		
		<div class="image_04">
			
			<span>
				
				<span class="circle"></span>
				
				<?php echo esc_attr(get_field('gallery_3')[3]['caption']); ?>
			
			</span>
			
			<img src="<?php echo esc_url(get_field('gallery_3')[3]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_3')[3]['alt']); ?>" />
			
		</div>
		
		<div class="image_05">
			
			<span>
				
				<span class="circle"></span>
				
				<?php echo esc_attr(get_field('gallery_3')[4]['caption']); ?>
			
			</span>
			
			<img src="<?php echo esc_url(get_field('gallery_3')[4]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_3')[4]['alt']); ?>" />
			
		</div>
		
		<div class="image_06">
			
			<span>
				
				<span class="circle"></span>
				
				<?php echo esc_attr(get_field('gallery_3')[5]['caption']); ?>
			
			</span>
			
			<img src="<?php echo esc_url(get_field('gallery_3')[5]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_3')[5]['alt']); ?>" />
			
		</div>
		
	</div>
	
	<div class="background"></div>
	
	<div class="background-image" data-colour="black" data-reveal="obj" data-delay="1" data-duration="2">
		
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/water-splash.png" alt="water-splash" data-mouse_move>
		
	</div>
	
</section>