<!-- SLIDER -->

<div id="slider">
  <section class="container_24 clearfix" style="position:relative;"> 
    <?php 		
		  $args = array( 'post_type' => 'slider' );        
		  $loop = new WP_Query( $args );        
		  while ( $loop->have_posts() ) : $loop->the_post();
	  ?>
    <!-- ITEM -->
    
    <div class="item">
      <article class="grid_8 prefix_1">
        <h2><?php the_title(); ?></h2>
        <p><?php echo get_the_content(); ?></p>
      </article>
      <figure class="grid_15"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID));?>" /> </figure>
    </div>
    
    <!-- /ITEM -->
    <div class="clear"></div>
     <?php endwhile; ?>
    
    <div class="navi"></div>
  </section>
</div>

<!-- /SLIDER --> 

