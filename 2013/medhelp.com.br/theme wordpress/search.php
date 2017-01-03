<?php get_header(); ?>
<!-- MAIN -->

<div id="main" role="main">
  <!-- SECTION1 -->
  <section class="quem_somos container_24 clearfix">
    <article class="grid_22 prefix_1 suffix_1" >
      <h2 class="pagetitle grid_13 alpha">
        <?php printf( __( 'Resultados da pesquisa para: %s' ), '<span>' . get_search_query() . '</span>' ); ?>
      </h2>
      <div class="grid_9 omega">
        <?php get_template_part('busca'); ?>
      </div>
      <div class="traco alpha grid_22 omega esp">
      </div>
      <div class="clear">
      </div>
      <div class="alpha omega grid_22">
        <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <h1>
              <?php the_title(); ?>
          </h1>
        <div class="resumo">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <p>
          <?php _e('Desculpe, mas nada foi encontrado com os seus critérios de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.'); ?>
        </p>
        <?php endif; ?>
      </div>
      <div class="clear">
      </div>
      <div class="espaco">
      </div>
    </article>
    <div class="sombra">
    </div>
  </section>
  <!-- /SECTION1 -->
</div>
<!-- /MAIN -->
<?php get_footer(); ?>
