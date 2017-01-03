<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
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
<meta name="viewport" content="width=1165px">
<link rel="stylesheet" media="all and (orientation:portrait)" href="<?php echo bloginfo('template_url');?>/assets/css/portrait.css">
<link rel="stylesheet" media="all and (orientation:landscape)" href="<?php echo bloginfo('template_url');?>/assets/css/landscape.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/indexes.css">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/js/themes/default/jquery.lightbox.css">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/js/themes/default/jquery.lightbox.ie6.css">
<script src="<?php echo bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
</head>
<body>
<div id="wrap">
<!--[if  IE 8]>
	<style type="text/css">
		#wrap {display:table; margin-left: auto; margin-right: auto;}
	</style>
<![endif]--> 
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<header>
  <div class="container_12 clearfix"> <a href="<?php echo bloginfo('url');?>" class="grid_8 ir logo">CASSIO DAMAZIO FOTOGRAFIA</a>
    <div class="grid_4">
      <?php 
			$args = array(
				  'theme_location'  => 'Cassio',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => '', 
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
      <nav class="menu">
        <ul>
          <li class="traco"> <img src="<?php echo bloginfo('template_url');?>/assets/img/traco_menu.png" height="12"> </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
