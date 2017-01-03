<?php echo $HEADER; ?><?php echo $Alertas ?>

<div role="main">
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="page-header">
          <h1>Lista de Gêneros <small></small></h1>
        </div>
        <div class="row">
          <table class="table table-striped">
            <thead>
              <tr style="text-align:center;">
                <th>Nome</th>
                <th colspan="2" style="text-align:center;">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ListaGenero as $ID => $NOME) { ?>
              <tr>
                <td id="VAR<?php echo $ID ?>" ><?php echo $NOME; ?></td>
                <td  style="text-align:center;"><a class="btn openModalVar"  data-id="<?php echo $ID ?>" data-titulo="Gravadora" data-nome="Nome" data-link="<?php echo site_url('admin/variaveis/atualizar/'.$ID) ?>" data-desc="Digite o nome do Gênero.">
                    <i class="icon-edit"></i> Editar
                  </a></td>
                <td width="7%"><a href="<?php echo site_url('admin/variaveis/excluir/' . $ID); ?>"class="btn btn-danger"><i class=" icon-white icon-remove"></i> Apagar</a></td>
              </tr>
              <?php
                            }
                            ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="span6">
        <div class="page-header">
          <h1>Lista de Gravadoras <small></small></h1>
        </div>
        <div class="row">
          <table class="table table-striped">
            <thead>
              <tr style="text-align:center;">
                <th>Nome</th>
                <th colspan="2" style="text-align:center;">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ListaGravadora as $ID => $NOME) { ?>
              <tr>
                <td id="VAR<?php echo $ID ?>" ><?php echo $NOME; ?></td>
                <td  style="text-align:center;"><a class="btn openModalVar" data-id="<?php echo $ID ?>" data-titulo="Gravadora" data-nome="Nome" data-link="<?php echo site_url('admin/variaveis/atualizar/'.$ID) ?>" data-desc="Digite o nome da Gravadora.">
                    <i class="icon-edit"></i> Editar
                  </a></td>
                  <td width="7%"><a href="<?php echo site_url('admin/variaveis/excluir/' . $ID); ?>"class="btn btn-danger"><i class=" icon-white icon-remove"></i> Apagar</a></td>
              </tr>
              <?php
                            }
                            ?>
            </tbody>
          </table>
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
      <input type="hidden" id="OptID">
      <div class="modal-footer">
        <input name="" class="btn" data-dismiss="modal" type="reset" value="Cancelar">
        <input name="" class="btn btn-primary" type="button" id="sendmodalvar" value="Enviar">
      </div>
    </fieldset>
  </form>
</div>
<?php echo $FOOTER; ?>