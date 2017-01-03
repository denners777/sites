<?php get_header(); ?>

<h1 class="page-title"><?php wp_title("",true); ?></h1>

<ul style="display: none;" class="unstyled article-nav clearfix" id="filters">

    <li><span>Sort By :</span></li>
    <li><a class="active" href="#" data-filter=".article-item">All</a></li>

</ul>

<div class="row clearfix">
                    
                    <div class="span8">

    <ul class="row article-items blog-items">
        
        <?php
        if (have_posts ()) {

            while (have_posts ()) {

                (the_post());
        ?>
         
                       <li class="span4 article-item">
                                                
                        <div class="article-title">
                                 
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                 
                             </div>
                             
                             <div class="article-content clearfix">
                                
                                <div class="article-text">
                                    
                                      <div class="article-meta">
                                          
                                          <?php 
$arc_year = get_the_time('Y'); 
$arc_month = get_the_time('m'); 
$arc_day = get_the_time('d'); 
?>

                                           By <?php the_author_posts_link(); ?> on <a href="<?php echo get_day_link($arc_year, $arc_month, $arc_day); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
                                                                                   
                                       </div>
                                    
                                    <?php the_excerpt(); ?>
                                    
                                </div>
                                    
                            </div>
                        
                        
                    </li>

                  
                    
         <?php }
        } else { ?>
                    
                     <li class="span4 article-item">
                                                
                        <div class="article-title">
                                 
                                <a href="<?php echo home_url(); ?>"><?php _e('There is not post available', 'localization'); ?></a>
                                 
                             </div>
                         
                          <div class="article-content clearfix">
                                
                                <div class="article-text">

                                    <ul class="unstyled">
                                        
                                        <li style="margin-bottom: 10px;"> <a href="<?php echo home_url(); ?>"><?php _e('Go Back To Homepage', 'localization'); ?> &rarr;</a></li>
                                        <li>   <a href="<?php echo home_url(); ?>/archive"><?php _e('Go To Archive Page', 'localization'); ?> &rarr;</a></li>
                                        
                                    </ul>
                                 
                                    
                                </div>
                                    
                            </div>
                             
                           
                        
                        
                    </li>



<?php } ?>

    </ul>
    
        <?php
                            kriesi_pagination();

                      
?>
    
        </div>
    
    <div class="sidebar span4">
        
         <ul class="widgets unstyled">
                    
                     <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Archive And Category")) ; ?>
                    
                </ul>
        
    </div>

</div>


<?php get_footer(); ?>
