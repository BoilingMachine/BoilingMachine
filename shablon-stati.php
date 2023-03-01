<?php
/*
 * Template name: Статьи
 * Template post type: post
 */
?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boiling_machine
 */
get_header(); ?>




<div class="bm-adaptive bm-margin bm">
	<div class="bm-contacts-header">
		<div class="bm-contacts-breadcrumb">
			<?php the_breadcrumb() ?>
		</div>

	</div>
</div>
<link rel='stylesheet' href='/wp-content/themes/boiling_machine/assets/css/post-products.css'/>
<div class="bm-stati">
	<div class="bm-post-con">
		<div class="bm-stati-container">
			<div class="bm-stati-container-content">
				<div class="bm-adaptive bm-margin bm">
					<div class="statia-container">				
						<div class="bm-stati-info-container">
							<h1 class="bm-stati-container-content__title">
								<?php the_title(); ?>
							</h1>	
							<?php the_content(); ?>	
						</div>
						<div class="bm-stati-container-navigate">
							<div class="navigation-stati-menu">
								<p class="navigation-stati-menu-header">Содержание</p>
								<ul class="navigation-spisok">

								</ul>
								<p class="navigation-consultate">
									Нужна консультация специалиста?
								</p>
							</div>
						</div>
					</div>
				</div>	
				<?php if(get_field('vybrat_tovary')): ?>
				<div class="bm-adaptive bm-margin bm">
					<div class="stati-add-products">
						<? $products = get_field('vybrat_tovary'); ?>
						<? 
							foreach($products as $product_id):
								$product = wc_get_product($product_id);
						?>
							<div class="blog-product">
								<div class="blog-product-image">
									<? $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'full' );  ?>
									<img src="<?php  echo $image[0]; ?>">
								</div>
								<div class="blog-product-price">
									<p class="blog-product-price__text">
										<? echo wc_price($product->get_regular_price()); ?>
									</p>
								</div>
								<div class="blog-product-title">
									<p class="blog-product-title__text">
										<? echo $product->get_name(); ?>
									</p>
								</div>
								<div class="blog-product-info">
									<div class="blog-product-stock">
										<p class="stock-container__text stock-<?php echo $product->id; ?>">
										<?php
											if ($product->is_type( 'simple' )):
												$stock = $product->get_stock_status();
												switch($stock){
													case 'instock':
														echo 'В наличии';
														?>
														<style>
															.stock-container__text.stock-<?php echo $product->id; ?>::before{background: #60BB49;}
														</style>
														<?php
														break;
													case 'outofstock':
														echo 'Нет в наличии';
														?>
														<style>
															.stock-container__text.stock-<?php echo $product->id; ?>::before{background: #EF2525;}
														</style>
														<?php
														break;
													case 'onbackorder':
														echo 'Предзаказ';
														?>
														<style>
															.stock-container__text.stock-<?php echo $product->id; ?>::before{background: #B8B8B8;}
														</style>
														<?php
														break;
												}
											endif;
                						?>
										</p>
										<div class="bm-chairs-rating">
											<?php $rating  = $product->get_average_rating(); ?>
											<?for ($n = 1; $n <= 5; $n++):?>
												<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.5 14.0958L3.24645 17L4.25 10.8489L0 6.49302L5.87322 5.59626L8.5 0L11.1268 5.59626L17 6.49302L12.75 10.8489L13.7536 17L8.5 14.0958Z" fill="<?=((float)$rating >= $n)? '#EF2525' : '#C7C7C7'?>"/>
												</svg>
											<?endfor;?>
            							</div>
									</div>
									<div class="blog-product-addtocart">
									<?php if ($product->is_type( 'simple' )): ?>
										<?php
										$stat_simple = $product->get_stock_status();
										if ($stat_simple == 'instock'):
											?>
											<?/* Старый css класса:  chair-link-add-cart single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart js-to-card-add */?>
											<a href="<?php echo $product->add_to_cart_url(); ?>" data-product_id="<?php echo $product->get_id(); ?>"  rel="nofollow" class="chair-link-add-cart single_add_to_cart_button button alt product_type_simple add_to_cart_button ajax_add_to_cart js-to-card-add">
												<svg width="25" height="23" viewBox="0 0 25 23" xmlns="http://www.w3.org/2000/svg">
													<path d="M0.195413 0.499722C0.551635 -0.0158449 1.27357 -0.155161 1.8079 0.18855L7.04044 3.55439C7.2883 3.71383 7.46329 3.95897 7.52931 4.23926L10.2306 15.7074H20.0602L20.7442 13.4635H12.7908C12.1486 13.4635 11.628 12.9611 11.628 12.3415C11.628 11.7219 12.1486 11.2196 12.7908 11.2196H21.4282L22.2832 8.41472H12.7908C12.1486 8.41472 11.628 7.9124 11.628 7.29277C11.628 6.67314 12.1486 6.17082 12.7908 6.17082H23.8372C24.2037 6.17082 24.5487 6.33751 24.7682 6.62062C24.9878 6.90372 25.0561 7.27013 24.9527 7.60935L22.0458 17.1459C21.9002 17.6234 21.4461 17.9513 20.9302 17.9513H9.3024C8.7595 17.9513 8.28885 17.5888 8.16853 17.078L5.36439 5.17309L0.517911 2.05558C-0.0164216 1.71187 -0.160809 1.01529 0.195413 0.499722Z" />
													<path d="M12.2094 21.0366C12.2094 22.121 11.2983 23 10.1745 23C9.05066 23 8.13962 22.121 8.13962 21.0366C8.13962 19.9522 9.05066 19.0732 10.1745 19.0732C11.2983 19.0732 12.2094 19.9522 12.2094 21.0366Z" />
													<path d="M22.093 21.0366C22.093 22.121 21.182 23 20.0582 23C18.9343 23 18.0233 22.121 18.0233 21.0366C18.0233 19.9522 18.9343 19.0732 20.0582 19.0732C21.182 19.0732 22.093 19.9522 22.093 21.0366Z" />
												</svg>
											</a>
										<?php endif; ?>
            						<?php endif; ?>
									</div>
								</div>
							</div>


						<?	endforeach;	?>						
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>	
	</div>	
</div>


<script>
	$(function(){
		$('.bm-post-test h2').each(function(index) {
			$(this).attr('id', 'h2Index' + index);
			$('.navigation-spisok').append('<li><a class="uncor" href="#' + $(this).attr("id") + '">' + $(this).text() + '</a></li>');

		});	

		$('.navigation-spisok a').click(function(){
			$('.navigation-spisok a').removeClass('active')
			$(this).addClass('active')
		})
	})
</script>


<style>

	.bm-post-test em{
		color: #26282B;
	}


	.bm-single-product-price-buttons__price__text, .mywoo-landing-comp .woocommerce-loop-product__title, .mywoo-comp-attr-cont__text, .mywoo-comp-info-1-2 .button, .mywoo-comp-info-2-2__link{
		color: #181818 !important;
	}
	.mywoo-comp-attr-cont__text span{
		color: #7e7e7e !important;
	}
	.mywoo-comp-info-1-2 .button{
		font-weight: 500 !important;
	}

	@media screen and (min-width: 1600px){
		.navigation-stati-menu{
			position: sticky;
			top: 100px;
    	}
		.statia-container{
			display: grid;
			grid-template-columns: 70% 25%;
			grid-gap: 5%;
		}
		.bm-post-test p img{
			margin: 40px 0;
		}
	}
	@media screen and (min-width: 1200px) and (max-width: 1600px){
		.navigation-stati-menu{
			position: sticky;
			top: 100px;
   	 	}
		.statia-container{
			display: grid;
			grid-template-columns: 70% 25%;
			grid-gap: 5%;
		}
	}
	@media screen and (max-width: 1200px){
		.statia-container{
			display: flex;
			flex-direction: column-reverse;
			grid-gap: 20px;
		}
	}	
	.navigation-consultate{
		font-style: normal;
		font-weight: 400;
		font-size: 16px;
		line-height: 140%;
		margin: 0;
		color: #EF2525;
	}
	.navigation-stati-menu{
		background: #F3F5F6;
		border-radius: 20px;
		padding: 25px 30px;
	}
	.navigation-spisok{
		list-style-type: none;
		padding: 0;
		margin: 0;
		padding-bottom: 12px;
		margin-bottom: 12px;
		border-bottom: 1px solid #D3D6D8;
	}
	.navigation-spisok li{
		margin-bottom: 12px;
	}
	.navigation-spisok li:last-child{margin-bottom: 0;}
	.navigation-spisok li a{
		font-style: normal;
		font-weight: 400;
		font-size: 16px;
		line-height: 140%;
		color: #26282B;
		text-decoration: none;
		transition: .3s;
		display: block;
	}
	.navigation-spisok li a.active{
		font-weight: 500;
	}
	.navigation-spisok li a:hover{
		text-decoration: none;
		color: #ef2525;
		transition: .3s;
	}
	.navigation-stati-menu-header{
		font-style: normal;
		font-weight: 600;
		font-size: 18px;
		line-height: 140%;
		margin: 0;
		margin-bottom: 12px;
		color: #262829;
	}


	.bm-post-test ul{color: #181818 !important;}
	.bm-contacts-breadcrumb a, .woocommerce-breadcrumb a{ color: #181818 !important; font-size: 16px; font-weight: 500;}
	.bm-contacts-breadcrumb a:hover, .woocommerce-breadcrumb a:hover{
		color: #181818 !important;
	}
	.active-page{ color: #8B8B8B !important; }

	h2, h3{color: #181818 !important;}
	ul{
		color: #cbcbcb;
		font-size: 20px;
	}
	@media screen and (min-width: 992px){
		table{
			table-layout: fixed;
		}
		.wp-block-table .has-fixed-layout td, .wp-block-table .has-fixed-layout th, table td, table th{
			word-break: break-word;
		}
	}
	.bm-post-video-youtube{
		width: auto;
		height: 650px;
	}
	.uk-position-small{
		margin: 10px;
	}
	.uk-thumbnav>*{
		padding-left: 5px;
		padding-right: 5px;
	}
	.bm-post-gallery{
		padding: 60px 0;
		max-width: 1200px;
		margin: 0 auto;
	}
	.wp-block-table{
		max-width: 1200px;
		margin: 0 auto !important;
	}
	.bm-stati-container-navigation{
		display: none;
		margin-left: 20px;
	}
	.bm-post-navigation{
		background: #222222;
		padding: 20px;
		border-right: 5px solid #545454;
		position: fixed;
		flex-direction: row-reverse;
		top: 20%;
		left: 0;
		cursor: pointer;
		display: flex;
	}
	.bm-post-title{
		max-width: 1200px;
		margin: 0 auto;
		padding-top: 0 !important;
		padding: 20px 0;		
	}

	.bm-post-test p{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 170%;
		letter-spacing: 0.03em;
		color: #181818;
		margin-top: 0;
	}
	#page{
		background: #fff;
	}
	.bm-post-con{
		max-width: 1920px;
		margin: 0 auto;
	}
	.bm-post-title-h2{
		font-style: normal;
		font-weight: 600;
		font-size: 36px;
		line-height: 170%;
		letter-spacing: 0.03em;
		color: #ededed;
		margin: 0;
	}
	h2{
		font-style: normal;
		font-weight: 600;
		font-size: 32px;
		line-height: 170%;
		letter-spacing: 0.03em;
		color: #ededed;
		margin: 0;
		margin-bottom: 10px;
	}	
	.bm-post-title-h3{
		font-style: normal;
		font-weight: 600;
		font-size: 25px;
		line-height: 170%;
		letter-spacing: 0.03em;
		color: #ededed;
		margin: 0;
	}
	h3{
		font-style: normal;
		font-weight: 600;
		font-size: 23px;
		line-height: 170%;
		letter-spacing: 0.03em;
		color: #ededed;
		margin: 0;
		margin-bottom: 10px;
	}	
	.bm-landing-category-computers-section-10-container-slider{
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}
	.bm-landing-category-computers-section-10-container-slider-block{
		margin: 8px;
    	border: 1px solid #1B1B1B;
	}
	.bm-stati-container{
		padding-bottom: 60px;
	}
	.bm-stati-container-content__title{
		font-style: normal;
		font-weight: bold;
		font-size: 48px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #181818;		
		margin: 0 auto 15px auto;
	}

	.bm-stati-container-content{
		flex-basis: 75%;
	}
	.bm-stati-container-navigation-content{
		display: flex;
		flex-direction: column;
	}
	.bm-stati-container-navigation-content a{
		display: block;
		text-decoration: none;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 160%;
		color: #CBCBCB;
		padding: 13px 26px;
		background: #2d2d2d;
		border-bottom: 1px solid #ccc;
	}
	.bm-stati-container-navigation a:last-child{
		border-bottom: none;
	}
	table td{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 170%;
		letter-spacing: 0.03em;
		color: #EDEDED;
		margin-top: 0;
		padding: 10px 15px;
	}
	figcaption{
		font-style: italic;
		font-weight: normal;
		font-size: 17px;
		line-height: 170%;
		letter-spacing: 0.03em;
		color: #cbcbcb;
		margin-top: 0;		
	}
	@media screen and (max-width: 576px){
		.bm-stati-container-content__title{
			font-size: 22px;
		}
		.bm-post-con{
			padding: 0 15px;
		}
		.bm-post-test p{
			font-size: 16px;
		}
		h2,h3{
			font-size: 20px;
			line-height: 130%;
		}
		table td{
			font-size: 16px;
			line-height: 130%;			
		}
		.bm-post-video-youtube{
			height: 350px;
		}
		ul{
			color: #cbcbcb;
			font-size: 16px;
		}		
	}
	@media screen and (min-width: 576px) and (max-width: 1200px){
		.bm-post-con{
			padding: 0 15px;
		}
		.bm-stati-container-content__title{
			font-size: 22px;
			max-width: 1080px;
			margin-left: auto;
			margin-right: auto;
		}
		.bm-post-video-youtube{
			height: 450px;
		}
		.bm-post-test p{
			font-size: 18px;
		}
		h2,h3{
			font-size: 20px;
			line-height: 130%;
		}
		table td{
			font-size: 18px;
			line-height: 130%;			
		}		
	}
</style>


<?php get_footer(); ?>