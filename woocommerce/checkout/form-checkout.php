<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*do_action( 'woocommerce_before_checkout_form', $checkout );*/

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>



<div class="bm-adaptive bm-margin bm">
	<div class="bm-contacts-header">
		<div class="bm-contacts-breadcrumb">
			<?php the_breadcrumb() ?>
		</div>
	</div>
</div>

<?php 

	$productsIDS = WC()->cart->get_cart();
	$lstProd =  end($productsIDS);		
	$item_data_last = $lstProd['data'];	
	
	if($item_data_last->is_type( 'simple' )){
		$prod = wc_get_product($item_data_last->id);
		$cat = $prod->get_categories();
		$categories = explode(",", $cat);
		$myVar = strip_tags(end($categories));
		$new_str = str_replace(" ", '', $myVar);

		if( $new_str == 'Игровыекресла'){ 
		?>
			
			<style>
				.coupon input{
					color: #181818 !important;
				}
				.coupon input:focus{color: #181818 !important;}
				.woocommerce-checkout #page{background: #fff !important;}		
				.bm-checkout-container-main__title, #order_review_heading, .bm-checkout-container-itog__title , .my-woo-checkout-delivery, .woocommerce-billing-fields h3, .checkout-title{color: #181818 !important;}
				.bm-checkout-cart, .woocommerce-bill-back{background: #fff !important;}
				.mywoo-product-name a{color: #181818 !important;}
				.mywoo-product-quantity .qty_button.minus, .mywoo-product-quantity .qty_button.plus{
					color: #7C7C7C !important;
				}
				.input-text.qty, .card-item-all, .mywoo-product-name div, .bm-checkout-container-itog__info-poditog, .bm-checkout-container-itog-full-price__text{color: #181818 !important;}
				.mywoo-product-content{border-color: #EEEEEE !important;}
				.bm-checkout-cart{background: #fff !important;}
				.bm-checkout-container-itog__count__text{color: #4B4B4B !important; }
				.bm-checkout-container-itog__info-text{color: #4B4B4B !important; }
				.bm-checkout-container-itog-purchase-button{background: #FFE4E4;}
				.bm-checkout-help__title{color: #EF2525 !important;}
				.bm-checkout-help__data{color: #181818 !important;}
				.bm-checkout-container-itog-scroll{border-color: #FFD9D9;}
				#personal-info .woocommerce-checkout .form-row input,#personal-info textarea,#personal-info .woocommerce-checkout .select2-selection{
					background: #fff !important;
					border: 1px solid #D1D1D1 !important;
				}
				#personal-info .select2-selection span, #personal-info .woocommerce-checkout .form-row input, #personal-info textarea, #personal-info .woocommerce-checkout .select2-selection{
					color: #707070 !important;
				}
				#organisation_field .woocommerce-input-wrapper label{color: #646464 !important;}
				#organisation_field .woocommerce-input-wrapper label.active{color: #181818 !important;}
				#organisation_field .input-radio:checked+label::before,#organisation_field .mywoo-radio:checked + label::before{
					border-color: #76B942 !important;
					background-color: #76B942 !important;
					background-clip: content-box !important;
					border: 1.5px solid #76B942;					
				}
				.select2-dropdown{
					background-color: #fff !important;
					border-color: #fff !important;
					color: #181818 !important;
				}
				.select2-search.select2-search--dropdown, .select2-container--default .select2-search--dropdown .select2-search__field{
					background-color: #fff !important;
				}
				.woocommerce-shipping-totals.shipping, .woocommerce-checkout-payment, .woocommerce-info, textarea{background: #fff !important;}
				.woocommerce-shipping-totals.shipping, .woocommerce-checkout-payment, .woocommerce-info, textarea, .woocommerce-shipping-totals.shipping td{color: #181818 !important;}
				ul#shipping_method li, .wc_payment_method{
					border-color: #D1D1D1 !important;
					background: #fff !important;
				}
				#shipping_method .input-radio:checked+label::before,#shipping_method .mywoo-radio:checked + label::before{
					border-color: #76B942 !important;
					background-color: #76B942 !important;
					background-clip: content-box !important;
					border: 1.5px solid #76B942;						
				}
				#shipping_method li input:checked ~ label, ul#shipping_method li label, .wc_payment_method input:checked~label, .wc_payment_method input label{
					color: #181818 !important;
				}
				.payment_box{
					color: #353535 !important;
				}
				.mywoo-spos-oplati .input-radio:checked+label::before, .mywoo-radio:checked + label::before{
					border-color: #76B942 !important;
					background-color: #76B942 !important;
					background-clip: content-box !important;
					border: 1.5px solid #76B942;						
				}
			</style>							
		<?								
		}
	}else{		
		$prod = wc_get_product($item_data_last->parent_id);
		$cat = $prod->get_categories();
		$categories = explode(",", $cat);
		$myVar = strip_tags(end($categories));
		$new_str = str_replace(" ", '', $myVar);
		if( $new_str == 'Игровыекресла'){
		?>
			
			<style>
				.coupon input{
					color: #181818 !important;
				}
				.coupon input:focus{color: #181818 !important;}
				.woocommerce-checkout #page{background: #fff !important;}		
				.bm-checkout-container-main__title, #order_review_heading, .bm-checkout-container-itog__title , .my-woo-checkout-delivery, .woocommerce-billing-fields h3, .checkout-title{color: #181818 !important;}
				.bm-checkout-cart, .woocommerce-bill-back{background: #fff !important;}
				.mywoo-product-name a{color: #181818 !important;}
				.mywoo-product-quantity .qty_button.minus, .mywoo-product-quantity .qty_button.plus{
					color: #7C7C7C !important;
				}
				.input-text.qty, .card-item-all, .mywoo-product-name div, .bm-checkout-container-itog__info-poditog, .bm-checkout-container-itog-full-price__text{color: #181818 !important;}
				.mywoo-product-content{border-color: #EEEEEE !important;}
				.bm-checkout-cart{background: #fff !important;}
				.bm-checkout-container-itog__count__text{color: #4B4B4B !important; }
				.bm-checkout-container-itog__info-text{color: #4B4B4B !important; }
				.bm-checkout-container-itog-purchase-button{background: #FFE4E4;}
				.bm-checkout-help__title{color: #EF2525 !important;}
				.bm-checkout-help__data{color: #181818 !important;}
				.bm-checkout-container-itog-scroll{border-color: #FFD9D9;}
				#personal-info .woocommerce-checkout .form-row input,#personal-info textarea,#personal-info .woocommerce-checkout .select2-selection{
					background: #fff !important;
					border: 1px solid #D1D1D1 !important;
				}
				#personal-info .select2-selection span, #personal-info .woocommerce-checkout .form-row input, #personal-info textarea, #personal-info .woocommerce-checkout .select2-selection{
					color: #707070 !important;
				}
				#organisation_field .woocommerce-input-wrapper label{color: #646464 !important;}
				#organisation_field .woocommerce-input-wrapper label.active{color: #181818 !important;}
				#organisation_field .input-radio:checked+label::before,#organisation_field .mywoo-radio:checked + label::before{
					border-color: #76B942 !important;
					background-color: #76B942 !important;
					background-clip: content-box !important;
					border: 1.5px solid #76B942;					
				}
				.select2-dropdown{
					background-color: #fff !important;
					border-color: #fff !important;
					color: #181818 !important;
				}
				.select2-search.select2-search--dropdown, .select2-container--default .select2-search--dropdown .select2-search__field{
					background-color: #fff !important;
				}
				.woocommerce-shipping-totals.shipping, .woocommerce-checkout-payment, .woocommerce-info, textarea{background: #fff !important;}
				.woocommerce-shipping-totals.shipping, .woocommerce-checkout-payment, .woocommerce-info, textarea, .woocommerce-shipping-totals.shipping td{color: #181818 !important;}
				ul#shipping_method li, .wc_payment_method{
					border-color: #D1D1D1 !important;
					background: #fff !important;
				}
				#shipping_method .input-radio:checked+label::before,#shipping_method .mywoo-radio:checked + label::before{
					border-color: #76B942 !important;
					background-color: #76B942 !important;
					background-clip: content-box !important;
					border: 1.5px solid #76B942;						
				}
				#shipping_method li input:checked ~ label, ul#shipping_method li label, .wc_payment_method input:checked~label, .wc_payment_method input label{
					color: #181818 !important;
				}
				.payment_box{
					color: #353535 !important;
				}
				.mywoo-spos-oplati .input-radio:checked+label::before, .mywoo-radio:checked + label::before{
					border-color: #76B942 !important;
					background-color: #76B942 !important;
					background-clip: content-box !important;
					border: 1.5px solid #76B942;						
				}
			</style>							
		<?				
		}	
	}
									



?>	


<div class="bm-adaptive bm-margin bm bm-checkout-mobile">
	<div class="bm-checkout-container">
			<div class="bm-checkout-container-itog">
				<div class="bm-checkout-container-main">
					<div class="checkout-mobile-padding">	
					<div class="checkout-title-container">
						<h1 class="bm-checkout-container-main__title">Корзина</h1>
						<a href="/" class="checkout-back-to-salles">Вернуться к покупкам</a>
					</div>
					
					<div class="bm-checkout-cart">
						<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" method="post">
							<?php do_action( 'woocommerce_before_cart_table' ); ?>		
							<div class="mywoo-cart-products-back">
									<div class="mywoo-cart-products">
										<?php do_action( 'woocommerce_before_cart_contents' ); ?>
										
									
										
										<?php
										foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
											$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
											$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

											if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
												$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
												?>	
													<div class="mywoo-product-content">
														<div class="mywoo-product-image">
															<?php
																$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

																if ( ! $product_permalink ) {
																	echo $thumbnail; // PHPCS: XSS ok.
																} else {
																	printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
																}
															?>
														</div>
														<div class="mywoo-product-name-name-mobile">
														<?php
															if ( ! $product_permalink ) {
																echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
															} else {
																echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="mywoo-product-name__link">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
															}

															do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

															// Meta data.
															echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

															// Backorder notification.
															if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
																echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
															}


														?>															
														</div>														
														<div class="mywoo-product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>" >
															<div class="mywoo-product-name-container">
																<!--
																<div class="mywoo-product-name-price">
																	<?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok. ?>
																</div>
																-->
																<div class="mywoo-product-name-name">
																<?php
																	if ( ! $product_permalink ) {
																		echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
																	} else {
																		echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="mywoo-product-name__link">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
																	}

																	do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

																	// Meta data.
																	echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

																	// Backorder notification.
																	if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
																		echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
																	}


																?>															
																</div>		
																<?php 
																	$item_data = $cart_item['data'];
																	if($item_data->is_type( 'simple' )){
																		
																	}else{
																		$parent_product = wc_get_product( $item_data->get_parent_id() );
																		
																?>
																	<options class="variations-test">
																		<? 
												
																		$item_data = $cart_item['data'];
																		$attributes = $item_data->get_attributes();
																		$garantyPrice;
												
																		$attrib = implode('-', $attributes);
																		switch($attrib){
																			case '1-kreslo-net-net':
																				echo '<p>Тест кресла на дому</p>';																			
																			break;
																			case 'net-net-1-god':
																				echo '<p>Расширенная гарантия: +1 год</p>';
																				?>
																		<!--
																				$product = wc_get_product( $item_data->get_parent_id() );
																				$variations = $product->get_available_variations();
																				foreach($variations as $variation):	
																					$variation_obj = wc_get_product($variation['variation_id']);
																					$attrib = implode('-', $variation['attributes']);	
																					if ($attrib == 'net-net-net'):
																						$garantyPrice = (int)$item_data->get_price() - (int)$variation_obj->get_price();
																						echo wc_price($garantyPrice);
																					endif;
																				endforeach;
																		-->
																				<?php
																			break;
																			case 'net-7-dnej-net':
																				echo '<p>Аренда кресла: 7 дней</p>';
																			break;
																			case 'net-14-dnej-net';
																				echo '<p>Аренда кресла: 14 дней</p>';
																			break;
																			case 'net-1-mesyacz-net':
																				echo '<p>Аренда кресла: 1 месяц</p>';
																			break;
																		}
												
																		
																		?>
																	</options>																
																<?php		
																		
																	}
																	
																	
																?>
																
																																											

															</div>
														</div>
														<div class="mywoo-product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
															<?php
																if ( $_product->is_sold_individually() ) {
																	$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
																} else {
																	$product_quantity = woocommerce_quantity_input(
																		array(
																			'input_name'   => "cart[{$cart_item_key}][qty]",
																			'input_value'  => $cart_item['quantity'],
																			'max_value'    => $_product->get_max_purchase_quantity(),
																			'min_value'    => '0',
																			'product_name' => $_product->get_name(),
																		),
																		$_product,
																		false
																	);
																}

																echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
															?>
														</div>
														<div class="mywoo-product-itog-all">
															<?php
															$item_card_quntity =  $cart_item['quantity'];
															$item_card_price =  $cart_item['data']->get_price();
															?>
															<p class="card-item-all">
																<?php echo(number_format(($item_card_quntity * $item_card_price), 0, '.', ' '));   ?> р
															</p>	
															<?php 
												/*
															if($item_data->is_type( 'simple' )){
																		
															}else{
																$parent_product = wc_get_product( $item_data->get_parent_id() );
																if ($parent_product->is_type( 'variable' )):
																	$item_data = $cart_item['data'];
																	$attributes = $item_data->get_attributes();	
																
																	$attrib = implode('-', $attributes);
																
																	if($attrib == 'net-net-1-god'){
																		
																		$variations = $parent_product->get_available_variations();
																		foreach($variations as $variation):	
																			$variation_obj = wc_get_product($variation['variation_id']);
																			$attrib = implode('-', $variation['attributes']);	
																			if ($attrib == 'net-net-net'):
																				$garantyPrice = (int)$item_data->get_price() - (int)$variation_obj->get_price();
																		?>
																				<p class="card-item-all">
																					<?php echo(number_format($garantyPrice, 0, '.', ' ')) ?>  р
																				</p>															
																		
																		<?php
																			endif;
																		endforeach;																		
																	}
																	
																endif;
															}
												*/	
															?>															
														</div>
														<div class="mywoo-product-remove">
															<?php
																echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
																	'woocommerce_cart_item_remove_link',
																	sprintf(
																		'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><img src="/wp-content/uploads/card-clos1.svg"></a>',
																		esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
																		esc_html__( 'Remove this item', 'woocommerce' ),
																		esc_attr( $product_id ),
																		esc_attr( $_product->get_sku() )
																	),
																	$cart_item_key
																);
															?>								
														</div>
													</div>
											<?php
											}
										}

										?>
									</div>
							</div>	
							<div class="mywoo-cart-coupon-shiping">
								<div class="mywoo-cart-coupon-shiping-have-coupon">
									<p class="mywoo-cart-coupon-shiping-have-coupon__text">
										У вас есть промокод?
									</p>
								</div>
								<div class="mywoo-coupon actions">
									<?php if ( wc_coupons_enabled() ) { ?>
											<div class="coupon">
												<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Применить', 'woocommerce' ); ?></button>
												<?php do_action( 'woocommerce_cart_coupon' ); ?>
											</div>
										<?php } ?>

										<button style="display: none;" type="submit" class="button update-cart" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

										<?php do_action( 'woocommerce_cart_actions' ); ?>

										<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
								</div>

							</div>
						</form>
					</div>
					</div>
					<div class="mobile-checkout-separator"></div>				
					<div class="checkout-mobile-padding">
					<div class="form_box" id="personal-info">			
						<form name="checkout" method="post" class="checkout woocommerce-checkout rf" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" autocomplete="off">
						<?php if ( $checkout->get_checkout_fields() ) : ?>
						<div class="woocommerce-billing-fields">
							
							<h3>Личные данные</h3>
							<div class="woocommerce-bill-back">
								<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>
								<div class="woocommerce-billing-fields__field-wrapper">
									<?php

									$fields = $checkout->get_checkout_fields( 'billing' );

									foreach ( $fields as $key => $field ) {
										woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
									}

									?>						

								</div>

								<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>								
							</div>

						</div>				
						<?php do_action( 'woocommerce_legal_face' ); ?>		

					<div class="my-woo-checkout-table">
						<h2 class="my-woo-checkout-delivery">Доставка</h2>
						<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>
						<?

							$formatted_destination    = isset( $formatted_destination ) ? $formatted_destination : WC()->countries->get_formatted_address( $package['destination'], ', ' );
							$has_calculated_shipping  = ! empty( $has_calculated_shipping );
							$show_shipping_calculator = ! empty( $show_shipping_calculator );
							$calculator_text          = '';
							?>
							<div class="woocommerce-shipping-totals shipping">

								<div data-title="<?php echo esc_attr( $package_name ); ?>">
									<?php if ( $available_methods ) : ?>
										<ul id="shipping_method" class="woocommerce-shipping-methods">
											<?php foreach ( $available_methods as $method ) : ?>
												<li>
													<?php
													if ( 1 < count( $available_methods ) ) {
														printf( '<input type="radio" name="shipping_method[%1$d]" data-index="%1$d" id="shipping_method_%1$d_%2$s" value="%3$s" class="shipping_method mywoo-radio" %4$s />', $index, esc_attr( sanitize_title( $method->id ) ), esc_attr( $method->id ), checked( $method->id, $chosen_method, false ) ); // WPCS: XSS ok.
													} else {
														printf( '<input type="hidden" name="shipping_method[%1$d]" data-index="%1$d" id="shipping_method_%1$d_%2$s" value="%3$s" class="shipping_method" />', $index, esc_attr( sanitize_title( $method->id ) ), esc_attr( $method->id ) ); // WPCS: XSS ok.
													}
													printf( '<label for="shipping_method_%1$s_%2$s">%3$s</label>', $index, esc_attr( sanitize_title( $method->id ) ), wc_cart_totals_shipping_method_label( $method ) ); // WPCS: XSS ok.
													do_action( 'woocommerce_after_shipping_rate', $method, $index );
													?>
												</li>
											<?php endforeach; ?>
										</ul>
										<?php if ( is_cart() ) : ?>
											<p class="woocommerce-shipping-destination">
												<?php
												if ( $formatted_destination ) {
													// Translators: $s shipping destination.
													printf( esc_html__( 'Shipping to %s.', 'woocommerce' ) . ' ', '<strong>' . esc_html( $formatted_destination ) . '</strong>' );
													$calculator_text = esc_html__( 'Change address', 'woocommerce' );
												} else {
													echo wp_kses_post( apply_filters( 'woocommerce_shipping_estimate_html', __( 'Shipping options will be updated during checkout.', 'woocommerce' ) ) );
												}
												?>
											</p>
										<?php endif; ?>
										<?php
									elseif ( ! $has_calculated_shipping || ! $formatted_destination ) :
										if ( is_cart() && 'no' === get_option( 'woocommerce_enable_shipping_calc' ) ) {
											echo wp_kses_post( apply_filters( 'woocommerce_shipping_not_enabled_on_cart_html', __( 'Shipping costs are calculated during checkout.', 'woocommerce' ) ) );
										} else {
											echo wp_kses_post( apply_filters( 'woocommerce_shipping_may_be_available_html', __( 'Enter your address to view shipping options.', 'woocommerce' ) ) );
										}
									elseif ( ! is_cart() ) :
										echo wp_kses_post( apply_filters( 'woocommerce_no_shipping_available_html', __( 'There are no shipping options available. Please ensure that your address has been entered correctly, or contact us if you need any help.', 'woocommerce' ) ) );
									else :
										// Translators: $s shipping destination.
										echo wp_kses_post( apply_filters( 'woocommerce_cart_no_shipping_available_html', sprintf( esc_html__( 'No shipping options were found for %s.', 'woocommerce' ) . ' ', '<strong>' . esc_html( $formatted_destination ) . '</strong>' ) ) );
										$calculator_text = esc_html__( 'Enter a different address', 'woocommerce' );
									endif;
									?>

									<?php if ( $show_package_details ) : ?>
										<?php echo '<p class="woocommerce-shipping-contents"><small>' . esc_html( $package_details ) . '</small></p>'; ?>
									<?php endif; ?>

									<?php if ( $show_shipping_calculator ) : ?>
										<?php woocommerce_shipping_calculator( $calculator_text ); ?>
									<?php endif; ?>
								</div>
							</div>	
							<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>			
					</div>	
					<div class="mywoo-spos-oplati">
						<h3 class="checkout-title">Оплата товара</h3>
						<div id="payment" class="woocommerce-checkout-payment"> 
							<?php if ( WC()->cart->needs_payment() ) : ?>
								<ul class="wc_payment_methods payment_methods methods">
									<?php
									if ( ! empty( $available_gateways ) ) {
										foreach ( $available_gateways as $gateway ) {
											wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
										}
									} else {
										echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : esc_html__( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>'; // @codingStandardsIgnoreLine
									}
									?>
								</ul>

							<?php endif; ?>

							<div class="form-row place-order">
								<noscript>
									<?php
									/* translators: $1 and $2 opening and closing emphasis tags respectively */
									printf( esc_html__( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ), '<em>', '</em>' );
									?>
									<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e( 'Update totals', 'woocommerce' ); ?>"><?php esc_html_e( 'Update totals', 'woocommerce' ); ?></button>
								</noscript>



								<?php echo apply_filters( 'woocommerce_order_button_html', '<button type="submit" class="button alt btn_submit disabled" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '">' . esc_html( $order_button_text ) . '</button>' ); // @codingStandardsIgnoreLine ?>

								<?php do_action( 'woocommerce_review_order_after_submit' ); ?>

								<?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>

							</div>

						</div>					
					</div>	



					<?php do_action( 'woocommerce_review_order_before_submit' ); ?>						

					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

					<?php endif; ?>

					<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
					<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>


						</form>	
					</div>
				</div>	
					<div class="mobile-checkout-separator"></div>
				</div>
				<div class="bm-checkout-container-itog-scroll">
					<h2 class="bm-checkout-container-itog__title">
						Итого
					</h2>
					<div class="bm-checkout-container-itog__count">
						<p class="bm-checkout-container-itog__count__text">
							<?php 
								$cart_count = WC()->cart->get_cart_contents_count(); 

								function declOfNum($num, $titles) {
									$cases = array(2, 0, 1, 1, 1, 2);

									return $num . " " . $titles[($num % 100 > 4 && $num % 100 < 20) ? 2 : $cases[min($num % 10, 5)]];
								}								

								echo declOfNum($cart_count, array('товар', 'товара', 'товаров'));



							?>
						</p>				
					</div>
					<div class="bm-checkout-container-itog__info">
						<p class="bm-checkout-container-itog__info-text">Сумма заказа</p>
						<p class="bm-checkout-container-itog__info-poditog"><?php echo WC()->cart->get_cart_subtotal(); ?></p>
					</div>
					<div class="bm-checkout-container-itog__info">
						<p class="bm-checkout-container-itog__info-text">Доставка</p>
						<p class="bm-checkout-container-itog__info-poditog delivery">0</p>												
					</div>	
					<div class="bm-checkout-container-itog__info coupon">
						<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
						<p class="bm-checkout-container-itog__info-text"><?php wc_cart_totals_coupon_label( $coupon ); ?></p>
						<p class="bm-checkout-container-itog__info-poditog coupon-checkout"><?php wc_cart_totals_coupon_html( $coupon ); ?></p>
						<?php endforeach; ?>
					</div>										
					<div class="bm-checkout-container-itog-full-price">
						<p class="bm-checkout-container-itog-full-price__text">
							<?php 
								 echo WC()->cart->get_cart_total();
							?>
						</p>
					</div>
					<div class="bm-checkout-container-itog-purchase">
						<p class="bm-checkout-container-itog-purchase-button btn_submit disabled">Оформить заказ</p>							
					</div>
					
					
					<div class="bm-checkout-help">
						<p class="bm-checkout-help__title">
							Необходимо заполнить
						</p>
						<p class="bm-checkout-help__data">Личные данные</p>								
					</div>
					<?php wc_get_template( 'checkout/terms.php' ); ?>
				</div>		

			</div>

	</div>
</div>
<style>
	.coupon input:focus{color: #fff;}
	.mywoo-product-itog-all{
		display: flex;
		flex-direction: column;
	}
	.variations-test{
		padding: 0 !important;
		padding-top: 5px !important;
		border-top: 1px solid #252525;
		margin-top: 10px;
	}
	.variations-test p{margin-bottom: 0;}
	.checkout-title-container{
		display: flex;
		align-items: flex-end;
		margin-bottom: 30px;
	}
	.checkout-back-to-salles{
		margin-left: 25px;
		font-size: 16px;
		color: #cbcbcb;
		text-decoration: none;
	}
	.checkout-back-to-salles:hover{
		text-decoration: none;
		color: #E62215;
	}
	.bm-checkout-help__title::before{
		content: "!";
		margin-right: 5px;
		color: #E62215;
		font-weight: bold;
	}
	
	
	.bm-checkout-help{
		margin-top: 20px;
	}
	.bm-checkout-help__title{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 130%;
		color: #B7B7B7;		
		margin: 0;
		margin-bottom: 12px;
		text-align: center;
	}
	.bm-checkout-help__data{
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 130%;
		color: #F5F5F5;
		text-align: center;
		margin: 0;
	}
	
	.bm-checkout-container-itog__info.coupon{margin-bottom: 44px;}
	.mywoo-coupon.actions{display: none;}
	form.checkout_coupon.woocommerce-form-coupon{display: block !important;}
	.bm-checkout-container-itog-purchase-button{
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 130%;
		color: #E62215;	
		border: 1px solid #E62215;
		box-sizing: border-box;
		border-radius: 40px;
		padding: 16px 62px;
		margin: 0;
		margin-top: 15px;
		text-align: center;
		cursor: pointer;
		transition: .3s;
	}
	.my-woo-checkout-table{
		margin-top: 70px;
	}
	.bm-checkout-container-itog-purchase-button:hover{
		background: #E62215;
		color: #fff;
		transition: .3s;
	}
	.bm-checkout-container-itog-purchase-button.active{
		border: 1px solid #4DB134;
	}
	.bm-checkout-container-itog-purchase-button.active{
		background: #4DB134;
	}	
	.bm-checkout-container-itog-full-price__text{
		font-style: normal;
		font-weight: bold;
		font-size: 40px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		text-align: center;
	}
	#billing_first_name_field{
		order: 1;
	}
	#billing_phone_field{
		order: 2;
	}
	#billing_email_field{order: 3;}
	#billing_country_field{order: 4;}
	#billing_city_field{order: 5;}
	#billing_address_1_field{order: 6; margin-bottom: 0 !important;}
	#billing_kladr_id_field{order: 7;}
	#billing_to_door_address_field{order: 8;}
	
	ul#shipping_method{
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	ul#shipping_method li{
		flex-basis: 49%;
		border: 1px solid #323232;
		box-sizing: border-box;
		border-radius: 6px;		
		padding: 32px;

		background: #272727;
	}

	.place-order{
		display: none;
	}
	.bm-checkout-container-itog__info-poditog{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		color: #FFFFFF;
		flex-basis: 50%;
		text-align: right;
		margin: 0;
	}
	.bm-checkout-container-itog__info-text{
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: 130%;
		text-align: right;
		color: #CBCBCB;		
		flex-basis: 50%;
		text-align: left;
		margin: 0;
	}
	.bm-checkout-container-itog__info{display: flex;margin-bottom: 22px;}
	.bm-checkout-container-itog__count__text{
		font-style: normal;
		font-weight: 500;
		font-size: 28px;
		line-height: 130%;
		color: #6D6D6D;		
		text-align: center;
		margin-bottom: 44px;
	}
	.bm-checkout-container-itog-scroll{
		border: 1px solid #323232;
		box-sizing: border-box;
		border-radius: 6px;	
		padding: 35px 80px;
		height: fit-content;
		position: sticky;
		top: 6em;		
	}
	.bm-checkout-container-itog__title{
		font-style: normal;
		font-weight: bold;
		font-size: 38px;
		line-height: 1;
		margin-bottom: 10px;
		color: #FFFFFF;		
		text-align: center;
	}
	.payment_box{
		margin-top: 20px;
		display: block !important;
		margin-left: 15px;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		line-height: 140%;
		color: #CBCBCB;	
		margin-top: 10px;
	}
	ul.wc_payment_methods{
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		margin-bottom: 0;
	}
	.wc_payment_method{
		flex-basis: 49%;
		border: 1px solid #323232;
		box-sizing: border-box;
		border-radius: 6px;		
		padding: 32px;
		margin-bottom: 0;
		background: #272727;
	}
	@media screen and (max-width: 1600px){
		.wc_payment_method{
			margin-bottom: 20px !important; 
		}
	}
	.wc_payment_method label{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 1;
		color: #FFFFFF;		
	}
	#shipping_method li .woocommerce-Price-amount.amount{
		color: #299BEC;
	}
	ul#shipping_method{
		margin: 0;
	}
	.my-woo-checkout-delivery{
		margin-bottom: 25px;
	}
	.mywoo-spos-oplati{
		margin-top: 70px;
	}
	ul#shipping_method li label{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 1;
		color: #FFFFFF;			
	}
	.input-radio:checked+label::before, .mywoo-radio:checked + label::before{
		border-color: #299BEC !important;
		background-color: #299BEC !important;
		background-clip: content-box !important;
		border: 1.5px solid #299BEC;
		padding: 5px !important;
		width: 20px !important;
		height: 20px !important;	
		background-image: none !important;
	}
	.input-radio:not(:disabled):not(:checked)+label:hover::before, .mywoo-radio:not(:disabled):not(:checked)+label:hover::before{
		border-color: #299BEC !important;
	}
	.input-radio+label::before, .mywoo-radio+label::before{
		padding: 9px !important;
	}
	#organisation_field .woocommerce-input-wrapper label{
		font-style: normal;
		font-weight: normal;
		font-size: 19px;
		line-height: 130%;
		color: #FFFFFF;		
	}
	#organisation_field .woocommerce-input-wrapper label.active{
		color: #299BEC;
	}
	.checkout.woocommerce-checkout{
		flex-direction: column;
	}
	#organisation_field .woocommerce-input-wrapper label{margin-right: 40px; margin-bottom: 0;}
	
	
	
	#organisation_field .woocommerce-input-wrapper{
		flex-direction: row;
		justify-content: flex-start;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow{
		height: 76px !important;
	}
	.form-row{
		margin-top: 0;
	}
	.woocommerce-checkout article, .woocommerce-checkout{
		background: transparent;
	}
	.woocommerce-checkout #page{
		background: #111;
	}
	.woocommerce-checkout .form-row input, textarea, .woocommerce-checkout .select2-selection{
		border: 1px solid #323232;
		box-sizing: border-box;
		border-radius: 6px;		
		background: #272727 !important;
		padding: 24px 26px 26px 26px !important;
	}
	.select2-selection{
		height: 76px !important;
	}
	.coupon button{
		width: 25%;
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 130%;
		color: #299BEC;	
		border: 1px solid #299BEC;
		box-sizing: border-box;
		border-radius: 40px;	
		background: none;
		transition: .3s;
	}
	.coupon button:hover{
		background: #299BEC;
		color: #fff;
		transition: .3s;
	}
	.coupon input{
		width: 75%;
		border: 1px solid #323232;
		box-sizing: border-box;
		border-radius: 6px;		
		background: none;
	}
	.mywoo-cart-coupon-shiping .mywoo-coupon.actions{
		flex-basis: unset;
		width: 75%;
	}
	.mywoo-cart-coupon-shiping{
		justify-content: flex-start;
		align-items: center;
		margin: 40px 0 0 0;
	}
	.mywoo-cart-coupon-shiping-have-coupon{
		margin-right: 25px;
	}
	.mywoo-cart-coupon-shiping-have-coupon__text{
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 130%;
		color: #299BEC;		
		margin: 0;
		cursor: pointer;
	}
	.bm-checkout-cart{
		padding: 30px 30px 50px 30px;
		background: #1e1e1e;
		border-radius: 20px;		
	}
	.woocommerce-bill-back{
		padding: 40px 30px 30px 30px;
		background: #1e1e1e;
		border-radius: 20px;		
	}
	.woocommerce-shipping-totals.shipping{
		padding: 30px;
		background: #1e1e1e;
		border-radius: 20px;			
	}
	.woocommerce-checkout-payment{
		padding: 30px;
		background: #1e1e1e;
		border-radius: 20px;		
	}
	
	
	
	#personal-info{
		margin-top: 70px;
	}
	.mywoo-product-content{
		margin-bottom: 30px;
		border-bottom: 1px solid #3a3a3a;
		padding-bottom: 25px;
	}
	.mywoo-product-remove a:hover{
		background: none;
	}
	.mywoo-product-remove a img{
		max-width: unset;
	}
	.mywoo-product-remove a{
		background: none;
	}
	.card-item-all{
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		line-height: 130%;
		color: #FFFFFF;		
		margin: 0;
		margin-bottom: 30px;
	}
	.card-item-all:last-child{margin-bottom: 0;}
	.mywoo-product-quantity .input-text.qty.text{
		background: none;
	}
	.mywoo-product-quantity .qty_button.minus, .mywoo-product-quantity .qty_button.plus{
		background: none;
		color: #898989;
	}
	.mywoo-product-name__link{
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 130%;
		color: #CBCBCB;		
	}
	.mywoo-product-name-container{
		display: flex;
		flex-direction: column !important;
		align-items: flex-start !important;
	}
	.mywoo-product-name-name{margin-top: 10px;}
	.mywoo-product-name-price, .mywoo-product-name-name{padding: 0 !important;}
	.mywoo-product-name-price span{
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		line-height: 130%;
		color: #FFFFFF;		
	}

	.mywoo-product-content div{border: none;}
	.bm-checkout-container-itog{display: flex; justify-content: space-between;}
	.bm-checkout-container-main{
		flex-basis: 65%;
	}
	.bm-contacts-breadcrumb{margin-bottom: 50px;}
	.bm-checkout-container-itog-scroll{
		flex-basis: 30%;
	}
	.woocommerce-shipping-totals.shipping td{font-size: 17px;}
	.bm-checkout-container-main__title{
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		line-height: 1;
		color: #FFFFFF;	
		margin: 0;
	}
	.woocommerce-billing-fields h3, .checkout-title, .my-woo-checkout-delivery{font-weight: bold;font-size: 36px; margin-bottom: 30px;}
	.woocommerce-checkout .form-row input{
		border-width: 1px !important;
	}
	.woocommerce-privacy-policy-link{text-decoration: none;}
	.woocommerce-remove-coupon{
		font-size: 16px;
		color: #299BEC;
	}
	.woocommerce-remove-coupon:hover{
		text-decoration: none;
	}
	.bm-checkout-container-itog__info-poditog.coupon-checkout .woocommerce-Price-amount.amount{margin-left: 5px;}
	.select2-container--default .select2-selection--single .select2-selection__arrow b{
		background: url(/wp-content/uploads/svg-checkout-angle.svg);
		position: absolute;
		width: 12px;
		height: 8px;
		right: 50%;
		top: 50%;
		background-repeat: no-repeat;		
		
	border-color: unset !important;
    border-style: unset !important;
    border-width: none !important;
    position: absolute;		
		
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow{
		width: 60px;
	}
	.mobile-checkout-separator{display: none;}
	@media screen and (min-width: 768px) and (max-width: 1600px){
		.bm-checkout-container-itog__info{
			width: 60%;
			margin: 0 auto 22px auto;
		}
		.woocommerce-terms-and-conditions-wrapper{
			margin: 0 auto;
			width: 80%;
			text-align: center;
		}
	}
	.mywoo-product-name-name-mobile{
		display: none !important;
	}
	@media screen and (min-width: 768px) and (max-width: 1200px){
		.mywoo-product-content{align-items: center; flex-wrap: unset !important;}
		.mywoo-product-content div{flex-basis: 20% !important;}
		.mywoo-product-name-name-mobile{text-align: center;}
	}
	@media screen and (min-width: 360px) and (max-width: 1200px){
		.mywoo-product-itog-all{flex-direction: column; padding: 0 !important; align-items: flex-start !important;}
		.mywoo-product-name{display: none !important;}
		.mywoo-product-name-name-mobile{display: block !important; padding: 0 !important;order: 2; flex-basis: 100% !important;}
		.mywoo-product-image img{max-height: unset;}
		.mywoo-product-image{
			flex-basis: 100% !important;
			order: 1;
		}
		div.quantity{padding: 0 !important;}
		.mywoo-product-remove a{
			padding: 0 !important;
		}
		.mywoo-product-itog-all{
			order: 3;
			flex-basis: 30% !important;
		}
		.mywoo-product-quantity{
			order: 5;
			flex-basis: 40% !important;
			margin-bottom: 0 !important;
			padding: 0 !important;
		}
		.mywoo-product-remove{
			order: 6;
			flex-basis: 20% !important;
		}
		.mywoo-product-name{
			order: 4;
		}
		.mywoo-product-content{
			flex-direction: row !important;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.mywoo-product-name-price span{
			font-size: 18px;
		}
		.mywoo-product-name__link{
			font-size: 18px;
		}
		.card-item-all{
			font-size: 18px;
		}
		.input-text.qty{
			font-size: 16px;
			width: 30px;
		}
		.qty_button.minus, .qty_button.plus{
			padding: 5px !important;
		}
		.mywoo-product-name-price{display: none !important;}
	}
	@media screen and (max-width: 576px){
		.bm-checkout-container-itog-purchase-button{
			width: 100% !important;
			
		}
	}
	@media screen and (max-width: 992px){	
		.payment_box{font-size: 16px;}
		.mywoo-product-content{
			margin-bottom: 20px;
		}
		.mobile-checkout-separator{
			display: block;
			background: #191919;
			width: 100%;
			height: 40px;
		}
		#organisation_field{
			margin: 20px 0;
		}
		.bm.bm-checkout-mobile{
			padding: 0 !important;
		}
		.checkout-mobile-padding{
			padding: 20px 30px;
		}
		
		.bm-checkout-container-itog{
			flex-direction: column;
		}
		.my-woo-checkout-table{
			margin-top: 0;
		}
		.bm-checkout-container-itog-purchase-button{
			width: fit-content;
			margin: 15px auto 0 auto;
			padding: 16px 34px;
		}
		.mywoo-product-content{
			flex-direction: column;
		}
		.mywoo-product-content div{
			padding: 5px 20px;
		}
		.mywoo-cart-coupon-shiping{
			align-items: flex-start;
			margin: 20px 0 5px 0;
		}
		.mywoo-coupon.actions{
			margin-top: 15px;
			width: 100% !important;
		}
		.mywoo-coupon.actions .coupon{
			flex-direction: row !important;
		}
		.coupon input{
			width: 60%;
			padding: 10px 26px;
		}
		#organisation_field .woocommerce-input-wrapper label{
			font-size: 18px;
		}
		.woocommerce-checkout .form-row input, textarea, .woocommerce-checkout .select2-selection{
			padding: 16px 26px 18px 26px !important;
		}
		ul#shipping_method li label, .wc_payment_method label{
			font-size: 18px;
			margin-bottom: 0;
		}
		.bm-checkout-container-itog__title{
			font-size: 28px;
		}
		.bm-checkout-container-itog__count__text{
			font-size: 24px;
			margin-bottom: 28px;
		}
		.bm-checkout-container-itog__info.coupon{
			margin-bottom: 28px;
		}
		.bm-checkout-container-itog-full-price__text{
			font-size: 28px;
		}
		ul#shipping_method li, .wc_payment_method{
			padding: 25px 10px;
		}
		.coupon button{
			width: 40%;
			font-size: 14px;
		}
		#organisation_field .woocommerce-input-wrapper{
			flex-direction: column;
		}
		#organisation_field .woocommerce-input-wrapper label{
			margin-bottom: 15px;
			margin-right: 0;
		}
		.woocommerce-billing-fields__field-wrapper{
			flex-direction: column;
		}
		#shipping_method{
			flex-direction: column;
		}
		.wc_payment_methods{
			flex-direction: column;
		}
		.bm-checkout-container-itog-scroll{
			padding: 35px 30px;
			margin: 30px 30px;
		}
		.bm-checkout-container-main__title{
			font-size: 28px;
		}
		.checkout-back-to-salles{font-size: 14px;}
		.woocommerce-billing-fields h3, .checkout-title, .my-woo-checkout-delivery{
			font-size: 28px;
		}
		.mywoo-cart-coupon-shiping-have-coupon__text{
			font-size: 18px;
		}
	}
	
	
	@media screen and (min-width: 992px) and (max-width: 1600px){
		.bm-checkout-container-itog{
			flex-direction: column;
		}
		.my-woo-checkout-table{
			margin-top: 0;
		}
		.bm-checkout-container-itog-purchase-button{
			width: fit-content;
			margin: 15px auto 0 auto;
		}

		.mywoo-product-content div{
			padding: 5px 20px;
		}
		.mywoo-cart-coupon-shiping{
			align-items: flex-start;
			flex-direction: column;
			margin: 20px 0 30px 0;
		}
		.mywoo-coupon.actions{
			margin-top: 15px;
			width: 100% !important;
		}
		.mywoo-coupon.actions .coupon{
			flex-direction: row !important;
		}
		.coupon input{
			width: 35%;
			padding: 10px 26px;
		}
		#organisation_field .woocommerce-input-wrapper label{
			font-size: 18px;
		}
		.woocommerce-checkout .form-row input, textarea, .woocommerce-checkout .select2-selection{
			padding: 16px 26px 18px 26px !important;
		}
		ul#shipping_method li label, .wc_payment_method label{
			font-size: 18px;
			margin-bottom: 0;
		}
		.bm-checkout-container-itog__title{
			font-size: 32px;
		}
		.bm-checkout-container-itog__count__text{
			font-size: 30px;
			margin-bottom: 28px;
		}
		.bm-checkout-container-itog__info.coupon{
			margin-bottom: 28px;
		}
		.bm-checkout-container-itog-full-price__text{
			font-size: 30px;
		}
		ul#shipping_method li, .wc_payment_method{
			padding: 25px 10px;
		}
		.coupon button{
			width: 20%;
			font-size: 14px;
		}
		#organisation_field .woocommerce-input-wrapper{
			flex-direction: column;
		}
		#organisation_field .woocommerce-input-wrapper label{
			margin-bottom: 15px;
			margin-right: 0;
		}
		.woocommerce-checkout .form-row input, textarea, .woocommerce-checkout .select2-selection{
			height: 60px !important;
		}


		.bm-checkout-container-itog-scroll{
			padding: 35px 30px;
			width: 70%;
			margin: auto;
		}
		.bm-checkout-container-main__title{
			font-size: 36px;
		}
		.woocommerce-billing-fields h3, .checkout-title, .my-woo-checkout-delivery{
			font-size: 32px;
		}
		.mywoo-spos-oplati{
			padding: 0;
		}
		.mywoo-cart-coupon-shiping-have-coupon__text{
			font-size: 18px;
		}
	}	
	@media screen and (min-width:  1200px) and (max-width: 1600px){
		.woocommerce-billing-fields, .woocommerce-organisation-fields__field-wrapper{
			width: 70%;
			margin: auto;
		}
		.mywoo-spos-oplati{
			width: 70%;
			margin: 10px auto 0 auto !important;
		}
		.my-woo-checkout-table{
			width: 70%;
			margin: 20px auto 0 auto;
		}
	}
</style>


<script type="text/javascript">
        jQuery( function( $ ) {

			
            $("#billing_phone").mask("+9 (999) 999-99-99");
			
			$('.woocommerce-remove-coupon').click(function() {
				var link = $(this).attr("href");
				window.location.replace(link);
			});
			
			$(".mywoo-cart-coupon-shiping-have-coupon__text").click(function(){
				$(".mywoo-coupon.actions").fadeIn(500);
			});
			

			$('.wc_payment_methods input').click(function(){
				if ($(this).is(':checked')){
					$(this).prop('checked', true);
					$(this).addClass("active");
				} else {
					$(this).prop('checked', false);
					$(this).removeClass("active");
				}
			});			
			
						
        });

	
(function( $ ){

$(function() {
	var btn = $(".bm-checkout-container-itog-purchase").find('.btn_submit');
  $('.rf').each(function(){
    // Объявляем переменные (форма и кнопка отправки)
	var form = $(this);
        

    // Добавляем каждому проверяемому полю, указание что поле пустое
	form.find('.rfield').addClass('empty_field');

    // Функция проверки полей формы
    function checkInput(){
      form.find('.rfield').each(function(){
        if($(this).val() != ''){
          // Если поле не пустое удаляем класс-указание
		$(this).removeClass('empty_field');
		$(this).css({'border-color':'#4DB134'});
        } else {
          // Если поле пустое добавляем класс-указание
		$(this).addClass('empty_field');
		//$(this).css({'border-color':'#E62215'});	
        }
      });
    }
	
    // Функция подсветки незаполненных полей
    function lightEmpty(){
      form.find('.empty_field').css({'border-color':'#E62215'});
      // Через полсекунды удаляем подсветку
      /*setTimeout(function(){
        form.find('.empty_field').removeAttr('style');
      },500);
	  */
    }

    // Проверка в режиме реального времени
    setInterval(function(){
      // Запускаем функцию проверки полей на заполненность
	  checkInput();
      // Считаем к-во незаполненных полей
      var sizeEmpty = form.find('.empty_field').size();
      // Вешаем условие-тригер на кнопку отправки формы
      if(sizeEmpty > 0){
        if(btn.hasClass('disabled')){
		  btn.css({'border-color':'#E62215'});
		  $(".bm-checkout-container-itog-scroll").css('border-color','#FFD9D9');	
		  
		  $('footer').append('<style>.bm-checkout-help__title:before{content: "!";}</style>');	
          return false;
        } else {
		  btn.css({'border-color':'#E62215', 'background': '#E62215'});
		  $(".bm-checkout-container-itog-scroll").css('border-color','#323232');				
          btn.addClass('disabled');

		  $('footer').append('<style>.bm-checkout-help__title:before{content: "!";}</style>');
        }
      } else {
        btn.removeClass('disabled');
		btn.css({'border-color':'#4DB134', 'background': '#4DB134', 'color': '#fff'});
		$(".bm-checkout-container-itog-scroll").css('border-color','#4DB134');  
		$('footer').append('<style>.bm-checkout-help__title:before{content: url("/wp-content/uploads/angle-done-check.svg");}</style>');
      }
    },500);

    // Событие клика по кнопке отправить
    btn.click(function(){
      if($(this).hasClass('disabled')){
        // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
		lightEmpty();
		  
		  
		var elementClick = "#personal-info";
		var destination = $(elementClick).offset().top;
		jQuery("html:not(:animated),body:not(:animated)").animate({
		  scrollTop: destination
		}, 800);
			
		  		  
		  
		  
        return false
      } else {
        // Все хорошо, все заполнено, отправляем форму
        $( "#place_order" ).trigger( "click" );
      }
    });
  });
});

})( jQuery );	
	
	
		$('#place_order').on('click', function(){yaCounter51273103.reachGoal('target'); return true;});
</script>































