<?php get_header();?>

<section role="main" id="assentamento" class='page container_24 clearfix'>
  <hgroup class="push_2 grid_20">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class=" big"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
  </hgroup>
  <div class="clear"></div>
 
</section>
<?php get_footer(); ?>
