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
		<?php the_field("tekstovoe_soderzhimoe"); ?>
	</div>
	<style>
		.bm-post-test img{
			border-radius: 30px;
		}
		.bm-post-test{
			margin-bottom: 20px;
			max-width: 1080px;
			margin-left: auto;
			margin-right: auto;
		}

		@media screen and (min-width: 768px){
			.bm-post-test p{
				font-size: 20px;
				line-height: 170%;
			}	
			.bm-post-test p img{
				margin-top: 50px;
				margin-bottom: 50px;
			}
			.bm-post-test h2{
				margin-top: 70px;
			}
			.bm-post-test ul{
				font-size: 20px;
				line-height: 170%;
			}			
		}
		@media screen and (max-width: 768px){
			.bm-post-test p{
				font-size: 16px;
			}		
			.bm-post-test p img{
				margin-top: 30px;
				margin-bottom: 30px;
			}	
			.bm-post-test h2{
				margin-top: 50px;
			}	
			.bm-post-test ul{
				font-size: 16px;
				line-height: 170%;
			}				
		}
	</style>
	