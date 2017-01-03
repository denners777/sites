<style>
#header {
	height: 557px;
}
</style>
<div id="banner" class="container_12">
  <section class="slider">
    <div id="Slider">
      <nav> <a id="prev" class="ir">Prev</a> <a id="next" class="ir">Next</a> </nav>
      <div class="items"> 
       <?php 			
			  $args = array('post_type' => 'banner');			
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		?>
        <!--Items -->
         <?php 
			$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=960&h=409&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
		?>
        <div class="item">
          <figure><img src="<?php echo $IMG; ?>" /></figure>
          <article>
            <p> <?php the_title(); ?></p>
          </article>
        </div>
        <!--./Item --> 
         <?php endwhile; wp_reset_postdata(); ?>        
      </div>
      <div class="navi clearfix"> </div>
    </div>
  </section>
</div>