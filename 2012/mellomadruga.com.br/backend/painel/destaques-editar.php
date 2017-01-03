<?php

include '../val.inc';
include 'funcs.php';
$acao = $_GET["a"];
$destaque = $_GET["d"];

destaques_edita($destaque);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Editar destaque | Painel &rsaquo; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript"> 

$().ready(function() {
	
	// validate signup form on keyup and submit
	$("#destaques_novo").validate({
		rules: {
			gde1: {
				required: true,
			},
			sel_gde1: {
				required: true,
			},
			gde2: {
				required: true,
			},
			sel_gde2: {
				required: true,
			},
			peq1: {
				required: true,
			},
			sel_peq1: {
				required: true,
			},
			peq2: {
				required: true,
			},
			sel_peq2: {
				required: true,
			},
			peq3: {
				required: true,
			},
			sel_peq3: {
				required: true,
			},
			peq4: {
				required: true,
			},
			sel_peq4: {
				required: true,
			},
			
		},
		messages: {
			usuario: {
				required: "Informe um nome de usuário",
				minlength: "Deve ter pelo menos 3 caracteres"
			},
			senha: {
				required: "Informe a senha",
				minlength: "Deve ter pelo menos 5 caracteres"
			},
			senha_ch: {
				required: "Informe a confirmação de senha",
				minlength: "Deve ter pelo menos 5 caracteres",
				equalTo: "As senhas não conferem"
			},
			sel_gde1: "Você deve definir uma foto ou escolher um post com foto.",
			sel_gde2: "Você deve definir uma foto ou escolher um post com foto.",
			sel_peq1: "Você deve definir uma foto ou escolher um post com foto.",
			sel_peq2: "Você deve definir uma foto ou escolher um post com foto.",
			sel_peq3: "Você deve definir uma foto ou escolher um post com foto.",
			sel_peq4: "Você deve definir uma foto ou escolher um post com foto.",
			gde1: "Você deve escolher um post.",
			gde2: "Você deve escolher um post.",
			peq1: "Você deve escolher um post.",
			peq2: "Você deve escolher um post.",
			peq3: "Você deve escolher um post.",
			peq4: "Você deve escolher um post.",
		}
	});

});
</script> 
</head>

<body onload="menu_ctrl('destaques','historico')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Editar destaque</h2>
            <form action="destaques-acoes.php?a=ed" method="post" id="destaques_editar">
            	<input type="hidden" name="postid" value="<?php echo $destaque; ?>">
                <fieldset class="post destaques">
                    <table>                    	
                    	<tr><td colspan="2"><img src="destaques_amostra.jpg" /></td></tr>
                        <tr class="tit"><td colspan="2">Escolha os destaques</td></tr>
                        <tr>
                        	<td class="tit">Grande Esquerda</td>
                            <td>
                            	<select name="gde1" id="gde1" onchange="dest_foto_carrega('gde1','1',<?php echo $destaque; ?>)">
                                	<option value="">Escolha</option>
                                	<?php destaques_rel($gde1); ?>
                                </select>
                                <script type="text/javascript">dest_foto_carrega('gde1','1',<?php echo $destaque; ?>)</script>
                            </td>
                        </tr>
                        <tr id="gde1_fotos" class="dest_fotos"><td class="tit">&nbsp;</td><td class="carrega"><!--//--></td></tr>
                        <tr>
                        	<td class="tit">Grande Direita</td>
                            <td>
                            	<select name="gde2" id="gde2" onchange="dest_foto_carrega('gde2','1',<?php echo $destaque; ?>)">
                                	<option value="">Escolha</option>
                                	<?php destaques_rel($gde2); ?>
                                </select>
                                <script type="text/javascript">dest_foto_carrega('gde2','1',<?php echo $destaque; ?>)</script>
                            </td>
                        </tr>
                        <tr id="gde2_fotos" class="dest_fotos"><td class="tit">&nbsp;</td><td class="carrega"><!--//--></td></tr>
                        <tr>
                        	<td class="tit">Pequeno 1</td>
                            <td>
                            	<select name="peq1" id="peq1" onchange="dest_foto_carrega('peq1','2',<?php echo $destaque; ?>)">
                                	<option value="">Escolha</option>
                                	<?php destaques_rel($peq1); ?>
                                </select>
                                <script type="text/javascript">dest_foto_carrega('peq1','2',<?php echo $destaque; ?>)</script>
                            </td>
                        </tr>
                        <tr id="peq1_fotos" class="dest_fotos"><td class="tit">&nbsp;</td><td class="carrega"><!--//--></td></tr>
                        <tr>
                        	<td class="tit">Pequeno 2</td>
                            <td>
                            	<select name="peq2" id="peq2" onchange="dest_foto_carrega('peq2','2',<?php echo $destaque; ?>)">
                                	<option value="">Escolha</option>
                                	<?php destaques_rel($peq2); ?>
                                </select>
                                <script type="text/javascript">dest_foto_carrega('peq2','2',<?php echo $destaque; ?>)</script>
                            </td>
                        </tr>
                        <tr id="peq2_fotos" class="dest_fotos"><td class="tit">&nbsp;</td><td class="carrega"><!--//--></td></tr>
                        <tr>
                        	<td class="tit">Pequeno 3</td>
                            <td>
                            	<select name="peq3" id="peq3" onchange="dest_foto_carrega('peq3','2',<?php echo $destaque; ?>)">
                                	<option value="">Escolha</option>
                                	<?php destaques_rel($peq3); ?>
                                </select>
                                <script type="text/javascript">dest_foto_carrega('peq3','2',<?php echo $destaque; ?>)</script>
                            </td>
                        </tr>
                        <tr id="peq3_fotos" class="dest_fotos"><td class="tit">&nbsp;</td><td class="carrega"><!--//--></td></tr>
                        <tr>
                        	<td class="tit">Pequeno 4</td>
                            <td>
                            	<select name="peq4" id="peq4" onchange="dest_foto_carrega('peq4','2',<?php echo $destaque; ?>)">
                                	<option value="">Escolha</option>
                                	<?php destaques_rel($peq4); ?>
                                </select>
                                <script type="text/javascript">dest_foto_carrega('peq4','2',<?php echo $destaque; ?>)</script>
                            </td>
                        </tr>
                        <tr id="peq4_fotos" class="dest_fotos"><td class="tit">&nbsp;</td><td class="carrega"><!--//--></td></tr>
                        <tr>
                        	<td class="tit">Definir como atual</td>
                            <td>
                            	<input type="radio" name="atual" id="atual_n" value="N" <?php if($atual == "N") { echo ' checked="checked"'; } ?> /> <label for="atual_n">Não</label>
                                <input type="radio" name="atual" id="atual_s" value="S" <?php if($atual == "S") { echo ' checked="checked"'; } ?> /> <label for="atual_s">Sim</label></td>
                        </tr>
                        <tr>
                        	<td colspan="2"><a id="avisualizar" target="_blank">Visualizar</a> <input type="submit" class="botao" value="Salvar" /></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
