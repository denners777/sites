<?php

$acao = $_GET["a"];
$tipo = $_GET["t"];

switch($acao){
	case 's-upload': $msg = "Fotos enviadas com sucesso."; $class = "sucesso"; break;
	case 'e-upload': $msg = "Houve um problema no envio das fotos. Tente enviar novamente."; $class = "erro"; break;
	case 's-legenda': $msg = "Legenda(s) alterada(s) com sucesso."; $class = "sucesso"; break;
	case 'e-legenda': $msg = "Ocorreu um erro na alteração da(s) legenda(s). Tente alterar novamente."; $class = "erro"; break;
}

switch($tipo){
	case 'single': $texto = "<p>Selecione a foto que deseja enviar.</p><p>É permitido 1 arquivo por envio no formato GIF, JPEG ou PNG.</p>"; $num = "1"; $t = 'single'; break;
	default:  $texto = "<p>Selecione as fotos que deseja enviar.</p><p>São permitidos 5 arquivos por envio no formato GIF, JPEG ou PNG.</p>"; $num = "5"; break;
}

if(isset($_POST['submit'])) {
	
	$arquivos = $_FILES['arquivo']['tmp_name'];
	$nome = $_FILES['arquivo']['name'];
	include('f_redimensiona_inicio.php');
	
	$i=0;
	foreach($arquivos as $key=>$arquivo) {
		redimensiona($arquivo,$nome[$key],count($arquivos),$i,$t);
		$i++;
	}

} else {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Painel // Mello&amp;Madruga</title>
<link rel="stylesheet" href="/css/upload.css" type="text/css" /> 
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.upload.js"></script>         
</head>
<body>
<div id="corpo">
	<?php
    if(!empty($acao)) { echo '<p class="'.$class.'" id="erro">'.$msg.'</p>'; }
	echo $texto;
	?>
    <form action="f_envia.php?t=<?php echo $t; ?>" method="post" enctype="multipart/form-data">
        <input type="file" class="multi" maxlength="<?php echo $num; ?>" name="arquivo[]"/>
        <input type="submit" name="submit" value="Enviar" class="botao" />
    </form>
</div>
</body> 
</html>
<?php } ?>