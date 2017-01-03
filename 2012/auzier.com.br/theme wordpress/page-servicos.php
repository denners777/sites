<?php get_header(); ?>

<div role="main" class="servicos">
  <section class="container_12">
  <?php 
			$IMG0 = get_bloginfo('template_url').'/timthumb.php?q=100&w=960&h=246&src='. get_bloginfo('template_url').'/assets/img/fotos/servicos02.jpg';
		?>
    <figure class="grid_12 banner clearfix"> <img src="<?php echo $IMG0; ?>" />
      <figcaption>Serviços</figcaption>
    </figure>
    <div class="clear"></div>
    <div class="couraca1">
    <?php 
		$IMG1 = get_bloginfo('template_url').'/timthumb.php?q=100&w=300&h=560&src='. get_bloginfo('template_url').'/assets/img/fotos/iluminacao01.jpg';
	?>
      <figure class="grid_4 fig1"> <img src="<?php echo $IMG1; ?>" />
        <figcaption>Iluminação</figcaption>
      </figure>
    </div>
    <article class="grid_4 tipo1">
      <div class="box">
        <hgroup>
          <h3>Nossos serviços de </h3>
          <h2> Iluminação</h2>
        </hgroup>
        <p>Película de PVC translúcida fixada em perfis de alumíniopermitindo a criação de pequenos e grandes quadros de formas planas ou luminárias tridimensionais.</p>
      </div>
      <div class="scrollable vertical">
        <div class="items">
        <?php 			
			  $i = 0;
			  $args = array('post_type' => 'servicos', 'cat-auzier' => 'iluminacao' );		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		if($i%4 == 0){
		?>
        <ul>
          <?php }?>
          <li> <a class="lightbox" href="#" rel="#overlay">
            <figure>
              <?php 
			  		$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=62&h=60&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
					$IMGORI = get_bloginfo('template_url').'/timthumb.php?q=100&w=940&h=350&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
				?>
              <img data-original="<?php echo $IMGORI; ?>" src="<?php echo $IMG; ?>" />
              <figcaption><img src="<?php echo bloginfo('template_url');?>/assets/img/plus2.png" /></figcaption>
            </figure>
            </a>
            <h4>
              <?php the_title(); ?>
            </h4>
            <div class="hide">
              <?php the_content(); ?>
            </div>
            <a class="veja lightbox" href="#" rel="#overlay">veja mais +</a> </li>
          <?php $i++; if($i % 4 == 0){ ?>
        </ul>
        <?php }  endwhile; wp_reset_postdata(); if($i % 4 != 0){ ?>
        </ul>
        <?php } ?>
      </div>
      </div>
      <nav class="actions"> <a class="prev"></a><a class="next"></a> </nav>
    </article>
    <div class="couraca2">
    <?php 
		$IMG2 = get_bloginfo('template_url').'/timthumb.php?q=100&w=300&h=560&src='. get_bloginfo('template_url').'/assets/img/fotos/revestimento01.jpg';
	?>
      <figure class="grid_4 fig2"> <img src="<?php echo $IMG2; ?>" />
        <figcaption>Revestimentos</figcaption>
      </figure>
    </div>
    <article class="grid_4 tipo2">
      <div class="box">
        <hgroup>
          <h3>Nossos serviços de </h3>
          <h2> Revestimentos</h2>
        </hgroup>
        <p>Membrana de PVC. Ótima solução de obra limpa com montagem rápida, fácil limpeza e manutenção.<br /><br /></p>
      </div>
      <div class="scrollable vertical">
        <div class="items">
        <?php 			
			  $i = 0;
			  $args = array('post_type' => 'servicos', 'cat-auzier' => 'revestimento' );		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		if($i%4 == 0){
		?>
        <ul>
          <?php }?>
          <li> <a class="lightbox" href="#" rel="#overlay">
            <figure>
              <?php 
			  		$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=62&h=60&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
					$IMGORI = get_bloginfo('template_url').'/timthumb.php?q=100&w=940&h=350&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
				?>
              <img data-original="<?php echo $IMGORI; ?>" src="<?php echo $IMG; ?>" />
              <figcaption><img src="<?php echo bloginfo('template_url');?>/assets/img/plus2.png" /></figcaption>
            </figure>
            </a>
            <h4>
              <?php the_title(); ?>
            </h4>
            <div class="hide">
              <?php the_content(); ?>
            </div>
            <a class="veja lightbox" href="#" rel="#overlay">veja mais +</a> </li>
          <?php $i++; if($i % 4 == 0){ ?>
        </ul>
        <?php }  endwhile; wp_reset_postdata(); if($i % 4 != 0){ ?>
        </ul>
        <?php } ?>
      </div>
      </div>
      <nav class="actions"> <a class="prev"></a><a class="next"></a> </nav>
    </article>
    <div class="couraca3">
    <?php 
		$IMG3 = get_bloginfo('template_url').'/timthumb.php?q=100&w=300&h=560&src='. get_bloginfo('template_url').'/assets/img/fotos/tensoestrutura01.jpg';
	?>
      <figure class="grid_4 fig3"> <img src="<?php echo $IMG3; ?>" />
        <figcaption>Tensoestrutura</figcaption>
      </figure>
    </div>
    <article class="grid_4 tipo3">
      <div class="box">
        <hgroup>
          <h3>Nossos serviços de </h3>
          <h2> Tensoestrutura</h2>
        </hgroup>
        <p>Soluções tensionadas para ambientes externos. Membranas em fios de poliéster amalgamados em PVC, protegidas contra raios UV.</p>
      </div>
      <div class="scrollable vertical">
        <div class="items">
        <?php 			
			  $i = 0;
			  $args = array('post_type' => 'servicos', 'cat-auzier' => 'tensoestrutura' );		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		if($i%4 == 0){
		?>
        <ul>
          <?php }?>
          <li> <a class="lightbox" href="#" rel="#overlay">
            <figure>
              <?php 
			  		$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=62&h=60&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
					$IMGORI = get_bloginfo('template_url').'/timthumb.php?q=100&w=940&h=350&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
				?>
              <img data-original="<?php echo $IMGORI; ?>" src="<?php echo $IMG; ?>" />
              <figcaption><img src="<?php echo bloginfo('template_url');?>/assets/img/plus2.png" /></figcaption>
            </figure>
            </a>
            <h4>
              <?php the_title(); ?>
            </h4>
            <div class="hide">
              <?php the_content(); ?>
            </div>
            <a class="veja lightbox" href="#" rel="#overlay">veja mais +</a> </li>
          <?php $i++; if($i % 4 == 0){ ?>
        </ul>
        <?php }  endwhile; wp_reset_postdata(); if($i % 4 != 0){ ?>
        </ul>
        <?php } ?>
      </div>
      </div>
      <nav class="actions"> <a class="prev"></a><a class="next"></a> </nav>
    </article>
  </section>
  <!-- -->
  <div class="simple_overlay" id="overlay">
    <figure> <img src="" />
      <figcaption></figcaption>
    </figure>
    <h2></h2>
    <p></p>
  </div>
  <!-- --> 
</div>
<?php get_footer(); ?>
