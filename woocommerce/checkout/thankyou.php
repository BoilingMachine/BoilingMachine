<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>



<div class="woocommerce-order">
	<?php if ( $order ) : ?>
	<?php do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>
	<?php if ( $order->has_status( 'failed' ) ) : ?>
		<h2 class="order-title">
			Ошибка выполнения заказа.
		</h2>	
		<p class="order-text">
			К сожалению, мы не смогли обработать ваш заказ. Попробуйте еще раз или обратитесь к нашему менджеру.
		</p>
	<?php endif; ?>
	<h2 class="order-title">
		Ваш заказ № <?php echo $order->get_order_number(); ?> <span>принят</span>
	</h2>
	<div class="order-info">
		<img src="/wp-content/uploads/emoji.svg">
		<p class="order-text">
			Наш менеджер свяжется с вами в ближайшее время для уточнения деталей заказа. Мы также отправили информацию по вашему заказу <span class="normal">№ <?php echo $order->get_order_number(); ?></span> на почту <span class="red"><?php echo $order->get_billing_email(); ?></span>
		</p>		
	</div>
	<div class="order-info-container">
		<h2 class="order-info-container-title">Информация о заказе</h2>
		<div class="order-info-box">
			<p class="order-info-box-title">ФИО</p>
			<p class="order-info-box-attr"><?php echo $order->get_shipping_first_name(); ?></p>				
		</div>	
		<div class="order-info-box">
			<p class="order-info-box-title">Телефон</p>
			<p class="order-info-box-attr"><?php echo $order->get_billing_phone(); ?></p>				
		</div>	
		<div class="order-info-box">
			<p class="order-info-box-title">Email</p>
			<p class="order-info-box-attr"><?php echo $order->get_billing_email(); ?></p>				
		</div>	
		<div class="order-info-box">
			<p class="order-info-box-title">Способ доставки</p>
			<p class="order-info-box-attr"><?php echo $order->get_shipping_method(); ?></p>				
		</div>	
		<div class="order-info-box">
			<p class="order-info-box-title">Адрес доставки</p>
			<p class="order-info-box-attr"><?php echo $order->get_shipping_address_1(); ?></p>				
		</div>	
		<div class="order-info-box">
			<p class="order-info-box-title">Способ оплаты</p>
			<p class="order-info-box-attr"><?php echo $order->get_payment_method_title(); ?></p>				
		</div>	
		<div class="order-info-box">
			<p class="order-info-box-title">Номер заказа</p>
			<p class="order-info-box-attr"><?php echo $order->get_id(); ?></p>				
		</div>	
		<div class="order-info-box">
			<p class="order-info-box-title">Дата</p>
			<p class="order-info-box-attr"><?php $date =  $order->get_date_created(); echo date("d.m.Y", strtotime($date)); ?></p>				
		</div>			
	</div>
	<div class="order-info-container">
		<h2 class="order-info-container-title">Информация о товаре</h2>
		<?php foreach ( $order->get_items() as $item_id => $item ) : ?>
		<div class="order-info-box">
			<?php //echo $item->get_variation_id(); ?>
			<p class="order-info-box-title"><?php echo $item->get_name(); ?></p>
			<p class="order-info-box-attr"><span><?php echo $item->get_quantity(); ?> шт</span> <?php echo wc_price($item->get_total()); ?></p>				
		</div>		
		<?php endforeach; ?>
		<div class="order-info-box">
			<p class="order-info-box-title">Итог</p>
			<p class="order-info-box-attr"><?php echo wc_price($order->get_total()); ?></p>				
		</div>			
	</div>
	<div class="order-info-container">
		<h2 class="order-info-container-title">Мы всегда на связи!</h2>
		<p class="link-p"><a href="tel:88003508339" class="link-text">8 (800) 350-83-39</a></p>		
		<!--
		<p class="link-p">
			<a href="mailto:sales@boiling-machine.ru" class="link-text">sales@boiling-machine.ru</a>
			по вопросам заказа
		</p>
-->
		<p class="link-p">
			<a href="mailto:service@boiling-machine.ru" class="link-text">service@boiling-machine.ru</a>
			по всем вопросам
		</p>	
		<div class="form-social-links">
			<a href="https://www.youtube.com/c/BoilingMachine"><img src="/wp-content/uploads/group-5285.svg"></a>
			<a href="https://vk.com/boilingmachine"><img src="/wp-content/uploads/group-5282.svg"></a>
			<a href="https://t.me/boilingmachine"><img src="/wp-content/uploads/group-5281.svg"></a>
			<a href="https://web.whatsapp.com/send?phone=79999992160"><img src="/wp-content/uploads/group-5287.svg"></a>
			<a href="https://www.tiktok.com/@boilingmachineru?lang=en"><img src="/wp-content/uploads/group-5283.svg"></a>
		</div>
	</div>	
	<div class="back-to-main">
		<a href="/">Вернуться на главную</a>
	</div>
	<?php endif; ?>
</div>
<style>
	@media screen and (min-width: 768px) and (max-width: 1200px){
		.woocommerce-order{padding: 0 30px;}
		.form-social-links{grid-template-columns: repeat(5,10%) !important;}
	}
	@media screen and (max-width: 768px){
		.woocommerce-order{padding: 0 30px;}
		.order-title, .order-info-container-title{font-size: 28px !important;}
		.order-info{grid-template-columns: 100% !important;}
		.order-info-container{padding-left: 0 !important; padding-right: 0 !important;}
		.order-info-box-attr, .order-info-box-title{font-size: 18px !important;}
		.link-text, .link-p{font-size: 18px !important;}
		.link-p{display: grid;}
		.form-social-links{
			grid-gap: 10px !important;
			grid-template-columns: repeat(5, 18%) !important;
		}
	}
	.back-to-main{
		margin-top: 50px;
	}

	.back-to-main a:hover {
		text-decoration: none;
		transition: .3s;
	}
	.back-to-main a{
		font-style: normal;
		font-weight: 600;
		font-size: 16px;
		line-height: 1;
		color: #EF2525;	
		width: fit-content;
		display: block;
		padding: 20px 30px 22px 30px;
		border: 1px solid #EF2525;
		border-radius: 10px;	
		margin: 0 auto;
		transition: .3s;
		display: flex;
	}
	.back-to-main a::before{
		content: url(/wp-content/uploads/group-5290.svg);
		margin-right: 12px;
		transition: .3s;
	}
	.back-to-main a:hover{
		transition: .3s;
		background: #EF2525;	
		color: #fff;
		text-decoration: none;
	}
	.back-to-main a:hover::before{
		content: url(/wp-content/uploads/cart-back1.svg);
		transition: .3s;
	}
	.form-social-links{
		display: grid;
		grid-gap: 35px;
		grid-template-columns: repeat(5,5%);
		margin-top: 40px;
	}
	.link-p{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 130%;
		color: #CBCBCB;		
		margin: 0;
		margin-bottom: 20px;
	}
	.link-text{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		color: #EF2525;	
		margin-right: 20px;
	}
	.link-text:hover{
		text-decoration: none;
		color: #EF2525;	
	}
	.order-info-box-attr span{margin-right: 20px;}
	.order-info-container .order-info-box:last-child{
		margin-bottom: 0;
		padding-bottom: 0;
		border: unset;
	}
	.order-info-box-attr{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		text-align: right;
		color: #F0F0F0;		
		margin: 0;
	}
	.order-info-box-title{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 130%;
		color: #CBCBCB;	
		margin: 0;
	}
	.order-info-box{
		display: grid;
		grid-template-columns: 30% 68%;
		grid-gap: 2%;
		padding-bottom: 20px;
		border-bottom: 1px solid #2C2C2C;
		margin-bottom: 20px;
	}
	.order-info-container-title{
		font-style: normal;
		font-weight: 600;
		font-size: 32px;
		line-height: 130%;
		color: #EDEDED;		
		margin-bottom: 30px;
	}
	.order-info-container{
		padding: 35px 40px;
		background: #212121;
		border-radius: 15px;	
		margin-bottom: 30px;
	}
	.order-text span.normal{
		font-weight: 500;
	}	
	.order-text span.red{
		color: #EF2525;
	}
	.order-info{
		display: grid;
		grid-template-columns: 5% 92%;
		grid-gap: 3%;
		margin-bottom: 50px;
	}
	.order-text{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 150%;
		color: #EDEDED;		
		margin: 0
	}
	.woocommerce-order{
		max-width: 920px;
		margin: 80px auto 40px auto;
	}
	.order-title{
		font-style: normal;
		font-weight: 600;
		font-size: 60px;
		line-height: 130%;
		color: #F0F0F0;		
		margin-bottom: 30px;
	}
	.order-title span{
		color: #75C921;
	}
</style>