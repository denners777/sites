<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 viagens"> 
    <!-- Início conteudo -->
    <section class="grid_9 conteudo">
      <h1><strong>Viagens</strong></h1>
      <hr color="#FFFFFF" />
	  <?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 	'post_type' => 'nossas-viagens', 'posts_per_page' => 4, 'paged' => $paged );
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
            <!--<h4><?php echo get_the_term_list( $post->ID, 'custom_category', '',', ','' ); ?></h4>--> 
          </hgroup>
          <p class="hyphenate"><?php $texto = get_the_content(); echo limitar($texto, 152); ?></p>
          <a href="<?php the_permalink(); ?>">Continuar lendo</a> <a href="<?php the_permalink(); ?>" class="visto"></a></div>
      </article>
      <hr color="#FFFFFF" />
	  <?php $destak = ""; ?>
	   <?php endwhile; ?>
	   
      <div class="navega"> 
	  	<?php 	
				wp_pagenavi( array( 'query' => $loop ) );	
                wp_reset_postdata(); 
        ?>
	  </div>
    </section>
    <!-- Fim conteudo --> 
    <!-- Início sidebar -->
    <aside class="grid_3 sidebar"> <a href="javascript:;" class="forms" rel="#form_custom" data-id="custom" onclick="carrega(this)">
      <div class="boxpergunta">
        <h2>Faça seu Roteiro!</h2>
        <p class="hyphenate">Não encontrou o roteiro desejado? Aqui você faz seu próprio roteiro, indicando o lugar e os serviços para a sua viagem perfeita.</p>
        <u>Clique aqui</u></div>
      </a>
      <nav class="secao">
        <h3>Viagens / Região</h3>
        <hr color="#FFFFFF" />
        <ul>
		<?php 
			$args = array( 	'post_type' => 'nossas-viagens', 'orderby' => 'date', 'posts_per_page' => 10 );
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
			$args = array( 	'post_type' => 'nossas-viagens',  
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
        <h3>Promoções</h3>
        <hr color="#FFFFFF" />
        <ul>
		<?php 
			$args = array( 	'post_type' => 'nossas-viagens',  
							'meta_key'=> 'promo', 
							'meta_value' => 'sim', 
						);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      </nav>
    </aside>
    <!-- Fim sidebar --> 
  </div>
</div>
<?php get_footer(); ?>