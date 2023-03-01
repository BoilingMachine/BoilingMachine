<?php get_header(); ?>

<?php $queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id; ?>

<link rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/css/computers.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="/wp-content/themes/boiling_machine/assets/js/jquery.counterup.min.js"></script>

<div class="collab-head">
	<div class="bm-adaptive bm-margin bm">
		<div class="collab-head-container">
			<div class="collab-head-container-name">
				<a href="#top" class="collab-head-container-name__text__link">
					<h2 class="collab-head-container-name__text">
						<?php echo the_title(); ?>
					</h2>
				</a>				
			</div>
			<div class="collab-head-container-menu">
				<nav uk-navbar>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav collab-menu">
							<li><a href="#about" class="uncor">О серии</a></li>
							<li>
								<a href="#" class="dropdown-head">Характеристики ПК</a>
								<div class="uk-navbar-dropdown secons-dropdown">
									<ul class="uk-nav uk-navbar-dropdown-nav">
										<li><a href="#full" class="uncor">Подробно о ПК</a></li>
										<li><a href="#videocard" class="uncor">Видеокарта</a></li>
										<li><a href="#proc" class="uncor">Процессор</a></li>
										<li><a href="#opera" class="uncor">Оперативная память</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#konfig" class="uncor">Конфигурация</a></li>
							<li><a href="#garanty" class="uncor">Гарантия</a></li>
							<li><a href="#gallery" class="uncor">Галерея</a></li>
						</ul>
					</div>
				</nav>				
			</div>
			<div class="collab-head-container-button">
				<a href="#buycomputers" class="collab-head-container-button-text uncor">Купить ПК</a>
			</div>
		</div>
		<div class="collab-head-container-mobile">
			<div class="collab-head-container-name">
				<a href="#top" class="collab-head-container-name__text__link">
					<h2 class="collab-head-container-name__text">
						<?php echo the_title(); ?>
					</h2>
				</a>				
			</div>
			<div class="collab-head-container-menu-mobile">
				<div class="">
					<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
						<li class="uk-parent">
							<a href="#" class="mobile-parent-angle"></a>
							<ul class="uk-nav-sub mobile-navmenu">
								<li><a href="#about" class="uncor">О серии</a></li>
								<li><a href="#full" class="uncor">Подробно о ПК</a></li>
								<li><a href="#videocard" class="uncor">Видеокарта</a></li>
								<li><a href="#proc" class="uncor">Процессор</a></li>
								<li><a href="#opera" class="uncor">Оперативная память</a></li>
								<li><a href="#konfig" class="uncor">Конфигурация</a></li>
								<li><a href="#garanty" class="uncor">Гарантия</a></li>
								<li><a href="#gallery" class="uncor">Галерея</a></li>
							</ul>
						</li>
					</ul>
				</div>				
			</div>
			<div class="collab-head-container-button">
				<a href="#buycomputers" class="collab-head-container-button-text uncor">Купить ПК</a>
			</div>			
		</div>
	</div>
</div>
<style>
	@media screen and (min-width:576px) and (max-width:768px){
		.collab-head-container-mobile .collab-head-container-button{
			flex-basis: 22% !important;
		}
		.collab-head-container-mobile .collab-head-container-name{
			flex-basis: 35% !important;
		}
		.collab-head-container-mobile .collab-head-container-menu-mobile{
			flex-basis: 43% !important;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 992px){
		.collab-head-container-mobile .collab-head-container-button{
			flex-basis: 20% !important;
		}
		.collab-head-container-mobile .collab-head-container-name{
			flex-basis: 35% !important;
		}
		.collab-head-container-mobile .collab-head-container-menu-mobile{
			flex-basis: 45% !important;
		}		
	}
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.collab-head-container-mobile .collab-head-container-button{
			flex-basis: 15% !important;
		}
		.collab-head-container-mobile .collab-head-container-name{
			flex-basis: 35% !important;
		}
		.collab-head-container-mobile .collab-head-container-menu-mobile{
			flex-basis: 50% !important;
		}		
	}	
	@media screen and (max-width: 1200px){
		.more-computers-collabs::after, .more-computers-collabs::before{content: "" !important; width: unset !important;}
		.collab-head-container-mobile .collab-head-container-button-text{
			width: fit-content;
			margin-right: 0;
			margin-left: auto;
		}
		.collab-head-container-mobile{display: flex !important;align-items: center;}
		.collab-head-container{display: none !important;}
		
		.collab-head-container-mobile .collab-head-container-name{
			flex-basis: 35%;
		}
		.collab-head-container-mobile .collab-head-container-menu-mobile{
			flex-basis: 20%;
			padding: 0 15px;
		}
		.collab-head-container-mobile .collab-head-container-button{
			flex-basis: 45%;
		}
		.mobile-navmenu{
			position: absolute;
			left: 0;
			width: 100%;
			top: 100%;
			background: #111;
			padding: 10px 20px !important;
		}
		.mobile-parent-angle{
			position: relative;
		}
		.uk-nav-parent-icon>.uk-parent>a::after{
			background-image: url(/wp-content/uploads/collab-angle.svg) !important;
			width: 16px;
			height: 22px;
			position: absolute;
			top: -100%;
			right: 0;
		}
		.mobile-navmenu a{
			color: #fff !important;
			font-size: 16px;
			padding-bottom: 8px;
			padding-top: 8px;
			border-bottom: 1px solid #2f2f2f;
		}
	}
	.collab-head-container-name__text__link:hover{
		text-decoration: none;
	}
	.collab-head-container-mobile{
		display: none;
	}
	.secons-dropdown li{
		transition: .3s;
	}
	.secons-dropdown li:hover{
		background-color: #1f1f1f !important;
		transition: .3s;
	}
	.secons-dropdown li a:hover{
		transition: 0.5s;
		color: #CBCBCB !important;
		
	}
	.uk-navbar-nav>li:hover>a, .uk-navbar-nav>li>a.uk-open, .uk-navbar-nav>li>a:focus{
		color: #CBCBCB;
	}
	.dropdown-head::after{
		content: url(/wp-content/uploads/nosik.svg);
		vertical-align: center;
		transform: translateY(-2px);
		margin-left: 8px;
	}
	.secons-dropdown li:last-child{
		margin-bottom: 0;
	}
	.secons-dropdown li:first-child{
		margin-top: 10px;
	}
	.secons-dropdown li:last-child{
		margin-bottom: 15px;
	}	
	.secons-dropdown li{
		padding: 10px 25px;
	}
	.secons-dropdown a{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 130% !important;
		color: #FFFFFF;		
		padding: 0 !important;
	}
	.secons-dropdown{
		background: #111111;
		border: 1px solid #282828;
		box-sizing: border-box;	
		width: 240px;
		padding: 0;
	}
	header{position: relative;}
	.collab-head{
		padding: 10px 0;
		position: sticky;
		top: 0;
		z-index: 9998;	
		background: #111111;
		border-bottom: 1px solid #2f2f2f;
	}
	.collab-head-container{
		display: flex;
		flex-wrap: wrap;
		align-items: center;
	}
	.collab-head-container-name{
		flex-basis: 15%;
	}
	.collab-head-container-name__text{
		font-style: normal;
		font-weight: bold;
		font-size: 17px;
		line-height: 100%;
		letter-spacing: 0.03em;
		text-transform: capitalize;
		color: #EDEDED;	
		margin: 0;
	}
	.collab-head-container-menu{
		flex-basis: 75%;
	}
	.collab-menu li a{
		font-style: normal;
		font-weight: 500;
		font-size: 17px;
		line-height: 100%;
		letter-spacing: 0.03em;
		color: #CBCBCB;		
		min-height: unset;
		text-transform: unset;
		padding: 0 18px;
		transition: 0.5s;
	}
	.collab-menu li a:hover{
		text-decoration: none;
		color: #fb1b1b;
		transition: 0.5s;
	}
	.collab-head-container-button{
		flex-basis: 10%;
	}
	.collab-head-container-button-text{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 100%;
		letter-spacing: 0.03em;
		color: #FFFFFF;		
		display: block;
		border: 1px solid #D91A1A;
		box-sizing: border-box;
		border-radius: 10px;	
		padding: 15px 25px 16px 25px;
		text-align: center;
		transition: .3s;
	}
	.collab-head-container-button-text:hover{
		text-decoration: none;
		color: #FFFFFF;
		background: #D91A1A;
		border: 1px solid #D91A1A;
		transition: .3s;
	}
	.bm-computer-landing-section6-back.first-computers{background: #000;}
	.grpzdc-banner-video{
		width: 100%;
	}

</style>

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
<div class="bm-landing-category-computers-section-1">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-computers-section-1-container">
			<h1 class="bm-landing-category-computers-section-1-container__title wow animate__animated animate__fadeInUp">
				<?php 
					if (get_field('zagolovk', $taxonomy . '_' .$term_id)){
						
						the_field('zagolovk', $taxonomy . '_' .$term_id); 
					}
					
				?>
			</h1>
			<p class="bm-landing-category-computers-section-1-container__text wow animate__animated animate__fadeInUp">
				<?php the_field('podzagolovok', $taxonomy . '_' .$term_id); ?>
			</p>		
		</div>
		<div class="bm-landing-category-computers-section-1-container-img">
			<img  id="computers-banner">

		</div>
	</div>
</div>
<style>
	#computers-banner {
	  content:url("<?php echo the_field('banner', $taxonomy . '_' .$term_id) ?>");
		width: 100%;
		visibility: visible;
	}
	@media screen and (max-width: 1200px){
		#computers-banner{
			content:url("<?php echo the_field('banner_mobilnyj', $taxonomy . '_' .$term_id) ?>");
			width: 100%;
			visibility: visible;			
		}
	}
		
</style>
<div class="bm-landing-category-computers-section-2" id="about">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-computers-section-2-container">
			<h2 class="bm-landing-category-computers-section-2-container__title wow animate__animated animate__fadeInUp">
				<?php the_field('zagolovok_2_bloka', $taxonomy . '_' .$term_id); ?>
			</h2>	
			<p class="bm-landing-category-computers-section-2-container__text wow animate__animated animate__fadeInUp">
				<?php the_field('podzagolovok_2_bloka', $taxonomy . '_' .$term_id); ?>
			</p>	
			<div class="bm-landing-category-computers-section-2-container-logos">
				<?php 
					if (get_field('2_blok_gibkie_izobrazheniya', $taxonomy . '_' .$term_id)){
						
						$images = get_field('2_blok_gibkie_izobrazheniya', $taxonomy . '_' .$term_id);
						$size = 'full';
						
						if( $images ):
							foreach( $images as $image ): 
								echo wp_get_attachment_image( $image, $size ); 
							endforeach;
						endif;
					}
					
				?>
			</div>
		</div>
		<div class="bm-landing-category-computers-section-2-container-img">
			<img src="<?php the_field('2_blok_glavnoe_izobrazhenie', $taxonomy . '_' .$term_id); ?>">
		</div>
		
	</div>
</div>
<div class="bm-landing-category-computers-section-3" id="full">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-computers-section-3-container">
			<h2 class="bm-landing-category-computers-section-3-container__title wow animate__animated animate__fadeIn">
				<?php the_field('3_zagolovok', $taxonomy . '_' .$term_id); ?>
			</h2>		
			<p class="bm-landing-category-computers-section-3-container__text wow animate__animated animate__fadeIn">
				<?php the_field('3_podzagolovok', $taxonomy . '_' .$term_id); ?>
			</p>	
			<div class="bm-landing-category-computers-section-3-container-config">
				<div class="bm-landing-category-computers-section-3-container-config-box wow animate__animated animate__fadeIn">
					<h3 class="bm-landing-category-computers-section-3-container-config-box__title">
						Частота процессора
					</h3>
					<p class="bm-landing-category-computers-section-3-container-config-box__text">
						<?php the_field('3_proczessor', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>
				<div class="bm-landing-category-computers-section-3-container-config-box wow animate__animated animate__fadeIn" data-wow-delay="0.3s">
					<h3 class="bm-landing-category-computers-section-3-container-config-box__title">
						Объем памяти
					</h3>
					<p class="bm-landing-category-computers-section-3-container-config-box__text">
						<?php the_field('3_pamyat', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>
				<div class="bm-landing-category-computers-section-3-container-config-box wow animate__animated animate__fadeIn" data-wow-delay="0.7s">
					<h3 class="bm-landing-category-computers-section-3-container-config-box__title">
						Скорость SSD
					</h3>
					<p class="bm-landing-category-computers-section-3-container-config-box__text">
						<?php the_field('3_ssd', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>
				<div class="bm-landing-category-computers-section-3-container-config-box wow animate__animated animate__fadeIn" data-wow-delay="1.1s">
					<h3 class="bm-landing-category-computers-section-3-container-config-box__title">
						Объем корпуса
					</h3>
					<p class="bm-landing-category-computers-section-3-container-config-box__text">
						<?php the_field('3_obem_korpusa', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>				
			</div>
		</div>
		<div class="bm-landing-category-computers-section-3-container-img">
			<img src="<?php the_field('3_glavnoe_izobrazhenie', $taxonomy . '_' .$term_id); ?>">
		</div>
	</div>
</div>
<div class="bm-landing-category-computers-section-4" id="pc-grafic">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-computers-section-4-container">
			<h2 class="bm-landing-category-computers-section-4-container__title wow animate__animated animate__fadeInUp">
				Производительность в играх
			</h2>		
		</div>
		<div class="bm-landing-category-computers-section-4-container-grafic">
			<div class="bm-landing-category-computers-section-4-container-grafic-games">
				<p class="bm-landing-category-computers-section-4-container-grafic-games__game">Control (RTX ON)</p>
				<p class="bm-landing-category-computers-section-4-container-grafic-games__game">Minecraft (RTX ON)</p>	
				<p class="bm-landing-category-computers-section-4-container-grafic-games__game">Borderlands</p>
			</div>
			<div class="bm-landing-category-computers-section-4-container-grafic-body">
				<div class="bm-landing-category-computers-section-4-container-grafic-header">											
					<div class="bm-landing-category-computers-section-4-container-grafic-header-video">
					<div class="bm-landing-category-computers-section-4-container-grafic-header-videortx3080"></div>
						<?php the_field('videokarta_1', $taxonomy . '_' .$term_id); ?>
					</div>
					
					<div class="bm-landing-category-computers-section-4-container-grafic-header-video">
					<div class="bm-landing-category-computers-section-4-container-grafic-header-videortx2080"></div>
						<?php the_field('videokarta_2', $taxonomy . '_' .$term_id); ?>
					</div>
					<div class="bm-landing-category-computers-section-4-container-grafic-header-video">
					<div class="bm-landing-category-computers-section-4-container-grafic-header-videortx1080"></div>
						<?php the_field('videokarta_3', $taxonomy . '_' .$term_id); ?>
					</div>
				</div>	
				<div class="bm-landing-category-computers-section-4-container-grafic-body-container">
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ">
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
					</div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines">
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30801"></div>
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20801"></div>
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10801"></div>							
						</div>
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30802"></div>
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20802"></div>
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10802"></div>							
						</div>
						<div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30803"></div>
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20803"></div>
							<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10803"></div>							
						</div>											
					</div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-count">
						<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text_zero">0</p>
						<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">20</p>
						<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">40</p>
						<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">60</p>
						<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">80</p>
						<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">100</p>
						<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">120</p>
					</div>
				</div>
			</div>			
		</div>
		
		<div class="bm-landing-category-computers-section-4-container-grafic-mobile">
			<div class="mobile-container-grafic-games-header">
				<p class="mobile-container-grafic-games-header__game active" id="game1">Control (RTX ON)</p>
				<p class="mobile-container-grafic-games-header__game" id="game2">Minecraft (RTX ON)</p>
				<p class="mobile-container-grafic-games-header__game" id="game3">Borderlands</p>
			</div>
			<div class="mobile-container-grafic-body-container">
				<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ">
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
				</div>	
				<div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines">
				
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="mobile3080"></div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="mobile2080"></div>
					<div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="mobile1080"></div>					
				
				</div>
				<div class="bm-landing-category-computers-section-4-container-grafic-body-container-count">
					<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text_zero">0</p>
					<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">20</p>
					<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">40</p>
					<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">60</p>
					<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">80</p>
					<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">100</p>
					<p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">120</p>
				</div>				
			</div>
			<div class="mobile-container-grafic-body">
				<div class="bm-landing-category-computers-section-4-container-grafic-header">											
					<div class="bm-landing-category-computers-section-4-container-grafic-header-video">
					<div class="bm-landing-category-computers-section-4-container-grafic-header-videortx3080"></div>
						<?php the_field('videokarta_1', $taxonomy . '_' .$term_id); ?>
					</div>
					
					<div class="bm-landing-category-computers-section-4-container-grafic-header-video">
					<div class="bm-landing-category-computers-section-4-container-grafic-header-videortx2080"></div>
						<?php the_field('videokarta_2', $taxonomy . '_' .$term_id); ?>
					</div>
					<div class="bm-landing-category-computers-section-4-container-grafic-header-video">
					<div class="bm-landing-category-computers-section-4-container-grafic-header-videortx1080"></div>
						<?php the_field('videokarta_3', $taxonomy . '_' .$term_id); ?>
					</div>
				</div>					
			</div>
		</div>
		
		<div class="bm-landing-category-computers-section-4-container-des">
			<p class="bm-landing-category-computers-section-4-container-des__text">
				<?php the_field('snoska_pod_grafikom', $taxonomy . '_' .$term_id); ?>
			</p>
		</div>
	</div>
</div>
<div class="bm-landing-category-computers-section-videocard" id="videocard">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-computers-section-videocard-container">
			<h2 class="bm-landing-category-computers-section-videocard-container__title wow animate__animated animate__fadeInUp">
				Максимальный гейминг с GeForce RTX 
			</h2>
			<p class="bm-landing-category-computers-section-videocard-container__text wow animate__animated animate__fadeInUp">
				Видеокарта GeForce RTX™ 3080 обеспечивает рекордную производительность для геймеров, работая на базе Ampere — архитектуры NVIDIA RTX второго поколения. Она оснащена улучшенными ядрами RT и тензорными ядрами, новыми потоковыми мультипроцессорами и высокоскоростной памятью G6X для потрясающих игровых возможностей.
			</p>
			<div class="bm-landing-category-computers-section-videocard-container-video">
				<video playsinline autoplay muted loop class="bm-landing-category-computers-section-videocard-container__video" poster="/wp-content/uploads/geforce-rtx-3080-2-19201.webp" style="align-self: flex-start;">
					<source src="/wp-content/uploads/geforce-rtx-3080-2-loop-19201.mp4" type="video/mp4">
					<source src="/wp-content/uploads/567.webm" type="video/webm">
				</video>
				<video playsinline autoplay muted loop class="bm-landing-category-computers-section-videocard-container__video-fair" poster="/wp-content/uploads/geforce-rtx-3080-3-19201.webp" style="align-self: flex-start;">
					<source src="/wp-content/uploads/geforce-rtx-3080-3-airflow-19201.mp4">
					<source src="/wp-content/uploads/2432.webm" type="video/webm">
				</video>
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point1">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point2">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point3">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point4">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point5">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point6">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point7">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point8">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point9">
				<img src="/wp-content/uploads/computers-videocard1.svg" class="point" id="point10">
			</div>
			<div class="bm-landing-category-computers-section-videocard-container-video-text">
				<p class="bm-landing-category-computers-section-videocard-container-video-text__text" id="callout1">
					
				</p>
			</div>
		</div>
	</div>
</div>
<script>

	$(document).ready(function () {
				
		$(".point").hover(function() {
						
			if ($(this).is("#point2")){

				$( ".bm-landing-category-computers-section-videocard-container__video" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video-fair").animate({"opacity" : "0"},50);
				});				
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Самая быстрая в мире видеопамять GDDR6X повышает производительность");		 
					$("#callout1").fadeIn("fast");
				});
				
				
			}else if ( $(this).is("#point1") ){
				$( ".bm-landing-category-computers-section-videocard-container__video" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video-fair").animate({"opacity" : "0"},50);
				});	
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("18 фаз питания обеспечивают энергоэффективность и запас мощности для разгона видеокарты");		
					$("#callout1").fadeIn("fast");
				});				
				
			}	
			
			if ($(this).is("#point3")){
				$( ".bm-landing-category-computers-section-videocard-container__video" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video-fair").animate({"opacity" : "0"},50);
				});	
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Архитектура NVIDIA Ampere демонстрирует максимальную производительность и энергоэффективность на ватт");		
					$("#callout1").fadeIn("fast");
				});
				
				
			}			
			
			if ($(this).is("#point4")){
				
				$( ".bm-landing-category-computers-section-videocard-container__video-fair" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video").animate({"opacity" : "0"},50);
				});	
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Короткая печатная плата и плотное расположение элементов возможны за счет нового разъема питания 12-пин, что обеспечивает больше места для прохождения воздушного потока через ребра радиатора");		
					$("#callout1").fadeIn("fast");
				});
				
				
			}				
			
			if ($(this).is("#point5")){
				
				$( ".bm-landing-category-computers-section-videocard-container__video-fair" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video").animate({"opacity" : "0"},50);
				});				
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Инновационный вентилятор на обратной стороне направляет воздух через видеокарту к выходным отверстиям корпуса");		
					$("#callout1").fadeIn("fast");
				});								
			}				
			if ($(this).is("#point6")){

				$( ".bm-landing-category-computers-section-videocard-container__video" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video-fair").animate({"opacity" : "0"},50);
				});					
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Новый порт HDMI 2.1");		 
					$("#callout1").fadeIn("fast");
				});								
			}			
			if ($(this).is("#point7")){

				$( ".bm-landing-category-computers-section-videocard-container__video" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video-fair").animate({"opacity" : "0"},50);
				});					
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("PCIe Gen 4 повышает пропускную способность для детализированных текстур и создания более сложных миров");		
					$("#callout1").fadeIn("fast");
				});								
			}
			if ($(this).is("#point8")){

				$( ".bm-landing-category-computers-section-videocard-container__video-fair" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video").animate({"opacity" : "0"},50);
				});					
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Гибридная испарительная камера включает в себя радиатор с тепловыми трубками, который эффективно распределяет тепло и обеспечивает сквозной поток воздуха");		
					$("#callout1").fadeIn("fast");
				});								
			}			
			if ($(this).is("#point9")){

				$( ".bm-landing-category-computers-section-videocard-container__video-fair" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video").animate({"opacity" : "0"},50);
				});					
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Вентилятор на передней стороне отводит горячий воздух из больших отверстий, а ребра оригинальной формы направляют воздушный поток для более эффективного охлаждения");		
					$("#callout1").fadeIn("fast");
				});								
			}			
			if ($(this).is("#point10")){
				
				$( ".bm-landing-category-computers-section-videocard-container__video-fair" ).animate({"opacity" : "1"}, 50,function(){
					$(".bm-landing-category-computers-section-videocard-container__video").animate({"opacity" : "0"},50);
				});					
				
				$("#callout1").fadeOut("fast",function(){
					$("#callout1").empty();
					$("#callout1").append("Открытый радиатор улучшает ориентированный на охлаждение дизайн как с функциональной, так и с визуальной точки зрения. В комбинации с цельной рамой это обеспечивает максимальную жёсткость и объем радиатора с минимальным сопротивлением воздуха");		
					$("#callout1").fadeIn("fast");
				});								
			}			
		},function(){
			$("#callout1").fadeOut("fast");
		});		
		
	});
	

</script>

<div class="bm-landing-category-computers-section-5" id="proc">
	<div class="bm-landing-category-computers-section-5-fullhd">		
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-landing-category-computers-section-5-container">
				<h2 class="bm-landing-category-computers-section-5-container__title wow animate__animated animate__fadeInUp">
					<?php the_field('6_zagolovok', $taxonomy . '_' .$term_id); ?>
				</h2>
				<p class="bm-landing-category-computers-section-5-container__subtitle wow animate__animated animate__fadeInUp">
					<?php the_field('6_podzagolovok', $taxonomy . '_' .$term_id); ?>
				</p>
				<div class="bm-landing-category-computers-section-5-container__container">
					<div class="bm-landing-category-computers-section-5-container__container-block wow animate__animated animate__fadeInUp" >
						<p class="bm-landing-category-computers-section-5-container__container-block__text">
							Базовая частота
						</p>
						<p class="bm-landing-category-computers-section-5-container__container-block__title">
							<?php the_field('6_info_1', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>
					<div class="bm-landing-category-computers-section-5-container__container-block wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
						<p class="bm-landing-category-computers-section-5-container__container-block__text">
							Turbo Boost
						</p>
						<p class="bm-landing-category-computers-section-5-container__container-block__title">
							<?php the_field('6_info_2', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>					
				</div>
				<div class="bm-landing-category-computers-section-5-container__container-mobile-img">
					<img src="<?php the_field('6_mobilnoe_izobrazhenie', $taxonomy . '_' .$term_id); ?>">
				</div>
			</div>
		</div>		
	</div>
</div>
<div class="bm-landing-category-computers-section-7" id="opera">
	<div class="bm-landing-category-computers-section-7-fullhd">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-landing-category-computers-section-7-container">
				<h2 class="bm-landing-category-computers-section-7-container__title wow animate__animated animate__fadeInUp">
					<?php the_field('7_zagolovk', $taxonomy . '_' .$term_id); ?>
				</h2>
				<p class="bm-landing-category-computers-section-7-container__subtitle wow animate__animated animate__fadeInUp">
					<?php the_field('7_podzagolovok', $taxonomy . '_' .$term_id); ?>
				</p>
				<div class="bm-landing-category-computers-section-7-container__container">
					<div class="bm-landing-category-computers-section-7-container__container-block wow animate__animated animate__fadeInUp" >
						<p class="bm-landing-category-computers-section-7-container__container-block__text">
							Объем памяти
						</p>
						<p class="bm-landing-category-computers-section-7-container__container-block__title">
							<?php the_field('7_info_1', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>
					<div class="bm-landing-category-computers-section-7-container__container-block wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
						<p class="bm-landing-category-computers-section-7-container__container-block__text">
							Частота памяти
						</p>
						<p class="bm-landing-category-computers-section-7-container__container-block__title">
							<?php the_field('7_info_2', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>	
					<div class="bm-landing-category-computers-section-7-container__container-block wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
						<p class="bm-landing-category-computers-section-7-container__container-block__text">
							Тайминги
						</p>
						<p class="bm-landing-category-computers-section-7-container__container-block__title">
							<?php the_field('7_info_3', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>					
				</div>	
				<div class="bm-landing-category-computers-section-5-container__container-mobile-img">
					<img src="<?php the_field('7_mobilnoe_izobrazhenie', $taxonomy . '_' .$term_id); ?>">
				</div>				
			</div>
		</div>
	</div>
</div>
<div class="bm-landing-category-computers-section-8" id="konfig">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-computers-section-8-container">
			<h2 class="bm-landing-category-computers-section-8-container__title wow animate__animated animate__fadeInUp">
				<?php the_field('8_zagolovok', $taxonomy . '_' .$term_id); ?>
			</h2>	
			<p class="bm-landing-category-computers-section-8-container__subtitle wow animate__animated animate__fadeInUp">
				<?php the_field('8_podzagolovok', $taxonomy . '_' .$term_id); ?>
			</p>			
		</div>
		<div class="bm-landing-category-computers-section-8-container-computer" id="computers-section-8-pc">
			<div class="bm-landing-category-computers-section-8-container-computer-charak">
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp" >
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						Кол-во M.2
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_1', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						PCI Express
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_2', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>				
			</div>
			<div class="bm-landing-category-computers-section-8-container-computer-image">
				<img src="<?php the_field('8_izobrazhenie_kompyutera', $taxonomy . '_' .$term_id); ?>">
			</div>
			<div class="bm-landing-category-computers-section-8-container-computer-charak">
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						Порты USB
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_3', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp" data-wow-delay="1.1s">
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						Вес до
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_4', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>				
			</div>			
		</div>
		
		<div class="bm-landing-category-computers-section-8-container-computer" id="computers-section-8-mobile">
			<div class="bm-landing-category-computers-section-8-container-computer-charak">
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp">
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						Кол-во M.2
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_1', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						PCI Express
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_2', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>	
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						Порты USB
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_3', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>
				<div class="bm-landing-category-computers-section-8-container-computer-charak-block wow animate__animated animate__fadeInUp" data-wow-delay="1.1s">
					<h2 class="bm-landing-category-computers-section-8-container-computer-charak-block__title">
						Вес до
					</h2>
					<p class="bm-landing-category-computers-section-8-container-computer-charak-block__text">
						<?php the_field('8_info_4', $taxonomy . '_' .$term_id); ?>
					</p>
				</div>				
			</div>
			<div class="bm-landing-category-computers-section-8-container-computer-image">
				<img src="<?php the_field('8_izobrazhenie_kompyutera', $taxonomy . '_' .$term_id); ?>">
			</div>			
		</div>		
		
	</div>
</div>
<div class="bm-landing-category-computers-section-9" id="garanty">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-computers-section-9-container">
			<div class="bm-landing-category-computers-section-9-container-first">
				<img src="<?php the_field('9_izobrazhenie', $taxonomy . '_' .$term_id); ?>">
			</div>
			<div class="bm-landing-category-computers-section-9-container-second">
				<h2 class="bm-landing-category-computers-section-9-container-second__title wow animate__animated animate__fadeInUp">
					<?php the_field('9_zagolovok', $taxonomy . '_' .$term_id); ?>
				</h2>
				<p class="bm-landing-category-computers-section-9-container-second__text wow animate__animated animate__fadeInUp">
					<?php the_field('9_tekst', $taxonomy . '_' .$term_id); ?>
				</p>
				<div class="bm-landing-category-computers-section-9-container__container">
					<?php if(get_field('9_info_1', $taxonomy . '_' .$term_id)){ ?>
					
					<div class="bm-landing-category-computers-section-9-container__container-block wow animate__animated animate__fadeInUp" >
						<p class="bm-landing-category-computers-section-9-container__container-block__text">
							Поддержка
						</p>
						<p class="bm-landing-category-computers-section-9-container__container-block__title">
							<?php the_field('9_info_1', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>	
	
					<?php } ?>
					<?php if(get_field('9_info_2', $taxonomy . '_' .$term_id)){ ?>
					
					<div class="bm-landing-category-computers-section-9-container__container-block wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
						<p class="bm-landing-category-computers-section-9-container__container-block__text">
							Быстрая доставка
						</p>
						<p class="bm-landing-category-computers-section-9-container__container-block__title">
							<?php the_field('9_info_2', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>						
					
					<?php } ?>
					<?php if(get_field('9_info_3', $taxonomy . '_' .$term_id)){ ?>

					<div class="bm-landing-category-computers-section-9-container__container-block wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
						<p class="bm-landing-category-computers-section-9-container__container-block__text">
							Подарок
						</p>
						<p class="bm-landing-category-computers-section-9-container__container-block__title">
							<?php the_field('9_info_3', $taxonomy . '_' .$term_id); ?>
						</p>						
					</div>						
					
					<?php } ?>
				
				</div>					
			</div>
		</div>
	</div>
</div>
<?php  

$images = get_field('galereya', $taxonomy . '_' .$term_id);
$size = 'full';
if( $images ){?>
	
<div class="bm-landing-category-computers-section-10" id="gallery">
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

<div class="bm-computer-landing-section6-back" id="buycomputers">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-computer-landing-section11">
			<div class="bm-computer-landing-section3-content">
				<h2 class="bm-computer-landing-section11-content__title">Купи новый ПК <?php woocommerce_page_title(); ?></h2>					
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


								?>				
							<div class="mywoo-landing-comp mywoo-landing-page-computers-container">
							<?

							if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();

									do_action( 'woocommerce_shop_loop' );

									wc_get_template_part( 'content', 'productcom' );
								}
							}



						?>
							</div>


						<?php
							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action( 'woocommerce_after_shop_loop' );





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







<?php 

	$control3080 = get_field('control_rtx_3080', $taxonomy . '_' .$term_id);
	$control2080 = get_field('control_rtx_2080', $taxonomy . '_' .$term_id);
	$control1080 = get_field('control_rtx_1080', $taxonomy . '_' .$term_id);
	$minecraft3080 = get_field('minecraft_3080', $taxonomy . '_' .$term_id);
	$minecraft2080 = get_field('minecraft_2080', $taxonomy . '_' .$term_id);
	$minecraft1080 = get_field('minecraft_1080', $taxonomy . '_' .$term_id);
	$borderlands3080 = get_field('borderlands_3080', $taxonomy . '_' .$term_id);
	$borderlands2080 = get_field('borderlands_2080', $taxonomy . '_' .$term_id);
	$borderlands1080 = get_field('borderlands_1080', $taxonomy . '_' .$term_id);
?>

<script>
jQuery(function($){
	

$('#rtx30801').waypoint(function() {
	
	var control3080 = '<?php echo $control3080;?>';
	control3080 = Number( (control3080*10)/12 );	
	
	$( "#rtx30801" ).animate({
  		width: control3080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	

$('#rtx20801').waypoint(function() {
	
	var control2080 = '<?php echo $control2080;?>';
	control2080 = Number( (control2080*10)/12 );	
	
	$( "#rtx20801" ).animate({
  		width: control2080 + "%"
	},1000, "linear");
}, { offset: '75%' });	
	

$('#rtx10801').waypoint(function() {
	
	var control1080 = '<?php echo $control1080;?>';
	control1080 = Number( (control1080*10)/12 );
	
	$( "#rtx10801" ).animate({
  		width: control1080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	

$('#rtx30802').waypoint(function() {
	
	var minecraft3080 = '<?php echo $minecraft3080;?>';
	minecraft3080 = Number( (minecraft3080*10)/12 );
	
	$( "#rtx30802" ).animate({
  		width: minecraft3080 + "%"
	},1000, "linear");
}, { offset: '75%' });	

	
$('#rtx20802').waypoint(function() {
	
	var minecraft2080 = '<?php echo $minecraft2080;?>';
	minecraft2080 = Number( (minecraft2080*10)/12 );
	
	$( "#rtx20802" ).animate({
  		width: minecraft2080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx10802').waypoint(function() {
	
	var minecraft1080 = '<?php echo $minecraft1080;?>';
	minecraft1080 = Number( (minecraft1080*10)/12 );
	
	$( "#rtx10802" ).animate({
  		width: minecraft1080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx30803').waypoint(function() {
	
	var borderlands3080 = '<?php echo $borderlands3080;?>';
	borderlands3080 = Number( (borderlands3080*10)/12 );
	
	$( "#rtx30803" ).animate({
  		width: borderlands3080 + "%"
	},1000, "linear");
}, { offset: '75%' });	
	
	
$('#rtx20803').waypoint(function() {
	
	var borderlands2080 = '<?php echo $borderlands2080;?>';
	borderlands2080 = Number( (borderlands2080*10)/12 );
	
	$( "#rtx20803" ).animate({
  		width: borderlands2080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx10803').waypoint(function() {
	
	var borderlands1080 = '<?php echo $borderlands1080;?>';
	borderlands1080 = Number( (borderlands1080*10)/12 );
	
	$( "#rtx10803" ).animate({
  		width: borderlands1080 + "%"
	},1000, "linear");
}, { offset: '75%' });	


	
	var windowWidth = $(window).width();		
	if(windowWidth < 576){
		
		$('#mobile3080').waypoint(function() {

			var control3080 = '<?php echo $control3080;?>';
			control3080 = Number( (control3080*10)/12 );	

			$( "#mobile3080" ).animate({
				width: control3080 + "%"
			},1000, "linear");
		}, { offset: '75%' });


		$('#mobile2080').waypoint(function() {

			var control2080 = '<?php echo $control2080;?>';
			control2080 = Number( (control2080*10)/12 );	

			$( "#mobile2080" ).animate({
				width: control2080 + "%"
			},1000, "linear");
		}, { offset: '75%' });	


		$('#mobile1080').waypoint(function() {

			var control1080 = '<?php echo $control1080;?>';
			control1080 = Number( (control1080*10)/12 );

			$( "#mobile1080" ).animate({
				width: control1080 + "%"
			},1000, "linear");
		}, { offset: '75%' });		
		
	}
	
	
$(".mobile-container-grafic-games-header__game").click(function(){
	$(".mobile-container-grafic-games-header__game").removeClass("active");
	$(this).addClass("active");

	if( $("#game1").hasClass("active") ){

		var control3080 = '<?php echo $control3080;?>';
		control3080 = Number( (control3080*10)/12 );
		
		$( "#mobile3080" ).animate({
			width: control3080 + "%"
		},1000, "linear");		
		
		var control2080 = '<?php echo $control2080;?>';
		control2080 = Number( (control2080*10)/12 );	

		$( "#mobile2080" ).animate({
			width: control2080 + "%"
		},1000, "linear");		
		
		var control1080 = '<?php echo $control1080;?>';
		control1080 = Number( (control1080*10)/12 );

		$( "#mobile1080" ).animate({
			width: control1080 + "%"
		},1000, "linear");		
							
	}else if( $("#game2").hasClass("active") ){
				
			var minecraft3080 = '<?php echo $minecraft3080;?>';
			minecraft3080 = Number( (minecraft3080*10)/12 );

			$( "#mobile3080" ).animate({
				width: minecraft3080 + "%"
			},1000, "linear");		

			var minecraft2080 = '<?php echo $minecraft2080;?>';
			minecraft2080 = Number( (minecraft2080*10)/12 );

			$( "#mobile2080" ).animate({
				width: minecraft2080 + "%"
			},1000, "linear");

			var minecraft1080 = '<?php echo $minecraft1080;?>';
			minecraft1080 = Number( (minecraft1080*10)/12 );

			$( "#mobile1080" ).animate({
				width: minecraft1080 + "%"
			},1000, "linear");
						 
		}else if( $("#game3").hasClass("active") ){

				var borderlands3080 = '<?php echo $borderlands3080;?>';
				borderlands3080 = Number( (borderlands3080*10)/12 );

				$( "#mobile3080" ).animate({
					width: borderlands3080 + "%"
				},1000, "linear");

				var borderlands2080 = '<?php echo $borderlands2080;?>';
				borderlands2080 = Number( (borderlands2080*10)/12 );

				$( "#mobile2080" ).animate({
					width: borderlands2080 + "%"
				},1000, "linear");

				var borderlands1080 = '<?php echo $borderlands1080;?>';
				borderlands1080 = Number( (borderlands1080*10)/12 );

				$( "#mobile1080" ).animate({
					width: borderlands1080 + "%"
				},1000, "linear");
					
		}
});		
	

});
	
</script>

<style>

	.bm-landing-category-computers-section-2{
		background: url(<?php the_field('2_blok_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-position: center;
		background-size: cover;
	}
	.bm-landing-category-computers-section-3-container-img{
		background: <?php the_field('3_svechenie_na_glavnom_izobrazhenii', $taxonomy . '_' .$term_id); ?>;
		background-position: center;
		background-size: cover;
	}
	.bm-landing-category-computers-section-3{
		background: <?php the_field('3_zadnij_fon', $taxonomy . '_' .$term_id); ?>;
	}
	.bm-landing-category-computers-section-5-fullhd{
		background: url(<?php the_field('6_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-repeat: no-repeat;
		background-position: right;		
	}	
	.bm-landing-category-computers-section-7-fullhd{
		background: url(<?php the_field('7_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-repeat: no-repeat;
		background-position: left;		
	}	
	.bm-landing-category-computers-section-8{
		background: url(<?php the_field('8_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
	}
	.bm-landing-category-computers-section-8-container-computer{
		background: url(<?php the_field('8_svechenie', $taxonomy . '_' .$term_id); ?>);
		background-position: center;
		background-size: 85%;
		background-repeat: no-repeat;
		padding: 65px 0;
	}
	
	
	.bm-landing-category-computers-section-4-container-grafic{
		display: flex;
	}
	.bm-landing-category-computers-section-4-container-grafic-mobile{
		display: none;
	}
	@media screen and (max-width: 768px){
		.bm-landing-category-computers-section-4-container-grafic{
			display: none;
		}
		.bm-landing-category-computers-section-4-container-grafic-mobile{
			display: flex;
		}
	}
</style>

<?php get_footer(); ?>