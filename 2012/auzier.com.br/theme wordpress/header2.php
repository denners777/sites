<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         

<html class="no-js lt-ie9 lt-ie8"> 
<script language= "JavaScript">
    location.href="http://conectedesign.com.br/browser_old/"  
  </script>

<![endif]-->

<!--[if IE 8]>         
	<html class="no-js lt-ie9"> 
    <style type="text/css">
    	.grid_12.banner{
        	display:block;
        }
  	</style>
<![endif]-->

<!--[if gt IE 8]><!-->

<html class="no-js">
<!--<![endif]-->
<head>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="cache-control" content="public">
<title>
<?php if(is_home() || is_front_page()) { 

echo bloginfo('name'); ?>
<?php } else { ?>
<?php wp_title('&bull;','true','right'); bloginfo('name'); ?>
<?php } ?>
</title>
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<?php

if (is_singular() && get_option('thread_comments'))

    wp_enqueue_script('comment-reply'); 

wp_head();

?>
<meta name="Distribution" content="Global">
<meta name="Rating" content="General">
<meta name="Revisit-after" content="1 Day">
<meta name="Googlebot" content="all" />
<meta name="copyright" content="Copyright www.auzier.com.br">
<meta name="robots" content="all" />
<meta name="expires" content="never" />
<meta name="language" content="pt-br" />
<meta name="description" content="Auzier Soluções Tensionadas conta com arquitetos experientes e capacitados, bem como com fornecedores das mais conceituadas marcas no Brasil e no mundo, tornando seu projeto diferenciado.
Empresa especializada em soluções tensionadas para arquitetura nos seguimentos: residenciais, comerciais, corporativos, shoppings, hospitais, entre outros.
Confiança, capacidade técnica, qualidade e satisfação, essas são as nossas metas. Estamos no Rio de Janeiro e atendemos em todo território nacional.">
<meta name="keywords" content="arquitetura, auzier, capacitados, cedidas, diferenciado, direitos, facil, hospitais, iluminacao, imagens, limpa, membrana, metas, obra, pelicula, projeto, pvc, quadros, raios, reservados, residenciais, revestimento, satisfacao, ,serge-ferrari, servicos, shoppings, solucao, solucoes, tensionadas, tensoestrutura, territorio, todo, tornando, tridimensionais">
<meta name="author" content="Conecte Estudio Design" />
<meta name="viewport" content="width=1024;"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<meta name="description" content="">
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!--[if lt IE 9]>
    <script src="assets/js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
<![endif]-->
<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/css/lightbox.ie6.css" />
<![endif]-->
<style type="text/css">
	@-moz-document url-prefix() { 
	  .grid_12.banner{
        	display:block;
        }
	}
</style>
<script src="<?php echo bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
<header id="header">
  <div class="borda_sup"></div>
  <?php 
			$args = array(
				  'theme_location'  => 'Auzier',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'menu_sup', 
				  'container_id'    => 'menu',
				  'menu_class'      => '',
				  'menu_id'         => '', 
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'items_wrap'      => '<ul id=\"%1$s\" class="%2$s">%3$s</ul>',
				  'depth'           => 0,
				);
				
				wp_nav_menu( $args );
	?>
  <div class="conteiner_logo"> <a href="<?php echo bloginfo('url');?>" class="logo ir">
    <h1>Auzier - Soluções Tensionadas em Arquitetura</h1>
    </a> </div>
</header>
