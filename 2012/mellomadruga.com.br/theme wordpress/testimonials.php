<?php /*
  Template Name: Testimonials
 */ ?>

<?php get_header(); ?>


           
                      <?php
        global $paged;

        $arguments = array(
            'post_type' => 'testimonials_posts',
            'post_status' => 'publish',
            'paged' => $paged
        );

        $testimonials_query = new WP_Query($arguments);

        dd_set_query($testimonials_query);
		$i = 0;
        ?>

   


<h1 class="page-title"><?php the_title(); ?></h1>
                    
<ul style="display: none;" class="unstyled article-nav clearfix" id="filters">

    <li><span>Sort By :</span></li>
    <li><a class="active" href="#" data-filter=".article-item">All</a></li>

</ul>

<div class="clearfix">
                    
                    <ul class="row article-items">
                        
                              <?php if ($testimonials_query->have_posts()) : while ($testimonials_query->have_posts()) : $testimonials_query->the_post();  ?>
                        
                        <li class="span4 article-item">
                      <!-- Testimonial Item -->
                        <div class="testimonial-item active clearfix">
                            
                            <div class="testimonial-meta clearfix">
                                
                                
                                        <?php if(get_post_meta(get_the_id(), 'ddtestimonials', true) != '') : //IF IT HAS AT LEAST ONE THUMB

							//OUR THUMBNAILS
							$testimonials = ddListGet('testimonials', get_the_ID());?>
                                
                                <div class="testimonial-avatar">
                                    
                                     <img src="<?php echo get_template_directory_uri(); ?>/includes/timthumb.php?q=100&amp;w=50&amp;h=50&amp;zc=1&amp;src=<?php echo $testimonials[0]['testimonials_avatar']; ?>" alt="" />
  
                                </div>
                                
                                         <?php endif; ?>
                                    
                                <div class="testimonial-info">
                                    
                                    <span class="testimonial-name"><?php the_title(); ?></span>
                                    <a href="<?php echo $testimonials[0]['testimonials_url']; ?>" class="testimonial-website"><span><?php echo $testimonials[0]['testimonials_link']; ?></span></a>
                                        
                                </div>
                                    
                            </div>
                                
                            <div class="testimonial-content clearfix">
                                
                                <div class="testimonial-text">
                                    
                                   <?php the_content(); ?>
                                    
                                </div>
                                    
                            </div>
                                
                        </div>
                        <!-- // End Of Testimonial Item -->
                        
                        </li>

                       
                               <?php endwhile; ?>

<?php endif; ?>
                         
                    </ul>
    
        <?php
                            kriesi_pagination();

                            dd_restore_query();
?>

                    
                </div>
          

<?php get_footer(); ?>
