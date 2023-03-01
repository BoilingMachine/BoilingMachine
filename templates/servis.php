<div class="bm-adaptive bm-margin bm">
	<div class="about-container second page-oplata-container cont-header-marg">
		<h1 class="about-container__titlecont">
			Поддержка
		</h1>
	</div>	
	<div class="service-container">
		<div class="service-image">
			<img src="/wp-content/uploads/px-service-woman.webp">
		</div>
		<div class="service-info">
			<div class="contacts-info-block">
				<div class="sub-block">
					<h2 class="info-block__title">
						Главный офис
					</h2>
					<div class="info-block__text">
						<div class="block__text-container">
							<p class="text__title">Адрес</p>
						</div>
						<div class="text__text-container">
							<p class="text__text">г. Москва, ул. Спартаковский переулок 2с1, подъезд 4, офис 3</p>
						</div>							
					</div>
					<div class="info-block__text">
						<div class="block__text-container">
							<p class="text__title">Телефон</p>
						</div>
						<div class="text__text-container">
							<p class="text__text text-mr">+7 (800) 350-83-39</p>
							<p class="text__text">+7 (999)-999-21-60   Whatsapp</p>
						</div>					
					</div>
					<div class="info-block__text">
						<div class="block__text-container">
							<p class="text__title">Email</p>
						</div>
						<div class="text__text-container">
							<p class="text__text red"><a href="mailto:service@boiling-machine.ru" class="text-link red">service@boiling-machine.ru</a></p>
						</div>									
					</div>
					<div class="info-block__text">	
						<div class="block__text-container">
							<p class="text__title">График работы</p>
						</div>
						<div class="text__text-container">
							<p class="text__text text-mr">Пн - Вс</p>
							<p class="text__text">10:00 - 21:00</p>
						</div>				
					</div>					
				</div>	
			</div>				
		</div>
	</div>
	<div class="service-callback-container">
		<div class="service-callback-header">
			<h2 class="service__subtitle__title">
				Заполните заявку на сервисное обслуживание
			</h2>	
			<p class="service__subtitle__form">После заполнения формы наш менеджер свяжется с вами для уточнения деталей</p>			
		</div>
		<div class="service-callback-body">
			<?php echo do_shortcode('[wpforms id="11772" title="false" description="false"]'); ?>
		</div>
	</div>
</div>


<style>
	@media screen and (min-width: 768px) and (max-width: 1200px){
		.service-container{flex-direction: column-reverse; max-width: 100% !important;}
		.service-image{padding: unset !important;}
		.service__subtitle__title{font-size: 32px !important;}
		.service__subtitle__form{font-size: 20px !important;}
		.service-callback-body{max-width: 100% !important;}		
	}
	@media screen and (max-width: 768px){
		.service-container{flex-direction: column-reverse; max-width: 100% !important;}
		.service-image{padding: unset !important;}
		.service__subtitle__title{font-size: 28px !important;}
		.service__subtitle__form{font-size: 18px !important;}
		.service-callback-container, .service-callback-body{max-width: 100% !important;}
	}
	.service-callback-body .wpforms-submit-container{
		padding-top: 0 !important;
	}
	.service-button:hover{
		transition: .3s;
		background: #c62020 !important;
	}
	.service-button{
		transition: .3s;
		background: #EF2525 !important;
		border: 1px solid #EF2525 !important;
		box-sizing: border-box;
		border-radius: 10px !important;
		font-style: normal;
		font-weight: 600;
		font-size: 16px !important;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF !important;	
		width: 100% !important;
		padding: 18px 10px 20px 10px !important;
	}
	.service-callback-body{
		max-width: 50%;
		margin: 0 auto;
	}
	.service-callback-header{
		margin-bottom: 30px;
	}
	.service-callback-body .wpforms-field{
		margin-bottom: 10px !important;
	}
	.service-callback-body input, .service-callback-body textarea{
		max-width: 100% !important;
		background: #212121 !important;
		border-radius: 10px !important;
		padding: 30px !important;
		border: unset !important;
		color: #fff !important;
	}
	.service-callback-container{
		max-width: 60%;
		margin: 0 auto;
		margin-bottom: 100px;
	}
	.service__subtitle__title{
		font-style: normal;
		font-weight: 600;
		font-size: 50px;
		line-height: 130%;
		text-align: center;
		color: #FFFFFF;		
		margin-bottom: 20px;
	}
	.service__subtitle__form{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 140%;
		text-align: center;
		color: #CBCBCB;		
		margin: 0;
	}
	.service-info{flex-basis: 50%;}
	.service-image{flex-basis: 50%; padding-right: 80px;}
	.service-container{
		display: flex;
		max-width: 80%;
		margin: 0 auto;
		margin-bottom: 100px;
		align-items: center;
	}
	.service-container{display: flex;}
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.delivery-tarifs{max-width: 100% !important;}
	}
	@media screen and (min-width: 768px) and (max-width: 992px){
		.about-container__titlecont, .delivery-tarifs__title{font-size: 32px !important;}
		.delivery-subtitle, .delivery-tarifs{max-width: 100% !important;}
		.delivery-image, .delivery-tarifs{margin-bottom: 120px !important;}
		.delivery-tarif{flex-direction: column;}
		.delivery-tarifs__title{margin-bottom: 20px !important;}
		.delivery-tarif-img{margin-bottom: 20px;}
		.tarif-text__title{
			font-size: 22px !important;
		}
		.tarif-text__price{font-size: 20px !important;}
		.tarif-text__text{font-size: 18px !important;}
		.delivery-faq__title{font-size: 20px !important;}
		.delivery-faq__text{font-size: 18px !important;}
	}	
	@media screen and (max-width: 768px){
		.about-container__titlecont, .delivery-tarifs__title{font-size: 28px !important;}
		.delivery-subtitle, .delivery-tarifs{max-width: 100% !important;}
		.delivery-image, .delivery-tarifs{margin-bottom: 60px !important;}
		.delivery-tarif{flex-direction: column;}
		.delivery-tarifs__title{margin-bottom: 20px !important;}
		.delivery-tarif-img{margin-bottom: 20px;}
		.tarif-text__title{
			font-size: 22px !important;
		}
		.tarif-text__price{font-size: 20px !important;}
		.tarif-text__text{font-size: 18px !important;}
		.delivery-faq__title{font-size: 20px !important;}
		.delivery-faq__text{font-size: 18px !important;}
	}
	.red:hover{
		color: #EF1111;
	}	
	.red{
		color: #EF1111;
	}
	.text-link:hover{
		text-decoration: none;
	}
	.text-link{
		text-decoration: none;
	}
	.delivery-image{margin-bottom: 120px;}
	.delivery-tarifs .delivery-faq:last-child{
		margin-bottom: 40px;
		padding-bottom: 0;
		border-bottom: unset;
	}
	.delivery-faq-spisok{
		margin: 0;
		margin-top: 15px;
		padding: 0;
		padding-left: 20px;
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 140%;
		color: #E3E3E3;			
	}
	.delivery-faq{
		padding-bottom: 28px;
		margin-bottom: 28px;
		border-bottom: 1px solid #2C2C2C;
	}
	.delivery-faq__text{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 160%;
		color: #E3E3E3;		
		margin: 0;
	}
	.delivery-faq__title{
		font-style: normal;
		font-weight: 500;
		font-size: 22px;
		line-height: 160%;
		color: #F9F9F9;		
		margin: 0;
		margin-bottom: 15px;
	}
	#page{background: #111;}
	.tarif-text__text{
		font-style: normal;
		font-weight: 400;
		font-size: 18px;
		line-height: 160%;
		color: #E3E3E3;		
		margin: 0;
	}
	.tarif-text__price{
		font-style: normal;
		font-weight: 500;
		font-size: 22px;
		line-height: 130%;
		color: #F5AF25;	
		margin: 0;
		margin-bottom: 15px;
	}
	.tarif-text__title{
		font-style: normal;
		font-weight: 500;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;	
		margin: 0;
		margin-bottom: 10px;
	}
	.delivery-tarifs{
		max-width: 65%;
		margin: 0 auto 120px auto;
	}
	.delivery-tarif-text{
		flex-basis: 70%;
		padding: 0 40px;
	}
	.delivery-tarif-img{
		flex-basis: 30%;
		background: #161616;
		border: 1px solid #232323;
		box-sizing: border-box;
		border-radius: 8px;		
		display: flex;
		padding: 15px;
		min-height: 240px;
	}
	.delivery-tarif{
		display: flex;
		margin-bottom: 40px;
	}
	.delivery-tarifs__title{
		font-style: normal;
		font-weight: 600;
		font-size: 50px;
		line-height: 130%;
		color: #FFFFFF;		
		margin-bottom: 40px;
	}
	.delivery-subtitle{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 140%;
		text-align: center;
		color: #E3E3E3;		
		max-width: 60%;
		margin: 0 auto 45px auto;
	}
	.about-container__titlecont{
		font-style: normal;
		font-weight: 700;
		font-size: 50px;
		line-height: 130%;
		color: #FFFFFF;		
		margin-bottom: 20px;
	}
	
	
	
	@media screen and (max-width: 576px){
		.contacts-text-container-title__title{font-size: 22px;}
		.contacts-text-container-text-block__title{font-size: 20px;}
		.contacts-text-container-text-block__text{font-size: 18px;}
		.bm-oplata-kredit-ras-contaienr-text__title{font-size: 22px !important;}
		.about-container__des{font-size: 18px !important;text-align: center;}
		.about-container__form{margin-top: 25px;}
		.contacts-text-container-social-img{margin: 0 15px;}
		.mywoo-computers-tabs .nav.nav-tabs{
			white-space: nowrap;
    		overflow-x: scroll;
			flex-wrap: nowrap;
			justify-content: flex-start;
		}
		.mywoo-computers-tabs .nav.nav-tabs .nav-item{
			margin-bottom: 0;
		}
		.contacts-mao-container{margin-top: 25px;}
		.contacts-text-container{
			margin: 35px 15px;
		}
	}
	@media screen and (min-width: 576px) and (max-width: 992px){
		.contacts-mao-container{margin-top: 30px;}
		.contacts-text-container{
			margin: 35px 15px;
		}	
		.contacts-text-container-social-img{margin: 0 15px;}
	}
</style>

<style>
	@media screen and (min-width: 1200px) and (max-width: 1500px){
		.contacts-container{max-width: 100% !important;}
	}
	
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.contacts-container{max-width: 100% !important;}
	}	
	
	@media screen and (min-width: 768px) and (max-width: 992px){
		.contacts-container{max-width: 100% !important;}
		.info-block__text{flex-direction: column !important;}
		.block__text-container{margin-bottom: 10px;}
		.sub-block{margin: 0 10px 20px 10px !important; padding: 30px 20px !important;}
	}
	
	@media screen and (max-width: 768px){
		.about-container__titlecont{font-size: 28px !important;}
		.contacts-container{flex-direction: column; max-width: 100% !important;}
		.sub-block{margin: 0 0 30px 0 !important; padding: 30px 20px !important;}
		.info-block__text{flex-direction: column !important;}
		.info-block__title{font-size: 24px !important; margin-bottom: 20px !important;}
		.block__text-container{margin-bottom: 10px;}
		.map{margin: 0 !important;}
	}
	.red:hover{
		color: #EF1111;
	}	
	.red{
		color: #EF1111;
	}
	.text-link:hover{
		text-decoration: none;
	}
	.text-link{
		text-decoration: none;
	}	
	#page{background: #111;}
	.contacts-container .contacts-info-block:last-child{flex-basis: 100%;}
	.map{
		height: 500px;
		width: 100%;
		margin: 0 15px;
		margin-bottom: 40px;
	}
	.red{
		color: #E52820 !important;
	}
	.sub-block{
		padding: 40px 50px;
		background: #1C1C1C;
		border: 1px solid #232323;
		box-sizing: border-box;
		border-radius: 8px;		
		margin: 0 15px 30px 15px;
	}
	.text-mr{margin-bottom: 10px;}
	.text__text{
		font-style: normal;
		font-weight: 400;
		font-size: 18px;
		line-height: 140%;
		color: #F5F5F5;		
		margin: 0;
	}
	.text__title{
		font-style: normal;
		font-weight: 400;
		font-size: 18px;
		line-height: 140%;
		color: #CBCBCB;		
		margin: 0;
	}
	.text__text-container{flex-basis: 70%;}
	.block__text-container{flex-basis: 20%;}
	.contacts-info-block .info-block__text:last-child{margin-bottom: 0;}
	.info-block__text{display: flex; justify-content: space-between;margin-bottom: 30px;}
	.contacts-container{
		display: flex;
		flex-wrap: wrap;
		max-width: 80%;
		margin: 0 auto;
	}
	.contacts-info-block{	
		flex-basis: 50%;
	}
	.info-block__title{
		font-style: normal;
		font-weight: 500;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;		
		margin-bottom: 30px;
	}
	.cont-header-marg{margin-bottom: 40px;}
	.about-container__titlecont{
		font-style: normal;
		font-weight: 700;
		font-size: 50px;
		line-height: 130%;
		color: #FFFFFF;		
		margin-bottom: 30px;
	}
	
	
	
	@media screen and (max-width: 576px){
		.contacts-text-container-title__title{font-size: 22px;}
		.contacts-text-container-text-block__title{font-size: 20px;}
		.contacts-text-container-text-block__text{font-size: 18px;}
		.bm-oplata-kredit-ras-contaienr-text__title{font-size: 22px !important;}
		.about-container__des{font-size: 18px !important;text-align: center;}
		.about-container__form{margin-top: 25px;}
		.contacts-text-container-social-img{margin: 0 15px;}
		.mywoo-computers-tabs .nav.nav-tabs{
			white-space: nowrap;
    		overflow-x: scroll;
			flex-wrap: nowrap;
			justify-content: flex-start;
		}
		.mywoo-computers-tabs .nav.nav-tabs .nav-item{
			margin-bottom: 0;
		}
		.contacts-mao-container{margin-top: 25px;}
		.contacts-text-container{
			margin: 35px 15px;
		}
	}
	@media screen and (min-width: 576px) and (max-width: 992px){
		.contacts-mao-container{margin-top: 30px;}
		.contacts-text-container{
			margin: 35px 15px;
		}	
		.contacts-text-container-social-img{margin: 0 15px;}
	}
</style>