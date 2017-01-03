<?php
add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

register_nav_menu('primary', 'Menu Principal');

register_post_type(
	'pacotes-promocionais', array(	
		'label' => 'Pacotes Promocionais',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'supports' => array('title','editor','thumbnail',),
		'labels' => array (
			  'name' => 'Pacotes Promocionais',
			  'singular_name' => 'Pacote Promocional',
			  'menu_name' => 'Pacotes Promocionais',
			  'add_new' => 'Add Pacote Promocional',
			  'add_new_item' => 'Add New Pacote Promocional',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Pacote Promocional',
			  'new_item' => 'New Pacote Promocional',
			  'view' => 'View Pacote Promocional',
			  'view_item' => 'View Pacote Promocional',
			  'search_items' => 'Search Pacotes Promocionais',
			  'not_found' => 'No Pacotes Promocionais Found',
			  'not_found_in_trash' => 'No Pacotes Promocionais Found in Trash',
			  'parent' => 'Parent Pacote Promocional',
		),
	) 
);
