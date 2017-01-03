<?php get_header(); ?>

<article role="main" class="container_24 clearfix grid-inter" >
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $images = attachments_get_attachments(); ?>
  <div class="grid_6">
  <?php foreach($images as $img){ 		  
			$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=180&h=120&src='.$img['location']; 	  
		?>
  <a href="<?php echo $img['location']; ?>" title="<?php echo $img['title']; ?>" class="lightbox">
  <figure class="figure"><img src="<?php echo $IMG; ?>" /></figure>
  </a>
  <?php } ?>
  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>
</article>
<?php get_footer(); ?>
