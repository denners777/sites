<?php get_header();?>
<div role="main" class="main container_16">
  <h1 class="ir hidden">Nutrição Funcional e Ortomolecular</h1>
  <?php 
 	if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
  <article class="container_16">
    <?php the_content();?>
  </article>
  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>
</div>
<?php get_footer();?>
