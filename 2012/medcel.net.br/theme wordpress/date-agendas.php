<?php get_header(); ?>
<div role="main" id="TransplanteMedula">
  <hgroup>
    <h1 class="container_12">Agenda</h1>
  </hgroup>
  <div class="container_12">
    <nav class="grid_3">
      <h3>Meses</h3>
      <?php dynamic_sidebar('agenda');?>
      <ul>
        <?php
			$timemachine = ''; 
			$args = array( 	'post_type' => 'agendas', 'orderby' => 'date' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			$time = get_the_time('F Y');
			if($time != $timemachine){				
		?>
        <li><a href="javascript:;"><?php echo $time; ?></a></li>
        <?php $timemachine = $time; }endwhile; wp_reset_postdata(); ?>
      </ul>
    </nav>
    <section class="grid_8" id="ListaArtigos">
      <?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 	'post_type' => 'agendas', 'posts_per_page' => 2, 'paged' => $paged );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
	  	?>
      <article>
        <hgroup>
          <h3>
            <?php the_title(); ?>
          </h3>
          <time datetime="<?php echo the_time('d/m/Y'); ?>"><?php echo the_time('d/m/Y'); ?></time>
        </hgroup>
        <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
