<li <?php wc_product_class( 'bm-chairs-product', $post ); ?> >

    <?php $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $post ); ?>
    <?
    // Получаем все необходимые данные
    $arPrice = [];
    $price_html = $product->get_price_html();

    $arPrice['price'] = exKod::Common()->clearNumber($price_html);

    if ( $product->is_on_sale() ) {
        $arPrice['sale']    = exKod::Common()->clearNumber(get_post_meta(get_the_ID(), '_price', true));
        $arPrice['old']     = $arPrice['price'] + $arPrice['sale'];
        $arPrice['percent'] = round((($arPrice['old'] - $arPrice['price']) * 100) / $arPrice['old']);
    };
    //echo (get_field('rejting_tovara', $product->ID))? get_field('rejting_tovara', $product->ID): '0';
    ?>
    
    <a href="<?php echo $link?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
    <div class="bm-chairs-product-img">
        <div class="bm-chairs-product-tag">
            <?if(get_field('new', $product->ID)):?>
                <span class="onnew">Новинка</span>
            <?endif;?>
            <?/*if ( $product->is_on_sale() ):?>
                <span class="onsale">Распродажа!</span>
            <?endif;*/?>
        </div>
        <?
        $attachment_ids = $product->get_gallery_image_ids();
        ?>
        <div class="bm-chairs-product-img-dots">
            <div class="bm-chairs-product-img-dots-count"><b>1</b> из <?=count($attachment_ids)+1?></div>
            <span class="bm-chairs-product-img-dots-item active"></span>
            <?foreach( $attachment_ids as $key => $attachment_id ):?>
                <span class="bm-chairs-product-img-dots-item"></span>
            <?endforeach;?>
        </div>
        <div class="bm-chairs-product-control">
             <span class="bm-chairs-product-control-comparison <?if(exKod::Router()->getUrlPath() == '/compare/') echo 'delete'?> <?if(exKod::Router()->getUrlPath() !== '/compare/' AND exKod::Common()->arraySearch($product->get_id() , exKod::Common()->getCookieArray('catalog_comparison'))) echo 'active'?>" data-product-id="<?=$product->get_id()?>">
               <?if(exKod::Router()->getUrlPath() == '/compare/'){?>
                   <svg width="17" height="17" viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.276621 0.276621C0.64545 -0.0922071 1.24344 -0.0922071 1.61227 0.276621L8.5 7.16435L15.3877 0.276621C15.7566 -0.0922071 16.3545 -0.0922071 16.7234 0.276621C17.0922 0.64545 17.0922 1.24344 16.7234 1.61227L9.83565 8.5L16.7234 15.3877C17.0922 15.7566 17.0922 16.3545 16.7234 16.7234C16.3545 17.0922 15.7566 17.0922 15.3877 16.7234L8.5 9.83565L1.61227 16.7234C1.24344 17.0922 0.64545 17.0922 0.276621 16.7234C-0.0922071 16.3545 -0.0922071 15.7566 0.276621 15.3877L7.16435 8.5L0.276621 1.61227C-0.0922071 1.24344 -0.0922071 0.64545 0.276621 0.276621Z"/>
                    </svg>
               <?} else {?>
                   <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 3C14 1.89543 13.1046 1 12 1C10.8954 1 10 1.89543 10 3V25C10 26.1046 10.8954 27 12 27C13.1046 27 14 26.1046 14 25V3ZM23 11.25C23 10.1454 22.1046 9.25 21 9.25C19.8954 9.25 19 10.1454 19 11.25V25C19 26.1046 19.8954 27 21 27C22.1046 27 23 26.1046 23 25V11.25ZM5 16.75C5 15.6454 4.10457 14.75 3 14.75C1.89543 14.75 1 15.6454 1 16.75V25C1 26.1046 1.89543 27 3 27C4.10457 27 5 26.1046 5 25V16.75Z" fill="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
               <?}?>
            </span>
            <span class="bm-chairs-product-control-favorite <?if( exKod::Common()->arraySearch($product->get_id() , exKod::Common()->getCookieArray('catalog_favorite'))) echo 'active'?>" data-product-id="<?=$product->get_id()?>">
                <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9925 4.41791C9.79318 1.77177 6.12572 1.05997 3.37016 3.48304C0.614608 5.9061 0.226664 9.95734 2.39062 12.8231C4.0251 14.9877 8.66842 19.3332 10.8428 21.3301C11.2425 21.6972 11.4424 21.8807 11.6764 21.953C11.8796 22.0157 12.1054 22.0157 12.3085 21.953C12.5426 21.8807 12.7424 21.6972 13.1421 21.3301C15.3165 19.3332 19.9598 14.9877 21.5943 12.8231C23.7583 9.95734 23.4177 5.88061 20.6148 3.48304C17.8118 1.08546 14.1918 1.77177 11.9925 4.41791Z" fill="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </div>

        <div class="">
            <img class="bm-chairs-product-img-check" src="<?=wp_get_attachment_url($product->get_image_id())?>" data-img="<?=wp_get_attachment_url($product->get_image_id())?>">
        </div>

        <div class="bm-chairs-product-img-control" data-id="0">
            <span class="bm-chairs-product-img-control-item js-catalog-item-img" data-id="0" data-src="<?=wp_get_attachment_url($product->get_image_id())?>"></span>
            <?foreach( $attachment_ids as $key => $attachment_id ):?>
                <span class="bm-chairs-product-img-control-item js-catalog-item-img" data-id="<?php echo $key+1; ?>" data-src="<?=wp_get_attachment_url( $attachment_id )?>"></span>
            <?endforeach;?>
        </div>


        <?php
        //do_action( 'woocommerce_before_shop_loop_item_title' );
        ?>
    </div>
    <div class="bm-chairs-content">
        <div class="bm-chairs-product-price">
            <?php
            if ( $price_html ){
                // Скидка
                if ( $product->is_on_sale() )  {
                    echo '<span class="price">'. $price_html . '</span>';
                    echo '<span class="price-old"> '. wc_price($arPrice['old']) . ' </span>';
                    echo '<span class="sale">'. $arPrice['percent']. '%</span>';
                } else {
                    echo '<span class="price">'. $price_html . '</span>';
                }
            };?>
            <?//php woocommerce_template_loop_price(); ?>
        </div>
        <?//exKod::Common()->drop(get_the_date( '', $product->ID ))?>
        <?//exKod::Common()->drop(get_field('czena_dlya_filtra',$product->ID))?>
        <div class="bm-chairs-product-title">
            <?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
        </div>
        <?/*
        <div class="bm-chairs-colors-archive">
            <div class="bm-chairs-spisok-archive">
                <?php
                $terms = wc_get_product_terms( $post->ID, 'product_cat', array( 'orderby' => 'parent', 'order' => 'DESC' ) );
                $modelProd = get_post_meta( $product->get_id(), 'model', true );

                $args = array(
                    'post_type' => 'product',
                    'product_cat' => $terms[0]->slug,
                    'posts_per_page' => -1,
                    'meta_key' => 'rejting_kresla_po_czvetu',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php
                    $model = get_post_meta( $loop->post->ID, 'model', true );
                    if ($modelProd[0] == $model[0] && $product->get_id() != $loop->post->ID){
                        $coloring = get_post_meta( $loop->post->ID, 'czvet', true );
                        $coloringCzvet = explode(" | ", $coloring[0]);
                        ?>
                        <div class="chair-archive-color-container">
                            <a href="<?php echo get_permalink($loop->post->ID) ?>">
                                <div class="bm-chairs-prod-color" style="background:
                                <?php
                                    switch($coloringCzvet[0]){
                                        case 'Оранжевый': echo '#FF9600'; break;
                                        case 'Белый': echo '#FFFFFF'; break;
                                        case 'Желтый': echo '#FFF613'; break;
                                        case 'Зеленый': echo '#1FC751'; break;
                                        case 'Коричневый': echo '#843333'; break;
                                        case 'Красный': echo '#F11F1F'; break;
                                        case 'Розовый': echo '#F302DB'; break;
                                        case 'Серый': echo '#D2D2D2'; break;
                                        case 'Синий': echo '#0058CE'; break;
                                        case 'Фиолетовый': echo '#8400EC'; break;
                                        case 'Черный': echo '#111111'; break;

                                    }
                                ?>
                                ">
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                <?php endwhile; wp_reset_query();  ?>
            </div>
        </div>
        */ ?>

        <div class="stock-container">
            <p class="stock-container__text stock-<?php echo $product->id; ?>">
                <?php
                if ($product->is_type( 'simple' )):
                    $stock = $product->get_stock_status();
                    switch($stock){
                        case 'instock':
                            echo 'В наличии';
                            ?>
                            <style>
                                .stock-container__text.stock-<?php echo $product->id; ?>::before{background: #60BB49;}
                            </style>
                            <?php
                            break;
                        case 'outofstock':
                            echo 'Нет в наличии';
                            ?>
                            <style>
                                .stock-container__text.stock-<?php echo $product->id; ?>::before{background: #EF2525;}
                            </style>
                            <?php
                            break;
                        case 'onbackorder':
                            echo 'Предзаказ';
                            ?>
                            <style>
                                .stock-container__text.stock-<?php echo $product->id; ?>::before{background: #B8B8B8;}
                            </style>
                            <?php
                            break;
                    }
                endif;
                ?>
                <?php
                if ($product->is_type( 'variable' )):
                    $variations = $product->get_available_variations();
                    foreach($variations as $variation):
                        $variation_obj = wc_get_product($variation['variation_id']);
                        $attrib = implode('-', $variation['attributes']);
                        switch($attrib){
                            case 'net-net-net-net-net':
                                ?>
                                <?php $status = $variation_obj->get_stock_status();	?>
                                <?php
                                switch($status){
                                    case 'instock':
                                        echo 'В наличии';
                                        ?>
                                        <style>
                                            .stock-container__text.stock-<?php echo $product->id; ?>::before{background: #60BB49;}
                                        </style>
                                        <?php
                                        break;
                                    case 'outofstock':
                                        echo 'Нет в наличии';
                                        ?>
                                        <style>
                                            .stock-container__text.stock-<?php echo $product->id; ?>::before{background: #EF2525;}
                                        </style>
                                        <?php
                                        break;
                                    case 'onbackorder':
                                        echo 'Предзаказ';
                                        ?>
                                        <style>
                                            .stock-container__text.stock-<?php echo $product->id; ?>::before{background: #B8B8B8;}
                                        </style>
                                        <?php
                                        break;
                                }
                                ?>

                                <?php
                                break;
                        }
                    endforeach;
                endif;
                ?>
            </p>
        </div>

        <div class="bm-chairs-rating-container">
            <div class="bm-chairs-rating">
                <?php $rating  = $product->get_average_rating(); ?>
                <?for ($n = 1; $n <= 5; $n++):?>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 14.0958L3.24645 17L4.25 10.8489L0 6.49302L5.87322 5.59626L8.5 0L11.1268 5.59626L17 6.49302L12.75 10.8489L13.7536 17L8.5 14.0958Z" fill="<?=((float)$rating >= $n)? '#EF2525' : '#C7C7C7'?>"/>
                    </svg>
                <?endfor;?>
            </div>
            <? /*
                <img src="/wp-content/uploads/rating-star.svg">
                <p class="bm-chairs-rating_text"><?php echo number_format((float)$rating, 1, '.', '');?></p>
                <div class="bm-chairs-rating-count">
                    <?php echo $product->get_rating_count(); ?>
                </div>
                */ ?>
        </div>

        <div class="bm-chairs-product-price-amount">
            <?php //do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>

            <?php
            $product_main;
            $status;
            ?>
            <?php if ($product->is_type( 'variable' )): ?>
                <?php
                $variations = $product->get_available_variations();
                foreach($variations as $variation):
                    $variation_obj = wc_get_product($variation['variation_id']);
                    $attrib = implode('-', $variation['attributes']);
                    switch($attrib){
                        case 'net-net-net-net-net':
                            ?>
                            <?php
                            $product_main =  $variation_obj;
                            $status = $variation_obj->get_stock_status();
                            ?>

                            <a href="<?php echo $product->add_to_cart_url(); ?>" data-product_id="<?php echo $variation_obj->get_id(); ?>"  rel="nofollow" class="single_add_to_cart_button button alt add_to_cart_button ajax_add_to_cart js-to-card-add">
                                <svg width="25" height="23" viewBox="0 0 25 23" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.195413 0.499722C0.551635 -0.0158449 1.27357 -0.155161 1.8079 0.18855L7.04044 3.55439C7.2883 3.71383 7.46329 3.95897 7.52931 4.23926L10.2306 15.7074H20.0602L20.7442 13.4635H12.7908C12.1486 13.4635 11.628 12.9611 11.628 12.3415C11.628 11.7219 12.1486 11.2196 12.7908 11.2196H21.4282L22.2832 8.41472H12.7908C12.1486 8.41472 11.628 7.9124 11.628 7.29277C11.628 6.67314 12.1486 6.17082 12.7908 6.17082H23.8372C24.2037 6.17082 24.5487 6.33751 24.7682 6.62062C24.9878 6.90372 25.0561 7.27013 24.9527 7.60935L22.0458 17.1459C21.9002 17.6234 21.4461 17.9513 20.9302 17.9513H9.3024C8.7595 17.9513 8.28885 17.5888 8.16853 17.078L5.36439 5.17309L0.517911 2.05558C-0.0164216 1.71187 -0.160809 1.01529 0.195413 0.499722Z"/>
                                    <path d="M12.2094 21.0366C12.2094 22.121 11.2983 23 10.1745 23C9.05066 23 8.13962 22.121 8.13962 21.0366C8.13962 19.9522 9.05066 19.0732 10.1745 19.0732C11.2983 19.0732 12.2094 19.9522 12.2094 21.0366Z"/>
                                    <path d="M22.093 21.0366C22.093 22.121 21.182 23 20.0582 23C18.9343 23 18.0233 22.121 18.0233 21.0366C18.0233 19.9522 18.9343 19.0732 20.0582 19.0732C21.182 19.0732 22.093 19.9522 22.093 21.0366Z"/>
                                </svg>
                            </a>

                            <?php
                            break;
                    }
                endforeach;

                ?>
            <?php endif; ?>
            <?php if ($product->is_type( 'simple' )): ?>
                <?php
                $stat_simple = $product->get_stock_status();
                if ($stat_simple == 'instock'):
                    ?>
                    <?/* Старый css класса:  chair-link-add-cart single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart js-to-card-add */?>
                    <a href="<?php echo $product->add_to_cart_url(); ?>" data-product_id="<?php echo $product->get_id(); ?>"  rel="nofollow" class="chair-link-add-cart single_add_to_cart_button button alt product_type_simple add_to_cart_button ajax_add_to_cart js-to-card-add">
                        <svg width="25" height="23" viewBox="0 0 25 23" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.195413 0.499722C0.551635 -0.0158449 1.27357 -0.155161 1.8079 0.18855L7.04044 3.55439C7.2883 3.71383 7.46329 3.95897 7.52931 4.23926L10.2306 15.7074H20.0602L20.7442 13.4635H12.7908C12.1486 13.4635 11.628 12.9611 11.628 12.3415C11.628 11.7219 12.1486 11.2196 12.7908 11.2196H21.4282L22.2832 8.41472H12.7908C12.1486 8.41472 11.628 7.9124 11.628 7.29277C11.628 6.67314 12.1486 6.17082 12.7908 6.17082H23.8372C24.2037 6.17082 24.5487 6.33751 24.7682 6.62062C24.9878 6.90372 25.0561 7.27013 24.9527 7.60935L22.0458 17.1459C21.9002 17.6234 21.4461 17.9513 20.9302 17.9513H9.3024C8.7595 17.9513 8.28885 17.5888 8.16853 17.078L5.36439 5.17309L0.517911 2.05558C-0.0164216 1.71187 -0.160809 1.01529 0.195413 0.499722Z" />
                            <path d="M12.2094 21.0366C12.2094 22.121 11.2983 23 10.1745 23C9.05066 23 8.13962 22.121 8.13962 21.0366C8.13962 19.9522 9.05066 19.0732 10.1745 19.0732C11.2983 19.0732 12.2094 19.9522 12.2094 21.0366Z" />
                            <path d="M22.093 21.0366C22.093 22.121 21.182 23 20.0582 23C18.9343 23 18.0233 22.121 18.0233 21.0366C18.0233 19.9522 18.9343 19.0732 20.0582 19.0732C21.182 19.0732 22.093 19.9522 22.093 21.0366Z" />
                        </svg>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    </a>
</li>


