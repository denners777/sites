<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<!--[if lt IE 8]>
<script language= "JavaScript">

location.href="http://conectedesign.com.br/browser_old/"

</script>
<![endif]-->
<head>
<meta name="SKYPE_TOOLBAR"content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $Titulo; ?></title>
<meta name="description" content="Desenvolvido no Instituto Villa-Lobos (Centro de Letras e Artes) da UNIRIO (Universidade Federal do Estado do Rio de Janeiro, letras, ).">
<meta name="keywords" content="projeto, musica, gravada, artes, atividades, centro, contato, desenvolvido, direitos, discografias, equipe, estado, federal, instituto, janeiro, pagina, reservados, resumo, rio, unirio, universidade, villa-lobos">
<meta name="author" content="Conecte Estudio Design" />
<meta http-equiv="cache-control" content="public">
<meta name="viewport" content="width=960"/>
<link rel="stylesheet" href="<?php echo base_url('assets/site/css/styles.css'); ?>">
<!--<link rel="stylesheet" href="<?php echo base_url('assets/site/css/landscape.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/site/css/portrait.css'); ?>">-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('build/mediaelementplayer.min.css'); ?>">
<script src="<?php echo base_url('assets/site/js/libs/modernizr-2.5.3.min.js'); ?>"></script>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url('favicon.ico') ?>">
<link rel="icon" href="<?php echo base_url('favicon.ico') ?>" />
<link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico') ?>" />
<!--[if IE 8]>
<style>
.box_projeto, #commom .box_commom{
	background-color:#FFF;
}
</style>
<![endif]-->
</head>
<body>
<div id="wrap"> 
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
    <div class="bg_top">
      <div class="container_16">
        <!--<div class="grid_2 prefix_14" id="idiomas"><a href="<?php echo site_url('idioma/PTBR/'.$URI) ?>"><img src="<?php echo base_url('assets/site/img/idioma_portugues.png') ?>" width="22" height="22" title="Português"></a> | <a href="<?php echo site_url('idioma/EN/'.$URI) ?>"><img src="<?php echo base_url('assets/site/img/idioma_ingles.png') ?>" width="21" height="22" title="English"></a></div>-->
      </div>
    </div>
    <div class="bg_logo">
      <div class="clearfix container_16"><a href="<?php echo site_url() ?>" class="logo ir grid_16">Projeto Música Gravada</a></div>
    </div>
    <div class="container_16" id="menu">
      <div class="grid_6 prefix_10">
        <nav class="menu">
          <ul>
            <li class="drop"><?php echo anchor(NULL, 'Projeto'); ?>
              <ul>
                <li><?php echo anchor('discografia', 'Discografias'); ?></li>
                <li><?php echo anchor('atividades', 'Atividades'); ?></li>
              </ul>
            </li>
            <li class="drop"><a href="javascript:;">Sobre</a>
              <ul>
                <li><?php echo anchor('resumo', 'Resumo'); ?></li>
                <li><?php echo anchor('equipe', 'Equipe'); ?></li>
              </ul>
            </li>
            <li><?php echo anchor('contato', 'Contato'); ?></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>