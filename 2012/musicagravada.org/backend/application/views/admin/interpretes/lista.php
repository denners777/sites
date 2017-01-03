<?php echo $HEADER; ?><?php echo $Alertas ?>
<div role="main">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="page-header">
          <h1>Lista de Interpretes <small></small></h1>
        </div>
        <div class="row">
          <table class="table table-striped">
            <thead>
              <tr style="text-align:center;">
                <th>Nome</th>
                <th>Descrição</th>
                <th style="text-align:center;">Foto</th>
                <th style="text-align:center;" colspan="2">Ação</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="3"></td>
                <td style="text-align:center;" colspan="2"><a href="<?php echo site_url('admin/interpretes/cadastrar') ?>" class="btn btn-primary btn-large">
                    <i class="icon-plus icon-white"></i> Novo
                  </a></td>
              </tr>
              <?php foreach ($ListaInterpretes as $lst) {?>
              <tr>
                <td><?php echo $lst[Pessoa::NOME] ?></td>
                <td><?php echo word_limiter($lst[Pessoa::DESC],10) ?></td>
                <td style="text-align:center;"><a href="<?php echo base_url('uploads/capa/' . $lst[Pessoa::FOTO]); ?>" title="Ver" class="lightbox">
                    <img src="<?php echo base_url('uploads/capa/' . $lst[Pessoa::FOTO]); ?>" width="40" />
                  </a></td>
                <td  style="text-align:center;"><a href="<?php echo site_url('admin/interpretes/atualizar/'.$lst[Pessoa::ID]) ?>" class="btn">
                    <i class="icon-edit"></i> Editar
                  </a></td>
                <td><a href="<?php echo site_url('admin/interpretes/excluir/'.$lst[Pessoa::ID])  ?>"class="btn btn-danger"><i class=" icon-white icon-remove"></i> Apagar</a></td>
              </tr>
              <?php 
                            }
                            ?>
              <tr>
                <td colspan="3"></td>
                <td style="text-align:center;" colspan="2"><a href="<?php echo site_url('admin/interpretes/cadastrar') ?>" class="btn btn-primary btn-large">
                    <i class="icon-plus icon-white"></i> Novo
                  </a></td>
              </tr>
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
<?php echo $FOOTER; ?>