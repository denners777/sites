<!doctype html>
<!--[if lt IE 8]>
<script language= "JavaScript">

location.href="http://conectedesign.com.br/browser_old/"

</script>
<![endif]-->

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<meta name="description" content="Sua missão é trazer para a Saúde Suplementar a qualidade e a inovação necessárias ao atendimento de clientes cujo tratamento utilize técnicas relacionadas ao transplante de células-tronco hematopoéiticas, mais conhecido como transplante de medula óssea.">
<meta name="keywords" content="armazenamento, biologica, celular, celulas, celulas-tronco, centro, clinica, coleta, coletadas, concentracao, congelamento, controle, criopreservacao, crioprotetor, crioprotetores, cristais, dentre, efeito, equipe, evitando, extracorporea, formacao, fotoferese, hematopoieticas, infusao, janeiro, laboratorio, manutencao, medcel, medicina, medula, ossea, paciente, pacientes, preservacao, procedimentos, processamento, processo, qualidade, quimioterapia, rio, saude, solutos, temperatura, temperaturas, terapia, transplante, transplantes, tratamento, viabilidade">
<meta name="author" content="Conecte Estudio Design" />
<meta http-equiv="cache-control" content="public">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicon.ico" />
<meta name="viewport" content="width=960;"/>
<link rel="stylesheet" media="all and (orientation:portrait)" href="<?php echo bloginfo('template_url');?>/assets/css/portrait.css">
<link rel="stylesheet" media="all and (orientation:landscape)" href="<?php echo bloginfo('template_url');?>/assets/css/landscape.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/style.css">
<script src="<?php echo bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>
<style>
@-moz-document url-prefix() {
 header #MenuPrincipal ul li {
 padding: 0px 14px !important;
}
}
</style>

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient,.btnA {
       filter: none !important;
    }
	header #MenuPrincipal ul li{
		padding: 0px 12px !important;
	}
  </style>
<![endif]-->

<!--[if gte IE 8]>
  <style type="text/css">
    .gradient,.btnA {
       filter: none !important;
    }
	header #MenuPrincipal ul li{
		padding: 0px 12px !important;
	}
  </style>
<![endif]-->

</head>
<body class="gradient">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="ConteinerPAGE">
<header class="container_12">
  <a href="<?php echo bloginfo('home');?>">
    <h1 class="grid_3 ir" id="Logo"> medcel Medicina Celular </h1>
  </a>
  <?php 
			$args = array(
				  'theme_location'  => 'Top',
				  'menu'            => 'menu-top', 
				  'container'       => 'nav', 
				  'container_class' => 'grid_7 prefix_2 clearfix', 
				  'container_id'    => 'MenuTop',
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
  <?php 
			$args2 = array(
				  'theme_location'  => 'Principal',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => '', 
				  'container_id'    => 'MenuPrincipal',
				  'menu_class'      => 'grid_12',
				  'menu_id'         => '', 
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'items_wrap'      => '<ul id=\"%1$s\" class="%2$s">%3$s</ul>',
				  'depth'           => 0,
				);
				
				wp_nav_menu( $args2 );
	?>
</header>
