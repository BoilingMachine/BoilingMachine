<?php get_header(); ?>

<?php 
	
	global $post;
	global $product;
?>



<a href="<?php echo get_post_permalink(); ?>" data-product_id="<?php echo $post->ID; ?>" rel="nofollow" class="chair-link-add-cart single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart">В корзину</a>







<?php get_footer(); ?>