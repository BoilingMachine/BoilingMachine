<?php get_header( 'shop' ); ?>
<link rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/css/page-computers.css">
<div class="mywoo-computers-section">
	<div class="bm-adaptive bm-margin bm">
		<?php do_action( 'woocommerce_before_main_content' ); ?>
		<!--
		<div class="computers-in-stock">
			<h1 class="woocommerce-products-header__title page-title mywoo-page-title">ПК в наличии</h1>
			<div class="computers-in-stock-container">
				<div class="mywoo-landing-comp mywoo-landing-page-computers-container">
								<?php 
					/*
									$args = array(									
											'tax_query' => array(
											array(
											 'taxonomy' => 'product_cat',
											 'field' => 'slug',
											 'terms' => 'pk-v-nalichii'
											)
										),
										// Параметры отображения выведенных товаров
										'posts_per_page' => -1, // количество выводимых товаров
										'post_type' => 'product', // тип товара
										'orderby' => 'title', // сортировка
									);							
								?>
								<?php 
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();
									global $product;	
									$product_id = $product->get_id();
								?>
								<?php wc_get_template_part( 'content', 'productcom' ); ?>

								<?php 
									endwhile;
					*/
								?>		
				</div>				
			</div>
		</div>
		-->
		
		
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="woocommerce-products-header__title page-title mywoo-page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>
		<div class="mywoo-computers-tabs">	  
		  <ul class="nav nav-tabs">
		    <li class="nav-item"> 
		      <a class="nav-link active mywoo-nav-link" href="/kompyutery/">Все модели</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link mywoo-nav-link" href="/podobrat-kompyuter/">Подобрать</a>
		    </li>

		  </ul>
		</div>
		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div id="home" class="tab-pane active">
				<div class="mywoo-landong-computers-page">
					
					<div class="mywoo-landong-computers-page-category">
						<?php $nycomputer = wc_get_product(10735); ?>
						<?php
							$image_id  = $nycomputer->get_image_id(); 
							$image_url = wp_get_attachment_image_url( $image_id, 'full' );					
						?>
						<div class="mywoo-subcatedories-img">
							<?php if(get_field('igra_v_podarok', $nycomputer->get_id()) ){ ?>
								<p class="mywoo-comp-category-sale">
									Акция
								</p>
							
							<?php } ?>							
							<a href="<?php echo $nycomputer->get_permalink() ?>">
								<?php
								echo '<img alt="" src="'.$image_url.'" />';	
								?>
							</a>						
						</div>
						<div class="mywoo-subcatedories-title">
							<h3 class="bm-peref-subcategories-link__title">
								<a href="<?php echo $nycomputer->get_permalink(); ?>">
									<?php echo $nycomputer->name; ?>
								</a>
							</h3>										
						</div>
						<div class="mywoo-subcatedories-desc">
							<p class="mywoo-subcatedories-desc__text">89 990р</p>                     <!-- Frost -->
						</div>						
					</div>
					
<?php 
	$args = array(
		'taxonomy' => 'product_cat',
		'parent' => '61',
		'include' => '64,454,458,229,425,233,65,437,405,435',								 
	);	
					
	$product_categories = get_terms($args);
					
	foreach ($product_categories as $product_category){
		$thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
		$image = wp_get_attachment_url($thumbnail_id); ?>
					<div class="mywoo-landong-computers-page-category">
						<div class="mywoo-subcatedories-img">
							<?php if(get_field('skidka', 'category_'.$product_category->term_id) ){ ?>
								<p class="mywoo-comp-category-sale">
									Скидка
								</p>
							
							<?php } ?>							
							<a href="<?php echo get_term_link($product_category) ?>">
								<?php
								echo '<img alt="" src="'.$image.'" />';	
								?>
							</a>						
						</div>
						<div class="mywoo-subcatedories-title">
							<h3 class="bm-peref-subcategories-link__title">
								<a href="<?php echo get_term_link($product_category) ?>">
									<?php echo $product_category->name; ?>
								</a>
							</h3>										
						</div>
						<div class="mywoo-subcatedories-desc">
							<p class="mywoo-subcatedories-desc__text"><?php echo $product_category->description; ?></p>
						</div>						
					</div>
		
	<?php } ?>				
				</div>
<!--			
<div class="collabs-container collabs" id="BoilingFeat">
	<h2 class="mywoo-computers-collab-title">
		Boiling Feat
	</h2>
								
				<div class="mywoo-landong-computers-page">

<?php 
/*
	$args = array(
		'taxonomy' => 'product_cat',
		'parent' => '468',
		'include' => '609',								 
	);	
					
	$product_categories = get_terms($args);
					
	foreach ($product_categories as $product_category){
		$thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
		$image = wp_get_attachment_url($thumbnail_id); ?>
					<div class="mywoo-landong-computers-page-category">
							<?php if(get_field('dlya_inflyuensera_tolko_dlya_nego', 'category_'.$product_category->term_id) ){ ?>
								<img class="infl-banner" src="<?php the_field('dlya_inflyuensera_tolko_dlya_nego', 'category_'.$product_category->term_id); ?>">						
							<?php } ?>							
						<div class="mywoo-subcatedories-img">					
							<a href="<?php echo get_term_link($product_category) ?>">
								<?php
								echo '<img alt="" src="'.$image.'" />';	
								?>
							</a>						
						</div>
						<div class="mywoo-subcatedories-title">
							<h3 class="bm-peref-subcategories-link__title">
								<a href="<?php echo get_term_link($product_category) ?>">
									<?php echo $product_category->name; ?>
								</a>
							</h3>										
						</div>
						<div class="mywoo-subcatedories-desc">
							<p class="mywoo-subcatedories-desc__text"><?php echo $product_category->description; ?></p>
						</div>						
					</div>
		
	<?php } */?>				
				</div>				
</div>				
-->			
		      	
		    </div>
		    <div id="menu1" class="tab-pane fade"><br>
		      <?php get_template_part( 'templates/podobrat' ); ?>
		    </div>
		    
		  </div>
		

			

	</div>
</div>	

<style>
	.computers-in-stock-container .woocommerce-variation-price{display: none !important;}
	.computers-in-stock-container .quantity{display: none !important;}	
	.computers-in-stock{margin-bottom: 40px;}
	.collabs-container{
		border-top: 1px solid #323232;
		padding-top: 35px;
	}
	.mywoo-computers-collab-title{
		text-align: center;
		font-size: 44px;
		color: #fff;
		font-weight: bold;
	}
	.collabs .mywoo-subcatedories-img{
		height: 450px;
		background: url(/wp-content/uploads/svet.png) !important;
		background-position: center !important;
		background-repeat: no-repeat !important;
		background-size: contain !important;
	}
	.collabs .mywoo-subcatedories-img img{
		max-height: 440px;
	}
	.mywoo-landong-computers-page-category{
		position: relative;
	}
	.infl-banner{
		position: absolute;
		left: 5%;
		top: 5%;
		max-width: 170px;
	}
	
</style>
<?php get_footer( 'shop' ); ?>