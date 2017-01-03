<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32776052-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php if(is_home() || is_front_page()) { 
echo "Centro del Danza Maria Rosa &bull;"; bloginfo('name'); ?>
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
<link rel='stylesheet' type='text/css' href='<?php bloginfo('template_url');?>/assets/js/libs/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='<?php bloginfo('template_url');?>/assets/js/libs/fullcalendar/fullcalendar.print.css' media='print' />
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/js/libs/qtip/jquery.qtip.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/js/libs/jquery-ui/css/jquery-ui-1.8.21.custom.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/lightbox/css/estilo.css">
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
	#MenuPrincipal{
		font-size:20px;
	}
	#MenuPrincipal ul li{
		padding: 0px 12px 0px 12px;		
	}
  </style>
<![endif]-->
<script src="<?php bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>
<script type="text/javascript">var switchTo5x=false;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-d57bb170-adbc-8605-93f8-8482ec8433e5"}); </script>
</head>
<body <?php //wp_body(); ?>>

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<header class="container_12 clearfix"> 
	<div id="Matriculese" class="prefix_5">
    	<a rel="#Matricula" href="javascript:;" class="BOX btnCinza"><span></span>¿Quieres Matricularte?</a>
    </div>
	<!--Logo -->
	<div class="grid_3" id="Logo"><a href="<?php bloginfo('home');?>">
		<h1 class="ir">Centro de Danza Maria Rosa</h1>
		</a></div>
	<!-- /Logo -->
	
	<div class=" prefix_2 grid_7"> 
		<!-- #HeaderContato -->
		<div id="HeaderContato">  <?php dynamic_sidebar('telefones');?> </div>
		<!--/#HeaderContato --> 
		<!-- #Social -->
		<nav id="Social"> <a class="ir iconFacebook" href="http://www.facebook.com/pages/Centro-de-Danza-Maria-Rosa/161123637345674" target="_blank">Facebook</a> <a class="ir iconEmail" href="mailto:contacto@centrodanzamariarosa.es">Email</a> 
		    <a class="ir iconHeart BOX" rel="#ShareTHIS" href="javascript:;">Coracao</a> </nav>
		<!-- /#Social --> 
	</div>
	<div class="clear"></div>
	<!-- #menu -->
	<nav id="MenuPrincipal" class="grid_12">
    <?php dynamic_sidebar('menu-principal');?>
		
	</nav>
	<!-- /#menu --> 
</header>