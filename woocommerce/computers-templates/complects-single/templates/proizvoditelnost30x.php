<link rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/css/computers.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="/wp-content/themes/boiling_machine/assets/js/jquery.counterup.min.js"></script>

<?php 

    $mainVideocard = '';
    $secondVideocard = '';
    $thirdVideocard = '';
    $fourthideocard = '';

    $control3080 = 0;
    $control2080 = 0;

    $minecraft3080 = 0;
    $minecraft2080 = 0;

    $borderlands3080 = 0;
    $borderlands2080 = 0;

	if ($gpu == 'GeForce RTX 3080 Ti'){

		$control3080 = 110;
		$control2080 = 70;
        $control1080 = 5;
	
		$minecraft3080 = 95;
		$minecraft2080 = 62;
        $minecraft1080 = 2;
	
		$borderlands3080 = 70;
		$borderlands2080 = 45;
        $borderlands1080 = 35;
	
		$mainVideocard = 'RTX 3080 Ti';
		$secondVideocard = 'RTX 2080 Ti';
        $thirdVideocard = 'GTX 1080 Ti';

	}
	if($gpu == 'GeForce RTX 3080'){
		$control3080 = 95;
		$control2080 = 55;
        $control1080 = 5;
	
		$minecraft3080 = 84;
		$minecraft2080 = 45;
        $minecraft1080 = 2;
	
		$borderlands3080 = 61;
		$borderlands2080 = 36;
        $borderlands1080 = 25;
	
		$mainVideocard = 'RTX 3080';
		$secondVideocard = 'RTX 2080';	
        $thirdVideocard = 'GTX 1080';	
	}
	if($gpu == 'GeForce RTX 3070 Ti'){
		$control3080 = 90;
		$control2080 = 58;
        $control1080 = 10;
	
		$minecraft3080 = 80;
		$minecraft2080 = 50;
        $minecraft1080 = 2;
	
		$borderlands3080 = 78;
		$borderlands2080 = 50;
        $borderlands1080 = 35;
	
		$mainVideocard = 'RTX 3070 Ti';
		$secondVideocard = 'RTX 2070';	
        $thirdVideocard = 'GTX 1070';	
	}	
	if($gpu == 'GeForce RTX 3070'){
		$control3080 = 90;
		$control2080 = 58;
        $control1080 = 10;
	
		$minecraft3080 = 80;
		$minecraft2080 = 50;
        $minecraft1080 = 2;
	
		$borderlands3080 = 78;
		$borderlands2080 = 50;
        $borderlands1080 = 35;
	
		$mainVideocard = 'RTX 3070';
		$secondVideocard = 'RTX 2070';	
        $thirdVideocard = 'GTX 1070';	
	}
    if($gpu == 'GeForce RTX 3060 Ti' || $gpu == 'GeForce RTX 3060'){
		$control3080 = 135;
		$control2080 = 100;
        $control1080 = 60;
        $control0080 = 10;
	
		$minecraft3080 = 120;
		$minecraft2080 = 105;
        $minecraft1080 = 70;
        $minecraft0080 = 2;
	
		$borderlands3080 = 120;
		$borderlands2080 = 90;
        $borderlands1080 = 62;
        $borderlands0080 = 35;
	
		$mainVideocard = 'RTX 3060 Ti';
		$secondVideocard = 'RTX 3060';	
        $thirdVideocard = 'RTX 2060';	
        $fourthideocard = 'GTX 1060';
	}


?>

<? if( $fourthideocard != ''): ?>

<style>
.bm-landing-category-computers-section-4-container-grafic-header-video{margin-right: 40px;}
.bm-landing-category-computers-section-4-container-grafic-body-container-separ-block{flex-basis: 14.2%;}
.bm-landing-category-computers-section-4-container-grafic-body-container-count__text{flex-basis: 14.2%;}
.bm-landing-category-computers-section-4-container-grafic-header-videortx1080{background: #999999;}
.bm-landing-category-computers-section-4-container-grafic-body-container-line.rtx1080{background: #999999;}
.bm-landing-category-computers-section-4-container-grafic-header-videortx2080{background: #598B00;}
.bm-landing-category-computers-section-4-container-grafic-body-container-line.rtx2080{background: #598B00;}
.bm-landing-category-computers-section-4-container-grafic-header-videortx0080{
    width: 12px;
    height: 12px;
    background: #666666;
    margin-right: 15px;
}
.bm-landing-category-computers-section-4-container-grafic-body-container-line.rtx0080{
    background: #666666;
}
</style>

<? endif; ?>


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
                                <p class="bm-landing-category-computers-section-4-container-grafic-games__game">Control (RTX ON)</p>
                                <p class="bm-landing-category-computers-section-4-container-grafic-games__game">Minecraft (RTX ON)</p>	
                                <p class="bm-landing-category-computers-section-4-container-grafic-games__game">Borderlands</p>
                            </div>
                            <div class="bm-landing-category-computers-section-4-container-grafic-body">
                                <div class="bm-landing-category-computers-section-4-container-grafic-header">											
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx3080"></div>
                                        <?php echo $mainVideocard; ?>
                                    </div>
                                    
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx2080"></div>
                                        <?php echo $secondVideocard; ?>
                                    </div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx1080"></div>
                                        <?php echo $thirdVideocard; ?>
                                    </div>
                                    <? if( $fourthideocard != ''): ?>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx0080"></div>
                                        <?php echo $fourthideocard; ?>
                                    </div>                                       
                                    <? endif; ?>
                                </div>	
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ">
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <? if( $fourthideocard != ''): ?>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                        <? endif; ?>
                                    </div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines">
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30801"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20801"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10801"></div>
                                            <? if( $fourthideocard != ''): ?>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx0080" id="rtx00801"></div>	
                                            <? endif; ?>						
                                        </div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30802"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20802"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10802"></div>
                                            <? if( $fourthideocard != ''): ?>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx0080" id="rtx00802"></div>	
                                            <? endif; ?>							
                                        </div>
                                        <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines-con">
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtx30803"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtx20803"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="rtx10803"></div>		
                                            <? if( $fourthideocard != ''): ?>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx0080" id="rtx00803"></div>		
                                            <? endif; ?>				
                                        </div>											
                                    </div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-count">
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text_zero">0</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">20</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">40</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">60</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">80</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">100</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">120</p>
                                        <? if( $fourthideocard != ''): ?>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">140</p>
                                        <? endif; ?>
                                    </div>
                                </div>
                            </div>			
                        </div>  
                        <div class="bm-landing-category-computers-section-4-container-grafic-mobile">
                            <div class="mobile-container-grafic-games-header">
                                <p class="mobile-container-grafic-games-header__game active" id="game1">Control (RTX ON)</p>
                                <p class="mobile-container-grafic-games-header__game" id="game2">Minecraft (RTX ON)</p>
                                <p class="mobile-container-grafic-games-header__game" id="game3">Borderlands</p>
                            </div>
                            <div class="mobile-container-grafic-body-container">
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <? if( $fourthideocard != ''): ?>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <? endif; ?>
                                </div>	
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines">
                                
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="mobile3080"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="mobile2080"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx1080" id="mobile1080"></div>	
                                    <? if( $fourthideocard != ''): ?>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx0080" id="mobile0080"></div>
                                    <? endif; ?>
                                
                                </div>
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-count">
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text_zero">0</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">20</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">40</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">60</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">80</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">100</p>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">120</p>
                                    <? if( $fourthideocard != ''): ?>
                                    <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">140</p>
                                    <? endif; ?>
                                </div>				
                            </div>
                            <div class="mobile-container-grafic-body">
                                <div class="bm-landing-category-computers-section-4-container-grafic-header">											
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx3080"></div>
                                        <?php echo $mainVideocard; ?>
                                    </div>
                                    
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx2080"></div>
                                        <?php echo $secondVideocard; ?>
                                    </div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx1080"></div>
                                        <?php echo $thirdVideocard; ?>
                                    </div>
                                    <? if( $fourthideocard != ''): ?>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx0080"></div>
                                        <?php echo $fourthideocard; ?>
                                    </div>                                       
                                    <? endif; ?>
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



<? if( $fourthideocard == ''): ?>
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
<? endif; ?>	

<? if( $fourthideocard != ''): ?>
<script>
jQuery(function($){
	

$('#rtx30801').waypoint(function() {
	
	var control3080 = '<?php echo $control3080;?>';
	control3080 = Number( (control3080*10)/14 );	
	
	$( "#rtx30801" ).animate({
  		width: control3080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	

$('#rtx20801').waypoint(function() {
	
	var control2080 = '<?php echo $control2080;?>';
	control2080 = Number( (control2080*10)/14 );	
	
	$( "#rtx20801" ).animate({
  		width: control2080 + "%"
	},1000, "linear");
}, { offset: '75%' });	
	

$('#rtx10801').waypoint(function() {
	
	var control1080 = '<?php echo $control1080;?>';
	control1080 = Number( (control1080*10)/14 );
	
	$( "#rtx10801" ).animate({
  		width: control1080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
$('#rtx00801').waypoint(function() {
	
	var control0080 = '<?php echo $control0080;?>';
	control0080 = Number( (control0080*10)/14 );
	
	$( "#rtx00801" ).animate({
  		width: control0080 + "%"
	},1000, "linear");
}, { offset: '75%' });








$('#rtx30802').waypoint(function() {
	
	var minecraft3080 = '<?php echo $minecraft3080;?>';
	minecraft3080 = Number( (minecraft3080*10)/14 );
	
	$( "#rtx30802" ).animate({
  		width: minecraft3080 + "%"
	},1000, "linear");
}, { offset: '75%' });	

	
$('#rtx20802').waypoint(function() {
	
	var minecraft2080 = '<?php echo $minecraft2080;?>';
	minecraft2080 = Number( (minecraft2080*10)/14 );
	
	$( "#rtx20802" ).animate({
  		width: minecraft2080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx10802').waypoint(function() {
	
	var minecraft1080 = '<?php echo $minecraft1080;?>';
	minecraft1080 = Number( (minecraft1080*10)/14 );
	
	$( "#rtx10802" ).animate({
  		width: minecraft1080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx00802').waypoint(function() {
	
	var minecraft0080 = '<?php echo $minecraft0080;?>';
	minecraft0080 = Number( (minecraft0080*10)/12 );
	
	$( "#rtx00802" ).animate({
  		width: minecraft0080 + "%"
	},1000, "linear");
}, { offset: '75%' });




$('#rtx30803').waypoint(function() {
	
	var borderlands3080 = '<?php echo $borderlands3080;?>';
	borderlands3080 = Number( (borderlands3080*10)/14 );
	
	$( "#rtx30803" ).animate({
  		width: borderlands3080 + "%"
	},1000, "linear");
}, { offset: '75%' });	
	
	
$('#rtx20803').waypoint(function() {
	
	var borderlands2080 = '<?php echo $borderlands2080;?>';
	borderlands2080 = Number( (borderlands2080*10)/14 );
	
	$( "#rtx20803" ).animate({
  		width: borderlands2080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	
	
$('#rtx10803').waypoint(function() {
	
	var borderlands1080 = '<?php echo $borderlands1080;?>';
	borderlands1080 = Number( (borderlands1080*10)/14 );
	
	$( "#rtx10803" ).animate({
  		width: borderlands1080 + "%"
	},1000, "linear");
}, { offset: '75%' });	

$('#rtx00803').waypoint(function() {
	
	var borderlands0080 = '<?php echo $borderlands0080;?>';
	borderlands0080 = Number( (borderlands0080*10)/14 );
	
	$( "#rtx00803" ).animate({
  		width: borderlands0080 + "%"
	},1000, "linear");
}, { offset: '75%' });	



	
	var windowWidth = $(window).width();		
	if(windowWidth < 576){
		
		$('#mobile3080').waypoint(function() {

			var control3080 = '<?php echo $control3080;?>';
			control3080 = Number( (control3080*10)/14 );	

			$( "#mobile3080" ).animate({
				width: control3080 + "%"
			},1000, "linear");
		}, { offset: '75%' });


		$('#mobile2080').waypoint(function() {

			var control2080 = '<?php echo $control2080;?>';
			control2080 = Number( (control2080*10)/14 );	

			$( "#mobile2080" ).animate({
				width: control2080 + "%"
			},1000, "linear");
		}, { offset: '75%' });	


		$('#mobile1080').waypoint(function() {

			var control1080 = '<?php echo $control1080;?>';
			control1080 = Number( (control1080*10)/14 );

			$( "#mobile1080" ).animate({
				width: control1080 + "%"
			},1000, "linear");
		}, { offset: '75%' });	
        
		$('#mobile0080').waypoint(function() {

        var control0080 = '<?php echo $control0080;?>';
        control0080 = Number( (control0080*10)/14 );

        $( "#mobile0080" ).animate({
            width: control0080 + "%"
        },1000, "linear");
        }, { offset: '75%' });
        
		
	}
	
	
$(".mobile-container-grafic-games-header__game").click(function(){
	$(".mobile-container-grafic-games-header__game").removeClass("active");
	$(this).addClass("active");

	if( $("#game1").hasClass("active") ){

		var control3080 = '<?php echo $control3080;?>';
		control3080 = Number( (control3080*10)/14 );
		
		$( "#mobile3080" ).animate({
			width: control3080 + "%"
		},1000, "linear");		
		
		var control2080 = '<?php echo $control2080;?>';
		control2080 = Number( (control2080*10)/14 );	

		$( "#mobile2080" ).animate({
			width: control2080 + "%"
		},1000, "linear");		
		
		var control1080 = '<?php echo $control1080;?>';
		control1080 = Number( (control1080*10)/14 );

		$( "#mobile1080" ).animate({
			width: control1080 + "%"
		},1000, "linear");		

		var control0080 = '<?php echo $control0080;?>';
		control0080 = Number( (control0080*10)/14 );

        $( "#mobile0080" ).animate({
			width: control0080 + "%"
		},1000, "linear");


							
	}else if( $("#game2").hasClass("active") ){
				
			var minecraft3080 = '<?php echo $minecraft3080;?>';
			minecraft3080 = Number( (minecraft3080*10)/14 );

			$( "#mobile3080" ).animate({
				width: minecraft3080 + "%"
			},1000, "linear");		

			var minecraft2080 = '<?php echo $minecraft2080;?>';
			minecraft2080 = Number( (minecraft2080*10)/14 );

			$( "#mobile2080" ).animate({
				width: minecraft2080 + "%"
			},1000, "linear");

			var minecraft1080 = '<?php echo $minecraft1080;?>';
			minecraft1080 = Number( (minecraft1080*10)/14 );

			$( "#mobile1080" ).animate({
				width: minecraft1080 + "%"
			},1000, "linear");

			var minecraft0080 = '<?php echo $minecraft0080;?>';
			minecraft0080 = Number( (minecraft0080*10)/14 );

			$( "#mobile0080" ).animate({
				width: minecraft0080 + "%"
			},1000, "linear");            
						 
		}else if( $("#game3").hasClass("active") ){

				var borderlands3080 = '<?php echo $borderlands3080;?>';
				borderlands3080 = Number( (borderlands3080*10)/14 );

				$( "#mobile3080" ).animate({
					width: borderlands3080 + "%"
				},1000, "linear");

				var borderlands2080 = '<?php echo $borderlands2080;?>';
				borderlands2080 = Number( (borderlands2080*10)/14 );

				$( "#mobile2080" ).animate({
					width: borderlands2080 + "%"
				},1000, "linear");

				var borderlands1080 = '<?php echo $borderlands1080;?>';
				borderlands1080 = Number( (borderlands1080*10)/14 );

				$( "#mobile1080" ).animate({
					width: borderlands1080 + "%"
				},1000, "linear");

                var borderlands0080 = '<?php echo $borderlands0080;?>';
				borderlands0080 = Number( (borderlands0080*10)/14 );

				$( "#mobile0080" ).animate({
					width: borderlands0080 + "%"
				},1000, "linear");
					
		}
});		
	

});
	
</script>
<? endif; ?>
