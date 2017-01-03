<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8">
    
    <script language= "JavaScript">
    	location.href="http://conectedesign.com.br/browser_old/"  
  	</script>
    
<![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="no-js">
<!--<![endif]-->
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
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
<meta name="author" content="Conecte Estudio Design" />
<meta name="viewport" content="width=1032;"/>
<meta name="description" content="Personalizando com Charme. Festas Personalizadas: o tema para sua festa como você imaginou; Papelaria Pessoal: cartões, etiquetas e tags; Programação Visual: da logotipo às aplicações; Casamentos: identidade no convite e decoração; Photobooks: para guardar "aquele momento" para sempre; Álbum do Bebê: para registrar todas as novidades do seu pequeno.">
<meta name="keywords" content="adulto, album, aplicacoes, baby, bebe, blog, cartoes, br, casamento, casamentos, charme, convite, decoracao, design, duvidas, etiquetas, facil, festa, festas, guardar, idea, identidade, imaginou, irmaos, logotipo, menina, menino, novidades, orcamento, papelaria, pequeno, personalizadas, pessoal, photobook, programacao, registrar, revenda, studio, tags, tema, visite, visual">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/js/lightbox/themes/evolution/jquery.lightbox.ie6.css">
<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/modernizr-2.6.1.min.js"></script>

<!--[if  IE 8]>

		<style type="text/css">

			#Menu {
                zoom: 1;
                margin-left: 0px;
                left: 0px;
            }
            #Menu li.drop ul{
            	background-color: #97CBBC;
            }
            #Home{
            	zoom: 1 !important;
            }
            .mainpage h1, .mainpage ul{
            	margin-left: 0px;
                right: 0;
            }
            #contato .form  li .wpcf7-not-valid-tip-no-ajax{
				margin-bottom: 15px;
			}

		</style>

	<![endif]-->

<!--[if  IE 9]>

		<style type="text/css">

			#Menu {
                zoom: 1;
                margin-left: 0px;
                left: 0px;
            }
            #Menu li.festa {
                background-position-x: -78px;
            }
            #Slider .grid_19{
            	zoom: 1;
            }
            #Home{
            	zoom: 1 !important;
            }
            .mainpage h1, .mainpage ul{
            	margin-left: 0px;
                right: 0;
            }

		</style>

	<![endif]-->

</head>

<body onContextMenu="return false" ondragstart= "return false">
<!--[if lt IE 7]>

            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>

        <![endif]-->

<div id="wrap">
<div class="traco_top"></div>
<header class="container_24 clearfix" id="header"> <a id="Logo" href="<?php echo bloginfo('url');?>" class="ir grid_5">
  <h1 >Idea Studio Design</h1>
  </a>
  <?php 
			$args = array(
				  'theme_location'  => 'Idea',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'grid_19', 
				  'container_id'    => 'Menu',
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
</header>
