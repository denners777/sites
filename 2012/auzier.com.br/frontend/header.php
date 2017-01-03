<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="cache-control" content="public">
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
<meta name="author" content="Conecte Estudio Design" />
<meta name="viewport" content="width=960;"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/favicon.ico" />
<meta name="description" content="">
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

<!--[if lt IE 9]>
            <script src="assets/js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

<header id="header">
  <div class="borda_sup"></div>
  <nav class="menu_sup">
    <ul>
      <li><a>HOME</a></li>
      <li><a>SERVIÇOS</a></li>
      <li><a>PROJETOS</a></li>
      <li><a>CONTATO</a></li>
    </ul>
  </nav>
  <div class="conteiner_logo"> <a href="javascript:;" class="logo ir">
    <h1>Auzier - Soluções Tensionadas em Arquitetura</h1>
    </a> </div>
  <div class="clear"></div>
  <section class="slider">
    <div id="Slider">
      <nav> <a id="prev" class="ir">Prev</a> <a id="next" class="ir">Next</a> </nav>
      <div class="items"> 
        <!--Items -->
        <div class="item">
          <figure><img src="http://lorempixel.com/960/409/city/8"></figure>
          <article>
            <p>Estruturas loren ipisun Loren estruturas</p>
          </article>
        </div>
        <!--./Item --> 
        
        <!--Items -->
        <div class="item">
          <figure><img src="http://lorempixel.com/960/409/city/7"></figure>
          <article>
            <p>Estruturas loren ipisun Loren estruturas</p>
          </article>
        </div>
        <!--./Item --> 
        
        <!--Items -->
        <div class="item">
          <figure><img src="http://lorempixel.com/960/409/city/6"></figure>
          <article>
            <p>Estruturas loren ipisun Loren estruturas</p>
          </article>
        </div>
        <!--./Item --> 
        
      </div>
      <div class="navi clearfix"> </div>
    </div>
  </section>
</header>