<?php get_header(); ?>

<link rel='stylesheet' href='/wp-content/themes/boiling_machine/assets/css/blog-css.css'/>

<div class="blog-container">
    <div class="bm-adaptive bm-margin bm">
        <div class="bm-contacts-breadcrumb">
            <?php the_breadcrumb() ?>
        </div>
        <div class="blog-header">
            <h1 class="blog-header__text">Обзоры</h1>
        </div>
        <div class="subcategories-links">
            <div class="subcategory-link">
                <a href="/blog/reviews/">
                    Все
                </a>
            </div>
            <? 
                $cat_name = get_query_var('category_name');

              $cat_data = get_categories( array( 'parent' => 3230, 'hide_empty' => 1 ) );
              if ( $cat_data ) {
                $cat_links = '';
                foreach ( $cat_data as $one_cat_data):
                    if( $one_cat_data->slug == $cat_name ):
                        $act = 'active';
                    endif;    
            ?>
                <div class="subcategory-link <? echo $act; ?>">
                    <a href="<? echo get_category_link( $one_cat_data->term_id ); ?>">
                        <? echo $one_cat_data->cat_name; ?>
                    </a>
                </div>
            <?    
                    
                endforeach;
              }
            ?>
        </div>
        <div class="blog-parts-container-pagination">
            <div class="blog-parts-container">
                <? 
                    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $params = array(
                        'posts_per_page' => 12, // количество постов на странице
                        'cat'       => '3234',					
                        'paged'           => $current_page // текущая страница
                    );
                    query_posts($params);

                    $wp_query->is_archive = true;
                    $wp_query->is_home = false;

                    while(have_posts()): the_post();
                ?>
                    <?
                        $arr = [
                            'янв',
                            'фев',
                            'мар',
                            'апр',
                            'мая',
                            'июн',
                            'июл',
                            'авг',
                            'сен',
                            'окт',
                            'нояб',
                            'дек'
                        ];

                        $dateOld = get_the_date();
                        $timestamp       = strtotime($dateOld);
                        $new_date_format = date('d', $timestamp) . ' ' . $arr[date('n', $timestamp) - 1] . ' ' . date('Y', $timestamp);
                    ?>
                    <div class="post-container">
                        <div class="post-preview-div" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-position: center; background-size: cover;">
                            <a href="<?php echo get_permalink(); ?>" class="uk-position-cover"></a>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post-mobile-preview">
                        </div>
                        <div class="post-meta-container">
                            <div class="post-meta-title">
                                <a href="<?php echo get_permalink(); ?>"><h2 class="post-meta-title__text"><?php the_title(); ?></h2></a>
                            </div>
                            <div class="post-meta-description">
                                <a href="<?php echo get_permalink(); ?>" class="post-meta-description__text"><?php the_excerpt(); ?></a>	
                            </div>
                            <div class="post-meta-date">
                                <p class="post-meta-date__text"><?php echo $new_date_format; ?></p>	
                                <? 
                                    $cat = get_the_category();
                                ?>
                                <p class="post-category">#Обзор</p>
                            </div>										
                        </div>
                    </div>                 

                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination();?>
        </div>
    </div>
</div>

<?php 
/*
add_action( 'wp_footer', 'artabr_lm_footer_scripts' );
function artabr_lm_footer_scripts() {

	wp_enqueue_script( 'artabr_lm_ajax', get_template_directory_uri() . '/assets/js/ajax.js', true );
	wp_enqueue_script( 'historyjs', get_template_directory_uri() . '/assets/js/history.js', true );

	// Add parameters for the JS
	global $wp_query;
	$max   = $wp_query->max_num_pages;
	$paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
	wp_localize_script(
		'artabr_lm_ajax',
		'mts_ajax_loadposts',
		array(
			'startPage'     => $paged,
			'maxPages'      => $max,
			'nextLink'      => next_posts( $max, false ),
			'i18n_loadmore' => __( ' Показать еще', 'mythemeshop' ),
			'i18n_nomore'   => __( ' Больше нет', 'mythemeshop' ),
			'i18n_loading'  => __( ' Загрузка...', 'mythemeshop' ),
		)
	);

}
*/
?>

<?php get_footer(); ?>