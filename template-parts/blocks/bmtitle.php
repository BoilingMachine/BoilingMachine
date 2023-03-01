<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'Backimagetext';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

	<div class="bm-post-title">
		
		<?php 
			$tit = get_field("vybor_zagolovka");
			if ($tit == "H2"){ ?>
				<h2 class="bm-post-title-h2">
					<?php the_field("zagolovok_title"); ?>
				</h2>
			<?php }else{ ?>
				<h3 class="bm-post-title-h3">
					<?php the_field("zagolovok_title"); ?>
				</h3>		
			<?php } ?>
	</div>


	