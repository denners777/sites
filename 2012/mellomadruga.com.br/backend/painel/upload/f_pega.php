<?php
	
	$foto = $_POST["foto"];
	include '../../conn.inc';
	$sql = mysql_query("SELECT * FROM fotos WHERE url='$foto' OR original='$foto'");
	
	while($reg=mysql_fetch_array($sql)) {
		
		switch($reg["formato"]){
			case 0: $formato_txt = "Original"; break;
			case 1: $formato_txt = "Home Grande"; break;
			case 2: $formato_txt = "Destaque Menor"; break;
			case 3: $formato_txt = "Destaque Maior"; break;
		}
	
		$dados .= '<li><div><img src="/upload/'.str_replace(".jpg","_mini.jpg",$reg["url"]).'"></div>'.$reg["titulo"].'<br />'.$formato_txt.'<input type="hidden" name="fotos[]" value="'.$reg["id"].'" /></li>';
		
	}
	
	echo $dados;
	
?>