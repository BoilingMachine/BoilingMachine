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

<div class="bm-adaptive bm-margin bm">
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php 
		$attachment_ids = $product->get_gallery_image_ids();

	?>
		<div class="mywoo-product-container">
			<div class="mywoo-single-product-default-image">		
				<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
			</div>
			<div class="mywoo-single-product-content">
				<h1 class="peref-title"><?php the_title(); ?></h1>
				<?php 
					//outofstock
					if ($product->get_stock_status() == "instock"){ 
						$stock = $product->get_stock_status();
						?>
						<p class="stock-status instock">В наличии</p>
						<style>
							.stock-status.instock{
								font-style: normal;
								font-weight: 500;
								font-size: 18px;
								line-height: 130%;
								color: #74C634;	
								margin: 0;
							}					
						</style>		

					<?php }	else{ ?>
						<p class="stock-status outstock">Нет в наличии</p>
						<style>
							.stock-status.outstock{
								font-style: normal;
								font-weight: 500;
								font-size: 18px;
								line-height: 130%;
								color: #fb1b1b;	
								margin: 0;
							}					
						</style>			
					<?php } ?>
				<div class="peref-line"></div>
				<div class="main-attributes">
					<?php
					if( have_rows('osnovnye_atributy_tovara') ):
						// перебираем данные
						while ( have_rows('osnovnye_atributy_tovara') ) : the_row(); ?>		
							<div class="main-attributes-attr">
								<div class="main-attributes-attr-block">
									<p class="main-attributes-attr-name">
										<?php the_sub_field('nazvanie_atributa'); ?>
									</p>
									<p class="main-attributes-attr-val">
										<?php the_sub_field('svojstvo'); ?>
									</p>								
								</div>

							</div>


					<?php endwhile;
					else :
					endif;
					?>	
					<a href="#charach" class="uncor main-attributes-link">Все характеристики</a>
				</div>				
				<div class="peref-line"></div>

				<div class="mywoo-single-cart-price">
					<div class="mywoo-single-cart-price-price">
						<p class="mywoo-single-cart-price-price__text"><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></p>								
					</div>
					<div class="mywoo-single-cart-price-cont">
						<div class="mywoo-single-cart-price-cart mywoo-single-cart-price-cart-musingle">
							<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );  ?>								
						</div>				        								
					</div>
				</div>	
				<?php get_price(); ?>
				<div class="peref-benefits">
					<div class="peref-benefits-container">
						<img src="/wp-content/uploads/delivery-box1.svg">
						<div class="peref-benefits-container-text">
							<p class="peref-benefits-container-text__title">Доставка по Москве и МО - 200р</p>
							<p class="peref-benefits-container-text__des">Сегодня</p>											
						</div>
					</div>
					<div class="peref-benefits-container">
						<img src="/wp-content/uploads/delivery-car1.svg">
						<div class="peref-benefits-container-text">
							<p class="peref-benefits-container-text__title">Доставка в регионы - 600р</p>
							<p class="peref-benefits-container-text__des">от 3 дней</p>											
						</div>
					</div>				
				</div>
			</div>	
		</div>
		<div class="peref-line"></div>
		<div class="peref-full-description">
			<h2 class="peref-full-description-title">
				Описание
			</h2>
			<p class="addReadMore showlesscontent peref-full-description-text">
				<?php echo $product->get_description(); ?>
			</p>
		</div>
		<div class="hyperx-benef">
			<div class="hyperx-benef-container">
				<div class="hyperx-benef-container-spisok">
					<h2 class="hyperx-benef__title">
						Преимущества <?php the_title(); ?>
					</h2>					
					<?php				
						// перебираем данные
						while ( have_rows('preimushhestva_tovara_hyperx') ) : the_row(); ?>		
							<div class="hyperx-benef-container-attr">
								<img class="hyperx-benef-container-attr-img" src="<?php the_sub_field('izobrazhenie_preimushhestva'); ?>">
								<p class="hyperx-benef-container-attr-val">
									<?php the_sub_field('nazvanie_preimushhestva'); ?>
								</p>
							</div>
					<?php endwhile;	?>						
				</div>
				<div class="hyperx-benef-container-img">
					<img src="<?php the_field('izobrazhenie_preimushhestva'); ?>">
				</div>
			</div>
		</div>		
		<div class="peref-main-set" id="charach">
			<h2 class="peref-main-set-title">
				Основные характеристики
			</h2>	
				<div class="main-settings">
				<?php				
					// перебираем данные
					while ( have_rows('osnovnye_harakteristiki_tovara') ) : the_row(); ?>		
						<div class="main-settings-attr">
							<p class="main-settings-name">
								<?php the_sub_field('nazvanie_harakteristiki'); ?>
							</p>
							<p class="main-settings-val">
								<?php the_sub_field('svojstvo_harakteristiki'); ?>
							</p>
						</div>


				<?php endwhile;	?>					
				</div>		
		</div>
		<div class="peref-subs">
			<h2 class="peref-subs-title">
				<?php the_title(); ?> используют лучшие
			</h2>
			<div class="peref-subs-container">
				<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">

					<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m">
						<li class="team-slider">
							<div class="team-slider-box">
								<img src="/wp-content/uploads/australis1.png">
							</div>
							<h2 class="team-slider-title">
								Astralis
							</h2>
						</li>
						<li class="team-slider">
							<div class="team-slider-box">
								<img src="/wp-content/uploads/liquid1.png">
							</div>
							<h2 class="team-slider-title">
								Team Liquid
							</h2>
						</li>
						<li class="team-slider">
							<div class="team-slider-box">
								<img src="/wp-content/uploads/big1.png">
							</div>
							<h2 class="team-slider-title">
								Big Team
							</h2>
						</li>				
					</ul>

					<a class="peref-comand-left peref-comand-angles uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="/wp-content/uploads/product-team-slider-left1.svg"></a>
					<a class="peref-comand-right peref-comand-angles uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"><img src="/wp-content/uploads/product-team-slider-right1.svg"></a>

				</div>			
			</div>	
		</div>
		<div class="sub-products">
			<h2 class="peref-subs-title">
				Похожие товары
			</h2>
			<div class="sub-products-container">
				<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">
					<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-grid">
						<?php
							$terms = get_the_terms( $post->cat_ID , 'product_cat' );				
							$needId =  $terms[count($terms) - 1]->term_id;
							?>

						<?php 
							$args = array(
								// Использование аргумента tax_query для установки параметров терминов таксономии
								'tax_query' => array(
								array(
								 'taxonomy' => 'product_cat',
								 'field' => 'id',
								 'terms' => $needId
								)
							),
							// Параметры отображения выведенных товаров
							'posts_per_page' => 10, // количество выводимых товаров
							'post_type' => 'product', // тип товара
							'orderby' => 'title', // сортировка
							);			
						?>	

						<?php
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						global $product;
						?>								
						<li>
							<div class="uk-panel sub-products-box">
								<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="sub-products-box-link">
									<div class="sub-products-image">
										<?php do_action( 'woocommerce_before_shop_loop_item_title' );?>
									</div>
									<div class="sub-products-content">
										<p class="sub-products-content-price">
											<?php echo $product->get_regular_price(); ?>р
										</p>
										<h2 class="sub-products-content-title">
											<?php echo $product->get_name(); ?>
										</h2>
									</div>
									<div class="mywoo-comp-info-2">
										<div class="mywoo-comp-info-1-2">
											<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
										</div>
									</div>									
								</a>
							</div>
						</li>					


						<?php endwhile; ?>
					</ul>
					<a class="peref-comand-left peref-comand-angles uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="/wp-content/uploads/product-team-slider-left1.svg"></a>
					<a class="peref-comand-right peref-comand-angles uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"><img src="/wp-content/uploads/product-team-slider-right1.svg"></a>				
				</div>
			</div>			
		</div>
	</div>
	<p class="bm-single-product-fps-container-blocks-help oferta">
		* Не является публичной офертой. Изображения товаров на фотографиях, представленных в каталоге на сайте, могут отличаться от оригиналов.
	</p>	
</div>

<div class="buy-product-mobile">
	<div class="mywoo-single-cart-price-price">
		<p class="mywoo-single-cart-price-price__text"><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></p>								
	</div>
	<div class="mywoo-single-cart-price-cont">
		<div class="mywoo-single-cart-price-cart mywoo-single-cart-price-cart-musingle">
			<?php 
				if ($stock == "instock"){ ?>
						
					<p class="mobile-cart-add">
						В корзину
					</p>
					<script>
						$(".mobile-cart-add").click(function(){
							$( ".single_add_to_cart_button.button.alt" ).trigger( "click" );
							$(this).css("background","#80b63b");
							$(this).text("Добавлено");
						});
					</script>			
			<?php }else{ ?>
				<p class="mobile-cart-add-outsctock">
					Нет в наличии
				</p>					
					
			<?	} ?>
											
		</div>				        								
	</div>
</div>


<style>
	.bm-single-product-fps-container-blocks-help{
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 160%;
		color: #CBCBCB;
		margin: 0;	
		text-align: center;
		margin-top: 20px;
	}
	.bm-single-product-fps-container-blocks-help.oferta{
		margin-top: 10px;
		margin-bottom: 30px;
	}	
	.mobile-cart-add-outsctock{
		font-size: 15px;
		color: #fff;
		margin: 0;
		background: #3f3f3f;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 100%;
		width: 100%;	
		font-weight: bold;		
	}
	.mobile-cart-add{
		font-size: 15px;
		color: #fff;
		margin: 0;
		background: #E31611;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 100%;
		width: 100%;	
		font-weight: bold;
	}
	.mywoo-comp-info-1-2{
		flex-basis: 100%;
	}
	.mywoo-comp-info-1-2 .button{
		background: #E31611 !important;
		border-radius: 3px !important;
		padding: 11px 32px 13px 32px !important;
		width: auto;
		line-height: 130% !important;
		font-size: 14px !important;
	}
	.mywoo-comp-info-2{
		margin-top: 25px;
		opacity: 0;
		visibility: hidden;
		transition: .55s opacity, .55s visibility;
	}
	.sub-products-box:hover .mywoo-comp-info-2{
		opacity: 1;
		visibility: visible;
	}	
	
	.hyperx-benef-container-spisok{
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}
	.hyperx-benef-container-attr-img{
		margin-right: 25px;
		max-width: 25px;
	}
	.hyperx-benef-container-attr{
		display: flex;
		align-items: center;
		margin-bottom: 30px;
	}
	.hyperx-benef-container-spisok, .hyperx-benef-container-img{
		flex-basis: 47%;
	}
	.hyperx-benef-container-img{
		background: url("/wp-content/uploads/ellipse-121.webp");
		background-position: center;
		background-repeat: no-repeat;
		text-align: center;
		background-size: contain;
	}
	.hyperx-benef-container{
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.hyperx-benef-container-attr-val{
		font-style: normal;
		font-weight: 400;
		font-size: 19px;
		line-height: 160%;	
		color: #DFDFDF;
		margin: 0;
	}
	.hyperx-benef__title{
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 35px;
		color: #FFFFFF;	
		margin-bottom: 30px;
	}
	.hyperx-benef{
		margin-bottom: 100px;
	}
	.buy-product-mobile{display: none;}
	#page{
		background: #111;
	}
	.sub-products-box-link{
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		height: 100%;
	}
	.sub-products-box-link:hover{text-decoration: none;}
	.sub-products-box{
		transition: .3s;
		border: 1px solid transparent;
		border-radius: 5px;
		padding: 20px;
		height: 100%;
	}
	.sub-products-box:hover{
		background: #1d1d1d;
		border: 1px solid #1d1d1d;
		box-sizing: border-box;
		border-radius: 5px;		
		transition: .3s;
	}
	.sub-products-content-title{
		margin: 0;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 130%;
		color: #CACACA !important;		
	}
	.sub-products-content-price{
		margin-bottom: 0;
		font-style: normal;
		font-weight: 500;
		font-size: 24px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #F7F7F7;		
		margin-bottom: 20px;
	}
	.buy-product-mobile .single_add_to_cart_button{
		padding: 16px 22px 18px 22px !important;
	}
	.sub-products-image{
		text-align: center;
		margin-bottom: 30px;
		background: url(/wp-content/uploads/svet.png);
		background-position: center;
		background-size: contain;
		background-repeat: no-repeat;	
		height: 220px;
		display: flex;
	}
	.mywoo-comp-info-2 .stock{
		display: block;
		color: #E31611;
		font-weight: 500;
		font-size: 15px;
	}
	
	.sub-products-image img{
		max-height: 220px;	
		width: auto;
	}
	.sub-products{margin-top: 100px;margin-bottom: 60px;}
	.peref-subs{margin-top: 100px;}
	.peref-comand-right{right: 0;}
	.peref-comand-left{
		left: 0;
	}
	.peref-comand-angles{
		position: absolute;
		top:40%;
		transform:translate(0, -50%);
		background: #434242;
		padding: 9px 12px 9px 12px;
		border-radius: 100px;
	}
	.peref-comand-angles svg{
		display: none
	}
	.team-slider{
		padding: 0 7px;
	}
	.team-slider-title{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #E0E0E0;		
		margin: 0;
		margin-top: 15px;
		text-align: center;
	}
	.team-slider-box{
		background: #1C1C1C;
		border: 1px solid #292929;
		box-sizing: border-box;
		border-radius: 10px;	
		text-align: center;
		padding: 70px 150px;
		height: 80%;
	}
	.peref-subs-title{
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 30px;	
	}
	.main-settings-attr{
		flex-basis: 40%;
		border-bottom: 1px solid #222222;
		padding-bottom: 10px;
		margin: 0 10% 30px 0;
	}
	.main-settings{
		display: flex;
		flex-wrap: wrap;
		max-width: 100%;
	}
	.main-settings-attr{
		display: flex;
	}
	.main-settings-val{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #DFDFDF;		
		margin: 0;
		flex-basis: 50%;
		text-align: right;
		padding: 0 5px;		
	}
	.main-settings-name{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #BFBFBF;		
		margin: 0;
		flex-basis: 50%;
		padding: 0 5px;
	}
	.peref-main-set-title{
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;	
		margin-bottom: 35px;
	}
	.peref-full-description{
		margin: 50px 0 100px 0;
		max-width: 70%;
	}
	span.readMore{
		font-style: normal;
		font-weight: 500;
		font-size: 17px;
		line-height: 21px;
		color: #E31611;		
	}
	.peref-full-description-text{
		font-style: normal;
		font-weight: 400;
		font-size: 18px;
		line-height: 170%;	
		color: #BFBFBF;
	}
	.peref-full-description-title{
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 35px;
		color: #FFFFFF;	
		margin-bottom: 20px;
	}
	.morecontent span {
		display: none;
	}
	.morelink {
		display: block;
	}	
	.second-bar-container{
		padding-bottom: 15px;
		border-bottom: 1px solid #292929;
		position: sticky;
		height: 82px;
		top: 82px;
	}
	.mywoo-single-cart-price-price__text-submenu{
		font-style: normal;
		font-weight: 500;
		font-size: 24px;
		line-height: 30px;
		color: #FFFFFF;		
		margin: 0;
		margin-right: 25px;
	}
	.peref-second-menu-price{
		display: flex;
		align-items: center;
	}
	.peref-second-menu-price .single_add_to_cart_button{
		font-style: normal;
		font-weight: bold;
		font-size: 17px;
		line-height: 21px;
		color: #FFFFFF;	
		padding: 14px 44px 14px 44px;
		background: #E31611;
		border-radius: 5px;		
	}
	.peref-second-menu-price .cart button:before{
		content: "" !important;
		margin-right: 0;
	}	
	.peref-second-menu-price .quantity{display: none;}
	.peref-second-menu-title__subtext{
		font-style: normal;
		font-weight: 500;
		font-size: 17px;
		line-height: 21px;
		color: #CBCBCB;		
		margin: 0;
		margin-bottom: 5px;
	}
	.peref-second-menu-title__text{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 25px;
		color: #FFFFFF;	
		margin: 0;
	}
	.second-bar{
		position: sticky;
		top: 55px;
		height: 55px;		
		margin: 10px 0;
	}
	.peref-second-menu{
		display: flex;
		justify-content: space-between;
		align-items: center;
		height: 100%;
	}
	.mywoo-single-product-default-image{
		flex-basis: 45%;
	}
	.mywoo-single-product-content{
		flex-basis: 50%;
	}
	.peref-benefits{
		margin-top: 45px;
		display: flex;
		align-items: flex-start;		
	}
	.peref-benefits-container img{margin-right: 18px; margin-top: 0; max-width: 26px;}
	.peref-benefits .peref-benefits-container:last-child{
		margin-right: 0;
	}
	.peref-benefits-container{display: flex;margin-right: 65px;}
	.peref-benefits-container-text__des{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 21px;
		color: #D3D3D3;	
		margin: 0;
	}
	.peref-benefits-container-text__title{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 23px;
		color: #FFFFFF;	
		margin: 0;
		margin-bottom: 5px;
	}
	.mywoo-single-cart-price{padding: 0;}
	.mywoo-single-product .single_add_to_cart_button{
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 20px;
		color: #FFFFFF;	
		padding: 16px 80px 18px 80px;
		background: #E31611;
		border-radius: 5px;
	}	
	.mywoo-single-cart-price-cont .mywoo-single-cart-price-cart .cart button:before{
		content: "" !important;
		margin-right: 0;
	}	
	.mywoo-single-cart-price-price__text{
		font-style: normal;
		font-weight: bold;
		font-size: 32px;
		line-height: 40px;
		color: #FFFFFF;		
		margin: 0;
		margin-right: 25px;
	}
	.main-attributes-link{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 20px;
		color: #E31611;
		transition: .3s;
	}
	.main-attributes-link:hover{
		color: #E31611;
		text-decoration: none;
		transition: .3s;
	}
	.peref-line{background: #2D2D2D; width: 100%; height: 1px; margin: 30px 0;}
	.peref-title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 53px;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 5px;
	}
	.main-attributes-attr{
		flex-basis: 36%;
		margin-bottom: 20px;
		display: flex;
		align-items: center;
	}
	.main-attributes{
		display: flex;
		flex-direction: column;
	}
	.mywoo-single-product main{
		width: 100%;
	}
	.main-attributes-attr-name{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 20px;
		margin: 0;
		color: #BFBFBF;
	}
	.main-attributes-attr-val{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 20px;
		color: #F2F2F2;
		margin: 0;
		margin-left: 15px;
	}	
	.main-attributes-attr-block{display: flex;}
	
	
    .addReadMore.showlesscontent .SecSec,
    .addReadMore.showlesscontent .readLess {
        display: none;
    }

    .addReadMore.showmorecontent .readMore {
        display: none;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
		font-style: normal;
		font-weight: 500;
		font-size: 17px;
		line-height: 21px;
		color: #E31611;
        cursor: pointer;
    }

    .addReadMoreWrapTxt.showmorecontent .SecSec,
    .addReadMoreWrapTxt.showmorecontent .readLess {
        display: block;
    }	
	.mywoo-single-product main{
		max-width: none;
		padding: 0 !important;
	}
	@media screen and (min-width: 768px) and (max-width: 1200px){
		.main-settings{max-width: 100%; flex-direction: column;}
		.mywoo-single-cart-price{display: none;}
		.main-settings-attr{
			margin: 0 0 30px 0;
		}
		.peref-main-set{max-width: 80%; margin: 0 auto;}
		.peref-full-description{max-width: 80%; margin: 50px auto 50px auto;}
		.mywoo-single-product-content{max-width: 80%; margin: 0 auto;}
		.mywoo-single-product{margin-bottom: 0;}
		.buy-product-mobile .mywoo-single-cart-price-cont{
			flex-basis: 40% !important;
		}
		.buy-product-mobile .mywoo-single-cart-price-cont .mywoo-single-cart-price-cart{
			flex-basis: 100% !important;
			margin-right: 0;
		}
		.buy-product-mobile .mywoo-single-cart-price-price{
			flex-basis: 60%;
			padding: 0 30px;
		}		
		.buy-product-mobile form button{border-radius: 0 !important; width: 100%; text-align: center; justify-content: center;}
		.buy-product-mobile form{
			width: 100%;
		}
		.buy-product-mobile{
			display: flex;
			position: sticky;
			bottom: 0;
			background: #282828;
			align-items: center;
		}
		.buy-product-mobile .mywoo-single-cart-price-price__text{
			margin: 0;
			font-style: normal;
			font-weight: bold;
			font-size: 22px;
			line-height: 130%;
			letter-spacing: 0.03em;
			color: #FFFFFF;		
			text-align: center;
		}
		.buy-product-mobile .mywoo-single-cart-price-price{
			margin-bottom: 0;
		}	
		.hyperx-benef-container{
			flex-direction: column-reverse;
		}
	}
	@media screen and (max-width: 768px){
		.hyperx-benef-container-attr-val{
			font-size: 16px;
		}
		.hyperx-benef-container{
			flex-direction: column-reverse;
		}	
		.hyperx-benef-container-img{
			margin-bottom: 30px;
		}
		.mywoo-single-product{margin-bottom: 0;}
		.buy-product-mobile .mywoo-single-cart-price-cont{
			flex-basis: 40% !important;
			height: 100%;
		}
		.buy-product-mobile .mywoo-single-cart-price-cont .mywoo-single-cart-price-cart{
			flex-basis: 100% !important;
			margin-right: 0;
		}
		.buy-product-mobile .mywoo-single-cart-price-price{
			flex-basis: 60%;
			padding: 0 30px;
		}
		.peref-full-description-title, .peref-main-set-title, .peref-subs-title, .peref-subs-title, .hyperx-benef__title{font-size: 22px;}
		.peref-full-description-text{
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 160%;
			color: #CBCBCB;			
		}
		.main-settings-name{
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 130%;
			letter-spacing: 0.03em;		
		}
		.main-settings-val{
			font-style: normal;
			font-size: 16px;
			line-height: 130%;
			letter-spacing: 0.03em;		
		}
		.team-slider-box{
			padding: 30px;
		}
		.main-settings{max-width: 100%;}
		.main-settings-attr{flex-basis: 100%;margin: 0 0 20px 0;}
		.peref-full-description, .peref-subs, .sub-products{
			margin: 50px 0;
		}
		.addReadMore .readMore, .addReadMore .readLess{
			font-size: 16px;
		}
		.team-slider-title{font-size: 16px;}
		.peref-full-description{max-width: 100%;}
		.buy-product-mobile form button{border-radius: 0 !important;}
		.buy-product-mobile form{
			width: 100%;
		}
		.buy-product-mobile{
			display: flex;
			position: sticky;
			bottom: 0;
			background: #282828;
			align-items: center;
			height: 50px;
		}
		.buy-product-mobile .mywoo-single-cart-price-price__text{
			margin: 0;
			font-style: normal;
			font-weight: bold;
			font-size: 22px;
			line-height: 130%;
			letter-spacing: 0.03em;
			color: #FFFFFF;		
			text-align: center;
		}
		.buy-product-mobile .mywoo-single-cart-price-price{
			margin-bottom: 0;
		}
		.second-bar-container{display: none;}
		.woocommerce-product-gallery__image{height: auto;}
		.woocommerce-product-gallery .flex-viewport{height: auto !important;}
		.mywoo-single-product-content .mywoo-single-cart-price{order: 1; display: none;}
		.mywoo-single-product-content .peref-title{order: 2;}
		.mywoo-single-product-content .stock-status{order: 3;}
		.peref-line{display: none;}
		.mywoo-single-product-content .main-attributes{order: 4;margin: 30px 0;}
		.mywoo-single-product-content .peref-benefits{
			order: 5;
			flex-direction: column;
		}
		.peref-benefits .peref-benefits-container:last-child{
			margin-bottom: 0;
		}
		.peref-benefits-container{
			margin-bottom: 20px;
		}
		.mywoo-single-product-content{
			display: flex;
			flex-direction: column;
		}
		.peref-title{
			font-style: normal;
			font-weight: bold;
			font-size: 20px;
			line-height: 130%;
			letter-spacing: 0.03em;
			color: #CBCBCB;			
		}
		.stock-status{
			font-size: 16px !important;
		}
		.peref-second-menu-title{display: none;}
		.peref-second-menu-price{justify-content: space-between; width: 100%;}
		.second-bar-container{
			position: sticky;
			bottom: 0;
			width: 100%;
			height: 50px;
			z-index: 999;			
		}
	}
	@media screen and (min-width: 768px) and (max-width: 1200px){
		.team-slider-box{padding: 30px;}
	}
		@media screen and (min-width: 1200px) and (max-width: 1600px){
			.mywoo-single-cart-price-price{
				width: auto;
				flex-basis: 20%;
				margin-bottom: 0;
			}
			.mywoo-single-cart-price-cont{
				width: auto;
				flex-basis: 80%;
			}
			.mywoo-single-cart-price{
				flex-direction: row;
			}
			.mywoo-single-product .single_add_to_cart_button{
				padding: 16px 80px 18px 80px;
				width: auto !important;
			}
			.mywoo-single-cart-price-cont .mywoo-single-cart-price-cart{
				flex-basis: 100% !important;
			}
			.peref-benefits-container{margin-right: 20px;}
			.team-slider-box{padding: 30px;}
		}	
</style>
<script type="text/javascript">
	$(function() {
		$(".product_cat-myshki").find(".peref-second-menu-title__subtext").text("");
    	$(".product_cat-klaviatury").find(".peref-second-menu-title__subtext").text("Эту клавиатуру используют");
    	$(".product_cat-audio").find(".peref-second-menu-title__subtext").text("Игровая гарнитура");
		
		AddReadMore();
	});
	
	function AddReadMore() {
        //This limit you can set after how much characters you want to show Read More.
        var carLmt = 300;
        // Text to show when text is collapsed
        var readMoreTxt = " Читать все";
        // Text to show when text is expanded
        var readLessTxt = " Свернуть";


        //Traverse all selectors with this class and manupulate HTML part to show Read More
        $(".addReadMore").each(function() {
            if ($(this).find(".firstSec").length)
                return;

            var allstr = $(this).text();
            if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><br><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }

        });
        //Read More and Read Less Click Event binding
        $(document).on("click", ".readMore,.readLess", function() {
            $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        });
    }
</script>
