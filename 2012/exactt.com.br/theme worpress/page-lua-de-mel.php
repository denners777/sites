<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 luademel"> 
    <!-- Início lua de mel -->
    <section class="grid_12 conteudo">
      <h1>Viagens para<strong> Lua de Mel</strong></h1>
      <a href="javascript:;" rel="#form_custom" data-id="luademel" onclick="carrega(this)" class="boxpergunta forms">Faça seu pacote de Lua de Mel</a>
	  <hr color="#FFFFFF" />
	  <?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 	
						'post_type' => 'luademel', 
						'posts_per_page' => 3, 
						'meta_key'=> 'tipo_lua', 
						'meta_value' => 'luademel', 
						'paged' => $paged 
					);
		$t = 3;
		$loop = new WP_Query( $args );
		//print_r($loop);
		while ( $loop->have_posts() ) : $loop->the_post(); 
		
		$destaque = get_post_meta($post-> ID, 'special', true);
		if($destaque){ $destak = 'destaquecor'; 
		//the_meta();
		}
	  ?>
      <article class="posts2 posts<?php echo $t; ?> <?php echo $destak; ?>"> 
      	<a href="<?php the_permalink(); ?>">
        	<figure><?php the_post_thumbnail('imgbig'); ?></figure>
            <h1><?php the_title(); ?></h1>
        </a> 
      </article>
       <?php $t++; $destak = ""; ?>
	   <?php endwhile; ?>
      <div class="navega navega2"> 
	  	<?php 	
				wp_pagenavi( array( 'query' => $loop ) );	
                wp_reset_postdata(); 
        ?>
	  </div>
    </section>
    <!-- Fim lua de mel --> 
    <!-- Início noite de nupcias -->
    <section class="grid_12 conteudo">
      <h1>Noite de <strong>Núpcias</strong></h1>
	  <hr color="#FFFFFF" />
      <?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 	'post_type' => 'luademel', 'posts_per_page' => 3, 'meta_key'=> 'tipo', 'meta_value' => 'nupcias', 'paged' => $paged );
		$t = 3;
		$loop1 = new WP_Query( $args );
		while ( $loop1->have_posts() ) : $loop1->the_post(); 
		
		$destaque = get_post_meta($post-> ID, 'special', true);
		if($destaque){ $destak = 'destaquecor'; }
	  ?>
      <article class="posts2 posts<?php echo $t; ?> <?php echo $destak; ?>"> 
      	<a href="<?php the_permalink(); ?>">
        	<figure><?php the_post_thumbnail('imgbig'); ?></figure>
            <h1><?php the_title(); ?></h1>
        </a> 
      </article>
       <?php $t++; $destak = ""; ?>
	   <?php endwhile; ?>
      <div class="navega"> 
	  	<?php 	
				wp_pagenavi( array( 'query' => $loop1 ) );	
                wp_reset_postdata(); 
        ?>
	  </div>
    </section>
    <!-- Fim noite de nupcias --> 
  </div>
</div>
<?php get_footer(); ?>