<? 
    $benefitTitle = '';
    if($gpu == 'GeForce RTX 4060' || $gpu == 'GeForce RTX 4060 Ti' || $gpu == 'GeForce RTX 4070' || $gpu == 'GeForce RTX 4070 Ti' || $gpu == 'GeForce RTX 4080' || $gpu == 'GeForce RTX 4080 Ti' || $gpu == 'GeForce RTX 4090' || $gpu == 'GeForce RTX 4090 Ti'){
         $benefitTitle = 'Бескомпромиссная платформа для игр и творчествана базе GeForce RTX 40 и DLSS 3';
    }
    if($gpu == 'GeForce RTX 3060' || $gpu == 'GeForce RTX 3060 Ti' || $gpu == 'GeForce RTX 3070' || $gpu == 'GeForce RTX 3070 Ti' || $gpu == 'GeForce RTX 3080' || $gpu == 'GeForce RTX 3080 Ti' || $gpu == 'GeForce RTX 3090' || $gpu == 'GeForce RTX 3090 Ti'){
        $benefitTitle = 'Только в GeForce RTX';
    }
?>


<section class="videocard-benefits">
    <div class="bm-adaptive bm-margin bm">
        <div class="videocard-title-container">
            <h2 class="videocrad-title white"><? echo $benefitTitle; ?></h2>
        </div>
        <div class="complect-benefits-slider">
            <div class="asus-benefits">
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/m48-gpu-chip.svg" alt="">
                    <p class="asus-benefit__title">Передовые графические процессоры</p>
                    <p class="asus-benefit__subtitle">Архитектура NVIDIA Ады Лавлейс</p>
                </div>
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/ray-tracing-icon.svg" alt="">
                    <p class="asus-benefit__title">Реалистичная и захватывающая графика</p>
                    <p class="asus-benefit__subtitle">Выделенные ядра для трассировки лучей</p>
                </div>
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/m48-nvidia-gpu-cloud-ngc-catalog.svg" alt="">
                    <p class="asus-benefit__title">AI-ускоренная производительность</p>
                    <p class="asus-benefit__subtitle">NVIDIA DLSS 3</p>
                </div>
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/icon-4-2.png" alt="">
                    <p class="asus-benefit__title">Максимальная отзывчивость</p>
                    <p class="asus-benefit__subtitle">Платформа с низкой задержкой NVIDIA Reflex</p>
                </div>
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/encode-icon.svg" alt="">
                    <p class="asus-benefit__title">Создана для прямой трансляции</p>
                    <p class="asus-benefit__subtitle">Кодировщик NVIDIA</p>
                </div>
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/icon-6-1.svg" alt="">
                    <p class="asus-benefit__title">Голос и видео с улучшенным ИИ</p>
                    <p class="asus-benefit__subtitle">Приложение NVIDIA Broadcast</p>
                </div>
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/m48-3d-manipulation.svg" alt="">
                    <p class="asus-benefit__title">Ускорьте свое творчество</p>
                    <p class="asus-benefit__subtitle">NVIDIA Studio</p>
                </div>
                <div class="asus-benefit">
                    <img src="/wp-content/uploads/m48-download.svg" alt="">
                    <p class="asus-benefit__title">Производительность и надежность</p>
                    <p class="asus-benefit__subtitle">Game Ready and Studio Drivers</p>
                </div>
            </div>           
        </div>
    </div>
</section>