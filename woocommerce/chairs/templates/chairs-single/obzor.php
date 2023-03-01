<?php 		 
	$post_object = get_field('kontent');
	if($post_object != null){
		$post = $post_object;
		setup_postdata( $post ); 					
		$obzor = apply_filters('the_content', $post->post_content);	
		if ( $obzor != null ):	
?>
<div class="chair-review">
	<div class="tab-container-head" id="obzor_text">
		<h2 class="tab-container-head__title">
			<?php the_title(); ?>
		</h2>
	</div>
	<div class="chairs-content-obzor">
		<div class='text_read'>
			<?php echo $obzor; ?>
		</div>	
		<?php
			wp_reset_postdata();				
		?>					
	</div>
</div>	
<?php endif; ?>
<?
	}

?>
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
		    .obzor_video{
		        width: 100%;
		        height: 600px;
		    }
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
		    .obzor_video{
		        width: 100%;
		        height: 300px;
		    }
			.bm-post-test p{
				font-size: 18px !important;
			}
			.bm-post-test p img{
				margin-top: 30px;
				margin-bottom: 30px;
			}
			.bm-post-test h2{
				margin-top: 50px;
				font-size: 24px !important;
			}
			.bm-post-test ul{
				font-size: 16px;
				line-height: 170%;
			}
		}
	</style>