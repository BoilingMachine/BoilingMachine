<?php // include "chairs/components/header.php"; ?>
<? get_header(); ?>
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs.css" media="all">
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs-single.css" media="all">



<?php global $product; ?>
<? define('postID', get_the_ID() ); ?>
<?php
	$prod_title = get_the_title();	
	$markas = get_field('marka');
	$series = get_field('seriya');	
	$models = get_field('model');	
	$colors = get_field('czvet');
	$mater_siden = get_field('material_sidenya');
	$tip_podloks = get_field('tip_podlokotnikov');	
	$ugol_nalkons = get_field('ugol_naklona_spinki');
	$mechanizms = get_field('mehanizm_kachaniya');	
	$gazlifts = get_field('gazlift');
	$material_krestovins = get_field('material_krestoviny');
	$rolikis = get_field('roliki');	
	$podushkis = get_field('podushki');
	$ves_nettos = get_field('ves_netto');
	$garantiyas = get_field('garantiya');	
	$ves = 	get_field('ves');
	$rosts = 	get_field('rost');
	$kreplenie_poyasnichnoj_podushki = get_field('kreplenie_poyasnichnoj_podushki');
	$nalichierefpod = get_field('reguliruemaya_poyasnichnaya_podderzhka');
	$vesbruttos = get_field('ves_brutto');
	$gabaritys = get_field('gabarity_upakovki_dxshxv');

	function declOfNum($num, $titles) {
		$cases = array(2, 0, 1, 1, 1, 2);

		return $num . " " . $titles[($num % 100 > 4 && $num % 100 < 20) ? 2 : $cases[min($num % 10, 5)]];
	}

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
                case 'Мультиколор': return 'linear-gradient(217deg, rgba(255,0,0,1), rgba(255,0,0,0) 70.71%), linear-gradient(127deg, rgba(0,255,0,1), rgba(0,255,0,0) 70.71%), linear-gradient(336deg, rgba(0,0,255,1), rgba(0,0,255,0) 70.71%) ';
		}	

	}



?>
<div class="bm-single-chairs-container" id="app">
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
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-single-chairs-picture-info">
			<div class="bm-single-chairs-picture-info-container">
				<div class="bm-single-chairs-picture">
					<div class="bm-product-thumbnails">
						<ol>
							<li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" class="img-fluid" > </a> </li>
							<?php 
								$attachment_ids = $product->get_gallery_image_ids();
								foreach( $attachment_ids as $key=>$attachment_id ) {
									$image_link = wp_get_attachment_url( $attachment_id ); ?>
									<li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="<?php echo $key+1; ?>" data-target="#custCarousel"> <img src="<?php echo $image_link; ?>" class="img-fluid" > </a> </li>
							<?php }	?>	
							<?php if (get_field('videoobzor')): ?>
							     <li class="list-inline-item video-obzor-cont"> <a href="#modal-videoobzor" uk-toggle class="video-obzor-con"><img src="/wp-content/uploads/ytv-svg.svg" class="video-obzor" alt="Ссылка на видеобзор - <?php the_title(); ?>"></a></li>
							<?php endif; ?>
						</ol>						
					</div>
					<div id="custCarousel" class="carousel-block carousel slide"   >
						<div class="carousel-inner" uk-grid="" uk-lightbox="">
							<div class="carousel-item active"><a href="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>"><img alt="<?php the_title(); ?>" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>"></a></div>
							<?php 
								foreach( $attachment_ids as $key=>$attachment_id ) {
									$image_link = wp_get_attachment_url( $attachment_id ); ?>
							<div class="carousel-item"><a href="<?php echo $image_link; ?>"><img alt="<?php the_title(); ?> - изображение № <?php echo $key + 1; ?>" src="<?php echo $image_link; ?>"></a></div>
							<?php }	?>	
						</div> 
					</div>  			
				</div>	
				<?php
					// Подключение гиф анимаций
					require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/under-image.php';
				?>
			</div>
			<div class="bm-single-chairs-info">
				<div class="bm-single-chairs-info-container">
					<h1 class="bm-single-chairs-info-container__title" product_id="<?php echo $product->get_id(); ?>">
						<?php the_title(); ?>
					</h1>
					<div class="rating-stock-container">
						<div class="stock-container">
							<p class="stock-container__text">
								<?php 
									if ($product->is_type( 'simple' )):
										$stock = $product->get_stock_status(); 
										switch($stock){
											case 'instock':
												echo 'В наличии';
											?>
											<style>
												.stock-container__text::before{background: #60BB49;}																
											</style>
											<?php	
											break;
											case 'outofstock':
												echo 'Нет в наличии';
											?>
											<style>
												.stock-container__text::before{background: #EF2525;}																						
											</style>								
											<?php
											break;
											case 'onbackorder':
												echo 'Предзаказ';
											?>
											<style>
												.stock-container__text::before{background: #B8B8B8;}																					
											</style>								
											<?php											
											break;											
										}
									endif;
								?>
								<?php
									if ($product->is_type( 'variable' )):
										$variations = $product->get_available_variations();
										foreach($variations as $variation):	
											$variation_obj = wc_get_product($variation['variation_id']);
											$attrib = implode('-', $variation['attributes']);
											switch($attrib){
												case 'net-net-net-net-net':	
								?>
												<?php $status = $variation_obj->get_stock_status();	?>																							
												<?php
													switch($status){
														case 'instock':
															echo 'В наличии';
														?>
														<style>
															.stock-container__text::before{background: #60BB49;}																
														</style>
														<?php	
														break;
														case 'outofstock':
															echo 'Нет в наличии';
														?>
														<style>
															.stock-container__text::before{background: #EF2525;}																						
														</style>								
														<?php
														break;
														case 'onbackorder':
															echo 'Предзаказ';
														?>
														<style>
															.stock-container__text::before{background: #B8B8B8;}																					
														</style>								
														<?php											
														break;											
													}
												?>
												
									<?php
												break;
											}
										endforeach;							
									endif;
								?>
							</p>
						</div>
						<?php if ($product->get_rating_count() > 0){ ?>
						<div class="bm-chairs-rating-container">
							<a class="uncor chairs-rat-link" href="#reviews">
							<div class="bm-chairs-rating">
								<?php $rating  = $product->get_average_rating(); ?>																												
								<?for ($n = 1; $n <= 5; $n++):?>
									<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.5 14.0958L3.24645 17L4.25 10.8489L0 6.49302L5.87322 5.59626L8.5 0L11.1268 5.59626L17 6.49302L12.75 10.8489L13.7536 17L8.5 14.0958Z" fill="<?=((float)$rating >= $n)? '#EF2525' : '#C7C7C7'?>"/>
									</svg>
								<?endfor;?>																	
							</div>	
							</a>
						</div>
						<?php } ?>						
					</div>
					<div class="rost-ves">
						<? if( get_field('rost') ): ?>
						<p class="rost-ves-param">Рекомендуемый рост <span><? the_field('rost'); ?> см</span></p>
						<? endif; ?>
						<? if( get_field('ves') ): ?>
						<p class="rost-ves-param">Рекомендуемый вес <span><? the_field('ves'); ?> кг</span></p>
						<? endif; ?>						
					</div>
					<div class="active-color">
						<p class="active-color-text">
							<span>Цвет:</span>
							<?php foreach( $colors as $key=>$color ): 
								if($key > 0){
									echo ", $color";
								}else{
									echo $color;
								}											
							endforeach; ?>
						</p>	
					</div>
					<div class="bm-chairs-colors">											
						<ul class="bm-chairs-spisok">
							<li class="bm-chairs-spisok-active">
								<?php 	
									$coll = get_field('czvet');
									$czvet = explode(" | ", $coll[0]);
								?>			
								<div class="bm-chairs-prod-color" style="background: <?php echo retColor($czvet[0]); ?>"></div>																					
							</li>
							<?php
							$terms = wc_get_product_terms( $post->ID, 'product_cat', array( 'orderby' => 'parent', 'order' => 'DESC' ) );
							$modelProd = get_post_meta( $product->get_id(), 'model', true );

							$args = array( 
								'post_type' => 'product',
								'product_cat' => $terms[0]->slug,
								'posts_per_page' => -1,
                                'meta_key' => 'rejting_kresla_po_czvetu',
                                'orderby' => 'meta_value_num',
                                'order' => 'ASC',
							);
							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php 
									$model = get_post_meta( $loop->post->ID, 'model', true ); 
									if ($modelProd[0] == $model[0] && $product->get_id() != $loop->post->ID){
										$coloring = get_post_meta( $loop->post->ID, 'czvet', true );
										$coloringCzvet = explode(" | ", $coloring[0]);
							?>
								<li>
									<a href="<?php echo get_permalink($loop->post->ID) ?>">
										<div class="bm-chairs-prod-color" style="background: <?php echo retColor($coloringCzvet[0]); ?>"></div>	
									</a>
								</li>
							<?php									
									}	
							?>
							<?php endwhile; wp_reset_query();  ?>									
						</ul>						
					</div>	
					<? if ($product->is_type( 'simple' )): ?>
					<div class="bm-chair-price">
						<div class="bm-single-product-price-buttons">
							<div class="bm-single-product-price-buttons__price">

								<?php if ($product->get_sale_price() ){ ?>

								<p class="bm-single-product-price-buttons__price_sale"><?php echo wc_price( $product->get_sale_price() * 1.00 );?></p>
								<p class="bm-single-product-price-buttons__price__text">								
									<?php echo wc_price( $product->get_regular_price() * 1.00 ); ?>
								</p>	
								<span class="bm-single-product-price-buttons__price__text-sale">
										-
										<?php 
											echo (100 - (round(($product->get_sale_price()*100)/$product->get_regular_price())));										
										?>
										%
								</span>	
								<style>
									.bm-single-product-price-buttons__price__text{
										font-style: normal;
										font-weight: normal;
										font-size: 17px;
										line-height: 130%;
										letter-spacing: 0.03em;
										color: #848484;
										text-decoration: line-through;
										float: left;
										margin: 0;
										margin-right: 20px;
									}
									.bm-single-product-price-buttons__price__text-sale{								
										border-radius: 2px;
										padding: 2px 7px;
										font-style: normal;
										font-weight: bold;
										font-size: 15px;
										line-height: 110%;
										letter-spacing: 0.03em;
										color: #fff;
										background: #e5670e;
										padding: 2px 7px;
									}
								</style>
								<?php }else{ ?>
								<p class="bm-single-product-price-buttons__price__text">
									<span class="dyn-price"><?php echo number_format($product->get_regular_price(), 0, '', ' '); ?></span>
									<span>р</span>								
								</p>
								<style>
									.bm-single-product-price-buttons__price__text{
										font-style: normal;
										font-weight: 600;
										font-size: 36px;
										line-height: 140%;
										color: #000000;
										margin: 0;
									}							
								</style>
								<?php } ?>
							</div>
							<div class="price-changes">
								<p class="price-changes__title">Цена изменена</p>
								<p class="price-changes__info">
									1 товар + <span class="price-changes__info-counter"></span> <span class="price-changes__info-text"></span>
								</p>																										
							</div>
						</div>						
					</div>	
					<?php endif; ?>
					<?php if ($product->is_type( 'variable' )): ?>
						<div class="bm-chair-price">
							<div class="bm-single-product-price-buttons">
								<div class="bm-single-product-price-buttons__price">
									<p class="bm-single-product-price-buttons__price__text">
										<span class="dyn-price">
										<?php 
											$price = 0;
										  foreach($product->get_available_variations() as $pav){
											  $def=true;
											  foreach($product->get_variation_default_attributes() as $defkey=>$defval){
												  if($pav['attributes']['attribute_'.$defkey]!=$defval){
													  $def=false;             
												  }   
											  }
											  if($def){
												  $price = $pav['display_price'];         
											  }
										  }
                                        update_field('czena_dlya_filtra', $price, $product->get_id());
										echo wc_price($price); 
										?>										
										</span>
							
									</p>
									<style>
										.bm-single-product-price-buttons__price__text{
											font-style: normal;
											font-weight: 600;
											font-size: 36px;
											line-height: 140%;
											color: #000000;
											margin: 0;
										}							
									</style>
																</div>
								<div class="price-changes">
									<p class="price-changes__title">Цена изменена</p>
									<p class="price-changes__info">
										1 товар + <span class="price-changes__info-counter"></span> <span class="price-changes__info-text"></span>
									</p>																										
								</div>
							</div>						
						</div>					
					<?php endif; ?>
					<div class="bm-chairs-addtocart">
						<?php
						$product_main;
						$status;
						 ?> 
							<?php if ($product->is_type( 'variable' )): ?>
								<?php
									$variations = $product->get_available_variations();
									$main_chair_product = null;
									foreach($variations as $variation):	
										$variation_obj = wc_get_product($variation['variation_id']);
										$attrib = implode('-', $variation['attributes']);
										switch($attrib){
											case 'net-net-net-net-net':	
								?>
											<?php 
												$product_main =  $variation_obj; 
												$status = $variation_obj->get_stock_status();
												$main_chair_product = $variation_obj->get_id();
											?>	
												<a href="<?php echo $product->add_to_cart_url(); ?>" data-product_id="<?php echo $variation_obj->get_id(); ?>"  rel="nofollow" class="chair-link-add-cart single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart">В корзину</a>	
								<?php
											break;
										}
									endforeach;
						
								?>
							<?php endif; ?>		
							<?php if ($product->is_type( 'simple' )): ?>
								<?php  
									$stat_simple = $product->get_stock_status();
									if ($stat_simple == 'instock'):
								?>
								
									<a href="<?php echo $product->add_to_cart_url(); ?>" data-product_id="<?php echo $product->get_id(); ?>"  rel="nofollow" class="single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart relocate-checkout">В корзину</a>	
								<?php endif; ?>		
						<?php endif; ?>	
							
					</div>
					<div class="bm-chairs">
						<?php if( get_field('prosmotr_kresla_v_demozone') ): ?>
							<div class="bm-chairs-info-block">
								<div class="bm-chairs-info-block-img">
									<img src="/wp-content/uploads/demozone-image.png">
								</div>
								<div class="bm-chairs-info-block-text">
									<p>Это кресло можно посмотреть в демозоне</p>																
								</div>
							</div>
						<?php endif; ?>
						<div class="bm-chairs-info-block">
							<div class="bm-chairs-info-block-img">
								<img src="/wp-content/uploads/delivery-free.svg">
							</div>
							<div class="bm-chairs-info-block-text">
								<p>Бесплатная доставка и сборка кресла внутри МКАД</p>
                                <button class="single-filter-help-icon" type="button">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                </style>
                                        <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                        <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                "/>
                                        <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                        />
                                </svg>
                                </button>
                                <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                    По Москве в пределах МКАД — бесплатно<br><br>
                                    По МО за пределами МКАД — 30 руб. за км<br><br>
                                    По России и СНГ — по тарифам транспортной компании
                                    <a href="/benefits/besplatnaya-dostavka/" class="filter-more" target="_blank">Подробнее</a>
                                </div>
							</div>
						</div>
						<div class="bm-chairs-info-block">
							<div class="bm-chairs-info-block-img">
								<img src="/wp-content/uploads/garanty-chairs.svg">
							</div>
							<div class="bm-chairs-info-block-text">
								<p>
									Гарантия
									<?php foreach( $garantiyas as $key=>$garantiya ): 
										if($key > 0){
											echo ", $garantiya";
										}else{
											echo $garantiya;
										}												   
									endforeach; ?>
								</p>	
                                    <button class="single-filter-help-icon" type="button">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                </style>
                                            <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                            <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                "/>
                                            <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                            />
                                </svg>
                                    </button>	
                                <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                    В установленный срок вы можете бесплатно отремонтировать кресло в сервисном центре при соблюдении всех условий гарантии.
									<a href="/igrovye-kresla/garantiya/" class="filter-more" target="_blank">Подробнее</a>
                                </div>									
																							
							</div>
						</div>	
						<div class="user-info">
							<p class="user-info__text">
								Актуальную стоимость и сроки поставки товара вы можете уточнить, оставив заявку на сайте
							</p>
						</div>							
					</div>
						
					
	
					<div class="dop-uslugi-container">
								<div class="wc-pao-addon-rasshirennaya-garantiya first">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Расширенная гарантия</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Если у вас сломается кресло, мы в течение 24 часов привезем ему замену, а ваше – отремонтируем и вернем в целости.
													<a href="/igrovye-kresla/rasshirennaya-garantiya/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>
										</div>
										<div class="dop-usluga-header-price">
											<?php
                                                $arendapr = (int)($product->get_regular_price() * 0.1);
                                                $arendapr = round($arendapr, -3) - 10;                                              
											?>
											<?php echo wc_price( $arendapr ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Дополнительный год гарантии
										</p>
										<div class="add-cart-test-kresla">
											<form 
												  class="cart" 
												  action="<? echo get_permalink( $product->get_id() ) ?>" 
												  method="post" 
												  enctype="multipart/form-data">
												<input type="hidden" id="price_prod" name="price_prod" value="<? echo $arendapr; ?>" />
												<button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button bm-chair-option-add"></button>
											</form>											
										</div>
									</div>
								</div>
								<div class="wc-pao-addon-rasshirennaya-garantiya second">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Тест кресла на дому</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Протестируйте кресла в реальных игровых и рабочих условиях, чтобы купить то, что подойдет лучше.
													<a href="/igrovye-kresla/test/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>						
										</div>
										<div class="dop-usluga-header-price">
											<?php 
												 $arendapr = 9990;
											?>		
											<?php echo wc_price( $arendapr ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Доставим до 2-х кресел на тест.  В случае покупки сумма услуги засчитывется в счёт кресла
										</p>
										<div class="add-cart-test-kresla">
											<form 
												  class="cart" 
												  action="<? echo get_permalink( $product->get_id() ) ?>" 
												  method="post" 
												  enctype="multipart/form-data">
												<input type="hidden" id="price_test_chair" name="price_test_chair" value="<? echo $arendapr; ?>" />
												<button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button bm-chair-option-add"></button>
											</form>	

										</div>
									</div>	
								</div>						
								<div class="wc-pao-addon-rasshirennaya-garantiya second">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Аэрография</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Добавьте рисунок любимого персонажа или принт из известной игры, фильма и мультсериала.
													<a href="/igrovye-kresla/aerografiya/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>						
										</div>
										<div class="dop-usluga-header-price">
											<?php 
												 $arendapr = 39990;
											?>		
											<?php echo wc_price( $arendapr ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Закажите кресло с уникальным рисунком, выполненным при помощи аэрографии.
										</p>
										<div class="add-cart-test-kresla">
											<form 
												  class="cart" 
												  action="<? echo get_permalink( $product->get_id() ) ?>" 
												  method="post" 
												  enctype="multipart/form-data">
												<input type="hidden" id="price_aerographia_chair" name="price_aerographia_chair" value="<? echo $arendapr; ?>" />
												<button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button bm-chair-option-add"></button>
											</form>	

										</div>
									</div>	
								</div>						
								<div class="wc-pao-addon-rasshirennaya-garantiya second">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Вышивка</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Закажите игровое кресло с вышитым логотипом, артом или игровым никнеймом и сделайте оригинальный подарок себе, друзьям или близким.
													<a href="/igrovye-kresla/vyshivka/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>							
										</div>
										<div class="dop-usluga-header-price">
											<?php 
												 $arendapr = 29990;
											?>		
											<?php echo wc_price( $arendapr ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Преобразите кресло, добавив собственные надпись и логотип.
										</p>
										<div class="add-cart-test-kresla">
											<form 
												  class="cart" 
												  action="<? echo get_permalink( $product->get_id() ) ?>" 
												  method="post" 
												  enctype="multipart/form-data">
												<input type="hidden" id="price_vishivka_chair" name="price_vishivka_chair" value="<? echo $arendapr; ?>" />
												<button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button bm-chair-option-add"></button>
											</form>	

										</div>
									</div>	
								</div>						
							<div class="wc-pao-addon-rasshirennaya-garantiya third">
								<div class="dop-usluga-header">
									<div class="dop-usluga-header-title">
										<p class="header-title__title">Аренда кресла</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Возьмите в аренду крутое игровое кресло для съемки, стрима или киберспортивных соревнований.
													<a href="/igrovye-kresla/arenda/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>						
									</div>
								</div>
								<div class="usluga-options">	
									<div class="usluga-labels">											
											<label class="container-usluga">
												<?php 
												$arendapr = (int)($product->get_regular_price() * 0.3);
												$arendapr = round($arendapr, -3) - 10;
												?>													
												<input type="checkbox" class="input-usluga" id="input-chair-arenda-1-day" arendaPrice="<? echo $arendapr; ?>" name="1 день">
												<span class="checkmark"></span>
												<span class="arenda-title mult">
													1 день
													<span class="arenda-title-price">
														<?php echo wc_price( $arendapr ); ?>														
													</span>											
												</span>
											</label>																														
											<label class="container-usluga">
												<?php 
												$arendapr = (int)($product->get_regular_price() * 0.4);
												$arendapr = round($arendapr, -3) - 10;
												?>													
												<input type="checkbox" class="input-usluga" id="input-chair-arenda-7-day" arendaPrice="<? echo $arendapr; ?>" name="7 дней">
												<span class="checkmark"></span>
												<span class="arenda-title mult">
													7 дней
													<span class="arenda-title-price">
														<?php echo wc_price( $arendapr ); ?>														
													</span>											
												</span>
											</label>																			
											<label class="container-usluga">
												<?php 
												$arendapr = (int)($product->get_regular_price() * 0.5);
												$arendapr = round($arendapr, -3) - 10;
												?>													
												<input type="checkbox" class="input-usluga" id="input-chair-arenda-14-day" arendaPrice="<? echo $arendapr; ?>" name="14 дней">
												<span class="checkmark"></span>
												<span class="arenda-title mult">
													14 дней
													<span class="arenda-title-price">	
														<?php echo wc_price( $arendapr ); ?>
													</span>											
												</span>
											</label>																													
									</div>
									<div class="usluga-button-add">
											<form 
												  class="cart" 
												  action="<? echo get_permalink( $product->get_id() ) ?>" 
												  method="post" 
												  enctype="multipart/form-data">
												<input type="hidden" id="price_arenda_chair" name="price_arenda_chair" value="" />
												<input type="hidden" id="price_arenda_chair_name" name="price_arenda_chair_name" value="" />
												
												<button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="add-cart-chair-arenda single_add_to_cart_button button alt wp-element-button bm-chair-option-add"></button>
											</form>																						
									</div>
								</div>								
							</div>												
					</div>					
					
				
				

				
				
				
					
					 
						<?php if ($product->is_type( 'variable' )): ?>
							
						<div class="dop-uslugi-container">
								
						<?php 
							$variations = $product->get_available_variations();
							
							$variations_ids = new stdClass();
							
							// net-net 1-kreslo-net net-1-mesyacz net-14-dnej net-7-dnej
							foreach($variations as $variation):							
								$variation_obj = wc_get_product($variation['variation_id']);
								$attrib = implode('-', $variation['attributes']);

								switch($attrib){
									case '1-kreslo-net-net-net-net':
										$variations_ids->test_kresla = $variation['variation_id'];
										break;
									case 'net-14-dnej-net-net-net':
										$variations_ids->arenda1m = $variation['variation_id'];
										break;	
									case 'net-7-dnej-net-net-net':
										$variations_ids->arenda14d = $variation['variation_id'];
										break;
									case 'net-1-dnej-net-net-net':
										$variations_ids->arenda7d = $variation['variation_id'];
										break;	
									case 'net-net-1-god-net-net':
										$variations_ids->god1 = $variation['variation_id'];
										break;
									case 'net-net-net-est-net':
										$variations_ids->aerografia = $variation['variation_id'];
										break;
									case 'net-net-net-net-est':
										$variations_ids->visivka = $variation['variation_id'];
										break;
								} 
							endforeach;	
						?>
                            
						<?php if ($variations_ids != null): ?>
							<?php if( $variations_ids->test_kresla != null ): ?>
								<?php
									$product_test = wc_get_product($variations_ids->god1);
								?>
								<div class="wc-pao-addon-rasshirennaya-garantiya first">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Расширенная гарантия</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Если у вас сломается кресло, мы в течение 24 часов привезем ему замену, а ваше – отремонтируем и вернем в целости.
													<a href="/igrovye-kresla/rasshirennaya-garantiya/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>
										</div>
										<div class="dop-usluga-header-price">
											<?php
                                                $arendapr = (int)($product_main->get_regular_price() * 0.1);
                                                $arendapr = round($arendapr, -3) - 10;

                                                $arendapr_price = $arendapr + $product_main->get_regular_price();
                                                $product_test->set_regular_price($arendapr_price);
                                                $product_test->save();
											?>
											<?php echo wc_price( $arendapr ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Дополнительный год гарантии
										</p>
										<div class="add-cart-test-kresla">
											<?php

												$cart_item_key = WC()->cart->generate_cart_id( $product_test->get_ID() );
												$in_cart              = WC()->cart->find_product_in_cart( $cart_item_key );
												$cart_item_remove_url = wc_get_cart_remove_url( $cart_item_key );

											?>
											<a
											   href="<?php echo $product_test->add_to_cart_url(); ?>"
											   data-quantity="1"
											   class="add-cart-test-kresla-link button product_type_simple add_to_cart_button ajax_add_to_cart"
											   data-product_id="<?php echo $product_test->get_id(); ?>"
											   rel="nofollow"
											   id="add-option-<?php echo $variations_ids->test_kresla; ?>"
											 >
											   <img src="/wp-content/uploads/cart-single-chair-options.svg">
											</a>
											<a
											   class="delete-option button wc-forward"
											   id="delete-test-<?php echo $variations_ids->test_kresla; ?>"
											   data-in-cart-qty="1"
											   data-cart-item-key="<?php echo $cart_item_key; ?>"
											>
												<img src="/wp-content/uploads/cart-single-chair-options-close.svg">
											</a>

										</div>
									</div>
								</div>
							<?php endif; ?>




							<?php if( $variations_ids->test_kresla != null ): ?>
								<?php 
									$product_test = wc_get_product($variations_ids->test_kresla);
								?>
								<div class="wc-pao-addon-rasshirennaya-garantiya second">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Тест кресла на дому</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Протестируйте кресла в реальных игровых и рабочих условиях, чтобы купить то, что подойдет лучше.
													<a href="/igrovye-kresla/test/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>						
										</div>
										<div class="dop-usluga-header-price">
											<?php 
												/*
												$arendapr = (int)($product_main->get_regular_price() * 0.2);
												$arendapr = round($arendapr, -3) - 10;
												*/
												$product_test->set_regular_price(9990);
												$product_test->save();
											?>		
											<?php echo wc_price( $product_test->get_price() ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Доставим до 2-х кресел на тест.  В случае покупки сумма услуги засчитывется в счёт кресла
										</p>
										<div class="add-cart-test-kresla">
											<?php 

												$cart_item_key = WC()->cart->generate_cart_id( $product_test->get_ID() );
												$in_cart              = WC()->cart->find_product_in_cart( $cart_item_key );
												$cart_item_remove_url = wc_get_cart_remove_url( $cart_item_key );	

											?>
											<a 
											   href="<?php echo $product_test->add_to_cart_url(); ?>" 
											   data-quantity="1" 
											   class="add-cart-test-kresla-link button product_type_simple add_to_cart_button ajax_add_to_cart" 
											   data-product_id="<?php echo $product_test->get_id(); ?>" 
											   rel="nofollow"
											   id="add-option-<?php echo $variations_ids->test_kresla; ?>"
											 >
											   <img src="/wp-content/uploads/cart-single-chair-options.svg">
											</a>	
											<a 
											   class="delete-option button wc-forward" 
											   id="delete-test-<?php echo $variations_ids->test_kresla; ?>"
											   data-in-cart-qty="1"
											   data-cart-item-key="<?php echo $cart_item_key; ?>"
											>
												<img src="/wp-content/uploads/cart-single-chair-options-close.svg">
											</a>

										</div>
									</div>	
								</div>
							<?php endif; ?>
							
							
							<?php if( $variations_ids->aerografia != null ): ?>
								<?php 
									$product_test = wc_get_product($variations_ids->aerografia);
								?>
								<div class="wc-pao-addon-rasshirennaya-garantiya second">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Аэрография</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Добавьте рисунок любимого персонажа или принт из известной игры, фильма и мультсериала.
													<a href="/igrovye-kresla/aerografiya/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>						
										</div>
										<div class="dop-usluga-header-price">
											<?php 
												/*
												$arendapr = (int)($product_main->get_regular_price() * 0.2);
												$arendapr = round($arendapr, -3) - 10;
												*/
												$product_test->set_regular_price(39990);
												$product_test->save();
											?>		
											<?php echo wc_price( $product_test->get_price() ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Закажите кресло с уникальным рисунком, выполненным при помощи аэрографии.
										</p>
										<div class="add-cart-test-kresla">
											<?php 

												$cart_item_key = WC()->cart->generate_cart_id( $product_test->get_ID() );
												$in_cart              = WC()->cart->find_product_in_cart( $cart_item_key );
												$cart_item_remove_url = wc_get_cart_remove_url( $cart_item_key );	

											?>
											<a 
											   href="<?php echo $product_test->add_to_cart_url(); ?>" 
											   data-quantity="1" 
											   class="add-cart-test-kresla-link button product_type_simple add_to_cart_button ajax_add_to_cart" 
											   data-product_id="<?php echo $product_test->get_id(); ?>" 
											   rel="nofollow"
											   id="add-option-<?php echo $variations_ids->aerografia; ?>"
											 >
											   <img src="/wp-content/uploads/cart-single-chair-options.svg">
											</a>	
											<a 
											   class="delete-option button wc-forward" 
											   id="delete-test-<?php echo $variations_ids->aerografia; ?>"
											   data-in-cart-qty="1"
											   data-cart-item-key="<?php echo $cart_item_key; ?>"
											>
												<img src="/wp-content/uploads/cart-single-chair-options-close.svg">
											</a>

										</div>
									</div>	
								</div>
							<?php endif; ?>		
							
							<?php if( $variations_ids->visivka != null ): ?>
								<?php 
									$product_test = wc_get_product($variations_ids->visivka);
								?>
								<div class="wc-pao-addon-rasshirennaya-garantiya second">
									<div class="dop-usluga-header">
										<div class="dop-usluga-header-title">
											<p class="header-title__title">Вышивка</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Закажите игровое кресло с вышитым логотипом, артом или игровым никнеймом и сделайте оригинальный подарок себе, друзьям или близким.
													<a href="/igrovye-kresla/vyshivka/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>							
										</div>
										<div class="dop-usluga-header-price">
											<?php 
												/*
												$arendapr = (int)($product_main->get_regular_price() * 0.2);
												$arendapr = round($arendapr, -3) - 10;
												*/
												$product_test->set_regular_price(29990);
												$product_test->save();
											?>		
											<?php echo wc_price( $product_test->get_price() ); ?>
										</div>
									</div>
									<div class="dop-usluga-body">
										<p class="arenda-title">
											Преобразите кресло, добавив собственные надпись и логотип.
										</p>
										<div class="add-cart-test-kresla">
											<?php 

												$cart_item_key = WC()->cart->generate_cart_id( $product_test->get_ID() );
												$in_cart              = WC()->cart->find_product_in_cart( $cart_item_key );
												$cart_item_remove_url = wc_get_cart_remove_url( $cart_item_key );	

											?>
											<a 
											   href="<?php echo $product_test->add_to_cart_url(); ?>" 
											   data-quantity="1" 
											   class="add-cart-test-kresla-link button product_type_simple add_to_cart_button ajax_add_to_cart" 
											   data-product_id="<?php echo $product_test->get_id(); ?>" 
											   rel="nofollow"
											   id="add-option-<?php echo $variations_ids->visivka; ?>"
											 >
											   <img src="/wp-content/uploads/cart-single-chair-options.svg">
											</a>	
											<a 
											   class="delete-option button wc-forward" 
											   id="delete-test-<?php echo $variations_ids->visivka; ?>"
											   data-in-cart-qty="1"
											   data-cart-item-key="<?php echo $cart_item_key; ?>"
											>
												<img src="/wp-content/uploads/cart-single-chair-options-close.svg">
											</a>

										</div>
									</div>	
								</div>
							<?php endif; ?>	
							

						<?php endif; ?>	
							
						<?php if( $variations_ids->arenda7d != null || $variations_ids->arenda14d  || $variations_ids->arenda1m ): ?>
							<div class="wc-pao-addon-rasshirennaya-garantiya third">
								<div class="dop-usluga-header">
									<div class="dop-usluga-header-title">
										<p class="header-title__title">Аренда кресла</p>
											<div class="header-title-help">
												<button class="single-filter-help-icon" type="button">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
												<style type="text/css">
													.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
												</style>
														<path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
												C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
														<path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
												"/>
														<path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
												c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
												C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
												c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
														/>
												</svg>
												</button>	
												<div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
													Возьмите в аренду крутое игровое кресло для съемки, стрима или киберспортивных соревнований.
													<a href="/igrovye-kresla/arenda/" class="filter-more" target="_blank">Подробнее</a>
												</div>												
											</div>						
									</div>
								</div>
								<div class="usluga-options">	
									<div class="usluga-labels">
										<?php if ( $variations_ids->arenda7d != null ): ?>
											<?php $product_test = wc_get_product($variations_ids->arenda7d); ?>
											<label class="container-usluga">
												<input type="checkbox" class="input-usluga" id="input-<?php echo $product_test->get_id(); ?>" product_id="<?php echo $product_test->get_id(); ?>" link="<?php echo $product_test->add_to_cart_url(); ?>">
												<span class="checkmark"></span>
												<span class="arenda-title mult">
													1 день
													<span class="arenda-title-price">
														<?php 
															$arendapr = (int)($product_main->get_regular_price() * 0.3);
															$arendapr = round($arendapr, -3) - 10;
															$product_test->set_regular_price($arendapr);
															$product_test->save();
														?>		
														<?php echo wc_price( $arendapr ); ?>														
													</span>											
												</span>
											</label>																			
										<?php endif; ?>		
										<?php if ( $variations_ids->arenda14d != null ): ?>
											<?php $product_test = wc_get_product($variations_ids->arenda14d); ?>
											<label class="container-usluga">
												<input type="checkbox" class="input-usluga" id="input-<?php echo $product_test->get_id(); ?>" product_id="<?php echo $product_test->get_id(); ?>" link="<?php echo $product_test->add_to_cart_url(); ?>">
												<span class="checkmark"></span>
												<span class="arenda-title mult">
													7 дней
													<span class="arenda-title-price">
														<?php 
															$arendapr = (int)($product_main->get_regular_price() * 0.4);
															$arendapr = round($arendapr, -3) - 10;
															$product_test->set_regular_price($arendapr);
															$product_test->save();
														?>		
														<?php echo wc_price( $arendapr ); ?>														
													</span>											
												</span>
											</label>																			
										<?php endif; ?>	
										<?php if ( $variations_ids->arenda1m != null ): ?>
											<?php $product_test = wc_get_product($variations_ids->arenda1m); ?>
											<label class="container-usluga">
												<input type="checkbox" class="input-usluga" id="input-<?php echo $product_test->get_id(); ?>" product_id="<?php echo $product_test->get_id(); ?>" link="<?php echo $product_test->add_to_cart_url(); ?>">
												<span class="checkmark"></span>
												<span class="arenda-title mult">
													14 дней
													<span class="arenda-title-price">
														<?php 
															$arendapr = (int)($product_main->get_regular_price() * 0.5);
															$arendapr = round($arendapr, -3) - 10;
															$product_test->set_regular_price($arendapr);
															$product_test->save();
														?>		
														<?php echo wc_price( $arendapr ); ?>
													</span>											
												</span>
											</label>																			
										<?php endif; ?>											
									</div>
									<div class="usluga-button-add">
											<a 
											   href="" 
											   data-quantity="1" 
											   class="add-cart-test-kresla-link-arenda button product_type_simple add_to_cart_button ajax_add_to_cart" 
											   data-product_id="" 
											   rel="nofollow"
											   id="add-option"
											 >
											   <img src="/wp-content/uploads/cart-single-chair-options.svg">
											</a>	
											<a 
											   class="delete-option-arenda button wc-forward" 
											   id="delete-test-arenda"
											   data-in-cart-qty="1"
											   data-cart-item-key=""
											>
												<img src="/wp-content/uploads/cart-single-chair-options-close.svg">
											</a>										
									</div>
								</div>
								

							</div>
						<?php endif; ?>
										
					</div>
						
						<?php endif; ?>	
									


					
									
				</div>
			</div>
		</div>
	</div>
	<script>
	$(function(){
		$('.add-cart-test-kresla-link').click(function(){
			$(this).siblings('.delete-option').css("display","block");
			//$("#delete-test").css("display","initial");
			$(this).css("display","none");								
		});	

	
		$('.delete-option').click(function(){
			var prod_id = $(".bm-single-chairs-info-container__title").attr('product_id');
			var prod_variation = $(this).siblings('.add-cart-test-kresla-link').attr('data-product_id');
			var el = $(this);
			$.ajax({
				url: "https://boiling-machine.ru/wp-admin/admin-ajax.php",
				type: "POST",
				data: {action: 'remove_item_from_cart',product_id : prod_id, prod_var: prod_variation},
				dataType: 'json',
				cache: false,
				success: function(data){
					$(".basket-btn__counter").text(data);	
					el.css("display","none");
					el.siblings(".add-cart-test-kresla-link").css({'display': "block", 'pointer-events': "auto"});						
			   }				
			});												
		});		
			
		
		$('.add-cart-test-kresla-link-arenda').click(function(){
			$(this).siblings('.delete-option-arenda').css("display","block");
			$(this).css("display","none");
			$('.input-usluga').attr('disabled',true);
		});	
		$('.delete-option-arenda').click(function(){
			var prod_id = $(".bm-single-chairs-info-container__title").attr('product_id');
			var prod_variation = $(this).siblings('.add-cart-test-kresla-link-arenda').attr('data-product_id');
			var el = $(this);
			$.ajax({
				url: "https://boiling-machine.ru/wp-admin/admin-ajax.php",
				type: "POST",
				data: {action: 'remove_item_from_cart',product_id : prod_id, prod_var: prod_variation},
				dataType: 'json',
				cache: false,
				success: function(data){
					$(".basket-btn__counter").text(data);	
					el.css("display","none");
					el.siblings(".add-cart-test-kresla-link-arenda").css({'display': "block", 'pointer-events': "auto"});	
					$('.input-usluga').attr('disabled',false);
			   }				
			});												
		});	
		
		
		$('#add-garanty[type="checkbox"]').change(function(){
			check_Radio_input($(this));		
		});		
		
		$('.input-usluga[type="checkbox"]').change(function(){
			check_Radio_Checkb($(this));		
		});

		function check_Radio_input(rdb_new){
			if(rdb_new.is(':checked')){
				$('#price_arenda_chair').attr('value', rdb_new.attr('arendaPrice') );
			}
			else{
				$('.chair-link-add-cart').attr('href', rdb_new.attr('def_product'));
				$('.chair-link-add-cart').attr('data-product_id', rdb_new.attr('def_product_id') );
			}
		}		
		
		function check_Radio_Checkb(rdb_new){
			if(!rdb_new.is(':checked')){
				console.log('no');
			}
			else{
				$('#price_arenda_chair').attr('value', rdb_new.attr('arendaPrice'));
				$('#price_arenda_chair_name').attr('value', rdb_new.attr('name'));				
			}
		}		

		$(document).on('click', '.input-usluga', function() {      
			$('.input-usluga').not(this).prop('checked', false);   
			var checkedNum = $('.input-usluga:checked').length;
			if ( checkedNum > 0 ){
				$('.add-cart-chair-arenda').css('pointer-events','auto');
			}else{
				$('.add-cart-chair-arenda').css('pointer-events','none');
			} 						

		});		
		
	});
	</script>	

	<script>
		
		
		
		function numberWithSpaces(x) {
  			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		}
		function num_word(value, words){  
			value = Math.abs(value) % 100; 
			var num = value % 10;
			if(value > 10 && value < 20) return words[2]; 
			if(num > 1 && num < 5) return words[1];
			if(num == 1) return words[0]; 
			return words[2];
		}		
		
		$(function(){
			$(".bm-chairs-benefit-container").click(function(){
				var text = $(this).attr("text");
				$(".mobile-popup-conf-text").text(text);
				$(".mobile-popup-conf-title").text($(this).children(".bm-chairs-benefit-container-text").text());
			
			});				
		});
		
		$(document).ready(function() {
			
			$('.bm-chairs-addtocart .single_add_to_cart_button').click(function(){
				$(this).css({color: '#EF2525', background: '#fff', border: '1px solid #EF2525'});
			});

			$('.wc-pao-addon-checkbox').change(function() {
				var oldprice = $('.dyn-price').text();
				oldprice = oldprice.replace(" ","");								
				if(this.checked) {
					var pr = parseInt(oldprice) + parseInt($(this).attr('data-price'));
					$('.dyn-price').text(numberWithSpaces(pr) );					
				}else{
					var pr = parseInt(oldprice) - parseInt($(this).attr('data-price'));
					$('.dyn-price').text(numberWithSpaces(pr) );
				}     
				
				var numberOfChecked = $('form input:checkbox:checked').length;
				if (numberOfChecked == 0){
					$('.price-changes').css('display','none');
				}else{
					var word = num_word(numberOfChecked, ['услуга', 'услуги', 'услуг']);
					$('.price-changes').css('display','block');
					$('.price-changes__info-counter').text(numberOfChecked);
					$('.price-changes__info-text').text(word);
				}
				
			});
		});			
	</script>	

<div class="single-chair-menu" id='navigation'>
	<div class="bm-adaptive bm-margin bm">
		<nav class="single-chair-bar" uk-navbar="mode: click">
			<div class="uk-navbar-left">
				<ul class="single-chair-nav uk-navbar-nav">
                    <li class="single-chair-li uk-parent"><a href="#important" class="uncor">Важное</a></li>
                    <li class="single-chair-li uk-parent"><a href="#charack" class="uncor">Характеристики</a></li>
					<li class="single-chair-li uk-parent"><a href="#videoobzor" class="uncor">Видеообзор</a></li>
					<li class="single-chair-li uk-parent" v-if="window.width >= 1400"><a href="#obzor_text" class="uncor">Обзор</a></li>
                    <li class="single-chair-li uk-parent"><a href="#osobennosti" class="uncor">Особенности</a></li>
					<li class="single-chair-li uk-parent" v-if="window.width >= 1400"><a href="#razmer" class="uncor">Размеры</a></li>
					<li class="single-chair-li uk-parent" v-if="window.width >= 1400"><a href="#reviews" class="uncor">Отзывы</a></li>
					<li class="single-chair-li uk-parent"><a href="#rukovodstvo" class="uncor">Руководство по сборке</a></li>																		
					<!--<li class="single-chair-li uk-parent"><a href="#dop-uslugi" class="uncor">Доп услуги</a></li>-->
                    <li class='single-chair-li'>
                        <a href="#"><img src='/wp-content/uploads/menu-button.svg'></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="single-chair-li dropdown" v-if="window.width <= 1400"><a href="#reviews" class="uncor">Отзывы</a></li>
                                <li class="single-chair-li dropdown" v-if="window.width <= 1400"><a href="#razmer" class="uncor">Размеры</a></li>
                                <li class="single-chair-li dropdown" v-if="window.width <= 1400" ><a href="#obzor_text" class="uncor">Обзор</a></li>
                                <li class="single-chair-li dropdown"><a href="#descr" class="uncor">Описание</a></li>
                            </ul>
                        </div>
                    </li>
				</ul>
			</div>
		</nav>				
	</div>		
</div>


<script>
  const { createAppChairs } = Vue

  createAppChairs({
    data() {
      return {
        window: {
            width: 0,
            height: 0
        }
       }
    },
    created() {
        window.addEventListener('resize', this.handleResize);
        this.handleResize();
    },
    destroyed() {
        window.removeEventListener('resize', this.handleResize);
    },
    methods: {
        handleResize() {
            this.window.width = window.innerWidth;
            this.window.height = window.innerHeight;
        }
    }
  }).mount('#navigation')
</script>


<div class="single-chair-menu-mobile">
	<div class="bm-adaptive bm-margin bm">
		<nav class="uk-container uk-navbar">
			
				<ul class="uk-navbar-nav">
					<li class="uk-active">
						Меню
					</li> 
				</ul>
			
			<a href="#" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
			
		</nav>	
		<div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<ul class="uk-nav">
				    <li><a class="uk-text-large uncor" href="#important">Важное</a></li>
					<li><a class="uk-text-large uncor" href="#descr">Описание</a></li>
					<li><a class="uk-text-large uncor" href="#charack">Характеристики</a></li>
					<li><a class="uk-text-large uncor" href="#osobennosti">Особенности</a></li>
					<li><a class="uk-text-large uncor" href="#rukovodstvo">Руководство по сборке</a></li>
					<li><a class="uk-text-large uncor" href="#reviews">Отзывы</a></li>
					<li><a class="uk-text-large uncor" href="#razmer">Размеры</a></li>
					<li><a class="uk-text-large uncor" href="#obzor_text">Обзор</a></li>
					<!--<li><a class="uk-text-large uncor" href="#dop-uslugi">Доп услуги</a></li>-->
				</ul>
			</div>
		</div>		
	</div>
</div>
	
	
	
<div class="bm-adaptive bm-margin bm">			
	<div class="tab-container-content-container">
		<?php
		    //Подключение плюсов и минусов
            require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/important.php';
			//Поключение описания
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/description.php';
			//Подключение Характеристик
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/characteristics.php';
			//Подключение видеообзора
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/videoobzor.php';
			//Подключение обзора
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/obzor.php';			
			//Подключение Особенностей кресел
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/peculiarities.php';
			//Подключение размера кресла
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/sizes.php';

			//Подключение дополнительных услуг
			//require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/dop-uslugi.php';
			//Подключение отзывов
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/otziv.php';		
			//Подключение руководства
			require get_template_directory() . '/woocommerce/chairs/templates/chairs-single/management.php';		
		?>													
	</div>	
	<p class="bm-single-product-fps-container-blocks-help oferta">
		* Не является публичной офертой. Изображения товаров на фотографиях, представленных в каталоге на сайте, могут отличаться от оригиналов.
	</p>	
</div>

<!--
<div class="mobile-button-add-cart">
	<a href="<?php // echo $product->add_to_cart_url(); ?>" data-product_id="<?php // echo $main_chair_product; ?>"  rel="nofollow" class="mobile-button-add-cart_link chair-link-add-cart single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart">В корзину</a>
</div>
-->

<div id="modal-videoobzor" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical modal-videoobzor">
        <button class="modal-videoobzor-close-button uk-modal-close-outside" type="button" uk-close></button>
        <div class="modal-videoobzor-con">
            <div class="modal-videoobzor-container">
                <iframe width="100%" height="100%" src="<?php the_field('videoobzor'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">
	
	$(function(){
		$(".list-inline-item").click(function(){
			$(".list-inline-item").removeClass("active");
			$(this).addClass("active");
		});

		$("#comment").attr('placeholder','Комментарий');
		

	})	
	
	$(function() {		
	AddReadMore();
	$(".comments-button").click(function(){
		$("#commentform").fadeIn( "slow");
		$(".comments-button").css("display","none");
	});
		
	$(".comment-form-author input").attr("placeholder","Ваше имя");
	$(".comment-form-email input").attr("placeholder","Ваш email");	
				
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
	
		$(document).on('click', '.wc-pao-addon-arenda-kresla input',function(){
			$('.wc-pao-addon-arenda-kresla input').not(this).prop('checked', false);  
		});

		$(document).on('click', '.arenda', function() {      
			$('.arenda').not(this).prop('checked', false);   
			var checkedNum = $('.arenda:checked').length;
			if ( checkedNum > 0 ){
				$('#addArenda').removeClass('event-none');
			}else{
				$('#addArenda').addClass('event-none');
			} 						

		});
		
		function addGaranty(){
			$('.wc-pao-addon-rasshirennaya-garantiya').find('input').click();
			var text = $('#addgar').text();
			text = $.trim(text);
			if (text == 'Добавить'){
				$('#addgar').text('Удалить');
				$('#addgar').addClass('remove');
			}else if( text == 'Удалить' ){
				$('#addgar').text('Добавить');
				$('#addgar').removeClass('remove');
			}		
		}
		function addTest(){
			$('.wc-pao-addon-test-kresla-na-domu').find('input').click();
			var text = $('#addTest').text();
			text = $.trim(text);

			if (text == 'Добавить'){
				$('#addTest').text('Удалить');
				$('#addTest').addClass('remove');
			}else if( text == 'Удалить' ){
				$('#addTest').text('Добавить');
				$('#addTest').removeClass('remove');
			}						
		}
		function addArenda(){
			var check;
			$('.arenda').each(function(){
				if ( $(this).is(':checked') ){
					var name = $(this).attr('name');
					check = $(this).attr('name');
					$('.' + name).find('input').click();									
					return;
				}
			});	

			var text = $('#addArenda').text();
			text = $.trim(text);					
			if (text == 'Добавить'){
				$('#addArenda').text('Удалить');
				$('#addArenda').addClass('remove');
			}else if( text == 'Удалить' ){
				$('#addArenda').text('Добавить');
				$('#addArenda').removeClass('remove');
				
				$('.arenda').each(function(){
					$(this).prop('checked',false);
				});		
				
			}			
		}	

</script>

<script>
    $(function(){
        $symbols_length = $('.text_read').text().length
        $symbols_length = $symbols_length / 1500

        $text_images = $('.text_read').find('img').length * 0.2
        $('.time_read').text( Math.round($symbols_length + $text_images) + ' минут')
    });
</script>


<!-- Микро разметка -->
<?$arMicroData = [
    '@context' => 'http://schema.org/',
    '@type' => 'Product',
    'name' => get_the_title() ,
    'image' => wp_get_attachment_url($product->get_image_id()) ,
    'description' => get_the_content() ,
    'sku' => $product->get_sku(),
    'brand' => [
        '@type' => 'Brand',
        'name' => $markas[0]
    ],
    'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'RUB',
        'price' => $product->get_regular_price() * 1.00,
        'priceValidUntil' => date('Y-m-d', strtotime("+365 day")),
        'itemCondition' => 'https://schema.org/NewCondition'
    ],
];

if($product->get_stock_status() == 'instock') {
    $arMicroData['offers']['availability'] = 'https://schema.org/InStock';
}else {
    $arMicroData['offers']['availability'] = 'https://schema.org/OutOfStock';
}

if($product->get_review_count() >= 1) {
    $arMicroData['aggregateRating'] = [
        '@type' => 'AggregateRating',
        'ratingValue' => $product->get_average_rating(),
        'ratingCount' => $product->get_review_count(),
        'reviewCount' => $product->get_review_count(),
        'bestRating' => $product->get_average_rating()
    ];
}

?>

<script type="application/ld+json">
    <?=json_encode($arMicroData, JSON_UNESCAPED_UNICODE)?>
</script>


<?php // include "chairs/components/footer.php"; ?>
<? get_footer(); ?>