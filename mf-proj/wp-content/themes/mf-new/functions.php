<?php
	add_filter( 'show_admin_bar', '__return_false' );
	add_action( 'wp_enqueue_scripts', 'style_theme' );
	add_action( 'get_footer', 'scripts_theme' );
	add_theme_support( 'custom-logo' );
	add_action( 'init', 'register_post_types' );
	
	add_action( 'after_setup_theme', 'test_after_setup' );


	add_filter( 'wpglobus_menu_items', array('WPGlobusFlatFlagsMenu', 'wpglobusMenuItemsFilter') );

	class WPGlobusFlatFlagsMenu {
		private static function sortFlags ($a, $b) {
			// поменяйте $a и $b местами, чтобы сменить направление сортировки
			return strcmp($b->language, $a->language);
		}
		public static function wpglobusMenuItemsFilter ($items) {
			usort($items, array(self, 'sortFlags'));

			foreach ($items as $item) {
				unset($item->menu_item_parent);
			}
			return $items;
		}
	}

	function test_after_setup() {
		register_nav_menu( 'main_menu', 'Основное меню');
		register_nav_menu( 'language_menu', 'Языковое меню');

		add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
	}

	add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );
	function change_wp_nav_menu( $classes, $args, $depth ) {
		$classes[] = 'sub-menu';
		return $classes;
	}

	function style_theme() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('styles',get_template_directory_uri() .'/assets/css/styles.css',false,time());
		wp_enqueue_style('style-wp',get_template_directory_uri() .'/assets/css/style-wp.css',false,time());
		wp_enqueue_style('owl-min',get_template_directory_uri() .'/assets/css/vnd/owl/owl.carousel.min.css');
		wp_enqueue_style('owl-default',get_template_directory_uri() .'/assets/css/vnd/owl/owl.theme.default.css');
		wp_enqueue_style('aos',get_template_directory_uri() .'/assets/css/vnd/aos/aos.css');
		wp_enqueue_style('remodal',get_template_directory_uri() .'/assets/css/vnd/remodal/remodal.css');
		wp_enqueue_style('remodal-default',get_template_directory_uri() .'/assets/css/vnd/remodal/remodal-default-theme.css');
		wp_enqueue_style('video-modal',get_template_directory_uri() .'/assets/css/vnd/modal-video/modal-video.min.css');
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
			wp_enqueue_script('aos', get_template_directory_uri() .'/assets/js/vnd/aos/aos.js',
			array('jquery-core'), null, true);
			wp_enqueue_script('remodal', get_template_directory_uri() .'/assets/js/vnd/remodal/remodal.js',
			array('jquery-core'), null, true);
			wp_enqueue_script('remodal-test', get_template_directory_uri() .'/assets/js/vnd/remodal/remodal_test.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('id-tabs', get_template_directory_uri() .'/assets/js/vnd/idtabs/jquery.idTabs.min.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('video-modal', get_template_directory_uri() .'/assets/js/vnd/video-modal/jquery-modal-video.min.js',
			array('jquery-core'), null, true);
		wp_enqueue_script('masked', get_template_directory_uri() .'/assets/js/vnd/masked/jquery.maskedinput.min.js',
			array('jquery-core'), null, true);
	}

	function register_post_types(){
		register_post_type( 'services-list', [
			'label'  => null,
			'labels' => [
				'name'               => 'Список всех услуг', // основное название для типа записи
				'singular_name'      => 'Список услуг', // название для одной записи этого типа
				'add_new'            => 'Добавить услугу', // для добавления новой записи
				'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
				'new_item'           => 'Новая услуга', // текст новой записи
				'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
				'search_items'       => 'Искать услугу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Список услуг', // название меню
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
			'menu_icon'           => 'dashicons-screenoptions',
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
		register_post_type( 'case-list', [
			'label'  => null,
			'labels' => [
				'name'               => 'Список всех кейсов', // основное название для типа записи
				'singular_name'      => 'Список кейсов', // название для одной записи этого типа
				'add_new'            => 'Добавить кейс', // для добавления новой записи
				'add_new_item'       => 'Добавление кейса', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование кейса', // для редактирования типа записи
				'new_item'           => 'Новый кейс', // текст новой записи
				'view_item'          => 'Смотреть кейс', // для просмотра записи этого типа.
				'search_items'       => 'Искать кейс', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Список кейсов', // название меню
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
			'menu_icon'           => 'dashicons-admin-multisite',
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
		register_post_type( 'news', [
			'label'  => null,
			'labels' => [
				'name'               => 'Новости', // основное название для типа записи
				'singular_name'      => 'Новости', // название для одной записи этого типа
				'add_new'            => 'Добавить новость', // для добавления новой записи
				'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование новости', // для редактирования типа записи
				'new_item'           => 'Новая новость', // текст новой записи
				'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
				'search_items'       => 'Искать новость', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Новости', // название меню
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
			'menu_icon'           => 'dashicons-admin-site-alt2',
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
		register_post_type( 'blog', [
			'label'  => null,
			'labels' => [
				'name'               => 'Блог', // основное название для типа записи
				'singular_name'      => 'Посты', // название для одной записи этого типа
				'add_new'            => 'Добавить пост', // для добавления новой записи
				'add_new_item'       => 'Добавление поста', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование поста', // для редактирования типа записи
				'new_item'           => 'Новый пост', // текст новой записи
				'view_item'          => 'Смотреть пост', // для просмотра записи этого типа.
				'search_items'       => 'Искать пост', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Блог', // название меню
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
			'menu_icon'           => 'dashicons-category',
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

	add_action('init', 'service');
	function service() {
		$labels = array(
		    'name' => 'Услуги',
		    'singular_name' => 'Услуга',
		    'add_new' => 'Добавить услугу',
		    'add_new_item' => 'Добавить новую услугу',
		    'edit_item' => 'Редактировать услугу',
		    'new_item' => 'Новая услуга',
		    'view_item' => 'Посмотреть услугу',
		    'search_items' => 'Найти услугу',
		    'not_found' =>  'Услуг не найдено',
		    'not_found_in_trash' => 'В корзине услуг не найдено',
		    'parent_item_colon' => '',
		    'menu_name' => 'Услуги'
		  );
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'menu_position'       => 8,
		    'menu_icon' => 'dashicons-media-text',
		    'query_var' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'supports' => array('title','editor','thumbnail', 'comments'),
			'taxonomies' => array('accessories') 
		);
		register_post_type('service',$args);
	}
	add_action( 'init', 'create_service_taxonomies', 0 );
	function create_service_taxonomies(){
	  $labels = array(
	    'name' => _x( 'Категории услуг', 'taxonomy general name' ),
	    'singular_name' => _x( 'Категория услуги', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Найти категорию услуг' ),
	    'all_items' => __( 'Все категории услуг' ),
	    'parent_item' => __( 'Родительская категория услуг' ),
	    'parent_item_colon' => __( 'Родительская категория' ),
	    'edit_item' => __( 'Родительская категория' ),
	    'update_item' => __( 'Обновить категорию' ),
	    'add_new_item' => __( 'Добавить новую категорию' ),
	    'new_item_name' => __( 'Название новой категории документов' ),
	    'menu_name' => __( 'Категории услуг' ),
	  );
	  register_taxonomy('services', array('service'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'services' ),
	  ));
	}


	add_action('init', 'box');
	function box() {
		$labels = array(
		    'name' => 'Кейсы',
		    'singular_name' => 'Кейс',
		    'add_new' => 'Добавить кейс',
		    'add_new_item' => 'Добавить новый кейс',
		    'edit_item' => 'Редактировать кейс',
		    'new_item' => 'Новый кейс',
		    'view_item' => 'Посмотреть кейс',
		    'search_items' => 'Найти кейс',
		    'not_found' =>  'Кейсов не найдено',
		    'not_found_in_trash' => 'В корзине кейсов не найдено',
		    'parent_item_colon' => '',
		    'menu_name' => 'Кейсы'
		  );
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'menu_position'       => 8,
		    'menu_icon' => 'dashicons-admin-site-alt3',
		    'query_var' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'supports' => array('title','editor','thumbnail', 'comments'),
			'taxonomies' => array('accessories') 
		);
		register_post_type('box',$args);
	}
	add_action( 'init', 'create_box_taxonomies', 0 );
	function create_box_taxonomies(){
	  $labels = array(
	    'name' => _x( 'Категории кейсов', 'taxonomy general name' ),
	    'singular_name' => _x( 'Категория кейса', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Найти категорию кейсов' ),
	    'all_items' => __( 'Все категории кейсов' ),
	    'parent_item' => __( 'Родительская категория кейса' ),
	    'parent_item_colon' => __( 'Родительская категория' ),
	    'edit_item' => __( 'Родительская категория' ),
	    'update_item' => __( 'Обновить категорию' ),
	    'add_new_item' => __( 'Добавить новую категорию' ),
	    'new_item_name' => __( 'Название новой категории документов' ),
	    'menu_name' => __( 'Категории кейсов' ),
	  );
	  register_taxonomy('boxes', array('box'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'boxes' ),
	  ));
	}
?>