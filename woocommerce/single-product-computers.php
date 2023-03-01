<?php get_header( 'shop' ); ?>
<?php global $product; ?>

		

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php 
				if ($product->is_type( 'variable' )){
					wc_get_template_part( 'content', 'singlecomputernew-variable' );
				}else{
					wc_get_template_part( 'content', 'singlecomputernew' );
				}
			?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>





<?php get_footer( 'shop' ); ?>