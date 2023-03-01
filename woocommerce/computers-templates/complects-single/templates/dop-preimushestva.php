<section class='instruments-section'>
    <div class="black-background">
        <div class="bm-adaptive bm-margin bm">
            <div class="videocard-title-container">
                <h2 class="videocrad-title white">Дополнительные возможности и преимущества</h2>
            </div>
            <div class="instruments-list-container">
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/game-ready.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">Драйверы Game Ready</p>
                        <p class="instrument-text">Драйверы GeForce Game Ready обеспечивают наилучшую производительность в ваших любимых играх. Совместно с разработчиками мы выполнили тонкую настройку под каждую игру и протестировали тысячи конфигураций аппаратного обеспечения, чтобы гарантировать максимальную производительность и надежность.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Повысьте производительность игр</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/geforce-experience.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">GeForce Experience</p>
                        <p class="instrument-text">Записывайте свои видео, делайте скриншоты и стримы игрового процесса и делитесь ими со своими друзьями. Своевременно обновляйте драйверы и оптимизируйте игровые настройки. GeForce Experience позволит вам сделать все это легко и просто. Это очень полезное дополнение для вашей видеокарты GeForce.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Улучшите игровой процесс</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/nvidia-g-sync.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">NVIDIA G-SYNC</p>
                        <p class="instrument-text">Оцените невероятно плавный игровой процесс без разрывов изображения с высокой частотой обновления экрана, HDR и другими улучшениями. Все это — совершенные дисплеи и оборудование для самых требовательных геймеров.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Оцените суперплавный геймплей</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/hde8k.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">Игры в 8K с HDR</p>
                        <p class="instrument-text">Играйте, записывайте и смотрите видео в отличном качестве до 8K HDR с GeForce RTX 4090. Записывайте геймплей в разрешении до 8K с HDR, используя функцию ShadowPlay™ в приложении GeForce Experience™, и плавно воспроизводите видео при помощи блока декодирования AV1.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Вершина игрового процесса</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/vrgames.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">Виртуальная реальность (VR)</p>
                        <p class="instrument-text">Высочайшая производительность видеокарты обеспечивает невероятный уровень погружения в VR играх.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Погрузитесь в виртуальную реальность</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/resizable-bar-1.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">Resizable BAR</p>
                        <p class="instrument-text">Resizable BAR — это расширенная функция PCI Express, которая позволяет процессору получить доступ ко всей видеопамяти графического процессора и улучшить производительность во многих играх.</p>
                    </div>
                </div>
            </div>   
        </div> 
    </div> 
</section>

<style>
    .black-background {
        background: #000;
        padding: 50px 0;
    }
    .instrument-image{
        margin-bottom: 30px;
    }
    .instrument-title{
        font-style: normal;
        font-weight: 600;
        line-height: 140%;
        color: #FFFFFF;
        margin: 0;
        margin-bottom: 15px;
    }
    .instrument-text{
        font-style: normal;
        font-weight: 500;
        line-height: 180%;
        color: #CBCBCB;
        margin: 0;
    }
    .instrument-description{
        margin-bottom: 20px;
    }
    .instrument-more{
        font-style: normal;
        font-weight: 600;
        line-height: 140%;
        color: #78BA00;
        text-decoration: none;
        transition: .3s;
    }
    .instrument-more:hover{
        text-decoration: none;
        color: #78BA00;
        transition: .3s;
    }
    .instrument-block{
        display: flex;
        flex-direction: column;
    }
    
    @media screen and (min-width: 1600px){
        .instruments-list-container{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-gap: 30px;
        }
        .instrument-title{font-size: 24px;}
        .instrument-text{font-size: 16px;}
        .instrument-more{font-size: 16px;}
        .instrument-block{margin-bottom: 40px;}
        .instrument-link{margin-top: auto;}
    }
    @media screen and (min-width: 1200px) and (max-width: 1600px){
        .instruments-list-container{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-gap: 30px;
        }
        .instrument-title{font-size: 24px;}
        .instrument-text{font-size: 16px;}
        .instrument-more{font-size: 16px;}
        .instrument-block{margin-bottom: 40px;}
        .instrument-link{margin-top: auto;}        
    }
    @media screen and (min-width: 992px) and (max-width: 1200px){
        .instruments-list-container{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-gap: 30px;
        }
        .instrument-title{font-size: 24px;}
        .instrument-text{font-size: 16px;}
        .instrument-more{font-size: 16px;}
        .instrument-block{margin-bottom: 40px;}
        .instrument-link{margin-top: auto;}        
    }  
    @media screen and (min-width: 768px) and (max-width: 992px){
        .instruments-list-container{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-gap: 30px;
        }
        .instrument-title{font-size: 24px;}
        .instrument-text{font-size: 16px;}
        .instrument-more{font-size: 16px;}
        .instrument-block{margin-bottom: 40px;}
        .instrument-link{margin-top: auto;}        
    } 
    @media screen and (min-width: 576px) and (max-width: 768px){
        .instruments-list-container{
            display: grid;
            grid-template-columns: repeat(1,1fr);
            grid-gap: 30px;
        }
        .instrument-title{font-size: 24px;}
        .instrument-text{font-size: 16px;}
        .instrument-more{font-size: 16px;}
        .instrument-block{margin-bottom: 40px;}
        .instrument-link{margin-top: auto;}        
    }  
    @media screen and (max-width: 576px){
        .instruments-list-container{
            display: grid;
            grid-template-columns: repeat(1,1fr);
            grid-gap: 30px;
        }
        .instrument-title{font-size: 24px;}
        .instrument-text{font-size: 16px;}
        .instrument-more{font-size: 16px;}
        .instrument-block{margin-bottom: 40px;}
        .instrument-link{margin-top: auto;}        
    } 
</style>