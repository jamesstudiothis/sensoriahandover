<section id="image-ticker-02" data-colour="gold">
	
	<div class="slides-container">
		
		<div class="slides-inner">
			
			<?php while( have_rows('gallery_2') ): the_row(); ?>
					
				<?php if( get_row_index() % 2 == 0 ){ ?>
					
					<div class="slide a">
					
						<div class="image image-surrounds relative" data-caption>
							
							<span>
								
								<span class="circle"></span>
								
								<?php echo esc_attr(get_field('gallery_2')[get_row_index()]['caption']); ?>
							
							</span>
							
							<img src="<?php echo esc_url(get_field('gallery_2')[get_row_index()]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_2')[get_row_index()]['alt']); ?>" />
							
							<div class="blue h-1/2 absolute top-0"></div>
							<div class="gold h-1/2 absolute bottom-0"></div>
							
						</div>
					
					</div>
				
				<?php } else { ?>
					
					<div class="slide b">
					
						<div class="image image-surrounds relative" data-caption>
							
							<span>
								
								<span class="circle"></span>
								
								<?php echo esc_attr(get_field('gallery_2')[get_row_index()]['caption']); ?>
							
							</span>
							
							<img src="<?php echo esc_url(get_field('gallery_2')[get_row_index()]['url']); ?>" alt="<?php echo esc_attr(get_field('gallery_2')[get_row_index()]['alt']); ?>" />
							
							<div class="blue h-1/2 absolute top-0"></div>
							<div class="gold h-1/2 absolute bottom-0"></div>
							
						</div>
					
					</div>
					
				<?php } ?>
						
			<?php endwhile; ?>
			
		</div>
		
	</div>
	  
	<div class="background">
		
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/beach.png" alt="">
		
	</div>
	
</section>