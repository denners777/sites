<?php get_header(); ?>
<div role="main" id="main">
  <div class="container_12 clearfix" id="galerias">
    <div class="col01">
      <h1>OLHARES<span><img src="<?php echo bloginfo('template_url');?>/assets/img/traco_title.png" width="147" height="12" /></span></h1>
     
      <div class="grid_2">
        <nav class="menu_portifolio">
          <ul> 
		  <?php
			$args = array( 'post_type' => 'olhares', 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			$ClasseAtivo = NULL;
			$imgr = FALSE;
			$URL = get_bloginfo('url').$_SERVER['REQUEST_URI'];
			while ( $loop->have_posts() ) : $loop->the_post();
			if($URL == get_permalink()){
				$ClasseAtivo = 'active';
				$imgr = TRUE;
			}
          ?>
            <li class="<?php echo $ClasseAtivo; ?>"> <a href="<?php the_permalink(); ?>" > 
            <?php if($imgr == TRUE){ ?>
              <span>
              <img src="<?php echo bloginfo('template_url');?>/assets/img/traco_lista_active.png" />
              </span>
              <?php }else{  ?>
              <span>
              <img src="<?php echo bloginfo('template_url');?>/assets/img/traco_lista.png" />
              </span>
            <?php } ?> 
				<?php the_title();?></a> </li>
		  <?php $ClasseAtivo = NULL; $imgr = FALSE; endwhile; ?>
          </ul>
        </nav>
        
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			$images = attachments_get_attachments();
			?>
      <div class="grid_10 galeria" id="galerias">
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
    </div>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
