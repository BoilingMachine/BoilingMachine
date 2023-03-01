<?php 
 $desc = $product->get_description();
 if ( $desc != null ):
?>
<div class="chairs-content-description" id="descr">
	<div class="tab-container-head">
		<h2 class="tab-container-head__title">
			Описание
		</h2>
	</div>
	<p class="showlesscontent bm-chairs-description-text">
		<?php echo $desc; ?>
	</p>			
</div>	
<?php endif; ?>