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
				  <a class="nav-link mywoo-nav-link" href="/contacts/">Контакты</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active mywoo-nav-link" href="/o-kompanii/">О нас</a>
				</li>	
				<li class="nav-item">
				  <a class="nav-link mywoo-nav-link" href="/uslugi/servis/">Сервис</a>
				</li>							
			  </ul>
			</div>
		</div>		
	</div>
	<?php include 'templates/company.php'; ?>
</div>
<?php get_footer(); ?>