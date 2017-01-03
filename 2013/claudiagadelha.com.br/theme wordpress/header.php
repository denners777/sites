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
<meta name="copyright" content="Copyright www.claudiagadelha.com.br"/>
<meta name="robots" content="all"/>
<meta name="expires" content="never" />
<meta name="language" content="pt-br"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="author" content="Conecte Estudio Design"/>
<meta name="viewport" content="width=1200;"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/assets/icon/favicon.ico" />
<link rel="apple-touch-icon-precomposed" href="<?php echo bloginfo('template_url');?>/assets/icon/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo bloginfo('template_url');?>/assets/icon/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo bloginfo('template_url');?>/assets/icon/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo bloginfo('template_url');?>/assets/icon/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo bloginfo('template_url');?>/assets/icon/apple-touch-icon-57x57-precomposed.png">
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css"/>
<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>

<body>

<!--[if lt IE 7]>

            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>

        <![endif]-->

<div id="wrap">

<!-- HEADER -->

<header id="header">
  <div class="marquize">
    <div class="container_12 clearfix">
      <div class="grid_12 flores-top">
      </div>
    </div>
    <div class="container_12 clearfix">
      <div class="grid_3">
        <div class="traco left">
        </div>
      </div>
      <div class="grid_6">
        <hgroup>
          <a href="<?php echo bloginfo('url');?>" class="ir logo">
            <h1>Claudia Gadelha</h1>
          </a>
          <h2 class="center">PHOTOGRAPHER</h2>
        </hgroup>
      </div>
      <div class="grid_3">
        <div class="traco right">
        </div>
      </div>
    </div>
  </div>
  <?php 
	$args = array(
		  'theme_location'  => 'menu-princ',
		  'menu'            => 'menu-principal', 
		  'container'       => 'nav', 
		  'container_class' => 'container_12 clearfix', 
		  'container_id'    => 'menu',
		  'menu_class'      => '',
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
</header>

<!-- /HEADER -->