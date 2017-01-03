<?php include("header.php"); ?>
<div role="main">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="page-header">
    <h1>Cadastro de Músicas <small></small></h1>
  </div>
        <div class="row">
          <form class="form-horizontal">
            <fieldset>
              <legend>Editor de Músicas</legend>
              <div class="span7 tab">
                <div class="control-group">
                  <label class="control-label" for="titulo">Título</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" id="titulo">
                    <p class="help-block">Título da Música</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="autor">Autor</label>
                  <div class="controls">
                    <div class="input-append">
                      <select class="input-xlarge" name="autor">
                      </select>
                      <a data-target="#autor" class="btn btn-primary" data-toggle="modal">
                        Novo
                      </a>
                    </div>
                    <p class="help-block">Autor da Música</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="genero">Gênero</label>
                  <div class="controls">
                    <div class="input-append">
                      <select class="input-xlarge" name="genero">
                      </select>
                      <a data-target="#genero" class="btn btn-primary" data-toggle="modal">
                        Novo
                      </a>
                    </div>
                    <p class="help-block">Gênero da Música</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="interprete">Interprete</label>
                  <div class="controls">
                    <div class="input-append">
                      <select class="input-xlarge" name="interprete">
                      </select>
                      <a href="interprete_frm.php" class="btn btn-primary">
                        Novo
                      </a>
                    </div>
                    <p class="help-block">Interprete da Música</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="gravadora">Gravadora</label>
                  <div class="controls">
                    <div class="input-append">
                      <select class="input-xlarge" name="gravadora">
                      </select>
                      <a data-target="#gravadora" class="btn btn-primary" data-toggle="modal">
                        Novo
                      </a>
                    </div>
                    <p class="help-block">Gravadora da Música</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="numero">Número de série</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" id="numero">
                    <p class="help-block">Número de série da Música</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="data">Data da Gravação</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge data" id="data">
                    <p class="help-block">Data da gravação da Música</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="obs">Observações</label>
                  <div class="controls">
                    <textarea class="input-xlarge" rows="5" id="obs"></textarea>
                    <p class="help-block">Observações referente a Música</p>
                  </div>
                </div>
              </div>
              <div class="tab">
                <div class="span5 well" style="margin:0px; padding:20px 0px;">
                  <div class="control-group">
                    <label class="control-label" for="foto">Foto</label>
                    <div class="controls">
                      <input type="file" class="input" id="foto">
                      <p class="help-block">Envie um foto para ser a capa desta Música</p>
                    </div>
                  </div>
                  <p class="img"><img src="" width="300" /></p>
                  <div class="control-group">
                    <label class="control-label" for="audio">Audio</label>
                    <div class="controls">
                      <input type="file" class="input" id="audio">
                      <p class="help-block">Envie a Música</p>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="pdf">Arquivo</label>
                    <div class="controls">
                      <input type="file" class="input" id="pdf">
                      <p class="help-block">Envie o arquivo de texto da Música</p>
                    </div>
                  </div>
                </div>
              </div>
              <div style="clear:both">
              </div>
              <div class="form-actions">
                <input name="Cadastrar" class="btn btn-warning btn-large offset2" type="submit">
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/span-->
  </div>
  <!--/row-->
</div>
<hr>
<div class="modal hide fade" id="autor">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Autor</h3>
  </div>
  <form class="form-horizontal">
    <fieldset>
      <div class="modal-body">
        <div class="control-group">
          <label class="control-label" for="nomeaut">Nome</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="nomeaut">
            <p class="help-block">Nome do Autor</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <input name="" class="btn" data-dismiss="modal" type="reset" value="Cancelar">
      <input name="" class="btn btn-primary" type="submit" value="Enviar">
      </div>
    </fieldset>
  </form>
</div>
<div class="modal hide fade" id="genero">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Gênero</h3>
  </div>
  <form class="form-horizontal">
    <fieldset>
      <div class="modal-body">
        <div class="control-group">
          <label class="control-label" for="nomegen">Nome</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="nomegen">
            <p class="help-block">Nome do Gênero</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <input name="" class="btn" data-dismiss="modal" type="reset" value="Cancelar">
      <input name="" class="btn btn-primary" type="submit" value="Enviar">
      </div>
    </fieldset>
  </form>
</div>
<div class="modal hide fade" id="gravadora">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Gravadora</h3>
  </div>
  <form class="form-horizontal">
    <fieldset>
      <div class="modal-body">
        <div class="control-group">
          <label class="control-label" for="nomegra">Nome</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="nomegra">
            <p class="help-block">Noma da Gravadora</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <input name="" class="btn" data-dismiss="modal" type="reset" value="Cancelar">
      <input name="" class="btn btn-primary" type="submit" value="Enviar">
      </div>
    </fieldset>
  </form>
</div>
<?php include('footer.php'); ?>