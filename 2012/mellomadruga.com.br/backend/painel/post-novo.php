<?php

include '../val.inc';
include 'funcs.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Adicionar novo post | Painel &rsaquo; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
</head>

<body onload="menu_ctrl('post','novo')">
	<div id="iframe">
    	<iframe src="upload/f_corta.php" width="100%" height="100%" id="corta"></iframe>
    </div>
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Adicionar novo post</h2>
            <form action="post-acoes.php?a=n" method="post" id="post_novo">
            	<input type="hidden" name="usuario" value="<?php echo $_SESSION["usrid"]; ?>">
                <fieldset class="post">
                    <table>
                    	<tr class="tit"><td colspan="2">Cliente</td></tr>
                    	<tr>
                        	<td colspan="2"><input type="text" name="cliente" id="cliente" class="txt" /></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Título</td></tr>
                    	<tr>
                        	<td colspan="2"><input type="text" name="titulo" id="titulo" class="txt" /></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Job</td></tr>
                        <tr>
                        	<td colspan="2">
                            	<textarea name="texto" id="texto" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr class="tit"><td colspan="2">Resultado</td></tr>
                        <tr>
                        	<td colspan="2"><textarea name="resultado" id="resultado" rows="4"></textarea></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Mídia</td></tr>
                        <tr>
                        	<td colspan="2"><textarea name="midia" id="midia" rows="2"></textarea></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Extras</td></tr>
                        <tr>
                        	<td colspan="2" id="extra">
                            	<p><input type="text" name="extra_tit[]" class="extra" value="Clique para editar o titulo" /><textarea name="extra[]" rows="1" class="extra">Clique aqui para editar o conteúdo</textarea></p>
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	<p class="extra" id="aextra"><a>Adicionar mais</a></p>
                            </td>
                        </tr>
                        <tr class="tit"><td colspan="2">Período de Campanha</td></tr>
                        <tr>
                        	<td class="tit">Início</td>
                            <td>Mês <select name="data1_mes" id="data1_mes"><?php
							for($i=01;$i<=12;$i++) {
								
								if(strlen($i)<2) { $i = "0".$i; }
								echo '<option value="'.$i.'">'.$i.'</option>';
								
							} ?></select> de
                            <select name="data1_ano" id="data1_ano"><?php
							for($i=1980;$i<=(date('Y')+10);$i++) {
								
								echo '<option value="'.$i.'">'.$i.'</option>';
								
							} ?></select></td>
                        </tr>
                        <tr>
                        	<td class="tit">Fim</td>
                            <td>Mês <select name="data2_mes" id="data2_mes"><?php
							for($i=01;$i<=12;$i++) {
								
								if(strlen($i)<2) { $i = "0".$i; }
								echo '<option value="'.$i.'">'.$i.'</option>';
								
							} ?></select> de
                            <select name="data2_ano" id="data2_ano"><?php
							for($i=1980;$i<=(date('Y')+10);$i++) {
								
								echo '<option value="'.$i.'">'.$i.'</option>';
								
							} ?></select></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Ordem de Exibição</td></tr>
                        <tr>
                        	<td class="tit">Defina:</td><td><input type="text" name="ordem" class="w20" /></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Categoria</td></tr>
                        <tr>
                        	<td class="tit">Selecione</td><td><?php select_cat("rel"); ?></td>
                        </tr>
                        <tr>
                        	<td colspan="2"><!--//--></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Fotos</td></tr>
                        <tr>
                        	<td class="tit" colspan="2"><iframe src="upload/f_envia.php?t=single" width="100%" height="300px"></iframe></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Fotos anexadas ao post</td></tr>
                        <tr>
                        	<td class="tit" colspan="2"><ul id="fotoscad"></ul></td>
                        </tr>
                        <tr class="tit"><td colspan="2">Publicar</td></tr>
                        <tr>
                        	<td class="tit">Status</td><td><input type="radio" name="tipo" id="tipo1" value="1" checked="checked" /> <label for="tipo1">Publicar agora</label> <input type="radio" name="tipo" id="tipo2" value="2" /> <label for="tipo2">Publicar depois</label></td>
                        </tr>
                        <tr>
                        	<td colspan="2"> <input type="button" class="botao" value="Visualizar" /> <input type="submit" class="botao" value="Adicionar post" /></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
