<?php get_header();?>

<section role="main" id="assentamento" class='page container_24 clearfix'>
  <hgroup class="push_2 grid_20">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class="alpha big grid_17"><?php the_title(); ?></h2>
    <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
      <a href="<?php echo bloginfo('template_url');?>/assets/ASSENTAMENTO.pdf" target="_blank" class="grid_3 omega" style="line-height: 15px; text-align: center; background-color: #CCBF8B; padding: 5px 0px;">Download Assentamento</a>
  </hgroup>
  <div class="clear"></div>
  <?php 
	  $i = 1;			
	  $args = array('post_type' => 'guia-tecnico', 'cat-produto' => 'assentamento', 'order' => 'asc' );			
	  $loop = new WP_Query( $args );
	  while ( $loop->have_posts() ) : $loop->the_post();
	?>
  
  <!-- -->
  <article class="container_24 clearfix line">
    <?php $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=310&h=165&src='.wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>
    <figure class="push_2 grid_8"> <img src="<?php echo $IMG; ?>"> </figure>
    <div class="prefix_3 grid_11">
      <h3><small><?php echo $i;  $i++; ?></small>
        <?php the_title(); ?>
      </h3>
      <p><?php echo get_the_content(); ?></p>
    </div>
  </article>
  <!-- -->
  <?php endwhile; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>
