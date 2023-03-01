<li data-selection="accessories" class="builder-step first-load step-config">
	<section class="cd-step-content">
		<header>
			<h1>Accessories</h1>
			<span class="steps-indicator">Step <b>3</b> of 4</span>
		</header>
		
		<div class="choose-products">
			<div class="bm-adaptive bm-margin bm">
				<ul class="accessories-list options-list">

					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Видеокарта</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 718 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Видеокарта" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Процессор</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 719 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Процессор" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Материнская плата</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 720 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Материнская плата" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Оперативная память</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 721 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Оперативная память" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">SSD M.2</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 722 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="SSD M.2" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>		
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">SSD M.2</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 722 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="SSD M.2 (2)" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>		
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Блок питания</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 723 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Блок питания" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>	
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Охлаждение</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 724 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Охлаждение"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>		
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Операционная система</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 725 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Операционная система" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>	
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Офисный пакет</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 726 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Офисный пакет" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>		
					<div class="options-container">
						<div class="options-container-header">
							<p class="options-container-header__title">Комплект периферии</p>															
						</div>
						<div class="options-container-body">
							<?php
								$posts = get_posts( [
									'numberposts' => -1,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 727 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );															
							?>
							
							<?php foreach ($posts as $key=>$post): ?>
								<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<div class="js-option" data-price="<?php echo $price; ?>">
									<div class="option-thumbnail">
										<?php the_post_thumbnail('full'); ?>
									</div>
									<div class="option-content">
										<div class="check"></div>	
										<p class="option-content__title" data-product-name="Комплект периферии" data-product-value="<?php the_title(); ?>"><?php the_title(); ?></p>																				
									</div>
								</div>
							
							<?php endforeach; ?>
						</div>
					</div>						
				</ul>				
			</div>
		</div>
		

	</section>
</li>