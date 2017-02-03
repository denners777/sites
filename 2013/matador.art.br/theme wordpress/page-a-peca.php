<?php get_header(); get_template_part('banner'); ?>
<section class="container_24 clearfix" role="main">
  <article class="grid_20 prefix_1 suffix_1 push_1 commom">
    <div class="scroll-pane">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	
		echo get_the_content(); 
		endwhile; 
		else: 
		endif; 
	?>
    </div>
  </article>
</section>
</div>
<!--./#main -->
<?php get_footer(); ?>