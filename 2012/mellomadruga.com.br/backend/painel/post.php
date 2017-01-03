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
	case 's-novo': $msg = "Post incluído com sucesso."; $class = "sucesso"; break;
	case 'e-novo': $msg = "Ocorreu um erro. Tente incluir novamente."; $class = "erro"; break;
	case 's-edita': $msg = "Post alterado com sucesso."; $class = "sucesso"; break;
	case 'e-edita': $msg = "Ocorreu um erro. Tente alterar novamente."; $class = "erro"; break;
	case 's-exclui': $msg = "Post deletado com sucesso."; $class = "sucesso"; break;
	case 'e-exclui': $msg = "Ocorreu um erro. Tente deletar novamente."; $class = "erro"; break;
	case 's-lixo': $msg = "Post movido para a lixeira com sucesso."; $class = "sucesso"; break;
	case 'e-lixo': $msg = "Ocorreu um erro. Tente mover para a lixeira novamente."; $class = "erro"; break;
	case 's-rest': $msg = "Post restaurado com sucesso."; $class = "sucesso"; break;
	case 'e-rest': $msg = "Ocorreu um erro. Tente restaurar novamente."; $class = "erro"; break;
	case 's-editaf': $msg = "Foto alterada com sucesso."; $class = "sucesso"; break;
	case 'e-editaf': $msg = "Ocorreu um erro. Tente alterar novamente."; $class = "erro"; break;
	case 's-excluif': $msg = "Foto deletada com sucesso."; $class = "sucesso"; break;
	case 'e-excluif': $msg = "Ocorreu um erro. Tente deletar novamente."; $class = "erro"; break;
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

<body onload="menu_ctrl('post','<?php echo $jquery; ?>')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Posts/Conteúdo</h2>
            <h3><a href="?port=5">Eventos</a> | <a href="?port=4">Promoções</a> | <a href="?port=3">Merchandising</a> | <a href="?port=1">Festas</a><!-- | <a href="?port=2">Incentivo Cultural e Esportivo</a>--></h3>
            <form method="get">
            	<fieldset class="busca_post">
            		<input type="text" name="texto" /><input type="submit" value="Buscar" class="botao"  />
                </fieldset>
            </form>
            <?php if(!empty($acao)) { echo '<p class="'.$class.'" id="erro">'.$msg.'</p>'; } ?>
            <table class="tbl usr">
            	<tr class="tit"><td class="w250">Título</td><td class="w150">Categoria</td><td class="w150">Status</td><td class="center">Ordem</td><td class="center">Data</td></tr>
                <?php posts($cat,$port,$texto); ?>
            </table>
        </div>
    </div>
</body>
</html>
