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
	'conteudo', array(	
	'label' => 'Conteúdo do Site',
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
		  'name' => 'Conteúdo do Site',
		  'singular_name' => 'Conteúdo do Site',
		  'menu_name' => 'Conteúdo do Site',
		  'add_new' => 'Add Conteúdo do Site',
		  'add_new_item' => 'Add New Conteúdo do Site',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Conteúdo do Site',
		  'new_item' => 'New Conteúdo do Site',
		  'view' => 'View Conteúdo do Site',
		  'view_item' => 'View Conteúdo do Site',
		  'search_items' => 'Search Conteúdo do Site',
		  'not_found' => 'No Conteúdo do Site Found',
		  'not_found_in_trash' => 'No Conteúdo do Site Found in Trash',
		  'parent' => 'Parent Conteúdo do Site',
		),
	) 
);

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
		'supports' => array('title','thumbnail',),
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