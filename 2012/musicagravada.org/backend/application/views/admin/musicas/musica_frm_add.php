<?php echo $HEADER; echo $Alertas; ?>

<div role="main">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="page-header">
          <h1>Cadastro de Músicas <small></small></h1>
        </div>
        <div class="row">
          <?php
                $class = array('class' => 'form-horizontal');
                echo form_open('admin/musicas/cadastrar', $class);
          ?>
          <fieldset>
            <legend>Editor de Músicas</legend>
            <div class="span7 tab">
              <div class="control-group">
                  <label class="control-label" for="titulo">Título</label>
                <div class="controls">
                  <?php echo form_input(Musica::TITULO, NULL, "class=input-xlarge"); ?>
                  <p class="help-block">Título da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="interprete">Interprete</label>
                <div class="controls">
                  <div class="input-append">
                    <?php echo form_dropdown(Musica::INTERPRETE, $ListaPessoas, 0, 'id="selectinterprete" class="input-xlarge"') ?>
                      <a href="<?php echo site_url('admin/interpretes/cadastrar') ?>" class="btn btn-primary"> Novo </a>
                  </div>
                  <p class="help-block">Interprete da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="outrointerprete">Outros Interpretes</label>
                <div class="controls">
                  <div class="input-append">
                    <?php echo form_input(Musica::OUTROINT, NULL, 'class="input-xlarge"') ?>
                  </div>
                  <p class="help-block">Outros Interpretes da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="autor">Autor</label>
                <div class="controls">
                  <div class="input-append">
                    <?php echo form_dropdown(Musica::AUTOR, $ListaPessoas, 0, 'id="selectautor" class="input-xlarge"') ?>
                    <a  class="btn btn-primary openModal" data-titulo="Autor" data-nome="Nome" data-link="<?php echo site_url('admin/pessoas/cadastrar/autor') ?>" data-OPT="selectautor" data-desc="Digite o nome do Autor."> Novo </a>
                  </div>
                  <p class="help-block">Autor da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                  <label class="control-label" for="outroautor">Outros autores</label>
                <div class="controls">
                  <?php echo form_input(Musica::OUTROAUT, NULL, "class=input-xlarge"); ?>
                  <p class="help-block">Outro autores da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="genero">Gênero</label>
                <div class="controls">
                  <div class="input-append">
                    <?php echo form_dropdown(Musica::GENERO, $ListaGenero, 0, 'id="selectgenero" class="input-xlarge"') ?>
                    <a  class="btn btn-primary openModal" data-titulo="Gênero" data-nome="Nome" data-link="<?php echo site_url('admin/variaveis/cadastrar/genero') ?>" data-OPT="selectgenero" data-desc="Digite o nome do Gênero."> Novo </a>
                  </div>
                  <p class="help-block">Gênero da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="gravadora">Gravadora</label>
                <div class="controls">
                  <div class="input-append">
                    <?php  echo form_dropdown(Musica::GRAVADORA, $ListaGravadora, 0, 'id="selectgravadora" class="input-xlarge"')
?>
                    <a  class="btn btn-primary openModal" data-titulo="Gravadora" data-nome="Nome" data-link="<?php echo site_url('admin/variaveis/cadastrar/gravadora') ?>" data-OPT="selectgravadora" data-desc="Digite o nome da Gravadora."> Novo </a>
                  </div>
                  <p class="help-block">Gravadora da Música</p>
                </div>
              </div>
            </div>
            <div class="tab">
              <div class="span5" style="margin:0px; padding:20px 0px;">
                
                <div class="control-group">
                <label class="control-label" for="numero">Número de série</label>
                <div class="controls">
                  <?php echo form_input(Musica::NUMERO, NULL, "class=input-xlarge"); ?>
                  <p class="help-block">Número de série da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="data">Data da Gravação</label>
                <div class="controls">
                  <?php echo form_input(Musica::DATA, NULL, "class='input-xlarge data'"); ?>
                  <p class="help-block">Data da gravação da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="obs">Observações</label>
                <div class="controls">
                  <?php echo form_textarea(Musica::OBS, NULL, "class=input-xlarge rows=5 id='mus_obs'"); ?>
                  <p class="help-block">Observações referente a Música</p>
                </div>
              </div>
                
              </div>
            </div>
            <div style="clear:both">
            </div>
            <div class="form-actions">
              <input value="Cadastrar" class="btn btn-warning btn-large offset4" type="submit">
            </div>
          </fieldset>
          <?php echo form_close(''); ?>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/span-->
  </div>
  <!--/row-->
</div>
<hr>
<div class="modal hide fade" id="Modal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>???</h3>
  </div>
  <form class="form-horizontal" onsubmit="return false;">
    <fieldset>
      <div class="modal-body">
        <div class="control-group">
          <label class="control-label" for="valorModal">???</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="valorModal">
            <p class="help-block">???</p>
          </div>
        </div>
      </div>
      <input type="hidden" id="LINK">
      <input type="hidden" id="OptName">
      <div class="modal-footer">
        <input name="" class="btn" data-dismiss="modal" type="reset" value="Cancelar">
        <input name="" class="btn btn-primary" type="button" id="sendmodal" value="Enviar">
      </div>
    </fieldset>
  </form>
</div>
<?php echo $FOOTER; ?>