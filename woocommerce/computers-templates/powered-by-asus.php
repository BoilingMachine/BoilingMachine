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
				<div class="bm-computer-landing-header-menu">
					<a href="#buycomputers" class="bm-computer-landing-header-menu__link uncor">Купить</a>
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
	
	
<div class="pba-section2-back">
	<div class=" bm-adaptive bm-margin bm " style="display: flex;align-items: center;">
		<div class="pba-section2-container">
<div class="pba-section2-container-2">
  <img src="/wp-content/uploads/pba-section-2-image.png">

</div>
				<div class="pba-section2-container-1">
					<h2 class="pba-section2-container-1__title">ИГРОВЫЕ КОМПЬЮТЕРЫ ASUS ROG</h2>
					<p class="pba-section2-container-1__text">ASUS ROG уже стал для всех символом лучших игровых решений, будь то комплектующие для игровых компьютеров, мониторы или же девайсы. Выбирая ASUS ROG, вы точно получите максимальную производительность на сегодняшний день и самый крутой дизайн. Для всех поклонников этой игровой серии, мы предлагаем наши готовые игровые решения powered by asus, в которые вошли только самые лучшие продукты ASUS REPUBLIC OF GAMERS</p>
					
				</div>
			</div>
		</div>
</div>	
	<div class="pba-section3-back">
		<div class=" bm-adaptive bm-margin bm ">
			<div class="pba-section3-container">
				<div class="pba-section3-container-1">
					<h2 class="pba-section2-container-3__title">МОЩНЫЕ ИГРОВЫЕ КОМПЬЮТЕРЫ НА ЛУЧШИХ КОМПОНЕНТАХ ASUS ROG</h2>
					<p class="pba-section2-container-3__text">Если вы хотите себе мощный игровой компьютер, который не только прослужит вам долгие годы, но и будет обладать невероятно крутым дизайном, то это компьютер с комплектующими от ASUS. Они справятся с любой игрой и разрешением, а вы всегда будете погружены в плавный игровой процесс, опережая врага на шаг вперед.</p>					
				</div>
<div class="pba-section3-container-1-mobile">
<img src="/wp-content/uploads/pba-image-new.png">
</div>
			</div>
		</div>
	</div>	
	<div class="pba-section4-back">
		<div class=" bm-adaptive bm-margin bm " style="display: flex;">
			<div class="pba-section4-container">
				<div class="pba-section4-container-1">
					<h2 class="pba-section2-container-4__title">ЛУЧШИЕ МАТЕРИНСКИЕ ПЛАТЫ</h2>
					<p class="pba-section2-container-4__text">ASUS уже 20 лет выпускает материнские платы и является безоговорочным лидером в этой сфере. Материнские платы ASUS не только имеют неповторимый и узнаваемый дизайн, но и являются самыми инновационными, производительными и надёжными. А вместе 
с технологией AURA SYNC вы сможете связать подсветку всех ваших устройств ASUS и персонализировать под себя</p>					
				</div>
<div class="pba-section3-container-1-mobile">
<img src="/wp-content/uploads/motherboard-mobile.png">
</div>
			</div>
		</div>
	</div>	
<div class="pba-section5-back-content">
  <div class=" bm-adaptive bm-margin bm ">
<div class="pba-section3-container">
				<div class="pba-section3-container-1">
					<h2 class="pba-section2-container-3__title">САМЫЕ ПРОИЗВОДИТЕЛЬНЫЕ ВИДЕОКАРТЫ</h2>
					<p class="pba-section2-container-3__text">ASUS не только делает эффективное и тихое охлаждение для видеокарт, но и весомо добавляет им производительности. Поэтому любители разгона быстро полюбили видеокарты от ASUS. Этому способствует и удобное программное обеспечение, с помощью которого всего в пару кликов вы сможете повысить частоту графического процессора видеокарты, тем самым увеличивая количество кадров в секунду в любимых играх</p>	  
  </div>
</div>

	<div class="pba-section5-back">
		<div class=" bm-adaptive bm-margin bm ">
			<div class="pba-section5-back-image">
                <img src="/wp-content/uploads/kv-cover2.png">
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
<style>
div#page{background: #000;}
.pba-section-one-back{text-align: center;}
.pba-section2-container-2{
flex-basis: 67%;
}
.pba-section5-back-content{background: #000;margin-top: 75px;}
	.pba-section2-back{
		background: #000;
		background-position: center;
		background-position: center;
		background-size: cover;
		min-height: 850px;
		display: flex;
	}
	.pba-section2-container{
		display: flex;
		justify-content: space-between;
	}
	.pba-section2-container-1{
		flex-basis: 30%;
display: flex;
flex-direction: column;
justify-content: center;
	}
	.pba-section2-container-1__title{
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		color: #FFFFFF;
		margin: 0;
		margin-bottom: 15px;
	}
	.pba-section2-container-1__text{
		font-weight: normal;
		font-size: 20px;
		line-height: 160%;
		color: #EEEEEE;
		margin: 0;
	}
	.pba-section2-container-1__link{
		display: block;
		margin-top: 30px;
		background: #EF1111;
		padding: 15px 47px;
		max-width: fit-content;
		font-weight: bold;
		font-size: 16px;
		line-height: 130%;
		color: #FFFFFF;
		text-decoration: none;
	}
	.pba-section3-back{
		background: #000 url(/wp-content/uploads/pba-image-new.png);
		background-position: center;
		background-position: center;
		background-size: contain;
		background-repeat: no-repeat;
		min-height: 850px;	
		margin-top: 75px;	
	}
	.pba-section2-container-3__title{
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		color: #FFFFFF;
		text-align: center;
		margin: 0;
		margin-bottom: 10px;
	}
	.pba-section2-container-3__text{
		font-weight: normal;
		font-size: 20px;
		line-height: 160%;
		color: #EEEEEE;
		text-align: center;
		max-width: 80%;
		margin: 0;
		margin-left: auto;
		margin-right: auto;
	}
	
	.pba-section4-back{
		background: #000 url(/wp-content/uploads/motherboard2.png);
		background-position: center;
		background-position: center;
		background-size: contain;
		background-repeat: no-repeat;
		min-height: 850px;	
		display: flex;
	}	
	.pba-section2-container-4__title{
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		color: #FFFFFF;		
	}
	.pba-section2-container-4__text{
		font-weight: normal;
		font-size: 20px;
		line-height: 160%;
		color: #EEEEEE;
	}	
	.pba-section4-container{
		display: flex;
	    justify-content: flex-end;
	    align-items: center;
	}
	.pba-section4-container-1{
		flex-basis: 40%;
	}
	.pba-section5-back{
		background: #000;	
			
	}	
	.pba-section6-back{
		background: #000;		
	}
	.pba-section6-container-6__title{
		font-weight: bold;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 10px;
	}
	.pba-section6-container-6__text{
		font-weight: normal;
		font-size: 18px;
		line-height: 160%;
		color: #EEEEEE;		
		margin: 0;
	}
	.pba-section6-container{
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin: 80px 0;
	}
	.pba-section6-container-1{
		flex-basis: 32%;
	}
	.pba-section6-container-2{
		flex-basis: 65%;
	}
	.pba-section7-back{
		background: #000;
	}
	.pba-section7-container{
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.pba-section7-container-1{
		flex-basis: 63%;
	}
	.pba-section7-container-2{
		flex-basis: 33%;
	}
	.pba-section7-container-7__title{
		font-weight: bold;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 10px;		
	}
	.pba-section7-container-7__text{
		font-weight: normal;
		font-size: 18px;
		line-height: 160%;
		color: #EEEEEE;		
		margin: 0;	
	}
	.pba-section8-back{
		background: #000;
margin-top: 75px;
	}
	.pba-section7-container-8__title{
		font-weight: bold;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;	
		text-align: center;		
		margin: 0;
		margin-bottom: 45px;
	}
</style>
<style>
.pba-computers{
margin-bottom: 75px;
}
	@media screen and (max-width: 1024px){
		.pba-section2-container{
			flex-direction: column-reverse;
		}
		.pba-section2-back{
			min-height: auto;
			margin: 40px 0;
		}
		.pba-section2-container-1__link.mobile{
			display: block;
			width: 100%;
			max-width: inherit;
    		text-align: center;
		}
		.pba-section7-container-8__title,.pba-section7-container-7__title,.pba-section6-container-6__title,.pba-section2-container-4__title,.pba-section2-container-3__title,.pba-section2-container-1__title{
			font-size: 28px !important;
			text-align: left;
			margin-bottom: 10px !important;
		}
		.pba-section7-container-7__text,.pba-section6-container-6__text,.pba-section2-container-4__text,.pba-section2-container-3__text,.pba-section2-container-1__text{
			font-size: 16px !important;
			text-align: left !important; 
			margin: 0 ;
			max-width: 100%;
		}
		.pba-section2-container-1__link{
			display: none;
		}
		.pba-section2-container-2{
			margin-top: 15px;
		}
		.pba-section3-container-1-mobile{
			display: block !important;
		}
		.pba-section3-back{
			background: #000 !important;
			min-height: auto !important;
		}
		.pba-section4-container-1{
			flex-basis: 100% !important;
		}
		.pba-section4-back{
			min-height: auto !important;
			background: #000 !important; 
		}
		.pba-section4-container{
			flex-direction: column;
		}
		.pba-section6-container{
			flex-direction: column;
		}
		.pba-section7-container{
			flex-direction: column-reverse;
		}
		.pba-section3-back,.pba-section4-back,.pba-section5-back-content,.pba-section6-back,.pba-section7-back,.pba-section8-back{
			margin: 40px 0 !important;
		}
	}
	.pba-section2-container-1__link-mobile{
		display: none;
	}
	.pba-section2-container-1__link.mobile,.pba-section3-container-1-mobile,.pba-section3-container-1-mobile{
		display: none;
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