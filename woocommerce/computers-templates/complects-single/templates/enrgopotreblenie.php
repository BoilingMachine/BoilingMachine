<link rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/css/computers.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="/wp-content/themes/boiling_machine/assets/js/jquery.counterup.min.js"></script>


<? 

    switch($gpu){
        case 'GeForce RTX 4060':
            $firstVideocard = 'RTX 4060';
            $secondVideocard = 'RTX 3060';
        break;
        case 'GeForce RTX 4060 Ti':
            $firstVideocard = 'RTX 4060 Ti';
            $secondVideocard = 'RTX 3060 Ti';
        break;   
        case 'GeForce RTX 4070':
            $firstVideocard = 'RTX 4070';
            $secondVideocard = 'RTX 3070';
        break; 
        case 'GeForce RTX 4070 Ti':
            $firstVideocard = 'RTX 4070 Ti';
            $secondVideocard = 'RTX 3070 Ti';
        break;  
        case 'GeForce RTX 4080':
            $firstVideocard = 'RTX 4080';
            $secondVideocard = 'RTX 3080';
        break;   
        case 'GeForce RTX 4080 Ti':
            $firstVideocard = 'RTX 4080 Ti';
            $secondVideocard = 'RTX 3080 Ti';
        break;    
        case 'GeForce RTX 4090':
            $firstVideocard = 'RTX 4090';
            $secondVideocard = 'RTX 3090';
        break;     
    }
?>


<section class="videoChip">  
    <div class="videoChip-container">
        <div class="videoChip-background">
            <div class="bm-adaptive bm-margin bm">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title white">Снижение энергопотребления</h2>
                    <p class="sub_title white">Чем ниже, тем лучше</p>
                </div>
                <div class="proizvoditelnost-container">
                    <div class="proizvoditelnost-image">
                       

                    <div class="bm-landing-category-computers-section-4-container-grafic">
                            <div class="bm-landing-category-computers-section-4-container-grafic-games">
                                <p class="bm-landing-category-computers-section-4-container-grafic-games__game">Среднее во время игры</p>
                            </div>
                            <div class="bm-landing-category-computers-section-4-container-grafic-body">
                                <div class="bm-landing-category-computers-section-4-container-grafic-header">											
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx3080"></div>
                                        <? echo $firstVideocard; ?>
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
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="rtxenergo4090"></div>
                                            <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="rtxenergo3090"></div>
                                        </div>											
                                    </div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-count">
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text_zero">0</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">0.25</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">0.5</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">0.75</p>
                                        <p class="bm-landing-category-computers-section-4-container-grafic-body-container-count__text">1</p>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        
                        <div class="bm-landing-category-computers-section-4-container-grafic-mobile">
                            <div class="mobile-container-grafic-games-header">
                                <p class="mobile-container-grafic-games-header__game active" id="game1">Среднее во время игры</p>
                            </div>
                            <div class="mobile-container-grafic-body-container">
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-separ-block"></div>
                                </div>	
                                <div class="bm-landing-category-computers-section-4-container-grafic-body-container-lines">
                                
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx3080" id="mobileenergo4090"></div>
                                    <div class="bm-landing-category-computers-section-4-container-grafic-body-container-line rtx2080" id="mobileenergo3090"></div>
                                
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
                                        RTX 4090
                                    </div>
                                    
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-video">
                                    <div class="bm-landing-category-computers-section-4-container-grafic-header-videortx2080"></div>
                                    RTX 3090 Ti
                                    </div>
                                </div>					
                            </div>
                        </div>
                        
                        <div class="bm-landing-category-computers-section-4-container-des">
                            <p class="bm-landing-category-computers-section-4-container-des__text">
                                <?php the_field('snoska_pod_grafikom', $taxonomy . '_' .$term_id); ?>
                            </p>
                        </div>








                    </div>
                    <div class="proizvoditelnost-sub_text">
                        <p class="help-text">
                        Среднее энергопотребление во время игры измерено в 22 играх с разрешением 4K, 1440p и 1080p. Графический процессор в NVIDIA Founders Edition или референсная видеокарта.
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

<?php 

	$control3080 = 100;
	$control2080 = 120;
?>

<script>
jQuery(function($){
	

$('#rtxenergo4090').waypoint(function() {
	
	var control3080 = '<?php echo $control3080;?>';
	control3080 = Number( (control3080*10)/12 );	
	
	$( "#rtxenergo4090" ).animate({
  		width: control3080 + "%"
	},1000, "linear");
}, { offset: '75%' });
	

$('#rtxenergo3090').waypoint(function() {
	
	var control2080 = '<?php echo $control2080;?>';
	control2080 = Number( (control2080*10)/12 );	
	
	$( "#rtxenergo3090" ).animate({
  		width: control2080 + "%"
	},1000, "linear");
}, { offset: '75%' });	
	
	
var windowWidth = $(window).width();		
if(windowWidth < 576){
    
    $('#mobileenergo4090').waypoint(function() {

        var control3080 = '<?php echo $control3080;?>';
        control3080 = Number( (control3080*10)/12 );	

        $( "#mobileenergo4090" ).animate({
            width: control3080 + "%"
        },1000, "linear");
    }, { offset: '75%' });


    $('#mobileenergo3090').waypoint(function() {

        var control2080 = '<?php echo $control2080;?>';
        control2080 = Number( (control2080*10)/12 );	

        $( "#mobileenergo3090" ).animate({
            width: control2080 + "%"
        },1000, "linear");
    }, { offset: '75%' });	
	
    
}
	

});
	
</script>