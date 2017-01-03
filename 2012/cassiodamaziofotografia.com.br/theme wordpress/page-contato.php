<?php get_header(); ?>
<div role="main">
  <div class="container_12 clearfix" id="contato">
    <div class="col01">
      <h1>CONTATO<span><img src="<?php echo bloginfo('template_url');?>/assets/img/traco_title.png" width="147" height="12" /></span></h1>
      <div class="grid_2 desc">
        <p>Sinta-se à vontade para entrar em contato e fazer perguntas ou tirar suas dúvidas.</p>
        <p>Celular: (21) 8139 - 4904</p>
      </div>
      <div class="grid_4 form">
        <?php   dynamic_sidebar('contato');?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
