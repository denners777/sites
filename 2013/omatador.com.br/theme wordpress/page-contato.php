<?php get_header(); get_template_part('banner'); ?>

<section class="container_24 clearfix" role="main">
  <article class="grid_18 prefix_1 suffix_2 push_1 commom">
    <div class="alpha grid_11 suffix_2">
      <div class="form">
        <div class="title"> PREENCHA O FORMULÁRIO E ENTRE EM CONTATO CONOSCO <br />
          OU ENVIE EMAIL PARA
          <span class="email"><a href="mailto:territoriosproducoes@gmail.com">TERRITORIOSPRODUCOES@GMAIL.COM</a></span>
        </div>
        <div class="inputs">
          <?php dynamic_sidebar('contato');?>
        </div>
      </div>
    </div>
    <div class="omega grid_5">
      <div class="contato">
        <span class="top title">ACESSORIA DE IMPRENSA</span>
        <span class="title">MONICA RIANI</span>
        <span class="normal">Assessoria de Imprensa<br />
          Rio de Janeiro</span>
        <span class="title">TEL</span>
        <span class="normal tel">(21) 2235-5575</span>
        <span class="title">E-MAIL</span>
        <span class="normal email"><a href="mailto:monicariani@gmail.com">monicariani@gmail.com</a></span>
      </div>
    </div>
  </article>
</section>
</div>
<!--./#main -->
<?php get_footer(); ?>
