<?php get_header(); ?>
<div role="main" id="main">
  <div class="container_24 clearfix paginas">
    <div class="grid_7 suffix_17">
      <hgroup>
        <h2>ESPECIALIDADES</h2>
      </hgroup>
    </div>
    <div class="especialidades">
      <div class="grid_23 prefix_2"> <span>Navegue pelo slide e veja todas as nossas especialidades.</span> </div>
      <div class="grid_22 prefix_1 suffix_1">
        <div class="scrollable" id="scrollable"> <a class="prev"></a>
          <div  class="items">
            <ul>
            <?php
				$i = 1;		
			  $args = array('post_type' => 'especialidades', 'order' => 'asc');		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		   ?>
              <li> 
              	<a href="#<?php echo $post->post_name; ?>" class="menu-esp">
                	<figure> <img  src="<?php echo get_bloginfo('template_url').'/timthumb.php?q=100&w=181&h=115&src='. wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
                  		<figcaption>
                    		<h5><?php the_title(); ?></h5>
                  		</figcaption>
                	</figure>
                </a> 
              </li>
              <?php
			  	if($i == 4){echo '</ul><ul>'; $i = 0;}
				$i++;
			  ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
          </div>
          <a class="next"></a> </div>
      </div>
      <div class="grid_21 prefix_2 suffix_1 especial"> 
        
        <?php	
		  $args = array('post_type' => 'especialidades', 'order' => 'asc');		
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
	   ?>
        <!-- bloco -->
        <div id="<?php echo $post->post_name; ?>" class="clearfix block">
          <h3><?php the_title(); ?></h3>
          <?php echo get_the_content(); ?>
        </div>
        <!-- fim bloco --> 
         <?php endwhile; wp_reset_postdata(); ?>
        
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>