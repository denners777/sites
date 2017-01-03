<?php get_header(); get_template_part('banner-interno'); ?>
<div role="main" class="cursos">
  <div class="container_24 clearfix">
    <nav class="grid_16" id="nav-cursos"> 
    <span class="alpha grid_7 title">Selecione um curso</span>
      <hr class="grid_8 omega" />
      <div class="clear"></div>
      <div class="scrollable" id="scrollable"> 
      	<a class="prev"></a>
        <div class="items">
          <ul>
          <?php
			$i = 1;		
			$args = array('post_type' => 'cursos', 'order' => 'asc');		
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		   ?>
            <li> 
            	<a href="#<?php echo $post->post_name; ?>"> 
                	<span class="span <?php echo get_post_meta($post-> ID, 'curso', true); ?>"></span> 
                    <span class="title"><?php the_title(); ?></span> 
                </a> 
            </li>
             <?php
			  	if($i == 10){echo '</ul><ul>'; $i = 0;}
				$i++;
			  ?>
                <?php endwhile; wp_reset_postdata(); ?>
          </ul>
        </div>
        <a class="next"></a> </div>
        <hr class="grid_15 alpha omega" />
    </nav>
    <div class="grid_7 suffix_1 sidebar"> <span>O Instituto oferece mais de 10 cursos com certificação internacional que visam o aprimoramento humano em diferentes aspectos. </span> <br />
    <a href="<?php echo bloginfo('template_url');?>/assets/img/prerequisitos.jpg" class="confira lightbox">Confira os pré-requisitos >></a> </div>
    <div class="clear"></div>
    <section id="content-cursos">
	<?php
		$cl = 'block';
		$args = array('post_type' => 'cursos', 'order' => 'asc');		
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
    ?>
      <!-- curso -->
      <article id="<?php echo $post->post_name; ?>" class="<?php echo $cl; ?>">
       
        <?php echo get_the_content(); ?>
       
        <a href="#<?php echo $post->post_name; ?>" class="inscreva">Inscreva-se neste curso >></a> <?php dynamic_sidebar('face');?>
      </article>
      <?php $cl = 'none'; ?>
      <!-- /curso --> 
       <?php endwhile; wp_reset_postdata(); ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
