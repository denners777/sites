<?php get_header(); ?>

<section role="main" id="produtos" class='page container_24 clearfix'>
  <!-- -->
  <article>
   <div class="ide" style="display:none"><?php echo get_bloginfo('url');?></div>
  <div class="grid_4 suffix_1 prefix_1">
    <nav id="actions"> <a class="prev"></a> <a class="next"></a> </nav>
    <div class="scrollable vertical">
      <div class="items">
        <?php 			
		  $i = 0;
		  $args = array('post_type' => 'produtos', 'cat-produto' => 'rerthy-boutique' );
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $images = attachments_get_attachments();
		  if($i%4 == 0){
		?>
        <ul>
          <?php }?>
          <li class="a"> 
            <figure class="figure">
              <?php 
			  		$IMGTHUMB = get_bloginfo('template_url').'/timthumb.php?q=75&w=144&h=75&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
					$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=351&h=342&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
					$IMGORIGINAL = wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
				?>
              <img data-original="<?php echo $IMGORIGINAL; ?>" data-image="<?php echo $IMG; ?>" src="<?php echo $IMGTHUMB; ?>" /> </figure>
            <div class="hide">
              <h4>
                <?php the_title(); ?>
              </h4>
              <span class="content">
              <?php the_content(); ?>
              </span>
              <div class="links">
              
              <?php $ir = 0; foreach($images as $img){ ?>
			  	<a href="<?php echo $img['location']; ?>" rel="<?php echo 'Gal'.$post-> ID; ?>" title="<?php the_title(); ?>" class="lightbox <?php if($ir == 0){echo "show";} ?>">AMBIENTES</a>
			  <?php $ir++; } ?>
              </div>
              </div>
             </li>
          <?php $i++; if($i % 4 == 0){ ?>
        </ul>
        <?php }  endwhile; wp_reset_postdata(); if($i % 4 != 0){ ?>
        </ul>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php 				  
	  $args = array('post_type' => 'produtos', 'cat-produto' => 'rerthy-boutique', 'posts_per_page' => 1 );
	  $loop = new WP_Query( $args );
	  while ( $loop->have_posts() ) : $loop->the_post();
	  $images = attachments_get_attachments();
	?>
  <div class="grid_8 prod">
    <h4 class="title"><?php the_title(); ?></h4>
    <div class="content"><?php the_content(); ?></div>
    <div class="l">
    <?php $ir = 0; foreach($images as $img){ ?>
        <a href="<?php echo $img['location']; ?>" rel="<?php echo 'Gal'.$post-> ID; ?>" title="<?php the_title(); ?>" class="lightbox <?php if($ir == 0){echo "show";} ?>">AMBIENTES</a>
      <?php $ir++; } ?>
    </div>
  </div>
   <?php 
		$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=351&h=342&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
		$IMGORIGINAL = wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
	?>
  <div class="grid_9 suffix_1 prod2"> <figure><img class="image" src="<?php echo $IMG; ?>" /></figure><a href="<?php echo $IMGORIGINAL; ?>" class="lightbox">Clique aqui para ampliar</a> </div>
   <?php endwhile; wp_reset_postdata();?>
</section>
<?php get_footer(); ?>
