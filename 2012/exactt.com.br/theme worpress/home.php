<?php get_header(); get_template_part('banner-pricipal'); ?>

<div role="main">
  <div class="container_12 home"> 
    <!-- Início coluna 01 -->
    <section class="grid_6 coluna01">
      <hgroup>
        <h1><strong>SOBRE</strong> a Exactt <img src="<?php echo bloginfo('template_url');?>/assets/img/visto_small.png" width="28" height="24"></h1>
        <hr color="#FFF" width="460" />
        <h2 class="hyphenate">"Nosso objetivo é oferecer experiências únicas para pessoas que buscam um diferencial na hora de viajar."</h2>
      </hgroup>
      <p class="hyphenate">Inserida no mercado desde 2008, a Exactt Tour é uma empresa que atua em dois segmentos:</p>
      <ul>
        <li>Eventos e Receptivo Corporativo;</li>
        <li>Gerenciamento de Viagens.</li>
      </ul>
      <p class="hyphenate"> Buscando atender as necessidades especificas de seus clientes, a Exactt Tour customiza os serviços oferecidos, prestando assim, um atendimento personalizado e de alto padrão.</p>
        <p class="hyphenate">Suas sócias acumulam mais de 10 anos de experiência no ramo, anos esses, que foram fundamentais para conhecer cada tipo de público e o que cada um deles procura na hora de viajar. </p>
      <a href="<?php echo bloginfo('home');?>/corporativo/">Conheça nossos serviços!</a>
      <hr color="#FFF" width="460" />
    </section>
    <!-- Fim coluna 01 --> 
    <!-- Início coluna 02 -->
    <section class="grid_6 coluna02">
      <article class="destaques"> <a href="javascript:;" class="forms" rel="#form_custom" data-id="reservas" onclick="carrega(this)">
        <div class="title reservas">
          <div><strong>Reservas</strong></div>
        </div>
        </a>
        <div class="content hyphenate">
          <p>Já sabe seu destino? A Exactt preparou pra você os melhores pacotes privativos. Reserve aqui seu pacote e boa viagem!
 <a href="javascript:;" class="forms" rel="#form_custom" data-id="reservas" onclick="carrega(this)">Clique aqui!</a></p>
        </div>
      </article>
      <article class="destaques"> <a href="javascript:;" class="forms" rel="#form_custom" data-id="custom" onclick="carrega(this)">
        <div class="title roteiros">
          <div><strong>Faça seu</strong>
            <h2>roteiro</h2>
          </div>
        </div>
        </a>
        <div class="content hyphenate">
          <p>Não encontrou o roteiro desejado? Aqui você faz seu próprio roteiro, indicando o lugar e os serviços para a sua viagem perfeita.
 <a href="javascript:;" class="forms" rel="#form_custom" data-id="custom" onclick="carrega(this)">Clique aqui!</a></p>
        </div>
      </article>
      <article class="destaques"> 
      <a href="<?php echo bloginfo('home');?>/eventos/">
        <div class="title destaque">
          <div><strong>
            Eventos
            </strong></div>
        </div>
      </a>
        <div class="content hyphenate">
          <p>
            Encontre os melhores pacotes para curtir os principais eventos que acontecem no Brasil com preços especiais.
            <a href="<?php echo bloginfo('home');?>/eventos/">Clique aqui!</a></p>
        </div>
      </article>
    </section>
    <!-- Fim coluna 02 --> 
  </div>
</div>
<?php get_footer(); ?>
