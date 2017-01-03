<?php
//Explicacoes
// func imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
// bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )

// Arquivo

$nome = str_replace(".jpg","",$_GET["imagem"]);
$original = $_GET["imagem"];
$origem = '../../upload/'.$original;
$formato = $_GET["formato"];
$etapa = $_GET["etapa"];

$x1 = $_GET['x'];
$y1 = $_GET['y'];
$x2 = $_GET['x2'];
$y2 = $_GET['y2'];
$l = $_GET['w'];
$a = $_GET['h'];

//Tipo do arquivo/Content type

//Novas Medidas
list($width, $height) = getimagesize($origem);
$nova_largura = $l;
$nova_altura = $a;

//Imagem Corta
$tmpf = tempnam("/tmp", "FOO");
$handle = fopen($tmpf, "w");
fwrite($handle, "writing to tempfile");

$image = imagecreatefromjpeg($origem);
$image_c = imagecreatetruecolor($nova_largura,$nova_altura);
imagecopyresampled($image_c, $image, 0, 0, $x1, $y1, $nova_largura, $nova_altura, $nova_largura, $nova_altura);
imagejpeg($image_c,$tmpf,100);
   
/*UPLOAD GDE*/
include '../../up.inc';
$imagem_url = date('d').date('m').date('y').date('H').date('i').date('s').".jpg";
$upload = ftp_put($conn_id, $paths.'/'.$imagem_url, $tmpf, FTP_BINARY);

/*GERA PEQ*/
$w_mini = 100;
$ratio = $w_mini / $nova_largura;
$h_mini = $nova_altura * $ratio;
$nova_imagem_peq = imagecreatetruecolor($w_mini,$h_mini);
imagecopyresampled($nova_imagem_peq, $image_c, 0, 0, 0, 0, $w_mini, $h_mini, $nova_largura, $nova_altura);
imagejpeg($nova_imagem_peq,$tmpf,100);
	
$imagem_url_peq = str_replace(".jpg","_mini.jpg",$imagem_url);
	
/*UPLOAD PEQ*/
$upload = ftp_put($conn_id, $paths.'/'.$imagem_url_peq, $tmpf, FTP_BINARY);
ftp_close($conn_id);

/*BD*/
if($upload==1) { 
	include '../../conn.inc';
	mysql_query("INSERT INTO fotos (titulo,url,original,formato,datahora) VALUES ('$nome','$imagem_url','$original','$formato',now())");
	$acao="s-destaque";
}
	
else { $acao="e-destaque"; }

switch($acao){
	case 's-destaque': $msg = "Destaque criado com sucesso."; $class = "sucesso"; break;
	case 'e-destaque': $msg = "Houve um problema na criação do destaque. Tente novamente."; $class = "erro"; break;
}

switch($etapa) {
	
	case 1: $etapa_txt = '<a href="f_corta.php?imagem='.$original.'&etapa=2">Seguir para Etapa 2 de 3</a>'; break;
	case 2: $etapa_txt = '<a href="f_corta.php?imagem='.$original.'&etapa=3">Seguir para a última etapa</a>'; break;	
	case 3: $etapa_txt = 'Novos destaques criados com sucesso. <a onclick="fecha_corta(\'f\',\''.$original.'\')">Clique aqui</a> para finalizar e fechar a janela.'; break;
	
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Painel // Mello&amp;Madruga</title>
<link rel="stylesheet" href="/css/upload.css" type="text/css" /> 
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.upload.js"></script>  
<script type="text/javascript" src="/js/painel.js"></script>       
</head>
<body>
<div id="corpo">
	<?php if(empty($etapa)) { ?><p class="fechar"><a onclick="fecha_corta('r','')">FECHAR</a></p><?php } ?>
    <?php if($etapa==3) { ?><p class="fechar"><a onclick="fecha_corta('f','<?php echo $original; ?>')">FECHAR</a></p><?php } ?>
	<?php echo '<p class="'.$class.'" id="erro">'.$msg.' '.$etapa_txt.'</p>'; ?>
</div>
</body> 
</html>