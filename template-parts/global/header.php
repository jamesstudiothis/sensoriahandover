<header class="flex z-100 fixed top-0 pointer-events-none">
	
	<div class="logo">
		
		<?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/img/logo.svg' ); ?>
		
	</div>
	
	<div class="hamburger" data-reveal="obj" data-delay="0.5" data-link>
		
		<span></span>
		<span></span>
		<span></span>
		
	</div>
	
	<nav class="menu">
		
		<ul>
			
			<li data-link="live-extraordinarily">
				
				— live extraordinarily
				
				<span><?php echo get_field('live_extraordinarily', 'option')['sub_text'] ?></span>
			
			</li>
			
			<li data-link="lifes-a-beach">
				
				— life’ a beach
				<span><?php echo get_field('life’s_a_beach', 'option')['sub_text'] ?></span>
			
			</li>
			
			<li data-link="a-true-work-of-art">
				
				— a true work of art
				<span><?php echo get_field('a_true_work_of_art', 'option')['sub_text'] ?></span>
			
			</li>
			
			<li data-link="fabulous-world-of-five">
				
				— the world of five
				<span><?php echo get_field('the_world_of_five', 'option')['sub_text'] ?></span>
			
			</li>
			
			<li data-link="contact-form">
				
				— make an enquiry
				<span><?php echo get_field('make_an_enquiry', 'option')['sub_text'] ?></span>
			
			</li>
			
		</ul>
		
		<div class="image">
			
			<div class="image-surrounds h-full relative is-active">
				
				<img src="<?php echo get_field('live_extraordinarily', 'option')['image'] ?>">
				
				<div class="blue w-full h-1/2 absolute top-0"></div>
				<div class="gold w-full h-1/2 absolute bottom-0"></div>
				
			</div>
			
			<div class="image-surrounds h-full relative">
				
				<img src="<?php echo get_field('life’s_a_beach', 'option')['image'] ?>">
				
				<div class="blue w-full h-1/2 absolute top-0"></div>
				<div class="gold w-full h-1/2 absolute bottom-0"></div>
				
			</div>
			
			<div class="image-surrounds h-full relative">
				
				<img src="<?php echo get_field('a_true_work_of_art', 'option')['image'] ?>">
				
				<div class="blue w-full h-1/2 absolute top-0"></div>
				<div class="gold w-full h-1/2 absolute bottom-0"></div>
				
			</div>
			
			<div class="image-surrounds h-full relative">
				
				<img src="<?php echo get_field('the_world_of_five', 'option')['image'] ?>">
				
				<div class="blue w-full h-1/2 absolute top-0"></div>
				<div class="gold w-full h-1/2 absolute bottom-0"></div>
				
			</div>
			
			<div class="image-surrounds h-full relative">
				
				<img src="<?php echo get_field('make_an_enquiry', 'option')['image'] ?>">
				
				<div class="blue w-full h-1/2 absolute top-0"></div>
				<div class="gold w-full h-1/2 absolute bottom-0"></div>
				
			</div>
			
		</div>
		
	</nav>

</header>

<div class="buttons mobile bottom z-50 fixed">
	
	<?php if( get_field('cta_1') ): ?>
	
		<a target="_blank" href="https://wa.me/<?php echo get_field('whats_app', 'option') ?>/"><button  data-reveal="obj" data-delay="0.75"><?php echo esc_html( get_field('cta_1')['title'] ); ?></button></a>
	
	<?php endif; ?>
	
	<?php if( get_field('cta_2') ): ?>
	
		<?php $link = get_field('cta_2')['url'];
		$link = str_replace(array('http://', 'https://'), '', $link); ?>
		
		<button data-link="<?php echo $link; ?>" data-reveal="obj" data-delay="1"><?php echo esc_html( get_field('cta_2')['title'] ); ?></button>
	
	<?php endif; ?>
	
</div>