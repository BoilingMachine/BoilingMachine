<?php

defined( 'ABSPATH' ) || exit;

global $product;
?>
<style type="text/css">
	
	.mywoo-header-com-landing{
		position: sticky;
		top: 0;
		z-index: 1499
	}
</style>

<script src="/wp-content/themes/boiling_machine/assets/js/pdfmake.min.js"></script>
<script src="/wp-content/themes/boiling_machine/assets/js/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="/wp-content/themes/boiling_machine/assets/js/jquery.counterup.min.js"></script>

<link rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/dist/product-single-computer.css">

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'mywoo-landing-computer-container', $product ); ?>>
	<div class="bm-single-computer">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-single-computer-breadcumbs">
				<?php do_action( 'woocommerce_before_main_content' ); ?>
			</div>
			
			<div class="bm-single-computer-container">
				<div class="bm-single-computer-container-images">
					<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
					
				</div>
				<div class="bm-single-computer-container-info">
					<?php the_title( '<h1 class="product_title entry-title">', '</h1>' ); ?>
					<p class="bm-single-product-des">
						<?php echo $product->get_description();  ?>
					</p>
					<div class="bm-single-product-price-buttons">

						<div class="bm-single-product-price-buttons__addCart variable">
							<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );?>
						</div>
					</div>
					<?php get_price(); ?>
					<div class="bm-single-product-tabs">						
						<ul class="uk-subnav uk-subnav-pill" uk-switcher>
							<li><a href="#">Доставка </a></li>
							<li><a href="#">Оплата</a></li>
							<li><a href="#">Гарантия</a></li>
						</ul>

						<ul class="uk-switcher uk-margin">
							<li>
								<ul class="bm-single-product-ul-content">
									<li>Бесплатная доставка и подключение в течение 48 часов</li>
									<li>Самовывоз из магазина в Москве</li>
									<li>Доставка по РФ транспортными компаниями от 3 дней</li>
								</ul>
							</li>
							<li>
								<ul class="bm-single-product-ul-content">
									<li>Оплата любым удобным способом</li>
									<li>Возможно приобрести ПК в кредит или рассрочку</li>									
								</ul>							
							</li>
							<li>
								<ul class="bm-single-product-ul-content">
									<li>Гарантия 2 года</li>
									<li>Пожизненные консультации по вопросам работы вашего ПК</li>
									<li>В случае поломки вам будет предоставлен подменный ПК на время починки</li>
								</ul>							
							</li>
						</ul>								
						
					</div>
				</div>				
			</div>
		</div>
		
	</div>
<?php 
    global $product;

    if( $product->is_type('variable') ){
        $default_attributes = $product->get_default_attributes();
        foreach($product->get_available_variations() as $variation_values ){
            foreach($variation_values['attributes'] as $key => $attribute_value ){
                $attribute_name = str_replace( 'attribute_', '', $key );
                $default_value = $product->get_variation_default_attribute($attribute_name);
                if( $default_value == $attribute_value ){
                    $is_default_variation = true;
                } else {
                    $is_default_variation = false;
                    break; // Stop this loop to start next main lopp
                }
            }
            if( $is_default_variation ){
                $variation_id = $variation_values['variation_id'];
                break; // Stop the main loop
            }
        }

        // Now we get the default variation data
        if( $is_default_variation ){
            // Raw output of available "default" variation details data
            //echo '<pre>'; print_r($variation_values); echo '</pre>';

			echo $variation_values['attributes']['attribute_pa_video'];			
			
            // Get the "default" WC_Product_Variation object to use available methods
            $default_variation = wc_get_product($variation_id);

            // Get The active price
            $price = $default_variation->get_price(); 
        }
    }
?>	
	<div class="bm-single-product-setup">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-single-product-setup-container">
				<h2 class="bm-single-product-setup-container__title">
					Технические характеристики
				</h2>
				<div class="bm-single-product-setup-container-header-mobile">
					<h2 class="bm-single-product-setup-container__title-mobile">
						Технические характеристики
					</h2>	
					<div class="kp-download-mobile">
						<img src="/wp-content/uploads/kp1.svg" class="pdf">
						<p class="konfigurator-text pdf">
							Скачать КП
						</p>
					</div>
					
				</div>
				<div class="bm-single-product-setup-container-set">
					<?php if(get_field('vybor_videokarty')) { ?>
						<?php 
							switch ( get_field('vybor_videokarty') ){
								case "video10":
									if ( get_field('videokarta_10') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Видеокарта
											</p>
											<p class="bm-single-product-setup-container-set-block__text videokarta-attr">
												<?php 
													the_field('videokarta_10');
												?>
											</p>
										</div>										
								<?php	}
								case "video30":
									if ( get_field('videokarta_30') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Видеокарта
											</p>
											<p class="bm-single-product-setup-container-set-block__text videokarta-attr">
												<?php 
													the_field('videokarta_30');
												?>
											</p>
										</div>											
								<?php }									
							}
					
					
						?>
					<?php } ?>
					<?php if (get_field("vybor_proczessora")) { ?>
						<?php 
							switch ( get_field('vybor_proczessora') ){
								case "intel":
									if ( get_field('proczessory_intel') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Процессор
											</p>
											<p class="bm-single-product-setup-container-set-block__text proczessor-attr">
												<?php the_field('proczessory_intel') ?>
											</p>
										</div>										
								<?php	}
								case "amd":
									if ( get_field('proczessory_amd') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Процессор
											</p>
											<p class="bm-single-product-setup-container-set-block__text proczessor-attr">
												<?php the_field('proczessory_amd') ?>
											</p>
										</div>											
								<?php }									
							} ?>					
					<?php } ?>
					<?php if (get_field("vybor_materinskoj_platy")) {?>
						<?php 
							switch ( get_field('vybor_materinskoj_platy') ){
								case "intelh":
									if ( get_field('proczessory_intel_h') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Материнская плата
											</p>
											<p class="bm-single-product-setup-container-set-block__text materinskaya_plata-attr">
												<?php the_field('proczessory_intel_h') ?>
											</p>
										</div>										
								<?php	}
								case "intelb":
									if ( get_field('proczessory_intel_b') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Материнская плата
											</p>
											<p class="bm-single-product-setup-container-set-block__text materinskaya_plata-attr">
												<?php the_field('proczessory_intel_b') ?>
											</p>
										</div>											
								<?php }		
								case "intelz":
									if ( get_field('proczessory_intel_z') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Материнская плата
											</p>
											<p class="bm-single-product-setup-container-set-block__text materinskaya_plata-attr">
												<?php the_field('proczessory_intel_z') ?>
											</p>
										</div>										
								<?php	}			
								case "amdb":
									if ( get_field('proczessory_amd_b') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Материнская плата
											</p>
											<p class="bm-single-product-setup-container-set-block__text materinskaya_plata-attr">
												<?php the_field('proczessory_amd_b') ?>
											</p>
										</div>										
								<?php	}
								case "amdx":
									if ( get_field('proczessory_amd_x') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Материнская плата
											</p>
											<p class="bm-single-product-setup-container-set-block__text materinskaya_plata-attr">
												<?php the_field('proczessory_amd_x') ?>
											</p>
										</div>										
								<?php	}									
							} ?>					
					<?php } ?>					
					
					
					<?php if(get_field("vybor_operativnoj_pamyati")){ ?>
						<?php 
							switch ( get_field('vybor_operativnoj_pamyati') ){
								case "gb16":
									if ( get_field('operativnaya_pamyat_16gb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Оперативная память
											</p>
											<p class="bm-single-product-setup-container-set-block__text operativnaya_pamyat-attr">
												<?php the_field('operativnaya_pamyat_16gb') ?>
											</p>
										</div>										
								<?php	}
								case "gb32":
									if ( get_field('operativnaya_pamyat_32gb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Оперативная память
											</p>
											<p class="bm-single-product-setup-container-set-block__text operativnaya_pamyat-attr">
												<?php the_field('operativnaya_pamyat_32gb') ?>
											</p>
										</div>											
								<?php }		
								case "gb64":
									if ( get_field('operativnaya_pamyat_64gb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Оперативная память
											</p>
											<p class="bm-single-product-setup-container-set-block__text operativnaya_pamyat-attr">
												<?php the_field('operativnaya_pamyat_64gb') ?>
											</p>
										</div>											
								<?php }										
							} ?>					
					<?php } ?>
					<?php if (get_field("vybor_hdd")){ ?>
						<?php 
							switch ( get_field('vybor_hdd') ){
								case "hdd1tb":
									if ( get_field('hdd_1tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Жесткий диск
											</p>
											<p class="bm-single-product-setup-container-set-block__text zhestkij_disk-attr">
												<?php the_field('hdd_1tb') ?>
											</p>
										</div>										
								<?php	}
								case "hdd2tb":
									if ( get_field('hdd_2tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Жесткий диск
											</p>
											<p class="bm-single-product-setup-container-set-block__text zhestkij_disk-attr">
												<?php the_field('hdd_2tb') ?>
											</p>
										</div>											
								<?php }		
								case "hdd3tb":
									if ( get_field('hdd_3tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Жесткий диск
											</p>
											<p class="bm-single-product-setup-container-set-block__text zhestkij_disk-attr">
												<?php the_field('hdd_3tb') ?>
											</p>
										</div>											
								<?php }		
								case "hdd4tb":
									if ( get_field('hdd_4tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Жесткий диск
											</p>
											<p class="bm-single-product-setup-container-set-block__text zhestkij_disk-attr">
												<?php the_field('hdd_4tb') ?>
											</p>
										</div>											
								<?php }	
								case "hdd6tb":
									if ( get_field('hdd_6tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Жесткий диск
											</p>
											<p class="bm-single-product-setup-container-set-block__text zhestkij_disk-attr">
												<?php the_field('hdd_6tb') ?>
											</p>
										</div>										
								<?php }	
								case "hdd10tb":
									if ( get_field('hdd_10tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Жесткий диск
											</p>
											<p class="bm-single-product-setup-container-set-block__text zhestkij_disk-attr">
												<?php the_field('hdd_10tb') ?>
											</p>
										</div>										
								<?php }										
							} ?>					
					<?php } ?>
					
					<?php if(get_field("vybor_ssd_m2")){ ?>
						<?php 
							switch ( get_field('vybor_ssd_m2') ){
								case "gb256":
									if ( get_field('ssd_m2_256tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												SSD M2
											</p>
											<p class="bm-single-product-setup-container-set-block__text ssd_nakopitel-attr">
												<?php the_field('ssd_m2_256tb') ?>
											</p>
										</div>									
								<?php	}
								case "gb512":
									if ( get_field('ssd_m2_512tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												SSD M2
											</p>
											<p class="bm-single-product-setup-container-set-block__text ssd_nakopitel-attr">
												<?php the_field('ssd_m2_512tb') ?>
											</p>
										</div>											
								<?php }		
								case "tb1":
									if ( get_field('ssd_m2_1tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												SSD M2
											</p>
											<p class="bm-single-product-setup-container-set-block__text ssd_nakopitel-attr">
												<?php the_field('ssd_m2_1tb') ?>
											</p>
										</div>											
								<?php }										
							} ?>					
					<?php } ?>
					
					<?php if(get_field("vybor_ssd_25")){ ?>
						<?php 
							switch ( get_field('vybor_ssd_25') ){
								case "ssd25256gb":
									if ( get_field('ssd_25_256gb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												SSD 2.5
											</p>
											<p class="bm-single-product-setup-container-set-block__text ssd2_nakopitel-attr">
												<?php the_field('ssd_25_256gb') ?>
											</p>
										</div>									
								<?php	}
								case "ssd25512tb":
									if ( get_field('ssd_25_512gb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												SSD 2.5
											</p>
											<p class="bm-single-product-setup-container-set-block__text ssd2_nakopitel-attr">
												<?php the_field('ssd_25_512gb') ?>
											</p>
										</div>											
								<?php }		
								case "ssd251tb":
									if ( get_field('ssd_25_1tb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												SSD 2.5
											</p>
											<p class="bm-single-product-setup-container-set-block__text ssd2_nakopitel-attr">
												<?php the_field('ssd_25_1tb') ?>
											</p>
										</div>											
								<?php }										
							} ?>					
					<?php } ?>
					
					<?php if(get_field("vybor_korpusa")){ ?>
						<?php 
							switch ( get_field('vybor_korpusa') ){
								case "mini":
									if ( get_field('ssd_25_256gb') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Корпус
											</p>
											<p class="bm-single-product-setup-container-set-block__text korpus-attr">
												<?php the_field('korpus') ?>
											</p>
										</div>									
								<?php	}
								case "midi":
									if ( get_field('korpus_midi') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Корпус
											</p>
											<p class="bm-single-product-setup-container-set-block__text korpus-attr">
												<?php the_field('korpus_midi') ?>
											</p>
										</div>											
								<?php }		
								case "full":
									if ( get_field('korpus_full') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Корпус
											</p>
											<p class="bm-single-product-setup-container-set-block__text korpus-attr">
												<?php the_field('korpus_full') ?>
											</p>
										</div>											
								<?php }										
							} ?>															
					<?php } ?>
					<?php if(get_field("vybor_ohlazhdeniya")){ ?>
						<?php 
							switch ( get_field('vybor_ohlazhdeniya') ){
								case "wateroxl":
									if ( get_field('vodyanoe_ohlazhdenie') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Охлаждение
											</p>
											<p class="bm-single-product-setup-container-set-block__text svo-attr">
												<?php the_field('vodyanoe_ohlazhdenie') ?>
											</p>
										</div>									
								<?php	}
								case "vozduxoxl":
									if ( get_field('vozdushnoe_ohlazhdenie') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Охлаждение
											</p>
											<p class="bm-single-product-setup-container-set-block__text svo-attr">
												<?php the_field('vozdushnoe_ohlazhdenie') ?>
											</p>
										</div>											
								<?php }											
							} ?>																
					<?php } ?>	
					<?php if(get_field("vybor_korpusnyh_kulerov")){ ?>
						<?php 
							switch ( get_field('vybor_korpusnyh_kulerov') ){
								case "m120":
									if ( get_field('korpusnye_kulera_120mm') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Кулера
											</p>
											<p class="bm-single-product-setup-container-set-block__text kulera-attr">
												<?php the_field('korpusnye_kulera_120mm') ?>
											</p>
										</div>									
								<?php	}
								case "m140":
									if ( get_field('korpusnye_kulera_140mm') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Кулера
											</p>
											<p class="bm-single-product-setup-container-set-block__text kulera-attr">
												<?php the_field('korpusnye_kulera_140mm') ?>
											</p>
										</div>											
								<?php }											
							} ?>																
					<?php } ?>	
					<?php if(get_field("vybor_bloka_pitaniya")){ ?>
						<?php 
							switch ( get_field('vybor_bloka_pitaniya') ){
								case "w400":
									if ( get_field('blok_pitaniya_400w') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Блок питания
											</p>
											<p class="bm-single-product-setup-container-set-block__text blok_pitaniya-attr">
												<?php the_field('blok_pitaniya_400w') ?>
											</p>
										</div>									
								<?php	}
								case "w550":
									if ( get_field('blok_pitaniya_550w') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Блок питания
											</p>
											<p class="bm-single-product-setup-container-set-block__text blok_pitaniya-attr">
												<?php the_field('blok_pitaniya_550w') ?>
											</p>
										</div>											
								<?php }		
								case "w600":
									if ( get_field('blok_pitaniya_600w') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Блок питания
											</p>
											<p class="bm-single-product-setup-container-set-block__text blok_pitaniya-attr">
												<?php the_field('blok_pitaniya_600w') ?>
											</p>
										</div>											
								<?php }	
								case "w650":
									if ( get_field('blok_pitaniya_650w') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Блок питания
											</p>
											<p class="bm-single-product-setup-container-set-block__text blok_pitaniya-attr">
												<?php the_field('blok_pitaniya_650w') ?>
											</p>
										</div>											
								<?php }	
								case "w750":
									if ( get_field('blok_pitaniya_750w') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Блок питания
											</p>
											<p class="bm-single-product-setup-container-set-block__text blok_pitaniya-attr">
												<?php the_field('blok_pitaniya_750w') ?>
											</p>
										</div>											
								<?php }	
								case "w850":
									if ( get_field('blok_pitaniya_850w') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Блок питания
											</p>
											<p class="bm-single-product-setup-container-set-block__text blok_pitaniya-attr">
												<?php the_field('blok_pitaniya_850w') ?>
											</p>
										</div>											
								<?php }	
								case "w1000":
									if ( get_field('blok_pitaniya_1000w') ){ ?>
										<div class="bm-single-product-setup-container-set-block">
											<p class="bm-single-product-setup-container-set-block__title">
												Блок питания
											</p>
											<p class="bm-single-product-setup-container-set-block__text blok_pitaniya-attr">
												<?php the_field('blok_pitaniya_1000w') ?>
											</p>
										</div>											
								<?php }									
							} ?>					
					<?php } ?>
						
				</div>
				<div class="bm-single-product-setup-container-konfigurator">
					<div class="bm-single-product-setup-container-konfigurator-block">
						<img src="/wp-content/uploads/kp1.svg" class="pdf">
						<p class="konfigurator-text pdf">
							Скачать КП
						</p>
					</div>
					<div class="change-configuration">
						<p class="change-configuration-text">
							Изменить конфигурацию
						</p>
					</div>				
				</div>
				<div class="bm-single-product-setup-container-konfigurator-mobile">
						<p class="change-configuration-text">
							Изменить конфигурацию
						</p>					
				</div>
			</div>
		</div>
	</div>
	<div class="bm-single-product-fps">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-single-product-fps-container">
				<h2 class="bm-single-product-fps-container__title">
					FPS в играх
				</h2>
				<div class="bm-single-product-fps-container-blocks">
					<div class="bm-single-product-fps-container-blocks-first">
						<p class="bm-single-product-fps-container-blocks-first__game active" id="warzone">Call of Duty Warzone</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="cyberpunk">Cyberpunk 2077</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="outriders">Outriders</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="dota2">Horizon Zero Dawn</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="csgo">Assassin's Creed Valhalla</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="metro">Metro Exodus</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="resident">Resident Evil Village</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="rust">Deathloop</p>
						<p class="bm-single-product-fps-container-blocks-first__game" id="apex">Apex</p>					
					</div>
					<div class="bm-single-product-fps-container-blocks-mobile">
						<select class="choose-game">
						  <option class="bm-single-product-fps-container-blocks-first__game active" id="warzone">Call of Duty Warzone</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="cyberpunk">Cyberpunk 2077</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="outriders">Outriders</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="dota2">Horizon Zero Dawn</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="csgo">Assassin's Creed Valhalla</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="metro">Metro Exodus</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="resident">Resident Evil Village</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="rust">Deathloop</option>
						  <option class="bm-single-product-fps-container-blocks-first__game" id="apex">Apex</option>							
						</select>					
					</div>					
					<div class="bm-single-product-fps-container-blocks-second">
						<div class="bm-single-product-fps-container-blocks-second-container">
							<p class="bm-single-product-fps-container-blocks-second-container__title">1920 x 1080 (FULL HD)</p>	
							<div class="bm-single-product-fps-container-blocks-second-container-fps">
								<div class="bm-single-product-fps-container-blocks-second-counter counter-fullhd"></div>
								<p class="bm-single-product-fps-container-blocks-second-container-fps__text fullhd"></p>															
							</div>						
						</div>
						<div class="bm-single-product-fps-container-blocks-second-container">
							<p class="bm-single-product-fps-container-blocks-second-container__title">2560 x 1440 (2K)</p>	
							<div class="bm-single-product-fps-container-blocks-second-container-fps">
								<div class="bm-single-product-fps-container-blocks-second-counter counter-2k"></div>
								<p class="bm-single-product-fps-container-blocks-second-container-fps__text 2k"></p>
							</div>						
						</div>
						<div class="bm-single-product-fps-container-blocks-second-container">
							<p class="bm-single-product-fps-container-blocks-second-container__title">3840 x 2160 (4K)</p>	
							<div class="bm-single-product-fps-container-blocks-second-container-fps">
								<div class="bm-single-product-fps-container-blocks-second-counter counter-4k"></div>
								<p class="bm-single-product-fps-container-blocks-second-container-fps__text 4k"></p>
							</div>	
						</div>																												
																			
					</div>
				</div>
				<p class="bm-single-product-fps-container-blocks-help">
					* Игры тестировались на ультранастройках. FPS может отличаться в зависимости от конкретной конфигурации.
				</p>
				<p class="bm-single-product-fps-container-blocks-help oferta">
					** Не является публичной офертой. Изображения товаров на фотографиях, представленных в каталоге на сайте, могут отличаться от оригиналов.
				</p>
			</div>
		</div>
	</div>
	<?php  

	$images = get_field('galereya_new');
	$size = 'full';
	if( $images ){?>

	<div class="bm-landing-category-computers-section-10">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-landing-category-computers-section-10-container">
				<h2 class="bm-landing-category-computers-section-10-container__title wow animate__animated animate__fadeInUp">
					Галерея
				</h2>						
				<div class="bm-landing-category-computers-section-10-container-slider"  uk-lightbox="animation: fade" >

				 <?php foreach( $images as $image ): ?>
					<div class="bm-landing-category-computers-section-10-container-slider-block">						
						<a class="uk-inline" href="<?php echo $image['url']; ?>" >
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</a>
					</div>			
				<?php endforeach; ?>		

					<?php  

						if (count($images) <= 4){ ?>
							<style>
								.bm-landing-category-computers-section-10-container-slider-block{
									flex-basis: 47%;
								}
							</style>

						<?php }else{ ?>						
							<style>
								.bm-landing-category-computers-section-10-container-slider-block{
									flex-basis: 32%;
								}
							</style>						
						<?php } ?>			

				</div>			

			</div>
		</div>
	</div>

	<?php } ?>	
	<div class="buy-product-mobile">
		<!--
		<div class="buy-product-mobile-price">
			<p class="buy-product-mobile-price__text">
				
			</p>
		</div>
		<div class="buy-product-mobile-butt">
			<p class="buy-product-mobile-butt_text">
				В корзину
			</p>
		</div>
		-->
		<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );?>
	</div>
	<script>
		/*
		$(function() {
			var salePrice = $(".bm-single-product-price-buttons__price_sale bdi").text();
			
			if (salePrice == ""){
				var price = $(".bm-single-product-price-buttons__price__text bdi").text();
				$(".buy-product-mobile-price__text").text(price);
			}else{
				$(".buy-product-mobile-price__text").text(salePrice);
			}
			$(".buy-product-mobile-butt").click(function(){
				$( "form.cart .single_add_to_cart_button" ).trigger( "click" );
				$(".buy-product-mobile-butt .buy-product-mobile-butt_text").text("В корзине");
				$(".buy-product-mobile-butt").css("background-color","#78AA39");
			})
			
			
		});
		*/
		

		

	</script>
</div>





<script>
	
      jQuery(document).ready(function($) {
 
         $('input.variation_id').change( function(){
            if( '' != $('input.variation_id').val() ) {
 
               var var_id = $('input.variation_id').val();
 			   //$(".itog-price-var-price").text(var_id);
				
				var attribute = $(".variations_form").attr("data-product_variations");
				var superHeroes = JSON.parse(attribute);
				for (let i = 0; i < superHeroes.length; i++){
					
					if (var_id == superHeroes[i].variation_id)
					//console.log(superHeroes[i].display_price);
					$(".itog-price-var-price").text((parseInt(superHeroes[i].display_price)).toLocaleString('ru-RU') + "р");
					
				}				
				
            }
         });
 
      });
	
	
      jQuery(document).ready(function($) {
 
         $('.buy-product-mobile input.variation_id').change( function(){
            if( '' != $('.buy-product-mobile input.variation_id').val() ) {
 
               var var_id = $('.buy-product-mobile input.variation_id').val();
 			   //$(".itog-price-var-price").text(var_id);
				
				var attribute = $(".buy-product-mobile .variations_form").attr("data-product_variations");
				var superHeroes = JSON.parse(attribute);
				for (let i = 0; i < superHeroes.length; i++){
					
					if (var_id == superHeroes[i].variation_id)
					//console.log(superHeroes[i].display_price);
					$(".itog-price-var-price").text((parseInt(superHeroes[i].display_price)).toLocaleString('ru-RU') + "р");
					
				}				
				
            }
         });
 
      });	
	
	
	$(function(){
		
		
		$(".change-configuration-text").click(function(){
			$(".computer-landing").css("display","block");
			$(".computer-landing-popup").css("display","block");
		});
		
		$("ul[data-attribute_name='attribute_pa_videokarta-dlya-variaczij'] .image-variable-item").click(function(){
						
				var attrName = $(this).attr("data-title");
				$(".videokarta-attr").text(attrName);	
							
		});

        $("ul[data-attribute_name='attribute_pa_proczessor'] .image-variable-item").click(function(){

            var attrName = $(this).attr("data-title");
            $(".proczessor-attr").text(attrName);

        });

        $(".reset_variations").click(function (){
            $(".videokarta-attr").text('Выбрать опцию');
            $(".proczessor-attr").text('Выбрать опцию');
        });








        $( "body" ).on( "click", ".submit-popup", function() {
			$(".computer-landing-popup").css("display","none");
			$(".computer-landing").css("display","none");
		});		
		
						
		$('.image-variable-item .variable-item-contents').each(function(i,elem) {
			if ($(this).hasClass("stop")) {
				alert("Остановлено на " + i + "-м пункте списка.");
				return false;
			} 
			
			let altTitle = $(this).find("img").attr("alt");
			
			$(this).append("<p class='variable-item-contents-subtitle'>"+ altTitle +"</p>");			
			
		});	
		
		$(".computer-landing-popup .woocommerce-variation-add-to-cart").prepend("<p class='itog-price-var'>Цена ПК: <span class='itog-price-var-price'></span></p>");
		$(".itog-price-var").append("<p class='submit-popup'>Применить</p>");
		
	});
	
	
</script>

<style>
	.woo-variation-swatches .variable-items-wrapper .variable-item .variable-item-contents{
		display: flex;
		flex-direction: column;	
		justify-content: space-between;
	}
	.woo-variation-swatches.wvs-style-squared .variable-items-wrapper .variable-item img{
		margin: 0 auto;
	}
	.woo-variation-swatches.wvs-style-squared .variable-items-wrapper .variable-item p{
		padding-top: 15px;
		border-top: 1px solid #323232;
	}	
	.woo-selected-variation-item-name{
		font-style: normal;
		font-weight: 500;
		font-size: 22px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #EBEBEB;		
	}
	.reset_variations{display: none;}
	table.variations tr label{
		font-style: normal;
		font-weight: 500;
		font-size: 28px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;		
	}
	@media screen and (min-width: 1200px) and (max-width: 1500px){
		.computer-landing-popup{
			width: 85% !important;
			height: 85vh !important;
			overflow-y: scroll !important;
		}
	}
	@media screen and (max-width: 576px){
		table.variations tr label{
			font-size: 28px !important;
		}
		.woo-selected-variation-item-name{
			font-size: 18px !important;
		}
		.woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item){
			padding: 15px !important;
			margin-right: 0 !important;
		}
		.computer-landing-popup{
			top: 12% !important;
			height: 80vh !important;
		}
		.buy-product-mobile .computer-landing-popup{
			overflow-y: scroll;
			padding: 25px 20px;
		}
		.computer-landing-popup .woocommerce-variation-add-to-cart{height: auto !important;}
		.variable-item-contents-subtitle{
			font-size: 18px !important;
		}
		.bm-single-product-setup-container-set-block__text{
			text-align: left !important;
		}
		.woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item){
			flex-basis: 100% !important;
		}
	}
	@media screen and (min-width: 576px) and (max-width: 768px){
		.woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item){
			flex-basis: 47% !important;
		}		
		.variable-item-contents-subtitle{
			font-size: 16px !important;
		}
		.computer-landing-popup{
			top: 15% !important;
			height: 100vh !important;
			overflow-y: scroll !important;
		}		
	}
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.computer-landing-popup{
			top: 15% !important;
			height: auto !important;
		}		
	}
	@media screen and (min-width: 1200px) and (max-width: 1600px){
		.woo-variation-swatches.wvs-style-squared .variable-items-wrapper .variable-item{
			flex-basis: 31% !important;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 992px){
		.woo-variation-swatches.wvs-style-squared .variable-items-wrapper .variable-item{-webkit-flex-basis:47%!important;-ms-flex-preferred-size:47%!important;flex-basis:47%!important}
		.computer-landing-popup{top: 10% !important; height: 100vh !important; overflow-y: scroll !important;}
	}
	
	.buy-product-mobile form{
		width: 100%;
	}
	.buy-product-mobile .single_variation_wrap{width: 100%;height: 100%;}
	.buy-product-mobile .woocommerce-variation.single_variation{flex-basis: 60%;}
	.buy-product-mobile .woocommerce-variation-add-to-cart{flex-basis: 40%; height: 100%;}
	.buy-product-mobile .woocommerce-variation-price{text-align: center;}
	
	.buy-product-mobile .single_add_to_cart_button {
		height: 100%;
		width: 100%; 
		background: #FD0A04;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;
		border: none;
	}
	.bm-single-product-setup-container-set-block__text{
		text-align: right;
	}
	.bm-single-product-setup-container-konfigurator-mobile{
		display: none;
	}
	.bm-single-product-setup-container-konfigurator{
		display: flex;
	}	
	@media screen and (max-width: 1200px){
		.bm-single-product-setup-container-konfigurator-mobile{
			display: block;
		}
		.bm-single-product-setup-container-konfigurator{
			display: none;
		}
	}
	@media screen and (min-width: 1200px){
		.computer-landing-popup{
			top:50%;
			left:50%;
			transform:translate(-50%, -50%);			
		}
	}
	.bm-single-product-setup-container-konfigurator-mobile{
		order: 4;
		margin-top: 30px;
	}
	.bm-single-product-setup-container-konfigurator-mobile .change-configuration-text{
		width: fit-content;
		margin: 0 auto;
	}
	.image-variable-item.selected{
		pointer-events: none;
	}
	.image-variable-item{
		pointer-events: all;
	}
	.itog-price-var-price{
		font-style: normal;
		font-weight: 500;
		font-size: 24px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #F5AF25;		
	}
	.woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item){
		background: #222222;
		border: 1px solid #323232;
		box-sizing: border-box;
		border-radius: 5px !important;
        width: 100% !important;
	}
	.woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item){
		padding: 30px !important;
	}
	.computer-landing-popup{
		background: #111111 !important;
		border: 1px solid #202020;
		box-sizing: border-box;
		background: #21212136;
		overflow-y: scroll;
		padding: 40px 60px;
	}
	.variations .label{
		margin-bottom: 20px;
	}
	.close-popup-landing-comp{
		position: absolute;
		right: 20px;
	}
	table.variations tr{border-bottom: none;}
	.submit-popup{
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;
		border: 1px solid #D8201B;
		box-sizing: border-box;
		border-radius: 5px;
		padding: 16px 47px;
		width: fit-content;
		margin: 20px auto 0 auto;
		cursor: pointer;
		transition: .3s;
	}
	.submit-popup:hover{
		background: #D8201B;
		transition: .3s;
	}
	.computer-landing-popup .single_add_to_cart_button{
		display: none;
	}
	.itog-price-var{
		font-style: normal;
		font-weight: 500;
		font-size: 24px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;
		margin: 0;
		text-align: center;
	}
	.variable-item.disabled{
		position: relative;
	}
	.variable-item.disabled::before{
		display: block !important;
		position: absolute !important;
		width: 100% !important;
		height: 100% !important;
		background: #ccc !important;
		top: 0;
		left: 0;
		transform: none;
	}	
	.variable-item.disabled .variable-item-contents-subtitle{
		color: #ccc;
	}
	.variable-item .variable-item-contents::before,.variable-item .variable-item-contents::after{
		display: none;
	}
	.variable-item-contents-subtitle{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #EBEBEB;
	}
	.variable-item-span{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #EBEBEB;	
	}
	.woocommerce-variation-price{
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;
		margin: 0;
	}
	.quantity{
		display: none !important;
	}
	.single_variation_wrap{
		display: flex;
		align-items: center;
	}
	.woocommerce-variation.single_variation{
		margin-right: 20px;
	}
	.woo-variation-swatches.wvs-style-squared .variable-items-wrapper .variable-item{
		flex-basis: 32%;
		margin-bottom: 15px !important;
		margin-right: 15px !important;
	}
	.woo-variation-swatches .variable-items-wrapper{
		display: grid !important;
        grid-template-columns: repeat(4,1fr);
        grid-gap: 30px;
	}
</style>
<?php 

	$warzoneFullHD = get_field('fps_warzone_fullhd');
	$warzone2K = get_field('fps_warzone_2k');
	$warzone4K = get_field('fps_warzone_4k');
							
	$cyberpunkFullHD = get_field('fps_cyberpunk_fullhd');
	$cyberpunk2K = get_field('fps_cyberpunk_2k');
	$cyberpunk4K = get_field('fps_cyberpunk_4k');
							
	$outridersFullHD = get_field('fps_outriders_fullhd');
	$outriders2K = get_field('fps_outrider_2k');
	$outriders4K = get_field('fps_outriders_4k');	
							
	$dotaFullHD = get_field('fps_dota_2_fullhd');
	$dota2K = get_field('fps_dota2_2k');
	$dota4K = get_field('fps_dota2_4k');	
							
	$csgoFullHD = get_field('fps_csgo_fullhd');
	$csgo2K = get_field('fps_csgo_2k');
	$csgo4K = get_field('fps_csgo_4k');								
							
	$metroFullHD = get_field('fps_metro_exodus_fullhd');
	$metro2K = get_field('fps_metro_exodus_2k');
	$metro4K = get_field('fps_metro_exodus_4k');								
							
	$residentFullHD = get_field('fps_resident_evil_village_fullhd');
	$resident2K = get_field('fps_resident_evil_village_2k');
	$resident4K = get_field('fps_resident_evil_village_4k');		
							
	$rustFullHD = get_field('fps_rust_fullhd');
	$rust2K = get_field('fps_rust_2k');
	$rust4K = get_field('fps_rust_4k');		
							
	$fornithFullHD = get_field('fps_fortnight_fullhd');
	$fornith2K = get_field('fps_fortnight_2k');
	$fornith4K = get_field('fps_fortnight_4k');		
							
	$apexFullHD = get_field('fps_apex_fullhd');
	$apex2K = get_field('fps_apex_2k');
	$apex4K = get_field('fps_apex_4k');								
?>
<script>
	$(function() {
		
		$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
		var warzonefullHD = '<?php echo $warzoneFullHD;?>';					
		var warzonetextHD = warzonefullHD;
		warzonefullHD = Number( (warzonefullHD*10)/24 );	
		$( ".counter-fullhd" ).animate({
			width: warzonefullHD + "%"						
		},1000, "linear");
		$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(warzonetextHD);

		var warzone2k = '<?php echo $warzone2K;?>';
		var warzonetext2k = warzone2k;					
		warzone2k = Number( (warzone2k*10)/24 );	
		$( ".counter-2k" ).animate({
			width: warzone2k + "%"							
		},1000, "linear");				
		$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(warzonetext2k);

		var warzone4k = '<?php echo $warzone4K;?>';
		var warzonetext4k = warzone4k;					
		warzone4k = Number( (warzone4k*10)/24 );	
		$( ".counter-4k" ).animate({
			width: warzone4k + "%"							
		},1000, "linear");						
		$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(warzonetext4k);		
		
		$(".bm-single-product-fps-container-blocks-first__game").click(function(){
			$(".bm-single-product-fps-container-blocks-first__game").removeClass("active");
			$(this).addClass("active");
			$(this).attr("disabled", true);
			var fpsId = $(this).attr("id");
			
			switch(fpsId){
					
				   	case "warzone":
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/warzone-fps.png')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var warzonefullHD = '<?php echo $warzoneFullHD;?>';					
						var warzonetextHD = warzonefullHD;
						warzonefullHD = Number( (warzonefullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: warzonefullHD + "%"						
						},1000, "linear");
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(warzonetextHD);
						
						var warzone2k = '<?php echo $warzone2K;?>';
						var warzonetext2k = warzone2k;					
						warzone2k = Number( (warzone2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: warzone2k + "%"							
						},1000, "linear");				
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(warzonetext2k);
					
						var warzone4k = '<?php echo $warzone4K;?>';
						var warzonetext4k = warzone4k;					
						warzone4k = Number( (warzone4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: warzone4k + "%"							
						},1000, "linear");						
                        $(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(warzonetext4k);
						break;
					
					case "cyberpunk":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/cyberpunk-fps.png')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var cyberpunkfullHD = '<?php echo $cyberpunkFullHD;?>';
						var cyberpunktextfullHD = cyberpunkfullHD;					
						cyberpunkfullHD = Number( (cyberpunkfullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: cyberpunkfullHD + "%"
						},1000, "linear");
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(cyberpunktextfullHD);

						var cyberpunk2k = '<?php echo $cyberpunk2K;?>';
						var cyberpunktext2k = cyberpunk2k;						
						cyberpunk2k = Number( (cyberpunk2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: cyberpunk2k + "%"
						},1000, "linear");	
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(cyberpunktext2k);

						var cyberpunk4k = '<?php echo $cyberpunk4K;?>';
						var cyberpunktext4k = cyberpunk4k;						
						cyberpunk4k = Number( (cyberpunk4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: cyberpunk4k + "%"
						},1000, "linear");		
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(cyberpunktext4k);
					break;
					case "outriders":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/outriders-fps-1.png')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var outridersfullHD = '<?php echo $outridersFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(outridersfullHD);						
						outridersfullHD = Number( (outridersfullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: outridersfullHD + "%"
						},1000, "linear");
						

						var outriders2k = '<?php echo $outriders2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(outriders2k);
						outriders2k = Number( (outriders2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: outriders2k + "%"
						},1000, "linear");				

						var outriders4k = '<?php echo $outriders4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(outriders4k);
						outriders4k = Number( (outriders4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: outriders4k + "%"
						},1000, "linear");						
					break;		
					case "dota2":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/horizon.webp')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var dota2fullHD = '<?php echo $dotaFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(dota2fullHD);
						dota2fullHD = Number( (dota2fullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: dota2fullHD + "%"
						},1000, "linear");

						var dota22k = '<?php echo $dota2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(dota22k);
						dota22k = Number( (dota22k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: dota22k + "%"
						},1000, "linear");				

						var dota24k = '<?php echo $dota4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(dota24k);
						dota24k = Number( (dota24k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: dota24k + "%"
						},1000, "linear");						
					break;		
					case "csgo":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/valhalla-scaled.webp')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var csgofullHD = '<?php echo $csgoFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(csgofullHD);
						csgofullHD = Number( (csgofullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: csgofullHD + "%"
						},1000, "linear");

						var csgo2k = '<?php echo $csgo2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(csgo2k);
						csgo2k = Number( (csgo2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: csgo2k + "%"
						},1000, "linear");				

						var csgo4k = '<?php echo $csgo4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(csgo4k);
						csgo4k = Number( (csgo4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: csgo4k + "%"
						},1000, "linear");						
					break;
					case "metro":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/metro-fps.png')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var metrofullHD = '<?php echo $metroFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(metrofullHD);
						metrofullHD = Number( (metrofullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: metrofullHD + "%"
						},1000, "linear");

						var metro2k = '<?php echo $metro2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(metro2k);
						metro2k = Number( (metro2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: metro2k + "%"
						},1000, "linear");				

						var metro4k = '<?php echo $metro4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(metro4k);
						metro4k = Number( (metro4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: metro4k + "%"
						},1000, "linear");						
					break;		
					case "resident":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/resident-fps.png')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var residentfullHD = '<?php echo $residentFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(residentfullHD);
						residentfullHD = Number( (residentfullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: residentfullHD + "%"
						},1000, "linear");

						var resident2k = '<?php echo $resident2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(resident2k);
						resident2k = Number( (resident2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: resident2k + "%"
						},1000, "linear");				

						var resident4k = '<?php echo $resident4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(resident4k);
						resident4k = Number( (resident4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: resident4k + "%"
						},1000, "linear");						
					break;		
					case "rust":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/deathloop.webp')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var rustfullHD = '<?php echo $rustFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(rustfullHD);
						rustfullHD = Number( (rustfullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: rustfullHD + "%"
						},1000, "linear");

						var rust2k = '<?php echo $rust2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(rust2k);
						rust2k = Number( (rust2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: rust2k + "%"
						},1000, "linear");				

						var rust4k = '<?php echo $rust4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(rust4k);
						rust4k = Number( (rust4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: rust4k + "%"
						},1000, "linear");						
					break;	
					case "apex":	
						$(".bm-single-product-fps").css("background","url('/wp-content/uploads/apex-fps.png')");
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var apexfullHD = '<?php echo $apexFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(apexfullHD);
						apexfullHD = Number( (apexfullHD*10)/24 );	
						$( ".counter-fullhd" ).animate({
							width: apexfullHD + "%"
						},1000, "linear");

						var apex2k = '<?php echo $apex2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(apex2k);
						apex2k = Number( (apex2k*10)/24 );	
						$( ".counter-2k" ).animate({
							width: apex2k + "%"
						},1000, "linear");				

						var apex4k = '<?php echo $apex4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(apex4k);
						apex4k = Number( (apex4k*10)/24 );	
						$( ".counter-4k" ).animate({
							width: apex4k + "%"
						},1000, "linear");						
					break;					
				   }
			
			
			
		});
		
		$(".choose-game").change(function(){
    		var game = $(this).val();
			switch(game){
					
				   	case "Call of Duty Warzone":
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var warzonefullHD = '<?php echo $warzoneFullHD;?>';					
						var warzonetextHD = warzonefullHD;
						warzonefullHD = Number( (warzonefullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: warzonefullHD + "%"						
						},1000, "linear");
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(warzonetextHD);
						
						var warzone2k = '<?php echo $warzone2K;?>';
						var warzonetext2k = warzone2k;					
						warzone2k = Number( (warzone2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: warzone2k + "%"							
						},1000, "linear");				
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(warzonetext2k);
					
						var warzone4k = '<?php echo $warzone4K;?>';
						var warzonetext4k = warzone4k;					
						warzone4k = Number( (warzone4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: warzone4k + "%"							
						},1000, "linear");						
                        $(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(warzonetext4k);
						break;
					
					case "Cyberpunk 2077":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var cyberpunkfullHD = '<?php echo $cyberpunkFullHD;?>';
						var cyberpunktextfullHD = cyberpunkfullHD;					
						cyberpunkfullHD = Number( (cyberpunkfullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: cyberpunkfullHD + "%"
						},1000, "linear");
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(cyberpunktextfullHD);

						var cyberpunk2k = '<?php echo $cyberpunk2K;?>';
						var cyberpunktext2k = cyberpunk2k;						
						cyberpunk2k = Number( (cyberpunk2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: cyberpunk2k + "%"
						},1000, "linear");	
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(cyberpunktext2k);

						var cyberpunk4k = '<?php echo $cyberpunk4K;?>';
						var cyberpunktext4k = cyberpunk4k;						
						cyberpunk4k = Number( (cyberpunk4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: cyberpunk4k + "%"
						},1000, "linear");		
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(cyberpunktext4k);
					break;
					case "Outriders":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var outridersfullHD = '<?php echo $outridersFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(outridersfullHD);						
						outridersfullHD = Number( (outridersfullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: outridersfullHD + "%"
						},1000, "linear");
						

						var outriders2k = '<?php echo $outriders2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(outriders2k);
						outriders2k = Number( (outriders2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: outriders2k + "%"
						},1000, "linear");				

						var outriders4k = '<?php echo $outriders4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(outriders4k);
						outriders4k = Number( (outriders4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: outriders4k + "%"
						},1000, "linear");						
					break;		
					case "Dota 2":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var dota2fullHD = '<?php echo $dotaFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(dota2fullHD);
						dota2fullHD = Number( (dota2fullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: dota2fullHD + "%"
						},1000, "linear");

						var dota22k = '<?php echo $dota2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(dota22k);
						dota22k = Number( (dota22k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: dota22k + "%"
						},1000, "linear");				

						var dota24k = '<?php echo $dota4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(dota24k);
						dota24k = Number( (dota24k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: dota24k + "%"
						},1000, "linear");						
					break;		
					case "CS GO":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var csgofullHD = '<?php echo $csgoFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(csgofullHD);
						csgofullHD = Number( (csgofullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: csgofullHD + "%"
						},1000, "linear");

						var csgo2k = '<?php echo $csgo2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(csgo2k);
						csgo2k = Number( (csgo2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: csgo2k + "%"
						},1000, "linear");				

						var csgo4k = '<?php echo $csgo4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(csgo4k);
						csgo4k = Number( (csgo4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: csgo4k + "%"
						},1000, "linear");						
					break;
					case "Metro Exodus":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var metrofullHD = '<?php echo $metroFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(metrofullHD);
						metrofullHD = Number( (metrofullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: metrofullHD + "%"
						},1000, "linear");

						var metro2k = '<?php echo $metro2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(metro2k);
						metro2k = Number( (metro2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: metro2k + "%"
						},1000, "linear");				

						var metro4k = '<?php echo $metro4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(metro4k);
						metro4k = Number( (metro4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: metro4k + "%"
						},1000, "linear");						
					break;		
					case "Resident Evil Village":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var residentfullHD = '<?php echo $residentFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(residentfullHD);
						residentfullHD = Number( (residentfullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: residentfullHD + "%"
						},1000, "linear");

						var resident2k = '<?php echo $resident2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(resident2k);
						resident2k = Number( (resident2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: resident2k + "%"
						},1000, "linear");				

						var resident4k = '<?php echo $resident4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(resident4k);
						resident4k = Number( (resident4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: resident4k + "%"
						},1000, "linear");						
					break;		
					case "Rust":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var rustfullHD = '<?php echo $rustFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(rustfullHD);
						rustfullHD = Number( (rustfullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: rustfullHD + "%"
						},1000, "linear");

						var rust2k = '<?php echo $rust2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(rust2k);
						rust2k = Number( (rust2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: rust2k + "%"
						},1000, "linear");				

						var rust4k = '<?php echo $rust4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(rust4k);
						rust4k = Number( (rust4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: rust4k + "%"
						},1000, "linear");						
					break;	
					case "Apex":	
						$(".bm-single-product-fps-container-blocks-second-counter").css("width","0%");
						var apexfullHD = '<?php echo $apexFullHD;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.fullhd").text(apexfullHD);
						apexfullHD = Number( (apexfullHD*10)/36 );	
						$( ".counter-fullhd" ).animate({
							width: apexfullHD + "%"
						},1000, "linear");

						var apex2k = '<?php echo $apex2K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.2k").text(apex2k);
						apex2k = Number( (apex2k*10)/36 );	
						$( ".counter-2k" ).animate({
							width: apex2k + "%"
						},1000, "linear");				

						var apex4k = '<?php echo $apex4K;?>';
						$(".bm-single-product-fps-container-blocks-second-container-fps__text.4k").text(apex4k);
						apex4k = Number( (apex4k*10)/36 );	
						$( ".counter-4k" ).animate({
							width: apex4k + "%"
						},1000, "linear");						
					break;					
				   }			
		});
		
	});
</script>
<script>

	$(function() {

		$(".pdf").click(function(){

			var mainImage = $(".wp-post-image").attr("src");
			var productTitle = $(".product_title").text();

			var productVideo = $(".videokarta-attr").text();
			var productProc = $(".proczessor-attr").text();
			var productMaterin = $(".materinskaya_plata-attr").text();
			var productOpera = $(".operativnaya_pamyat-attr").text();
			var productSSD = $(".ssd_nakopitel-attr").text();
			var productHHD = $(".zhestkij_disk-attr").text();
			var productBp = $(".blok_pitaniya-attr").text();
			var productKorpus = $(".korpus-attr").text();
			var productSSD2 = $(".ssd2_nakopitel-attr").text();
			var productSVO = $(".svo-attr").text();
			var productKulera = $(".kulera-attr").text();
			var productPrice = $(".bm-single-product-price-buttons bdi").text();
			
			var arrayConfig = [];
			
			if (productVideo != ""){
				arrayConfig.push([ { text: 'Видеокарта', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productVideo, color: "#fff", fontSize: 12, lineHeight: 1,margin: [ 0, -5, 0, 10 ]}]);
			}
			if (productProc != ""){
				arrayConfig.push([ { text: 'Процессор', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productProc, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}
			if (productMaterin != ""){
				arrayConfig.push([ { text: 'Материнская плата', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productMaterin, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}			
			if (productOpera != ""){
				arrayConfig.push([ { text: 'Оперативная память', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productOpera, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}
			if (productSSD != ""){
				arrayConfig.push([ { text: 'SSD M2', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productSSD, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}
			if (productHHD != ""){
				arrayConfig.push([ { text: 'HDD', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productHHD, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}
			if (productBp != ""){
				arrayConfig.push([ { text: 'Блок питания', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productBp, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}			
			if (productKorpus != ""){
				arrayConfig.push([ { text: 'Корпус', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productKorpus, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}
			if (productSSD2 != ""){
				arrayConfig.push([ { text: 'SSD 2.5', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productSSD2, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}
			if (productSVO != ""){
				arrayConfig.push([ { text: 'Охлаждение', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productSVO, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}
			if (productKulera != ""){
				arrayConfig.push([ { text: 'Кулера', bold: true , color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productKulera, color: "#fff", fontSize: 12, lineHeight: 1, margin: [ 0, -5, 0, 10 ]} ]);
			}				
			arrayConfig.push([ { text: 'Итого', bold: true , color: "#fff", fontSize: 12, alignment: "left", lineHeight: 1, margin: [ 0, 10, 0, 10 ]}, { text: productPrice ,bold: true, color: "#fff", fontSize: 12, alignment: "right", lineHeight: 1, margin: [ 0, 10, 0, 10 ]} ]);			
		
			
			
			
			var docInfo = {

			 info: {
			  title: productTitle,
			  author:'Boiling Machine',
			  subject:'Коммерческое предложение',
			  keywords:'Коммерческое предложение'
			 },

			 pageSize:'A4',
			 pageOrientation:'portrait',
			 pageMargins:[50,50,30,60],

			pageSize: {
			  width: 595.28,
			  height: 841.89  
			},
			background: function () {
				return {
					canvas: [
						{
							type: 'rect',
							x: 0, y: 0, w: 595.28, h: 841.89,
							color: '#000'
						}
					]
				};
			},

			 content: [


			{
				alignment: 'justify',

				columns: [
					{
					image: 'main',
					width: 150	
					},
					{									

						text: [

							{text: "Boiling Machine", fontSize: 38, color: "#fff", margin: [ 30, 45, 0, 0 ]},
							{text: '\n'},
							{text: productTitle, fontSize: 38, color: "red", margin: [ 30, 10, 0, 0 ]}

						],margin: [ 25, 45, 0, 0 ]


					}
				]

			},
				 {

					 table: {

						headerRows: 2,
						widths: [ 175, 325 ],

						body: arrayConfig
					  },
					 margin: [ 0, 70, 0, 0 ]


				 },
			{
				alignment: 'justify',

				columns: [
					{
					image: 'bmWhite',
					width: 100	
					},
					{									

						text: [

							{text: "«ООО «Бойлинг Машина»", fontSize: 9, color: "#fff",bold: true, margin: [ 0, 5, 0, 0 ], alignment: "right"},
							{text: '\n'},
							{text: "8(800) 350-83-39", fontSize: 9, color: "#fff", margin: [ 0, 5, 0, 0 ], alignment: "right"},
							{text: '\n'},
							{text: "service@boiling-machine.ru", fontSize: 9, color: "#fff", margin: [ 0, 5, 0, 0 ], alignment: "right"},
							{text: '\n'},
							{text: "Москва, Спартаковский пер., д. 2, стр.  1, офис 3", fontSize: 9, color: "#fff", margin: [ 0, 5, 0, 0 ], alignment: "right"},
							{text: '\n'},
							{text: "ИНН 9701117194", fontSize: 9, color: "#fff", margin: [ 0, 5, 0, 0 ], alignment: "right"},
							{text: '\n'},
							{text: "КПП 770101001", fontSize: 9, color: "#fff", margin: [ 0, 5, 0, 0 ], alignment: "right"},
							{text: '\n'},
							{text: "ОГРН 1187746731226", fontSize: 9, color: "#fff", margin: [ 0, 5, 0, 0 ], alignment: "right"},
							{text: '\n'},
							{text: "www.boiling-machine.ru", fontSize: 9, color: "#fff", margin: [ 0, 5, 0, 0 ], alignment: "right"}

						]


					}
				],margin: [ 0, 50, 0, 0 ]



			}								 


			 ],

			  images: {

				main: mainImage,
				bmWhite: "https://boiling-machine.ru/wp-content/uploads/bm-white1.png"
			  }								

			}						

			pdfMake.createPdf(docInfo).download(productTitle);							

		});



	});

</script>