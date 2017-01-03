<?php get_header(); ?>

<section class="full">
  <div class="container_24">
    <div class="grid_5">
      <div class="icon-princ orcament"></div>
    </div>
    <div class="grid_19">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <h2>
        <?php the_title(); ?>
      </h2>
      <?php the_content(); ?>
      <a href="<?php echo bloginfo('url');?>/orcamento" class="orca-inter">&nbsp;</a>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<article role="main" class="container_24 grid-inter no" >
  <?php 			
	  $args = array('post_type' => 'conteudo', 'cat_content' => 'nossos-precos', 'orderby' => 'title', 'order' => 'ASC');
	  $loop = new WP_Query( $args );
	  while ( $loop->have_posts() ) : $loop->the_post();
?>
  <div class="grid_precos grid_6 clearfix">
    <div class="box">
      <h3>
        <?php the_title(); ?>
      </h3>
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile; wp_reset_postdata();  ?>
</article>
<?php get_footer(); ?>
