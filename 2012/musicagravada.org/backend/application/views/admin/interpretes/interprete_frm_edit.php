<?php echo $HEADER;
echo $Alertas ?>
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
        <h1>Cadastro de Intérpretes <small></small></h1>
      </div>
      <div class="row">
        <?php
                    $class = array('class' => 'form-horizontal');
                    $hiden = array(Pessoa::ID => $Interprete[Pessoa::ID]);
                    echo form_open('admin/interpretes/atualizar', $class, $hiden);
                    ?>
        <fieldset>
          <legend>Editor de Intérpretes</legend>
          <div class="tab span6">
            <div class="control-group">
              <label class="control-label" for="nome">Nome</label>
              <div class="controls">
                <?php
					echo form_input(Pessoa::NOME, $Interprete[Pessoa::NOME], "class=input-xlarge");
					?>
                <p class="help-block">Nome do Intérprete</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="desc">Descrição</label>
              <div class="controls">
                <?php
					$info = 'class="input-xlarge" rows="5" id="pes_desc"';
					echo form_textarea(Pessoa::DESC, $Interprete[Pessoa::DESC], $info);
				?>
                <p class="help-block">Descrição do Interprete</p>
              </div>
            </div>
          </div>
          <div class="span6 tab " style="margin:0px; padding:20px 0px;">
            <div class="mostra">
              <a class="btn btn-info span4 btn-large img-polaroid openModal2" data-titulo="Foto" data-nome="Foto" data-link="<?php echo site_url('admin/upload/do_upload2/' . $Interprete[Pessoa::ID]) ?>" data-OPT="selectfoto" data-desc="Envie a foto do Interprete.">
                <i class="icon-picture icon-white"></i>Foto | Clique para enviar a foto
              </a>
              <img class="img-polaroid span4" src="<?php echo base_url('uploads/capa/' . $Interprete[Pessoa::FOTO]); ?>" />
            </div>
            <hr class="span4" />
          </div>
          <div class="form-actions span12">
            <?php
				$info3 = array('class' => 'btn btn-warning btn-large offset2', 'name' => 'Cadastrar');
				echo form_submit($info3, 'Enviar');
			?>
          </div>
        </fieldset>
        <?php echo form_close(''); ?>
      </div>
      <!--/row-->
    </div>
    <!--/span-->
  </div>
  <!--/row-->
</div>
<hr>
<div class="modal hide fade" id="Modal2">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>???</h3>
  </div>
  <?php echo form_open_multipart('', array('class' => 'form-horizontal')) ?>
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