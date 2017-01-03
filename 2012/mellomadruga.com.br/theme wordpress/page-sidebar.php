<?php /*
  Template Name: Page Sidebar
 */ ?>

<?php get_header(); ?>

<h1 class="page-title"><?php the_title(); ?></h1>
                    
           <div class="row">
                
                <div class="span8">

                    <!-- Page Content -->
                    <div class="page-content wsidebar clearfix">
                        
                        <div class="row">
         
                            
                               <?php
        if (have_posts ()) {

            while (have_posts ()) {

                (the_post());
        ?>



<?php the_content(); ?>


<?php }
        } else { ?>

            <div class="post box">
                <h3><?php _e('There is not post available.', 'localization'); ?></h3>

            </div>

<?php } ?>
                       
                            </div>
                        
                    </div>
                    
                </div>
               
                 <div class="sidebar span4">
                    
                <ul class="widgets unstyled">
                    
                     <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Pages")) ; ?>
                    
                </ul>
                     
                 </div>
               
           </div>

<?php get_footer(); ?>
