<?php
/*
Template Name: Карта
*/
?>
  
<?php get_header(); ?>

<div class="sitemap boiling-machine-sitemap">
    <div class="bm-adaptive bm-margin bm">
        <h1 class="woocommerce-products-header__title page-title mywoo-page-title" style="text-align: left">Карта сайта</h1>

        <ul class="sitemap-list">
            <li class="item">
                <div class="item-title">
                    <span>Страницы</span>
                </div>
                <ul class="item-children">
                    <?$arResult = exKod::WP()->getPages()?>
                    <?foreach( $arResult as $arItem ):  setup_postdata( $arItem );?>
                        <?if(exKod::Router()->getUrl() !== get_page_link($arItem->ID)):?>
                            <li><a href="<?=get_page_link($arItem->ID)?>" title="<?=$arItem->post_title?>"><?=$arItem->post_title?></a></li>
                        <?endif;?>
                    <?endforeach; wp_reset_postdata();?>
                </ul>
            </li>

            <li class="item">
                <div class="item-title">
                    <span>Разделы</span>
                </div>
                <ul class="item-children">
                    <?foreach (exKod::WP()->getTermsTree('category','') as $arItem): ?>
                        <li><a href="<?=get_category_link($arItem->term_id)?>"><?=$arItem->name?></a></li>
                        <?foreach ($arItem->children as $arItem2):?>
                            <li><a href="<?=get_category_link($arItem2->term_id)?>" title="<?=$arItem2->name?>"><?=$arItem2->name?></a></li>
                        <?endforeach;?>
                    <?endforeach;?>
                </ul>
            </li>

            <?$arPostType = [
                [
                    'name' => 'Статьи',
                    'type' => 'post'
                ],
            [
                'name' => 'Кресла',
                'type' => 'catseo'
            ],
            [
                'name' => 'База данных',
                'type' => 'projects'
            ],
            [
                'name' => 'Товары',
                'type' => 'product'
            ],

            ]?>
            <?foreach ($arPostType as $arPostTypeItem):?>
                <li class="item">
                    <div class="item-title">
                        <span><?=$arPostTypeItem['name']?></span>
                    </div>
                    <ul class="item-children">
                        <?$arResult = exKod::WP()->getPosts($arPostTypeItem['type'])?>
                        <?while( $arResult->have_posts()) : $arResult->the_post();?>
                            <?if(!empty(get_the_title())):?>
                                <li><a href="<?the_permalink()?>" title="<?the_permalink()?>"><?the_title()?></a></li>
                            <?endif;?>
                        <?endwhile; wp_reset_postdata();?>
                    </ul>
                </li>
            <?endforeach;?>


        </ul>
    </div>
</div>


<?php get_footer(); ?>