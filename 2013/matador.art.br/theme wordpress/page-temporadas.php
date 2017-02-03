<?php get_header(); get_template_part('banner'); ?>

<section class="container_24 clearfix" role="main">
  <article class="grid_18 push_1 prefix_2 suffix_2 commom temporadas">
    <div class="scroll-pane">
    	<?php
		  $args = array('post_type' => 'temp', 'order' => 'ASC');		
		  $loop = new WP_Query( $args );
		  
		  while ( $loop->have_posts() ) : $loop->the_post();
		  
	   	?>
      <div class="alpha grid_13 prefix_4">
        <h2><?php the_title(); ?></h2>
        <span class="content"> <?php echo get_post_meta($post-> ID, 'wpcf-dias', true);?></span> 
        <span class="content"><?php echo get_post_meta($post-> ID, 'wpcf-teatro2', true);?></span> 
      </div>
        <?php 
			
			endwhile; wp_reset_postdata(); 
		?>
      <div class="clear"></div>
      <div class="espaco"></div>
    </div>
    <div class="alpha grid_8 prefix_5 suffix_5 omega">
        <div class="classificacao"> <span class="icon"></span> <span>NÃO RECOMENDADO PARA MENORES DE 12 ANOS</span> </div>
      </div>
  </article>
</section>
</div>
<!--./#main -->
<?php get_footer(); ?>