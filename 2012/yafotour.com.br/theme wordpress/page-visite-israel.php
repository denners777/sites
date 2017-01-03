<?php get_header(); ?>

<div role="main" class="container_13 clearfix PGSTILO1" id="VisiteIsrael">
  <div class="grid_7">
    <?php   
            if (have_posts()) : while ( have_posts() ) : the_post(); 
			$images = attachments_get_attachments();
            the_content();
			endwhile; 
            endif; 
        ?>
  </div>
  <div class="grid_6 Fundo-VisiteIsrael">
    <div class="BoxInfo">
      <h2>QUER FAZER UMA RESERVA?</h2>
      <a class="btnRed" href="<?php bloginfo('home')?>/reservas/">CLIQUE AQUI!</a>
    </div>
    <div class="BoxInfo2">
      <div class="scrollable" id="scrollable">
        <div class="itens">
          <?php 
			  $i = 0;
			  foreach($images as $img){ 
			  $i++;
		  ?>
          <!--Foto --> 
          <a href="<?php echo $img['location']?>" class="fotocbox" rel="box"> 
          	<img src="<?php echo $img['location']?>"> 
          </a> 
          <!--Foto -->
          <?php 
		  if($i == 3){
			echo '</div><div class="itens">';
			$i = 0;  
		  }
		  } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
