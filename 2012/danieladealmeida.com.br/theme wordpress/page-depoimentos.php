<?php get_header(); ?>

<div role="main" class="main container_16">
  <h1 class="ir hidden">Depoimentos</h1>
  <article class="container_16">
    <?php 
	 $wp_query = new WP_Query();
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts( array( 'post_type' => 'page-depoimentos', 'showposts' => 2, 'paged'=>$paged ) );
    if(have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
	 ?>
    <!--Comentario -->
    <section>
      <blockquote> <span></span>
        <p>
          <?php the_content(); ?>
        </p>
        <div class="label-desk-Laranja"> 
		<?php echo get_post_meta($post->ID, 'nome-autor', true); ?>, 
        <small><?php echo get_post_meta($post->ID, 'prof-idade', true); ?></small></div>
      </blockquote>
    </section>
    <div class="FinalFull"> </div>
    <!--Comentario -->
    
    <?php endwhile; endif;?>
  </article>
  <div class="clearfix"> 
  <?php
    wp_pagenavi();
?>
 </div>
</div>
<?php get_footer(); ?>
