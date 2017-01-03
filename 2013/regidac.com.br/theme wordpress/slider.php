  <!-- slider -->
  <section id="slider" class="bg_painel">
    <div class="slider container_16">
      <nav id="navi"></nav>
       <?php
          $args = array('post_type' => 'banner');
          $loop = new WP_Query($args);
          while ($loop->have_posts()) : $loop->the_post();
          ?>
      <!-- item -->
      <figure class="item">
        <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=960&h=415&src=' . wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
        <figcaption>
          <span><strong><?php the_title(); ?></strong> <?php echo get_the_content(); ?></span>
        </figcaption>
        <div class="sombra">
        </div>
      </figure>
      <!-- /item -->
      <?php
          endwhile;
          wp_reset_postdata();
        ?>
    </div>
    <div class="sombra">
    </div>
  </section>
  <!-- /slider -->