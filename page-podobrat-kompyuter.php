<?php get_header(); ?>
<style>
	.main-catalog-price{background: transparent !important;}
	.main-catalog-game{background: transparent !important;}
	.main-catalog-game{border-bottom: none;}
	.main-catalog-price{padding-top: 80px;}
	.main-catalog-game{padding-bottom: 80px;}
	.page-podobrat-kompyuter-header{margin-top: 40px;}
</style>
<div class="bm-projects">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-contacts-header">
			<div class="bm-contacts-breadcrumb">
				<?php the_breadcrumb() ?>
			</div>
		</div>	
		<div class="page-podobrat-kompyuter-header">
			<ul class="nav nav-tabs">
				<li class="nav-item"> 
				  <a class="nav-link mywoo-nav-link" href="/kompyutery/">Все модели</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active mywoo-nav-link" href="/podobrat-kompyuter/">Подобрать</a>
				</li>

			 </ul>			
		</div>

		<?php get_template_part( 'templates/podobrat' ); ?>
		
		

	</div>
</div>

<?php get_footer(); ?>