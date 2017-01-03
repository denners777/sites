<?php include("header_login.php"); ?>
<div role="main">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="page-header">
    <h1>Projeto Música Gravada <small>Área restrita</small></h1>
  </div>
        <div class="row">
          <div class="span3">
            &nbsp;
          </div>
          <div class="span6">
            <form class="form-horizontal well">
              <fieldset>
                <legend>Login</legend>
                <div class="control-group">
                  <label class="control-label" for="login">Login</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" id="login">
                    <p class="help-block">Digite o usuário</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="senha">Senha</label>
                  <div class="controls">
                    <input type="password" class="input-xlarge" id="senha">
                    <p class="help-block">Digite a Senha</p>
                  </div>
                </div>
                <div class="form-actions">
                  <input name="Cadastrar" class="btn btn-warning btn-large offset2" type="submit">
                </div>
              </fieldset>
            </form>
          </div>
          <div class="span3">
            &nbsp;
          </div>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/span-->
  </div>
  <!--/row-->
</div>
<hr>
<?php include('footer.php'); ?>