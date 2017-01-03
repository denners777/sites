<?php include("header.php"); ?>
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
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td style="text-align:center;"><a href="#" title="Ver"><img src="" width="25" /></a></td>
                <td style="text-align:center;"><a href="#" class="btn" title="Escutar"><img src="assets/img/escutar_musica.png" width="25"></a></td>
                <td style="text-align:center;""><a href="#" class="btn" title="Ver"><img src="assets/img/pdf.png" width="25"></a></td>
                <td width="7%"><a href="#" class="btn"><i class="icon-edit"></i> Editar</a></td>
                <td width="7%"><a href="#"class="btn"><i class="icon-remove"></i> Apagar</a></td>
              </tr>
              <tr>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td style="text-align:center;"><a href="#" title="Ver"><img src="" width="25" /></a></td>
                <td style="text-align:center;"><a href="#"class="btn" title="Escutar"><img src="assets/img/escutar_musica.png" width="25"></a></td>
                <td style="text-align:center;"><a href="#" class="btn" title="Ver"><img src="assets/img/pdf.png" width="25"></a></td>
                <td><a href="#" class="btn"><i class="icon-edit"></i> Editar</a></td>
                <td><a href="#"class="btn"><i class="icon-remove"></i> Apagar</a></td>
              </tr>
              <tr>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td>Texto</td>
                <td style="text-align:center;"><a href="#" title="Ver"><img src="" width="25" /></a></td>
                <td style="text-align:center;"><a href="#" class="btn" title="Escutar"><img src="assets/img/escutar_musica.png" width="25"></a></td>
                <td style="text-align:center;"><a href="#" class="btn" title="Ver"><img src="assets/img/pdf.png" width="25"></a></td>
                <td><a href="#" class="btn"><i class="icon-edit"></i> Editar</a></td>
                <td><a href="#" class="btn"><i class="icon-remove"></i> Apagar</a></td>
              </tr>
              <tr>
              	<td colspan="9"></td>
              	<td colspan="2" style="text-align:center;"><a href="musica_frm.php" class="btn"><i class="icon-plus"></i> Novo</a></td>
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
<?php include('footer.php'); ?>