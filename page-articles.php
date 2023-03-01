<?php get_header(); ?>

<div class="bm-projects">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-contacts-header">
			<div class="bm-contacts-breadcrumb">
				<?php the_breadcrumb() ?>
			</div>
			<div class="bm-contacts-title">
				<h1><?php the_title('') ?></h1>
			</div>
		</div>	
		<div class="bm-projects-bode-2">
			<div class="mywoo-computers-tabs">
				<ul class="nav nav-pills">
					<li><a href="/blog/" class="mywoo-nav-link">Новости</a></li>
					<li class="active"><a class="mywoo-nav-link active" href="/blog/articles/">Статьи</a></li>
					<li><a class="mywoo-nav-link" href="/blog/stock/">Акции</a></li>
				  </ul>				
			</div>

			  
			  <div class="tab-content">
			    <div id="home" class="tab-pane active">
					<div class="bm-projects-container">
						<div class="blog-container">
							<?php 

							$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$params = array(
								'posts_per_page' => 12, // количество постов на странице
								'cat'       => '456',					
								'paged'           => $current_page // текущая страница
							);
							query_posts($params);

							$wp_query->is_archive = true;
							$wp_query->is_home = false;

							while(have_posts()): the_post();?>
								<div class="post-container">
									<div class="post-preview-div" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-position: center; background-size: cover;">
										<a href="<?php echo get_permalink(); ?>" class="uk-position-cover"></a>
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post-mobile-preview">
									</div>
									<div class="post-meta-container">
										<div class="post-meta-title">
											<a href="<?php echo get_permalink(); ?>"><h2 class="post-meta-title__text"><?php the_title(); ?></h2></a>
										</div>
										<div class="post-meta-description">
											<a href="<?php echo get_permalink(); ?>" class="post-meta-description__text"><?php the_excerpt(); ?></a>	
										</div>
										<div class="post-meta-date">
											<p class="post-meta-date__text"><?php the_date(); ?></p>	
										</div>										
									</div>
								</div>
							<?php endwhile;

								
							?>						
						</div>	
						<?php the_posts_pagination();	 ?>
					</div>			      
			    </div>			  
			  </div>			
		</div>		

	</div>
</div>
<style>
	.bm-projects-container{
		margin-top: 20px;
	}	
	@media screen and (min-width: 1024px) and (max-width: 1400px){
		.post-preview-div{height: 400px !important;}
		.post-meta-title__text{font-size: 30px !important;}
	}
	@media screen and (max-width: 576px){
		.post-container{
			flex-direction: column;
		}
		.post-mobile-preview{display: block !important; position: relative !important;}
		.post-meta-title__text{
			font-size: 24px !important;
		}
		.post-meta-description__text{
			line-height: 160% !important;
			font-size: 16px !important;
		}
		.post-meta-container{
			margin: 15px 0 !important;
		}
		.post-meta-title{margin-bottom: 15px !important;}
		.post-meta-description{margin-bottom: 20px !important}
		.post-preview-div{margin-bottom: 10px; height: auto !important;}
		.post-meta-date__text{font-size: 14px !important}
	}
	@media screen and (min-width: 576px) and (max-width: 992px){
		.post-container{
			flex-direction: column;
		}
		.post-mobile-preview{display: block !important; position: relative !important;}
		.post-meta-title__text{
			font-size: 26px !important;
		}
		.post-meta-description__text{
			line-height: 160% !important;
			font-size: 18px !important;
		}
		.post-meta-container{
			margin: 15px 0 !important;
		}
		.post-meta-title{margin-bottom: 15px !important;}
		.post-meta-description{margin-bottom: 20px !important}
		.post-preview-div{margin-bottom: 20px;}
		.post-meta-date__text{font-size: 16px !important}		
	}
	.post-mobile-preview{
		display: none;
	}
	.post-meta-description{
		margin-bottom: 30px;
	}
	.post-container a:hover{
		text-decoration: none;
	}
	.post-container{
		display: flex;
		justify-content: space-between;
		margin-bottom: 60px;
	}
	.post-preview-div{
		flex-basis: 40%;
		height: 450px;
	}
	.post-meta-container{
		flex-basis: 55.5%;
		margin: 40px 0;
	}
	.post-preview-div{
		position: relative;
		border-radius: 10px;
	}
	.post-preview-div img{
		position: absolute;
		width: 100%;
		height: 100%;
		border-radius: 10px;
		left: 0;
		top: 0;
	}
	.post-meta-date__text{
		margin: 0;
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 130%;
		color: #888888;		
	}
	.post-meta-title{
		margin-bottom: 25px;
	}
	.post-meta-title__text{
		font-style: normal;
		font-weight: bold;
		font-size: 32px;
		line-height: 130%;
		color: #FFFFFF;		
		transition: .3s;
		margin-bottom: 10px;
	}
	.post-meta-description__text{
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 170%;
		color: #CBCBCB;
	}
	.post-meta-description__text:hover{
		color: #CBCBCB;
	}
	.post-container:hover .post-meta-title__text{
		color: #E62D28;
		transition: .3s;
	}
	.blog-container{
		flex-direction: column;
		flex-wrap: nowrap;
	}	
	
	
	
	
	#load-posts{
		width: 100%;
		text-align: center;
		margin-top: 30px;
	}
	#load-posts a{
		transition: .3s;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		line-height: 115.9%;
		color: #DF2C2C;
		padding: 14px 38px 16px 38px;
		border: 1px solid #DF2C2C;
		box-sizing: border-box;
		border-radius: 5px;
		width: fit-content;	
	}
	#load-posts a:hover{
		background: #DF2C2C;
		transition: .3s;
		text-decoration: none;
		color: #fff;
	}	
</style>




<?php 

add_action( 'wp_footer', 'artabr_lm_footer_scripts' );
function artabr_lm_footer_scripts() {

	wp_enqueue_script( 'artabr_lm_ajax', get_template_directory_uri() . '/assets/js/ajax.js', true );
	wp_enqueue_script( 'historyjs', get_template_directory_uri() . '/assets/js/history.js', true );

	// Add parameters for the JS
	global $wp_query;
	$max   = $wp_query->max_num_pages;
	$paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
	wp_localize_script(
		'artabr_lm_ajax',
		'mts_ajax_loadposts',
		array(
			'startPage'     => $paged,
			'maxPages'      => $max,
			'nextLink'      => next_posts( $max, false ),
			'i18n_loadmore' => __( ' Показать еще', 'mythemeshop' ),
			'i18n_nomore'   => __( ' Больше нет', 'mythemeshop' ),
			'i18n_loading'  => __( ' Загрузка...', 'mythemeshop' ),
		)
	);

}

?>


<?php get_footer(); ?>