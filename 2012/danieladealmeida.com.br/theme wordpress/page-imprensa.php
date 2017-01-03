<?php get_header();?>

<div role="main" class="main container_16">
  <h1 class="ir" style="display:none;">Imprensa</h1>
  <section class="container_16">
    <?php 
			$i = 1;
			$newsArgs = array( 'post_type' => 'imprensa', 'posts_per_page' => 42);
			$newsLoop = new WP_Query( $newsArgs );
			while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
        ?>
    <!--Foto -->
    <div class="grid_4 imprensa">
      <h2>
        <?php  
                    $texto = get_the_title();
                    echo limitar($texto, 21);
                ?>
      </h2>
      <p>
        <?php 
                    $texto1 = the_content();
                    echo limitar($texto1, 21);
                ?>
      </p>
      <div class="BoxFotos"> <a rel="facebox" href="#exibir<?php echo the_ID(); ?>">
        <?php the_post_thumbnail(array(212, 128));?>
        </a> <a rel="facebox" href="#exibir<?php echo the_ID(); ?>" class="ir btnPlus">Ver</a> </div>
      <div id="exibir<?php echo the_ID(); ?>" style="display:none;">
        <h1>
          <?php the_title();?>
        </h1>
        <?php the_content(); ?>
        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID));?>" width="960" /> </div>
    </div>
    <!--Foto -->
    <?php if(($i%4)==0) {

        ?>
    <div class="clear"></div>
    <?php } $i++; endwhile;?>
    <div class="clear"></div>
    <div class="BarraDivisor"></div>
  </section>
</div>
<?php get_footer();?>
