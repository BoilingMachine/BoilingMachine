<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

//do_action( 'woocommerce_before_cart' ); ?>
<div class="cart-container">	
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-contacts-header">
			<div class="bm-contacts-breadcrumb">
				<?php the_breadcrumb() ?>
			</div>
			<div class="bm-contacts-title cart-title">
				<h1 class="planshet-title">Ваша корзина пустая</h1>
				<p class="cart-empty-text">
					Для оформления заказа добавьте товары в корзину
				</p>				
			</div>					
		</div>
	</div>	
	
	<video loop muted autoplay class="pc">
		<source src="/wp-content/uploads/card-empty.mp4" type="video/mp4">
	</video>		
			<?php if ( WC()->cart->get_cart_contents_count() > 0 ){ ?>

				<script>

						window.location.replace("https://boiling-machine.ru/checkout/");

				</script>


			<?php }else{ ?>

				<div class="cart-empty pc">
					<a href="/kompyutery/" class="cart-empty-link">Перейти в каталог</a>
				</div>

			<?php } ?>
	
<div class="mobile-blocks">
	<div class="bm-adaptive bm-margin bm mobile">
			<video loop muted autoplay playsinline class="mobile-video">
				<source src="/wp-content/uploads/cart-video-mobile.mp4" type="video/mp4">
				<source src="/wp-content/uploads/cart-video-mobile.mp4">
			</video>			
		

		<div class="mobile-text">
			<a href="/kompyutery/" class="cart-empty-link">Перейти в каталог</a>
		</div>		
	</div>	
</div>	
	
	
</div>







<style>

	@media screen and (min-width: 768px) and (max-width: 992px){
		.bm-contacts-title h1{
			font-size: 60px !important;
			margin-bottom: 15px;
		}
		.cart-empty-text{
			font-size: 20px !important;
		}
		.pc{
			display: none !important;
		}
		.cart-empty-link{
			font-size: 16px !important;		
			padding: 18px 0 20px 0 !important;
		}
		.cart-mobile-block{
			max-width: 50%;
			margin: 0 auto;
		}
		.cart-container{
			height: 85vh !important;
		}
		.mobile-video{
			position: absolute;
			width: 76%;
			height: 100%;
			transform: translate(-50%, -50%);
			left: 50%;
			top: 50%;		
		}
		.mobile-text{
			position: absolute;
			bottom: 7%;
			left: 50%;
			transform: translate(-50%, -50%);	
			width: 58%;
		}
		.mobile-blocks{
			display: block !important;
		}
	}	
	
	@media screen and (max-width: 768px){
		.bm-contacts-title h1{
			font-size: 32px !important;
			margin-bottom: 15px;
		}
		.cart-empty-text{
			font-size: 17px !important;
		}
		.pc{
			display: none !important;
		}
		.cart-empty-link{
			font-size: 14px !important;		
			padding: 18px 0 20px 0 !important;
		}
		.cart-mobile-block{
			max-width: 50%;
			margin: 0 auto;
		}
		.cart-container{
			height: 85vh !important;
		}
		.mobile-video{
			position: absolute;
			width: 76%;
			height: 100%;
			transform: translate(-50%, -50%);
			left: 50%;
			top: 50%;		
		}
		.mobile-text{
			position: absolute;
			bottom: 7%;
			left: 50%;
			transform: translate(-50%, -50%);	
			width: 58%;
		}
		.mobile-blocks{
			display: block !important;
		}
	}
	.mobile-blocks{
		display: none;
	}
	.pc{display: block;}
	#page{
		background: #000;
	}
	.bm-contacts-header{
		position: relative;
		z-index: 10;
	}
	.cart-empty{
		position: absolute;             
		bottom: 7%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.cart-container{
		position: relative;
		height: 75vh;
		background: #000;
	}
	video.pc{
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
	}
	.bm-contacts-title h1{
		font-size: 60px;
	}
	.cart-empty-title{
		font-style: normal;
		font-weight: 500;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;	
		text-align: center;
		margin: 0;
		margin-bottom: 30px;
	}
	.cart-empty-text{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 130%;
		color: #cbcbcb;
		text-align: center;
		margin: 0;
		margin-bottom: 20px;
	}
	.cart-empty-link{
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 130%;
		padding: 20px 70px 22px 70px;
		transition: .3s;
		display: block;
		text-align: center;
		color: #FD0A04;
		border-radius: 6px;	
		border: 1px solid #FD0A04;
	}
	.cart-empty-link:hover{
		text-decoration: none;
		transition: .3s;
		background: #FD0A04;	
		color: #fff;
		border: 1px solid #FD0A04;
	}
</style>










