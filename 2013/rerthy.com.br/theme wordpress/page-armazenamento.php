<?php get_header();?>

<section role="main" id="assentamento" class='page container_24 clearfix'>
  <hgroup class="push_2 grid_20">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class=" big"><?php the_title(); ?></h2>
    
  </hgroup>
  <div class="clear"></div>
  <!-- -->
  <article class="container_24 clearfix line">
    <?php $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=310&h=165&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>
    <figure class="push_2 grid_8"> <img src="<?php echo $IMG; ?>"> </figure>
    <div class="prefix_3 grid_11">
      
      <p><?php echo get_the_content(); ?></p>
    </div>
  </article>
  <!-- -->
  <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
</section>
<?php get_footer(); ?>
