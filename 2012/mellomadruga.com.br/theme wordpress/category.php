<?php get_header(); ?>

<h1 class="page-title"><?php single_cat_title(); ?>'S ARCHIVE</h1>

<ul style="display: none;" class="unstyled article-nav clearfix" id="filters">

    <li><span>Sort By :</span></li>
    <li><a class="active" href="#" data-filter=".article-item">All</a></li>

</ul>

<div class="row clearfix">
                    
                    <div class="span8">

    <ul class="row article-items blog-items">
        
<?php if (have_posts ()) : while (have_posts ()) : (the_post()); ?>

                <?php if (has_post_format('gallery')) { ?>

                    <li class="span4 article-item pf-gallery">

                        <?php if (get_post_meta($post->ID, 'ddpostSlider', true) != '') { ?>

                            <div class="article-img img-slides">

                                <ul class="unstyled slides_container">

                                    <?php
                                    $my_retrieved_array = ddListGet('postSlider', $post->ID);

                                    foreach ($my_retrieved_array as $item) {
                                        ?>


                                        <li class="img-item active"><a href="<?php echo $item['img_url']; ?>" rel="prettyPhoto" title="<?php echo $item['field_name']; ?>"><img src="<?php echo $item['img_url']; ?>" alt="" /></a>
                                        </li>

                <?php } ?>

                                </ul>

                            </div>

            <?php } ?>
                        
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

        <?php }  else if (has_post_format('quote')) { ?>

                    <li class="span4 article-item pf-quote">
                        
                         <div class="article-content clearfix">
                                    
                                    <div class="article-text">

                                        <?php the_content(); ?>
                                        
                                    </div>
                                        
                                </div>
                                
                                <div class="article-title">
                                    
                                    <span> <?php the_title(); ?></span>
                                    
                                     </div>
                    
                    </li>

        <?php }  else if (has_post_format('image')) { ?>

                    <li class="span4 article-item pf-image">
                        
                        <div class="article-img">
                            
                               <div class="article-hover">

            <ul class="clearfix article-links">
                
              <?php $blogImg = ddListGet('blogImg', get_the_ID()); ?>

                <li><a class="zoom" href="<?php echo $blogImg[0]['img_url']; ?>" rel="prettyPhoto[gallery1]" title="<?php the_title(); ?>"><?php _e('Zoom', 'localization'); ?></a></li>
                <li><a class="link" href="<?php the_permalink(); ?>"><?php _e('Link', 'localization'); ?></a></li>

            </ul>

        </div>

    <img src="<?php echo $blogImg[0]['img_url']; ?>" alt="" />

    
                        </div>
                        
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
                                    
                                </div>
                                    
                            </div>
                        
                        
                    </li>

        <?php }  else if (has_post_format('audio')) { ?>

                    <li class="span4 article-item pf-audio">
                        
                         <div class="article-title">
                                    
                                    <div id="jquery_jplayer_<?php the_ID(); ?>" class="jp-jplayer"></div>
                                        
                                    <div class="jp-audio jp_container">
                                        
                                        
                                          <script type="text/javascript">
		
			jQuery(document).ready(function(){
	
				if(jQuery().jPlayer) {
					jQuery("#jquery_jplayer_<?php the_ID(); ?>").jPlayer({
						ready: function () {
							jQuery(this).jPlayer("setMedia", {
																mp3: "<?php the_title(); ?>",
													
																end: ""
							});
						},
						
						cssSelectorAncestor: "#jp_interface_<?php the_ID(); ?>",
						supplied: "mp3,  all"
					});
					
				}
			});
		</script>
                

                                        <div class="jp-type-single">
                                            <div id="jp_interface_<?php the_ID(); ?>" class="jp-interface">
                                                <ul class="jp-controls">
                                                    <li><div class="seperator-first"></div></li>
                                                    <li><div class="seperator-second"></div></li>
                                                    <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                                                    <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                                                    <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                                                    <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                                                </ul>
                                                <div class="jp-progress-container">
                                                    <div class="jp-progress">
                                                        <div class="jp-seek-bar">
                                                            <div class="jp-play-bar"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            </div>
                                        </div>
                                            
                                    </div>
                                        
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

        <?php }  else if (has_post_format('link')) { ?>

                    <li class="span4 article-item pf-link">
                        
                        <div class="article-title">
                                    
                                                     <?php $my_retrieved_array = ddListGet('blogLink', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
                                         
                                          <a href="<?php echo $item['blog_link_link']; ?>"><?php the_title(); ?></a>
                                     
                                                 <?php } ?>
                              
                                   
                                        
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

        <?php } else if (has_post_format('video')) { ?>

                    <li class="span4 article-item pf-video">
                        
                         <div class="article-img">
                             
                             
                      <?php  if(get_post_meta($post->ID, 'ddblogVideo', true) != '') { ?>
                                 
                                 <div class="portfolio-video">
                                     
                                     <ul class="clearfix article-links-play">
                                         
                                         <?php $my_retrieved_array = ddListGet('blogVideo', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
                                         
                                         <li><a class="play" href="<?php echo $item['blog_video_link']; ?>" rel="prettyPhoto" title="">play</a></li>
                                     
                                                 <?php } ?>
                                         
                                     </ul>
                                     
                                 </div>
                                 
                                         <?php } ?>

                             <?php $blogImg = ddListGet('blogImg', get_the_ID()); ?>
                             
    <img src="<?php echo $blogImg[0]['img_url']; ?>" alt="" />
    
                        </div>
                        
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

        <?php } else { ?>
                    
                       <li class="span4 article-item">
                        
                        <div class="article-img">
                            
                               <div class="article-hover">

            <ul class="clearfix article-links">
                
              <?php $blogImg = ddListGet('blogImg', get_the_ID()); ?>

                <li><a class="zoom" href="<?php echo $blogImg[0]['img_url']; ?>" rel="prettyPhoto[gallery1]" title="<?php the_title(); ?>"><?php _e('Zoom', 'localization'); ?></a></li>
                <li><a class="link" href="<?php the_permalink(); ?>"><?php _e('Link', 'localization'); ?></a></li>

            </ul>

        </div>

    <img src="<?php echo $blogImg[0]['img_url']; ?>" alt="" />

    
                        </div>
                        
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

                            <?php }?>
                    
            <?php endwhile; ?>
                    
                

<?php endif; ?>

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
