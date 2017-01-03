<?php get_template_part( 'header-home' ); ?>

<div role="main" class="main"> 
  
  <!--Dicas -->
  <section id="UltimasDicas" class="container_16 clearfix"> 
    <!--Info -->
    
    <div class="grid_4">
      <h3>Últimas Dicas</h3>
      <p> </p>
    </div>
    <!--Fim Info --> 
    
    <!--BOX -->
    <?php 
		$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'dicas' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
		
	?>
    <div class="grid_4 box"> 
    	<a href="<?php the_permalink(); ?>">
      		<?php the_post_thumbnail('dicas'); ?>
      	</a> 
        <a href="<?php the_permalink(); ?>" class="ir btnPlus">Ver</a> 
        <a href="<?php the_permalink(); ?>">
          <h5>
            <?php  the_title(); ?>
          </h5>
          <p>
            <?php 
            $texto = get_the_content();
            echo limitar($texto, 55); ?>
          </p>
      	</a> 
    </div>
    <?php endwhile; ?>
    <!--Fim Box --> 
  </section>
  <!--Fim Dicas --> 
  <!--Barra -->
  <div class="BarraDivisor"></div>
  <!--Fim Barra -->
  <section id="RecentPosts" class="container_16 clearfix">
    <?php 
	$i = 1;
	$args = array( 'post_type' => 'boxnutricao', 'posts_per_page' => 6, 'order' => 'ASC');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); 
	 ?>
    <div class="grid_5 boxRoxo"> <a href="#exibir<?php echo the_ID(); ?>" rel="facebox">
      <?php the_post_thumbnail('box-nutricao'); ?>
      </a>
      <h4 align="center">
        <?php the_title();?>
      </h4>
      <p>
        <?php 
		$texto = get_the_content();
		echo limitar($texto, 139); ?>
      </p>
      <a href="#exibir<?php echo the_ID(); ?>" rel="facebox">Saiba mais...</a> </div>
    <!-- Facebox -->
    <div id="exibir<?php echo the_ID(); ?>" style="display:none">
      <div class="grid_5 boxface">
        <h4>
          <?php the_title();?>
        </h4>
        <p>
          <?php the_content() ?>
        </p>
      </div>
    </div>
    <!-- /Facebox -->
    <?php if(($i%3)==0) { ?>
    <div class="clear"></div>
    <?php } $i++; endwhile; ?>
  </section>
</div>
<?php get_footer(); ?>
