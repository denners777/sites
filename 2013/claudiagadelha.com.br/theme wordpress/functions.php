<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

add_image_size('servico', 239, 134, true);
add_image_size('bio', 340, 418, true);

register_nav_menu('menu-princ', 'Menu Principal');
register_nav_menu('menu-port', 'Menu Portfólio');

if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => 'Contato',
        'id' => 'contato',
        'before_widget' => NULL,
        'after_widget' => NULL,
        'before_title' => NULL,
        'after_title' => NULL,
    ));

    register_sidebar(array(
        'name' => 'Orçamento',
        'id' => 'orca',
        'before_widget' => NULL,
        'after_widget' => NULL,
        'before_title' => NULL,
        'after_title' => NULL,
    ));
}

register_post_type(
        'cp-servico', array(
    'label' => 'Serviços',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => ''),
    'query_var' => true,
    'exclude_from_search' => false,
    'supports' => array('title', 'editor', 'thumbnail',),
    'labels' => array(
        'name' => 'Serviços',
        'singular_name' => 'Serviço',
        'menu_name' => 'Serviços',
        'add_new' => 'Add Serviço',
        'add_new_item' => 'Add New Serviço',
        'edit' => 'Edit',
        'edit_item' => 'Edit Serviço',
        'new_item' => 'New Serviço',
        'view' => 'View Serviço',
        'view_item' => 'View Serviço',
        'search_items' => 'Search Serviços',
        'not_found' => 'No Serviços Found',
        'not_found_in_trash' => 'No Serviços Found in Trash',
        'parent' => 'Parent Serviço',
    ),
        )
);

register_post_type(
        'cp-potfolio', array(
    'label' => 'Portfólio',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => ''),
    'query_var' => true,
    'exclude_from_search' => false,
    'supports' => array('title', 'editor', 'thumbnail',),
    'labels' => array(
        'name' => 'Portfólio',
        'singular_name' => 'Portfólio',
        'menu_name' => 'Portfólio',
        'add_new' => 'Add Portfólio',
        'add_new_item' => 'Add New Portfólio',
        'edit' => 'Edit',
        'edit_item' => 'Edit Portfólio',
        'new_item' => 'New Portfólio',
        'view' => 'View Portfólio',
        'view_item' => 'View Portfólio',
        'search_items' => 'Search Portfólio',
        'not_found' => 'No Portfólio Found',
        'not_found_in_trash' => 'No Portfólio Found in Trash',
        'parent' => 'Parent Portfólio',
    ),
        )
);

register_post_type(
    'frase', array(
        'label' => 'Frases', 
        'description' => '', 
        'public' => true, 
        'show_ui' => true, 
        'show_in_menu' => true, 
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'rewrite' => array('slug' => ''), 
        'query_var' => true, 
        'exclude_from_search' => false, 
        'supports' => array('title', 'editor',), 
            'labels' => array(
            'name' => 'Frases',
            'singular_name' => 'Frase',
            'menu_name' => 'Frases',
            'add_new' => 'Add Frase',
            'add_new_item' => 'Add New Frase',
            'edit' => 'Edit',
            'edit_item' => 'Edit Frase',
            'new_item' => 'New Frase',
            'view' => 'View Frase',
            'view_item' => 'View Frase',
            'search_items' => 'Search Frases',
            'not_found' => 'No Frases Found',
            'not_found_in_trash' => 'No Frases Found in Trash',
            'parent' => 'Parent Frase',
        ),
    )
);

function getMap($address, $size = '354x344', $zoom = '15') {
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

function my_attachments($attachments) {
    $args = array(
        // title of the meta box (string)
        'label' => 'Attachments',
        // all post types to utilize (string|array)
        'post_type' => array('page', 'cp-potfolio'),
        // allowed file type(s) (array) (image|video|text|audio|application)
        'filetype' => null, // no filetype limit
        // include a note within the meta box (string)
        'note' => 'Afixar imagens aqui!',
        // text for 'Attach' button in meta box (string)
        'button_text' => __('Afixar Imagens', 'attachments'),
        // text for modal 'Attach' button (string)
        'modal_text' => __('Attach', 'attachments'),
        /**
         * Fields for the instance are stored in an array. Each field consists of
         * an array with three keys: name, type, label.
         *
         * name  - (string) The field name used. No special characters.
         * type  - (string) The registered field type.
         *                  Fields available: text, textarea
         * label - (string) The label displayed for the field.
         */
        'fields' => array(
            array(
                'name' => 'title', // unique field name
                'type' => 'text', // registered field type
                'label' => __('Título', 'attachments'), // label to display
            ),
            array(
                'name' => 'caption', // unique field name
                'type' => 'textarea', // registered field type
                'label' => __('Caption', 'attachments'), // label to display
            ),
            array(
                'name' => 'copyright', // unique field name
                'type' => 'text', // registered field type
                'label' => __('Copyright', 'attachments'), // label to display
            ),
        ),
    );

    $attachments->register('my_attachments', $args); // unique instance name
}

add_action('attachments_register', 'my_attachments');