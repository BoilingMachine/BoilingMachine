<?php get_header(); ?>
<?php global $product; ?>
<div class="bm-peref">
	<div class="bm-adaptive bm-margin bm">
		<?php do_action( 'woocommerce_before_main_content' ); ?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="woocommerce-products-header__title page-title mywoo-page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>
		
		<div class="bm-peref-subcategories">
			<?php
				$args = array(
					'taxonomy' => 'product_cat',
					'parent' => '97',
					'exclude' => '98, 18, 53,376,506',        
				);

				$product_categories = get_terms($args);

				foreach ($product_categories as $product_category) {
					$thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true); # для вывода изображений 
					$image = wp_get_attachment_url( $thumbnail_id );
					?>
					<div class="bm-peref-subcategories-link">
						<div class="bm-pref-subcategory-image">
							<a href="<?php echo get_term_link($product_category) ?>"><img src=" <?php echo $image; ?> "></a>
						</div>
						<h3 class="bm-peref-subcategories-link__title">
							<a href="<?php echo get_term_link($product_category) ?>">
								<?php echo $product_category->name; ?>
							</a>
						</h3>
					</div>					
				<?php } ?>
		</div>
		<!--
		<div class="peref-container">
			<?php
				$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$loop = new WP_Query( array(
				'post_type' => 'product',
				'posts_per_page' => get_field('20'),
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'product_cat' => 'audio,oborudovanie-dlya-strima,klaviatury',
				'paged'           => $current_page 
				));

				while ( $loop->have_posts() ): $loop->the_post(); ?>
				<div class="peref-product">								
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
					echo "<div class='mywoo-prod-price'>";
					do_action( 'woocommerce_after_shop_loop_item_title' );
					echo "</div>";
					echo "<div class='mywoo-prod-add-to-cart'>";
					echo '<a href="' . esc_url( $link ) . '" class="mywoo-category-product">Подробнее</a>';	
					echo "</div>";
				?>
				</div>
				
				<?php endwhile; wp_reset_postdata(); ?>
				
		</div>	
		<?php the_posts_pagination();	 ?>
		-->
	</div>
</div>

<?php get_footer(); ?>