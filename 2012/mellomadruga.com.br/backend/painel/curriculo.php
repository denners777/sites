<?php

include '../val.inc';
include 'funcs.php';
$acao = $_GET["a"];
$port = $_GET["port"];
$texto = $_GET["texto"];
$lixeira = $_GET["lixeira"];

switch($lixeira){
	case 'sim': $cat = "lixo"; $jquery = "lixeira"; break;
	default: $cat = "atual"; $jquery = "edita"; break;
}

switch($acao){
	case 's-exclui': $msg = "Currículo deletado com sucesso."; $class = "sucesso"; break;
	case 'e-exclui': $msg = "Ocorreu um erro. Tente deletar novamente."; $class = "erro"; break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Curr&iacute;culos | Painel &rsaquo; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
</head>

<body onload="menu_ctrl('curriculo','visualizar')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Curr&iacute;culos</h2>
            <?php if(!empty($acao)) { echo '<p class="'.$class.'" id="erro">'.$msg.'</p>'; } ?>
            <table class="tbl usr">
            	<tr class="tit"><td>Currículo</td><td class="w150 center">Data/Hora de Envio</td></tr>
                <?php curriculos(); ?>
            </table>
        </div>
    </div>
</body>
</html>
