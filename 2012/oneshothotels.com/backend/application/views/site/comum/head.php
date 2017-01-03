<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo strtolower($IDIOMA); ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo strtolower($IDIOMA); ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo strtolower($IDIOMA); ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo strtolower($IDIOMA); ?>">
    <!--<![endif]--><head>
        <meta charset="utf-8">

        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
               More info: h5bp.com/i/378 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $PageTitulo; ?></title>
        <?php
        foreach ($MetaTags as $Key => $Value) {
            echo meta($Key, $Value);
        }
        ?>
        
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!--<meta name="viewport" content="width=320;minimum-scale=0.7,maximum-scale=1; user-scalable=1.0;">
        <meta name="viewport" content="width=750;minimum-scale=0.7,maximum-scale=0.7; user-scalable=1.0;">  -->
        <meta http-equiv="cache-control" content="no-cache">
        <?php echo link_tag(SITEASETS . 'css/style_page.css'); ?>
        <link rel="stylesheet" media="all and (orientation:landscape)" href="http://public.oneshothotels.com/TESTE/oneshot-hotels/assets/site/css/landscape.css">
        <link rel="stylesheet" media="all and (orientation:portrait)" href="http://public.oneshothotels.com/TESTE/oneshot-hotels/assets/site/css/portrait.css">
        <noscript>
        <?php echo link_tag(SITEASETS . 'css/mobile.min.css'); ?> 
        </noscript>
        <script src="<?php echo $BASEASSETS ?>/js/libs/modernizr-2.5.3.min.js"></script>
        <style>
            :root .row1, .row2 { min-width: 1200px \0'/'IE9; }  /* IE9 */
            @media(max-width:720px) {
                :root .row1, .row2 { min-width: 320px \0'/'IE9; }  /* IE9 */
            }
        </style>
        <script>
            // Edit to suit your needs.
            var ADAPT_CONFIG = {
                // Where is your CSS?
                path: '<?php echo $BASEASSETS ?>/css/960/',

                // false = Only run once, when page first loads.
                // true = Change on window resize and page tilt.
                dynamic: true,

                // First range entry is the minimum.
                // Last range entry is the maximum.
                // Separate ranges by "to" keyword.
                range: [
                    '0px    to 720px  = mobile.min.css',
                    '720px  to 1220px  = 1200.min.css',
                    //'961px  to 1200px = 960.fluid.css',
                    '1220px to 2540px = 1200.min.css',
                    //'1601px to 1940px = 1200.min.css',
                    //'1940px to 2540px = 1200.min.css',
                    //'2540px           = 1200.min.css'
                ]
            };
        </script>
        <script src="<?php echo $BASEASSETS ?>/js/adapt.js"></script>
    </head>
    <?php
    $server = $_SERVER['SERVER_NAME'];
    $endereco = $_SERVER ['REQUEST_URI'];
    $URL_FORM = "http://" . $server . $endereco;
    ?>
    <body>
        <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
               chromium.org/developers/how-tos/chrome-frame-getting-started --> 
        <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
        <div id="wrap">
            <header class="container_12 header clearfix"> 
                <a id="LogoHome" href="#" class="logo grid_3"> 
                    <?php echo img("{$BASEASSETS}/img/logo.jpg"); ?> 
                    <span class="menulogo">&nbsp;</span>
                </a>
                <div class="grid_5">
                    <div class="menus">
                        <nav class="map">
                            <ul>
                                <?php
                                foreach ($Migalhas as $Link) {
                                    echo '<li>', $Link, ' / </li>';
                                }
                                ?>
                            </ul>
                        </nav>
                        <h1><?php echo $SessaoTitulo ?></h1>
                        <nav class="menu_princ">
                            <?php echo ul($MenuTop); ?>
                        </nav>
                    </div>
                </div>
                <a class="nome grid_2" href="<?php echo site_url('eventos') ?>"> 
                    <span>ONE SHOT</span>
                    <span class="cota">PROJECTS</span>
                </a> 
                <a class="reserva grid_2"> 
                    <span><?php echo lang('home_reservas'); ?></span> 
                </a>
                <div class="hide container_12 aj">
                    <h1><?php echo $SessaoTitulo ?></h1>
                    <a class="button ir">Menu</a> 
                </div>
                <div class="hide container_12" style="height:31px;"> 
                    <a class="reserva2"> 
                        <span><?php echo lang('home_reservas'); ?></span> 
                    </a>
                    <div class="barra_hide">
                        <div class="flags"> 
                            <a href="<?php echo site_url($this->lang->switch_uri('es')); ?>" class="ir flag-es"> Espanhol </a> 
                            <a href="<?php echo site_url($this->lang->switch_uri('en')); ?>" class="ir flag-en"> Ingles </a> 
                        </div>

                        <div class="newsletter"> <a class="ir"> Newsletter </a> </div>
                        <form id="formG" class="form-inline" action="http://oneshothotels.com/mkt/onemail.php?IDIOMA=<?php echo $IDIOMA; ?>" method="post">
                            <div> <span><?php echo lang('news_frase'); ?></span>
                                <input name="name" type="text"  class="input-medium" placeholder="<?php echo lang('news_nome'); ?>">
                                <input name="group" type="hidden"  value="140">
                                <input name="subscribe" type="hidden"  value="true">
                                <input name="email" type="email" class="input-medium" placeholder="E-mail">
                                <input name="" type="submit" value="OK" class="btn-black">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </header>
            <div class="clear"></div>
            <div class="container_12 barra_top" style="margin-top: -26px;">
                <div class="flags"> <a href="<?php echo site_url($this->lang->switch_uri('es')); ?>" class="ir flag-es"> Espanhol </a> <a href="<?php echo site_url($this->lang->switch_uri('en')); ?>" class="ir flag-en"> Ingles </a> </div>
                <form id="formP" class="form-inline" action="http://oneshothotels.com/mkt/onemail.php?IDIOMA=<?php echo $IDIOMA; ?>" method="post">
                    <div> <span><?php echo lang('news_frase'); ?></span>
                        <input name="name" type="text"  class="input-medium" placeholder="<?php echo lang('news_nome'); ?>">
                       <input name="group" type="hidden"  value="140">
                                <input name="subscribe" type="hidden"  value="true">
                        <input name="email" type="email" class="input-medium" placeholder="E-mail">
                        <input name="" type="submit" value="OK" class="btn-black">
                    </div>
                </form>
                <div class="newsletter"> <a class="ir"> Newsletter </a> </div>
            </div>

            <div class="hotelx container_12">
                <?php echo (isset($HotelDestaques)) ? $HotelDestaques : NULL; ?>
            </div>