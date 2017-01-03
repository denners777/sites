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
<head>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta http-equiv="cache-control" content="public"/>
<title>
<?php if(is_home() || is_front_page()) { echo bloginfo('name'); } else { wp_title('&bull;','true','right'); bloginfo('name'); } ?>
</title>
<link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
<?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); wp_head(); ?>
<meta name="Distribution" content="Global"/>
<meta name="Rating" content="General"/>
<meta name="Revisit-after" content="1 Day"/>
<meta name="Googlebot" content="all"/>
<meta name="copyright" content="Copyright www.medhelp.com.br"/>
<meta name="robots" content="all"/>
<meta name="expires" content="never" />
<meta name="language" content="pt-br"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="author" content="Conecte Estudio Design"/>
<meta name="viewport" content="width=960;"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<link rel="apple-touch-icon-precomposed" href="<?php echo bloginfo('template_url');?>/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo bloginfo('template_url');?>/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo bloginfo('template_url');?>/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo bloginfo('template_url');?>/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo bloginfo('template_url');?>/apple-touch-icon-57x57-precomposed.png">
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css"/>

<!--[if IE 8]>         
<style>
	.quest .button{
    	padding-bottom: 10px;
    }
    .como_funciona .button {
    	top: 5px;
        background-color: #2078BE;
    }

</style>
<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .boxes{
    	background:#2078BE;
    }
  </style>
<![endif]-->
<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

<!-- Copyright 2001, 2002, 2003, 2004, 2005 Macromedia, Inc. All rights reserved. -->

</head>

<body>
<!--[if lt IE 7]>
  <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or 
  <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<!-- WRAP -->
<div id="wrap">
<!-- HEADER -->
<header id="header">
  <div class="container_24 clearfix">
    <a class="grid_8 logo ir" href="<?php echo bloginfo('url');?>">
      <h1>Med Help - Medicamentos Importados</h1>
    </a>
    <div class="grid_8 prefix_1">
      <p><strong>ASSESSORIA</strong> e <strong>CONSULTORIA</strong> <br />
      em importação de medicamentos</p>
    </div>
    <div class="grid_7">
      <div class="alpha grid_6 prefix_1 omega">
        <span class="mark">Consulte seu medicamento</span>
      </div>
      <div class="alpha grid_4 prefix_1 tels">
        <span class="tel"><small>21</small> 2215 - 6097</span>
        <span class="tel"><small>21</small> 2224 - 5086</span>
      </div>
      <figure class="grid_2 omega"><img src="<?php echo bloginfo('template_url');?>/assets/img/photo-tel.png" /></figure>
    </div>
  </div>
  <div id="menu">
    <?php 
			$args = array(
				  'theme_location'  => 'medcel',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'menu', 
				  'container_id'    => '',
				  'menu_class'      => 'container_24 clearfix',
				  'menu_id'         => '', 
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				  'depth'           => 0,
				);
				
				wp_nav_menu( $args );
	?>
  </div>
</header>
<!-- /HEADER -->
