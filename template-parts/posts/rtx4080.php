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
                    ПК на GeForce RTX 4080
                </h1>
                <a href="#modal-center" uk-toggle class="rtx-link uncor">Оформить предзаказ</a>
            </div>
        </div>
        <div class="rtx-main-image">
            <picture style="align-self: flex-start;">
                <source srcset="/wp-content/uploads/1-9-1200x630_auto_x2-1.jpg" media="(max-width: 1200px)">
                <source srcset="/wp-content/uploads/1-9-1200x630_auto_x2.jpg" media="(min-width: 1200px)">
                <img class="lozad" data-iesrc="/wp-content/uploads/1-9-1200x630_auto_x2.jpg">
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
                        
                        <div class="links">
                            <a :href="product.link" class="link-product-more">Подробнее</a>
                        </div>
                    
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
                        <a href="#modal-center" uk-toggle class="link-popup">Оформите предзаказ</a>
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
        $my_postid = 18901;//This is page id or post id
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
                        <div class="form-container-form"><?php echo do_shortcode('[wpforms id="19896" title="false" description="false"]'); ?></div>
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
                <div class="form-container-form"><?php echo do_shortcode('[wpforms id="19896" title="false" description="false"]'); ?></div>
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
                productsTitle: 'Рекомендуемые игровые компьютеры для предзаказа',
                products:
                    [
                    {
                        img: '/wp-content/uploads/bm-crystal.png',
                        title: 'BOILING CRYSTAL MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4080',
                            'Intel Core i9 12900',
                            'Z690',
                            '32 Гб DDR5',
                            '2TB',
                            '1300 Вт'
                        ],
                        link: '/kompyutery/pk-na-geforce-rtx-40x/boiling-crystal-machine-rtx-4080-i9-12900k/'
                    },
                    {
                        img: '/wp-content/uploads/bm-tower.png',
                        title: 'BOILING TOWER MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4080',
                            'Intel Core i9 12900',
                            'Z690',
                            '32 Гб DDR5',
                            '2TB',
                            '1300 Вт'
                        ],
                        link: '/kompyutery/pk-na-geforce-rtx-40x/boiling-tower-machine-rtx-4080-i9-12900k/'
                    },
                    {
                        img: '/wp-content/uploads/bm-crystal.png',
                        title: 'BOILING CRYSTAL MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4080',
                            'AMD Ryzen 9 5950',
                            'X670E',
                            '32 Гб DDR5',
                            '2TB',
                            '1300 Вт'
                        ],
                        link: '/kompyutery/pk-na-geforce-rtx-40x/boiling-crystal-machine-rtx-4090-5950x-2/'
                    },
                    {
                        img: '/wp-content/uploads/bm-tower.png',
                        title: 'BOILING TOWER MACHINE',
                        set: [
                            'NVIDIA GeForce RTX 4080',
                            'AMD Ryzen 9 5950',
                            'X670E',
                            '32 Гб DDR5',
                            '2TB',
                            '1300 Вт'
                        ],
                        link: '/kompyutery/pk-na-geforce-rtx-40x/boiling-tower-machine-rtx-4080-5950x/'
                    }
                ],				
                reflex: {
                  title: 'NVIDIA Reflex',
                  text: 'Порой победа решается за доли секунды, и в такие важные игровые моменты как никогда ценится скорость прицеливания и попадание точно в цель. Минимизация задержек системы и лучшая отзывчивость управления с GeForce RTX 40 и NVIDIA Reflex обеспечивают уникальное конкурентное преимущество в соревновательных играх.',
                  img: '/wp-content/uploads/reflex.png'
                },
                nvidia: [
                    {
                        title: 'NVIDIA DLSS',
                        text: 'Новое слово в графике на основе ИИ с использованием алгоритмов DLSS (Deep Learning Super Sampling). Рекордный FPS в любимых играх на ультра настройках стал возможным благодаря созданию дополнительных высококачественных кадров. Опираясь на мощь тензорных ядер видеокарт GeForce RTX 40, технология NVIDIA DLSS 3 демонстрирует прирост производительности в играх от 2х до 4х раз!',
                        img: '/wp-content/uploads/dlss.png'
                    },
                    {
                        title: 'Трассировка лучей',
                        text: 'Архитектура NVIDIA Ada Lovelace заряжена на максимальный реализм изображения. Технология трассировки лучей моделирует естественное поведение света, отражения и тени, а благодаря третьему поколению ядер RT видеокарт GeForce RTX 40 детализация игровых миров выходит на качественно новый уровень.',
                        img: '/wp-content/uploads/lights.png'
                    }
                ],
                videocds: [
                    {
                        title: 'Palit GeForce RTX 4080 GameRock',
                        text: [
                            'Видеокарта с дизайном “Ослепительный ангел” пленяет не только кристаллической поверхностью кожуха и оригинальной подсветкой ARGB, но и потрясает своей невероятной мощью. Архитектура NVIDIA Ada Lovelace способна обеспечить новый уровень производительности для игр и создания мультимедийного контента, а массивный радиатор и три улучшенных вентилятора гарантируют стабильность работы благодаря эффективному отводу тепла от платы видеокарты.'
                        ],
                        img: '/wp-content/uploads/palit.png'
                    },
                    {
                        title: 'ASUS ROG Strix GeForce RTX 4080',
                        text: ['Фирменный стиль ROG на страже ярких впечатлений. Бескомпромиссное охлаждение ASUS ROG Strix GeForce RTX 4080 стало возможно благодаря увеличенным радиаторам и улучшенным вентиляторам Axial-tech. Невероятная мощь видеокарты позволяет добиться колоссальной производительности в играх и программах для создания контента, а подсветка AURA SYNC задает видеокарте особый геймерский внешний вид.'],
                        img: '/wp-content/uploads/px-asus-rog-strix-geforce-rtx-4090.webp'
                    },
                    {
                        title: 'ASUS TUF Gaming GeForce RTX 4080',
                        text: ['Сконструирована для наилучшего игрового опыта. Основанная на новейшей архитектуре NVIDIA Ada Lovelace видеокарта ASUS TUF Gaming GeForce RTX 4080 станет верным товарищем любого геймера благодаря своей высочайшей производительности и универсальному внешнему виду. Обновленная система охлаждения с вентиляторами Axial-tech обеспечивает стабильность работы в самых тяжелых играх и приложениях для творчества.'],
                        img: '/wp-content/uploads/px-asus-tuf-gaming-geforce-rtx-4090.webp'
                    },
                    {
                        title: 'MSI GeForce RTX 4080 GAMING ',
                        text: ['Максимум производительности под любыми нагрузками благодаря обновленной системе охлаждения TRI FROZR 3. Впечатляющая мощность MSI GeForce RTX 4080 GAMING идеально подойдет как для игр в любом разрешении, но наилучшим образом проявит себя в 4К. Дизайн видеокарты призван раскрыть ее огромный потенциал: скрывающие яркую подсветку хищные вырезы в сочетании с металлической поверхностью кожуха охлаждения превращают MSI GeForce RTX 4080 GAMING в настоящего дракона из мира игровых видеокарт.'],
                        img: '/wp-content/uploads/px-msi-geforce-rtx-4090-gaming.webp'
                    },
                    {
                        title: 'GIGABYTE GeForce RTX 4080 GAMING',
                        text: ['Скромный внешний вид не должен никого смущать. С запуском трех эффективных вентиляторов WINDFORCE активируется и подсветка. GIGABYTE GeForce RTX 4090 GAMING предстанет во всей своей красе и продемонстрирует недюжинную мощь в играх и приложениях для творчества. Кольца подсветки имеют множество режимов, а массивный радиатор дополняет геймерский дизайн видеокарты и обеспечивает стабильно низкие температуры.'],
                        img: '/wp-content/uploads/px-gigabyte-geforce-rtx-4090-gaming.webp'
                    },
                    {
                        title: 'GIGABYTE AORUS GeForce RTX 4080 MASTER',
                        text: [
                            'Серия Aorus от Gigabyte всегда отличалась высоким уровнем сборки, геймерским дизайном и нереальной мощью. Как и своя старшая сестра, GIGABYTE AORUS GeForce RTX 4080 MASTER предлагает геймерам идеальное сочетание производительности, стабильных рабочих температур и широких возможностей для персонализации. Технология WINDFORCE Bionic Shark значительно увеличивает поток воздуха для охлаждения чипа, а маленький дисплей и система подсветки помогают настроить внешний вид видеокарты под свои предпочтения.'                         
                        ],
                        img: '/wp-content/uploads/px-gigabyte-aorus-geforce-rtx-4090-master.webp'
                    }
                ],
                fps: {
                    title: 'FPS в играх в 4К',
                    fpsCounters: [
                        {
                            img: '/wp-content/uploads/warzone-2.png',
                            count: 200
                        },
                        {
                            img: '/wp-content/uploads/elden-ring.png',
                            count: 115
                        },
                        {
                            img: '/wp-content/uploads/dl2.png',
                            count: 105
                        },
                        {
                            img: '/wp-content/uploads/gow.png',
                            count: 118
                        },
                        {
                            img: '/wp-content/uploads/cuberpank.png',
                            count: 75
                        },
                        {
                            img: '/wp-content/uploads/farcry6.png',
                            count: 152
                        },
                        {
                            img: '/wp-content/uploads/apex.png',
                            count: 230
                        },
                        {
                            img: '/wp-content/uploads/pubg-1.png',
                            count: 198
                        },
                        {
                            img: '/wp-content/uploads/overwatch.png',
                            count: 214
                        },
                        {
                            img: '/wp-content/uploads/forza-horizon.png',
                            count: 160
                        },
                    ]
                },
                videocards: [
                    {
                        url: '/wp-content/uploads/rtx40x.png',
                        name: 'GeForce RTX 4080 (16 Гб)',
                        attrs: {
                            'Количество CUDA-ядер': '9 728',
                            'Тактовая частота (Boost Clock)': '2510',
                            'Память': '16 Гб GDDR6X',
                            'Пропускная способность памяти': '742,4 Гб/сек',
                            'TDP': '320W',
                            'Производительность Time Spy Extreme': '13 997',
                            'Производительность, TFLOPS': '53,62'
                        },
                        cls: 'grn'
                    },
                    {
                        url: '/wp-content/uploads/rtx30x.png',
                        name: 'GeForce RTX 3080 (12 Гб)',
                        attrs: {
                            'Количество CUDA-ядер': '8 960',
                            'Тактовая частота (Boost Clock)': '1710',
                            'Память': '12 Гб GDDR6X',
                            'Пропускная способность памяти': '912,4 Гб/сек',
                            'TDP': '350W',
                            'Производительность Time Spy Extreme': '9 358',
                            'Производительность, TFLOPS': '29,77'
                        },
                        cls: 'red'
                    }
                ],
                disc: {
                    title: 'Максимум скорости',
                    text: 'Видеокарта NVIDIA GeForce RTX 4080 на базе сверхэффективной архитектуры NVIDIA Ada Lovelace предназначена для игр и творчества. Благодаря своей высокоскоростной видеопамяти G6X объемом 16 ГБ видеокарта позволяет добиться высочайшей производительности, а геймеры и создатели контента получают безграничные возможности с трассировкой лучей и графикой на основе ИИ.',
                    img: '/wp-content/uploads/readd.org-nvidia-anonsirovala-videokarty-geforce-rtx-4090-i-rtx-4080-2022-2-1170x612-1.jpg'
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