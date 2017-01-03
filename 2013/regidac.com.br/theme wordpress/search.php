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
      <div class="grid_16">
        <hgroup class="bus">
          <h1>Busca: </h1>
          <h2><?php printf( __( 'Resultados da pesquisa para: %s' ), '<span> '. get_search_query() .'</span>' ); ?></h2>
        </hgroup>
      </div>
      <!-- /TITLE -->
      <?php if (have_posts()) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <!-- PRODUTO -->
      
      <article class="grid_16 produto content">
        <div class="alpha grid_13">
          <h1><span></span>
            <?php the_title(); ?>
          </h1>
          <p>
            <?php echo limitar (get_the_content(), 200); ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="link gradient">LEIA MAIS</a>
        </div>
        <?php if(get_post_thumbnail_id($post-> ID)): ?>
        <figure class="grid_3 omega">
          <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=142&h=137&src=' . wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
          <div class="sombra">
          </div>
        </figure>
        <?php else: ?>
        <div class="clear">
        </div>
        <?php endif ?>
      </article>
      
      <!-- /PRODUTO -->
      
      <?php endwhile; ?>
      <?php else : ?>
      <article class="grid_16 produto content">
        <div class="alpha grid_13">
          <p>
            <?php _e('Desculpe, mas nada foi encontrado com os seus critérios de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.'); ?>
          </p>
        </div>
      </article>
      <?php endif; ?>
    </div>
  </div>
  <div class="faixa_cinza gradient">
    <div class="sombra">
    </div>
  </div>
</section>
<!-- /main -->

<?php get_footer(); ?>
