<?php

include '../val.inc';
include 'funcs.php';
$acao = $_GET["a"];
$promotor = $_GET["p"];

include '../conn.inc';
promotores_edita($promotor);

$nasc_x = explode("-",$nasc);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Editar promotor | Painel &#8250; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />
<link href="../css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
<script type="text/javascript" src="../js/jquery.maskedinput-1.2.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.upload.js"></script> 
<script type="text/javascript" src="../js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript"> 
$(function() {
	$('a[rel^=lightbox]').lightBox();
});

$().ready(function() {
				   
	// mascara			   			   
	$('#cpf').mask('999.999.999-99');
	$('#tel1').mask('9999-9999');
	$('#tel2').mask('9999-9999');

});
</script> 

</head>

<body onload="menu_ctrl('promotores','visualizar')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Editar promotor</h2>
            <form action="promotores-acoes.php?a=ed" method="post" id="promotores_edita" enctype="multipart/form-data">
            	<input type="hidden" name="promotorid" value="<?php echo $promotor; ?>">
                <fieldset class="promotor">
                    <table>
                        <tr>
                        	<td class="tit"><label for="nome">Nome</label></td><td><input type="text" name="nome" id="nome" class="w400" value="<?php echo $nome; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="nome_art">Nome Artístico</label></td><td><input type="text" name="nome_art" id="nome_art" class="w400" value="<?php echo $nome_art; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cpf">CPF</label></td><td><input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="rg">RG</label></td><td><input type="text" name="rg" id="rg" value="<?php echo $rg; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="pis">PIS</label></td><td><input type="text" name="pis" id="pis" value="<?php echo $pis; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="tel2_ddd">Endereço</label></td><td><input type="text" name="endereco" id="endereco" class="w400" value="<?php echo $endereco; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cidade">Cidade/UF</label></td><td><input type="text" name="cidade" id="cidade" value="<?php echo $cidade.'/'.$uf; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="bairro">Bairro</label></td><td><input type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="tel1_ddd">Telefone fixo</label></td><td><input type="text" name="tel1_ddd" id="tel1_ddd" maxlength="2" class="w20" value="<?php echo $ddd1; ?>" /> <input type="text" name="tel1" id="tel1" class="w75" value="<?php echo $tel1; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="tel2_ddd">Celular</label></td><td><input type="text" name="tel2_ddd" id="tel2_ddd" maxlength="2" class="w20" value="<?php echo $ddd2; ?>" /> <input type="text" name="tel2" id="tel2" class="w75" value="<?php echo $tel2; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="tel3_ddd">Nextel</label></td><td><input type="text" name="tel3_ddd" id="tel3_ddd" maxlength="2" class="w20" value="<?php echo $ddd3; ?>" /> <input type="text" name="tel3" id="tel3" class="w75" value="<?php echo $tel3; ?>" />&nbsp;&nbsp;Código <input type="text" name="tel3_id" id="tel3_id" class="w75" value="<?php echo $tel3_id; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="dia_nasc">Data de Nascimento</label></td>
                            <td>
                            	<select name="dia_nasc" id="dia_nasc">
								<?php
                                    for ($i=1;$i<=31;$i++) {
										$dados = '<option value="'.$i.'"';
										if($i == $nasc_x[2]) { $dados .= ' selected="selected"'; }
										$dados .= '>'.$i.'</option>'."\n";
										echo $dados;
									}
								?>
                                </select>
                                <select name="mes_nasc" id="mes_nasc">
                                <?php
								
									$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                                    for ($i=0;$i<=11;$i++) {
										$value = $i+1;
										$dados = '<option value="'.$value.'"';
										if($value == $nasc_x[1]) { $dados .= ' selected="selected"'; }
										$dados .= '>'.$meses[$i].'</option>'."\n";
										echo $dados;
									}
									
								?>
                                </select>
                                <select name="ano_nasc" id="ano_nasc">
								<?php
								
									$ano = date('Y');
									$anoi = $ano-18;
									$anof = $ano-60;
                                    for ($i=$anof;$i<=$anoi;$i++) {
										$dados = '<option value="'.$i.'"';
										if($i == $nasc_x[0]) { $dados .= ' selected="selected"'; }
										$dados .= '>'.$i.'</option>'."\n";
										echo $dados;
									}
									
								?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="sexo1">Sexo</label></td>
                            <td>
                            	<input type="radio" name="sexo" id="sexo1" value="M" <?php if($sexo=="M") { echo 'checked="checked"'; } ?> />
                                <label for="sexo1">Masculino</label> 
                                <input type="radio" name="sexo" id="sexo2" value="F" <?php if($sexo=="F") { echo 'checked="checked"'; } ?> />
                                <label for="sexo2">Feminino</label>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="altura_m">Altura</label></td>
                            <td>
                                <select name="altura_m" id="altura_m">
                                    <option value="1" <?php if($altura_m=="1") { echo 'selected="selected"'; } ?>>1</option>
                                    <option value="2" <?php if($altura_m=="2") { echo 'selected="selected"'; } ?>>2</option>
                                </select>m
                                <select name="altura_cm" id="altura_cm">
                                    <?php
                                          for ($i=0;$i<=99;$i++) {
                                              if(strlen($i)==1) { $i = "0".$i; }
                                              $dados = '<option value="'.$i.'"';
											  if($altura_cm==$i) { $dados .= 'selected="selected"'; }
											  $dados .= '>'.$i.'</option>'."\n";
                                              echo $dados;
                                          }
                                      ?>
                                </select>cm
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="uniforme">Uniforme</label></td>
                            <td>
                                <select name="uniforme" id="uniforme">
                                    <option value="0">escolha</option>
                                    <option value="PP" <?php if($uniforme=="PP") { echo 'selected="selected"'; } ?>>PP</option>
                                    <option value="P" <?php if($uniforme=="P") { echo 'selected="selected"'; } ?>>P</option>
                                    <option value="M" <?php if($uniforme=="M") { echo 'selected="selected"'; } ?>>M</option>
                                    <option value="G" <?php if($uniforme=="G") { echo 'selected="selected"'; } ?>>G</option>
                                    <option value="GG" <?php if($uniforme=="GG") { echo 'selected="selected"'; } ?>>GG</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="pele">Pele</label></td>
                            <td>
                            	<select name="pele" id="pele">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(1,$pele); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="olhos">Olhos</label></td>
                            <td>
                            	<select name="olhos" id="olhos">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(2,$olhos); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="oculos">Óculos</label></td>
                            <td>
                            	<select name="oculos" id="oculos">
                                	<option value="N" <?php if($oculos=="N") { echo 'selected="selected"'; } ?>>não</option>
                                    <option value="S" <?php if($oculos=="S") { echo 'selected="selected"'; } ?>>sim</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cabelo">Cor do cabelo</label></td>
                            <td>
                            	<select name="cabelo" id="cabelo">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(3,$cabelo); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cabelo_t">Tipo do cabelo</label></td>
                            <td>
                            	<select name="cabelo_t" id="cabelo_t">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(4,$cabelo_t); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="tatuagem">Tatuagem</label></td>
                            <td>
                            	<select name="tatuagem" id="tatuagem">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(5,$tatuagem); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="piercing">Piercing</label></td>
                            <td>
                            	<select name="piercing" id="piercing">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(6,$piercing); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="escolaridade">Escolaridade</label></td>
                            <td>
                            	<select name="escolaridade" id="escolaridade">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(7,$escolaridade); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="curso">Curso</label></td>
                            <td>
                            	<select name="curso" id="curso">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(8,$curso); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Idiomas</label></td>
                            <td>
                            	<ul>
                                	<li>inglês
                                    <select name="ingles" id="ingles">
                                        <option value="0">Escolha o nível</option>
                                        <?php promotores_opt(10,$ingles); ?>
                                    </select></li>
                                    <li>espanhol 
                                    <select name="espanhol" id="espanhol">
                                        <option value="0">Escolha o nível</option>
                                        <?php promotores_opt(10,$espanhol); ?>
                                    </select></li>
                                    <li>frances 
                                    <select name="frances" id="frances">
                                        <option value="0">Escolha o nível</option>
                                        <?php promotores_opt(10,$frances); ?>
                                    </select></li>
                                    <li>alemão 
                                    <select name="alemao" id="alemao">
                                        <option value="0">Escolha o nível</option>
                                        <?php promotores_opt(10,$alemao); ?>
                                    </select></li>
                                    <li>japonês 
                                    <select name="japones" id="japones">
                                        <option value="0">Escolha o nível</option>
                                        <?php promotores_opt(10,$alemao); ?>
                                    </select></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Disponibilidade de Horário</label></td>
                            <td>
                                <input type="checkbox" name="horario[]" id="horario_manha" value="51" <?php if(in_array("51",$horario,true)) { echo 'checked="checked"'; } ?> /><label for="horario_manha">Manhã</label>
                                <input type="checkbox" name="horario[]" id="horario_tarde" value="52" <?php if(in_array("52",$horario,true)) { echo 'checked="checked"'; } ?> /><label for="horario_tarde">Tarde</label>
                                <input type="checkbox" name="horario[]" id="horario_noite" value="53" <?php if(in_array("53",$horario,true)) { echo 'checked="checked"'; } ?> /><label for="horario_noite">Noite</label>
                                <input type="checkbox" name="horario[]" id="horario_fds" value="54" <?php if(in_array("54",$horario,true)) { echo 'checked="checked"'; } ?> /><label for="horario_fds" class="duplo">Final de semana e feriado</label>
                                <input type="checkbox" name="horario[]" id="horario_todos" value="55" <?php if(in_array("55",$horario,true)) { echo 'checked="checked"'; } ?> /><label for="horario_todos" class="auto">Qualquer horário</label>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Disponibilidade para Viagem</label></td>
                            <td>
                                <input type="checkbox" name="viagem[]" id="viagem_sim" value="61" <?php if(in_array("61",$viagem,true)) { echo 'checked="checked"'; } ?> /><label for="viagem_sim">Sim</label>
                                <input type="checkbox" name="viagem[]" id="viagem_nao" value="62" <?php if(in_array("62",$viagem,true)) { echo 'checked="checked"'; } ?> /><label for="viagem_nao">Não</label>
                                <input type="checkbox" name="viagem[]" id="viagem_fds" value="63" <?php if(in_array("63",$viagem,true)) { echo 'checked="checked"'; } ?> /><label for="viagem_fds" class="auto">Só fim de semana e feriado</label>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Restrição ao uso de</label></td>
                            <td>
                                <input type="checkbox" name="restricao[]" id="restricao_tabaco" value="71" <?php if(in_array("71",$restricao,true)) { echo 'checked="checked"'; } ?> /><label for="restricao_tabaco">Tabaco</label>
                                <input type="checkbox" name="restricao[]" id="restricao_acucar" value="72" <?php if(in_array("72",$restricao,true)) { echo 'checked="checked"'; } ?> /><label for="restricao_acucar">Açucar</label>
                                <input type="checkbox" name="restricao[]" id="restricao_bebida" value="73" <?php if(in_array("73",$restricao,true)) { echo 'checked="checked"'; } ?> /><label for="restricao_bebida" class="auto">Bebida alcoólica</label>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Possibilidade de atuação</label></td>
                            <td>
                                <input type="checkbox" name="atuacao[]" id="atuacao_promotor" value="81" <?php if(in_array("81",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_promotor">Promotor(a)</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_apoio" value="82" <?php if(in_array("82",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_apoio">Apoio</label>         
                                <input type="checkbox" name="atuacao[]" id="atuacao_supervisor" value="83" <?php if(in_array("83",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_supervisor" class="duplo">Supervisor(a)</label><br />
                                <input type="checkbox" name="atuacao[]" id="atuacao_sampling" value="84" <?php if(in_array("84",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_sampling">Sampling</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_receptivo" value="85" <?php if(in_array("85",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_receptivo">Receptivo</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_recreacao" value="86" <?php if(in_array("86",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_recreacao">Recreação</label><br />
                                <input type="checkbox" name="atuacao[]" id="atuacao_seguranca" value="87" <?php if(in_array("87",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_seguranca">Segurança</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_desfile" value="88" <?php if(in_array("88",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_desfile">Desfile</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_bilheteria" value="89" <?php if(in_array("89",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_bilheteria">Bilheteria</label><br />
                                <input type="checkbox" name="atuacao[]" id="atuacao_garcon" value="90" <?php if(in_array("90",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_garcon">Garçon</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_circo" value="91" <?php if(in_array("91",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_circo" class="auto">Art. Circense</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_barman" value="92" <?php if(in_array("92",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_barman">Barman</label><br />
                                <input type="checkbox" name="atuacao[]" id="atuacao_barwoman" value="93" <?php if(in_array("93",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_barwoman">Barwoman</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_troca" value="94" <?php if(in_array("94",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_troca" class="auto">Troca de Brindes</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_garconete" value="95" <?php if(in_array("95",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_garconete">Garçonete</label><br />
                                <input type="checkbox" name="atuacao[]" id="atuacao_motorista" value="96" <?php if(in_array("96",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_motorista">Motorista</label>
                                <input type="checkbox" name="atuacao[]" id="atuacao_danca" value="97" <?php if(in_array("97",$atuacao,true)) { echo 'checked="checked"'; } ?> /><label for="atuacao_danca">Dançarino(a)</label>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Habilitação</label></td>
                            <td>
                                <input type="checkbox" name="habilitacao[]" id="habilitacao_a" value="101" <?php if(in_array("101",$habilitacao,true)) { echo 'checked="checked"'; } ?> /><label for="habilitacao_a">Categoria A</label>
                                <input type="checkbox" name="habilitacao[]" id="habilitacao_b" value="102" <?php if(in_array("102",$habilitacao,true)) { echo 'checked="checked"'; } ?> /><label for="habilitacao_b">Categoria B</label>
                                <input type="checkbox" name="habilitacao[]" id="habilitacao_c" value="103" <?php if(in_array("103",$habilitacao,true)) { echo 'checked="checked"'; } ?> /><label for="habilitacao_c">Categoria C</label>
                                <input type="checkbox" name="habilitacao[]" id="habilitacao_d" value="104" <?php if(in_array("104",$habilitacao,true)) { echo 'checked="checked"'; } ?> /><label for="habilitacao_d">Categoria D</label>
                                <input type="checkbox" name="habilitacao[]" id="habilitacao_nave" value="105" <?php if(in_array("105",$habilitacao,true)) { echo 'checked="checked"'; } ?> /><label for="habilitacao_nave">Aeronave</label>
                                <input type="checkbox" name="habilitacao[]" id="habilitacao_embarca" value="106" <?php if(in_array("106",$habilitacao,true)) { echo 'checked="checked"'; } ?> /><label for="habilitacao_embarca">Embarcação</label>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cache">Pagamento de Cachê</label></td>
                            <td>
                                <select name="cache" id="cache">
                                    <option value="0">escolha</option>
                                    <?php promotores_opt(9,$cache); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="tit">Fotos</td><td><?php promotores_fotos($promotor); ?></td>
                        </tr>
                        <tr>
                          	<td class="tit">Enviar foto</td>
                          	<td><input type="file" class="multi" maxlength="3" name="arquivo_promo[]"/></td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td><td><input type="submit" class="botao" value="Salvar" /></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
