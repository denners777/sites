<?php get_header(); ?>

<div role="main" class="container_13 clearfix" id="Promocionais">
  <div class="grid_7">
    <?php   
        $args = array( 'post_type' => 'pacotes-promocionais', 'order' => 'DESC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
	?>
<!--  <hgroup> --> 
      <h1>PACOTES PROMOCIONAIS</h1>
      <p><?php the_post_thumbnail(); ?></p>
      <h3><?php the_title(); ?></h3>
<!--  </hgroup> -->
    <?php
		the_content(); 
        endwhile; 
    ?>
  </div>
  <div class="grid_6"> </div> 
</div>
<?php get_footer(); ?>
