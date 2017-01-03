<?php get_header(); ?>

<section class="full">
  <div class="container_24">
    <div class="grid_5">
      <div class="icon-princ revenda2"></div>
    </div>
    <div class="grid_19">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <a href="<?php echo bloginfo('url');?>/orcamento" class="orca-inter">&nbsp;</a>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<article role="main" class="container_24 clearfix grid-inter" > 
<?php 			
	  $args = array('post_type' => 'conteudo', 'cat_content' => 'album-bebe', 'orderby' => 'title', 'order' => 'ASC');
	  $loop = new WP_Query( $args );
	  while ( $loop->have_posts() ) : $loop->the_post();
	  $images = attachments_get_attachments();
?>
  <div class="grid_6 clearfix"> 
  <?php 
	$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=180&h=120&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
  ?>
      <a href="#<?php echo 'Gal'.$post-> ID; ?>" title="<?php the_title(); ?>" class="thumb" >
        <figure>
          <img src="<?php echo $IMG; ?>" />
        </figure>
        <figcaption><?php the_title(); ?></figcaption>
      </a> 
      <div style="display:none;">
      <?php foreach($images as $img){ 		  
			$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=180&h=120&src='.$img['location']; 	  
		?>
  <a href="<?php echo $img['location']; ?>" rel="<?php echo 'Gal'.$post-> ID; ?>" title="<?php the_title(); ?>" class="lightbox"></a>
  <?php } ?>
      </div>
  </div>
  <?php endwhile; wp_reset_postdata();  ?>
</article>
<?php get_footer(); ?>
