<?php get_header();?>

<section role="main" id="assentamento" class='page container_24 clearfix'>
  <article class="push_2 grid_20 duvidas">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class=" big"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
  </article>
  <div class="clear"></div>
 
</section>
<?php get_footer(); ?>
