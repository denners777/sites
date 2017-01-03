<?php get_header(); get_template_part('slider'); ?>

<div role="main">
  <div class="region_1">
    <section class="container_12">
      <article class="grid_4 hreview">
        <?php 
			$IMG1 = get_bloginfo('template_url').'/timthumb.php?q=100&w=244&h=122&src='. get_bloginfo('template_url').'/assets/img/fotos/iluminacao.jpg';
		?>
        <a href="<?php echo bloginfo('url')?>/servicos">
        <figure class="fig1"> <img src="<?php echo $IMG1; ?>" /> </figure>
        </a>
        <div class="item"> <a href="<?php echo bloginfo('url')?>/servicos">
          <h2 class="fn fig1">Iluminação</h2>
          </a>
          <p class="description fig1"> Película de PVC translúcida fixada em perfis de alumíniopermitindo a criação de pequenos e grandes quadros de formas planas ou luminárias tridimensionais... </p>
        </div>
      </article>
      <article class="grid_4 hreview">
        <?php 
			$IMG2 = get_bloginfo('template_url').'/timthumb.php?q=100&w=244&h=122&src='. get_bloginfo('template_url').'/assets/img/fotos/revestimento.jpg';
		?>
        <a href="<?php echo bloginfo('url')?>/servicos">
        <figure class="fig2"> <img src="<?php echo $IMG2; ?>" /> </figure>
        </a>
        <div class="item"> <a href="<?php echo bloginfo('url')?>/servicos">
          <h2 class="fn fig2">Revestimento</h2>
          </a>
          <p class="description fig2">Membrana de PVC. Ótima solução de obra limpa com montagem rápida, fácil limpeza e manutenção...</p>
        </div>
      </article>
      <article class="grid_4 hreview">
        <?php 
			$IMG3 = get_bloginfo('template_url').'/timthumb.php?q=100&w=244&h=122&src='. get_bloginfo('template_url').'/assets/img/fotos/tensoestrutura.jpg';
		?>
        <a href="<?php echo bloginfo('url')?>/servicos">
        <figure class="fig3"> <img src="<?php echo $IMG3; ?>" /> </figure>
        </a>
        <div class="item"> <a href="<?php echo bloginfo('url')?>/servicos">
          <h2 class="fn fig3">Tensoestrutura</h2>
          </a>
          <p class="description fig3">Soluções tensionadas para ambientes externos. Membranas em fios de poliéster amalgamados em PVC, protegidas contra raios UV...</p>
        </div>
      </article>
    </section>
  </div>
  <div class="region_3">
    <section class="container_12 quem">
      <article class="grid_4">
        <?php 
			$IMG4 = get_bloginfo('template_url').'/timthumb.php?q=100&w=300&h=193&src='. get_bloginfo('template_url').'/assets/img/fotos/quem.jpg';
		?>
        <figure> <img src="<?php echo $IMG4; ?>" /> </figure>
      </article>
      <article class="grid_8 hreview">
        <div class="item">
        <h2 class="fn">QUEM SOMOS</h2>
        <p class="description">Auzier Soluções Tensionadas conta com arquitetos experientes e capacitados, bem como com fornecedores das mais conceituadas marcas no Brasil e no mundo, tornando seu projeto diferenciado.<br />
          Empresa especializada em soluções tensionadas para arquitetura nos seguimentos: residenciais, comerciais, corporativos, shoppings, hospitais, entre outros.<br />
          Confiança, capacidade técnica, qualidade e satisfação, essas são as nossas metas. Estamos no Rio de Janeiro e atendemos em todo território nacional.</p>
        <div class="item">
      </article>
    </section>
  </div>
</div>
<?php get_footer(); ?>
