<?php
/**
 * Boiling_machine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Boiling_machine
 */
// * exKod - Библиотека
require_once( 'functions/exKod.php' );

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'boiling_machine_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function boiling_machine_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Boiling_machine, use a find and replace
         * to change 'boiling_machine' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'boiling_machine', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        add_theme_support( 'wc-product-gallery-slider' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'boiling_machine' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'boiling_machine_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'boiling_machine_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function boiling_machine_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'boiling_machine_content_width', 640 );
}
add_action( 'after_setup_theme', 'boiling_machine_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function boiling_machine_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'boiling_machine' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'boiling_machine' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'boiling_machine_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function boiling_machine_scripts() {
    
    wp_enqueue_style( 'boiling_machine-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'boiling_machine-style-min', get_stylesheet_directory_uri() . '/assets/dist/style.min.css' );
    wp_enqueue_style( 'boiling_machine-style-minnew', get_stylesheet_directory_uri() . '/assets/dist/style.minnew.css' );
    wp_enqueue_style( 'boiling_machine-style-minnew', get_stylesheet_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'boiling_machine-style-minnew', get_stylesheet_directory_uri() . '/assets/css/styles.css' );
    wp_enqueue_style( 'boiling_machine-style-splite', get_stylesheet_directory_uri() . '/assets/css/splide.min.css' );

    wp_style_add_data( 'boiling_machine-style', 'rtl', 'replace' );

    if(exKod::Seo()->isNotGooglePageSpeed()) {
        wp_enqueue_script( 'boiling_machine-navigation', get_template_directory_uri() . '/js/navigation.js#asyncload', array(), _S_VERSION, true );
        wp_enqueue_script( 'all', get_template_directory_uri() . '/assets/dist/all.js', array(), _S_VERSION, false );
        //wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'splide-js', get_template_directory_uri() . '/assets/dist/splide.min.js', array(), _S_VERSION, false );
        wp_enqueue_script( 'bm-loadmore', get_template_directory_uri() . '/assets/dist/loadmore.js#asyncload', array('jquery'), '', true );
        wp_enqueue_script('ajaxcomments', get_stylesheet_directory_uri().'/assets/dist/ajaxcomments.js#asyncload', array('jquery'), true);
//        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/assets/js/jquery-3.5.1.min.js');
        wp_enqueue_script('slick-js', get_stylesheet_directory_uri().'/assets/js/slick.min.js',array('jquery'), true);
        wp_enqueue_script('touchSwipe', get_stylesheet_directory_uri().'/assets/js/jquery.touchSwipe.min.js',array('jquery'), true);
    }
    wp_enqueue_script('lozad4', get_theme_file_uri(). '/assets/js/lozad.min.js',array('jquery'));
    wp_enqueue_script('exKod', get_theme_file_uri().'/assets/js/exKod.js',array('jquery'));




    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'boiling_machine_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/* Подключение файла для API S4B */
require get_template_directory() . '/templates-api/functions.php';
//Подключение функционала корзины
//require get_template_directory() . '/woocommerce/checkout/functions.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/tables/functions.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/woocommerce.php';
}
function allow_type($type) {
    $type['svg'] = 'text/plain';
    // $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );





add_filter( 'jpeg_quality', 'my_filter_img' );
function my_filter_img( $quality ) {
    return 100;
}

add_filter('woocommerce_get_image_size_thumbnail','add_thumbnail_size',1,10);
function add_thumbnail_size($size){

    $size['width'] = 300;
    $size['height'] = 300;
    $size['crop']   = 0; //0 - не обрезаем, 1 - обрезка
    return $size;
}

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_last_name']);



    $fields['billing']['billing_first_name']['priority'] = 2;
    $fields['billing']['billing_phone']['priority'] = 3;
    $fields['billing']['billing_email']['priority'] = 4;
    $fields["billing"]["billing_country"]["priority"] = 5;
    $fields['billing']['billing_city']['priority'] = 6;
    $fields['billing']['billing_address_1']['priority'] = 7;



    $fields['billing']['billing_first_name']['input_class'] = array("rfield");
    $fields['billing']['billing_phone']['input_class'] = array("rfield");
    $fields['billing']['billing_email']['input_class'] = array("rfield");
    //$fields["billing"]["billing_country"]["label_class"] = array("rfield");
    //$fields['billing']['billing_city']['label_class'] = array("rfield");
    $fields['billing']['billing_address_1']['input_class'] = array("rfield");


    $fields['billing']['billing_first_name']['required'] = true;




    $fields['billing']['billing_first_name']['label'] = '';
    $fields['billing']['billing_first_name']['placeholder'] = 'ФИО';

    $fields['billing']['billing_phone']['label'] = '';
    $fields['billing']['billing_phone']['placeholder'] = 'Телефон';

    $fields['billing']['billing_email']['label'] = '';
    $fields['billing']['billing_email']['placeholder'] = 'Email';

    $fields['billing']['billing_city']['label'] = '';
    $fields['billing']['billing_city']['placeholder'] = 'Город';

    $fields['billing']['billing_country']['label'] = '';

    $fields['billing']['billing_country']['default'] = 'RU';

    return $fields;
}


add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_address_fields' );

// Our hooked in function - $address_fields is passed via the filter!
function custom_override_default_address_fields( $address_fields ) {
    $address_fields['address_1']['label'] = '';
    $address_fields['address_1']['placeholder'] = 'Введите адрес';
    $address_fields['address_1']['priority'] = 70;



    $address_fields['city']['label'] = 'Город';
    $address_fields['city']['required'] = true;
    $address_fields['city']['priority'] = 60;

    return $address_fields;
}



function the_breadcrumb(){

    // получаем номер текущей страницы
    $pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $separator = '&nbsp;&nbsp;/&nbsp;&nbsp;'; //  »

    // если главная страница сайта
    if( is_front_page() ){

        if( $pageNum > 1 ) {
            echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }

    } else { // не главная

        echo '<a class="main-page" href="' . site_url() . '">Главная</a>' . $separator;


        if( is_single() ){ // записи

            the_category(' / ');
            echo $separator;echo "<span class='active-page'>"; the_title();echo "</span>";

            $post_categories = get_the_category();
            

        } elseif ( is_page() ){ // страницы WordPress


            echo "<span class='active-page'>";
            the_title();
            echo "</span>";

        } elseif ( is_category() ) {
            $current_cat = get_queried_object();
            if( $current_cat->parent ) {
                echo get_category_parents( $current_cat->parent, true, $separator );
            }
            single_cat_title();

        } elseif( is_tag() ) {

            single_tag_title();

        } elseif ( is_day() ) { // архивы (по дням)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
            echo get_the_time('d');

        } elseif ( is_month() ) { // архивы (по месяцам)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo get_the_time('F');

        } elseif ( is_year() ) { // архивы (по годам)

            echo get_the_time('Y');

        } elseif ( is_author() ) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Ошибка 404';

        }

        if ( $pageNum > 1 ) { // номер текущей страницы
            echo ' (' . $pageNum . '-я страница)';
        }

    }

}


add_filter( 'woocommerce_gallery_thumbnail_size', 'true_catalog_size' );

function true_catalog_size( $size ) {
    return 'full';
}

add_filter( 'woocommerce_gallery_image_size', 'true_catalog_size_full' );

function true_catalog_size_full( $size ) {
    return 'full';
}


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
        jQuery( function( $ ) {
            if ( ! String.prototype.getDecimals ) {
                String.prototype.getDecimals = function() {
                    var num = this,
                        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if ( ! match ) {
                        return 0;
                    }
                    return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
                }
            }
            // Quantity "plus" and "minus" buttons
            $( document.body ).on( 'click', '.plus, .minus', function() {
                var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                    currentVal  = parseFloat( $qty.val() ),
                    max         = parseFloat( $qty.attr( 'max' ) ),
                    min         = parseFloat( $qty.attr( 'min' ) ),
                    step        = $qty.attr( 'step' );

                // Format values
                if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
                if ( max === '' || max === 'NaN' ) max = '';
                if ( min === '' || min === 'NaN' ) min = 0;
                if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

                // Change the value
                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( currentVal >= max ) ) {
                        $qty.val( max );
                    } else {
                        $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                    }
                } else {
                    if ( min && ( currentVal <= min ) ) {
                        $qty.val( min );
                    } else if ( currentVal > 0 ) {
                        $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                    }
                }

                // Trigger change event
                $qty.trigger( 'change' );
            });
        });
    </script>
    <?php
}

add_action( 'mywoo_des', 'email_friends' );
function email_friends(){
    global $product;
    wc_get_template( 'single-product/title.php' );
    wc_get_template( 'single-product/rating.php' );
    echo "<div class='mywoo-comp-landing' >";
    echo $product->get_description();
    echo "</div>";
    echo "<div class='cart-line'></div>";
    echo "<div class='mywoo-landin-comp-price'>";
    if( $product->is_type( 'simple' ) ){
        echo "<p class='mywoo-class-simple'>";
        do_action( 'woocommerce_after_shop_loop_item_title' );
        echo "</p>";
        do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );

    }else{
        do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );
    }
    echo do_shortcode('[viewBuyButton]');




}



// Разрешение на загрузку svg файлов
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    // WP 5.1 +
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    else
        $dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if( $dosvg ){

        // разрешим
        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }

    }

    return $data;
}

add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );

# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library( $response ) {

    if ( $response['mime'] === 'image/svg+xml' ) {

        // С выводом названия файла
        $response['image'] = [
            'src' => $response['url'],
        ];
    }

    return $response;
}
//






/*
add_filter('woocommerce_checkout_fields', 'custom_woocommerce_billing_fields');
function custom_woocommerce_billing_fields( $fields ) {
    $fields['billing']['billing_patronymic'] = array(
        'label'       => __('', 'woocommerce'), // Add custom field label
        'placeholder' => __('Отчество', 'woocommerce'), // Add custom field placeholder
        'required'    => false, // if field is required or not
        'clear'       => false, // add clear or not
        'type'        => 'text', // add field type
        'class'       => array('billing_patronymic'),   // add class name
        'priority'    => 20, // Priority sorting option
    );

    return $fields;
}
*/
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );

add_action( 'mywoo_check', function(){

} );

add_option( 'woocommerce_tinkoff_credit_buttonOnCheckoutLocation', 'mywoo_check' );


remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version



function add_async_forscript($url)
{
    if (strpos($url, '#asyncload')===false)
        return $url;
    else
        return str_replace('#asyncload', '', $url)."' async='async";
}
add_filter('clean_url', 'add_async_forscript', 11, 1);

/*
function add_image_responsive_class($content) {
   $pattern ="/<img\s*(?:class\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|src\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|alt\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|title\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|width\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|height\s*\=\s*[\'\"](.*?)[\'\"].*?\s*)+.*?>/i";
   $replacement = '<img class="$1 lazy" data-src="$2" alt="$3" title="$4" width="$5" height="$6" />';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', 'add_image_responsive_class');
*/

add_filter('woocommerce_product_add_to_cart_text','my_woocommerce_variable_text_button',10,2);
function my_woocommerce_variable_text_button($text,$product){

    if($product->product_type == 'variable'){
        $text = 'Подробнее';
    }

    return $text;
}


add_filter( 'woocommerce_single_product_carousel_options', 'ud_update_woo_flexslider_options' );

function ud_update_woo_flexslider_options( $options ) {

    $options['directionNav'] = true;
    $options['touch'] = true;
    $options['animationLoop'] = true;

    return $options;
}
add_action('after_setup_theme', 'remove_zoom_theme_support', 100);
function remove_zoom_theme_support() {
    remove_theme_support('wc-product-gallery-zoom');
}





add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'bm-gallery',
            'title'             => __('Галерея изображений BM'),
            'description'       => __('Собственная галерея изображений'),
            'render_template'   => 'template-parts/blocks/bmGallery.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'bm-gallery', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'BM-text',
            'title'             => __('Текстовое содержимое'),
            'description'       => __('Текстовое содержимое'),
            'render_template'   => 'template-parts/blocks/bmtext.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'bmtext', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'BM-title',
            'title'             => __('Заголовок'),
            'description'       => __('Заголвок'),
            'render_template'   => 'template-parts/blocks/bmtitle.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'bmtext', 'quote' ),
        ));

        acf_register_block_type(array(
            'name'              => 'BM-video',
            'title'             => __('Видео BM'),
            'description'       => __('Видео BM'),
            'render_template'   => 'template-parts/blocks/bmvideo.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'bmvideo', 'quote' ),
        ));

    }
}


foreach ( array( 'pre_term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_filter_kses' );
}

foreach ( array( 'term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_kses_data' );
}

/*
add_action( 'woocommerce_thankyou', 'my_custom_tracking' );
function my_custom_tracking( $order_id ) {
  // Подключаемся к серверу CRM
  define('CRM_HOST', '4k-monitor.bitrix24.ru'); // Ваш домен CRM системы
  define('CRM_PORT', '443'); // Порт сервера CRM. Установлен по умолчанию
  define('CRM_PATH', '/crm/configs/import/lead.php'); // Путь к компоненту lead.rest


  // Авторизуемся в CRM под необходимым пользователем:
  // 1. Указываем логин пользователя Вашей CRM по управлению лидами
  define('CRM_LOGIN', 'dlessirar@4k-monitor.ru');
  // 2. Указываем пароль пользователя Вашей CRM по управлению лидами
  define('CRM_PASSWORD', 'Kleopatra357');

  // Получаем информации по заказу
  $order = wc_get_order( $order_id );
  $order_data = $order->get_data();

  // Получаем базовую информация по заказу
  $order_id = $order_data['id'];
  $order_currency = $order_data['currency'];
  $order_payment_method_title = $order_data['payment_method_title'];
  $order_shipping_totale = $order_data['shipping_total'];
  $order_total = $order_data['total'];

  $order_base_info = "<hr><strong>Общая информация по заказу</strong><br>
  ID заказа: $order_id<br>
  Валюта заказа: $order_currency<br>
  Метода оплаты: $order_payment_method_title<br>
  Стоимость доставки: $order_shipping_totale<br>
  Итого с доставкой: $order_total<br>";

  // Получаем информация по клиенту
  $order_customer_id = $order_data['customer_id'];
  $order_customer_ip_address = $order_data['customer_ip_address'];
  $order_billing_first_name = $order_data['billing']['first_name'];
  $order_billing_last_name = $order_data['billing']['last_name'];
  $order_billing_email = $order_data['billing']['email'];
  $order_billing_phone = $order_data['billing']['phone'];

  $order_client_info = "<hr><strong>Информация по клиенту</strong><br>
  ID клиента = $order_customer_id<br>
  IP адрес клиента: $order_customer_ip_address<br>
  Имя клиента: $order_billing_first_name<br>
  Фамилия клиента: $order_billing_last_name<br>
  Email клиента: $order_billing_email<br>
  Телефон клиента: $order_billing_phone<br>";

  // Получаем информацию по доставке
  $order_shipping_address_1 = $order_data['shipping']['address_1'];
  $order_shipping_address_2 = $order_data['shipping']['address_2'];
  $order_shipping_city = $order_data['shipping']['city'];
  $order_shipping_state = $order_data['shipping']['state'];
  $order_shipping_postcode = $order_data['shipping']['postcode'];
  $order_shipping_country = $order_data['shipping']['country'];

  $order_shipping_info = "<hr><strong>Информация по доставке</strong><br>
  Страна доставки: $order_shipping_state<br>
  Город доставки: $order_shipping_city<br>
  Индекс: $order_shipping_postcode<br>
  Адрес доставки 1: $order_shipping_address_1<br>
  Адрес доставки 2: $order_shipping_address_2<br>";

  // Получаем информации по товару
  $order->get_total();
  $line_items = $order->get_items();
  foreach ( $line_items as $item ) {
    $product = $order->get_product_from_item( $item );
    $sku = $product->get_sku(); // артикул товара
    $id = $product->get_id(); // id товара
    $name = $product->get_name(); // название товара
    $description = $product->get_description(); // описание товара
    $stock_quantity = $product->get_stock_quantity(); // кол-во товара на складе
    $qty = $item['qty']; // количество товара, которое заказали
    $total = $order->get_line_total( $item, true, true ); // стоимость всех товаров, которые заказали, но без учета доставки

    $product_info[] = "<hr><strong>Информация о товаре</strong><br>
    Название товара: $name<br>
    ID товара: $id<br>
    Артикул: $sku<br>
    Описание: $description<br>
    Заказали (шт.): $qty<br>
    Наличие (шт.): $stock_quantity<br>
    Сумма заказа (без учета доставки): $total;";
  }

  $product_base_infо = implode('<br>', $product_info);

  $subject = "Заказ с сайта № $order_id <br> $order_base_info <br> $order_client_info <br> $order_shipping_info <br> $product_info";

  // Формируем параметры для создания лида в переменной $postData = array
  $postData = array(
    'TITLE' => $subject,
    'COMMENTS' => $order_base_info.' '.$order_client_info.' '.$order_shipping_info.' '.$product_base_infо
  );

  // Передаем данные из Woocommerce в Bitrix24
  if (defined('CRM_AUTH')) {
    $postData['AUTH'] = CRM_AUTH;
  } else {
    $postData['LOGIN'] = CRM_LOGIN;
    $postData['PASSWORD'] = CRM_PASSWORD;
  }

  $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
  if ($fp) {
    $strPostData = '';
    foreach ($postData as $key => $value)
    $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);

    $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
    $str .= "Host: ".CRM_HOST."\r\n";
    $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $str .= "Content-Length: ".strlen($strPostData)."\r\n";
    $str .= "Connection: close\r\n\r\n";

    $str .= $strPostData;

    fwrite($fp, $str);

    $result = '';
    while (!feof($fp))
    {
      $result .= fgets($fp, 128);
    }
    fclose($fp);

    $response = explode("\r\n\r\n", $result);

    $output = '<pre>'.print_r($response[1], 1).'</pre>';
  } else {
    echo 'Connection Failed! '.$errstr.' ('.$errno.')';
  }
}
*/

/* Webp Images */

function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

/* перенос скриптов в footer
if(!is_admin()){
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);

}
*/



add_filter('woocommerce_checkout_get_value','__return_empty_string', 1, 1);


add_action( 'woocommerce_after_checkout_validation', 'truemisha_1_error', 25, 2 );

function truemisha_1_error( $fields, $errors ){

    // проверка, есть ли ошибки в принципе
    if( ! empty( $errors->get_error_codes() ) ) {

        // запускаем цикл через все ошибки и удаляем их
        foreach( $errors->get_error_codes() as $code ) {
            $errors->remove( $code );
        }

        // добавляем нашу собственнную
        $errors->add( 'validation', 'Заполните поля!' );

    }

}

add_filter( 'woocommerce_breadcrumb_defaults', 'my_breadcrumbs_delimiter');
function my_breadcrumbs_delimiter($args) {
    $args['delimiter'] = ' &nbsp;&nbsp;/&nbsp;&nbsp;';
    return $args;
}













add_action( 'woocommerce_before_checkout_billing_form', 'organisation_checkout_field' );
function organisation_checkout_field( $checkout ) {
    echo '<div id="organisation_checkout_field">';
    woocommerce_form_field( 'organisation', array(
        'type'    => 'radio',
        'class'   => array('form-row-wide'),
        'label'   =>  '',
        'options' => array(
            'private_person' => 'Частное лицо',
            'company' => 'Юридическое лицо'
        )
    ), $checkout->get_value( 'organisation' ));
    echo '</div>';
}

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
        case 'RUB': $currency_symbol = 'р'; break;
    }
    return $currency_symbol;
}



add_action( 'woocommerce_legal_face', 'my_custom_checkout_field_legal_face' );
function my_custom_checkout_field_legal_face( $checkout ) {
    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;

    echo '<div class="woocommerce-organisation-fields__field-wrapper"><h3 class="checkout-title">Реквизиты организации</h3>';

    woocommerce_form_field( 'organisation_name', array(
        'required'      => true,
        'type'          => 'text',
        'label'         => '',
        'class'         => array('my-field-class form-row-wide'),
        'placeholder'   => __('Наименование организации'),
    ), get_user_meta( $user_id, 'organisation_name', true ));

    woocommerce_form_field( 'organisation_address', array(
        'required'      => true,
        'type'          => 'text',
        'label'         => '',
        'class'         => array('my-field-class form-row-wide'),
        'placeholder'   => __('Юридический адрес организации'),
    ), get_user_meta( $user_id, 'organisation_address', true ));

    woocommerce_form_field( 'organisation_inn', array(
        'required'      => true,
        'type'          => 'text',
        'label'         => '',
        'class'         => array('my-field-class form-row-wide'),
        'placeholder'   => __('ИНН'),
    ), get_user_meta( $user_id, 'organisation_inn', true ));

    woocommerce_form_field( 'organisation_kpp', array(
        'required'      => true,
        'type'          => 'text',
        'label'         => '',
        'class'         => array('my-field-class form-row-wide'),
        'placeholder'   => __('КПП'),
    ), get_user_meta( $user_id, 'organisation_kpp', true ));

    woocommerce_form_field( 'organisation_checking_account', array(
        'required'      => true,
        'type'          => 'text',
        'label'         => '',
        'class'         => array('my-field-class form-row-wide'),
        'placeholder'   => __('ОКПО'),
    ), get_user_meta( $user_id, 'organisation_checking_account', true ));

    woocommerce_form_field( 'organisation_bank', array(
        'required'      => true,
        'type'          => 'text',
        'label'         => '',
        'class'         => array('my-field-class form-row-wide'),
        'placeholder'   => __('ОГРН'),
    ), get_user_meta( $user_id, 'organisation_bank', true ));

    echo '</div>';
}

add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');
function my_custom_checkout_field_process() {
    $radioVal = $_POST["organisation"];

    if($radioVal == "company") {
        if ( ! $_POST['organisation_name'] ) wc_add_notice( __( '<strong>Наименование организации</strong> является обязательным полем.' ), 'error' );
        if ( ! $_POST['organisation_address'] ) wc_add_notice( __( '<strong>Юридический дрес организации</strong> является обязательным полем.' ), 'error' );
        if ( ! $_POST['organisation_inn'] ) wc_add_notice( __( '<strong>ИНН</strong> является обязательным полем.' ), 'error' );
        if ( ! $_POST['organisation_kpp'] ) wc_add_notice( __( '<strong>КПП</strong> является обязательным полем.' ), 'error' );
        if ( ! $_POST['organisation_checking_account'] ) wc_add_notice( __( '<strong>ОКПО</strong> является обязательным полем.' ), 'error' );
        if ( ! $_POST['organisation_bank'] ) wc_add_notice( __( '<strong>ОГРН</strong> является обязательным полем.' ), 'error' );
    }
}





add_action( 'woocommerce_checkout_update_order_meta', 'shipping_apartment_update_order_meta' );

function shipping_apartment_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['organisation_name'] ) ) {
        update_post_meta( $order_id, 'organisation_name', sanitize_text_field( $_POST['organisation_name'] ) );
    }
    if ( ! empty( $_POST['organisation_address'] ) ) {
        update_post_meta( $order_id, 'organisation_address', sanitize_text_field( $_POST['organisation_address'] ) );
    }
    if ( ! empty( $_POST['organisation_inn'] ) ) {
        update_post_meta( $order_id, 'organisation_inn', sanitize_text_field( $_POST['organisation_inn'] ) );
    }
    if ( ! empty( $_POST['organisation_kpp'] ) ) {
        update_post_meta( $order_id, 'organisation_kpp', sanitize_text_field( $_POST['organisation_kpp'] ) );
    }
    if ( ! empty( $_POST['organisation_checking_account'] ) ) {
        update_post_meta( $order_id, 'organisation_checking_account', sanitize_text_field( $_POST['organisation_checking_account'] ) );
    }
    if ( ! empty( $_POST['organisation_bank'] ) ) {
        update_post_meta( $order_id, 'organisation_bank', sanitize_text_field( $_POST['organisation_bank'] ) );
    }

}

add_action( 'woocommerce_admin_order_data_after_shipping_address', 'custom_field_display_admin_order_meta', 10, 1 );

function custom_field_display_admin_order_meta($order){

    echo '<h2>Реквизиты компании</h2>';
    echo '<p><strong>'.__('Наименование').':</strong> ' . get_post_meta( $order->id, 'organisation_name', true ) . '</p>';
    echo '<p><strong>'.__('Юр. адрес').':</strong> ' . get_post_meta( $order->id, 'organisation_address', true ) . '</p>';
    echo '<p><strong>'.__('ИНН').':</strong> ' . get_post_meta( $order->id, 'organisation_inn', true ) . '</p>';
    echo '<p><strong>'.__('КПП').':</strong> ' . get_post_meta( $order->id, 'organisation_kpp', true ) . '</p>';
    echo '<p><strong>'.__('ОКПО').':</strong> ' . get_post_meta( $order->id, 'organisation_checking_account', true ) . '</p>';
    echo '<p><strong>'.__('ОГРН').':</strong> ' . get_post_meta( $order->id, 'organisation_bank', true ) . '</p>';



}






























add_filter( 'woocommerce_available_payment_gateways', 'kvk_field_cheque_payment_method', 20, 1);
function kvk_field_cheque_payment_method( $gateways ){
    if( !is_admin() ) {
        foreach( $gateways as $gateway_id => $gateway ) {

            if( WC()->session->get( 'is_company' ) ){
                unset( $gateways['tinkoff'] );
                unset( $gateways['cod'] );
            } else {
                unset( $gateways['cheque'] );
            }
        }
        return $gateways;
    }
}

// The WordPress Ajax PHP receiver
add_action( 'wp_ajax_kvk_nummer', 'get_ajax_kvk_nummer' );
add_action( 'wp_ajax_nopriv_kvk_nummer', 'get_ajax_kvk_nummer' );
function get_ajax_kvk_nummer() {

    if ( $_POST['organisation'] == 'company' ){
        WC()->session->set('is_company', '1');
    } else {
        WC()->session->set('is_company', '0');
    }
    die();
}

// The jQuery Ajax request
add_action( 'wp_footer', 'checkout_kvk_fields_script' );
function checkout_kvk_fields_script() {
    // Only checkout page
    if( is_checkout() && ! is_wc_endpoint_url() ):

        // Remove "is_company" custom WC session on load
        if( WC()->session->get('is_company') ){
            WC()->session->__unset('is_company');
        }
        ?>
        <script type="text/javascript">
            jQuery( function($){
                var a = 'input[name=organisation]';

                // Ajax function
                function checkKvkNummer( value ){
                    $.ajax({
                        type: 'POST',
                        url: wc_checkout_params.ajax_url,
                        data: {
                            'action': 'kvk_nummer',
                            'organisation': $('input[name=organisation]:checked').val(),
                            //'organisation': value != '' ? 1 : 0, // чредование значений для валидации text или включения checkbox
                        },
                        success: function (result) {
                            $('body').trigger('update_checkout');
                        }
                    });
                }

                // On start
                checkKvkNummer($(a).val());

                // On change event
                $(a).change( function () {
                    checkKvkNummer($(this).val());
                });
            });
        </script>
    <?php
    endif;
};


add_action( 'woocommerce_checkout_order_processed', 'my_func', 20, 1 );
function my_func( $order_id ) {
    $order = wc_get_order( $order_id );
    //отфильтровываем только заказы в статусе "ожидание"
    if( ! $order->has_status( 'pending' ) ) return;
    $wc_email = WC()->mailer()->get_emails()['WC_Email_New_Order'];
    // Изменяем тему
    $wc_email->settings['subject'] = ('{site_title} - New customer Pending order ({order_number}) - {order_date}');
    // Изменяем заголовок
    $wc_email->settings['heading'] = ('New customer Pending Order');
    // Отправить уведомление «Новое письмо» (администратору)
    $wc_email->trigger( $order_id );
    // Сообщение пользователю
    $email_heading = 'Спасибо за заказ';
    $args = array(
        'order'         => $order,
        'email_heading' => $email_heading,
        'sent_to_admin' => false,
        'plain_text'    => false,
    );
    $content_info = wc_get_template_html("emails/customer-processing-order.php", $args);
    $site_title = get_bloginfo('name');
    $customer_email = $order->get_billing_email();
    $email_subject = $site_title.' - Новый заказ';
    wc_mail($customer_email, $email_subject, $content_info);
}



function custom_single_product_archive_thumbnail_size( $size ) {

    // определение нового размера для изображения в списке товаров
    $size = 'full';

    return $size;
}

add_filter( 'single_product_archive_thumbnail_size', 'custom_single_product_archive_thumbnail_size', 10, 1 );





function my_shortcode_kalend ( $attr, $content = null ) {
    ob_start();
    ?>

    <?php
    // Выполнение запроса по категориям и атрибутам
    $args = array(
        // Использование аргумента tax_query для установки параметров терминов таксономии
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $attr['category']
            )
        ),
        // Параметры отображения выведенных товаров
        'posts_per_page' => 6, // количество выводимых товаров
        'post_type' => 'product', // тип товара
        'orderby' => 'title', // сортировка
    );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        $first_custom_class = 'post-' . $product->get_id();
        ?>
        <div <?php wc_product_class( '', $product ); ?>>
            <a href="<?php echo $product->get_permalink(); ?>" class="woocommerce-product-href-link">
                <?php

                do_action( 'woocommerce_before_shop_loop_item' );
                echo "<div class='mywoo-prod-img'> ";
                do_action( 'woocommerce_before_shop_loop_item_title' );
                echo "</div>";
                ?>
                <div class="mywoo-comp-info">
                    <div class="mywoo-comp-info-1">
                        <div class="mywoo-comp-info-1-1">
                            <?php if ($product->get_sale_price() ){ ?>

                                <p class="bm-single-product-price-buttons__price_sale"><?php echo wc_price( $product->get_sale_price() * 1.00 ); ?></p>
                                <p class="bm-single-product-price-buttons__price__text">
                                    <?php echo wc_price( $product->get_regular_price() * 1.00 ); ?>
                                </p>
                                <span class="bm-single-product-price-buttons__price__text-sale">
                                    <?php
                                    echo ((round(($product->get_sale_price()*100)/$product->get_regular_price())));
                                    ?>
                                    %
                            </span>
                                <style>
                                    .<?php echo esc_attr($first_custom_class); ?> .mywoo-comp-info-1-1{
                                        display: flex;
                                        width: 100%;
                                    }
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price_sale{
                                        font-style: normal;
                                        font-weight: 600;
                                        font-size: 24px;
                                        line-height: 130%;
                                        letter-spacing: 0.03em;
                                        color: #FFFFFF;
                                        margin-bottom: 0;
                                        margin-right: 20px;
                                    }
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
                                        font-style: normal;
                                        font-weight: normal;
                                        font-size: 18px;
                                        text-decoration: line-through;
                                        line-height: 130%;
                                        letter-spacing: 0.03em;
                                        color: #989898;
                                        margin-top: 0;
                                        margin-right: 20px;
                                    }
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text-sale{
                                        background: #793DF8;
                                        border-radius: 2px;
                                        padding: 2px 7px;
                                        font-style: normal;
                                        font-weight: bold;
                                        font-size: 15px;
                                        line-height: 110%;
                                        letter-spacing: 0.03em;
                                        color: #FFFFFF;
                                        margin-right: 20px;
                                    }
                                </style>
                            <?php }else{ ?>
                                <p class="bm-single-product-price-buttons__price__text">
                                    <?php echo wc_price( $product->get_price() * 1.00 ); ?>
                                </p>
                                <style>
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
                                        font-style: normal;
                                        font-weight: 600;
                                        font-size: 24px;
                                        line-height: 130%;
                                        letter-spacing: 0.03em;
                                        color: #FFFFFF;
                                        margin-bottom: 0;
                                    }
                                </style>
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <?php
                echo "<div class='mywoo-prod-title'>";
                do_action( 'woocommerce_shop_loop_item_title' );
                echo "</div>";
                ?>
            </a>
            <div class="mywoo-landing-page-computers-container-separator"></div>
            <div class="mywoo-comp-attr">
                <?php if(get_field('vybor_videokarty',$attr['computer'])) { ?>
                    <?php
                    switch ( get_field('vybor_videokarty',$attr['computer']) ){
                        case "video10":
                            if ( get_field('videokarta_10',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Видеокарта</span>
                                        <?php  the_field('videokarta_10',$attr['computer']); ?>
                                    </p>
                                </div>
                            <?php   } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Видеокарта</span>
                                        -
                                    </p>
                                </div>
                            <? }
                            break;
                        case "video30":
                            if ( get_field('videokarta_30',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Видеокарта</span>
                                        <?php the_field('videokarta_30',$attr['computer']); ?>
                                    </p>
                                </div>

                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Видеокарта</span>
                                        -
                                    </p>
                                </div>
                            <?  }
                            break;
                    }
                    ?>
                <?php } ?>
                <?php if (get_field("vybor_proczessora",$attr['computer'])) { ?>
                    <?php
                    switch ( get_field('vybor_proczessora',$attr['computer']) ){
                        case "intel":
                            if ( get_field('proczessory_intel',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Процессор</span>
                                        <?php the_field('proczessory_intel',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Процессор</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "amd":
                            if ( get_field('proczessory_amd',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Процессор</span>
                                        <?php the_field('proczessory_amd',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Процессор</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                    } ?>
                <?php } ?>
                <?php if (get_field("vybor_materinskoj_platy",$attr['computer'])) {?>
                    <?php
                    switch ( get_field('vybor_materinskoj_platy',$attr['computer']) ){
                        case "intelh":
                            if ( get_field('proczessory_intel_h',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_intel_h',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "intelb":
                            if ( get_field('proczessory_intel_b',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_intel_b',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "intelz":
                            if ( get_field('proczessory_intel_z',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_intel_z',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "amdb":
                            if ( get_field('proczessory_amd_b',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_amd_b',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "amdx":
                            if ( get_field('proczessory_amd_x',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_amd_x',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_operativnoj_pamyati",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_operativnoj_pamyati',$attr['computer']) ){
                        case "gb16":
                            if ( get_field('operativnaya_pamyat_16gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        <?php the_field('operativnaya_pamyat_16gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "gb32":
                            if ( get_field('operativnaya_pamyat_32gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        <?php the_field('operativnaya_pamyat_32gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "gb64":
                            if ( get_field('operativnaya_pamyat_64gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        <?php the_field('operativnaya_pamyat_64gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                    } ?>
                <?php } ?>
                <?php if (get_field("vybor_hdd",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_hdd',$attr['computer']) ){
                        case "hdd1tb":
                            if ( get_field('hdd_1tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_1tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        -
                                    </p>
                                </div>
                            <?  }
                            break;
                        case "hdd2tb":
                            if ( get_field('hdd_2tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_2tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        -
                                    </p>
                                </div>
                            <?  }
                            break;
                        case "hdd3tb":
                            if ( get_field('hdd_3tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_3tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        -
                                    </p>
                                </div>
                            <?  }
                            break;
                        case "hdd4tb":
                            if ( get_field('hdd_4tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_4tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        -
                                    </p>
                                </div>
                            <?  }
                            break;
                        case "hdd6tb":
                            if ( get_field('hdd_6tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_6tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        -
                                    </p>
                                </div>
                            <?  }
                            break;
                        case "hdd10tb":
                            if ( get_field('hdd_10tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_10tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        -
                                    </p>
                                </div>
                            <?  }
                            break;
                            ?>

                        <?

                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_ssd_m2",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_ssd_m2',$attr['computer']) ){
                        case "gb256":
                            if ( get_field('ssd_m2_256tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        <?php the_field('ssd_m2_256tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "gb512":
                            if ( get_field('ssd_m2_512tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        <?php the_field('ssd_m2_512tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "tb1":
                            if ( get_field('ssd_m2_1tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        <?php the_field('ssd_m2_1tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_ssd_25",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_ssd_25',$attr['computer']) ){
                        case "ssd25256gb":
                            if ( get_field('ssd_25_256gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        <?php the_field('ssd_25_256gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "ssd25512tb":
                            if ( get_field('ssd_25_512gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        <?php the_field('ssd_25_512gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "ssd251tb":
                            if ( get_field('ssd_25_1tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        <?php the_field('ssd_25_1tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else{ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_bloka_pitaniya",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_bloka_pitaniya',$attr['computer']) ){
                        case "w400":
                            if ( get_field('blok_pitaniya_400w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_400w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "w550":
                            if ( get_field('blok_pitaniya_550w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_550w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "w600":
                            if ( get_field('blok_pitaniya_600w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_600w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "w650":
                            if ( get_field('blok_pitaniya_650w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_650w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "w750":
                            if ( get_field('blok_pitaniya_750w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_750w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "w850":
                            if ( get_field('blok_pitaniya_850w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_850w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "w1000":
                            if ( get_field('blok_pitaniya_1000w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_1000w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        -
                                    </p>
                                </div>
                            <?php   }
                            break;
                    } ?>
                <?php } ?>
            </div>
            <div class="mywoo-comp-info">
                <div class="mywoo-comp-info-2">
                    <div class="mywoo-comp-info-1-2">
                        <?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
                    </div>
                    <div class="mywoo-comp-info-2-2">
                        <?php //echo do_shortcode('[viewBuyButton]'); ?>
                        <a href="<?php echo $product->get_permalink(); ?>" class="mywoo-comp-info-2-2__link">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <style>

            .mywoo-landing-page-computers-container-separator{
                width: 90%;
                margin: 0 auto;
                height: 1px;
                background: #222222;
            }

        </style>

    <?php endwhile; ?>
    <!-- Сброс данных запроса -->
    <?php wp_reset_query(); ?>

    <?
    return ob_get_clean();
}

add_shortcode ( 'sck', 'my_shortcode_kalend' );





function bm_product ( $attr, $content = null ) {
    ob_start();
    ?>

    <?php

    global $product;

    $product = wc_get_product( $attr['computer'] );
    if ($product != null):
        $first_custom_class = 'post-' . $product->get_id();

        ?>
        <div <?php wc_product_class( '', $product ); ?>>
            <?php if($attr['sale'] == true){ ?>
                <div class="sale">
                    <img src="/wp-content/uploads/mosue-gidt.svg">
                    <p class="sale-text">Мышка в подарок</p>
                </div>
                <div class="help">
                    Игровая мышь ASUS ROG Chakram Core в подарок.
                </div>
            <?php } ?>

            <a href="<?php echo $product->get_permalink(); ?>" class="woocommerce-product-href-link">
                <?php

                echo "<div class='mywoo-prod-img'> ";
                do_action( 'woocommerce_before_shop_loop_item_title' );
                echo "</div>";
                ?>

                <div class="mywoo-comp-info">
                    <div class="mywoo-comp-info-1">
                        <div class="mywoo-comp-info-1-1">
                            <?php if ($product->get_sale_price() ){ ?>

                                <p class="bm-single-product-price-buttons__price_sale"><?php echo wc_price( $product->get_sale_price() * 1.00 ); ?></p>
                                <p class="bm-single-product-price-buttons__price__text">
                                    <?php echo wc_price( $product->get_regular_price() * 1.00 ); ?>
                                </p>
                                <span class="bm-single-product-price-buttons__price__text-sale">
                                    <?php
                                    echo ((round(($product->get_sale_price()*100)/$product->get_regular_price())));
                                    ?>
                                    %
                            </span>
                                <style>
                                    .<?php echo esc_attr($first_custom_class); ?> .mywoo-comp-info-1-1{
                                        display: flex;
                                        width: 100%;
                                    }
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price_sale{
                                        font-style: normal;
                                        font-weight: 600;
                                        font-size: 24px;
                                        line-height: 130%;
                                        letter-spacing: 0.03em;
                                        color: #FFFFFF;
                                        margin-bottom: 0;
                                        margin-right: 20px;
                                    }
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
                                        font-style: normal;
                                        font-weight: normal;
                                        font-size: 18px;
                                        text-decoration: line-through;
                                        line-height: 130%;
                                        letter-spacing: 0.03em;
                                        color: #989898;
                                        margin-top: 0;
                                        margin-right: 20px;
                                    }
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text-sale{
                                        background: #793DF8;
                                        border-radius: 2px;
                                        padding: 2px 7px;
                                        font-style: normal;
                                        font-weight: bold;
                                        font-size: 15px;
                                        line-height: 110%;
                                        letter-spacing: 0.03em;
                                        color: #FFFFFF;
                                        margin-right: 20px;
                                    }
                                </style>
                            <?php }else{ ?>
                                <p class="bm-single-product-price-buttons__price__text">
                                    <?php echo wc_price( $product->get_price() * 1.00 ); ?>
                                </p>
                                <style>
                                    .<?php echo esc_attr($first_custom_class); ?> .bm-single-product-price-buttons__price__text{
                                        font-style: normal;
                                        font-weight: 600;
                                        font-size: 24px;
                                        line-height: 130%;
                                        letter-spacing: 0.03em;
                                        color: #FFFFFF;
                                        margin-bottom: 0;
                                    }
                                </style>
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <?php get_price_archive(); ?>
                <div class="mywoo-prod-title">
                    <h2 class="woocommerce-loop-product__title">
                        <?php echo $product->get_name(); ?>
                    </h2>
                </div>

            </a>
            <div class="mywoo-landing-page-computers-container-separator"></div>


            <div class="mywoo-comp-attr">
                <?php if(get_field('vybor_videokarty',$attr['computer'])) { ?>
                    <?php
                    switch ( get_field('vybor_videokarty',$attr['computer']) ){
                        case "video10":
                            if ( get_field('videokarta_10',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Видеокарта</span>
                                        <?php  the_field('videokarta_10',$attr['computer']); ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "video30":
                            if ( get_field('videokarta_30',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Видеокарта</span>
                                        <?php the_field('videokarta_30',$attr['computer']); ?>
                                    </p>
                                </div>

                            <?php }
                            break;
                    }
                    ?>
                <?php } ?>
                <?php if (get_field("vybor_proczessora",$attr['computer'])) { ?>
                    <?php
                    switch ( get_field('vybor_proczessora',$attr['computer']) ){
                        case "intel":
                            if ( get_field('proczessory_intel',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Процессор</span>
                                        <?php the_field('proczessory_intel',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "amd":
                            if ( get_field('proczessory_amd',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Процессор</span>
                                        <?php the_field('proczessory_amd',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                    } ?>
                <?php } ?>
                <?php if (get_field("vybor_materinskoj_platy",$attr['computer'])) {?>
                    <?php
                    switch ( get_field('vybor_materinskoj_platy',$attr['computer']) ){
                        case "intelh":
                            if ( get_field('proczessory_intel_h',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_intel_h',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "intelb":
                            if ( get_field('proczessory_intel_b',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_intel_b',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "intelz":
                            if ( get_field('proczessory_intel_z',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_intel_z',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "amdb":
                            if ( get_field('proczessory_amd_b',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_amd_b',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "amdx":
                            if ( get_field('proczessory_amd_x',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Материнская плата</span>
                                        <?php the_field('proczessory_amd_x',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_operativnoj_pamyati",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_operativnoj_pamyati',$attr['computer']) ){
                        case "gb16":
                            if ( get_field('operativnaya_pamyat_16gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        <?php the_field('operativnaya_pamyat_16gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "gb32":
                            if ( get_field('operativnaya_pamyat_32gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        <?php the_field('operativnaya_pamyat_32gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "gb64":
                            if ( get_field('operativnaya_pamyat_64gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Оперативная память</span>
                                        <?php the_field('operativnaya_pamyat_64gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                    } ?>
                <?php } ?>
                <?php if (get_field("vybor_hdd",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_hdd',$attr['computer']) ){
                        case "hdd1tb":
                            if ( get_field('hdd_1tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_1tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "hdd2tb":
                            if ( get_field('hdd_2tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_2tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "hdd3tb":
                            if ( get_field('hdd_3tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_3tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "hdd4tb":
                            if ( get_field('hdd_4tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_4tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "hdd6tb":
                            if ( get_field('hdd_6tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_6tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "hdd10tb":
                            if ( get_field('hdd_10tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Жесткий диск</span>
                                        <?php the_field('hdd_10tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                            ?>

                        <?

                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_ssd_m2",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_ssd_m2',$attr['computer']) ){
                        case "gb256":
                            if ( get_field('ssd_m2_256tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        <?php the_field('ssd_m2_256tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "gb512":
                            if ( get_field('ssd_m2_512tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        <?php the_field('ssd_m2_512tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "tb1":
                            if ( get_field('ssd_m2_1tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD накопитель</span>
                                        <?php the_field('ssd_m2_1tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_ssd_25",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_ssd_25',$attr['computer']) ){
                        case "ssd25256gb":
                            if ( get_field('ssd_25_256gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        <?php the_field('ssd_25_256gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "ssd25512tb":
                            if ( get_field('ssd_25_512gb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        <?php the_field('ssd_25_512gb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "ssd251tb":
                            if ( get_field('ssd_25_1tb',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>SSD 2.5</span>
                                        <?php the_field('ssd_25_1tb',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                    } ?>
                <?php } ?>
                <?php if(get_field("vybor_bloka_pitaniya",$attr['computer'])){ ?>
                    <?php
                    switch ( get_field('vybor_bloka_pitaniya',$attr['computer']) ){
                        case "w400":
                            if ( get_field('blok_pitaniya_400w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_400w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php   }
                            break;
                        case "w550":
                            if ( get_field('blok_pitaniya_550w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_550w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "w600":
                            if ( get_field('blok_pitaniya_600w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_600w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "w650":
                            if ( get_field('blok_pitaniya_650w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_650w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "w750":
                            if ( get_field('blok_pitaniya_750w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_750w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "w850":
                            if ( get_field('blok_pitaniya_850w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_850w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                        case "w1000":
                            if ( get_field('blok_pitaniya_1000w',$attr['computer']) ){ ?>
                                <div class="mywoo-comp-attr-cont">
                                    <p class="mywoo-comp-attr-cont__text">
                                        <span>Блок питания</span>
                                        <?php the_field('blok_pitaniya_1000w',$attr['computer']) ?>
                                    </p>
                                </div>
                            <?php }
                            break;
                    } ?>
                <?php } ?>
            </div>






            <div class="mywoo-comp-info">
                <div class="mywoo-comp-info-2">
                    <div class="mywoo-comp-info-1-2">
						<?php 
							$stock = $product->get_stock_status(); 
							switch($stock){
								case 'instock':
									do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );
								break;
								case 'onbackorder':?>
									
						<a href="<?php echo $product->add_to_cart_url(); ?>" data-product_id="<?php echo $product->get_id(); ?>"  rel="nofollow" class="chair-link-add-cart single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart">Предзаказ</a>
						
							<?		
								break;
							}
						?>
                        <?php //do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
                    </div>
                    <div class="mywoo-comp-info-2-2">
                        <?php //echo do_shortcode('[viewBuyButton]'); ?>
                        <a href="<?php echo $product->get_permalink(); ?>" class="mywoo-comp-info-2-2__link">Подробнее</a>
                    </div>
                </div>
            </div>

        </div>
        <style>

            .mywoo-landing-page-computers-container-separator{
                width: 90%;
                margin: 0 auto;
                height: 1px;
                background: #222222;
            }
            .sale{
                display: flex;
                align-items: center;
                padding: 9px 17px 11px 17px;
                border: 1px solid #548EFE;
                border-radius: 30px;
                width: fit-content;
                position: absolute;
                transition: .3s;
            }
            .sale:hover{
                transition: .3s;
                border: 1px solid #548EFE;
                background: #3A79F3;
            }
            .sale img{
                margin-right: 10px;
                max-width: 14px;
            }
            .sale-text{
                font-style: normal;
                font-weight: 500;
                font-size: 14px;
                line-height: 110%;
                letter-spacing: 0.03em;
                color: #FFFFFF;
                margin: 0;
            }
            .sale:hover + .help{
                display: block !important;
                position: absolute;
                left: 200px;
                top: 0;
                width: 200px;
            }
            .help{
                display: none;
                padding: 14px;
                background: #151515;
                font-size: 14px;
                color: #fff;
                width: fit-content;
                border-radius: 6px;
                border: 1px solid #548EFE;
            }
        </style>
    <? endif; ?>
    <!-- Сброс данных запроса -->
    <?php wp_reset_query(); ?>

    <?
    return ob_get_clean();
}


add_shortcode ( 'bmproduct', 'bm_product' );


// Отключение метода доставки для компьютеров

add_filter( 'woocommerce_available_payment_gateways', 'truemisha_gateway_by_category', 25 );

function truemisha_gateway_by_category( $available_gateways ) {

    // в админке лучше ничего не делать
    if ( is_admin() ) {
        return $available_gateways;
    }

    $gateway_slug = 'cod'; // ярлык метода оплаты, в данном случае – палка
    $is_available = true; // включен или выключен? по умолчанию – включен
    $cat_ids = array(61); // ID категорий товаров, для которых отключаем

    // цикл для содержимого корзины
    foreach ( WC()->cart->get_cart_contents() as $key => $value ) {
        // получаем все категории данного товара из корзины
        if( $product_cats = get_the_terms( $value[ 'product_id' ], 'product_cat' ) ) {
            foreach ( $product_cats as $product_cat ) {
                if ( in_array( $product_cat->term_id, $cat_ids ) ) {
                    $is_available = false; // товар из заданной категории, отключаем метод оплаты
                    break 2;
                }
            }
        }
    }

    // отключаем метод оплаты
    if ( false === $is_available ){
        unset( $available_gateways[ $gateway_slug ] );
    }

    return $available_gateways; // возвращаем результат

}



// Заявка на выставление заявки в апгрейд сервисе
add_filter( 'woocommerce_available_payment_gateways', 'gateway_apg_center', 25 );
function gateway_apg_center( $available_gateways ) {

    // в админке лучше ничего не делать
    if ( is_admin() ) {
        return $available_gateways;
    }

    $gateway_slug = ['happylend','tinkoff','cod','cheque','pre_orders_pay_later']; // ярлык метода оплаты, в данном случае – палка
    $is_available = true; // включен или выключен? по умолчанию – включен
    $cat_ids = array(612); // ID категорий товаров, для которых отключаем

    // цикл для содержимого корзины
    foreach ( WC()->cart->get_cart_contents() as $key => $value ) {
        // получаем все категории данного товара из корзины
        if( $product_cats = get_the_terms( $value[ 'product_id' ], 'product_cat' ) ) {
            foreach ( $product_cats as $product_cat ) {
                if ( in_array( $product_cat->term_id, $cat_ids ) ) {
                    $is_available = false; // товар из заданной категории, отключаем метод оплаты
                    break 2;
                }
            }
        }
    }

    // отключаем метод оплаты
    if ( false === $is_available ){
        foreach($gateway_slug as $gateway_sluger){
            unset( $available_gateways[ $gateway_sluger ] );
        }
    }

    return $available_gateways; // возвращаем результат

}










function more_computers () {
    ob_start();
    ?>

    <div class="bm-adaptive bm-margin bm">
        <div class="bm-more-computers-container">
            <a href="/kompyutery/" class="bm-more-computers-container__link">Все компьютеры</a>
        </div>
    </div>
    <style>
        .bm-more-computers-container__link{
            display: block;
            border: 1px solid #fff;
            text-decoration: none;
            transition: 0.5s;
            color: #fff !important;
            background: transparent;
            width: fit-content;
            padding: 13px 26px 15px 26px;
            border-radius: 6px;
            font-size: 16px;
        }
        .bm-more-computers-container__link:hover{
            transition: 0.5s;
            text-decoration: none;
            color: #fb1b1b !important;
            border: 1px solid #fb1b1b;
            border-radius: 6px;
        }
        .bm-more-computers-container{display: flex; justify-content: center;}
    </style>

    <!-- Сброс данных запроса -->
    <?php wp_reset_query(); ?>

    <?
    return ob_get_clean();
}

add_shortcode ( 'moreComputers', 'more_computers' );




function bm_computer_posts ( $attr, $content = null ) {
    ob_start();
    ?>

    <?php
    // Выполнение запроса по категориям и атрибутам
    $args = array(
        // Использование аргумента tax_query для установки параметров терминов таксономии
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $attr['category']
            )
        ),
        // Параметры отображения выведенных товаров
        'posts_per_page' => 6, // количество выводимых товаров
        'post_type' => 'product', // тип товара
        'orderby' => 'title', // сортировка
    );

    ?>

    <div class="bm-adaptive bm-margin bm">
        <div class="mywoo-landing-comp mywoo-landing-page-computers-container">

            <?php
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                global $product;
                ?>
                <div <?php wc_product_class( '', $product ); ?>>
                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="woocommerce-product-href-link">
                        <?
                        echo "<div class='mywoo-prod-img'> ";
                        do_action( 'woocommerce_before_shop_loop_item_title' );
                        echo "</div>";
                        echo "<div class='mywoo-prod-title'>";
                        do_action( 'woocommerce_shop_loop_item_title' );
                        echo "</div>";
                        echo "<div class='mywoo-prod-des'>";
                        echo $product->get_description();
                        echo "</div>";
                        ?>
                    </a>
                    <div class="mywoo-comp-info">
                        <div class="mywoo-comp-info-1">
                            <div class="mywoo-comp-info-1-1">
                                <p><span>Цена: </span><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></p>
                            </div>

                        </div>
                        <div class="mywoo-comp-info-2">
                            <div class="mywoo-comp-info-1-2">
                                <?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
                            </div>
                            <div class="mywoo-comp-info-2-2">
                                <?php echo do_shortcode('[viewBuyButton]'); ?>
                            </div>
                        </div>
                    </div>
                    <?php get_price_archive(); ?>
                    <div class="mywoo-comp-attr">
                        <?php if(get_field('vybor_videokarty',$attr['computer'])) { ?>
                            <?php
                            switch ( get_field('vybor_videokarty',$attr['computer']) ){
                                case "video10":
                                    if ( get_field('videokarta_10',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Видеокарта</span>
                                                <?php  the_field('videokarta_10',$attr['computer']); ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "video30":
                                    if ( get_field('videokarta_30',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Видеокарта</span>
                                                <?php the_field('videokarta_30',$attr['computer']); ?>
                                            </p>
                                        </div>

                                    <?php }
                                    break;
                            }
                            ?>
                        <?php } ?>
                        <?php if (get_field("vybor_proczessora",$attr['computer'])) { ?>
                            <?php
                            switch ( get_field('vybor_proczessora',$attr['computer']) ){
                                case "intel":
                                    if ( get_field('proczessory_intel',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Процессор</span>
                                                <?php the_field('proczessory_intel',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "amd":
                                    if ( get_field('proczessory_amd',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Процессор</span>
                                                <?php the_field('proczessory_amd',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                            } ?>
                        <?php } ?>
                        <?php if (get_field("vybor_materinskoj_platy",$attr['computer'])) {?>
                            <?php
                            switch ( get_field('vybor_materinskoj_platy',$attr['computer']) ){
                                case "intelh":
                                    if ( get_field('proczessory_intel_h',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Материнская плата</span>
                                                <?php the_field('proczessory_intel_h',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "intelb":
                                    if ( get_field('proczessory_intel_b',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Материнская плата</span>
                                                <?php the_field('proczessory_intel_b',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "intelz":
                                    if ( get_field('proczessory_intel_z',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Материнская плата</span>
                                                <?php the_field('proczessory_intel_z',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "amdb":
                                    if ( get_field('proczessory_amd_b',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Материнская плата</span>
                                                <?php the_field('proczessory_amd_b',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "amdx":
                                    if ( get_field('proczessory_amd_x',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Материнская плата</span>
                                                <?php the_field('proczessory_amd_x',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                            } ?>
                        <?php } ?>
                        <?php if(get_field("vybor_operativnoj_pamyati",$attr['computer'])){ ?>
                            <?php
                            switch ( get_field('vybor_operativnoj_pamyati',$attr['computer']) ){
                                case "gb16":
                                    if ( get_field('operativnaya_pamyat_16gb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Оперативная память</span>
                                                <?php the_field('operativnaya_pamyat_16gb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "gb32":
                                    if ( get_field('operativnaya_pamyat_32gb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Оперативная память</span>
                                                <?php the_field('operativnaya_pamyat_32gb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "gb64":
                                    if ( get_field('operativnaya_pamyat_64gb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Оперативная память</span>
                                                <?php the_field('operativnaya_pamyat_64gb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                            } ?>
                        <?php } ?>
                        <?php if (get_field("vybor_hdd",$attr['computer'])){ ?>
                            <?php
                            switch ( get_field('vybor_hdd',$attr['computer']) ){
                                case "hdd1tb":
                                    if ( get_field('hdd_1tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Жесткий диск</span>
                                                <?php the_field('hdd_1tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "hdd2tb":
                                    if ( get_field('hdd_2tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Жесткий диск</span>
                                                <?php the_field('hdd_2tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "hdd3tb":
                                    if ( get_field('hdd_3tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Жесткий диск</span>
                                                <?php the_field('hdd_3tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "hdd4tb":
                                    if ( get_field('hdd_4tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Жесткий диск</span>
                                                <?php the_field('hdd_4tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "hdd6tb":
                                    if ( get_field('hdd_6tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Жесткий диск</span>
                                                <?php the_field('hdd_6tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "hdd10tb":
                                    if ( get_field('hdd_10tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Жесткий диск</span>
                                                <?php the_field('hdd_10tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                    ?>

                                <?

                            } ?>
                        <?php } ?>
                        <?php if(get_field("vybor_ssd_m2",$attr['computer'])){ ?>
                            <?php
                            switch ( get_field('vybor_ssd_m2',$attr['computer']) ){
                                case "gb256":
                                    if ( get_field('ssd_m2_256tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>SSD накопитель</span>
                                                <?php the_field('ssd_m2_256tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "gb512":
                                    if ( get_field('ssd_m2_512tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>SSD накопитель</span>
                                                <?php the_field('ssd_m2_512tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "tb1":
                                    if ( get_field('ssd_m2_1tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>SSD накопитель</span>
                                                <?php the_field('ssd_m2_1tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                            } ?>
                        <?php } ?>
                        <?php if(get_field("vybor_ssd_25",$attr['computer'])){ ?>
                            <?php
                            switch ( get_field('vybor_ssd_25',$attr['computer']) ){
                                case "ssd25256gb":
                                    if ( get_field('ssd_25_256gb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>SSD 2.5</span>
                                                <?php the_field('ssd_25_256gb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "ssd25512tb":
                                    if ( get_field('ssd_25_512gb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>SSD 2.5</span>
                                                <?php the_field('ssd_25_512gb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "ssd251tb":
                                    if ( get_field('ssd_25_1tb',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>SSD 2.5</span>
                                                <?php the_field('ssd_25_1tb',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                            } ?>
                        <?php } ?>
                        <?php if(get_field("vybor_bloka_pitaniya",$attr['computer'])){ ?>
                            <?php
                            switch ( get_field('vybor_bloka_pitaniya',$attr['computer']) ){
                                case "w400":
                                    if ( get_field('blok_pitaniya_400w',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Блок питания</span>
                                                <?php the_field('blok_pitaniya_400w',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php   }
                                    break;
                                case "w550":
                                    if ( get_field('blok_pitaniya_550w',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Блок питания</span>
                                                <?php the_field('blok_pitaniya_550w',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "w600":
                                    if ( get_field('blok_pitaniya_600w',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Блок питания</span>
                                                <?php the_field('blok_pitaniya_600w',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "w650":
                                    if ( get_field('blok_pitaniya_650w',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Блок питания</span>
                                                <?php the_field('blok_pitaniya_650w',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "w750":
                                    if ( get_field('blok_pitaniya_750w',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Блок питания</span>
                                                <?php the_field('blok_pitaniya_750w',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "w850":
                                    if ( get_field('blok_pitaniya_850w',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Блок питания</span>
                                                <?php the_field('blok_pitaniya_850w',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                                case "w1000":
                                    if ( get_field('blok_pitaniya_1000w',$attr['computer']) ){ ?>
                                        <div class="mywoo-comp-attr-cont">
                                            <p class="mywoo-comp-attr-cont__text">
                                                <span>Блок питания</span>
                                                <?php the_field('blok_pitaniya_1000w',$attr['computer']) ?>
                                            </p>
                                        </div>
                                    <?php }
                                    break;
                            } ?>
                        <?php } ?>
                    </div>

                </div>

            <?php endwhile; ?>
            <!-- Сброс данных запроса -->
            <?php wp_reset_query(); ?>


            <? return ob_get_clean(); ?>

        </div>
    </div>
    <?php
}

add_shortcode ( 'com-posts', 'bm_computer_posts' );





// Добавление нового пользователя на сайт


$result = add_role( 'infl', __(

    'Инфлюенмсер' ),

    array(

        'read' => true, // true allows this capability
        'edit_posts' => true, // Allows user to edit their own posts
        'edit_pages' => true, // Allows user to edit pages
        'edit_others_posts' => true, // Allows user to edit others posts not just their own
        'create_posts' => true, // Allows user to create new posts
        'manage_categories' => true, // Allows user to manage post categories
        'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
        'edit_themes' => false, // false denies this capability. User can’t edit your theme
        'install_plugins' => false, // User cant add new plugins
        'update_plugin' => false, // User can’t update any plugins
        'update_core' => false // user cant perform core updates

    )

);

remove_role( 'subAdministaro' );
$result = add_role( 'subAdministar', __('Помощник Админа') ,
    array(
        'level_9'                => true,
        'level_8'                => true,
        'level_7'                => true,
        'level_6'                => true,
        'level_5'                => true,
        'level_4'                => true,
        'level_3'                => true,
        'level_2'                => true,
        'publish_posts' => true,
        'publish_pages' => true,
        'manage_links' => true,
        'manage_woocommerce' => true,
        'edit_product_terms' => true,
        'delete_product_terms' => true,
        'assign_product_terms' => true,
        'level_1'         => true,
        'level_0'         => true,
        'install_plugins' => true,
        'update_plugins' => true,
        'activate_plugins' => true,
        'edit_plugins' => true,
        'delete_plugins' => true,
        'install_themes' => true,
        'switch_themes' => false,
        'edit_themes' => true,
        'edit_theme_options' => true,
        'update_themes' => false,
        'delete_themes' => false,
        'update_core' => true,
        'import / export' => true,
        'manage_options' => true,
        'edit_dashboard' => true,
        'create_users'	 => false,
        'edit_users'	=> false,
        'delete_users'	=> false,
        'list_users'	=> false,
        'edit_others_posts' => true,
        'promote_users'	=> false,
        'remove_users'  => false,
        'moderate_comments'	=> true,
        'edit_published_posts' => true,
        'manage_categories'	=> true,
        'edit_pages'	 	=> true,
        'edit_others_pages'	=> true,
        'edit_published_pages'	=> true,
        'publish_pages'	 => true,
        'delete_pages'	 => true,
        'delete_others_pages'	=> true,
        'delete_published_pages' => true,
        'delete_private_pages' => true,
        'edit_posts' => true,
        'delete_posts'		=> true,
        'unfiltered_html'	=> false,
        'upload_files'		=> true,
        'read'	=> true,
        'manage_network' => false,
        'manage_sites'	=> false,
        'manage_network_users'	 => false,
        'manage_network_themes'	=> false,
        'manage_network_options' => false,
        'upgrade_network'		=> false,
        'setup_network' => false,
    )
);






add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

    global $user_ID;

    if ( current_user_can( 'infl' ) ) {
        remove_menu_page('edit.php');
        remove_menu_page( 'edit.php?post_type=page' );
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        remove_menu_page( 'premmerce' );
    }
}


add_action('admin_menu', 'my_admin_menu');

function my_admin_menu() {
    add_menu_page('Параметры каталога', 'Инфлюенсер', 'infl', 'catalog.php', 'print_page_function');

}


function print_page_function() {

    echo "<h2>Ваши заказы</h2>";

    $orders = wc_get_orders( array('numberposts' => -1) ); ?>

    <table border="1">
        <tr>
            <th>Себестоимость</th>
            <th>Цена продажи</th>
            <th>Моржинальность</th>
            <th>Премия</th>
            <th>Статус</th>
            <th>Комментарий</th>
            <th>Статус выплаты</th>
        </tr>



        <?php

        $current_user = wp_get_current_user();


        foreach( $orders as $order ){

            $orderId = $order->get_id();

            switch($current_user->user_email){
                case "grpzdc@boiling-machine.ru":
                    if (change_status_to_preorder($orderId,"nonsub21") || change_status_to_preorder($orderId,"pzdc")){ ?>
                        <tr>
                            <td><?php echo ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php
                                echo (($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2))/2;
                                ?>
                            </td>
                            <td><?php echo $order->get_status(); ?></td>
                            <td><?php the_field("kommentarij",$orderId); ?></td>
                            <td><?php if (get_field("oplachen",$orderId)){
                                    echo "Оплачен";
                                }else{ echo "Неоплачен"; } ?></td>
                        </tr>
                        <?php
                    }
                    break;
                case "Dosia@boiling-machine.ru":
                    if (change_status_to_preorder($orderId,"dosia")){ ?>
                        <tr>
                            <td><?php echo ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php
                                echo (($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2))/2;
                                ?>
                            </td>
                            <td><?php echo $order->get_status(); ?></td>
                            <td><?php the_field("kommentarij",$orderId); ?></td>
                            <td><?php if (get_field("oplachen",$orderId)){
                                    echo "Оплачен";
                                }else{ echo "Неоплачен"; } ?></td>
                        </tr>
                        <?php
                    }
                    break;
                case "Zergtv@boiling-machine.ru":
                    if (change_status_to_preorder($orderId,"zerg") || change_status_to_preorder($orderId,"zergtv") || change_status_to_preorder($orderId,"zerg tv") || change_status_to_preorder($orderId,"sova") || change_status_to_preorder($orderId,"sovushka")){ ?>
                        <tr>
                            <td><?php echo ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php
                                echo (($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2))/2;
                                ?>
                            </td>
                            <td><?php echo $order->get_status(); ?></td>
                            <td><?php the_field("kommentarij",$orderId); ?></td>
                            <td><?php if (get_field("oplachen",$orderId)){
                                    echo "Оплачен";
                                }else{ echo "Неоплачен"; } ?></td>
                        </tr>
                        <?php
                    }
                    break;
                case "kritos@boiling-machine.ru":
                    if (change_status_to_preorder($orderId,"kritos")){ ?>
                        <tr>
                            <td><?php echo ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()); ?></td>
                            <td><?php echo ($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2); ?></td>
                            <td><?php
                                echo (($order->get_subtotal() - $order->get_discount_total()) - ceil($order->get_subtotal()/1.2))/2;
                                ?>
                            </td>
                            <td><?php echo $order->get_status(); ?></td>
                            <td><?php the_field("kommentarij",$orderId); ?></td>
                            <td><?php if (get_field("oplachen",$orderId)){
                                    echo "Оплачен";
                                }else{ echo "Неоплачен"; } ?></td>
                        </tr>
                        <?php
                    }
                    break;
            }


        } ?>
    </table>
    <style>
        table{width: 100%;}
        td{text-align: center;}
    </style>
    <?php



}

function change_status_to_preorder($order_id,$coupon) {

    $order          = new WC_Order($order_id);
    $coupon_codes   = $order->get_coupon_codes();

    if(in_array($coupon, $coupon_codes)) {
        return true;
    }
}

function get_coupon_tax($order_id,$coupon){

    global $woocommerce;
    $c = new WC_Coupon($coupon);

    return $c->amount;

}














// Добавляем новый тип купона в админ панель.
add_filter( 'woocommerce_coupon_discount_types', 'add_free_gift_coupon_type' );
// Добавлям товар при применении купона.
add_action( 'woocommerce_applied_coupon', 'applied_gift_coupon' );
// Меняем цену на ноль при применении купона
add_filter( 'woocommerce_add_cart_item', 'set_gift_price_data', 15 );
add_filter( 'woocommerce_get_cart_item_from_session', 'set_gift_price_data_from_session', 15, 2 );
// Скрываем возможность менять количество товара
add_filter( 'woocommerce_cart_item_quantity', 'cart_item_quantity', 5, 3 );

function add_free_gift_coupon_type($types) {
    $types['free_gift'] = 'Товар в подарок';
    return $types;
}

function applied_gift_coupon($coupon_code) {

    $gift_product = get_gift_data( $coupon_code );

    if ( ! empty ( $gift_product ) ) {
        WC()->cart->add_to_cart( $gift_product->get_id() );

    }
}

function get_gift_data($code) {

    $gift_product = '';

    $code = wc_format_coupon_code( $code );

    $coupon = new WC_Coupon( $code );

    if ( ! is_wp_error( $coupon ) && $coupon->is_type( 'free_gift' ) ) {
        // тут ваша логика для получения рандомного id товара
        return $gift_product = wc_get_product( 4698 );
    }

    return $gift_product;
}

function set_gift_price_data($cart_item) {

    if ( ! empty ( $cart_item['free_gift'] ) ){
        $cart_item['data']->set_price( 0 );
        $cart_item['data']->set_regular_price( 0 );
        $cart_item['data']->set_sale_price( 0 );
    }

    return $cart_item;
}

function set_gift_price_data_from_session( $cart_item, $values) {
    if ( ! empty( $values['free_gift'] ) ) {
        $cart_item['free_gift'] = $values['free_gift'];
        $cart_item = set_gift_price_data( $cart_item );
    }

    return $cart_item;
}

function cart_item_quantity( $product_quantity, $cart_item_key, $cart_item ){

    if ( ! empty ( $cart_item['free_gift'] ) ) {
        $product_quantity = sprintf( '%1$s <input type="hidden" name="cart[%2$s][qty]" value="%1$s" />', $cart_item['quantity'], $cart_item_key );
    }

    return $product_quantity;
}






function filter_woocommerce_cart_totals_coupon_html( $coupon_html, $coupon, $discount_amount_html ) {
    $coupon_html = $discount_amount_html . ' <br><a href="' . esc_url( add_query_arg( 'remove_coupon', rawurlencode( $coupon->get_code() ), defined( 'WOOCOMMERCE_CHECKOUT' ) ? wc_get_checkout_url() : wc_get_checkout_url() ) ) . '" class="woocommerce-remove-coupon" data-coupon="' . esc_attr( $coupon->get_code() ) . '">' . __( 'Убрать', 'woocommerce' ) . '</a>';
    return $coupon_html;
}
add_filter( 'woocommerce_cart_totals_coupon_html', 'filter_woocommerce_cart_totals_coupon_html', 10, 3 );

add_action( 'woocommerce_after_shipping_rate', 'action_after_shipping_rate', 20, 2 );
function action_after_shipping_rate ( $method, $index ) {
    // Targeting checkout page only:
    if( is_cart() ) return; // Exit on cart page

    if( 'flat_rate:14' === $method->id ) {
        echo __("<p class='payment_box'>Доставка по Москве бесплатно</p>");
    }
    if( 'local_pickup:15' === $method->id ) {
        echo __("<p class='payment_box'>г. Москва, ул. Спартаковский переулок 2с1, подъезд 4, офис 3</p>");
    }
    if( 'shiptor-shipping-host:16:to-door_sber_courier' === $method->id ) {
        echo __("<p class='payment_box'>При выборе тарифа «Сберкурьер» к вам приедет курьер с Вашей посылкой прямо до двери дома.</p>");
    }
    if( 'shiptor-shipping-host:16:to-door_cdek_courier' === $method->id ) {
        echo __("<p class='payment_box'>При выборе тарифа «СДЭК Курьер» к вам приедет курьер с Вашей посылкой прямо до двери дома.</p>");
    }
    if( 'shiptor-shipping-host:16:to-door_dpd_eparcel_courier' === $method->id ) {
        echo __("<p class='payment_box'>При выборе тарифа «DPD Курьер Авто» к вам приедет курьер на авто с Вашей посылкой!</p>");
    }
    if( 'shiptor-shipping-host:16:post-office_russian_post_main' === $method->id ) {
        echo __("<p class='payment_box'>При выборе тарифа «Shiptor Почта» мы отправим Ваш заказ почтой.</p>");
    }
}













/*
add_action( 'template_redirect', 'truemisha_auto_gift', 25 );

function truemisha_auto_gift() {

    // ничего не делаем в админке
    if ( is_admin() ) {
        return;
    }

    // ничего не делаем если корзина пуста
    if ( WC()->cart->is_empty() ) {
        return;
    }

    $product_id = array( 7588, 7589, 7590, 7592, 7593, 7594, 7596, 7597, 7598, 7599);
    $gift_id = 7479; // ID товара-подарка

    // вынес наличие подарка в корзине в отдельную переменную
    $is_gift_in_cart = WC()->cart->find_product_in_cart( WC()->cart->generate_cart_id( $gift_id ) );

    // если целевой товар не в корзине
    foreach($product_id as $product){
        if ( ! WC()->cart->find_product_in_cart( WC()->cart->generate_cart_id( $product ) ) ) {

            // если подарок присутствует в корзине, то удаляем его из неё
            if ( $is_gift_in_cart ) {
                WC()->cart->remove_cart_item( WC()->cart->generate_cart_id( $gift_id ) );
            }

        } else { // если целевой товар в корзине

            // на всякий проверяем, если подарок не в корзине, то добавляем
            if ( ! $is_gift_in_cart ) {
                WC()->cart->add_to_cart( $gift_id );
            }

        }
    }

}
*/


// Новые правки кресла

add_action('product_cat_add_form_fields', 'wh_taxonomy_add_new_meta_field', 10, 1);
add_action('product_cat_edit_form_fields', 'wh_taxonomy_edit_meta_field', 10, 1);
//Product Cat Create page
function wh_taxonomy_add_new_meta_field() {
    ?>
    <div class="form-field">
        <label for="wh_meta_title"><?php _e('Цена кресел категорий', 'wh'); ?></label>
        <input type="text" name="wh_meta_title" id="wh_meta_title">
        <p class="description"><?php _e('Цена кресел категорий', 'wh'); ?></p>
    </div>
    <div class="form-field">
        <label for="wh_meta_desc"><?php _e('Chair Height', 'wh'); ?></label>
        <input name="wh_meta_desc" id="wh_meta_desc">
        <p class="description"><?php _e('Высота кресла', 'wh'); ?></p>
    </div>
    <div class="form-field">
        <label for="wh_meta_weight"><?php _e('Chair weight', 'wh'); ?></label>
        <input name="wh_meta_weight" id="wh_meta_weight">
        <p class="description"><?php _e('Максимальный вес кресла', 'wh'); ?></p>
    </div>
    <div class="form-field">
        <label for="wh_meta_material"><?php _e('Chair weight', 'wh'); ?></label>
        <input name="wh_meta_material" id="wh_meta_material">
        <p class="description"><?php _e('Материал кресла', 'wh'); ?></p>
    </div>
    <?php
}
//Product Cat Edit page
function wh_taxonomy_edit_meta_field($term) {
    //getting term ID
    $term_id = $term->term_id;
    // retrieve the existing value(s) for this meta field.
    $wh_meta_title = get_term_meta($term_id, 'wh_meta_title', true);
    $wh_meta_desc = get_term_meta($term_id, 'wh_meta_desc', true);
    $wh_meta_weight = get_term_meta($term_id, 'wh_meta_weight', true);
    $wh_meta_material = get_term_meta($term_id, 'wh_meta_material', true);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="wh_meta_title"><?php _e('Цена кресел категорий', 'wh'); ?></label></th>
        <td>
            <input type="text" name="wh_meta_title" id="wh_meta_title" value="<?php echo esc_attr($wh_meta_title) ? esc_attr($wh_meta_title) : ''; ?>">
            <p class="description"><?php _e('Цена кресел категорий', 'wh'); ?></p>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="wh_meta_desc"><?php _e('Chair Height', 'wh'); ?></label></th>
        <td>
            <input type="text" name="wh_meta_desc" id="wh_meta_desc" value="<?php echo esc_attr($wh_meta_desc) ? esc_attr($wh_meta_desc) : ''; ?>">
            <p class="description"><?php _e('Высота кресла', 'wh'); ?></p>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="wh_meta_weight"><?php _e('Chair weight', 'wh'); ?></label></th>
        <td>
            <input type="text" name="wh_meta_weight" id="wh_meta_weight" value="<?php echo esc_attr($wh_meta_weight) ? esc_attr($wh_meta_weight) : ''; ?>">
            <p class="description"><?php _e('Максимальный вес кресла', 'wh'); ?></p>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="wh_meta_material"><?php _e('Chair Material', 'wh'); ?></label></th>
        <td>
            <input type="text" name="wh_meta_material" id="wh_meta_material" value="<?php echo esc_attr($wh_meta_material) ? esc_attr($wh_meta_material) : ''; ?>">
            <p class="description"><?php _e('Материал кресла', 'wh'); ?></p>
        </td>
    </tr>
    <?php
}


add_action('edited_product_cat', 'wh_save_taxonomy_custom_meta', 10, 1);
add_action('create_product_cat', 'wh_save_taxonomy_custom_meta', 10, 1);
// Save extra taxonomy fields callback function.
function wh_save_taxonomy_custom_meta($term_id) {
    $wh_meta_title = filter_input(INPUT_POST, 'wh_meta_title');
    $wh_meta_desc = filter_input(INPUT_POST, 'wh_meta_desc');
    $wh_meta_weight = filter_input(INPUT_POST, 'wh_meta_weight');
    $wh_meta_material = filter_input(INPUT_POST, 'wh_meta_material');
    update_term_meta($term_id, 'wh_meta_title', $wh_meta_title);
    update_term_meta($term_id, 'wh_meta_desc', $wh_meta_desc);
    update_term_meta($term_id, 'wh_meta_weight', $wh_meta_weight);
    update_term_meta($term_id, 'wh_meta_material', $wh_meta_material);
}







add_filter( 'avatar_defaults', 'tb_default_avatar' );
function tb_default_avatar ($avatar_defaults) {
    $myavatar = 'https://boiling-machine.ru/wp-content/uploads/user-60.png';
    $avatar_defaults[$myavatar] = "Аватар комментария";
    return $avatar_defaults;
}

function get_price(){ ?>
    <div class="changer-price">
        <p>Актуальная стоимость будет рассчитана на этапе согласования с менеджером</p>
        <style>
            .changer-price{
                margin-top: 20px;
            }
            .changer-price p{
                color: #F89D16;
                margin: 0 !important;
                font-size: 14px;
            }
        </style>

    </div>
    <?php
}

function get_price_archive(){ ?>
    <div class="changer-price">
        <p>Актуальная стоимость будет рассчитана на этапе согласования с менеджером</p>
        <style>
            .changer-price{
                padding: 0 25px;
                padding-top: 10px;
            }
            .changer-price p{
                color: #F89D16;
                margin: 0 !important;
                font-size: 14px;
            }
        </style>

    </div>
    <?php
}

function load_posts () {
    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['posts_per_page'] = 6;
    //$args['offset'] = 9;

    query_posts( $args );
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();


            if ($_POST['tpl'] === 'projects') {
                get_template_part( '/template-parts/ajax/ajax-projects');
            }

        }
        die();
    }
}
add_action('wp_ajax_loadmore', 'load_posts');
add_action('wp_ajax_nopriv_loadmore', 'load_posts');


/*
remove_action( 'woocommerce_before_add_to_cart_button', array($GLOBALS['Product_Addon_Display'], 'display'), 10);
add_action( 'woocommerce_after_add_to_cart_button', array($GLOBALS['Product_Addon_Display'], 'display'), 10);
*/

add_filter('comment_form_default_fields', 'unset_url_field');
function unset_url_field($fields){
    if(isset($fields['url']))
        unset($fields['url']);
    return $fields;
}

add_action('comment_post', 'ajaxify_comments',20, 2);
function ajaxify_comments($comment_ID, $comment_status){
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        //If AJAX Request Then
        switch($comment_status){
            case '0':
                //notify moderator of unapproved comment
                wp_notify_moderator($comment_ID);
            case '1': //Approved comment
                echo "success";
                $commentdata= &get_comment($comment_ID, ARRAY_A);
                $post= &get_post($commentdata['comment_post_ID']);
                wp_notify_postauthor($comment_ID, $commentdata['comment_type']);
                break;
            default:
                echo "error";
        }
        exit;
    }
}










function remove_item_from_cart() {
    global $woocommerce;
    $cart = WC()->instance()->cart;
    $id = $_POST['product_id'];
    $id_variation = $_POST['prod_var'];

    foreach(WC()->cart->get_cart() as $key => $item) {
        if($item['product_id'] == $id AND $id_variation == $item['variation_id']){
            $result = WC()->cart->remove_cart_item($key);
        }
    }
    $counting = $woocommerce->cart->cart_contents_count;
    echo json_encode($counting, true);
    die();

    /*
    $cart_id = $cart->generate_cart_id($id);
    $cart_item_id = $cart->find_product_in_cart($cart_id);

    if($cart_item_id){
        $cart->set_quantity($cart_item_id, 0);
        $counting = $woocommerce->cart->cart_contents_count;

        echo json_encode($counting, true);
        die();
    }
    */

}

add_action('wp_ajax_remove_item_from_cart', 'remove_item_from_cart');
add_action('wp_ajax_nopriv_remove_item_from_cart', 'remove_item_from_cart');






add_filter('add_to_cart_custom_fragments', 'woocommerce_header_add_to_cart_custom_fragment');
function woocommerce_header_add_to_cart_custom_fragment( $cart_fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View   cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
    <?php
    $cart_fragments['a.cart-contents'] = ob_get_clean();
    return $cart_fragments;
}


//Разделение товаров в корзине для доп опций кресел
function bbloomer_split_product_individual_cart_items( $cart_item_data, $product_id ){
    if ($product_id == '12404'){
        $unique_cart_item_key = uniqid();
        $cart_item_data['unique_key'] = $unique_cart_item_key;
        return $cart_item_data;
    }
}

add_filter( 'woocommerce_add_cart_item_data', 'bbloomer_split_product_individual_cart_items', 10, 2 );






add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);

function custom_variation_price( $price, $product ) {

    foreach($product->get_available_variations() as $pav){
        $def=true;
        foreach($product->get_variation_default_attributes() as $defkey=>$defval){
            if($pav['attributes']['attribute_'.$defkey]!=$defval){
                $def=false;
            }
        }
        if($def){
            $price = $pav['display_price'];
        }
    }
    return woocommerce_price($price);
}



/**
 * AJAX фильтр товаров
 */
add_action( 'wp_ajax_ajaxfilter', 'true_filter' );
add_action( 'wp_ajax_nopriv_ajaxfilter', 'true_filter' );

function true_filter() {
    global $wp_query;

    $main_category_cat = ! empty( $_POST[ 'curcategory' ] ) && $_POST[ 'curcategory' ] ? $_POST[ 'curcategory' ] : array();
    $args = array();

    if(isset($_POST['custom']) AND $_POST['custom'] == 'favorite'){
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'post__in' => explode(',', $_COOKIE['catalog_favorite']),
            'paged' => $_POST['page'],
            'posts_per_page' => $_POST["sort_count"],
            'orderby' => [
                $_POST['sort_meta_key'] => $_POST['sort_order'],
                'ID' => 'DESC',
            ],
            'meta_query' => [
                'relation' => 'AND',
                'key' => $_POST['sort_meta_key'],
                'compare' => 'EXISTS',
                'type' => 'NUMERIC'
            ],
            'tax_query' => array(
                'relation' => 'AND',
                array( // исключаем из фильтрации товары, который скрыты из каталога
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'exclude-from-catalog',
                    'operator' => 'NOT IN',
                ),
            )
        );
    } else {

        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'product_cat' => $main_category_cat,
            'posts_per_page' => $_POST['sort_count'],
            'paged' => $_POST['page'],
            'orderby' => [
                $_POST['sort_meta_key'] => $_POST['sort_order'],
                'ID' => 'DESC',
            ],
            'meta_query' => [
                'relation' => 'AND',
            ],
        );

        $args['meta_query'][$_POST['sort_meta_key']] = [
            'key' => $_POST['sort_meta_key'],
            'compare' => 'EXISTS',
            'type' => 'NUMERIC'
        ];

        // Исключаем из фильтрации товары, который скрыты из каталога
        $args['tax_query'] =  [ 'relation' => 'AND',
            [
                'taxonomy' => 'product_visibility',
                'field' => 'name',
                'terms' => 'exclude-from-catalog',
                'operator' => 'NOT IN',
            ],
        ];

        // Сортировка по популярность
        if($_POST['sort_meta_key'] == 'rejting_tovara') {
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
    }


//    if($_POST["meta_key"] == '_price') {
//         $args['type'] = 'NUMERIC';
//    }


    // Работа с категориями
//    $product_cats = ! empty( $_POST[ 'product_cats' ] ) && $_POST[ 'product_cats' ] ? $_POST[ 'product_cats' ] : array();
//    if( $product_cats ) {
//        $args[ 'tax_query' ][] = array(
//            'taxonomy' => 'product_cat',
//            'terms' => $product_cats
//        );
//    }else{
//        $product_cur_category = ! empty( $_POST[ 'curcategory' ] ) && $_POST[ 'curcategory' ] ? $_POST[ 'curcategory' ] : array();
//        $args[ 'tax_query' ][] = array(
//            'taxonomy' => 'product_cat',
//            'terms' => $product_cur_category
//        );
//    }

//    //Рабта с сортировкой товара
//    $product_sort = ! empty( $_POST[ 'orderby' ] ) && $_POST[ 'orderby' ] ? $_POST[ 'orderby' ] : 'none';
//    if ($product_sort == 'none') {
//        if ($main_category_cat == '509') {
//            $args['meta_key'] = 'rejting_tovara';
//            $args['orderby'] = 'meta_value_num';
//            $args['order'] = 'ASC';
//        }else{
//            $args['meta_key'] = 'rejting_tovara_seriya_kresel';
//            $args['orderby'] = 'meta_value_num';
//            $args['order'] = 'ASC';
//        }
//    }else{
//        if($product_sort == 'priceup'){
//            $args['ignore_custom_sort'] = true;
//            $args['meta_key'] = '_price';
//            $args['orderby'] = 'meta_value_num';
//            $args['order'] = 'ASC';
//            $args['type'] = 'NUMERIC';
//        }
//        if($product_sort == 'pricedown'){
//            //$args['meta_key'] = '_price';
//            $args['orderby'] = 'price';
//            $args['order'] = 'DESC';
//        }
//    }

    // Фильтр отдельным товарам
    if(!empty($_POST['post_in'])) {
        $args['post__in'] = $_POST['post_in'];
    }

    // Производитель
    $proizvoditel = ! empty( $_POST[ 'proizvoditel' ] ) && $_POST[ 'proizvoditel' ] ? $_POST[ 'proizvoditel' ] : array();
    if( $proizvoditel ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_proizvoditel',
            'field' => 'slug',
            'terms' => $proizvoditel
        );
    }


    $colors = ! empty( $_POST[ 'color' ] ) && $_POST[ 'color' ] ? $_POST[ 'color' ] : array();
    if( $colors ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_czvet',
            'field' => 'slug',
            'terms' => $colors
        );
    }
    $vesa = !empty( $_POST[ 'vesform' ] ) && $_POST[ 'vesform' ] ? $_POST[ 'vesform' ] : array();
    if( $vesa ) {
        if(is_array($vesa)) $vesa = $vesa[0];

        $arVesa = false;

        foreach (get_terms( ['taxonomy' => 'pa_gruzopodemnost', 'orderby' => 'meta_value_num']) as $arTempTemp) {
            if((int)$arTempTemp->slug >= (int)$vesa) $arVesa[] = $arTempTemp->slug ;
        }

        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_gruzopodemnost',
            'field' => 'slug',
            'terms' => $arVesa,
        );
    }

    $nalichie_podushek = ! empty( $_POST[ 'reg_podushki' ] ) && $_POST[ 'reg_podushki' ] ? $_POST[ 'reg_podushki' ] : array();
    if( $nalichie_podushek ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_nalichie-podushek',
            'field' => 'slug',
            'terms' => $nalichie_podushek
        );
    }

    $matkrest = ! empty( $_POST[ 'matkrest' ] ) && $_POST[ 'matkrest' ] ? $_POST[ 'matkrest' ] : array();
    if( $matkrest ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_material-krestoviny',
            'field' => 'slug',
            'terms' => $matkrest
        );
    }

    $mechanizm_kach = ! empty( $_POST[ 'mechanizm_kach' ] ) && $_POST[ 'mechanizm_kach' ] ? $_POST[ 'mechanizm_kach' ] : array();
    if( $mechanizm_kach ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_mehanizm-kachaniya',
            'field' => 'slug',
            'terms' => $mechanizm_kach
        );
    }

    $brends = ! empty( $_POST[ 'brends' ] ) && $_POST[ 'brends' ] ? $_POST[ 'brends' ] : array();
    if( $brends ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_seriya',
            'field' => 'slug',
            'terms' => $brends
        );
    }

    $reg_pod = ! empty( $_POST[ 'reg_pod' ] ) && $_POST[ 'reg_pod' ] ? $_POST[ 'reg_pod' ] : array();
    if( $reg_pod ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_regulirovka-podlokotnikov',
            'field' => 'slug',
            'terms' => $reg_pod
        );
    }

    $min_price = ! empty( $_POST[ 'min_price' ] ) && $_POST[ 'min_price' ] ? absint( $_POST[ 'min_price' ] ) : 0;
    $max_price = ! empty( $_POST[ 'max_price' ] ) && $_POST[ 'max_price' ] ? absint( $_POST[ 'max_price' ] ) : 1000000;

    $args['meta_query']['price_clause'] = array(
        'key' => 'czena_dlya_filtra',
        'value' => array( $min_price, $max_price ), // значения ОТ и ДО
        'compare' => 'between',
        'type' => 'numeric'
    );



    $reg_rost = ! empty( $_POST[ 'rostform' ] ) && $_POST[ 'rostform' ] ? $_POST[ 'rostform' ] : array();
    if( $reg_rost && $reg_rost != 'rost' ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_rekomenduemyj-rost',
            'field' => 'slug',
            'terms' => $reg_rost
        );
    }

    // Материал
    $reg_material = ! empty( $_POST[ 'pa_material-obshivki' ] ) && $_POST[ 'pa_material-obshivki' ] ? $_POST[ 'pa_material-obshivki' ] : array();
    if( $reg_material && $reg_material != 'material') {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_material-obshivki',
            'field' => 'slug',
            'terms' => $reg_material
        );
    }



    $query  = new WP_Query( $args );

    ob_start();

//    exKod::Common()->drop($args);
    ?>
        <div class="catalog-filter-tag">
            <?
            // Проверяем если это теговая страница
            $arTermTag = get_term($_POST['term_id'], 'product_cat');
            $arTermTag->page_tag = get_field('page_tag', $arTermTag->taxonomy . '_' .$arTermTag->term_id);
            $arTermTag->filter   = get_field('filter', $arTermTag->taxonomy . '_' .$arTermTag->term_id);
            ?>
            <?foreach ($args['tax_query'] as $arItem):?>
                <?
                    if(!isset($arItem['terms'])) continue;
                    if($arItem['taxonomy'] == 'product_visibility') continue;
                    if($arItem['taxonomy'] == 'product_cat') continue;
                    // Проверяем если это страница для тега и теговая страница то не показывать данный тег
                    if($arTermTag->filter[$arItem['taxonomy']]) continue;

                    $args = [
                        'taxonomy' => $arItem['taxonomy']
                    ];

                    if(is_array($arItem['terms']) AND is_numeric($arItem['terms'][0])) {
                        $args['slug'] = $arItem['terms']; // include
                    } else {
                        $args['slug'] = $arItem['terms'];
                    }

                    $arTerms = get_terms($args);

//                    exKod::Common()->drop($args);
//                ?>
                <?foreach ($arTerms as $term):?>
                    <? if($arItem['taxonomy'] == 'pa_gruzopodemnost') $term->name = $vesa?>
                    <li data-taxonomy="<?=$term->taxonomy?>" data-term_id="<?=$term->term_id?>" data-term_slud="<?=$term->slug?>">
                        <span><?=$term->name?>
                            <?if($term->taxonomy == 'pa_gruzopodemnost') echo ' кг.'?>
                        </span>
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.13017 6.13017C6.30374 5.95661 6.58515 5.95661 6.75871 6.13017L10 9.37146L13.2413 6.13017C13.4149 5.95661 13.6963 5.95661 13.8698 6.13017C14.0434 6.30374 14.0434 6.58515 13.8698 6.75871L10.6285 10L13.8698 13.2413C14.0434 13.4149 14.0434 13.6963 13.8698 13.8698C13.6963 14.0434 13.4149 14.0434 13.2413 13.8698L10 10.6285L6.75871 13.8698C6.58515 14.0434 6.30374 14.0434 6.13017 13.8698C5.95661 13.6963 5.95661 13.4149 6.13017 13.2413L9.37146 10L6.13017 6.75871C5.95661 6.58515 5.95661 6.30374 6.13017 6.13017Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </li>
                    <? if($arItem['taxonomy'] == 'pa_gruzopodemnost') break;?>
                <?endforeach;?>
            <?endforeach;?>
        </div>

    <?php
    if( $query->have_posts() ) {

        while ( $query->have_posts() ) {
            $query->the_post();
            global $product;
            global $post;
            require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/content-product-chairs.php';
        } wp_reset_postdata();
        ?>

        <? get_template_part( 'templates/pagination/.default' ,false, [
            'max_num_pages' => $query->max_num_pages,
            'page' => $_POST['page'],
            'url' => $_POST['url']
            ]);?>

        <?php
    } else {
        echo '<p>Ничего не найдено.</p>';
    }

    $html_products = ob_get_contents();
    // очищаем буфер
    ob_end_clean();


    wp_send_json( array(
        'products' => $html_products
    ));


}

/**
 * AJAX Каталог добавление в фаворит товаров
 */
add_action( 'wp_ajax_catalog_on_favorite', 'catalog_on_favorite' );
add_action( 'wp_ajax_nopriv_catalog_on_favorite', 'catalog_on_favorite' );

function catalog_on_favorite () {
    if(!empty($_POST['product_id'])) {
        $id = $_POST['product_id'];
        $elements = explode(',', $_COOKIE['catalog_favorite']);

        if (($key = array_search($id, $elements)) !== false) {
            unset($elements[$key]);

            $res = ['code' => 0, 'message' => 'Товар успешно удален из Избранного'];
        } else {
            $elements[] = $id;
            $res = ['code' => 1, 'message' => 'Товар успешно добавлен в <a href="/favorite/">Избранного</a>'];
        }
        $elements = array_filter($elements);

        setcookie("catalog_favorite", implode(',', array_unique(array_filter($elements))), time() + 5 * 24 * 3600,'/', $_SERVER['HTTP_HOST'], false);

        $res['count'] = count($elements);

        wp_send_json($res);
    }
}

/**
 * AJAX Каталог добавление в фаворит товаров
 */
add_action( 'wp_ajax_catalog_on_comparison', 'catalog_on_comparison' );
add_action( 'wp_ajax_nopriv_catalog_on_comparison', 'catalog_on_comparison' );

function catalog_on_comparison () {
    if(!empty($_POST['product_id'])) {
        $id = $_POST['product_id'];
        $elements = explode(',', $_COOKIE['catalog_comparison']);

        if (($key = array_search($id, $elements)) !== false) {
            unset($elements[$key]);

            $res = ['code' => 0, 'message' => 'Товар успешно удален из Сравнения'];
        } else {
            $elements[] = $id;
            $res = ['code' => 1, 'message' => 'Товар успешно добавлен в <a href="/compare/">Сравнения</a>'];
        }
        $elements = array_filter($elements);

        setcookie("catalog_comparison", implode(',', array_unique(array_filter($elements))), time() + 5 * 24 * 3600,'/', $_SERVER['HTTP_HOST'], false);

        $res['count'] = count($elements);

        wp_send_json($res);
    }
}

/**
 * AJAX Каталог очистить фаворит товаров
 */
add_action( 'wp_ajax_catalog_on_comparison_clear', 'catalog_on_comparison_clear' );
add_action( 'wp_ajax_nopriv_catalog_on_comparison_clear', 'catalog_on_comparison_clear' );

function catalog_on_comparison_clear () {
    $res = ['code' => 1, 'message' => 'Товары успешно удалены из Сравнения'];
    $res['count'] = 0;
    
    setcookie("catalog_comparison", '', time() + 5 * 24 * 3600,'/', $_SERVER['HTTP_HOST'], false);

    wp_send_json($res);
}

add_action( 'wp_ajax_catalog_on_favorite_clear', 'catalog_on_favorite_clear' );
add_action( 'wp_ajax_nopriv_catalog_on_favorite_clear', 'catalog_on_favorite_clear' );

function catalog_on_favorite_clear () {
    $res = ['code' => 1, 'message' => 'Товары успешно удалены из Избранного'];
    $res['count'] = 0;

    setcookie("catalog_favorite", '', time() + 5 * 24 * 3600,'/', $_SERVER['HTTP_HOST'], false);

    wp_send_json($res);
}


/**
 * AJAX пагинация
 */
add_action( 'wp_ajax_ajaxloadmore', 'true_loader' );
add_action( 'wp_ajax_nopriv_ajaxloadmore', 'true_loader' );

function true_loader(){
    global $wp_query;

    $reg_page = ! empty( $_POST[ 'pagenum' ] ) && $_POST[ 'pagenum' ] ? $_POST[ 'pagenum' ] : array();
    $ref_max_page = ! empty( $_POST[ 'maxpage' ] ) && $_POST[ 'maxpage' ] ? $_POST[ 'maxpage' ] : array();

    $main_category_cat = ! empty( $_POST[ 'curcategory' ] ) && $_POST[ 'curcategory' ] ? $_POST[ 'curcategory' ] : array();

    $args = array();

    if($main_category_cat == '509'){
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 12,
            'paged' => $reg_page,
            'meta_key' => 'rejting_tovara',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'tax_query' => array(
                'relation' => 'AND',
                array( // исключаем из фильтрации товары, который скрыты из каталога
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'exclude-from-catalog',
                    'operator' => 'NOT IN',
                ),
            )
        );
    }else{
        /*
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 12,
            'paged' => $reg_page,
            'meta_key' => 'rejting_tovara_seriya_kresel',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'tax_query' => array(
                'relation' => 'AND',
                array( // исключаем из фильтрации товары, который скрыты из каталога
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'exclude-from-catalog',
                    'operator' => 'NOT IN',
                ),
            )
        );
        */
//        'posts_per_page' => $_COOKIE["sort_count"],
//        'paged' => get_query_var('paged') ?: 1,
//        'orderby' => $_COOKIE['orderby'],
//        'meta_key' => $_COOKIE["sort_type"],
//        'order' => $_COOKIE["sort_order"],

        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => $_COOKIE["sort_count"],
            'offset' => $reg_page * 12,
            'meta_key' => $_COOKIE["sort_type"], // rejting_tovara_seriya_kresel
            'orderby' => $_COOKIE['orderby'],
            'order' => $_COOKIE["sort_order"],
            'tax_query' => array(
                'relation' => 'AND',
                array( // исключаем из фильтрации товары, который скрыты из каталога
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'exclude-from-catalog',
                    'operator' => 'NOT IN',
                ),
            )
        );
    }

    
    // Работа с категориями
    $product_cats = ! empty( $_POST[ 'product_cats' ] ) && $_POST[ 'product_cats' ] ? $_POST[ 'product_cats' ] : array();
    if( $product_cats ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'product_cat',
            'terms' => $product_cats
        );
    }else{
        $main_category = ! empty( $_POST[ 'curcategory' ] ) && $_POST[ 'curcategory' ] ? $_POST[ 'curcategory' ] : array();
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'product_cat',
            'terms' => $main_category
        );
    }

    //Рабта с сортировкой товара
    /*
    $product_sort = ! empty( $_POST[ 'orderby' ] ) && $_POST[ 'orderby' ] ? $_POST[ 'orderby' ] : 'none';
    if ($product_sort == 'none') {
        if ($main_category_cat == '509') {
            $args['meta_key'] => 'rejting_tovara';
            $args['orderby'] => 'meta_value_num';
            $args['order'] => 'ASC';
        }else{
            $args['meta_key'] => 'rejting_tovara_seriya_kresel';
            $args['orderby'] => 'meta_value_num';
            $args['order'] => 'ASC';
        }
    }
    */
    
    
    
    $colors = ! empty( $_POST[ 'color' ] ) && $_POST[ 'color' ] ? $_POST[ 'color' ] : array();
    if( $colors ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_czvet',
            'field' => 'slug',
            'terms' => $colors
        );
    }
    $vesa = ! empty( $_POST[ 'vesform' ] ) && $_POST[ 'vesform' ] ? $_POST[ 'vesform' ] : array();
    if( $vesa ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_gruzopodemnost',
            'field' => 'slug',
            'terms' => [$vesa]
        );
    }

    $brends = ! empty( $_POST[ 'brends' ] ) && $_POST[ 'brends' ] ? $_POST[ 'brends' ] : array();
    if( $brends ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_seriya',
            'field' => 'slug',
            'terms' => $brends
        );
    }

    $nalichie_podushek = ! empty( $_POST[ 'reg_podushki' ] ) && $_POST[ 'reg_podushki' ] ? $_POST[ 'reg_podushki' ] : array();
    if( $nalichie_podushek ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_nalichie-podushek',
            'field' => 'slug',
            'terms' => $nalichie_podushek
        );
    }

    $matkrest = ! empty( $_POST[ 'matkrest' ] ) && $_POST[ 'matkrest' ] ? $_POST[ 'matkrest' ] : array();
    if( $matkrest ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_material-krestoviny',
            'field' => 'slug',
            'terms' => $matkrest
        );
    }

    $mechanizm_kach = ! empty( $_POST[ 'mechanizm_kach' ] ) && $_POST[ 'mechanizm_kach' ] ? $_POST[ 'mechanizm_kach' ] : array();
    if( $mechanizm_kach ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_mehanizm-kachaniya',
            'field' => 'slug',
            'terms' => $mechanizm_kach
        );
    }

    $reg_pod = ! empty( $_POST[ 'reg_pod' ] ) && $_POST[ 'reg_pod' ] ? $_POST[ 'reg_pod' ] : array();
    if( $reg_pod ) {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_regulirovka-podlokotnikov',
            'field' => 'slug',
            'terms' => $reg_pod
        );
    }

    $min_price = ! empty( $_POST[ 'min_price' ] ) && $_POST[ 'min_price' ] ? absint( $_POST[ 'min_price' ] ) : 0;
    $max_price = ! empty( $_POST[ 'max_price' ] ) && $_POST[ 'max_price' ] ? absint( $_POST[ 'max_price' ] ) : 100;

    $args[ 'meta_query' ] = array(
        'price_clause' => array(
            'key' => 'czena_dlya_filtra',
            'value' => array( $min_price, $max_price ), // значения ОТ и ДО
            'compare' => 'between',
            'type' => 'numeric'
        )
    );

    $reg_rost = ! empty( $_POST[ 'rostform' ] ) && $_POST[ 'rostform' ] ? $_POST[ 'rostform' ] : array();
    if( $reg_rost && $reg_rost != 'rost') {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_rekomenduemyj-rost',
            'field' => 'slug',
            'terms' => $reg_rost
        );
    }

//    $reg_ves = ! empty( $_POST[ 'vesform' ] ) && $_POST[ 'vesform' ] ? $_POST[ 'vesform' ] : array();
//    if( $reg_ves && $reg_ves != 'ves') {
//        $args[ 'tax_query' ][] = array(
//            'taxonomy' => 'pa_rekomenduemyj-ves',
//            'field' => 'slug',
//            'terms' => $reg_ves
//        );
//    }

    // Материал
    $reg_material = ! empty( $_POST[ 'pa_material-obshivki' ] ) && $_POST[ 'pa_material-obshivki' ] ? $_POST[ 'pa_material-obshivki' ] : array();
    if( $reg_material && $reg_material != 'material') {
        $args[ 'tax_query' ][] = array(
            'taxonomy' => 'pa_material-obshivki',
            'field' => 'slug',
            'terms' => $reg_material
        );
    }



    $query  = new WP_Query( $args );

    ob_start();

    ?>
    <div class="catalog-filter-tag">
        <?exKod::Common()->drop($args)?>
        <?foreach ($args as $arItem):?>

        <?endforeach;?>
    </div>1111
    <?php

    if( $query->have_posts() ) {

        while ( $query->have_posts() ) {
            $query->the_post();
            global $product;
            require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/content-product-chairs.php';
        }

        ?>22222
        <?php if ($reg_page <= $ref_max_page): ?>
            <div class="loadmore">
                <form action="" method="post" id="ajaxloader">
                    <label class='load-more-link' for="ajaxloadmore">Показать еще 12</label>
                    <input type="hidden" name="action" page-now="<?php echo $reg_page + 1; ?>" max-page="<?php echo $ref_max_page; ?>" id="ajaxloadmore"/>
                    <input type="hidden" name="action" value="ajaxloadmore" />
                </form>
            </div>
        <?php endif; ?>

        <?php


    } else {
        echo '<p>Ничего не найдено.</p>';
    }

    $html_products = ob_get_contents();
    // очищаем буфер
    ob_end_clean();


    wp_send_json( array(
        'products' => $html_products,
        'count' => 'Отображение 1–' . $query->found_posts . ' из ' . $query->found_posts
    ));
}



function misha_my_load_more_scripts() {

    global $wp_query;

    // register our main script but do not enqueue it yet
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/dist/myloadmore.js', array('jquery') );

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ),
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );

    wp_enqueue_script( 'my_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );


add_action('wp_ajax_loadmore_products', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore_products', 'misha_loadmore_ajax_handler');

function misha_loadmore_ajax_handler(){
    global $wp_query;

    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    $query  = new WP_Query( $args );

    ob_start();


    if( $query->have_posts() ) {

        while ( $query->have_posts() ) {
            $query->the_post();
            global $product;
            global $post;
            require get_template_directory() . '/woocommerce/chairs/templates/sidebar-chairs/content-product-chairs.php';
        }

        ?>

        <?php


    } else {
        echo '<p>Ничего не найдено.</p>';
    }

    $html_products = ob_get_contents();
    // очищаем буфер
    ob_end_clean();


    wp_send_json( array(
        'products' => $html_products
    ));
}


// SEO - Подмена
global $arSeoReversTitle;

function getReversTitle() {
    return [
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine/","Boiling XGod Machine GTX 1660 Ti   - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-2/","Boiling XGod Machine RTX 3060 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-3/","Boiling XGod Machine RTX 3060 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-4/","Boiling XGod Machine RTX 3070 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-6/","Boiling XGod Machine GTX 1660 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-7/","Boiling XGod Machine GTX 1650 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-8/","Boiling XGod Machine Ryzen GeForce RTX 3060 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-9/","Boiling XGod Machine GeForce RTX 3060 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-10/","Boiling XGod Machine GeeForce RTX 3070 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-2/","Boiling ZERG Machine RTX 3060 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-3/","Boiling ZERG Machine RTX 3060 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-4/","Boiling ZERG Machine GTX 1650 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-5/","Boiling ZERG Machine GTX 1660 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-6/","Boiling ZERG Machine RTX 3070 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-7/","Boiling ZERG Machine GeForce RTX 3060 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-8/","Boiling ZERG Machine GeForce RTX 3060 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-9/","Boiling ZERG Machine GeForce GTX 1660 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine/","Boiling ZERG Machine GeForce RTX 3070 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/rmachine/r-machine-intel-12-gen/","R Machine RTX 3080 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/rmachine/r-machine-intel-12-gen-2/","R Machine RTX 3080 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/r-machine-8/","R Machine GeForce RTX 3080 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/t-machine-8/","T Machine RTX 3070 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/t-machine-7/","T Machine RTX 3060 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/t-machine-9/","T Machine RTX 3080 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/t-machine/t-machine-10/","T Machine GeForce RTX 3070 - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/t-machine/t-machine-intel-12-gen-ddr5-3/","T Machine GeForce RTX 3060 Ti - Купить в Москве в интернет магазине комплектующих для игровых ПК Boiling Machine"],
        ["/kompyutery/powered-by-asus/t-machine-4/","Игровой компьютер T Machine на базе видеокарты NVIDIA GeForce RTX 3060Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/quartz/quartz-1/","Игровой компьютер Quartz на базе видеокарты NVIDIA GeForce RTX 3060Ti - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/line/line-4/","Игровой компьютер Line на базе видеокарты NVIDIA GeForce RTX 3060 Ti   - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/line/line-6/","Игровой компьютер Line на базе видеокарты GeForce RTX 3060 Ti   - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/t-machine/t-machine-2/","Игровой компьютер T Machine на базе видеокарты GeForce RTX 3060 Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/atom-computers/atom-3/","Игровой компьютер ATOM на базе видеокарты NVIDIA GeForce RTX 3060 Ti - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/intel-core-11th/line/","Игровой компьютер Line на базе видеокарты RTX 3060 TI - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/atom-computers/atom-1/","Игровой компьютер ATOM на базе видеокарты NVIDIA GeForce RTX 3060 - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/quartz/quartz-2/","Игровой компьютер Quartz на базе видеокарты NVIDIA GeForce RTX 3060 - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/intel-core-11th/mesh-1/","Игровой компьютер Mesh на базе видеокарты NVIDIA GeForce RTX 3060 - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/atom-computers/atom-2/","Игровой компьютер ATOM на базе видеокарты NVIDIA GeForce RTX 3070 - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/quartz/quartz-3/","Игровой компьютер Quartz на базе видеокарты NVIDIA GeForce RTX 3070 - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/intel-core-11th/quartz/","Игровой компьютер Intel core 11th на базе видеокарты NVIDIA GeForce RTX 3070 - Купить в интернет магазине Boiling Machine"],
        ["/kompyutery/shuttle/shuttle-3/","Игровой компьютер Shuttle на базе видеокарты NVIDIA GeForce RTX 3080Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/rmachine/rmachine-1/","Игровой компьютер R Machine на базе видеокарты NVIDIA GeForce RTX 3080Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/rmachine/r-machine-4/","Игровой компьютер R Machine на базе видеокарты GeForce RTX 3080Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/shuttle/shuttle-2/","Игровой компьютер Shuttle на базе видеокарты GeForce RTX 3080 Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/shuttle/shuttle-4/","Игровой компьютер Shuttle на базе видеокарты RTX 3080 Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/shuttle/shuttle/","Игровой компьютер Shuttle на базе видеокарты GeForce - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/rmachine/r-machine-2/","Игровой компьютер R Machine на базе видеокарты NVIDIA RTX 3080 Ti - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/shuttle/shuttle-1/","Игровой компьютер Shuttle на базе видеокарты NVIDIA GeForce RTX 3080 - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/shuttle/shuttle-kopirovat/","Игровой компьютер Shuttle на базе видеокарты GeForce RTX 3080 - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/t-machine/t-machine-3/","Игровой компьютер T Machine Plus на базе видеокарты NVIDIA GeForce RTX 3080 - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/intel-core-11th/rogmachine/","Игровой компьютер RogMachine на базе видеокарты NVIDIA GeForce RTX 3080 - купить в интернет магазине Boiling Machine"],
        ["/kompyutery/rmachine/r-machine/","Игровой компьютер R Machine на базе видеокарты NVIDIA GeForce RTX 3080 - купить в интернет магазине Boiling Machine"],
        ["/igrovye-kresla/arozzi/","Купить игровые кресла Arozzi в интернет магазине Boiling machine"],
        ["/igrovye-kresla/arozzi/inizio-pu/","Купить игровые кресла Arozzi Inizio PU в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/verona-v2/","Купить игровые кресла Arozzi Verona V2 в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/vernazza-soft-fabric/","Купить игровые кресла Arozzi  Vernazza Soft Fabric в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/torretta-soft-fabric/","Купить игровые кресла Arozzi Torretta Soft Fabric в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/mezzo-v2/","Купить игровые кресла Arozzi Mezzo V2 в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/verona-signature-pu/","Купить игровые кресла Arozzi Verona Signature PU в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/primo-woven-fabric/","Купить игровые кресла Arozzi Primo Woven Fabric в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/verona-junior/","Купить игровые кресла Arozzi Verona Junior в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/verona-xl/","Купить игровые кресла Arozzi Verona XL+ в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/mezzo-v2-fabric/","Купить игровые кресла Arozzi Mezzo V2 Fabric в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/enzo-woven-fabric/","Купить игровые кресла Arozzi Enzo Woven Fabric в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/verona-pro-v2/","Купить игровые кресла Arozzi Verona Pro V2 в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/inizio-fabric/","Купить игровые кресла Arozzi Inizio Fabric в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/monza/","Купить игровые кресла Arozzi Monza в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/verona-signature-soft-fabric/","Купить игровые кресла Arozzi Verona Signature Soft Fabric в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/vernazza/","Купить игровые кресла Arozzi Vernazza в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/milano/","Купить игровые кресла Arozzi Milano в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/arozzi/torretta/","Купить игровые кресла Arozzi Torretta в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/asus/","Купить игровые кресла ASUS в интернет магазине Boiling machine"],
        ["/igrovye-kresla/asus/chariot/","Купить игровые кресла ASUS ROG в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/formula/","Купить игровые кресла DxRacer Formula в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/king/","Купить игровые кресла DxRacer King в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/series/","Купить игровые кресла DxRacer Gladiator в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/iron/","Купить игровые кресла DxRacer Iron в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/racing/","Купить игровые кресла DxRacer Racing в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/","Купить игровые кресла DxRacer в интернет магазине Boiling machine"],
        ["/igrovye-kresla/dxracer/air/","Купить игровые кресла DxRacer Air в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/master/","Купить игровые кресла DxRacer I-Master  в интернет магазине Boiling-machine.ru"],
        ["/igrovye-kresla/dxracer/drifting/","Купить игровые кресла DxRacer Drifting в интернет магазине Boiling-machine.ru"],
    ];
}
function getReversDescription() {
    return [
        ["/katalog/audio/hyperx-cloud-alpha-s-blackout/","Благодаря превосходному звуку с двухкамерными динамиками и мультиплатформенной совместимости, гарнитура HyperX Cloud Alpha S Blackout обеспечивает максимальное удобство для геймеров."],
        ["/katalog/audio/hyperx-cloud-alpha-s-blue/","Благодаря превосходному звуку с двухкамерными динамиками и мультиплатформенной совместимости, гарнитура HyperX Cloud Alpha S Blue обеспечивает максимальное удобство для геймеров."],
        ["/katalog/audio/hyperx-cloud-alpha/","Благодаря превосходному звуку с двухкамерными динамиками, гарнитура HyperX Cloud Alpha обеспечивает максимальное удобство для геймеров."],
        ["/blog/","Блог, акции, новости, подарки от Boiling Machine и наших партнеров. Бесплатное тестирование девайсов в демо зоне."],
        ["/blog/stock/","Блог, специальные предложения, акции, подарки от Boiling Machine и наших партнеров. Бесплатное тестирование девайсов в демо зоне."],
        ["/blog/articles/","Блог, специальные предложения, статьи, подарки от Boiling Machine и наших партнеров. Бесплатное тестирование девайсов в демо зоне."],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-9/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для игры в 2K Boiling XGod Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-3/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для игры в 2K Boiling XGod Machine RTX 3060 Ti"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-7/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для игры в 2K Boiling ZERG Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-2/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для игры в 2K Boiling ZERG Machine RTX 3060 Ti"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-4/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для разрешений вплоть до 4K Boiling XGod Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-10/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для разрешений вплоть до 4K Boiling XGod Machine GeForce RTX 3070"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-6/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для разрешений вплоть до 4K Boiling ZERG Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine/","Высокопроизводительный игровой компьютер с поддержкой современных технологий для разрешений до 4K Boiling ZERG Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-8/","Высокопроизводительный игровой компьютер с поддержкой современных технологий Boiling XGod Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-2/","Высокопроизводительный игровой компьютер с поддержкой современных технологий Boiling XGod Machine RTX 3060"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-3/","Высокопроизводительный игровой компьютер с поддержкой современных технологий Boiling ZERG Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-8/","Высокопроизводительный игровой компьютер с поддержкой современных технологий Boiling ZERG Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-7/","Игровой компьютер базового уровня, обеспечивающий высокий комфорт в большинстве online-проектов Boiling XGod Machine"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-4/","Игровой компьютер базового уровня, обеспечивающий высокий комфорт в большинстве online-проектов Boiling ZERG Machine"],
        ["/kompyutery/t-machine-8/","Игровой ПК на базе процессора Core i5-12600KF и графического ускорителя GeForce RTX 3070. Серия RogMachine. Игровой компьютер для гейминга в Ulta Quad разрешении."],
        ["/kompyutery/shuttle/shuttle-kopirovat/","Игровой ПК на базе процессора Core i7-12700F и графического ускорителя NVIDIA GeForce RTX 3080. Серия Shuttle. Игровой компьютер для гейминга в 4K разрешении."],
        ["/kompyutery/shuttle/shuttle-2/","Игровой ПК на базе процессора Core i7-12700KF и графического ускорителя NVIDIA GeForce RTX 3080 Ti. Серия Shuttle. Игровой компьютер для гейминга в 4K разрешении."],
        ["/kompyutery/t-machine-9/","Игровой ПК на базе процессора Intel Core i5-12600KF и графического ускорителя GeForce RTX 3070. Серия RogMachine. Компьютер для гейминга в Ulta Quad разрешении."],
        ["/kompyutery/shuttle/shuttle-1/","Игровой ПК на базе процессора Intel Core i7-12700F и графического ускорителя GeForce RTX 3080. Серия Shuttle. Игровой компьютер для гейминга в 4K разрешении."],
        ["/kompyutery/shuttle/shuttle-4/","Игровой ПК на базе процессора Intel Core i7-12700KF и графического ускорителя NVIDIA GeForce RTX 3080 Ti. Серия Shuttle. Игровой компьютер для гейминга в 4K разрешении."],
        ["/katalog/myshki/xtrfy-m42-rgb-pink/","Классная начинка, небольшой вес, удобная симметричная форма и модульная конструкция верхней части корпуса с дополнительной вставкой в комплекте — вот так выглядят ключевые особенности игровой мышки Xtrfy M42 RGB Pink, которая подойдет для большинства геймеров!"],
        ["/katalog/myshki/xtrfy-m42-rgb-gray-retro/","Классная начинка, небольшой вес, удобная симметричная форма и модульная конструкция верхней части корпуса с дополнительной вставкой в комплекте — вот так выглядят ключевые особенности игровой мышки Xtrfy M42 RGB Retro, которая подойдет для большинства геймеров!"],
        ["/katalog/myshki/xtrfy-m42-rgb-white/","Классная начинка, небольшой вес, удобная симметричная форма и модульная конструкция верхней части корпуса с дополнительной вставкой в комплекте — вот так выглядят ключевые особенности игровой мышки Xtrfy M42 RGB White, которая подойдет для большинства геймеров!"],
        ["/igrovye-kresla/arozzi/verona-signature-pu/igrovoe-kreslo-arozzi-verona-signature-pu-gold-logo-2/","Компьютерное кресло для геймеров Arozzi Verona Signature PU Blue Logo"],
        ["/igrovye-kresla/arozzi/verona-signature-pu/igrovoe-kreslo-arozzi-verona-signature-pu-gold-logo/","Компьютерное кресло для геймеров Arozzi Verona Signature PU Gold Logo"],
        ["/katalog/myshki/xtrfy-m4-rgb-black/","Купить игровую мышь Xtrfy. Большой выбор игровых мышей Xtrfy M4 RGB Black, доставка по всей России."],
        ["/katalog/myshki/xtrfy-m4-rgb-miami-blue/","Купить игровую мышь Xtrfy. Большой выбор игровых мышей Xtrfy M4 RGB Miami Blue, доставка по всей России."],
        ["/katalog/myshki/xtrfy-m4-rgb-pink/","Купить игровую мышь Xtrfy. Большой выбор игровых мышей Xtrfy M4 RGB Pink, доставка по всей России."],
        ["/katalog/myshki/xtrfy-m4-rgb-retro/","Купить игровую мышь Xtrfy. Большой выбор игровых мышей Xtrfy M4 RGB Retro, доставка по всей России."],
        ["/katalog/myshki/xtrfy-m4-rgb-street/","Купить игровую мышь Xtrfy. Большой выбор игровых мышей Xtrfy M4 RGB Street, доставка по всей России."],
        ["/katalog/myshki/xtrfy-m4-rgb-white/","Купить игровую мышь Xtrfy. Большой выбор игровых мышей Xtrfy M4 RGB White, доставка по всей России."],
        ["/katalog/myshki/xtrfy-m4-rgb-pixart-3360-glossy-gray/","Купить игровую мышь Xtrfy. Большой выбор игровых мышей Xtrfy M4 RGB, Pixart 3360, Glossy Gray, доставка по всей России."],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-9/","Оптимальный игровой компьютер для разрешения FullHD - Boiling ZERG Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine/","Оптимальный игровой компьютер для разрешения FullHD Boiling XGod Machine"],
        ["/kompyutery/collaborations/dosia/boiling-xgod-machine-6/","Оптимальный игровой компьютер для разрешения FullHD Boiling XGod Machine GeForce GTX 1660 Ti"],
        ["/kompyutery/collaborations/zergtv/boiling-zerg-machine-5/","Оптимальный игровой компьютер для разрешения FullHD Boiling ZERG Machine с видеокартой GeForce GTX 1660 Ti"],
        ["/katalog/oborudovanie-dlya-strima/hyperx-quadcast/","Подключите конденсаторный микрофон HyperX QuadCast к USB-порту для начала трансляции видеоигры или загрузки следующего эпизода подкаста. Встроенное антивибрационное и ударопрочное крепление."],
        ["/katalog/oborudovanie-dlya-strima/hyperx-quadcast-s/","Подключите конденсаторный микрофон HyperX QuadCast S к USB-порту для начала трансляции видеоигры или загрузки следующего эпизода подкаста. Встроенное антивибрационное и ударопрочное крепление."],
        ["/katalog/audio/hyperx-cloud-ii-gun-metal/","Узнайте больше о геймерских гарнитурах линейки Cloud и выберите ту, которая подходит именно вам. Получите улучшенную базовую функциональность с гарнитурой HyperX Cloud II Gun Meta или окружающий звук формата 7.1 c гарнитурой Сloud 2."],
        ["/katalog/audio/hyperx-cloud-ii-red/","Узнайте больше о геймерских гарнитурах линейки Cloud и выберите ту, которая подходит именно вам. Получите улучшенную базовую функциональность с гарнитурой HyperX Cloud II Red или окружающий звук формата 7.1 c гарнитурой Сloud 2."],
        ["/igrovye-kresla/dxracer/air/igrovoe-kreslo-dxracer-air-d7200-wqg/","DXRacer AIR/D7200/WQG - компьютерное кресло серии Air белого в самой оснащенной комплектации. Обивка изготовлена из высококачественной сетчатой ткани. Подлокотники кресла регулируются в 4-х направлениях. Крестовина, установленная в основании кресла, изготовлена из алюминия и оснащена трехдюймовыми нейлоновыми роликами"],
        ["/igrovye-kresla/dxracer/air/igrovoe-kreslo-dxracer-air-d7200-wrbg/","DXRacer AIR/D7200/WRBG - компьютерное кресло серии Air белого в самой оснащенной комплектации. Обивка изготовлена из высококачественной сетчатой ткани. Подлокотники кресла регулируются в 4-х направлениях. Крестовина, установленная в основании кресла, изготовлена из алюминия и оснащена трехдюймовыми нейлоновыми роликами"],
        ["/igrovye-kresla/dxracer/air/igrovoe-kreslo-dxracer-air-d7200-wrng/","DXRacer AIR/D7200/WRNG - компьютерное кресло серии Air белого в самой оснащенной комплектации. Обивка изготовлена из высококачественной сетчатой ткани. Подлокотники кресла регулируются в 4-х направлениях. Крестовина, установленная в основании кресла, изготовлена из алюминия и оснащена трехдюймовыми нейлоновыми роликами"],
    ];
}

//echo exKod::Router()->getUrlPath();

add_filter('wpseo_title', 'vozrastofilter_title');
function vozrastofilter_title($title) {
    // Текущий title
    // $yoast_title = get_post_meta( get_the_ID(), '_yoast_wpseo_title', true );


    foreach (getReversTitle() as $arItem) {
        if(exKod::Router()->getUrlPath() == $arItem[0]) {
            $title = $arItem[1];
        }
    }

    return $title;
}
add_filter( 'wpseo_metadesc', 'vozrastofilter_description', 10, 1 );
function vozrastofilter_description($description) {

    // Текущий description
    //  $yoast_description = get_post_meta( get_the_ID(), '_yoast_wpseo_metadesc', true );

    foreach (getReversDescription() as $arItem) {
        if(exKod::Router()->getUrlPath() == $arItem[0]) {
            $description = $arItem[1];
        }
    }

    return $description;
}

// Title и Description для пагинации
//add_filter( 'wpseo_title', 'exKodSeoTitlePages', 10, 2 );
//function exKodSeoTitlePages( $title, $presentation ){
//    global $paged;
//
//    if ( $paged >= 2 ) {
//        $queried_object = get_queried_object();
//
//        //   exKod::Common()->drop($queried_object);
//
//        if($queried_object->slug == 'igrovye-kresla') {
//            $title = $queried_object->name . ' - страница №' . $paged . ' | Вoiling-machine — интернет магазин';
//        }
//    }
//
//    return $title;
//}
//
//add_filter( 'wpseo_metadesc', 'exKodSeoDescriptionPages', 10, 1 );
//function exKodSeoDescriptionPages($description) {
//    global $paged;
//
//    if ( $paged >= 2 ) {
//        $queried_object = get_queried_object();
//
//        if($queried_object->slug == 'igrovye-kresla') {
//            $description = $queried_object->name . '. Доставка по России. Сервисное обслуживание. Кредит и рассрочка - страница №' . $paged . ' | Вoiling-machine — интернет магазин';
//        }
//    }
//
//    return $description;
//}

// Title и Description Для каталога
add_action( 'template_include', 'custom_template_redirect' );

function custom_template_redirect($original_template) {
    $arUrl = exKod::Router()->getUrlPath();
    $arUrl = exKod::Common()->getSegment($arUrl);
    

    if($arUrl[0] == 'igrovye-kresla') { // Только для Игровых Кресел
        // Категории товара
        if(is_product_category()) {
            $obCategory = get_queried_object();
            if($obCategory->parent)      $obCategoryLvl2 = get_term($obCategory->parent);
            if($obCategoryLvl2->parent)  $obCategoryLvl3 = get_term($obCategoryLvl2->parent);

            // Исключаем теговые страницы
            $obCategory->page_tag 	= get_field('page_tag', $obCategory->taxonomy . '_' .$obCategory->term_id);

            if(!$obCategory->page_tag) {

                $title_name = false;

                if($obCategoryLvl3) {
                    $title_name = $obCategoryLvl3->name . ' ' . $obCategoryLvl2->name . ' серия ' . $obCategory->name;
                    exKod::Seo()->setTitle($title_name. ' купить в мощном компьютерном магазине Boiling Machine');
                }elseif($obCategoryLvl2) {
                    $title_name =  $obCategoryLvl2->name . ' ' . $obCategory->name;
                    exKod::Seo()->setTitle($title_name. ' купить в мощном компьютерном магазине Boiling Machine');
                }elseif($obCategory){
                    $title_name = $obCategory->name;
                }

                exKod::Seo()->setDescription('Предлагаем ' . $title_name . ' с бесплатной доставкой и сборкой по Москве. Аренда и тест кресла на дому. Доставка по всей России. Гарантия от 1 года с возможностью расширения. Звоните: 8 (800) 350-83-39');
            }
        }

        // Страница товара
        if(is_product()) {
            $title_name = get_the_title();
            exKod::Seo()->setTitle($title_name. ' купить купить в мощном компьютерном магазине Boiling Machine');
            exKod::Seo()->setDescription('Предлагаем ' . $title_name . ' с бесплатной доставкой и сборкой по Москве. Аренда и тест кресла на дому. Доставка по всей России. Гарантия от 1 года с возможностью расширения. Звоните: 8 (800) 350-83-39');
        }
    }

    return $original_template;
}


//Добавление колонки промокодов в таблице заказов
add_filter( 'manage_edit-shop_order_columns', 'woo_customer_order_coupon_column_for_orders' );
function woo_customer_order_coupon_column_for_orders( $columns ) {
    $new_columns = array();

    foreach ( $columns as $column_key => $column_label ) {
        if ( 'order_total' === $column_key ) {
            $new_columns['order_coupons'] = __('Coupons', 'woocommerce');
        }

        $new_columns[$column_key] = $column_label;
    }
    return $new_columns;
}

add_action( 'manage_shop_order_posts_custom_column' , 'woo_display_customer_order_coupon_in_column_for_orders' );
function woo_display_customer_order_coupon_in_column_for_orders( $column ) {
    global $the_order, $post;
    if( $column  == 'order_coupons' ) {
        if( $coupons = $the_order->get_used_coupons() ) {
            echo implode(', ', $coupons) . ' ('.count($coupons).')';
        } else {
            echo '<small><em>'. __('No coupons') . '</em></small>';
        }
    }
}

//Как долго помнить пользователя
add_filter( 'auth_cookie_expiration', 'keep_me_logged_in_for_1_year' );
function keep_me_logged_in_for_1_year( $expirein ) {
    return MONTH_IN_SECONDS; // 1 year in seconds
}

//Добавление столбца показа обзора в общем списке товаров

add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/assets/admin/all.css', false, '1.0.0' );
}



add_filter( 'manage_edit-product_columns', 'bbloomer_admin_products_visibility_column', 9999 );
function bbloomer_admin_products_visibility_column( $columns ){
   return array_slice( $columns, 0, 3, true ) + array( 'obzor' => 'Обзор', 'img' => 'Img' ) + array_slice( $columns, 3, count( $columns ) - 3, true );
}
 
add_action( 'manage_product_posts_custom_column', 'bbloomer_admin_products_visibility_column_content', 10, 2 );
function bbloomer_admin_products_visibility_column_content( $column, $product_id ){
    if ( $column == 'obzor' ) {      
		if( get_post_meta ( $product_id, 'kontent', true )){
			echo 'Есть';
		}else{echo 'Нет';}
    }
	    if ( $column == 'img' ) {  
			$product = new WC_product($product_id);
			if( $product->get_image_id() ){
				echo 'Есть';
			}else{echo 'Нет';}
    }
}

add_filter( 'manage_edit-product_sortable_columns', 'bbloomer_admin_products_visibility_column_sortable' );
function bbloomer_admin_products_visibility_column_sortable( $columns ){
   $columns['obzor'] = 'obzor';
	$columns['img'] = 'img';
   return $columns;
}



add_action( 'woocommerce_add_cart_item_data', 'save_custom_data_hidden_fields', 10, 2 );
function save_custom_data_hidden_fields( $cart_item_data, $product_id ) {

    $data = array();

    if( isset( $_REQUEST['price_prod'] ) ) {
        $cart_item_data['custom_data']['price_pro'] = $_REQUEST['price_prod'];
        $data['price_pro'] = $_REQUEST['price_prod'];
    }
	
    if( isset( $_REQUEST['price_test_chair'] ) ) {
        $cart_item_data['custom_data']['price_test_ch'] = $_REQUEST['price_test_chair'];
        $data['price_test_ch'] = $_REQUEST['price_test_chair'];
    }	
	
    if( isset( $_REQUEST['price_aerographia_chair'] ) ) {
        $cart_item_data['custom_data']['price_aero_ch'] = $_REQUEST['price_aerographia_chair'];
        $data['price_aero_ch'] = $_REQUEST['price_aerographia_chair'];
    }		
	
    if( isset( $_REQUEST['price_vishivka_chair'] ) ) {
        $cart_item_data['custom_data']['price_vish_ch'] = $_REQUEST['price_vishivka_chair'];
        $data['price_vish_ch'] = $_REQUEST['price_vishivka_chair'];
    }		
	
    if( isset( $_REQUEST['price_arenda_chair'] ) ) {
        $cart_item_data['custom_data']['price_arenda_ch'] = $_REQUEST['price_arenda_chair'];
        $data['price_arenda_ch'] = $_REQUEST['price_arenda_chair'];
		
		$cart_item_data['custom_data']['price_arenda_ch_name'] = $_REQUEST['price_arenda_chair_name'];
		$data['price_arenda_ch_name'] = $_REQUEST['price_arenda_chair_name'];
    }		

    // below statement make sure every add to cart action as unique line item
    $cart_item_data['custom_data']['unique_key'] = md5( microtime().rand() );
    WC()->session->set( 'price_calculation', $data );

    return $cart_item_data;
}

add_action( 'woocommerce_before_calculate_totals', 'add_custom_item_price', 10 );
function add_custom_item_price( $cart_object ) {

    foreach ( $cart_object->get_cart() as $item_values ) {

        ##  Get cart item data
        $item_id = $item_values['data']->id; // Product ID
        $original_price = $item_values['data']->price; // Product original price
		$original_name = $item_values['data']->name; // Product original name

        ## Get your custom fields values
        $price1 = $item_values['custom_data']['price_pro'];
		
		if( $price1 != null ){
			$new_price = $price1;   
			$item_values['data']->set_price($new_price);
			$item_values['data']->set_name( "Расширенная гарантия <br>" . $original_name  );
		}
		
		$testChair = $item_values['custom_data']['price_test_ch'];
		if( $testChair != null ){
			$new_price = $testChair;   
			$item_values['data']->set_price($new_price);
			$item_values['data']->set_name( "Тест кресла на дому <br>" . $original_name  );
		}        
		
		$aerographiaChair = $item_values['custom_data']['price_aero_ch'];
		if( $aerographiaChair != null ){
			$new_price = $aerographiaChair;   
			$item_values['data']->set_price($new_price);
			$item_values['data']->set_name( "Аэрография на кресло <br>" . $original_name  );
		} 
		
		$vishivkaChair = $item_values['custom_data']['price_vish_ch'];
		if( $vishivkaChair != null ){
			$new_price = $vishivkaChair;   
			$item_values['data']->set_price($new_price);
			$item_values['data']->set_name( "Вышивка на кресло <br>" . $original_name  );
		} 	
		
		$arendaChair = $item_values['custom_data']['price_arenda_ch'];
		if( $arendaChair != null ){
			$arendaChairName = $item_values['custom_data']['price_arenda_ch_name'];
			$new_price = $arendaChair;   
			$item_values['data']->set_price($new_price);
			$item_values['data']->set_name( "Аренда кресла " . $arendaChairName . "<br>" . $original_name  );
		} 			
		
    }
}

add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );

function delete_intermediate_image_sizes( $sizes ){

	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'woocommerce_thumbnail',
		'woocommerce_single',
		'woocommerce_gallery_thumbnail',
		'1536x1536',
		'2048x2048',
		'variation_swatches_image_size',
		'variation_swatches_tooltip_size',
	] );
}