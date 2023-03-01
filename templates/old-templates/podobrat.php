<link rel='stylesheet' href='/wp-content/themes/boiling_machine/assets/dist/front-page.css'/>
<div class="bm-main-filters">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-main-filter-b-container">
			
		</div>
	</div>	
</div>

<script>
	$(function() {
		
		function addRemoveDiv() {

		  var wW = $(window).width();

		  if (wW > 1200) {
			  $(".bm-main-filter-b-container").empty();
			  $(".bm-main-filter-b-container").load("/wp-content/themes/boiling_machine/filter/filter-pc.html");
			  $(".bm-main-uslugi-service-container-blocks-block__link img").attr("src", "/wp-content/uploads/bm-main-arrow-more.svg");
			} else if (wW < 1200){
				$(".bm-main-filter-b-container").empty();
				$(".bm-main-filter-b-container").load("/wp-content/themes/boiling_machine/filter/filter-mobile.html");
				$(".bm-main-uslugi-service-container-blocks-block__link img").attr("src", "/wp-content/uploads/bm-main-arrow-more-red.svg");
				
		  }
		}

		addRemoveDiv();
			
		
	});
</script>
<style>

	.bm-main-filters{
		background: none;
	}
	.bm-projects{
		min-height: 50vh;
	}
</style>