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

	<div class="bm-post-test">
		
		<?php 
			$tit = get_field("video_youtube");
		
			if ( $tit  ){ ?>
				
				<div class="bm-post-video-youtube">
					<?php the_field("youtube_video"); ?>
				</div>
					
			<?php }else{ ?>
		
				<div class="bm-post-video-youtube">
					<video>
						<source src="<?php the_field('video_s_sajta') ?>" type="video/mp4">
					</video>
				</div>
			<?php } ?>
	</div>


	