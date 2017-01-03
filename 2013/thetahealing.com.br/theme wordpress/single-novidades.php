<?php get_header(); get_template_part('banner-interno'); ?>

<div role="main" class="novidades">
  <div class="container_24 clearfix">
    <section class="grid_14 suffix_1">
      <h3 class="grid_4 alpha">Novidades</h3>
      <hr class="grid_10 omega" />
      <div class="clear"></div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- artigo -->
      <article>
        <h2>
          <?php the_title(); ?>
        </h2>
        <span class="author">Por
        <?php the_author(); ?>
        </span>
        <?php the_content(); ?>
      </article>
      <!-- /artigo -->
      <?php endwhile; else: endif; ?>
    </section>
    <aside class="grid_7 push_1 aside">
      <section>
        <h3>Arquivos</h3>
        <ul>
          <?php 			
		  $args = array('post_type' => 'novidades');		
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $images = attachments_get_attachments();
	   ?>
          <li>
          	<a href="<?php the_permalink(); ?>">
            	<?php the_title(); ?>
            </a>
          </li>
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      </section>
      <section>
        <h3>Últimos Posts</h3>
        <ul>
          <?php 			
		  $args = array('post_type' => 'novidades', 'posts_per_page' => 2);		
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $images = attachments_get_attachments();
	   ?>
          <li>
          	<a href="<?php the_permalink(); ?>">
            	<?php the_title(); ?>
            </a>
          </li>
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      </section>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
