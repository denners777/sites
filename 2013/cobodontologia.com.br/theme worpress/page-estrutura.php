<?php get_header(); ?>

<div role="main" id="main">
  <?php 	  		if ( have_posts() ) : while ( have_posts() ) : the_post(); $images = attachments_get_attachments();	  ?>
  <div class="container_24 clearfix paginas">
    <div class="grid_7 suffix_17">
      <hgroup>
        <h2>
          <?php the_title();?>
        </h2>
      </hgroup>
    </div>
    <div class="grid_22 prefix_1 suffix_1">
      <?php 
		the_content(); 
	?>
      <div class="scrollable" id="scrollable">
        <a class="prev"></a>
        <div  class="items">
          <ul>
            <?php
				$i = 0;
	 			foreach($images as $img){ 
		  			$IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=182&h=117&src='.$img['location']; 
					if($i == 4){echo '</ul><ul>'; $i = 0;}
		    ?>
            <li>
              <figure>
                <a href="<?php echo $img['location']; ?>" class="video" rel="estrutura"><img src="<?php echo $IMG; ?>"></a>
              </figure>
            </li>
            <?php $i++; } ?>
          </ul>
        </div>
        <a class="next"></a>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
