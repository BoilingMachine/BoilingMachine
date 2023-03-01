<?php get_header(); ?>
<link type="text/css" rel="stylesheet" href="/wp-content/themes/boiling_machine/assets/css_stati/rtx40.css">

<div id="app">
    <section class="breadcrums">
		<div class="bm-adaptive bm-margin bm">
			<div class="bm-contacts-header">
				<div class="bm-contacts-breadcrumb">
					<?php the_breadcrumb() ?>
				</div>

			</div>	
		</div>
    </section>
    <!-- Главный баннер -->
    <section id="rtx40main">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <h1 class="rtx-title">
                    ПК на GeForce RTX 4090
                </h1>
                <a href="#modal-center" uk-toggle class="rtx-link uncor">Оформить заказ</a>
            </div>
        </div>
        <div class="rtx-main-image">
            <picture style="align-self: flex-start;">
                <source srcset="/wp-content/uploads/px-4090banner-page-mobile.webp" media="(max-width: 1200px)">
                <source srcset="/wp-content/uploads/px-4090banner-page-scaled.webp" media="(min-width: 1200px)">
                <img class="lozad" data-iesrc="/wp-content/uploads/px-4090banner-page-scaled.webp">
            </picture>
        </div>
    </section>
<section class="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <h2 class="rtx-title">
                    {{ productsTitle }}
                </h2>
                <div class="products">
                    <div class="product" v-for="product in products">
                        <p class="plash">GeForce RTX 40</p>
                        <div class="product-image"><img :src="product.img"></div>
                        <div class="product-title"><h2 class="title__text">{{ product.title }}</h2></div>
                        <div class="separate"></div>
                        <div class="sett">
                            <div class="attr-container">
                                <p class="attr-nam">Видеокарта</p>
                                <p class="attr-va">{{ product.set[0] }} </p>
                            </div>
                            <div class="attr-container">
                                <p class="attr-nam">Процессор</p>
                                <p class="attr-va">{{ product.set[1] }} <span>или выше</span></p>
                            </div>
                            <div class="attr-container">
                                <p class="attr-nam">Материнская плата</p>
                                <p class="attr-va">{{ product.set[2] }} <span>или выше</span></p>
                            </div>
                            <div class="attr-container">
                                <p class="attr-nam">Оперативная память </p>
                                <p class="attr-va">{{ product.set[3] }} <span>или выше</span></p>
                            </div>
                            <div class="attr-container">
                                <p class="attr-nam">SSD накопитель</p>
                                <p class="attr-va">{{ product.set[4] }} <span>или выше</span></p>
                            </div>
                            <div class="attr-container">
                                <p class="attr-nam">Блок питания</p>
                                <p class="attr-va">{{ product.set[5] }} <span>или выше</span></p>
                            </div>
                        </div>
                        <!--
                        <div class="links">
                            <a href="" class="link-product-more">Подробнее</a>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Описание Видеокарты -->
    <section id="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="description-info">
                    <div class="des-text-container">
                        <h2 class="rtx-title mg-title" :class="mobileClass()">{{ disc.title }}</h2>
                        <img :src="disc.img" alt="Видеокарта GeForce RTX 40x" v-if="window.width < 992" class="mobile-img mg-title">
                        <p class="des__text">
                            {{ disc.text }}
                        </p>
                        <a href="#modal-center" uk-toggle class="link-popup">Оформите заказ</a>
                    </div>
                    <div class="des-text-image" v-if="window.width > 992">
                        <img :src="disc.img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Сравнение видеокарт -->
    <section class="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <h2 class="rtx-title">
                    {{ comparison.title }}
                </h2>
                <div class="rtx-videocard-setting">
                    <div class="rtx-card" v-for="(videocard, idx) in videocards" :key="videocard.name">
                        <img :src="videocard.url" alt="">
                        <p class="rtx-card-title">{{ videocard.name }}</p>
                        <div class="rtx-card-attr" v-for="(attr, name) in videocard.attrs">
                            <p class="attr-name">{{ name }}</p>
                            <p class="attr-val" :class="videocard.cls">{{ attr }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Технологии Nvidia -->
    <section class="mg-sect" v-for="info in nvidia">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="dlss-lights-info">
                    <h2 class="rtx-title mg-title al-center">{{ info.title }}</h2>
                    <p class="des__text al-center width70">
                        {{ info.text }}
                    </p>
                    <div class="dlss-lights-info__image">
                        <img :src="info.img" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Reflex Технология -->
    <section class="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="description-info-reflex" :class="mediaStyle()">
                    <div class="des-text-image" v-if="window.width > 1200">
                        <img :src="reflex.img" alt="">
                    </div>
                    <div class="des-text-container">
                        <h2 class="rtx-title mg-title" :class="videoClass()">{{ reflex.title }}</h2>
                        <img :src="reflex.img" alt="Видеокарта GeForce RTX 40x" v-if="window.width < 1200" class="mobile-img mg-title">
                        <p class="des__text">
                            {{ reflex.text }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FPS счетчик -->
    <section class="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="fps-title">
                    <h2 class="rtx-title al-center">
                        {{ fps.title }}
                    </h2>
                </div>
                <div class="fps-counters">
                    <div class="fps-counter" v-for="fps in fps.fpsCounters" >
                        <div class="counter-image-container">
                            <img :src="fps.img" alt="">
                        </div>
                        <p class="count">{{ fps.count }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Форма обратной связи -->
    <section class="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="form-container">
                    <div class="form-info">
                        <div class="form-container-form"><?php echo do_shortcode('[wpforms id="17955" title="false" description="false"]'); ?></div>
                    </div>
                    <div class="form-image">
                        <img src="/wp-content/uploads/form-image.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Статья -->
    <section class="mg-sect">
        <?php
        $my_postid = 18191;//This is page id or post id
        $content_post = get_post($my_postid);
        $content = $content_post->post_content;
        $cont_title = $content_post->post_title;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        $title = apply_filters('the_title', $cont_title);
        ?>
        <div class='bm-adaptive bm-margin bm'>
            <h2 class="bm-stati-container-content__title"><?php echo $title; ?></h2>

            <?php echo $content; ?>
        </div>

    </section>
    <!-- Похожие статьи -->
    <section class="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="fps-title">
                    <h2 class="rtx-title al-center">
                        {{ stati.title }}
                    </h2>
                </div>
                <div class="news-spisok">
                    <?php
                    $post = get_post(18322);
                    $post_thumbnail_id = get_post_thumbnail_id( $post );
                    $thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'full' );
                    ?>
                    <div class="news-block">
                        <div class="news-image">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <img src="<?php echo $thumbnail_url; ?>">
                            </a>
                        </div>
                        <div class="news-info">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <p class="news-title"><?php echo $post->post_title; ?></p>
                                <p class="news-expert"><?php echo $post->post_excerpt; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                    $post = get_post(18191);
                    $post_thumbnail_id = get_post_thumbnail_id( $post );
                    $thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'full' );
                    ?>
                    <div class="news-block">
                        <div class="news-image">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <img src="<?php echo $thumbnail_url; ?>">
                            </a>
                        </div>
                        <div class="news-info">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <p class="news-title"><?php echo $post->post_title; ?></p>
                                <p class="news-expert"><?php echo $post->post_excerpt; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                    $post = get_post(18864);
                    $post_thumbnail_id = get_post_thumbnail_id( $post );
                    $thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'full' );
                    ?>
                    <div class="news-block">
                        <div class="news-image">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <img src="<?php echo $thumbnail_url; ?>">
                            </a>
                        </div>
                        <div class="news-info">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <p class="news-title"><?php echo $post->post_title; ?></p>
                                <p class="news-expert"><?php echo $post->post_excerpt; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                    $post = get_post(18901);
                    $post_thumbnail_id = get_post_thumbnail_id( $post );
                    $thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'full' );
                    ?>
                    <div class="news-block">
                        <div class="news-image">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <img src="<?php echo $thumbnail_url; ?>">
                            </a>
                        </div>
                        <div class="news-info">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <p class="news-title"><?php echo $post->post_title; ?></p>
                                <p class="news-expert"><?php echo $post->post_excerpt; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                    $post = get_post(18936);
                    $post_thumbnail_id = get_post_thumbnail_id( $post );
                    $thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'full' );
                    ?>
                    <div class="news-block">
                        <div class="news-image">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <img src="<?php echo $thumbnail_url; ?>">
                            </a>
                        </div>
                        <div class="news-info">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <p class="news-title"><?php echo $post->post_title; ?></p>
                                <p class="news-expert"><?php echo $post->post_excerpt; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                    $post = get_post(18963);
                    $post_thumbnail_id = get_post_thumbnail_id( $post );
                    $thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'full' );
                    ?>
                    <div class="news-block">
                        <div class="news-image">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <img src="<?php echo $thumbnail_url; ?>">
                            </a>
                        </div>
                        <div class="news-info">
                            <a href="<?php echo get_permalink($post->ID, false); ?>">
                                <p class="news-title"><?php echo $post->post_title; ?></p>
                                <p class="news-expert"><?php echo $post->post_excerpt; ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Перечисление видеокарт -->
    <section class="mg-sect" v-for="(card, idx) in videocds">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="description-info img-first" v-if="idx % 2 !== 0" :class="mediaStyle()">
                    <div class="des-text-image" v-if="window.width > 1200">
                        <img :src="card.img" alt="">
                    </div>
                    <div class="des-text-container">
                        <h2 class="rtx-title mg-title" :class="videoClass()">{{ card.title }}</h2>
                        <img :src="card.img" alt="Видеокарта GeForce RTX 40x Palit" v-if="window.width < 1200" class="mg-title">
                        <p class="des__text" v-for="texts in card.text">
                            {{ texts }}
                        </p>
                    </div>
                </div>
                <div class="description-info img-second" v-else :class="mediaStyle()">
                    <div class="des-text-container">
                        <h2 class="rtx-title mg-title" :class="videoClass()">{{ card.title }}</h2>
                        <img :src="card.img" alt="Видеокарта GeForce RTX 40x Palit" v-if="window.width < 1200" class="mg-title">
                        <p class="des__text" v-for="texts in card.text">
                            {{ texts }}
                        </p>
                    </div>
                    <div class="des-text-image" v-if="window.width > 1200">
                        <img :src="card.img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Форма обратной связи -->
    <section class="mg-sect">
        <div class="bm bm-margin bm-adaptive">
            <div class="rtx-container">
                <div class="form-container">
                    <div class="form-info">
                        <div class="form-container-form"><?php echo do_shortcode('[wpforms id="17955" title="false" description="false"]'); ?></div>
                    </div>
                    <div class="form-image">
                        <img src="/wp-content/uploads/form-image.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div id="modal-center" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-margin-auto-vertical">

            <button class="uk-modal-close-default popup-close" type="button" uk-close></button>
            <div class="form-info">
                <div class="form-container-form"><?php echo do_shortcode('[wpforms id="17955" title="false" description="false"]'); ?></div>
            </div>

        </div>
    </div>
</div>	

<script>
    

    createApp({
        data() {
            return {
                window: {
                    width: 0,
                    height: 0
                },
                stati:{
                  title: 'Похожие статьи'
                },
                productsTitle: 'Рекомендуемые игровые компьютеры для заказа',
                products:
                    [
                    {
                        img: '/wp-content/uploads/bm-crystal.png',
                        title: 'BOILING CRYSTAL MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4090',
                            'Intel Core i9 12900',
                            'Z690',
                            '32 Гб DDR5',
                            '2TB',
                            '1500 Вт'
                        ]
                    },
                    {
                        img: '/wp-content/uploads/bm-tower.png',
                        title: 'BOILING TOWER MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4090',
                            'Intel Core i9 12900',
                            'Z690',
                            '32 Гб DDR5',
                            '2TB',
                            '1500 Вт'
                        ]
                    },
                    {
                        img: '/wp-content/uploads/bm-crystal.png',
                        title: 'BOILING CRYSTAL MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4090',
                            'AMD Ryzen 9 7950X',
                            'X670E',
                            '32 Гб DDR5',
                            '2TB',
                            '1500 Вт'
                        ]
                    },
                    {
                        img: '/wp-content/uploads/bm-tower.png',
                        title: 'BOILING TOWER MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4090',
                            'AMD Ryzen 9 7950X',
                            'X670E',
                            '32 Гб DDR5',
                            '2TB',
                            '1500 Вт'
                        ]
                    }
                ],				
                reflex: {
                  title: 'NVIDIA Reflex',
                  text: 'Победу определяют миллисекунды. Технология Reflex минимизирует задержки системы и обеспечивает уникальное конкурентное преимущество. Основываясь на мощности видеокарт GeForce RTX, технология NVIDIA Reflex увеличивает отзывчивость управления и позволяет игрокам быстрее реагировать на происходящее на экране.',
                  img: '/wp-content/uploads/reflex.png'
                },
                nvidia: [
                    {
                        title: 'NVIDIA DLSS',
                        text: 'Максимум FPS и качества с помощью ИИ. Революционная технология сглаживания с использованием алгоритмов глубокого обучения DLSS (Deep Learning Super Sampling) улучшает производительность и качество графики. Используя тензорные ядра видеокарт GeForce RTX, технология NVIDIA DLSS увеличивает частоту кадров в секунду и позволяет наслаждаться современными играми на ультра настройках. Никаких компромиссов!',
                        img: '/wp-content/uploads/dlss.png'
                    },
                    {
                        title: 'Трассировка лучей',
                        text: 'Технология трассировки лучей повышает реалистичность изображения в играх, правдоподобно моделируя натуральное освещение, имитирует отражения и тени так, как они выглядят в жизни. Видеокарты GeForce RTX 40-й серии обладают третьим поколением ядер RT и настроены на высшее качество картинки.',
                        img: '/wp-content/uploads/lights.png'
                    }
                ],
                videocds: [
                    {
                        title: 'Palit GeForce RTX 4090 GameRock',
                        text: [
                            'Эта видеокарта завораживает своим ангельским внешним видом, но за милым дизайном скрывается мощь, которую мир еще не видел! Palit GeForce RTX 4090 GameRock предназначена для самых требовательных геймеров и создателей мультимедийного контента.',
                            'Видеокарта призвана подарить игровой опыт наивысшего уровня и продемонстрировать впечатляющую производительность в приложениях для творчества. Кожух системы охлаждения GameRock выполнен под кристаллическую поверхность, а 90% передней панели покрыто ARGB подсветкой с возможностью персонализации режимов. 24 Гб быстрой памяти GDDR6X c рабочими частотами до 2500 Мгц поможет добиться исключительного качества картинки в 4К, а три вентилятора и массивный радиатор гарантируют эффективное охлаждение.'
                        ],
                        img: '/wp-content/uploads/palit.png'
                    },
                    {
                        title: 'Palit GeForce RTX 4090 GamingPro',
                        text: [
                            'Строгий футуристичный дизайн видеокарты в полной мере раскрывает ее колоссальную производительность. Максимально возможный на сегодняшний день FPS в 4К разрешении во всех AAA-проектах и соревновательных играх на ультра настройках графики, а также высочайшая скорость обработки и визуализации контента делают Palit GeForce RTX 4090 GamingPro наилучшим выбором для киберспортсменов и всех любителей высокого качества изображения. Эффективность охлаждения мощнейшей видеокарты достигается за счет использования трех больших вентиляторов и высококачественных алюминиевых пластин радиатора.'
                        ],
                        img: '/wp-content/uploads/palit-sec.png'
                    },
                    {
                        title: 'ASUS ROG Strix GeForce RTX 4090',
                        text: ['Каждый элемент видеокарты позволяет реализовать на максимум возможности новой архитектуры NVIDIA Ada Lovelace. Чудовищно мощная ASUS GeForce RTX 4090 ROG Strix обеспечена улучшенным охлаждением, которое стало возможным благодаря вентиляторам Axial-tech с увеличением воздушного потока на 23%. Дизайн выполнен в лучших традициях серии ROG Strix, а трехцветный градиент ROG дополняются стильной подсветкой AURA SYNC. Второй выход HDMI также отличает карты ASUS от конкурентов.'],
                        img: '/wp-content/uploads/px-asus-rog-strix-geforce-rtx-4090.webp'
                    },
                    {
                        title: 'ASUS TUF Gaming GeForce RTX 4090',
                        text: ['Строгий стиль армированного кожуха видеокарты раскрывает ее внутреннюю мощь. Усиленное охлаждение и улучшенная подача питания призваны обеспечить стабильно высокую производительность ASUS TUF Gaming GeForce RTX 4090 в любых задачах. Идеальный выбор для любителей бескомпромиссных решений для игр и творчества.'],
                        img: '/wp-content/uploads/px-asus-tuf-gaming-geforce-rtx-4090.webp'
                    },
                    {
                        title: 'MSI GeForce RTX 4090 GAMING ',
                        text: ['Внешний вид видеокарты вдохновлен кристаллами алмаза, акценты в дизайне сделаны на геометрии точек, линий и плоскостей. MSI GeForce RTX 4090 SUPRIM изготовлена из высококачественных материалов и обладает инновационными вентиляторами TRI-FROZR 3S для наилучшего охлаждения чипа. Новейшая архитектура Ada Lovelace и 24 ГБ памяти GDDR6X приносят огромный скачок производительности и обеспечивают непревзойденные возможности для геймеров и создателей контента.'],
                        img: '/wp-content/uploads/px-msi-geforce-rtx-4090-gaming.webp'
                    },
                    {
                        title: 'MSI GeForce RTX 4090 SUPRIM',
                        text: ['Внешний вид видеокарты вдохновлен кристаллами алмаза, акценты в дизайне сделаны на геометрии точек, линий и плоскостей. MSI GeForce RTX 4090 SUPRIM изготовлена из высококачественных материалов и обладает инновационными вентиляторами TRI-FROZR 3S для наилучшего охлаждения чипа. Новейшая архитектура Ada Lovelace и 24 ГБ памяти GDDR6X приносят огромный скачок производительности и обеспечивают непревзойденные возможности для геймеров и создателей контента.'],
                        img: '/wp-content/uploads/px-msi-geforce-rtx-4090-suprim.webp'
                    },
                    {
                        title: 'GIGABYTE GeForce RTX 4090 GAMING',
                        text: ['Высочайшая производительность и максимум впечатлений от геймплея! Система охлаждения WINDFORCE эффективно передает тепло на радиатор, создавая идеальный теплоотвод для чудовищно мощной видеокарты GIGABYTE GeForce RTX 4090 GAMING. Кольцевая подсветка вентиляторов имеет широкий набор режимов на любой вкус и задаёт уникальный геймерский внешний вид, а металлическая задняя пластина не только придает дополнительного стиля, но и обеспечивает дополнительную защиту платы.'],
                        img: '/wp-content/uploads/px-gigabyte-geforce-rtx-4090-gaming.webp'
                    },
                    {
                        title: 'GIGABYTE GeForce RTX 4090 WINDFORCE',
                        text: ['Выполненная в строгом черном корпусе флагманская видеокарта GIGABYTE GeForce RTX 4090 WINDFORCE предлагает все те же преимущества, что и ее собрат с приставкой GAMING. Главным преимуществом здесь становится система охлаждения WINDFORCE, обеспечивающая высокоэффективный отвод тепла и впечатляющий показатель избавления от шума.'],
                        img: '/wp-content/uploads/px-gigabyte-geforce-rtx-4090-windforce.webp'
                    },
                    {
                        title: 'GIGABYTE AORUS GeForce RTX 4090 MASTER',
                        text: [
                            'Продолжая линию флагманских решений от Gigabyte, видеокарта AORUS GeForce RTX 4090 MASTER отличается высокоэффективным охлаждением, продуманным дизайном питания для проведения экстремального разгона, стабильностью работы и бескомпромиссным внешним видом. Технология WINDFORCE Bionic Shark имитирует микроповерхности чешуи и увеличивает поток воздуха через вентиляторы за счет снижения микротурбулентности.',
                            'Маленький ЖК-монитор может отображать не только информацию о работе видеокарты, но и любые тексты, картинки и GIF-файлы, которые пользователь захочет загрузить. Эта особенность в сочетании с кольцевой подсветкой системы охлаждения с гибкой настройкой и множеством режимов обеспечивает практически безграничные возможности для персонализации.'
                        ],
                        img: '/wp-content/uploads/px-gigabyte-aorus-geforce-rtx-4090-master.webp'
                    },
                    {
                        title: 'ZOTAC GAMING GeForce RTX 4090 Trinity',
                        text: ['Мощнейшая видеокарта на базе архитектуры NVIDIA Ada Lovelace обладает передовыми технологиями охлаждения и предлагает максимальный FPS в играх и высочайшую производительность в приложениях для творчества. Система IceStorm 3.0 отличается продуманными вентиляционными каналами, благодаря которым воздушный поток может выходить на 360°, чтобы уменьшить накопление тепла. Закругленный кожух охлаждения и подсветка SPECTRA 2.0 обеспечивают яркий и запоминающийся внешний вид и уникальные анимированные опции с помощью адресных светодиодов RGB.'],
                        img: '/wp-content/uploads/px-zotac-gaming-geforce-rtx-4090-trinity.webp'
                    },
                    {
                        title: 'ZOTAC GAMING GeForce RTX 4090 AMP Extreme AIRO',
                        text: [
                          'Видеокарта для геймеров и энтузиастов, стремящихся к максимальной производительности. ZOTAC GAMING GeForce RTX 4090 AMP Extreme AIRO может предложить все — от непревзойденной мощности до выдающихся показателей отвода тепла и снижения шума.Передовая архитектура NVIDIA Ada Lovelace расширяет границы возможного в самых требовательных к графике играх для ПК, а система охлаждения IceStorm 3.0 с продуманной геометрией лопастей вентиляторов и выходом воздуха на 360° обеспечивает стабильные рабочие температуры даже при разгоне выше, чем 2500 Мгц.',
                            'Особая форма кожуха видеокарты дополняется подсветкой SPECTRA 2.0, за счет чего создается эффект сюрреалистических просветов и переливов невероятной красоты.'
                        ],
                        img: '/wp-content/uploads/px-zotac-gaming-geforce-rtx-4090-amp-extreme-airo.webp'
                    },
                    {
                        title: 'Colorful iGame GeForce RTX 4090 Vulcan',
                        text: ['Передовая архитектура NVIDIA Ada Lovelace и 24 гигабайта памяти GDDR6X спрятаны под гладким кожухом с темной отделкой. Корпус Colorful iGame GeForce RTX 4090 Vulcan закрывает массив радиаторов и отлично справляется с поддержанием низких температур благодаря более крупным и более эффективным вентиляторам Hurricane Scythe Blades. Также карта оснащена съемным магнитным цифровым дисплеем iGame Smart LCD, на который в режиме реального времени можно вывести различную полезную информацию о системе или любые изображения, включая анимированные.'],
                        img: '/wp-content/uploads/px-colorful-igame-geforce-rtx-4090-vulcan.webp'
                    },
                    {
                        title: 'Colorful GeForce RTX 4090 NB EV-X (Battle Axe)',
                        text: ['Видеокарта в прочном массивном корпусе. Довольно сдержанный черно-красный дизайн от Colorful, который компания использовала и в прошлом поколении. Не самая быстрая среди конкурентов, оттого и позиционируется как начальная среди флагманов. GeForce RTX 4090, не больше, не меньше.'],
                        img: '/wp-content/uploads/px-colorful-geforce-rtx-4090-nb-ev-x-battle-axe.webp'
                    }
                ],
                fps: {
                    title: 'FPS в играх в 4К',
                    fpsCounters: [
                        {
                            img: '/wp-content/uploads/warzone-2.png',
                            count: 220
                        },
                        {
                            img: '/wp-content/uploads/elden-ring.png',
                            count: 185
                        },
                        {
                            img: '/wp-content/uploads/dl2.png',
                            count: 120
                        },
                        {
                            img: '/wp-content/uploads/gow.png',
                            count: 180
                        },
                        {
                            img: '/wp-content/uploads/cuberpank.png',
                            count: 98
                        },
                        {
                            img: '/wp-content/uploads/farcry6.png',
                            count: 182
                        },
                        {
                            img: '/wp-content/uploads/apex.png',
                            count: 240
                        },
                        {
                            img: '/wp-content/uploads/pubg-1.png',
                            count: 210
                        },
                        {
                            img: '/wp-content/uploads/overwatch.png',
                            count: 230
                        },
                        {
                            img: '/wp-content/uploads/forza-horizon.png',
                            count: 230
                        },
                    ]
                },
                videocards: [
                    {
                        url: '/wp-content/uploads/rtx40x.png',
                        name: 'GeForce RTX 4090',
                        attrs: {
                            'Количество CUDA-ядер': '16 384',
                            'Тактовая частота (Boost Clock)': '2520',
                            'Память': '24GB GDDR6X 21 Гб/сек',
                            'Пропускная способность памяти': '1008 Гб/сек',
                            'TDP': '450W',
                            'Производительность Time Spy Extreme': '~19 000',
                            'Производительность, TFLOPS': '90'
                        },
                        cls: 'grn'
                    },
                    {
                        url: '/wp-content/uploads/rtx30x.png',
                        name: 'GeForce RTX 3090',
                        attrs: {
                            'Количество CUDA-ядер': '10 496',
                            'Тактовая частота (Boost Clock)': '1700',
                            'Память': '24GB GDDR6X 19.5 Гб/сек',
                            'Пропускная способность памяти': '936 Гб/сек',
                            'TDP': '350W',
                            'Производительность Time Spy Extreme': '~10 500',
                            'Производительность, TFLOPS': '35.6'
                        },
                        cls: 'red'
                    }
                ],
                disc: {
                    title: 'Одна видеокарта - тысячи возможностей',
                    text: 'GeForce RTX 4090 обеспечивает исключительную производительность для любых задач. Видеокарта основана на архитектуре Ada Lovelace — 3-м поколении архитектуры GeForce RTX на базе графического процессора AD102. Рекордный показатель в 16384 ядер CUDA и передовой техпроцесс позволяют демонстрировать фантастическую мощь для игр и создания контента.',
                    img: '/wp-content/uploads/rtx4090.png'
                },
                comparison:{
                    title: 'Сравнение видеокарт 4090 и 3090'
                }

            }
        },
        created() {
            window.addEventListener('resize', this.handleResize);
            this.handleResize();
        },
        destroyed() {
            window.removeEventListener('resize', this.handleResize);
        },
        methods: {
            handleResize() {
                this.window.width = window.innerWidth;
                this.window.height = window.innerHeight;
            },
            mobileClass() {
                return{
                    'al-left': this.window.width > 992
                }
            },
            videoClass(){
                return{
                    'al-center': this.window.width < 1200,
                    'al-left': this.window.width > 1200
                }
            },
            mediaStyle(){
                return{
                    'grid100 width70' : this.window.width < 1200
                }
            }
        }
    }).mount('#app')
</script>
<?php get_footer(); ?>