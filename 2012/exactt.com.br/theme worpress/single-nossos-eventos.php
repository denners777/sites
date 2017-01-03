<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 pac"> 
    <!-- Início conteudo -->
    <section class="grid_9 conteudo"> 
      <h1><strong><?php single_post_title();?></strong></h1>
      <hr color="#FFFFFF" />
	  <?php 
	  		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			$images = attachments_get_attachments();
	  ?>
      <article class="posts">
        <div class="overflow">
          <?php foreach($images as $img){ 
		  $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=619&h=139&src='.$img['location']; 
	  ?>
          <a href="<?php echo $img['location']?>" class="lightbox" rel="<?php the_title();?>">
          <figure class="figure_evento"> <img src="<?php echo $IMG; ?>"> </figure>
          </a>
          <?php } ?>
          <div class="tooltip"><img src="<?php echo bloginfo('template_url');?>/assets/img/plus.png" width="34" height="34" title="Clique para ver as fotos" /></div>
        </div>
        <div class="content">
          <h1><?php the_title(); ?></h1>
          <p class="hyphenate"><?php the_content(); ?></p>
          <a href="javascript:;" rel="#form_custom" data-id="pacote" onclick="carrega(this)" class="boxpergunta forms">Reserve agora!</a></div>
      </article>
      <hr color="#FFFFFF" />
	  <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
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
  </div>
</div>
<?php get_footer(); ?>