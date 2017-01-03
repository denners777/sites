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
        <p>Solicite a sua encomenda entrando em contato conosco pelos telefones:  <br />
        ( 21 ) 2215-6097 / 2224-5086  <br />
        ou através do <a href="<?php echo bloginfo('url');?>/cadastre-se/">Cadastre-se</a>.</p>
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
      <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/nossa-equipe.jpg" /></figure>
      <p>A Medhelp é uma empresa especializada no assessoramento de medicamentos importados não comercializados no Brasil...</p>
      <a href="<?php echo bloginfo('url');?>/quem-somos/" class="ir">Mais</a>
    </article>
    <article class="grid_8 listra">
      <h2>Nossa Equipe</h2>
      <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/a-med-help.jpg" /></figure>
      <p>Contamos com mais de 18 anos de experiência na prestação deste serviço. Diante disto, a Medhelp, atende com ...</p>
      <a href="<?php echo bloginfo('url');?>/quem-somos/#a-equipe" class="ir">Mais</a>
    </article>
    <article class="grid_8">
      <h2>Tire suas dúvidas</h2>
      <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/tire-suas-duvidas.jpg" /></figure>
      <p>Como tenho certeza que o remédio virá do exterior? Você verá que o medicamento será entregue com...</p>
      <a href="<?php echo bloginfo('url');?>/duvidas" class="ir">Mais</a>
    </article>
  </section>
  
  <!-- /SECTION2 -->
  
</div>

<!-- /MAIN -->

<?php get_footer(); ?>
