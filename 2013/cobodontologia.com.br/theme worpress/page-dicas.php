<?php get_header(); ?>
<div role="main" id="main">
  <div class="container_24 clearfix paginas">
    <div class="grid_7 suffix_17">
      <hgroup>
        <h2>DICAS</h2>
      </hgroup>
    </div>
    <?php	
		  $args = array('post_type' => 'dicas');		
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
	   ?>
    <div class="grid_22 prefix_1 suffix_1 clearfix dicas">
      <h3><a href="#<?php echo $post->post_name; ?>">
        <?php the_title(); ?>
        <span>&nbsp;</span></a></h3>
      <div id="<?php echo $post->post_name; ?>" class="clearfix"> <?php echo get_the_content(); ?> </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>
<?php get_footer(); ?>