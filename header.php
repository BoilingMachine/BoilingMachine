<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boiling_machine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="icon" href="/wp-content/uploads/favicon.svg" type="image/svg+xml">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, minimum-scale=0.86">
    <!--  width=device-width, initial-scale=1  -->
	
	<? if(exKod::Seo()->isNotGooglePageSpeed()):?>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<?endif;?>


	<? if(exKod::Seo()->isNotGooglePageSpeed()):?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-19PHV2EHD3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-19PHV2EHD3');
	</script>
	<?endif;?>
	
    <? if(exKod::Seo()->isNotGooglePageSpeed()):?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="https://unpkg.com/vue@3"></script>
	
	
	
	
	
	<?endif;?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	

	

	
<header class="boiling-machine-header" id="bm-main-header">

<div class="bm-adaptive bm-margin bm header-pc" v-if="window.width >= 1350">		
			<div class="header-blocks">
				<nav class="navbar navbar-expand-lg header-nav">
				  <a href="/"><img src="/wp-content/uploads/logo-boiling-machine.svg" style="margin-right: 15px;" alt="Логотип Boiling Machine"></a>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav">				
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="/kompyutery/" id="navbarDropdowncomp">Компьютеры</a>
				      	<div class="dropdown-menu third-menu" aria-labelledby="navbarDropdowncomp">
				          <div class="dropdown-item drop-container-head">
							  Игровые ПК
							  <div class="dropdown-container">
								  <div class="dropdown-container-menu">
									  <ul class="dropdown-col">
				      					  <li class="dropdown-col-link pc" img-link="/wp-content/uploads/line-1-min-2.webp"><a class="header-link-drop" href="/kompyutery/line/">Line</a></li>		
										  <li class="dropdown-col-link pc" img-link="/wp-content/uploads/product-card-1.webp"><a class="header-link-drop" href="/kompyutery/t-machine/">T Machine</a></li>
										  <li class="dropdown-col-link pc" img-link="/wp-content/uploads/atom-new-1.webp"><a class="header-link-drop" href="/kompyutery/atom-computers/">ATOM</a></li>
										  <li class="dropdown-col-link pc" img-link="/wp-content/uploads/rogmachine-computer-1.webp"><a class="header-link-drop" href="/kompyutery/rmachine/">R Machine</a></li>
										  <li class="dropdown-col-link pc" img-link="/wp-content/uploads/quartz-new-1-1.webp"><a class="header-link-drop" href="/kompyutery/quartz/">Quartz</a></li>
										  <li class="dropdown-col-link pc" img-link="/wp-content/uploads/mesh-1-1.webp"><a class="header-link-drop" href="/kompyutery/mesh/">Mesh</a></li>
										  <li class="dropdown-col-link"><a class="header-link-drop link" href="/kompyutery/">Смотреть все</a></li>
									  </ul>
								  </div>
                                  <? if(exKod::Seo()->isNotGooglePageSpeed()):?>
                                      <div class="dropdown-container-menu-image">
                                          <img src="/wp-content/uploads/line-1-min-2.webp" class="dropdown-container-menu-image__image pc">
                                      </div>
                                  <?endif;?>
							  </div>
							</div>							
				          <div class="dropdown-item drop-container-head">
							  ПК как у блогера 
							  <div class="dropdown-container">
								  <div class="dropdown-container-menu">
									  <ul class="dropdown-col">
				      					  <li class="dropdown-col-link feat" img-link="/wp-content/uploads/dosia-category.webp"><a class="header-link-drop" href="/kompyutery/collaborations/dosia/">DOSIA</a></li>		
										  <li class="dropdown-col-link feat" img-link="/wp-content/uploads/zerg-category.png"><a class="header-link-drop" href="/kompyutery/collaborations/zergtv/">ZERGTV</a></li>
										  <li class="dropdown-col-link feat" img-link="/wp-content/uploads/grpzdc-category.png"><a class="header-link-drop" href="/kompyutery/collaborations/grpzdc/">GRPZDC</a></li>
									  </ul>
								  </div>
                                  <? if(exKod::Seo()->isNotGooglePageSpeed()):?>
                                      <div class="dropdown-container-menu-image">
                                          <img src="/wp-content/uploads/dosia-category.png" class="dropdown-container-menu-image__image feat">
                                      </div>
                                  <?endif;?>
							  </div>
							</div>	
							
							
				          <div class="dropdown-item drop-container-head">
							<a class="pba-header-link" href="/kompyutery/powered-by-asus/" style="padding-left: 0 !important;">
							  Powered by ASUS
							</a>
						  </div>																				
				        </div>
					  </li>	
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="/katalog/aksesuary/" id="navbarDropdowncompmobile">Периферия</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/katalog/myshki/">Мышки</a>
				          <a class="dropdown-item" href="/katalog/klaviatury/">Клавиатуры</a>	
				          <a class="dropdown-item" href="/katalog/audio/">Аудио</a>	
							<a class="dropdown-item" href="/katalog/oborudovanie-dlya-strima/">Для стрима</a>
							<a class="dropdown-item" href="/katalog/gejmpady/">Геймпады</a>
							<a class="dropdown-item" href="/katalog/kovriki/">Коврики</a>
							<a class="dropdown-item" href="/katalog/oborudovanie-dlya-strima/veb-kamery/">Веб-камеры</a>
				        </div>
					</li>						
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="/igrovye-kresla/" id="navbarDropdowncompmobile">Игровые кресла</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/igrovye-kresla/arozzi/">Arozzi</a>
				          <a class="dropdown-item" href="/igrovye-kresla/asus/">ASUS</a>	
				          <a class="dropdown-item" href="/igrovye-kresla/dxracer/">DXRacer</a>	
						  <a class="dropdown-item" href="/igrovye-kresla/razer/">Razer</a>
                          <a class="dropdown-item" href="/igrovye-kresla/cougar/">Cougar</a>
						  <!--<a class="dropdown-item" href="/o-kreslah/">О креслах</a>-->
				        </div>
					</li>						
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdowncomp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Компания</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/contacts/">Контакты</a>
				          <a class="dropdown-item" href="/uslugi/dostavka/">Доставка</a>	
				          <a class="dropdown-item" href="/uslugi/servis/">Сервис</a>		     
				          <a class="dropdown-item" href="/proekty/">Проекты</a>
						  <a class="dropdown-item" href="/blog/">Блог</a>
						  <a class="dropdown-item" href="/faq/">FAQ</a>
				        </div>
					</li>
				    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdowncomp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/apgreyd-service/">Апгрейд Сервис</a>
				          <a class="dropdown-item" href="/servisnoe-obsluzhivanie/">Сервисное обслуживание</a>	
				        </div>
					</li>							
				    </ul>
				  </div>
				</nav>

				<div class="header-icons">
					<div class="header-icons-tel">
						<div class="header-tel">
							<a href="#callback" class="header-tel-link" uk-toggle>8 (800) 350-83-39</a>
						</div>
						<div class="header-icons-bll">
							<img src="/wp-content/themes/boiling_machine/images/mobile-telephone.svg" style="margin-right: 11px;" class="mobile-telephone" alt="Позвонить в Boiling Machine">



                            <span class="pc-search-button">
                                <img src="/wp-content/themes/boiling_machine/assets/img/icon/bm-search-new-white.svg" class="pc-search-button-hover" style="margin-right: 20px; width: 21px; display: none" alt="Поиск">
                                <img src="/wp-content/themes/boiling_machine/assets/img/icon/bm-search-new.svg" class="pc-search-button-default" style="margin-right: 20px; width: 21px;" alt="Поиск">
                            </span>

						</div>
					</div>
					<div class="header-icons-search-form" hidden>
						<img src="/wp-content/uploads/chairs-filter-hover-close.svg" class="close-search-form">
						<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ) ?>">	
							<button type="submit" value="Поиск" class="btn search-button"><img src="/wp-content/uploads/bm-search-new.svg" alt="Поиск"></button>
							<input type="search" id="woocommerce-product-search-field-0" required class="header-form-search" placeholder="Поиск" value="" name="s" style="width: 90%;">				
							<input type="hidden" name="post_type" value="product">
						</form>						
					</div>

                    <div class="header-icons-bl">
                        <div class="s-header__basket-wr woocommerce" style="position: relative;">
                            <a href="/compare/" class="header-btn">
                                <svg width="20" height="23" viewBox="0 0 20 23" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C11.4873 0 12.6364 1.18591 12.6364 2.58013V20.4199C12.6364 21.8141 11.4873 23 10 23C8.51267 23 7.36364 21.8141 7.36364 20.4199V2.58013C7.36364 1.18591 8.51267 0 10 0ZM10.8182 2.58013C10.8182 2.13228 10.4519 1.76923 10 1.76923C9.54813 1.76923 9.18182 2.13228 9.18182 2.58013V20.4199C9.18182 20.8677 9.54813 21.2308 10 21.2308C10.4519 21.2308 10.8182 20.8677 10.8182 20.4199V2.58013ZM17.3636 6.6899C18.851 6.6899 20 7.87581 20 9.27003V20.4199C20 21.8141 18.851 23 17.3636 23C15.8763 23 14.7273 21.8141 14.7273 20.4199V9.27003C14.7273 7.87581 15.8763 6.6899 17.3636 6.6899ZM18.1818 9.27003C18.1818 8.82219 17.8155 8.45913 17.3636 8.45913C16.9118 8.45913 16.5455 8.82219 16.5455 9.27003V20.4199C16.5455 20.8677 16.9118 21.2308 17.3636 21.2308C17.8155 21.2308 18.1818 20.8677 18.1818 20.4199V9.27003ZM2.63636 11.1498C4.12369 11.1498 5.27273 12.3357 5.27273 13.73V20.4199C5.27273 21.8141 4.1237 23 2.63636 23C1.14903 23 0 21.8141 0 20.4199V13.73C0 12.3357 1.14903 11.1498 2.63636 11.1498ZM3.45455 13.73C3.45455 13.2821 3.08823 12.9191 2.63636 12.9191C2.18449 12.9191 1.81818 13.2821 1.81818 13.73V20.4199C1.81818 20.8677 2.18449 21.2308 2.63636 21.2308C3.08823 21.2308 3.45455 20.8677 3.45455 20.4199V13.73Z"/>
                                </svg>
                                <span class="side-cart__number js-side-comparison-number <?=(count(exKod::Common()->getCookieArray('catalog_comparison')) >= 1)? ' active': false ?>"><?=count(exKod::Common()->getCookieArray('catalog_comparison'))?></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-icons-bl">
                        <div class="s-header__basket-wr woocommerce" style="position: relative;">
                            <a href="/favorite/" class="header-btn">
                                <svg width="25" height="23" viewBox="0 0 25 23" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4919 2.06233C9.84361 -0.372469 5.88659 -0.890762 2.82279 1.81286C-0.456492 4.70664 -0.924142 9.55852 1.65899 12.9915C2.56336 14.1934 4.25199 15.9454 5.95196 17.6197C7.66883 19.3107 9.45374 20.977 10.5901 22.0243L10.6138 22.0461C10.8015 22.2191 10.9847 22.388 11.1528 22.5196C11.3398 22.6661 11.5667 22.8147 11.8558 22.9043C12.2676 23.0319 12.717 23.0319 13.1288 22.9043C13.4179 22.8147 13.6447 22.6661 13.8318 22.5196C14 22.3879 14.1831 22.2191 14.3708 22.046L14.3945 22.0243C15.5309 20.977 17.3158 19.3107 19.0326 17.6197C20.7326 15.9454 22.4212 14.1934 23.3256 12.9915C25.8999 9.57028 25.5039 4.68158 22.151 1.8035C19.0517 -0.857027 15.1374 -0.373494 12.4919 2.06233ZM11.6912 4.24333C9.70315 1.84292 6.5481 1.30954 4.19852 3.3829C1.73701 5.55504 1.39644 9.17311 3.32158 11.7316C4.11981 12.7925 5.7009 14.4431 7.41125 16.1276C9.1047 17.7955 10.8707 19.4443 11.9993 20.4844C12.2198 20.6876 12.3405 20.7978 12.4344 20.8714C12.4581 20.8899 12.4749 20.9018 12.4857 20.9091C12.49 20.9094 12.4946 20.9094 12.4989 20.9091C12.5097 20.9018 12.5265 20.8899 12.5501 20.8714C12.6441 20.7978 12.7648 20.6876 12.9853 20.4844C14.1139 19.4443 15.8799 17.7955 17.5733 16.1276C19.2837 14.4431 20.8648 12.7925 21.663 11.7316C23.597 9.16135 23.2835 5.52681 20.7968 3.39226C18.3873 1.32396 15.2734 1.85259 13.2934 4.24333C13.0955 4.48228 12.8019 4.6205 12.4923 4.6205C12.1827 4.6205 11.8891 4.48228 11.6912 4.24333ZM12.4923 20.9147C12.4866 20.9172 12.4835 20.9189 12.4835 20.9189C12.4835 20.9189 12.486 20.9175 12.4912 20.9142"/>
                                </svg>
                                <span class="side-cart__number js-side-favorite-number <?=(count(exKod::Common()->getCookieArray('catalog_favorite')) >= 1)? ' active': false ?>"><?=count(exKod::Common()->getCookieArray('catalog_favorite'))?></span>
                            </a>
                        </div>
                    </div>
					<div class="header-icons-bl">											
						<div class="s-header__basket-wr woocommerce" style="position: relative;">
    					<?php global $woocommerce; ?>
						<a href="<?php echo wc_get_cart_url(); ?>" class="header-mini-cart js-side-cart-open">
                            <span class="side-cart__number js-side-cart-number active"><?php echo (int)WC()->cart->cart_contents_count; ?></span>
						</a>
						</div>	
					</div>

                    <a href="" class="mobile-burger"><img src="/wp-content/themes/boiling_machine/images/Burger.svg" style="width: 25px;" alt="Мобильное меню"></a>
				</div>
				
			</div>	

		</div>

<div class="header-mobile-content" v-if="window.width < 1350">
	<div class="bm-adaptive bm-margin bm">		
			<div class="header-blocks">
				<nav class="navbar navbar-expand-lg header-nav">
				  <a href="/"><img src="/wp-content/uploads/logo-boiling-machine.svg" style="max-width: 95px;" alt="логотип"></a>	  
				  <div class="collapse navbar-collapse" id="navbarSupportedContentMobile">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/kompyutery/">Компьютеры</a>
				      </li>							
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/katalog/aksesuary/">Периферия</a>
				      </li>	
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="/igrovye-kresla/" id="navbarDropdowncompmobile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Игровые кресла</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/igrovye-kresla/arozzi/">Arozzi</a>
				          <a class="dropdown-item" href="/igrovye-kresla/asus/">ASUS</a>	
				          <a class="dropdown-item" href="/igrovye-kresla/dxracer/">DXRacer</a>	
						  <a class="dropdown-item" href="/igrovye-kresla/razer/">Razer</a>
                          <a class="dropdown-item" href="/igrovye-kresla/cougar/">Cougar</a>
						  <!--<a class="dropdown-item" href="/o-kreslah/">О креслах</a>-->
				        </div>
					</li>						
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdowncompmobile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Компания</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/contacts/">Контакты</a>
				          <a class="dropdown-item" href="/uslugi/dostavka/">Доставка</a>		
				          <a class="dropdown-item" href="/uslugi/servis/">Сервис</a>		     
				          <a class="dropdown-item" href="/proekty/">Проекты</a>
						  <a class="dropdown-item" href="/blog/">Блог</a>
						  <a class="dropdown-item" href="/faq/">FAQ</a>
				        </div>
					</li>
				    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdowncomp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/apgreyd-service/">Апгрейд Сервис</a>
				          <a class="dropdown-item" href="/servisnoe-obsluzhivanie/">Сервисное обслуживание</a>	
				        </div>
					</li>												
				    </ul>
				  </div>
				</nav>

				<div class="header-icons-mobile">					
					<a href="tel:+78003508339" class="header-icons-mobile-icon"><img src="/wp-content/themes/boiling_machine/images/mobile-telephone.svg" style="margin-right: 30px; width: 16px;" class="mobile-telephone" alt="Телефон"></a>					
					
					
					<div class="s-header__basket-wr woocommerce header-icons-mobile-icon" style="position: relative;">
					<?php global $woocommerce; ?>
						<a href="<?php echo wc_get_cart_url(); ?>" class="header-mini-cart js-side-cart-open">

							<span class="side-cart__number js-side-cart-number"><?php echo WC()->cart->cart_contents_count; ?></span>
						</a>
					</div>
					
					
					<p class="mobile-burger header-icons-mobile-icon" style="margin-bottom: 0;"><img src="/wp-content/themes/boiling_machine/images/Burger.svg" class="mobile-burger-link" alt="Мобильное меню"></p>
				</div>
				
			</div>	

		</div>
</div>
	
</header>
	
<script>
	  const { createApp } = Vue

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
  }).mount('#bm-main-header')
	
</script>	
	

