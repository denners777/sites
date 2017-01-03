<?php get_header(); ?>

<div role="main" class="projetos">
  <section class="container_12">
    <div class="couracaa">
      <figure class="fig1"> <img src="http://lorempixel.com/300/246/city/1" />
        <figcaption>Iluminação</figcaption>
      </figure>
    </div>
    <article class="grid_4 tipo1">
      <div class="texto">
        <hgroup>
          <h3>Nossos serviços de </h3>
          <h2> Iluminação</h2>
        </hgroup>
        <p>Película de PVC translucida fixada em perfis de alumínio que permite a criação de pequenos e grandes painéis de formas planas.</p>
      </div>
      <div class="scrollable vertical">
      <div class="items">
        <?php 			
			  $i = 0;
			  $args = array('post_type' => 'projeto', 'cat-auzier' => 'iluminacao', 'posts_per_page' => 8 );			
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
    <div class="couracab">
      <figure class="fig1"> <img src="http://lorempixel.com/300/246/city/2" />
        <figcaption>Revestimento</figcaption>
      </figure>
    </div>
    <article class="grid_4 tipo1">
      <div class="texto">
        <hgroup>
          <h3>Nossos serviços de </h3>
          <h2> Revestimento</h2>
        </hgroup>
        <p>Película de PVC translucida fixada em perfis de alumínio que permite a criação de pequenos e grandes painéis de formas planas.</p>
      </div>
      <div class="scrollable vertical">
      <div class="items">
        <?php
			  $i = 0;
			  $args = array('post_type' => 'projeto', 'cat-auzier' => 'revestimento', 'posts_per_page' => 8 );			
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
    <div class="couracac">
      <figure class="fig1"> <img src="http://lorempixel.com/300/246/city/3" />
        <figcaption>Tensoestrutura</figcaption>
      </figure>
    </div>
    <article class="grid_4 tipo1">
      <div class="texto">
        <hgroup>
          <h3>Nossos serviços de </h3>
          <h2> Tensoestrutura</h2>
        </hgroup>
        <p>Película de PVC translucida fixada em perfis de alumínio que permite a criação de pequenos e grandes painéis de formas planas.</p>
      </div>
      <div class="scrollable vertical">
      <div class="items">
        <?php 			
			  $i = 0;
			  $args = array('post_type' => 'projeto', 'cat-auzier' => 'tensoestrutura', 'posts_per_page' => 8 );			
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
    <div class="clear"></div>
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
