<?php get_header(); get_template_part('banner-interno'); ?>
<div role="main" class="depoimentos">
  <div class="container_24 clearfix">
    <h3 class="grid_5 alpha">Depoimentos</h3>
    <hr class="grid_10 omega hr" />
    <div class="clear"></div>
    <h5 class="grid_14 suffix_10">Leia os depoimentos das pessoas que já passaram ou estão no ThetaHealing Brasil.</h5>
    <div class="clear"></div>
    <section class="grid_11 suffix_1"> 
	<?php
		$i = 0;
		$args = array('post_type' => 'depoimentos');		
		$loop = new WP_Query( $args );
	    while ( $loop->have_posts() ) : $loop->the_post();
		$numposts = $loop->post_count;
    ?>
      <!-- depoimento -->
        <article>
            <blockquote><?php echo get_the_content(); ?></blockquote>
            <h4><?php the_title(); ?></h4>
        </article>
      <!-- /depoimento --> 
      <?php 
	  	$j = $numposts /2;
		if($i > $j){
	  ?>
      </section>
    <section class="grid_11 suffix_1">
      <?php
	  $i = 0;
		}$i++;
	  ?>
      <?php endwhile; wp_reset_postdata(); ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
