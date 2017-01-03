<?php get_header(); get_template_part('banner-interno'); ?>
<div role="main" class="quem">
  <div class="container_24 clearfix">
    <div class="grid_12 suffix_1">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       
       <?php echo get_the_content(); ?>
       
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <div class="grid_11 instrutores">
      <h5 class="emp2">Onde posso ser atendido?</h5>
      <p>No consultório do Instituto ThetaHealing Brasil, no Rio de Janeiro com hora marcada ou via Skype em caso de longa distância.</p>
      <p> Marque uma consulta:</p>
      <div class="grid_7 alpha">
        <div class="icon-tel"></div>
        <?php dynamic_sidebar('tels');?>
      </div>
      <div class="grid_4 omega"><a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/skype.png" /></a></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
