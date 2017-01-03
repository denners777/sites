<?php get_header(); get_template_part('slider'); ?>
  <!-- MAIN -->
  <div id="main" role="main"> 
    <!-- SECTION1 -->
    <section class="como_funciona clearfix">
      <div class="container_24 clearfix">
        <div class="grid_22 prefix_1 suffix_1" style="position:relative; margin-bottom:50px;">
          <div class="traco_esq"></div>
          <div class="traco_dir"></div>
          <h2 class="grid_7 alpha suffix_6">Como Funciona</h2>
          <div class="grid_9 omega">
            <?php get_template_part('busca'); ?>
          </div>
        </div>
        <article class="grid_6 prefix_1 suffix_1 listra">
          <h3>Passo 1</h3>
          <div class="icon_1"></div>
          <p>Solicite a sua encomenda pessoalmente ou através de fax com a sua documentação.</p>
        </article>
        <article class="grid_6 prefix_1 suffix_1 listra">
          <h3>Passo 2</h3>
          <div class="icon_2"></div>
          <p>Envio do medicamento através do nosso fornecedor por correio internacional.</p>
        </article>
        <article class="grid_6 prefix_1 suffix_1">
          <h3>Passo 3</h3>
          <div class="icon_3"></div>
          <p>Chegada do medicamentro na sua residência.</p>
        </article>
      </div>
    </section>
    <!-- /SECTION1 --> 
    <!-- SECTION2 -->
    <section class="container_24 clearfix boxes gradient">
      <article class="grid_8 listra">
        <h2>A MedHelp</h2>
        <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/a-med-help.jpg" /></figure>
        <p>Serviços norteados pela ética, sendo nossa responsabilidade prioritária a intermediação das ...</p>
        <a href="<?php echo bloginfo('url');?>/quem-somos/" class="ir">Mais</a> </article>
      <article class="grid_8 listra">
        <h2>Nossa Equipe</h2>
        <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/nossa-equipe.jpg" /></figure>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis ipsum id arcu viverra...</p>
        <a href="<?php echo bloginfo('url');?>/quem-somos/#a-equipe" class="ir">Mais</a> </article>
      <article class="grid_8">
        <h2>Tire suas dúvidas</h2>
        <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/tire-suas-duvidas.jpg" /></figure>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis ipsum id arcu viverra...</p>
        <a href="<?php echo bloginfo('url');?>/duvidas" class="ir">Mais</a> </article>
    </section>
    <!-- /SECTION2 --> 
  </div>
  <!-- /MAIN -->
<?php get_footer(); ?>