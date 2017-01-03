<?php get_header(); ?>

<div role="main">
  <div class="container_12 clearfix" id="portifolio">
    <nav class="menucinza"> 
        <a href="<?php echo bloginfo('url');?>/olhares">
          <figure>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/olhares.jpg" >
            <figcaption>Olhares</figcaption>
          </figure>
        </a> 
        <a href="<?php echo bloginfo('url');?>/espetaculos">
          <figure>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/espetaculos.jpg">
            <figcaption>Espetáculos</figcaption>
          </figure>
        </a> 
        <a href="javascript:;" title="Em breve">
          <figure>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/moda.jpg" >
            <figcaption>Moda</figcaption>
          </figure>
        </a> 
        <a href="<?php echo bloginfo('url');?>/produtos">
          <figure>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/produtos.jpg" >
            <figcaption>Produtos</figcaption>
          </figure>
        </a> 
    </nav>
  </div>
</div>
<?php get_footer(); ?>
