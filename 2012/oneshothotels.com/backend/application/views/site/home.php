<!DOCTYPE html>
<html lang="<?php $IDIOMA; ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo $PageTitulo; ?></title>
        <?php
        foreach ($MetaTags as $Key => $Value) {
            echo meta($Key, $Value);
        }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Le styles -->

        <link href="<?php echo base_url(SITEASETS . 'css/style.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(SITEASETS . 'slider/css/supersized.css'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(SITEASETS . 'slider/theme/supersized.shutter.css'); ?>" type="text/css" media="screen" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
              <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="favicon.ico">
    </head>

    <body>
        <?php
        $server = $_SERVER['SERVER_NAME'];
        $endereco = $_SERVER ['REQUEST_URI'];
        $URL_FORM =  "http://" . $server . $endereco;
        ?>
        <!--Loading display while images load-->
        <div id="loading"> &nbsp; </div>
        <div id="navBar">
            <header class="home">
                <div class="container-fluid top">
                    <div class="row-fluid ">
                        <div class="span2"> 
                            <a id="LogoHome" class="pull-left logo" href="#"> 
                                <?php echo img(SITEASETS . 'img/logo.png'); ?> 
                                <span class="menulogo">&nbsp;</span>
                            </a> 
                        </div>
                        <div class="span6">
                            <div class="menus">
                                <nav class="menu_sup">
                                    <?php echo ul($Migalhas); ?>
                                </nav>
                                <h1> <?php echo $HOMEDATA['Titulo']; ?> </h1>
                                <a class="btn-navbar"> <span class="icon-triangulo"></span> </a>
                                <nav class="menu_princ">
                                    <ul>
                                        <?php
                                        foreach ($Cidades as $Cidade) {
                                            echo '<li>', anchor($Cidade[Cidade::Slug], $Cidade[Cidade::Nome]), '</li>';
                                        }
                                        ?>
                                    </ul>
                                </nav>
                                <!--/.nav-collapse --> 
                            </div>
                        </div>
                        <div class="span2">
                            <nav class="button-top">
                                <ul>
                                    <li class="slot1"> <a href="<?php echo site_url('eventos') ?>"> ONE SHOT <br />
                                            <span>PROJECTS</span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="span2">
                            <nav class="button-down">
                                <ul>
                                    <li class="slot2"> <a href="#"> <?php echo lang('home_reservas'); ?> </a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container-fluid no-padding" style="position:relative">
                    <div id="SubHeader">
                        <div class="flags"> 
                            <a href="<?php echo site_url($this->lang->switch_uri('es')); ?>" class="ir flag-es"> Espanhol </a> 
                            <a href="<?php echo site_url($this->lang->switch_uri('en')); ?>" class="ir flag-en"> Ingles </a> 
                        </div>
                        <form id="formG" class="form-inline" action="http://oneshothotels.com/mkt/onemail.php?IDIOMA=<?php echo $IDIOMA; ?>" method="post">
                            <div>
                                <div class="div"><?php echo lang('news_frase'); ?></div>
                                <input name="name" type="text"  class="input-medium" placeholder="<?php echo lang('news_nome'); ?>">
                                <input name="group" type="hidden"  value="140">
                                <input name="subscribe" type="hidden"  value="true">
                                <input name="email" type="email"  class="input-medium" placeholder="E-mail">
                                <input name="" type="submit" value="OK" class="btn-black">
                            </div>
                        </form>
                        <div class="newsletter"> <a class="ir"> Newsletter </a> </div>
                    </div>
                    <div id="SubHeader2" class="hide1">
                        <div class="flags"> 
                            <a href="<?php echo site_url($this->lang->switch_uri('es')); ?>" class="ir flag-es"> Espanhol </a> 
                            <a href="<?php echo site_url($this->lang->switch_uri('en')); ?>" class="ir flag-en"> Ingles </a> 
                        </div>
                        <div class="newsletter"> <a class="ir"> Newsletter </a> </div>
                        <form id="formP" class="form-inline" action="http://oneshothotels.com/mkt/onemail.php?IDIOMA=<?php echo $IDIOMA; ?>" method="post">
                            <div>
                                <div class="div"><?php echo lang('news_frase'); ?></div>
                                <input name="name" type="text" class="input-medium" placeholder="<?php echo lang('news_nome'); ?>">
                                <input name="group" type="hidden"  value="140">
                                <input name="subscribe" type="hidden"  value="true">
                                <input name="email" type="email" class="input-medium" placeholder="E-mail">
                                <input name="" type="submit" value="OK" class="btn-black">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="hotels">
                    <?php echo (isset($HotelDestaques)) ? $HotelDestaques : NULL; ?>
                </div>
            </header>
            <!--/.fluid-container--> 
        </div>
<div class="altura"></div>
        <!--Control Bar-->
        <div id="controls-wrapper" class="load-item">
            <div id="controls"> <a id="play-button"><img id="pauseplay" src="<?php echo base_url(SITEASETS . 'slider/img/pause.png'); ?>"/></a> 

                <!--Slide counter
                                    <div id="slidecounter">
                                            <span class="slidenumber"></span> / <span class="totalslides"></span>
                                    </div>--> 

                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>

                <!--Navigation
                                    <ul id="slide-list"></ul>--> 

            </div>
        </div>
        <!--Thumbnail Navigation-->
        <div id="prevthumb"></div>
        <div id="nextthumb"></div>

        <!--Arrow Navigation--> 
        <a id="prevslide" class="load-item"></a> <a id="nextslide" class="load-item"></a>
        <div id="thumb-tray" class="load-item">
            <div id="thumb-back"></div>
            <div id="thumb-forward"></div>
        </div>

        <!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>

        <!--Thumb Tray button--> 
        <a id="tray-button"><img id="tray-arrow" src="<?php echo base_url(SITEASETS . 'slider/img/button-tray-up.png'); ?>"/></a>
        <div id="supersized"> </div>
        <!--<div class="empurra"></div> -->
        <footer>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span2">
                        <div class="copy"> Copyright © OneShot Hotels </div>
                    </div>
                    <div class="span7"> <a class="btn-navbar2"> <span class="nota">Más acerca de One Shot Hotels</span> <span class="icon-triangulo"></span> </a>
                        <nav class="menu_botton">
                            <?php echo ul($MenuFooter); ?>
                        </nav>
                    </div>
                    <div class="span1 redes"> 
                        <a class="twitter"> <?php echo img(SITEASETS . 'img/twitter.png'); ?> </a> 
                        <a class="facebook"> <?php echo img(SITEASETS . 'img/facebook.png'); ?> </a> 
                    </div>
                    <div class="span2 logo_artwork"> <a href="#"> <?php echo img(SITEASETS . 'img/logo_artwork.jpg'); ?> </a> </div>
                </div>
        </footer>
        <dl style="display: none" id="SliderData">
            <?php foreach ($SLIDERHOME as $Slider) { ?>
                <dt data-title="<?php echo $Slider['TITLE']; ?>"  data-info="<?php echo $Slider['DESC'][$IDIOMA]; ?>"><?php echo $Slider['IMG']; ?></dt>
            <?php } ?>
        </dl>
        <!-- Le javascript
          ================================================== --> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
        <script>window.jQuery || document.write('<script src="<?php echo base_url(SITEASETS . 'js/libs/jquery-1.7.1.min.js'); ?>"><\/script>')</script> 
        <script src="<?php echo base_url(SITEASETS . 'js/libs/bootstrap.all.min.js'); ?>"></script> 
        <script src="http://cdn.jquerytools.org/1.2.7/all/jquery.tools.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(SITEASETS . 'slider/js/jquery.easing.min.js'); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url(SITEASETS . 'slider/js/supersized.3.2.7.min.js'); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url(SITEASETS . 'slider/theme/supersized.shutter.min.js'); ?>"></script> 
        <script src="<?php echo base_url(SITEASETS . 'js/plugins.js'); ?>"></script> 
        <script src="<?php echo base_url(SITEASETS . 'js/home.js'); ?>"></script> 
        <?php echo $GOOGLEANALYTICS ?>
    </body>
</html>