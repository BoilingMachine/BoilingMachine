<link rel="stylesheet" href="https://unpkg.com/beerslider/dist/BeerSlider.css">

<?php
    if($gpu == 'GeForce RTX 4060' || $gpu == 'GeForce RTX 4060 Ti' || $gpu == 'GeForce RTX 4070' || $gpu == 'GeForce RTX 4070 Ti' || $gpu == 'GeForce RTX 4080' || $gpu == 'GeForce RTX 4080 Ti' || $gpu == 'GeForce RTX 4090' || $gpu == 'GeForce RTX 4090 Ti'){
        $imageBefore = '/wp-content/uploads/rtx-before.webp';
        $imageAfter = '/wp-content/uploads/rtx-after.webp';
    } 
    if($gpu == 'GeForce RTX 3060' || $gpu == 'GeForce RTX 3060 Ti' || $gpu == 'GeForce RTX 3070' || $gpu == 'GeForce RTX 3070 Ti' || $gpu == 'GeForce RTX 3080' || $gpu == 'GeForce RTX 3080 Ti'){
        $imageBefore = '/wp-content/uploads/rtx30x-before.webp';
        $imageAfter = '/wp-content/uploads/rtx30x-after.webp'; 
    }
?>


<section class='rtx-section'>
    <div class="black-background rtx-back">
        <div class="bm-adaptive bm-margin bm">
            <div class="max-1080">
                <div class="rtx-header-container">
                    <p class="rtx-header-subtext-up">Трассировка лучей</p>
                    <h2 class="rtx-header__title">Гиперреализм. Высочайшая скорость</h2>
                    <p class="rtx-header-subtitle-down">Архитектура Ada раскрывает весь потенциал трассировки лучей, которая моделирует поведение света в реальном мире. Погрузитесь в невероятно детализированные виртуальные миры благодаря производительности карт RTX 40 и ядер RT третьего поколения.</p>
                    <p class="rtx-reality">Новая реальность с трассировкой лучей RTX ></p>
                </div>
            </div>
        </div> 
        <div class="rtx-before-after">        
            <div id="slider" class="beer-slider">
                <img src="<? echo $imageBefore; ?>">
                <div class="beer-reveal">
                    <img src="<? echo $imageAfter; ?>">
                </div>
            </div>              
        </div>
    </div> 
</section>

<style>
.rtx-header-subtext-up{
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 140%;
    text-align: center;
    color: #FFFFFF;
    margin: 0;
    margin-bottom: 10px;
}
.rtx-header__title{
    font-style: normal;
    font-weight: 600;
    margin: 0;
    line-height: 140%;
    text-align: center;
    color: #FFFFFF;
}
.rtx-header-subtitle-down{
    font-style: normal;
    font-weight: 400;
    margin: 0;
    line-height: 160%;
    text-align: center;
    color: #FFFFFF;
}
.rtx-reality{
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 140%;
    margin: 0;
    text-align: center;
    color: #78BA00;
}
.black-background{
    background: #000;
    padding: 50px 0;
}
.black-background.rtx-back{padding-bottom: 0;}
.rtx-before-after{margin-top: 50px;}
@media screen and (min-width: 1600px){
    .rtx-header__title{
        font-size: 38px;
        margin-bottom: 15px;
    } 
    .rtx-header-subtitle-down{
        font-size: 18px;
        margin-bottom: 30px;
    }
}
</style>

<script src="https://unpkg.com/beerslider/dist/BeerSlider.js"></script>

<script>

    new BeerSlider(document.getElementById('slider'));



</script>