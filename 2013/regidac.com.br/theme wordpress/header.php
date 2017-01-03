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
<meta name="copyright" content="Copyright www.regidac.com.br"/>
<meta name="robots" content="all"/>
<meta name="expires" content="never" />
<meta name="language" content="pt-br"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="author" content="Conecte Estudio Design"/>
<meta name="viewport" content="width=960;"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/assets/icons/favicon.ico" />
<link rel="apple-touch-icon-precomposed" href="<?php echo bloginfo('template_url');?>/assets/icons/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo bloginfo('template_url');?>/assets/icons/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo bloginfo('template_url');?>/assets/icons/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo bloginfo('template_url');?>/assets/icons/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo bloginfo('template_url');?>/assets/icons/apple-touch-icon-57x57-precomposed.png">
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css"/>
<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
<!--[if IE]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
    #header .menu ul li:first-child{
    	padding-right:60px;
    }
    .bg_painel .sombra{
    	background-position: center -758px;
    }
    .faixa_cinza .faixa_azul .item span{
    	height: 122px;
    }
    #footer{
    	height: 377px;
    }
  </style>
<![endif]-->
<!--[if IE 8]>
    <style type="text/css">
        #header .menu ul li{
        	padding-right: 42px;
        }
        .bg_boxes .boxes .linkn{
        	display: block;
            width: 90px;
            float: right;
        }
        .faixa_cinza .frase{
        	font-size: 30px;
        }
        .faixa_cinza .box_branco .link{
        	font-size: 11px;
        }
        .link{
        	background: rgb(42,170,225);
        }
    </style>
<![endif]-->
</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<!-- wrap -->
<div id="wrap">
  <!-- header -->
  <header id="header">
    <div class="blocotop">
      <div class="sombra">
      </div>
    </div>
    <div class="container_16 clearfix">
      <!-- logo -->
      <a href="<?php echo bloginfo('url');?>" class="ir logo grid_5 suffix_6">
        <h1>Regidac Informática</h1>
      </a>
      <!-- /logo -->
      <div class="grid_5">
        <div class="grid_3 push_2 alpha omega">
          <div class="boxtel">
            <span class="icon"></span>
            <span class="text">Entre em contato</span>
            <span class="tel"><small>21</small> 2221-6979</span>
          </div>
        </div>
        <div class="quest grid_5 alpha omega">
          <?php get_template_part('busca'); ?>
        </div>
      </div>
    </div>
    <!-- menu -->
    <div class="container_16 clearfix">
    <?php 
			$args = array(
				  'theme_location'  => 'regidac',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'grid_16 menu', 
				  'container_id'    => '',
				  'menu_class'      => 'clearfix',
				  'menu_id'         => '', 
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="sombra"></div>',
				  'depth'           => 0,
				);
				
				wp_nav_menu( $args );
	?>
    </div>
    <!-- /menu -->
  </header>
  <!-- /header -->
  