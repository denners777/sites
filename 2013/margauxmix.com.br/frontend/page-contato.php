<?php include "header.php"?>
<div id="main" role="main">
  <div class="container_16 clearfix">
    <!-- breadcrumb -->
    <div class="breadcrumb">
      <a href="#">Home</a>
      »
      <a href="#">Contato</a>
    </div>
    <!-- /breadcrumb -->
    <div class="clear">
    </div>
    
    <!-- titulo -->
    <div class="grid_16 faixa">
      <h4>CONTATO</h4>
    </div>
    <!-- /titulo -->
    <div class="contato clearfix">
      <span class="grid_16">Preencha o formulário abaixo e fale conosco.</span>
      <div class="grid_7 suffix_1 formulario">
        <ul class="clearfix">
          <li class="clearfix">
            <label for="nome">NOME</label>
            <input name="nome" type="text">
          </li>
          <li class="clearfix">
            <label for="tel">TELEFONE</label>
            <input name="tel" type="tel">
          </li>
          <li class="clearfix">
            <label for="email">E-MAIL</label>
            <input name="email" type="email">
          </li>
          <li class="clearfix">
            <label for="subject">ASSUNTO</label>
            <input name="subject" type="text">
          </li>
        </ul>
        <div class="clear">
        </div>
        <div class="tel">
          <span class="ico"></span>
          <span><small>21</small> . 2345-6789</span>
        </div>
      </div>
      <div class="grid_8 formulario">
        <ul>
          <li class="clearfix">
            <label for="msg">MENSAGEM</label>
            <textarea name="msg" cols="" rows=""></textarea>
          </li>
          <li class="clearfix">
            <input name="" type="submit" value="Enviar" class="comprar">
            <span class="seta"></span>
          </li>
        </ul>
      </div>
    </div>
    <figure class="grid_16 fig_contato">
      <img src="assets/img/icons-contato.jpg" />
    </figure>
  </div>
  <div class="sombra">
  </div>
</div>
<?php include "footer.php"?>
