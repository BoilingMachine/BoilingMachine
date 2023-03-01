<section class='instruments-section'>
    <div class="black-background">
        <div class="bm-adaptive bm-margin bm">
            <div class="videocard-title-container">
                <h2 class="videocrad-title white">Лучшие инструменты для творчества</h2>
            </div>
            <div class="instruments-list-container">
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/nvidia-studio.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">NVIDIA Studio</p>
                        <p class="instrument-text">Выводите свои творческие проекты на новый уровень с помощью NVIDIA Studio. Снабженный новыми аппаратными возможностями RTX 40 обеспечивает непревзойденную производительность в 3D-рендеринге, видеомонтаже и графическом дизайне. Испытайте ускорение на RTX в популярных графических приложениях, оцените драйверы NVIDIA Studio мирового класса, разработанные для обеспечения максимальной стабильности, и воспользуйтесь набором эксклюзивных инструментов, которые используют все возможности RTX для творческих процессов на основе ИИ.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Ускорьте свои творческие процессы</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/nvidia-encoder.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">NVIDIA Encoder</p>
                        <p class="instrument-text">Оцените невероятную графику и повысьте качество и скорость стриминга. Видеокарты GeForce RTX 40, оснащенные энкодером NVIDIA 8-го поколения (NVENC), открывают новую эру высококачественного стриминга с поддержкой кодирования AV1 нового поколения, которое повышает эффективность по сравнению с H.264 и открывает возможности для невероятных стримов в более высоком разрешении. А оптимизации ваших любимых приложений помогут сделать так, чтобы каждый ваш стрим был на высоте.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Повысьте качество стримов</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/nvidia-broadcast.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">NVIDIA Broadcast</p>
                        <p class="instrument-text">Стримьте дома, как в студии, с NVIDIA Broadcast Приложение NVIDIA Broadcast обеспечивает новый уровень стримов, голосовых чатов и видеозвонков благодаря устранению шумов и эха, виртуальному фону и другим передовым инструментам на базе алгоритмов ИИ.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Повысьте качество звука и видео</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/nvidia-omniverse.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">NVIDIA Omniverse</p>
                        <p class="instrument-text">Превращайте простые штрихи в реалистичные пейзажи с помощью ИИ. Создавайте фон или концепт-арты быстрее, чтобы оставалось больше времени на реализацию всех своих идей.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Будущее проектирования в 3D</a>
                    </div>
                </div>
                <div class="instrument-block">
                    <div class="instrument-image">
                        <img src="/wp-content/uploads/nvidia-canvas.webp">
                    </div>
                    <div class="instrument-description">
                        <p class="instrument-title">NVIDIA Canvas</p>
                        <p class="instrument-text">Превращайте простые штрихи в реалистичные пейзажи с помощью ИИ. Создавайте фон или концепт-арты быстрее, чтобы оставалось больше времени на реализацию всех своих идей.</p>
                    </div>
                    <div class="instrument-link">
                        <a href="#" class="instrument-more">Будущее проектирования в 3D</a>
                    </div>
                </div>
            </div>   
        </div> 
    </div> 
</section>

<style>
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