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
        <div class="<?if(!exKod::Common()->getCookieArray('catalog_comparison')) echo 'bm-product-arvhive-container'?>"> <?// bm-product-arvhive-container?>

            <div class="">
                <div class="bm-chairs-popular-products">
                    <h1 class="bm-chairs-popular-products__title"><?php echo get_the_title() ?></h1>
                    <?if(exKod::Common()->getCookieArray('catalog_comparison')):?>
                    <div class="catalog-tag">
                        <ul class="catalog-tag-list js-tag" data-count="9">
                            <li><span>Игровые кресла  <b class="js-side-comparison-number"><?=count(exKod::Common()->getCookieArray('catalog_comparison'))?></b></span></li>
                        </ul>
                    </div>
                    <?endif;?>
                </div>

                <?if(exKod::Common()->getCookieArray('catalog_comparison')):?>
                    <div class="catalog-comparison-products-wrap">
                        <ul class="catalog-comparison-products products columns-4 js-catalog-products-comparison">
                            <?php
                            global $wp_query;


                            $args = array(
                                'post_type' => 'product',
                                'post_status' => 'publish',
                                'posts_per_page' => 20,
                                'post__in' => explode(',', $_COOKIE['catalog_comparison']),
                                'paged' => 1,
                                //                        'orderby' => 'meta_value_num',
                                //                        'meta_key' => $_COOKIE['sort_meta_key'],
                                //                        'order' => $_COOKIE['sort_order'],
                            );

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
                    </div>
                    
                    <div class="catalog-comparison-form">
                        <label class="checkbox-ios">
                            <input type="checkbox">
                            <span class="checkbox-ios-switch"></span>
                        </label>
                        <div class="catalog-comparison-form-text">
                            Показывать только различия
                        </div>
                    </div>
                    <div class="catalog-comparison-list">
                        <div class="catalog-comparison-item">
                            <div class="catalog-comparison-item-name">Преимущества покупки</div>
                            <div class="catalog-comparison-item-name-mini">Доставка</div>
                            <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                    <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                        <ul class="catalog-comparison-item-products-item-attr">
                                            <li class="">Доставка на дом</li>
                                        </ul>
                                    </li>
                                <?endwhile; wp_reset_postdata();?>
                            </ul>
                            <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                    <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                        <ul class="catalog-comparison-item-products-item-attr">
                                            <li class="">Забрать в магазине</li>
                                        </ul>
                                    </li>
                                <?endwhile; wp_reset_postdata();?>
                            </ul>
                            <div class="catalog-comparison-item-name-mini">Тестирование в магазине</div>
                            <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                    <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                        <ul class="catalog-comparison-item-products-item-attr">
                                            <li class="">Бесплатно </li>
                                        </ul>
                                    </li>
                                <?endwhile; wp_reset_postdata();?>
                            </ul>
                        </div>

                        <!-- Общие данные  -->
                        <div class="catalog-comparison-item">
                            <div class="catalog-comparison-item-name">Общие данные</div>
                            <?foreach ($arComparison as $key => $arItemComparison):?>
                                <?
                                    if($key !== 'pa_seriya' AND $key !== 'pa_proizvoditel') continue;
                                ?>
                                <div class="catalog-comparison-item-name-mini"><?=$arItemComparison['name']?></div>
                                <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                    <?$last_attr = false?>
                                    <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                        <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                            <ul class="catalog-comparison-item-products-item-attr">
                                                <?if($key == 'pa_rekomenduemyj-ves' OR $key == 'pa_rekomenduemyj-rost'):?>

                                                    <?
                                                    if(!empty($product->attributes[$key]['options'])) {
                                                        $new_attr = $arComparison[$key]['terms'][$product->attributes[$key]['options'][0]]->name;

                                                        if($key == 'pa_rekomenduemyj-ves') $new_attr .= ' кг.';
                                                        if($key == 'pa_rekomenduemyj-rost') $new_attr .= ' см.';
                                                    } else {
                                                        $new_attr = 'Нет данных';
                                                    }
                                                    ?>

                                                    <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>">
                                                        <?=$new_attr?>
                                                    </li>
                                                    <?$last_attr = $new_attr?>
                                                <?else:?>
                                                    <? foreach ($product->attributes[$key]['options'] as $opt_id):?>
                                                        <?$new_attr = $arComparison[$key]['terms'][$opt_id]->name?>
                                                        <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>"><?=$new_attr?></li>
                                                        <?$last_attr = $new_attr?>
                                                    <?endforeach;?>
                                                <?endif;?>
                                            </ul>
                                        </li>
                                    <?endwhile; wp_reset_postdata();?>
                                </ul>
                            <?endforeach;?>
                            <div class="catalog-comparison-item-name">Модель кресла</div>
                            <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                    <?$last_attr = false?>
                                    <?$arField = get_field('model',$product->get_id());?>
                                    <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                        <?foreach ($arField as $field):?>
                                            <ul class="catalog-comparison-item-products-item-attr">
                                                <?$new_attr = $field?>
                                                <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>"><?=$new_attr?></li>
                                                <?$last_attr = $new_attr?>
                                            </ul>
                                        <?endforeach;?>
                                    </li>
                                <?endwhile; wp_reset_postdata();?>
                            </ul>
                            <div class="catalog-comparison-item-name">Гарантия</div>
                            <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                    <?$last_attr = false?>
                                    <?$arField = get_field('garantiya',$product->get_id());?>
                                    <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                        <?foreach ($arField as $field):?>
                                            <ul class="catalog-comparison-item-products-item-attr">
                                                <?$new_attr = $field?>
                                                <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>"><?=$new_attr?></li>
                                                <?$last_attr = $new_attr?>
                                            </ul>
                                        <?endforeach;?>
                                    </li>
                                <?endwhile; wp_reset_postdata();?>
                            </ul>
                        </div>

                        <!-- Плюсы  -->

                        <div class="catalog-comparison-item">
                            <div class="catalog-comparison-item-name">Плюсы</div>
                            <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                    <?$last_attr = false?>
                                    <?$post = get_field('kontent',$product->get_id());?>

                                    <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                        <? while ( have_rows('preimushhestva_kresla', $post->ID) ) : the_row()?>
                                            <ul class="catalog-comparison-item-products-item-attr">
                                                <?$new_attr = get_sub_field('preimushhestva_kresla_spisok')?>
                                                    <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>"><?=$new_attr?></li>
                                                <?$last_attr = $new_attr?>
                                            </ul>
                                        <?endwhile;?>
                                    </li>
                                <?endwhile; wp_reset_postdata();?>
                            </ul>
                        </div>

                        <!-- Минусы  -->
                        <div class="catalog-comparison-item">
                            <div class="catalog-comparison-item-name">Минусы</div>
                            <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                    <?$last_attr = false?>
                                    <?$post = get_field('kontent',$product->get_id());?>

                                    <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                        <? while ( have_rows('nedostatki_kresla', $post->ID) ) : the_row()?>
                                            <ul class="catalog-comparison-item-products-item-attr">
                                                <?$new_attr = get_sub_field('nedostatki_kresla_spisok')?>
                                                <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>"><?=$new_attr?></li>
                                                <?$last_attr = $new_attr?>
                                            </ul>
                                        <?endwhile;?>
                                    </li>
                                <?endwhile; wp_reset_postdata();?>
                            </ul>
                        </div>


                        <div class="catalog-comparison-item">
                            <div class="catalog-comparison-item-name">Характеристики</div>
                            <?foreach ($arComparison as $key => $arItemComparison):?>
                                <?
                                    if($key == 'pa_test-kresla-na-domu') continue;
                                    if($key == 'pa_arenda-kresla') continue;
                                    if($key == 'pa_rasshirennaya-garantiya') continue;
                                    if($key == 'pa_aerografiya-na-kreslo') continue;
                                    if($key == 'pa_vyshivka-na-kreslo') continue;
                                    if($key == 'pa_seriya') continue;
                                    if($key == 'pa_proizvoditel') continue;
                                ?>
                                    <div class="catalog-comparison-item-name-mini"><?=$arItemComparison['name']?></div>
                                    <ul class="catalog-comparison-item-products products columns-4 js-catalog-comparison-list">
                                        <?$last_attr = false?>
                                        <?while ($query->have_posts()): $query->the_post(); global $product;?>
                                            <li class="catalog-comparison-item-products-item product" data-product-id="<?=$product->get_id()?>">
                                                <ul class="catalog-comparison-item-products-item-attr">
                                                    <?if($key == 'pa_rekomenduemyj-ves' OR $key == 'pa_rekomenduemyj-rost'):?>

                                                        <?
                                                        if(!empty($product->attributes[$key]['options'])) {
                                                            $new_attr = $arComparison[$key]['terms'][$product->attributes[$key]['options'][0]]->name;

                                                            if($key == 'pa_rekomenduemyj-ves') $new_attr .= ' кг.';
                                                            if($key == 'pa_rekomenduemyj-rost') $new_attr .= ' см.';
                                                        } else {
                                                            $new_attr = 'Нет данных';
                                                        }
                                                       ?>

                                                        <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>">
                                                            <?=$new_attr?>
                                                        </li>
                                                        <?$last_attr = $new_attr?>
                                                    <?else:?>
                                                        <? foreach ($product->attributes[$key]['options'] as $opt_id):?>
                                                            <?$new_attr = $arComparison[$key]['terms'][$opt_id]->name?>
                                                            <li class="<?if(!empty($last_attr) AND $last_attr !== $new_attr) echo 'new'?>"><?=$new_attr?></li>
                                                            <?$last_attr = $new_attr?>
                                                        <?endforeach;?>
                                                    <?endif;?>
                                                </ul>
                                            </li>
                                        <?endwhile; wp_reset_postdata();?>
                                    </ul>
                            <?endforeach;?>
                        </div>
                </div>
                <div class="btn-catalog-clear js-btn-comparison-clear">Очистить список сравнений</div>
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
                    Нет товаров для сравнения
                    <br><br><br>
                <?endif?>
        </div>
    </div>
</div>
</div>

<div class="app-svg">
    <svg xmlns="http://www.w3.org/2000/svg" style="height: 0; width: 0; position: absolute; top: -99999px; left: -99999px; visibility: hidden;">

        <svg id="i-arrow-left" viewBox="0 0 11 17" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.81394 8.50006L10.3572 2.03754L8.40281 0.271484L0.0714628 8.50006L8.40281 16.7286L10.3572 14.9626L3.81394 8.50006Z"/>
        </svg>

        <svg id="i-arrow-right" viewBox="0 0 11 17" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.18618 8.50006L0.642944 2.03754L2.59731 0.271484L10.9287 8.50006L2.59731 16.7286L0.642944 14.9626L7.18618 8.50006Z"/>
        </svg>

    </svg>
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
