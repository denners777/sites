<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" media="all and (orientation:portrait)" href="<?php echo bloginfo('template_url');?>/assets/css/portrait.css">
<link rel="stylesheet" media="all and (orientation:landscape)" href="<?php echo bloginfo('template_url');?>/assets/css/landscape.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/js/selectyze/css/Selectyze.jquery.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/js/colorbox/colorbox.css">
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div class="LinhaAzul"></div>
<header class="container_13 clearfix">
	<div class="grid_9" id="TopoTel"> <span class="end">Rua República do Peru, 362 / 404 - Copacabana - RJ</span> <span>Tels: 55 (21) 2235.9798 e (21) 3564.7530</span> </div>
	<div class="grid_3" id="Logo"> <a href="<?php bloginfo('home');?>" class="ir">
		<h1>YAFOtuor</h1>
		</a> </div>
            <?php 
			$args = array(
				  'theme_location'  => 'Yafo-tour',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'grid_9 gradient', 
				  'container_id'    => 'Menu',
				  'menu_class'      => '',
				  'menu_id'         => '', 
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
				  'depth'           => 0,
				);
				
				wp_nav_menu( $args );
?>
</header>