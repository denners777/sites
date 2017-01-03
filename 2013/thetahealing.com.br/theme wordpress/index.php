<?php get_header(); get_template_part('slider'); ?>
    <div role="main" class="home">
      <div class="container_24 clearfix">
        <div class="grid_8 suffix_16"> <a class="button grid_3" href="#">Consultas</a> <a class="button grid_3 suffix_18" href="#">Clipping</a> </div>
        <div class="clear"></div>
        <div class="grid_16">
          <nav id="nav-cursos">
            <h4 class="grid_5 alpha">Selecione um curso</h4>
            <hr class="grid_10 omega " />
            <div class="clear"></div>
            <div class="scrollable grid_15 alpha omega suffix_1">
              <div class="scrollable" id="scrollable"> 
                  <a class="prev"></a>
                    <div class="items">
                      <ul>
                        <li> <a href="#"> <span class="span curso_01"></span> <span class="title">DNA Básico</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_02"></span> <span class="title">DNA Avançado</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_03"></span> <span class="title">Manifestação e Abundância</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_04"></span> <span class="title">Jogo da Vida</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_05"></span> <span class="title">Anatomia Intuitiva</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_06"></span> <span class="title">Relações Mundiais</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_07"></span> <span class="title">DNA 3</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_08"></span> <span class="title">Doenças e Desordens</span> </a> </li>
                      </ul>
                      <ul>
                        <li> <a href="#"> <span class="span curso_09"></span> <span class="title">Criança Arco-Íris</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_10"></span> <span class="title">Alma Gêmea</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_11"></span> <span class="title">Ritmo - Peso Perfeito</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_12"></span> <span class="title">Animal</span> </a> </li>
                        <li> <a href="#"> <span class="span curso_13"></span> <span class="title">Planta</span> </a> </li>
                      </ul>
                    </div>
                  <a class="next"></a> 
                </div>
            </div>
            <hr class="grid_15 omega" />
          </nav>
          <section class="grid_7 alpha suffix_1">
            <article class="box-home">
              <figure> <img src="<?php echo bloginfo('template_url');?>/assets/img/fotobanner/01.jpg" />
                <figcaption>O que é ThetaHealing</figcaption>
              </figure>
              <p>ThetaHealing é uma técnica que nos ensina a identificar e mudar crenças, sentimentos e padrões bloqueadores, criando imediatamente uma nova realidade. Esta ferramenta pode ser facilmente aprendida por qualquer pessoa que tenha interesse em evoluir como ser humano.</p>
              <a href="#">continue lendo >></a> </article>
          </section>
          <section class="grid_7 alpha suffix_1">
            <article class="box-home">
              <figure> <img src="<?php echo bloginfo('template_url');?>/assets/img/fotobanner/02.jpg" />
                <figcaption>Escola Oficial no Brasil</figcaption>
              </figure>
              <p>O Instituto ThetaHealing Brasil, fundado pelos Representantes Oficiais da técnica no Brasil, oferece a formação completa em todos os cursos do ThetaHealing, com certificação internacional.</p>
              <a href="#">continue lendo >></a> </article>
          </section>
        </div>
        <aside class="grid_8 sidebar">
          <h3>Novidades</h3>
          <article>
          <a href="#">
            <h2>Matéria sobre Theta Healing</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <hr />
          </article>
          <article>
          <a href="#">
            <h2>Ativação do DNA</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <hr />
          </article>
          <article>
          <a href="#">
            <h2>Cura Quântica</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <hr />
          </article>
          <a href="#" class="leiamais">LEIA MAIS <div></div></a> 
          </aside>
      </div>
    </div>
<?php get_footer(); ?>