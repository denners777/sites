<?php get_header(); ?>
  <!-- DETALHE -->
  <div class="slid">
  </div>
  <!-- DETALHE -->
  <!-- main -->
  <section id="main" role="main" class="gradient">
    <div class="basic">
      <div class="sombra">
      </div>
      <div class="container_16 clearfix">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- TITLE -->
        <div class="grid_16 title">
          <hgroup>
            <h1><?php the_title(); ?></h1>
            <h2>Nossos clientes estão sempre a frente da concorrência. Conheça alguns de nossos clientes.</h2>
          </hgroup>
        </div>
        <!-- /TITLE -->
        <article class="grid_8 servicos">
          <?php the_content(); ?>
        </article>
        
        <figure class="grid_8 fig2">
          <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=430&h=240&src=' . wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
          <div class="sombra">
          </div>
        </figure>
		<?php endwhile; endif; ?>
      </div>
    </div>
    <div class="faixa_cinza gradient">
      <div class="sombra">
      </div>
    </div>
  </section>
  <!-- /main -->
<?php get_footer(); ?>