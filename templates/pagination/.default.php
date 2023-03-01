<?
// * Определяем текущую страницу из значения параметра "pages"
$current_page = !empty( $args['page'] ) ? $args['page'] : 1;

// * Выбираем страницы
$arPage = paginate_links( array(
    'base'    => $args['url'] . '%_%',
    'format'    => '?pages=%#%',
//    'format'    => 'page/%#%/',
    'total'     => $args['max_num_pages'],
    'current'   => $current_page,
    'type'      => 'array',
    'prev_next' => false,
) );
?>

<?if(!empty($arPage)):?>
    <div class="woocommerce-pagination">
<!--        --><?//if($current_page > 1):?>
<!--            <a href="--><?//=$args['url']?><!--?pages=--><?//=$current_page - 1?><!--" class="navigation-prev">Назад</a>-->
<!--        --><?//else:?>
<!--            <span class="navigation-prev _disable">Назад</span>-->
<!--        --><?//endif;?>
        <ul class="page-numbers">
            <?foreach ($arPage as $key => $link):?>
                <li>
                    <?=$link?>
                </li>
            <?endforeach;?>
        </ul>
<!--        --><?//if($current_page < $args['max_num_pages']):?>
<!--            <a href="--><?//=$args['url']?><!--?pages=--><?//=$current_page + 1?><!--" class="navigation-next">Далее</a>-->
<!--        --><?//else:?>
<!--            <span class="navigation-next _disable">Далее</span>-->
<!--        --><?//endif;?>
    </div>
<?endif;?>




