<?php

session_start();

include '../painel/funcs.php';

$acao = $_GET["a"];

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Cadastro de Promotores | Contato | Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/site.css" type="text/css" />

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput-1.2.2.min.js"></script>
<script type="text/javascript"> 

$().ready(function() {
				   
	// mascara			   			   
	$('#cpf').mask('999.999.999-99');
	$('#tel1').mask('9999-9999');
	$('#tel2').mask('9999-9999');

});
</script> 

</head>

<body>
	<div id="site">
        <h1>Mello&amp;Madruga</h1>
        <div id="cont">
        	<h2>Cadastro de promotores</h2>
            <?php if(!empty($acao)) {
				switch($acao) {
					case 's': $msg = "Cadastro realizado com sucesso. Aguarde contato da nossa equipe."; session_destroy(); break;
					case 'e': $msg = "Houve um erro no processamento. Tente novamente."; break;
				}
				echo '<p>'.$msg.'</p>';
			}
			if($acao!="s") { ?>
            <form action="promotores-acoes.php" method="post" id="cad_promotores">
                <fieldset>
                    <table>
                        <tr>
                        	<td class="tit"><label for="nome">Nome</label></td><td><input type="text" name="nome" id="nome" value="<?php echo $_SESSION["nome"]; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="email">Email</label></td><td><input type="text" name="email" id="email" value="<?php echo $_SESSION["email"]; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="dia_nasc">Data de Nascimento</label></td>
                            <td>
                            	<select name="dia_nasc" id="dia_nasc">
								<?php
                                    for ($i=1;$i<=31;$i++) {
										$dados = '<option value="'.$i.'"';
										if($i == $_SESSION["dia_nasc"]) { $dados .= ' selected="selected"'; }
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
										if($value == $_SESSION["mes_nasc"]) { $dados .= ' selected="selected"'; }
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
										if($i == $_SESSION["ano_nasc"]) { $dados .= ' selected="selected"'; }
										$dados .= '>'.$i.'</option>'."\n";
										echo $dados;
									}
									
								?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cpf">CPF <cite>(obrigatório)</cite></label></td><td><input type="text" name="cpf" id="cpf" value="<?php echo $_SESSION["cpf"]; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="tel1_ddd">Telefone fixo</label></td><td><input type="text" name="tel1_ddd" id="tel1_ddd" maxlength="2" value="<?php echo $_SESSION["tel1_ddd"]; ?>" /> <input type="text" name="tel1" id="tel1" value="<?php echo $_SESSION["tel1"]; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="tel2_ddd">Celular</label></td><td><input type="text" name="tel2_ddd" id="tel2_ddd" maxlength="2" value="<?php echo $_SESSION["tel2_ddd"]; ?>" /> <input type="text" name="tel2" id="tel2" value="<?php echo $_SESSION["tel2"]; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="endereco">Endereço</label></td><td><input type="text" name="endereco" id="endereco" value="<?php echo $_SESSION["endereco"]; ?>" /></td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cidade">Cidade</label></td>
                            <td>
                            	<select name="cidade" id="cidade">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(1,$_SESSION["cidade"]); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="bairro">Bairro</label></td>
                            <td>
                            	<select name="bairro" id="bairro">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(2,$_SESSION["bairro"]); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="cabelo">Cor do cabelo</label></td>
                            <td>
                            	<select name="cabelo" id="cabelo">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(3,$_SESSION["cabelo"]); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="pele">Cor da pele</label></td>
                            <td>
                            	<select name="pele" id="pele">
                                	<option value="0">Escolha</option>
                                	<?php promotores_opt(4,$_SESSION["pele"]); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="altura">Altura</label></td>
                            <td>
                            	<select name="altura" id="altura">
                                	<option value="0">Escolha</option>
									<?php
                                        for ($i=150;$i<=210;$i++) {
                                            $dados = '<option value="'.$i.'"';
											if($i == $_SESSION["altura"]) { $dados .= ' selected="selected"'; }
											$dados .= '>'.$i.'</option>'."\n";
											echo $dados;
                                        }
                                    ?>
                                </select> cm
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label for="sapato">Sapato</label></td>
                            <td>
                            	<select name="sapato" id="sapato">
                                	<option value="0">Escolha</option>
                                	<?php
                                    for ($i=32;$i<=42;$i++) {
										$dados = '<option value="'.$i.'"';
										if($i == $_SESSION["sapato"]) { $dados .= ' selected="selected"'; }
										$dados .= '>'.$i.'</option>'."\n";
										echo $dados;
									}
								?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Idiomas</label></td>
                            <td>
                            	<ul>
                                	<li>inglês
                                    <input type="radio" name="ingles" id="ingles1" value="1" <?php if($_SESSION["ingles"] ==1) { echo 'checked="checked"'; } ?> />
                                    <label for="ingles1">básico</label> 
                                    <input type="radio" name="ingles" id="ingles2" value="2" <?php if($_SESSION["ingles"] ==2) { echo 'checked="checked"'; } ?> />
                                    <label for="ingles2">intermediário</label> 
                                    <input type="radio" name="ingles" id="ingles3" value="3" <?php if($_SESSION["ingles"] ==3) { echo 'checked="checked"'; } ?>/>
                                    <label for="ingles3">avançado</label></li>
                                    <li>espanhol 
                                    <input type="radio" name="espanhol" id="espanhol1" value="1" <?php if($_SESSION["espanhol"] ==1) { echo 'checked="checked"'; } ?> />
                                    <label for="espanhol1">básico</label> 
                                    <input type="radio" name="espanhol" id="espanhol2" value="2" <?php if($_SESSION["espanhol"] ==2) { echo 'checked="checked"'; } ?> />
                                    <label for="espanhol2">intermediário</label> 
                                    <input type="radio" name="espanhol" id="espanhol3" value="3" <?php if($_SESSION["espanhol"] ==3) { echo 'checked="checked"'; } ?>/>
                                    <label for="espanhol3">avançado</label></li>
                                    <li>frances 
                                    <input type="radio" name="frances" id="frances1" value="1" <?php if($_SESSION["frances"] ==1) { echo 'checked="checked"'; } ?> />
                                    <label for="frances1">básico</label> 
                                    <input type="radio" name="frances" id="frances2" value="2" <?php if($_SESSION["frances"] ==2) { echo 'checked="checked"'; } ?> />
                                    <label for="frances2">intermediário</label> 
                                    <input type="radio" name="frances" id="frances3" value="3" <?php if($_SESSION["frances"] ==3) { echo 'checked="checked"'; } ?>/>
                                    <label for="frances3">avançado</label></li>
                                    <li>alemão 
                                    <input type="radio" name="alemao" id="alemao1" value="1" <?php if($_SESSION["alemao"] ==1) { echo 'checked="checked"'; } ?> />
                                    <label for="alemao1">básico</label> 
                                    <input type="radio" name="alemao" id="alemao2" value="2" <?php if($_SESSION["alemao"] ==2) { echo 'checked="checked"'; } ?> />
                                    <label for="alemao2">intermediário</label> 
                                    <input type="radio" name="alemao" id="alemao3" value="3" <?php if($_SESSION["alemao"] ==3) { echo 'checked="checked"'; } ?> />
                                    <label for="alemao3">avançado</label></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Carro</label></td>
                            <td>
                            	<input type="radio" name="carro" id="carro1" value="1" <?php if($_SESSION["carro"]==1) { echo 'checked="checked"'; } ?> />
                                <label for="carro1">sim</label> 
                                <input type="radio" name="carro" id="carro2" value="2" <?php if($_SESSION["carro"]==2) { echo 'checked="checked"'; } ?> />
                                <label for="carro2">não</label>
                            </td>
                        </tr>
                        <tr>
                        	<td class="tit"><label>Enviar fotos</label></td>
                            <td>
                            	Envie até 5 fotos.<br />
                                <input type="file" />
                            </td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td><td><input type="submit" class="botao" value="Enviar" /></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
