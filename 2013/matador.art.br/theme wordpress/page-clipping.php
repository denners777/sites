<?php get_header(); get_template_part('banner'); ?>

<section class="container_24 clearfix" role="main">
  <article class="grid_18 prefix_2 suffix_2 push_1 commom galeria clipping">
    <h2>IMPRESSO</h2>
    <div class="scrollable clearfix" id="scrollable"> <a class="prev" id="prev"></a>
      <div  class="items"> 
        <!-- linha -->
        <ul class="item">
        <?php
		  $i = 1;			
		  $args = array('post_type' => 'clipping', 'meta_key'=> 'wpcf-tipo', 'meta_value' => 'impresso');		
		  $loop = new WP_Query( $args );

		  while ( $loop->have_posts() ) : $loop->the_post();
	   	?>
          <!-- foto -->
          <li> <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID));  ?>" class="lightbox" rel="clippng">
            <figure> 
            	<img src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=136&h=120&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>"  /> 
            </figure>
            <figcaption><?php the_title(); ?> <?php echo get_post_meta($post-> ID, 'wpcf-data', true);?></figcaption>
            </a> </li>
          <!-- /foto -->
          <?php 
		  	if($i == 4){
				echo "</ul><ul class=\"item\">";
				$i = 0;
			}
			$i++;
		  ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <!-- /linha --> 
      </div>
      <a class="next" id="next"></a> </div>
    <div class="clear"></div>
    <h2 class="b">INTERNET</h2>
    <div class="scrollable" id="scrollable2"> <a class="prev" id="prev2"></a>
      <div  class="items"> 
        <!-- linha -->
        <ul class="item">
        <?php
		  $i = 1;			
		  $args = array('post_type' => 'clipping', 'meta_key'=> 'wpcf-tipo', 'meta_value' => 'internet');		
		  $loop = new WP_Query( $args );
		  
		  while ( $loop->have_posts() ) : $loop->the_post();
	   	?>
          <!-- foto -->
          <li> <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID));  ?>" class="lightbox" rel="clippng">
            <figure> 
            	<img src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=136&h=120&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>"  /> 
            </figure>
            <figcaption><?php the_title(); ?> <?php echo get_post_meta($post-> ID, 'wpcf-data', true);?></figcaption>
            </a> </li>
          <!-- /foto -->
          <?php 
		  	if($i == 4){
				echo "</ul><ul class=\"item\">";
				$i = 0;
			}
			$i++;
		  ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <!-- /linha --> 
      </div>
      <a class="next" id="next2"></a> </div>
  </article>
</section>
</div>
<!--./#main -->
<?php get_footer(); ?>