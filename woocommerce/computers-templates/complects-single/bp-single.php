<?php get_header(); ?>
<?php global $product; ?>
<link rel="stylesheet" href="/wp-content/themes/boiling_machine/woocommerce/computers-templates/complects-single/css/main.css">
<link rel="stylesheet" href="/wp-content/themes/boiling_machine/woocommerce/computers-templates/complects-single/css/videocard.css">
<section class='breadcrumbs'>
    <div class="bm-adaptive bm-margin bm">
        <div class="bm-single-computer-breadcumbs">
            <?php do_action( 'woocommerce_before_main_content' ); ?>
        </div>        
    </div>
</section>

<section class='first-screen'>
    <div class="bm-adaptive bm-margin bm">
        <div class="bm-computer-content">
            <div class="bm-computer-image">
                <div class="bm-single-chairs-picture">
                    <div class="bm-product-thumbnails">
                        <ol>
                            <li class="list-inline-item active"> 
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> 
                                    <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" class="img-fluid" > 
                                </a> 
                            </li>
                            <?php 
                                $attachment_ids = $product->get_gallery_image_ids();
                                foreach( $attachment_ids as $key=>$attachment_id ) {
                                    $image_link = wp_get_attachment_url( $attachment_id ); ?>
                                    <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="<?php echo $key+1; ?>" data-target="#custCarousel"> <img src="<?php echo $image_link; ?>" class="img-fluid" > </a> </li>
                            <?php }	?>	
                        </ol>						
                    </div>
                    <div id="custCarousel" class="carousel-block carousel slide"   >
                        <div class="carousel-inner" uk-grid="" uk-lightbox="">
                            <div class="carousel-item active"><a href="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>"><img alt="<?php the_title(); ?>" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>"></a></div>
                            <?php 
                                foreach( $attachment_ids as $key=>$attachment_id ) {
                                    $image_link = wp_get_attachment_url( $attachment_id ); ?>
                            <div class="carousel-item"><a href="<?php echo $image_link; ?>"><img alt="<?php the_title(); ?> - изображение № <?php echo $key + 1; ?>" src="<?php echo $image_link; ?>"></a></div>
                            <?php }	?>	
                        </div> 
                    </div>  			
                </div>	
            </div>
            <div class="bm-computer-description">
                <h1 class="bm-computer__title"><? the_title(); ?></h1>
                <p class="stock-container__text">
                <?php 
                        $stock = $product->get_stock_status(); 
                        switch($stock){
                            case 'instock':
                                echo 'В наличии';
                            ?>
                            <style>
                                .stock-container__text{color: #63A331; }																
                            </style>
                            <?php	
                            break;
                            case 'outofstock':
                                echo 'Нет в наличии';
                            ?>
                            <style>
                                .stock-container__text{color: #EF2525;}																						
                            </style>								
                            <?php
                            break;
                            case 'onbackorder':
                                echo 'Предзаказ';
                            ?>
                            <style>
                                .stock-container__text{color: #B8B8B8;}																					
                            </style>								
                            <?php											
                            break;											
                        }
                ?>
                </p>
                <div class="bm-computer-des">
                    <? the_content(); ?>
                </div>
                <p class="bm-computer-price"><?php echo wc_price($product->get_price()); ?></p>														
                <form 
                    id = "computerForm"
                    class="cart" 
                    action="<? echo get_permalink( $product->get_id() ) ?>" 
                    method="post" 
                    enctype="multipart/form-data">
                    <input type="hidden" id="_price" name="_price" value="<? echo $product->get_price(); ?>" />
                    <button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button bm-computer-button">Купить</button>
                </form>	
                <div class="more-settings">
                    <div class="product-sep">
                        <div class="product-sep-container">
                            <div class="product-sep-container-title">
                                <div class="bm-complect-info-block-text">
                                    <p>Апгрейд ПК</p>
                                    <button class="single-filter-help-icon" type="button">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                    </style>
                                            <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                    C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                            <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                    "/>
                                            <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                    c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                    C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                    c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                            />
                                    </svg>
                                    </button>
                                    <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                        По Москве в пределах МКАД — бесплатно<br><br>
                                        По МО за пределами МКАД — 30 руб. за км<br><br>
                                        По России и СНГ — по тарифам транспортной компании
                                        <a href="/benefits/besplatnaya-dostavka/" class="filter-more" target="_blank">Подробнее</a>
                                    </div>
                                </div>
                                <p class="product-more__price">15 000 р</p>
                            </div>
                            <div class="product-sep-container-body">
                                <div class="product-sep-container-body__text">
                                    <p class="product-sep-container-body__text_t">
                                        Установка видеокарты <? the_title(); ?>
                                    </p>
                                </div>
                                <div class="product-sep-container-body_form">
                                    <form 
                                        id = "upgradepc"
                                        class="cart" 
                                        action="<? echo get_permalink( $product->get_id() ) ?>" 
                                        method="post" 
                                        enctype="multipart/form-data">
                                        <input type="hidden" id="_price" name="_price" value="40000" />
                                        <button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button upgradePc"></button>
                                    </form>	                                        
                                </div>
                            </div>
                        </div>
                        <div class="product-sep-container">
                            <div class="product-sep-container-title">
                                <div class="bm-complect-info-block-text">
                                    <p>Замена термоинтерфейсов</p>
                                    <button class="single-filter-help-icon" type="button">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                    </style>
                                            <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                    C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                            <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                    "/>
                                            <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                    c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                    C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                    c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                            />
                                    </svg>
                                    </button>
                                    <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                        По Москве в пределах МКАД — бесплатно<br><br>
                                        По МО за пределами МКАД — 30 руб. за км<br><br>
                                        По России и СНГ — по тарифам транспортной компании
                                        <a href="/benefits/besplatnaya-dostavka/" class="filter-more" target="_blank">Подробнее</a>
                                    </div>
                                </div>
                                <p class="product-more__price">15 000 р</p>
                            </div>
                            <div class="product-sep-container-body">
                                <div class="product-sep-container-body__text">
                                    <p class="product-sep-container-body__text_t">
                                        Установка высоко теплопроводящих элементов для эффективного охлаждения видеокарты
                                    </p>
                                </div>
                                <div class="product-sep-container-body_form">
                                    <form 
                                        id = "upgradepc"
                                        class="cart" 
                                        action="<? echo get_permalink( $product->get_id() ) ?>" 
                                        method="post" 
                                        enctype="multipart/form-data">
                                        <input type="hidden" id="_price" name="_price" value="40000" />
                                        <button type="submit" name="add-to-cart" value="<? echo $product->get_id(); ?>" class="single_add_to_cart_button button alt wp-element-button upgradePc"></button>
                                    </form>	                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>																
            </div>
        </div>
    </div>
</section>

<div class="single-complect-menu" id='navigation'>
	<div class="bm-adaptive bm-margin bm">
		<nav class="single-chair-bar" uk-navbar="mode: click">
			<div class="uk-navbar-left">
				<ul class="single-chair-nav uk-navbar-nav">
                    <li class="single-chair-li uk-parent"><a href="#important" class="uncor">Важное</a></li>
                    <li class="single-chair-li uk-parent"><a href="#charack" class="uncor">Характеристики</a></li>
					<li class="single-chair-li uk-parent"><a href="#videoobzor" class="uncor">Видеообзор</a></li>
					<li class="single-chair-li uk-parent" v-if="window.width >= 1400"><a href="#obzor_text" class="uncor">Обзор</a></li>
                    <li class="single-chair-li uk-parent"><a href="#osobennosti" class="uncor">Особенности</a></li>
					<li class="single-chair-li uk-parent" v-if="window.width >= 1400"><a href="#razmer" class="uncor">Размеры</a></li>
					<li class="single-chair-li uk-parent" v-if="window.width >= 1400"><a href="#reviews" class="uncor">Отзывы</a></li>
					<li class="single-chair-li uk-parent"><a href="#rukovodstvo" class="uncor">Руководство по сборке</a></li>																		
					<!--<li class="single-chair-li uk-parent"><a href="#dop-uslugi" class="uncor">Доп услуги</a></li>-->
                    <li class='single-chair-li'>
                        <a href="#"><img src='/wp-content/uploads/menu-button.svg'></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="single-chair-li dropdown" v-if="window.width <= 1400"><a href="#reviews" class="uncor">Отзывы</a></li>
                                <li class="single-chair-li dropdown" v-if="window.width <= 1400"><a href="#razmer" class="uncor">Размеры</a></li>
                                <li class="single-chair-li dropdown" v-if="window.width <= 1400" ><a href="#obzor_text" class="uncor">Обзор</a></li>
                                <li class="single-chair-li dropdown"><a href="#descr" class="uncor">Описание</a></li>
                            </ul>
                        </div>
                    </li>
				</ul>
			</div>
		</nav>				
	</div>		
</div>
<div class="single-chair-menu-mobile">
	<div class="bm-adaptive bm-margin bm">
		<nav class="uk-container uk-navbar product-mobile-menu-nav">
			
				<ul class="uk-navbar-nav">
					<li class="uk-active product-mobile-menu-nav-title">
						Меню
					</li> 
				</ul>
			
			<a href="#" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
			
		</nav>	
		<div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<ul class="uk-nav">
				    <li><a class="uk-text-large uncor" href="#important">Важное</a></li>
					<li><a class="uk-text-large uncor" href="#descr">Описание</a></li>
					<li><a class="uk-text-large uncor" href="#charack">Характеристики</a></li>
					<li><a class="uk-text-large uncor" href="#osobennosti">Особенности</a></li>
					<li><a class="uk-text-large uncor" href="#rukovodstvo">Руководство по сборке</a></li>
					<li><a class="uk-text-large uncor" href="#reviews">Отзывы</a></li>
					<li><a class="uk-text-large uncor" href="#razmer">Размеры</a></li>
					<li><a class="uk-text-large uncor" href="#obzor_text">Обзор</a></li>
					<!--<li><a class="uk-text-large uncor" href="#dop-uslugi">Доп услуги</a></li>-->
				</ul>
			</div>
		</div>		
	</div>
</div>

<section class="videocard-benefits">
    <div class="bm-adaptive bm-margin bm">
        <div class="complect-benefits-slider">
            <div uk-slider>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                        <div>
                            <div class="asus-benefits">
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-gpu-chip.svg" alt="">
                                    <p class="asus-benefit__title">Передовые графические процессоры</p>
                                    <p class="asus-benefit__subtitle">Архитектура NVIDIA Ады Лавлейс</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/ray-tracing-icon.svg" alt="">
                                    <p class="asus-benefit__title">Реалистичная и захватывающая графика</p>
                                    <p class="asus-benefit__subtitle">Выделенные ядра для трассировки лучей</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-nvidia-gpu-cloud-ngc-catalog.svg" alt="">
                                    <p class="asus-benefit__title">AI-ускоренная производительность</p>
                                    <p class="asus-benefit__subtitle">NVIDIA DLSS 3</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/icon-4-2.png" alt="">
                                    <p class="asus-benefit__title">Максимальная отзывчивость</p>
                                    <p class="asus-benefit__subtitle">Платформа с низкой задержкой NVIDIA Reflex</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/encode-icon.svg" alt="">
                                    <p class="asus-benefit__title">Создана для прямой трансляции</p>
                                    <p class="asus-benefit__subtitle">Кодировщик NVIDIA</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/icon-6-1.svg" alt="">
                                    <p class="asus-benefit__title">Голос и видео с улучшенным ИИ</p>
                                    <p class="asus-benefit__subtitle">Приложение NVIDIA Broadcast</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-3d-manipulation.svg" alt="">
                                    <p class="asus-benefit__title">Ускорьте свое творчество</p>
                                    <p class="asus-benefit__subtitle">NVIDIA Studio</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-download.svg" alt="">
                                    <p class="asus-benefit__title">Производительность и надежность</p>
                                    <p class="asus-benefit__subtitle">Game Ready and Studio Drivers</p>
                                </div>
                            </div>
                    </div>
                        <div>
                            <div class="asus-benefits">
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-gpu-chip.svg" alt="">
                                    <p class="asus-benefit__title">Передовые графические процессоры</p>
                                    <p class="asus-benefit__subtitle">Архитектура NVIDIA Ады Лавлейс</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/ray-tracing-icon.svg" alt="">
                                    <p class="asus-benefit__title">Реалистичная и захватывающая графика</p>
                                    <p class="asus-benefit__subtitle">Выделенные ядра для трассировки лучей</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-nvidia-gpu-cloud-ngc-catalog.svg" alt="">
                                    <p class="asus-benefit__title">AI-ускоренная производительность</p>
                                    <p class="asus-benefit__subtitle">NVIDIA DLSS 3</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/icon-4-2.png" alt="">
                                    <p class="asus-benefit__title">Максимальная отзывчивость</p>
                                    <p class="asus-benefit__subtitle">Платформа с низкой задержкой NVIDIA Reflex</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/encode-icon.svg" alt="">
                                    <p class="asus-benefit__title">Создана для прямой трансляции</p>
                                    <p class="asus-benefit__subtitle">Кодировщик NVIDIA</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/icon-6-1.svg" alt="">
                                    <p class="asus-benefit__title">Голос и видео с улучшенным ИИ</p>
                                    <p class="asus-benefit__subtitle">Приложение NVIDIA Broadcast</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-3d-manipulation.svg" alt="">
                                    <p class="asus-benefit__title">Ускорьте свое творчество</p>
                                    <p class="asus-benefit__subtitle">NVIDIA Studio</p>
                                </div>
                                <div class="asus-benefit">
                                    <img src="/wp-content/uploads/m48-download.svg" alt="">
                                    <p class="asus-benefit__title">Производительность и надежность</p>
                                    <p class="asus-benefit__subtitle">Game Ready and Studio Drivers</p>
                                </div>
                            </div>
                    </div>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>            
        </div>
    </div>
</section>

<section class='why-buy section-mg'>
    <div class="bm-adaptive bm-margin bm">
        <div class="max-1080">
            <div class="videocard-why-buy">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title">Почему стоить купить видеокарту ROG-STRIX-RTX3090-O24G-GAMING</h2>
                </div>
                <div class="videocard-why-buy-spisok">
                    <div class='videocard-why-buy-spisok-header'>
                        <p class='spisok-header__text'>Важное</p>
                    </div>  
                    <div class='videocard-why-buy-spisok-body'>
                        <div class="spisok-body-info">
                            <p class="body-info__title">Стриминговые мультипроцессоры</p>
                            <p class="spisok-info__text">Увеличенная энергоэффективность и двукратное повышение производительности в вычислениях формата FP32 по сравнению с предыдущей микроархитектурой</p>
                        </div>
                        <div class="spisok-body-info">
                            <p class="body-info__title">Стриминговые мультипроцессоры</p>
                            <p class="spisok-info__text">Увеличенная энергоэффективность и двукратное повышение производительности в вычислениях формата FP32 по сравнению с предыдущей микроархитектурой</p>
                        </div>
                    </div>  
                    <div class='videocard-why-buy-spisok-footer'>
                        <div class="spisok-footer-title">
                            <p class="footer-title__text">Больше информации о видеокартах в наших обзорах</p>
                        </div>
                        <div class="spisok-footer-obzors">
                            <div class="obzors-videoobzor">
                                <a href="#" class="videoobzor-link">Видеообзор</a>
                                <p class="obzor-help-text">Время просмотра 7:40</p>
                            </div>
                            <div class="obzors-textobzor">
                                <a href="#" class="textobzor-link">Текстовый обзор</a>
                                <p class="obzor-help-text">Время просмотра 7:40</p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>


<section class='section-mg'>
    <div class="bm-adaptive bm-margin bm">
        <div class="max-1080">
            <div class="settings-product">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title">Характеристики видеокарты <? the_title(); ?></h2>
                </div>
                <div class="settings-container">
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Общие характеристики</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Память</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Дисковые контроллеры</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Слоты расширения</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Аудио / Видео</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Подключение</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Дополнительно</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Модель</p>
                                <p class="element-value">DXRacer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class='section-mg'>
    <div class="bm-adaptive bm-margin bm">
        <div class="max-1080">
            <div class="product-videoobzor">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title">Видеообзор</h2>
                </div>
                <div class="product-videoobzor-container">
                    <div class="videoobzor-height">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/t7_Tat2RSes" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>

<section class='section-mg'>
    <div class="bm-adaptive bm-margin bm">
        <div class="max-1080">
            <div class="product-seo">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title">Обзор видеокарты <? the_title(); ?></h2>
                </div>
                <div class="product-obzor-container">
                    
                </div>
            </div>
        </div>
    </div>    
</section>

<section class='section-mg'>
    <div class="bm-adaptive bm-margin bm">
        <div class="max-1080">
            <div class="product-seo">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title">Здесь какой то СЕО заголовок</h2>
                </div>
                <div class="product-seo-container">
                    <p class="seo__text">
                    DXRacer OH/RN1/NW - геймерское кресло серии Racing черно-белого цвета. Обивка выполнена из винила со вставками из экокожи. Задняя часть спинки закрыта пластиковым кожухом со встроенной светодиодной RGB-подсветкой. С помощью пульта дистанционного управления можно выбрать один из четырех режимов работы, а также сменить цвет (доступны 12 на выбор) и яркость подсветки. Работа подсветки осуществляется от портативного аккумулятора (PowerBank, в комплект поставки не входит), устанавливаемого в специальный отсек. Размеры аккумулятора не должны превышать 160x80x21 мм. Для его зарядки на крышке отсека расположен магнитный разъем, к которому подключается магнитный USB-кабель длиной 2м.
                    </p>
                </div>
            </div>
        </div>
    </div>    
</section>

<?php get_footer(); ?>