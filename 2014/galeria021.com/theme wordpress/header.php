<!DOCTYPE html>
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
      <?php
      if (is_home() || is_front_page()) {
        echo bloginfo('name');
        ?>
      <?php } else { ?>
        <?php
        wp_title('&bull;', 'true', 'right');
        bloginfo('name');
        ?>
      <?php } ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
    if (is_singular() && get_option('thread_comments'))
      wp_enqueue_script('comment-reply');
    wp_head();
    ?>
    <meta name="author" content="Denners Fernandes" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/main.css">
    <!--[if IE 8]>
            <style type="text/css">
                    #wrap {display:table;}
            </style>
    <![endif]-->
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
  </head>
  <body class="home">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <!-- WRAP -->
    <div id="wrap">
      <!-- PARALAX -->
      <div class="header_line_l"></div>
      <div class="header_line_r"></div>
      <div id="parallax_left"></div>
      <div id="parallax_right"></div>
      <!-- /PARALAX -->
      <!-- HEADER -->
      <header id="header">
        <div class="container">
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-2 col-xs-2">
              <a href="<?php bloginfo('home'); ?>" class="logo ir">
                <h1>Galeria 021</h1>
              </a>
            </div>
            <!-- !LOGO -->
            <div class="col-md-3 col-md-offset-7 col-xs-7 col-xs-offset-3">
              <!-- SOCIAL -->
              <nav class="social clearfix">
                <ul class="pull-right">
                  <li>
                    <a href="#" class="english ir" target="_new" title="English">English</a>
                  </li>
                  <li>
                    <a href="#" class="facebook ir" target="_new" title="Facebook">Facebook</a>
                  </li>
                </ul>
              </nav>
              <!-- !SOCIAL -->
              <!-- SEARCH -->
              <div class="search">
                <!-- .searchForm -->
                <form method="get" class="searchForm quest" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                  <div class="input-group">
                    <input type="text" class="field form-control" name="s" id="s" placeholder="Pesquisa" />
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="submit" id="searchsubmit" title="Buscar" class="button">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
                <!-- /.searchForm -->
              </div>
              <!-- !SEARCH -->
              <!-- PRODUTOS SELECIONADOS -->
              <div class="carrinho_produtos_link">
                <a href="#"><span class="circulo">0</span> <span>produtos selecionados</span></a>
              </div>
              <!-- !PRODUTOS SELECIONADOS -->
            </div>
          </div>
        </div>
        <!-- MENU PRINCIPAL -->
        <div class="menu_principal">
          <nav class="container navbar" role="navigation">
            <!-- BOTAO COLAPSE -->
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#menu_principal">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- !BOTAO COLAPSE -->
            <!-- CONTEUDO MENU -->
            <div class="collapse navbar-collapse" id="menu_principal">
              <ul class="nav nav-justified">
                <!-- CONCEITO -->
                <li class="active"><a href="<?php bloginfo('home'); ?>/conceito" id="conceito">CONCEITO</a></li>
                <!-- !CONCEITO -->
                <!-- CORPORATIVO -->
                <li><a href="<?php bloginfo('home'); ?>/corporativo" id="corporativo">CORPORATIVO</a></li>
                <!-- !CORPORATIVO -->
                <!-- PRODUTOS -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="produtos">PRODUTOS <b class="caret"></b></a>
                  <ul class="dropdown-menu panel-group" id="accordion">
                    <li class="panel">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a href="<?php bloginfo('home'); ?>/produtos" class="collapsed">Todos os Produtos</a>
                        </h4>
                      </div>
                    </li>

                    <?php
                    $args = array(
                        'type' => 'post',
                        'child_of' => 0,
                        'parent' => '',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => 1,
                        'hierarchical' => 1,
                        'exclude' => '1',
                        'include' => '',
                        'number' => '',
                        'taxonomy' => 'category',
                        'pad_counts' => false
                    );

                    $categories = get_categories($args);

                    foreach ($categories as $cat):
                      if ($cat->parent == 0) :
                        $args = array('post_type' => 'produto', 'category_name' => $cat->cat_name, 'posts_per_page' => 1);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                          ?>
                          <li class="panel">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $cat->slug; ?>" class="collapsed"><?php echo $cat->name; ?> <span class="plus"></span></a>
                              </h4>
                            </div>
                            <div id="<?php echo $cat->slug; ?>" class="panel-collapse collapse" data-target="<?php echo $cat->slug; ?>">
                              <ul class="panel-body">
                                <li><a href="<?php echo get_category_link($cat->cat_ID); ?>">Todos</a></li>
                                <?php
                                foreach ($categories as $childcat) :
                                  if (cat_is_ancestor_of($cat->cat_ID, $childcat)) :
                                    echo '<li><a href="' . get_category_link($childcat->cat_ID) . '">' . $childcat->cat_name . '</a></li>';
                                  endif;
                                endforeach;
                                ?>
                              </ul>
                            </div>
                          </li>
                          <?php
                        endwhile;
                      endif;
                    endforeach;
                    ?>
                  </ul>
                </li>
                <!-- !PRODUTOS -->
                <!-- DESIGNERS -->
                <li><a href="<?php bloginfo('home'); ?>/designers" id="designers">DESIGNERS</a></li>
                <!-- !DESIGNERS -->
                <!-- CLIENTES -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="clientes">CLIENTES  <b class="caret"></b></a>
                  <ul class="dropdown-menu panel-group ">
                    <?php
                    foreach ($categories as $cat):
                      if ($cat->parent == 0) :
                        $args = array('post_type' => 'cliente', 'category_name' => $cat->cat_name, 'posts_per_page' => 1);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                          ?>
                          <li class="panel">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a href="<?php bloginfo('home'); ?>/clientes/?category=<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a>
                              </h4>
                            </div>
                          </li>
                          <?php
                        endwhile;
                      endif;
                    endforeach;
                    ?>
                  </ul>
                </li>
                <!-- !CLIENTES -->
                <!-- DICAS -->
                <li><a href="<?php bloginfo('home'); ?>/dicas" id="dicas">DICAS</a></li>
                <!-- !DICAS -->
                <!-- CONTATO -->
                <li><a href="<?php bloginfo('home'); ?>/contato" id="contato">CONTATO</a></li>
                <!-- !CONTATO -->
              </ul>
            </div>
            <!-- !CONTEUDO MENU -->
          </nav>
        </div>
        <!-- !MENU PRINCIPAL -->
      </header>
      <!-- !HEADER -->
