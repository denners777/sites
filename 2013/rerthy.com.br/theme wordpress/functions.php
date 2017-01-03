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
	
	register_sidebar(array(
        'name'            	=> 'Tradutor',
        'id' 				=> 'trans',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
}

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
		'exclude_from_search' => false,
		'supports' => array('title','editor','thumbnail',),
		'taxonomies' => array('category',),
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

register_post_type(
	'guia-tecnico', array(	
		'label' => 'Guia Técnico',
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
		  'name' => 'Guia Técnico',
		  'singular_name' => 'Guia Técnico',
		  'menu_name' => 'Guia Técnico',
		  'add_new' => 'Add Guia Técnico',
		  'add_new_item' => 'Add New Guia Técnico',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Guia Técnico',
		  'new_item' => 'New Guia Técnico',
		  'view' => 'View Guia Técnico',
		  'view_item' => 'View Guia Técnico',
		  'search_items' => 'Search Guia Técnico',
		  'not_found' => 'No Guia Técnico Found',
		  'not_found_in_trash' => 'No Guia Técnico Found in Trash',
		  'parent' => 'Parent Guia Técnico',
		),
	) 
);
register_taxonomy(
	'cat-produto',array (
	  	0 => 'produtos',
		1 => 'guia-tecnico',
		),array( 
			'hierarchical' => false, 
			'label' => 'Conteúdo',
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => ''),
			'singular_label' => 'Conteúdo') 
);