<?php
get_header(); 
?>

<div role="main" class="clearfix" id="main" >
  <div class="container_12"> 
    <!--Coluna01 -->
    <div class="grid_8">
      <section class="clearfix sec">
        <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </section>
    </div>
    <!--./Coluna01 --> 
    <!--Coluna02 -->
    <div class="grid_4">
    <?php 
		get_template_part('areadocliente'); 
	?>
    </div>
    <!--./Coluna02 --> 
  </div>
</div>
<?php get_footer(); ?>
