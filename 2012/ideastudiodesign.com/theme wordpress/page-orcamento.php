<?php get_header(); ?>

<section class="full">
  <div class="container_24">
    <div class="grid_5">
      <div class="icon-princ orcament"></div>
    </div>
    <div class="grid_19">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<article role="main" class="container_24 clearfix" id="contato" > 
	<div class="grid_24 clearfix"><span>Preencha os campos abaixo:</span></div>
	<div class="grid_5">
    <ul class="labels">
    	<li>Nome</li>
        <li>E-mail</li>
        <li>Data do Evento</li>
        <li>Seu projeto</li>
    </ul>
    </div>
    <div class="grid_13 suffix_6">
    	<?php dynamic_sidebar('form');?>
    </div>
</article>
<?php get_footer(); ?>
