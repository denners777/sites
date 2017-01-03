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
<title><?php if(is_home() || is_front_page()) { echo bloginfo('name'); } else { wp_title('&bull;','true','right'); bloginfo('name'); } ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
<?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); wp_head(); ?>
<meta name="Distribution" content="Global"/>
<meta name="Rating" content="General"/>
<meta name="Revisit-after" content="1 Day"/>
<meta name="Googlebot" content="all"/>
<meta name="copyright" content="Copyright www.thetahealing.com.br"/>
<meta name="robots" content="all"/>
<meta name="expires" content="never" />
<meta name="language" content="pt-br"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="author" content="Conecte Estudio Design"/>
<meta name="viewport" content="width=960;"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
<div id="wrap">
  <div id="main">
    <header id="header">
      <div class="container_24 clearfix"> <a href="<?php echo bloginfo('url');?>/" class="grid_7 logo ir">
        <h1>Theta Healing Brasil</h1>
        </a>
        <div class="prefix_11 grid_5 suffix_1">
          <div class="tels">
            <div class="icon-tel"></div>
            <div class="tel"><span>21</span> 3071 - 5533</div>
            <div class="tel"><span>21</span> 3071 - 4055</div>
          </div>
          <address>
          Travessa Carlos de Sá n°10 - Catete <br />
          Rio de Janeiro - RJ
          </address>
        </div>
        <div class="clear"></div>
        <?php 
			$args = array(
				  'theme_location'  => 'ThetaHealing',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'menu grid_18 suffix_6', 
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
    </header>