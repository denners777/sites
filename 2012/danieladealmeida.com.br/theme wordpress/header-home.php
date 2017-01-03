<?php  
 
$browser_cliente = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';  
if(strpos($browser_cliente, 'MSIE') !== false)  
{  
   echo "
<!--[if lte IE 7]>
<script type = 'text/javascript'> location.href = 'http://conectedesign.com.br/browser_old/'</script>
<![endif]-->
";  
}  
?>
<!doctype html><!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Use the .htaccess and remove these lines to avoid edge case issues.
        More info: h5bp.com/i/378 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php wp_title('');?>
</title>
<meta name="description" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/style.css">
<link rel="stylesheet" media="all and (orientation:portrait)" href="<?php echo bloginfo('template_url');?>/assets/css/portrait.css">
<link rel="stylesheet" media="all and (orientation:landscape)" href="<?php echo bloginfo('template_url');?>/assets/css/landscape.css">
<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
<!-- All JavaScript at the bottom, except this Modernizr build.
        Modernizr enables HTML5 elements & feature detects for optimal performance.
        Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="<?php echo bloginfo('template_url');?>/assets/js/libs/modernizr-2.5.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url');?>/assets/js/libs/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/assets/js/facebox/src/facebox.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $('a[rel*=facebox]').facebox({
                loadingImage : '<?php echo bloginfo('template_url');?>/assets/js/facebox/src/loading.gif',
                closeImage:'<?php echo bloginfo('template_url');?>/assets/js/facebox/src/closelabel.png'
                })
            });
        </script>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/js/facebox/src/facebox.css" media="screen" />
<?php
        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');
        wp_head();
        ?>
</head>
<body>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
        chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<!--[if gte IE 9]>
        <style type="text/css">
        .gradient, .active {
        filter: none;
        }
        </style>
        <![endif]-->
<header id="header">
  <div class="brilho">
    <!--TOPO -->
    <div id="TopInfo" class="container_16"> Ligue agora +21.3026-6335 / 8193-2666 </div>
    <!--Menu -->
    <div id="MenuTop">
      <!-- -->
      <div class="container_16">
        <a href="<?php echo get_bloginfo('url')?>">
          <div id="Logo" class="grid_5"></div>
        </a>
        <!--Menu -->
        <nav class="grid_11" id="NavMenu">
          <?php   dynamic_sidebar('menu-principal');?>
        </nav>
        <!--Fim Menu -->
      </div>
      <!--Social -->
      <nav id="NavSocial">
        <div class="container_16">
          <ul>
            <li>
              <a href="<?php echo get_bloginfo('url').'/contato';?>">
                <div class="iconSocial ir Contato"></div>
                <span style="font-size: 14px; text-transform: uppercase;">Contato</span>
              </a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo('url').'/consulta';?>">
                <div class="iconSocial ir Consultas"></div>
                <span style="font-size: 14px; margin-right: 20px; text-transform: uppercase;">Consultas</span>
              </a>
            </li>
            <li>
              <a href="http://www.linkedin.com/pub/daniela-de-almeida/2a/1a0/333" target="_blank">
                <div class="iconSocial ir Linkdin"></div>
                <span>Linkedin</span>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/clinicadenutricaofuncionaldanieladealmeida" target="_blank">
                <div class="iconSocial ir Facebook"></div>
                <span>Facebook</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!--Fim Social -->
    </div>
    <!--Fim Menu -->
    <!--fim Topo -->
    <!--Slide Show -->
    <div id="SlideShow" class="container_16 scrollable">
      <!--Itens -->
      <div class="items">
        <?php
			$args = array( 'post_type' => 'slide', 'posts_per_page' => 10, 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>
        <!--ITEM -->
        
        <div class="item">
          <a href="<?php echo get_post_meta($post -> ID, 'link', true);?>">
            <?php the_post_thumbnail('slider');?>
          </a>
          <div class="container_16 labelSlide">
            <h1 class="grid_6">
              <?php the_title();?>
            </h1>
            <div class="grid_10 label-desk">
              <a href="<?php echo get_post_meta($post -> ID, 'link', true);?>">
                <?php the_content();?>
              </a>
            </div>
          </div>
        </div>
        <!--/ITEM -->
        <?php endwhile;?>
      </div>
      <!--Fim Itens -->
      <div class="navi clearfix"></div>
    </div>
    <!-- -->
    <div id="SkideShowShadow" class="container_16"></div>
    <div id="FraseHeader" class="container_16">
      <?php
			$args = array( 'post_type' => 'depoimentos', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>
      <blockquote style="margin-top:0px;">
        <span></span>
        <p style="margin-top:23px;">
          <?php the_content();?>
          - <small>
          <?php the_title();?>
          </small>
        </p>
      </blockquote>
      <?php endwhile;?>
    </div>
    <!--Fim Frase -->
    <!--Barra -->
    <div class="BarraDivisor"></div>
    <!--Fim Barra -->
    
    <!--Fim Slide -->
  </div>
</header>
<!--Fim Header -->
