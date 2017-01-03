<?php

function redimensiona($arquivo,$nome,$fotos,$i,$tipo) {
	
	$width=1024;
	$image_info = getimagesize($arquivo);
	$image_type = $image_info["mime"];
	
	/*MEDIDAS*/
	$largura = $image_info[0];
	$altura = $image_info[1];
	
	/*REDIMENSIONA*/
	if($largura<$width){ $width = $largura; $height = $altura; }
	else {
		$ratio = $width / $largura;
		$height = $altura * $ratio;
	}
	
	/*TIPO DO ARQUIVO*/
	if( $image_type == "image/jpeg") { $image = imagecreatefromjpeg($arquivo); }
	elseif($image_type == "image/gif") { $image = imagecreatefromgif($arquivo); }
	elseif($image_type == "image/png") { $image = imagecreatefrompng($arquivo); }
	
	/*GERA GDE*/
	$nova_imagem = imagecreatetruecolor($width, $height);
	imagecopyresampled($nova_imagem, $image, 0, 0, 0, 0, $width, $height, $largura, $altura);
	imagejpeg($nova_imagem,$arquivo,100);
	
	include '../../up.inc';
	$nome_x = explode(".",$nome);
	$imagem_url = date('d').date('m').date('y').date('H').date('i').date('s').$i.".jpg";
   
	/*UPLOAD GDE*/
	$upload = ftp_put($conn_id, $paths.'/'.$imagem_url, $arquivo, FTP_BINARY);
	
	/*GERA PEQ*/
	$w_mini = 100;
	$ratio = $w_mini / $largura;
	$h_mini = $altura * $ratio;
	$nova_imagem_peq = imagecreatetruecolor($w_mini,$h_mini);
	imagecopyresampled($nova_imagem_peq, $image, 0, 0, 0, 0, $w_mini, $h_mini, $largura, $altura);
	imagejpeg($nova_imagem_peq,$arquivo,100);
	
	$imagem_url_peq = str_replace(".jpg","_mini.jpg",$imagem_url);
	
	/*UPLOAD PEQ*/
	$upload = ftp_put($conn_id, $paths.'/'.$imagem_url_peq, $arquivo, FTP_BINARY);
   	ftp_close($conn_id);
	
	/*BD*/
	if($upload==1) { 
		include '../../conn.inc';
		mysql_query("INSERT INTO fotos (titulo,url,original,datahora) VALUES ('$nome_x[0]','$imagem_url','$nome',now())");
		header("Location:f_edita.php?a=s-upload&fotos=".$fotos."&t=".$tipo."&url=".$imagem_url);
	}
	
	else { header("Location:f_envia.php?a=e-upload"); }
}
  
?>