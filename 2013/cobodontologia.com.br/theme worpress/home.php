<?php get_template_part('header-home'); ?>

<div role="main" id="main">
  <div class="fundo_ms">
    <div class="container_24 clearfix">
      <div class="grid_8">
        <hgroup>
          <h2>A CLÍNICA</h2>
        </hgroup>
        <nav class="menu-sec">
          <ul>
            <li>
              <a href="?lightbox[width]=550&lightbox[height]=250#instalacoes" class="lightbox">Amplas Instalações</a>
            </li>
            <li>
              <a href="?lightbox[width]=550&lightbox[height]=300#profissionais" class="lightbox">Profissionais Qualificados</a>
            </li>
            <li>
              <a href="?lightbox[width]=550&lightbox[height]=200#equipamentos" class="lightbox">Equipamentos de Última Geração</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="grid_8">
        <hgroup>
          <h2>NOSSOS SERVIÇOS</h2>
        </hgroup>
        <nav class="menu-sec" id="serv">
          <ul>
            <li>
              <a href="<?php echo bloginfo('url');?>/especialidades">Clique aqui e conheça os nossos serviços</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="grid_8">
        <hgroup>
          <h2>DICAS</h2>
        </hgroup>
        <nav class="menu-sec">
          <ul>
            <?php	
			  $args = array('post_type' => 'dicas', 'posts_per_page' => 3);		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		   ?>
            <li>
              <a href="<?php echo bloginfo('url');?>/dicas/#<?php echo $post->post_name; ?>"><?php echo get_post_meta($post-> ID, 'home', true); ?></a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="pag">
    <div class="container_24 clearfix">
      <div class="grid_16 clearfix">
        <!-- linha  -->
        <a href="<?php echo bloginfo('url');?>/especialidades/#odont-est">
          <div class="grid_5 clearfix">
            <figure>
              <img src="http://cobodontologia.com.br/teste/wp-content/uploads/2012/11/18.jpg">
            </figure>
          </div>
          <div class="grid_10 clearfix">
            <h3>Clareamento Dentário</h3>
            <p>A maneira mais rápida e segura de clarear seus dentes. Tratamento com laser ou placas caseiras.</p>
          </div>
        </a>
        <div class="clear">
        </div>
        <!-- /linha  -->
        <!-- linha  -->
        <a href="<?php echo bloginfo('url');?>/especialidades/#ortondontia">
          <div class="grid_5 clearfix">
            <figure>
              <img src="http://cobodontologia.com.br/teste/wp-content/uploads/2012/11/21.jpg">
            </figure>
          </div>
          <div class="grid_10 clearfix">
            <h3>Ortodontia</h3>
            <p>Bracket Safira. Venha conhecer o novo bracket mais transparente do mundo.</p>
          </div>
        </a>
        <div class="clear">
        </div>
        <!-- /linha  -->
        <!-- linha  -->
        <a href="<?php echo bloginfo('url');?>/especialidades/#implantes">
          <div class="grid_5 clearfix">
            <figure>
              <img src="http://cobodontologia.com.br/teste/wp-content/uploads/2012/11/03.jpg">
            </figure>
          </div>
          <div class="grid_10 clearfix">
            <h3>Implante</h3>
            <p>Com a ajuda da tecnologia fazemos de forma rápida e segura a reposição de um dente, de grupos de dentes ou de toda a arcada dentária.</p>
          </div>
        </a>
        <div class="clear">
        </div>
        <!-- /linha  -->
        <!-- linha  -->
        <a href="<?php echo bloginfo('url');?>/especialidades/#periodontia">
          <div class="grid_5 clearfix">
            <figure>
              <img src="http://cobodontologia.com.br/teste/wp-content/uploads/2012/11/04.jpg">
            </figure>
          </div>
          <div class="grid_10 clearfix">
            <h3>Tratamento de Gengiva </h3>
            <p>Tratamentos especializados: Raspagem Gengiva, Tratamento de Bolsas Periodontais, Enxertos Gengivas.</p>
          </div>
        </a>
        <div class="clear">
        </div>
        <!-- /linha  -->
        <!-- linha  -->
        <div class="hide">
          <div id="instalacoes">
            <h3>Amplas Instalações</h3>
            <p>Com sede própria, possuímos amplas e modernas instalações. Dispomos de 3 consultórios odontológicos completos com Raio X , <br />
              sala de esterelizaçao para limpeza, embalagem e esterelizaçao dos intrumentais (conforme legislação da vigilância sanitária) e <br />
              laboratório para prótese.</p>
            <p> Dispomos também de ambiente reservado para descanso no Day Clinic . </p>
          </div>
          <div id="profissionais">
            <h3>Profissionais Qualificados</h3>
            <p>Nossa equipe é composta por profissionais especializados , experientes e atuantes,  lhe proporcionando um atendimento com alto padrão de qualidade e segurança. </p>
            <p> DRA. PATRIZIA PEDONE<br />
              DRA. JOANA MANSUR<br />
              DR. LUIZ FELIPE BRAGA DA SILVA<br />
              DR. RAQUEL MENEGUINI<br />
              DRA. ESTHER BENCHIMOL KLAUSER<br />
              DRA. CAROLINA DOS SANTOS </p>
          </div>
          <div id="equipamentos">
            <h3>Equipamentos de Última Geração</h3>
            <p>Os grandes aliados da odontologia moderna são os equipamentos odontológicos de ultima geração,  que ,associados aos materiais odontológicos de primeira linha, garantem nossos excelentes resultados e o sucesso de nossa Clínica.</p>
          </div>
        </div>
        <!-- /linha  -->
      </div>
      <div class="grid_8">
        <h3>Novidades</h3>
        <ul class="novidades">
          <?php	
			  $args = array('post_type' => 'novidades', 'posts_per_page' => 3);		
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
		   ?>
          <li>
            <a href="<?php echo bloginfo('url');?>/novidades/#<?php echo $post->post_name; ?>">
              <?php the_title(); ?>
            </a>
          </li>
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <div class="infos">
          <h3>Agende uma Consulta</h3>
          <figure><img src="http://cobodontologia.com.br/teste/wp-content/uploads/2012/11/05.jpg"></figure>
          <span class="title">Para entrar em contato conosco, ligue:</span>
          <span class="tel">(21) 2542-4548</span>
          <span class="tel">(21) 8855-4548</span>
          <address>
          Rua Assis Bueno, nº 1 - Casa <br />
          Botafogo • Rio de Janeiro - RJ
          </address>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
