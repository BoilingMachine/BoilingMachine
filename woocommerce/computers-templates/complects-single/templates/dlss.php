<?php
    if($gpu == 'GeForce RTX 4060' || $gpu == 'GeForce RTX 4060 Ti' || $gpu == 'GeForce RTX 4070' || $gpu == 'GeForce RTX 4070 Ti' || $gpu == 'GeForce RTX 4080' || $gpu == 'GeForce RTX 4080 Ti' || $gpu == 'GeForce RTX 4090' || $gpu == 'GeForce RTX 4090 Ti'){
        $subTitle = 'NVIDIA DLSS 3';
        $title = 'Повышение производительности с помощью ИИ';
        $text = 'Технология DLSS — это настоящая революция в графике на основе ИИ, значительно повышающая производительность. Полагаясь на новые тензорные ядра четвертого поколения и ускоритель оптического потока в графических процессорах GeForce RTX 40, технология DLSS 3 использует искусственный интеллект для создания дополнительных высококачественных кадров.';
        $infoText = '*Получено с использованием GeForce RTX 4090 в разрешении 3840 x 2160, с новым режимом Max Ray Tracing Mode, DLSS 3, предварительная сборка.';
        $dlssBack = '/wp-content/uploads/dlss-background.webp';
        $videoLink = 'https://www.youtube.com/embed/3qWr_BYLsZo';  
    } 
    if($gpu == 'GeForce RTX 3060' || $gpu == 'GeForce RTX 3060 Ti' || $gpu == 'GeForce RTX 3070' || $gpu == 'GeForce RTX 3070 Ti' || $gpu == 'GeForce RTX 3080' || $gpu == 'GeForce RTX 3080 Ti' || $gpu == 'GeForce RTX 3090' || $gpu == 'GeForce RTX 3090 Ti'){
        $subTitle = 'Максимум FPS и качества с помощью ИИ';
        $title = 'Ускорение с NVIDIA DLSS';
        $text = 'NVIDIA DLSS (сглаживание с алгоритмами глубокого обучения) позволяет получить огромный прирост производительности. Технология ускоряет частоту кадров, а также обеспечивает новый уровень качества графики при помощи тензорных ядер в видеокартах GeForce RTX. Выкрутите настройки и разрешение на максимум и играйте с потрясающей реалистичностью.';
        $infoText = '*Записано на GeForce RTX 30 в 4K.';
        $dlssBack = '/wp-content/uploads/dlss30back.webp';
        $videoLink = 'https://www.youtube.com/embed/hSi9N0NyDsM';
    }
?>

<section class='rtx-section'>
    <div class="dlss-background">
        <div class="bm-adaptive bm-margin bm">
            <div class="max-1080">
                <div class="rtx-header-container">
                    <p class="rtx-header-subtext-up"><? echo $subTitle; ?></p>
                    <h2 class="rtx-header__title"><? echo $title; ?></h2>
                    <p class="rtx-header-subtitle-down"><? echo $text; ?></p>
                    <p class="rtx-reality">Узнайте как работает DLSS</p>
                </div>
                <div class="dlss-video">
                    <div class="dlss-video-height">
                        <iframe width="100%" height="100%" src="<? echo $videoLink; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p class="dlss-video-help_text">
                            <? echo $infoText; ?>
                    </p>
                </div>
            </div>
        </div> 
    </div> 
</section>



<style>
.rtx.on{right: 40px; bottom: 40px;}
.rtx.off{left: 40px; bottom: 40px;}
.rtx{
    position: absolute;
}
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
.dlss-background{
    padding: 50px 0;
    background: url('<? echo $dlssBack; ?>');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.dlss-video{
    margin-top: 50px;
}
.dlss-video-help_text{
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 170%;
    text-align: center;
    color: #CBCBCB;
    margin: 0;
}
.dlss-video-height{
        margin-bottom: 40px;
}
@media screen and (min-width: 1600px){
    .dlss-video-height{
        height: 600px;
    }
    .rtx-header__title{
        font-size: 38px;
        margin-bottom: 15px;
    } 
    .rtx-header-subtitle-down{
        font-size: 18px;
        margin-bottom: 30px;
    }
}
@media screen and (min-width: 1200px) and (max-width: 1600px){
    .dlss-video-height{
        height: 600px;
    }
    .rtx-header__title{
        font-size: 38px;
        margin-bottom: 15px;
    } 
    .rtx-header-subtitle-down{
        font-size: 18px;
        margin-bottom: 30px;
    }    
}
@media screen and (min-width: 920px) and (max-width: 1200px){
    .dlss-video-height{
        height: 450px;
    }
    .rtx-header__title{
        font-size: 28px;
        margin-bottom: 15px;
    } 
    .rtx-header-subtitle-down{
        font-size: 18px;
        margin-bottom: 30px;
    }    
}
@media screen and (min-width: 768px) and (max-width: 920px){
    .dlss-video-height{
        height: 450px;
    }
    .rtx-header__title{
        font-size: 28px;
        margin-bottom: 15px;
    } 
    .rtx-header-subtitle-down{
        font-size: 18px;
        margin-bottom: 30px;
    }    
    .rtx{display: none;}
}
@media screen and (min-width: 576px) and (max-width: 768px){
    .dlss-video-height{
        height: 450px;
    }
    .rtx-header__title{
        font-size: 24px;
        margin-bottom: 15px;
    } 
    .rtx-header-subtitle-down{
        font-size: 18px;
        margin-bottom: 30px;
    }    
    .rtx{display: none;}
}
@media screen and (max-width: 576px){
    .dlss-video-height{
        height: 450px;
    }
    .rtx-header__title{
        font-size: 24px;
        margin-bottom: 15px;
    } 
    .rtx-header-subtitle-down{
        font-size: 18px;
        margin-bottom: 30px;
    }    
    .rtx{display: none;}
}
</style>