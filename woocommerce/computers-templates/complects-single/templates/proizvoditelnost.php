<link rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/css/computers.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="/wp-content/themes/boiling_machine/assets/js/jquery.counterup.min.js"></script>



<?php 

	$control3080 = 0;
	$control2080 = 0;

	$minecraft3080 = 0;
	$minecraft2080 = 0;

	$borderlands3080 = 0;
	$borderlands2080 = 0;

	$mainVideocard = '';
	$secondVideocard = '';

	$game1 = '';
	$game2 = '';
	$game3 = '';


	if ($gpu == 'GeForce RTX 4090' || $gpu == 'GeForce RTX 4090 Ti'){

		$control3080 = 60;
		$control2080 = 30;
	
		$minecraft3080 = 70;
		$minecraft2080 = 30;
	
		$borderlands3080 = 120;
		$borderlands2080 = 30;
	
		$mainVideocard = 'RTX 4090';
		$secondVideocard = 'RTX 3090 Ti';

	}
	if($gpu == 'GeForce RTX 4080' || $gpu == 'GeForce RTX 4080 Ti'){
		$control3080 = 60;
		$control2080 = 30;
	
		$minecraft3080 = 70;
		$minecraft2080 = 30;
	
		$borderlands3080 = 120;
		$borderlands2080 = 30;
	
		$mainVideocard = 'RTX 4080';
		$secondVideocard = 'RTX 3080 Ti';		
	}
	if($gpu == 'GeForce RTX 4070' || $gpu == 'GeForce RTX 4070 Ti'){
		$control3080 = 60;
		$control2080 = 30;
	
		$minecraft3080 = 70;
		$minecraft2080 = 30;
	
		$borderlands3080 = 120;
		$borderlands2080 = 30;
	
		$mainVideocard = 'RTX 4070 Ti';
		$secondVideocard = 'RTX 3080 (12 GB)';		
	}	
	if($gpu == 'GeForce RTX 4060' || $gpu == 'GeForce RTX 4060 Ti'){
		$control3080 = 60;
		$control2080 = 30;
	
		$minecraft3080 = 70;
		$minecraft2080 = 30;
	
		$borderlands3080 = 120;
		$borderlands2080 = 30;
	
		$mainVideocard = 'RTX 4060';
		$secondVideocard = 'RTX 3060';		
	}
    if($gpu == 'GeForce RTX 4060' || $gpu == 'GeForce RTX 4060 Ti' || $gpu == 'GeForce RTX 4070' || $gpu == 'GeForce RTX 4070 Ti' || $gpu == 'GeForce RTX 4080' || $gpu == 'GeForce RTX 4080 Ti' || $gpu == 'GeForce RTX 4090' || $gpu == 'GeForce RTX 4090 Ti'){
		$game1 = 'Microsoft Flight Simulator';
		$game2 = 'Warhammer 40,000: Darktide';
		$game3 = 'Cyberpunk 2077 (New RT Overdrive';        
    }


?>






<section class="videoChip">  
    <div class="videoChip-container">
        <div class="videoChip-background">
            <div class="bm-adaptive bm-margin bm">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title white">Производительность</h2>
                </div>
                <div class="proizvoditelnost-container">
                    <div class="proizvoditelnost-image">               
                        <div class="bm-landing-category-computers-section-4-container-grafic">
                            <div class="bm-landing-category-computers-section-4-container-grafic-games">
                                <p class="bm-landing-category-computers-section-4-container-grafic-games__game"><? echo $game1; ?></p>
                                <p class="bm-landing-category-computers-section-4-container-grafic-games__game"><? echo $game2; ?></p>	
                                <p class="bm-landing-category-computers-section-4-container-grafic-games__game"><? echo $game3; ?></p>
                            </div>
                            <div class="bm-landing-category-computers-section-4-container-grafic-body">
                                <div class="bm-landing-category-computers-section-4-container-grafic-header">											
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx3080"></div>
                                        <? echo $mainVideocard; ?>
                                    </div>
                                    
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx2080"></div>
                                        <? echo $secondVideocard; ?>
                                    </div>
                                </div>	
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ">
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    </div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines">
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30801"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20801"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10801"></div>							
                                        </div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30802"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20802"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10802"></div>							
                                        </div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30803"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20803"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10803"></div>							
                                        </div>											
                                    </div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-count">
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text_zero">0</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">1x</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">2x</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">3x</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">4x</p>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        
                        <div class="bm-landing-category-computers-section-4-container-grafic-mobile">
                            <div class="mobile-container-grafic-games-header">
                                <p class="mobile-container-grafic-games-header__game active" id="game1"><? echo $game1; ?></p>
                                <p class="mobile-container-grafic-games-header__game" id="game2"><? echo $game2; ?></p>
                                <p class="mobile-container-grafic-games-header__game" id="game3"><? echo $game3; ?></p>
                            </div>
                            <div class="mobile-container-grafic-body-container">
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                </div>	
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines">
                                
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="mobile3080"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="mobile2080"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="mobile1080"></div>					
                                
                                </div>
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-count">
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text_zero">0</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">1x</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">2x</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">3x</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">4x</p>
                                </div>				
                            </div>
                            <div class="mobile-container-grafic-body">
                                <div class="bm-landing-category-computers-section-4-container-grafic-header">											
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx3080"></div>
										<? echo $mainVideocard; ?>
                                    </div>
                                    
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx2080"></div>
										<? echo $secondVideocard; ?>
                                    </div>
                                </div>					
                            </div>
                        </div>                       
                    </div>
                    <div class="proizvoditelnost-sub_text">
                        <p class="help-text">
                        Разрешение 3840x2160, максимальные игровые настройки, режим самой высокой производительности со сверхвысоким разрешением DLSS, генерация кадров DLSS на видеокартах серии RTX 40, i9-12900K, 32 ГБ ОЗУ, Win 11 x64. Все данные генерации кадров DLSS и Cyberpunk 2077 с новым режимом Max Ray Tracing Mode основаны на предварительных сборках.
                        </p>
                    </div>
                </div>
            </div>      
        </div>  
    </div>
</section>

<style>
	.bm-computer-landing-section6-back{
		padding-top: 60px;
        background: #111;
	}
	.bm-landing-category-computers-section-2{
		background: url(<?php the_field('2_blok_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-position: center;
		background-size: cover;
		position: relative;
		z-index: 20;
	}
	.bm-landing-category-computers-section-3-container-img{
		background: <?php the_field('3_svechenie_na_glavnom_izobrazhenii', $taxonomy . '_' .$term_id); ?>;
		background-position: center;
		background-size: contain;
		background-repeat: no-repeat;
	}
	.bm-landing-category-computers-section-3{
		background: <?php the_field('3_zadnij_fon', $taxonomy . '_' .$term_id); ?>;
		background-size: cover;
		background-position: center;
	}
	.bm-landing-category-computers-section-5-fullhd{
		background: url(<?php the_field('6_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-repeat: no-repeat;
		background-position: right;		
	}	
	.bm-landing-category-computers-section-7-fullhd{
		background: url(<?php the_field('7_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-repeat: no-repeat;
		background-position: left;		
	}	
	.bm-landing-category-computers-section-8{
		background: url(<?php the_field('8_zadnij_fon', $taxonomy . '_' .$term_id); ?>);
		background-size: cover;
		background-position: center;
	}
	.bm-landing-category-computers-section-8-container-computer{
		background: url(<?php the_field('8_svechenie', $taxonomy . '_' .$term_id); ?>);
		background-position: center;
		background-size: 75%;
		background-repeat: no-repeat;
		padding: 65px 0;
	}
	
    .bm-landing-category-computers-section-4-container-grafic-body-container-separ{
        border-color: #666666;
    }
	.bm-landing-category-computers-section-4-container-grafic-body-container-separ-block{
        border-color: #666666;
    }
    .bm-landing-category-computers-section-4-container-grafic-body-container-count__text{flex-basis: 25%;}
    .bm-landing-category-computers-section-4-container-grafic-body-container-separ-block{flex-basis: 25%;}
	.bm-landing-category-computers-section-4-container-grafic{
		display: flex;
	}
	.bm-landing-category-computers-section-4-container-grafic-mobile{
		display: none;
	}
	@media screen and (max-width: 768px){
		.bm-landing-category-computers-section-4-container-grafic{
			display: none;
		}
		.bm-landing-category-computers-section-4-container-grafic-mobile{
			display: flex;
		}
	}
	

	
</style>



<script>
jQuery(function($){
	

$('#rtx30801').waypoint(function() {
	
	var control3080 = '<?php echo $control3080;?>';
	control3080 = Number( (control3080*10)/12 );	
	
	$( "#rtx30801" ).animate({
  		width: control3080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	

$('#rtx20801').waypoint(function() {
	
	var control2080 = '<?php echo $control2080;?>';
	control2080 = Number( (control2080*10)/12 );	
	
	$( "#rtx20801" ).animate({
  		width: control2080 + "%"
	},1000, "linear");
}, { offset: '75%' });	
	

$('#rtx10801').waypoint(function() {
	
	var control1080 = '<?php echo $control1080;?>';
	control1080 = Number( (control1080*10)/12 );
	
	$( "#rtx10801" ).animate({
  		width: control1080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	

$('#rtx30802').waypoint(function() {
	
	var minecraft3080 = '<?php echo $minecraft3080;?>';
	minecraft3080 = Number( (minecraft3080*10)/12 );
	
	$( "#rtx30802" ).animate({
  		width: minecraft3080 + "%"
	},1000, "linear");
}, { offset: '75%' });	

	
$('#rtx20802').waypoint(function() {
	
	var minecraft2080 = '<?php echo $minecraft2080;?>';
	minecraft2080 = Number( (minecraft2080*10)/12 );
	
	$( "#rtx20802" ).animate({
  		width: minecraft2080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx10802').waypoint(function() {
	
	var minecraft1080 = '<?php echo $minecraft1080;?>';
	minecraft1080 = Number( (minecraft1080*10)/12 );
	
	$( "#rtx10802" ).animate({
  		width: minecraft1080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx30803').waypoint(function() {
	
	var borderlands3080 = '<?php echo $borderlands3080;?>';
	borderlands3080 = Number( (borderlands3080*10)/12 );
	
	$( "#rtx30803" ).animate({
  		width: borderlands3080 + "%"
	},1000, "linear");
}, { offset: '75%' });	
	
	
$('#rtx20803').waypoint(function() {
	
	var borderlands2080 = '<?php echo $borderlands2080;?>';
	borderlands2080 = Number( (borderlands2080*10)/12 );
	
	$( "#rtx20803" ).animate({
  		width: borderlands2080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx10803').waypoint(function() {
	
	var borderlands1080 = '<?php echo $borderlands1080;?>';
	borderlands1080 = Number( (borderlands1080*10)/12 );
	
	$( "#rtx10803" ).animate({
  		width: borderlands1080 + "%"
	},1000, "linear");
}, { offset: '75%' });	


	
	var windowWidth = $(window).width();		
	if(windowWidth < 576){
		
		$('#mobile3080').waypoint(function() {

			var control3080 = '<?php echo $control3080;?>';
			control3080 = Number( (control3080*10)/12 );	

			$( "#mobile3080" ).animate({
				width: control3080 + "%"
			},1000, "linear");
		}, { offset: '75%' });


		$('#mobile2080').waypoint(function() {

			var control2080 = '<?php echo $control2080;?>';
			control2080 = Number( (control2080*10)/12 );	

			$( "#mobile2080" ).animate({
				width: control2080 + "%"
			},1000, "linear");
		}, { offset: '75%' });	


		$('#mobile1080').waypoint(function() {

			var control1080 = '<?php echo $control1080;?>';
			control1080 = Number( (control1080*10)/12 );

			$( "#mobile1080" ).animate({
				width: control1080 + "%"
			},1000, "linear");
		}, { offset: '75%' });		
		
	}
	
	
$(".mobile-container-grafic-games-header__game").click(function(){
	$(".mobile-container-grafic-games-header__game").removeClass("active");
	$(this).addClass("active");

	if( $("#game1").hasClass("active") ){

		var control3080 = '<?php echo $control3080;?>';
		control3080 = Number( (control3080*10)/12 );
		
		$( "#mobile3080" ).animate({
			width: control3080 + "%"
		},1000, "linear");		
		
		var control2080 = '<?php echo $control2080;?>';
		control2080 = Number( (control2080*10)/12 );	

		$( "#mobile2080" ).animate({
			width: control2080 + "%"
		},1000, "linear");		
		
		var control1080 = '<?php echo $control1080;?>';
		control1080 = Number( (control1080*10)/12 );

		$( "#mobile1080" ).animate({
			width: control1080 + "%"
		},1000, "linear");		
							
	}else if( $("#game2").hasClass("active") ){
				
			var minecraft3080 = '<?php echo $minecraft3080;?>';
			minecraft3080 = Number( (minecraft3080*10)/12 );

			$( "#mobile3080" ).animate({
				width: minecraft3080 + "%"
			},1000, "linear");		

			var minecraft2080 = '<?php echo $minecraft2080;?>';
			minecraft2080 = Number( (minecraft2080*10)/12 );

			$( "#mobile2080" ).animate({
				width: minecraft2080 + "%"
			},1000, "linear");

			var minecraft1080 = '<?php echo $minecraft1080;?>';
			minecraft1080 = Number( (minecraft1080*10)/12 );

			$( "#mobile1080" ).animate({
				width: minecraft1080 + "%"
			},1000, "linear");
						 
		}else if( $("#game3").hasClass("active") ){

				var borderlands3080 = '<?php echo $borderlands3080;?>';
				borderlands3080 = Number( (borderlands3080*10)/12 );

				$( "#mobile3080" ).animate({
					width: borderlands3080 + "%"
				},1000, "linear");

				var borderlands2080 = '<?php echo $borderlands2080;?>';
				borderlands2080 = Number( (borderlands2080*10)/12 );

				$( "#mobile2080" ).animate({
					width: borderlands2080 + "%"
				},1000, "linear");

				var borderlands1080 = '<?php echo $borderlands1080;?>';
				borderlands1080 = Number( (borderlands1080*10)/12 );

				$( "#mobile1080" ).animate({
					width: borderlands1080 + "%"
				},1000, "linear");
					
		}
});		
	

});
	
</script>