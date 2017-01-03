<?php include('header.php'); ?>
  <div role="main" id="main">
    <div class="clearfix topo">
      <div class="container_16">
        <div class="prefix_1 suffix_1 clearfix">
          <div class="grid_14">
            <!-- TOP -->
            <div class="top">
              <p>Atendemos a clientes <strong>de todos os portes, pessoas físicas e jurídicas, no Brasil e também no exterior.</strong></p>
            </div>
            <!-- /TOP -->
          </div>
        </div>
      </div>
    </div>
    <div class="container_16">
      <!-- MIDDLE -->
      <div class="prefix_1 suffix_1 clearfix middle">
        <h2>Nossos clientes</h2>
        <?php
			$args = array( 'post_type' => 'clientes', 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
         ?>
         <hr />
        <section class="grid_14 cliente">
          <figure><?php the_post_thumbnail('cliente'); ?></figure>
          <article class="content">
          
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              
          </article>
        </section>
        <p>&nbsp;</p>
		<?php endwhile; ?>
      </div>
      <!-- /MIDDLE -->
    </div>
  </div>
  <?php include('footer.php');?>