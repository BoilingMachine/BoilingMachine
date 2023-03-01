<?php
/*
 * Template name: Проекты
 * Template post type: post
 */
?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boiling_machine
 */
get_header();


?>
<div class="bm-adaptive bm-margin bm">
	<div class="bm-contacts-breadcrumb">
		<?php the_breadcrumb() ?>
	</div>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="bm-proekty-section-1">
			<div class="bm-proekty-section-1-image">
				<?php boiling_machine_post_thumbnail(); ?>
			</div>
			<div class="bm-proekty-section-1-content">
				<h1 class="bm-proekty-section-1-content__title"><?php the_title(); ?></h1>
				<p class="project-description"> <?php the_field('kratkoe_opisanie_dlya_pervoj_sekczii'); ?> </p>
				<a href="<?php the_field('ssylka_na_video_dlya_pervoj_sekczii'); ?>" target="_blank"> Перейти на канал </a>
			</div>
		</div>
		<div class="cart-line"></div>
		<div class="bm-proekty-section-1 section2">
			<div class="bm-proekty-section-1-content">
				<h2 class="bm-proekty-section-1-content__title">Задача</h2>
				<p class="project-description"> <?php the_field('opisanie_zadachi'); ?> </p>
			</div>
			<div class="bm-proekty-section-1-image">
				<img src=" <?php the_field('izobrazhenie_vo_vkladke_zadachi'); ?> " style="margin-right: 0;">
			</div>			
		</div>
		<div class="cart-line"></div>
		<div class="bm-proekty-section-1 section3">
			<div class="bm-proekty-section-1-image">
				<img src=" <?php the_field('izobrazhenie_dlya_dizajna'); ?> " style="margin-left: 0;">
			</div>			
			<div class="bm-proekty-section-1-content">
				<h2 class="bm-proekty-section-1-content__title">Дизайн</h2>
				<?php the_field('opisanie_dlya_dizajna'); ?>
				<h2 class="bm-proekty-section-1-content__title">Технические характеристики</h2>
				<div class="bm-proekty-section-konfig-content-text-config">
					<p class="bm-proekty-section-konfig-content-text-config__text mobile"><span>Видеокарта: &nbsp;</span> <?php the_field('videokarta'); ?></p>
					<p class="bm-proekty-section-konfig-content-text-config__text mobile"><span>Процессор: &nbsp;</span> <?php the_field('proczessor'); ?></p>
					<p class="bm-proekty-section-konfig-content-text-config__text mobile"><span>Материнская плата: &nbsp;</span> <?php the_field('materinskaya_plata'); ?></p>
					<p class="bm-proekty-section-konfig-content-text-config__text mobile"><span>Оперативная память: &nbsp;</span> <?php the_field('operativnaya_pamyat'); ?></p>
					<p class="bm-proekty-section-konfig-content-text-config__text mobile"><span>Твердотельный накопитель: &nbsp;</span> <?php the_field('tverdotelnyj_disk'); ?></p>
					<p class="bm-proekty-section-konfig-content-text-config__text mobile"><span>Жесткий диск: &nbsp;</span> <?php the_field('zhestkij_disk'); ?></p>
					<p class="bm-proekty-section-konfig-content-text-config__text mobile"><span>Блок питания: &nbsp;</span> <?php the_field('blok_pitaniya'); ?></p>
				</div>				
			</div>			
		</div>	
		<div class="cart-line"></div>	
		<?php if (get_field('video_s_youtube')){?>
		<div class="bm-proekty-section-konfig-video">
			<h2 class="bm-proekty-section-konfig-title bm-proekty-section-konfig-title-video">Видео-обзор</h2>
			<div class="video-youtube">
				<?php the_field('video_s_youtube'); ?>
			</div>
		</div>
		<?php } ?>
		<div class="bm-proekty-section-gallery">
			<h2 class="bm-proekty-section-gallery-title">Фотогалерея</h2>				
		</div>		
		<?php 

		$images = get_field('galereya-proekty');
		$size = 'full'; // (thumbnail, medium, large, full или произвольный размер)
		?>
		<div uk-slider="" class="uk-slider">
			<div class="uk-position-relative">
				<div class="uk-slider-container">
					<div class="uk-slider-items uk-grid uk-grid-small" uk-grid="" uk-lightbox="" >
						<?
						if( $images ): ?>
							        <?php foreach( $images as $image ): ?>
							            <div class="uk-width-3-4 uk-child-width-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4xl uk-active uk-first-column uk-slider-padding" tabindex="-1" style="">
						    				<div class="uk-grid uk-grid-small uk-slider-flex projects-gallery-slide" uk-grid="" style="height: 100%;">
						    					<a href="<?php echo $image['url']; ?>" class="projects-gallery">
							            		<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
							            	</a>
							            	</div>
							        	</div>
							        <?php endforeach; ?>					    
						<?php endif; ?>
					</div>
				</div>	
			</div>
		</div>
				
		
		
		
		
		
		
		<?php  
			$tovary = get_field('tovary');
		
			if( $tovary ){
		?>
			<div class="project-products">
				<h2 class="bm-computer-landing-section6-content__title">
					Купить
				</h2>
				<div class="mywoo-landing-comp mywoo-landing-page-computers-container">
					<?php echo $tovary; ?>
				</div>				
			</div>

		<?php
			}
		?>
		<?php 
			if ( get_field('forma_obratnoj_svyazi') ){ 
				
				the_field("forma_obratnoj_svyazi");
				
			}
		?>
	</article>
</div>


<style>
	@media screen and (max-width: 576px){
		.bm-proekty-section-1-content__title{font-size: 28px;margin-bottom: 20px;}
		.bm-proekty-section-1-content p{font-size: 16px; margin-bottom: 25px;}
		.bm-proekty-section-1-content a{font-size: 16px; align-items: center;}
		.bm-proekty-section-1-content a::before{height: 36px;width: 36px;}
		.bm-proekty-section-konfig-content-text-config__text.mobile{
			font-size: 16px !important;
			display: flex;
			flex-direction: column;
		}
		.bm-proekty-section-konfig-content-text-config__text.mobile span{
			margin-bottom: 10px;
		}
		.video-youtube{
			height: 200px;
		}
	}
	@media screen and (min-width: 576px) and (max-width: 768px){
		.bm-proekty-section-1-content__title{font-size: 28px;margin-bottom: 20px;}
		.bm-proekty-section-1-content p{font-size: 18px; margin-bottom: 25px;}
		.bm-proekty-section-1-content a{font-size: 18px; align-items: center;}
		.bm-proekty-section-1-content a::before{height: 36px;width: 36px;}
		.bm-proekty-section-konfig-content-text-config__text.mobile{
			font-size: 18px !important;
			display: flex;
			flex-direction: column;
		}
		.bm-proekty-section-konfig-content-text-config__text.mobile span{
			margin-bottom: 10px;
		}
		.video-youtube{
			height: 300px;
		}
	}	
</style>

<?php
get_footer(); ?>