<?php echo $HEADER; echo $Alertas ?>
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
        <h1><?php echo $PAGINA[Pagina::TITULO]; ?> <small></small></h1>
      </div>
      <div class="row">
        <?php
			$class = array('class' => 'form-horizontal');
			$hiden = array(Pagina::ID => $PAGINA[Pagina::ID]);
			echo form_open('admin/paginas/editar/'.$PAGINA[Pagina::SLUG], $class, $hiden);
		?>
        <fieldset>
          <legend>Editor de Páginas</legend>
          <?php //echo json_encode(array('PTBR'=>'TESTO BR', 'ENUS'=>'TESTO EN')); ?>
         
          <div class="tab span12">
            <div class="control-group">
              <label class="control-label" for="desc">Texto</label>
              <div class="controls">
                <?php
					$info = 'class="input-xxlarge span7" rows="15" id="PTBR" style="height:400px"';
					$TXT = (isset($PAGINA['IDIOMAS']['PTBR'])) ? $PAGINA['IDIOMAS']['PTBR'] : NULL ;
					echo form_textarea('PTBR', $TXT, $info);
				?>
                <p class="help-block"><!--Texto Português --> Coloque o texto aqui</p>
              </div>
            </div>
          </div>
           <!--
          <div class="tab span12">
            <div class="control-group">
              <label class="control-label" for="desc">Inglês</label>
              <div class="controls">
                <?php
					$info = 'class="input-xxlarge span7" rows="15" id="ENUS" style="height:400px"';
					$TXT = (isset($PAGINA['IDIOMAS']['ENUS'])) ? $PAGINA['IDIOMAS']['ENUS'] : NULL ;
					echo form_textarea('ENUS', $TXT, $info);
				?>
                <p class="help-block">Texto Inglês</p>
              </div>
            </div>
          </div>
          -->
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
<?php echo $FOOTER; ?>