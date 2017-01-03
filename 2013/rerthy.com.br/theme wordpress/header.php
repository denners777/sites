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
<meta name="author" content="Conecte Estudio Design" />
<meta name="viewport" content="width=device-width">
<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/960ie.css">
<![endif]-->

<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
<![endif]-->
<noscript>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/css/960ie.css">
</noscript>
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/style.css">
<script type="text/javascript">
(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)
</script>
<style>
	ul#qtranslate-2-chooser{
		list-style:none;
		padding: 0;
		margin: 0;
	}
	ul#qtranslate-2-chooser li{
		float:left;
		padding: 0px 5px;
	}
	ul#qtranslate-2-chooser li:first-child{
		border-right: 1px solid #FFF;
	}
</style>
</head>
<body>
<div id="wrap">
<!--#main -->
<div id="main">
<!--#top-->
<div id="top" class="marron">
  <div class="container_24"> 
  	<div class="grid_4 prefix_20">
		<?php dynamic_sidebar('trans');?> 
    </div>
  </div>
</div>
<!--./#top--> 

<!--#header-->
<div class="BGImg">


<header id="header" class="container_24 clearfix">
 <a href="<?php echo bloginfo('url');?>" id="logo" class="ir grid_5">
  <h1>Rerthy</h1>
  </a>
  <div class="clear"></div>
   <?php 
			$args = array(
						  'theme_location'  => 'Rerthy',
						  'menu'            => 'menu-principal', 
						  'container'       => 'nav', 
						  'container_class' => 'grid_19 prefix_5', 
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
  <!--#menu320 -->
  <div class="grid_24" id="menu320">
    <select>
    </select>
  </div>
  <!--./#menu320 --> 
</header>

</div>
<!--./#header-->