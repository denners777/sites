<?php get_header(); ?>

<section role="main" id="ambientes" class='page container_24 clearfix'>
  <aside class="grid_9 imgAside"> </aside>
  <article class="grid_12 prefix_3">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2>
      <?php the_title(); ?>
    </h2>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
    <figure class="figSlider clearfix">
      <div class="theSlider grid_12 clearfix"> 
          <a href="http://www.youblisher.com/p/479444-Catalogo-Rethry" class="iframe"> 
            <img src="http://www.youblisher.com/files/publications/80/479444/200x300.jpg" alt="Catalogo Rethry"> 
          </a> 
      </div>
    </figure>
  </article>
</section>
<?php get_footer(); ?>
