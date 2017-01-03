<?php
add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

add_image_size('galeria', 139,139,true);

register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'            	=> 'Contato',
        'id' 				=> 'contato',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
}

register_post_type(
	'olhares', array(	
		'label' => 'Olhares',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'supports' => array('title','thumbnail',),
		'labels' => array (
		  'name' => 'Olhares',
		  'singular_name' => 'Galeria de Olhares',
		  'menu_name' => 'Olhares',
		  'add_new' => 'Add Galeria de Olhares',
		  'add_new_item' => 'Add New Galeria de Olhares',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Galeria de Olhares',
		  'new_item' => 'New Galeria de Olhares',
		  'view' => 'View Galeria de Olhares',
		  'view_item' => 'View Galeria de Olhares',
		  'search_items' => 'Search Olhares',
		  'not_found' => 'No Olhares Found',
		  'not_found_in_trash' => 'No Olhares Found in Trash',
		  'parent' => 'Parent Galeria de Olhares',
		),
	) 
);

register_post_type(
	'espetaculos', array(	
		'label' => 'Espetáculos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'supports' => array('title','thumbnail',),
		'labels' => array (
		  'name' => 'Espetáculos',
		  'singular_name' => 'Espetáculo',
		  'menu_name' => 'Espetáculos',
		  'add_new' => 'Add Espetáculo',
		  'add_new_item' => 'Add New Espetáculo',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Espetáculo',
		  'new_item' => 'New Espetáculo',
		  'view' => 'View Espetáculo',
		  'view_item' => 'View Espetáculo',
		  'search_items' => 'Search Espetáculos',
		  'not_found' => 'No Espetáculos Found',
		  'not_found_in_trash' => 'No Espetáculos Found in Trash',
		  'parent' => 'Parent Espetáculo',
		),
	)
);

register_post_type(
	'moda', array(	
		'label' => 'Moda',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'supports' => array('title','thumbnail',),
		'labels' => array (
		  'name' => 'Moda',
		  'singular_name' => 'Moda',
		  'menu_name' => 'Moda',
		  'add_new' => 'Add Moda',
		  'add_new_item' => 'Add New Moda',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Moda',
		  'new_item' => 'New Moda',
		  'view' => 'View Moda',
		  'view_item' => 'View Moda',
		  'search_items' => 'Search Moda',
		  'not_found' => 'No Moda Found',
		  'not_found_in_trash' => 'No Moda Found in Trash',
		  'parent' => 'Parent Moda',
		),
	) 
);

register_post_type(
	'produtos', array(	
		'label' => 'Produtos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'supports' => array('title','thumbnail',),
		'labels' => array (
		  'name' => 'Produtos',
		  'singular_name' => 'Produto',
		  'menu_name' => 'Produtos',
		  'add_new' => 'Add Produto',
		  'add_new_item' => 'Add New Produto',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Produto',
		  'new_item' => 'New Produto',
		  'view' => 'View Produto',
		  'view_item' => 'View Produto',
		  'search_items' => 'Search Produtos',
		  'not_found' => 'No Produtos Found',
		  'not_found_in_trash' => 'No Produtos Found in Trash',
		  'parent' => 'Parent Produto',
		),
	) 
);