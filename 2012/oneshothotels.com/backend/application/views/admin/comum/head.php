<!doctype html>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if IE 9]>    <html lang="en-us" class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title><?php echo $PageTitulo; ?></title>

  		<meta name="description" content="">
  		<meta name="author" content="Luiz Vinicius - luiz.vinicius73@gmail.com">

	<!-- iPhone, iPad and Android specific settings -->

		<meta name="viewport" content="width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<!--                <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">-->
                 <?php
                 $Path = 'assets/adminica/';
                 $CSS = array(
                     'styles/adminica/reset.css',
                     'styles/plugins/all/plugins.css',
                     'styles/adminica/all.css',
                     //'assets/adminica/styles/themes/layout_switcher.css',
                     'styles/themes/nav_stacks.css',
                     'styles/themes/theme_blue.css',
                     'styles/themes/bg_honeycomb.css',
                     'mystyle.css',
                     'styles/adminica/colours.css'
                 );
                 echo link_tag_array_css($CSS,$Path);
                // echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>';
                 echo script_tag($Path.'scripts/plugins-min.js');
                 echo script_tag($Path.'scripts/adminica/adminica_all-min.js');
                 ?>
                <link href="<?php echo base_url($Path.'images/interface/iOS_icon.png'); ?>" rel="apple-touch-icon">
		</head>
	<body>