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
        'name'            	=> 'Idiomas',
        'id' 				=> 'idiomas',
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
		'supports' => array('title','custom-fields','thumbnail',),
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