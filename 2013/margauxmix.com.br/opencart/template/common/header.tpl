<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         

<html class="no-js lt-ie9 lt-ie8"> 
<script language= "JavaScript">
    location.href="http://conectedesign.com.br/browser_old/"  
  </script>

<![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta http-equiv="cache-control" content="public"/>
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="shortcut icon" type="image/x-icon" />
<link rel="apple-touch-icon-precomposed" href="catalog/view/theme/margaux/assets/icon/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="catalog/view/theme/margaux/assets/icon/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="catalog/view/theme/margaux/assets/icon/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="catalog/view/theme/margaux/assets/icon/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="catalog/view/theme/margaux/assets/icon/apple-touch-icon-57x57-precomposed.png">
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<meta name="Distribution" content="Global"/>
<meta name="Rating" content="General"/>
<meta name="Revisit-after" content="1 Day"/>
<meta name="Googlebot" content="all"/>
<meta name="copyright" content="Copyright www.margaux.com.br"/>
<meta name="robots" content="all"/>
<meta name="expires" content="never" />
<meta name="language" content="pt-br"/>
<meta name="author" content="Conecte Estudio Design"/>
<meta name="viewport" content="width=1000"/>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/margaux/assets/css/main.css" />
<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<!--[if IE]>
    
    <style>
        #header .menu-principal ul > li{
            margin-top: 0;
            height: 23px;
        }
        
        #header .menu-principal ul > li:hover, #header .menu-principal ul > li.busca{
            margin-top: -17px;
            height: 57px;
        }
        #header .menu-principal ul > li ul li:hover{
            margin-top: 0px;
        }
    </style>

<!-->
<!--[if IE 8]>
    <style>
        #header .menu-principal ul > li{
            padding-left: 12px;
            padding-right: 12px;
        }
        #header .menu-principal ul > li ul{
                top: 40px;
            }
    </style>
<!-->
<script src="catalog/view/theme/margaux/assets/js/vendor/modernizr.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<!--[if IE 7]> 
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php echo $google_analytics; ?>
</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<div id="wrap">
<header id="header">
  <div class="bg_header_top">
    <div class="container_16 clearfix">
      <nav class="menu grid_5 suffix_7">
        <ul>
          <li>
            <a href="<?php echo $home; ?>"><?php echo $text_home; ?></a>
          </li>
          <li>
            <a href="index.php?route=information/information&information_id=7"><?php echo $text_a_marca; ?></a>
          </li>
          <li>
            <a href="index.php?route=information/contact"><?php echo $text_contato; ?></a>
          </li>
          <li class="lang">
            <?php echo $language; ?>
          </li>
        </ul>
      </nav>
      <nav class="login grid_4">
        <ul>
          <li>
            <a href="<?php echo $account; ?>"><?php echo $text_account; ?></a>
          </li>
          <li>
            <a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?>
              <span class="sacola"></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <?php if ($logo) { ?>
    <a href="<?php echo $home; ?>" class="logo">
      <img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" />
    </a>
  <?php } ?>
  <nav class="menu-principal">
    <?php if ($categories) { ?>
    <ul class="container_16 clearfix">
      <?php foreach ($categories as $category) { ?>
      <li>
        <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
        <?php if ($category['children']) { ?>
          <?php for ($i = 0; $i < count($category['children']);) { ?>
          <ul>
            <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
            <?php for (; $i < $j; $i++) { ?>
            <?php if (isset($category['children'][$i])) { ?>
            <li>
              <a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a>
            </li>
            <?php } ?>
            <?php } ?>
          </ul>
          <?php } ?>
        <?php } ?>
      </li>
      <?php } ?>
      <li class="busca">
        <ul>
          <li>
            <div id="search">
              <input type="text" name="filter_name" placeholder="Buscar" value="" />
              <span class="button-search">
              </span>
            </div>
          </li>
        </ul>
      </li>
    </ul>
    <?php } ?>
  </nav>
    <div class="container_16 clearfix" style="position: relative;">
        <div id="notification" class="grid_16">
    </div>
  </div>
</header>
