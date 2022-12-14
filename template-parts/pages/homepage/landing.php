<section id="landing"  data-colour="white" class="pointer-events-none">
	
	<div class="gradient top"></div>
	
	<div class="main">
		
		<h1>sensoria</h1>
		
	</div>
		
	<div class="background">
		
		<?php if ( get_field('is_video') == 'no' ) { ?>
			
			<img src="<?php echo esc_url(get_field('header_image')['url']); ?>" alt="<?php echo esc_attr(get_field('header_image')['alt']); ?>"/>
			
		<?php } elseif ( get_field('is_video') == 'yes' ) { ?>
			
			<video autoplay muted loop playsinline>
				
				<source src="<?php echo get_field('video_link') ?>" type="video/mp4">
				
			</video>
			
		<?php } ?>
		
	</div>
	
	<div class="buttons bottom">
		
		<?php if( get_field('cta_1') ): ?>
		
			<a target="<?php echo esc_attr( get_field('cta_1')['target'] ); ?>" href="<?php echo esc_url( get_field('cta_1')['url'] ); ?>">
			
				<button data-reveal="obj" data-delay="0.75"><?php echo esc_html( get_field('cta_1')['title'] ); ?></button>
		
			</a>
		
		<?php endif; ?>
		
		<?php if( get_field('cta_2') ): ?>
			
			<?php $link = get_field('cta_2')['url'];
			$link = str_replace(array('http://', 'https://'), '', $link); ?>
			
			<button data-link="<?php echo $link; ?>" data-reveal="obj" data-delay="1"><?php echo esc_html( get_field('cta_2')['title'] ); ?></button>
		
		<?php endif; ?>

	</div>
	
	<div class="gradient bottom"></div>
	
</section>