<?php get_header(); 

$not = preg_match("/categorias-noticias/",$_SERVER['REQUEST_URI']);
if($not){
	get_template_part('archive-categorias-noticias'); 
}else{
?>
<div role="main" id="TransplanteMedula">
  <hgroup>
    <h1 class="container_12"><?php echo get_the_date('F Y');?></h1>
  </hgroup>
  <div class="container_12">
    <nav class="grid_3">
      <h3>Meses</h3>
      <ul>
        <?php
			$timemachine = ''; 
			$args = array( 	'post_type' => 'agendas', 'orderby' => 'date' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			$time = get_the_time('F Y');
			if($time != $timemachine){				
		?>
        <li><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(__('F', 'f2')); ?> <?php the_time(__('Y', 'f2')); ?></a></li>
        <?php $timemachine = $time; }endwhile; wp_reset_postdata(); ?>
      </ul>
    </nav>
    <section class="grid_8" id="ListaArtigos">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <hgroup>
          <h3>
            <?php the_title(); ?>
          </h3>
          <time datetime="<?php echo the_time('d/m/Y'); ?>"><?php echo the_time('d/m/Y'); ?></time>
        </hgroup>
        <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </section>
  </div>
</div>
<?php } get_footer(); ?>
