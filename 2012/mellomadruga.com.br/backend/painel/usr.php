<?php

include '../val.inc';
include 'funcs.php';
$acao = $_GET["a"];

switch($acao){
	case 's-novo': $msg = "Usuário cadastro com sucesso."; $class = "sucesso"; break;
	case 'e-novo': $msg = "Ocorreu um erro. Tente adicionar novamente."; $class = "erro"; break;
	case 's-edita': $msg = "Usuário alterado com sucesso."; $class = "sucesso"; break;
	case 'e-edita': $msg = "Ocorreu um erro. Tente editar novamente."; $class = "erro"; break;
	case 's-exclui': $msg = "Usuário deletado com sucesso."; $class = "sucesso"; break;
	case 'e-exclui': $msg = "Ocorreu um erro. Tente deletar novamente."; $class = "erro"; break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Usuários | Painel &#8250; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
</head>

<body onload="menu_ctrl('usr','edita')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Usuários</h2>
            <?php if(!empty($acao)) { echo '<p class="'.$class.'" id="erro">'.$msg.'</p>'; } ?>
            <table class="tbl usr">
            	<tr class="tit"><td class="w150">Usuário</td><td class="w200">Nome</td><td class="w150">E-mail</td><td>Nivel</td><td class="center">Ativo</td></tr>
                <?php usrs(); ?>
            </table>
        </div>
    </div>
</body>
</html>
