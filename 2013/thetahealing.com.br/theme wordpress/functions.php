<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');


register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'  			=> 'Contato',
        'id' 				=> 'contato',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
	register_sidebar(array(
        'name'  			=> 'Telefones Consulta',
        'id' 				=> 'tels',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
	register_sidebar(array(
        'name'  			=> 'Facebook',
        'id' 				=> 'face',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
}


register_post_type(
	'slider', array(	
		'label' => 'Banner Home',
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
			'name' => 'Banner Home',
			'singular_name' => 'Banner Home',
			'menu_name' => 'Banner Home',
			'add_new' => 'Add Banner Home',
			'add_new_item' => 'Add New Banner Home',
			'edit' => 'Edit',
			'edit_item' => 'Edit Banner Home',
			'new_item' => 'New Banner Home',
			'view' => 'View Banner Home',
			'view_item' => 'View Banner Home',
			'search_items' => 'Search Banner Home',
			'not_found' => 'No Banner Home Found',
			'not_found_in_trash' => 'No Banner Home Found in Trash',
			'parent' => 'Parent Banner Home',
		),
	) 
);

register_post_type(
	'novidades', array(	
		'label' => 'Novidades',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','thumbnail','author',),
		'labels' => array (
		  'name' => 'Novidades',
		  'singular_name' => 'Novidade',
		  'menu_name' => 'Novidades',
		  'add_new' => 'Add Novidade',
		  'add_new_item' => 'Add New Novidade',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Novidade',
		  'new_item' => 'New Novidade',
		  'view' => 'View Novidade',
		  'view_item' => 'View Novidade',
		  'search_items' => 'Search Novidades',
		  'not_found' => 'No Novidades Found',
		  'not_found_in_trash' => 'No Novidades Found in Trash',
		  'parent' => 'Parent Novidade',
		),
	)
);

register_post_type(
	'clipping', array(	
		'label' => 'Clipping',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','custom-fields','thumbnail',),
		'labels' => array (
		  'name' => 'Clipping',
		  'singular_name' => 'Clipping',
		  'menu_name' => 'Clipping',
		  'add_new' => 'Add Clipping',
		  'add_new_item' => 'Add New Clipping',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Clipping',
		  'new_item' => 'New Clipping',
		  'view' => 'View Clipping',
		  'view_item' => 'View Clipping',
		  'search_items' => 'Search Clipping',
		  'not_found' => 'No Clipping Found',
		  'not_found_in_trash' => 'No Clipping Found in Trash',
		  'parent' => 'Parent Clipping',
		),
	) 
);


register_post_type(
	'cursos', array(	
		'label' => 'Cursos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','custom-fields'),
		'labels' => array (
		  'name' => 'Cursos',
		  'singular_name' => 'Curso',
		  'menu_name' => 'Cursos',
		  'add_new' => 'Add Curso',
		  'add_new_item' => 'Add New Curso',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Curso',
		  'new_item' => 'New Curso',
		  'view' => 'View Curso',
		  'view_item' => 'View Curso',
		  'search_items' => 'Search Cursos',
		  'not_found' => 'No Cursos Found',
		  'not_found_in_trash' => 'No Cursos Found in Trash',
		  'parent' => 'Parent Curso',
		),
	) 
);

register_post_type(
	'depoimentos', array(	
		'label' => 'Depoimentos',
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
		  'name' => 'Depoimentos',
		  'singular_name' => 'Depoimento',
		  'menu_name' => 'Depoimentos',
		  'add_new' => 'Add Depoimento',
		  'add_new_item' => 'Add New Depoimento',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Depoimento',
		  'new_item' => 'New Depoimento',
		  'view' => 'View Depoimento',
		  'view_item' => 'View Depoimento',
		  'search_items' => 'Search Depoimentos',
		  'not_found' => 'No Depoimentos Found',
		  'not_found_in_trash' => 'No Depoimentos Found in Trash',
		  'parent' => 'Parent Depoimento',
		),
	) 
);

function limitar($string, $tamanho, $encode = 'UTF-8') {
    $string = strip_tags($string);
    if( strlen($string) > $tamanho )
        $string = mb_substr($string, 0, $tamanho, $encode) . '...';
    else
        $string = mb_substr($string, 0, $tamanho, $encode);
 
    return $string;
}