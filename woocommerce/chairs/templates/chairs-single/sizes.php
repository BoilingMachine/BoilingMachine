<?php if ( get_field('razmery') ): ?>
<div class="chair-review" id='razmer'>
	<div class="tab-container-head">
		<h2 class="tab-container-head__title">
			Размеры
		</h2>
	</div>
	<div class="chair-size-image" uk-lightbox>
		<a href="<?php the_field('razmery'); ?>"><img src="<?php the_field('razmery'); ?>">	</a>			
	</div>
</div>	
<?php endif; ?>