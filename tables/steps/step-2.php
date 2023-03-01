<li data-selection="colors" class="builder-step first-load ">
	<section class="cd-step-content">
		<header>
			<h1>Select Color</h1>
			<span class="steps-indicator">Step <b>2</b> of 4</span>
		</header>
		
		<ul class="cd-product-previews">
			<?php 

				$posts = get_posts( [
					'numberposts' => 3,
					'post_type'   => 'projects',
					'tax_query' => [
						[
							'taxonomy' => 'projectscategory',
							'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
							'terms'    => [ 646 ],
						]
					],
					'orderby'     => 'date',
					'order'       => 'ASC',
				] );										

				foreach ($posts as $key=>$post){ ?>
					<?php if( $key == 0 ){ ?>
						<li class="selected"><img src="<?php the_field('miniatyura_stola'); ?>" alt="Product Preview" class="product-preview"></li>
					<?php }else{ ?>		
						<li><img src="<?php the_field('miniatyura_stola'); ?>" alt="Product Preview" class="product-preview"></li>
					<?php } ?>
				<?php }	?>							
														
										
			
			
			
			
		</ul>

		<ul class="cd-product-customizer">
			<?php
				foreach ($posts as $key=>$post){ ?>
					<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
					<?php if( $key == 0 ){ ?>
						<li data-content="<?php the_title(); ?>" data-price="0" class="selected"><a href="#0"><?php echo the_post_thumbnail('full'); ?></a></li>
					<?php }else{ ?>		
						<li data-content="<?php the_title(); ?>" data-price="<?php echo $price; ?>"><a href="#0"><?php echo the_post_thumbnail('full'); ?></a></li>
					<?php } ?>
				<?php }	?>				
			
		</ul>
	</section>
</li>