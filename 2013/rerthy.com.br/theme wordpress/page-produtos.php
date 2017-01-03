<?php get_header();?>

<section role="main" id="produtos" class='page container_24 clearfix'>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- -->
  <article>
    <h2>
      <?php the_title(); ?>
    </h2>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
    <?php 			
			  $args = array('post_type' => 'produtos' );			
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
			  $images = attachments_get_attachments();
		?>
    <figure class="produto clearfix">
      <?php 
		$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=470&h=245&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); 
	?>
      <a href='<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>' class="grid_12 imgProduto"><img src="<?php echo $IMG ?>"></a> 
      
      <!-- -->
      <figcaption class="grid_12 p">
        <h4>
          <?php the_title(); ?>
        </h4>
        <p><?php echo get_the_content(); ?></p>
        <div> 
        	<?php 
				$IMGS = get_bloginfo('template_url').'/timthumb.php?q=100&w=70&h=70&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
				$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=470&h=245&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
			?>
        	<img data-original='<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>' data-rel="<?php echo $IMG; ?>" src="<?php echo $IMGS; ?>" />
            
          <?php foreach($images as $img){ 		  
			$IMGS = get_bloginfo('template_url').'/timthumb.php?q=100&w=70&h=70&src='.$img['location'];
			$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=470&h=245&src='.$img['location']; 	  
		?>
          <img data-original='<?php echo $img['location']; ?>' data-rel="<?php echo $IMG; ?>" src="<?php echo $IMGS; ?>" />
          <?php } ?>
        </div>
      </figcaption>
      <!-- --> 
    </figure>
    <?php   endwhile; wp_reset_postdata(); ?>
  </article>
  <!-- --> 
  
</section>
<?php get_footer(); ?>







