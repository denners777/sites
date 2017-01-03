<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 blog"> 
    <!-- Início conteudo -->
    <section class="grid_9 conteudo"> 
      <h1><?php single_post_title();?></h1>
      <hr color="#FFFFFF" />
	  <?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 	
						'post_type' => 'post', 
						'posts_per_page' => 5, 
						'paged' => $paged 
					);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); 
	  ?>
      <article class="posts">
        <a href="<?php the_permalink(); ?>"><div class="data"> <b><?php echo the_time('d'); ?></b> <span><?php echo the_time('M'); ?></span> </div></a>
        <div class="content">
          <hgroup>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h4><?php the_category(', '); ?></h4>
          </hgroup>
          <p class="hyphenate"><?php the_content(); ?></p>
          <a href="<?php the_permalink(); ?>">Continuar lendo</a><a href="<?php the_permalink(); ?>" class="visto"></a> </div>
      </article>
      <hr color="#FFFFFF" />
	  <?php endwhile; ?>
    </section>
    <!-- Fim conteudo --> 
    <!-- Início sidebar -->
    <aside class="grid_3 sidebar">
      <?php dynamic_sidebar('widget-blog');?>
    </aside>
    <!-- Fim sidebar --> 
  </div>
</div>
<?php get_footer(); ?>