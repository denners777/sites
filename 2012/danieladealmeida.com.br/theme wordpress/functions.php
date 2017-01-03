<?php
add_theme_support('post-thumbnails');
add_image_size('box-nutricao', 245,100,true);
add_image_size('dicas', 212,128,true);
add_image_size('slider', 960,340,true);

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'            => 'Menu Principal',
        'id' => 'menu-principal',
        'before_widget'    => NULL,
        'after_widget'    => NULL,
        'before_title'    => NULL,
        'after_title'    => NULL,
    ));
	register_sidebar(array(
        'name'  => 'Widget Blog',
        'id' => 'widget-blog',
        'before_widget'    => '<div class="widget">',
        'after_widget'    => '</div>',
        'before_title'    => '<h4>',
        'after_title'    => '</h4>',
    ));
	register_sidebar(array(
        'name'  => 'Widget Blog Footer',
        'id' => 'widget-blog-footer',
          'before_widget'    => '<div class="grid_4">',
        'after_widget'    => '</div>',
        'before_title'    => '<h2>',
        'after_title'    => '</h2>',
    ));
	register_sidebar(array(
        'name'	=> 'Side Bar Contato',
        'id' => 'side-bar-contato',
        'before_widget'    => '<div class="Pad13">',
        'after_widget'    => '</div>',
        'before_title'    => '<h3>',
        'after_title'    => '</h3>',
    ));	
	register_sidebar(array(
        'name'  => 'Widget Receita',
        'id' => 'widget-receita',
        'before_widget'    => '<div class="widget">',
        'after_widget'    => '</div>',
        'before_title'    => '<h4>',
        'after_title'    => '</h4>',
    ));
	
}

register_post_type(
	'servicos', array(
		'label' => 'Serviços', 
		'description' => 'Todos os serviços', 
		'public' => true, 
		'show_ui' => true, 
		'show_in_menu' => true, 
		'capability_type' => 'post', 
		'hierarchical' => false, 
		'rewrite' => array('slug' => 'servicos'), 
		'query_var' => true, 
		'supports' => array('title', 'editor', 'revisions', 'thumbnail', ), 
		'labels' => array(
			'name' => 'Serviços', 
			'singular_name' => 'Serviços', 
			'menu_name' => 'Serviços', 
			'add_new' => 'Adicionar Serviços', 
			'add_new_item' => 'Adicionar Novo Serviços', 
			'edit' => 'Editar', 
			'edit_item' => 'Editar Serviços', 
			'new_item' => 'Novo Serviços', 
			'view' => 'Ver Serviços', 
			'view_item' => 'Ver Serviços', 
			'search_items' => 'Procurar Serviços', 
			'not_found' => 'Nenhum serviço encontrado', 
			'not_found_in_trash' => 'Nenhum serviço encontrado na lixeira', 
			'parent' => 'Pais de Serviços', 
		), 
	));


register_post_type(
	'slide', array( 
		'label' => 'Slides',
		'description' => '',
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => ''),
		'query_var' => true,
		'supports' => array('title','editor','custom-fields','thumbnail',),
		'labels' => array (
  			'name' => 'Slides',
  			'singular_name' => 'slide',
  			'menu_name' => 'Slides',
  			'add_new' => 'Add slide',
  			'add_new_item' => 'Add New slide',
  			'edit' => 'Edit',
  			'edit_item' => 'Edit slide',
  			'new_item' => 'New slide',
  			'view' => 'View slide',
  			'view_item' => 'View slide',
  			'search_items' => 'Search Slides',
  			'not_found' => 'No Slides Found',
  			'not_found_in_trash' => 'No Slides Found in Trash',
  			'parent' => 'Parent slide',
		),
	));

register_post_type(
   'depoimentos', array( 
      'label' => 'Depoimento home',
      'description' => 'Depoimentos em Geral',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => ''),
      'query_var' => true,
      'supports' => array('title','editor',),
      'labels' => array (
          'name' => 'Depoimentos',
          'singular_name' => 'Depoimento',
          'menu_name' => 'Depoimento Home',
          'add_new' => 'Add Depoimentos',
          'add_new_item' => 'Add New Depoimentos',
          'edit' => 'Edit',
          'edit_item' => 'Edit Depoimentos',
          'new_item' => 'New Depoimentos',
          'view' => 'View Depoimentos',
          'view_item' => 'View Depoimentos',
          'search_items' => 'Search Depoimento',
          'not_found' => 'No Depoimento Found',
          'not_found_in_trash' => 'No Depoimento Found in Trash',
          'parent' => 'Parent Depoimentos',
		),
	));
    
register_post_type(
	'page-depoimentos', array(   
		'label' => 'Pag. Depoimentos',
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
			  'name' => 'Pag. Depoimentos',
			  'singular_name' => 'Depoimento',
			  'menu_name' => 'Pag. Depoimentos',
			  'add_new' => 'Add Depoimento',
			  'add_new_item' => 'Add New Depoimento',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Depoimento',
			  'new_item' => 'New Depoimento',
			  'view' => 'View Depoimento',
			  'view_item' => 'View Depoimento',
			  'search_items' => 'Search Pag. Depoimentos',
			  'not_found' => 'No Pag. Depoimentos Found',
			  'not_found_in_trash' => 'No Pag. Depoimentos Found in Trash',
			  'parent' => 'Parent Depoimento',
		),
	)
);

register_post_type(
    'imprensa', array(   
        'label' => 'Imprensa',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => ''),
        'query_var' => true,
        'supports' => array('title','editor','thumbnail'),
        'labels' => array (
          'name' => 'Imprensa',
          'singular_name' => 'Imprensa',
          'menu_name' => 'Imprensa',
          'add_new' => 'Adicionar Imprensa',
          'add_new_item' => 'Novo Imprensa',
          'edit' => 'Editar',
          'edit_item' => 'Editar Imprensa',
          'new_item' => 'Novo ítem Imprensa',
          'view' => 'Ver',
          'view_item' => 'Ver Imprensa',
          'search_items' => 'Procurar em Imprensa',
          'not_found' => 'Nenhum ítem encontrado',
          'not_found_in_trash' => 'Nenhum ítem Imprensa encontrado na lixeira',
          'parent' => 'Parent Imprensa',
		 ),
	) 
);

register_post_type(
    'curriculo', array(  
    'label' => 'Currículo',
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
              'name' => 'Currículo',
              'singular_name' => 'Currículo',
              'menu_name' => 'Currículo',
              'add_new' => 'Add Currículo',
              'add_new_item' => 'Add New Currículo',
              'edit' => 'Edit',
              'edit_item' => 'Edit Currículo',
              'new_item' => 'New Currículo',
              'view' => 'View Currículo',
              'view_item' => 'View Currículo',
              'search_items' => 'Search Currículo',
              'not_found' => 'No Currículo Found',
              'not_found_in_trash' => 'No Currículo Found in Trash',
              'parent' => 'Parent Currículo',
         ),
     ) 
);

register_post_type(
    'boxnutricao', array(   
        'label' => 'Box Home',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => ''),
        'query_var' => true,
        'supports' => array('title','editor','thumbnail'),
        'labels' => array (
          'name' => 'Box Home',
          'singular_name' => 'Box Home',
          'menu_name' => 'Box Home',
          'add_new' => 'Adicionar Box Home',
          'add_new_item' => 'Novo Box Home',
          'edit' => 'Editar',
          'edit_item' => 'Editar Box Home',
          'new_item' => 'Novo ítem Box Home',
          'view' => 'Ver',
          'view_item' => 'Ver Box Home',
          'search_items' => 'Procurar em Box Home',
          'not_found' => 'Nenhum ítem encontrado',
          'not_found_in_trash' => 'Nenhum ítem Box Home encontrado na lixeira',
          'parent' => 'Parent Box Home',
		 ),
	) 
);

register_post_type(
	'receitas', array(	
		'label' => 'Receitas',
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
			  'name' => 'Receitas',
			  'singular_name' => 'Receita',
			  'menu_name' => 'Receitas',
			  'add_new' => 'Add Receita',
			  'add_new_item' => 'Add New Receita',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Receita',
			  'new_item' => 'New Receita',
			  'view' => 'View Receita',
			  'view_item' => 'View Receita',
			  'search_items' => 'Search Receitas',
			  'not_found' => 'No Receitas Found',
			  'not_found_in_trash' => 'No Receitas Found in Trash',
			  'parent' => 'Parent Receita',
		),
	) 
);



function coment_func( $atts ) {
	extract( shortcode_atts( array(
		'conteudo' => NULL,
	), $atts ) );

	return "<blockquote style=\"margin-top:86px; color:#7A7A7A;\"><span></span>{$conteudo}</blockquote>";
}
add_shortcode( 'citacao', 'coment_func' );





function limitar($string, $tamanho, $encode = 'UTF-8') {
    $string = strip_tags($string);
    if( strlen($string) > $tamanho )
        $string = mb_substr($string, 0, $tamanho - 3, $encode) . ' ...';
    else
        $string = mb_substr($string, 0, $tamanho, $encode);
 
    return $string;
}
?>
<?php
/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);

function my_standard_settings($position, $form_id){

// Create settings on position 25 (right after Field Label)

if($position == 25){
?>

<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Texto Placeholder

<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Digite o texto placeholder para este campo.">(?)</a>

</label>

<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">

</li>
<?php
}
}

/* Now we execute some javascript technicalitites for the field to load correctly */

add_action("gform_editor_js", "my_gform_editor_js");

function my_gform_editor_js(){
?>
<script>
//binding to the load field settings event to initialize the checkbox
jQuery(document).bind("gform_load_field_settings", function(event, field, form){
jQuery("#field_placeholder").val(field["placeholder"]);
});
</script>

<?php
}

/* We use jQuery to read the placeholder value and inject it to its field */

add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);

function my_gform_enqueue_scripts($form, $is_ajax=false){
?>
<script>

jQuery(function(){
<?php

/* Go through each one of the form fields */

foreach($form['fields'] as $i=>$field){

/* Check if the field has an assigned placeholder */

if(isset($field['placeholder']) && !empty($field['placeholder'])){

/* If a placeholder text exists, inject it as a new property to the field using jQuery */

?>

jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');

<?php
}
}
?>
});
</script>
<?php
}
?>
