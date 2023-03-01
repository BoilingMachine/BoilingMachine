<? require get_template_directory() . '/templates/catalog/section.php';
/*
<? get_header(); ?>
<?php $queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id; ?>

<?php 
	function retColor($coll){
		switch($coll){
				case 'Оранжевый': return '#FF9600';
				case 'Белый': return '#FFFFFF';
				case 'Желтый': return '#FFF613';
				case 'Зеленый': return '#1FC751';
				case 'Коричневый': return '#843333';
				case 'Красный': return '#F11F1F';
				case 'Розовый': return '#F302DB';
				case 'Серый': return '#D2D2D2';
				case 'Синий': return '#0058CE';
				case 'Фиолетовый': return '#8400EC';
				case 'Черный': return '#111111';
				
		}	

	}
?>
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs.css" media="all">
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs-third-category.css" media="all">
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs-second-category.css" media="all">
	<div class="bm-computer-landing_header">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-header">
				<div class="bm-computer-landing-header-breadcrumb">
					<?php woocommerce_breadcrumb( ); ?>					
				</div>
			</div>
			<div class="bm-computer-landing-header-mobile">				
					<?php woocommerce_breadcrumb( ); ?>											
			</div>
		</div>
	</div>

<div class="main-container-chairs">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-product-arvhive-container">
			<div class="bm-product-arvhive-container-sidebar">
				<div class="bm-product-arvhive-container-sidebar-container">
                    <?php require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/sidebar-archive.php'; ?>
					<?php // echo do_shortcode('[br_filters_group group_id=9177]'); ?>
				</div>				
			</div>
			<div class="bm-product-arvhive-container-main">
				<div class="bm-product-arvhive-container-main-container">
					<div class="main-chair-categories">						
						<div class="main-chair-categories-title-sub-sub">
							<h1 class="main-chair-categories-title__text">
								Игровая серия <?php echo $queried_object->name ?>
							</h1>
						</div>	
						<ul class="products columns-3">
                            <?php
                            global $wp_query;

                            $args = array(
                                'post_type' => 'product',
                                'post_status' => 'publish',
                                'product_cat' => $queried_object->slug,
                                'posts_per_page' => 12,
                                'paged' => get_query_var('paged') ?: 1,
                                'meta_key' => 'rejting_tovara_seriya_kresel',
                                'orderby' => 'meta_value_num',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    'relation' => 'AND',
                                    array( // исключаем из фильтрации товары, который скрыты из каталога
                                        'taxonomy' => 'product_visibility',
                                        'field'    => 'name',
                                        'terms'    => 'exclude-from-catalog',
                                        'operator' => 'NOT IN',
                                    ),
                                )
                            );

                            $query  = new WP_Query( $args );
                            if( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    global $product;
                                    require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/content-product-chairs.php';
                                }
                            }
                            ?>
						</ul>
                        <?php
                        if (  $wp_query->max_num_pages > 1 ):
                            echo '<div class="misha_loadmore">Показать еще 12</div>';
                        endif;
                        ?>
					</div>	

					<?php 
						$term_id  = get_queried_object_id();
						$taxonomy = 'product_cat';					
						// Get subcategories of the current category
						$terms    = get_terms([
							'taxonomy'    => $taxonomy,
							'hide_empty'  => false,
							'parent'      => $queried_object->parent,
							'exclude'     => $term_id
						]);					
						if ( count($terms) > 1 ): 
					?>
					<div class="main-chair-categories">
						<div class="main-chair-categories-title">
							<h2 class="main-chair-categories-title__text">
								<?php 
									$termm  = get_term_by( 'id', $queried_object->parent, 'product_cat');
									
								?>
								Серии игровых кресел <?php echo $termm->name; ?>
							</h2>
						</div>
						<div class="main-chair-categories-container pc">																	
							<?php 
								if ( is_product_category() ) {
									
									// Loop through product subcategories WP_Term Objects
									foreach ( $terms as $term ) {
										$term_link = get_term_link( $term, $taxonomy ); 
										$thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
										$image = wp_get_attachment_url($thumbnail_id); ?>													
																											
							
										<div class="bm-chairs-subcategories <?php echo $term->slug; ?>">
											<div class="bm-chairs-subcategories-block">
												<div class="bm-chairs-subcategories-block-img">
													<a href="<?php echo $term_link; ?>">
														<img src="<?php echo $image; ?>">
													</a>
												</div>
												<div class="bm-chairs-subcategories-block-content">
													<a href="<?php echo $term_link; ?>">
														<h2 class="bm-chairs-subcategories-block-content__title">
															<?php echo $term->name; ?>
														</h2>
														<p class="bm-chairs-subcategories-block-content__price">
															<?php $productCatMetaTitle = get_term_meta($term->term_id, 'wh_meta_title', true); ?>
															<?php echo  $productCatMetaTitle; ?>
														</p>
													</a>	
													<div class="bm-chairs-subcategories-block-content__attr">
														<div class="bm-chairs-subcategories-block-content__attr-height">
															<p class="bm-chairs-subcategories-block-content__attr__text height">
																<?php $productCatMetaHeight = get_term_meta($term->term_id, 'wh_meta_desc', true); ?>
																до <?php echo $productCatMetaHeight; ?>
															</p>
														</div>
														<div class="bm-chairs-subcategories-block-content__attr-wighth">
															<p class="bm-chairs-subcategories-block-content__attr__text wighth">
																<?php $productCatMetaWeight = get_term_meta($term->term_id, 'wh_meta_weight', true); ?>
																до <?php echo $productCatMetaWeight; ?>
															</p>															
														</div>
														<div class="bm-chairs-subcategories-block-content__attr-wighth">
															<p class="bm-chairs-subcategories-block-content__attr__text wighth">
																<?php $productCatMetaMaterial = get_term_meta($term->term_id, 'wh_meta_material', true); ?>
																<?php echo $productCatMetaMaterial; ?>
															</p>															
														</div>														
													</div>
												</div>
											</div>
										</div>
							
							
										
									<?php
									}

									
								}				
							?>			
						</div>		
					</div>						
					<?php endif; ?>
					
					
					<div class="cat-description">
						<?php 
							$post_object = get_field('prikreplenie_seo_zapisi', $taxonomy . '_' .$term_id);
							if($post_object != null){
								$post = $post_object;
								setup_postdata( $post ); 					
								$obzor = apply_filters('the_content', $post->post_content);	
								if ( $obzor != null ):	
						?>
								<div class="chair-review">
									<div class="tab-container-head" id="obzor_text">
										<h2 class="tab-container-head__title">
											<?php the_title(); ?>
										</h2>
									</div>
									<div class="chairs-content-obzor">
										<div class='text_read'>
											<?php echo $obzor; ?>
										</div>	
										<?php
											wp_reset_postdata();				
										?>					
									</div>
								</div>	
								<?php endif; ?>
								<? } ?>											
					</div>
					
				</div>			
			</div>
		</div>
	</div>
</div>
<script>
$('div[data-taxonomy="pa_czvet"]').find(".bapf_show_hide").text('Показать все цвета').attr('data-show','Показать все цвета').attr('data-hide','Скрыть цвета');
</script>
<style>
	.wc-pao-addon-container {display: none;}
	#product-addons-total{display: none;}
	.bm-chairs-product-price-amount .single_add_to_cart_button.button.alt.added{
		color: #EF2525;
		background: #fff;
		border: 1px solid #EF2525;
	}	
</style>

<?php 

function get_rating($rat){
	
	switch($rat){
		case "1.0":
			for($i = 0; $i < 1; $i++){
				echo "<img src='/wp-content/uploads/rating-star.svg'>";
			}
			break;
		case "2.0":
			for($i = 0; $i < 2; $i++){
				echo "<img src='/wp-content/uploads/rating-star.svg'>";
			}
			break;		
		case "3.0":
			for($i = 0; $i < 3; $i++){
				echo "<img src='/wp-content/uploads/rating-star.svg'>";
			}
			break;	
		case "4.0":
			for($i = 0; $i < 4; $i++){
				echo "<img src='/wp-content/uploads/rating-star.svg'>";
			}
			break;	
		case "5.0":
			for($i = 0; $i < 5; $i++){
				echo "<img src='/wp-content/uploads/rating-star.svg'>";
			}
			break;			
	}	
	
}

?>
<script src="/wp-content/themes/boiling_machine/woocommerce/chairs/js/ajax.js" type="text/javascript"></script>
<? get_footer(); ?>