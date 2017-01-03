<?php get_header(); get_template_part('banner-interno'); ?>
<div role="main" class="quem">
  <div class="container_24 clearfix">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       
       <?php echo get_the_content(); ?>
       
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>