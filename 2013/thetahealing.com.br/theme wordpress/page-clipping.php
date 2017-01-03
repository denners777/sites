<?php get_header(); get_template_part('banner-interno'); ?>

<div role="main" class="novidades">
  <div class="container_24 clearfix">
    <section class="grid_15">
      <h3 class="grid_3 alpha">Clipping</h3>
      <hr class="grid_12 omega hr" />
      <div class="clear"></div>
      <article id="clipping">
        <nav> <a id="prev" class="ir">Prev</a> <a id="next" class="ir">Next</a> </nav>
        <div class="items">
          <?php 			
			  $args = array('post_type' => 'clipping');		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
	   		?>
          <!-- img -->
          <figure class="item"> <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID));  ?>" class="lightbox" rel="clippng"> <img src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=558&h=368&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>"  /> </a> </figure>
          <!-- /img -->
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </article>
      <article id="thumbs">
        <nav> <a id="prev2" class="ir">Prev</a> <a id="next2" class="ir">Next</a> </nav>
        <div class="items">
          <?php 			
			  $args = array('post_type' => 'clipping');		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
	   		?>
          <!-- img -->
          <figure class="item"> <img src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=130&h=90&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>"  /> </figure>
          <!-- /img -->
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </article>
    </section>
    <aside class="grid_7 push_1 aside">
      <section>
        <h3>Arquivos</h3>
        <ul>
         <?php 			
			  $args = array('post_type' => 'clipping', 'meta_key'=> 'destaque', 'meta_value' => 'sim');		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
	   		?>
          <li><a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID));  ?>" class="lightbox" rel="destaque"><?php the_title(); ?></a></li>
           <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      </section>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
