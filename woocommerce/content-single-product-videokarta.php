<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

<?php 
	$attachment_ids = $product->get_gallery_image_ids();
	
?>
<div class="mywoo-product-container">
	<div class="mywoo-single-product-default-image">		
		<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
	</div>
	<div class="mywoo-single-product-content">
		<h1 class="product_title entry-title"><?php the_title(); ?></h1>
		<p class="mywoo-single-content"><?php echo $product->get_description(); ?></p>
		<div class="cart-line" ></div>
		<div class="mywoo-single-cart-price">
			<div class="mywoo-single-cart-price-price">
				<p class="mywoo-single-cart-price-price__text">Цена: <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></p>				
			</div>
			<div class="mywoo-single-cart-price-cont">
				<div class="mywoo-single-cart-price-cart mywoo-single-cart-price-cart-musingle">
					
					<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
				</div>
				<div class="mywoo-single-cart-price-1click">
					<?php echo do_shortcode('[viewBuyButton]'); ?>
				</div>
			</div>
		</div>
		<div class="cart-line"></div>
		<div class="mywoo-single-benefite">
			<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider style="width: 100%;">	
				<div class="uk-slider-items uk-child-width-1-2 uk-child-width-3@s uk-child-width-1-3@m fourth-slider-content" style="width: 100%;">		    
					<div class="mywoo-single-benefite-block uk-panel">
						<p class="mywoo-single-benefite-block__text mywoo-single-benefite-block__text-1">Персональный<br>саппорт 24/7</p>
					</div>
					<div class="mywoo-single-benefite-block uk-panel">
						<p class="mywoo-single-benefite-block__text mywoo-single-benefite-block__text-2">Протестируй<br>в демозоне</p>
					</div>
					<div class="mywoo-single-benefite-block uk-panel">
						<p class="mywoo-single-benefite-block__text mywoo-single-benefite-block__text-3">Быстрая<br>доставка</p>
					</div>	
				</div>		        			    
			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>										
		</div>
	</div>	
</div>
<div class="mywoo-single-product-charak">
	<div class="mywoo-single-product-charak-block">
		<div class="mywoo-single-product-charak-block-container">
			<div class="mywoo-comp-attr mywoo-comp-attr-single-attr">
				<div class="mywoo-comp-attr-titles">
					<p class="mywoo-comp-attr-title__titles">Технические характеристики</p>
				</div>
				<?php do_action( 'woocommerce_product_additional_information', $product ); ?>			
			</div>			
		</div>
		<div class="mywoo-single-product-charak-block-use">
			<div class="mywoo-single-product-charak-block-use-container">
				<h2 class="mywoo-single-product-charak-block-use-container__title">На этой видеокарте собрано:</h2>
				<div class="mywoo-single-product-charak-block-use-container-users">
					<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider style="width: 100%;">	
						<div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l uk-child-width-1-3@xl mywoo-slider-related" style="width: 100%;">						
							<?php
								$args = array(
								    'posts_per_page' => 6,
								    'product_cat' => 'kompyutery',
								    'post_type' => 'product',
									'tax_query'      => array( array(
									        'taxonomy'        => 'pa_videokarta',
									        'field'           => 'slug',
									        'terms'           =>  array( $product->get_attribute( 'videokarta' ) ),
									        'operator'        => 'IN',
									    ) ),						    
								    'orderby' => 'title',
								);
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) {
								    $the_query->the_post();
								    ?>
									<div <?php wc_product_class( '', $product ); ?>>
										<div class="mywoo-single-video-computer-obertka">
											<?php
											$link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
											do_action( 'woocommerce_before_shop_loop_item' );
											echo "<div class='mywoo-prod-img'> ";
											do_action( 'woocommerce_before_shop_loop_item_title' );
											echo "</div>";
											echo "<div class='mywoo-prod-title'>";
											do_action( 'woocommerce_shop_loop_item_title' );
											echo "</div>";
											echo "<div class='cart-line'></div>";?>
											<div class="mywoo-comp-info">
												<a href="<?php echo get_the_permalink(); ?>" class="mywoo-comp-info-video-komputer">Подробнее</a>
											</div>
											<div class="open-attributes">Открыть конфигурацию</div>
											<div class="mywoo-comp-attr">
												<div class="mywoo-comp-attr-cont">
													<img src="/wp-content/uploads/video-gray.svg" class="mywoo-comp-attr-cont__img">
													<p class="mywoo-comp-attr-cont__text">
														<span>Видеокарта</span>
														<?php the_field('videokarta'); ?>
													</p>
												</div>
												
												<div class="mywoo-comp-attr-cont">
													<img src="/wp-content/uploads/proc-gray.svg" class="mywoo-comp-attr-cont__img">
													<p class="mywoo-comp-attr-cont__text">
														<span>Процессор</span>
														<?php the_field('proczessor'); ?>
													</p>
												</div>	
												
												<div class="mywoo-comp-attr-cont">
													<img src="/wp-content/uploads/mat.svg" class="mywoo-comp-attr-cont__img">
													<p class="mywoo-comp-attr-cont__text">
														<span>Материнская плата</span>
														<?php the_field('materinskaya_plata'); ?>
													</p>
												</div>
												
												<div class="mywoo-comp-attr-cont">
													<img src="/wp-content/uploads/opera.svg" class="mywoo-comp-attr-cont__img">
													<p class="mywoo-comp-attr-cont__text">
														<span>Оперативная память</span>
														<?php the_field('operativnaya_pamyat'); ?>
													</p>
												</div>
												
												<div class="mywoo-comp-attr-cont">
													<img src="/wp-content/uploads/ssd-grey.svg" class="mywoo-comp-attr-cont__img">
													<p class="mywoo-comp-attr-cont__text">
														<span>SSD накопитель</span>
														<?php the_field('ssd_nakopitel'); ?>
													</p>
												</div>
												
												<div class="mywoo-comp-attr-cont">
													<img src="/wp-content/uploads/disk.svg" class="mywoo-comp-attr-cont__img">
													<p class="mywoo-comp-attr-cont__text">
														<span>Жесткий диск</span>
														<?php the_field('zhestkij_disk'); ?>
													</p>
												</div>	
												
												<div class="mywoo-comp-attr-cont">
													<img src="/wp-content/uploads/bp.svg" class="mywoo-comp-attr-cont__img">
													<p class="mywoo-comp-attr-cont__text">
														<span>Блок питания</span><br>
														<?php the_field('blok_pitaniya'); ?>
													</p>
												</div>										
											</div>
										</div>
									</div>						    
								   

								    <?php
								}
								wp_reset_postdata();					
							 ?>	
					 	</div>
					 </div>																																
				</div>
			</div>
		</div>				
	</div>

</div>


</div>
<div class="mywoo-related-products">
	<h2 class="mywoo-related-products__title">С этим товаром покупают</h2>
	<div class='cart-lines' style="margin-bottom: 60px;"></div>
	<div class="mywoo-product-related">
		<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider style="width: 100%;">	
			<div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l uk-child-width-1-4@xl mywoo-slider-related" style="width: 100%;">	
				<?php
					$args = array(
					    'posts_per_page' => 8,
					    'post_type' => 'product',
					    'orderby'        => 'rand',
					);
					$the_query = new WP_Query( $args );
					// The Loop
					while ( $the_query->have_posts() ) {
					    $the_query->the_post();

					    ?>
						<div <?php wc_product_class( '', $product ); ?>>
						<?php
							$link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
							do_action( 'woocommerce_before_shop_loop_item' );
							echo "<div class='mywoo-prod-img'> ";
							do_action( 'woocommerce_before_shop_loop_item_title' );
							echo "</div>";
							echo "<div class='mywoo-prod-title'>";
							do_action( 'woocommerce_shop_loop_item_title' );
							echo "</div>";
							echo "<div class='cart-line'></div>";?>
							<div class="mywoo-comp-info">
								<a href="<?php echo get_the_permalink(); ?>" class="mywoo-comp-info-video-komputer">Подробнее</a>
							</div>							
						</div>						    
					   

					    <?php
					}
					wp_reset_postdata();					
				 ?>	
		 	</div>
		 </div>	
	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
