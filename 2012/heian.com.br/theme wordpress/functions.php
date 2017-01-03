<?php
/* WIDGETS */
add_theme_support('post-thumbnails');
add_image_size('clientes', 136,90,true);
if (function_exists('register_sidebar')) {
    register_sidebar(array(
		'name' => 'Menu Principal', 
		'id' => 'menu-principal', 
		'description' => 'Menu Principal(Topo)', 
		'before_widget' => '', 
		'after_widget' => '', 
		'before_title' => '', 
		'after_title' => '', 
	));
}

register_post_type(
	'projetos', array(
		'label' => 'Projetos', 
		'description' => '', 
		'public' => true, 
		'show_ui' => true, 
		'show_in_menu' => true, 
		'capability_type' => 'post', 
		'hierarchical' => false, 
		'rewrite' => array('slug' => ''), 
		'query_var' => true, 
		'supports' => array('title', 'editor', 'revisions', 'thumbnail', ), 
		'labels' => array(
			'name' => 'Projetos', 
			'singular_name' => 'Projetos', 
			'menu_name' => 'Projetos', 
			'add_new' => 'Add Projetos', 
			'add_new_item' => 'Add New Projetos', 
			'edit' => 'Edit', 
			'edit_item' => 'Edit Projetos', 
			'new_item' => 'New Projetos', 
			'view' => 'View Projetos', 
			'view_item' => 'View Projetos', 
			'search_items' => 'Search Projetos', 
			'not_found' => 'No Projetos Found', 
			'not_found_in_trash' => 'No Projetos Found in Trash', 
			'parent' => 'Parent Projetos', 
		), 
	));
    
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
        'supports' => array('title', 'editor', 'thumbnail', ), 
        'labels' => array(
            'name' => 'Clientes', 
            'singular_name' => 'Clientes', 
            'menu_name' => 'Clientes', 
            'add_new' => 'Add Clientes', 
            'add_new_item' => 'Add New Clientes', 
            'edit' => 'Editar', 
            'edit_item' => 'Editar Clientes', 
            'new_item' => 'Novo Clientes', 
            'view' => 'Ver Clientes', 
            'view_item' => 'Ver Clientes', 
            'search_items' => 'Procurar Clientes', 
            'not_found' => 'No Clientes Found', 
            'not_found_in_trash' => 'No Clientes Found in Trash', 
            'parent' => 'Parent Clientes', 
        ), 
    ));
register_post_type(
    'depoimentos', array( 
        'label' => 'Depoimentos',
        'description' => '',
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => ''),
        'query_var' => true,
        'supports' => array('editor','custom-fields','thumbnail',),
        'labels' => array (
            'name' => 'Depoimentos',
            'singular_name' => 'Depoimento',
            'menu_name' => 'Depoimentos',
            'add_new' => 'Add Depoimentos',
            'add_new_item' => 'Add New Depoimentos',
            'edit' => 'Editar',
            'edit_item' => 'Editar Depoimentos',
            'new_item' => 'New Depoimentos',
            'view' => 'View Depoimentos',
            'view_item' => 'View Depoimentos',
            'search_items' => 'Search Depoimentos',
            'not_found' => 'No Depoimentos Found',
            'not_found_in_trash' => 'No Depoimentos Found in Trash',
            'parent' => 'Parent Depoimentos',
         ),
   ));
   
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
	'supports' => array('title','editor','custom-fields',),
	'labels' => array (
		  'name' => 'Serviços',
		  'singular_name' => 'Serviço',
		  'menu_name' => 'Serviços',
		  'add_new' => 'Adicionar Serviço',
		  'add_new_item' => 'Adicionar novo Serviço',
		  'edit' => 'Editar',
		  'edit_item' => 'EditarServiço',
		  'new_item' => 'Novo Serviço',
		  'view' => 'Ver',
		  'view_item' => 'Ver Serviço',
		  'search_items' => 'Procurar Serviço',
		  'not_found' => 'Nenhum ítem encontrado',
		  'not_found_in_trash' => 'Nenhum ítem Serviço encontrado na lixeira',
		  'parent' => 'Parent Serviço',
		),
	) 
);
?>