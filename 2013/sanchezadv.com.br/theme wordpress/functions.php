<?php
add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

add_image_size('banner', 367,242,true);
add_image_size('cliente', 250,238,true);

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
	'banner', array(	
		'label' => 'Banner Principal',
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
			  'name' => 'Banner Principal',
			  'singular_name' => 'Banner',
			  'menu_name' => 'Banner Principal',
			  'add_new' => 'Add Banner',
			  'add_new_item' => 'Add New Banner',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Banner',
			  'new_item' => 'New Banner',
			  'view' => 'View Banner',
			  'view_item' => 'View Banner',
			  'search_items' => 'Search Banner Principal',
			  'not_found' => 'No Banner Principal Found',
			  'not_found_in_trash' => 'No Banner Principal Found in Trash',
			  'parent' => 'Parent Banner',
		),
	) 
);

register_post_type(
	'destaques', array(	
		'label' => 'Destaques',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor',),
		'labels' => array (
			  'name' => 'Destaques',
			  'singular_name' => 'Destaque',
			  'menu_name' => 'Destaques',
			  'add_new' => 'Add Destaque',
			  'add_new_item' => 'Add New Destaque',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Destaque',
			  'new_item' => 'New Destaque',
			  'view' => 'View Destaque',
			  'view_item' => 'View Destaque',
			  'search_items' => 'Search Destaques',
			  'not_found' => 'No Destaques Found',
			  'not_found_in_trash' => 'No Destaques Found in Trash',
			  'parent' => 'Parent Destaque',
		),
	) 
);

register_post_type(
	'clientes', array(	
		'label' => 'Clientes',
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
			  'name' => 'Clientes',
			  'singular_name' => 'Cliente',
			  'menu_name' => 'Clientes',
			  'add_new' => 'Add Cliente',
			  'add_new_item' => 'Add New Cliente',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Cliente',
			  'new_item' => 'New Cliente',
			  'view' => 'View Cliente',
			  'view_item' => 'View Cliente',
			  'search_items' => 'Search Clientes',
			  'not_found' => 'No Clientes Found',
			  'not_found_in_trash' => 'No Clientes Found in Trash',
			  'parent' => 'Parent Cliente',
		),
	)
);

function limitar($string, $tamanho, $encode = 'UTF-8') {
    $string = strip_tags($string);
    if( strlen($string) > $tamanho )
        $string = mb_substr($string, 0, $tamanho - 3, $encode) . "... ";
    else
        $string = mb_substr($string, 0, $tamanho, $encode);
 
    return $string;
}