<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<div class="bm-adaptive bm-margin bm">
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="woocommerce-products-header__title page-title mywoo-page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>
	
	<div class="bm-archive-categories-tabs">
		<div class="bm-peref-subcategories">
			<?php
				$args = array(
					'taxonomy' => 'product_cat',
					'parent' => '97',
					'include' => '426, 52, 506, 22, 58, 503, 502, 504, 501, 505, 625',        
				);

				$product_categories = get_terms($args);

				foreach ($product_categories as $product_category) {
					?>
					<div class="bm-peref-subcategories-link">
						<h3 class="bm-peref-subcategories-link__title">
							<a href="<?php echo get_term_link($product_category) ?>">
								<?php echo $product_category->name; ?>
							</a>
						</h3>
					</div>					
				<?php } ?>
			<?php
				$args = array(
					'taxonomy' => 'product_cat',
					'parent' => '55',
					'include' => '503, 502, 504, 501, 505',        
				);

				$product_categories = get_terms($args);

				foreach ($product_categories as $product_category) {
					?>
					<div class="bm-peref-subcategories-link">
						<h3 class="bm-peref-subcategories-link__title">
							<a href="<?php echo get_term_link($product_category) ?>">
								<?php echo $product_category->name; ?>
							</a>
						</h3>
					</div>					
				<?php } ?>			
		</div>		
	</div>
	
	<div class="bm-product-arvhive-container">
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}
	
	woocommerce_product_loop_end();
	
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	/*do_action( 'woocommerce_after_shop_loop' );*/
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
	</div>
</div>

<style>

	.bm-peref-subcategories-link{
		margin: 20px 8px;
		padding: 14px 20px;
		border-radius: 15px;
		border: 2px solid rgba(37,37,37,.5);
		flex-basis: 10.5%;
		text-align: center;
		transition: 0.5s;
		background: #1D1D1D;
		display: flex;
		flex-direction: column;
		justify-content: space-between;		
	}
	.bm-peref-subcategories{
		white-space: nowrap;
		flex-wrap: nowrap;
		justify-content: flex-start;		
	}
	.bm-peref-subcategories-link__title a{
		font-size: 18px;
		font-weight: 500;
	}
	.bm-peref-subcategories-link:hover{
		transform: none;
		border: 2px solid #fb1b1b;
	}
	@media screen and (max-width: 1600px){
		.bm-peref-subcategories{
			white-space: nowrap;
			overflow-x: scroll;
			flex-wrap: nowrap;
			justify-content: flex-start;
			-webkit-overflow-scrolling: touch;
		}		
	}
</style>


<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );

