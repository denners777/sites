<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 pac"> 
    <!-- Início conteudo -->
    <section class="grid_9 conteudo"> 
      <h1>Destinos <strong>&amp;</strong> Hotéis</h1>
      <a href="javascript:;" rel="#form_custom" data-id="luademel" onclick="carrega(this)" class="boxpergunta forms">Faça seu pacote de Lua de Mel</a>
      <hr color="#FFFFFF" />
	  <?php 
	  		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			$images = attachments_get_attachments();
	  ?>
      <article class="posts">
        <div class="overflow over">
          <?php foreach($images as $img){ 
		  $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=619&h=203&src='.$img['location']; 
	  ?>
          <a href="<?php echo $img['location']?>" class="lightbox" rel="<?php the_title();?>">
          <figure class="figure_lua"> <img src="<?php echo $IMG; ?>"> </figure>
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
      <?php if(get_post_meta($post-> ID, 'dicas', true)){ ?>
      <article class="dicas">
      <h1>Dicas para uma Lua de Mel inesquecível</h1>
      	<?php echo get_post_meta($post-> ID, 'dicas', true); ?>
      </article>
	  <?php } endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </section>
    <!-- Fim conteudo --> 
    <!-- Início sidebar -->
    <aside class="grid_3 sidebar">
      <nav class="secao">
        <h3>Destinos / Hotéis</h3>
        <hr color="#FFFFFF" />
        <ul>
         <?php 
			$args = array( 	'post_type' => 'luademel', 'orderby' => 'date', 'posts_per_page' => 10 );
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
				$args = array( 	'post_type' => 'luademel',  
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
			$args = array( 	'post_type' => 'luademel',  
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