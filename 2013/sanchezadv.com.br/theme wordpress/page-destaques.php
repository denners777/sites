<?php get_header(); get_template_part('slider'); ?>

  <div role="main" id="main">
    <div class="clearfix topo">
      <div class="container_16">
        <div class="prefix_1 suffix_1 clearfix">
          <div class="grid_14">
            <!-- TOP -->
            <div class="top">
              <p><strong>Sanches Advogados Associados</strong> surgiu da união de profissionais que acreditam nos mesmos ideais.<br />
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
            <!-- /TOP -->
          </div>
        </div>
      </div>
    </div>
    <div class="container_16">
      <!-- MIDDLE -->
      <div class="prefix_1 suffix_1 clearfix middle">
        <h2>DESTAQUES</h2>
        <hr />
         <?php 
	  		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	  	?>
        <!-- DESTAQUES -->
        <div class="grid_14">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
        <p>&nbsp;</p>
		<hr />
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
        <!-- /DESTAQUES -->
      </div>
      <!-- /MIDDLE -->
    </div>
    <!-- BOTTOM -->
    <div class="bot">
      <div class="container_16 clearfix bottom">
        <div class="prefix_1 suffix_1 clearfix">
          <div id="Slider2" class="grid_14">
            <!--Items -->
            <div class="items" id="items2">
            <?php
			$args = array( 'post_type' => 'destaques', 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
         ?>
              <div class="item">
                <span class="icon"></span>
                <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /BOTTOM -->
  </div>
  </div>
<?php get_footer(); ?>