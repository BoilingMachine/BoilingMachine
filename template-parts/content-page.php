<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boiling_machine
 */

?>
<?php 

if ( is_cart() ) {
	get_template_part( 'woocommerce/cart/cart' );
}else{
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<?php boiling_machine_post_thumbnail(); ?>
<!-- <div class="bm-adaptive bm-margin bm"> -->
	<div class="page-content-container">
		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'boiling_machine' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div>
<!-- </div> -->	

</article>
<?php
}

 ?>

