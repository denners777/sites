<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="utf-8">
        <title>Área Admin Projeto Música Gravada</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo base_url('assets/admin/css/bootstrap.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/jquery.lightbox.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/jquery.lightbox.ie6.css') ?>">
        <style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
.sidebar-nav {
	padding: 9px 0;
}
.tab {
	padding-top: 40px;
}
.img {
	margin-left: 116px;
}
.help-block {
	padding-bottom: 6px;
}
</style>
        <link href="<?php echo base_url('assets/admin/css/bootstrap-responsive.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/jq-ui/jquery-ui-1.8.16.custom.css') ?>">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

        <!-- Le fav and touch icons -->
        </head>

        <body>
        <header>
          <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
              <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#"> Projeto Musica Gravada </a> 
                <!--<div class="btn-group pull-right">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i> Usuário <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        Profile
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        Sair
                                    </a>
                                </li>
                            </ul>
                        </div>-->
                <div class="nav-collapse">
                  <ul class="nav">
                    <?php foreach ($TopLinks as $Link){ ?>
                    <li class="<?php echo (@$URI[2]==$Link['slug']) ? 'active' : NULL ; ?>"> <?php echo anchor('admin/'.$Link['slug'],$Link['label']) ?> </li>
                    <?php  } ?>
                    <li>
                      <div class="btn-group"> 
                      	<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"> Páginas <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('admin/paginas/editar/home'); ?>">Projeto</a></li>
                          <li><a href="<?php echo site_url('admin/paginas/editar/atividades'); ?>">Atividades</a></li>
                          <li><a href="<?php echo site_url('admin/paginas/editar/resumo'); ?>">Resumo</a></li>
                          <li><a href="<?php echo site_url('admin/paginas/editar/equipe'); ?>">Equipe</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!--/.nav-collapse --> 
              </div>
            </div>
          </div>
        </header>
