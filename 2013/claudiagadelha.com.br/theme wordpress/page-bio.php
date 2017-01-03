<?php get_header(); ?>
  <div id="main" class="main">
    <section class="bio container_12 clearfix">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <figure class="prefix_1 grid_4">
        <?php the_post_thumbnail('bio'); ?>
      </figure>
      <article class="grid_6 suffix_1">
        <div class="box">
          <h2 class="grid_3"><?php the_title(); ?>
            <span class="ir">E</span>
          </h2>
          <div class="clear"></div>
          <?php the_content(); ?>
        </div>
      </article>
        <?php endwhile; endif; ?>
    </section>
  </div>
  <?php get_template_part('bottom');
get_footer();
?>