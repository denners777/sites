<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');


register_nav_menu('menu_header', 'menu-top');
register_nav_menu('menu_footer', 'menu-bottom');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'  			=> 'Contato',
        'id' 				=> 'contato',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
	
}

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
	'fotos', array(	
		'label' => 'Fotos',
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
		  'name' => 'Fotos',
		  'singular_name' => 'Foto',
		  'menu_name' => 'Fotos',
		  'add_new' => 'Add Foto',
		  'add_new_item' => 'Add New Foto',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Foto',
		  'new_item' => 'New Foto',
		  'view' => 'View Foto',
		  'view_item' => 'View Foto',
		  'search_items' => 'Search Fotos',
		  'not_found' => 'No Fotos Found',
		  'not_found_in_trash' => 'No Fotos Found in Trash',
		  'parent' => 'Parent Foto',
		),
	) 
);

register_post_type(
	'videos', array(	
		'label' => 'Videos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','custom-fields',),
		'labels' => array (
		  'name' => 'Videos',
		  'singular_name' => 'Video',
		  'menu_name' => 'Videos',
		  'add_new' => 'Add Video',
		  'add_new_item' => 'Add New Video',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Video',
		  'new_item' => 'New Video',
		  'view' => 'View Video',
		  'view_item' => 'View Video',
		  'search_items' => 'Search Videos',
		  'not_found' => 'No Videos Found',
		  'not_found_in_trash' => 'No Videos Found in Trash',
		  'parent' => 'Parent Video',
		),
	) 
);


register_post_type(
	'temp', array(	
		'label' => 'Temporadas',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array('title','custom-fields',),
		'labels' => array (
		  'name' => 'Temporadas',
		  'singular_name' => 'Temporada',
		  'menu_name' => 'Temporadas',
		  'add_new' => 'Add Temporada',
		  'add_new_item' => 'Add New Temporada',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Temporada',
		  'new_item' => 'New Temporada',
		  'view' => 'View Temporada',
		  'view_item' => 'View Temporada',
		  'search_items' => 'Search Temporadas',
		  'not_found' => 'No Temporadas Found',
		  'not_found_in_trash' => 'No Temporadas Found in Trash',
		  'parent' => 'Parent Temporada',
		),
	) 
);


function my_attachments( $attachments )
{
  $args = array(
 
    // title of the meta box (string)
    'label'         => 'Attachments',
 
    // all post types to utilize (string|array)
    'post_type'     => array( 'fotos' ),
 
    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => null,  // no filetype limit
 
    // include a note within the meta box (string)
    'note'          => 'Attach arquivos aqui!',
 
    // text for 'Attach' button (string)
    'button_text'   => __( 'Attach Arquivos', 'attachments' ),
 
    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Attach', 'attachments' ),
 
    // fields for this instance (array)
    'fields'        => array(
      array(
        'name'  => 'title',                          // unique field name
        'type'  => 'text',                           // registered field type (field available in 3.0: text)
        'label' => __( 'Title', 'attachments' ),     // label to display
      ),
      array(
        'name'  => 'caption',                        // unique field name
        'type'  => 'text',                           // registered field type (field available in 3.0: text)
        'label' => __( 'Caption', 'attachments' ),   // label to display
      ),
      array(
        'name'  => 'copyright',                      // unique field name
        'type'  => 'text',                           // registered field type (field available in 3.0: text)
        'label' => __( 'Copyright', 'attachments' ), // label to display
      ),
    ),
 
  );
 
  $attachments->register( 'my_attachments', $args ); // unique instance name
}
 
add_action( 'attachments_register', 'my_attachments' );