<?php get_header(); ?>
  <!-- MAIN -->
  <div id="main" role="main"> 
    <!-- SECTION1 -->
    <section class="quem_somos container_24 clearfix">
      <div class="grid_22 prefix_1 suffix_1" >
        <h2 class="grid_8 alpha suffix_5">Cadastre-se</h2>
        <div class="grid_9 omega">
           <?php get_template_part('busca'); ?>
        </div>
        <div class="traco alpha grid_22 omega esp"></div>
        <div class="clear"></div>
        <form class="cadastre" action="" method="post">
          <?php dynamic_sidebar('cadastre');?>
        </form>
      </div>
      <div class="sombra"></div>
    </section>
    <!-- /SECTION1 --> 
  </div>
  <!-- /MAIN -->
<?php get_footer(); ?>