<?php include("header.php"); ?>
<div role="main">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="page-header">
    <h1>Cadastro de Intérpretes <small></small></h1>
  </div>
        <div class="row">
          <form class="form-horizontal">
            <fieldset>
              <legend>Editor de Intérpretes</legend>
              <div class="tab">
                <div class="control-group">
                  <label class="control-label" for="nome">Nome</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" id="nome">
                    <p class="help-block">Nome do Intérprete</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="desc">Descrição</label>
                  <div class="controls">
                    <textarea class="input-xlarge" rows="5" id="desc"></textarea>
                    <p class="help-block">Descrição do Interprete</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="fotoint">Foto</label>
                  <div class="controls">
                    <input type="file" class="input-xlarge" id="fotoint">
                    <p class="help-block">Envie um foto para ser a capa desta Música</p>
                  </div>
                </div>
                <p class="img"><img src="" width="300" /></p>
                <div class="form-actions">
                  <input name="Cadastrar" class="btn btn-warning btn-large offset2" type="submit">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <!--/row-->
      </div>
      <!--/span-->
    </div>
    <!--/row-->
  </div>
  <hr>
  <?php include('footer.php'); ?>