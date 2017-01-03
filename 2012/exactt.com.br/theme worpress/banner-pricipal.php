<!-- Início Banner Principal -->
<section  class="container_12">
  <div id="Slider" class=""> 
  <!--Items -->
    <div class="items" id="items">
	<?php 
	$args = array( 'post_type' => 'banner-principal', 'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); 
		
  ?>
    <!--Item -->
      <div class="item"> <a href="<?php echo get_post_meta($post-> ID, 'link', true); ?>">
        <figure> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" width="936" height="441"> </figure>
        <div class="label container_12">
          <hgroup class="title grid_5 prefix_2">
            <h1><?php echo get_post_meta($post-> ID, "title", true); ?></h1>
            <h2><?php echo get_post_meta($post-> ID, 'subtitle', true); ?></h2>
            <p>&nbsp;</p>
          </hgroup>
          <div class="content grid_3 prefix_1">
            <h1><?php  the_title(); ?></h1>
            <p class="hyphenate">
			<?php 
				$texto = get_the_content();
				echo $texto; ?>
            </p>
          </div>
        </div>
        </a> </div>
     <!--./Item -->
    <?php endwhile; ?>
    </div>
    <!--./Items -->
  </div>
</section>
<!-- Fim Banner Principal --> 
