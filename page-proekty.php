<?php get_header(); ?>

<div class="bm-projects">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-contacts-header">
			<div class="bm-contacts-breadcrumb">
				<?php the_breadcrumb() ?>
			</div>
			
		</div>	
	</div>	
	<div class="project-page-image-banner-back">
		<div class="bm-adaptive bm-margin bm">
			<div class="project-page-image-banner">		
				<div class="project-page-image-banner-img">
					<h1 class="proekty-title"><?php the_title('') ?></h1>
					<p class="project-page-subtitle">В данном разделе мы собрали наши уникальные игровые компьютеры, созданные по заказу известных личностей. Наши возможности безграничны и каждое наше творение - это высшее искусство компьютерных технологий. </p>
				</div>
				<div class="project-page-image-banner-text">
					
				</div>						
			</div>
		</div>		
	</div>

	<div class="bm-adaptive bm-margin bm">	
		<div class="bm-projects-container">
			<div class="projects-container">
				<?php 
				global $wp_query;				
				
				$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				
				$params = array(
					'post_type' => 'post',
					'posts_per_page' => 18, // количество постов на странице
					'cat'       => 95,					
					'paged'           => $current_page // текущая страница
				);
				query_posts($params);

							
				$wp_query->is_archive = true;
				$wp_query->is_home = false;
				$max_pages = $wp_query->max_num_pages;
				
				while(have_posts()): the_post();?>
					<?php get_template_part('template-parts/ajax/ajax-projects'); ?>
				<?php endwhile; ?>	
				
				<?php wp_reset_postdata(); ?>
				
				<?php if ( $wp_query->max_num_pages > 1 ) { ?>
					<script> 
						var this_page = 1; 
					</script>


				<?php } ?>		
				
			</div>	
			<?php if ( $wp_query->max_num_pages > 1 ): ?>
				<div class="btn-loadmore" title="Загрузить еще"
					 data-param-posts='<?php echo serialize($wp_query->query_vars); ?>'
					 data-max-pages='<?php echo $wp_query->max_num_pages; ?>'
					 data-tpl='projects'
					 push-dom='projects-container'
				>
					<span class="fas fa-redo"></span> Загрузить ещё
				</div>			
			<?php endif; ?>
			
			
		</div>
	</div>
	<div class="projects-form">
		<div class="bm-adaptive bm-margin bm">
			<div class="contact-form">
				<h2 class="company-bm__title projects-form-title">
						Закажи свой уникальный ПК
					</h2>
				<p class="projects-form-subtitle">
					Заполните форму и наш эксперт свяжется с Вами для уточенения деталей
				</p>
				<?php echo do_shortcode('[wpforms id="332"]')   ?>
			</div>
		</div>	
	</div>
</div>
<style>
	@media screen and (min-width: 1200px) and (max-width: 1450px){
		.project-block-content{height: 100px;}
	}
	@media screen and (min-width: 992px) and (max-width: 1200px){
		.project-block .thumbnail{height: 390px !important;}
		.project-block{margin-right: 15px !important; margin-bottom: 15px !important;}
		.project-block-content{height: 100px;}
		.project-page-image-banner-back{background-position: 60% !important;}
		.project-page-subtitle{padding: unset !important;}
		.project-page-image-banner-img{width: 50%;}		
	}
	
	@media screen and (min-width: 768px) and (max-width: 992px){
		.project-block-pad{flex-basis: 50% !important;}
		.project-block{margin-right: 15px !important; margin-bottom: 15px !important;}
		.project-block-content{height: 100px;}
		.project-page-image-banner-back{background-position: 60% !important;}
		.project-page-subtitle{padding: unset !important;}
		.project-page-image-banner-img{width: 50%;}
	}
	@media screen and (max-width: 768px){
		.projects-container{flex-direction: column; }
		.project-block{margin-right: 0 !important; padding: 0;}
		.project-page-image-banner-back{background-position: 60% !important;}
		.project-page-subtitle{padding: unset !important;}
	}
	.projects-container{
		justify-content: flex-start;
	}
	.btn-loadmore:hover{
		transition: .3s;	
		background: #E30F0F;
		color: #FFFFFF;
	}
	.btn-loadmore{
		width: fit-content;
		margin: 0 auto;
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 130%;
		color: #FFFFFF;
		padding: 20px 44px;
		border: 1px solid #E30F0F;
		box-sizing: border-box;
		border-radius: 6px;
		transition: .3s;		
		cursor: pointer;
	}
	.projects-content-title__link:hover{text-decoration: none;}
	.projects-content-title__link:hover .projects-content__title{color: #fb1b1b; text-decoration: none; transition: .3s;}
	.projects-content-title__link{text-decoration: none; transition: .3s;}
	.project-page-image-banner{background: unset;}
	.project-page-image-banner-back{
		background: url(/wp-content/uploads/banner-proety-2.png);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		margin-bottom: 90px;
		min-height: 900px;
		display: flex;
		align-items: center;		
	}
	.project-block-pad{flex-basis: 33.333%;}
	.project-block .thumbnail{margin-bottom: 0; height: 500px;}
	.projects-content__title{
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 130%;
		letter-spacing: 0.01em;
		color: #EBEBEB;
	}
	.project-block{flex-basis: unset; margin-right: 30px; margin-bottom: 30px; border: unset; background: #191919;}
	.project-block-content{justify-content: center;}
	.projects-content-title{margin-bottom: 0;}
	.project-block-content{padding: 25px;}
	#page, .projects-form{background: #000;}
</style>
<?php get_footer(); ?>