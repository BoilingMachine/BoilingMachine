<?php get_header(); ?>
<script src="https://getuikit.com/assets/uikit/dist/js/uikit.js?nc=335"></script>
<script src="https://getuikit.com/assets/uikit/dist/js/uikit-icons.js?nc=335"></script>
<div class="upgrade-center">
	<div class="upgrade-center-back">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-contacts-header">
				<div class="bm-contacts-breadcrumb">
					<?php the_breadcrumb() ?>
				</div>
			</div>	

			<div class="upgrade-center-header" class="upgrade-pc">
				<h1 class="upgrade-center-header__title">
					Апгрейд сервис Boiling Machine
				</h1>
				<img src="/wp-content/uploads/upgrade-service-banner.webp" class="main-image-mobile">
				<p class="upgrade-center-header__text">
					Ваш компьютер уже не тянет все новые игры? Постоянно зависает и вы не можете за ним комфортно работать? Тогда специально для вас мы создали свой собственный апгрейд центр, где решим все ваши проблемы!
				</p>
			</div>		
		</div>	
		<div class="upgrade-center-main-image-igor">
			<img src="/wp-content/uploads/upgrade-service-banner.webp" class="igor-pc">
			<img src="/wp-content/uploads/upgrade-service-banner.webp" class="igor-mobile">
		</div>		
	</div>


<style>
	.main-image-mobile{
		display: none;
	}
	.upgrade-center-main-image-igor{display: block;}
	.upgrade-center-back{background: #000;}
	.upgrade-center-slider-container-slider-next{
		top: auto;
		left: 64%;
		transform: translate(-50%, -50%) !important;
		padding: 0;
		margin: 0;
		bottom: -15%;		
	}
	.upgrade-center-slider-container-slider-previous{
		bottom: -15%;
		top: auto;
		padding: 0;
		margin: 0;
		left: 36%;
		transform: translate(-50%, -50%) !important;		
	}
	.upgrade-center-slider-container-slider-image{
		flex-basis: 60%;
	}
	.upgrade-center-slider-container-slider{
		flex-basis: 40%;
		padding: 150px 0;
	}
	.upgrade-center-slider-container{
		display: flex;
	}
	.upgrade-center-slider__title{
		font-style: normal;
		font-weight: bold;
		font-size: 50px;
		line-height: 130%;
		color: #FFFFFF;	
		margin: 0;
		margin-bottom: 40px;
	}
	.upgrade-center-slider__subtitle{
		font-style: normal;
		font-weight: 500;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 22px;
	}
	.upgrade-center-slider__spisok{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 140%;
		color: #FFFFFF;		
		margin: 0;
		padding: 0;
	}
	.upgrade-center-slider__spisok li{
		margin-bottom: 20px;
		list-style-type: none;
	}
	.upgrade-center-slider__spisok li::before{
		content: url(/wp-content/uploads/upgrade-service-spisok-before.svg);
		margin-right: 15px;
	}
	.slider-info-text__title{
		font-style: normal;
		font-weight: bold;
		font-size: 50px;
		line-height: 130%;
		color: #FFFFFF;	
		margin: 0;
		margin-bottom: 40px;
	}
	.slider-info-text__subtitle{
		font-style: normal;
		font-weight: 500;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 20px;
	}
	.slider-info{
		display: flex;
		height: 100%;
		align-items: center;
	}
	.slider-info-text{
		flex-basis: 35%;
	}
	.slider-info-image{
		flex-basis: 65%;
	}
	.slider-info-text__spisok{
		list-style-type: none;
		padding: 0;
		margin: 0;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 140%;
		color: #FFFFFF;		
	}
	.slider-info-text__spisok li{
		margin-bottom: 15px;
	}
	.slider-info-text__spisok li::before{
		content: url("/wp-content/uploads/upgrade-service-spisok-before.svg");
		margin-right: 15px;
	}
	.upgrade-center-slider-uslugi-previous{
		bottom: 10%;
		top: auto;
		left: 9%;
		transform: translate(-50%, -50%) !important;	
		width: fit-content;
		border: 1px solid;
		border-radius: 40px;
		padding: 8px 12px;		
		max-width: 38px;	
	}
	.upgrade-center-slider-uslugi-next{
		bottom: 10%;
		top: auto;
		left: 15%;
		transform: translate(-50%, -50%) !important;	
		width: fit-content;
		border: 1px solid;
		border-radius: 40px;
		padding: 8px 12px;		
		max-width: 38px;
	}
	.upgrade-center-slider-count{
		margin: 0;
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 130%;
		color: #DBDBDB;		
		bottom: 13%;
		top: auto;
		left: 13%;
		transform: translate(-50%, -50%) !important;
		width: fit-content;
		position: absolute;		
	}
</style>
	<div class="upgrade-center-slider-uslugi">
		<div class="bm-fullhd bm-margin">
			<div class="upgrade-center-slider-uslugi-container">
				<div id="slideshow" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="finite: true">

					<ul class="uk-slideshow-items">
						<li>
							<div class="slider-info">
								<div class="slider-info-text">
									<h2 class="slider-info-text__title">
										Что мы предлагаем?
									</h2>
									<h3 class="slider-info-text__subtitle">
										Выявим неполадки
									</h3>
									<ul class="slider-info-text__spisok">
										<li>Сохраним ваши данные</li>
										<li>Проведём диагностику и чистку компьютера</li>
										<li>Проконсультируем по вариантам апгрейда</li>
										<li>Произведём замену неисправных частей</li>
										<li>Поставим новую OC, обновим все драйвера и BIOS</li>
									</ul>
									<a uk-toggle="target: .upgrade-popup" type="button" class="link-get-upgrade">Заказать апгрейд <img src="/wp-content/uploads/zakaz-design.svg"></a>
								</div>
								<div class="slider-info-image">
									<img src="/wp-content/uploads/upgrade-service-banner-slider.png">
								</div>								
							</div>
						</li>
						<li>
							<div class="slider-info">
								<div class="slider-info-text">
									<h2 class="slider-info-text__title">
										Что мы предлагаем?
									</h2>
									<h3 class="slider-info-text__subtitle">
										Добавим FPS
									</h3>
									<ul class="slider-info-text__spisok">
										<li>Обновим видеокарту до мощнейших представителей 30-ой серии</li>
										<li>Прокачаем ваш процессор и материнскую плату</li>
										<li>Поставим молниеносный SSD-накопитель для моментальной загрузки системы и приложений</li>
										<li>Проработаем охлаждение в вашем компьютере еще лучше для большей стабильности и производительности</li>
										<li>Поставим новую OC, обновим все драйвера и BIOS</li>
									</ul>
									<a uk-toggle="target: .upgrade-popup" type="button" class="link-get-upgrade">Заказать апгрейд <img src="/wp-content/uploads/zakaz-design.svg"></a>
								</div>
								<div class="slider-info-image">
									<img src="/wp-content/uploads/upgrade-service-banner-slider-2.webp">
								</div>								
							</div>
						</li>
						<li>
							<div class="slider-info">
								<div class="slider-info-text">
									<h2 class="slider-info-text__title">
										Что мы предлагаем?
									</h2>
									<h3 class="slider-info-text__subtitle">
										Сделаем красиво
									</h3>
									<ul class="slider-info-text__spisok">
										<li>Проведем грамотный менеджмент кабелей в корпусе</li>
										<li>Нанесём аэрографию или винилографию по вашему выбору</li>
										<li>Установим RGB-подсветку на все части компьютера</li>
										<li>Поставим современную и красивую кастомную систему охлаждения</li>
										<li>Идеально подберем периферию для вашего ПК</li>
									</ul>
									<a uk-toggle="target: .upgrade-popup" type="button" class="link-get-upgrade">Заказать апгрейд <img src="/wp-content/uploads/zakaz-design.svg"></a>
								</div>
								<div class="slider-info-image">
									<img src="/wp-content/uploads/upgrade-service-banner-slider-3.webp">
								</div>								
							</div>
						</li>
					</ul>

					<a class="uk-position-center-left uk-position-small upgrade-center-slider-uslugi-previous" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
					<p class="upgrade-center-slider-count"><span>1</span>/3</p>				
					<a class="uk-position-center-right uk-position-small upgrade-center-slider-uslugi-next" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

				</div>			
			</div>
		</div>
	</div>
<script>
	function indexInParent(node) {
		var children = node.parentNode.childNodes;
		var num = 0;

		for (var i=0; i<children.length; i++) {
			 if (children[i]==node) return num;
			 if (children[i].nodeType==1) num++;
		}

		return -1;
	}

	UIkit.util.on('#slideshow', 'itemshown', function() {
	  var $items = this.getElementsByClassName('uk-slideshow-items');
	  var $activeItem = $items[0].getElementsByClassName('uk-active');
	  var index = indexInParent($activeItem[0]);

	  $(".upgrade-center-slider-count span").text(index + 1);

	});
</script>	
	<div class="upgrade-center-container-description-mobile">
		<div class="bm-fullhd bm-margin ">
			<div class="upgrade-center-container-description-con">
				<h2 class="upgrade-center-container-description-con__title">
					Апгрейд сервис Boiling Machine
				</h2>
				<div class="upgrade-center-container-description-con-charac first">
					<div class="upgrade-center-container-description-con-charac-text right">
						<h2 class="upgrade-center-container-description-con-charac-text__title">
							Выявим неполадки
						</h2>
						<img src="/wp-content/uploads/rectangle-2416.png" class="mobile-des-img">
						<ul>
							<li>Проведем диагностику и чистку компьютера</li>
							<li>Проконсультируем по вариантам апгрейда</li>
							<li>Заменим неисправные части компьютера</li>
							<li>Полность сохраним ваши данные при обновлении</li>
							<li>Дадим гарантию на новые комплектующие</li>
						</ul>
						<a uk-toggle="target: .upgrade-popup" type="button" class="link-get-upgrade">Заказать апгрейд <img src="/wp-content/uploads/zakaz-design.svg"></a>
					</div>
				</div>
				<div class="upgrade-center-container-description-con-charac second">
					<div class="upgrade-center-container-description-con-charac-text">
						<h2 class="upgrade-center-container-description-con-charac-text__title">
							Добавим FPS
						</h2>
						<img src="/wp-content/uploads/rectangle-2417.png" class="mobile-des-img">
						<ul>
							<li>Обновим видеокарту до мощнейших представителей 30-ой серии</li>
							<li>Прокачаем ваш процессор и материнскую плату</li>
							<li>Поставим молниеносный SSD-накопитель для моментальной загрузки системы и приложений</li>
							<li>Проработаем охлаждение в вашем компьютере еще лучше для большей стабильности и производительности</li>
							<li>Поставим новую OC, обновим все драйвера и BIOS</li>
						</ul>
						<a uk-toggle="target: .upgrade-popup" type="button" class="link-get-upgrade">Заказать апгрейд <img src="/wp-content/uploads/zakaz-design.svg"></a>
					</div>					
				</div>	
				<div class="upgrade-center-container-description-con-charac third">
					<div class="upgrade-center-container-description-con-charac-text right">
						<h2 class="upgrade-center-container-description-con-charac-text__title">
							Сделаем красиво
						</h2>
						<img src="/wp-content/uploads/rectangle-2418.png" class="mobile-des-img">
						<ul>
							<li>Проведем грамотный менеджмент кабелей в корпусе</li>
							<li>Нанесём аэрографию или винилографию по вашему выбору</li>
							<li>Установим RGB-подсветку на все части компьютера</li>
							<li>Поставим современную и красивую кастомную систему охлаждения</li>
							<li>Идеально подберем периферию для вашего ПК</li>
						</ul>
						<a uk-toggle="target: .upgrade-popup" type="button" class="link-get-upgrade">Заказать апгрейд <img src="/wp-content/uploads/zakaz-design.svg"></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="upgrade-center-container-garanty">
		<div class="bm-adaptive bm bm-margin">
			<div class="upgrade-center-container-garanty-container">
				<h2 class="upgrade-center-container-garanty-container__title">
					Мы даем 100% гарантии качества
				</h2>
				<div class="upgrade-center-container-garanty-container-benef">
					<div class="upgrade-center-container-garanty-container-benef-con">
						<img src="/wp-content/uploads/vector-stroke.svg">
						<div class="upgrade-center-container-garanty-container-benef-con-box">
							<h2 class="upgrade-center-container-garanty-container-benef-con-box__title">
								Надежность
							</h2>
							<p class="upgrade-center-container-garanty-container-benef-con-box__text">
								Мы в Boiling Machine собрали уже тысячи компьютеров и точно знаем как обращаться с компьютерами комплектующими. Поэтому мы даем гарантию на все наши работы для клиентов.
							</p>
						</div>
					</div>
					<div class="upgrade-center-container-garanty-container-benef-con">
						<img src="/wp-content/uploads/vector-fast.svg">
						<div class="upgrade-center-container-garanty-container-benef-con-box">
							<h2 class="upgrade-center-container-garanty-container-benef-con-box__title">
								Оперативность
							</h2>
							<p class="upgrade-center-container-garanty-container-benef-con-box__text">
								Наши специалисты выслушают вас и примут ваш компьютер в кратчайшие сроки. Все работы будут выполнены также быстро и качественно. Мы не позволим вам долго оставаться без ПК!
							</p>
						</div>
					</div>
					<div class="upgrade-center-container-garanty-container-benef-con">
						<img src="/wp-content/uploads/union.svg">
						<div class="upgrade-center-container-garanty-container-benef-con-box">
							<h2 class="upgrade-center-container-garanty-container-benef-con-box__title">
								Выгода и удобство
							</h2>
							<p class="upgrade-center-container-garanty-container-benef-con-box__text">
								Обновить компьютер всегда проще и дешевле, чем собирать новый. Наш апгрейд центр вдохнет новую жизнь в ваш старый девайс и вы точно останетесь довольны результатом.
							</p>
						</div>
					</div>
					<div class="upgrade-center-container-garanty-container-benef-con">
						<img src="/wp-content/uploads/vector-skidka.svg">
						<div class="upgrade-center-container-garanty-container-benef-con-box">
							<h2 class="upgrade-center-container-garanty-container-benef-con-box__title">
								Новые комплектующие
							</h2>
							<p class="upgrade-center-container-garanty-container-benef-con-box__text">
								Никаких Б/У видеокарт и устаревших процессоров. Мы сотрудничаем с ведущими производителями компьютерного железа и всегда предоставляем гарантию на комплектующие, которые устанавливаем. 
							</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="upgrade-service-3-steps">
		<div class="bm-adaptive bm-margin bm">
			<h2 class="upgrade-service-3-steps-title">
				Прокачаем ваш ПК всего за <span>3 дня</span>
			</h2>
			<div class="upgrade-service-3-steps-container">
				<div class="upgrade-service-3-steps-container-block">
					<div class="upgrade-service-3-steps-container-block-step">
						1 день
					</div>
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">1&nbsp;&nbsp;Оставьте заявку</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">Позвоните по номеру +7 800 350 83 39 или заполните форму обратной связи</p>
					</div>
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">2&nbsp;&nbsp;Передайте ПК курьеру</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">Никуда не нужно ездить, наш курьер в целости и сохранности доставит ваш компьютер</p>
					</div>	
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">3&nbsp;&nbsp;Возьмите подменный ПК</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">На время апгрейда мы предоставим вам соответствующую по уровню замену</p>
					</div>					
				</div>
				<div class="upgrade-service-3-steps-container-block">
					<div class="upgrade-service-3-steps-container-block-step">
						2 день
					</div>					
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">1&nbsp;&nbsp;Диагностика</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">После осмотра и выявления проблем наши специалисты свяжутся с вами и предложат наилучшие варианты для прокачки вашего компьютера</p>
					</div>
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">2&nbsp;&nbsp;Обслуживание</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">Продуем и почистим корпус, заменим термоконтур и термопасту</p>
					</div>	
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">3&nbsp;&nbsp;Замена комплектующих</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">Установим новую видеокарту и, если потребуется, обновим процессор, материнскую плату, оперативную память, HHD и SSD-диски и блок питания</p>
					</div>
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">4&nbsp;&nbsp;Тестирование и настройка</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">По окончании сборки мы тщательно протестируем ваш ПК и своевременно устраним возникшие проблемы, а также настроим BIOS и обновим необходимые драйвера</p>
					</div>					
				</div>
				<div class="upgrade-service-3-steps-container-block">
					<div class="upgrade-service-3-steps-container-block-step">
						3 день
					</div>					
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">1&nbsp;&nbsp;Произведите оплату</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">Мы принимаем наличный и безналичный расчёт</p>
					</div>
					<div class="upgrade-service-3-steps-container-block-box">
						<p class="upgrade-service-3-steps-container-block-box__title">2&nbsp;&nbsp;Ожидайте курьера</p>					
						<p class="upgrade-service-3-steps-container-block-box__subtitle">Мы в нужные сроки безопасно доставим ваш ПК, а наш курьер поможет вам с настройкой </p>
					</div>					
				</div>				
			</div>
		</div>
	</div>
</div>

<div class="treidin-konfigurator-service">
	<div class="bm-adaptive bm-margin bm">
		<div class="treidin-konfigurator-service-container">
			<h2 class="treidin-konfigurator-service-container__title">
				Способы апгрейда
			</h2>
			<div class="treidin-konfigurator-service-container-options">
				<div class="treidin-konfigurator-service-container-options-block" id="podbor-sam">
					<img src="/wp-content/uploads/upgrade-mr.svg">
					<p class="treidin-konfigurator-service-container-options-text">Выберу комплектующие сам</p>				
				</div>
				<div class="treidin-konfigurator-service-container-options-block" id="podbor-you">
					<img src="/wp-content/uploads/upgrade-help.svg">
					<p class="treidin-konfigurator-service-container-options-text">Подберём за вас</p>	
				</div>				
			</div>
		</div>
	</div>
</div>

<div class="treidin-konfigurator-service-mobile">
	<div class="bm-adaptive bm-margin bm">
		<div class="treidin-konfigurator-service-container-mobile">
			<div class="treidin-konfigurator-service-container-mobile-head">
				<h2 class="treidin-konfigurator-service-container__title">
					Способы апгрейда
				</h2>			
			</div>
			<div class="treidin-konfigurator-service-container-mobile-slider">
				<div class="uk-position-relative uk-visible-toggle uk-light mobile-slider-jrpzdc" tabindex="-1" uk-slider>
					<ul class="uk-slider-items uk-grid konfigurator-slider">
						<li class="uk-width-3-4">
							<div class="treidin-konfigurator-service-container-options-block" id="podbor-sam-mobile">
								<img src="/wp-content/uploads/upgrade-mr.svg">
								<p class="treidin-konfigurator-service-container-options-text">Выберу комплектующие сам</p>				
							</div>
						</li>	
						<li class="uk-width-3-4">
							<div class="treidin-konfigurator-service-container-options-block" id="podbor-you-mobile">
								<img src="/wp-content/uploads/upgrade-help.svg">
								<p class="treidin-konfigurator-service-container-options-text">Подберём за вас</p>	
							</div>
						</li>						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	$(function(){
		$("#podbor-sam").click(function(){	
			$(this).addClass("active");
			$("#podbor-you").removeClass("active");
			$( ".treidin-konfigurator-back-our" ).fadeOut( "fast", function() {
				$(".treidin-konfigurator-back").fadeIn("fast");
			});			
		});
		$("#podbor-sam-mobile").click(function(){	
			$(this).addClass("active");
			$("#podbor-sam-mobile").removeClass("active");
			$( ".treidin-konfigurator-back-our" ).fadeOut( "fast", function() {
				$(".treidin-konfigurator-back").fadeIn("fast");
			});			
		});		
		$("#podbor-you").click(function(){		
			$(this).addClass("active");
			$("#podbor-sam").removeClass("active");
			$( ".treidin-konfigurator-back" ).fadeOut( "fast", function() {
				$(".treidin-konfigurator-back-our").fadeIn("fast");
			});			
		});	
		$("#podbor-you-mobile").click(function(){		
			$(this).addClass("active");
			$("#podbor-you-mobile").removeClass("active");
			$( ".treidin-konfigurator-back" ).fadeOut( "fast", function() {
				$(".treidin-konfigurator-back-our").fadeIn("fast");
			});			
		});			
	});

</script>

<style>
	.treidin-konfigurator-service-mobile{
		display: none;
	}
	.treidin-konfigurator-service{display: block;}
	@media screen and (max-width: 768px){
	.main-image-mobile{
		display: block;
		margin-bottom: 15px;
	}
	.upgrade-center-main-image-igor{display: none;}		
		.upgrade-center-container-description-con-charac-text img.mobile-des-img{
			margin-bottom: 15px;
		}
		.upgrade-center-container-description-con-charac-text{
			padding: 0 !important;
		}
		.upgrade-form-title{
			font-size: 22px !important;
		}
		.treidin-konfigurator-service-container-mobile-head{
			margin-bottom: 20px;
		}
		.treidin-konfigurator-service-container-mobile-slider .treidin-konfigurator-service-container-options-block{
			padding: 30px;
			margin: 0 !important;
			height: 100%;
		}
		.treidin-konfigurator-service-container-mobile-slider .treidin-konfigurator-service-container-options-text{
			font-size: 20px !important;
		}
		.treidin-konfigurator-service-container-mobile-slider img{
			max-height: 55px;
			margin: 0;
			margin-bottom: 15px;			
		}
		.konfigurator-slider li{
			padding-left: 10px;
			padding-right: 10px;
		}
		.konfigurator-slider{
			margin-left: 0;
		}
		.treidin-konfigurator-service-mobile{
			padding: 20px 0;
		}		
		.treidin-konfigurator-service{
			display: none;
		}
		.treidin-konfigurator-service-mobile{
			display: block;
		}
		.upgrade-service-3-steps-container{
			flex-direction: column;
		}
		.upgrade-service-3-steps-container-block{
			margin: 50px 0;
			padding: 90px 30px 20px 30px !important;
		}
		.treidin-konfigurator-service-container-options{
			flex-direction: column;
			max-width: 100% !important;
		}
		.treidin-konfigurator-service-container-options-block{
			margin: 15px 0 !important;
		}
		.upgrade-service-3-steps-title, .treidin-konfigurator-service-container__title, .ours-upgrade-container-title{
			font-size: 24px !important;
			margin-bottom: 35px !important;
		}
		.upgrade-service-3-steps-container .upgrade-service-3-steps-container-block:last-child{
			margin-bottom: 0 !important;
		}
		.treidin-konfigurator-service-container-options-text{
			font-size: 22px !important;
		}
		.treidin-konfigurator-back-our-container{
			flex-direction: column;
		}
	}
	
	.bm-fullhd{
		padding: 0 30px;
	}
	.treidin-konfigurator-service-container-options-block.active{
		border: 1px solid #E21A15;
	}
	.treidin-konfigurator-header-container{
		margin-top: 0;
	}
	.treidin-konfigurator-service{
		background: #111;
		padding: 60px 0;
	}
	.treidin-konfigurator-back{
		display: none;
	}
	.treidin-konfigurator-service-container-options{
		display: flex;
		justify-content: center;
		max-width: 80%;
		margin: 0 auto;
	}
	.treidin-konfigurator-service-container-options-block{
		padding: 50px 80px;
		background: #161616;
		border: 1px solid #292929;
		box-sizing: border-box;
		border-radius: 5px;	
		display: flex;
		flex-direction: column;
		align-items: center;
		flex-basis: 45%;
    	margin: 0 10px;
		cursor: pointer;
		transition: .3s;
	}
	.treidin-konfigurator-service-container-options-block:hover{
		transition: .3s;
		border: 1px solid #E21A15;
	}
	.treidin-konfigurator-service-container-options-block img{
		margin-bottom: 30px;
	}
	.treidin-konfigurator-service-container-options-text{
		font-style: normal;
		font-weight: 500;
		font-size: 28px;
		line-height: 130%;
		text-align: center;
		color: #E9E9E9;		
		margin: 0;
	}
	.treidin-konfigurator-service-container__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;	
		margin: 0;
		margin-bottom: 40px;
	}
	.treidin-konfigurator-back{
		background: #111;
	}
	.upgrade-service-3-steps-container-block-step{
		position: absolute;
		font-style: normal;
		font-weight: 500;
		font-size: 28px;
		line-height: 100%;
		text-align: center;
		color: #E8E8E8;	
		top:0;
		left:50%;
		transform:translate(-50%, -50%);		
		background: #1C1C1C;
		border: 1px solid #292929;
		border-radius: 100px;
		width: 120px;
		height: 120px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.upgrade-service-3-steps-title span{
		color: #E21A15;
	}
	.upgrade-service-3-steps-title{
		font-style: normal;
		font-weight: bold;
		font-size: 46px;
		line-height: 140%;
		color: #FFFFFF;	
		margin-bottom: 120px;
		text-align: center;
	}
	.upgrade-service-3-steps{
		padding: 50px 0;
		background: #111;
	}
	.upgrade-service-3-steps-container{
		display: flex;
		justify-content: space-between;
	}
	.upgrade-service-3-steps-container-block{
		position: relative;
		flex-basis: 32%;
		background: #1C1C1C;
		border: 1px solid #292929;
		box-sizing: border-box;
		border-radius: 20px;	
		padding: 100px 30px;
	}
	.upgrade-service-3-steps-container-block-box{
		margin-bottom: 35px;
	}
	.upgrade-service-3-steps-container-block-box__title{
		font-style: normal;
		font-weight: 500;
		font-size: 23px;
		line-height: 140%;
		color: #F3F3F3;	
		margin-bottom: 10px;
	}
	.upgrade-service-3-steps-container-block-box__subtitle{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 140%;
		color: #CBCBCB;		
		margin: 0;
		margin-left: 25px;
	}
	.treidin-konfigurator-back-our{
		background: #111;
	}
	.treidin-konfigurator-back-our-container{
		display: flex;
		justify-content: space-between;
	}
	.treidin-konfigurator-back-our-container-image{
		flex-basis: 55%;
	}
	.treidin-konfigurator-back-our-container-form{
		flex-basis: 40%;
		display: flex;
		align-items: center;
	}
	.treidin-konfigurator-back-our{
		display: none;
	}
	.upgrade-center-label label{
		font-style: normal;
		font-weight: 500 !important;
		font-size: 21px !important;
		line-height: 130% !important;
		color: #FFFFFF;
		margin: 20px 0 !important;
	}
	.upgrade-center-label ul li .wpforms-field-label-inline{
		margin-bottom: 10px !important;
	}
	.upgrade-center-label li label{
		font-style: normal;
		font-weight: 500 !important;
		font-size: 18px !important;
		line-height: 130% !important;
		letter-spacing: 0.03em;
		color: #D9D9D9;	
		margin: 0 !important;
	}
	.treidin-konfigurator-container{
		margin: 0;
	}
	.upgrade-form-title{
		font-style: normal;
		font-weight: bold;
		font-size: 32px !important;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 10px !important;
	}
	.upgrade-form-sec-title{
		font-style: normal;
		font-weight: bold;
		font-size: 32px !important;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 15px !important;
	}	
	.upgrade-form-text{
		font-style: normal;
		font-weight: 500 !important;
		font-size: 20px !important;
		line-height: 140% !important;
		color: #CBCBCB;
	}
	.wpforms-pagebreak-left{
		max-width: 60%;
		text-align: center !important;
	}
	.upgrade-center-input input, .upgrade-center-input textarea{
		border: 1px solid #333 !important;
		box-sizing: border-box;
		border-radius: 5px !important;
		background: #111 !important;
		padding: 25px 20px !important;
	}
	.upgrade-center-input input::placeholder, .upgrade-center-input textarea::placeholder{
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #858585;		
	}
	.treidin-konfigurator-back-our-container-form .wpforms-page-indicator.progress{
		display: none;
	}
	.wpforms-pagebreak-left button{
		font-style: normal !important;
		font-weight: bold !important;
		font-size: 16px !important;
		line-height: 120% !important;
		text-align: center !important;
		color: #FFFFFF !important;
		border: 1px solid #E21A15 !important;
		box-sizing: border-box !important;
		border-radius: 30px !important;
		padding: 14px 36px 16px 36px !important;
		background: transparent !important;
		margin-top: 10px !important;
		transition: .3s;
	}
	.wpforms-pagebreak-left button:hover{
		background: #E21A15 !important;
		transition: .3s;
	}
	.upgrade-center-input textarea{
		max-width: 60%;
	}
	.politika{
		color: #CBCBCB;
		font-size: 14px;
	}
	.politika a{
		color: #FC2626 !important;
	}
	.upgrade-center-back input, .upgrade-center-back textarea{
		background: #1C1C1C !important;
	}

	.uk-accordion-title::before{
		position: absolute;
		left: 0;
	}
	.upgrade-header-price{
		position: absolute;
		right: 0;
		font-style: normal;
		font-weight: 500;
		font-size: 19px;
		line-height: 130%;
		text-align: center;
		letter-spacing: 0.03em;
		color: #CBCBCB;		
		top:50%;
		transform:translate(-50%, -50%);		
	}

</style>

<div class="treidin-konfigurator-back-our">
	<div class="bm-fullhd bm-margin">
		<div class="treidin-konfigurator-back-our-container">
			<div class="treidin-konfigurator-back-our-container-image">
				<img src="/wp-content/uploads/upgrade-service-form-image-1.webp">
			</div>
			<div class="treidin-konfigurator-back-our-container-form">
				<?php echo do_shortcode('[wpforms id="1174" title="false" description="false"]') ?>
			</div>
		</div>
	</div>
</div>


<div class="treidin-konfigurator-back">
	<div class="bm-adaptive bm-margin bm">
		<div class="treidin-konfigurator-header-container">
			<h2 class="treidin-konfigurator-header-container__title">Выберите комплектующие на замену</h2>
		</div>
		<div class="treidin-konfigurator-container">
			<div class="treidin-konfigurator-container-configurator">
				<ul uk-accordion>
				    <li class="uk-open">
						<a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-vodeoard" href="#">Повысить FPS<br><span class="upgrade-header videocard">Видеокарта</span> <span class="upgrade-header-price video"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-videokarta">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('videokarta') ):
									 	// перебираем данные
									    while ( have_rows('videokarta') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-video treidin-konfigurator-ul-li treidn-konfigurator-video">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('nazvanie_videokarty'); ?></p>	
												<?php 
													$cena_video = get_sub_field('czena_videokarty');
													$cena_video = (ceil($cena_video/100))*100;
												?>
									    		<span class="treidin-konfigurator-ul-li-price" ><?php echo number_format($cena_video, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>	
				        </div>
				    </li>					
				    <li>
						<a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-processor" href="#">Увеличить вычислительную мощность<br><span class="upgrade-header processor">Процессор</span><span class="upgrade-header-price proc"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-proc">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('proczessor') ):
									 	// перебираем данные
									    while ( have_rows('proczessor') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li treidin-konfigurator-ul-li treidn-konfigurator-processor">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('nazvanie_proczessora'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_proczessora');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;
													$newPrice = (ceil($newPrice/100))*100;
												?>
									    		<span class="treidin-konfigurator-ul-li-price" ><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>	
				        </div>
				    </li>
				    <li>
						<a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-motherboard" href="#">Обновить чипсет<br><span class="upgrade-header motherboard">Материнская плата</span><span class="upgrade-header-price mother"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-motherboard">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('materinskie_platy') ):
									 	// перебираем данные
									    while ( have_rows('materinskie_platy') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li treidin-konfigurator-ul-li treidn-konfigurator-motherboard">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('nazvanie_materinskoj_platy'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_materinskoj_platy');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;
													$newPrice = (ceil($newPrice/100))*100;
												?>
									    		<span class="treidin-konfigurator-ul-li-price" ><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>	
				        </div>
				    </li>					
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-opera" href="#">Увеличить быстродействие<br><span class="upgrade-header opera">Оперативная память</span><span class="upgrade-header-price opera"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-opera">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('operativnaya_pamyat') ):
									 	// перебираем данные
									    while ( have_rows('operativnaya_pamyat') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-opera treidin-konfigurator-ul-li treidn-konfigurator-opera">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('obem_operativnoj_pamyati'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_obema_opirativnoj_pamyati');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;	
													$newPrice = (ceil($newPrice/100))*100;
												?>												
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-ssd" href="#">Ускорить загрузку системы<br><span class="upgrade-header ssd">SSD M2</span><span class="upgrade-header-price ssdm2"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-ssd">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('ssd') ):
									 	// перебираем данные
									    while ( have_rows('ssd') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-ssd treidin-konfigurator-ul-li treidn-konfigurator-ssd">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('obem_ssd'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_obema');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;	
													$newPrice = (ceil($newPrice/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>	
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-ssd2" href="#">Ускорить загрузку системы<br><span class="upgrade-header ssd2">SSD 2.5</span><span class="upgrade-header-price ssd25"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-ssd2">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('ssd_25') ):
									 	// перебираем данные
									    while ( have_rows('ssd_25') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-ssd treidin-konfigurator-ul-li treidn-konfigurator-ssd2">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('obem_ssd_25'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_obema_25');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;	
													$newPrice = (ceil($newPrice/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>					
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-hdd" href="#">Увеличить объём накопителя<br><span class="upgrade-header hdd">HDD</span><span class="upgrade-header-price hdd"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-hdd">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('hdd') ):
									 	// перебираем данные
									    while ( have_rows('hdd') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-hdd treidin-konfigurator-ul-li treidn-konfigurator-hdd">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('obem_hdd'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_obema_hdd');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;	
													$newPrice = (ceil($newPrice/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>	
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-oxl" href="#">Охлаждение<br><span class="upgrade-header oxl"></span><span class="upgrade-header-price oxl"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-oxl">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('ohlazhdenie') ):
									 	// перебираем данные
									    while ( have_rows('ohlazhdenie') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-oxl treidin-konfigurator-ul-li treidn-konfigurator-oxl">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('obem_ohlazhdenie'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_obema_ohlazhdeniya');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;
													$newPrice = (ceil($newPrice/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>					
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-bp" href="#">Увеличить надёжность системы<br><span class="upgrade-header bp">Блок питания</span><span class="upgrade-header-price bp"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-bp">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('blok_pitaniya') ):
									 	// перебираем данные
									    while ( have_rows('blok_pitaniya') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-bp treidin-konfigurator-ul-li treidn-konfigurator-bp">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('obem_bloka_pitaniya'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_obema_bloka_pitaniya');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;	
													$newPrice = (ceil($newPrice/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>

									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>	
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-corpus" href="#">Корпус<br><span class="upgrade-header corpus"></span><span class="upgrade-header-price corpus"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-corpus">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('korpusa') ):
									 	// перебираем данные
									    while ( have_rows('korpusa') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-corpus treidin-konfigurator-ul-li treidn-konfigurator-corpus">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('korpus_nazvanie'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_korpusa');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;
													$newPrice = (ceil($newPrice/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' '); ?>р</span>
									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>	
				    <li>
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-corpusculera" href="#">Корпусные кулера<br><span class="upgrade-header corpusculera"></span><span class="upgrade-header-price corpuskulera"></span></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-corpusculera">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('korpusnye_kullera') ):
									 	// перебираем данные
									    while ( have_rows('korpusnye_kullera') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-corpusculera treidin-konfigurator-ul-li treidn-konfigurator-corpusculera">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('korpusnye_kullera_nazvanie'); ?></p>
												<?php 
													$oldPrice =  get_sub_field('czena_korpusnyh_kulerov');
													$procent = get_field('naczenka');
													$newPrice = $oldPrice * $procent;	
													$newPrice = (ceil($newPrice/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($newPrice, 0, '', ' ') ?>р</span>
									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>	
					
				    <li class="uk-open">
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link header-link-work" href="#">Услуги<br></a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-work">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('raboty') ):
									 	// перебираем данные
									    while ( have_rows('raboty') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-work treidin-konfigurator-ul-li treidn-konfigurator-work <?php the_sub_field('klass'); ?>">
												<p class="treidin-konfigurator-ul-li-p"><?php the_sub_field('raboty_nazvanie'); ?></p>
												<?php 
													$cena_rabot = get_sub_field('raboty_czena');
													$cena_rabot = (ceil($cena_rabot/100))*100;
												?>													
									    		<span class="treidin-konfigurator-ul-li-price"><?php echo number_format($cena_rabot, 0, '', ' '); ?>р</span>
									    	</li>
									    	<?php
									        
									    endwhile;
									else :
									    // вложенных полей не найдено
									endif;
									?>
							</ul>
				        </div>
				    </li>					
					
					
					
				</ul>				
			</div>
			<div class="div-itog">
				<p class="treidin-konfigurator-container-itog-ras">Рассчитать стоимость</p>
			</div>						
			<div class="treidin-konfigurator-container-itog">				
				<div class="treidin-konfigurator-container-itog-cont">
					<p class="treidin-konfigurator-container-itog-error"></p>
					<div class="treidin-konfigurator-stom-block">
						<div class="treidin-konfigurator-stom-block-container">
						</div>
						<p class="treidin-konfigurator-container-itog-stom">Итого:</p>
						<p class="treidin-konfigurator-container-itog-price"></p>
					</div>					
				</div>
				<div class="treidin-konfigurator-container-itog-callback">
					<p class="treidin-konfigurator-container-itog-callback_sub">Отправьте заявку на рассмотрение. Ознакомившись с основной информацией по конфигурации, менеджер свяжется с вами для уточнения деталей и определения конечной стоимости.</p>
					<?php echo do_shortcode("[wpforms id='1204']") ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="ours-upgrade">
	<div class="bm-adaptive bm-margin bm">
		<div class="ours-upgrade-container">
			<h2 class="ours-upgrade-container-title">
				Наши апгрейды
			</h2>
			<div class="bm-youtube-container">
				<div class="bm-youtube-container-videos">
					<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/dutgN2FBfqg">
						<img src="/wp-content/uploads/maxresdefault.webp">
					</a>
				</div>
				<div class="bm-youtube-container-videos">
					<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/1xAw_5WMEus">
						<img src="/wp-content/uploads/zeeman-2.webp">
					</a>
				</div>
				<div class="bm-youtube-container-videos">
					<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/Ae_nz-QcGok">
						<img src="/wp-content/uploads/maxresdefault1-1.jpg">
					</a>
				</div>	
				<div class="bm-youtube-container-videos">
					<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/Eoflq-jD61I">
						<img src="/wp-content/uploads/maxresdefault1-2.jpg">
					</a>
				</div>		
				<div class="bm-youtube-container-videos">
					<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/521_pnBXqQs">
						<img src="/wp-content/uploads/xomak.webp">
					</a>
				</div>	
				<div class="bm-youtube-container-videos">
					<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/kzanAFhTr9c">
						<img src="/wp-content/uploads/maxresdefault1.webp">
					</a>
				</div>			
			</div>	
		<div class="bm-youtube-container-videos-container-mobile">			
			<div uk-slider="" class="uk-position-relative uk-visible-toggle uk-slider projects-mobile">
				<div class="uk-position-relative">
					<div class="uk-slider-container">
						<div class="uk-slider-items uk-grid uk-grid-small" uk-grid="" uk-lightbox="">		
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4@xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/dutgN2FBfqg">
										<img src="/wp-content/uploads/maxresdefault.webp">
									</a>
								</div>
							</div>							
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4@xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/1xAw_5WMEus">
										<img src="/wp-content/uploads/zeeman-2.webp">
									</a>
								</div>
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/Ae_nz-QcGok">
										<img src="/wp-content/uploads/maxresdefault1-1.jpg">
									</a>
								</div>	
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/Eoflq-jD61I">
										<img src="/wp-content/uploads/maxresdefault1-2.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/521_pnBXqQs">
										<img src="/wp-content/uploads/xomak.webp">
									</a>
								</div>
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/kzanAFhTr9c">
										<img src="/wp-content/uploads/maxresdefault1.webp">
									</a>
								</div>	
							</div>						
						</div>

						<a class="uk-position-small bm-main-projects-slider-prev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
						<a class="uk-position-small bm-main-projects-slider-next" href="#" uk-slidenav-next uk-slider-item="next"></a>						

					</div>	
				</div>
			</div>	
		</div>			
		</div>
	</div>
</div>


<div id="modal-media-video" class="uk-flex-top" uk-modal="">	
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
		<button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe class="video-popup" src width="1200" height="800" frameborder="0" uk-video="" uk-responsive=""></iframe>
    </div>
</div>

<script>
	$(function(){	
		$(".video-button").click(function(){
			var video_link = $(this).attr("videosrc");
			$(".video-popup").attr("src",video_link);
		});
	})
</script>






<div class="upgrade-popup" uk-modal>
    <div class="uk-modal-dialog uk-modal-body upgrade-popup-container">
		<button class="uk-modal-close-default upgrade-popup-container-close" type="button" uk-close></button>
        <h2 class="upgrade-popup-container__title">Оставьте заявку на апгрейд</h2>
        <?php echo do_shortcode('[wpforms id="4685" title="false" description="false"]') ?>
    </div>
</div>
<style>



	.uk-modal-close-outside svg {
		width: 25px;
		height: 25px;
	}
	.uk-modal-close-outside {
		left: auto;
	}
	.bm-youtube-container-videos-container-mobile {
		display: none;
	}	
	@media screen and (min-width: 768px) and (max-width: 992px){
		.bm-youtube-container {
			flex-direction: column;
		}	
		.bm-youtube-container-videos-container-mobile {
			display: block !important;
		}		
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next {
			display: none;
		}			
	}
	@media screen and (min-width: 576px) and (max-width: 768px){
		.bm-youtube-container-videos-container-mobile {
			display: block !important;
		}	
		.bm-youtube-container {
			display: none !important;
		}		
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next {
			display: none;
		}			
	}
	
	@media screen and (max-width: 576px){
		.bm-youtube-container-videos-container-mobile {
			display: block !important;
		}	
		.bm-youtube-container {
			display: none !important;
		}	
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next {
			display: none;
		}		
	}


	@media screen and (min-width: 768px) and (max-width: 992px){
		.bm-youtube-container {
			display: none !important;
		}	
		.bm-youtube-container-videos-container-mobile {
			display: block !important;
		}			
	}
	
	.bm-main-projects {
		background: #000;
	}

	.bm-main-projects {
		background: #161616;
		padding: 80px 0;
	}	
	.video-button img {
    	transition: .3s;
	}
	.bm-youtube-container-videos img {
		border-radius: 6px;
	}	
	.video-button {
		display: block;
		overflow: hidden;
	}	
	.bm-youtube-container-videos {
		flex-basis: 33.3%;
		padding: 7.5px;
		border-radius: 6px;
	}	
	.bm-youtube-container {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}	
	@media screen and (min-width: 1200px){
		.treidin-konfigurator-service-container-options-block img{
			margin-top: 0;
		}
	}
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.upgrade-service-3-steps-container{
			flex-wrap: wrap;
		}
		.upgrade-service-3-steps-container .upgrade-service-3-steps-container-block:first-child, .upgrade-service-3-steps-container .upgrade-service-3-steps-container-block:nth-child(2){
			flex-basis: 48%;
			margin-bottom: 90px;
		}
		.treidin-konfigurator-service-container-options{
			max-width: 100% !important;
		}
		.upgrade-service-3-steps-container .upgrade-service-3-steps-container-block:nth-child(3){
			flex-basis: 100%;
		}	
		.treidin-konfigurator-service-container-options-block img{
			margin-top: 0 !important;
		}
		.treidin-konfigurator-service-container-options-block{
			justify-content: flex-start !important;
		}		
		.treidin-konfigurator-back-our-container{
			flex-direction: column;
		}
		.upgrade-service-3-steps-container-block-step{
			font-size: 22px !important;
		}
		.upgrade-service-3-steps-container-block-box__title, .treidin-konfigurator-service-container-options-text, .upgrade-form-title, .upgrade-form-sec-title{
			font-size: 20px !important;
		}
		.upgrade-form-text{
			font-size: 18px !important;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 992px){
		.upgrade-service-3-steps-container{
			flex-wrap: wrap;
		}
		.upgrade-service-3-steps-container .upgrade-service-3-steps-container-block:first-child, .upgrade-service-3-steps-container .upgrade-service-3-steps-container-block:nth-child(2){
			flex-basis: 48%;
			margin-bottom: 90px;
		}
		.treidin-konfigurator-service-container-options{
			max-width: 100% !important;
		}
		.upgrade-service-3-steps-container .upgrade-service-3-steps-container-block:nth-child(3){
			flex-basis: 100%;
		}
		.treidin-konfigurator-service-container-options-block{
			padding: 50px !important;
		}
		.treidin-konfigurator-back-our-container{
			flex-direction: column;
		}
		.treidin-konfigurator-service-container-options-block img{
			margin-top: 0 !important;
		}
		.treidin-konfigurator-service-container-options-block{
			justify-content: flex-start !important;
		}
	}
	.upgrade-center-radio input{
		position: absolute !important;
		  z-index: -1;
		  opacity: 0;
	}
	
	.upgrade-center-radio input + label.wpforms-field-label-inline {
	  display: inline-flex !important;
	  align-items: center;
	  user-select: none;
	}
	.upgrade-center-radio input + label.wpforms-field-label-inline::before {
	  content: '';
	  display: inline-block;
	  width: 1em;
	  height: 1em;
	  flex-shrink: 0;
	  flex-grow: 0;
	  border: 1px solid #adb5bd;
	  border-radius: 100px;
	  margin-right: 0.5em;
	  background-repeat: no-repeat;
	  background-position: center center;
	  background-size: 50% 50%;
	}	
	
	.upgrade-center-radio input:checked+label::before {
		background-clip: content-box !important;
		background: #E21A15;
		padding: 2px;
		border: 1px solid #E21A15;
	}	
	
	
	
	.ours-upgrade{
		background: #111;
		padding: 60px 0;
	}
	.ours-upgrade-container-title{
		font-style: normal;
		font-weight: bold;
		font-size: 46px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;		
	}
	.upgrade-center-container-description-mobile{
		display: none;
	}
	.map{
		height: 450px;
	}
	.upgrade-callback-continer-form{
		flex-basis: 48%;
	}
	.upgrade-callback-continer-map{
		position: relative;
		flex-basis: 48%;
	}
	.upgrade-callback-continer{
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.upgrade-popup-container{
		background: #1F1F1F;
		position: relative;
	}
	.upgrade-popup-container-close{
		position: absolute;
		right: 10px;
		top: 10px;
		left: auto;
	}
	.upgrade-popup-container__title{
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;
	}
	.upgrade-callback-continer-form input{
		padding: 30px 25px !important;
		border: 1px solid #323232 !important;
		border-radius: 5px !important;
	}
	.upgrade-callback{
		background: #111;
		padding: 80px 0;
	}
	.politika-konfid{
		color: #fff;
	}
	@media screen and (min-width: 992px) and (max-width: 1600px){
		.upgrade-callback-continer-form{
			width: 50%;
		}
		.upgrade-callback{
			padding: 40px 0;
		}	
		
	}
	@media screen and (max-width: 1600px){
		.upgrade-callback-continer{
			flex-direction: column;
			position: relative;
		}
		.upgrade-callback-continer-form{
			margin-top: 20px;
		}
		.upgrade-callback-continer-map{
			width: 100%;
		}
	}
	@media screen and (max-width: 992px){
		.upgrade-callback{
			padding: 30px 0;
		}
		.upgrade-center-container-description-con__title{
			margin-top: 40px;
		}
	}
	@media screen and (max-width: 1600px){
		.upgrade-center-container-description-mobile{
			display: block !important;
		}
		.upgrade-center-slider-uslugi{
			display: none !important;
		}
	}
		.upgrade-center-container-description-mobile{
			display: none;
		}
		.upgrade-center-slider-uslugi{
			display: block;
		}	
</style>


<script type="text/javascript">
	jQuery(function($) {
	
		var proccessorName;
		var proccessorPrice;
		
		var videocardName;
		var videocardPrice;
		
		var operaName;
		var operaPrice;
		
		var ssdName;
		var ssdPrice;
		
		var hhdName;
		var hhdPrice;
		
		var bpName;
		var bpPrice;
		
		var oxladName;
		var oxladPrice;
		
		var ssd25Name;
		var ssd25Price;
		
		var motherboardName;
		var motherboardPrice;
		
		var korpusName;
		var korpusPrice;
		
		var korpusCuleraName;
		var korpusCuleraPrice;
		
		var worksName;
		var worksPrice;

		
		
	$('body').on('click','.treidn-konfigurator-work', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			let name = $(this).find("p").text();
			worksName = worksName.replace(" , " + name, "");
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			worksPrice = parseInt(worksPrice) - parseInt(removePrice);
			
		}else{
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-work").addClass("activnost");
			if (worksName == undefined){
					worksName = $(this).find("p").text();
				}else{
					worksName = worksName + " , " + $(this).find("p").text();
				}		

			let newPrice = $(this).find("span").text();
			newPrice = newPrice.replace(" ","");	
			newPrice = newPrice.replace("р","");
			
			if (worksPrice == undefined){
				worksPrice = newPrice;
			}else{
				worksPrice = parseInt(worksPrice) + parseInt(newPrice);
			}
			
		}				
		
	});		
			
		
	$('body').on('click','.treidn-konfigurator-corpusculera', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.corpusculera").empty();	
			$(".header-link-corpusculera").css("font-size","1.25rem");
			$(".header-link-corpusculera").css("color","#fff");		
			
			let name = $(this).find("p").text();
			korpusCuleraName = korpusCuleraName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			korpusCuleraPrice = parseInt(korpusCuleraPrice) - parseInt(removePrice);	
			console.log(korpusCuleraPrice);
			
		}else{
			$("ul.treidin-konfigurator-ul-corpusculera .treidn-konfigurator-corpusculera").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-corpusculera").addClass("activnost");

			korpusCuleraName = $(this).find("p").text();
			korpusCuleraPrice = $(this).find("span").text();
			korpusCuleraPrice = korpusCuleraPrice.replace(" ","");
			korpusCuleraPrice = korpusCuleraPrice.replace("р","");
			console.log(korpusCuleraPrice);
			$(".upgrade-header.corpusculera").text(korpusCuleraName);
			$(".header-link-corpusculera").css("font-size","16px");
			$(".header-link-corpusculera").css("color","#cbcbcb");				
		}				
		
	});		
		
	$('body').on('click','.treidn-konfigurator-corpus', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.corpus").empty();	
			$(".header-link-corpus").css("font-size","1.25rem");
			$(".header-link-corpus").css("color","#fff");		
			
			let name = $(this).find("p").text();
			korpusName = korpusName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			korpusPrice = parseInt(korpusPrice) - parseInt(removePrice);	
			console.log(korpusPrice);			
			
		}else{
			$("ul.treidin-konfigurator-ul-corpus .treidn-konfigurator-corpus").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-corpus").addClass("activnost");

			korpusName = $(this).find("p").text();
			korpusPrice = $(this).find("span").text();
			korpusPrice = korpusPrice.replace(" ","");
			korpusPrice = korpusPrice.replace("р","");
			console.log(korpusPrice);
			$(".upgrade-header.corpus").text(korpusName);
			$(".header-link-corpus").css("font-size","16px");
			$(".header-link-corpus").css("color","#cbcbcb");				
		}				
		
	});			
		
	$('body').on('click','.treidn-konfigurator-oxl', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.oxl").empty();	
			$(".header-link-oxl").css("font-size","1.25rem");
			$(".header-link-oxl").css("color","#fff");		
			
			let name = $(this).find("p").text();
			oxladName = oxladName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			oxladPrice = parseInt(oxladPrice) - parseInt(removePrice);	
			console.log(oxladPrice);			
			
		}else{
			$("ul.treidin-konfigurator-ul-oxl .treidn-konfigurator-oxl").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-oxl").addClass("activnost");

			oxladName = $(this).find("p").text();
			oxladPrice = $(this).find("span").text();
			oxladPrice = oxladPrice.replace(" ","");
			oxladPrice = oxladPrice.replace("р","");
			$(".upgrade-header.oxl").text(oxladName);
			$(".header-link-oxl").css("font-size","16px");
			$(".header-link-oxl").css("color","#cbcbcb");				
		}				
		
	});			
		
	$('body').on('click','.treidn-konfigurator-ssd2', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.ssd2").text("SSD 2.5");
			$(".header-link-ssd2").css("font-size","1.25rem");
			$(".header-link-ssd2").css("color","#fff");		
			
			let name = $(this).find("p").text();
			ssd25Name = ssd25Name.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			ssd25Price = parseInt(ssd25Price) - parseInt(removePrice);	
			$(".upgrade-header-price.ssd25").empty();			
			
		}else{
			$("ul.treidin-konfigurator-ul-ssd2 .treidn-konfigurator-ssd2").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-ssd2").addClass("activnost");

			ssd25Name = $(this).find("p").text();
			ssd25Price = $(this).find("span").text();
			ssd25Price = ssd25Price.replace(" ","");
			ssd25Price = ssd25Price.replace("р","");
			$(".upgrade-header-price.ssd25").text(ssd25Price + "р");
			$(".upgrade-header.ssd2").text(ssd25Name);
			$(".header-link-ssd2").css("font-size","16px");
			$(".header-link-ssd2").css("color","#cbcbcb");			
		}
		
	});		
		
	$('body').on('click','.treidn-konfigurator-motherboard', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.motherboard").text("Материнская плата");	
			$(".header-link-motherboard").css("font-size","1.25rem");
			$(".header-link-motherboard").css("color","#fff");	
			
			let name = $(this).find("p").text();
			motherboardName = motherboardName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			motherboardPrice = parseInt(motherboardPrice) - parseInt(removePrice);	
			$(".upgrade-header-price.mother").empty();		
			
		}else{
			$("ul.treidin-konfigurator-ul-motherboard .treidn-konfigurator-motherboard").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-motherboard").addClass("activnost");

			motherboardName = $(this).find("p").text();
			motherboardPrice = $(this).find("span").text();
			motherboardPrice = motherboardPrice.replace(" ","");
			motherboardPrice = motherboardPrice.replace("р","");
			$(".upgrade-header-price.mother").text(motherboardPrice + "р"); 
			$(".upgrade-header.motherboard").text(motherboardName);
			$(".header-link-motherboard").css("font-size","16px");
			$(".header-link-motherboard").css("color","#cbcbcb");			
		}
	
	});		
		
			
	$('body').on('click','.treidn-konfigurator-processor', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.processor").text("Процессор");	
			$(".header-link-processor").css("font-size","1.25rem");
			$(".header-link-processor").css("color","#fff");	
			
			let name = $(this).find("p").text();
			proccessorName = proccessorName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			proccessorPrice = parseInt(proccessorPrice) - parseInt(removePrice);	
			console.log(proccessorPrice);		
			
			let nameRemove = $(".treidn-konfigurator-work.termopast").find("p").text();
			worksName = worksName.replace(" , " + nameRemove, "");
			
			let removePriceWork = $(".treidn-konfigurator-work.termopast").find("span").text();
			removePriceWork = removePriceWork.replace(" ","");	
			removePriceWork = removePriceWork.replace("р","");
			
			worksPrice = parseInt(worksPrice) - parseInt(removePriceWork);		
			
			$(".treidn-konfigurator-work.termopast").removeClass("activnost");
			$(".upgrade-header-price.proc").empty();
			
		}else{
			$("ul.treidin-konfigurator-ul-proc .treidn-konfigurator-processor").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-proc").addClass("activnost");

			proccessorName = $(this).find("p").text();
			proccessorPrice = $(this).find("span").text();
			proccessorPrice = proccessorPrice.replace(" ","");
			proccessorPrice = proccessorPrice.replace("р","");
			$(".upgrade-header-price.proc").text(proccessorPrice + "р");
			$(".upgrade-header.processor").text(proccessorName);
			$(".header-link-processor").css("font-size","16px");
			$(".header-link-processor").css("color","#cbcbcb");		
			
			if ($(".treidn-konfigurator-work.termopast").hasClass("activnost")){
					
				}else{
					$(".treidn-konfigurator-work.termopast").addClass("activnost");
					
					if (worksName == undefined){
							worksName = $(".treidn-konfigurator-work.termopast").find("p").text();
						}else{
							worksName = worksName + " , " + $(".treidn-konfigurator-work.termopast").find("p").text();
						}	
					
					if (worksPrice == undefined){
						let pricek = $(".treidn-konfigurator-work.termopast").find("span").text();
						pricek = pricek.replace(" ","");	
						pricek = pricek.replace("р","");											
						worksPrice = pricek;
						console.log(worksPrice);
					}else{						
						let pricek = $(".treidn-konfigurator-work.termopast").find("span").text();
						pricek = pricek.replace(" ","");	
						pricek = pricek.replace("р","");						
						
						worksPrice = parseInt(worksPrice) + parseInt(pricek);
						
					}					
					
				}
		}	
		
	});
		
	$('body').on('click','.treidn-konfigurator-video', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.videocard").text("Видеокарта");
			$(".header-link-vodeoard").css("font-size","1.25rem");
			$(".header-link-vodeoard").css("color","#fff");		
			
			let name = $(this).find("p").text();
			videocardName = videocardName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			videocardPrice = parseInt(videocardPrice) - parseInt(removePrice);	
			console.log(videocardPrice);
			
			let nameRemove = $(".treidn-konfigurator-work.changeallinterface").find("p").text();
			worksName = worksName.replace(" , " + nameRemove, "");
			
			let removePriceWork = $(".treidn-konfigurator-work.changeallinterface").find("span").text();
			removePriceWork = removePriceWork.replace(" ","");	
			removePriceWork = removePriceWork.replace("р","");
			
			worksPrice = parseInt(worksPrice) - parseInt(removePriceWork);		
			
			$(".treidn-konfigurator-work.changeallinterface").removeClass("activnost");		
			$(".upgrade-header-price.video").empty();
					
			
		}else{
			$("ul.treidin-konfigurator-ul-videokarta .treidn-konfigurator-video").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-videokarta").addClass("activnost");

			videocardName = $(this).find("p").text();
			videocardPrice = $(this).find("span").text();
			videocardPrice = videocardPrice.replace(" ","");
			videocardPrice = videocardPrice.replace("р","");
			$(".upgrade-header.videocard").text(videocardName);
			$(".upgrade-header-price.video").text(videocardPrice + "р");
			$(".header-link-vodeoard").css("font-size","16px");
			$(".header-link-vodeoard").css("color","#cbcbcb");		
			

			if ($(".treidn-konfigurator-work.changeallinterface").hasClass("activnost")){
					
				}else{
					$(".treidn-konfigurator-work.changeallinterface").addClass("activnost");
					
					if (worksName == undefined){
							worksName = $(".treidn-konfigurator-work.changeallinterface").find("p").text();
						}else{
							worksName = worksName + " , " + $(".treidn-konfigurator-work.changeallinterface").find("p").text();
						}	
					
					if (worksPrice == undefined){
						let pricek = $(".treidn-konfigurator-work.changeallinterface").find("span").text();
						pricek = pricek.replace(" ","");	
						pricek = pricek.replace("р","");											
						worksPrice = pricek;
						console.log(worksPrice);
					}else{						
						let pricek = $(".treidn-konfigurator-work.changeallinterface").find("span").text();
						pricek = pricek.replace(" ","");	
						pricek = pricek.replace("р","");						
						
						worksPrice = parseInt(worksPrice) + parseInt(pricek);
						
					}					
					
				}			
			
			
		}
		
		
	});
		
	$('body').on('click','.treidn-konfigurator-opera', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.opera").text("Оперативная память");		
			$(".header-link-opera").css("font-size","1.25rem");
			$(".header-link-opera").css("color","#fff");	
			
			let name = $(this).find("p").text();
			operaName = operaName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			operaPrice = parseInt(operaPrice) - parseInt(removePrice);	
			$(".upgrade-header-price.opera").empty();			
			
		}else{
			$("ul.treidin-konfigurator-ul-opera .treidn-konfigurator-opera").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-opera").addClass("activnost");

			operaName = $(this).find("p").text();
			operaPrice = $(this).find("span").text();
			operaPrice = operaPrice.replace(" ","");
			operaPrice = operaPrice.replace("р","");
			$(".upgrade-header.opera").text(operaName);
			$(".upgrade-header-price.opera").text(operaPrice + "р");
			$(".header-link-opera").css("font-size","16px");
			$(".header-link-opera").css("color","#cbcbcb");				
		}
		
	});

	$('body').on('click','.treidn-konfigurator-ssd', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.ssd").text("SSD M2");	
			$(".header-link-ssd").css("font-size","1.25rem");
			$(".header-link-ssd").css("color","#fff");	
			
			let name = $(this).find("p").text();
			ssdName = ssdName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			ssdPrice = parseInt(ssdPrice) - parseInt(removePrice);	
			$(".upgrade-header-price.ssdm2").empty();			
			
		}else{
			$("ul.treidin-konfigurator-ul-ssd .treidn-konfigurator-ssd").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-ssd").addClass("activnost");

			ssdName = $(this).find("p").text();
			ssdPrice = $(this).find("span").text();
			ssdPrice = ssdPrice.replace(" ","");
			ssdPrice = ssdPrice.replace("р","");
			$(".upgrade-header-price.ssdm2").text(ssdPrice + "р");
			$(".upgrade-header.ssd").text(ssdName);
			$(".header-link-ssd").css("font-size","16px");
			$(".header-link-ssd").css("color","#cbcbcb");			
		}
			
	});

	$('body').on('click','.treidn-konfigurator-hdd', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.hdd").text("HDD");	
			$(".header-link-hdd").css("font-size","1.25rem");
			$(".header-link-hdd").css("color","#fff");	
			
			let name = $(this).find("p").text();
			hhdName = hhdName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			hhdPrice = parseInt(hhdPrice) - parseInt(removePrice);	
			$(".upgrade-header-price.hdd").empty();			
			
		}else{
			$("ul.treidin-konfigurator-ul-hdd .treidn-konfigurator-hdd").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-hdd").addClass("activnost");

			hhdName = $(this).find("p").text();
			hhdPrice = $(this).find("span").text();
			hhdPrice = hhdPrice.replace(" ","");
			hhdPrice = hhdPrice.replace("р","");
			$(".upgrade-header-price.hdd").text(hhdPrice + "р");
			$(".upgrade-header.hdd").text(hhdName);
			$(".header-link-hdd").css("font-size","16px");
			$(".header-link-hdd").css("color","#cbcbcb");		
			
		}

	});

	$('body').on('click','.treidn-konfigurator-bp', function(){
		
		if ($(this).hasClass("activnost")){
			$(this).removeClass("activnost");
			$(".upgrade-header.bp").text("Блок питания");
			$(".header-link-bp").css("font-size","1.25rem");
			$(".header-link-bp").css("color","#fff");	
			
			let name = $(this).find("p").text();
			bpName = bpName.replace(name, "");		
			
			let removePrice = $(this).find("span").text();
			removePrice = removePrice.replace(" ","");	
			removePrice = removePrice.replace("р","");
			
			bpPrice = parseInt(bpPrice) - parseInt(removePrice);	
			$(".upgrade-header-price.bp").empty();			
			
		}else{
			$("ul.treidin-konfigurator-ul-bp .treidn-konfigurator-bp").removeClass("activnost");
			$(this).addClass("activnost");

			$(".treidin-konfigurator-ul-bp").addClass("activnost");

			bpName = $(this).find("p").text();
			bpPrice = $(this).find("span").text();
			bpPrice = bpPrice.replace(" ","");
			bpPrice = bpPrice.replace("р","");
			$(".upgrade-header-price.bp").text(bpPrice + "р");
			$(".upgrade-header.bp").text(bpName);
			$(".header-link-bp").css("font-size","16px");
			$(".header-link-bp").css("color","#cbcbcb");		
					
		}

	});		

	$('body').on('click','.treidin-konfigurator-ul-li', function() {
		$(".div-itog").css("display","block");
		$(".treidin-konfigurator-container-itog-callback").css("display","none");
		$(".treidin-konfigurator-stom-block-container").empty();
		$(".treidin-konfigurator-stom-block").css("display","none");
	  
	});		
		
	
	$('body').on('click','.treidin-konfigurator-container-itog-ras', function() {	
			$(".div-itog").css("display","none");
		
			var choosenitems = [];
			var itog = 0;
			choosenitems.push({name: videocardName,price: videocardPrice},{name: proccessorName,price: proccessorPrice},{name: operaName,price: operaPrice},{name: ssdName,price: ssdPrice},{name: hhdName,price: hhdPrice},{name: bpName,price: bpPrice},{name: oxladName,price: oxladPrice},{name: ssd25Name,price: ssd25Price},{name: motherboardName,price: motherboardPrice},{name: korpusName,price: korpusPrice},{name: korpusCuleraName,price: korpusCuleraPrice},{name: worksName,price: worksPrice});
			console.log(choosenitems);
			
			for (let i = 0; i < choosenitems.length; i++){
				if (choosenitems[i].name != undefined && choosenitems[i].price != undefined && choosenitems[i].name != "" && choosenitems[i].price != 0){
					$(".treidin-konfigurator-stom-block-container").append('<div class="treidin-konfigurator-stom-block-container-box"><p class="treidin-konfigurator-stom-block-container-box-name">' + choosenitems[i].name + '</p><p class="treidin-konfigurator-stom-block-container-box-price">' + choosenitems[i].price + 'р' +'</p></div>');
					itog = parseInt(itog) + parseInt(choosenitems[i].price);
																																																																
				}
			}
		
		
			
			$(".treidin-konfigurator-container-itog-callback").css("display","block");
		  $(".treidin-konfigurator-container-itog-price").text("~ " + itog + "р");	
		  $(".treidin-konfigurator-container-itog-error").css("display","none");
		  $(".treidin-konfigurator-stom-block").css("display","block");	

		  $(".form-none input").attr("value",itog + "руб." + "<br> Процессор: " + proccessorName + "<br> Видеокарта: " + videocardName + "<br> Оперативная память: " + operaName + "<br> SSD M2: " + ssdName + "<br> HDD: " + hhdName + "<br> Блок питания: "  + bpName + "<br> Охлаждение: " + oxladName + "<br> SSD 2.5: " + ssd25Name + "<br> Материнская плата: " + motherboardName + "<br> Корпус: " + korpusName + "<br> Кулера для корпуса: " + korpusCuleraName + "<br> Работы: " + worksName);
		

	});



	});
</script>
<style>
	@media screen and (min-width: 1200px) and (max-width: 1600px){
		.upgrade-center-container-description-con-charac-text.right{padding-left: 0 !important;}
		.upgrade-center-container-description-con-charac-image, .upgrade-center-container-description-con-charac-text{flex-basis: 100% !important; padding: 30px 0 !important;}
		.upgrade-center-container-description-con-charac{max-width: 75%; margin: 0 auto;}
		.mobile-des-img{margin: 0 0 30px;}
		.link-get-upgrade{font-size: 18px !important;}
	}
	.confiden{
		color: #cbcbcb;
	}
	.link-get-upgrade{
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 120%;
		color: #E31611 !important;
		transition: .3s;	
        -webkit-appearance: none !important;
        -moz-appearance: none !important; 
        appearance: none;
		background-color: transparent;
	}
	.link-get-upgrade:read-only{
		background: transparent;
	}
	.link-get-upgrade:hover{
		text-decoration: none;
		color: #E31611 !important;
		transition: .3s;
	}
	.link-get-upgrade:hover img{
		transform: translate(2px, 0px);
		transition: .3s;
	}
	.link-get-upgrade img{
		transition: .3s;
		margin-left: 5px;
	}	
	.treidin-konfigurator-container-itog-ras{
		margin: 0 auto;
		padding: 12px 31px 14px 31px;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 120%;
		text-align: center;
		color: #FFFFFF;
		background: #F52722;
		border-radius: 5px;
	}
	.treidin-konfigurator-ul li{
		flex-basis: 32%;
		margin-bottom: 20px;
	}
	.treidin-konfigurator-container-configurator-header-link{
		background: #252525;
		border: 1px solid #323232;
		border-radius: 5px;
	}
	.treidin-konfigurator-container-configurator li .uk-accordion-content .treidin-konfigurator-ul-opera li{
		flex-basis: 50%;
	}
	.treidin-konfigurator-ul{
		justify-content: space-between;
	}
	.treidin-konfigurator-container-itog-stom{
		text-align: center;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;
		margin-bottom: 10px;
	}
	.treidin-konfigurator-container-itog-price{
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		line-height: 130%;
		text-align: center;
		color: #FD0A04;		
		margin: 0;
	}
	div.wpforms-container-full .wpforms-form .wpforms-field{
		padding: 10px 0 !important;
	}
	.treidin-konfigurator-container-itog-callback input{
		padding: 30px 25px !important;
		border: 1px solid #323232 !important;
		border-radius: 5px !important;		
	}
	.treidin-konfigurator-container-itog-callback textarea{
		padding: 20px 25px !important;
		border: 1px solid #323232 !important;
		border-radius: 5px !important;	
	}
	
	.treidin-konfigurator-stom-block{
		width: auto;
		margin: 0 30px 30px 0;
		background: #252525;
		border: 1px solid #323232;
		box-sizing: border-box;
		border-radius: 5px;
	}
	.tel-link,.tel-link:hover{
		text-decoration: none;
		color: #FF0600;
	}
	.treidin-konfigurator-stom-block-container-box-name, .treidin-konfigurator-stom-block-container-box-price{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #F1F1F1;
		margin: 0;
	}
	.treidin-konfigurator-stom-block-container .treidin-konfigurator-stom-block-container-box:first-child{
		padding-top: 0;
	}
	.treidin-konfigurator-stom-block-container-box{
		display: flex;
		justify-content: space-between;
		padding: 18px 0;
		border-bottom: 1px solid #363636;
	}
	.upgrade-header {
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 160%;
		text-align: center;
		letter-spacing: 0.03em;
		color: #cbcbcb;
	}
	.treidin-konfigurator-ul-li-p{
		margin: 0;
		width: 75%;
	}
	.treidin-konfigurator-ul{
		list-style-type: none;
	}
	.treidin-konfigurator-ul-li .treidin-konfigurator-ul-li-price{
		transition: .5s;
	}
	.treidin-konfigurator-ul-li:hover .treidin-konfigurator-ul-li-price{
		color: #fb1b1b;
		transition: .5s;
	}
	.treidin-konfigurator-ul li{
		display: flex;
   		align-items: center;
	}
	.treidin-konfigurator-ul li::before{
		content: url("/wp-content/uploads/upgrade-check.svg");
		margin-right: 15px;
		transform: translate(0,3px);
	}
	.treidin-konfigurator-ul-li-price{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 130%;
		color: #dadada;
		margin-left: 5px;
	}

	
	.upgrade-line{
		position: absolute;
		right: 49.5%;
		top: 45px;
		height: 75%;
	}
	.step4{
		position: absolute;
		left: 49%;
		top: 5px;		
	}	
	.step3{
		position: absolute;
		right: 48%;
		top: 5px;		
	}	
	.step2{
		position: absolute;
		left: 49%;
		top: 5px;		
	}	
	.step1{
		position: absolute;
		right: 48%;
		top: 5px;		
	}
	.upgrade-center-main-image-igor{
		text-align: center;
	}
	.upgrade-center-container-work-container-steps .upgrade-center-container-work-container-steps-step-container:last-child{
		margin-bottom: 0;
	}
	.step-line{
		position: absolute;
		top: 30px;
		left: 50%;
		transform: translate(-50%, 0);		
	}
	.upgrade-center-container-work-container-steps-step-container{
		height: 250px;
		position: relative;
	}
	.upgrade-center-container-work-container-steps-step.left{
		margin-left: 0;
		margin-right: auto;
	}	
	.upgrade-center-container-work-container-steps-step.right{
		margin-right: 0;
		margin-left: auto;
	}
	.upgrade-center-container-work-container-steps-step{
		width: 45%;
	}
	.upgrade-center-container-work-container-steps{
		max-width: 70%;
		margin: 70px auto 0 auto;
		display: flex;
		flex-direction: column;
		position: relative;
	}
	.upgrade-center-container-work-container-steps-step__text{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 150%;
		color: #CBCBCB;
		margin: 0;
	}
	.upgrade-center-container-work-container-steps-step__title{
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		line-height: 130%;
		color: #FFFFFF;	
		margin-bottom: 15px;
	}
	.upgrade-center-container-work-container__text{
		margin: 0;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		line-height: 130%;
		text-align: center;
		color: #CBCBCB;		
	}
	.upgrade-center-container-work-container__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;	
		margin-bottom: 10px;
	}
	.upgrade-center-container-work{
		padding: 65px 0;
		background: #111111;
	}
	.upgrade-center-container-garanty-container-benef-con-box__text{
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 160%;
		color: #CBCBCB;	
		margin: 0;
	}
	.upgrade-center-container-garanty-container-benef-con-box__title{
		font-style: normal;
		font-weight: bold;
		font-size: 26px;
		line-height: 130%;
		color: #FFFFFF;		
		margin-bottom: 10px;
	}
	.upgrade-center-container-garanty-container-benef-con-box{
		display: flex;
		flex-direction: column;
		margin-left: 40px;
	}
	.upgrade-center-container-garanty-container-benef-con{
		flex-basis: 49.5%;
		padding: 35px 45px;
		background: #161616;
		border: 1px solid #292929;
		display: flex;
		margin-bottom: 15px;
	}
	.upgrade-center-container-garanty-container-benef{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.upgrade-center-container-garanty-container__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;		
		margin-bottom: 35px;
	}
	.upgrade-center-container-garanty{
		padding: 60px 0;
		background: #111;
	}
	.upgrade-center-container-description-con{
		padding-bottom: 70px;
		padding-top: 50px;
	}
	.bm-fullhd{
		max-width: 1920px;
	}
	.upgrade-center-container-description-con-charac-text ul li{
		margin-bottom: 15px;
	}
	.upgrade-center-container-description-con-charac-text ul li::before{
		content: "\2022";
		color: #DA2924;
		font-weight: bold;
		display: inline-block;
		width: 8px;
		height: 8px;
		margin-right: 15px;
	}
	.upgrade-center-container-description-con-charac-text ul{
		padding: 0;
		margin: 0;
		list-style-type: none;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 170.5%;
		color: #dadada;
	}
	.upgrade-center-container-description-con-charac-text__title{
		font-style: normal;
		font-weight: bold;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;		
	}
	.upgrade-center-container-description-con-charac-text.right{
		padding-left: 90px;
	}
	.upgrade-center-container-description-con-charac-text{
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 20px 20px;
	}
	.upgrade-center-container-description-con-charac-image, .upgrade-center-container-description-con-charac-text{
		flex-basis: 50%;
	}
	.upgrade-center-container-description-con-charac{
		display: flex;
		align-items: center;
	}
	.upgrade-center-container-description-con__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;		
		margin-bottom: 40px;
	}
	.upgrade-center-container-description{
		background: #111111;
		padding: 45px 0;
	}
	.upgrade-center-callback-back{
		background: #0D0D0D;
	}
	.upgrade-center-callback{
		padding: 45px 0;
	}
	.upgrade-center-callback__but:hover{
		text-decoration: none;
		color: #FFFFFF !important;
	}
	.upgrade-center-callback__but{
		display: block;
		padding: 14px 26px 16px 26px;
		background: #F52722;
		border-radius: 5px;
		width: fit-content;
		margin: 15px auto 0 auto;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 120%;
		text-align: center;
		color: #FFFFFF !important;
	}
	.upgrade-center-callback-title{
		font-style: normal;
		font-weight: normal;
		font-size: 22px;
		line-height: 125%;
		text-align: center;
		color: #CBCBBC;		
		margin-bottom: 5px;
		margin-top: 0;
	}
	.upgrade-center-callback__tel:hover{
		text-decoration: none;
		color: #fff;
	}
	.upgrade-center-callback__tel{
		display: block;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		line-height: 125%;
		text-align: center;
		color: #fff;	
		margin-bottom: 
	}
	.treidin-konfigurator-service-mobile{
		background: #111;
	}
	.upgrade-center-slider-uslugi{
		background: #111;
	}
	.upgrade-center{
		background: #000;
		padding-top: 30px;
	}
	.upgrade-center-header__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;
		margin-bottom: 15px;
	}
	.upgrade-center-header__text{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 160%;
		text-align: center;
		color: #CBCBCB;		
		max-width: 80%;
		margin: 0 auto 0 auto;
	}
	.bm-contacts-breadcrumb{
		margin-top: 0;
	}
	
	
	.treidin-konfigurator-ul-li.activnost, .treidin-konfigurator-ul-li.activnost .treidin-konfigurator-ul-li-price{
		color: #fb1b1b;
	}
	.treidin-konfigurator-ul-li.activnost::before{
		content: url("/wp-content/uploads/upgrade-check-active.svg");
	}
	.uk-accordion-title{
		color: #fff;
	}
	.uk-accordion-title:hover{
		color: #fff;
	}	
	.uk-accordion-title:focus, .uk-accordion-title:hover{
		color: #fff;
	}
	.form-none{display: none;}
	.treidin-konfigurator-container-itog-cont{
		flex-basis: 38%;
	}
	.treidin-konfigurator-container-itog-callback{
		flex-basis: 54%;
	}
	.treidin-konfigurator-header-container__title{
		margin-bottom: 35px;
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;
	}
	.treidin-konfigurator-container-configurator-header-link{
		padding: 17px 50px;
		position: relative;
		font-weight: 500;
		font-size: 20px;
	}
	.treidin-konfigurator-container, .treidin-konfigurator-container-configurator{
		margin-top: 0;
	}
	.treidin-konfigurator-ul li{
		color: #dadada;
		font-weight: 500;
	}
	@media screen and (max-width: 768px){
		.upgrade-center-container-description-mobile, .upgrade-service-3-steps, .treidin-konfigurator-service, .ours-upgrade{
			padding: 20px 0 !important;
		}
		.upgrade-center-container-garanty-container-benef .upgrade-center-container-garanty-container-benef-con:last-child{
			margin-bottom: 0;
		}
	}
	@media screen and (max-width: 768px){
		.upgrade-center-container-description-con-charac-text ul{
			line-height: 140%;
		}
		.upgrade-center-container-description-con-charac-text ul li::before{
			margin-right: 10px;
		}
		.upgrade-service-3-steps{
			padding: 40px 0;
		}		
		.treidin-konfigurator-header-container__title{
			font-size: 24px;
		}
		.treidin-konfigurator-container-itog{
			flex-direction: column;
		}
		.treidin-konfigurator-stom-block{
			margin: 0 0 30px 0;
		}
		.treidin-konfigurator-container-itog-callback_sub{
			font-size: 14px;
			text-align: center;
		}
		.treidin-konfigurator-stom-block-container-box-name, .treidin-konfigurator-stom-block-container-box-price{
			font-size: 14px;
		}
		.treidin-konfigurator-stom-block-container-box-price{
			font-size: 14px;
		}
		.treidin-konfigurator-container-itog-stom{
			font-size: 18px;
			margin-bottom: 10px;
		}
		.treidin-konfigurator-container-itog-price{
			font-size: 16px;
			margin-top: 0;
		}
		div.wpforms-container-full .wpforms-form .wpforms-field-label-inline{
			font-size: 14px !important;
		}
		.treidin-konfigurator-container-itog{
			margin-top: 15px;
		}
		.treidin-konfigurator-container{
			margin: 20px 0;
		}
		.treidin-konfigurator-ul{
			padding: 0;
		}
		.treidin-konfigurator-ul li{
			flex-basis: 100%;
			margin-bottom: 20px;
		}
		.treidin-konfigurator-ul-li-p{
			flex-basis: 75%;
			font-size: 14px;
		}
		
		.treidin-konfigurator-ul-li-price{
			font-size: 14px;
			flex-basis: 25%;
			margin: 0;		
			text-align: right;
		}

		.treidin-konfigurator-container-configurator li .uk-accordion-content .treidin-konfigurator-ul-opera li{
			flex-basis: 100%;
		}
		.upgrade-center-header__title, .upgrade-center-container-description-con__title, .upgrade-center-container-garanty-container__title, .upgrade-center-container-work-container__title, .upgrade-service-3-steps-title, .treidin-konfigurator-service-container__title, .ours-upgrade-container-title{
			font-size: 24px !important;
		}
		.upgrade-center-container-work-container-steps-step-container{
			margin: 20px 0;
		}
		.upgrade-center-container-work-container-steps-step{
			width: 85%;
		}
		.step1, .step2, .step3, .step4{
			left: 0;
			right: auto;
		}
		.upgrade-line{
			left: 5%;
			right: auto;
			height: 92%;
		}
		.upgrade-center-container-work-container-steps-step__title{
			font-size: 18px;
		}
		.upgrade-center-container-work-container-steps-step.left{
			margin-right: 0;
    		margin-left: auto;
		}
		.upgrade-center-container-garanty, .upgrade-center-container-description{
			padding: 20px 0; 
		}
		.upgrade-center-container-work{
			padding: 20px 0;
		}
		.upgrade-service-3-steps-container-block-step{
			font-size: 22px;
			width: 110px;
			height: 110px;
		}
		.upgrade-service-3-steps-container-block-box__title{
			font-size: 19px;
		}
		.upgrade-service-3-steps-container-block-box__subtitle{
			font-size: 16px;
		}
		.upgrade-center-container-garanty-container-benef-con-box__title{
			font-size: 22px;
			text-align: center;
		}
		.upgrade-center-container-garanty-container-benef-con-box__text{
			font-size: 16px;
			text-align: center;
		}
		.upgrade-center-container-work-container-steps{
			max-width: 100%;
			margin-top: 35px;
		}
		.upgrade-center-container-garanty-container-benef-con{
			flex-basis: 100%;
			flex-direction: column;
			padding: 25px;
		}
		.upgrade-center-container-garanty-container-benef-con img{
			margin-bottom: 20px;
			max-width: 60px;
		}
		.upgrade-center-container-garanty-container-benef-con-box{
			margin: 0;
		}
		.upgrade-center-header__text{
			font-size: 16px;
			max-width: 100%;
		}
		.upgrade-center-callback-title, .upgrade-center-container-work-container__text{
			font-size: 18px;
		}
		.upgrade-center-callback__tel{
			font-size: 20px;
		}
		.upgrade-center-container-garanty-container__title{
			margin-bottom: 20px !important;
		}
		.treidin-konfigurator-service-container__title{
			margin-bottom: 10px !important;
		}
		.upgrade-center-container-description-con-charac-text ul{
			font-size: 16px;
		}
		.upgrade-center-container-description-con{
			padding-bottom: 0;
		}
		.upgrade-center-container-description-con-charac{
			margin: 30px 0;
			margin-top: 0;
		}
		.upgrade-center-container-description-con__title{
			margin: 0;
			margin-bottom: 20px;
		}
		.upgrade-center-container-description-mobile{
			background: #111;
		}
		.upgrade-center-container-description-con-charac.first{
			flex-direction: column-reverse;
		}
		.upgrade-center-container-description-con-charac.second{
			flex-direction: column;
		}
		.upgrade-center-container-description-con-charac.third{
			flex-direction: column-reverse;
		}		
		.upgrade-center-container-description-con-charac-text__title{
			font-size: 21px;
			margin-bottom: 15px;
			font-weight: 500;
		}
		.upgrade-center-container-description-con-charac-text.right{
			padding-left: 20px;
		}
		.upgrade-center-container-description-con-charac-text.left{
			padding-right: 20px;
		}	
		.upgrade-center-container-work-container-steps{
			margin-top: 5px;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 1200px){
		.upgrade-service-3-steps-title{
			margin-bottom: 100px !important;
		}
		.upgrade-center-container-description-con-charac.first{
			flex-direction: column-reverse;
		}
		.upgrade-center-container-description-con-charac.second{
			flex-direction: column;
		}
		.upgrade-center-container-description-con-charac.third{
			flex-direction: column-reverse;
		}	
		.upgrade-center-container-description-con-charac-text.right{
			padding-left: 20px;
		}
		.upgrade-center-container-description-con-charac-text.left{
			padding-right: 20px;
		}	
		.upgrade-center-container-garanty-container-benef-con{
			flex-basis: 49%;
			flex-direction: column;
			padding: 25px;
		}	
		.upgrade-center-container-garanty-container-benef-con-box__title {
			font-size: 22px;
			text-align: center;
		}	
		.upgrade-center-container-garanty-container-benef-con-box__text {
			font-size: 16px;
			text-align: center;
		}	
		.upgrade-center-container-garanty-container-benef-con-box{
			margin-left: 0;
		}
		.upgrade-center-container-garanty-container-benef-con img {
			margin-bottom: 20px;
		}	
		
		.treidin-konfigurator-header-container__title{
			font-size: 24px;
		}
		.treidin-konfigurator-container-itog{
			flex-direction: column;
		}
		.treidin-konfigurator-stom-block{
			margin: 0 0 30px 0;
		}
		.treidin-konfigurator-container-itog-callback_sub{
			font-size: 14px;
			text-align: center;
		}
		.treidin-konfigurator-stom-block-container-box-name, .treidin-konfigurator-stom-block-container-box-price{
			font-size: 14px;
		}
		.treidin-konfigurator-stom-block-container-box-price{
			font-size: 14px;
		}
		.treidin-konfigurator-container-itog-stom{
			font-size: 18px;
			margin-bottom: 10px;
		}
		.treidin-konfigurator-container-itog-price{
			font-size: 16px;
			margin-top: 0;
		}
		div.wpforms-container-full .wpforms-form .wpforms-field-label-inline{
			font-size: 14px !important;
		}
		.treidin-konfigurator-container-itog{
			margin-top: 15px;
		}
		.treidin-konfigurator-container{
			margin: 20px 0;
		}
		.treidin-konfigurator-ul{
			padding: 0;
		}
		.treidin-konfigurator-ul li{
			flex-basis: 100%;
			margin-bottom: 20px;
		}
		.treidin-konfigurator-ul-li-p{
			flex-basis: 75%;
			font-size: 14px;
		}
		
		.treidin-konfigurator-ul-li-price{
			font-size: 14px;
			flex-basis: 25%;
			margin: 0;		
			text-align: right;
		}

		.treidin-konfigurator-container-configurator li .uk-accordion-content .treidin-konfigurator-ul-opera li{
			flex-basis: 100%;
		}
		.upgrade-center-header__title, .upgrade-center-container-description-con__title, .upgrade-center-container-garanty-container__title, .upgrade-center-container-work-container__title, .upgrade-service-3-steps-title, .treidin-konfigurator-service-container__title, .ours-upgrade-container-title{
			font-size: 24px !important;
		}
		.upgrade-center-container-work-container-steps-step-container{
			margin: 20px 0;
		}
		.upgrade-center-container-work-container-steps-step{
			width: 85%;
		}
		.step1, .step2, .step3, .step4{
			left: 0;
			right: auto;
		}
		.upgrade-line{
			left: 2.5%;
			right: auto;
			height: 92%;
		}
		.upgrade-center-container-work-container-steps-step__title{
			font-size: 18px;
		}
		.upgrade-center-container-work-container-steps-step.left{
			margin-right: 0;
    		margin-left: auto;
		}
		.upgrade-center-container-garanty, .upgrade-center-container-description, .treidin-konfigurator-service, .ours-upgrade{
			padding: 20px 0; 
		}
		.upgrade-center-container-work{
			padding: 20px 0;
		}
		.upgrade-center-container-garanty-container-benef-con-box__title{
			font-size: 22px;
			text-align: center;
		}
		.upgrade-center-container-garanty-container-benef-con-box__text{
			font-size: 16px;
			text-align: center;
		}
		.upgrade-center-container-work-container-steps{
			max-width: 100%;
			margin-top: 35px;
		}

		.upgrade-center-header__text{
			font-size: 16px;
			max-width: 100%;
		}
		.upgrade-center-callback-title, .upgrade-center-container-work-container__text{
			font-size: 18px;
		}
		.upgrade-center-callback__tel{
			font-size: 20px;
		}
		.upgrade-center-container-garanty-container__title{
			margin-bottom: 20px;
		}
		.upgrade-center-container-description-con-charac-text ul{
			font-size: 16px;
		}
		.upgrade-center-container-description-con{
			padding-bottom: 0;
		}
		.upgrade-center-container-description-con-charac{
			margin: 30px 0;
			margin-top: 0;
		}
		.upgrade-center-container-description-con__title{
			margin-bottom: 20px;
		}
		.upgrade-center-container-description-con-charac.first{
			flex-direction: column-reverse;
		}
		.upgrade-center-container-description-con-charac.second{
			flex-direction: column;
		}
		.upgrade-center-container-description-con-charac.third{
			flex-direction: column-reverse;
		}		
		.upgrade-center-container-description-con-charac-text__title{
			font-size: 21px;
			margin-bottom: 15px;
			font-weight: 500;
		}
		.upgrade-center-container-description-con-charac-text.right{
			padding-left: 20px;
		}
		.upgrade-center-container-description-con-charac-text.left{
			padding-right: 20px;
		}	
		.upgrade-center-container-work-container-steps{
			margin-top: 5px;
		}		
		
		
	}
	@media screen and (min-width: 1200px){
		.igor-pc{
			display: block;
		}
		.igor-mobile{
			display: none;
		}
	}
	@media screen and (max-width: 1200px){
		.igor-pc{
			display: none;
		}
		.igor-mobile{
			display: block;
		}
	}	
</style>

<?php get_footer(); ?>