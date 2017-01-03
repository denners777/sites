<!-- Início Banner -->
<section  class="container_12">
  <div id="Slider2"> 
    <!-- Início Items -->
    <div class="items" id="items2">
    
    <?php 
	$args = array( 'post_type' => 'banners', 'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); 
		
  ?><!-- Início Item -->
      <div class="item"> <a href="<?php echo get_post_meta($post-> ID, 'link', true); ?>">
        <figure>
   	    	<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" width="942" height="221" /> </figure>
        <div class="label container_12">
          <hgroup class="title grid_5 prefix_2">
            <h1><?php  the_title(); ?></h1>
            <h2><?php $texto = get_the_content(); echo $texto; ?></h2>
          </hgroup>
        </div>
        </a> </div>
        <!-- Fim Item -->
        <?php endwhile; ?>
    </div>
    <!--./Items --> 
  </div>
</section>
<!-- Fim Banner -->
