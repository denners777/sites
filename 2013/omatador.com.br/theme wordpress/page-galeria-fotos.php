<?php get_header(); get_template_part('banner'); ?>

<section class="container_24 clearfix" role="main">
  <article class="grid_18 prefix_2 suffix_2 push_1 commom galeria">
    <h2>ENSAIO</h2>
    <small>Fotos - Fabio Box</small>
    <div class="scrollable clearfix" id="scrollable"> <a class="prev" id="prev"></a>
      <div  class="items"> 
        <!-- linha -->
        <ul class="item">
          <?php
		  $i = 1;			
		  $args = array('post_type' => 'fotos', 'meta_key'=> 'wpcf-foto', 'meta_value' => 'ensaio');		
		  $loop = new WP_Query( $args );
		  
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $attachments = new Attachments( 'my_attachments' );
		  if( $attachments->exist() ) : while( $attachments->get() ) : ?>
          <!-- foto -->
          <li> <a href="<?php echo $attachments->src( 'full' );  ?>" class="lightbox" rel="ensaio">
            <figure> <img src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=136&h=120&src='.$attachments->src( 'full' ); ?>"  /> </figure>
            </a> </li>
          <!-- /foto -->
          <?php 
		  	if($i == 4){
				echo "</ul><ul class=\"item\">";
				$i = 0;
			}
			$i++;
		   endwhile;  
		   endif;  
		   endwhile; wp_reset_postdata(); ?>
        </ul>
        <!-- /linha --> 
      </div>
      <a class="next" id="next"></a> </div>
    <div class="clear"></div>
    <h2 class="b">ESPETÁCULO</h2>
    <small>Fotos - Daniela Nader</small>
    <div class="scrollable" id="scrollable2"> <a class="prev" id="prev2"></a>
      <div  class="items"> 
        <!-- linha -->
        <ul class="item">
          <?php
		  $i = 1;			
		  $args = array('post_type' => 'fotos', 'meta_key'=> 'wpcf-foto', 'meta_value' => 'espetaculo');		
		  $loop = new WP_Query( $args );
		  
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $attachments = new Attachments( 'my_attachments' );
		  if( $attachments->exist() ) :
	      while( $attachments->get() ) : ?>
          <!-- foto -->
          <li> <a href="<?php echo $attachments->src( 'full' );  ?>" class="lightbox" rel="espetaculo">
            <figure> <img src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=136&h=120&src='.$attachments->src( 'full' ); ?>"  /> </figure>
            </a> </li>
          <!-- /foto -->
          
          <?php 
		  	if($i == 4){
				echo "</ul><ul class=\"item\">";
				$i = 0;
			}
			$i++;
		  endwhile;  
		  endif;  
		  endwhile; wp_reset_postdata(); ?>
        </ul>
        <!-- /linha --> 
      </div>
      <a class="next" id="next2"></a> </div>
      <h2 class="b">IMPRENSA</h2>
	  <small>Fotos - Mônica Vilela</small>
      <a class="impress" href="<?php echo bloginfo('template_url'); ?>/assets/download/Imprensa-Fotos-de-Monica-Vilela.zip">Clique aqui e faça o download das imagens.</a>
  </article>
</section>
</div>
<!--./#main -->
<?php get_footer(); ?>
