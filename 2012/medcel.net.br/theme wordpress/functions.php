<?php
add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

add_image_size('imgsmall', 139,139,true);

register_nav_menu('primary', 'menu-top');
register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'            => 'Links',
        'id' => 'links',
        'before_widget'    => NULL,
        'after_widget'    => NULL,
        'before_title'    => '<h2>',
        'after_title'    => '</h2>',
    ));
	register_sidebar(array(
        'name'            => 'Noticias',
        'id' => 'not',
        'before_widget'    => NULL,
        'after_widget'    => NULL,
        'before_title'    => '<h2>',
        'after_title'    => '</h2>',
    ));
		
}
register_post_type(
	'agendas', array(	
	'label' => 'Agenda',
	'description' => '',
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => ''),
	'query_var' => true,
	'exclude_from_search' => false,
	'supports' => array('title','editor','thumbnail','custom-fields',),
	'labels' => array (
		  'name' => 'Agenda',
		  'singular_name' => 'Agenda',
		  'menu_name' => 'Agenda',
		  'add_new' => 'Add Agenda',
		  'add_new_item' => 'Add New Agenda',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Agenda',
		  'new_item' => 'New Agenda',
		  'view' => 'View Agenda',
		  'view_item' => 'View Agenda',
		  'search_items' => 'Search Agenda',
		  'not_found' => 'No Agenda Found',
		  'not_found_in_trash' => 'No Agenda Found in Trash',
		  'parent' => 'Parent Agenda',
		),
	) 
);

register_post_type(
	'parceria', array(	
		'label' => 'Parceiros',
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
			  'name' => 'Parceiros',
			  'singular_name' => 'Parceiro',
			  'menu_name' => 'Parceiros',
			  'add_new' => 'Add Parceiro',
			  'add_new_item' => 'Add New Parceiro',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Parceiro',
			  'new_item' => 'New Parceiro',
			  'view' => 'View Parceiro',
			  'view_item' => 'View Parceiro',
			  'search_items' => 'Search Parceiros',
			  'not_found' => 'No Parceiros Found',
			  'not_found_in_trash' => 'No Parceiros Found in Trash',
			  'parent' => 'Parent Parceiro',
		),
	) 
);

register_post_type(
	'notici', array(	
		'label' => 'Notícias',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'noticia'),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','custom-fields','thumbnail',),
		'taxonomies' => array('post_tag',),
		'labels' => array (
			  'name' => 'Notícias',
			  'singular_name' => 'Notícia',
			  'menu_name' => 'Notícias',
			  'add_new' => 'Add Notícia',
			  'add_new_item' => 'Add New Notícia',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Notícia',
			  'new_item' => 'New Notícia',
			  'view' => 'View Notícia',
			  'view_item' => 'View Notícia',
			  'search_items' => 'Search Notícias',
			  'not_found' => 'No Notícias Found',
			  'not_found_in_trash' => 'No Notícias Found in Trash',
			  'parent' => 'Parent Notícia',
		),
	) 
);

register_taxonomy(
	'cat_not',array ( 0 => 'notici',),
		array( 'hierarchical' => false, 
				'label' => 'Categoria de Notícias',
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'categorias-noticias'),
				'singular_label' => 'Categoria de Notícia')
);

function namespace_add_custom_types( $query ) {
  if( is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'agendas', 'notici'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );