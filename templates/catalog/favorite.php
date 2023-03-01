<? get_header();

$queried_object = get_queried_object();
$taxonomy   = $queried_object->taxonomy;
$term_id    = $queried_object->term_id;

$queried_object->page_tag 	= get_field('page_tag', $queried_object->taxonomy . '_' .$queried_object->term_id);
$queried_object->filter 	= get_field('filter', $queried_object->taxonomy . '_' .$queried_object->term_id);

// Для формирования title
$obCategory = get_queried_object();
if($obCategory->parent)      $obCategoryLvl2 = get_term($obCategory->parent);
if($obCategoryLvl2->parent)  $obCategoryLvl3 = get_term($obCategoryLvl2->parent);

$obCategory->page_tag 	= get_field('page_tag', $obCategory->taxonomy . '_' .$obCategory->term_id);

// Если не тоговая страница
if(!$obCategory->page_tag) {
    if($obCategoryLvl3) {
        $title = $obCategoryLvl3->name . ' ' . $obCategoryLvl2->name . ' серия ' . $obCategory->name;
    }elseif($obCategoryLvl2) {
        $title =  $obCategoryLvl2->name . ' ' . $obCategory->name;
    }elseif($obCategory){
        $title = $obCategory->name;
    }
}else {
    $title = $obCategory->name;
}


//exKod::Common()->drop($queried_object->filter);

function retColor($coll)
{
    switch($coll) {
        case 'Оранжевый': return '#FF9600';
        case 'Белый': return '#FFFFFF';
        case 'Желтый': return '#FFF613';
        case 'Зеленый': return '#1FC751';
        case 'Коричневый': return '#843333';
        case 'Красный': return '#F11F1F';
        case 'Розовый': return '#F302DB';
        case 'Серый': return '#D2D2D2';
        case 'Синий': return '#0058CE';
        case 'Фиолетовый': return '#8400EC';
        case 'Черный': return '#111111';
        case 'Мультиколор': return ' linear-gradient(217deg, rgba(255,0,0,1), rgba(255,0,0,0) 70.71%),
      linear-gradient(127deg, rgba(0,255,0,1), rgba(0,255,0,0) 70.71%),
      linear-gradient(336deg, rgba(0,0,255,1), rgba(0,0,255,0) 70.71%)';
    }
}

?>
<link rel="stylesheet" href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs.css" media="all">
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs-second-category.css" media="all">

<div class="bm-computer-landing_header">
    <div class="bm-adaptive bm-margin bm">
        <div class="bm-computer-landing-header">
            <div class="bm-computer-landing-header-breadcrumb">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>
        <div class="bm-computer-landing-header-mobile">
            <?php woocommerce_breadcrumb(); ?>
        </div>
    </div>
</div>

<div class="main-container-chairs">
    <div class="bm-adaptive bm-margin bm">
        <div class="<?if(!exKod::Common()->getCookieArray('catalog_favorite')) echo 'bm-product-arvhive-container'?>"> <?// bm-product-arvhive-container?>
            <div class="">
                <? // Сортировка
                if (empty($_COOKIE['sort_meta_key'])) $_COOKIE['sort_meta_key'] = 'rejting_tovara_seriya_kresel';
                if (empty($_COOKIE['sort_orderby'])) $_COOKIE['sort_orderby'] = 'meta_value_num';
                if (empty($_COOKIE['sort_order'])) $_COOKIE['sort_order'] = 'desc';
                if (empty($_COOKIE['sort_count'])) $_COOKIE['sort_count'] = '24';
                ?>

                <form action="" method="post" id="ajaxform" style="display: none">
                    <!-- Экокожа  -->
                    <input type="hidden" name="curcategory" value="509">
<!--                    <input type="hidden" name="rostform" value="rost">-->
<!--                    <input type="hidden" name="materialform" value="material">-->

                    <input type="hidden" name="sort_meta_key" value="<?=($_COOKIE['sort_meta_key']) ? $_COOKIE['sort_meta_key'] : 'rejting_tovara_seriya_kresel'?>" />
                    <input type="hidden" name="sort_orderby" value="<?=($_COOKIE['sort_orderby']) ? $_COOKIE['sort_orderby'] : 'meta_value_num'?>" />
                    <input type="hidden" name="sort_count" value="<?=($_COOKIE['sort_count']) ? $_COOKIE['sort_count'] : '24'?>" />
                    <input type="hidden" name="sort_order" value="<?=($_COOKIE['sort_order']) ? $_COOKIE['sort_order'] : 'desc'?>" />
                    <input type="hidden" name="url" value="<?=exKod::Router()->getUrl()?>">
                    <input type="hidden" name="page" value="<?=($_GET['pages'])? $_GET['pages']: 1?>">


                    <input type="hidden" name="custom" value="favorite">
                    <input type="hidden" name="action" value="ajaxfilter">
                </form>

                <div class="bm-chairs-popular-products">

                    <h1 class="bm-chairs-popular-products__title"><?php echo get_the_title() ?></h1>
                    <?if(exKod::Common()->getCookieArray('catalog_favorite')):?>
                    <div class="catalog-sort">
                        <div class="catalog-sort-left">
                            <div class="catalog-sort-type-mobile">
                                <span>Сортировка</span>
                                <svg width="11" height="6" viewBox="0 0 11 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M5.5 3.81689L9.81956 -5.15985e-08L11 1.14005L5.5 6L-4.9833e-08 1.14005L1.18044 -4.29227e-07L5.5 3.81689Z"
                                          fill="#212121"/>
                                </svg>
                            </div>
                            <ul class="catalog-sort-list catalog-sort-type">
                                <li class="catalog-sort-list-head">
                                    <div class="catalog-sort-list-head-title">Сортировать</div>
                                    <div class="catalog-sort-list-head-close">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L9 7.58579L16.2929 0.292893C16.6834 -0.0976311 17.3166 -0.0976311 17.7071 0.292893C18.0976 0.683417 18.0976 1.31658 17.7071 1.70711L10.4142 9L17.7071 16.2929C18.0976 16.6834 18.0976 17.3166 17.7071 17.7071C17.3166 18.0976 16.6834 18.0976 16.2929 17.7071L9 10.4142L1.70711 17.7071C1.31658 18.0976 0.683417 18.0976 0.292893 17.7071C-0.0976311 17.3166 -0.0976311 16.6834 0.292893 16.2929L7.58579 9L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
                                                  fill="#A2A5A9"/>
                                        </svg>
                                    </div>
                                </li>
                                <li>
                                    <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_meta_key'] == 'rejting_tovara_seriya_kresel') ? 'active' : false ?>"
                                       data-href="#" href="#" data-meta-key="rejting_tovara_seriya_kresel"
                                       data-orderby="meta_value_num" data-order="desc">Сначала популярные</a></li>
                                <li>
                                    <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_meta_key'] == 'czena_dlya_filtra' and $_COOKIE['sort_order'] == 'asc') ? 'active' : false ?>"
                                       data-href="#" href="#" data-meta-key="czena_dlya_filtra"
                                       data-orderby="meta_value_num" data-order="asc">Сначала дешевле</a></li>
                                <li>
                                    <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_meta_key'] == 'czena_dlya_filtra' and $_COOKIE['sort_order'] == 'desc') ? 'active' : false ?>"
                                       data-href="#" href="#" data-meta-keye="czena_dlya_filtra"
                                       data-orderby="meta_value_num" data-order="desc">Сначала дороже</a></li>
                                <li>
                                    <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_meta_key'] == '_wc_average_rating') ? 'active' : false ?>"
                                       data-href="#" href="#" data-meta-key="_wc_average_rating"
                                       data-orderby="meta_value_num" data-order="desc">Сначала с высоким
                                        рейтингом</a></li>
                            </ul>
                        </div>
                        <div class="catalog-sort-right">
                            <div class="bm-filter-chairs-mobile">
                                <img src="/wp-content/uploads/bm-chair-mobile-filter.svg">
                                <p class="bm-chair-mobile-button">Фильтры</p>
                            </div>
                            <div class="catalog-sort-count">
                                <div class="catalog-sort-name">Показывать по:</div>
                                <ul class="catalog-sort-list catalog-sort-count">
                                    <li>
                                        <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_count'] == '24') ? 'active' : false ?>"
                                           data-href="#" href="#" data-count="24">24</a></li>
                                    <li>
                                        <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_count'] == '48') ? 'active' : false ?>"
                                           data-href="#" href="#" data-count="48">48</a></li>
                                    <li>
                                        <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_count'] == '72') ? 'active' : false ?>"
                                           data-href="#" href="#" data-count="72">72</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?endif;?>
                </div>
                <br>
                <?if(exKod::Common()->getCookieArray('catalog_favorite')):?>
                <ul class="catalog-comparison-products products columns-4">
                    <?php
                    global $wp_query;

                    $args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'post__in' => explode(',', $_COOKIE['catalog_favorite']),
                        'posts_per_page' => $_COOKIE['sort_count'],
                        'paged' => $_GET['pages'],
                        'orderby' => [
                            $_COOKIE['sort_meta_key'] => $_COOKIE['sort_order'],
                            'ID' => 'DESC',
                        ],
                        'meta_query' => [
                            'relation' => 'AND',
                        ]
                    );

                    $args['meta_query'][$_COOKIE['sort_meta_key']] = [
                        'key' => $_COOKIE['sort_meta_key'],
                        'compare' => 'EXISTS',
                        'type' => 'NUMERIC'
                    ];

                    $query = new WP_Query($args);



                    $arComparison = false;

                    if ($query->have_posts()) {
                        // Получить массив сравнение
                        while ($query->have_posts()) {
                            $query->the_post(); global $product;

                            foreach ($product->attributes as $arItem) {
                                $arComparison[$arItem['name']]['value'] = (object) array_merge((array) $arComparison[$arItem['name']]['value'], (array) $arItem['options']);
                            }
                        }

                        foreach ($arComparison as $key => $arItem) {
                            $arComparison[$key]['name']  = get_taxonomies(['name' => $key], 'objects')[$key]->labels->singular_name;
                            $terms = get_terms( $key, [
                                'hide_empty' => false,
                                'include' => (array) $arItem['value']
                            ]);
                            foreach ($terms as $term){
                                $arComparison[$key]['terms'][$term->term_id] = $term;
                            }
                        }




                       // exKod::Common()->drop($arComparison);

                        while ($query->have_posts()) {
                            $query->the_post();
                            global $product;
                            require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/content-product-chairs.php';
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </ul>
                <div class="btn-catalog-clear js-btn-favorite-clear">Очистить список избранного</div>
                <br>
                <a href="/igrovye-kresla/" class="btn-catalog-back">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14 7C14 7.48325 13.6082 7.875 13.125 7.875L2.98744 7.875L7.61872 12.5063C7.96043 12.848 7.96043 13.402 7.61872 13.7437C7.27701 14.0854 6.72299 14.0854 6.38128 13.7437L0.256282 7.61872C0.0921885 7.45462 6.37551e-07 7.23206 6.47695e-07 7C6.57838e-07 6.76793 0.0921885 6.54538 0.256283 6.38128L6.38128 0.256281C6.72299 -0.0854276 7.27701 -0.0854274 7.61872 0.256281C7.96043 0.59799 7.96043 1.15201 7.61872 1.49372L2.98744 6.125L13.125 6.125C13.6082 6.125 14 6.51675 14 7Z" fill="#EF2525"/>
                    </svg>
                    <span>Вернуться к товарам</span>
                </a>
                <br><br><br>
                <?else:?>
                    <br>
                    Нет товаров в избранном
                    <br><br><br>
                <?endif?>
            </div>
        </div>
    </div>
</div>

<style>
    .wc-pao-addon-container {
        display: none;
    }

    #product-addons-total {
        display: none;
    }
</style>
<?php

function get_rating($rat)
{

    switch ($rat) {
        case "1.0":
            for ($i = 0; $i < 1; $i++) {
                echo "<img src='/wp-content/uploads/rating-star.svg'>";
            }
            break;
        case "2.0":
            for ($i = 0; $i < 2; $i++) {
                echo "<img src='/wp-content/uploads/rating-star.svg'>";
            }
            break;
        case "3.0":
            for ($i = 0; $i < 3; $i++) {
                echo "<img src='/wp-content/uploads/rating-star.svg'>";
            }
            break;
        case "4.0":
            for ($i = 0; $i < 4; $i++) {
                echo "<img src='/wp-content/uploads/rating-star.svg'>";
            }
            break;
        case "5.0":
            for ($i = 0; $i < 5; $i++) {
                echo "<img src='/wp-content/uploads/rating-star.svg'>";
            }
            break;
    }

}

?>
<script src="/wp-content/themes/boiling_machine/woocommerce/chairs/js/ajax.js" type="text/javascript"></script>
<? get_footer(); ?>
