<?php get_header(); ?>
<div role="main" id="main">
  <div class="container_24 clearfix paginas">
    <div class="grid_7 suffix_17">
      <hgroup>
        <h2>NOVIDADES</h2>
      </hgroup>
    </div>
    <div class="grid_22 prefix_1 suffix_1 clearfix dicas">
     <?php	
		  $args = array('post_type' => 'novidades');		
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
	   ?>
      <h3><a href="#<?php echo $post->post_name; ?>"><?php the_title(); ?><span>&nbsp;</span></a></h3>
      <div id="<?php echo $post->post_name; ?>">
      	<?php echo get_the_content(); ?>
      </div>
       <?php endwhile; wp_reset_postdata(); ?>
    </div>
    
  </div>
</div>
<?php get_footer(); ?>