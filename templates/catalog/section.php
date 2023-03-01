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
            <div class="bm-product-arvhive-container">
                <div class="bm-product-arvhive-container-sidebar">
                    <img src="/wp-content/uploads/close-pzdc.svg" class="bm-chair-mobile-close">
                    <div class="bm-product-arvhive-container-sidebar-container">
                        <?php require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/sidebar-archive.php'; ?>
                        <? php// echo do_shortcode('[br_filters_group group_id=9177]'); ?>
                    </div>
                </div>
                <div class="bm-product-arvhive-container-main">
                    <? /*
				<div class="bm-product-arvhive-container-main-container">
					<div class="main-chair-categories main-chair-categories-category">
						<div class="main-chair-categories-container-head-categories">
						<h2 class="bm-chairs-popular-products__title">
							Производители игровых кресел
						</h2>
							<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

								<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@xl uk-grid chairs-main-categories">
									<li>
										<div class="subcat-main-chairs uk-panel <?php echo $term->slug; ?>">
											<a href="/igrovye-kresla/" class="subcat-main-chairs__link">
												<p class="subcat-main-chairs__text">Все кресла</p>
												<img src="/wp-content/uploads/vse-kresla.webp" class="subcat-main-chairs-chair">
											</a>
										</div>
									</li>
									<?php
										if ( is_product_category() ) {

											// Get subcategories of the current category
											$terms    = get_terms([
												'taxonomy'    => $taxonomy,
												'hide_empty'  => false,
												'parent'      => 509,
												'exclude' => array(1159,1156,1157,1158,1160,1161)
											]);



											// Loop through product subcategories WP_Term Objects
											foreach ( $terms as $term ) {
												$term_link = get_term_link( $term, $taxonomy );
												$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
												$image = wp_get_attachment_url( $thumbnail_id ); ?>

												<li>
													<div class="subcat-main-chairs uk-panel <?php echo $term->slug; ?>">
														<a href="<?php echo $term_link; ?>" class="subcat-main-chairs__link">
															<img src="<?php echo $image; ?>" >
															<img src="<?php the_field('logotip_kategorii', $taxonomy . '_' . $term->term_id); ?>" class="subcat-main-chairs-chair">
														</a>
													</div>
												</li>

											<?php
											}


										}
									?>




								</ul>

								<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
								<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

							</div>
						</div>
					</div>



					    <div class='bm-chairs-fast-select'>
					        <div class='bm-chairs-fast-select-header'>
					            <h2 class='bm-chairs-popular-products__title'>
					                Быстрый подбор кресла
								</h2>
					            </div>
					        </div>
                            <form action="" method="post" id="filterform">
					            <div class='fast-select-container'>
					            <div class="podbor-container">
                                    <div class="range-slider-con">
                                        <p class="range-slider-text">
                                            <span class="slider-text__text">Введите ваш рост</span>
                                            <input type="number" class="range-value" value="176" name="rost"/>
                                            <span class="slider-text__text">см</span>
                                        </p>
                                        <div class="range">
                                            <p class="range-text rost">
                                                <span>100</span>
                                                <span>125</span>
                                                <span>150</span>
                                                <span>175</span>
                                                <span>200</span>
                                            </p>
                                            <input class="input-range" type="range" value="176" min="100" max="200" placeholder="176">
                                        </div>
                                    </div>
                                    <div class="range-slider-con">
                                        <p class="range-slider-text">
                                            <span class="slider-text__text">Введите ваш вес</span>
                                            <input type="number" class="range-value" value="70" name="ves" />
                                            <span class="slider-text__text">кг</span>
                                        </p>
                                        <div class="range">
                                            <p class="range-text ves">
                                                <span>30</span>
                                                <span>60</span>
                                                <span>90</span>
                                                <span>120</span>
                                                <span>150</span>
                                            </p>
                                            <input class="input-range" type="range" value="70" min="30" max="150" placeholder="70">
                                        </div>
                                    </div>
                                </div>
                                    <div class="mat-submit">
                                        <?php $product_materials = get_terms( array( 'taxonomy' => 'pa_material-obshivki', 'hide_empty' => false ) ); ?>
                                        <?php if( $product_materials ) : ?>
                                            <select name="material" class="material-sel js-example-basic-single">
                                                <option value="" disabled selected>Выберите материал</option>
                                                <?php foreach( $product_materials as $product_material ) : ?>
                                                    <option value="<?php echo esc_html( $product_material->slug ) ?>"><?php echo esc_html( $product_material->name ) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        <?php endif; ?>
                                        <div>
                                            <button type="submit" class="filterform-submit">Подобрать кресло</button>
                                        </div>
                                    </div>

					        </div>
                            </form>
					    </div>
                */ ?>

                    <? // Сортировка
                    if (empty($_COOKIE['sort_meta_key'])) $_COOKIE['sort_meta_key'] = 'rejting_tovara';
                    if (empty($_COOKIE['sort_orderby'])) $_COOKIE['sort_orderby'] = 'meta_value_num';
                    if (empty($_COOKIE['sort_order'])) $_COOKIE['sort_order'] = 'desc';
                    if (empty($_COOKIE['sort_count'])) $_COOKIE['sort_count'] = '24';
                    if (empty($_GET['pages'])) $_GET['pages'] = 1;

                    // exKod::Common()->drop($_COOKIE);
                    ?>

                    <div class="bm-chairs-popular-products">
                        <h1 class="bm-chairs-popular-products__title"><?php echo $title ?></h1>
                        <div class="catalog-tag">
                            <ul class="catalog-tag-list js-tag" data-count="9">
                                <?if ( is_product_category() ) {
                                    $taxonomy = 'product_cat';

                                    if($queried_object->page_tag) {
                                        $parent = $queried_object->parent;
                                    } else {
                                        $parent = get_queried_object_id();
                                    }

                                    $tags = get_terms([
                                        'taxonomy'    => 'product_cat',
                                        'hide_empty'  => false,
                                        'parent'      => $parent,
                                        'numberposts' => -1,
                                        'meta_key' => 'poryadok_v_sortirovke',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'ASC',
                                        'exclude' => [1157,1158,1159,1160,1161,1156]
                                    ]);?>

                                    <?if($term_id !== 509):?>
                                        <li><a href="/igrovye-kresla/">Все кресла</a></li>
                                    <?else:?>
                                        <li><span>Все кресла</span></li>
                                    <?endif;?>

                                    <?foreach ( $tags as $item ):
                                        $term_link = get_term_link( $item, $taxonomy );
                                        $thumbnail_id = get_term_meta($item->term_id, 'thumbnail_id', true);
                                        $image = wp_get_attachment_url($thumbnail_id);
                                        $item->ancor = get_field('ancor', $item->taxonomy . '_' .$item->term_id);

                                        if($item->ancor) $item->name = $item->ancor;
                                        ?>

                                        <li class="disable">
                                            <?if($item->term_id !== $term_id):?>
                                                <a href="<?=$term_link?>"><?=$item->name?></a>
                                            <?else:?>
                                                <span><?=$item->name?></span>
                                            <?endif;?>
                                        </li>
                                    <?endforeach;?>

                                    <?if(count($tags) > 9):?>
                                        <li class="js-tag-btn">
                                            <a href="#">
                                                Показать еще
                                                <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.92894 3.20106L0.828421 0.100534L0 0.928955L3.92894 4.8579L7.85789 0.928955L7.02947 0.100534L3.92894 3.20106Z" fill="#EF3835"/>
                                                </svg>
                                            </a>
                                        </li>
                                    <?endif;?>
                                <?}?>
                            </ul>
                        </div>
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
                                        <a class="js-catalog-sort-btn <?= ($_COOKIE['sort_meta_key'] == 'rejting_tovara') ? 'active' : false ?>"
                                           data-href="#" href="#" data-meta-key="rejting_tovara"
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
                                    <span class="bm-filter-chairs-mobile-count js-catalog-filter-count">0</span>
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
                    </div>
                    <? // Сортировка
                    //                    if(isset($_GET['meta_key'])) $_COOKIE["meta_key"] = $_GET['meta_key'];    else $_COOKIE["meta_key"] = 'rejting_tovara';
                    //
                    //                    if($_COOKIE['sort_type'] == '_price') {
                    //                        $_COOKIE['sort_orderby'] = 'price_key';
                    //                    } else {
                    //                        $_COOKIE['sort_orderby'] = 'meta_value_num';
                    //                    }
                    //
                    //                    if(isset($_GET['sort_order'])) $_COOKIE["sort_order"] = $_GET['sort_order']; else $_COOKIE["sort_order"] = 'ASC';
                    //                    if(isset($_GET['sort_count'])) $_COOKIE["sort_count"] = $_GET['sort_count']; else $_COOKIE["sort_count"] = 24;
                    ?>
                    <ul class="products columns-3">
                        <?php
                        global $wp_query;

                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'product_cat' => $queried_object->slug,
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

                        // Сортировка по популярность
                        if($_COOKIE['sort_meta_key'] == 'rejting_tovara') {
                            $args['orderby'] = [
                                '_stock_status' => 'ASC',
                                'rejting_tovara' => 'ASC',
                                '_wc_average_rating' => 'DESC',
                                'title' => 'ASC',
                            ];

                            $args['meta_query']['_stock_status'] = [
                                'key' => '_stock_status',
                                'compare' => 'EXISTS',
                            ];
                            $args['meta_query']['rejting_tovara'] = [
                                'key' => 'rejting_tovara',
                                'compare' => 'EXISTS',
                                'type' => 'NUMERIC'
                            ];

                            $args['meta_query']['_wc_average_rating'] = [
                                'key' => '_wc_average_rating',
                                'compare' => 'EXISTS',
                                'type' => 'NUMERIC'
                            ];
                        }




                        //


                        // Исключаем из фильтрации товары, который скрыты из каталога
                        $args['tax_query'] =  [ 'relation' => 'AND',
                            [
                                'taxonomy' => 'product_visibility',
                                'field' => 'name',
                                'terms' => 'exclude-from-catalog',
                                'operator' => 'NOT IN',
                            ],
                        ];

                        // Если это теговая страница, то отключаем раздел и выводим только с родительского

                        if($queried_object->page_tag) {

                            unset($args['product_cat']);

                            $args['tax_query'][] = array(
                                'taxonomy' => 'product_cat',
                                'terms' => $queried_object->parent
                            );

                            // Фильтрация товаров по цене
                            if(!empty($queried_object->filter['price_max']) OR !empty($queried_object->filter['price_min'])) {
                                if(empty($queried_object->filter['price_max'])) $queried_object->filter['price_max'] = 200000;
                                $args[ 'meta_query' ] = array(
                                    'price_clause' => array(
                                        'key' => 'czena_dlya_filtra',
                                        'value' => array( $queried_object->filter['price_min'], $queried_object->filter['price_max'] ), // значения ОТ и ДО
                                        'compare' => 'between',
                                        'type' => 'numeric'
                                    )
                                );

                                unset($queried_object->filter['price_max']);
                                unset($queried_object->filter['price_min']);
                            }

                            // Фильтр отдельным товарам
                            if(!empty($queried_object->filter['post_in'])) {
                                $args['post__in'] = $queried_object->filter['post_in'];

                                unset($queried_object->filter['post_in']);
                            }

                            // Фильтрация товаров по свойствам
                            foreach ($queried_object->filter as $key => $arItem) {
                                if(!$arItem) continue;

                                $arSlug = false;
                                foreach ($arItem as $item) $arSlug[] = $item->slug;

                                $args['tax_query'][] = [
                                    'taxonomy' => $key,
                                    'field' => 'slug',
                                    'terms' => $arSlug
                                ];
                            }
                        }

//                        exKod::Common()->drop($args);

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                global $product;
                                require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/content-product-chairs.php';
                            }
                            wp_reset_postdata();
                        }
                        ?>

                        <? get_template_part('templates/pagination/.default', false, [
                            'max_num_pages' => $query->max_num_pages,
                            'page' => $_GET['pages'],
                            'url' => exKod::Router()->getUrl()
                        ]); ?>
                    </ul>
                    <?php
                    if ($wp_query->max_num_pages > 1):
//					     echo '<div class="misha_loadmore">Показать еще 12</div>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="bm-product-arvhive-container-main">
                <div class="bm-product-arvhive-container-main-container">
                    <div class="cat-description">
                        <?php
                        $post_object = get_field('prikreplenie_seo_zapisi', $taxonomy . '_' .$term_id);
                        if($post_object != null){
                            $post = $post_object;
                            setup_postdata( $post );
                            $obzor = apply_filters('the_content', $post->post_content);
                            if ( $obzor != null ):
                                ?>
                                <div class="chair-review">
                                    <div class="tab-container-head" id="obzor_text">
                                        <h2 class="tab-container-head__title" style="text-align: center">
                                            <?php the_title(); ?>
                                        </h2>
                                    </div>
                                    <div class="chairs-content-obzor">
                                        <div class='text_read'>
                                            <?php echo $obzor; ?>
                                        </div>
                                        <?php
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                                <br>
                            <?php endif; ?>
                        <? } ?>
                    </div>
                </div>
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

        /*.bm-chairs-product-price-amount .single_add_to_cart_button.button.alt.added {*/
        /*    color: #EF2525;*/
        /*    background: #fff;*/
        /*    border: 1px solid #EF2525;*/
        /*}*/
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
