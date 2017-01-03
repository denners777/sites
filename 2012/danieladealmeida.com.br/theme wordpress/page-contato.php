<?php get_header(); ?>
<div role="main" class="main container_16">
  <h1 class="ir hidden">Contato</h1>
  <article class="container_16">
    <div class="grid_8 infoDani">
      <h2>Envie Uma Mensagem</h2>
      <div class="requerido">* Campos Obrigatórios</div>
      <?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
					
				<?php endwhile; ?>
			<?php endif; ?>
    </div>
    <div class="grid_8 DestakDireita GridMapa">
      <?php   dynamic_sidebar('side-bar-contato');?>
    </div>
  </article>
</div>
<?php get_footer(); ?>