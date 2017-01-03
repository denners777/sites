  <!-- Slider -->
  <section  class="container_16 clearfix">
    <div class="prefix_1 suffix_1">
      <div id="Slider" class="grid_14">
        <!--Items -->
        <div class="items" id="items">
        <?php
			$args = array( 'post_type' => 'banner', 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
         ?>
          <div class="item">
            <figure><?php the_post_thumbnail('banner'); ?></figure>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
        </div>
        <!--./Items -->
      </div>
    </div>
  </section>
  <!-- /Slider -->