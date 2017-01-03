<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

add_image_size('imgsmall', 139,139,true);
add_image_size('imgbig', 204,203,true);

register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'            	=> 'Idioma',
        'id' 				=> 'idioma',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
	register_sidebar(array(
        'name'  			=> 'Widget Blog',
        'id' 				=> 'widget-blog',
        'before_widget'    	=> '<nav class="secao">',
        'after_widget'    	=> '</nav>',
        'before_title'    	=> '<h3>',
        'after_title'    	=> '</h3><hr color="#FFFFFF" />',
    ));
	register_sidebar(array(
        'name'  			=> 'Formulário',
        'id' 				=> 'form',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	register_sidebar(array(
        'name'  			=> 'Newsletter',
        'id' 				=> 'news',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	register_sidebar(array(
        'name'  			=> 'Cadastro de Parceiros',
        'id' 				=> 'formparc',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
}

register_post_type(
	'banner-principal', array(	
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
		'supports' => array('title','editor','custom-fields','thumbnail',),
		'labels' => array (
			  'name' => 'Banner Principal',
			  'singular_name' => 'Banner Principal',
			  'menu_name' => 'Banner Principal',
			  'add_new' => 'Add Banner',
			  'add_new_item' => 'Add New Banner',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Banner',
			  'new_item' => 'New Banner',
			  'view' => 'View Banner',
			  'view_item' => 'View Banner',
			  'search_items' => 'Search Banners',
			  'not_found' => 'No Banners Found',
			  'not_found_in_trash' => 'No Banners Found in Trash',
			  'parent' => 'Parent Banner',
		),
	) 
);

register_post_type(
	'banners', array(	
		'label' => 'Banners',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','custom-fields','thumbnail',),
		'labels' => array (
			  'name' => 'Banners',
			  'singular_name' => 'Banner',
			  'menu_name' => 'Banners',
			  'add_new' => 'Add Banner',
			  'add_new_item' => 'Add New Banner',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Banner',
			  'new_item' => 'New Banner',
			  'view' => 'View Banner',
			  'view_item' => 'View Banner',
			  'search_items' => 'Search Banners',
			  'not_found' => 'No Banners Found',
			  'not_found_in_trash' => 'No Banners Found in Trash',
			  'parent' => 'Parent Banner',
		),
	) 
);

register_post_type(
	'nosso-corporativo', array(	
	'label' => 'Corporativo',
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
				  'name' => 'Corporativo',
				  'singular_name' => 'Serviço',
				  'menu_name' => 'Corporativo',
				  'add_new' => 'Add Serviço',
				  'add_new_item' => 'Add New Serviço',
				  'edit' => 'Edit',
				  'edit_item' => 'Edit Serviço',
				  'new_item' => 'New Serviço',
				  'view' => 'View Serviço',
				  'view_item' => 'View Serviço',
				  'search_items' => 'Search Corporativo',
				  'not_found' => 'No Corporativo Found',
				  'not_found_in_trash' => 'No Corporativo Found in Trash',
				  'parent' => 'Parent Serviço',
			),
	) 
);

register_post_type(
	'nossos-eventos', array(	
		'label' => 'Eventos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','custom-fields','thumbnail',),
		'taxonomies' => array('post_tag',),
		'labels' => array (
			  'name' => 'Eventos',
			  'singular_name' => 'Evento',
			  'menu_name' => 'Eventos',
			  'add_new' => 'Add Evento',
			  'add_new_item' => 'Add New Evento',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Evento',
			  'new_item' => 'New Evento',
			  'view' => 'View Evento',
			  'view_item' => 'View Evento',
			  'search_items' => 'Search Eventos',
			  'not_found' => 'No Eventos Found',
			  'not_found_in_trash' => 'No Eventos Found in Trash',
			  'parent' => 'Parent Evento',
		),
	) 
);

register_post_type(
	'nossas-viagens', array(	
		'label' => 'Viagens',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','custom-fields','thumbnail',),
		'taxonomies' => array('post_tag',),
		'labels' => array (
			  'name' => 'Viagens',
			  'singular_name' => 'Viagem',
			  'menu_name' => 'Viagens',
			  'add_new' => 'Add Viagem',
			  'add_new_item' => 'Add New Viagem',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Viagem',
			  'new_item' => 'New Viagem',
			  'view' => 'View Viagem',
			  'view_item' => 'View Viagem',
			  'search_items' => 'Search Viagens',
			  'not_found' => 'No Viagens Found',
			  'not_found_in_trash' => 'No Viagens Found in Trash',
			  'parent' => 'Parent Viagem',
		),
	) 
);

register_post_type(
	'luademel', array(	
		'label' => 'Lua de Mel',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor','custom-fields','thumbnail',),
		'taxonomies' => array('post_tag',),
		'labels' => array (
			  'name' => 'Lua de Mel',
			  'singular_name' => 'Lua de Mel',
			  'menu_name' => 'Lua de Mel',
			  'add_new' => 'Add Lua de Mel',
			  'add_new_item' => 'Add New Lua de Mel',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Lua de Mel',
			  'new_item' => 'New Lua de Mel',
			  'view' => 'View Lua de Mel',
			  'view_item' => 'View Lua de Mel',
			  'search_items' => 'Search Lua de Mel',
			  'not_found' => 'No Lua de Mel Found',
			  'not_found_in_trash' => 'No Lua de Mel Found in Trash',
			  'parent' => 'Parent Lua de Mel',
		),
	) 
);

register_taxonomy(
	'custom_category',array (
						0 => 'nossos-eventos',
						1 => 'nossas-viagens',
						2 => 'luademel',
					),array( 	
						'hierarchical' => false, 
						'label' => 'Categorias de Posts',
						'show_ui' => true,
						'query_var' => true,
						'rewrite' => array('slug' => ''),
						'singular_label' => 'Categoria'
					) 
);

function Pacotes( $atts ) {
	extract( shortcode_atts( array(
		'conteudo' => NULL,
	), $atts ) );

	return "<div class='pacote'>{$conteudo}</div>";
}
add_shortcode( 'PacoteContem', 'Pacotes' );


function limitar($string, $tamanho, $encode = 'UTF-8') {
    $string = strip_tags($string);
    if( strlen($string) > $tamanho )
        $string = mb_substr($string, 0, $tamanho - 3, $encode) . '...';
    else
        $string = mb_substr($string, 0, $tamanho, $encode);
 
    return $string;
}
