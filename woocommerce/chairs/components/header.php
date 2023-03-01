<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<?php wp_head(); ?>
	


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
<style>
	.side-cart__number{
		border-color: #fff;
	}
	.dropdown-container{
		display: none;
		position: absolute;
		left: 100%;
		top: 0;
		background: #fff;
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
		background: #f1f1f1;
		transition: .3s;
	}
	.header-link-drop{		
		color: #4d4d4d;
		font-size: 17px;
		font-weight: 500;
	}
	.header-link-drop:hover{		
		text-decoration: none;
		transition: .3s;
		color: #4d4d4d;
	}
	.third-menu{
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
	
<header class="boiling-machine-header">

<div class="bm-adaptive bm-margin bm header-pc" style="display: none;">		
			<div class="header-blocks">
				<nav class="navbar navbar-expand-lg header-nav">
				  <a href="/"><img src="/wp-content/uploads/boiling-machine-chair1.svg" style="max-width: 70px;margin-right: 15px;" alt="Логотип Boiling Machine"></a>			  
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
								  <div class="dropdown-container-menu-image">
									  <img src="/wp-content/uploads/line-1-min-2.webp" class="dropdown-container-menu-image__image pc">
								  </div>
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
								  <div class="dropdown-container-menu-image">
									  <img src="/wp-content/uploads/dosia-category.png" class="dropdown-container-menu-image__image feat">
								  </div>
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
				        <a class="nav-link dropdown-toggle header-link" href="/igrovye-kresla/" id="navbarDropdowncompmobile">Кресла</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/igrovye-kresla/arozzi/">Arozzi</a>
				          <a class="dropdown-item" href="/igrovye-kresla/asus/">ASUS</a>	
				          <a class="dropdown-item" href="/igrovye-kresla/dxracer/">DXRacer</a>	
						  <a class="dropdown-item" href="/igrovye-kresla/razer/">Razer</a>
						   <a class="dropdown-item" href="/o-kreslah/">О креслах</a>
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
							<img src="/wp-content/uploads/bm-search-new-1.svg" class="pc-search-button" style="margin-right: 20px; width: 21px;" alt="Поиск">
						</div>
					</div>
					<div class="header-icons-search-form" hidden>
						<img src="/wp-content/uploads/chairs-filter-hover-close.svg" class="close-search-form">
						<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ) ?>">	
							<button type="submit" value="Поиск" class="btn search-button"><img src="/wp-content/uploads/bm-search-new-1.svg" alt="Поиск"></button>
							<input type="search" id="woocommerce-product-search-field-0" required class="header-form-search" placeholder="Поиск" value="" name="s" style="width: 90%;">				
							<input type="hidden" name="post_type" value="product">
						</form>						
					</div>
					

					<div class="header-icons-bl">											
						<div class="s-header__basket-wr woocommerce" style="position: relative;">
    					<?php global $woocommerce; ?>
						<a href="<?php echo wc_get_cart_url(); ?>" class="header-mini-cart js-side-cart-open">
							<span class="side-cart__number js-side-cart-number"><?php echo WC()->cart->cart_contents_count; ?></span>
						</a>
						</div>	
					</div>				
					<a href="" class="mobile-burger"><img src="/wp-content/themes/boiling_machine/images/Burger.svg" style="width: 25px;" alt="Мобильное меню"></a>
				</div>
				
			</div>	

		</div>
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
	
	.side-cart__icon::before{
		content: url(/wp-content/uploads/bm-chair-mobile-cart.svg) !important;
	}
	
	
	
	
	
	.search-button:hover{outline: none; border: unset;}
	.search-button{background: unset; border: unset; height: 100%;}
	.pc-search-button, .close-search-form{cursor: pointer;}
	.form-inline .header-form-search::placeholder{color: #000 !important;}
	.form-inline .header-form-search{width: 100%; color: #000 !important;}
	.form-inline{padding: 10px !important; width: 100%; font-size: 16px !important; border: 1px solid #d1d1d1 !important;}
	.search-button img{max-height: 22px;}
	.header-icons-bl{flex-basis: 10%;}
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
<div class="header-mobile-content" style="display: none;">
	<div class="bm-adaptive bm-margin bm">		
			<div class="header-blocks">
				<nav class="navbar navbar-expand-lg header-nav">
				  <a href="/"><img src="/wp-content/uploads/boiling-machine-chair1.svg" style="max-width: 70px;" alt="логотип"></a>	  
				  <div class="collapse navbar-collapse" id="navbarSupportedContentMobile">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/kompyutery/">Компьютеры</a>
				      </li>						
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/katalog/aksesuary/">Периферия</a>
				      </li>		
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="/igrovye-kresla/" id="navbarDropdowncompmobile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Кресла</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/igrovye-kresla/arozzi/">Arozzi</a>
				          <a class="dropdown-item" href="/igrovye-kresla/asus/">ASUS</a>	
				          <a class="dropdown-item" href="/igrovye-kresla/dxracer/">DXRacer</a>		
						  <a class="dropdown-item" href="/igrovye-kresla/razer/">Razer</a>
						   <a class="dropdown-item" href="/o-kreslah/">О креслах</a>
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
					<a href="tel:+78003508339" class="header-icons-mobile-icon"><img src="/wp-content/uploads/bm-chair-mobile-header.svg" style="margin-right: 30px; width: 16px;" class="mobile-telephone" alt="Телефон"></a>					
					
					<div class="s-header__basket-wr woocommerce header-icons-mobile-icon" style="position: relative;">
					<?php global $woocommerce; ?>
						<a href="<?php echo wc_get_cart_url(); ?>" class="header-mini-cart js-side-cart-open">
							<span class="side-cart__number js-side-cart-number"><?php echo WC()->cart->cart_contents_count; ?></span>
						</a>
					</div>					
					<p class="mobile-burger header-icons-mobile-icon" style="margin-bottom: 0;"><img src="/wp-content/uploads/bm-chair-mobile-burger.svg" class="mobile-burger-link" alt="Мобильное меню"></p>
				</div>
				
			</div>	

		</div>
</div>
	
</header>

