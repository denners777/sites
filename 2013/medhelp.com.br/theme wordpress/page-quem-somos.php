<?php get_header(); ?>

<!-- MAIN -->

<div id="main" role="main">
  
  <!-- SECTION1 -->
  
  <section class="quem_somos container_24 clearfix">
    <div class="grid_22 prefix_1 suffix_1" >
      <h2 class="grid_7 alpha suffix_6">Quem Somos</h2>
      <div class="grid_9 omega">
        <?php get_template_part('busca'); ?>
      </div>
      <div class="traco alpha grid_22 omega">
      </div>
      <div class="clear">
      </div>
      <div class=" alpha grid_14">
        <?php 	if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; ?>
		<?php else: ?>
        <?php endif; ?>
      </div>
      <aside class="aside grid_8 omega">
        <figure class="quem"><img src="<?php echo bloginfo('template_url');?>/assets/img/banner/quem-somos.jpg"</figure>
      </aside>
    </div>
    <div class="sombra">
    </div>
  </section>
  
  <!-- /SECTION1 -->
  
</div>

<!-- /MAIN -->

<?php get_footer(); ?>
