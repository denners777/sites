<?php get_header(); ?>
<div role="main" id="main">
  <div class="container_12 clearfix" id="galerias">
    <div class="col01">
      <h1>PRODUTOS<span><img src="<?php echo bloginfo('template_url');?>/assets/img/traco_title.png" width="147" height="12" /></span></h1>
      <div class="grid_2">
        <nav class="menu_portifolio">
          <ul>
            <?php
		 	$Cont = 0;
			$args = array( 'post_type' => 'produtos', 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			$images = attachments_get_attachments();
         ?>
            <li <?php if($Cont == 0){ ?> class="active" <?php } ?>> <a href="<?php the_permalink(); ?>" >
              <?php if($Cont == 0){ ?>
              <span>
              <img src="<?php echo bloginfo('template_url');?>/assets/img/traco_lista_active.png" />
              </span>
              <?php }else{  ?>
              <span>
              <img src="<?php echo bloginfo('template_url');?>/assets/img/traco_lista.png" />
              </span>
              <?php } ?>
              <?php the_title();?>
              </a> </li>
            <?php $Cont++; endwhile; ?>
          </ul>
        </nav>
      </div>
      <?php
			$args = array( 'post_type' => 'produtos', 'order' => 'ASC', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			$images = attachments_get_attachments();
         ?>
      <div class="grid_10 galeria">
        <figure>
          <?php foreach($images as $img){ 
		  $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=141&h=121&src='.$img['location']; 
		  ?>
              <!--Foto --> 
              <a href="<?php echo $img['location']?>" class="lightbox" rel="<?php the_title();?>">
              	<img src="<?php echo $IMG; ?>">
              </a> 
              <!--Foto -->
          <?php } ?>
        </figure>
      </div>
      <?php $Cont++; endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
