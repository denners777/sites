<?php get_header(); get_template_part('banner'); ?>
<section class="container_24 clearfix" role="main">
  <article class="grid_18 prefix_2 suffix_2 push_1 commom galeria">
    <h2>VÍDEOS</h2>
    <div class="scrollable2 clearfix" id="scrollable"> <a class="prev" id="prev"></a>
      <div  class="items">
       <?php
		  $args = array('post_type' => 'videos');		
		  $loop = new WP_Query( $args );
		  
		  while ( $loop->have_posts() ) : $loop->the_post();
	   	?>
        <!-- video -->
        <iframe class="item" width="607" height="370" src="<?php echo get_post_meta($post-> ID, 'wpcf-video', true);?>" frameborder="0" allowfullscreen></iframe>
        <!-- /video --> 
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <a class="next" id="next"></a> </div>
  </article>
</section>
</div>
<!--./#main -->
<?php get_footer(); ?>