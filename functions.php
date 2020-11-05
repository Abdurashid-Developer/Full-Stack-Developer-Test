<?php
   add_action('wp_enqueue_scripts','theme_style');
   add_action('wp_enqueue_scripts','theme_script');
   add_action('after_setup_theme','theme_menu');
   add_action('widgets_init','theme_sidebar');
   add_action('init','register_entry');

   
   function register_entry(){
    register_post_type( 'testimonial', [
		'label'  => null,
		'labels' => [
			'name'               => 'Testimonial', // основное название для типа записи
			'singular_name'      => 'Testimonial', // название для одной записи этого типа
			'add_new'            => 'Добавить Testimonial', // для добавления новой записи
			'add_new_item'       => 'Добавление Testimonial', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Testimonial', // для редактирования типа записи
			'new_item'           => 'Новое Testimonial', // текст новой записи
			'view_item'          => 'Смотреть Testimonial', // для просмотра записи этого типа.
			'search_items'       => 'Искать Testimonial', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Testimonial', // название меню
		],
		'description'         => 'Работа в Testimonial',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		 'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
	   'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
	   'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail'], 
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
    ] );
    
      register_post_type( 'service', [
		'label'  => null,
		'labels' => [
			'name'               => 'Service', // основное название для типа записи
			'singular_name'      => 'Service', // название для одной записи этого типа
			'add_new'            => 'Добавить Service', // для добавления новой записи
			'add_new_item'       => 'Добавление Service', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Service', // для редактирования типа записи
			'new_item'           => 'Новое Service', // текст новой записи
			'view_item'          => 'Смотреть Service', // для просмотра записи этого типа.
			'search_items'       => 'Искать Service', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Our-service', // название меню
		],
		'description'         => 'Работа в Service',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		 'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
	   'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
	   'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail'], 
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
    ] );
}

   
   
   function theme_sidebar(){
    $args = array(
        'name'          => 'Section White-bg',
        'id'            => "white_bg_main",
        'description'   => 'Вставь сюда виджатов',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => "</h5>\n"
    );
    register_sidebars( 1, $args );
     
      $args = array(
        'name'          => 'Section Feature-car-area',
        'id'            => "feature-car-area",
        'description'   => 'Вставь сюда виджатов',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => "</h5>\n"
    );
     
    register_sidebars( 1, $args );
     
         $args = array(
        'name'          => 'Section Bg-2',
        'id'            => "bg-2",
        'description'   => 'Вставь сюда виджатов',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => "</h5>\n"
    );
    register_sidebars( 1, $args ); 
      
       $args = array(
        'name'          => 'Counter',
        'id'            => "counter",
        'description'   => 'Вставь сюда виджатов',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => "</h5>\n"
    );
    register_sidebars( 1, $args );
     
       $args = array(
        'name'          => 'Our clients',
        'id'            => "our-clients",
        'description'   => 'Вставь сюда виджатов',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => "</h5>\n"
    );
    register_sidebars( 1, $args );
   }

   
   function theme_menu(){
       register_nav_menu('top', 'Меню в шапке') ;
       register_nav_menu('bottom', 'Меню в подвале') ;
       add_theme_support( 'custom-logo' );
       add_theme_support( 'post-thumbnails' ,array ('post','testimonial', 'service'));
   }

   function theme_style(){
	   wp_enqueue_style('style', get_stylesheet_uri());
	   
	   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/asssets/css/bootstrap.min.css');
	   
	   wp_enqueue_style('flaticon', get_template_directory_uri() . '/asssets/css/flaticon.css');
	   
	   wp_enqueue_style('mega_menu', get_template_directory_uri() . '/asssets/css/mega-menu/mega_menu.css');
	   
	   wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/asssets/css/font-awesome.min.css');
	   
	   wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/asssets/css/owl-carousel/owl.carousel.css');
	   
	   wp_enqueue_style('stylee', get_template_directory_uri() . '/asssets/css/style.css');
	   
	   wp_enqueue_style('responsive', get_template_directory_uri() . '/asssets/css/responsive.css');
	   
	   wp_enqueue_style('style-customizer', get_template_directory_uri() . '/asssets/css/style-customizer.css');

       
   }
   function theme_script(){
    wp_enqueue_script( 'popper' ,get_template_directory_uri() . '/asssets/js/popper.js',['jquery'],null,true);
	wp_enqueue_script( 'init' ,get_template_directory_uri() . '/asssets/js/bootstrap.min.js',['jquery'],null,true);

	wp_enqueue_script( 'mega_menu' ,get_template_directory_uri() . '/asssets/js/mega-menu/mega_menu.js',false,null,false);
	
	wp_enqueue_script( 'appear' ,get_template_directory_uri() . '/asssets/js/jquery.appear.js',false,null,false);
     
    //wp_enqueue_script( 'jquery.countTo' ,get_template_directory_uri() . '/asssets/js/counter/jquery.countTo.js',['jquery'],null,true);
	
	wp_enqueue_script( 'owl.carousel' ,get_template_directory_uri() . '/asssets/js/owl-carousel/owl.carousel.min.js',false,null,false);
	
	wp_enqueue_script( 'isotope.pkgd' ,get_template_directory_uri() . '/asssets/js/isotope/isotope.pkgd.min.js',false,null,false);
	
	wp_enqueue_script( 'jquery-select' ,get_template_directory_uri() . '/asssets/js/select/jquery-select.js',false,null,false);
	
	wp_enqueue_script( 'custom' ,get_template_directory_uri() . '/asssets/js/custom.js',false,null,false);
	
	wp_enqueue_script( '' ,get_template_directory_uri() . '/asssets/js/style-customizer.js',false,null,false);
	
	wp_enqueue_script( 'indexscript' ,get_template_directory_uri() . '/asssets/js/indexscript.js',false,null,false);
	
	wp_enqueue_script( 'push' ,get_template_directory_uri() . '/asssets/js/push.js',false,null,false);
   }
   
?>
