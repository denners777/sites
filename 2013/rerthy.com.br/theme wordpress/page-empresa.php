<?php get_header();?>
  <section role="main" id="empresa" class='page container_24 clearfix'>
  	<aside class="grid_9 imgAside">
          	
    </aside>
    
    <article class="grid_12 prefix_3">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class=" big"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </article>
    
  </section>
<?php get_footer(); ?>


