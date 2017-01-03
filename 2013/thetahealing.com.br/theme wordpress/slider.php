
<section id="slider">
  <div class="items">
    <?php 			
		  $args = array('post_type' => 'slider');		
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $images = attachments_get_attachments();
	   ?>
    <!--Items -->
    <?php foreach($images as $img){ ?>
    <div class="bg-slider item" style="background:url('<?php echo $img['location']; ?>') center repeat-x">
      <?php } ?>
      <div class="textura">
        <article class="container_24 clearfix">
          <div class="grid_20 content">
            <h2>
              <?php the_title(); ?>
            </h2>
            <p> <?php echo get_the_content(); ?></p>
            <figure> <img  src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=374&h=374&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" /> </figure>
          </div>
        </article>
      </div>
    </div>
    <!--./Item -->
    <?php endwhile; wp_reset_postdata(); ?>
    <div class="container_24 clearfix nav-navi">
      <div class="grid_1">&nbsp;</div>
      <hr class="grid_4" />
      <div class="navi clearfix grid_2 prefix_1 suffix_1"> </div>
      <hr class="grid_4" />
      <div class="grid_1">&nbsp;</div>
      <div class="clear"></div>
    </div>
  </div>
</section>
