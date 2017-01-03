<!doctype html>
<!--[if lt IE 8]>
<script language= "JavaScript">

location.href="http://conectedesign.com.br/browser_old/"

</script>
<![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt">
<!--<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
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
<meta name="viewport" content="width=1020;"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/jq-ui/01/jquery-ui-1.8.21.custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/css/jquery.lightbox.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicon.ico" />
<!--[if IE 6]>
  <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/css/jquery.lightbox.ie6.css" />
  <![endif]-->
<script src="<?php echo bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<!--[if IE]>
    <style type="text/css">
    #qtranslate-2-chooser {
        margin /*\**/: -10px 0px 0px 0px;  
       *margin: -10px 0px 0px 0px;
       _margin: -10px 0px 0px 0px; 
    }
    hr{ 
    	height:0px;
    }
    #Slider2 #items2 .item a .label hgroup h1, #Slider2 #items2 .item a .label hgroup h1{
      filter: dropshadow(color=#38A4AF, offx=0, offy=0);
    }
    </style>
<![endif]-->
<!--[if IE 8]>
<style type="text/css">

  .home .coluna02 .destaques .content p{
    background: url("<?php echo bloginfo('template_url');?>/assets/img/bgbox.png"); 
  }
  footer .telbottom strong{
    font-size: 23px;
  }
  .viagens .sidebar a .boxpergunta h2, .pac .sidebar a .boxpergunta h2 {
  	font-size: 23px;
  }
</style>
<![endif]-->
<header>
  <!-- Início Header -->
  <div class="container_12 clearfix">
    <a href="<?php bloginfo('home');?>" class="grid_5 logo">
      <img src="<?php echo bloginfo('template_url');?>/assets/img/logo.png" title="Exactt Tour" />
    </a>
    <div class="grid_3 prefix_4 head_dir">
      
      <!-- http://www.LiveZilla.net Chat Button Link Code -->
      <div style="text-align:center;width:160px;">
        <a href="javascript:void(window.open('http://www.exactt.com.br/chat/chat.php','','width=590,height=580,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="chat" >
          <img src="http://www.exactt.com.br/chat/image.php?id=03" width="160" height="106" border="0" title="Clique para começar o chat.">
        </a>
        <noscript>
        <div>
          <a href="http://www.exactt.com.br/chat/chat.php" target="_blank">
            Começar o Chat
          </a>
        </div>
        </noscript>
      </div>
      <!-- http://www.LiveZilla.net Chat Button Link Code --><!-- http://www.LiveZilla.net Tracking Code -->
      <div id="livezilla_tracking" style="display:none">
      </div>
      <script type="text/javascript">var script = document.createElement("script");script.type="text/javascript";var src = "http://www.exactt.com.br/chat/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><!-- http://www.LiveZilla.net Tracking Code -->
      
      <p class="telefone">+55 (21) 2254-3049</p>
    </div>
  </div>
  <!-- Início Menu -->
  <?php 
			$args = array(
				  'theme_location'  => 'Exactt Tour',
				  'menu'            => 'menu-principal', 
				  'container'       => 'nav', 
				  'container_class' => 'clearfix', 
				  'container_id'    => 'menu',
				  'menu_class'      => 'container_12',
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
  <!-- Fim Menu -->
  <!-- Início Submenu -->
  <nav class="clearfix container_12" id="submenu">
    <ul>
      <li style="position:relative;">
        <a href="javascript:;" class="forms" rel="#form_parceiros" >
          Cadastro de Parceiros
        </a>
      </li>
      <li style="position:relative;">
        <a href="javascript:;" id="mostla">
          Newsletter
        </a>
        <div id="news" class="baloes">
          <a href="javascript:;" id="fech" style="float: right; border: none; position:relative; top:-25px; right:-25px;">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/close.png" width="20">
          </a>
          <form action="" method="post" id="newsleter" class="clearfix" onSubmit="return valida(); ">
            <?php dynamic_sidebar('news');?>
          </form>
        </div>
      </li>
      <?php dynamic_sidebar('idioma');?>
    </ul>
  </nav>
  <!-- Fim Submenu -->
  
</header>
