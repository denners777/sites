<?php

include '../val.inc';
include 'funcs.php';
$acao = $_GET["a"];

switch($acao){
	case 's-novo': $msg = "Destaque incluído com sucesso."; $class = "sucesso"; break;
	case 'e-novo': $msg = "Ocorreu um erro. Tente incluir novamente."; $class = "erro"; break;
	case 's-edita': $msg = "Destaque alterado com sucesso."; $class = "sucesso"; break;
	case 'e-edita': $msg = "Ocorreu um erro. Tente alterar novamente."; $class = "erro"; break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Posts/Conteúdo | Painel &#8250; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
</head>

<body onload="menu_ctrl('destaques','historico')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Destaques</h2>
            <?php if(!empty($acao)) { echo '<p class="'.$class.'" id="erro">'.$msg.'</p>'; } ?>
            <table class="tbl usr">
            	<tr class="tit"><td class="w250">Criado em</td><td>Atual</td></tr>
                <?php destaques(); ?>
            </table>
        </div>
    </div>
</body>
</html>
