<div class="chair-review">
	<div class="tab-container-head" id="reviews">
		<h2 class="tab-container-head__title otziv">
			Отзывы
		</h2>
		<?php 
			$review_count = $product->get_review_count(); 
			if ($review_count == 0 ):
		?>
		<p class="first-otziv">Будьте первым, кто оставил отзыв на "<?php echo $prod_title; ?>"</p>	
		<?php endif; ?>
	</div>
	<div class="chairs-content-cooment">
		<?php comments_template(); ?>
	</div>
</div>