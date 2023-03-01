<?php get_header(); ?>
<div class="bm-pay-deliviry">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-contacts-header">
			<div class="bm-contacts-breadcrumb">
				<?php the_breadcrumb() ?>
			</div>
		</div>
		<div class="bm-contacts-body">
			<div class="mywoo-computers-tabs">	  
			  <ul class="nav nav-tabs">
				<li class="nav-item"> 
				  <a class="nav-link  mywoo-nav-link" href="/uslugi/dostavka/">Доставка</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active mywoo-nav-link" href="/uslugi/oplata/">Оплата</a>
				</li>	
				<li class="nav-item">
				  <a class="nav-link mywoo-nav-link" href="/uslugi/servis/">Поддержка</a>
				</li>							
			  </ul>
			</div>
		</div>		
	</div>
	<?php include 'templates/oplata.php'; ?>
</div>
<?php get_footer(); ?>