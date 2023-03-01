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
					<h1 class="collab-head-container-name__text">
						<?php echo the_title(); ?>
					</h1>				
				</a>
			</div>
			<div class="collab-head-container-menu">
				<nav uk-navbar>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav collab-menu">
							<li><a href="#about" class="uncor">О проекте</a></li>
							<li><a href="#blogger" class="uncor">О блогере</a></li>
							<li><a href="#gifts" class="uncor">Подарки</a></li>
							<li><a href="#service" class="uncor">Сервис</a></li>
							<li>
								<a href="#" class="dropdown-head">Характеристики ПК</a>
								<div class="uk-navbar-dropdown secons-dropdown">
									<ul class="uk-nav uk-navbar-dropdown-nav">
										<li><a href="#pc-set" class="uncor">Подробно о ПК</a></li>
										<li><a href="#proc" class="uncor">Процессор</a></li>
										<li><a href="#opera" class="uncor">Оперативная память</a></li>
										<li><a href="#oxlad" class="uncor">Охлаждение</a></li>
										<li><a href="#bp" class="uncor">Блок питания</a></li>
										<li><a href="#svo" class="uncor">СВО</a></li>
									</ul>
								</div>
							</li>
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
					<h1 class="collab-head-container-name__text">
						<?php echo the_title(); ?>
					</h1>				
				</a>
			</div>
			<div class="collab-head-container-menu-mobile">
				<div class="">
					<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
						<li class="uk-parent">
							<a href="#" class="mobile-parent-angle"></a>
							<ul class="uk-nav-sub mobile-navmenu">
								<li><a href="#about" class="uncor">О проекте</a></li>
								<li><a href="#blogger" class="uncor">О блогере</a></li>
								<li><a href="#gifts" class="uncor">Подарки</a></li>
								<li><a href="#service" class="uncor">Сервис</a></li>
								<li><a href="#gallery" class="uncor">Галерея</a></li>
								<li><a href="#pc-set" class="uncor">Подробно о ПК</a></li>
								<li><a href="#proc" class="uncor">Процессор</a></li>
								<li><a href="#opera" class="uncor">Оперативная память</a></li>
								<li><a href="#oxlad" class="uncor">Охлаждение</a></li>
								<li><a href="#bp" class="uncor">Блок питания</a></li>
								<li><a href="#svo" class="uncor">СВО</a></li>								
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
<div class="bm-landing-category-tmachine-banner">
	<video class="grpzdc-banner-video"  loop muted autoplay playsinline>
		<source src="/wp-content/uploads/banner-grpzdc.mp4">
		<source src="/wp-content/uploads/banner-grpzdc-webm.webm" type="video/webm">
	</video> 
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

<div class="bm-computer-landing-section6-back" id="buycomputers">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-computer-landing-section11">
			<div class="mywoo-landing-page-computers-container mywoo-landing-comp bm-computer-landing-section6-computers">

				<?php  
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => 3,
						'product_cat'    => $queried_object->slug,
						'orderby' => 'meta_value_num',
						'meta_key' => '_price',
						'order' => 'asc'						
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post();
						global $product; ?>
						
					<?php wc_get_template_part( 'content', 'productcom' ); ?>
																	
				<?php endwhile;

					wp_reset_query();
				?>			
			</div>		
			

			<div class="mywoo-landing-page-computers-container mywoo-landing-comp bm-computer-landing-section6-computers hide-computers">

				<?php  
					$args = array(
						'post_type'      => 'product',
						'offset'         => 3,
						'posts_per_page' => 9999,						
						'product_cat'    => $queried_object->slug,
						'orderby' => 'meta_value_num',
						'meta_key' => '_price',
						'order' => 'asc'						
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post();
						global $product; ?>
						
					<?php wc_get_template_part( 'content', 'productcom' ); ?>
																	
				<?php endwhile;

					wp_reset_query();
				?>			
			</div>			
			<p class="more-computers-collabs">Показать все ПК</p>
			
		</div>
	</div>
</div>
<style>
	.hide-computers{
		display: none;
	}
	.more-computers-collabs{
		cursor: pointer;
	}
	.hide-computers.show{
		display: flex !important;
	}
	.more-computers-collabs{
		font-style: normal;
		font-weight: bold;
		font-size: 17px;
		line-height: 130%;
		color: #F5B613;	
		position: relative;
		margin:0;
		padding: 25px 0;
		text-align: center;
	}
	.more-computers-collabs::before{
		content: "";
		background: #2C2C2C;
		width: 45%;
		position: absolute;
		top: 50%;
		left: 0;	
		height: 2px;
	}
	.more-computers-collabs::after{
		content: "";
		background: #2C2C2C;
		width: 45%;
		position: absolute;
		top: 50%;
		left: 55%;		
		height: 2px;
	}	
</style>
<script>

	$(function(){
		$('.more-computers-collabs').click(function(){
			
			if($('.hide-computers').hasClass("show")){
				$('.more-computers-collabs').text("Показать все ПК");
				$('.hide-computers').removeClass('show');
				
			}else{
				$('.more-computers-collabs').text("Скрыть все ПК");
				$('.hide-computers').addClass('show');				
			}		

		});
		
		$("a[href='#top']").click(function() {
  			$("html, body").animate({ scrollTop: 0 }, "slow");
  		return false;
		});
		
	})
	
</script>

<div class="bm-landing-category-collabs-boilingfeat" id="about">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-collabs-boilingfeat-container">
			<div class="bm-landing-category-collabs-boilingfeat-container-first">
				<img src="/wp-content/uploads/boilingmachinesvgnew.svg">
				<img src="/wp-content/uploads/close.svg" class="influence-close">
				<img src="/wp-content/uploads/onlysimp-2.png" class="influence-logo">
			</div>
			<div class="bm-landing-category-collabs-boilingfeat-container-second">
				<h2 class="bm-landing-category-collabs-boilingfeat-container-second__title wow animate__animated animate__fadeInUp">
					ПК как у блогера 
				</h2>
				<p class="bm-landing-category-collabs-boilingfeat-container-second__text wow animate__animated animate__fadeInUp">
					За годы существования Boiling Machine мы создали мощнейшие компьютеры для многих известных личностей. Теперь каждый сможет почувствовать себя на месте любимого инфлюэнсера, ведь мы разработали и воплотили в жизнь крутые ПК с уникальным дизайном. Качество сборки, высокий FPS, расширенный сервис, безопасная доставка на дом и классные подарки – гарантированы! 
				</p>
			</div>		
		</div>
	</div>
</div>



<div class="bm-landing-category-collabs-section-2" id="blogger">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-collabs-section-2-container">
			<div class="bm-landing-category-collabs-section-2-container-first">
				<h2 class="bm-landing-category-collabs-section-2-container-first__title wow animate__animated animate__fadeInUp">
					<?php the_field('zagolovok_2_bloka', $taxonomy . '_' .$term_id); ?>
				</h2>
				<p class="bm-landing-category-collabs-section-2-container-first__text wow animate__animated animate__fadeInUp">
					<?php the_field('podzagolovok_2_bloka', $taxonomy . '_' .$term_id); ?>
				</p>
			</div>
			<div class="bm-landing-category-collabs-section-2-container-second">
				<img src="<?php the_field('2_blok_glavnoe_izobrazhenie', $taxonomy . '_' .$term_id); ?>">
			</div>			
		</div>
	</div>
</div>

<style>
	.influence-logo{
		max-width: 400px;
	}
	.bm-landing-category-collabs-boilingfeat-container-second__text{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 160%;
		color: #CBCBCB;	
		margin: 0;
	}
	.bm-landing-category-collabs-boilingfeat-container-second__title{
		font-style: normal;
		font-weight: bold;
		font-size: 70px;
		line-height: 120%;
		margin: 0;
		margin-bottom: 30px;
		color: #fff;
	}
	.bm-landing-category-collabs-boilingfeat-container-second{
		flex-basis: 35%;
	}
	.bm-landing-category-collabs-boilingfeat-container-first img{
		margin-bottom: 50px;
	}
	.bm-landing-category-collabs-boilingfeat-container-first{
		flex-basis: 45%;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.bm-landing-category-collabs-boilingfeat-container{
		display: flex;
		justify-content: center;
	}
	.bm-landing-category-collabs-boilingfeat-container-logos{
		display: flex;
		justify-content: center;
		margin-top: 60px;
	}
	.bm-landing-category-collabs-boilingfeat-container-logos img{
		max-height: 100px;
		margin: 0 30px;
	}
	.bm-landing-category-collabs-boilingfeat{
		background: #000105 url("/wp-content/uploads/grpzdc-setka.webp");
		backdrop-filter: blur(40px);		
		padding: 150px 0 150px 0;
		background-size: contain;
		min-height: 650px;
		background-position: center;
		background-repeat: no-repeat;	
	}
	.woocommerce-variation.single_variation, .quantity{
		display: none !important;
	}
	.bm-landing-category-collabs-section-2-container-second{
		flex-basis: 60%;
		text-align: center;
	}
	.bm-landing-category-collabs-section-2-container{
		display: flex;
	}
	.bm-landing-category-collabs-section-2-container-first__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		color: #FFFFFF;
	}
	.bm-landing-category-collabs-section-2-container-first__text{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 160%;
		color: #FFFFFF;
		margin: 0;
	}
	.bm-landing-category-collabs-section-2{
		background: url(<?php the_field('2_blok_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		padding: 50px 0;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.bm-landing-category-collabs-section-2-container-first{
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.bm-landing-category-collabs-section-2-container-first{
		flex-basis: 40%;
	}
	 , .bm-landing-category-collabs-section-2-container-second{
		flex-basis: 60%;
	}
</style>
<div class="bm-landing-category-collab-fishki" id="gifts">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-collab-fishki-container">
			<h2 class="bm-landing-category-collab-fishki-container__title wow animate__animated animate__fadeInUp">
				Подарок от GRPZDC
			</h2>
			<h3 class="bm-landing-category-collab-podpiska-container__subtitle wow animate__animated animate__fadeInUp">
				При покупке Boiling GRPZDC Machine вы можете выбрать один из четырех подарков 
			</h3>
			<div class="bm-landing-category-collab-fishki-container-blocks">
				<div class="bm-landing-category-collab-fishki-container-blocks-block">
					<img src="/wp-content/uploads/grpzdc-image-1.svg">
					<h3 class="bm-landing-category-collab-fishki-container-blocks-block__title">
						Шанс участия в видео с GRPZDC
					</h3>
					<p class="bm-landing-category-collab-fishki-container-blocks-block__text">
						Первые пять покупателей гарантированно попадут в видео на YouTube-канал Boiling Machine
					</p>
				</div>
				<div class="bm-landing-category-collab-fishki-container-blocks-block">
					<img src="/wp-content/uploads/grpzdc-image-2.svg">
					<h3 class="bm-landing-category-collab-fishki-container-blocks-block__title">
						Шанс доставки ПК лично GRPZDC 
					</h3>
					<p class="bm-landing-category-collab-fishki-container-blocks-block__text">
						Для первых пяти покупателей Жора гарантированно осуществит доставку ПК прямо до вашей двери
					</p>
				</div>
				<div class="bm-landing-category-collab-fishki-container-blocks-block">
					<img src="/wp-content/uploads/grpzdc-image-3.svg">
					<h3 class="bm-landing-category-collab-fishki-container-blocks-block__title">
						Автограф
					</h3>
					<p class="bm-landing-category-collab-fishki-container-blocks-block__text">
						GRPZDC оставит свой автограф прямо на коробке
					</p>
				</div>
				<div class="bm-landing-category-collab-fishki-container-blocks-block">
					<img src="/wp-content/uploads/grpzdc-image-4.svg">
					<h3 class="bm-landing-category-collab-fishki-container-blocks-block__title">
						Упоминание вас в Instagram
					</h3>
					<p class="bm-landing-category-collab-fishki-container-blocks-block__text">
						Если вы сделаете пост в своем Instagram, то мы упомянем вас в своих историях
					</p>
				</div>				
			</div>
		</div>
	</div>
</div>
<div class="bm-landing-category-collab-podpiska" id="service">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-collab-podpiska-container">
			<h2 class="bm-landing-category-collab-podpiska-container__title">
				Сервис
			</h2>
			<p class="bm-landing-category-collab-podpiska-container__subtitle">
				По специальному промокоду от GRPZDC вы получите сервисную поддержу уровня Premium 
			</p>
			<div class="bm-landing-category-collab-podpiska-container-blocks">
				<div class="bm-landing-category-collab-podpiska-container-blocks-block">
					<h3 class="bm-landing-category-collab-podpiska-container-blocks-block__title">
						Boiling Service
					</h3>
					<p class="bm-landing-category-collab-podpiska-container-blocks-block__subtitle">
						Без промокода
					</p>
					<div class="bm-landing-category-collab-podpiska-container-blocks-block__line"></div>
					<ul class="bm-landing-category-collab-podpiska-container-blocks-block__spisok">
						<li><p>Срок гарантии</p><span>2 года</span></li>
						<li><p>Устранение неполадок</p><span>3 дня</span></li>
						<li><p>Подменный ПК на время ремонта</p><span>Платно</span></li>
						<li><p>Срок предоставления сервиса</p><span>2 года</span></li>
						<li><p>Консультация по телефону и почте</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Видео консультация удобным для вас способом</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Приоритетное рассмотрение заявки</p><img src="/wp-content/uploads/close-pzdc.svg"></li>
						<li><p>Выделенный специалист</p><img src="/wp-content/uploads/close-pzdc.svg"></li>
						<li><p>Полная диагностика ПК</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Чистка компонентов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Проверка и обновление драйверов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Замена термоинтерфейсов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Настройка системы теплоотвода</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
					</ul>						
				</div>
				<div class="bm-landing-category-collab-podpiska-container-blocks-block grad">
					<h3 class="bm-landing-category-collab-podpiska-container-blocks-block__title grad">
						Boiling Service Premium
					</h3>
					<p class="bm-landing-category-collab-podpiska-container-blocks-block__subtitle">
						По промокоду от GRPZDC
					</p>
					<div class="bm-landing-category-collab-podpiska-container-blocks-block__line"></div>
					<ul class="bm-landing-category-collab-podpiska-container-blocks-block__spisok">
						<li><p>Срок гарантии</p><span>2 года</span></li>
						<li><p>Устранение неполадок</p><span>от 5 до 24 часов</span></li>
						<li><p>Подменный ПК на время ремонта</p><span>Бесплатно</span></li>
						<li><p>Срок предоставления сервиса</p><span>Пожизненно</span></li>
						<li><p>Консультация по телефону и почте</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Видео консультация удобным для вас способом</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Приоритетное рассмотрение заявки</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Выделенный специалист</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Полная диагностика ПК</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Чистка компонентов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Проверка и обновление драйверов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Замена термоинтерфейсов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
						<li><p>Настройка системы теплоотвода</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
					</ul>	
					
				</div>				
			</div>
			
			<div class="uk-position-relative uk-visible-toggle uk-light mobile-slider-jrpzdc" tabindex="-1" uk-slider>

				<ul class="uk-slider-items uk-grid">
					<li class="uk-width-5-6">
						<div class="bm-landing-category-collab-podpiska-container-blocks-block">
							<h3 class="bm-landing-category-collab-podpiska-container-blocks-block__title">
								Boiling Service
							</h3>
							<p class="bm-landing-category-collab-podpiska-container-blocks-block__subtitle">
								Без промокода
							</p>
							<div class="bm-landing-category-collab-podpiska-container-blocks-block__line"></div>
							<ul class="bm-landing-category-collab-podpiska-container-blocks-block__spisok">
								<li><p>Срок гарантии</p><span>2 года</span></li>
								<li><p>Устранение неполадок</p><span>3 дня</span></li>
								<li><p>Подменный ПК на время ремонта</p><span>Платно</span></li>
								<li><p>Срок предоставления сервиса</p><span>2 года</span></li>
								<li><p>Консультация по телефону и почте</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Видео консультация удобным для вас способом</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Приоритетное рассмотрение заявки</p><img src="/wp-content/uploads/close-pzdc.svg"></li>
								<li><p>Выделенный специалист</p><img src="/wp-content/uploads/close-pzdc.svg"></li>
								<li><p>Полная диагностика ПК</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Чистка компонентов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Проверка и обновление драйверов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Замена термоинтерфейсов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Настройка системы теплоотвода</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
							</ul>						
						</div>
					</li>
					<li class="uk-width-5-6">
						<div class="bm-landing-category-collab-podpiska-container-blocks-block grad">
							<h3 class="bm-landing-category-collab-podpiska-container-blocks-block__title grad">
								Boiling Service Premium
							</h3>
							<p class="bm-landing-category-collab-podpiska-container-blocks-block__subtitle">
								По промокоду от GRPZDC
							</p>
							<div class="bm-landing-category-collab-podpiska-container-blocks-block__line"></div>
							<ul class="bm-landing-category-collab-podpiska-container-blocks-block__spisok">
								<li><p>Срок гарантии</p><span>2 года</span></li>
								<li><p>Устранение неполадок</p><span>от 5 до 24 часов</span></li>
								<li><p>Подменный ПК на время ремонта</p><span>Бесплатно</span></li>
								<li><p>Срок предоставления сервиса</p><span>Пожизненно</span></li>
								<li><p>Консультация по телефону и почте</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Видео консультация удобным для вас способом</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Приоритетное рассмотрение заявки</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Выделенный специалист</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Полная диагностика ПК</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Чистка компонентов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Проверка и обновление драйверов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Замена термоинтерфейсов</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
								<li><p>Настройка системы теплоотвода</p><img src="/wp-content/uploads/grpzdc-angle.svg"></li>
							</ul>	
						</div>
					</li>
				</ul>

			</div>					
		</div>
	</div>
</div>
<div class="bm-landing-category-computers-section-3" id="pc-set">
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
<div class="bm-landing-category-computers-section-5" id="oxlad">
	<div class="bm-landing-category-computers-section-5-fullhd culer">		
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-landing-category-computers-section-5-container">
				<h2 class="bm-landing-category-computers-section-5-container__title wow animate__animated animate__fadeInUp">
					Noctua NF-A14 industrialPPC 2000PWM  
				</h2>
				<p class="bm-landing-category-computers-section-5-container__subtitle wow animate__animated animate__fadeInUp">
					Зарекомендовавший себя производитель воздушных систем охлаждения «Noctua» предлагает максимально производительные кулера благодаря выдающейся аэродинамической эффективности конструкции NF-A14 и использованию нового трехфазного двигателя со скоростью работы до 2000 оборотов с возможностью тонкой настройки их работы.
				</p>
				<div class="bm-landing-category-computers-section-5-container__container-mobile-img">
					<img src="/wp-content/uploads/group-7991.webp">
				</div>
			</div>
		</div>		
	</div>
</div>
<div class="bm-landing-category-computers-section-7" id="bp">
	<div class="bm-landing-category-computers-section-7-fullhd bp">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-landing-category-computers-section-7-container">
				<h2 class="bm-landing-category-computers-section-7-container__title wow animate__animated animate__fadeInUp">
					Super Flower Leadex Titanium 
				</h2>
				<p class="bm-landing-category-computers-section-7-container__subtitle wow animate__animated animate__fadeInUp">
					Линейка блоков питания LEADEX Titanium с полностью модульным дизайном и титановой сертификацией 80+ предоставляет максимальную выходную мощность, а также благодаря 140мм кулеру с терморегулятором гарантирует чтобы ваш работал стабильно даже под самыми большими нагрузками.
				</p>
				<div class="bm-landing-category-computers-section-5-container__container-mobile-img">
					<img src="/wp-content/uploads/group-7992.webp">
				</div>				
			</div>
		</div>
	</div>
</div>
<div class="bm-landing-category-collab-vek" id="svo">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-landing-category-collab-vek-container">
			<h2 class="bm-landing-category-computers-section-7-container__title wow animate__animated animate__fadeInUp">
				EK Water Blocks AIO
			</h2>
			<p class="bm-landing-category-computers-section-7-container__subtitle wow animate__animated animate__fadeInUp">
				«EK Water Blocks» является лидером в производстве комплектующих для кастомного водяного охлаждения и их готовые решения не стали исключением. В настоящее время они предлагают все преимущества водяного охлаждения в компактной, яркой и не требующей технического обслуживания конструкции.
			</p>		
			<img src="/wp-content/uploads/ek-aio-360_auto_x2-1.webp">
		</div>
	</div>
</div>


<style>
	.bm-landing-category-collab-vek{
		padding: 60px 0;
		background: #000;
	}
	.bm-landing-category-collab-vek .bm-landing-category-computers-section-7-container__title, .bm-landing-category-collab-vek .bm-landing-category-computers-section-7-container__subtitle{
		text-align: center;
	}
	.bm-landing-category-computers-section-5-fullhd.culer{
		background: url(/wp-content/uploads/group-7991.webp);
		background-repeat: no-repeat;
		background-position: left;
	}
	.bm-landing-category-computers-section-7-fullhd.bp{
		background: url(/wp-content/uploads/group-7992.webp);
		background-repeat: no-repeat;
		background-position: right;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block.grad{
		border: 1px solid #CD58B3;
		background: #000000;
	}
</style>






<style>
	.bm-landing-category-collab-fishki-container__subtitle{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 130%;
		text-align: center;
		color: #CBCBCB;
		margin: 0;		
	}
	.mobile-slider-jrpzdc{
		display: none;
	}	
	@media screen and (min-width: 1000px) and (max-width: 1400px){
		.bm-landing-category-collab-podpiska-container-blocks-block{
			flex-basis: 50% !important;
		}
	}
	@media screen and (min-width: 992px) and (max-width: 1520px){
		.bm-landing-category-collab-fishki-container-blocks{
			flex-wrap: wrap;
			max-width: 80%;
    		margin: 0 auto;
		}
		.bm-landing-category-collab-fishki-container-blocks-block{
			flex-basis: 46% !important;
			margin-bottom: 30px;
			margin-right: 30px !important;			
		}
	}
	@media screen and (min-width: 768px) and (max-width: 1000px){
		.bm-landing-category-collab-fishki-container-blocks-block{
			flex-basis: 48.5% !important;
			margin-bottom: 25px;
			padding: 40px 20px !important;
			margin-right: 0 !important;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 1200px){
		
		.influence-close{
			max-width: 20px !important;
		}
		.bm-landing-category-collabs-boilingfeat{
			padding: 50px 0;
		}
		.bm-landing-category-collabs-boilingfeat-container-second__text{
			font-size: 18px;
			text-align: center;
		}
		.bm-landing-category-collabs-boilingfeat-container-first img{
			margin-bottom: 20px;
			max-width: 300px;
		}
		.bm-landing-category-collabs-boilingfeat-container-second{
			margin-bottom: 40px;
		}
		.bm-landing-category-collabs-boilingfeat-container-second__title{
			font-size: 36px;
			margin-bottom: 15px;
			text-align: center;
		}
		.bm-landing-category-collabs-boilingfeat-container{
			flex-direction: column-reverse;
		}		
		
		
		
		.bm-landing-category-computers-section-5-container__container-mobile-img img{
			max-width: 70%;
		}
		.bm-landing-category-computers-section-7-fullhd{
			padding-bottom: 0;
		}
		.bm-landing-category-collabs-section-2-container-second{
			background: url(/wp-content/uploads/pzdc-back-2-svet.webp);
			background-position: center;
    		background-size: 90%;
		}
		.bm-landing-category-collabs-section-2{
			background: url(/wp-content/uploads/rm218batch4-aum-08-1.webp);
			background-size: cover;
		}		
		.bm-landing-category-collabs-section-2-container{
			flex-direction: column;
		}
		.bm-landing-category-collabs-section-2-container-first__title{
			font-size: 36px;
			text-align: center;
			margin-bottom: 15px;
		}
		.bm-landing-category-collabs-section-2-container-first__text{
			font-size: 18px;
			text-align: center;
			margin: 0;
		}
		.bm-landing-category-collabs-section-2-container-second{
			margin-top: 30px;
		}
		.bm-landing-category-collabs-section-2-container-second img{
			max-width: 55%;
		}	
		.bm-landing-category-collab-vek{
			padding: 40px 0;
		}
		.bm-landing-category-computers-section-5-fullhd{
			padding-top: 40px;
		}
	}
	@media screen and (min-width: 576px) and (max-width: 768px){
		.bm-landing-category-collab-fishki-container-blocks-block{
			margin-right: 0 !important;
			flex-basis: 48% !important;
			margin-bottom: 20px;
			padding: 40px 20px !important;
		}		
	}
	
	@media screen and (min-width: 576px) and (max-width: 1000px){
		.mobile-slider-jrpzdc .uk-grid>*{
			padding-left: 15px;
			padding-right: 15px;
		}
		.bm-landing-category-collab-fishki-container-blocks-block__title{
			font-size: 23px !important;
		}
		.bm-landing-category-collab-fishki-container-blocks-block__text{
			font-size: 18px !important;
		}
		.mobile-slider-jrpzdc .bm-landing-category-collab-podpiska-container-blocks-block{
			margin: 0;
		}
		.mobile-slider-jrpzdc{
			margin-top: 40px;
		}
		.bm-landing-category-collab-podpiska-container-blocks{
			display: none !important;
		}
		.mobile-slider-jrpzdc{
			display: block;
		}	
		.bm-landing-category-collab-podpiska-container__title{
			margin-bottom: 15px;
		}
		.bm-landing-category-collab-fishki-container-blocks{
			flex-wrap: wrap;
			justify-content: space-between;
		}		
		.bm-landing-category-collab-fishki-container-blocks-block__title{
			height: auto !important;
		}		
		.bm-landing-category-collab-fishki-container__title{
			font-size: 36px !important;
		}
	}
	@media screen and (min-width: 576px) and (max-width: 768px){
		
		.influence-close{
			max-width: 20px !important;
		}
		.bm-landing-category-collabs-boilingfeat{
			padding: 50px 0;
		}
		.bm-landing-category-collabs-boilingfeat-container-second__text{
			font-size: 16px;
			text-align: center;
		}
		.bm-landing-category-collabs-boilingfeat-container-first img{
			margin-bottom: 20px;
			max-width: 150px;
		}
		.bm-landing-category-collabs-boilingfeat-container-second{
			margin-bottom: 40px;
		}
		.bm-landing-category-collabs-boilingfeat-container-second__title{
			font-size: 28px;
			margin-bottom: 15px;
			text-align: center;
		}
		.bm-landing-category-collabs-boilingfeat-container{
			flex-direction: column-reverse;
		}		
		
		
		.mobile-slider-jrpzdc{
			margin-top: 30px;
		}
		.bm-landing-category-collab-podpiska-container-blocks{
			display: none !important;
		}
		.mobile-slider-jrpzdc{
			display: block;
		}
		.bm-landing-category-collab-fishki-container-blocks-block{
			margin-right: 0 !important;
			flex-basis: 48% !important;
			margin-bottom: 20px;
			padding: 40px 20px !important;
		}
		.bm-landing-category-collab-fishki-container-blocks{
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.bm-landing-category-collab-fishki-container-blocks-block__title{
			height: auto !important;
		}
		.bm-landing-category-collabs-section-2-container-second{
			margin-top: 20px;
		}
		.bm-landing-category-collabs-section-2-container-second img{
			max-width: 50%;
		}
		.bm-landing-category-collabs-section-2-container-second{
			background-size: 70% !important;
		}
	}
	@media screen and (min-width: 1200px) and (max-width: 1500px){
		.bm-landing-category-collabs-boilingfeat-container-second__title{
			font-size: 60px;
		}
	}
	@media screen and (max-width: 576px){
		.influence-close{
			max-width: 20px !important;
		}
		.bm-landing-category-collabs-boilingfeat{
			padding: 50px 0;
		}
		.bm-landing-category-collabs-boilingfeat-container-second__text{
			font-size: 16px;
			text-align: center;
		}
		.bm-landing-category-collabs-boilingfeat-container-first img{
			margin-bottom: 20px;
			max-width: 150px;
		}
		.bm-landing-category-collabs-boilingfeat-container-second{
			margin-bottom: 40px;
		}
		.bm-landing-category-collabs-boilingfeat-container-second__title{
			font-size: 28px;
			margin-bottom: 15px;
			text-align: center;
		}
		.bm-landing-category-collabs-boilingfeat-container{
			flex-direction: column-reverse;
		}
		.mobile-slider-jrpzdc{
			display: none;
		}		
		.bm-landing-category-collab-fishki-container-blocks{
			flex-direction: column;
		}
		.bm-landing-category-collab-fishki-container-blocks-block{
			margin-right: 0 !important;
			margin-bottom: 20px;
		}
		.bm-landing-category-collab-fishki-container-blocks-block__title{
			height: auto !important;
		}
		.bm-landing-category-collab-fishki-container-blocks-block{
			padding: 44px 28px !important;
		}
		.bm-landing-category-collabs-section-2-container-second{
			margin-top: 30px;
		}
		.bm-landing-category-collabs-section-2-container-second img{
			max-width: 70%;
		}
	}
	@media screen and (max-width: 768px){

		.bm-landing-category-collabs-boilingfeat{
			min-height: auto;		
			background-size: cover;
		}
		.bm-landing-category-collabs-boilingfeat-container-logos img{
			max-width: 100px;
		}

		.bm-landing-category-collabs-section-2-container-first__text{
			color: #cbcbcb;
		}
		.bm-landing-category-collab-podpiska-container-blocks-block__subtitle{
			font-size: 17px !important;
		}
		.bm-landing-category-computers-section-3{
			padding-bottom: 40px;
		}
		.bm-computer-landing-section6-back{
			padding-top: 0;
		}
		.bm-landing-category-computers-section-5-fullhd{
			padding: 40px 0;
		}
		.bm-landing-category-computers-section-7-fullhd, .bm-landing-category-computers-section-5-fullhd.culer{
			padding-bottom: 40px;
			padding-top: 0;
		}
		.bm-landing-category-collab-vek{
			padding-top: 0;
			padding-bottom: 40px;
		}
		.bm-landing-category-computers-section-3{
			background: url(/wp-content/uploads/3d-abstract-background-render-two-pink-blue-neons-light-ground-retrowave-synthwave-illustration-12.webp) !important;
		}
		.bm-landing-category-collabs-section-2-container-second{
			background: url(/wp-content/uploads/pzdc-back-2-svet.webp);
			background-position: center;
    		background-size: 100%;
		}
		.bm-landing-category-collabs-section-2{
			background: url(/wp-content/uploads/rm218batch4-aum-08-1.webp);
			background-size: cover;
		}
		.bm-landing-category-collabs-section-2-container-first__text{
			font-size: 16px !important;
		}
		.bm-landing-category-collabs-section-2-container-first__title{
			font-size: 28px !important;
		}
		.bm-landing-category-collab-fishki-container-blocks{
			margin-top: 25px !important;
		}
		.bm-landing-category-collabs-section-2-container{
			flex-direction: column;
		}
		.bm-landing-category-collabs-section-2-container-first__title{
			font-size: 36px;
			margin-bottom: 15px;
			text-align: center;
		}
		.bm-landing-category-collabs-section-2-container-first__text{
			text-align: center;
			font-size: 17px;
			margin: 0;
		}
		.bm-landing-category-collab-fishki-container__title, .bm-landing-category-collab-podpiska-container__title{
			font-size: 28px !important;
		}
		.bm-landing-category-collab-podpiska-container__subtitle{
			font-size: 16px !important;
		}
		.bm-landing-category-collab-fishki, .bm-landing-category-collab-podpiska{
			padding-top: 0 !important;
			padding-bottom: 40px !important;
		}
		.bm-landing-category-collab-podpiska{
			padding-bottom: 0 !important;
		}
		.bm-landing-category-collab-podpiska-container-blocks{
			margin-top: 20px !important;
		}
		.bm-landing-category-collab-podpiska-container-blocks-block{
			margin: 0 !important;
			margin-bottom: 20px !important;
			padding: 30px 25px !important;
		}
		.bm-landing-category-collab-podpiska-container-blocks{
			flex-direction: column;
		}
		.bm-landing-category-collab-podpiska-container-blocks-block__spisok p{
			font-size: 16px !important;
		}
		.bm-landing-category-collab-podpiska-container-blocks-block__spisok li span{
			font-size: 16px !important;
		}
		.bm-landing-category-collab-podpiska-container-blocks-block__title{
			font-size: 20px !important;
		}
		.bm-landing-category-collab-fishki-container-blocks-block img{
			width: 70px !important;
		}
		.bm-landing-category-collab-fishki-container-blocks-block__title{
			font-size: 20px !important;
			margin-bottom: 15px !important;
		}
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__title.grad{
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		line-height: 130%;
		color: #CD58B3;	
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__spisok{
		list-style-type: none;
		padding: 0;
		margin: 0;
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		color: #D2D2D2;
		margin-top: 35px;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__spisok p{
		margin: 0;
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		color: #D2D2D2;		
		flex-basis: 60%;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__spisok li img{
		margin-right: 0;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__spisok li{
		margin-bottom: 20px;
		display: flex;
		justify-content: space-between;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__spisok li span{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		color: #FFFFFF;		
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__line{
		width: 100%;
		height: 1px;
		background-color: #6D6D6D;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__subtitle{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 130%;
		color: #CBCBCB;		
		margin: 0;
		margin-bottom: 32px;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block__title{
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 10px;
	}
	.bm-landing-category-collab-podpiska-container-blocks-block{
		flex-basis: 38%;
		margin: 0 22px;
		background: #1C1C1C;
		border: 1px solid #323232;
		border-radius: 20px;	
		padding: 50px 60px;
	}
	.bm-landing-category-collab-podpiska-container-blocks{
		margin-top: 50px;
		display: flex;
		justify-content: center;
	}
	.bm-landing-category-collab-podpiska{
		padding: 60px 0;
		background: #000;
	}
	.bm-landing-category-collab-podpiska-container__subtitle{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 130%;
		text-align: center;
		color: #CBCBCB;		
		margin: 0;
	}
	.bm-landing-category-collab-podpiska-container__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;
		margin: 0;
		margin-bottom: 10px;
	}
	.bm-landing-category-collab-fishki{
		padding: 60px 0;
		background: #000;
	}
	.bm-landing-category-collab-fishki-container__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 10px;
	}
	.bm-landing-category-collab-fishki-container-blocks{
		margin-top: 50px;
		display: flex;
	}
	.bm-landing-category-collab-fishki-container-blocks :last-child{
		margin-right: 0;
	}
	.bm-landing-category-collab-fishki-container-blocks-block{
		flex-basis: 30%;
		margin-right: 30px;
		padding: 65px 55px;
		display: flex;
		flex-direction: column;
		position: relative;
		background: linear-gradient(0deg, #000000, #000000);
		border: 1px solid #CD58B3;
		border-radius: 20px;
	}

	.bm-landing-category-collab-fishki-container-blocks-block__title{
		font-style: normal;
		font-weight: bold;
		font-size: 26px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;
		margin: 0;
		margin-bottom: 25px;
		margin-top: 30px;
		text-align: center;
		height: 70px;
	}
	.bm-landing-category-collab-fishki-container-blocks-block__text{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 25px;
		text-align: center;
		color: #CBCBCB;	
		text-align: center;
		margin: 0;
	}
	.bm-landing-category-collab-fishki-container-blocks-block img{
		margin: 0 auto;
		width: 97px;
	}
</style>


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










<style>
	@media screen and (min-width: 3840px){
		.bm-landing-category-computers-section-3{
			background-size: cover !important;
		}
	}
	.bm-landing-category-computers-section-10{
		background: #000;
	}
	.bm-landing-category-computers-section-10-container-slider-block{
		border: 1px solid #292929;
	}
	.bm-computer-landing-section6-back{
		padding-top: 40px;
	}
	.bm-landing-category-computers-section-9{
		background: linear-gradient(75.41deg, #272727 26.35%, #131313 101.21%), #0C0C0C;
	}
	.bm-landing-category-computers-section-8{
		background-position: center !important;
    	background-size: cover !important;
	}
	.bm-landing-category-computers-section-8-container-computer-image{
		text-align: center;
	}
	.bm-landing-category-computers-section-8-container-computer-image img{
		max-width: 65%;
	}
	.bm-landing-category-computers-section-8-container-computer, .bm-landing-category-computers-section-8{
		padding-bottom: 0 !important;
	}
	.bm-landing-category-computers-section-3-container-img{
		padding-bottom: 0;
	}
	.bm-landing-category-computers-section-3-container-img img{
		animation: hue-rotate linear 5.5s infinite;
	}
	.bm-landing-category-computers-section-3{
		background-position: center !important;
	}
	.bm-landing-category-computers-section-4-container-grafic-header-videortx3080{
		background: linear-gradient(270deg, #8744FE 0%, #CD58B3 100%);
	}
	.bm-landing-category-computers-section-4-container-grafic-body-container-line.rtx3080{
		background: linear-gradient(270deg, #8744FE 0%, #CD58B3 100%);
	}
	.bm-landing-category-computers-section-5-container__container-block__title, .bm-landing-category-computers-section-7-container__container-block__title{
	  color: #fff;
	}
	.bm-landing-category-computers-section-3-container-config-box__text{
		color: #fff;
	}
	.bm-landing-category-computers-section-2-container-img{
		background: url(/wp-content/uploads/ellipse-92.webp);
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.bm-landing-category-computers-section-2{
		background: url(<?php the_field('2_blok_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-position: center;
		background-size: cover;
	}
	.bm-landing-category-computers-section-3-container-img{
		background: <?php the_field('3_svechenie_na_glavnom_izobrazhenii', $taxonomy . '_' .$term_id); ?>;
		background-position: center;
		background-size: inherit;
	}
	.bm-landing-category-computers-section-3{
		background: <?php the_field('3_zadnij_fon', $taxonomy . '_' .$term_id); ?>;
	}
	.bm-landing-category-computers-section-5-fullhd{
		background: url(<?php the_field('6_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-repeat: no-repeat;
		background-position: left;		
	}	
	.bm-landing-category-computers-section-5-container{
		margin-right: 0;
		margin-left: auto;
	}
	.bm-landing-category-computers-section-7-container{
		margin-left: 0;
	}
	.bm-landing-category-computers-section-7-fullhd{
		background: url(<?php the_field('7_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-repeat: no-repeat;
		background-position: right;		
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
		.bm-landing-category-computers-section-3-container-img{
			background: none;
		}
	}
	
</style>

<?php get_footer(); ?>
