<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');


register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'  			=> 'Formulário',
        'id' 				=> 'contato',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
	register_sidebar(array(
        'name'  			=> 'Sobre',
        'id' 				=> 'sobre',
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
		'supports' => array('title','editor','thumbnail',),
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

function limitar($string, $tamanho, $encode = 'UTF-8') {
    $string = strip_tags($string);
    if( strlen($string) > $tamanho )
        $string = mb_substr($string, 0, $tamanho, $encode) . '...';
    else
        $string = mb_substr($string, 0, $tamanho, $encode);
 
    return $string;
}


function cpt_busca($query) {
	if ($query->is_search) {
		$query->set("post_type", array("banner", "produtos", "page", "sobre"));
	};
	
	return $query;
	
	};
$b = add_filter("pre_get_posts", "cpt_busca");


function getMap($address, $size = '354x344',$zoom = '15') {
	//Target Url
	$target = "http://maps.google.com/maps/api/staticmap?center={$address}&zoom={$zoom}&size={$size}&sensor=false&markers=color:green|{$address}";

	//run curl
	$curl_instance = curl_init($target);
	curl_setopt($curl_instance, CURLOPT_RETURNTRANSFER, true);
	curl_exec($curl_instance);

	//if the img did not come back
	if (curl_errno($curl_instance))
		return '<p class="error">Map Error: ' . curl_error($ch) . '</p>';
	else
		return "<img src=\"{$target}\" alt=\"Map\" />";

	//kill curl
	curl_close($curl_instance);

}