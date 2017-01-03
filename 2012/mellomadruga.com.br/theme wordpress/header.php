<!DOCTYPE html>

<!-- BEGIN html -->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <!-- BEGIN head -->
    <head>

        <meta name="viewport" content="user-scalable=no,initial-scale=1.0, maximum-scale=1.0 width=device-width" />
        <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->

        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <!-- Title -->
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le styles -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/btn.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" rel="stylesheet">    
        <link href="<?php echo get_template_directory_uri(); ?>/css/jplayer/jplayer.css" rel="stylesheet">

        <!-- RSS, Atom & Pingbacks -->
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo( 'rss_url' ); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo( 'atom_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- Le fav and touch icons -->
       	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
		<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

            
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Copse' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
        
        <?php if(!is_home()){?>
        
        <style type="text/css">
		
		.page-content { padding-left /*\**/: 50px }
		
		.row {
			margin-left: -10px;
		}
		 [class*="span"] {
			float: left;
			margin-left: 15px;
		}
		
        </style>
        
        <?php } ?>
            
        <!-- Theme Hook -->
        <?php wp_head(); ?>

    </head>
    
    <body data-spy="scroll" data-target=".subnav" data-offset="50" <?php body_class(); ?>>
        
      

        <div id="large_bg_img" class="clearfix">

            <div id="large_bg_img_overlay"></div>
            
            
            <?php if ( is_home() ) {?>

    <img src="<?php echo get_option_tree('hp_bg') ?>" id="image" class="big" alt="" />

<?php } else if ( is_archive() ) { ?>
    
    <img src="<?php echo get_option_tree('archive_bg') ?>" id="image" class="big" alt="" />
    
    <?php } else if ( has_post_thumbnail() ) { 
    
   the_post_thumbnail( 'full' ); 
    
    
  } else { ?>
    
    <img src="<?php echo get_option_tree('hp_bg') ?>" id="image" class="big" alt="" />
    
        <?php } ?>
          
        </div>

        <!-- Navbar -->
        <div class="navbar navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container">

                    <a class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></a>
                    <span class="brand"><?php echo get_option_tree('menu_right') ?></span>

                    <div class="nav-collapse">

                          <?php wp_nav_menu(array('container' => false, 'menu_id' => 'main-nav', 'theme_location' => 'main_menu',  'menu_class' => 'nav', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'fallback_cb' => 'display_home2', 'link_after' => '', 'depth' => 0 )); ?>

                        <span class="menu-right"><?php echo get_option_tree('menu_right') ?></span>

                    </div>

                </div>

            </div>

        </div>
        <!-- // End Of Navbar -->

        <div class="black-bar"></div>
        
        <div id="wrap">
            
        <!-- Main Container -->
        <div class="container" id="main-content">
            
            <!-- Header -->
            <div class="row header">
                
                <!-- Logo -->
                <div  class="span4">
                    
                    <div class="logo">
                
                        <a href="<?php echo home_url(); ?>">
                            
                            <h1 id="logo">    
                                
                                <img src="<?php echo get_option_tree('custom_logo_img') ?>" alt="" />
                                    
                            </h1>
                                
                        </a>
                            
                    </div>
                        
                </div>
                <!-- // End Of Logo -->
                    
                <!-- Social Icons -->
                <div id="social" class="span5">
                    
                    <?php if (get_option_tree('facebook_icon') == 'Yes') { ?>
                    <a rel="tooltip" data-original-title="Facebook" class="facebook2 social" href="<?php echo get_option_tree('facebook_url') ?>"></a>
                     <?php } ?>
                      <?php if (get_option_tree('twitter_icon') == 'Yes') { ?>
                    <a rel="tooltip" data-original-title="Twitter" class="twitter2 social" href="http://www.twitter.com/<?php echo get_option_tree('twitter_url') ?>"></a>
                     <?php } ?>
					<?php if (get_option_tree('youtube_icon') == 'Yes') { ?>
                    <a rel="tooltip" data-original-title="YouTube" class="youtube social" href="<?php echo get_option_tree('youtube_url') ?>"></a>
                     <?php } ?> 
					<?php if (get_option_tree('dribbble_icon') == 'Yes') { ?>
                    <a rel="tooltip" data-original-title="Google+" class="dribbble social" href="<?php echo get_option_tree('dribbble_url') ?>"></a>
                     <?php } ?>
                    <?php if (get_option_tree('linkedin_icon') == 'Yes') { ?>
                    <a rel="tooltip" data-original-title="LinkedIn" class="linkedin social" href="<?php echo get_option_tree('linkedin_url') ?>"></a>
                     <?php } ?>
                    <?php if (get_option_tree('vimeo_icon') == 'Yes') { ?>
                    <a rel="tooltip" data-original-title="Pinterest" class="vimeo social" href="<?php echo get_option_tree('vimeo_url') ?>"></a>
                     <?php } ?>
                                 
                </div>
                <!-- // End Of Social Icons -->
                    
                <!-- Search Form -->
                <div class="span3">
                    
                    <?php if (get_option_tree('searchbar') == 'Yes') { ?>
                        <div id="searcharea">
                            
                            <?php get_search_form(); ?>
                       
                        </div>
                    <?php } ?>
                   		
                        
                </div>
                <!-- // End Of Search Form -->
                    
            </div>
            <!-- // End Of Header -->
                
