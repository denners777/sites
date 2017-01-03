<?php get_header();?>

<div class="logopecas">
  <section role="main" id="logopecas" class='page container_24 clearfix'>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $images = attachments_get_attachments();?>
    <article>
      <h2>
        <?php the_title(); ?>
      </h2>
      <figure class="produto clearfix">
        <?php $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=470&h=245&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>
        <a href='<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>' class="grid_12 lightbox"><img rel="logopecas" src="<?php echo $IMG ?>"></a>
      </figure>
      <!-- -->
      <nav><a id="prev"></a><a id="next"></a></nav>
      <div class="scroll">
        <?php 
			$IMGS = get_bloginfo('template_url').'/timthumb.php?q=75&w=138&h68&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
			$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=470&h=245&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
		?>
        <img data-original='<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>' data-rel="<?php echo $IMG; ?>" rel="logopecas" src="<?php echo $IMGS; ?>" />
        <?php foreach($images as $img){ 		  
			$IMGS = get_bloginfo('template_url').'/timthumb.php?q=75&w=138&h68&src='.$img['location'];
			$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=470&h=245&src='.$img['location']; 	  
		?>
        <img data-original='<?php echo $img['location']; ?>' data-rel="<?php echo $IMG; ?>" src="<?php echo $IMGS; ?>" />
        <?php } ?>
      </div>
      <!-- -->
      <div class="content"><?php echo get_the_content(); ?></div>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </article>
  </section>
</div>
<?php get_footer(); ?>
