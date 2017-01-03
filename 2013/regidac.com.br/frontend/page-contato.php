<?php include "header.php"; ?>
  <!-- DETALHE -->
  <div class="slid">
  </div>
  <!-- DETALHE -->
  <!-- main -->
  <section id="main" role="main" class="gradient">
    <div class="basic">
      <div class="sombra">
      </div>
      <div class="container_16 clearfix">
        <!-- TITLE -->
        <div class="grid_16 title">
          <h1>Contato</h1>
        </div>
        <!-- /TITLE -->
        <div class="grid_7 suffix_1 formulario">
          <ul>
            <li class="clearfix">
              <label for="name">Nome</label>
              <input type="text" id="name" name="name" value="" />
            </li>
            <li class="clearfix">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" value="" />
            </li>
            <li class="clearfix">
              <label for="tel">Telefone</label>
              <input type="tel" id="tel" name="tel" value="" />
            </li>
            <li class="clearfix">
              <label for="assunto">Assunto</label>
              <select class="select" id="assunto" name="assunto">
                <option value="0">Selecione uma opção</option>
                <option value="Orçamento">Orçamento</option>
                <option value="Dúvidas">Dúvidas</option>
                <option value="Sugetões ou Reclamações">Sugetões ou Reclamações</option>
                <option value="Outros">Outros</option>
              </select>
            </li>
            <li class="clearfix">
              <label for="servicos">Serviços</label>
              <input type="text" id="servicos" name="servicos" />
            </li>
            <li class="clearfix">
              <label for="produtos">Produtos</label>
              <select class="select" id="produtos" name="produtos">
                <option value="0">Selecione uma opção</option>
                <option value="SISDEP">SISDEP</option>
                <option value="SISCON">SISCON</option>
                <option value="SISCONREC">SISCONREC</option>
                <option value="SISFIN">SISFIN</option>
                <option value="SISMED">SISMED</option>
                <option value="SISDIMO">SISDIMO</option>
                <option value="SISCCOND">SISCCOND</option>
              </select>
            </li>
            <li class="clearfix">
              <label for="msg">Mensagem</label>
              <textarea id="msg" name="msg" cols="" rows=""></textarea>
            </li>
            <li class="clearfix">
              <input name="" type="submit" value="ENVIAR" class="link">
            </li>
          </ul>
        </div>
        <aside class="grid_8">
          <figure class="fig2">
            <img src="http://placehold.it/430x240" />
            <div class="sombra">
            </div>
          </figure>
          <h3>Regidac Informática</h3>
          <address>
          Rua Simulação de Endereço, nº 123, Simulação Endereço.
          </address>
          <span class="tel">Tel. 21 2221-6979</span>
        </aside>
      </div>
    </div>
    <div class="faixa_cinza gradient">
      <div class="sombra">
      </div>
    </div>
  </section>
  <!-- /main -->
  <?php include "footer.php"; ?>