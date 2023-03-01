<?php get_header( 'shop' ); ?>
<?php global $product; ?>
<div class="hyperx-breadcumbs">
	<div class="bm-adaptive bm-margin bm">
		<?php do_action( 'woocommerce_before_main_content' ); ?>
	</div>
</div>
<div class="hyperx-promo-landing">
	<picture style="align-self: flex-start;" alt="Переферия HyperX">
		<source srcset="/wp-content/uploads/hyperx.webp" media="(max-width: 1200px)">
		<source srcset="/wp-content/uploads/hyper-x-banner-promo-page.webp" media="(min-width: 1200px)">
		<img src="/wp-content/uploads/hyper-x-banner-promo-page.webp">							
	</picture>
</div>
<div class="hyperx-promo-categories">
	<div class="bm-adaptive bm-margin bm">
		<div class="hyperx-promo-categories-container">
			<div class="hyperx-promo-categories-container-cat">
				<a href="#nayshniki" class="uncor hyperx-uncor">
					<img src="/wp-content/uploads/peref-1.svg">
					<p class="hyperx-promo-categories-container-cat-text">
						Наушники
					</p>				
				</a>
			</div>
			<div class="hyperx-promo-categories-container-cat">
				<a href="#klava" class="uncor hyperx-uncor">
					<img src="/wp-content/uploads/peref-2.svg">
					<p class="hyperx-promo-categories-container-cat-text">
						Клавиатуры
					</p>				
				</a>

			</div>
			<div class="hyperx-promo-categories-container-cat">
				<a href="#mishi" class="uncor hyperx-uncor">
					<img src="/wp-content/uploads/peref-3.svg">
					<p class="hyperx-promo-categories-container-cat-text">
						Мыши
					</p>				
				</a>
			</div>
			<div class="hyperx-promo-categories-container-cat">
				<a href="#micro" class="uncor hyperx-uncor">
					<img src="/wp-content/uploads/peref-4.svg">
					<p class="hyperx-promo-categories-container-cat-text">
						Микрофоны
					</p>				
				</a>
			</div>						
		</div>
	</div>
</div>
<div class="hyperx-promo-headset">
	<div class="bm-adaptive bm-margin bm">
		<div class="hyperx-promo-header-title">
			<h2 class="hyperx-promo-header-title_tit" id="nayshniki">
				Наушники
			</h2>
			<a href="/katalog/audio/" class="hyperx-promo-header-title_link">Смотреть все</a>
		</div>
		<div class="hyperx-promo-headset-container">
			<?php 
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		array(
		 'taxonomy' => 'product_cat',
		 'field' => 'slug',
		 'terms' => 'hyperx'
		)
		),
		// Параметры отображения выведенных товаров
		'posts_per_page' => 8, // количество выводимых товаров
		'post_type' => 'product', // тип товара
		'orderby' => 'title', // сортировка
	);			
			
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		global $product;
		$first_custom_class = 'post-' . $product->get_id();			
			
			?>
			
			<div <?php wc_product_class( 'hyperx-product', $product ); ?>>
				<div class="hyperx-cont">
				<a href="<?php echo $product->get_permalink(); ?>" class="woocommerce-product-href-link">
					<?php
						echo "<div class='mywoo-prod-img'> ";
						do_action( 'woocommerce_before_shop_loop_item_title' );
						echo "</div>";
					?>	
					<div class="mywoo-comp-info">
						<div class="mywoo-comp-info-1">
							<div class="mywoo-comp-info-1-1">
											<?php if ($product->get_sale_price() ){ ?>

											<p class="bm-single-product-price-buttons__price_sale"><?php echo wc_price( $product->get_sale_price() * 1.00 ); ?></p>
											<p class="bm-single-product-price-buttons__price__text">								
												<?php echo wc_price( $product->get_regular_price() * 1.00 ); ?>
											</p>	
											<span class="bm-single-product-price-buttons__price__text-sale">
													<?php 
														echo ((round(($product->get_sale_price()*100)/$product->get_regular_price())));										
													?>
													%
											</span>	
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .mywoo-comp-info-1-1{
													display: flex;
													width: 100%;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price_sale{
													font-style: normal;
													font-weight: 600;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #FFFFFF;		
													margin-bottom: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-top: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text-sale{
													background: #793DF8;
													border-radius: 2px;
													padding: 2px 7px;
													font-style: normal;
													font-weight: bold;
													font-size: 15px;
													line-height: 110%;
													letter-spacing: 0.03em;
													color: #FFFFFF;
													margin-right: 20px;
												}
											</style>
											<?php }else{ ?>
											<p class="bm-single-product-price-buttons__price__text">
												<?php echo wc_price( $product->get_price() * 1.00 ); ?>
											</p>
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-bottom: 0;
												}							
											</style>
											<?php } ?>
							</div>

						</div>		
					</div>	
					<h2 class="hyperx-product-title">
						<?php echo $product->get_name(); ?>
					</h2>
					<div class="mywoo-comp-info-2">
						<div class="mywoo-comp-info-1-2">
							<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
						</div>
					</div>					
				</a>
				</div>
			</div>
			
		<?php endwhile; ?>	
		</div>
	</div>
</div>

<div class="hyperx-promo-headset">
	<div class="bm-adaptive bm-margin bm">
		<div class="hyperx-promo-header-title">
			<h2 class="hyperx-promo-header-title_tit" id="klava">
				Клавиатуры
			</h2>
			<a href="/katalog/klaviatury/" class="hyperx-promo-header-title_link">Смотреть все</a>
		</div>
		<div class="hyperx-promo-headset-container">
			<?php 
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		array(
		 'taxonomy' => 'product_cat',
		 'field' => 'slug',
		 'terms' => 'hyperx-klaviatury'
		)
		),
		// Параметры отображения выведенных товаров
		'posts_per_page' => 8, // количество выводимых товаров
		'post_type' => 'product', // тип товара
		'orderby' => 'title', // сортировка
	);			
			
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		global $product;
		$first_custom_class = 'post-' . $product->get_id();			
			
			?>
			
			<div <?php wc_product_class( 'hyperx-product', $product ); ?>>
				<div class="hyperx-cont">				
				<a href="<?php echo $product->get_permalink(); ?>" class="woocommerce-product-href-link">
					<?php
						echo "<div class='mywoo-prod-img'> ";
						do_action( 'woocommerce_before_shop_loop_item_title' );
						echo "</div>";
					?>	
					<div class="mywoo-comp-info">
						<div class="mywoo-comp-info-1">
							<div class="mywoo-comp-info-1-1">
											<?php if ($product->get_sale_price() ){ ?>

											<p class="bm-single-product-price-buttons__price_sale"><?php echo wc_price( $product->get_sale_price() * 1.00 ); ?></p>
											<p class="bm-single-product-price-buttons__price__text">								
												<?php echo wc_price( $product->get_regular_price() * 1.00 ); ?>
											</p>	
											<span class="bm-single-product-price-buttons__price__text-sale">
													<?php 
														echo ((round(($product->get_sale_price()*100)/$product->get_regular_price())));										
													?>
													%
											</span>	
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .mywoo-comp-info-1-1{
													display: flex;
													width: 100%;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price_sale{
													font-style: normal;
													font-weight: 600;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #FFFFFF;		
													margin-bottom: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-top: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text-sale{
													background: #793DF8;
													border-radius: 2px;
													padding: 2px 7px;
													font-style: normal;
													font-weight: bold;
													font-size: 15px;
													line-height: 110%;
													letter-spacing: 0.03em;
													color: #FFFFFF;
													margin-right: 20px;
												}
											</style>
											<?php }else{ ?>
											<p class="bm-single-product-price-buttons__price__text">
												<?php echo wc_price( $product->get_price() * 1.00 ); ?>
											</p>
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-bottom: 0;
												}							
											</style>
											<?php } ?>
							</div>

						</div>		
					</div>	
					<h2 class="hyperx-product-title">
						<?php echo $product->get_name(); ?>
					</h2>
					<div class="mywoo-comp-info-2">
						<div class="mywoo-comp-info-1-2">
							<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
						</div>
					</div>					
				</a>
				</div>
			</div>
			
		<?php endwhile; ?>	
		</div>
	</div>
</div>

<div class="hyperx-promo-headset">
	<div class="bm-adaptive bm-margin bm">
		<div class="hyperx-promo-header-title">
			<h2 class="hyperx-promo-header-title_tit" id="mishi">
				Мышки
			</h2>
			<a href="/katalog/myshki/" class="hyperx-promo-header-title_link">Смотреть все</a>
		</div>
		<div class="hyperx-promo-headset-container">
			<?php 
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		array(
		 'taxonomy' => 'product_cat',
		 'field' => 'slug',
		 'terms' => 'hyperx-myshki'
		)
		),
		// Параметры отображения выведенных товаров
		'posts_per_page' => 8, // количество выводимых товаров
		'post_type' => 'product', // тип товара
		'orderby' => 'title', // сортировка
	);			
			
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		global $product;
		$first_custom_class = 'post-' . $product->get_id();			
			
			?>
			
			<div <?php wc_product_class( 'hyperx-product', $product ); ?>>
				<div class="hyperx-cont">				
				<a href="<?php echo $product->get_permalink(); ?>" class="woocommerce-product-href-link">
					<?php
						echo "<div class='mywoo-prod-img'> ";
						do_action( 'woocommerce_before_shop_loop_item_title' );
						echo "</div>";
					?>	
					<div class="mywoo-comp-info">
						<div class="mywoo-comp-info-1">
							<div class="mywoo-comp-info-1-1">
											<?php if ($product->get_sale_price() ){ ?>

											<p class="bm-single-product-price-buttons__price_sale"><?php echo wc_price( $product->get_sale_price() * 1.00 ); ?></p>
											<p class="bm-single-product-price-buttons__price__text">								
												<?php echo wc_price( $product->get_regular_price() * 1.00 ); ?>
											</p>	
											<span class="bm-single-product-price-buttons__price__text-sale">
													<?php 
														echo ((round(($product->get_sale_price()*100)/$product->get_regular_price())));										
													?>
													%
											</span>	
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .mywoo-comp-info-1-1{
													display: flex;
													width: 100%;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price_sale{
													font-style: normal;
													font-weight: 600;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #FFFFFF;		
													margin-bottom: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-top: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text-sale{
													background: #793DF8;
													border-radius: 2px;
													padding: 2px 7px;
													font-style: normal;
													font-weight: bold;
													font-size: 15px;
													line-height: 110%;
													letter-spacing: 0.03em;
													color: #FFFFFF;
													margin-right: 20px;
												}
											</style>
											<?php }else{ ?>
											<p class="bm-single-product-price-buttons__price__text">
												<?php echo wc_price( $product->get_price() * 1.00 ); ?>
											</p>
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-bottom: 0;
												}							
											</style>
											<?php } ?>
							</div>

						</div>		
					</div>	
					<h2 class="hyperx-product-title">
						<?php echo $product->get_name(); ?>
					</h2>
					<div class="mywoo-comp-info-2">
						<div class="mywoo-comp-info-1-2">
							<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
						</div>
					</div>					
				</a>
				</div>
			</div>
			
		<?php endwhile; ?>	
		</div>
	</div>
</div>

<div class="hyperx-promo-headset">
	<div class="bm-adaptive bm-margin bm">
		<div class="hyperx-promo-header-title">
			<h2 class="hyperx-promo-header-title_tit" id="micro">
				Микрофоны
			</h2>
			<a href="/katalog/oborudovanie-dlya-strima/" class="hyperx-promo-header-title_link">Смотреть все</a>
		</div>
		<div class="hyperx-promo-headset-container">
			<?php 
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		array(
		 'taxonomy' => 'product_cat',
		 'field' => 'slug',
		 'terms' => 'hyperx-oborudovanie-dlya-strima'
		)
		),
		// Параметры отображения выведенных товаров
		'posts_per_page' => 8, // количество выводимых товаров
		'post_type' => 'product', // тип товара
		'orderby' => 'title', // сортировка
	);			
			
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		global $product;
		$first_custom_class = 'post-' . $product->get_id();			
			
			?>
			
			<div <?php wc_product_class( 'hyperx-product', $product ); ?>>
				<div class="hyperx-cont">				
				<a href="<?php echo $product->get_permalink(); ?>" class="woocommerce-product-href-link">
					<?php
						echo "<div class='mywoo-prod-img'> ";
						do_action( 'woocommerce_before_shop_loop_item_title' );
						echo "</div>";
					?>	
					<div class="mywoo-comp-info">
						<div class="mywoo-comp-info-1">
							<div class="mywoo-comp-info-1-1">
											<?php if ($product->get_sale_price() ){ ?>

											<p class="bm-single-product-price-buttons__price_sale"><?php echo wc_price( $product->get_sale_price() * 1.00 ); ?></p>
											<p class="bm-single-product-price-buttons__price__text">								
												<?php echo wc_price( $product->get_regular_price() * 1.00 ); ?>
											</p>	
											<span class="bm-single-product-price-buttons__price__text-sale">
													<?php 
														echo ((round(($product->get_sale_price()*100)/$product->get_regular_price())));										
													?>
													%
											</span>	
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .mywoo-comp-info-1-1{
													display: flex;
													width: 100%;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price_sale{
													font-style: normal;
													font-weight: 600;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #FFFFFF;		
													margin-bottom: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-top: 0;
													margin-right: 20px;
												}
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text-sale{
													background: #793DF8;
													border-radius: 2px;
													padding: 2px 7px;
													font-style: normal;
													font-weight: bold;
													font-size: 15px;
													line-height: 110%;
													letter-spacing: 0.03em;
													color: #FFFFFF;
													margin-right: 20px;
												}
											</style>
											<?php }else{ ?>
											<p class="bm-single-product-price-buttons__price__text">
												<?php echo wc_price( $product->get_price() * 1.00 ); ?>
											</p>
											<style>
												.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
													font-style: normal;
													font-weight: 500;
													font-size: 24px;
													line-height: 130%;
													letter-spacing: 0.03em;
													color: #F7F7F7;
													margin-bottom: 0;
												}							
											</style>
											<?php } ?>
							</div>

						</div>		
					</div>	
					<h2 class="hyperx-product-title">
						<?php echo $product->get_name(); ?>
					</h2>
					<div class="mywoo-comp-info-2">
						<div class="mywoo-comp-info-1-2">
							<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
						</div>
					</div>					
				</a>
				</div>
			</div>
			
		<?php endwhile; ?>	
		</div>
	</div>
</div>


<style>
	#page{
		background: #111;
	}
	.hyperx-promo-landing{
		background: #000;
		text-align: center;
	}
	@media screen and (max-width: 576px){
		.hyperx-promo-categories-container{
			white-space: nowrap;
			overflow-x: scroll;
			flex-wrap: nowrap;
			justify-content: flex-start !important;			
		}
		.hyperx-promo-categories-container-cat{
			flex-basis: 25%;
		}
		.hyperx-uncor img{display: none;}
		.hyperx-promo-headset{
			margin: 30px 0 !important;
		}
		.hyperx-product{flex-basis: 100% !important; margin: 20px 0;}
		.hyperx-cont{margin: 0; padding: 0 !important;}
		.mywoo-comp-info-2{display: none !important;}
		.hyperx-promo-header-title_tit{font-size: 24px !important;}
		.hyperx-promo-header-title_link{font-size: 14px !important;}
	}
	@media screen and (min-width: 576px) and (max-width: 992px){
		.hyperx-promo-categories-container{
			white-space: nowrap;
			overflow-x: scroll;
			flex-wrap: nowrap;
			justify-content: flex-start !important;			
		}
		.hyperx-promo-categories-container-cat{
			flex-basis: 25%;
		}
		.hyperx-uncor img{display: none;}
		.hyperx-promo-headset{
			margin: 30px 0 !important;
		}
		.hyperx-product{flex-basis: 50% !important; margin: 20px 0;}
		.mywoo-comp-info-2{display: none !important;}
		.hyperx-promo-header-title_tit{font-size: 24px !important;}
		.hyperx-promo-header-title_link{font-size: 14px !important;}
	}	
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.hyperx-promo-categories-container-cat{justify-content: center;}
		.hyperx-promo-categories-container{
			white-space: nowrap;
			overflow-x: scroll;
			flex-wrap: nowrap;
			justify-content: flex-start !important;			
		}
		.hyperx-promo-categories-container-cat{
			flex-basis: 25%;
		}
		.hyperx-promo-headset{
			margin: 30px 0 !important;
		}
		.hyperx-product{flex-basis: 50% !important; margin: 20px 0;}
		.mywoo-comp-info-2{display: none !important;}
		.hyperx-promo-header-title_tit{font-size: 28px !important;}
		.hyperx-promo-header-title_link{font-size: 18px !important;}
	}	
	.hyperx-uncor{
		display: flex;
	}
	.hyperx-uncor:hover{
		text-decoration: none;
	}
	.mywoo-comp-info-1-2{
		flex-basis: 100%;
	}
	.mywoo-comp-info-1-2 .button{
		background: #E31611;
		border-radius: 3px;
		padding: 11px 32px 13px 32px;
		width: auto;
		line-height: 130%;
		font-size: 14px;
	}
	.mywoo-comp-info-2{
		margin-top: 25px;
		opacity: 0;
		visibility: hidden;
		transition: .55s opacity, .55s visibility;
	}
	.hyperx-product:hover .mywoo-comp-info-2{
		opacity: 1;
		visibility: visible;
	}
	.hyperx-promo-headset{
		margin: 80px 0;
	}
	.hyperx-promo-header-title{
		display: flex;
		margin-bottom: 20px;
		align-items: flex-end;
	}
	.hyperx-promo-header-title_link{
		font-style: normal;
		font-weight: 500;
		font-size: 17px;
		line-height: 130%;
		color: #E31611;		
	}
	.hyperx-promo-header-title_link:hover{
		text-decoration: none;
		color: #f5201a;
	}
	.hyperx-promo-header-title_tit{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 1;
		color: #E9E9E9;		
		margin: 0;
		margin-right: 20px;
	}
	.hyperx-product-title{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 130%;
		color: #CACACA;		
		margin: 0;
		margin-top: 12px;
	}
	.mywoo-prod-img{max-height: 250px;padding: 0;margin-bottom: 15px;}
	.mywoo-prod-img img{
		max-height: 245px;
	}
	.woocommerce-product-href-link{
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		height: 100%;		
	}
	.hyperx-cont{
		padding: 25px 40px;
		border: 1px solid transparent;
		transition: .3s;	
		height: 100%;
		margin: 0 15px;
	}
	.hyperx-cont:hover{
		transition: .3s;
		background: #1d1d1d;
		border: 1px solid #1d1d1d;
		box-sizing: border-box;
		border-radius: 5px;			
	}

	.hyperx-product{
		flex-basis: 25%;		
	}
	.hyperx-promo-headset-container{
		display: flex;
		flex-wrap: wrap;
	}
	.hyperx-promo-categories{
		margin: 35px 0 50px 0;
	}
	.hyperx-promo-categories-container{
		display: flex;
		justify-content: center;
	}
	.hyperx-promo-categories-container-cat{
		display: flex;
		align-items: center;
		padding: 24px 32px;
		background: #1C1C1C;
		border: 1px solid #292929;
		box-sizing: border-box;
		border-radius: 5px;
		margin: 0 10px;
		transition: .3s;
		cursor: pointer;
	}
	.hyperx-promo-categories-container-cat:hover{
		border: 1px solid #E31611;
		transition: .3s;
	}
	.hyperx-promo-categories-container-cat img{
		margin-right: 15px;
		max-height: 24px;
	}
	.hyperx-promo-categories-container-cat-text{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 130%;
		color: #E9E9E9;		
		margin: 0;
	}
</style>
<?php get_footer( 'shop' ); ?>