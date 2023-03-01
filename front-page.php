<?php get_header(); ?>
<link rel='stylesheet' href='/wp-content/themes/boiling_machine/assets/dist/front-page.css'  />
<div class="carousel-main">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="height: 100%;">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  </ol>
	  <div class="carousel-inner" style="height: 100%;">				  		  
	    <div class="carousel-item active" style="height: 100%;">
	      <div class="slider-content" style="height: 100%;">	
				<div style="height: 100%; text-align: center;">
					<a href="/servisnoe-obsluzhivanie/">
						<picture style="align-self: flex-start;">
							 <source srcset="/wp-content/uploads/mobile-banner-1.webp" media="(max-width: 1200px)">
							 <source srcset="/wp-content/uploads/so-banner-main.webp" media="(min-width: 1200px)">
							 <img class="lozad" data-iesrc="/wp-content/uploads/so-banner-main.webp">
						</picture>						
					</a>
			  </div>			 
	      </div>
	    </div>			  
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>		
	</div>
</div>



<div class="main-categories-container">
	<div class="bm-adaptive bm-margin bm">
		<div class="main-categories">
			<div class="categories-padd">
				<div class="categories-box">
					<a href="/kompyutery/" class="categories-box__link">
						<p class="categories-box-title">
							Компьютеры
						</p>
						<img class="lozad" data-srcset="/wp-content/uploads/computer-main-page.webp">
					</a>
				</div>
			</div>
			<div class="categories-padd">
				<div class="categories-box">
					<a href="/katalog/aksesuary/" class="categories-box__link">
						<p class="categories-box-title">
							Периферия
						</p>
						<img class="lozad" data-srcset="/wp-content/uploads/epublic-of-pc-mouse-5ad24ad9030da9_1.webp">
					</a>
				</div>
			</div>
			<div class="categories-padd">
				<div class="categories-box">
					<a href="/igrovye-kresla/" class="categories-box__link">
						<p class="categories-box-title">
							Игровые кресла
						</p>
						<img class="lozad" data-srcset="/wp-content/uploads/chariot_core_gaming_chair_wide_03_1.webp">
					</a>
				</div>
			</div>
			<div class="categories-padd">
				<div class="categories-box">
					<a href="/kompyutery/collaborations/" class="categories-box__link">
						<p class="categories-box-title">
							Пк как у блогера
						</p>
						<img class="lozad" data-srcset="/wp-content/uploads/2081482081902091292091432_1.webp">
					</a>
				</div>
			</div>			
		</div>
	</div>
</div>


<style>
	.splide__list .woocommerce-loop-product__title{font-size: 18px;}
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.categories-padd{flex-basis: 50% !important; }
		.categories-padd{margin-bottom: 20px;}
		.main-categories .categories-padd:nth-child(2n+1) .categories-box{margin-right: 10px !important;}
		.main-categories .categories-padd:nth-child(2n) .categories-box{margin-left: 10px !important;}	
		.categories-box__link{
			display: flex;
			flex-direction: row-reverse !important;
			align-items: center;
		}
		.categories-box__link img{max-width: 50%; margin-left: 0 !important;}
		.categories-box-title{margin-bottom: 0 !important;}
	}
	@media screen and (min-width: 576px) and (max-width: 992px){
		.categories-padd{flex-basis: 50% !important; }
		.categories-padd{margin-bottom: 20px;}
		.main-categories .categories-padd:nth-child(2n+1) .categories-box{margin-right: 10px !important;}
		.main-categories .categories-padd:nth-child(2n) .categories-box{margin-left: 10px !important;}
	}	
	@media screen and (max-width: 576px){
		.main-categories{flex-direction: column;}
		.categories-padd{margin-bottom: 30px;}
		.categories-box{margin-right: 0 !important;}
	}
	.main-categories-container{padding: 60px 0;}
	.categories-box__link:hover{text-decoration: none;}
	.categories-box__link img{margin-bottom: 0; transition: .3s;}
	.categories-box__link{display: flex; flex-direction: column; justify-content: space-between; height: 100%;}
	.main-categories-container{background: #000;}
	.categories-box-title{
		font-weight: 500;
		font-size: 24px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;	
		margin: 0;
		margin-bottom: 50px;
	}
	.main-categories{display: flex; flex-wrap: wrap;}
	.categories-padd{flex-basis: 25%; }
	.main-categories .categories-padd:last-child{margin-right: 0;}
	.categories-box:hover .categories-box__link img{
		transform: scale(1.05);
		transition: .3s;		
	}
	.categories-box:hover{
		border: 1px solid #444;
		transition: .3s;		
	}
	.categories-box{padding: 30px 30px 0 30px; margin-right: 20px; background: linear-gradient(180deg, #111111 0%, #181818 100%); border-radius: 15px; height: 100%; transition: .3s; border: 1px solid transparent; overflow: hidden;}
	
	.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .main-link, .bm-main-category-container .bm-main-category-container-banners:nth-child(4) .main-link{
		flex-basis: 59%; 
	}
	.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .main-link-product, .bm-main-category-container .bm-main-category-container-banners:nth-child(4) .main-link-product{
		flex-basis: 30%; 
	}
	
	.bm-main-uslugi-service-container-blocks-block{
		background: #191919;
	}
	.bm-main-filters-container-filter-block{
		border: 1px solid #323232;
	}
	.bm-main-projects-container-news-container a{
		display: block;
		border: 1px solid #323232;
		border-radius: 6px;
		transition: .3s;
	}
	.bm-main-projects-container-news-container a:hover{
		transition: .3s;
		border: 1px solid #E30F0F;
	}
	.bm-main-filters-container__title, .bm-main-uslugi-service-container__title, .bm-main-projects-header__title{
		font-size: 48px;
	}
	.bm-main-projects-container-more-projects__link{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 130%;
		color: #FFFFFF;		
		padding: 20px 44px;
		border: 1px solid #E30F0F;
		box-sizing: border-box;
		border-radius: 6px;		
		transition: .3s;
	}
	.bm-main-projects-container-more-projects__link:hover{
		background: #E30F0F;
		transition: .3s;
	}
	.bm-main-projects-container-more-projects{
		border: none;
		padding: 0;
	}
	.bm-main-projects-container-more-projects:hover{
		border: none;
	}
	.upgrade-center{background: #000;}
	.bm-main-filters-container-filter-block{
		background: #191919;
	}
	.bm-main-uslugi-service-container-blocks-block__content{
		background: #191919;
	}
	.bm-main-filters{
		background: #000;
	}
	.bm-main-category-container-computer a:hover{
		text-decoration: none;
	}
	.main-link-product{
		display: block;
		margin: auto;
		flex-basis: 50%;
	}
	.main-link img{
		max-height: 350px;
	}
	.main-link{
		display: block;
		height: fit-content;
		flex-basis: 50%;
	}

	.bm-main-category-container-banners{
		flex-basis: 50%;
		padding: 10px;
	}
	.bm-main-category{background: #000;}
	.bm-main-category-container-computer{
		display: flex;
		justify-content: space-between;
		background: linear-gradient(360deg, #252525, #191919);
		background-repeat: no-repeat;
		border: 1px solid #2B2B2B;
		box-sizing: border-box;
		border-radius: 10px;	
		height: 100%;
		align-items: flex-end;
		transition: .3s;
		overflow: hidden;
	}
	.bm-main-category-container-computer:hover{
		border: 1px solid #444;
		transition: .3s;
	}
	.bm-main-category-container-computer .main-link img{
		transition: .3s;
	}
	.bm-main-category-container-computer:hover .main-link img{
		transform: scale(1.05);
		transition: .3s;
	}
	.bm-main-category-container-title{
		font-style: normal;
		font-weight: 500;
		font-size: 36px;
		line-height: 120%;
		color: #FFFFFF;		
		margin: auto;
	}
	.bm-main-uslugi-service{
		background: #000;
	}
	.bm-main-projects{background: #000;}
	.bm-main-projects-container-news{
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.bm-main-projects-container-news-container{
		flex-basis: 33.3%;
		padding: 0 7.5px;
		margin-bottom: 40px;
	}
	.bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(4), .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(5), .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(6){
		margin-bottom: 0;
	}
/*	
	.bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(1), .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(2), .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(3){
		margin-bottom: 15px;
		flex-basis: 33.3%;
	}
	.bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(1) .bm-main-projects-slider-title, .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(2) .bm-main-projects-slider-title, .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(3) .bm-main-projects-slider-title{
		font-size: 22px;
	}	
	.bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(1) .bm-main-projects-slider-image, .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(2) .bm-main-projects-slider-image, .bm-main-projects-container-news .bm-main-projects-container-news-container:nth-child(3) .bm-main-projects-slider-image{
		height: 500px;
	}
*/	
	.bm-main-projects-slider-image{
		height: 500px;
		border-radius: 6px 6px 0 0;
		
	}
	.bm-main-projects-container-news-container a:hover{
		text-decoration: none;
	}
	.bm-main-projects-slider-title{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 130%;
		color: #d7d7d7;	
		margin: 0;
		padding: 20px 0;
		border-radius: 0 0 6px 6px;
		text-align: center;
		background: #191919;
	}
	.bm-main-projects-container-sales{
		display: flex;
		justify-content: space-between;
	}
	.bm-main-salse-container-sales-container{
		flex-basis: 50%;
		padding: 0 8px;
	}
	.bm-main-salse-container-sales-container a{
		display: block;	
	}
	.bm-main-salse-container-sales-container a .bm-main-projects-slider-sale-image{
		height: 500px;	
		background-position: center !important;
		background-repeat: no-repeat !important;
		background-size: cover !important;
		border-radius: 6px;
		border: 1px solid #323232;
		transition: .3s;
	}
	.bm-main-salse-container-sales-container a .bm-main-projects-slider-sale-image:hover{
		border: 1px solid #E30F0F;
		transition: .3s;
	}
	.upgrade-center-container-first__spisok{
		list-style-type: none;
	}
	.upgrade-center-container-first__spisok li:first-child::before{
		margin-right: 15px;
		background-image: url(/wp-content/uploads/flashlamp.svg);
		background-size: 32px;
		display: inline-block;
		width: 32px;
		height: 32px;
		content: "";		
	}
	.upgrade-center-container-first__spisok li:nth-child(2)::before{
		margin-right: 15px;
		background-image: url(/wp-content/uploads/contrast-view.svg);
		background-size: 32px;
		display: inline-block;
		width: 32px;
		height: 32px;
		content: "";		
	}	
	.upgrade-center-container-first__spisok li:last-child::before{
		margin-right: 15px;
		background-image: url(/wp-content/uploads/tool.svg);
		background-size: 32px;
		display: inline-block;
		width: 32px;
		height: 32px;
		content: "";		
	}	
	.projects-mobile{
		display: none;
	}
	.bm-main-filters-container-filter{
		max-width: 92%;
		margin: 0 auto;
	}
	.bm-main-filters-container-filter-block{
		margin-left: 10px;
	}
	.bm-youtube-container-videos-container-mobile{
		display: none;
	}	
	@media screen and (max-width: 576px){
		.createOwnComputer-container-second__link, .upgrade-center-container-first__link{
			width: 100% !important;
			text-align: center;
		}
		.upgrade-center-container-first__title, .upgrade-center-container-first__subtitle{text-align: center;}
		.bm-youtube-container-videos-container-mobile{
			display: block !important;
		}
		.bm-youtube-container{
			display: none !important;
		}
		.bm-main-projects-slider{
			margin-right: 10px !important;
			padding: 0 !important;
			margin-left: 10px !important;			
		}
		.carousel-indicators li{
			width: 20px !important;
			height: 2px !important;			
		}
		.bm-main-category-container-banners{
			padding: 0 !important;
			margin-bottom: 20px;
		}
		.bm-main-category-container-title{
			font-size: 28px;
			text-align: center;
		}
		.bm-main-filters-container__title, .bm-main-uslugi-service-container__title, .bm-main-projects-header__title, .upgrade-center-container-first__title{
			font-size: 28px !important;
		}
		.bm-main-projects-container{display: none;}
		.projects-mobile{display: block !important;}
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next{
			display: none;
		}
		.bm-main-projects-container-sales{flex-direction: column;}
		.bm-main-salse-container-sales-container{padding: 0; margin-bottom: 15px;}
		.bm-youtube-container{flex-direction: column;}
		.bm-youtube-container-title__text{font-size: 24px !important;}
		.youtube-text{display: flex; justify-content: center;}
		.youtube-text img{max-width: 70px; margin: 0; margin-right: 15px;}
		.bm-main-projects-slider-image{
			height: 280px !important;
		}
		.bm-youtube-container-videos{padding: 0 !important;}
		.bm-main-projects-container-more-projects{
			margin: 30px auto 0 auto !important;
			font-size: 14px !important;
			display: block;
			width: 100%;
			text-align: center;
		}
		.bm-youtube-container .bm-youtube-container-videos:first-child{
			margin-bottom: 10px;
		}
		.bm-main-category-container .bm-main-category-container-banners:last-child{margin-bottom: 0;}
		.bm-main-category-container .bm-main-category-container-banners:first-child .bm-main-category-container-computer{
			padding: 30px;
			align-items: center;
		}
		.bm-main-category-container .bm-main-category-container-banners:last-child .bm-main-category-container-computer{
			padding: 30px 30px 30px 0;
		}		
		.bm-main-category-container .bm-main-category-container-banners:first-child .bm-main-category-container-computer .main-link-product{margin-bottom: 25px;}
		.bm-main-category-container .bm-main-category-container-banners:last-child .bm-main-category-container-computer .main-link-product{margin-bottom: 40px;}
		.bm-main-category-container .bm-main-category-container-banners:last-child .bm-main-category-container-computer .bm-main-category-container-title{padding-left: 30px;}
		.bm-main-category-container .bm-main-category-container-banners:first-child .bm-main-category-container-computer img{max-height: 200px;}
		
		
		.main-link-product{
			margin-bottom: 30px;
		}
		.bm-main-category-container-computer{
			padding: 20px 0 20px 0;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(2) .bm-main-category-container-computer picture img{max-height: 150px;}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(2) .bm-main-category-container-computer .main-link{
			width: 100%;
			text-align: left;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .bm-main-category-container-computer picture img{max-height: 250px;}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .bm-main-category-container-computer{
			padding-bottom: 0 !important;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .bm-main-category-container-computer, .bm-main-category-container .bm-main-category-container-banners:nth-child(4) .bm-main-category-container-computer{
			flex-direction: column;
			align-items: center;
			padding: 20px;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(4) .bm-main-category-container-computer{
			padding-bottom: 0;
		}
		.bm-main-category-container-computer{
			flex-direction: column-reverse;
		}
		
		.bm-fullhd{padding: 0 30px !important;}
		.upgrade-center-container-first__spisok li::before{
			width: 34px !important;
			height: 34px !important;
			background-size: 32px !important;
			background-repeat: no-repeat;
		}
		.bm-main-projects-slider-content{
			padding: 10px 0 !important;
			background: #191919;
		}
		.bm-main-projects-slider-in{
			background: #191919;
		}
		.bm-main-projects-slider-content__title{font-size: 16px !important;}
		.bm-main-salse-container-sales-container a .bm-main-projects-slider-sale-image{
			height: 260px !important;
		}
		.bm-main-projects-container-more-projects__link{
			font-size: 14px !important;
		}
	}
	
	@media screen and (min-width: 576px) and (max-width: 768px){
		
		.bm-main-category-container{
			flex-direction: row;
			max-width: 100%;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(1) .bm-main-category-container-computer, .bm-main-category-container .bm-main-category-container-banners:nth-child(2) .bm-main-category-container-computer{
			flex-direction: column-reverse;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .bm-main-category-container-computer, .bm-main-category-container .bm-main-category-container-banners:nth-child(4) .bm-main-category-container-computer{
			flex-direction: column;
		}	
		.bm-main-category-container-computer{
			padding: 20px 20px 0 20px;
		}
		.main-link-product{margin-top: 0; text-align: center; margin-bottom: 20px;}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .main-link, .bm-main-category-container .bm-main-category-container-banners:nth-child(4) .main-link{
			display: contents;
		}
		
		
		.bm-main-uslugi-service-container-blocks-block__content__title{
			font-size: 24px !important;
		}
		.upgrade-center-container-first__link{width: 100% !important;display: block;text-align: center;}
		.bm-main-uslugi-service-container-blocks-block__content__text{font-size: 16px !important;}
		.bm-main-category, .bm-main-filters, .bm-main-uslugi-service, .bm-main-projects{
			padding: 30px 0;
		}

		.upgrade-center-container-first__title, .upgrade-center-container-first__subtitle{text-align: center;}
		.bm-youtube-container-videos-container-mobile{
			display: block !important;
		}
		.bm-youtube-container{
			display: none !important;
		}
		.bm-main-projects-slider{
			margin-right: 10px !important;
			padding: 0 !important;
			margin-left: 10px !important;			
		}
		.carousel-indicators li{
			width: 20px !important;
			height: 2px !important;			
		}
		.bm-main-category-container-banners{
			padding: 6px;
		}
		.bm-main-category-container-title{
			font-size: 28px;
		}
		.main-link-product{flex-basis: 40%;}
		.bm-main-filters-container__title, .bm-main-uslugi-service-container__title, .bm-main-projects-header__title, .upgrade-center-container-first__title{
			font-size: 28px !important;
		}
		.bm-main-projects-container{display: none;}
		.projects-mobile{display: block !important;}
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next{
			display: none;
		}
		.bm-main-projects-container-sales{flex-direction: column;}
		.bm-main-salse-container-sales-container{padding: 0; margin-bottom: 15px;}
		.bm-youtube-container{flex-direction: column;}
		.bm-youtube-container-title__text{font-size: 24px !important;}
		.youtube-text{display: flex; justify-content: center;}
		.youtube-text img{max-width: 70px; margin: 0; margin-right: 15px;}
		.bm-main-projects-slider-image{
			height: 280px !important;
		}
		.bm-youtube-container-videos{padding: 0 !important;}
		.bm-main-projects-container-more-projects{
			margin: 30px auto 0 auto !important;
			font-size: 14px !important;
			display: block;
			width: 100%;
			text-align: center;
		}
		.bm-youtube-container .bm-youtube-container-videos:first-child{
			margin-bottom: 10px;
		}
		

		




		
		.bm-fullhd{padding: 0 30px !important;}
		.upgrade-center-container-first__spisok li::before{
			width: 34px !important;
			height: 34px !important;
			background-size: 32px !important;
			background-repeat: no-repeat;
		}
		.bm-main-projects-slider-content{
			padding: 10px 0 !important;
			background: #191919;
		}
		.bm-main-projects-slider-in{
			background: #191919;
		}
		.bm-main-projects-slider-content__title{font-size: 16px !important;}
		.bm-main-salse-container-sales-container a .bm-main-projects-slider-sale-image{
			height: 260px !important;
		}
		.bm-main-projects-container-more-projects__link{
			font-size: 14px !important;
		}
	}	
	
	@media screen and (min-width: 768px) and (max-width: 992px){
		
		
		.bm-main-category-container{
			flex-direction: row;
			max-width: 100%;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(1) .bm-main-category-container-computer, .bm-main-category-container .bm-main-category-container-banners:nth-child(2) .bm-main-category-container-computer{
			flex-direction: column-reverse;
		}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .bm-main-category-container-computer, .bm-main-category-container .bm-main-category-container-banners:nth-child(4) .bm-main-category-container-computer{
			flex-direction: column;
		}	
		.bm-main-category-container-computer{
			padding: 20px 20px 0 20px;
		}
		.main-link-product{margin-top: 0; text-align: center; margin-bottom: 20px;}
		.bm-main-category-container .bm-main-category-container-banners:nth-child(3) .main-link, .bm-main-category-container .bm-main-category-container-banners:nth-child(4) .main-link{
			display: contents;
		}		
		
		
		.bm-main-uslugi-service-container-blocks-block__content__title{
			font-size: 24px !important;
		}
		.upgrade-center-container-first__link{width: 100% !important;display: block;text-align: center;}
		.bm-main-uslugi-service-container-blocks-block__content__text{font-size: 16px !important;}
		.bm-main-category, .bm-main-filters, .bm-main-uslugi-service, .bm-main-projects{
			padding: 30px 0;
		}

		.upgrade-center-container-first__title, .upgrade-center-container-first__subtitle{text-align: center;}
		.bm-youtube-container-videos-container-mobile{
			display: block !important;
		}
		.bm-youtube-container{
			display: none !important;
		}
		.bm-main-projects-slider{
			margin-right: 10px !important;
			padding: 0 !important;
			margin-left: 10px !important;			
		}
		.carousel-indicators li{
			width: 20px !important;
			height: 2px !important;			
		}
		.bm-main-category-container-banners{
			padding: 8px;
		}
		.bm-main-category-container-title{
			font-size: 36px;
		}
		.main-link-product{flex-basis: 40%;}
		.bm-main-filters-container__title, .bm-main-uslugi-service-container__title, .bm-main-projects-header__title, .upgrade-center-container-first__title{
			font-size: 36px !important;
		}
		.bm-main-projects-container{display: none;}
		.projects-mobile{display: block !important;}
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next{
			display: none;
		}
		
		.bm-main-salse-container-sales-container{padding: 8px; margin-bottom: 15px;}
		.bm-youtube-container{flex-direction: column;}
		.bm-youtube-container-title__text{font-size: 24px !important;}
		.youtube-text{display: flex; justify-content: center;}
		.youtube-text img{max-width: 90px; margin: 0; margin-right: 15px;}
		.bm-main-projects-slider-image{
			height: 280px !important;
		}
		.bm-youtube-container-videos{padding: 0 !important;}
		.bm-main-projects-container-more-projects{
			margin: 30px auto 0 auto !important;
			font-size: 14px !important;
			display: block;
			width: 100%;
			text-align: center;
		}
		.bm-youtube-container .bm-youtube-container-videos:first-child{
			margin-bottom: 10px;
		}
		.bm-main-category-container .bm-main-category-container-banners:last-child{margin-bottom: 0;}
	
		.bm-fullhd{padding: 0 30px !important;}
		.upgrade-center-container-first__spisok li::before{
			width: 34px !important;
			height: 34px !important;
			background-size: 32px !important;
			background-repeat: no-repeat;
		}
		.bm-main-projects-slider-content{
			padding: 10px 0 !important;
			background: #191919;
		}
		.bm-main-projects-slider-in{
			background: #191919;
		}
		.bm-main-projects-slider-content__title{font-size: 16px !important;}
		.bm-main-salse-container-sales-container a .bm-main-projects-slider-sale-image{
			height: 260px !important;
		}
		.bm-main-projects-container-more-projects__link{
			font-size: 14px !important;
		}
	}		
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.bm-main-uslugi-service-container-blocks-block__content__title{
			font-size: 24px !important;
		}
		.upgrade-center-container-first__link{width: 100% !important;display: block;text-align: center;}
		.bm-main-uslugi-service-container-blocks-block__content__text{font-size: 16px !important;}
		.bm-main-category, .bm-main-filters, .bm-main-uslugi-service, .bm-main-projects{
			padding: 30px 0;
		}

		.upgrade-center-container-first__title, .upgrade-center-container-first__subtitle{text-align: center;}
		.bm-youtube-container-videos-container-mobile{
			display: block !important;
		}
		.bm-youtube-container{
			display: none !important;
		}
		.bm-main-projects-slider{
			margin-right: 10px !important;
			padding: 0 !important;
			margin-left: 10px !important;			
		}
		.carousel-indicators li{
			width: 20px !important;
			height: 2px !important;			
		}
		.bm-main-category-container-banners{
			padding: 8px !important;
			
		}
		.upgrade-center-mobile{
			display: block !important;
		}
		.upgrade-center-container-first__spisok{
			margin-top: 20px !important;
		}
		.upgrade-center-container-second{display: none !important;}
		.bm-main-category-container-title{
			font-size: 30px;
		}
		.main-link-product{flex-basis: 40%;}
		.bm-main-filters-container__title, .bm-main-uslugi-service-container__title, .bm-main-projects-header__title, .upgrade-center-container-first__title{
			font-size: 36px !important;
		}
		.bm-main-projects-container{display: none;}
		.projects-mobile{display: block !important;}
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next{
			display: none;
		}
		
		.bm-main-salse-container-sales-container{padding: 8px; margin-bottom: 15px;}
		.bm-youtube-container{flex-direction: column;}
		.bm-youtube-container-title__text{font-size: 24px !important;}
		.youtube-text{display: flex; justify-content: center;}
		.youtube-text img{max-width: 90px; margin: 0; margin-right: 15px;}
		.bm-main-projects-slider-image{
			height: 280px !important;
		}
		.bm-youtube-container-videos{padding: 0 !important;}
		.bm-main-projects-container-more-projects{
			margin: 30px auto 0 auto !important;
			font-size: 14px !important;
			display: block;
			width: 100%;
			text-align: center;
		}
		.bm-youtube-container .bm-youtube-container-videos:first-child{
			margin-bottom: 10px;
		}
		.bm-main-category-container .bm-main-category-container-banners:last-child{margin-bottom: 0;}
	
		.bm-fullhd{padding: 0 30px !important;}
		.upgrade-center-container-first__spisok li::before{
			width: 34px !important;
			height: 34px !important;
			background-size: 32px !important;
			background-repeat: no-repeat;
		}
		.bm-main-projects-slider-content{
			padding: 10px 0 !important;
			background: #191919;
		}
		.bm-main-projects-slider-in{
			background: #191919;
		}
		.bm-main-projects-slider-content__title{font-size: 16px !important;}
		.bm-main-salse-container-sales-container a .bm-main-projects-slider-sale-image{
			height: 350px !important;
		}
		.bm-main-projects-container-more-projects__link{
			font-size: 14px !important;
		}
	}	
	@media screen and (min-width: 1400px) and (max-width: 1500px){
		.youtube-text img{
			max-width: 220px;
		}
	}
@media screen and (min-width: 1200px) and (max-width: 1400px){
	.main-link img{max-height: 320px;}
	.main-link{
		flex-basis: 60%;
	}
		.bm-main-uslugi-service-container-blocks-block__content__title{
			font-size: 24px !important;
		}
		
		.bm-main-uslugi-service-container-blocks-block__content__text{font-size: 16px !important;}
		.bm-main-category, .bm-main-filters, .bm-main-uslugi-service, .bm-main-projects{
			padding: 50px 0;
		}
	.upgrade-center-container{flex-direction: row !important;}
	.upgrade-center-container-first{margin-top: 0 !important;}
	.upgrade-center-container-first__subtitle{margin-bottom: 20px !important;}
		.bm-youtube-container-videos-container-mobile{
			display: block !important;
		}
	.upgrade-center{padding: 50px 0 !important;}
		.bm-youtube-container{
			display: none !important;
		}
		.bm-main-projects-slider{
			margin-right: 10px !important;
			padding: 0 !important;
			margin-left: 10px !important;			
		}
		.carousel-indicators li{
			width: 20px !important;
			height: 2px !important;			
		}
		.bm-main-category-container-banners{
			padding: 8px !important;
			
		}
		.upgrade-center-mobile{
			display: block !important;
		}
		.upgrade-center-container-first__spisok{
			margin-top: 20px !important;
		}
	.upgrade-center-mobile{display: none !important;}
		.bm-main-category-container-title{
			font-size: 36px;
		}
		.main-link-product{flex-basis: 40%;}
		.bm-main-filters-container__title, .bm-main-uslugi-service-container__title, .bm-main-projects-header__title, .upgrade-center-container-first__title{
			font-size: 42px !important;
		}
		.bm-main-projects-container{display: none;}
		.projects-mobile{display: block !important;}
		.bm-main-projects-slider-prev, .bm-main-projects-slider-next{
			display: none;
		}
		
		.bm-main-salse-container-sales-container{padding: 8px; margin-bottom: 15px;}
		.bm-youtube-container{flex-direction: column;}
		.bm-youtube-container-title__text{font-size: 24px !important;}
		.youtube-text{display: flex; justify-content: center;}
		.youtube-text img{max-width: 90px; margin: 0; margin-right: 15px;}
		.bm-main-projects-slider-image{
			height: 280px !important;
		}
		.bm-youtube-container-videos{padding: 0 !important;}

		.bm-youtube-container .bm-youtube-container-videos:first-child{
			margin-bottom: 10px;
		}
		.bm-main-category-container .bm-main-category-container-banners:last-child{margin-bottom: 0;}
	
		.bm-fullhd{padding: 0 30px !important;}
		.upgrade-center-container-first__spisok li::before{
			width: 34px !important;
			height: 34px !important;
			background-size: 32px !important;
			background-repeat: no-repeat;
		}
		.bm-main-projects-slider-content{
			padding: 10px 0 !important;
			background: #191919;
		}
		.bm-main-projects-slider-in{
			background: #191919;
		}
		.bm-main-projects-slider-content__title{font-size: 16px !important;}
		.bm-main-salse-container-sales-container a .bm-main-projects-slider-sale-image{
			height: 350px !important;
		}
		.bm-main-projects-container-more-projects__link{
			font-size: 14px !important;
		}
	}	
</style>

<div class="pc-in-stock">
	<div class="bm-adaptive bm-margin bm">
		<div class="pc-in-stock-container-title">
			<h2 class="bm-main-uslugi-service-container__title">
				ПК в наличии
			</h2>
		</div>
		<div class="pc-in-stock-container">
			<div class="splide">
			  <div class="splide__track">
					<ul class="splide__list">
						<?php 
						
							$args = array(									
									'tax_query' => array(
									array(
									 'taxonomy' => 'product_cat',
									 'field' => 'slug',
									 'terms' => 'pk-v-nalichii'
									)
								),
								// Параметры отображения выведенных товаров
								'posts_per_page' => -1, // количество выводимых товаров
								'post_type' => 'product', // тип товара
								'orderby' => 'title', // сортировка
							);							
						?>
						<?php 
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							global $product;	
							$product_id = $product->get_id();
						?>
						<li class="splide__slide computers-in-visible-li">
							<?php echo do_shortcode('[bmproduct computer="' . $product_id . '"]') ?>
						</li>
						
						<?php 
							endwhile;
							
						?>
					</ul>
			  </div>
			</div>			
		</div>
		<!--
		<div class="pc-in-stock-more-computers">
			<a href="/kompyutery/" class="pc-in-stock-more-computers__link">
				Смотреть все компьютеры
			</a>
		</div>
		-->
	</div>
</div>
<script>
	var splide = new Splide( '.splide', {
	  perPage: 4,
	  rewind : true,
	  pagination: false,
	  breakpoints: {
			576: {
				perPage: 1,
				pagination: false,
			},
		  992: {
			perPage: 2,  
			pagination: false,  
		  },
		  1200: {
			perPage: 3,  
			pagination: false,  
		  },		  
	  }		
	} );

	splide.mount();
</script>

<!--
<div class="bm-main-filters">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-filter-b-container">
			
		</div>
	</div>	
</div>
-->


<div class="upgr-service-container">
	<div class="bm-adaptive bm-margin bm">
		<div class="upgr-service">
			<div class="upgr-service-info">
				<h2 class="upgr-service-info__title">
					Апгрейд сервис
				</h2>
				<p class="upgr-service-info__subtitle">Прокачайте свой ПК</p>
				<img data-srcset="/wp-content/uploads/group_5255.webp" class="lozad d-mob-block">
				<ul class="upgr-service-info-spisok">
					<li>Увеличим производительность</li>
					<li>Создадим уникальный внешний вид</li>
					<li>Найдем проблему или исправим</li>
				</ul>
				<a href="/apgreyd-service/" class="upgr-service-info__link">Подробнее</a>
			</div>
			<div class="upgr-service-img d-mob-none">
				<img class="lozad" data-srcset="/wp-content/uploads/group_5255.webp">
			</div>
		</div>
		
		<div class="upgr-service">
			<div class="upgr-service-img d-mob-none">
				<img class="lozad" data-srcset="/wp-content/uploads/group_5264.webp">
			</div>			
			<div class="upgr-service-info">
				<h2 class="upgr-service-info__title">
					Сервисное обслуживание
				</h2>
				<p class="upgr-service-info__subtitle">Продли жизнь своему ПК!</p>
				<img data-srcset="/wp-content/uploads/group_5264.webp" class="lozad d-mob-block">
				<ul class="upgr-service-info-spisok servicnoe">
					<li>Проведем диагностику</li>
					<li>Очистим корпус и комплектующие</li>
					<li>Заменим термоинтерфейс и настроим ПО</li>
				</ul>
				<a href="/servisnoe-obsluzhivanie/" class="upgr-service-info__link">Подробнее</a>
			</div>
		</div>
		
	</div>
</div>


<style>
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.upgr-service-info__title{font-size: 34px !important; line-height: 130% !important;}
		.upgr-service-info__subtitle{font-size: 22px !important;}
		.upgr-service-info, .upgr-service-img{flex-basis: 50%;}
		.upgr-service-info-spisok{font-size: 18px !important; line-height: 140% !important;}
		.upgr-service-info-spisok li{margin-bottom: 20px !important;}
	}
	@media screen and (min-width: 768px) and (max-width: 992px){
		.upgr-service-container{padding: 30px 0 !important;}
		.d-mob-none{display: none !important;}
		.d-mob-block{display: block !important; margin: 30px 0; max-width: 65%;}
		.upgr-service{padding: 40px 50px !important; flex-direction: column;}
		.upgr-service-info__title{font-size: 36px !important; line-height: 130% !important;}
		.upgr-service-info__subtitle{font-size: 26px !important;}
		.upgr-service-info-spisok{font-size: 20px !important;}		
	}
	@media screen and (max-width: 768px){
		.upgr-service-container{padding: 30px 0 !important;}
		.d-mob-none{display: none !important;}
		.d-mob-block{display: block !important; margin: 30px 0;}
		.upgr-service{padding: 20px !important; flex-direction: column;}
		.upgr-service-info__title{font-size: 28px !important; line-height: 130% !important;}
		.upgr-service-info__subtitle{font-size: 20px !important;}
		.upgr-service-info-spisok{font-size: 18px !important;}
	}
	.upgr-service-container .upgr-service:last-child{margin-bottom: 0;}
	.d-mob-none{display: block;}
	.d-mob-block{display: none;}
	.upgr-service-info-spisok.servicnoe li:nth-child(1)::before{content: url(/wp-content/uploads/group_5266.webp); margin-right: 20px;}
	.upgr-service-info-spisok.servicnoe li:nth-child(2)::before{content: url(/wp-content/uploads/vector134.webp); margin-right: 20px;}
	.upgr-service-info-spisok.servicnoe li:nth-child(3)::before{content: url(/wp-content/uploads/group_5267.webp); margin-right: 20px;}	
	
	.upgr-service-info-spisok li:nth-child(1)::before{content: url(/wp-content/uploads/flashlamp.png); margin-right: 20px;}
	.upgr-service-info-spisok li:nth-child(2)::before{content: url(/wp-content/uploads/contrast-view.png); margin-right: 20px;}
	.upgr-service-info-spisok li:nth-child(3)::before{content: url(/wp-content/uploads/tool.png); margin-right: 20px;}
	
	.upgr-service-container{background: #000; padding: 60px 0;}
	.upgr-service-info__link:hover{
		text-decoration: none;
		color: #fff;	
		background: #DF2C2C;
		transition: .3s;
	}
	.upgr-service-info__link{
		transition: .3s;
		margin-top: 50px;
		display: block;
		width: fit-content;
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 115.9%;
		color: #fff;		
		padding: 18px 38px 20px 38px;
		border: 1px solid #DF2C2C;
		box-sizing: border-box;
		border-radius: 5px;		
	}
	.upgr-service{
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 60px 70px;
		background: #111111;
		border-radius: 15px;	
		margin-bottom: 30px;
	}
	.upgr-service-info__title{
		font-style: normal;
		font-weight: 600;
		font-size: 46px;
		line-height: 61px;
		color: #FFFFFF;		
		margin-bottom: 15px;
	}
	.upgr-service-info__subtitle{
		font-style: normal;
		font-weight: 500;
		font-size: 26px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 35px;
	}
	.upgr-service-info-spisok{
		list-style-type: none;
		padding: 0;
		margin: 0;
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 1;
		color: #cbcbcb;		
	}
	.upgr-service-info-spisok li{
		margin-bottom: 35px;
		display: flex;
		align-items: center;
	}
	
	.pc-in-stock-container .woocommerce-variation-price{display: none !important;}
	.pc-in-stock-container .quantity{display: none !important;}
	.computers-in-visible-li{padding: 0 10px;}
	.pc-in-stock-container .mywoo-comp-attr .mywoo-comp-attr-cont:first-child{
		padding-top: 12px !important;
	}
	.pc-in-stock-container .mywoo-prod-title{
		padding-bottom: 12px;
		padding-top: 10px;
	}
	.pc-in-stock-container .mywoo-prod-title .woocommerce-loop-product__title{
		font-weight: 400;
	}
	.pc-in-stock-container .woocommerce-loop-product__title{
		margin-bottom: 0;
	}
	@media screen and (max-width: 576px){
		.computers-in-visible-li{padding: unset !important;}
		.mywoo-prod-img{margin-bottom: 30px;}
		ul.splide__list{margin-top: 30px !important;}
		.pc-in-stock-container .splide__arrow--next{
			top: 0 !important;
		}
		.pc-in-stock-container .splide__arrow--prev{
			top: 0 !important;
		}		
	}
	.pc-in-stock-container .splide__arrow--next{
		top: -6%;
	}
	.pc-in-stock-container .splide__arrow--prev{
		right: 5em;
		top: -6%;
		left: auto;
	}
	.pc-in-stock-container .splide__arrow svg{
		fill: #fff;
	}
	.pc-in-stock-container .splide__arrow{
		border-radius: 10px;
		background: rgba(60, 60, 60, 0.25);
		border: 2px solid #1E1E1E;
		opacity: 1;
		width: fit-content;
		height: auto;
		padding: 10px;
	}
	.pc-in-stock-more-computers__link:hover{
		text-decoration: none;
		transition: .3s;	
		background: #E30F0F;
		color: #FFFFFF;	
		border: 2px solid #E30F0F;
	}
	.pc-in-stock-more-computers__link{
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 130%;
		color: #FFFFFF;		
		display: block;
		width: fit-content;
		padding: 22px 35px 24px 35px;
		border: 1px solid #646464;
		box-sizing: border-box;
		border-radius: 10px;	
		margin: 0 auto;
		transition: .3s
	}
	.pc-in-stock-more-computers{
		margin-top: 60px;
		text-align: center;
	}
	.mywoo-comp-info{
		padding: 0 30px;
	}
	.pc-in-stock-container-title{
		margin-bottom: 35px;
		text-align: center;
	}
	.pc-in-stock-container-title__text{
		font-style: normal;
		font-weight: 600;
		font-size: 52px;
		line-height: 63px;
		color: #FFFFFF;		
		margin: 0;
	}
	.pc-in-stock{
		background: #000;
		padding: 60px 0;
	}
	.upgrade-center-container-first__title{
		font-style: normal;
		font-weight: 600;
		font-size: 72px;
		line-height: 115.9%;
		color: #FFFFFF;		
	}
	@media screen and (max-width: 768px){
		.upgrade-center-container{
			flex-direction: column;
		}
		.upgrade-center{
			padding: 30px 0;
		}
		.upgrade-center-container-first__subtitle{
			font-size: 18px !important;
		}
		.upgrade-center-container-first__text{
			font-size: 16px !important;
			margin-bottom: 20px !important;
		}
		.upgrade-center-container-first__link{margin-top: 25px !important;}
		.upgrade-center-container-first__spisok{
			font-size: 16px !important;
		}
		.upgrade-center-container-second{
			margin-top: 20px;
		}
		.createOwnComputer{
			padding: 30px 0;
		}
		.upgrade-center-mobile{
			display: block !important;
			margin-bottom: 25px;
		}
		.upgrade-center-container-second{display: none}
	}
	@media screen and (min-width: 768px) and (max-width: 992px){
		.upgrade-center-container-second{display: none}
		.upgrade-center-mobile{
			display: block !important;
			margin-bottom: 15px;
		}		
		.upgrade-center-container{
			flex-direction: column;
		}
		.upgrade-center{
			padding: 30px 0;
		}
		.upgrade-center-container-first__title, .createOwnComputer-container-second__title{
			font-size: 36px !important;
		}
		.upgrade-center-container-first__subtitle{
			font-size: 24px !important;
		}
		.upgrade-center-container-first__text, .createOwnComputer-container-second__text{
			font-size: 18px !important;
		}
		.upgrade-center-container-first__spisok{
			font-size: 18px !important;
		}
		.upgrade-center-container-second{
			margin-top: 20px;
		}
		.createOwnComputer{
			padding: 30px 0;
		}
	}	
	@media screen and (min-width: 992px) and (max-width: 1400px){
		.upgrade-center{
			padding-bottom: 40px;
		}
		.createOwnComputer{
			padding: 40px 0;
		}
		.upgrade-center-container{
			flex-direction: column-reverse;
		}
		.upgrade-center-container-first{
			margin-top: 30px;
		}
	}
	.collabs .bm-main-category-container__block__link{
		flex-basis: 56%;
	}
	.collabs .bm-main-category-container__block__link.second{
		flex-basis: 38%;
	}	
	.bm-fullhd{
		padding: 0 55px;
	}
	.upgrade-center-mobile{
		display: none;
	}
	.upgrade-center-container-first__link:hover{
		background: #DF2C2C;
		transition: .3s;
		text-decoration: none;
		color: #fff;	
	}
	.upgrade-center-container-first__link{
		transition: .3s;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 115.9%;
		color: #fff;	
		padding: 20px 38px 20px 38px;
		border: 1px solid #DF2C2C;
		box-sizing: border-box;
		border-radius: 5px;
		width: fit-content;
		margin-top: 30px;
	}
	.upgrade-center-container-first{
		display: flex;
		flex-direction: column;
		justify-content: center;
		flex-basis: 35%;
	}
	.upgrade-center-container-second{
		flex-basis: 65%;
    	text-align: right;
	}

	.upgrade-center-container-first__spisok li{
		margin-bottom: 20px;
		display: flex;
		align-items: center;
	}
	.upgrade-center-container-first__spisok{
		padding: 0;
		margin: 0;
		list-style-type: none;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 115.9%;
		color: #FFFFFF;
	}
	.upgrade-center-container-first__text{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 130%;
		color: #CBCBCB;
		margin: 0;
		margin-bottom: 25px;
	}
	.upgrade-center-container-first__subtitle{
		font-style: normal;
		font-weight: 500;
		font-size: 28px;
		line-height: 130%;
		color: #FFFFFF;
		margin: 0;
		margin-bottom: 40px;
	}
	.upgrade-center-container-first__title{
		font-style: normal;
		font-weight: 600;
		font-size: 72px;
		line-height: 115.9%;
		color: #FFFFFF;
		margin: 0;
		margin-bottom: 15px;
	}
	.upgrade-center-container{
		display: flex;
	}
	.bm-fullhd{
		max-width: 1920px;
		margin: 0 auto;
	}
	@media screen and (max-width: 1200px){
		.carousel-indicators{
			bottom: 0;
			padding: 0;
		}
	}
	@media screen and (max-width: 768px){
		.contact-computer-body form .wpforms-field-container{
			display: flex;
			flex-direction: column;
		}
		.contact-computer-body div.wpforms-container-full .wpforms-form .wpforms-one-half{
			width: 100% !important;
		}
		.createOwnComputer-container-second__link, .upgrade-center-container-first__link{
			font-size: 14px !important;
		}
		div.wpforms-container-full .wpforms-form .wpforms-one-half.uniccomputerTel{
			margin-left: 0 !important;
		}
		.computerinicPrice{
			width: 100% !important;
			margin-left: 0 !important;
		}
		.computerinicPrice input{
			max-width: 100% !important;
		}
		.contact-computer-body{
			padding: 30px 10px !important;
		}
		.contact-computer__title{
			font-size: 24px !important;
		}
		.contact-computer__text{
			font-size: 18px !important;
		}
		.createOwnComputer-container{
			flex-direction: column;
		}
		.createOwnComputer-container-second{
			margin-top: 20px;
		}
		.createOwnComputer-container-second__title{
			font-size: 22px !important;
		}
		.createOwnComputer-container-second__text{
			font-size: 16px !important;
			margin-bottom: 20px !important;
		}
	}
	.createOwnComputer-container-second__text{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 150%;
		color: #CBCBCB;
		margin: 0;
		margin-bottom: 30px;
	}
	.createOwnComputer{
		background: #000;
		
	}
	.createOwnComputer-container{
		display: flex;	
		justify-content: space-between;
	}
	.createOwnComputer-container-first{
		flex-basis: 55%;
	}
	.createOwnComputer-container-second{
		flex-basis: 40%;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.createOwnComputer-container-second__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 115.9%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 20px;
	}
	.contact-computer-body form .wpforms-field-container div.comunicbud{
		margin-bottom: 20px !important;
	}
	.createOwnComputer-container-second__link{

		background: transparent;
		transition: .3s;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 115.9%;
		color: #DF2C2C;
		padding: 14px 38px 16px 38px;
		border: 1px solid #DF2C2C;
		box-sizing: border-box;
		border-radius: 5px;
		width: fit-content;		
		
	}
	.createOwnComputer-container-second__link:hover{
		transition: .3s;
		color: #FFFFFF;
		background: #bf1818;
		text-decoration: none;
	}
	.contact-computer-body .uk-modal-close-default{
		left: auto !important;
		color: #BCBCBC !important;
	}
	.contact-computer-body{
		background: #1F1F1F;
		border: 1px solid #292929;	
		padding: 60px;
	}
	#contact-computer{
		padding-top: 9em !important;
	}
	.contact-computer-body .uk-modal-close-default:hover{
		color: #DE2C2C !important;
	}
	.computerunicOt{
		max-width: 100% !important;
		width: 20% !important;
		margin-right: 15px !important;
	}	
	.computerunicDo input,.computerunicOt input{
		max-width: 100% !important;
	}
	.computerunicDo{
		max-width: 100% !important;
		margin-left: 0 !important;
		width: 20% !important;
		margin-right: 5px !important;
	}
	.contact-computer-body input{
		color: #fff !important;
	}
	.contact-computer-body input:focus{
		border-bottom: 1px solid #4E8EBC !important;
	}
	.contact-computer-body form .wpforms-field-container div {
		margin-bottom: 10px !important;
	}
	.contact-computer-body div.wpforms-container-full .wpforms-form ul li{
		margin-bottom: 15px !important;
	}
	.contact-computer__title{
		font-style: normal;
		font-weight: bold;
		font-size: 32px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #FFFFFF;
		margin: 0;
		margin-bottom: 15px;
	}
	.contact-computer__text{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 140%;
		letter-spacing: 0.03em;
		color: #CBCBCB;
		margin: 0;
		margin-bottom: 20px;
	}
	.unicp{
		font-style: normal;
		font-weight: bold;
		font-size: 17px;
		line-height: 130%;
		letter-spacing: 0.03em;
		color: #CCCCCC;
	}
	.uniccomputerName input, .uniccomputerTel input{
		max-width: 95% !important;
		background: #1F1F1F !important;
		border: none !important;
		border-bottom: 1px solid #494949 !important;
	}
	.computerinicPrice input{
		background: #1F1F1F !important;
		border: none !important;
		border-bottom: 1px solid #494949 !important;		
	}
	.uniccomputerTel input{
		padding-left: 10px !important;
	}
	.computerunicField input{
		max-width: 100% !important;
		background: #1F1F1F !important;
		border: none !important;
		border-bottom: 1px solid #494949 !important;		
	}
	.computerunicArea textarea{
		background: #1F1F1F !important;
		border: 1px solid #494949 !important;
	}
	
	.contact-computer-body input[type=radio],
	.contact-computer-body input[type=checkbox]{
	  visibility: hidden !important;
	  position: absolute !important;
	}
.contact-computer-body input[type=radio] + label:before,
.contact-computer-body input[type=checkbox] + label:before{
  height:18px;
  width:18px;
  margin-right: 2px;
  content: " ";
  display:inline-block;
  vertical-align: baseline;
  border:1px solid #777;
	cursor: pointer;
}
.contact-computer-body input[type=radio]:checked + label:before,
.contact-computer-body input[type=checkbox]:checked + label:before{
  	background: #EB2626;
	border: 2px solid #EB2626;
	padding: 3px;
    background-clip: content-box !important;
}

/* CUSTOM RADIO AND CHECKBOX STYLES */
.contact-computer-body input[type=radio] + label:before{
  border-radius:50%;
	margin-right: 15px;
	transform: translate(0px, 3px);
}
.contact-computer-body input[type=checkbox] + label:before{
  border-radius:2px;
}
	.contact-computer-body .wpforms-submit{
		background: #1F1F1F !important;
		font-style: normal;
		font-weight: bold;
		font-size: 16px !important;
		line-height: 130% !important;
		letter-spacing: 0.03em !important;
		color: #FFFFFF !important;
		padding: 15px 32px !important;
		border: 1px solid #DE2C2C !important;
		box-sizing: border-box !important;
		border-radius: 5px !important;
		transition: .3s;
		float: right !important;
	}
	.contact-computer-body div.wpforms-container-full .wpforms-form label.wpforms-error{
		color: #DE2C2C !important;
		margin-top: 10px;
	}
	.contact-computer-body .wpforms-submit:hover{
		background: #DE2C2C !important;
		transition: .3s;
	}
	.uniccomputerTel .iti.iti--allow-dropdown{
		margin-bottom: 0 !important;
	}
	
</style>



<div class="bm-main-uslugi-service">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-uslugi-service-container">
			<h2 class="bm-main-uslugi-service-container__title">
				Услуги и сервис
			</h2>
			<div class="bm-main-uslugi-service-container-blocks">
				<div class="bm-main-uslugi-service-container-blocks-block">
					<div class="bm-main-uslugi-service-container-blocks-block__image">
						<a href="/uslugi/dostavka/"><img class="lozad" data-srcset="/wp-content/uploads/bm-main-dostavks.webp" height="308px"></a>
					</div>
					<div class="bm-main-uslugi-service-container-blocks-block__content">
						<a href="/uslugi/dostavka/">
						<h3 class="bm-main-uslugi-service-container-blocks-block__content__title">
							Доставка
						</h3>
						<p class="bm-main-uslugi-service-container-blocks-block__content__text">
							Бесплатная доставка по Москве и Санкт Петербургу. Надежная доставка по России и СНГ транспортной компанией. Узнайте подробнее о доставке в ваш регион в соответствующем разделе.  
						</p>
						</a>
					</div>
					<a href="/uslugi/dostavka/" class="bm-main-uslugi-service-container-blocks-block__link">
						<img class="lozad" data-srcset="/wp-content/uploads/bm-main-arrow-more.svg" style="align-self: flex-start;">
					</a>
				</div>
				<div class="bm-main-uslugi-service-container-blocks-block">
					<div class="bm-main-uslugi-service-container-blocks-block__image">
						<a href="/uslugi/servis/"><img class="lozad" data-srcset="/wp-content/uploads/bm-main-service.webp"></a>
					</div>
					<div class="bm-main-uslugi-service-container-blocks-block__content">
						<a href="/uslugi/servis/">
							<h3 class="bm-main-uslugi-service-container-blocks-block__content__title">
								Поддержка
							</h3>
							<p class="bm-main-uslugi-service-container-blocks-block__content__text">
								Приобретая наши продукты, вы получаете компьютер под ключ готовый для игр и работы прямо из коробки, 1 года гарантии, а также пожизненные консультации по работе вашего компьютера.
							</p>
						</a>
					</div>
					<a href="/uslugi/servis/" class="bm-main-uslugi-service-container-blocks-block__link">
						<img class="lozad" data-srcset="/wp-content/uploads/bm-main-arrow-more.svg" style="align-self: flex-start;">
					</a>					
				</div>
				<div class="bm-main-uslugi-service-container-blocks-block">
					<div class="bm-main-uslugi-service-container-blocks-block__image">
						<a href="/uslugi/oplata/"><img class="lozad" data-srcset="/wp-content/uploads/bm-main-oplata.webp"></a>
					</div>
					<div class="bm-main-uslugi-service-container-blocks-block__content">
						<a href="/uslugi/oplata/">
							<h3 class="bm-main-uslugi-service-container-blocks-block__content__title">
								Оплата
							</h3>
							<p class="bm-main-uslugi-service-container-blocks-block__content__text">
								Мы предоставляем возможность купить нашу продукцию в кредит или рассрочку, наличными и безналичными платежами, любыми удобными для вас способами. Узнайте подробности в разделе.
							</p>
						</a>
					</div>
					<a href="/uslugi/oplata/" class="bm-main-uslugi-service-container-blocks-block__link">
						<img class="lozad" data-srcset="/wp-content/uploads/bm-main-arrow-more.svg" style="align-self: flex-start;">
					</a>					
				</div>				
			</div>
		</div>
	</div>
</div>

<div class="bm-main-projects">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-projects-header">
			<h2 class="bm-main-projects-header__title">
				Наши проекты
			</h2>
		</div>
	</div>
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-projects-container">

			<div class="bm-main-projects-container-news">
				<?php 

					$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$params = array(
						'posts_per_page' => 6, // количество постов на странице
						'cat'       => 95,					
						'paged'           => $current_page,
					);
					query_posts($params);

					$wp_query->is_archive = true;
					$wp_query->is_home = false;

					while(have_posts()): the_post();?>	

					<div class="bm-main-projects-container-news-container">
						<a href="<?php echo get_permalink(); ?>">
							<div class="bm-main-projects-slider-image" style="background: #191919 url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
							<h2 class="bm-main-projects-slider-title">
								<?php the_title(); ?>
							</h2>
						</a>


					</div>

					<?php endwhile; ?>

			</div>				
		</div>
		
		<div uk-slider="" class="uk-position-relative uk-visible-toggle uk-slider projects-mobile">
			<div class="uk-position-relative">
				<div class="uk-slider-container">
					<div class="uk-slider-items uk-grid uk-grid-small" uk-grid="" uk-lightbox="" >
												
					<?php 
						
						$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$params = array(
							'posts_per_page' => 5, // количество постов на странице
							'cat'       => 95,					
							'paged'           => $current_page,
						);
						query_posts($params);

						$wp_query->is_archive = true;
						$wp_query->is_home = false;

						while(have_posts()): the_post();?>			
						
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="uk-slider-flex bm-main-projects-slider-in">
									<div class="bm-main-projects-slider-image" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
									<div class="bm-main-projects-slider-content">
										<form method="get" action="<?php echo get_permalink(); ?>" class="project-form">
											<button type="submit" class="bm-main-projects-button bm-main-projects-slider-content__title"><?php the_title(); ?></button>																						
										</form>										
									</div>									
								</div>
							</div>
						
						<?php endwhile; 
						?>						
					</div>
					
					<a class="uk-position-small bm-main-projects-slider-prev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
					<a class="uk-position-small bm-main-projects-slider-next" href="#" uk-slidenav-next uk-slider-item="next"></a>						
					
				</div>	
			</div>
		</div>		
		
	</div>
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-projects-container-more-projects">
			<a href="/proekty/" class="bm-main-projects-container-more-projects__link">Смотреть все проекты</a>
		</div>	
	</div>

</div>
<div class="bm-main-projects">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-projects-header">
			<h2 class="bm-main-projects-header__title">
				Акции
			</h2>
		</div>
	</div>
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-sales-container">

			<div class="bm-main-projects-container-sales">
				<?php 

					$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$params = array(
						'posts_per_page' => 2, // количество постов на странице
						'cat'       => 93,					
						'paged'           => $current_page,
					);
					query_posts($params);

					$wp_query->is_archive = true;
					$wp_query->is_home = false;

					while(have_posts()): the_post();?>	

					<div class="bm-main-salse-container-sales-container">
						<a href="<?php echo get_permalink(); ?>">
                            <? if(exKod::Seo()->isNotGooglePageSpeed()):?>
                                <div class="bm-main-projects-slider-sale-image" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                            <?endif;?>
						</a>


					</div>

					<?php endwhile; ?>

			</div>				
		</div>
	</div>

</div>

<div class="bm-main-projects">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-youtube-container">
			<div class="bm-youtube-container-videos video-banner">
				<a class="bm-youtube-container-videos-link" href="https://www.youtube.com/c/BoilingMachine" target="_blank">
					<div class="youtube-text">
						<img data-srcset="/wp-content/uploads/youtube-icon.svg" class="lozad youtube-icon wow animate__animated animate__infinite animate__slow" data-wow-delay="0.9s" data-wow-duration="1s">
						<img class="lozad" data-srcset="/wp-content/uploads/youtube-text.svg">
					</div>				
				</a>								
			</div>
			<div class="bm-youtube-container-videos">
				<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/HsXGgF-tK_A"> <!-- wylsa -->
					<img class="lozad" data-srcset="/wp-content/uploads/wilsacom-youtubepreview.webp">
				</a>
			</div>
			<div class="bm-youtube-container-videos">
				<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/NRNO91XFGGs"> <!-- johan -->
					<img class="lozad" data-srcset="/wp-content/uploads/johan-youtube-preview.webp">
				</a>
			</div>	
			<div class="bm-youtube-container-videos">
				<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/zcEiDBP4Zxo"> <!-- dlss -->
					<img class="lozad" data-srcset="/wp-content/uploads/dlss-2-1.webp">
				</a>
			</div>		
			<div class="bm-youtube-container-videos">
				<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/uCJMyaPEsAQ">
					<img class="lozad" data-srcset="/wp-content/uploads/stas.webp">
				</a>
			</div>	
			<div class="bm-youtube-container-videos">
				<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/LUX9S1XNfnI">
					<img class="lozad" data-srcset="/wp-content/uploads/maxresdefault-1.webp">
				</a>
			</div>			
		</div>
		<div class="bm-youtube-container-videos-container-mobile">	
			<div class="bm-youtube-container-videos">
				<a class="bm-youtube-container-videos-link" href="https://www.youtube.com/c/BoilingMachine" target="_blank">
					<div class="youtube-text">
						<img data-srcset="/wp-content/uploads/youtube-icon.svg" class="lozad youtube-icon wow animate__animated animate__infinite animate__slow" data-wow-delay="0.9s" data-wow-duration="1s">
						<img class="lozad" data-srcset="/wp-content/uploads/youtube-text.svg">
					</div>				
				</a>								
			</div>		
			<div uk-slider="" class="uk-position-relative uk-visible-toggle uk-slider projects-mobile">
				<div class="uk-position-relative">
					<div class="uk-slider-container">
						<div class="uk-slider-items uk-grid uk-grid-small" uk-grid="" uk-lightbox="">											
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4@xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/zcEiDBP4Zxo">
										<img class="lozad" data-srcset="/wp-content/uploads/dlss-2-1.webp">
									</a>
								</div>
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/skiKWkMDp1Y">
										<img class="lozad" data-srcset="/wp-content/uploads/guram.webp">
									</a>
								</div>	
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/1xAw_5WMEus">
										<img class="lozad" data-src="/wp-content/uploads/zeeman-2.webp">
									</a>
								</div>
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/uCJMyaPEsAQ">
										<img class="lozad" data-srcset="/wp-content/uploads/stas.webp">
									</a>
								</div>
							</div>
							<div class="uk-width-3-4 uk-child-width-2 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-4xl bm-main-projects-slider">
								<div class="bm-youtube-container-videos">
									<a class="video-button" href="#modal-media-video" uk-toggle videosrc="https://www.youtube.com/embed/521_pnBXqQs">
										<img class="lozad" data-srcset="/wp-content/uploads/xomak.webp">
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

<div id="modal-media-video" class="uk-flex-top" uk-modal="">	
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
		<button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe class="video-popup" src width="1200" height="800" frameborder="0" uk-video="" uk-responsive=""></iframe>
    </div>
</div>
<style>
	.video-banner{display: flex; align-items: center; padding-bottom: 20px;}
	.bm-youtube-container-videos-link{display: block;}
	.bm-youtube-container-videos-container-mobile .bm-youtube-container-videos:first-child{
		margin-bottom:  30px;
	}
	.video-button{
		display: block;
		overflow: hidden;
	}
	.video-button img{
		transition: .3s;
	}
	.video-button img:hover{
		transform: scale(1.1);
		transition: .3s;
	}
	.bm-youtube-container-videos-link:hover{
		text-decoration: none;
	}
	.youtube-icon{
	  animation-duration: 2s;
	  animation-name: scaleup;
	  animation-iteration-count: infinite;		
	}
		@keyframes scaleup {
			0% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}

			40% {
				-webkit-transform: scale(1.1);
				transform: scale(1.1);
			}
			80% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}
		}	
	.uk-modal-close-outside svg{
		width: 25px;
		height: 25px;		
	}
	.uk-modal-close-outside{
		left: auto;
	}
	.bm-youtube-container-videos img{
		border-radius: 6px;
	}
	.bm-youtube-container{
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.bm-youtube-container-videos{
		flex-basis: 33.3%;
		padding: 7.5px;
		border-radius: 6px;
	}
	.bm-youtube-container-title__text{
		font-style: normal;
		font-weight: bold;
		font-size: 50px;
		line-height: 130%;
		color: #FFFFFF;		
	}

</style>
<script>
	$(function(){	
		$(".video-button").click(function(){
			var video_link = $(this).attr("videosrc");
			$(".video-popup").attr("src",video_link);
		});
	})
</script>
<script>
	$(function() {
		
		function addRemoveDiv() {

		  var wW = $(window).width();

		  if (wW > 1200) {
			  $(".bm-main-filter-b-container").empty();
			  $(".bm-main-filter-b-container").load("/wp-content/themes/boiling_machine/filter/filter-pc.html");
			  $(".bm-main-uslugi-service-container-blocks-block__link img").attr("src", "/wp-content/uploads/bm-main-arrow-more.svg");
			} else if (wW < 1200){
				$(".bm-main-filter-b-container").empty();
				$(".bm-main-filter-b-container").load("/wp-content/themes/boiling_machine/filter/filter-mobile.html");
				$(".bm-main-uslugi-service-container-blocks-block__link img").attr("src", "/wp-content/uploads/bm-main-arrow-more-red.svg");
				
		  }
		}

		addRemoveDiv();
/*
		$(window).on('resize', function() {
		  addRemoveDiv();
		})	
*/		
			
		
	});
</script>

<div id="contact-computer" uk-modal>
    <div class="uk-modal-dialog uk-modal-body contact-computer-body">
		<button class="uk-modal-close-default" type="button" uk-close></button>
		<h2 class="contact-computer__title">
			Заказать уникальный ПК
		</h2>
		<p class="contact-computer__text">
			Заполните поля для более точного подбора комплектующих и наш менеджер свяжется с вами в течение 5 минут
		</p>
        <?php echo do_shortcode('[wpforms id="3633" title="false" description="false"]'); ?>
    </div>
</div>

<?php get_footer(); ?>