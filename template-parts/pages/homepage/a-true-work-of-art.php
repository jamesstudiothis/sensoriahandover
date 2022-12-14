<div class="gradient_background">

	<section id="a-true-work-of-art" data-colour="gold">
		
		<div class="wrap_01">
		
			<h2 data-reveal="chars"><?php echo get_field('section4_headline') ?></h2>
			
			<div class="wrap_01">
				
				<span class="is-active" data-link>3 bedroom</span>
				
				<span data-link>4 bedroom</span>
				
				<span data-link>5 bedroom</span>
				
				<div class="marker">
					
					<span></span>
					
				</div>
				
			</div>
			
			<div class="wrap_02">
				
				<div class="content is-active">
				
					<div class="image--01 w-1/2" data-gallery>
						
						<img class="flex" src="<?php echo esc_url(get_field('section4_3bedroom_image')['image_display']['url']); ?>" alt="<?php echo esc_attr(get_field('section4_3bedroom_image')['image_display']['alt']); ?>"/>
						
						<img class="hidden" src="<?php echo esc_url(get_field('section4_3bedroom_image')['image_detail']['url']); ?>" alt="<?php echo esc_attr(get_field('section4_3bedroom_image')['image_detail']['alt']); ?>"/>
						
					</div>
					
					<div class="w-1/2">
						
						<?php if( have_rows('section4_3bedroom_text') ): ?>
							<?php while( have_rows('section4_3bedroom_text') ): the_row(); ?>
								
								<p class="heading" data-reveal="lines02"><?php echo get_sub_field('section4_header') ?></p>
								
								<p data-reveal="lines02"><?php echo get_sub_field('section4_body') ?></p>
								
								<ul data-reveal="lines02">
									
									<?php if( have_rows('section4_list') ): ?>
										<?php while( have_rows('section4_list') ) : the_row(); ?>
											
											<li><?php echo get_sub_field('section4_list_item') ?></li>
											
										<?php endwhile; ?>
									<?php endif; ?>
									
								</ul>
							
							<?php endwhile; ?>
						<?php endif; ?>
						
					</div>
				
				</div>
				
				<div class="content">
				
					<div class="image--02 w-1/2" data-gallery>
						
						<img class="flex" src="<?php echo esc_url(get_field('section4_4bedroom_image')['image_display']['url']); ?>" alt="<?php echo esc_attr(get_field('section4_4bedroom_image')['image_display']['alt']); ?>"/>
						
						<img class="hidden" src="<?php echo esc_url(get_field('section4_4bedroom_image')['image_detail']['url']); ?>" alt="<?php echo esc_attr(get_field('section4_4bedroom_image')['image_detail']['alt']); ?>"/>
						
					</div>
					
					<div class="w-1/2">
						
						<?php if( have_rows('section4_4bedroom_text') ): ?>
							<?php while( have_rows('section4_4bedroom_text') ): the_row(); ?>
								
								<p class="heading"><?php echo get_sub_field('section4_header') ?></p>
								
								<p><?php echo get_sub_field('section4_body') ?></p>
								
								<ul>
									
									<?php if( have_rows('section4_list') ): ?>
										<?php while( have_rows('section4_list') ) : the_row(); ?>
											
											<li><?php echo get_sub_field('section4_list_item') ?></li>
											
										<?php endwhile; ?>
									<?php endif; ?>
									
								</ul>
							
							<?php endwhile; ?>
						<?php endif; ?>
						
					</div>
				
				</div>
				
				<div class="content">
				
					<div class="image--03 w-1/2" data-gallery>
						
						<img class="flex" src="<?php echo esc_url(get_field('section4_5bedroom_image')['image_display']['url']); ?>" alt="<?php echo esc_attr(get_field('section4_5bedroom_image')['image_display']['alt']); ?>"/>
						
						<img class="hidden" src="<?php echo esc_url(get_field('section4_5bedroom_image')['image_detail']['url']); ?>" alt="<?php echo esc_attr(get_field('section4_5bedroom_image')['image_detail']['alt']); ?>"/>
						
					</div>
					
					<div class="w-1/2">
						
						<?php if( have_rows('section4_5bedroom_text') ): ?>
							<?php while( have_rows('section4_5bedroom_text') ): the_row(); ?>
								
								<p class="heading"><?php echo get_sub_field('section4_header') ?></p>
								
								<p><?php echo get_sub_field('section4_body') ?></p>
								
								<ul>
									
									<?php if( have_rows('section4_list') ): ?>
										<?php while( have_rows('section4_list') ) : the_row(); ?>
											
											<li><?php echo get_sub_field('section4_list_item') ?></li>
											
										<?php endwhile; ?>
									<?php endif; ?>
									
								</ul>
							
							<?php endwhile; ?>
						<?php endif; ?>
						
					</div>
				
				</div>
				
			</div>
		
		</div>
		
	</section>