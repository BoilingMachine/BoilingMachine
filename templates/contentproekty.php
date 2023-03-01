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
				<p class=""> <?php the_field('kratkoe_opisanie_dlya_pervoj_sekczii'); ?> </p>
				<a href="<?php the_field('ssylka_na_video_dlya_pervoj_sekczii'); ?>" > <?php the_field('ssylka_na_video_dlya_pervoj_sekczii'); ?> </a>
			</div>
		</div>
		<div class="cart-line"></div>
		<div class="bm-proekty-section-1">
			<div class="bm-proekty-section-1-content">
				<h2 class="bm-proekty-section-1-content__title">Задача</h2>
				<p class=""> <?php the_field('opisanie_zadachi'); ?> </p>
			</div>
			<div class="bm-proekty-section-1-image">
				<img src=" <?php the_field('izobrazhenie_vo_vkladke_zadachi'); ?> " style="margin-right: 0;">
			</div>			
		</div>
		<div class="cart-line"></div>
		<div class="bm-proekty-section-1">
			<div class="bm-proekty-section-1-image">
				<img src=" <?php the_field('izobrazhenie_vo_vkladke_zadachi'); ?> " style="margin-left: 0;">
			</div>			
			<div class="bm-proekty-section-1-content">
				<h2 class="bm-proekty-section-1-content__title">Дизайн</h2>
				<p class=""> <?php the_field('opisanie_zadachi'); ?> </p>
			</div>			
		</div>	
		<div class="cart-line"></div>
		<div class="bm-proekty-section-konfig">
			<h2 class="bm-proekty-section-konfig-title">Конфигурация</h2>
			  <?php while ( have_rows('konfiguracziya') ) : the_row();
			    if(get_row_layout() == "konfig"): ?>
			    	<div class="bm-proekty-konfig">
			    		<div class="bm-proekty-konfig-image">
			    			<img src="<?php echo the_sub_field('izobrazhenie_konfiguraczii'); ?>">
			    		</div>
			    		<div class="bm-proekty-konfig-content">
			    			<h2 class="bm-proekty-konfig-content__title"><?php echo the_sub_field('nazvanie_konfiguraczii'); ?></h2>
			    			<p class="bm-proekty-konfig-content__text"><?php echo the_sub_field('opisanie_konfiguraczii'); ?></p>
			    		</div>
			    	</div>
			  <? endif; endwhile; ?>		
		</div>		
		<div class="cart-line"></div>
		<div class="bm-proekty-section-konfig">
			<div class="proekty-profit-container">
				<div class="proekty-profit-container-do">
					<h2 class="proekty-profit-container-posle-title">До прокачки:</h2>
					<?php the_field('konfiguracziya_do_prokachki'); ?>
				</div>
				<div class="proekty-profit-container-posle">
					<h2 class="proekty-profit-container-posle-title">После нашей прокачки:</h2>
					<?php the_field('konfiguracziya_posle_prokachki'); ?>
				</div>
			</div>		
		</div>
		<div class="cart-line"></div>
		<div class="bm-proekty-section-gallery">
			<h2 class="bm-proekty-section-gallery-title">Фотогалерея</h2>
			<div class="bm-proekty-section-gallery-container">
				<?php 
				$images = get_field('galereya-proekty');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $images ): ?>
				    
				        <?php foreach( $images as $image_id ): ?>
				            <div>
				                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
				            </div>
				        <?php endforeach; ?>
				    
				<?php endif; ?>	
			</div>		
		</div>		


















		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'boiling_machine' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'boiling_machine' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
		
	</article>
</div>
<?php
get_footer(); ?>