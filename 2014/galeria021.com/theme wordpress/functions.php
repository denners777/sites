<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

add_image_size('prodcat', 155, 155, true);
add_image_size('banner', 1140, 393, true);

register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {

  register_sidebar(array(
      'name' => 'Idioma',
      'id' => 'idioma',
      'before_widget' => NULL,
      'after_widget' => NULL,
      'before_title' => NULL,
      'after_title' => NULL,
  ));

  register_sidebar(array(
      'name' => 'Formulário',
      'id' => 'form',
      'before_widget' => NULL,
      'after_widget' => NULL,
      'before_title' => NULL,
      'after_title' => NULL,
  ));

  register_sidebar(array(
      'name' => 'Newsletter',
      'id' => 'newsletter',
      'before_widget' => NULL,
      'after_widget' => NULL,
      'before_title' => NULL,
      'after_title' => NULL,
  ));

  register_sidebar(array(
      'name' => 'Endereço',
      'id' => 'endereco',
      'before_widget' => NULL,
      'after_widget' => NULL,
      'before_title' => NULL,
      'after_title' => NULL,
  ));

  register_sidebar(array(
      'name' => 'Horário de Funcionamento',
      'id' => 'horario',
      'before_widget' => NULL,
      'after_widget' => NULL,
      'before_title' => NULL,
      'after_title' => NULL,
  ));

  register_sidebar(array(
      'name' => 'Telefones e E-mail',
      'id' => 'tel',
      'before_widget' => NULL,
      'after_widget' => NULL,
      'before_title' => NULL,
      'after_title' => NULL,
  ));
}

function Pacotes($atts) {
  extract(shortcode_atts(array(
      'conteudo' => NULL,
                  ), $atts));

  return "<div class='pacote'>{$conteudo}</div>";
}

add_shortcode('PacoteContem', 'Pacotes');

function limitar($string, $tamanho, $encode = 'UTF-8') {
  $string = strip_tags($string);
  if (strlen($string) > $tamanho)
    $string = mb_substr($string, 0, $tamanho - 3, $encode) . '...';
  else
    $string = mb_substr($string, 0, $tamanho, $encode);

  return $string;
}

add_action('init', 'cptui_register_my_cpt_produto');

function cpt_busca($query) {
  if ($query->is_search) {
    $query->set("post_type", array("produto", "designer"));
  }
  return $query;
}

$b = add_filter("pre_get_posts", "cpt_busca");

function my_attachments($attachments) {
  $args = array(
      // title of the meta box (string)
      'label' => 'Fotos Anexadas',
      // all post types to utilize (string|array)
      'post_type' => array('post', 'page', 'produto', 'cliente'),
      // allowed file type(s) (array) (image|video|text|audio|application)
      'filetype' => null, // no filetype limit
      // include a note within the meta box (string)
      'note' => 'Fotos anexadas aqui!',
      // text for 'Attach' button in meta box (string)
      'button_text' => __('Anexar Arquivos', 'attachments'),
      // text for modal 'Attach' button (string)
      'modal_text' => __('Anexar', 'attachments'),
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
              'label' => __('Title', 'attachments'), // label to display
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

add_action('init', 'cptui_register_my_cpt_produto');

function cptui_register_my_cpt_produto() {
  register_post_type('produto', array(
      'label' => 'Produtos',
      'description' => 'Produtos da loja',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'produto', 'with_front' => true),
      'query_var' => true,
      'menu_icon' => 'http://institutoglauciamenezes.com.br/wpgaleria021/wp-content/uploads/2014/03/produto.png',
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats'),
      'taxonomies' => array('category', 'post_tag'),
      'labels' => array(
          'name' => 'Produtos',
          'singular_name' => 'produto',
          'menu_name' => 'Produtos',
          'add_new' => 'Add produto',
          'add_new_item' => 'Add New produto',
          'edit' => 'Edit',
          'edit_item' => 'Edit produto',
          'new_item' => 'New produto',
          'view' => 'View produto',
          'view_item' => 'View produto',
          'search_items' => 'Search Produtos',
          'not_found' => 'No Produtos Found',
          'not_found_in_trash' => 'No Produtos Found in Trash',
          'parent' => 'Parent produto',
      )
  ));
}

add_action('init', 'cptui_register_my_cpt_cliente');

function cptui_register_my_cpt_cliente() {
  register_post_type('cliente', array(
      'label' => 'Cliente',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'cliente', 'with_front' => true),
      'query_var' => true,
      'menu_icon' => 'http://institutoglauciamenezes.com.br/wpgaleria021/wp-content/uploads/2014/03/cliente.png',
      'supports' => array('title', 'custom-fields', 'thumbnail'),
      'taxonomies' => array('category'),
      'labels' => array(
          'name' => 'Cliente',
          'singular_name' => 'Cliente',
          'menu_name' => 'Cliente',
          'add_new' => 'Add Cliente',
          'add_new_item' => 'Add New Cliente',
          'edit' => 'Edit',
          'edit_item' => 'Edit Cliente',
          'new_item' => 'New Cliente',
          'view' => 'View Cliente',
          'view_item' => 'View Cliente',
          'search_items' => 'Search Cliente',
          'not_found' => 'No Cliente Found',
          'not_found_in_trash' => 'No Cliente Found in Trash',
          'parent' => 'Parent Cliente',
      )
  ));
}

add_action('init', 'cptui_register_my_cpt_designer');

function cptui_register_my_cpt_designer() {
  register_post_type('designer', array(
      'label' => 'Designers',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'designer', 'with_front' => true),
      'query_var' => true,
      'menu_icon' => 'http://institutoglauciamenezes.com.br/wpgaleria021/wp-content/uploads/2014/03/designer.png',
      'supports' => array('title', 'editor', 'thumbnail'),
      'labels' => array(
          'name' => 'Designers',
          'singular_name' => 'Designer',
          'menu_name' => 'Designers',
          'add_new' => 'Add Designer',
          'add_new_item' => 'Add New Designer',
          'edit' => 'Edit',
          'edit_item' => 'Edit Designer',
          'new_item' => 'New Designer',
          'view' => 'View Designer',
          'view_item' => 'View Designer',
          'search_items' => 'Search Designers',
          'not_found' => 'No Designers Found',
          'not_found_in_trash' => 'No Designers Found in Trash',
          'parent' => 'Parent Designer',
      )
  ));
}

add_action('init', 'cptui_register_my_cpt_dicas');

function cptui_register_my_cpt_dicas() {
  register_post_type('dicas', array(
      'label' => 'Dicas',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'dicas', 'with_front' => true),
      'query_var' => true,
      'menu_icon' => 'http://institutoglauciamenezes.com.br/wpgaleria021/wp-content/uploads/2014/03/dicas.png',
      'supports' => array('title', 'editor'),
      'labels' => array(
          'name' => 'Dicas',
          'singular_name' => 'Dica',
          'menu_name' => 'Dicas',
          'add_new' => 'Add Dica',
          'add_new_item' => 'Add New Dica',
          'edit' => 'Edit',
          'edit_item' => 'Edit Dica',
          'new_item' => 'New Dica',
          'view' => 'View Dica',
          'view_item' => 'View Dica',
          'search_items' => 'Search Dicas',
          'not_found' => 'No Dicas Found',
          'not_found_in_trash' => 'No Dicas Found in Trash',
          'parent' => 'Parent Dica',
      )
  ));
}

function the_slug() {
  $post_data = get_post($post->ID, ARRAY_A);
  $slug = $post_data['post_name'];
  return $slug;
}
