<?php

add_theme_support('post-thumbnails');
add_theme_support('nav-menus');


register_nav_menu('primary', 'menu-principal');

if (function_exists('register_sidebar')) {	
	
	register_sidebar(array(
        'name'  			=> 'Formulário',
        'id' 				=> 'form',
        'before_widget'    	=> NULL,
        'after_widget'    	=> NULL,
        'before_title'    	=> NULL,
        'after_title'    	=> NULL,
    ));
}

function limitar($string, $tamanho, $encode = 'UTF-8') {
    $string = strip_tags($string);
    if( strlen($string) > $tamanho )
        $string = mb_substr($string, 0, $tamanho, $encode) . '...';
    else
        $string = mb_substr($string, 0, $tamanho, $encode);
 
    return $string;
}
