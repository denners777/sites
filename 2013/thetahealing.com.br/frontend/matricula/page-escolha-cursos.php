<?php 
$header = 'header-matricula.php';
$footer = 'footer.php';
include "$header";
?>

<div role="main" class="matricula">
  <div class="container_24 clearfix">
    <h3 class="grid_20">Selecione seu curso pela cidade, pelo nome ou mês</h3>
    <a href="#" class="grid_4 carrinho sombra">Meu Carrinho</a>
    <div class="clear"></div>
    <div class="grid_12">
      <h4>Cidades</h4>
      <menu class="clearfix">
        <ul class="cidades filter">
          <li><a href="javascript:;" class="botao rio-de-janeiro" data-filter=".rio-de-janeiro">Rio de Janeiro</a></li>
          <li><a href="javascript:;" class="botao sao-paulo" data-filter=".sao-paulo">São Paulo</a></li>
          <li><a href="javascript:;" class="botao brasilia" data-filter=".brasilia">Brasília</a></li>
          <li><a href="javascript:;" class="botao curitiba" data-filter=".curitiba">Curitiba</a></li>
          <li class="drop cid"><a href="javascript:;" class="botao outros ">Outros <span></span></a>
            <ul>
              <li><a href="javascript:;" class="" data-filter=".goiania">Goiania</a></li>
              <li><a href="javascript:;" class="" data-filter=".belo-horizonte">Belo Horizonte</a></li>
            </ul>
          </li>
        </ul>
      </menu>
    </div>
    <div class="grid_8">
      <h4>Cursos</h4>
      <menu class="clearfix">
        <ul class="cursos filter">
          <li><a href="javascript:;" class="botao sombra " data-filter=".dna-basico">DNA Básico</a></li>
          <li><a href="javascript:;" class="botao sombra " data-filter=".dna-avancado">DNA Avançado</a></li>
          <li class="drop cur"><a href="javascript:;" class="botao sombra">Outros <span></span></a>
            <ul>
              <li><a href="javascript:;" data-filter=".manifestacao-e-Abundancia" >Manifestação e Abundância</a></li>
              <li><a href="javascript:;" data-filter=".ritmo-peso-perfeito" >Ritmo - Peso Perfeito</a></li>
              <li><a href="javascript:;" data-filter=".alma-gemea" >Alma Gêmea</a></li>
              <li><a href="javascript:;" data-filter=".doencas-e-desordens" >Doenças e Desordens</a></li>
              <li><a href="javascript:;" data-filter=".relacoes-mundiais" >Relações Mundiais</a></li>
              <li><a href="javascript:;" data-filter=".jogo-da-vida" >Jogo da Vida</a></li>
              <li><a href="javascript:;" data-filter=".animal" >Animal</a></li>
              <li><a href="javascript:;" data-filter=".planta" >Planta</a></li>
              <li><a href="javascript:;" data-filter=".dna-3" >DNA 3</a></li>
              <li><a href="javascript:;" data-filter=".anatomia-intuitiva" >Anatomia Intuitiva</a></li>
            </ul>
          </li>
        </ul>
      </menu>
    </div>
    <div class="grid_4">
      <h4>Mês</h4>
      <menu class="clearfix">
        <ul class="mes filter">
          <li class="drop mes"><a href="javascript:;" class="botao sombra">Selecione o Mês <span></span></a>
            <ul>
              <li><a href="javascript:;" data-filter=".janeiro">Janeiro</a></li>
              <li><a href="javascript:;" data-filter=".fevereiro">Fevereiro</a></li>
              <li><a href="javascript:;" data-filter=".marco">Março</a></li>
              <li><a href="javascript:;" data-filter=".abril">Abril</a></li>
              <li><a href="javascript:;" data-filter=".maio">Maio</a></li>
              <li><a href="javascript:;" data-filter=".junho">Junho</a></li>
              <li><a href="javascript:;" data-filter=".julho">Julho</a></li>
              <li><a href="javascript:;" data-filter=".agosto">Agosto</a></li>
              <li><a href="javascript:;" data-filter=".setembro">Setembro</a></li>
              <li><a href="javascript:;" data-filter=".outubro">Outubro</a></li>
              <li><a href="javascript:;" data-filter=".novembro">Novembro</a></li>
              <li><a href="javascript:;" data-filter=".dezembro">Dezembro</a></li>
            </ul>
          </li>
        </ul>
      </menu>
    </div>
  </div>
  <section class="container_24 clearfix" id="container"> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="rio-de-janeiro dna-basico janeiro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_01"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Rio de Janeiro</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span></<br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_01</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="sao-paulo dna-avancado fevereiro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_02"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">São Paulo</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_02</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 6x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="brasilia manifestacao-e-Abundancia marco vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_03"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Brasília</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span><br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_03</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="curitiba ritmo-peso-perfeito abril vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_04"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Curitiba</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_04</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="outros belo-horizonte alma-gemea maio vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_05"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Pernambuco</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_05</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="sao-paulo doencas-e-desordens junho vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_06"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">São Paulo</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span><br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_06</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="curitiba relacoes-mundiais julho vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_07"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Curitiba</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_07</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="outros jogo-da-vida goiania agosto vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_08"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Goiás</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span><br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_08</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="rio-de-janeiro planta setembro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_09"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Rio de Janeiro</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_09</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="brasilia dna-3 outubro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_10"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Brasilia</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_10</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="brasilia anatomia-intuitiva novembro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_03"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Brasília</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span><br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_03</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="outros belo-horizonte dna-basico dezembro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_05"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Pernambuco</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_05</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="sao-paulo dna-avancado janeiro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_02"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">São Paulo</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_02</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="curitiba manifestacao-e-Abundancia fevereiro vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_04"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Curitiba</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_04</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="rio-de-janeiro ritmo-peso-perfeito marco vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_09"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Rio de Janeiro</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_09</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="sao-paulo alma-gemea abril vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_06"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">São Paulo</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span><br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_06</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="curitiba doencas-e-desordens maio vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_07"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Curitiba</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_07</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="rio-de-janeiro relacoes-mundiais junho vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_01"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Rio de Janeiro</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span><br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_01</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="outros goiania jogo-da-vida julho vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_08"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Goiás</span></div>
        <div>Dias <span class="dtstart">13, 14 e 15 / Dez de 2012</span></div>
        <div>Horários <span class="dtstart">Sex das 17 às 21hs<span class="value-title" title="2012-12-13T17:00-21:00"></span><br />
          Sab e Dom das 9 às 17hs<span class="value-title" title="2012-12-15T09:00-17:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_08</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
    <!-- evento --> 
    <a href="#lightbox" class="lightbox" >
    <article class="brasilia animal agosto vevent">
      <h2 class="summary">Nome do Curso</h2>
      <figure class="photo">
        <div class="curso_10"></div>
      </figure>
      <div class="content">
        <div class="location">Local <span class="locality">Brasilia</span></div>
        <div>Dias <span class="dtstart">12/12/2012</span></div>
        <div>Horários <span class="dtstart">16:30<span class="value-title" title="2012-12-12T16:30-21:00"></span></span></div>
        <div style="display:none"> <span class="icon-curso">curso_10</span> <span class="inscricao">R$ 160,00</span> <span class="valor-curso">R$ 1600,00</span> <span class="desconto">R$ 1500,00</span> <span class="parcelamento">Em até 8x sem juros.</span> </div>
      </div>
    </article>
    </a> 
    <!-- /evento --> 
    
  </section>
</div>
<div id="lightbox" style="display: none;">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr valign="middle">
      <td width="240" rowspan="4" style="position:relative;"><div class="icon"></div>
        <div class="nome_curso">sdg</div></td>
      <td width="176"><div class="th">Taxa de Inscrição</div></td>
      <td width="176"><div class="th">Valor do curso</div></td>
      <td width="176"><div class="th">Desconto <span>(a vista/dinheiro)</span></div></td>
      <td width="176"><div class="th last">Parcelamento <span>(valor do curso)</span></div></td>
      <td width="16" rowspan="4"></td>
    </tr>
    <tr>
      <td height="100" class="taxa-inscricao td">xxx</td>
      <td class="valor-curso td">xxx</td>
      <td class="desconto td">xxx</td>
      <td class="parcelamento td last">Em até 6x sem juros.</td>
    </tr>
    <tr>
      <td class="content" colspan="4">*Apenas a taxa de inscrição é paga online. (a vista) O valor de curso é pago no primeiro dia de aula através de cartão de crédito em até 6x juros. Valores sujeitos a alterações em caso de pagamento da taxa de inscrição no dia do curso.</td>
    </tr>
    <tr>
      <td colspan="4" class="bot"><a class="botao sombra" href="javascript:;">Adicionar ao carrinho</a></td>
    </tr>
  </table>
</div>
<?php include "$footer"; ?>
