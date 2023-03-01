<?php get_header(); ?>

<div class="bm-apgreid-center-page-main">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-contacts-header">
			<div class="bm-contacts-breadcrumb">
				<?php the_breadcrumb() ?>
			</div>
			<div class="bm-contacts-title">
				<h1><?php the_title('') ?></h1>
			</div>
		</div>		
	</div>	
</div>
<div class="upgrade-center-container">
	<div class="bm-adaptive bm-margin bm">
		<div class="upgrade-center-main-image">
			<img src="/wp-content/uploads/6b8fb7c4702c8111877330484f79686a.jpg">
		</div>
		<div class="upgrade-center-main-content">
			<h2 class="upgrade-center-main-content__title">Сделай свой компьютер лучше!</h2>
			<p class="upgrade-center-main-content__des">Оставь заявку и мы поможем увеличить производительность, улучшить дизайн либо устранить техническую проблему.</p>
			<p  class="upgrade-center-main-content__link">
				Заказать апгрейд
			</p>
		</div>
	</div>
</div>
<div class="upgrade-center-connect-back">
	<div class="upgrade-center-connect">
		<div class="upgrade-center-connect-container">
			<iframe width="60%" height="600" src="https://www.youtube.com/embed/6jLRzKBZjGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>	
</div>
<div class="upgrade-center-upgrade-video">
	<div class="bm-adaptive bm-margin bm">
		<div class="upgrade-center-upgrade-video-container">
			<div class="upgrade-center-upgrade-video-container-text">
				<h2 class="upgrade-center-upgrade-video-container-text__title"></h2>
				<p class=""></p>
			</div>
			<div class="upgrade-center-upgrade-video-container-img">
				
			</div>
		</div>
	</div>
</div>
<div class="treidin-konfigurator-back">
	<div class="bm-adaptive bm-margin bm">
		<div class="treidin-konfigurator-header-container">
			<h2 class="treidin-konfigurator-header-container__title">Получите скидку на новый компьютер BOILING MACHINE</h2>
		</div>
		<div class="treidin-konfigurator-container">
			<h2 class="treidin-konfigurator-container__title">Оцените свой компьютер</h2>
			<p class="treidin-konfigurator-container__text">Укажите параметры компьютера и Вы мгновенно узнаете его оценку, а также получите исключительное предложение на покупку нового BOILING MACHINE.</p>
			<div class="treidin-konfigurator-container-configurator">
				<ul uk-accordion>
				    <li class="uk-open">
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link" href="#">Процессор</a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-proc">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('proczessor') ):
									 	// перебираем данные
									    while ( have_rows('proczessor') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li treidin-konfigurator-ul-li">
									    		<?php the_sub_field('nazvanie_proczessora'); ?>
									    		<span class="treidin-konfigurator-ul-li-price"><?php the_sub_field('czena_proczessora'); ?></span>

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
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link" href="#">Видеокарта</a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-videokarta">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('videokarta') ):
									 	// перебираем данные
									    while ( have_rows('videokarta') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-video treidin-konfigurator-ul-li">
									    		<?php the_sub_field('nazvanie_videokarty'); ?>
									    		<span class="treidin-konfigurator-ul-li-price"><?php the_sub_field('czena_videokarty'); ?></span>

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
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link" href="#">Оперативная память</a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-opera">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('operativnaya_pamyat') ):
									 	// перебираем данные
									    while ( have_rows('operativnaya_pamyat') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-opera treidin-konfigurator-ul-li">
									    		<?php the_sub_field('obem_operativnoj_pamyati'); ?>
									    		<span class="treidin-konfigurator-ul-li-price"><?php the_sub_field('czena_obema_opirativnoj_pamyati'); ?></span>

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
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link" href="#">SSD</a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-ssd">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('ssd') ):
									 	// перебираем данные
									    while ( have_rows('ssd') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-ssd treidin-konfigurator-ul-li">
									    		<?php the_sub_field('obem_ssd'); ?>
									    		<span class="treidin-konfigurator-ul-li-price"><?php the_sub_field('czena_obema'); ?></span>

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
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link" href="#">HDD</a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-hdd">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('hdd') ):
									 	// перебираем данные
									    while ( have_rows('hdd') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-hdd treidin-konfigurator-ul-li">
									    		<?php the_sub_field('obem_hdd'); ?>
									    		<span class="treidin-konfigurator-ul-li-price"><?php the_sub_field('czena_obema_hdd'); ?></span>

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
				        <a class="uk-accordion-title treidin-konfigurator-container-configurator-header-link" href="#">Блок питания</a>
				        <div class="uk-accordion-content">
				        	<ul class="treidin-konfigurator-ul treidin-konfigurator-ul-bp">
					            <?php
									// проверяем есть ли в повторителе данные
									if( have_rows('blok_pitaniya') ):
									 	// перебираем данные
									    while ( have_rows('blok_pitaniya') ) : the_row();
									        // отображаем вложенные поля
									    	?>
									    	<li class="treidin-konfigurator-ul-li-bp treidin-konfigurator-ul-li">
									    		<?php the_sub_field('obem_bloka_pitaniya'); ?>
									    		<span class="treidin-konfigurator-ul-li-price"><?php the_sub_field('czena_obema_bloka_pitaniya'); ?></span>

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
			<div class="treidin-konfigurator-container-itog">				
				<div class="treidin-konfigurator-container-itog-cont">
					<p class="treidin-konfigurator-container-itog-ras">Рассчитать стоимость</p>
					<p class="treidin-konfigurator-container-itog-error"></p>
					<div class="treidin-konfigurator-stom-block">
						<p class="treidin-konfigurator-container-itog-stom">Результат оценки:</p>
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
<div class="popup-apgreid-back">
	<div class="popup-apgreid-container">
		<p class="popup-apgreid-container-close">X</p>
		<h2 class="popup-apgreid-container__title">Заказать апгрейд</h2>
		<?php echo do_shortcode("[wpforms id='1204']") ?>
	</div>
</div>
<script type="text/javascript">
	jQuery(function($) {
	
	window.videokarta = 0;
	window.proc = 0;
	window.opera = 0;	
	window.ssd = 0;
	window.hdd = 0;
	window.bp = 0;

	$('body').on('click','.treidin-konfigurator-ul-li', function() {
		$(this).parent(".treidin-konfigurator-ul").addClass("active");
	  if ($(".treidin-konfigurator-ul-li").hasClass("active")) {
	    var price = $(this).find(".treidin-konfigurator-ul-li-price").text();    
	    console.log(price);  

	    videokarta = parseInt(price);
	  }
	});

	$('body').on('click','.treidin-konfigurator-ul-li-video', function() {
		$(this).parent(".treidin-konfigurator-ul").addClass("active");
	  if ($(".treidin-konfigurator-ul-li-video").hasClass("active")) {
	    var price = $(this).find(".treidin-konfigurator-ul-li-price").text();    
	    console.log(price);  

	    proc = parseInt(price);
	  }
	});	

	$('body').on('click','.treidin-konfigurator-ul-li-opera', function() {
		$(this).parent(".treidin-konfigurator-ul").addClass("active");
	  if ($(".treidin-konfigurator-ul-li-opera").hasClass("active")) {
	    var price = $(this).find(".treidin-konfigurator-ul-li-price").text();    
	    console.log(price);  

	    opera = parseInt(price);
	  }
	});

	$('body').on('click','.treidin-konfigurator-ul-li-ssd', function() {
		$(this).parent(".treidin-konfigurator-ul").addClass("active");
	  if ($(".treidin-konfigurator-ul-li-ssd").hasClass("active")) {
	    var price = $(this).find(".treidin-konfigurator-ul-li-price").text();    
	    console.log(price);  

	    ssd = parseInt(price);
	  }
	});

	$('body').on('click','.treidin-konfigurator-ul-li-hdd', function() {
		$(this).parent(".treidin-konfigurator-ul").addClass("active");
	  if ($(".treidin-konfigurator-ul-li-hdd").hasClass("active")) {
	    var price = $(this).find(".treidin-konfigurator-ul-li-price").text();    
	    console.log(price);  

	    hdd = parseInt(price);
	  }
	});

	$('body').on('click','.treidin-konfigurator-ul-li-bp', function() {
		$(this).parent(".treidin-konfigurator-ul").addClass("active");
	  if ($(".treidin-konfigurator-ul-li-bp").hasClass("active")) {
	    var price = $(this).find(".treidin-konfigurator-ul-li-price").text();    
	    console.log(price);  

	    bp = parseInt(price);
	  }
	});


	$('body').on('click','.treidin-konfigurator-ul-li', function() {
		$(".treidin-konfigurator-container-itog-callback").css("display","none");
		$(".treidin-konfigurator-stom-block").css("display","none");
	  
	});







	$('body').on('click','.treidin-konfigurator-container-itog-ras', function() {
		if ( $(".treidin-konfigurator-ul-proc").hasClass("active") && $(".treidin-konfigurator-ul-videokarta").hasClass("active") && $(".treidin-konfigurator-ul-opera").hasClass("active") && $(".treidin-konfigurator-ul-ssd").hasClass("active") && $(".treidin-konfigurator-ul-hdd").hasClass("active") && $(".treidin-konfigurator-ul-bp").hasClass("active") ) {
			var itog = parseInt(videokarta) + parseInt(proc) + parseInt(opera) + parseInt(ssd) + parseInt(hdd) + parseInt(bp);
			$(".treidin-konfigurator-container-itog-callback").css("display","block");
		  $(".treidin-konfigurator-container-itog-price").text("~ " + itog + " руб.");	
		  $(".treidin-konfigurator-container-itog-price").css("color","#fff");	
		  $(".treidin-konfigurator-container-itog-error").css("display","none");
		  $(".treidin-konfigurator-stom-block").css("display","block");	

		  $(".myform-itog").attr("value",itog + "руб.");
		}else{
			$(".treidin-konfigurator-container-itog-error").text("Выберите все пункты");
			$(".treidin-konfigurator-container-itog-error").css("color","#fb1b1b");
		}

	});



	});
</script>
<?php get_footer(); ?>