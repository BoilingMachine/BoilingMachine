<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$first_custom_class = 'post-' . $product->get_id();
?>

<div <?php wc_product_class( '', $product ); ?>>
	<?php if(get_field("podarok")){ ?>
			<div class="sale">
				<img src="/wp-content/uploads/mosue-gidt.svg">
				<p class="sale-text">Мышка в подарок</p>	
			</div>
			<div class="help">
				Игровая мышь ASUS ROG Chakram Core в подарок.
			</div>	
	<style>
		@media screen and (max-width: 992px){
			.sale:hover + .help{
				left: 0 !important;
				top: 50px !important;
			}
		}		
		.sale{
			display: flex;
			align-items: center;
			padding: 9px 17px 11px 17px;	
			border: 1px solid #548EFE;
			border-radius: 30px;
			width: fit-content;
			position: absolute;
			transition: .3s;
		}
		.sale:hover{
			transition: .3s;
			border: 1px solid #548EFE;
			background: #3A79F3;		
		}
		.sale img{
			margin-right: 10px;
			max-width: 14px;
		}
		.sale-text{
			font-style: normal;
			font-weight: 500;
			font-size: 14px;
			line-height: 110%;
			letter-spacing: 0.03em;
			color: #FFFFFF;		
			margin: 0;
		}
		.sale:hover + .help{
			display: block !important;
			position: absolute;
			left: 200px;
			top: 0;
			width: 200px;
		}
		.help{
			display: none;
			padding: 14px;
			background: #151515;
			font-size: 14px;
			color: #fff;
			width: fit-content;
			border-radius: 6px;
			border: 1px solid #548EFE;
		}	
	</style>
	<?php } ?>
	<?php if(get_field("igra_v_podarok")){ ?>
			<div class="sale-game">
				<img src="/wp-content/uploads/game-gift.svg">
				<p class="sale-text-game">Игра в подарок</p>	
			</div>
			<div class="help-game">
				Игра в подарок при покупке ПК на GeForce RTX 30x
			</div>	
	<style>
		@media screen and (max-width: 992px){
			.sale-game:hover + .help-game{
				left: 0 !important;
				top: 50px !important;
			}
		}
		.sale-game{
			display: flex;
			align-items: center;
			padding: 9px 17px 11px 17px;	
			border: 1px solid #76b900;
			border-radius: 30px;
			width: fit-content;
			position: absolute;
			transition: .3s;
		}
		.sale-game:hover{
			transition: .3s;
			border: 1px solid #76b900;
			background: #76b900;		
		}
		.sale-game img{
			margin-right: 10px;
			max-width: 16px;
		}
		.sale-text-game{
			font-style: normal;
			font-weight: 500;
			font-size: 14px;
			line-height: 110%;
			letter-spacing: 0.03em;
			color: #FFFFFF;		
			margin: 0;
		}
		.sale-game:hover + .help-game{
			display: block !important;
			position: absolute;
			left: 200px;
			top: 0;
			width: 200px;
		}
		.help-game{
			display: none;
			padding: 14px;
			background: #151515;
			font-size: 14px;
			color: #fff;
			width: fit-content;
			border-radius: 6px;
			border: 1px solid #76b900;
		}	
	</style>	
	<?php } ?>	
	
	<a href="<?php echo $product->get_permalink(); ?>" class="woocommerce-product-href-link">
<?php
	
	do_action( 'woocommerce_before_shop_loop_item' );
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
										echo -(100 - (round(($product->get_sale_price()*100)/$product->get_regular_price())));										
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
									font-weight: normal;
									font-size: 18px;
									text-decoration: line-through;
									line-height: 130%;
									letter-spacing: 0.03em;
									color: #989898;	
									margin-top: 0;
									margin-right: 20px;
									margin-bottom: 0;
								}
								.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text bdi{font-weight: 500;}
								.mywoo-comp-info-1-1{align-items: center;}
								.<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text-sale{
									background: #e5670e;
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
									font-weight: 600;
									font-size: 24px;
									line-height: 130%;
									letter-spacing: 0.03em;
									color: #FFFFFF;
									margin-bottom: 0;
								}							
							</style>
							<?php } ?>
			</div>
			
		</div>		
	</div>
	<?php get_price_archive(); ?>
	<?php
	echo "<div class='mywoo-prod-title'>";
	do_action( 'woocommerce_shop_loop_item_title' );
	echo "</div>";
	?>
	</a>
	<div class="mywoo-landing-page-computers-container-separator"></div>	
	<div class="mywoo-comp-attr">
		<?php if(get_field('vybor_videokarty')) { ?>
			<?php 
				switch ( get_field('vybor_videokarty') ){
					case "video10":
						if ( get_field('videokarta_10') ){ ?>		
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Видеокарта</span>			
									<?php  the_field('videokarta_10'); ?>
								</p>
							</div>													
						<?php	}
						break;
					case "video30":
						if ( get_field('videokarta_30') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Видеокарта</span>			
									<?php the_field('videokarta_30'); ?>
								</p>
							</div>		
																				
					<?php }
						break;									
				}
			?>
		<?php } ?>		
		<?php if (get_field("vybor_proczessora")) { ?>
			<?php 
				switch ( get_field('vybor_proczessora') ){
					case "intel":
						if ( get_field('proczessory_intel') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Процессор</span>
									<?php the_field('proczessory_intel') ?>
								</p>
							</div>																							
					<?php }
						break;
					case "amd":
						if ( get_field('proczessory_amd') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Процессор</span>
									<?php the_field('proczessory_amd') ?>
								</p>
							</div>												
					<?php } 
						break;								
				} ?>					
		<?php } ?>		
		<?php if (get_field("vybor_materinskoj_platy")) {?>
			<?php 
				switch ( get_field('vybor_materinskoj_platy') ){
					case "intelh":
						if ( get_field('proczessory_intel_h') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Материнская плата</span>
									<?php the_field('proczessory_intel_h') ?>
								</p>
							</div>																	
					<?php	} 
						break;
					case "intelb":
						if ( get_field('proczessory_intel_b') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Материнская плата</span>
									<?php the_field('proczessory_intel_b') ?>
								</p>
							</div>																			
					<?php }	 	
						break;
					case "intelz":
						if ( get_field('proczessory_intel_z') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Материнская плата</span>
									<?php the_field('proczessory_intel_z') ?>
								</p>
							</div>																		
					<?php	} 	
						break;
					case "amdb":
						if ( get_field('proczessory_amd_b') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Материнская плата</span>
									<?php the_field('proczessory_amd_b') ?>
								</p>
							</div>											
					<?php	} 
						break;
					case "amdx":
						if ( get_field('proczessory_amd_x') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Материнская плата</span>
									<?php the_field('proczessory_amd_x') ?>
								</p>
							</div>										
					<?php	} 	
						break;
				} ?>					
		<?php } ?>		
		<?php if(get_field("vybor_operativnoj_pamyati")){ ?>
			<?php 
				switch ( get_field('vybor_operativnoj_pamyati') ){
					case "gb16":
						if ( get_field('operativnaya_pamyat_16gb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Оперативная память</span>
									<?php the_field('operativnaya_pamyat_16gb') ?>
								</p>
							</div>																		
					<?php	}
						break;
					case "gb32":
						if ( get_field('operativnaya_pamyat_32gb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Оперативная память</span>
									<?php the_field('operativnaya_pamyat_32gb') ?>
								</p>
							</div>																			
					<?php }
						break;
					case "gb64":
						if ( get_field('operativnaya_pamyat_64gb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Оперативная память</span>
									<?php the_field('operativnaya_pamyat_64gb') ?>
								</p>
							</div>																				
					<?php }	
						break;
				} ?>					
		<?php } ?>	
		<?php if (get_field("vybor_hdd")){ ?>
			<?php 
				switch ( get_field('vybor_hdd') ){
					case "hdd1tb":
						if ( get_field('hdd_1tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Жесткий диск</span>
									<?php the_field('hdd_1tb') ?>
								</p>
							</div>																		
					<?php	} 
						break;
					case "hdd2tb":
						if ( get_field('hdd_2tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Жесткий диск</span>
									<?php the_field('hdd_2tb') ?>
								</p>
							</div>																			
					<?php }	
						break;	
					case "hdd3tb":
						if ( get_field('hdd_3tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Жесткий диск</span>
									<?php the_field('hdd_3tb') ?>
								</p>
							</div>																			
					<?php }
						break;
					case "hdd4tb":
						if ( get_field('hdd_4tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Жесткий диск</span>
									<?php the_field('hdd_4tb') ?>
								</p>
							</div>																				
					<?php }
						break;
					case "hdd6tb":
						if ( get_field('hdd_6tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Жесткий диск</span>
									<?php the_field('hdd_6tb') ?>
								</p>
							</div>																		
					<?php }
						break;
					case "hdd10tb":
						if ( get_field('hdd_10tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Жесткий диск</span>
									<?php the_field('hdd_10tb') ?>
								</p>
							</div>																	
					<?php }
						break;
					?>
									
					<?	
						
				} ?>					
		<?php } ?>		
		<?php if(get_field("vybor_ssd_m2")){ ?>
			<?php 
				switch ( get_field('vybor_ssd_m2') ){
					case "gb256":
						if ( get_field('ssd_m2_256tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>SSD накопитель</span>
									<?php the_field('ssd_m2_256tb') ?>
								</p>
							</div>																
					<?php	}
						break;
					case "gb512":
						if ( get_field('ssd_m2_512tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>SSD накопитель</span>
									<?php the_field('ssd_m2_512tb') ?>
								</p>
							</div>																				
					<?php }	
						break;
					case "tb1":
						if ( get_field('ssd_m2_1tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>SSD накопитель</span>
									<?php the_field('ssd_m2_1tb') ?>
								</p>
							</div>																			
					<?php }	
						break;
				} ?>					
		<?php } ?>
		<?php if(get_field("vybor_ssd_25")){ ?>
			<?php 
				switch ( get_field('vybor_ssd_25') ){
					case "ssd25256gb":
						if ( get_field('ssd_25_256gb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>SSD 2.5</span>
									<?php the_field('ssd_25_256gb') ?>
								</p>
							</div>																
					<?php	} 
						break;
					case "ssd25512tb":
						if ( get_field('ssd_25_512gb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>SSD 2.5</span>
									<?php the_field('ssd_25_512gb') ?>
								</p>
							</div>																			
					<?php }		
						break;
					case "ssd251tb":
						if ( get_field('ssd_25_1tb') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>SSD 2.5</span>
									<?php the_field('ssd_25_1tb') ?>
								</p>
							</div>																			
					<?php }		
						break;
				} ?>					
		<?php } ?>		
		
		<?php if(get_field("vybor_korpusa")){ ?>
			<?php 
				switch ( get_field('vybor_korpusa') ){
					case "mini":
						if ( get_field('korpus_mini') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Корпус</span>
									<?php the_field('korpus_mini') ?>
								</p>
							</div>																
					<?php	}
						break;
					case "midi":
						if ( get_field('korpus_midi') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Корпус</span>
									<?php the_field('korpus_midi') ?>
								</p>
							</div>																			
					<?php }	
						break;
					case "full":
						if ( get_field('korpus_full') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Корпус</span>
									<?php the_field('korpus_full') ?>
								</p>
							</div>																			
					<?php }	
						break;
				} ?>					
		<?php } ?>		
		
		
		<?php if(get_field("vybor_bloka_pitaniya")){ ?>
			<?php 
				switch ( get_field('vybor_bloka_pitaniya') ){
					case "w400":
						if ( get_field('blok_pitaniya_400w') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Блок питания</span>
									<?php the_field('blok_pitaniya_400w') ?>
								</p>
							</div>																							
					<?php	}
						break;
					case "w550":
						if ( get_field('blok_pitaniya_550w') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Блок питания</span>
									<?php the_field('blok_pitaniya_550w') ?>
								</p>
							</div>																								
					<?php }
						break;
					case "w600":
						if ( get_field('blok_pitaniya_600w') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Блок питания</span>
									<?php the_field('blok_pitaniya_600w') ?>
								</p>
							</div>																									
					<?php }
						break;
					case "w650":
						if ( get_field('blok_pitaniya_650w') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Блок питания</span>
									<?php the_field('blok_pitaniya_650w') ?>
								</p>
							</div>																						
					<?php }
						break;
					case "w750":
						if ( get_field('blok_pitaniya_750w') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Блок питания</span>
									<?php the_field('blok_pitaniya_750w') ?>
								</p>
							</div>																										
					<?php }
						break;
					case "w850":
						if ( get_field('blok_pitaniya_850w') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Блок питания</span>
									<?php the_field('blok_pitaniya_850w') ?>
								</p>
							</div>																										
					<?php }
						break;
					case "w1000":
						if ( get_field('blok_pitaniya_1000w') ){ ?>
							<div class="mywoo-comp-attr-cont">
								<p class="mywoo-comp-attr-cont__text">
									<span>Блок питания</span>
									<?php the_field('blok_pitaniya_1000w') ?>
								</p>
							</div>																											
					<?php }	
						break;
				} ?>					
		<?php } ?>
		

		

		
										
	</div>
	<div class="mywoo-comp-info">
		<div class="mywoo-comp-info-2">
			<div class="mywoo-comp-info-1-2">
				<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
			</div>
			<div class="mywoo-comp-info-2-2">
				<?php //echo do_shortcode('[viewBuyButton]'); ?>
				<a href="<?php echo $product->get_permalink(); ?>" class="mywoo-comp-info-2-2__link">Подробнее</a>
			</div>
		</div>
	</div>	
</div>
<style>

	.mywoo-landing-page-computers-container-separator{
		width: 90%;
		margin: 0 auto;
		height: 1px;
		background: #222222;
	}

</style>