<?php
$Pessoa = array();
$Variavels = array();

$IDAUTOR = $Musica[Musica::AUTOR];
$IDINTERP = $Musica[Musica::INTERPRETE]; 
$IDVARIAVEL = $Musica[Musica::GENERO];
$IDGRAVADORA = $Musica[Musica::GRAVADORA];

$AUTOR = (isset($Pessoa[$IDAUTOR])) ? $Pessoa[$IDAUTOR] : $Pessoa[$IDAUTOR] = getPessoas($IDAUTOR);
$GENERO = (isset($Variavels[$IDVARIAVEL])) ? $Variavels[$IDVARIAVEL] : $Variavels[$IDVARIAVEL] = getVariavel($IDVARIAVEL);
$INTERPRETE = (isset($Pessoa[$IDINTERP])) ? $Pessoa[$IDINTERP] : $Pessoa[$IDINTERP] = getPessoas($IDINTERP);
$GRAVADORA = (isset($Variavels[$IDGRAVADORA])) ? $Variavels[$IDGRAVADORA] : $Variavels[$IDGRAVADORA] = getVariavel($IDGRAVADORA);
?>
<tr>
    <td rowspan="14" class="lp"><img src="
	<?php 
	if($Musica[Musica::FOTO]){
		echo base_url('uploads/capa/' . $Musica[Musica::FOTO]);
	}else{
	echo base_url('assets/site/img/LP.png'); } ?>" width="95" height="96"></td>
	
    <td><strong>Título</strong></td>
    <td><?php echo $Musica[Musica::TITULO]; ?></td>
</tr>
<tr>
    <td><strong>Autor</strong></td>
    <td><?php echo $AUTOR; ?></td>
</tr>
<tr>
    <td><strong>Outros Autores</strong></td>
    <td><?php echo $Musica[Musica::OUTROAUT]; ?></td>
</tr>
<tr>
    <td><strong>Gênero</strong></td>
    <td><?php echo $GENERO; ?></td>
</tr>
<tr>
    <td><strong>Intérprete</strong></td>
    <td><?php echo $INTERPRETE; ?></td>
</tr>
<tr>
    <td><strong>Outros Intérpretes</strong></td>
    <td><?php echo $Musica[Musica::OUTROINT]; ?></td>
</tr>
<tr>
    <td><strong>Gravadora</strong></td>
    <td><?php echo $GRAVADORA; ?></td>
</tr>
<tr>
    <td><strong>Número de Série</strong></td>
    <td><?php echo $Musica[Musica::NUMERO]; ?></td>
</tr>
<tr>
    <td><strong>Ano do Título</strong></td>
    <td><?php echo $Musica[Musica::DATA]; ?></td>
</tr>
<tr>
    <td colspan="2"><strong>Observações</strong></td>
</tr>
<tr>
    <td colspan="2"><div class="boxtext"> <?php echo $Musica[Musica::OBS]; ?></textarea></td></div>
</tr>
<tr>
    <td colspan="2"><strong>Transcrição</strong> <small>
    <?php if($Musica[Musica::PDF]){ ?>
      <a href="<?php echo  base_url('uploads/pdf/' . $Musica[Musica::PDF]); ?>" target="_blank">
      (Faça o download)
      </a>
      <?php } ?>
    </small></td>
</tr>
<tr>
    <td colspan="2"><strong>Áudio da Transcrição</strong></td>
</tr>
<tr>
    <td colspan="2"><audio id="player2" src="<?php echo  base_url('uploads/mp3/' . $Musica[Musica::MP3]); ?>" type="audio/mp3" controls>		
</audio></td>
</tr>
<tr><td colspan="3"></td></tr>
<tr><td colspan="3"></td></tr>
<tr><td colspan="3"></td></tr>