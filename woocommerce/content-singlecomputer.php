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
?>
<style type="text/css">
	header{
		position: inherit;
	}
	.mywoo-header-com-landing{
		position: sticky;
		top: 0;
		z-index: 1499
	}
</style>

<?php
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */


if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'mywoo-landing-computer-container', $product ); ?>>
<div class="computer-main-background">
	<div class="bm-adaptive bm-margin bm">
		<div class="mywoo-single-product bm-mywoo-computer-landing">
			<?php do_action( 'woocommerce_before_main_content' ); ?>
		<?php do_action( 'woocommerce_before_single_product' ); ?>
		<div class="mywoo-product-container">
			<div class="mywoo-single-product">
				<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
			</div>
			<div class="mywoo-single-product-content mywoo-single-cart-price-cart-musingle mywoo-computer-sinvar">
				<?php do_action( 'mywoo_des' ); ?>
				</div>
				<div class='cart-line'></div>
				<div class="mywoo-computer-pc-best">
					<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider style="width: 100%;">	
						<div class="uk-slider-items uk-child-width-1-2 uk-child-width-3@s uk-child-width-1-3@m fourth-slider-content" style="width: 100%;">		    
							<div class="mywoo-single-benefite-block uk-panel">
								<p class="mywoo-single-benefite-block__text mywoo-single-benefite-block__text-1">Персональный<br>саппорт 24/7</p>
							</div>
							<div class="mywoo-single-benefite-block uk-panel">
								<p class="mywoo-single-benefite-block__text mywoo-single-benefite-block__text-2">Протестируй<br>в демозоне</p>
							</div>
							<div class="mywoo-single-benefite-block uk-panel">
								<p class="mywoo-single-benefite-block__text mywoo-single-benefite-block__text-3">Быстрая<br>доставка</p>
							</div>	
						</div>		        			    
						<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
						<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
					</div>														
				</div>
			</div>	
		</div>
	</div>
</div>	
</div>
<div id="charachteristik"></div>
<div class="mywoo-header-com-landing">
	<div class="bm-computer-landing_header">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-computer-landing-header">
				<div class="bm-computer-landing-header-breadcrumb">
					<nav class="navbar navbar-expand-lg header-nav bm-computer-landing-header-menu__nav">			  
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav">
					      <li class="nav-item">
					        <a class="nav-link header-link uncor" href="#charachteristik">Характеристики</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link header-link uncor" href="#preimushestva">Преимущества</a>
					      </li>		
					      <li class="nav-item">
					        <a class="nav-link header-link uncor" href="#gallery">Галерея</a>
					      </li>			      				      	      
					    </ul>
					  </div>
					</nav>
				</div>
				<div class="bm-computer-landing-header-menu">
					<p id="computer-price">Цена: <span class="computer-price-span"></span></p>
					<p class="bm-computer-landing-header-menu__link">Купить</p>
				</div>
			</div>
			<div class="bm-computer-landing-header-mobile">			
				<div class="bm-computer-landing-header-mobile-container-link">
					<div class="topnav" id="myTopnav">
					  <a href="#charachteristik" class="active">Характеристики</a>
					  <a href="#preimushestva">Преимущества</a>
					  <a href="#gallery">Галерея</a> 
					  <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
					</div>					
				</div>
				<div class="bm-computer-landing-header-mobile-container-button">
					<p class="bm-computer-landing-header-menu__link">Купить</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bm-adaptive bm-margin bm">
	<div class="mywoo-single-tabs-landin-comp">

		<div class="charachter">
			<div class="mywoo-comp-attr">
				<div class="mywoo-comp-attr-title">
					<p class="mywoo-comp-attr-title__title">Технические характеристики</p>
				</div>
				<div class="mywoo-comp-attr-cont" style="margin-top: 15px;">
					<img src="/wp-content/uploads/video-gray.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Видеокарта</span>
						<span class="videokarta-attr attr-option"><?php the_field('videokarta') ?></span>
					</p>
				</div>
				
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/proc-gray.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Процессор</span>
						<span class="proczessor-attr attr-option"><?php the_field('proczessor') ?></span>
					</p>
				</div>	
				
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/mat.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Материнская плата</span>
						<span class="materinskaya_plata-attr attr-option"><?php the_field('materinskaya_plata') ?></span>
					</p>
				</div>
				
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/opera.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Оперативная память</span>
						<span class="operativnaya_pamyat-attr attr-option"><?php the_field('operativnaya_pamyat') ?></span>
					</p>
				</div>
				
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/ssd-grey.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>SSD накопитель</span>
						<span class="ssd_nakopitel-attr attr-option"><?php the_field('ssd_nakopitel') ?></span>
					</p>
				</div>
				<?php 
				
				$ssd25 = get_field("ssd_25");
				if ($ssd25){?>
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/ssd-grey.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>SSD 2.5</span>
						<span class="ssd25_nakopitel-attr attr-option"><?php the_field('ssd_25') ?></span>
					</p>
				</div>							
				<?php }	?>	
					
				<?php 
				
				$korpus = get_field("korpus");
				if ($korpus){?>	
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/disk.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Корпус</span>
						<span class="korpus-attr attr-option"><?php the_field('korpus') ?></span>
					</p>
				</div>												
				<?php }	?>	
				<?php 
				
				$svo = get_field("svo");
				if ($svo){?>	
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/disk.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Система охлаждения</span>
						<span class="svo-attr attr-option"><?php the_field('svo') ?></span>
					</p>
				</div>					
				
				<?php }	?>
				<?php 
				
				$kulera = get_field("kulera");
				if ($kulera){?>
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/disk.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Кулера</span>
						<span class="kulera-attr attr-option"><?php the_field('kulera') ?></span>
					</p>
				</div>						
				<?php }	?>
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/disk.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Жесткий диск</span>
						<span class="zhestkij_disk-attr attr-option"><?php the_field('zhestkij_disk') ?></span>
					</p>
				</div>	
				
				<div class="mywoo-comp-attr-cont">
					<img src="/wp-content/uploads/bp.svg" class="mywoo-comp-attr-cont__img">
					<p class="mywoo-comp-attr-cont__text">
						<span>Блок питания</span>
						<span class="blok_pitaniya-attr attr-option"><?php the_field('blok_pitaniya') ?></span>
					</p>
				</div>	
				<div class="more-config">
					<p class="more-config-button">Изменить конфигурацию</p>
				</div>									
			</div>
			<div id="preimushestva"></div>
		</div>
<?php 
	$gta_new = get_field( "gta_fps" );
	$pubg_new = get_field( "fps_pubg" );

	$acv = get_field( "fps_assassins_creed_valhalla" );
	$lolhd = get_field( "fps_league_of_legends" );
	$fortnitehd = get_field( "fps_fortnite" );
	$codmwhd = get_field( "fps_call_of_duty_modern_warfare" );
	$apexhd = get_field( "fps_apex_legends" );
	$valoranthd = get_field( "fps_valorant" );
	$dotahd = get_field( "fps_dota_2" );
	$dbdhd = get_field( "fps_dead_by_daylight" );
	$csgofullhd = get_field( "csgo-fps-fullhd" );

	$gta2k = get_field( "gta-fps-2k" );
	$pubk2k = get_field( "pubg-fps-2k" );
	$asasin2k = get_field( "assassins_creed_valhalla-fps-2k" );
	$lol2k = get_field( "league_of_legends-fps-2k" );
	$fortnite2k = get_field( "fortnite-fps-2k" );
	$cof2k = get_field( "call_of_duty_modern_warfare-fps-2k" );
	$apex2k = get_field( "apex_legends-fps-2k" );
	$valorant2k = get_field( "valorant-fps-2k" );
	$dota2k = get_field( "dota_2-fps-2k" );
	$dbd2k = get_field( "dead_by_daylight-fps-2k" );
	$csgo2k = get_field( "csgo-fps-2k" );

	$gta4k = get_field( "gta-fps-4k" );
	$pubg4k = get_field( "pubg-fps-4k" );
	$asasin4k = get_field( "assassins_creed_valhalla-fps-4k" );
	$lol4k = get_field( "league_of_legends-fps-4k" );
	$fortnite4k = get_field( "fortnite-fps-4k" );
	$cof4k = get_field( "call_of_duty_modern_warfare-fps-4k" );
	$apex4k = get_field( "apex_legends-fps-4k" );
	$valorant4k = get_field( "valorant-fps-4k" );
	$dota4k = get_field( "dota_2-fps-4k" );
	$dbd4k = get_field( "dead_by_daylight-fps-4k" );
	$csgo4k = get_field( "csgo-fps-4k" );
?>
		<div class="my-woo-single-landing-com-fps">
			<div class="my-woo-single-landing-com-fps-title">
				<h2 class="my-woo-single-landing-com-fps-title_text">
					FPS в играх
				</h2>
			</div>
			<div class="my-woo-single-landing-com-fps-games">
				<div class="my-woo-single-landing-com-fps-games-title">
					<p class="my-woo-single-landing-com-fps-games-title__text">
						1. Выбери игру
					</p>
				</div>
				<div class="my-woo-single-landing-com-fps-game-container">
					<div class="my-woo-single-landing-com-fps-game dota-2 active">
						<img src="/wp-content/uploads/dota2new.png">
					</div>
					<div class="my-woo-single-landing-com-fps-game game-fortnite">
						<img src="/wp-content/uploads/Fortnight.png">
					</div>		
					<div class="my-woo-single-landing-com-fps-game game-gta">
						<img src="/wp-content/uploads/GTAnew.png">
					</div>
					<div class="my-woo-single-landing-com-fps-game game-csgo">
						<img src="/wp-content/uploads/cs-go.png">
					</div>
					<div class="my-woo-single-landing-com-fps-game game-pubg">
						<img src="/wp-content/uploads/Pubg.png">
					</div>
					<div class="my-woo-single-landing-com-fps-game game-asasin">
						<img src="/wp-content/uploads/assassins-creed-valhala.png">
					</div>
					<div class="my-woo-single-landing-com-fps-game game-cof">
						<img src="/wp-content/uploads/call-of-duty-modern-warfare.png">
					</div>
					<div class="my-woo-single-landing-com-fps-game game-apex">
						<img src="/wp-content/uploads/apex-legends.png">
					</div>					
				</div>
			</div>
			<div class="my-woo-single-landing-com-fps-games">
				<div class="my-woo-single-landing-com-fps-games-title">
					<p class="my-woo-single-landing-com-fps-games-title__text">
						2. Выбери разрешение
					</p>
				</div>
				<div class="my-woo-single-landing-com-fps-quan-container my-woo-single-landing-com-fps-game-container">
					<div class="my-woo-single-landing-com-fps-quan my-woo-single-landing-com-fps-quantity-box quantity-full-hd active" style="margin-left: 0;">
						<p class="my-woo-single-landing-com-fps-quantity">
							1920 x 1080 (FULL HD)
						</p>
					</div>
					<div class="my-woo-single-landing-com-fps-quan my-woo-single-landing-com-fps-quantity-box quantity-WQHD">
						<p class="my-woo-single-landing-com-fps-quantity">
							2560 X 1440 (WQHD)
						</p>
					</div>		
					<div class="my-woo-single-landing-com-fps-quan my-woo-single-landing-com-fps-quantity-box quantity-4k" style="margin-right: 0;">
						<p class="my-woo-single-landing-com-fps-quantity">
							3840 X 2160 (4K)
						</p>
					</div>						
				</div>
			</div>	
			<div class="my-woo-single-landing-com-fps-games">
				<div class="my-woo-single-landing-com-fps-games-title">
					<p class="my-woo-single-landing-com-fps-games-title__text">
						3. Наслаждайся
					</p>
				</div>
				<div class="my-woo-single-landing-com-fps-line-gnerator-container">
					<div class="my-woo-single-landing-com-fps-line-gnerator">
						<div class="mywoo-test-line">
							<div class="wow my-woo-single-landing-com-fps-line-gnerator-line" style="width: <?php the_field('fps_dota_2'); ?>">
								<div class="wow my-woo-single-landing-com-fps-line-gnerator-line__line-done"></div>	

							</div>							
						</div>
						<!-- <img src="/wp-content/uploads/background-fps.svg" class="my-woo-fps-image-line"> -->
						
						<p class="fps-counter-line-60">60 FPS</p>
						<p class="fps-counter-line-144">144 FPS</p>
						<p class="fps-counter-line-240">240 FPS</p>
						<p class="fps-counter-line-360">360 FPS</p>
					</div>	
					
				</div>

			</div>				
		</div>		
	</div>
</div>
	<div class="bm-adaptive bm-margin bm" >
		<div class="mywoo-landing-computer-title-advantages-title">
			<h2 class="mywoo-landing-computer-title-advantages__title">
				Преимущества BOILING MACHINE
			</h2>
			<h3 class="mywoo-landing-computer-title-advantages__subtitle">
				Мы предлагаем обслуживание PREMIUM класса
			</h3>
		</div>		
	</div>
	<div class="mywoo-landing-computer-title-advantages" style="background: linear-gradient(90deg, #161616 1.53%, #101010 53.33%, #161616 550%); ">
		<div class='cart-line-advantages'></div>
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content">
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<h2 class="mywoo-landing-computer-title-advantages-content-title kach-sborka">
						Качественная сборка
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						Наше кредо получать удовольствие от игр. Для наших компьютеров мы отбираем надежные и проверенные комплектующие, дабы минимизировать возможный брак и износ. Мы нацелены на качество наших товаров и сборок, каждая деталь подбирается с учетом ваших пожеланий и лучшего коэффициента цены,эффективности и надежности. Наша работа заключается в сохранении вашего времени, при получении максимального удовольствия.
					</p>					
				</div>
				<div class="mywoo-landing-computer-title-advantages-content-img">
					<img src="/wp-content/uploads/picture1.png">
				</div>
			</div>
		</div>
		<div class='cart-line-advantages'></div>
	</div>
	<div class="mywoo-landing-computer-title-advantages">
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content left-right">
				<div class="mywoo-landing-computer-title-advantages-content-img">
					<img src="/wp-content/uploads/fort.png">
				</div>				
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<h2 class="mywoo-landing-computer-title-advantages-content-title testoravanie-landing">
						Тестирование
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						Перед продажей каждый компьютер проходит комплексную проверку на выявление брака. Специальными тестовыми программами нагружаются все комплектующие Вашей новой системы. Результаты прохождения всех тестов вносятся в специальный лист отчета, который вы получаете вместе с другими документами.
					</p>					
				</div>

			</div>
		</div>
		<div class='cart-line-advantages'></div>
	</div>
	<div class="mywoo-landing-computer-title-advantages" style="background: linear-gradient(90deg, #161616 1.53%, #101010 53.33%, #161616 550%); position: relative;">
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content">
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<h2 class="mywoo-landing-computer-title-advantages-content-title garantia-landing">
						Гарантия 10 000 лет
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						Наши игровые ПК доведены до предела совершенства. Мы абсолютно уверены в качестве наших сборок, поэтому мы предоставляем гарантию на 10 000 лет! Если вдруг у вас что-то не работает или сломалось не по Вашей вине, то мы тут же придем к Вам на помощь и все починим, на время ремонта мы предоставим Вам временный игровой компьютер.
					</p>					
				</div>
				<div class="mywoo-landing-computer-title-advantages-content-img">
					<img src="/wp-content/uploads/picture-3-1.png">
				</div>
				
			</div>
		</div>
		<div class='cart-line-advantages'></div>
		
	</div>	
	<div class="mywoo-landing-computer-title-advantages">
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content left-right">
				<div class="mywoo-landing-computer-title-advantages-content-img">
					<img src="/wp-content/uploads/hill.png">
				</div>				
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<h2 class="mywoo-landing-computer-title-advantages-content-title personal-sup-landing">
						Персональный саппорт 24/7
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						Приобретая наш игровой компьютер, мы предоставляем возможность получить техническую поддержку в режиме 24/7, у вашего личного менеджера. Для нас важно, чтобы каждый наш клиент получил лучший сервис, который только возможен.
					</p>					
				</div>

			</div>
		</div>
		<div class='cart-line-advantages'></div>
	</div>	
	<div class="mywoo-landing-computer-title-advantages" style="background: linear-gradient(90deg, #161616 1.53%, #101010 53.33%, #161616 550%); ">
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content">
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<h2 class="mywoo-landing-computer-title-advantages-content-title fast-del-landing">
						Быстрая доставка
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						Быстрее только ветер! Наши курьеры используют speedhack. Читы это плохо, но для Вас мы сделаем исключение.
					</p>					
				</div>
				<div class="mywoo-landing-computer-title-advantages-content-img">
					<img src="/wp-content/uploads/picture-5-1.png">
				</div>
			</div>
		</div>
		<div class='cart-line-advantages'></div>
	</div>
	<div class="bm-adaptive bm-margin bm">
		<div class="mywoo-landing-computer-title-advantages-title">
			<h2 class="mywoo-landing-computer-title-advantages__title">
				Основные комплектующие <?php the_title(); ?>
			</h2>
		</div>		
	</div>	
	<div class="mywoo-landing-computer-title-advantages complekt">
		<div class='cart-line-advantages'></div>
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content left-right">
				<div class="mywoo-landing-computer-title-advantages-content-img">
					<img style="align-self: flex-start;" src="<?php the_field('izobrazhenie_dlya_videokarty'); ?>">
				</div>				
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<p class="mywoo-landing-computer-title-advantages-content-name video-karta-landing">Видеокарта</p>
					<h2 class="mywoo-landing-computer-title-advantages-content-title">
						<?php the_field('videokarta'); ?>
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						<?php the_field('opisanie_dlya_videokarty'); ?>
					</p>					
				</div>

			</div>
		</div>
		<div class='cart-line-advantages'></div>
	</div>
	<div class="mywoo-landing-computer-title-advantages complekt" style="background: linear-gradient(90deg, #161616 1.53%, #101010 53.33%, #161616 550%); ">
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content">
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<p class="mywoo-landing-computer-title-advantages-content-name processor-landing">Процессор</p>
					<h2 class="mywoo-landing-computer-title-advantages-content-title">
						<?php the_field('proczessor'); ?>
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						<?php the_field('opisanie_dlya_proczessora'); ?>
					</p>					
				</div>
				<div class="mywoo-landing-computer-title-advantages-content-img proccesor-img processor-mat-img">
					<img style="align-self: flex-start;" src="<?php the_field('izobrazhenie_dlya_proczessora'); ?>">
				</div>
			</div>
		</div>
		<div class='cart-line-advantages'></div>
	</div>	
	<div class="mywoo-landing-computer-title-advantages complekt">
		<div class="bm-adaptive bm-margin bm">
			<div class="mywoo-landing-computer-title-advantages-content left-right">
				<div class="mywoo-landing-computer-title-advantages-content-img processor-mat-img processor-mat-img-solo">
					<img style="align-self: flex-start;" src="<?php the_field('izobrazhenie_dlya_materinskoj_platy'); ?>">
				</div>				
				<div class="mywoo-landing-computer-title-advantages-content-texting">
					<p class="mywoo-landing-computer-title-advantages-content-name materinka-landing">Материнская плата</p>
					<h2 class="mywoo-landing-computer-title-advantages-content-title">
						<?php the_field('materinskaya_plata'); ?>
					</h2>
					<p class="mywoo-landing-computer-title-advantages-content-text">
						<?php the_field('opisanie_dlya_materinskoj_platy'); ?>
					</p>					
				</div>

			</div>
		</div>
		<div class='cart-line-advantages'></div>
	</div>
<!--
	<div class="mywoo-computer-slider" id="gallery">
		<div class="mywoo-computer-slider-title">
			<h2 class="mywoo-landing-computer-title-advantages__title">
				ГАЛЕРЕЯ
			</h2>
		</div>
		<?php 

		$images = get_field('gallereya_tovara');
		$size = 'full'; // (thumbnail, medium, large, full или произвольный размер)
		?>
		<div uk-slider="" class="uk-slider">
			<div class="uk-position-relative">
				<div class="uk-slider-container">
					<div class="uk-slider-items uk-grid uk-grid-small" uk-grid="" uk-lightbox="" >
						<?/*
						if( $images ): ?>
							        <?php foreach( $images as $image ): ?>
							            <div class="uk-width-5-6 uk-child-width-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-6@l uk-width-1-6xl uk-active uk-first-column uk-slider-padding" tabindex="-1" style="">
						    				<div class="uk-grid uk-grid-small uk-slider-flex" uk-grid="" style="height: 100%;">
						    					<a href="<?php echo $image['url']; ?>">
							            		<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
							            	</a>
							            	</div>
							        	</div>
							        <?php endforeach; ?>					    
						<?php endif; */?>
					</div>
				</div>	
			</div>
		</div>


	</div>-->
</div>




<?php do_action( 'woocommerce_after_single_product' ); ?>
<script>
	jQuery(function($) {
		var userName = '<?php echo $gta_new;?>';
		var pubggame = '<?php echo $pubg_new;?>';		


		var js_acv = '<?php echo $acv; ?>';
		var js_lolhd = '<?php echo $lolhd; ?>';
		var js_fortnitehd = '<?php echo $fortnitehd; ?>';
		var js_codmwhd = '<?php echo $codmwhd; ?>';
		var js_apexhd = '<?php echo $apexhd; ?>';
		var js_valoranthd = '<?php echo $valoranthd; ?>';
		var js_dotahd = '<?php echo $dotahd; ?>';
		var js_csgofullhd = '<?php echo $csgofullhd; ?>';

		var js_gta2k = '<?php echo $gta2k; ?>';
		var js_pubk2k = '<?php echo $pubk2k; ?>';
		var js_asasin2k = '<?php echo $asasin2k; ?>';
		var js_lol2k = '<?php echo $lol2k; ?>';
		var js_fortnite2k = '<?php echo $fortnite2k; ?>';
		var js_cof2k = '<?php echo $cof2k; ?>';
		var js_apex2k = '<?php echo $apex2k; ?>';
		var js_valorant2k = '<?php echo $valorant2k; ?>';
		var js_dota2k = '<?php echo $dota2k; ?>';
		var js_csgo2k = '<?php echo $csgo2k; ?>';

		var js_gta4k = '<?php echo $gta4k; ?>';
		var js_pubg4k = '<?php echo $pubg4k; ?>';
		var js_asasin4k = '<?php echo $asasin4k; ?>';
		var js_lol4k = '<?php echo $lol4k; ?>';
		var js_fortnite4k = '<?php echo $fortnite4k; ?>';
		var js_cof4k = '<?php echo $cof4k; ?>';
		var js_apex4k = '<?php echo $apex4k; ?>';
		var js_valorant4k = '<?php echo $valorant4k; ?>';
		var js_dota4k = '<?php echo $dota4k; ?>';
		var js_dbd4k = '<?php echo $dbd4k; ?>';
		var js_csgo4k = '<?php echo $csgo4k; ?>';


		(function(){
			//Сохраняем ссылку на стандартный метод jQuery
			var originalAddClassMethod = jQuery.fn.addClass;
			//Переопределяем
			$.fn.addClass = function(){
				var result = originalAddClassMethod.apply(this, arguments);
				//Инициализируем событие смены класса
				$(this).trigger('cssClassChanged');
				return result;
			}
		})();

		$(function(){
			
     			var price = $(".mywoo-class-simple").text();
    			$(".computer-price-span").text(price);    
			
			$(".my-woo-single-landing-com-fps-game").bind('cssClassChanged', function(){ 

				if( ($(".dota-2").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',js_dotahd);					
						/*$('.fps-container_text').text(js_dotahd);	*/					
				   }
				if( ($(".dota-2").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',js_dota2k);					
						/*$('.fps-container_text').text(js_dota2k);	*/					
				   }				
				if( ($(".dota-2").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',js_dota4k);					
						/*$('.fps-container_text').text(js_dota4k);	*/					
				   }							
					
				if( ($(".game-fortnite").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_fortnitehd));					
						/*$('.fps-container_text').text(js_fortnitehd);*/						
				   }
				if( ($(".game-fortnite").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_fortnite2k));					
						/*$('.fps-container_text').text(js_fortnite2k);*/						
				   }				
				if( ($(".game-fortnite").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_fortnite4k));					
						/*$('.fps-container_text').text(js_fortnite4k);	*/					
				   }					
				
				
				if( ($(".game-gta").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(userName));					
						/*$('.fps-container_text').text(userName);*/						
				   }
				if( ($(".game-gta").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_gta2k));					
						/*$('.fps-container_text').text(js_gta2k);						
				   }				
				if( ($(".game-gta").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_gta4k));					
						/*$('.fps-container_text').text(js_gta4k);*/						
				   }						
				
				
				if( ($(".game-pubg").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(pubggame));					
						/*$('.fps-container_text').text(pubggame);*/						
				   }
				if( ($(".game-pubg").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_pubk2k));					
						/*$('.fps-container_text').text(js_pubk2k);	*/					
				   }				
				if( ($(".game-pubg").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_pubg4k));					
						/*$('.fps-container_text').text(js_pubg4k);	*/					
				   }						
							
				if( ($(".game-csgo").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_csgofullhd));					
						/*$('.fps-container_text').text(js_csgofullhd);	*/					
				   }
				if( ($(".game-csgo").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_csgo2k));					
						/*$('.fps-container_text').text(js_csgo2k);	*/					
				   }				
				if( ($(".game-csgo").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_csgo4k));					
						/*$('.fps-container_text').text(js_csgo4k);	*/					
				   }						
											

				if( ($(".game-asasin").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_acv));					
						/*$('.fps-container_text').text(js_acv);*/						
				   }
				if( ($(".game-asasin").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_asasin2k));					
						/*$('.fps-container_text').text(js_asasin2k);*/						
				   }				
				if( ($(".game-asasin").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_asasin4k));					
						/*$('.fps-container_text').text(js_asasin4k);*/						
				   }						
							
				if( ($(".game-lol").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_lolhd));					
						/*$('.fps-container_text').text(js_lolhd);*/						
				   }
				if( ($(".game-lol").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_lol2k));					
						/*$('.fps-container_text').text(js_lol2k);*/						
				   }				
				if( ($(".game-lol").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_lol4k));					
						/*$('.fps-container_text').text(js_lol4k);*/						
				   }

				if( ($(".game-cof").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_codmwhd));					
						/*$('.fps-container_text').text(js_codmwhd);*/						
				   }
				if( ($(".game-cof").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_cof2k));					
						/*$('.fps-container_text').text(js_cof2k);*/						
				   }				
				if( ($(".game-cof").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_cof4k));					
						/*$('.fps-container_text').text(js_cof4k);	*/					
				   }


				if( ($(".game-apex").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_apexhd));					
						/*$('.fps-container_text').text(js_apexhd);	*/					
				   }
				if( ($(".game-apex").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_apex2k));					
						/*$('.fps-container_text').text(js_apex2k);	*/					
				   }				
				if( ($(".game-apex").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_apex4k));					
						/*$('.fps-container_text').text(js_apex4k);	*/					
				   }

				if( ($(".game-dbd").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_dbdhd));					
						/*$('.fps-container_text').text(js_dbdhd);	*/					
				   }
				if( ($(".game-dbd").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_dbd2k));					
						/*$('.fps-container_text').text(js_dbd2k);	*/					
				   }				
				if( ($(".game-dbd").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_dbd4k));					
						/*$('.fps-container_text').text(js_dbd4k);	*/					
				   }








				
				
				
			});


			$(".my-woo-single-landing-com-fps-quan").bind('cssClassChanged', function(){ 

				if( ($(".dota-2").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',js_dotahd);					
						/*$('.fps-container_text').text(js_dotahd);*/						
				   }
				if( ($(".dota-2").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',js_dota2k);					
						/*$('.fps-container_text').text(js_dota2k);*/						
				   }				
				if( ($(".dota-2").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',js_dota4k);					
						/*$('.fps-container_text').text(js_dota4k);*/						
				   }					
				
				if( ($(".game-fortnite").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_fortnitehd));					
						/*$('.fps-container_text').text(js_fortnitehd);*/						
				   }
				if( ($(".game-fortnite").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_fortnite2k));					
						/*$('.fps-container_text').text(js_fortnite2k);*/						
				   }				
				if( ($(".game-fortnite").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_fortnite4k));					
						/*$('.fps-container_text').text(js_fortnite4k);*/						
				   }						
				
				if( ($(".game-gta").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(userName));					
						/*$('.fps-container_text').text(userName);*/						
				   }
				if( ($(".game-gta").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_gta2k));					
						/*$('.fps-container_text').text(js_gta2k);*/						
				   }				
				if( ($(".game-gta").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_gta4k));					
						/*$('.fps-container_text').text(js_gta4k);*/						
				   }						
				
				if( ($(".game-pubg").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(pubggame));					
						/*$('.fps-container_text').text(pubggame);*/						
				   }
				if( ($(".game-pubg").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_pubk2k));					
						/*$('.fps-container_text').text(js_pubk2k);	*/					
				   }				
				if( ($(".game-pubg").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_pubg4k));					
						/*$('.fps-container_text').text(js_pubg4k);	*/					
				   }					
				
								
				if( ($(".game-csgo").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_csgofullhd));					
						/*$('.fps-container_text').text(js_csgofullhd);*/						
				   }
				if( ($(".game-csgo").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_csgo2k));					
						/*$('.fps-container_text').text(js_csgo2k);*/						
				   }				
				if( ($(".game-csgo").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_csgo4k));					
						/*$('.fps-container_text').text(js_csgo4k);*/						
				   }						
				
				if( ($(".game-asasin").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_acv));					
						/*$('.fps-container_text').text(js_acv);*/						
				   }
				if( ($(".game-asasin").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_asasin2k));					
						/*$('.fps-container_text').text(js_asasin2k);*/						
				   }				
				if( ($(".game-asasin").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_asasin4k));					
						/*$('.fps-container_text').text(js_asasin4k);*/						
				   }						
											
				if( ($(".game-lol").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_lolhd));					
						/*$('.fps-container_text').text(js_lolhd);*/						
				   }
				if( ($(".game-lol").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_lol2k));					
						/*$('.fps-container_text').text(js_lol2k);*/						
				   }				
				if( ($(".game-lol").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_lol4k));					
						/*$('.fps-container_text').text(js_lol4k);*/						
				   }				
				
				if( ($(".game-cof").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_codmwhd));					
						/*$('.fps-container_text').text(js_codmwhd);*/						
				   }
				if( ($(".game-cof").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_cof2k));					
						/*$('.fps-container_text').text(js_cof2k);*/						
				   }				
				if( ($(".game-cof").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_cof4k));					
						/*$('.fps-container_text').text(js_cof4k);*/						
				   }
				
			if( ($(".game-apex").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_apexhd));					
						/*$('.fps-container_text').text(js_apexhd);	*/					
				   }
				if( ($(".game-apex").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_apex2k));					
						/*$('.fps-container_text').text(js_apex2k);*/						
				   }				
				if( ($(".game-apex").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_apex4k));					
						/*$('.fps-container_text').text(js_apex4k);	*/					
				   }				
				if( ($(".game-dbd").hasClass("active")) && ($(".quantity-full-hd").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_dbdhd));					
						/*$('.fps-container_text').text(js_dbdhd);*/						
				   }
				if( ($(".game-dbd").hasClass("active")) && ($(".quantity-WQHD").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_dbd2k));					
						/*$('.fps-container_text').text(js_dbd2k);*/						
				   }				
				if( ($(".game-dbd").hasClass("active")) && ($(".quantity-4k").hasClass("active"))){
						$('.mywoo-test-line').html("<div class='wow my-woo-single-landing-com-fps-line-gnerator-line'><div class='wow my-woo-single-landing-com-fps-line-gnerator-line__line-done'></div></div>");
						$('.my-woo-single-landing-com-fps-line-gnerator-line').css('width',(js_dbd4k));					
						/*$('.fps-container_text').text(js_dbd4k);	*/					
				   }				
				
				
				
				
				
			});
		});		
	
	
	});



	
</script>