<?php get_header(); ?>
  <!-- DETALHE -->
  <div class="slid">
  </div>
  <!-- DETALHE -->
  <!-- main -->
  <section id="main" role="main" class="gradient">
    <div class="basic">
      <div class="sombra"></div>
        <div class="container_16 clearfix">
        <!-- TITLE -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="grid_16 title">
          <h1><?php the_title(); ?></h1>
        </div>
        <!-- TITLE -->
        <article class="grid_11 content">
          <?php the_content(); ?>
        </article>
        <aside class="grid_5">
          <figure class="fig1">
            <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=250&h=240&src=' . wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
            <div class="sombra">
            </div>
          </figure>
          <?php endwhile; endif; ?>
          <h2>Alguns de nossos sistemas</h2>
          <ul class="seta_black">
            <li>
              <a href="<?php echo get_bloginfo('url'); ?>/produtos/sisdep-sistema-de-gestao-de-departamento-pessoal/"><span></span>GESTÃO DE DEPARTAMENTO PESSOAL</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo('url'); ?>/produtos/siscon-sistema-de-gestao-contabil-e-gerador-de-darf/"><span></span>GESTÃO CONTÁBIL E GERADOR DE DARF</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo('url'); ?>/produtos/sisconrec-sistema-de-controle-de-contas-a-receber/"><span></span>CONTROLE DE CONTAS A RECEBER</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo('url'); ?>/produtos/sismed-sistema-para-consultorio-medico/"><span></span>CONSULTÓRIO MÉDICO</a>
            </li>
          </ul>
          <a href="<?php echo get_bloginfo('url'); ?>/produtos/" class="link gradient">LEIA MAIS</a>
        </aside>
      </div>
      </div>
      <div class="faixa_cinza gradient"><div class="sombra"></div>
    </div>
  </section>
  <!-- /main -->
<?php get_footer(); ?>