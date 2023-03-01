<?php 
add_action( 'init', 'register_post_types' );

	function register_post_types(){
		register_post_type( 'videocards', [
			'label'  => null,
			'labels' => [
				'name'               => 'Обзоры Кресла', // основное название для типа записи
				'singular_name'      => 'Обзор кресла', // название для одной записи этого типа
				'add_new'            => 'Добавить обзор на кресло', // для добавления новой записи
				'add_new_item'       => 'Добавление обзора на кресло', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование обзора на кресло', // для редактирования типа записи
				'new_item'           => 'Новый обзор на кресло', // текст новой записи
				'view_item'          => 'Смотреть обзор', // для просмотра записи этого типа.
				'search_items'       => 'Искать обзор', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Обзоры на кресло', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'publicly_queryable'  => false,
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => true,
			'supports'            => [ 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => array( 'category' ),
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		
		
		register_post_type( 'catSEO', [
			'label'  => null,
			'labels' => [
				'name'               => 'SEO Статья', // основное название для типа записи
				'singular_name'      => 'SEO Статья', // название для одной записи этого типа
				'add_new'            => 'Добавить статью', // для добавления новой записи
				'add_new_item'       => 'Добавление SEO статьи', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование статьи', // для редактирования типа записи
				'new_item'           => 'Новая статья', // текст новой записи
				'view_item'          => 'Смотреть статью', // для просмотра записи этого типа.
				'search_items'       => 'Искать статью', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'SEO статьи категорий', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'publicly_queryable'  => false,
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => true,
			'supports'            => [ 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => array( 'category' ),
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );		
		
		
		
		
		
	}

?>