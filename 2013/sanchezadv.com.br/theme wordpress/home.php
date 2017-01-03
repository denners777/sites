<?php get_header(); get_template_part('slider'); ?>

<div role="main" id="main">
  <div class="clearfix topo">
    <div class="container_16">
      <div class="prefix_1 suffix_1 clearfix">
        <div class="grid_14">
          <!-- TOP -->
          <div class="top">
            <p><strong>Sanches Advogados Associados</strong> surgiu da união de profissionais que acreditam nos mesmos ideais.<br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
          </div>
          <!-- /TOP -->
        </div>
      </div>
    </div>
  </div>
  <div class="container_16">
    <!-- MIDDLE -->
    <div class="prefix_1 suffix_1 clearfix middle">
      <h2>O  QUE NÓS FAZEMOS</h2>
      <hr />
      <!-- BOX -->
      <div class="grid_4 box">
        <span class="icon experiencia"></span>
        <h2> Experiência </h2>
        <p>Com a experiência de nossa equipe, é possível analisar o caso do cliente, garantindo a melhor solução em assessoria jurídica.</p>
      </div>
      <!-- /BOX -->
      <!-- BOX -->
      <div class="grid_4 prefix_1 box">
        <span class="icon atendimento"></span>
        <h2> Atendimento Personalizado </h2>
        <p>O atendimento personalizado permite ao cliente acompanhar cada etapa de seu processo. Desta forma, além de atender às necessidades na área de direito, acabamos estabelecendo relações duradouras.</p>
      </div>
      <!-- /BOX -->
      <!-- BOX -->
      <div class="grid_4 prefix_1 box">
        <span class="icon clientes"></span>
        <h2> Nossos Clientes </h2>
        <p>É motivo de orgulho ter clientes que nos acompanham há muitos anos. Afinal, esta é a razão da nossa existência.</p>
      </div>
      <!-- /BOX -->
    </div>
    <div class="prefix_1 suffix_1 clearfix middle">
      <hr />
      <!-- BOX -->
      <div class="grid_4 box">
        <span class="icon acontece"></span>
        <h2> Acontece </h2>
        <ul>
          <li>
            <a href="#">Seminários</a>
          </li>
          <li>
            <a href="#">Eventos</a>
          </li>
          <li>
            <a href="#">Conferências</a>
          </li>
        </ul>
      </div>
      <!-- /BOX -->
      <!-- BOX -->
      <div class="grid_4 prefix_1 box">
        <span class="icon categorias"></span>
        <h2> Categorias </h2>
        <ul>
          <li>
            <a href="#">Nosso Blog</a>
          </li>
          <li>
            <a href="#">Artigos</a>
          </li>
          <li>
            <a href="#">Entrevistas</a>
          </li>
          <li>
            <a href="#">Legislação</a>
          </li>
          <li>
            <a href="#">Publicações</a>
          </li>
          <li>
            <a href="#">Galeria de Imagens</a>
          </li>
        </ul>
      </div>
      <!-- /BOX -->
      <!-- BOX -->
      <div class="grid_4 prefix_1 box">
        <span class="icon links"></span>
        <h2> Links Úteis </h2>
        <ul>
          <li>
            <a href="#">Ecad</a>
          </li>
          <li>
            <a href="#">UBC</a>
          </li>
          <li>
            <a href="#">INPI</a>
          </li>
        </ul>
      </div>
      <!-- /BOX -->
    </div>
    <!-- /MIDDLE -->
  </div>
  <!-- BOTTOM -->
  <div class="bot">
    <div class="container_16 clearfix bottom">
      <div class="prefix_1 suffix_1 clearfix">
        <div id="Slider2" class="grid_14">
          <!--Items -->
          <div class="items" id="items2">
            <?php
			$args = array( 'post_type' => 'destaques', 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
         ?>
            <div class="item">
              <span class="icon"></span>
              <h2>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              <p>
                <?php $texto = get_the_content(); echo limitar($texto, 160); ?>
                <a href='<?php the_permalink(); ?>'>Veja Mais</a>
              </p>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /BOTTOM -->
</div>
</div>
<?php get_footer(); ?>
