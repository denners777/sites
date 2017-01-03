<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" >
<meta charset="utf-8">
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
<meta name="description" content="Estabelecida há mais de 18 anos em Botafogo, nossa clínica possui equipe de profissionais altamente qualificados, equipamentos de última geração e amplas instalações, tudo para o seu conforto e satisfação.NOSSA MAIOR PROPAGANDA É O NOSSO CLIENTE!">
<meta name="keywords" content="altamente, amplas, botafogo, cliente, clinica, cob, conforto, consulta, contato, direitos, equipamentos, equipe, especialidades, estabelecida, estrutura, geracao, instalacoes, marque, odontologica, possui, profissionais, propaganda, qualificados, reservados, responsavel, satisfacao, tecnica, ultima">
<meta name="author" content="Conecte Estudio Design" />
<meta name="viewport" content="width=984;"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/jquery.lightbox.ie6.css"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo bloginfo('template_url');?>assets/ico/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo bloginfo('template_url');?>assets/ico/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo bloginfo('template_url');?>assets/ico/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo bloginfo('template_url');?>assets/ico/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo bloginfo('template_url');?>assets/ico/apple-touch-icon-precomposed.png">

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div id="wrap">
<header id="header">
  <div class="barra_top gradient">
    <nav class="idioma container_24">
      <?php dynamic_sidebar('idiomas');?>
      <!--<ul>
        <li><a href="javascript:;" class="pt"></a></li>
        <li><a href="javascript:;" class="en"></a></li>
      </ul> -->
    </nav>
  </div>
  <div class="bg_header">
    <div class="container_24 clearfix box_header2">
      <div class="grid_6"> <a href="<?php echo bloginfo('url');?>" class="logo ir">
        <h1>COB - Clínica Odontológica Botafogo</h1>
        </a> 
        <?php 
			$args = array(
				  'theme_location'  => 'Cobodonto',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'menu-princ', 
				  'container_id'    => '',
				  'menu_class'      => '',
				  'menu_id'         => '', 
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'items_wrap'      => '<ul>%3$s</ul>',
				  'depth'           => 0,
				);
				
				wp_nav_menu( $args );
		?>
      </div>
      <div class="grid_18"> 
        <!-- #Slider -->
        <div id="Slider"> 
          <!-- .items -->
          <div class="items"> 
          <?php
			 $endereco_url = $_SERVER['REQUEST_URI'];
			 $end = explode('/',$endereco_url);
			 ?>
          <?php
		  	  var_dump($end);
			  $args = array('pagename' => $end[1]);		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		   ?>
            <!--Items -->
            <div class="item">
            <?php $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=693&h=347&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>
              <figure><img src="<?php echo $IMG; ?>" /></figure>
            </div>
            <!--./Item --> 
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <!-- /.items -->
          <div class="legend2"> 
          <span class="title">Marque uma consulta </span> 
          <span class="tel"><span class="icon-tel"></span>(21) 2542-4548</span> 
        </div>
        <!-- /#Slider --> 
      </div>
    </div>
  </div>
</header>