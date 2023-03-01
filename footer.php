<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boiling_machine
 */

?>


<footer class="bm-footer" id="bm-main-footer">



<div class="bm-adaptive bm-margin bm footer-dekstop" v-if="window.width >= 1350">
		<div class="footer-content">
			<div class="footer-block">
				<h3 class="footer-title">Компьютеры</h3>
				<ul class="footer-block-ul">
					<li><a href="/kompyutery/powered-by-asus/">Powered by ASUS</a></li>
					<li><a href="/kompyutery/rmachine/">R Machine</a></li>
					<li><a href="/kompyutery/t-machine/">T Machine</a></li>
					<li><a href="/kompyutery/shuttle/">Shuttle</a></li>
					<li><a href="/kompyutery/quartz/">Quartz</a></li>
					<li><a href="/kompyutery/atom-computers/">ATOM</a></li>	
					<li><a href="/kompyutery/mesh/">Mesh</a></li>
					<li><a href="/kompyutery/frost/">Frost</a></li>									
					<li><a href="/kompyutery/line/">Line</a></li>
				</ul>
			</div>

			<div class="footer-block">
				<h3 class="footer-title">Периферия</h3>
				<ul class="footer-block-ul">
					<li><a href="/katalog/klaviatury/">Клавиатуры</a></li>
					<li><a href="/katalog/oborudovanie-dlya-strima/">Для стрима</a></li>
					<li><a href="/katalog/myshki/">Мыши</a></li>
					<li><a href="/katalog/audio/">Аудио</a></li>				
				</ul>				
			</div>
			<div class="footer-block">
				<h3 class="footer-title">Услуги</h3>
				<ul class="footer-block-ul">
					<li><a href="/uslugi/oplata/">Кредит и рассрочка</a></li>
					<li><a href="/apgreyd-service/">Апгрейд сервис</a></li>
					<li><a href="/servisnoe-obsluzhivanie/">Сервисное обслуживание</a></li>	
					<li><a href="/uslugi/servis/">Поддержка</a></li>					
					<li><a href="/uslugi/dostavka/">Доставка</a></li>
					<li><a href="/uslugi/servis/">Сервис</a></li>					
				</ul>				
			</div>
			<div class="footer-block">
				<h3 class="footer-title">Компания</h3>
				<ul class="footer-block-ul">
					<li><a href="/contacts/">Контакты</a></li>
					<li><a href="/proekty/">Проекты</a></li>
                    <li><a href="/o-kreslah/">О креслах</a></li>
					<li><a href="/blog/articles/">Статьи</a></li>
					<li><a href="/o-kompanii/">О нас</a></li>				
					<li><a href="/blog/">Блог</a></li>
					<li><a href="/faq/">FAQ</a></li>
                    <li><a href="/sitemap/">Карта сайта</a></li>
				</ul>				
			</div>
			<div class="footer-block" style="flex-basis: 19%;">
				<h3 class="footer-title">Контакты</h3>
				<div class="footer-contact">
					<p class="footer-contact-p footer-contact-p-tel"><a class="footer-pc-callback">8 (800) 350-83-39</a></p>
					<p class="footer-contact-p footer-contact-p-tel"><a href="mailto:info@boiling-machine.ru" class="footer-pc-callback-mail">info@boiling-machine.ru</a></p>
					<p class="footer-contact-p footer-contact-p-cont">г. Москва, ул. Спартаковский пер., д. 2, стр. 1, подъезд 4, офис 3</p>
					<h4 class="footer-contact-seti">Мы в соц. сетях</h4>
					<div class="footer-contact-seti-images">
						<a href="https://web.whatsapp.com/send?phone=79999992160"><img src="/wp-content/themes/boiling_machine/images/whatsapp.svg" style="margin-right: 9px;" alt="WhatsApp Boiling Machine"></a>					
						<a href="https://vk.com/boilingmachine"><img src="/wp-content/themes/boiling_machine/images/vk.svg" style="margin-right: 9px;" alt="VK Boiling Machine"></a>
						<a href="https://www.youtube.com/channel/UC6l0AIouEPXnHvMnVAMzwgg"><img src="/wp-content/themes/boiling_machine/images/youtube.svg" alt="Youtube Boiling Machine"></a>						
					</div>
					<p class="company-info">© «Boiling Machine», 2021</p>
					<p class="politika"><a href="/privacy-policy/">Политика конфиденциальности</a></p>
				</div>				
			</div>
		</div>
</div>









<div class="bm-adaptive bm-margin bm footer-mobile-con" v-if="window.width < 1350">
	<div class="footer-mobile-content">
		<div class="footer-mobile-links">
			<ul class="footer-block-ul">
				<li><a href="/kompyutery/">Компьютеры</a></li>
				<li><a href="/katalog/aksesuary/">Перефирия</a></li>
				<li><a href="/uslugi/">Услуги</a></li>
				<li><a href="/contacts/">Контакты</a></li>
				<li><a href="/apgreyd-service/">Апгрейд сервис</a></li>
				<li><a href="/servisnoe-obsluzhivanie/">Сервисное обслуживание</a></li>	
			</ul>
		</div>
		<div class="footer-block" style="flex-basis: 19%;">
			<h3 class="footer-title">Контакты</h3>
			<div class="footer-contact">
				<p class="footer-contact-p footer-contact-p-tel"><a href="tel:+78003508339">8 (800) 350-83-39</a></p>
				<p class="footer-contact-p footer-contact-p-tel"><a href="mailto:info@boiling-machine.ru" class="footer-pc-callback-mail">info@boiling-machine.ru</a></p>
				<p class="footer-contact-p footer-contact-p-cont">г. Москва, ул. Спартаковский пер., д. 2, стр. 1, подъезд 4, офис 3</p>
				<h4 class="footer-contact-seti">Мы в соц. сетях</h4>
				<div class="footer-contact-seti-images">
					<a href="https://web.whatsapp.com/send?phone=79999992160"><img src="/wp-content/themes/boiling_machine/images/whatsapp.svg" style="margin-right: 9px;" alt="WhatsApp Boiling Machine"></a>
					<a href="https://vk.com/boilingmachine"><img src="/wp-content/themes/boiling_machine/images/vk.svg" style="margin-right: 9px;" alt="VK Boiling Machine"></a>
					<a href="https://www.youtube.com/channel/UC6l0AIouEPXnHvMnVAMzwgg"><img src="/wp-content/themes/boiling_machine/images/youtube.svg" alt="Youtube Boiling Machine"></a>
				</div>
				<p class="politika"><a href="/privacy-policy/">Политика конфиденциальности</a></p>
			</div>				
		</div>		
	</div>
</div>





<div class="mobile-footer-burger">
	<div class="mobile-footer-burger-container">
		<div class="close-popup"><img src="/wp-content/uploads/close-burger.svg" class="close-burger-image"></div>
		<div class="mobile-footer-burger-logo">
			<a href="/"><img src="/wp-content/uploads/logo-boiling-machine.svg" alt="Логотип Boiling Machine"></a>
		</div>
		<div class="mobile-footer-burger-search">
								
			    <form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ) ?>">						
					<input type="search" id="woocommerce-product-search-field-0" class="header-form-search" placeholder="Поиск" value="" name="s" style="width: 90%;">
					<button type="submit" value="Поиск" class="btn btn-outline-success search-button"><img src="/wp-content/uploads/search-poisk.svg" alt="Поиск"></button>
					<input type="hidden" name="post_type" value="product">
				</form>
			
		</div>
		<div class="mobile-footer-burger-menu">
            <ul class="nav flex-column flex-nowrap overflow-hidden mobile-footer-ul">
                <li class="nav-item">
                    <a class="nav-link-drop text-truncate" href="/compare/">
                        <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C11.4873 0 12.6364 1.18591 12.6364 2.58013V20.4199C12.6364 21.8141 11.4873 23 10 23C8.51267 23 7.36364 21.8141 7.36364 20.4199V2.58013C7.36364 1.18591 8.51267 0 10 0ZM10.8182 2.58013C10.8182 2.13228 10.4519 1.76923 10 1.76923C9.54813 1.76923 9.18182 2.13228 9.18182 2.58013V20.4199C9.18182 20.8677 9.54813 21.2308 10 21.2308C10.4519 21.2308 10.8182 20.8677 10.8182 20.4199V2.58013ZM17.3636 6.6899C18.851 6.6899 20 7.87581 20 9.27003V20.4199C20 21.8141 18.851 23 17.3636 23C15.8763 23 14.7273 21.8141 14.7273 20.4199V9.27003C14.7273 7.87581 15.8763 6.6899 17.3636 6.6899ZM18.1818 9.27003C18.1818 8.82219 17.8155 8.45913 17.3636 8.45913C16.9118 8.45913 16.5455 8.82219 16.5455 9.27003V20.4199C16.5455 20.8677 16.9118 21.2308 17.3636 21.2308C17.8155 21.2308 18.1818 20.8677 18.1818 20.4199V9.27003ZM2.63636 11.1498C4.12369 11.1498 5.27273 12.3357 5.27273 13.73V20.4199C5.27273 21.8141 4.1237 23 2.63636 23C1.14903 23 0 21.8141 0 20.4199V13.73C0 12.3357 1.14903 11.1498 2.63636 11.1498ZM3.45455 13.73C3.45455 13.2821 3.08823 12.9191 2.63636 12.9191C2.18449 12.9191 1.81818 13.2821 1.81818 13.73V20.4199C1.81818 20.8677 2.18449 21.2308 2.63636 21.2308C3.08823 21.2308 3.45455 20.8677 3.45455 20.4199V13.73Z" fill="#CBCBCB"/>
                        </svg>
                        <span class="d-sm-inline">Сравнение</span>
                        <b class="side-cart__number js-side-comparison-number"><?=count(exKod::Common()->getCookieArray('catalog_comparison'))?></b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-drop text-truncate" href="/favorite/">
                        <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4919 2.06233C9.84361 -0.372469 5.88659 -0.890762 2.82279 1.81286C-0.456492 4.70664 -0.924142 9.55852 1.65899 12.9915C2.56336 14.1934 4.25199 15.9454 5.95196 17.6197C7.66883 19.3107 9.45374 20.977 10.5901 22.0243L10.6138 22.0461C10.8015 22.2191 10.9847 22.388 11.1528 22.5196C11.3398 22.6661 11.5667 22.8147 11.8558 22.9043C12.2676 23.0319 12.717 23.0319 13.1288 22.9043C13.4179 22.8147 13.6447 22.6661 13.8318 22.5196C14 22.3879 14.1831 22.2191 14.3708 22.046L14.3945 22.0243C15.5309 20.977 17.3158 19.3107 19.0326 17.6197C20.7326 15.9454 22.4212 14.1934 23.3256 12.9915C25.8999 9.57028 25.5039 4.68158 22.151 1.8035C19.0517 -0.857027 15.1374 -0.373494 12.4919 2.06233ZM11.6912 4.24333C9.70315 1.84292 6.5481 1.30954 4.19852 3.3829C1.73701 5.55504 1.39644 9.17311 3.32158 11.7316C4.11981 12.7925 5.7009 14.4431 7.41125 16.1276C9.1047 17.7955 10.8707 19.4443 11.9993 20.4844C12.2198 20.6876 12.3405 20.7978 12.4344 20.8714C12.4581 20.8899 12.4749 20.9018 12.4857 20.9091C12.49 20.9094 12.4946 20.9094 12.4989 20.9091C12.5097 20.9018 12.5265 20.8899 12.5501 20.8714C12.6441 20.7978 12.7648 20.6876 12.9853 20.4844C14.1139 19.4443 15.8799 17.7955 17.5733 16.1276C19.2837 14.4431 20.8648 12.7925 21.663 11.7316C23.597 9.16135 23.2835 5.52681 20.7968 3.39226C18.3873 1.32396 15.2734 1.85259 13.2934 4.24333C13.0955 4.48228 12.8019 4.6205 12.4923 4.6205C12.1827 4.6205 11.8891 4.48228 11.6912 4.24333ZM12.4923 20.9147C12.4866 20.9172 12.4835 20.9189 12.4835 20.9189C12.4835 20.9189 12.486 20.9175 12.4912 20.9142" fill="#DEDEDE"/>
                        </svg>
                        <span class="d-sm-inline">Избранное</span>
                        <b class="side-cart__number js-side-favorite-number"><?=count(exKod::Common()->getCookieArray('catalog_favorite'))?></b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-drop text-truncate" href="/kompyutery/"><span class="d-sm-inline">Компьютеры</span></a>
                </li>
			  <li class="nav-item">
				  <a class="nav-link-drop text-truncate" href="/igrovye-kresla/"><span class="d-sm-inline">Игровые кресла</span></a>
			  </li>	                
                <li class="nav-item">
                    <a class="nav-link-drop text-truncate" href="/katalog/aksesuary/"><span class="d-sm-inline">Периферия</span></a>
                </li>  
                                          
                <li class="nav-item">
                    <a class="nav-link-drop text-truncate" href="/uslugi/"><span class="d-sm-inline">Услуги</span></a>
                </li>
                
                <li class="nav-item">
					<a class="nav-link-drop text-truncate" href="/apgreyd-service/"><span class="d-sm-inline">Апгрейд сервис</span></a>
                </li>			
				
                <li class="nav-item">
					<a class="nav-link-drop text-truncate" href="/servisnoe-obsluzhivanie/"><span class="d-sm-inline">Сервисное обслуживание</span></a>
                </li>					
				
                <li class="nav-item dropdown">
                    <a class="nav-link-drop nav-link-drop-item collapsed text-truncate" href="#submenu2" data-toggle="collapse" data-target="#submenu2"> <span class="d-sm-inline">Компания</span></a>
                    <div class="collapse nav-link-drop-company" id="submenu2" aria-expanded="false">
                        <ul class="flex-column nav mobile-footer-ul-sub">
                            <li class="nav-item nav-item-dropdown"><a class="nav-link-drop py-0" href="/contacts/"><span>Контакты</span></a></li>
                            <li class="nav-item nav-item-dropdown"><a class="nav-link-drop py-0" href="/o-kompanii/"><span>О нас</span></a></li>
                            <li class="nav-item nav-item-dropdown"><a class="nav-link-drop py-0" href="/proekty/"><span>Проекты</span></a></li>
                            <li class="nav-item nav-item-dropdown"><a class="nav-link-drop py-0" href="/blog/"><span>Блог</span></a></li>
                            <li class="nav-item nav-item-dropdown"><a class="nav-link-drop py-0" href="/o-kreslah/"><span>О креслах</span></a></li>
                        </ul>
                    </div>
                </li>  
                   
				<li class="nav-item">
                    <a class="nav-link-drop text-truncate" href="/kompyutery/powered-by-asus/"><span class="d-sm-inline">Powered by ASUS</span></a>
                </li>	
			 
				<li class="nav-item">
                    <a class="nav-link-drop text-truncate" href="/faq/"><span class="d-sm-inline">FAQ</span></a>
                </li>
				 
            </ul>			
		</div>
		<div class="footer-block">
			<div class="footer-contact">
				<h4 class="footer-contact-seti">Мы в соц. сетях</h4>
				<div class="footer-contact-seti-images">
					<a href="https://web.whatsapp.com/send?phone=79999992160"><img src="/wp-content/themes/boiling_machine/images/whatsapp.svg" style="margin-right: 9px;" alt="WhatsApp Boiling Machine"></a>
					<a href="https://vk.com/boilingmachine"><img src="/wp-content/themes/boiling_machine/images/vk.svg" style="margin-right: 9px;" alt="VK Boiling Machine"></a>
					<a href="https://www.youtube.com/channel/UC6l0AIouEPXnHvMnVAMzwgg"><img src="/wp-content/themes/boiling_machine/images/youtube.svg" alt="Youtube Boiling Machine"></a>
				</div>
				
			</div>				
		</div>				
	</div>
</div>
<div class="header-search-container-back">
	<div class="header-search-container">
		<div class="header-search-popup-close">X</div>
		<div class="form-search">					
		    <form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ) ?>">						
				<input type="search" id="woocommerce-product-search-field-1" class="header-form-search" placeholder="Поиск" value="" name="s" style="width: 90%;">
				<button type="submit" value="Поиск" class="btn btn-outline-success search-button">Найти</button>
				<input type="hidden" name="post_type" value="product">
			</form>
		</div>	
	</div>
</div>

	<a href="#" id="scroll_top">
		<span></span>
		<span></span>
		<span></span>
	</a>

	<div id="callback" uk-modal  class="callback-popup">
		<div class="uk-modal-dialog uk-modal-body callback-popup-body">
			<button class="uk-modal-close-default callback-popup-body-close" type="button" uk-close></button>
			<!--
			<h2 class="uk-modal-title-callback">Заказать обратный звонок</h2>
			<p class="callback__text">Заполните форму и наш менеджер свяжется с вами в течение 5 минут</p>
			-->
			<?php echo do_shortcode('[wpforms id="3631" title="false" description="false"]'); ?>
		</div>
	</div>	
	
</footer>

<?php wp_footer(); ?>


<!-- стили с heaader -->



<script>


  createApp({
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
  }).mount('#bm-main-footer')
</script>


<style>
	.dropdown-container{
		display: none;
		position: absolute;
		left: 100%;
		top: 0;
		background: #111;
		border: 1px solid #282828;
		min-height: 240px;
	}
	.drop-container-head:hover .dropdown-container{
		display: flex;
	}

	.dropdown-col{
		flex-direction: column !important;
		list-style-type: none;
		margin: 0;
		padding: 0;
	}
	.dropdown-container-menu-image{
		width: 400px;
		text-align: center;
		display: flex;
		align-items: flex-end;
		background: url("/wp-content/uploads/light-aikakprosto.webp");
		background-position: center;
		background-size: contain;
		background-repeat: no-repeat;
	}
	.dropdown-container-menu-image img{
		max-height: 200px;

	}
	.dropdown-col-link{
		padding: 14px 60px 14px 40px;
		transition: .3s;
	}
	.dropdown-col-link:hover{
		background: #1f1f1f;
		transition: .3s;
	}
	.header-link-drop{		
		color: #CBCBCB;
		font-size: 17px;
		font-weight: 500;
	}
	.header-link-drop:hover{		
		text-decoration: none;
		transition: .3s;
		color: #fff;
	}
	.third-menu{
		border-top: 1px solid #282828;
		border-bottom: 1px solid #282828;
		border-left: 1px solid #282828;
		padding: 0;		
		border-radius: unset;
		/*min-height: 240px;*/
	}
	.dropdown-col .dropdown-col-link:first-child{
		margin-top: 40px;
	}
	.dropdown-col .dropdown-col-link:last-child{
		margin-bottom: 40px;
	}	
	.drop-container-head{
		padding: 14px 40px !important;
		font-weight: 500;
		color: #cbcbcb !important;
	}
	.third-menu .drop-container-head:first-child{
		margin-top: 40px;
	}
	.third-menu .drop-container-head:last-child{
		margin-bottom: 40px;
	}
	.header-link-drop.link{
		font-size: 15px;
		color: #DF2C2C;
	}
</style>
	
<script>
	$(function(){
				
		$( ".dropdown-col-link.pc" ).hover(
		  function() {
			var image = $( this ).attr("img-link");  
			$(".dropdown-container-menu-image__image.pc").attr("src",image);		
		  }
		);	
		$( ".dropdown-col-link.feat" ).hover(
		  function() {
			var image = $( this ).attr("img-link");  
			$(".dropdown-container-menu-image__image.feat").attr("src",image);		
		  }
		);					
	})	
	

</script>	

<script>

	$(function(){
		$('.pc-search-button').click(function(){
			$('.header-icons-tel').attr('hidden', true);
			$('.header-icons-search-form').removeAttr('hidden');
			$('.header-form-search').focus();
		});
		
		
		$('.close-search-form').click(function(){
			$('.header-icons-search-form').attr('hidden', true);
			$('.header-icons-tel').removeAttr('hidden');
		});		
	})
	
</script>	
	
<style>
	.search-button:hover{outline: none; border: unset;}
	.search-button{background: unset; border: unset; height: 100%;}
	.pc-search-button, .close-search-form{cursor: pointer;}
	.header-form-search{width: 100%;}
	.form-inline{padding: 10px !important; width: 100%; font-size: 16px !important;}
	.search-button img{max-height: 22px;}
	.header-icons-bl{flex-basis: 13%;}
	.header-icons-tel, .header-icons-search-form{
		flex-basis: 90%;
	}
	.header-icons-search-form{margin-right: 20px; display: flex;}
	.close-search-form{margin-right: 20px; margin-left: 0 !important;}
	.header-icons-tel{display: flex; justify-content: flex-end; align-items: center;}
	
	/*
	.search-button{
		position: unset !important;
		top: unset !important;
		right: unset !important;
		background: none;
		border: none;
		padding: 0;		
	}	
	.form-inline{
		flex-flow: unset !important;
	}
	.header-form-search{
		display: none;
		position: absolute;
		
	}
	*/
</style>

<!-- стили с heaader -->


<?if(exKod::Seo()->isNotGooglePageSpeed()):?>
<script>

	$(function() {
	  $(".footer-pc-callback").click(function(){
		  $("#callback").css({"display":"block","opacity":"1"});
		  $("#callback .uk-modal-body").css("opacity","1");
	  });
	

	  
	});
</script>


<script type="text/javascript" data-skip-moving="true">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-329336-gEENB"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script>
<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-329336-gEENB" style="position:fixed; left:-999px;" alt=""/></noscript>
<script type="text/javascript" data-skip-moving="true">
	$(function(){
		$('.b24-widget-button-inner-item').click(function(){
			$('.b24-widget-button-social-item').find("[data-b24-crm-button-widget='openline_whatsup']").attr('href','https://web.whatsapp.com/send?phone=79999992160');
		});
		
	})
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   var z = null;m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90243397, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"products"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90243397" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

  <script data-skip-moving="true">
      $(document).ready(function(){
         var w = $(window).width();
        //if(w >= 700) {
            (function(w,d,u){
                var s=d.createElement('script');s.async=1;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn.bitrix24.ru/b3409537/crm/site_button/loader_4_vnqqq2.js');
        //}
      });
  </script>

<?endif;?>

</body>
</html>
