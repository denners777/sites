<?php echo $HEADER;
echo $Alertas
?>
<style>
.mostra img, .mostra audio {
	margin-top: 20px;
}
</style>
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
                    $hiden = array(Musica::ID=>  $Musica[Musica::ID]);
                    echo form_open('admin/musicas/atualizar', $class, $hiden);
                    ?>
          <fieldset>
            <legend>Editor de Músicas</legend>
            <div class="span7 tab">
              <div class="control-group">
                <label class="control-label" for="titulo">Título</label>
                <div class="controls">
                  <?php echo form_input(Musica::TITULO, $Musica[Musica::TITULO], "class=input-xlarge"); ?>
                  <p class="help-block">Título da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="interprete">Interprete</label>
                <div class="controls">
                  <div class="input-append">
                    <?php  
                                        echo form_dropdown(Musica::INTERPRETE, $ListaPessoas, $Musica[Musica::INTERPRETE], 'id="selectinterprete" class="input-xlarge"')
                                        ?>
                    <a href="<?php echo site_url('admin/interpretes/cadastrar') ?>" class="btn btn-primary">
                      Novo
                    </a>
                  </div>
                  <p class="help-block">Interprete da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="outrointerprete">Outros Interpretes</label>
                <div class="controls">
                  <div class="input-append">
                    <?php echo form_input(Musica::OUTROINT, $Musica[Musica::OUTROINT], "class=input-xlarge"); ?>
                  </div>
                  <p class="help-block">Outros Interpretes da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="autor">Autor</label>
                <div class="controls">
                  <div class="input-append">
                    <?php echo form_dropdown(Musica::AUTOR, $ListaPessoas, $Musica[Musica::AUTOR], 'id="selectautor" class="input-xlarge"') ?>
                    <a  class="btn btn-primary openModal" data-titulo="Autor" data-nome="Nome" data-link="<?php echo site_url('admin/pessoas/cadastrar/autor') ?>" data-OPT="selectautor" data-desc="Digite o nome do Autor.">
                      Novo
                    </a>
                  </div>
                  <p class="help-block">Autor da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                  <label class="control-label" for="outroautor">Outros autores</label>
                <div class="controls">
                  <?php echo form_input(Musica::OUTROAUT, $Musica[Musica::OUTROAUT], "class=input-xlarge"); ?>
                  <p class="help-block">Outro autores da Música</p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="genero">Gênero</label>
                <div class="controls">
                  <div class="input-append">
                    <?php
						echo form_dropdown(Musica::GENERO, $ListaGenero, $Musica[Musica::GENERO], 'id="selectgenero" class="input-xlarge"')
					?>
                    <a  class="btn btn-primary openModal" data-titulo="Gênero" data-nome="Nome" data-link="<?php echo site_url('admin/variaveis/cadastrar/genero') ?>" data-OPT="selectgenero" data-desc="Digite o nome do Gênero.">
                      Novo
                    </a>
                  </div>
                  <p class="help-block">Gênero da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="gravadora">Gravadora</label>
                <div class="controls">
                  <div class="input-append">
                    <?php
                                        echo form_dropdown(Musica::GRAVADORA, $ListaGravadora, $Musica[Musica::GRAVADORA], 'id="selectgravadora" class="input-xlarge"')
                                        ?>
                    <a  class="btn btn-primary openModal" data-titulo="Gravadora" data-nome="Nome" data-link="<?php echo site_url('admin/variaveis/cadastrar/gravadora') ?>" data-OPT="selectgravadora" data-desc="Digite o nome da Gravadora.">
                      Novo
                    </a>
                  </div>
                  <p class="help-block">Gravadora da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="numero">Número de série</label>
                <div class="controls">
                  <?php echo form_input(Musica::NUMERO, $Musica[Musica::NUMERO], "class=input-xlarge"); ?>
                  <p class="help-block">Número de série da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="data">Data da Gravação</label>
                <div class="controls">
                  <?php 
                  $class2 = 'class ="input-xlarge data"';
                  echo form_input(Musica::DATA, $Musica[Musica::DATA], $class2); ?>
                  <p class="help-block">Data da gravação da Música</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="obs">Observações</label>
                <div class="controls">
                  <?php echo form_textarea(Musica::OBS, $Musica[Musica::OBS], "class=input-xlarge rows=5 id='mus_obs'"); ?>
                  <p class="help-block">Observações referente a Música</p>
                </div>
              </div>
            </div>
            <div class="tab">
              <div class="span5 well" style="margin:0px; padding:20px 0px;">
                <div class="mostra">
                  <a class="btn btn-info btn-large openModal2 span4" data-titulo="Capa" data-nome="Foto" data-link="<?php echo site_url('admin/upload/do_upload/'. $Musica[Musica::ID] .'/capa') ?>" data-OPT="selectcapa" data-desc="Envie a foto para a capa.">
                    <i class="icon-picture icon-white"></i> Capa | Clique para enviar a foto da capa
                  </a>
                  <img class="img-polaroid span4" src="<?php echo base_url('uploads/capa/' . $Musica[Musica::FOTO]); ?>" />
                </div>
                <hr class="span4" />
                <div class="mostra">
                  <a class="btn btn-success btn-large openModal2 span4" data-titulo="Audio" data-nome="Audio" data-link="<?php echo site_url('admin/upload/do_upload/'. $Musica[Musica::ID] .'/mp3') ?>" data-OPT="selectaudio" data-desc="Envie o arquivo no formato mp3.">
                    <i class="icon-bullhorn icon-white"></i> Audio | Clique para enviar o arquivo de audio
                  </a>
                  <audio controls="controls" class="img-polaroid span4">
                    <source src="<?php echo base_url('uploads/mp3/' . $Musica[Musica::MP3]); ?>" type="audio/mp3" />
                  </audio>
                </div>
                <hr class="span4" />
                <div class="mostra">
                  <a class="btn btn-danger span4 btn-large img-polaroid openModal2 " data-titulo="Arquivo" data-nome="Arquivo" data-link="<?php echo site_url('admin/upload/do_upload/'. $Musica[Musica::ID] .'/pdf') ?>" data-OPT="selectpdf" data-desc="Envie o arquivo no formato pdf.">
                    <i class="icon-file icon-white"></i> Arquivo | Clique para enviar o arquivo .pdf
                  </a>
                </div>
                <hr class="span4" />
              </div>
            </div>
            <div style="clear:both">
            </div>
            <div class="form-actions">
              <input value="Atualizar" class="btn btn-warning btn-large offset2" type="submit">
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
<div class="modal hide fade" id="Modal2">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>???</h3>
  </div>
  <?php echo form_open_multipart('',array('class'=>'form-horizontal')) ?>
  <fieldset>
    <div class="modal-body">
      <div class="control-group">
        <label class="control-label" for="valorModal2">???</label>
        <div class="controls">
          <input type="file" class="input-xlarge" name="ARQUIVO" id="valorModal2">
          <p class="help-block">???</p>
        </div>
      </div>
    </div>
    <input type="hidden" id="LINK2">
    <input type="hidden" id="OptName2">
    <div class="modal-footer">
      <input name="" class="btn" data-dismiss="modal" type="reset" value="Cancelar">
      <input name="" class="btn btn-primary" type="submit" id="sendmodal2" value="Enviar">
    </div>
  </fieldset>
  </form>
</div>
<?php echo $FOOTER; ?>