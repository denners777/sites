<?php get_header(); ?>
<!-- MAIN -->
<div id="main" role="main"> 
  <!-- SECTION1 -->
  <section class="quem_somos container_24 clearfix">
    <div class="grid_22 prefix_1 suffix_1 duvidas" >
      <h2 class="grid_8 alpha suffix_5">Dúvidas</h2>
      <div class="grid_9 omega">
         <?php get_template_part('busca'); ?>
      </div>
      <div class="traco alpha grid_22 omega esp"></div>
      <div class="clear"></div>
      <figure class="alpha grid_22"><img src="<?php echo bloginfo('template_url');?>/assets/img/banner/duvidas.jpg" /></figure>
      <div class="clear"></div>
       <?php 		
		  $args = array( 'post_type' => 'duvidas' );        
		  $loop = new WP_Query( $args );        
		  while ( $loop->have_posts() ) : $loop->the_post();
	  ?>
      <!-- DUVIDA -->
      <article class="alpha grid_22 omega">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>
      <!-- DUVIDA --> 
       <?php endwhile; ?>
    </div>
    <div class="sombra"></div>
  </section>
  <!-- /SECTION1 --> 
</div>
<!-- /MAIN -->
<?php get_footer(); ?>