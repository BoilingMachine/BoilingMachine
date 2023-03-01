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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<?php wp_head(); ?>
	


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

<header class="boiling-machine-header">

<div class="bm-adaptive bm-margin bm header-pc" style="display: none;">		
			<div class="header-blocks">
				<nav class="navbar navbar-expand-lg header-nav">
				  <a href="/"><img src="/wp-content/themes/boiling_machine/images/logo.svg" style="max-width: 70px;margin-right: 15px;" alt="Логотип Boiling Machine"></a>			  
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/kompyutery/">
				          Компьютеры
				        </a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/katalog/aksesuary/">Периферия</a>
				      </li>						      
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdowncomp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Компания</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/contacts/">Контакты</a>
				          <a class="dropdown-item" href="/o-kompanii/">О нас</a>	
				          <a class="dropdown-item" href="/uslugi/servis/">Сервис</a>		     
				          <a class="dropdown-item" href="/proekty/">Проекты</a>
						  <a class="dropdown-item" href="/blog/">Блог</a>
						  <a class="dropdown-item" href="/faq/">FAQ</a>
				        </div>
					</li>
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/kompyutery/powered-by-asus/">
				          Powered by ASUS
				        </a>
				      </li>			
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/apgreyd-service/">
				          Апгрейд Сервис
				        </a>
				      </li>							
				    </ul>
				  </div>
				</nav>

				<div class="header-icons">
					<div class="header-tel">
						<a href="#callback" class="header-tel-link" uk-toggle>8 (800) 350-83-39</a>
					</div>	
					<div class="header-icons-bl">
						<img src="/wp-content/themes/boiling_machine/images/mobile-telephone.svg" style="margin-right: 11px;" class="mobile-telephone" alt="Позвонить в Boiling Machine">
						<img src="/wp-content/uploads/bm-search-new.svg" class="header-search-button" style="margin-right: 20px; width: 21px;" alt="Поиск">
						
						
						<div class="s-header__basket-wr woocommerce" style="position: relative;">
    					<?php global $woocommerce; ?>
    							<a href="/checkout/">
    								<img src="/wp-content/uploads/bm-cart-new.svg" style="width: 21px;" alt="Корзина">
									<span class="basket-btn__counter" ><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>																	
    							</a>
						</div>
					</div>				
					<a href="" class="mobile-burger"><img src="/wp-content/themes/boiling_machine/images/Burger.svg" style="width: 25px;" alt="Мобильное меню"></a>
				</div>
				
			</div>	

		</div>

<div class="header-mobile-content" style="display: none;">
	<div class="bm-adaptive bm-margin bm">		
			<div class="header-blocks">
				<nav class="navbar navbar-expand-lg header-nav">
				  <a href="/"><img src="/wp-content/themes/boiling_machine/images/logo.svg" style="max-width: 70px;" alt="логотип"></a>	  
				  <div class="collapse navbar-collapse" id="navbarSupportedContentMobile">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/kompyutery/">Компьютеры</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/katalog/aksesuary/">Периферия</a>
				      </li>		
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdowncompmobile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Компания</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/contacts/">Контакты</a>
				          <a class="dropdown-item" href="/o-kompanii/">О нас</a>	
				          <a class="dropdown-item" href="/uslugi/servis/">Сервис</a>		     
				          <a class="dropdown-item" href="/proekty/">Проекты</a>
						  <a class="dropdown-item" href="/blog/">Блог</a>
						  <a class="dropdown-item" href="/faq/">FAQ</a>
				        </div>
					</li>
				      <li class="nav-item dropdown">
				        <a class="nav-link header-link" href="/kompyutery/powered-by-asus/">
				          Powered by ASUS
				        </a>
				      </li>	
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/apgreyd-service/">
				          Апгрейд Сервис
				        </a>
				      </li>						
				    </ul>
				  </div>
				</nav>

				<div class="header-icons-mobile">					
					<a href="tel:+78003508339" class="header-icons-mobile-icon"><img src="/wp-content/themes/boiling_machine/images/mobile-telephone.svg" style="margin-right: 30px; width: 16px;" class="mobile-telephone" alt="Телефон"></a>					
					
					<div class="s-header__basket-wr woocommerce header-icons-mobile-icon" style="position: relative;">
					<?php global $woocommerce; ?>
							<a href="/checkout/">
								<img src="/wp-content/uploads/bm-cart-new.svg" style="margin-right: 30px; width: 24px;" alt="Корзина">
								<span class="basket-btn__counter" ><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
							</a>
					</div>					
					<p class="mobile-burger header-icons-mobile-icon" style="margin-bottom: 0;"><img src="/wp-content/themes/boiling_machine/images/Burger.svg" class="mobile-burger-link" alt="Мобильное меню"></p>
				</div>
				
			</div>	

		</div>
</div>
	
</header>

