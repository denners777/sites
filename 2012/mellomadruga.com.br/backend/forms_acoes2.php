<?php

extract($_POST,EXTR_SKIP);

if($modo == "contato") {

	$mensagem = "Nome: ".$nome."<br />";
	$mensagem .= "Empresa: ".$empresa."<br />";
	$mensagem .= "E-mail: ".$email."<br />";
	$mensagem .= "Telefone: (".$ddd1.") ".$tel1."<br />";
	$mensagem .= "Celular: (".$ddd2.") ".$tel2."<br /><br />";
	$mensagem .= "Mensagem: ".$msg;
		
	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: MelloMadruga <webmaster@mellomadruga.com>\n"; // remetente
	$headers .= "Cc: marcelomello@mellomadruga.com\n";
	$headers .= "Cc: paulomadruga@mellomadruga.com\n";
	$headers .= "Cc: claudiomadruga@mellomadruga.com\n";
	$headers .= "Return-Path: MelloMadruga <webmaster@mellomadruga.com>\n"; // return-path
	//$envio = mail("contato@mellomadruga.com", "Contato Via Site", $mensagem, $headers);
	 
	if($envio)
	 echo "s";
	else
	 echo "e";
	 exit;
	 
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Mello&amp;Madruga - Soluções de Marketing</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	function mensagem(termo,secao){
		
		if(termo == "s"){
			if(secao=="cv") {
				window.parent.$('#arquivo_cv').val('');
				var mensagem = "Currículo enviado com sucesso.";
				$('#bt_cv').attr('disabled', 'disabled');
			}
			if(secao=="promo") {
				window.parent.$('#cad_promotores').each(function(){
						this.reset();
				});
				var mensagem = "Cadastro enviado com sucesso.";
				$('#bt_promo').attr('disabled', 'disabled');
			}
		}
		
		else { var mensagem = "Ocorreu um erro. Tente novamente."; }
		
		window.parent.$('#retorno_'+secao).html(mensagem);
	
	}
</script>
</head>

<body><?php

/*CONTATO*/

if($modo == "promo") {

	include './conn.inc';
	
	$horario = $_POST["horario"];
	$viagem = $_POST["viagem"];
	$restricao = $_POST["restricao"];
	$atuacao = $_POST["atuacao"];
	$habilitacao = $_POST["habilitacao"];
	
	$cidade_x = explode("/",$cidade);
	$nasc = $ano_nasc.'-'.$mes_nasc.'-'.$dia_nasc;
	$altura = $altura_m.'.'.$altura_cm;
	if(count($horario)!=0) { $horariof = implode("-",$horario); }
	if(count($viagem)!=0) { $viagemf = implode("-",$viagem); }
	if(count($restricao)!=0) { $restricaof = implode("-",$restricao); }
	if(count($atuacao)!=0) { $atuacaof = implode("-",$atuacao); }
	if(count($habilitacao)!=0) { $habilitacaof = implode("-",$habilitacao); }

	$arquivos = $_FILES['arquivo_promo']['tmp_name'];
	$arquivos2 = $_FILES['arquivo_promo']['name'];
	
	print_r($arquivos2);
	
	if(!empty($arquivos[0]) && !empty($arquivos[1])) {
		
		$query = "INSERT INTO promotores (nome, nome_art, cpf, rg, pis, end, cidade, uf, bairro, ddd1, tel1, ddd2, tel2, ddd3, tel3, tel3_id, nasc, sexo, altura, uniforme, pele, olhos, oculos, cabelo, cabelo_t, tatuagem, piercing, escolaridade, curso, ingles, espanhol, frances, alemao, japones, horario, viagem, restricao, atuacao, habilitacao, cache, datacad) VALUES ('$nome', '$nome_art', '$cpf', '$rg', '$pis', '$endereco', '$cidade_x[0]', '$cidade_x[1]', '$bairro', '$tel1_ddd', '$tel1', '$tel2_ddd', '$tel2', '$tel3_ddd', '$tel3', '$tel3_id', '$nasc', '$sexo', '$altura', '$uniforme', '$pele', '$olhos', '$oculos', '$cabelo', '$cabelo_t', '$tatuagem', '$piercing', '$escolaridade', '$curso', '$ingles', '$espanhol', '$frances', '$alemao', '$japones', '$horariof', '$viagemf', '$restricaof', '$atuacaof', '$habilitacaof', '$cache', now())";
		mysql_query($query);
		
		$af = mysql_affected_rows();
		$ultimo = mysql_insert_id();
		
		$i=0;
		
		foreach($arquivos as $arquivo){
			
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
			
			include './up.inc';
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
			
			echo $imagem_url;
			/*BD*/
			if($upload==1) { 
				include './conn.inc';
				mysql_query("INSERT INTO promotores_fotos (nome,url,original,promotor,datahora) VALUES ('$nome','$imagem_url','$nome','$ultimo',now())");
			}
			
			$i++;
		
		}
		
		if($upload==1) { 
			$headers = "MIME-Version: 1.1\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "From: MelloMadruga <webmaster@mellomadruga.com>\n"; // remetente
			$headers .= "Cc: marcelomello@mellomadruga.com\n";
			$headers .= "Cc: paulomadruga@mellomadruga.com\n";
			$headers .= "Return-Path: MelloMadruga <webmaster@mellomadruga.com>\n"; // return-path
			//mail("contato@mellomadruga.com", "Promotor Via Site", "Novo promotor cadastrado. Acesse o Painel para visualizar.", $headers);
			echo '<script type="text/javascript">mensagem(\'s\',\'promo\');</script>';
		}
		
	} else { echo '<script type="text/javascript">mensagem(\'e\',\'promo\');</script>'; }
	
}

if($modo == "cv") {
	
	$arquivo_cv = $_FILES['arquivo_cv']['tmp_name'];
	$nome = $_FILES['arquivo_cv']['name'];
	
	include './up.inc';
	$upload = ftp_put($conn_id, $paths.'/'.$nome, $arquivo_cv, FTP_BINARY);
   	ftp_close($conn_id);
	
	if($upload==1){
		include './conn.inc';
		$query = "INSERT INTO curriculos (arquivo,datahora) VALUES ('$nome', now())";
		mysql_query($query);
		$af = mysql_affected_rows();
	}
	
	if($af==1) {
		
		$headers = "MIME-Version: 1.1\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "From: MelloMadruga <webmaster@mellomadruga.com>\n"; // remetente
		$headers .= "Cc: marcelomello@mellomadruga.com\n";
		$headers .= "Cc: paulomadruga@mellomadruga.com\n";
		$headers .= "Return-Path: MelloMadruga <webmaster@mellomadruga.com>\n"; // return-path
		//mail("contato@mellomadruga.com", "Curriculo Via Site", "Novo CV enviado. Acesse o Painel para visualizar.", $headers);
		echo '<script type="text/javascript">mensagem(\'s\',\'cv\');</script>';
	
	}  else { echo '<script type="text/javascript">mensagem(\'e\',\'cv\');</script>'; }
	
}


?>
</body>
</html>