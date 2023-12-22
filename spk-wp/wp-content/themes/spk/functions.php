<?php
	add_filter( 'show_admin_bar', '__return_false' );
	add_action( 'wp_enqueue_scripts', 'style_theme' );
	add_action( 'get_footer', 'scripts_theme' );
	add_theme_support( 'custom-logo' );
	add_action( 'widgets_init', 'true_register_wp_sidebars' );
	add_action( 'init', 'register_post_types' );
	add_action('init', 'project');


	function project() {
		$labels = array(
		    'name' => 'Проекты',
		    'singular_name' => 'Проект',
		    'add_new' => 'Добавить проект',
		    'add_new_item' => 'Добавить новый проект',
		    'edit_item' => 'Редактировать проект',
		    'new_item' => 'Новый проект',
		    'view_item' => 'Посмотреть проект',
		    'search_items' => 'Найти проект',
		    'not_found' =>  'Проектов не найдено',
		    'not_found_in_trash' => 'В корзине проектов не найдено',
		    'parent_item_colon' => '',
		    'menu_name' => 'Проекты'
		  );
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'menu_icon' => 'dashicons-welcome-widgets-menus',
		    'query_var' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'menu_position' => 5,
		    'supports' => array('title','editor','thumbnail', 'comments'),
			'taxonomies' => array('accessories') 
		  );
			register_post_type('cat-one',$args);
	}
	add_action( 'init', 'create_project_taxonomies', 0 );

	function create_project_taxonomies(){
	  $labels = array(
	    'name' => _x( 'Категории проектов', 'taxonomy general name' ),
	    'singular_name' => _x( 'Категория проекта', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Найти категорию проекта' ),
	    'all_items' => __( 'Все категории проектов' ),
	    'parent_item' => __( 'Родительская категория проекта' ),
	    'parent_item_colon' => __( 'Родительская категория' ),
	    'edit_item' => __( 'Родительская категория' ),
	    'update_item' => __( 'Обновить катгорию' ),
	    'add_new_item' => __( 'Добавить новую катгорию' ),
	    'new_item_name' => __( 'Название новой категории аксессуаров' ),
	    'menu_name' => __( 'Категории проектов' ),
	  );

	  register_taxonomy('projects', array('project'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'projects' ),
	  ));
	}






	

	function style_theme() {
		/*wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('main',get_template_directory_uri() .'/assets/css/style.css',false,time());
		wp_enqueue_style('customize',get_template_directory_uri() .'/assets/css/customize.css',false,time());
		wp_enqueue_style('fonts',get_template_directory_uri() .'/assets/plugin/fonts/transfonter/fonts.css');
		wp_enqueue_style('fonts-rus',get_template_directory_uri() .'/assets/plugin/fonts/transfonter/rus/fonts-rus.css');
		wp_enqueue_style('flaticon',get_template_directory_uri() .'/assets/plugin/fonts/platicon/font/flaticon.css');
		wp_enqueue_style('icomoon',get_template_directory_uri() .'/assets/plugin/fonts/font/icomoon.css');
		wp_enqueue_style('themify-icons',get_template_directory_uri() .'/assets/plugin/fonts/themify/themify-icons.css');
		wp_enqueue_style('bootstrap',get_template_directory_uri() .'/assets/plugin/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('animsition',get_template_directory_uri() .'/assets/plugin/animsition/css/animsition.min.css');
		wp_enqueue_style('lightbox',get_template_directory_uri() .'/assets/plugin/lightbox/css/lightbox.min.css');
		wp_enqueue_style('animate',get_template_directory_uri() .'/assets/css/animate.css');
		wp_enqueue_style('slick',get_template_directory_uri() .'/assets/plugin/slick/slick.css');
		wp_enqueue_style('mediaelementplayer',get_template_directory_uri() .'/assets/plugin/player/mediaelementplayer.css');
		wp_enqueue_style('jquery',get_template_directory_uri() .'/assets/plugin/jquery-ui/jquery-ui.css');
		wp_enqueue_style('slick-theme',get_template_directory_uri() .'/assets/plugin/slick/slick-theme.css');
		
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');*/
	}

	function scripts_theme() {

		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() .'/assets/plugin/jquery/jquery-2.0.2.min.js');
		wp_enqueue_script('jquery');

		
		//wp_enqueue_script('modernizr', get_template_directory_uri() .'/assets/plugin/modernizr.js',
			//array('jquery-core'), null, true);
		//wp_enqueue_script('plugin', get_template_directory_uri() .'/assets/plugin/plugin.min.js',
		//	array('jquery-core'), null, true);
		//wp_enqueue_script('main', get_template_directory_uri() .'/assets/plugin/main.js',
			//array('jquery-core'), null, true);
		//wp_enqueue_script('custom', get_template_directory_uri() .'/assets/plugin/custom.js',
			//array('jquery-core'), null, true);
	}

	function true_register_wp_sidebars() {
 
		/* В боковой колонке - первый сайдбар */
		register_sidebar(
			array(
				'id' => 'news_category', // уникальный id
				'name' => 'Категории новостей', // название сайдбара
				'description' => 'Перетащите сюда виджеты.', // описание
				'before_widget' => '<div id="%1$s" class="news_category %2$s">', // по умолчанию виджеты выводятся <li>-списком
				'after_widget' => '</div>',
				'before_title' => '<h5 class="vk-text-uppercase">', // по умолчанию заголовки виджетов в <h2>
				'after_title' => '</h5>'
			)
		);
	}

	function register_post_types(){
	register_post_type( 'main_slider', [
		'label'  => null,
		'labels' => [
			'name'               => 'Основной слайдер', // основное название для типа записи
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
			'menu_name'          => 'Основной слайдер', // название меню
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
		'menu_position'       => null,
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



?>