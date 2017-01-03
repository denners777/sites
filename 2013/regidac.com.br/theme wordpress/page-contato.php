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
          <h1><?php the_title(); ?></h1>
        </div>
        <!-- /TITLE -->
        <div class="grid_7 suffix_1 formulario">
          <?php dynamic_sidebar('contato');?>
        </div>
        <aside class="grid_8">
          <figure class="fig2">
          <a href="http://goo.gl/maps/jvMtz" target="_blank">
            <?php echo getMap('Rua México, 111, Centro, Rio de Janeiro, 20031-144', '430x240'); ?>
            </a>
            <div class="sombra">
            </div>
          </figure>
          <h3>Regidac Informática</h3>
          <address>
          Rua Simulação de Endereço, nº 123, Simulação Endereço.
          </address>
          <span class="tel">Tel. 21 2221-6979</span>
        </aside>
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