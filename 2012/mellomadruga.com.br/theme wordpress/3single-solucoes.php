<?php get_header(); ?>


<div class="row">
                    
                    <div class="span10"><h1 class="page-title"><?php the_title(); ?></h1></div>
                    
                    <div class="span2">
                        
                        <ul class="portfolio-single-nav unstyled">
                                                     
                            <li><a rel="tooltip" title="Previous Project" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"><i class="icon-chevron-left icon-white"></i></a></li>
                            <li><a rel="tooltip" title="Full Portfolio" href="<?php echo home_url(); ?>/?p=<?php echo get_option_tree('fullportfolio') ?>"><i class="icon-th icon-white"></i></a></li>
                            <li><a rel="tooltip" title="Next Project" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"><i class="icon-chevron-right icon-white"></i></a></li>
                            
                        </ul>
                        
                    </div>
                    
                </div>

  <ul style="display: none;" class="unstyled article-nav clearfix" id="filters">
                    
                    <li><span>Ordenar por :</span></li>
                    <li><a class="active" href="#" data-filter=".article-item">Tudo</a></li>
                        
                </ul>
      


            <div class="row clearfix">
                    
                    <div class="span8 blog-single">

                         <div class="article-item pf-gallery">
                 

                               <?php
        if (have_posts ()) {

            while (have_posts ()) {

                (the_post());
        ?>

                             <?php  if(get_post_meta($post->ID, 'ddportfolioVideo', true) != '') { ?>
                             
                             
                          
                             <div class="img-container">
                                 
                                 <div class="portfolio-video">
                                     
                                     <ul class="clearfix article-links-play">
                                         
                                         <?php $my_retrieved_array = ddListGet('portfolioVideo', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
                                         
                                         <li><a class="play" href="<?php echo $item['video_link']; ?>" rel="prettyPhoto" title="">play</a></li>
                                     
                                                 <?php } ?>
                                         
                                     </ul>
                                     
                                 </div>
                         
                          <img class="portfolio-single-img" src="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" alt="" />
                  
                  
                          
                     </div>
                             
                             
                             
                              <?php } else if(get_post_meta($post->ID, 'ddportfolioSlider', true) != '') {  ?>
                             
                             
                    
                   
                             <div class="article-img img-slides">

                                         <ul class="unstyled slides_container">
                         
                   <?php $my_retrieved_array = ddListGet('portfolioSlider', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
                    
       
                          <li class="img-item active"><a href="<?php echo $item['img_url']; ?>" rel="prettyPhoto" title="<?php echo $item['field_name']; ?>"><img src="<?php echo $item['img_url']; ?>" alt="" /></a>
</li>
                    
                    
                                    <?php  } ?>

                        </ul>
                                 
                             </div>
                    
                                <?php } else { ?>
                    
                       <div class="img-container">
                         
                          <a href="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" rel="prettyPhoto" title="Gallery Post Format Img">  <img class="portfolio-single-img" src="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" alt="" />
                  
                          </a>
                          
                     </div>
                       
                    
                                <?php } ?>
 

                                     <div class="page-content wsidebar clearfix">

                                         <div class="article-text">

                                             <div class="article-meta">

                                                  por <?php the_author(); ?> em <?php the_time( get_option( 'date_format' ) ); ?>

                                             </div>

                                             <div class="row">

                                                 <?php the_content(); ?>
                                                 
                                                 </div>
                                                 
                                          
                                         </div>

                                     </div>


<?php }
        } else { ?>

            <div class="post box">
                <h3><?php _e('There is not post available.', 'localization'); ?></h3>

            </div>

<?php } ?>
                       
                            </div>
                        
                           <?php comments_template(); ?>    
                        
                    </div>
                
                <div class="sidebar span4">
                    
                <ul class="widgets unstyled">
                    
                     <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Single Portfolio Post")) ; ?>
                    
                </ul>
                     
                 </div>
               
                    
                </div>
               
                 
           </div>

<?php get_footer(); ?>
