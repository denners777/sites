    <section id="banner" class="container_12">
      <hgroup>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="ir">Matador</h1>
        <h2><?php the_title(); ?></h2>
        <?php
		endwhile; 
		else: 
		endif; 
	?>
      </hgroup>
    </section>
