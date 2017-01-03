<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $Titulo; ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
<script src="<?php echo base_url('assets/js/libs/modernizr-2.5.3.min.js') ?>"></script>

</head>
<body>
<!--<div id="ContainerGeral"> -->
<div id="wrap">
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<header id="Header">
		<div class="FundoBranco"></div>
		<div id="BGReader">
			<div class="container_24" style="position:relative;">
				<!--Logo -->
				<div class="push_1 grid_9 FundoBranco" id="Logo">
					<h1 class="hidden">Rio Visas</h1>
                    <?php echo img('assets/img/logo.png');?>
				</div>
				<!--Bandeiras -->
				<div id="Bandeiras" class="grid_2 push_12 FundoBranco">
					<a href="<?php echo site_url('idioma/PTBR/'.$URI) ?>" class="PTBR ir">PT-BR</a>
                    <a  href="#" class="EN ir" title="Em breve">EN-UA</a>
					<!--<a  href="<?php echo site_url('idioma/EN/'.$URI) ?>" class="EN ir">EN-UA</a>-->
				</div>
				<div class="clear"></div>
				<!--Slogan -->
				<div class="push_1 grid_9" id="Slogan">
					<p><?php echo $this->lang->line('site_slogan'); ?></p>
				</div>
				<!--Endereço -->
				<div  class="push_7 grid_7" id="Endereco">
					<address>
					<?php echo $this->lang->line('adress'); ?>
					</address>
				</div>
				<div class="clear"></div>
				<!--Menu -->
				
				<nav class="grid_11" id="Menu">
                <?php $menu = $this->lang->line('menu'); ?>
					<ul>
						<li <?php if(empty($URI)){ echo 'class="ativo"'; } ?>>
							<?php echo anchor(NULL, 'HOME'); ?>
						</li>
						<li <?php if($URI=='empresa'){ echo 'class="ativo"'; } ?>>
							<?php echo anchor('empresa', $menu[0]); ?>
						</li>
						<li <?php if($URI=='servicos'){ echo 'class="ativo"'; } ?>>
							<?php echo anchor('servicos', $menu[1]); ?>
						</li>
						<li <?php if($URI=='contato'){ echo 'class="ativo"'; } ?>>
							<?php echo anchor('contato', $menu[2]); ?>
						</li>
					</ul>
				</nav>
				<!--FIM MENU -->
			</div>
		</div>
	</header>
	<!--FIM hEADER -->