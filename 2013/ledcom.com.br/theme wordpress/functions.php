<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');


register_nav_menu('menu_header', 'menu-principal');

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