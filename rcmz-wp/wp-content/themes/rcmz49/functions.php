<?php
	add_filter( 'show_admin_bar', '__return_false' );
	add_action( 'wp_enqueue_scripts', 'style_theme' );
	add_action( 'get_footer', 'scripts_theme' );
	add_theme_support( 'custom-logo' );
	add_action( 'init', 'register_post_types' );
	add_action( 'after_setup_theme', 'test_after_setup' );

	function test_after_setup() {
		register_nav_menu( 'main_menu', 'Основное меню');
		register_nav_menu( 'mobile_menu', 'Мобильное меню');
		register_nav_menu( 'info_menu', 'Информация');
		register_nav_menu( 'partners_menu', 'Партнёры');
		add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
	}
	function style_theme() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css');
		wp_enqueue_style('styles',get_template_directory_uri() .'/assets/css/styles.css',false,time());
		wp_enqueue_style('style-wp',get_template_directory_uri() .'/assets/css/style-wp.css',false,time());
		wp_enqueue_style('owl-min',get_template_directory_uri() .'/assets/css/vnd/owl/owl.carousel.min.css');
		wp_enqueue_style('owl-default',get_template_directory_uri() .'/assets/css/vnd/owl/owl.theme.default.css');
	}

	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
	function my_scripts_method() {
		// отменяем зарегистрированный jQuery
		// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
		wp_deregister_script( 'jquery-core' );
		wp_enqueue_script('jquery-core', get_template_directory_uri() .'/assets/js/vnd/jquery/jquery-3.5.1.min.js');
		wp_enqueue_script( 'jquery' );
	}

	function scripts_theme() {
		wp_enqueue_script('scripts', get_template_directory_uri() .'/assets/js/scripts.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('owl', get_template_directory_uri() .'/assets/js/vnd/owl/owl.carousel.min.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('id-tabs', get_template_directory_uri() .'/assets/js/vnd/idtabs/jquery.idTabs.min.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('gallery', get_template_directory_uri() .'/assets/js/vnd/blueimp/blueimp-gallery.min.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('sticky', get_template_directory_uri() .'/assets/js/vnd/sticky/sticky.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js',
			array('jquery-core'), null, true);
	}
	function register_post_types(){
		register_post_type( 'main_slider', [
			'label'  => null,
			'labels' => [
				'name'               => 'Слайдер - основной', // основное название для типа записи
				'singular_name'      => 'Основной слайдер', // название для одной записи этого типа
				'add_new'            => 'Добавить слайд', // для добавления новой записи
				'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
				'new_item'           => 'Новый слайд', // текст новой записи
				'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
				'search_items'       => 'Искать слайд', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Слайдер - основной', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 6,
			'menu_icon'           => 'dashicons-images-alt2',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'partners', [
			'label'  => null,
			'labels' => [
				'name'               => 'Партнёры', // основное название для типа записи
				'singular_name'      => 'Партнёр', // название для одной записи этого типа
				'add_new'            => 'Добавить Партнёра', // для добавления новой записи
				'add_new_item'       => 'Добавление Партнёра', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование Партнёра', // для редактирования типа записи
				'new_item'           => 'Новый Партнёр', // текст новой записи
				'view_item'          => 'Смотреть Партнёра', // для просмотра записи этого типа.
				'search_items'       => 'Искать Партнёра', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Партнёры', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 14,
			'menu_icon'           => 'dashicons-format-aside',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'developers', [
			'label'  => null,
			'labels' => [
				'name'               => 'Разработчики', // основное название для типа записи
				'singular_name'      => 'Разработчик', // название для одной записи этого типа
				'add_new'            => 'Добавить Разработчика', // для добавления новой записи
				'add_new_item'       => 'Добавление Разработчика', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование Разработчика', // для редактирования типа записи
				'new_item'           => 'Новый Разработчик', // текст новой записи
				'view_item'          => 'Смотреть Разработчика', // для просмотра записи этого типа.
				'search_items'       => 'Искать Разработчика', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Разработчики', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 13,
			'menu_icon'           => 'dashicons-format-aside',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'resources', [
			'label'  => null,
			'labels' => [
				'name'               => 'Полезные ресурсы', // основное название для типа записи
				'singular_name'      => 'Ресурсы', // название для одной записи этого типа
				'add_new'            => 'Добавить Ресурс', // для добавления новой записи
				'add_new_item'       => 'Добавление Ресурса', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование Ресурса', // для редактирования типа записи
				'new_item'           => 'Новый Ресурс', // текст новой записи
				'view_item'          => 'Смотреть Ресурс', // для просмотра записи этого типа.
				'search_items'       => 'Искать Ресурс', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Полезные ресурсы', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 7,
			'menu_icon'           => 'dashicons-format-aside',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'gallery_slider', [
			'label'  => null,
			'labels' => [
				'name'               => 'Слайдер - галереи', // основное название для типа записи
				'singular_name'      => 'Слайдер галереи', // название для одной записи этого типа
				'add_new'            => 'Добавить слайд', // для добавления новой записи
				'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
				'new_item'           => 'Новый слайд', // текст новой записи
				'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
				'search_items'       => 'Искать слайд', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Слайдер - галереи', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 11,
			'menu_icon'           => 'dashicons-images-alt2',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'gallery_list', [
			'label'  => null,
			'labels' => [
				'name'               => 'Фотогалерея', // основное название для типа записи
				'singular_name'      => 'Элемент галереи', // название для одной записи этого типа
				'add_new'            => 'Добавить элемент', // для добавления новой записи
				'add_new_item'       => 'Добавление элемента', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование элемента', // для редактирования типа записи
				'new_item'           => 'Новый элемент', // текст новой записи
				'view_item'          => 'Смотреть элемент', // для просмотра записи этого типа.
				'search_items'       => 'Искать элемент', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Фотогалерея', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 12,
			'menu_icon'           => 'dashicons-images-alt2',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'site_director', [
			'label'  => null,
			'labels' => [
				'name'               => 'Руководство', // основное название для типа записи
				'singular_name'      => 'Элемент ', // название для одной записи этого типа
				'add_new'            => 'Добавить', // для добавления новой записи
				'add_new_item'       => 'Добавление', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование ', // для редактирования типа записи
				'new_item'           => 'Новый элемент', // текст новой записи
				'view_item'          => 'Смотреть элемент', // для просмотра записи этого типа.
				'search_items'       => 'Искать элемент', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Руководство', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 18,
			'menu_icon'           => 'dashicons-images-alt2',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'site_structure', [
			'label'  => null,
			'labels' => [
				'name'               => 'Структура', // основное название для типа записи
				'singular_name'      => 'Элемент ', // название для одной записи этого типа
				'add_new'            => 'Добавить', // для добавления новой записи
				'add_new_item'       => 'Добавление', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование ', // для редактирования типа записи
				'new_item'           => 'Новый элемент', // текст новой записи
				'view_item'          => 'Смотреть элемент', // для просмотра записи этого типа.
				'search_items'       => 'Искать элемент', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Структура', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 19,
			'menu_icon'           => 'dashicons-images-alt2',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		register_post_type( 'gallery_list', [
			'label'  => null,
			'labels' => [
				'name'               => 'Фотогалерея', // основное название для типа записи
				'singular_name'      => 'Элемент галереи', // название для одной записи этого типа
				'add_new'            => 'Добавить элемент', // для добавления новой записи
				'add_new_item'       => 'Добавление элемента', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование элемента', // для редактирования типа записи
				'new_item'           => 'Новый элемент', // текст новой записи
				'view_item'          => 'Смотреть элемент', // для просмотра записи этого типа.
				'search_items'       => 'Искать элемент', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Фотогалерея', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 12,
			'menu_icon'           => 'dashicons-images-alt2',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	}

	add_action('init', 'document');
	function document() {
		$labels = array(
		    'name' => 'Документы',
		    'singular_name' => 'Документ',
		    'add_new' => 'Добавить Документ',
		    'add_new_item' => 'Добавить новый документ',
		    'edit_item' => 'Редактировать документ',
		    'new_item' => 'Новый документ',
		    'view_item' => 'Посмотреть документ',
		    'search_items' => 'Найти документ',
		    'not_found' =>  'Документов не найдено',
		    'not_found_in_trash' => 'В корзине документов не найдено',
		    'parent_item_colon' => '',
		    'menu_name' => 'Документы'
		  );
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'menu_position'       => 8,
		    'menu_icon' => 'dashicons-text-page',
		    'query_var' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'supports' => array('title','editor','thumbnail', 'comments'),
			'taxonomies' => array('accessories') 
		  );
			register_post_type('document',$args);
	}
	add_action( 'init', 'create_document_taxonomies', 0 );

	function create_document_taxonomies(){
	  $labels = array(
	    'name' => _x( 'Категории документов', 'taxonomy general name' ),
	    'singular_name' => _x( 'Категория документа', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Найти категорию документа' ),
	    'all_items' => __( 'Все категории документов' ),
	    'parent_item' => __( 'Родительская категория документа' ),
	    'parent_item_colon' => __( 'Родительская категория' ),
	    'edit_item' => __( 'Родительская категория' ),
	    'update_item' => __( 'Обновить категорию' ),
	    'add_new_item' => __( 'Добавить новую категорию' ),
	    'new_item_name' => __( 'Название новой категории документов' ),
	    'menu_name' => __( 'Категории документов' ),
	  );

	  register_taxonomy('documents', array('document'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'documents' ),
	  ));
	}



	add_action('init', 'activity');
	function activity() {
		$labels = array(
		    'name' => 'Деятельность',
		    'singular_name' => 'Деятельность',
		    'add_new' => 'Добавить документ',
		    'add_new_item' => 'Добавить новый документ',
		    'edit_item' => 'Редактировать документ',
		    'new_item' => 'Новый документ',
		    'view_item' => 'Посмотреть документ',
		    'search_items' => 'Найти документ',
		    'not_found' =>  'Документов не найдено',
		    'not_found_in_trash' => 'В корзине документов не найдено',
		    'parent_item_colon' => '',
		    'menu_name' => 'Деятельность'
		  );
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'menu_position'       => 9,
		    'menu_icon' => 'dashicons-text-page',
		    'query_var' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'supports' => array('title','editor','thumbnail', 'comments'),
			'taxonomies' => array('accessories') 
		  );
			register_post_type('activity',$args);
	}
	add_action( 'init', 'create_activity_taxonomies', 0 );

	function create_activity_taxonomies(){
	  $labels = array(
	    'name' => _x( 'Категории деятельности', 'taxonomy general name' ),
	    'singular_name' => _x( 'Категория документа', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Найти категорию документа' ),
	    'all_items' => __( 'Все категории документов' ),
	    'parent_item' => __( 'Родительская категория документа' ),
	    'parent_item_colon' => __( 'Родительская категория' ),
	    'edit_item' => __( 'Родительская категория' ),
	    'update_item' => __( 'Обновить категорию' ),
	    'add_new_item' => __( 'Добавить новую категорию' ),
	    'new_item_name' => __( 'Название новой категории документов' ),
	    'menu_name' => __( 'Категории деятельности' ),
	  );

	  register_taxonomy('activities', array('activity'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'activities' ),
	  ));
	}





	function wpschool_create_anounce_posttype() {
	    $labels = array(
	        'name' => _x( 'Анонсы', 'Тип записей Анонсы', 'root' ),
	        'singular_name' => _x( 'Анонс', 'Тип записей Анонсы', 'root' ),
	        'menu_name' => __( 'Анонсы', 'root' ),
	        'all_items' => __( 'Все анонсы', 'root' ),
	        'view_item' => __( 'Смотреть анонс', 'root' ),
	        'add_new_item' => __( 'Добавить новый анонс', 'root' ),
	        'add_new' => __( 'Добавить новый', 'root' ),
	        'edit_item' => __( 'Редактировать анонс', 'root' ),
	        'update_item' => __( 'Обновить анонс', 'root' ),
	        'search_items' => __( 'Искать анонс', 'root' ),
	        'not_found' => __( 'Не найдено', 'root' ),
	        'not_found_in_trash' => __( 'Не найдено в корзине', 'root' ),
	    );
	    $args = array(
	        'label' => __( 'anounce', 'root' ),
	        'description' => __( 'Каталог анонсов', 'root' ),
	        'labels' => $labels,
	        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	        'taxonomies' => array( 'genres' ),
	        'hierarchical' => false,
	        'public' => true,
	        'show_ui' => true,
	        'show_in_menu' => true,
	        'show_in_nav_menus' => true,
	        'show_in_admin_bar' => true,
	        'menu_position'       => 9,
	        'menu_icon' => 'dashicons-media-document',
	        'can_export' => true,
	        'has_archive' => true,
	        'exclude_from_search' => false,
	        'publicly_queryable' => true,
	        'capability_type' => 'page',
	    );
	    register_post_type( 'anounce', $args );
	}
	add_action( 'init', 'wpschool_create_anounce_posttype', 0 );

	function wpschool_create_news_posttype() {
	    $labels = array(
	        'name' => _x( 'Новости', 'Тип записей Новости', 'root' ),
	        'singular_name' => _x( 'Новость', 'Тип записей Новости', 'root' ),
	        'menu_name' => __( 'Новости', 'root' ),
	        'all_items' => __( 'Все Новости', 'root' ),
	        'view_item' => __( 'Смотреть Новость', 'root' ),
	        'add_new_item' => __( 'Добавить новую Новость', 'root' ),
	        'add_new' => __( 'Добавить новость', 'root' ),
	        'edit_item' => __( 'Редактировать новость', 'root' ),
	        'update_item' => __( 'Обновить новость', 'root' ),
	        'search_items' => __( 'Искать новость', 'root' ),
	        'not_found' => __( 'Не найдено', 'root' ),
	        'not_found_in_trash' => __( 'Не найдено в корзине', 'root' ),
	    );
	    $args = array(
	        'label' => __( 'news', 'root' ),
	        'description' => __( 'Каталог новостей', 'root' ),
	        'labels' => $labels,
	        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	        'taxonomies' => array( 'genres' ),
	        'hierarchical' => false,
	        'public' => true,
	        'show_ui' => true,
	        'show_in_menu' => true,
	        'show_in_nav_menus' => true,
	        'show_in_admin_bar' => true,
	        'menu_position'       => 10,
	        'menu_icon' => 'dashicons-media-text',
	        'can_export' => true,
	        'has_archive' => true,
	        'exclude_from_search' => false,
	        'publicly_queryable' => true,
	        'capability_type' => 'page',
	    );
	    register_post_type( 'news', $args );
	}
	add_action( 'init', 'wpschool_create_news_posttype', 0 );

	add_action( 'widgets_init', 'test_widgets' );
	function test_widgets() {
		register_sidebar( array (
			'name' => 'Sidebar right',
			'id' => 'sidebar-right',
			'description' => 'Правая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		));
		register_sidebar( array(
	        'name' => __( 'Телефон в шапке', '' ),
	        'id' => 'top-area',
	        'description' => __( 'Шапка', '' ),
	        'before_widget' => '',
	        'after_widget' => '',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ) );
	}

?>