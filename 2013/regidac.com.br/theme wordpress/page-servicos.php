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
        <!-- TITLE -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="grid_16 title">
          <hgroup>
            <h1><?php the_title(); ?></h1>
            <h2>Processamento de folha de pagamento com assessoria total em Recursos Humanos.</h2>
          </hgroup>
        </div>
        <!-- /TITLE -->
        <figure class="grid_5 fig1">
          <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=250&h=240&src=' . wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
          <div class="sombra">
          </div>
        </figure>
        <article class="grid_11 servicos">
          <?php the_content(); ?>
          <a href="<?php echo get_bloginfo('url'); ?>/contato/" class="link gradient">CLIQUE AQUI E FAÇA UM ORÇAMENTO</a>
        </article>
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