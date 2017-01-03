<?php get_header(); ?>

<div role="main" id="Noticias">
  <hgroup>
    <h1 class="container_12">Notícias</h1>
  </hgroup>
  <div class="container_12">
    <nav class="grid_3">
      <h3>Categorias</h3>
      <ul>
        <?php
			$args = array( 	'post_type' => 'notici' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
			$Ccat = get_the_terms($post->ID, 'cat_not', '','','');
			if(!empty($Ccat)){
				foreach($Ccat as $scat){
					$cat = $scat->name;
				}
			}
		?>
      <?php echo get_the_term_list( $post->ID, 'cat_not', '<li class='.$cat.'>','','</li>' ); ?>
      <?php endwhile; ?> </ul>
      <h3>Meses</h3>
      <ul>
        <?php
			$timemachine = ''; 
			$args = array( 	'post_type' => 'notici', 'orderby' => 'date' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			$time = get_the_time('F Y');
			if($time != $timemachine){				
		?>
        <li> <a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>">
          <?php the_time(__('F', 'f2')); ?>
          <?php the_time(__('Y', 'f2')); ?>
          </a></li>
        <?php $timemachine = $time; }endwhile; wp_reset_postdata(); ?>
      </ul>
    </nav>
    <section class="grid_8" id="ListaNews">
      <?php 
			 if ( have_posts() ) : while ( have_posts() ) : the_post();
			
			$Ccat = get_the_terms($post->ID, 'cat_not', '','','');
			if(!empty($Ccat)){
				foreach($Ccat as $scat){
					$cat = $scat->name;
				}
			}
	  	?>
      <article class="<?php echo $cat; ?>">
        <hgroup>
          <h3>
            <?php the_title(); ?>
          </h3>
          <time datetime="<?php echo the_time('d/m/Y'); ?>"><?php echo the_time('d/m/Y'); ?></time>
        </hgroup>
        <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>