<?php get_header(); get_template_part('banner-interno'); ?>

<div role="main" class="galeria">
  <div class="container_24 clearfix">
    <section class="grid_15 suffix_1">
      <h3 class="grid_5 alpha">Nossas Fotos</h3>
      <hr class="grid_10 omega hr" />
      <div class="clear"></div>
      <article id="galeria">
        <nav> <a id="prev" class="ir">Prev</a> <a id="next" class="ir">Next</a> </nav>
        <div class="items clearfix"> 
          
          <!-- folha -->
          <ul class="item">
            <?php 
		  	$i = 1;
		  	if ( have_posts() ) : while ( have_posts() ) : the_post(); $images = attachments_get_attachments(); 
			  foreach($images as $img){ 		  
			  $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=153&h=110&src='.$img['location']; 	  
		  ?>
            <li> <a href="<?php echo $img['location'];  ?>" class="lightbox" rel="galeria">
              <figure> <img src="<?php echo $IMG; ?>" /> </figure>
              </a> </li>
            <?php 
		  if($i == 6){echo '</ul><ul class="item">'; $i = 0;}
			$i++;
		  	} 
		  ?>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
          </ul>
          <!-- /folha --> 
        </div>
      </article>
      <h3 class="grid_3 alpha">Videos</h3>
      <hr class="grid_12 omega hr" />
      <div class="clear"></div>
      <article id="videos">
        <nav> <a id="prev2" class="ir">Prev</a> <a id="next2" class="ir">Next</a> </nav>
        <div class="items clearfix"> 
         <?php 
		  	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			
			$content = explode('/', get_the_content());
			foreach($content as $c){
		?>
          <!-- video -->
          <div class="item">
            <iframe width="393" height="317" src="http://www.youtube.com/embed/<?php echo $c; ?>" frameborder="0" allowfullscreen></iframe>
          </div>
          <!-- /video --> 
          <?php } ?>
           <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>
      </article>
    </section>
    <aside class="grid_7 push_1">
      <section>
        <h3>Depoimentos</h3>
        <?php		
			$args = array('post_type' => 'depoimentos', 'posts_per_page' => 3);		
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		   ?>
           <!-- article -->
        <article>
          <blockquote><?php echo get_the_content(); ?></blockquote>
          <h4><?php the_title(); ?></h4>
        </article>
        <!-- /article -->
        <?php endwhile; wp_reset_postdata(); ?>
        <a href="<?php echo bloginfo('url');?>/depoimentos" class="leiamais">LEIA MAIS
        <div></div>
        </a> </section>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
