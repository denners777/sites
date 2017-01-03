<?php echo $HEADER; 
$Pessoas = array();
$Variavel = array();
$IDINTERP = $Musicas[0][Musica::INTERPRETE];
?>

<div role="main" id="main">
  <section class="container_16 clearfix" id="commom">
    <h1>Discografias
      <div class="borda_horizontal">
        <div class="enfeite_ponta">
        </div>
      </div>
      <div class="borda_vertical">
      </div>
    </h1>
    <article class="grid_15 prefix_1 item">
      <h2><?php echo $INTERPRETE = (isset($Pessoa[$IDINTERP])) ? $Pessoa[$IDINTERP] : $Pessoa[$IDINTERP] = getPessoas($IDINTERP);; ?></h2>
      <table cellpadding="0" cellspacing="0" border="0" class="display" id="tab_discog">
        <thead>
          <tr>
            <th>Intérprete</th>
            <th>Outros Intérpretes</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Autor</th>
            <th>Outros Autores</th>
            <th>Gravadora</th>
            <th>Ano</th>
            <th>Visualizar</th>
          </tr>
        </thead>
        <tbody>
          <?php 
			$i = 1;
			foreach ($Musicas as $lst) {
		 
			$IDAUTOR = $lst[Musica::AUTOR];
			$IDINTERP = $lst[Musica::INTERPRETE];
			$IDVARIAVEL = $lst[Musica::GENERO];
			$IDGRAVADORA = $lst[Musica::GRAVADORA];

			$AUTOR = (isset($Pessoa[$IDAUTOR])) ? $Pessoa[$IDAUTOR] : $Pessoa[$IDAUTOR] = getPessoas($IDAUTOR);
			$GENERO = (isset($Variavels[$IDVARIAVEL])) ? $Variavels[$IDVARIAVEL] : $Variavels[$IDVARIAVEL] = getVariavel($IDVARIAVEL);
			$INTERPRETE = (isset($Pessoa[$IDINTERP])) ? $Pessoa[$IDINTERP] : $Pessoa[$IDINTERP] = getPessoas($IDINTERP);
			$GRAVADORA = (isset($Variavels[$IDGRAVADORA])) ? $Variavels[$IDGRAVADORA] : $Variavels[$IDGRAVADORA] = getVariavel($IDGRAVADORA);
			
			if($i % 2 == 0){
				$class = "linha_amarela";
			}else{
				$class = "linha_branca";
			}
		 ?>
          <tr class="<?php echo $class; ?>">
            <td><?php echo $INTERPRETE ?></td>
            <td><?php echo $lst[Musica::OUTROINT] ?></td>
            <td><?php echo $lst[Musica::TITULO] ?></td>
            <td><?php echo $GENERO ?></td>
            <td><?php echo $AUTOR ?></td>
            <td><?php echo $lst[Musica::OUTROAUT] ?></td>
            <td><?php echo $GRAVADORA; ?></td>
            <td><?php echo $lst[Musica::DATA]; ?></td>
            <td><a href="#overlay" rel="#overlay" class="overla" data-url="<?php echo site_url('getmusica/'.$lst[Musica::ID]); ?>" >Visualizar</a></td>
          </tr>
          <?php $i++; } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Intérprete</th>
            <th>Outros Intérpretes</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Autor</th>
            <th>Outros Autores</th>
            <th>Gravadora</th>
            <th>Ano</th>
            <th>Visualizar</th>
          </tr>
        </tfoot>
      </table>
    </article>
    <a class="voltar" href="javascript:history.go(-1);">
      Voltar<img src="<?php echo base_url('assets/site/img/voltar.png') ?>" width="22" height="24">
    </a>
  </section>
  <section class="overlay container_16">
    <article class="grid_12 prefix_2 suffix_2">
      <div class="item_overlay" id="overlay">
        <div class="fechar">
          Fechar
        </div>
        <table width="706" border="0">
        </table>
      </div>
    </article>
  </section>
</div>
<?php echo $FOOTER; ?>