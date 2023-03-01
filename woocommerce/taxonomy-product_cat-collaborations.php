<?php get_header( 'shop' ); ?>
<link rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/css/page-computers.css">
<div class="mywoo-collaborations-section">
	<div class="bm-adaptive bm-margin bm">
		<?php do_action( 'woocommerce_before_main_content' ); ?>
	</div>
	<div class="collaborations-banner">
		<video muted autoplay playsinline loop class="pc-banner">
			<source src="/wp-content/uploads/bm_feat_v2.mp4">
		</video> 
		<video muted autoplay playsinline loop class="mobile-banner">
			<source src="/wp-content/uploads/mobile_banner_bm_feat.mp4">
		</video>		
	</div>
	<div class="bm-adaptive bm-margin bm">
		
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="woocommerce-products-header__title page-title mywoo-page-title">ПК как у блогера</h1>
		<?php endif; ?>
		<div class="collaborations-container">
			<div class="collaborations-container-boxes">
				<?php 
					$args = array(
						'taxonomy' => 'product_cat',
						'parent' => '468',
						'orderby'      => 'title',

						'include' => '608,609,610,469',								 
					);	

					$product_categories = get_terms($args);

					foreach ($product_categories as $product_category){
						$thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
						$image = wp_get_attachment_url($thumbnail_id); ?>
				<div class="mywoo-landong-collaborations-page-category-container">
					<div class="mywoo-landong-collaborations-page-category">
						<div class="mywoo-subcatedories-collaborations-img">							
							<a href="<?php echo get_term_link($product_category) ?>">
								<?php
								echo '<img alt="" src="'.$image.'" />';	
								?>
							</a>						
						</div>
						<div class="mywoo-subcatedories-collaborations-title">
							<h3 class="bm-peref-collabs-link__title">
								<a href="<?php echo get_term_link($product_category) ?>">
									<?php echo $product_category->name; ?>
								</a>
							</h3>										
						</div>					
					</div>					
				</div>


				<?php } ?>				
			</div>
		</div>

			

	</div>
</div>	

<style>
	
	.mywoo-subcatedories-collaborations-img:hover{
		border: 2px solid #343434;
		transition: .3s;
	}
	.mywoo-subcatedories-collaborations-img{
		overflow: hidden;
		transition: .3s;
	}
	.mywoo-subcatedories-collaborations-img img{
		transition: .3s;
	}
	.mywoo-subcatedories-collaborations-img img:hover{
		transition: .3s;
		transform: scale(1.05);
	}
	@media screen and (max-width: 576px){
		.mywoo-landong-collaborations-page-category-container{
			flex-basis: 100% !important;
		}	
		.mywoo-landong-collaborations-page-category{
			padding: 0 !important;
		}	
		.mywoo-subcatedories-collaborations-title{
			margin-top: 10px !important; 
		}
		.collaborations-container-boxes{
			max-width: 75%;
			margin: 0 auto;
		}
		.bm-peref-collabs-link__title{
			margin-bottom: 40px;
		}
		.bm-peref-collabs-link__title a{
			font-size: 22px !important;
		}
	}
	@media screen and (max-width: 1200px){
		.pc-banner{display: none !important;}
		.mobile-banner{display: block !important;}
		.mywoo-collaborations-section{
			margin-bottom: 50px !important;
		}
	}
	.mobile-banner{display: none;}
	.collaborations-banner{
		text-align: center;
		margin-bottom: 70px;
	}
	.mywoo-page-title{
		margin-top: 30px; 
	}
	#page{
		background: #111 !important;
	}
	.bm-peref-collabs-link__title{
		text-align: center;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		line-height: 130%;
		color: #FFFFFF;		
	}
	.bm-peref-collabs-link__title a{
		font-style: normal;
		font-weight: 500;
		font-size: 25px;
		line-height: 130%;
		color: #FFFFFF;			
	}
	.mywoo-collaborations-section{
		margin-bottom: 100px;
	}
	.bm-peref-collabs-link__title a:hover{
		text-decoration: none;
		color: #FFFFFF;
	}
	.mywoo-subcatedories-collaborations-title{
		margin-top: 25px;
	}
	.mywoo-subcatedories-collaborations-img img{
		max-height: 530px;
		padding-top: 30px;
	}
	.mywoo-subcatedories-collaborations-img{
		max-height: 530px;		
		background: linear-gradient(180deg, #161616 0%, #222222 100%), #111111;
		border: 2px solid #222222;
		box-sizing: border-box;
		border-radius: 32px;		
	}
	.mywoo-landong-collaborations-page-category{
		padding: 15px;
	}
	.mywoo-landong-collaborations-page-category-container{
		flex-basis: 30%;
	}
	.collaborations-container-boxes{
		display: flex;
		flex-wrap: wrap;
	}
	.collabs-container{
		padding-top: 35px;
	}
	.mywoo-computers-collab-title{
		text-align: center;
		font-size: 44px;
		color: #fff;
		font-weight: bold;
	}
	.collabs .mywoo-subcatedories-img{
		height: 450px;
		background: url(/wp-content/uploads/svet.png) !important;
		background-position: center !important;
		background-repeat: no-repeat !important;
		background-size: contain !important;
	}
	.collabs .mywoo-subcatedories-img img{
		max-height: 440px;
	}
	.mywoo-landong-computers-page-category{
		position: relative;
	}
	.infl-banner{
		position: absolute;
		left: 5%;
		top: 5%;
		max-width: 170px;
	}
</style>
<?php get_footer( 'shop' ); ?>