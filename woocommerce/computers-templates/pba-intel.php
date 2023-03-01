<?php get_header(); ?>
<?php $queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id; ?>
<style type="text/css">
	#page{
		background: transparent;
	}
	header{
		position: inherit;
	}
</style>

<div class="bm-computer-landing">
	<div class="bm-computer-landing_header">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-header">
				<div class="bm-computer-landing-header-breadcrumb">
					<?php do_action( 'woocommerce_before_main_content' ); ?>
				</div>
			</div>
			<div class="bm-computer-landing-header-mobile">			
				<div class="bm-computer-landing-header-mobile-container-link">
					<div class="topnav" id="myTopnav">
					  <a href="#cachestvo" class="active uncor">Качество</a>
					  <a href="#proizviditelnost" class="uncor">Производительность</a>
					  <a href="#dizajn" class="uncor">Дизайн</a> 					  
					  <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
					</div>					
				</div>
				<div class="bm-computer-landing-header-mobile-container-button">
					<a href="#buycomputers" class="bm-computer-landing-header-menu__link uncor">Купить</a>
				</div>
			</div>
		</div>
	</div>
	<div class="bm-computer-landing-section-1-background">

		<div class="bm-computer-landing-section-1">
			<? if ( get_field('vklyuchit_dym', $taxonomy . '_' .$term_id) ) {
				?>  
					<div class="tuman"></div>
					<style type="text/css">
						.bm-computer-landing-section-1{
							position: relative;
						    top: 0;
						    left: 0;
						    width: 100%;
						    height: 100%;
						    overflow: hidden;     
						}
						.bm-computer-landing-section-1::before,
						.bm-computer-landing-section-1::after,
						.bm-computer-landing-section-1 .tuman::before, 
						.bm-computer-landing-section-1 .tuman::after {
						    content: "";
						    position: absolute;
						    top: 0;
						    left: 0;
						    height: 100%;
						    width: 100%;
						    background-size: cover;
						    background-position: center;
						    background-repeat: repeat-x;
						}


						.bm-computer-landing-section-1 .tuman::before, 
						.bm-computer-landing-section-1 .tuman::after    {
						    left: 100%;
						}
						.bm-computer-landing-section-1::before, 
						.bm-computer-landing-section-1 .tuman::before {
						    background-image: url("/wp-content/uploads/fog-1.png");
						    animation: fogmove 80s linear 0s infinite;
						    opacity: 0.4;
						}
						.bm-computer-landing-section-1::after, 
						.bm-computer-landing-section-1 .tuman::after {
						    background-image: url("/wp-content/uploads/fog-2.png");
						    opacity: 0.4;
						    animation: fogmove 80s linear 0s infinite;
						}
						@keyframes fogmove {
						    from {
						        transform: translate3d(0, 0, 0);
						    }
						    to {
						        transform: translate3d(-100%, 0, 0);
						    }
						}						
					</style>
				<?
			} ?>

<? if ( get_field('cvechenie_na_1_bloke', $taxonomy . '_' .$term_id) ) {
				?>  
					
					<style>
						.bm-computer-landing-section-1 img{
							animation: hue-rotate linear 2.5s infinite;
						}
					</style>
				<?
			} ?>
			
			<img style="align-self: flex-start;" src=" <?php the_field('izobrazhenie_v_1_bloke', $taxonomy . '_' .$term_id); ?> " >			
				  <video autoplay loop muted>
				   <source src="<?php the_field('video_na_glavnoj_esli_nuzhno', $taxonomy . '_' .$term_id); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
				  </video>			
		</div>		
	</div>
	
	<div class="bm-computer-landing-proizvoditelnost-back" id="proizvoditel">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-proizvoditelnost-container bm-computer-landing-proizvoditelnost-container-intel">
				<div class="bm-computer-landing-proizvoditelnost-container-section-1">
					<img style="align-self: flex-start;" src="/wp-content/uploads/intel-gamer-days-block.webp">
				</div>
				<div class="bm-computer-landing-proizvoditelnost-container-section-2">
					<div class="bm-computer-landing-section3-content">
						<h2 class="bm-computer-landing-section3-content__title">Intel Gamer Days 2021</h2>
						<p>
							IntelGamerDays 2021 — это настоящий праздник для всех любителей видеоигр! А какой праздник может обойтись без подарков или скидок? В честь этого громкого события мы объявляем скидку 20% на игровые компьютеры Boiling Machine линейки Powered by ASUS. Установленные в этих ПК процессоры Intel позволяют взглянуть на игры без компромиссов и взять от процесса все.							
						</p>
					</div>
													
				</div>
			</div>
		</div>
	</div>
	
	<div class="bm-computer-landing-section2-back" id="cachestvo">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-section2">
				<div class="bm-computer-landing-section2-content">
					<h2 class="bm-computer-landing-section2-content__title" id="proizviditelnost"><?php the_field('zagolovok_dlya_kogo', $taxonomy . '_' .$term_id); ?></h2>
					<?php the_field('opisanie_dlya_kogo', $taxonomy . '_' .$term_id); ?>
				</div>
				<div class="bm-computer-landing-section2-img">
					<img style="align-self: flex-start;" src="<?php the_field('izobrazhenie_dlya_kogo', $taxonomy . '_' .$term_id); ?>">
				</div>
			</div>
		</div>		
	</div>

	<div class="bm-computer-landing-proizvoditelnost-back" id="proizvoditel">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-proizvoditelnost-container">
				<div class="bm-computer-landing-proizvoditelnost-container-section-1">
					<img style="align-self: flex-start;" src="<?php the_field('izobrazhenie_proizvoditelnost', $taxonomy . '_' .$term_id); ?>">
				</div>
				<div class="bm-computer-landing-proizvoditelnost-container-section-2">
					<div class="bm-computer-landing-section3-content">
						<h2 class="bm-computer-landing-section3-content__title"><?php the_field('zagolovok_proizvoditelnost', $taxonomy . '_' .$term_id); ?></h2>
						<?php the_field('opisanie_proizvoditelnost', $taxonomy . '_' .$term_id); ?>
					</div>
													
				</div>
			</div>
		</div>
	</div>


	<div class="bm-computer-landing-section4-back" id="dizajn">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-section4">
				<div class="bm-computer-landing-section2-content">
					<h2 class="bm-computer-landing-section2-content__title"><?php the_field('zagolovok_kachestvo', $taxonomy . '_' .$term_id); ?></h2>
					<?php the_field('opisanie_kachestvo', $taxonomy . '_' .$term_id); ?>
				</div>
				<div class="bm-computer-landing-section2-img">
					<img style="align-self: flex-start;" src="<?php the_field('izobrazhenie_kachestvo', $taxonomy . '_' .$term_id); ?>" class="bm-computer-landing-section2-img__img">
				</div>		
			</div>		
		</div>
	</div>

	<div class="bm-computer-landing-proizvoditelnost-back section5">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-proizvoditelnost-container">
				<div class="bm-computer-landing-proizvoditelnost-container-section-1">
					<img style="align-self: flex-start;" src="<?php the_field('izobrazhenie_garantiya', $taxonomy . '_' .$term_id); ?>">
				</div>
				<div class="bm-computer-landing-proizvoditelnost-container-section-2">
					<div class="bm-computer-landing-section3-content">
						<h2 class="bm-computer-landing-section3-content__title"><?php the_field('zagolovok_garantiya', $taxonomy . '_' .$term_id); ?></h2>
						<?php the_field('opisanie_garantiya', $taxonomy . '_' .$term_id); ?>
					</div>								
				</div>
			</div>
		</div>
	</div>





	<div class="bm-computer-landing-section6-back" id="buycomputers">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-section6">
				<div class="bm-computer-landing-section3-content">
					<h1 class="bm-computer-landing-section6-content__title">Купи новый ПК <?php woocommerce_page_title(); ?></h1>					
				</div>	
				<div class="bm-computer-landing-section6-computers">
						
							<?php
							if ( woocommerce_product_loop() ) {

								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								do_action( 'woocommerce_before_shop_loop' );
								?>
								<?		
								
								$args = array(
									'post_type' => 'product',
									'posts_per_page' => 50,
									'tax_query' => array(
											array(
												'taxonomy' => 'product_cat',
											)
										)
								);	
								$loop = new WP_Query( $args );
									?>				
								<div class="mywoo-landing-comp mywoo-landing-page-computers-container">
								<?
								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 */
										do_action( 'woocommerce_shop_loop' );

										wc_get_template_part( 'content', 'productcom' );
									}
								}
							?>
								<?php the_posts_pagination();?>
								</div>
							<?php
								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								//do_action( 'woocommerce_after_shop_loop' );

							?>	
										
								
								
								
							<?	
							} else {
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
							}

							/**
							 * Hook: woocommerce_after_main_content.
							 *
							 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
							 */
							do_action( 'woocommerce_after_main_content' );
							?>
						
				</div>			
			</div>
		</div>
	</div>	
</div>		
		
	
<style>
	.bm-computer-landing-proizvoditelnost-container-intel .bm-computer-landing-proizvoditelnost-container-section-1{
		flex-basis: 52% !important;
	}
	#load-posts{
		width: 100%;
		text-align: center;
		margin-top: 30px;
	}
	#load-posts a{
		transition: .3s;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 115.9%;
		color: #DF2C2C;
		padding: 14px 38px 16px 38px;
		border: 1px solid #DF2C2C;
		box-sizing: border-box;
		border-radius: 5px;
		width: fit-content;	
	}
	#load-posts a:hover{
		background: #DF2C2C;
		transition: .3s;
		text-decoration: none;
		color: #fff;
	}	
	.mywoo-landing-comp.more-page{
		width: 100%;
	}
</style>	

<?php 

add_action( 'wp_footer', 'artabr_lm_footer_scripts' );
function artabr_lm_footer_scripts() {

	wp_enqueue_script( 'artabr_lm_ajax', get_template_directory_uri() . '/assets/js/ajaxcomputers.js', true );
	wp_enqueue_script( 'historyjs', get_template_directory_uri() . '/assets/js/history.js', true );

	// Add parameters for the JS
	global $wp_query;
	$max   = $wp_query->max_num_pages;
	$paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
	wp_localize_script(
		'artabr_lm_ajax',
		'mts_ajax_loadposts',
		array(
			'startPage'     => $paged,
			'maxPages'      => $max,
			'nextLink'      => next_posts( $max, false ),
			'i18n_loadmore' => __( ' Показать еще', 'mythemeshop' ),
			'i18n_nomore'   => __( ' Больше нет', 'mythemeshop' ),
			'i18n_loading'  => __( ' Загрузка...', 'mythemeshop' ),
		)
	);

}

?>	


 

<?php get_footer(); ?>