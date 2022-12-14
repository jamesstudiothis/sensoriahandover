	<section id="fabulous-world-of-five" data-colour="gold">
		
		<h2 data-reveal="chars"><?php echo get_field('section5_headline') ?></h2>
		
		<div class="wrap_01">
		
			<div class="w-1/2 first">
				
				<?php if( have_rows('section5_column_1') ): ?>
					<?php while( have_rows('section5_column_1') ): the_row(); ?>
						
						<p data-reveal="lines02"><?php echo get_sub_field('body') ?></p>
					
					<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
			
			<div class="w-1/2 last">
				
				<?php if( have_rows('section5_column_2') ): ?>
					<?php while( have_rows('section5_column_2') ): the_row(); ?>
						
						<p data-reveal="lines02"><?php echo get_sub_field('body') ?></p>
						
						<?php if( get_sub_field('link') ): ?>

							<a target="<?php echo esc_attr( get_sub_field('link')['target'] ); ?>" href="<?php echo esc_url( get_sub_field('link')['url'] ); ?>">
							
								<button data-reveal="obj"><?php echo esc_html( get_sub_field('link')['title'] ); ?></button>

							</a>

						<?php endif; ?>
					
					<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		
		</div>
		
		<div class="wrap_02">
			
			<div class="w-1/2 first">
				
				<h4 data-reveal="lines02">amenities</h4>
				
				<ul data-reveal="lines02">
					
					<?php if( have_rows('section5_column_1') ): ?>
						<?php while( have_rows('section5_column_1') ): the_row(); ?>
							
							<ul>
								
								<?php if( have_rows('amenities') ): ?>
									<?php while( have_rows('amenities') ) : the_row(); ?>
										
										<li><?php echo get_sub_field('item') ?></li>
										
									<?php endwhile; ?>
								<?php endif; ?>
								
							</ul>
						
						<?php endwhile; ?>
					<?php endif; ?>
					
				</ul>
				
			</div>
			
			<div class="w-1/2 last">
				
				<h4 data-reveal="lines02">restaurants & entertainment</h4>
				
				<ul data-reveal="lines02">
					
					<?php if( have_rows('section5_column_2') ): ?>
						<?php while( have_rows('section5_column_2') ): the_row(); ?>
							
							<ul>
								
								<?php if( have_rows('amenities') ): ?>
									<?php while( have_rows('amenities') ) : the_row(); ?>
										
										<li><?php echo get_sub_field('item') ?></li>
										
									<?php endwhile; ?>
								<?php endif; ?>
								
							</ul>
						
						<?php endwhile; ?>
					<?php endif; ?>
					
				</ul>
				
			</div>
			
		</div>
		
	</section>

</div>