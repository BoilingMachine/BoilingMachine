<?php get_header(); ?>

<link rel="stylesheet" href="/wp-content/themes/boiling_machine/woocommerce/computers-templates/single-templates/css/main.css">


<?php global $product; ?>

<section class='breadcrumbs'>
    <div class="bm-adaptive bm-margin bm">
        <div class="bm-single-computer-breadcumbs">
            <?php do_action( 'woocommerce_before_main_content' ); ?>
        </div>        
    </div>
</section>
<div id="app">
	<section class='first-screen'>
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-content">
				<div class="bm-computer-image">
					<div class="bm-single-chairs-picture">
						<div class="bm-product-thumbnails">
							<ol>
								<li class="list-inline-item active"> 
									<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> 
										<img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" class="img-fluid" > 
									</a> 
								</li>
								<?php 
									$attachment_ids = $product->get_gallery_image_ids();
									foreach( $attachment_ids as $key=>$attachment_id ) {
										$image_link = wp_get_attachment_url( $attachment_id ); ?>
										<li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="<?php echo $key+1; ?>" data-target="#custCarousel"> <img src="<?php echo $image_link; ?>" class="img-fluid" > </a> </li>
								<?php }	?>	
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
				</div>
				<div class="bm-computer-description">
					<h1 class="bm-computer__title"><? the_title(); ?></h1>
					<p class="stock-container__text">
					<?php 
							$stock = $product->get_stock_status(); 
							switch($stock){
								case 'instock':
									echo 'В наличии';
								?>
								<style>
									.stock-container__text{color: #63A331; }																
								</style>
								<?php	
								break;
								case 'outofstock':
									echo 'Нет в наличии';
								?>
								<style>
									.stock-container__text{color: #EF2525;}																						
								</style>								
								<?php
								break;
								case 'onbackorder':
									echo 'Предзаказ';
								?>
								<style>
									.stock-container__text{color: #B8B8B8;}																					
								</style>								
								<?php											
								break;											
							}
					?>
					</p>
					<?php 
						//Формирование цены на основе комплектующих
						$videocardProduct = get_field('videokarta');
						$processorProdutc = get_field('proczessor');
						$motherboardProduct = get_field('materinskaya_plata');
						$operaProduct = get_field('operativnaya_pamyat');
						$hddProduct = get_field('zhestkij_disk');
						$ssdProduct = get_field('ssd_nakopitel');
						$korpusProduct = get_field('korpus');
						$bpProduct = get_field('blok_pitaniya');

						$itogValue = array();

						//Получение цены Видеокарты
						$post = $videocardProduct;
						setup_postdata( $post ); 
						$videocardPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $videocardPrice);
						wp_reset_postdata();
						//Получение цены процессора	
						$post = $processorProdutc;
						setup_postdata( $post ); 
						$processorPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $processorPrice);
						wp_reset_postdata();
						//Получение цены материнской платы
						$post = $motherboardProduct;
						setup_postdata( $post ); 
						$motherboardPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $motherboardPrice);
						wp_reset_postdata();
						//Получение цены оперативной памяти
						$post = $operaProduct;
						setup_postdata( $post ); 
						$operaPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $operaPrice);
						wp_reset_postdata();	
						//Получение цены жесткого диска
						$post = $hddProduct;
						setup_postdata( $post ); 
						$hddPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $hddPrice);
						wp_reset_postdata();
						//Получение цены SSD диска
						$post = $ssdProduct;
						setup_postdata( $post ); 
						$ssdPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $ssdPrice);
						wp_reset_postdata();	
						//Получение цены корпуса
						$post = $korpusProduct;
						setup_postdata( $post ); 
						$korpusPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $korpusPrice);
						wp_reset_postdata();		
						//Получение цены блока питания
						$post = $bpProduct;
						setup_postdata( $post ); 
						$bpPrice = get_post_meta( $post->ID, '_price', true );
						array_push($itogValue, $bpPrice);
						wp_reset_postdata();	

						$itogPrice = array_sum($itogValue);						
					?>
					<div class="bm-computer-settings"></div>
					<p class="bm-computer-price"><?php echo wc_price($itogPrice); ?></p>														
					<form 
						id = "computerForm"
						class="cart" 
						action="<? echo get_permalink( $product->get_id() ) ?>" 
						method="post" 
						enctype="multipart/form-data">
						<input type="hidden" id="price_computer" name="price_computer" value="summPrice" />
						<input type="hidden" id="price_computer_videocard" name="price_computer_videocard" value="<? echo $videocardPrice; ?>" />
						<input type="hidden" id="price_computer_processor" name="price_computer_processor" value="<? echo $processorPrice; ?>" />
						<input type="hidden" id="price_computer_motherboard" name="price_computer_motherboard" value="<? echo $motherboardPrice; ?>" />
						<input type="hidden" id="price_computer_opera" name="price_computer_opera" value="<? echo $operaPrice; ?>" />
						<input type="hidden" id="price_computer_hdd" name="price_computer_hdd" value="<? echo $hddPrice; ?>" />
						<input type="hidden" id="price_computer_ssd" name="price_computer_ssd" value="<? echo $ssdPrice; ?>" />
						<input type="hidden" id="price_computer_korpus" name="price_computer_korpus" value="<? echo $korpusPrice; ?>" />
						<input type="hidden" id="price_computer_bp" name="price_computer_bp" value="<? echo $bpPrice; ?>" />
						<button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button bm-computer-button">Купить</button>
					</form>																	
				</div>
			</div>
		</div>
	</section>

	<section class="pc-settings">
		<div class="bm-adaptive bm-margin bm">
			<div class="videocard-block">
				<? 
					$post = $videocardProduct;
					setup_postdata( $post ); 		
					$mainVideocard = $post->ID;		
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
				?>		
				<div class="videocard-block-info">
					<h2 class="component-title videocard-title"><? the_title(); ?></h2>
					<div class="image-mobile">
						<img id='videocard-image' class="videocard-image" src="<?php echo $thumb_url[0]; ?>">
					</div>
					<p class="component-description videocard-description"><? echo get_the_content(); ?></p>
					<p class="change-config">Заменить видеокарту</p>
				<? wp_reset_postdata(); ?>	
					<select id="choose-videocard">
						<option value="none" selected disabled hidden>Выбрать видеокарту</option>
					<? 
					$args = array(
						'posts_per_page'=> -1,
						'post_type' => 'product',
						'post_status'   => 'publish',
						'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'videokarty-komplektuyushhie', 
						)
						),
					); 
					$the_query = new WP_Query( $args );

					if ($the_query->have_posts()) :
						while ($the_query->have_posts()) :
							$the_query->the_post();
							$videocard = get_product( $the_query->post->ID );
							if ( $the_query->post->ID != $mainVideocard ):
					?>
						<option value="<? echo $post->ID; ?>"><? the_title(); ?></option>
					<?
							endif;
						endwhile;
					endif;
					wp_reset_query();	
					?>
					</select>
				</div>

				<? 
					$post = $videocardProduct;
					setup_postdata( $post ); 	
					
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
				?>			
				<div class="videocard-block-image pc-display">
					<img id='videocard-image' class="videocard-image" src="<?php echo $thumb_url[0]; ?>">
				</div>
				<? wp_reset_postdata(); ?>	
			</div>

			<div class="section-3">
				<div class="complect-block">
					<? 
						$post = $processorProdutc;
						setup_postdata( $post ); 	
						$mainProcessor = $post->ID;			
					?>					
					<div class="complect-image pc-display">
						<? 
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
						<img src="<?php echo $thumb_url[0]; ?>" class="processor-image">
					</div>
					<div class="complect-title">
						<p class="complect-title__subtitle">Процессор</p>
						<h2 class="component-title processor-title"><? the_title(); ?></h2>
					</div>
					<div class="image-mobile">
						<img src="<?php echo $thumb_url[0]; ?>" class="processor-image">
					</div>
					<div class="complect-description">
						<p class="component-description processor-description"><? echo get_the_content(); ?></p>
					</div>
					<div class="complect-settings"></div>
					<div class="change-complects">
						<select id="choose-processor">
							<option value="none" selected disabled hidden>Выбрать процессор</option>
						<? 
						$args = array(
							'posts_per_page'=> -1,
							'post_type' => 'product',
							'post_status'   => 'publish',
							'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'proczessory', 
							)
							),
						); 
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) :
								$the_query->the_post();
								$videocard = get_product( $the_query->post->ID );
								if ( $the_query->post->ID != $mainProcessor ):
						?>
							<option value="<? echo $post->ID; ?>"><? the_title(); ?></option>
						<?
								endif;
							endwhile;
						endif;
						wp_reset_query();	
						?>
						</select>					
					</div>
					<? wp_reset_postdata(); ?>	
				</div>
				<div class="complect-block">
					<? 
						$post = $motherboardProduct;
						setup_postdata( $post ); 	
						$mainMotherboard = $post->ID;				
					?>					
					<div class="complect-image pc-display">
						<? 
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
						<img src="<?php echo $thumb_url[0]; ?>" class="motherboard-image">
					</div>
					<div class="complect-title">
						<p class="complect-title__subtitle">Материнская плата</p>
						<h2 class="component-title motherboard-title"><? the_title(); ?></h2>
					</div>
					<div class="image-mobile">
						<img src="<?php echo $thumb_url[0]; ?>" class="motherboard-image">
					</div>					
					<div class="complect-description">
						<p class="component-description motherboard-description"><? echo get_the_content(); ?></p>
					</div>
					<div class="complect-settings"></div>
					<div class="change-complects">
						<select id="choose-motherboard">
							<option value="none" selected disabled hidden>Выбрать материнскую плату</option>
						<? 
						$args = array(
							'posts_per_page'=> -1,
							'post_type' => 'product',
							'post_status'   => 'publish',
							'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'materinskie-platy	', 
							)
							),
						); 
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) :
								$the_query->the_post();
								$videocard = get_product( $the_query->post->ID );
								if ( $the_query->post->ID != $mainMotherboard ):
						?>
							<option value="<? echo $post->ID; ?>"><? the_title(); ?></option>
						<?
								endif;
							endwhile;
						endif;
						wp_reset_query();	
						?>
						</select>					
					</div>				
					<? wp_reset_postdata(); ?>	
				</div>	
				<div class="complect-block">
					<? 
						$post = $operaProduct;
						setup_postdata( $post ); 
						$mainOopera = $post->ID;					
					?>					
					<div class="complect-image pc-display">
						<? 
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
						<img src="<?php echo $thumb_url[0]; ?>" class="opera-image">
					</div>
					<div class="complect-title">
						<p class="complect-title__subtitle">Оперативная память</p>
						<h2 class="component-title opera-title"><? the_title(); ?></h2>
					</div>
					<div class="image-mobile">
						<img src="<?php echo $thumb_url[0]; ?>" class="opera-image">
					</div>						
					<div class="complect-description">
						<p class="component-description opera-description"><? echo get_the_content(); ?></p>
					</div>
					<div class="complect-settings"></div>
					<div class="change-complects">
						<select id="choose-opera">
							<option value="none" selected disabled hidden>Выбрать оперативную память</option>
						<? 
						$args = array(
							'posts_per_page'=> -1,
							'post_type' => 'product',
							'post_status'   => 'publish',
							'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'operativnaya-pamyat', 
							)
							),
						); 
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) :
								$the_query->the_post();
								$videocard = get_product( $the_query->post->ID );
								if ( $the_query->post->ID != $mainOopera ):
						?>
							<option value="<? echo $post->ID; ?>"><? the_title(); ?></option>
						<?
								endif;
							endwhile;
						endif;
						wp_reset_query();	
						?>
						</select>					
					</div>					
					<? wp_reset_postdata(); ?>	
				</div>					
			</div>

			<div class="section-2">
				<div class="complect-block-section-2">
				<? 
					$post = $bpProduct;
					setup_postdata( $post ); 	
					$mainBp = $post->ID;	
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
				?>	
				<div class="complect-block-section-2-info">
					<div class="complect-title">
						<p class="complect-title__subtitle">Блок питания</p>
						<h2 class="component-title bp-title"><? the_title(); ?></h2>
					</div>
					<div class="image-mobile">
						<img src="<?php echo $thumb_url[0]; ?>" class="bp-image">	
					</div>	
					<div class="complect-description">
						<p class="component-description bp-description"><? echo get_the_content(); ?></p>
					</div>	
					<div class="complect-settings"></div>	
					<div class="change-complects">
						<select id="choose-bp">
							<option value="none" selected disabled hidden>Выбрать блок питания</option>
						<? 
						$args = array(
							'posts_per_page'=> -1,
							'post_type' => 'product',
							'post_status'   => 'publish',
							'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'bloki-pitaniya', 
							)
							),
						); 
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) :
								$the_query->the_post();
								$videocard = get_product( $the_query->post->ID );
								if ( $the_query->post->ID != $mainBp ):
						?>
							<option value="<? echo $post->ID; ?>"><? the_title(); ?></option>
						<?
								endif;
							endwhile;
						endif;
						wp_reset_query();	
						?>
						</select>					
					</div>							
				</div>
				<div class="complect-block-section-2-image pc-display">
					<? 
						$post = $bpProduct;
						setup_postdata( $post ); 				
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						wp_reset_postdata();
					?>
					<img src="<?php echo $thumb_url[0]; ?>" class="bp-image">				
				</div>
				<? wp_reset_postdata(); ?>	
				</div>
				<div class="complect-block">
					<? 
						$post = $ssdProduct;
						setup_postdata( $post ); 	
						$mainSSD = $post->ID;			
					?>					
					<div class="complect-image pc-display">
						<? 
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
						<img src="<?php echo $thumb_url[0]; ?>" class="ssd-image">
					</div>
					<div class="complect-title">
						<p class="complect-title__subtitle">SSD Накопитель</p>
						<h2 class="component-title ssd-title"><? the_title(); ?></h2>
					</div>
					<div class="image-mobile">
						<img src="<?php echo $thumb_url[0]; ?>" class="ssd-image">
					</div>					
					<div class="complect-description">
						<p class="component-description ssd-description"><? echo get_the_content(); ?></p>
					</div>
					<div class="complect-settings"></div>
					<div class="change-complects">
						<select id="choose-ssd">
							<option value="none" selected disabled hidden>Выбрать SSD Накопитель</option>
						<? 
						$args = array(
							'posts_per_page'=> -1,
							'post_type' => 'product',
							'post_status'   => 'publish',
							'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'ssd-nakopiteli', 
							)
							),
						); 
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) :
								$the_query->the_post();
								$videocard = get_product( $the_query->post->ID );
								if ( $the_query->post->ID != $mainSSD ):
						?>
							<option value="<? echo $post->ID; ?>"><? the_title(); ?></option>
						<?
								endif;
							endwhile;
						endif;
						wp_reset_query();	
						?>
						</select>					
					</div>					
					<? wp_reset_postdata(); ?>	
				</div>			
			</div>
		</div>
	</section>
</div>

<script>

$('#choose-videocard').change(function(){
	changeComplect($(this), 'changeComplect', 'videocard', 'videokarty-komplektuyushhie')
})
$('#choose-processor').change(function(){
	changeComplect($(this), 'changeComplect', 'processor', 'proczessory')
})
$('#choose-motherboard').change(function(){
	changeComplect($(this), 'changeComplect', 'motherboard', 'materinskie-platy')
})

$('#choose-opera').change(function(){
	changeComplect($(this), 'changeComplect', 'opera', 'operativnaya-pamyat')
})

$('#choose-bp').change(function(){
	changeComplect($(this), 'changeComplect', 'bp', 'bloki-pitaniya')
})
$('#choose-ssd').change(function(){
	changeComplect($(this), 'changeComplect', 'ssd', 'ssd-nakopiteli')
})

function convertFormToJSON(form) {
	return $(form)
	.serializeArray()
	.reduce(function (json, { name, value }) {
		json[name] = value;
		return json;
	}, {});
}


function changeComplect(el, action, slug, category){

	let values = {}
	values.action = action
	values.productID = $(el).val()
	values.cat = category

	$.ajax( {
		type : 'POST',
		url : woocommerce_params.ajax_url,
		data : values,
		success : function( data ) {

			$(`.${slug}-title`).text(data.videocardTitle)
			$(`.${slug}-description`).text(data.videocardDescription)
			$(`.${slug}-image`).attr('src', data.videocardImage)
			$(`#price_computer_${slug}`).val(data.videocardPrice)
			
			$(`#choose-${slug}`).empty()
			for (let i = 0; i < data.anVideoes.length; i++){
				$(`#choose-${slug}`).append(data.anVideoes[i])
			}

			//Перерасчет выводимой цены
			let newPrice = convertFormToJSON('#computerForm')
			let setNewPrice = Number(newPrice.price_computer_videocard) +
			Number(newPrice.price_computer_ssd) +
			Number(newPrice.price_computer_processor) +
			Number(newPrice.price_computer_opera) +
			Number(newPrice.price_computer_motherboard) +
			Number(newPrice.price_computer_korpus) +
			Number(newPrice.price_computer_hdd) +
			Number(newPrice.price_computer_bp)

			$('.woocommerce-Price-amount').text(setNewPrice.toLocaleString('ru') + ' р')

		}

	} );

}





</script>





<?php get_footer(); ?>