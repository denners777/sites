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
    <style>
    .box_header{
    	background: #ffffff; /* Old browsers */
			/* IE9 SVG, needs conditional override of 'filter' to 'none' */
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
			background: -moz-linear-gradient(top,  #ffffff 0%, #ffffff 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #ffffff 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #ffffff 0%,#ffffff 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #ffffff 0%,#ffffff 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #ffffff 0%,#ffffff 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-8 */
    }
    </style>
<![endif]-->
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
<!--[if  IE 8]>
	<style type="text/css">
		#wrap {display:table;}
	</style>
<![endif]-->
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
    <div class="container_24 clearfix box_header">
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
       <?php 			
		  $args = array('post_type' => 'banner');		
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $images = attachments_get_attachments();
	   ?>
        <!-- #Slider -->
        <div id="Slider"> 
          <!-- .items -->
          <div class="items"> 
           <?php foreach($images as $img){ 
		  	$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=693&h=347&src='.$img['location'];
		  ?>
            <!--Items -->
            <div class="item">
              <figure><img src="<?php echo $IMG ; ?>"></figure>
            </div>
            <!--./Item --> 
            <?php } ?>
          </div>
          <!-- /.items -->
           <?php 
				$top = get_post_meta($post-> ID, 'top', true);
				$tel = get_post_meta($post-> ID, 'tel', true); 
				$bottom = get_post_meta($post-> ID, 'bottom', true);
			?>
          <div class="legenda"> <span class="title"><?php echo $top; ?></span> <span class="tel"><span class="icon-tel"></span><?php echo $tel; ?></span> <span class="content"><?php echo $bottom; ?></span> </div>
          <div class="navi clearfix"> </div>
        </div>
        <!-- /#Slider --> 
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</header>