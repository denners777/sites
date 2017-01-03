<?php
add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'            	=> 'Formulario',
        'id' 				=> 'form',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
}

register_post_type(
	'banner', array(	
		'label' => 'Banner',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','thumbnail',),
		'labels' => array (
		  'name' => 'Banner',
		  'singular_name' => 'Banner',
		  'menu_name' => 'Banner',
		  'add_new' => 'Add Banner',
		  'add_new_item' => 'Add New Banner',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Banner',
		  'new_item' => 'New Banner',
		  'view' => 'View Banner',
		  'view_item' => 'View Banner',
		  'search_items' => 'Search Banner',
		  'not_found' => 'No Banner Found',
		  'not_found_in_trash' => 'No Banner Found in Trash',
		  'parent' => 'Parent Banner',
		),
	) 
);

register_post_type(
	'servicos', array(	
		'label' => 'Serviços',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','thumbnail',),
		'taxonomies' => array('category',),
		'labels' => array (
		  'name' => 'Serviços',
		  'singular_name' => 'Serviço',
		  'menu_name' => 'Serviços',
		  'add_new' => 'Add Serviço',
		  'add_new_item' => 'Add New Serviço',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Serviço',
		  'new_item' => 'New Serviço',
		  'view' => 'View Serviço',
		  'view_item' => 'View Serviço',
		  'search_items' => 'Search Serviços',
		  'not_found' => 'No Serviços Found',
		  'not_found_in_trash' => 'No Serviços Found in Trash',
		  'parent' => 'Parent Serviço',
		),
	) 
);

register_post_type(
	'projeto', array(	
		'label' => 'Projetos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','thumbnail',),
		'taxonomies' => array('category',),
		'labels' => array (
		  'name' => 'Projetos',
		  'singular_name' => 'Projeto',
		  'menu_name' => 'Projetos',
		  'add_new' => 'Add Projeto',
		  'add_new_item' => 'Add New Projeto',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Projeto',
		  'new_item' => 'New Projeto',
		  'view' => 'View Projeto',
		  'view_item' => 'View Projeto',
		  'search_items' => 'Search Projetos',
		  'not_found' => 'No Projetos Found',
		  'not_found_in_trash' => 'No Projetos Found in Trash',
		  'parent' => 'Parent Projeto',
		),
	) 
);