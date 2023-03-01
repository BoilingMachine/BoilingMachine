<link type="text/css" rel="stylesheet" href="/wp-content/themes/boiling_machine/woocommerce/chairs/templates/sidebar-chairs/assets/sidebar.css">
<div class="chairs-sidebar">
    <div class="sidebar-area-wrapper">
        <div class="sidebar-area-wrapper-head-title-mobile">Все фильтры</div>
        <form action="" method="post" id="ajaxform">
            <?php
            $term              = get_queried_object();
            $term_select_id    = $term->term_id;
            $term_select_slug  = $term->slug;



            // Если теговая страница, то выборку делать от родительской категории
            if ($term->page_tag) {
                $term_parent        = get_term( $term->parent, $term->taxonomy );
                $term_select_id     = $term_parent->term_id;
                $term_select_slug   = $term_parent->slug;
                $term->filter       = get_field('filter', $term->taxonomy . '_' .$term->term_id);
            }

            $args = [
                'post_type' => 'product',
                'numberposts' => -1,
                'post_status' => 'publish',
                'fields' => 'ids',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'term_id',
                        'terms' => $term_select_id,
                        'operator' => 'IN',
                    )
                )
            ];

            // Теговая фильтрация

            // Фильтр отдельным товарам
            if(!empty($term->filter['post_in'])) {
                $args['post__in'] = $term->filter['post_in'];
            }

            $all_ids = get_posts($args);

            function sortByOrder($a, $b) {
                return $a->sort - $b->sort;
            }

            ?>
            <?php /*
            $cat_args = array(
                'taxonomy'   => "product_cat",
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => false,
                'parent'     => $term->term_id, // set your parent term id
				'exclude'    => [], //array(1159,1156,1157,1158,1160,1161)
            );

            $product_categories = get_terms($cat_args);
            // Новый фильтр
            //$product_categories = get_terms( array( 'taxonomy' => 'pa_proizvoditel', 'hide_empty' => true, 'object_ids' => $all_ids ) );
            ?>
            <?php if( $product_categories ) : ?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title">Производитель</h3>
                    </div>
                    <div class="single-ilter-body">
                        <ul class="filter-list">
                            <?php foreach( $product_categories as $product_category ) : ?>
                                <li>
                                    <input type="checkbox" name="product_cats[]" id="product-cat-<?php echo absint( $product_category->term_id ) ?>" value="<?php echo absint( $product_category->term_id ) ?>" />
                                    <label for="product-cat-<?php echo absint( $product_category->term_id ) ?>"><?php echo esc_html( $product_category->name ) ?></label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <? endif; */?>
            <?// $query = new WP_Query(array('post_type' => 'br_product_filter', 'nopaging' => true));
//            if ( $query->have_posts() ) {
//                echo '<select class="berocket_filter_list">';
//                while ( $query->have_posts() ) {
//                    $query->the_post();
//                    echo '<option data-name="' . get_the_title() . '" value="' . get_the_id() . '">' . get_the_title() . ' (ID:' . get_the_id() . ')</option>';
//                }
//                echo '</select>';
//                echo ' <a class="button berocket_add_filter_to_group" href="#add_filter">' . __('Add filter', 'BeRocket_AJAX_domain') . '</a>';
//                echo ' <a href="' . admin_url('edit.php?post_type=br_product_filter') . '">' . __('Manage filters', 'BeRocket_AJAX_domain') . '</a>';
//                wp_reset_postdata();
//            }


            ?>

            <?//exKod::Common()->drop($query)?>
            <!-- Фильтр Производитель -->
            <?if(empty($term->filter['pa_proizvoditel'])):?>
                <?php $arFilter = get_terms( array( 'taxonomy' => 'pa_proizvoditel', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>

                <?php if( $arFilter  AND count($arFilter) > 1) : ?>
                    <div class="single-filter">
                        <div class="single-filter-header">
                            <h3 class="single-filter-title"><span>Производитель</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        </div>
                        <div class="single-ilter-body scrolling">
                            <ul class="filter-list hide">
                                <?php foreach( $arFilter as $arItem ) : ?>
                                    <?$arItem->filter_hidden = get_field('filter_hidden',$arItem->taxonomy . '_' .$arItem->term_id)?>

                                    <li class="<?=$arItem->filter_hidden? 'hidden-not-active': false?>">
                                        <input type="checkbox" name="proizvoditel[]" id="proizvoditel-<?php echo esc_attr( $arItem->slug ) ?>" value="<?php echo esc_attr( $arItem->slug ) ?>" data-term-id="<?=$arItem->term_id?>" data-taxsanomy="<?=$arItem->taxonomy?>" />
                                        <label for="proizvoditel-<?php echo esc_attr( $arItem->slug ) ?>">
                                            <?php echo esc_html( $arItem->name ) ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if( count($arFilter) > 5 ): ?>
                                <p class="watch-more" attr-close="Свернуть" attr-open="Показать все">Показать все</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <?foreach ($arFilter as $key => $arItem) {
                        // Зависимость серии от производителя
                        $saveProizvoditelID = $arItem->term_id;
                    }?>
                <?endif;?>
            <?else:?>
                <?foreach ($term->filter['pa_proizvoditel'] as $key => $arItem):?>
                    <input type="hidden" name="proizvoditel[]" value="<?=$arItem->slug?>" />
                    <?$saveProizvoditelID = $arItem->term_id?>
                <?endforeach;?>
            <?endif;?>

            <!-- Фильтр Серия -->
            <?if(empty($term->filter['pa_seriya'])):?>
                <?php $arFilter = get_terms( array( 'taxonomy' => 'pa_seriya', 'hide_empty' => true, 'object_ids' => $all_ids, 'orderby' => 'meta_value_num') ); ?>

                <?php if( $arFilter AND count($arFilter) > 1) : ?>
                    <div class="single-filter type-search">
                        <div class="single-filter-header">
                            <h3 class="single-filter-title"><span>Серия</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        </div>
                        <div class="single-filter-body scrolling">
                            <div class="single-filter-search">
                                <input type="text" name="filter_item_search" class="js-filter-search" placeholder="Найти серию">
                            </div>
                            <ul class="filter-list hide">
                                <?
                                // Буква в алфавите
                                $letter = false;
                                $letterGroup = 0;
                                // Сортировка
    //                            foreach( $arFilter as $key => $arItem ) {
    //                                $arItem->sort = get_field('sort',$arItem->taxonomy . '_' .$arItem->term_id);
    //                                if(empty($arItem->sort)) $arItem->sort = 500;
    //                            }
    //                            usort($arFilter, 'sortByOrder');
    //
    //                            exKod::Common()->drop($arFilter);
                                //
                                ?>
                                <?php foreach( $arFilter as $arItem ) : ?>
                                    <?  $arItem->filter_hidden = get_field('filter_hidden',$arItem->taxonomy . '_' .$arItem->term_id);
                                        $arItem->proizvoditel = get_field('proizvoditel',$arItem->taxonomy . '_' .$arItem->term_id);

                                        // Зависимость от производителя
                                        if(empty($arItem->proizvoditel) AND !empty($saveProizvoditelID)){
                                            update_field( 'proizvoditel' , $saveProizvoditelID, $arItem->taxonomy . '_' .$arItem->term_id);
                                            $arItem->proizvoditel = $saveProizvoditelID;
                                        }

                                        // Буква в алфавите
                                        if(mb_substr($arItem->name, 0, 1) !== $letter) {
                                            $letter = mb_substr($arItem->name, 0, 1);
                                            $letterGroup++;
                                            ?>
                                            <li class="letter" data-letter-group="<?=$letterGroup?>">
                                               <span><?=$letter?></span>
                                            </li>
                                            <?
                                        }
                                    ?>
                                    <?//if($arItem->filter_hidden) continue;?>
                                    <li data-letter-group="<?=$letterGroup?>" class="<?=$arItem->filter_hidden? 'hidden-not-active': false?>">
                                        <input type="checkbox" name="brends[]" id="brends-<?php echo esc_attr( $arItem->slug ) ?>" value="<?php echo esc_attr( $arItem->slug ) ?>" data-proizvoditel-id="<?=$arItem->proizvoditel?>" data-taxsanomy="<?=$arItem->taxonomy?>" />
                                        <label for="brends-<?php echo esc_attr( $arItem->slug ) ?>">
                                            <?php echo esc_html( $arItem->name ) ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if( count($arFilter) > 5 ): ?>
                                <p class="watch-more" attr-close="Свернуть" attr-open="Показать все">Показать все</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?else:?>
                <?foreach ($term->filter['pa_seriya'] as $key => $arItem):?>
                    <input type="hidden" name="brends[]" value="<?=$arItem->slug?>" />
                <?endforeach;?>
            <?endif;?>
            <!-- Фильтр по Весу -->
            <?php /* $product_brends = get_terms( array( 'taxonomy' => 'pa_seriya', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>
            <?php if( $product_brends ) : ?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title">Серия</h3>
                    </div>
                    <div class="single-ilter-body scrolling">
                        <ul class="filter-list hide">
                            <?php foreach( $product_brends as $product_brend ) : ?>
                                <li>
                                    <input type="checkbox" name="brends[]" id="brend-<?php echo esc_attr( $product_brend->slug ) ?>" value="<?php echo esc_attr( $product_brend->slug ) ?>" />
                                    <label for="brend-<?php echo esc_attr( $product_brend->slug ) ?>">
                                        <?php echo esc_html( $product_brend->name ) ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if( count($product_brends) > 5 ): ?>
                            <p class="watch-more" attr-close="Свернуть" attr-open="Показать все">Показать все</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; */?>

            <?if(empty($term->filter['pa_gruzopodemnost'])):?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title"><span>Вес пользователя</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        <div class="uk-inline single-filter-icon-container">
                            <button class="single-filter-help-icon" type="button">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                    </style>
                                    <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                    C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                    <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                    "/>
                                    <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                    c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                    C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                    c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                    />
                                    </svg>
                            </button>
                            <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                Укажите вес человека, который будет использовать кресло<br>

                                <button class="single-filter-popup-close uk-drop-close" type="button" uk-close></button>
                            </div>
                        </div>
                    </div>
                    <div class="single-ilter-body">
                        <ul class="filter-list">
                            <input type="number" class="range-value js-filter-input" name="vesform" value="ves" placeholder="Укажите ваш вес" />
                        </ul>
                    </div>
                </div>
            <?else:?>
                <?foreach ($term->filter['pa_gruzopodemnost'] as $key => $arItem):?>
                    <input type="hidden" name="vesform[]" value="<?=$arItem->slug?>" />
                <?endforeach;?>
            <?endif;?>

            
            <!-- Фильтр по цене -->
            <?php
            if(!empty($term->filter['price_max']) OR !empty($term->filter['price_min'])):?>
                <?if(empty($term->filter['price_max'])) $term->filter['price_max'] = 200000; ?>
                <input type="hidden" value="<?=$term->filter['price_min']?>" name="min_price">
                <input type="hidden" value="<?=$term->filter['price_max']?>" name="max_price">
            <?else:?>
                <?
                // Обновляем цену если дата отличается
                $filter_date_1  = \DateTime::createFromFormat("d_m_y", get_field('filter-date-update', $term->taxonomy . '_' .$term->term_id));
                $filter_date_2  = \DateTime::createFromFormat("d_m_y", date("d_m_y"));

                if($filter_date_1 < $filter_date_2) {

                    $products_prices = wc_get_products($all_ids);
                    $prod_prices = [];
                    foreach ($products_prices as $products_price){
                        $price = exKod::Common()->clearNumber($products_price->get_price_html());

                        if(!empty($price)) {
                            array_push($prod_prices, $price);

                            // Обновляем цену у товара
                            update_field( 'czena_dlya_filtra' , $price, $products_price->get_id());
                        }
                    }


                    $min_price = round (min($prod_prices), -3);
                    $max_price = round (max($prod_prices), -3);

                    update_field( 'filter-price-min' , min($prod_prices), $term->taxonomy . '_' .$term->term_id);
                    update_field( 'filter-price-max',  max($prod_prices), $term->taxonomy . '_' .$term->term_id);
                    update_field( 'filter-date-update', date("d_m_y"), $term->taxonomy . '_' .$term->term_id);

                } else {
                    $min_price = round (get_field('filter-price-min', $term->taxonomy . '_' .$term->term_id), -3);
                    $max_price = round (get_field('filter-price-max', $term->taxonomy . '_' .$term->term_id), -3);
                }
                ?>

                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title"><span>Цена</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                    </div>
                    <div class="range-slider">
                        <span>
                            <input type="number" value="" min="<?php echo $min_price; ?>" max="<?php echo $max_price; ?>" step="1000" placeholder="<?=number_format($min_price, 0, '', ' '); ?>">
                            <input type="number" value="" min="<?php echo $min_price; ?>" max="<?php echo $max_price; ?>" step="1000" placeholder="<?=number_format($max_price, 0, '', ' '); ?>">
                        </span>
                        <input value="<?php echo $min_price; ?>" min="<?php echo $min_price; ?>" max="<?php echo $max_price; ?>" step="1000" type="range" id="min_price" name="min_price">
                        <input value="<?php echo $max_price; ?>" min="<?php echo $min_price; ?>" max="<?php echo $max_price; ?>" step="1000" type="range" id="max_price" name="max_price">
                    </div>
                </div>
            <?endif;?>

            
            <!-- Фильтр по цвету -->
            <?if(empty($term->filter['pa_czvet'])):?>
                <?php $arFilter = get_terms( array( 'taxonomy' => 'pa_czvet', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>
                <?  // Сортировка элементов
                foreach( $arFilter as $key => $arItem ) {
                    $arFilter[$key]->sort = get_field('sort',$arItem->taxonomy . '_' .$arItem->term_id);
                }

                usort($arFilter, 'sortByOrder');
                ?>
                <?php if( $arFilter) : ?>
                    <div class="single-filter type-color">
                        <div class="single-filter-header">
                            <h3 class="single-filter-title"><span>Цвет</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        </div>
                        <div class="single-ilter-body scrolling">
                            <ul class="filter-list hide">
                                <?php foreach( $arFilter as $arItem ) : ?>
                                    <?$arItem->filter_hidden = get_field('filter_hidden',$arItem->taxonomy . '_' .$arItem->term_id)?>

                                    <li class="<?=$arItem->filter_hidden? 'hidden-not-active': false?>">
                                        <input type="checkbox" name="color[]" id="color-<?php echo esc_attr( $arItem->slug ) ?>" value="<?php echo esc_attr( $arItem->slug ) ?>" />
                                        <label for="color-<?php echo esc_attr( $arItem->slug ) ?>">
                                            <span style="background: <?php echo retColor($arItem->name); ?> " class="color"></span>
                                            <?php echo esc_html( $arItem->name ) ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if( count($arFilter) > 5 ): ?>
                                <p class="watch-more" attr-close="Свернуть" attr-open="Показать все">Показать все</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?endif;?>
            <?else:?>
                <?foreach ($term->filter['pa_czvet'] as $key => $arItem):?>
                    <input type="hidden" name="color[]" value="<?=$arItem->slug?>" />
                <?endforeach;?>
            <?endif;?>

            <?/*
            <!-- Фильтр по цвету Старый -->
            <?php $product_colors = get_terms( array( 'taxonomy' => 'pa_czvet', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>
            <?php if( $product_colors ) : ?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title">Цвет</h3>
                    </div>
                    <div class="single-ilter-body scrolling">
                        <ul class="filter-list hide">
                            <?php foreach( $product_colors as $product_color ) : ?>
                                <li>
                                    <input type="checkbox" name="color[]" id="color-<?php echo esc_attr( $product_color->slug ) ?>" value="<?php echo esc_attr( $product_color->slug ) ?>" />
                                    <label for="color-<?php echo esc_attr( $product_color->slug ) ?>">
                                        <span style="background: <?php echo retColor($product_color->name); ?> " class="color"></span>
                                        <?php echo esc_html( $product_color->name ) ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if( count($product_colors) > 5 ): ?>
                        <p class="watch-more" attr-close="Свернуть" attr-open="Показать все">Показать все</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            */?>

            <!-- Фильтр по максимальной нагрузку -->
            <?/*
            <?php $product_vesa = get_terms( array( 'taxonomy' => 'pa_gruzopodemnost', 'hide_empty' => true, 'object_ids' => $all_ids, 'order' => 'DESC' ) ); ?>
            <?php if( $product_vesa ) : ?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title">Максимальная нагрузка (кг)</h3>
                        <div class="uk-inline single-filter-icon-container">
                            <button class="single-filter-help-icon" type="button">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <style type="text/css">
                                .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                </style>
                                    <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                    <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                "/>
                                    <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                    />
                                </svg>
                                
                            </button>
                            <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">							
								Рекомендованный вес пользователя, на который рассчитаны конструкция и подъемный механизм кресла
								<a href="/o-kreslah/maksimalnaya-nagruzka-kg/" class="filter-more" target="_blank">Подробнее</a>
							</div>
                        </div>                       
                    </div>
                    <div class="single-ilter-body scrolling">
                        <ul class="filter-list hide">
                            <?php foreach( $product_vesa as $product_ves ) : ?>
                                <li>
                                    <input type="checkbox" name="vesa[]" id="ves-<?php echo esc_attr( $product_ves->slug ) ?>" value="<?php echo esc_attr( $product_ves->slug ) ?>" />
                                    <label for="ves-<?php echo esc_attr( $product_ves->slug ) ?>">
                                        <?php echo esc_html( $product_ves->name ) ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if( count($product_vesa) > 5 ): ?>
                        <p class="watch-more" attr-close="Свернуть" attr-open="Показать все">Показать все</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            */ ?>
            <!-- Фильтр материала крестовины -->
            <?php $product_mat_krests = get_terms( array( 'taxonomy' => 'pa_material-krestoviny', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>
            <?
            // Сортировка
            foreach( $product_mat_krests as $key => $arItem ) {
                $product_mat_krests[$key]->sort = get_field('sort',$arItem->taxonomy . '_' .$arItem->term_id);
            }
            usort($product_mat_krests, function($a, $b) {
                return $a->sort - $b->sort;
            });
            ?>

            <?php if( $product_mat_krests ) : ?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title"><span>Материал крестовины</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        <div class="uk-inline single-filter-icon-container">
                            <button class="single-filter-help-icon" type="button">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                </style>
                                    <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                    <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                "/>
                                    <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                    />
                                </svg>
                            </button>
                            <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                От материала крестовины зависит устойчивость к нагрузкам кресла<br>
                                Металл — выдерживает высокие нагрузки<br>
                                Пластик — выдерживает обычные нагрузки<br>
                                <a href="/o-kreslah/material-krestoviny/" class="filter-more" target="_blank">Подробнее</a>

                                <button class="single-filter-popup-close uk-drop-close" type="button" uk-close></button>
                            </div>
                        </div>
                    </div>
                    <div class="single-ilter-body">
                        <ul class="filter-list">
                            <?php foreach( $product_mat_krests as $product_mat_krest ) : ?>
                                <li>
                                    <input type="checkbox" name="matkrest[]" id="matkrest-<?php echo esc_attr( $product_mat_krest->slug ) ?>" value="<?php echo esc_attr( $product_mat_krest->slug ) ?>" />
                                    <label for="matkrest-<?php echo esc_attr( $product_mat_krest->slug ) ?>">
                                        <?php echo esc_html( $product_mat_krest->name ) ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Механизм качания -->
            <?if(empty($term->filter['pa_mehanizm-kachaniya'])):?>
                <?php $product_mechanizm_kachs = get_terms( array( 'taxonomy' => 'pa_mehanizm-kachaniya', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>
                <?
                // Сортировка
                foreach( $product_mechanizm_kachs as $key => $arItem ) {
                    $product_mechanizm_kachs[$key]->sort = get_field('sort',$arItem->taxonomy . '_' .$arItem->term_id);
                }
                usort($product_mechanizm_kachs, function($a, $b) {
                    return $a->sort - $b->sort;
                });
                ?>
                <?php if( $product_mechanizm_kachs ) : ?>
                    <div class="single-filter">
                        <div class="single-filter-header">
                            <h3 class="single-filter-title"><span>Механизм качания</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                            <div class="uk-inline single-filter-icon-container">
                                <button class="single-filter-help-icon" type="button">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                    </style>
                                        <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                    C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                        <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                    "/>
                                        <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                    c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                    C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                    c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                        />
                                    </svg>
                                </button>
                                <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                    Механизм позволяет удобно раскачиваться в кресле<br>
                                    Мультиблок — качение и фиксация в форме “ковша”<br>
                                    Топ-ган — только качание

                                    <a href="/o-kreslah/stati-o-kreslah/funkcziya-kachaniya-kresla/" class="filter-more" target="_blank">Подробнее</a>
                                    <button class="single-filter-popup-close uk-drop-close" type="button" uk-close></button>
                                </div>
                            </div>
                        </div>
                        <div class="single-ilter-body">
                            <ul class="filter-list">
                                <?php foreach( $product_mechanizm_kachs as $product_mechanizm_kach ) : ?>
                                    <li>
                                        <input type="checkbox" name="mechanizm_kach[]" id="mechanizm_kach-<?php echo esc_attr( $product_mechanizm_kach->slug ) ?>" value="<?php echo esc_attr( $product_mechanizm_kach->slug ) ?>" />
                                        <label for="mechanizm_kach-<?php echo esc_attr( $product_mechanizm_kach->slug ) ?>">
                                            <?php echo esc_html( $product_mechanizm_kach->name ) ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            <?else:?>
                <?foreach ($term->filter['pa_mehanizm-kachaniya'] as $key => $arItem):?>
                    <input type="hidden" name="mechanizm_kach[]" value="<?=$arItem->slug?>" />
                <?endforeach;?>
            <?endif;?>

            <!-- Наличие подушек -->
            <?php $product_podushkis = get_terms( array( 'taxonomy' => 'pa_nalichie-podushek', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>
            <?
            // Сортировка
            foreach( $product_podushkis as $key => $arItem ) {
                $product_podushkis[$key]->sort = get_field('sort',$arItem->taxonomy . '_' .$arItem->term_id);
            }
            usort($product_podushkis, function($a, $b) {
                return $a->sort - $b->sort;
            });
            ?>
            <?php if( $product_podushkis ) : ?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title"><span>Наличие подушек</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        <div class="uk-inline single-filter-icon-container">
                            <button class="single-filter-help-icon" type="button">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                </style>
                                    <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                    <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                "/>
                                    <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                    />
                                </svg>
                            </button>
                            <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                Подушки игрового кресла снижают нагрузку на позвоночник и сохраняют осанку. Поясничный упор является аналогом подушки под поясницу и позволяет настроить силу опоры под себя.
                                <a href="/o-kreslah/nalichie-podushek/" class="filter-more" target="_blank">Подробнее</a>
                                <button class="single-filter-popup-close uk-drop-close" type="button" uk-close></button>
                            </div>
                        </div>
                    </div>
                    <div class="single-ilter-body">
                        <ul class="filter-list">
                            <?php foreach( $product_podushkis as $product_podushki ) : ?>
                                <li>
                                    <input type="checkbox" name="reg_podushki[]" id="reg_podushki-<?php echo esc_attr( $product_podushki->slug ) ?>" value="<?php echo esc_attr( $product_podushki->slug ) ?>" />
                                    <label for="reg_podushki-<?php echo esc_attr( $product_podushki->slug ) ?>">								
                                        <?php 
											$name =  $product_podushki->name;
										    $name = str_replace(';',',',$name);
											echo esc_html( $name ); 
										?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Регулировка подлокотников -->
            <?php $product_regulirovka_podlokotnikovs = get_terms( array( 'taxonomy' => 'pa_regulirovka-podlokotnikov', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>

            <?
            // Сортировка
            foreach( $product_regulirovka_podlokotnikovs as $key => $arItem ) {
                $product_regulirovka_podlokotnikovs[$key]->sort = get_field('sort',$arItem->taxonomy . '_' .$arItem->term_id);
            }
            usort($product_regulirovka_podlokotnikovs, function($a, $b) {
                return $a->sort - $b->sort;
            });
            ?>
            <?php if( $product_regulirovka_podlokotnikovs ) : ?>
                <div class="single-filter">
                    <div class="single-filter-header">
                        <h3 class="single-filter-title"><span>Регулировка подлокотников</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        <div class="uk-inline single-filter-icon-container">
                            <button class="single-filter-help-icon" type="button">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#c2c2c2;}
                                </style>
                                    <path class="st0" d="M8.5,1.5c-3.8,0-7,3.1-7,7c0,3.8,3.1,7,7,7c3.8,0,7-3.1,7-7C15.5,4.7,12.3,1.5,8.5,1.5z M0,8.5
                                C0,3.8,3.8,0,8.5,0C13.2,0,17,3.8,17,8.5c0,4.7-3.8,8.5-8.5,8.5C3.8,17,0,13.2,0,8.5z"/>
                                    <path class="st0" d="M7.7,12.4c0-0.4,0.3-0.8,0.8-0.8h0c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8h0C8.1,13.1,7.7,12.8,7.7,12.4z
                                "/>
                                    <path class="st0" d="M8.7,5.4c-0.4-0.1-0.7,0-1,0.2C7.3,5.8,7.1,6.1,7,6.4C6.8,6.8,6.4,7.1,6,6.9c-0.4-0.1-0.6-0.6-0.5-1
                                c0.2-0.7,0.7-1.3,1.3-1.6S8.2,3.8,9,3.9C9.7,4,10.3,4.4,10.8,5c0.5,0.6,0.7,1.3,0.7,2c0,1.2-0.9,2-1.5,2.4C9.7,9.6,9.4,9.7,9.1,9.8
                                C9,9.9,8.9,9.9,8.8,10c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0-0.2-0.7L8.7,10c-0.4,0.1-0.8-0.1-1-0.5c-0.1-0.4,0.1-0.8,0.5-1l0,0
                                c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C8.7,8.3,8.9,8.2,9.2,8C9.7,7.7,10,7.3,10,7v0c0-0.4-0.1-0.7-0.4-1C9.4,5.7,9.1,5.5,8.7,5.4z"
                                    />
                                </svg>
                            </button>
                            <div class="uk-card single-filter-popup" uk-drop="mode: click; pos: top-right">
                                Позволяет снять лишнюю нагрузку с плеч и локтей и усесться в кресло с максимальным удобством.<br>
                                4D – регулировка по высоте, вокруг своей оси, по вылету вперед\назад и вправо\влево<br>
                                3D – регулировка по высоте, вокруг своей оси и по вылету вперед и назад<br>
                                2D – регулировка по высоте и вокруг своей оси<br>
                                1D – регулировка только по высоте.<br>
                                <a href="/o-kreslah/stati-o-kreslah/regulirovka-podlokotnikov/" class="filter-more"  target="_blank">Подробнее</a>
                                <button class="single-filter-popup-close uk-drop-close" type="button" uk-close></button>
                            </div>
                        </div>
                    </div>
                    <div class="single-ilter-body">
                        <ul class="filter-list">
                            <?php foreach( $product_regulirovka_podlokotnikovs as $product_regulirovka_podlokotnikov ) : ?>
                                <li>
                                    <input type="checkbox" name="reg_pod[]" id="reg_pod-<?php echo esc_attr( $product_regulirovka_podlokotnikov->slug ) ?>" value="<?php echo esc_attr( $product_regulirovka_podlokotnikov->slug ) ?>" />
                                    <label for="reg_pod-<?php echo esc_attr( $product_regulirovka_podlokotnikov->slug ) ?>">
                                        <?php echo esc_html( $product_regulirovka_podlokotnikov->name ) ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Материал обшивки -->
            <?if(empty($term->filter['pa_material-obshivki'])):?>
                <?php $arFilter = get_terms( array( 'taxonomy' => 'pa_material-obshivki', 'hide_empty' => true, 'object_ids' => $all_ids ) ); ?>

                <?php if( $arFilter  AND count($arFilter) > 1) : ?>
                    <div class="single-filter">
                        <div class="single-filter-header">
                            <h3 class="single-filter-title"><span>Материал</span> <b class="js-filter-param-clear">Сбросить</b></h3>
                        </div>
                        <div class="single-ilter-body scrolling">
                            <ul class="filter-list hide">
                                <?php foreach( $arFilter as $arItem ) : ?>
                                    <?$arItem->filter_hidden = get_field('filter_hidden',$arItem->taxonomy . '_' .$arItem->term_id)?>

                                    <li class="<?=$arItem->filter_hidden? 'hidden-not-active': false?>">
                                        <input type="checkbox" name="pa_material-obshivki[]" id="pa_material-obshivki-<?php echo esc_attr( $arItem->slug ) ?>" value="<?php echo esc_attr( $arItem->slug ) ?>" data-term-id="<?=$arItem->term_id?>" />
                                        <label for="pa_material-obshivki-<?php echo esc_attr( $arItem->slug ) ?>">
                                            <?php echo esc_html( $arItem->name ) ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if( count($arFilter) > 5 ): ?>
                                <p class="watch-more" attr-close="Свернуть" attr-open="Показать все">Показать все</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?endif;?>
            <?else:?>
                <?foreach ($term->filter['pa_material-obshivki'] as $key => $arItem):?>
                    <input type="hidden" name="pa_material-obshivki[]" value="<?=$arItem->slug?>" />
                    <?$saveProizvoditelID = $arItem->term_id?>
                <?endforeach;?>
            <?endif;?>
            <!-- Материал обшивки  -->

            <!-- Выборка отдельных товаров  -->
            <?if(!empty($term->filter['post_in'])):?>
                <?foreach ($term->filter['post_in'] as $key => $arItem):?>
                    <input type="hidden" name="post_in[]" value="<?=$arItem?>" />
                <?endforeach;?>
            <?endif;?>

            <!-- Остальные фильтры  -->
            <input type="hidden" name="curcategory" value="<?php echo $term_select_slug; ?>" />
            <input type="hidden" name="rostform" value="rost" />
            <input type="hidden" name="materialform" value="material" />

            <input type="hidden" name="sort_meta_key" value="<?=($_COOKIE['sort_meta_key']) ? $_COOKIE['sort_meta_key'] : 'rejting_tovara'?>" />
            <input type="hidden" name="sort_orderby" value="<?=($_COOKIE['sort_orderby']) ? $_COOKIE['sort_orderby'] : 'meta_value_num'?>" />
            <input type="hidden" name="sort_count" value="<?=($_COOKIE['sort_count']) ? $_COOKIE['sort_count'] : '24'?>" />
            <input type="hidden" name="sort_order" value="<?=($_COOKIE['sort_order']) ? $_COOKIE['sort_order'] : 'asc'?>" />
            <input type="hidden" name="url" value="<?=exKod::Router()->getUrl()?>">
            <input type="hidden" name="page" value="<?=($_GET['pages'])? $_GET['pages']: 1?>">
            <input type="hidden" name="term_id" value="<?=$term->term_id;?>">

            <input type="hidden" name="action" value="ajaxfilter" />
        </form>
    </div>

<script>
    $(window).keyup(function(e){
        var target = $('.checkbox-ios input:focus');
        if (e.keyCode == 9 && $(target).length){
            $(target).parent().addClass('focused');
        }
    });

    $('.checkbox-ios input').focusout(function(){
        $(this).parent().removeClass('focused');
    });
</script>

</div>

