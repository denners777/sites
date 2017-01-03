<?php get_header(); get_template_part('banner-interno'); ?>
<div role="main" class="quem">
  <div class="container_24 clearfix">
    <h3 class="grid_8">Escola Oficial no Brasil</h3>
    <div class="grid_1"></div>
    <hr class="grid_7" />
    <div class="grid_7 suffix_1 thetahealing">
    </div>
    <div class="clear"></div>
    <div class="grid_12 suffix_1 escola">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       
       <?php echo get_the_content(); ?>
       
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
