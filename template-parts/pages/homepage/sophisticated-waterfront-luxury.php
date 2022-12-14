<section id="sophisticated-waterfront-luxury" data-colour="black">
	
	<div class="wrap_01">
	
		<div class="w-1/2" data-speed="0.95">
			
			<?php if( have_rows('section2_image') ): ?>
				<?php while( have_rows('section2_image') ): the_row(); ?>
			
				<?php if ( get_sub_field('is_video') == 'no' ) { ?>
					
					<img src="<?php echo esc_url(get_sub_field('image')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('image')['alt']); ?>"/>
					
				<?php } elseif ( get_sub_field('is_video') == 'yes' ) { ?>
					
					<video autoplay muted loop playsinline>
						
						<source src="<?php echo get_sub_field('video_link') ?>" type="video/mp4">
						
					</video>
					
				<?php } ?>
				
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		
		<div class="w-1/2">
			
			<?php if( have_rows('section2_text') ): ?>
				<?php while( have_rows('section2_text') ): the_row(); ?>
				
					<h3 data-reveal="chars"><?php echo get_sub_field('section2_headline') ?></h3>
					
					<p data-reveal="lines02"><?php echo get_sub_field('section2_header') ?></p>
					
					<ul data-reveal="lines02">
						
						<?php if( have_rows('section2_body') ): ?>
							<?php while( have_rows('section2_body') ) : the_row(); ?>
								
								<li><?php echo get_sub_field('section2_list_item') ?></li>
								
							<?php endwhile; ?>
						<?php endif; ?>
						
					</ul>
				
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
	
	</div>
	
	<div class="background"></div>
	
</section>