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
			$Ccat = get_terms('cat_not');
			foreach($Ccat as $cat){
		?> 
        <li class='<?php echo $cat->name; ?>'><a href="http://96.125.170.135/~homologa/medcel/noticias/?categoria=<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a></li>
        <?php } ?>
      </ul>
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
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$categorias = (!isset($_GET['categoria'])) ? NULL : $_GET['categoria'];
			
			$args = array( 	'post_type' => 'notici', 'cat_not' => $categorias, 'paged' => $paged );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
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
    </section>
  </div>
</div>
<?php get_footer(); ?>
