<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
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
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/styles.css">
<link rel="stylesheet" media="all and (orientation:portrait)" href="<?php echo bloginfo('template_url');?>/assets/css/portrait.css">
<link rel="stylesheet" media="all and (orientation:landscape)" href="<?php echo bloginfo('template_url');?>/assets/css/landscape.css">

<script src="<?php echo bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/favicon.ico">
<link rel="icon" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<link rel="icon" type="image/ico" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<!--[if IE 8]>
<link rel="stylesheet" href="assets/css/ie.css">
<![endif]-->
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient, .menu {
       filter: none !important ;
    }
    #main .middle .box_equipe figure {
		height:315px;
	}
  </style>
<![endif]-->
<div class="barra_top">
</div>
<div id="wrap">
  <header>
    <div class="container_16">
      <div class="prefix_1 suffix_1">
        <div class="grid_5">
          <a href="<?php echo bloginfo('url');?>" class="logo ir"> Sanches - advogados associados </a>
        </div>
        <div class="grid_5 prefix_4">
          <address>
          Av. Ataulfo de Paiva, 706 - Gr. 202<br />
          Leblon - Rio de Janeiro / RJ • CEP 22.440-033
          </address>
          <p class="tel"><img src="<?php echo bloginfo('template_url');?>/assets/img/tel.png" width="33" height="33">+55-021-2512-9982</p>
        </div>
      </div>
      <div class="prefix_1 suffix_1">
        <!-- menu -->
        <div class="grid_14">
        <?php 
			$args = array(
				  'theme_location'  => 'Sanches',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'menu gradient', 
				  'container_id'    => '',
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
        </div>
        <!-- /menu -->
      </div>
    </div>
  </header>