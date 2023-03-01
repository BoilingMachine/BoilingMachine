<?php


add_action('init', 'projects_cpt');
function projects_cpt() {
    $labels = array(
        'name' => 'База данных',
        'singular_name' => 'Товар',
        'add_new' => 'Добавить новый',
        'add_new_item' => 'Добавить новый товар',
        'edit_item' => 'Редактировать товар',
        'new_item' => 'Новый товар',
        'all_items' => 'Все товары',
        'view_item' => 'Смотреть товар',
        'search_items' => 'Искать товар',
        'not_found' => 'Не найдено',
        'not_found_in_trash' => 'Не найдено в корзине',
        'parent_item_colon' => '',
        'menu_name' => 'База данных'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'taxonomies' => array('projectstype'),
        'rewrite' => array('slug' => 'configurations/%projectscategory%', 'with_front' => false), 
        //Adding custom rewrite tag
        'capability_type' => 'post',
        'has_archive' => 'projectsarchives',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
    register_post_type('projects', $args);

    $labels = array(
        'name' => 'Категории БД',
        'singular_name' => 'Категория БД',
        'search_items' => 'Поиск категории БД',
        'all_items' => 'Все категории',
        'parent_item' => 'Родительская категория',
        'parent_item_colon' => 'Родительская категория:',
        'edit_item' => 'Редактировать категорию БД',
        'update_item' => 'Обновить категорию БД',
        'add_new_item' => 'Добавить новую категорию БД',
        'new_item_name' => 'Новая категория БД',
    );

    $args = array(
        'hierarchical' => true,
        'rewrite' => array('slug' => 'conf-cat'),
        'show_in_nav_menus' => true,
        'labels' => $labels
    );

    register_taxonomy('projectscategory', 'projects', $args);

    unset($labels);
    unset($args);
}






add_action( 'add_meta_boxes', 'price_meta_box_add' );
function price_meta_box_add() {
    add_meta_box( 'price-meta-box-id', 'Put Price Here!', 'price_meta_box_cb', 'projects', 'side', 'high' );
}
function price_meta_box_cb() {
    wp_nonce_field( basename( __FILE__ ), 'price_meta_box_nonce' );
    $value = get_post_meta(get_the_ID(), 'price_key', true);
    $html = '<label>Price: </label><input type="text" name="_price" id="_price" value='.$value.'>';
    echo $html;
}
add_action( 'save_post', 'price_meta_box_save' );
function price_meta_box_save( $post_id ){
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( !isset( $_POST['price_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['price_meta_box_nonce'], basename( __FILE__ ) ) ) return;
    if( !current_user_can( 'edit_post' ) ) return;
    if( isset( $_POST['_price'] ) )
        update_post_meta( $post_id, 'price_key', esc_attr( $_POST['_price'], $allowed ) );
}






class WCCPT_Product_Data_Store_CPT extends WC_Product_Data_Store_CPT {

    /**
     * Method to read a product from the database.
     * @param WC_Product
     */

    public function read( &$product ) {

        $product->set_defaults();

        if ( ! $product->get_id() || ! ( $post_object = get_post( $product->get_id() ) ) || ! in_array( $post_object->post_type, array( 'projects', 'product' ) ) ) { // change birds with your post type
            throw new Exception( __( 'Invalid product.', 'woocommerce' ) );
        }

        $id = $product->get_id();

        $product->set_props( array(
            'name'              => $post_object->post_title,
            'slug'              => $post_object->post_name,
            'date_created'      => 0 < $post_object->post_date_gmt ? wc_string_to_timestamp( $post_object->post_date_gmt ) : null,
            'date_modified'     => 0 < $post_object->post_modified_gmt ? wc_string_to_timestamp( $post_object->post_modified_gmt ) : null,
            'status'            => $post_object->post_status,
            'description'       => $post_object->post_content,
            'short_description' => $post_object->post_excerpt,
            'parent_id'         => $post_object->post_parent,
            'menu_order'        => $post_object->menu_order,
            'reviews_allowed'   => 'open' === $post_object->comment_status,
        ) );

        $this->read_attributes( $product );
        $this->read_downloads( $product );
        $this->read_visibility( $product );
        $this->read_product_data( $product );
        $this->read_extra_data( $product );
        $product->set_object_read( true );
    }

    /**
     * Get the product type based on product ID.
     *
     * @since 3.0.0
     * @param int $product_id
     * @return bool|string
     */
    public function get_product_type( $product_id ) {
        $post_type = get_post_type( $product_id );
        if ( 'product_variation' === $post_type ) {
            return 'variation';
        } elseif ( in_array( $post_type, array( 'projects', 'product' ) ) ) { // change birds with your post type
            $terms = get_the_terms( $product_id, 'product_type' );
            return ! empty( $terms ) ? sanitize_title( current( $terms )->name ) : 'simple';
        } else {
            return false;
        }
    }
}


add_filter( 'woocommerce_data_stores', 'woocommerce_data_stores' );

function woocommerce_data_stores ( $stores ) {      
    $stores['product'] = 'WCCPT_Product_Data_Store_CPT';
    return $stores;
}


add_filter('woocommerce_product_get_price', 'woocommerce_product_get_price', 10, 2 );
function woocommerce_product_get_price( $price, $product ) {
    // Change birds with your post type
    if ( get_post_type( $product->get_id() ) === 'projects' )
        $price = get_post_meta( $product->get_id(), "price_key", true );

    return $price;
}




















?>