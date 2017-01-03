<?php get_header(); ?>
  
  <!-- MAIN -->
  
  <div id="main" role="main"> 
    
    <!-- SECTION1 -->
    
    <section class="quem_somos container_24 clearfix">
      <div class="grid_22 prefix_1 suffix_1" >
        <h2 class="grid_7 alpha suffix_6">Contato</h2>
        <div class="grid_9 omega">
           <?php get_template_part('busca'); ?>
        </div>
        <div class="traco alpha grid_22 omega"></div>
        <div class="clear"></div>
        <article class="artigo alpha grid_10 suffix_2"> <span>Entre em contato conosco preenchendo o formulário abaixo:</span>
          <ul class="contato">
            <?php dynamic_sidebar('contato');?>
          </ul>
        </article>
        <aside class="aside grid_10 omega"> <span>Atendimento</span> <span class="tel"><small>21</small> 2215 - 6097 &bull; <small>21</small> 2224 - 5086</span> <span>Fax</span> <span class="tel"><small>21</small> 2283 - 5164</span>
          <address>
          <h1>MedHelp</h1>
          - Av. Almirante Barroso 06<br>
          Sala 2009 /Centro / Rio de Janeiro - RJ
          </address>
          <figure class="maps"> <a href="http://goo.gl/maps/px8mW" target="_blank">
            <?php echo getMap('Av. Alm. Barroso, 6 - Centro Rio de Janeiro - RJ, 20031-000'); ?>
            </a> </figure>
        </aside>
      </div>
      <div class="sombra"></div>
    </section>
    
    <!-- /SECTION1 --> 
    
  </div>
  
  <!-- /MAIN -->
  
<?php get_footer(); ?>