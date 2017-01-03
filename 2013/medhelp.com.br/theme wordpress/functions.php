<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

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
	
	register_sidebar(array(
        'name'            	=> 'Cadastre-se',
        'id' 				=> 'cadastre',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
	register_sidebar(array(
        'name'            	=> 'Busca',
        'id' 				=> 'busca',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
}


register_post_type(
	'slider', array(	
		'label' => 'Slider',
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
		  'name' => 'Slider',
		  'singular_name' => 'Slider',
		  'menu_name' => 'Slider',
		  'add_new' => 'Add Slider',
		  'add_new_item' => 'Add New Slider',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Slider',
		  'new_item' => 'New Slider',
		  'view' => 'View Slider',
		  'view_item' => 'View Slider',
		  'search_items' => 'Search Slider',
		  'not_found' => 'No Slider Found',
		  'not_found_in_trash' => 'No Slider Found in Trash',
		  'parent' => 'Parent Slider',
		),
	) 
);

register_post_type(
	'duvidas', array(	
		'label' => 'Dúvidas',
		'description' => '',
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','editor',),
		'labels' => array (
		  'name' => 'Dúvidas',
		  'singular_name' => 'Dúvida',
		  'menu_name' => 'Dúvidas',
		  'add_new' => 'Add Dúvida',
		  'add_new_item' => 'Add New Dúvida',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Dúvida',
		  'new_item' => 'New Dúvida',
		  'view' => 'View Dúvida',
		  'view_item' => 'View Dúvida',
		  'search_items' => 'Search Dúvidas',
		  'not_found' => 'No Dúvidas Found',
		  'not_found_in_trash' => 'No Dúvidas Found in Trash',
		  'parent' => 'Parent Dúvida',
		),
	) 
);

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

function cpt_busca($query) {
	if ($query->is_search) {
		$query->set("post_type", array("slider", "duvidas", "page"));
	};
	
	return $query;
	
	};
$b = add_filter("pre_get_posts", "cpt_busca");

