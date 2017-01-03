<?php include('header.php'); ?>
  <div role="main" id="main">
    <section class="container_16 clearfix" id="commom">
      <h1>Contato
          <div class="borda_horizontal">
            <div class="enfeite_ponta"></div>
          </div>
          <div class="borda_vertical"></div>
        </h1>
        <article class="grid_6 push_1 contato">
        	<form action="" method="post">
            <div class="line">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome">
            </div>
            <div class="line">
              <label for="email">E-mail</label>
              <input type="text" name="email" id="email">
            </div>
            <div class="line">
            <label for="assunto">Assunto</label>
            <input type="text" name="assunto" id="assunto"></div>
            <div class="line">
              <label for="msg">Mensagem</label>
            </div>
            <textarea name="msg" id="msg"></textarea>
            <input name="" type="submit" value="Enviar">
            </form>
      </article>
    </section>
  </div>
  <?php include('footer.php'); ?>