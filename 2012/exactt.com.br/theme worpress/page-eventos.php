<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 eventos clearfix"> 
    <!-- Início conteudo -->
    <section class="grid_9 conteudo"> 
      <h1> Últimos <strong>Eventos</strong></h1>
      <hr color="#FFFFFF" />
      <?php 
	  	$categorias = (!isset($_GET['categoria'])) ? NULL : $_GET['categoria'];
		
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 	'post_type' => 'nossos-eventos', 'custom_category' => $categorias, 'posts_per_page' => 2, 'paged' => $paged );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); 
		$destaque = get_post_meta($post-> ID, 'special', true);
		if($destaque){ $destak = 'destaquecor'; }
	  ?>
      <article class="posts gradient <?php echo $destak; ?>">
        <a href="<?php the_permalink(); ?>">
        	<figure><?php the_post_thumbnail('imgsmall'); ?></figure>
        </a>
        <div class="content">
          <hgroup>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h4><?php echo get_the_term_list( $post->ID, 'custom_category', '',', ','' ); ?></h4>
          </hgroup>
          <p class="hyphenate"><?php $texto = get_the_content(); echo limitar($texto, 152); ?></p>
          <a href="<?php the_permalink(); ?>">Continuar lendo</a> <a href="<?php the_permalink(); ?>" class="visto"></a></div>
      </article>
      <hr color="#FFFFFF" />
       <?php $destak = ""; ?>
	   <?php endwhile; ?>
       
      <div class="navega">  
		<?php 	wp_pagenavi( array( 'query' => $loop ) );	
                wp_reset_postdata(); 
        ?> 
      </div>
    </section>
    <!-- Fim conteudo --> 
    <!-- Início sidebar -->
    <aside class="grid_3 sidebar">
      <nav class="secao">
        <h3>Eventos</h3>
        <hr color="#FFFFFF" />
        <ul>
		<?php 
			$args = array( 	'post_type' => 'nossos-eventos', 'orderby' => 'date', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
      </nav>
      <nav class="secao">
        <h3>Destaques</h3>
        <hr color="#FFFFFF" />
        <ul>      
          <?php 
			$args = array( 	'post_type' => 'nossos-eventos',  
							'meta_key'=> 'special', 
							'meta_value' => 'sim', 
						);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      </nav>
      <nav class="secao">
      <h3>Categorias</h3>
        <hr color="#FFFFFF" />
        <ul>
        <?php 
			$Ccat = get_terms('custom_category');
			foreach($Ccat as $cat){
		?> 
        <li class='<?php echo $cat->name; ?>'>
        	<a href="<?php echo bloginfo('home');?>/eventos?categoria=<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
        </li>
        <?php } ?>
      </ul>
      </nav>
    </aside>
    <!-- Fim sidebar --> 
    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>