<?php
echo $HEADER;
echo $Alertas;
$Pessoa = array();
$Variavels = array();
?>

<div role="main">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="page-header">
          <h1>Lista de Músicas <small></small></h1>
        </div>
        <div class="row">
          <table class="table table-striped">
            <thead>
              <tr style="text-align:center;">
                <th width="14%">Título</th>
                <th width="8%">Autor</th>
                <th width="9%">Gênero</th>
                <th width="14%">Intérprete</th>
                <th width="12%">Gravadora</th>
                <th width="11%">Nº de Série</th>
                <th width="6%">Foto</th>
                <th width="6%">Música</th>
                <th width="6%">Arquivo</th>
                <th colspan="2" style="text-align:center;">Ações</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="9"></td>
                <td colspan="2" style="text-align:center;"><a href="<?php echo site_url('admin/musicas/cadastrar') ?>" class="btn btn-primary btn-large">
                    <i class="icon-plus icon-white"></i> Novo
                  </a></td>
              </tr>
              <?php 
				foreach ($ListaMusicas as $lst) {
					$IDAUTOR = $lst[Musica::AUTOR];
					$IDINTERP = $lst[Musica::INTERPRETE];
					$IDVARIAVEL = $lst[Musica::GENERO];
					$IDGRAVADORA = $lst[Musica::GRAVADORA];

					$AUTOR = (isset($Pessoa[$IDAUTOR])) ? $Pessoa[$IDAUTOR] : $Pessoa[$IDAUTOR] = getPessoas($IDAUTOR);
					$GENERO = (isset($Variavels[$IDVARIAVEL])) ? $Variavels[$IDVARIAVEL] : $Variavels[$IDVARIAVEL] = getVariavel($IDVARIAVEL);
					$INTERPRETE = (isset($Pessoa[$IDINTERP])) ? $Pessoa[$IDINTERP] : $Pessoa[$IDINTERP] = getPessoas($IDINTERP);
					$GRAVADORA = (isset($Variavels[$IDGRAVADORA])) ? $Variavels[$IDGRAVADORA] : $Variavels[$IDGRAVADORA] = getVariavel($IDGRAVADORA);
				?>
              <tr>
                <td><?php echo $lst[Musica::TITULO] ?></td>
                <td><?php echo $AUTOR ?></td>
                <td><?php echo $GENERO ?></td>
                <td><?php echo $INTERPRETE ?></td>
                <td><?php echo $GRAVADORA; ?></td>
                <td><?php echo $lst[Musica::NUMERO] ?></td>
                <td style="text-align:center;"><a href="<?php echo base_url('uploads/capa/' . $lst[Musica::FOTO]); ?>" title="Ver" class="lightbox" rel="geo<?php echo $lst[Musica::ID]; ?>">
                    <img src="<?php echo base_url('uploads/capa/' . $lst[Musica::FOTO]); ?>" width="50" class="img-polaroid" />
                  </a></td>
                <td style="text-align:center;"><a class="lightbox" href="<?php echo base_url('uploads/mp3/' . $lst[Musica::MP3]); ?>?lightbox[iframe]=true&lightbox[width]=400&lightbox[height]=300" class="btn" title="Escutar" rel="geo<?php echo $lst[Musica::ID]; ?>">
                  <img src="<?php echo base_url('assets/admin/img/escutar_musica.png') ?>" width="40" class="img-polaroid">
                  </a></td>
                <td style="text-align:center;""><a class="lightbox" href="<?php echo base_url('uploads/pdf/' . $lst[Musica::PDF]); ?>?lightbox[iframe]=true&lightbox[width]=960&lightbox[height]=660" class="btn" title="Ver" rel="geo<?php echo $lst[Musica::ID]; ?>">
                  <img src="<?php echo base_url('assets/admin/img/pdf.png') ?>" width="40" class="img-polaroid">
                  </a></td>
                <td width="7%"><a href="<?php echo site_url('admin/musicas/atualizar/' . $lst[Musica::ID]); ?>" class="btn">
                    <i class="icon-edit"></i> Editar
                  </a></td>
                <td width="7%"><a href="<?php echo site_url('admin/musicas/excluir/' . $lst[Musica::ID]); ?>"class="btn">
                    <i class="icon-remove"></i> Apagar
                  </a></td>
              </tr>
              <?php } ?>
              <tr>
                <td colspan="9"></td>
                <td colspan="2" style="text-align:center;"><a href="<?php echo site_url('admin/musicas/cadastrar') ?>" class="btn btn-primary btn-large">
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