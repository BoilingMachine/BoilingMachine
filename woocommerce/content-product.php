<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<li <?php wc_product_class( '', $product ); ?>>
<?php
	$link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
	do_action( 'woocommerce_before_shop_loop_item' );
	echo "<div class='mywoo-prod-img'> ";
	do_action( 'woocommerce_before_shop_loop_item_title' );
	echo "</div>";
	echo "<div class='mywoo-prod-title'>";
	do_action( 'woocommerce_shop_loop_item_title' );
	echo "</div>";
	do_action( 'woocommerce_after_shop_loop_item' );
	echo "<div class='mywoo-prod-cok'>";
		echo "<div class='mywoo-prod-price'>";
		do_action( 'woocommerce_after_shop_loop_item_title' );
		echo "</div>";
		echo "<div class='mywoo-prod-add-to-cart catalog-product'>";
						 
		do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); 
		echo "</div>";

				
	echo "</div>";
?>
</li>
