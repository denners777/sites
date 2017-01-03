<?php /*
  Template Name: Archives
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
                            
                            <div class="archives-template span12">
                                
  

                <h3><?php _e('Archives by category', 'mediapress'); ?></h3>
                <ul class="category-archives">
                <?php wp_list_categories('title_li='); ?>
                </ul>
                
                     <h3 style="margin-top: 20px;"><?php _e('Archives by type', 'mediapress'); ?></h3>
                
                <ul class="pf-arcchives">

<?php



$postformatterms = get_terms( 'post_format' );

foreach( $postformatterms as $term ) {

$termslug = substr( $term->slug, 12 );

$termname = $term->name;

$termlink = get_post_format_link( $termslug );

$postformatlist = '<li><a href="'. $termlink .'">' . $termname . '</a></li>';

echo $postformatlist;

}

?>

</ul>

                <h3 style="margin-top: 20px;"><?php _e('Archives by month', 'mediapress'); ?></h3>

                <ul class="monthly-archives">

                <?php wp_get_archives('type=monthly'); ?>

                </ul>
                
             
                
    </div>
                       
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
