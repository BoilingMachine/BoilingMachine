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


	<?php  

	$images = get_field('galereya_izobrazhenij_bm');
	$size = 'full';
	if( $images ){?>
<div class="bm-post-gallery">
	<div class="bm-adaptive bm-margin bm">
		<div class="uk-position-relative" uk-slideshow>

			<ul class="uk-slideshow-items">
				<?php foreach( $images as $image ): ?>
				<li>
					<img src="<?php echo $image['url']; ?>" alt="">
				</li>						
				<?php endforeach; ?>
			</ul>

			<div class="uk-position-bottom-center uk-position-small">
				<ul class="uk-thumbnav">
					<?php foreach( $images as $key=>$image ): ?>
						<li uk-slideshow-item="<?php echo $key ?>"><a href="#"><img src="<?php echo $image['url']; ?>" width="100" alt="" ></a></li>
					<?php endforeach; ?>							
				</ul>
			</div>

		</div>
	</div>	
</div>

	<?php } ?>	