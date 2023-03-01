<div class="bm-adaptive bm-margin bm">		
			<div class="header-blocks">
				<nav class="navbar navbar-expand-lg header-nav">
				  <a href="/"><img src="/wp-content/themes/boiling_machine/images/logo.svg" style="max-width: 70px;margin-right: 15px;"></a>			  
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav">
				      <li class="nav-item dropdown">
				        <a class="nav-link header-link" href="/kompyutery/">
				          Компьютеры
				        </a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/katalog/videokarty/">Видеокарты</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/katalog/aksesuary/">Периферия</a>
				      </li>		
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdownuslugi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdownuslugi">
				          <a class="dropdown-item" href="/usloviya-pokupki/">Доставка и оплата</a>
				          <a class="dropdown-item" href="/oplata-chastyami/">Кредит и рассрочка</a>			     
				          <a class="dropdown-item" href="/proekty/">Трейд-Ин</a>
						  <a class="dropdown-item" href="/blog/">Сервис</a>
						  <a class="dropdown-item" href="/blog/">Поддержка</a>
				        </div>
					  </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle header-link" href="#" id="navbarDropdowncomp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Компания</a>
				      	<div class="dropdown-menu" aria-labelledby="navbarDropdowncomp">
				          <a class="dropdown-item" href="/contacts/">Контакты</a>
				          <a class="dropdown-item" href="/o-kompanii/">О нас</a>			     
				          <a class="dropdown-item" href="/proekty/">Проекты</a>
						  <a class="dropdown-item" href="/blog/">Блог</a>
				        </div>
					</li>
				      <li class="nav-item">
				        <a class="nav-link header-link" href="/katalog/aksesuary/">Апгрейд Центр</a>
				      </li>									      				      	      
				    </ul>
				  </div>
				</nav>
				<div class="form-search">					
				    <form role="search" method="get" class="form-inline" action="//localhost:3000/">						
						<input type="search" id="woocommerce-product-search-field-0" class="header-form-search" placeholder="Поиск" value="" name="s" style="width: 90%;">
						<button type="submit" value="Поиск" class="btn btn-outline-success search-button"><img src="/wp-content/uploads/search-poisk.svg"></button>
						<input type="hidden" name="post_type" value="product">
					</form>
				</div>
				<div class="header-icons">
					<div class="header-tel">
						<a href="tel:+78003508339" class="header-tel-link">+7 (800) 350-83-39</a>
					</div>	
					<div class="header-icons-bl">
						<img src="/wp-content/themes/boiling_machine/images/mobile-telephone.svg" style="margin-right: 11px;" class="mobile-telephone">
						<img src="/wp-content/themes/boiling_machine/images/account.svg" style="margin-right: 11px;">
						
						<div class="s-header__basket-wr woocommerce" style="position: relative;">
    					<?php global $woocommerce; ?>
    							<a href="/cart/">
    								<img src="/wp-content/themes/boiling_machine/images/cart.svg">
        							<span class="basket-btn__counter" style=""><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    							</a>
						</div>
					</div>				
					<a href="" class="mobile-burger"><img src="/wp-content/themes/boiling_machine/images/Burger.svg" style="width: 25px;"></a>
				</div>
				
			</div>	

		</div>