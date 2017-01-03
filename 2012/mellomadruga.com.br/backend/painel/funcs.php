<?php

//USUARIOS//

function select_usrs($idusr) {
	
	include '../conn.inc';
	$dados .= '<select name="s_usuario">';
	$sql = mysql_query("SELECT id,usuario,nome FROM usrs WHERE id!='$idusr' ORDER BY nome");
	
	while($reg=mysql_fetch_array($sql)){
		$dados .= '<option value="'.$reg["id"].'">'.$reg["usuario"].' ('.$reg["nome"].')</option>';
	}
	
	echo $dados;
}

function usrs() {
		
	include '../conn.inc';
	
	$cor1 = "cor1";  
	$cor2 = "cor2";  
	$row_count = 0; 
	
	$sql = mysql_query("SELECT id,usuario,nome,email,nivel,ativo FROM usrs ORDER BY nome");
	
	while($reg=mysql_fetch_array($sql)){
		
		switch($reg["nivel"]){
			case 1: $nivel_txt = "Administrador"; break;
			case 2: $nivel_txt = "Usuário"; break;
		}
		
		$acoes = '<br /><a href="usr-editar.php?a=ed&amp;u='.$reg["id"].'">Editar</a>';
		if($reg["usuario"] !="admin") { $acoes .= ' | <a href="usr-editar.php?a=ex&amp;u='.$reg["id"].'">Excluir</a>'; }
		
		$cor = ($row_count % 2) ? $cor1 : $cor2;
		$dados .= '<tr class="'.$cor.'"><td>'.$reg["usuario"].$acoes.'</td><td>'.$reg["nome"].'</td><td><a href="mailto:'.$reg["email"].'">'.$reg["email"].'</a></td><td>'.$nivel_txt.'</td><td class="center">'.$reg["ativo"].'</td></tr>';
		$row_count++; 
	}
	
	echo $dados;
}

function usrs_edita($usr) {
		
	include '../conn.inc';
	
	$sql = mysql_query("SELECT usuario,nome,email,nivel,ativo FROM usrs WHERE id='$usr'");
	
	global $usuario, $nome, $email, $nivel, $ativo;
	
	$usuario = mysql_result($sql,0,"usuario");
	$nome = mysql_result($sql,0,"nome");
	$email = mysql_result($sql,0,"email");
	$nivel = mysql_result($sql,0,"nivel");
	$ativo = mysql_result($sql,0,"ativo");
	
}


//POSTS//

function posts($cat,$port,$texto) {
		
	include '../conn.inc';
	
	$cor1 = "cor1";  
	$cor2 = "cor2";  
	$row_count = 0;
	
	switch($cat){
		case "atual": $where = "AND posts.tipo!='3'"; break;
		case "lixo": $where = "AND posts.tipo='3'"; break;
	}
	
	if(!empty($port)) { $where .= " AND posts.categoria='$port'"; } 
	
	$sql = mysql_query("SELECT
					   posts.id AS id, posts.titulo, DATE_FORMAT(posts.datahora, '%d/%m/%Y') AS data1, DATE_FORMAT(posts.dataltera, '%d/%m/%Y') AS data2, posts.categoria, posts.tipo,
					   posts_cat.categoria AS categoria, posts.ordem AS ordem
					   FROM posts INNER JOIN posts_cat ON posts_cat.id = posts.categoria 
					   WHERE texto LIKE '%".$texto."%' ".$where." ORDER BY datahora DESC, ordem ASC");
	
	while($reg=mysql_fetch_array($sql)){
		
		switch($reg["tipo"]){
			case 1: $tipo_txt = "Publicado"; break;
			case 2: $tipo_txt = "Não publicado"; break;
			case 3: $tipo_txt = "Deletar"; break;
		}
		
		if($cat=="atual") {
		$acoes = '<br /><a href="post-editar.php?a=ed&amp;p='.$reg["id"].'">Editar</a> | <a href="post-acoes.php?a=li&amp;p='.$reg["id"].'" onclick="return confirm(\'Deseja enviar o post pra lixeira?\')">Lixeira</a>';
		} else {
		$acoes = '<br /><a href="post-acoes.php?a=re&amp;p='.$reg["id"].'" onclick="return confirm(\'Deseja restaurar o post?\')">Restaurar</a> | <a href="post-acoes.php?a=ex&amp;p='.$reg["id"].'" onclick="return confirm(\'Deseja excluir o post permanentemente?\')">Excluir permanentemente</a>';
		}
		if($reg["data2"] != "00/00/0000") { $modifica = '<br />Modificado em '.$reg["data2"]; }
		
		$cor = ($row_count % 2) ? $cor1 : $cor2;
		$dados .= '<tr class="'.$cor.'"><td>'.$reg["titulo"].$acoes.'</td><td>'.$reg["categoria"].'</td><td>'.$tipo_txt.'</td><td class="center">'.$reg["ordem"].'</td><td class="center">'.$reg["data1"].$modifica.'</td></tr>';
		$row_count++; 
	}
	
	if(empty($dados)) { echo '<tr><td colspan="4">Nenhum post encontrado</td></tr>'; } else { echo $dados; }
}

function posts_edita($post) {
		
	include '../conn.inc';
	
	$sql = mysql_query("SELECT cliente,titulo,texto,resultado,midia,DATE_FORMAT(datahora, '%d/%m/%Y às %H:%i') AS datap1,DATE_FORMAT(dataltera, '%d/%m/%Y às %H:%i') AS datap2,data1,data2,categoria,tipo,ordem FROM posts WHERE id='$post'");
	
	global $cliente, $titulo, $texto, $resultado, $midia, $data1, $data2, $data2_ano, $data2_mes, $data1_ano, $data1_mes, $categoria, $tipo, $extra, $extra_tit, $ordem;
	
	$cliente = mysql_result($sql,0,"cliente");
	$titulo = mysql_result($sql,0,"titulo");
	$texto = mysql_result($sql,0,"texto");
	$resultado = mysql_result($sql,0,"resultado");
	$midia = mysql_result($sql,0,"midia");
	$data1 = mysql_result($sql,0,"datap1");
	$data2 = mysql_result($sql,0,"datap2");
	$data1s = explode("-",mysql_result($sql,0,"data1"));
	$data1_ano = $data1s[0];
	$data1_mes = $data1s[1];
	$data2s = explode("-",mysql_result($sql,0,"data2"));
	$data2_ano = $data2s[0];
	$data2_mes = $data2s[1];
	$categoria = mysql_result($sql,0,"categoria");
	$tipo = mysql_result($sql,0,"tipo");
	$ordem = mysql_result($sql,0,"ordem");
	
	$sql_extra = mysql_query("SELECT id,campo,texto FROM posts_extra WHERE post='$post' ORDER BY id");
	while($reg=mysql_fetch_array($sql_extra)) {
		if(!empty($reg["texto"])){
			$i=$reg["id"];
			$extra[$i] = $reg["texto"];
			$extra_tit[$i] = $reg["campo"];
		}
	}
}

function post_conta_fotos($post){

	global $total_fotos;
	$sql = mysql_query("SELECT * FROM fotos WHERE album='$post' AND formato='0' ORDER BY titulo");
	$total_fotos = mysql_num_rows($sql);

}

function post_fotos($post,$formato,$index,$original){
	
	include '../conn.inc';
	
	global $url;
	
	if($formato==0) { 
		
		$sql = mysql_query("SELECT * FROM fotos WHERE album='$post' AND formato='$formato' ORDER BY id");
		
		$id = mysql_result($sql,$index,"id");
		$url = mysql_result($sql,$index,"url");
		
		$dados .= '<li><div><img src="../upload/'.str_replace(".jpg","_mini.jpg",$url).'"></div>';
		$dados .= '<div class="acoes"><a onclick="corta_foto('.str_replace(".jpg","",$url).')" class="corta_foto")">Recortar foto</a> | <a href="fotos-editar.php?a=ed&amp;f='.$id.'&amp;o='.$url.'">Editar</a> | <a href="fotos-acoes.php?a=ex&amp;f='.$id.'&amp;o='.$url.'"  onclick="return confirm(\'Deseja deletar a foto e seus destaques permanentemente?\')">Excluir</a></div></li>';
			
		echo $dados;
	
	} else { 
	
	
		
		$sql = mysql_query("SELECT * FROM fotos WHERE original='$original' ORDER BY formato");
		
		while($reg=mysql_fetch_array($sql)) {
		
			$dados .= '<li><div><img src="../upload/'.str_replace(".jpg","_mini.jpg",$reg["url"]).'"></div></li>';
		
		}
			
		echo $dados;
	
	}
	
}

function select_cat($item) {
	
	include '../conn.inc';
	$dados .= '<select name="categoria">';
	$sql = mysql_query("SELECT id,categoria FROM posts_cat WHERE id!='2' ORDER BY categoria");
	
	while($reg=mysql_fetch_array($sql)){

		$dados .= '<option value="'.$reg["id"].'"';
		if($item==$reg["id"]) { $dados .= ' selected="selected"'; }
		$dados .= '>'.$reg["categoria"].'</option>';
	}
	
	echo $dados;
}

//PROMOTORES//

function promotores_opt($cat,$opcao){
	
	// $cat legenda == (1) pele | (2) olhos | (3) cabelo | (4) tipo de cabelo | (5) Tatuagem | (6) Piercing | (7) Escolaridade | (8) Curso | (9) Cachê
	$sql = mysql_query("SELECT * FROM form_opt WHERE cat='$cat' ORDER BY id");
	while($reg=mysql_fetch_array($sql)){
		$dados = '<option value="'.$reg["id"].'"';
		if($opcao == $reg["id"]) { $dados .= ' selected="selected"'; }
		$dados .= '>'.$reg["opcao"].'</option>'."\n";
		echo $dados;
	
	}
}

function promotores_opt_nome($opcao){
	include '../conn.inc';
	$sql = mysql_query("SELECT opcao FROM form_opt WHERE id='$opcao'");
	echo mysql_result($sql,0,"opcao");
}


function promotores($cidade,$bairro,$sexo,$idade1,$idade2,$olhos,$oculos,$altura1,$altura2,$tatuagem,$piercing,$uniforme,$escolaridade,$curso,$cabelo,$cabelo_t,$pele,$ingles,$espanhol,$frances,$alemao,$japones,$horario,$viagem,$atuacao,$restricao,$habilitacao) {
		
	include '../conn.inc';
	
	$cor1 = "cor1";  
	$cor2 = "cor2";  
	$row_count = 0;
	
	$where = "WHERE cidade LIKE '%".$cidade."%'";
	
	$dia1 = strftime("%Y-%m-%d",mktime(0,0,0,date('m'),date('d'),date('Y')-$idade1));
	$dia2 = strftime("%Y-%m-%d",mktime(0,0,0,date('m'),date('d')+1,date('Y')-$idade2-1));
	
	if(!empty($bairro)) { $where .= " AND bairro LIKE '%".$bairro."%' "; }
	if(!empty($sexo) && $sexo!="0") { $where .= " AND sexo='$sexo' "; }
	if(!empty($olhos)) { $where .= " AND olhos='$olhos' "; }
	if(!empty($oculos)) { $where .= " AND oculos='$oculos' "; }
	if(!empty($cabelo)) { $where .= " AND cabelo='$cabelo' "; }
	if(!empty($cabelo_t)) { $where .= " AND cabelo_t='$cabelo_t' "; }
	if(!empty($tatuagem)) { $where .= " AND tatuagem='$tatuagem' "; }
	if(!empty($piercing)) { $where .= " AND piercing='$piercing' "; }
	if(!empty($uniforme)) { $where .= " AND uniforme='$uniforme' "; }
	if(!empty($escolaridade)) { $where .= " AND escolaridade='$escolaridade' "; }
	if(!empty($curso)) { $where .= " AND curso='$curso' "; }
	if(!empty($pele)) { $where .= " AND pele='$pele' "; }
	if(isset($ingles)) { $where .= " AND ingles>='$ingles' "; }
	if(isset($espanhol)) { $where .= " AND espanhol>='$espanhol' "; }
	if(isset($frances)) { $where .= " AND frances>='$frances' "; }
	if(isset($alemao)) { $where .= " AND alemao>='$alemao' "; }
	if(isset($japones)) { $where .= " AND japones>='$japones' "; }
	if(!empty($horario)) {
		foreach($horario as $h) {
			$where .= " AND horario LIKE '%".$h."%'";
		}
	}
	if(!empty($viagem)) {
		foreach($viagem as $v) {
			$where .= " AND viagem LIKE '%".$v."%'";
		}
	}
	if(!empty($restricao)) {
		foreach($restricao as $r) {
			$where .= " AND restricao LIKE '%".$r."%'";
		}
	}
	if(!empty($atuacao)) {
		foreach($atuacao as $a) {
			$where .= " AND atuacao LIKE '%".$a."%'";
		}
	}
	if(!empty($habilitacao)) {
		foreach($habilitacao as $h) {
			$where .= " AND atuacao LIKE '%".$a."%'";
		}
	}
	if(!empty($idade1) && !empty($idade2)) { $where .= " AND nasc BETWEEN '$dia2' AND '$dia1' "; }
	if(!empty($altura1) && !empty($altura2)) {
		
		$altura1s = number_format(($altura1/100), 2, '.', '');
		$altura2s = number_format(($altura2/100), 2, '.', '');
		$where .= " AND altura BETWEEN '$altura1s' AND '$altura2s' "; }
	
	$sql = mysql_query("SELECT id, nome, DATE_FORMAT(nasc, '%d/%m/%Y') AS datanasc, DATE_FORMAT(datacad, '%d/%m/%Y') AS cad FROM promotores ".$where." ORDER BY datacad DESC, nome ASC");
	
	while($reg=mysql_fetch_array($sql)){
		
		$promoid = $reg["id"];
		$foto_sql = mysql_query("SELECT url FROM promotores_fotos WHERE promotor='$promoid'");
		$foto = @mysql_result($foto_sql,0,"url");
		if(mysql_num_rows($foto_sql)!=0) { $foto_add = '<span style="background-image:url(../upload/'.str_replace(".jpg","_mini.jpg",$foto).')" class="foto"><!--//--></span>'; }
		$acoes = '<br /><a href="promotores-editar.php?a=ed&amp;p='.$reg["id"].'">Editar</a> | <a href="promotores-visualizar.php?a=vi&amp;p='.$reg["id"].'">Visualizar</a> | <a href="promotores-acoes.php?a=ex&amp;p='.$reg["id"].'" onclick="return confirm(\'Deseja deletar o promotor? Essa ação não poderá ser desfeita.\')">Excluir</a>';
		
		$cor = ($row_count % 2) ? $cor1 : $cor2;
		$dados .= '<tr class="'.$cor.'"><td>'.$foto_add.'</td><td>'.$reg["nome"].$acoes.'</td><td>'.$reg["datanasc"].'</a></td><td class="center">'.$reg["cad"].'</td></tr>';
		$row_count++; 
		$foto_add = "";
	}
	
	if(empty($dados)) { echo '<tr><td colspan="4">Nenhum promotor encontrado</td></tr>'; } else { echo $dados; }
}

function promotores_edita($promotor) {
		
	include '../conn.inc';
	
	$sql = mysql_query("SELECT nome, nome_art, cpf, rg, pis, end, cidade, uf, bairro, ddd1, tel1, ddd2, tel2, ddd3, tel3, tel3_id, nasc, sexo, altura, uniforme, pele, olhos, oculos, cabelo, cabelo_t, tatuagem, piercing, escolaridade, curso, ingles, espanhol, frances, alemao, japones, horario, viagem, restricao, atuacao, habilitacao, cache FROM promotores WHERE id='$promotor'");
	
	global $nome, $nome_art, $cpf, $rg, $pis, $endereco, $cidade, $uf, $bairro, $ddd1, $tel1, $ddd2, $tel2, $ddd3, $tel3, $tel3_id, $nasc, $sexo, $altura_m, $altura_cm, $uniforme, $pele, $olhos, $oculos, $cabelo, $cabelo_t, $tatuagem, $piercing, $escolaridade, $curso, $ingles, $espanhol, $frances, $alemao, $japones, $horario, $viagem, $restricao, $atuacao, $habilitacao, $cache;
	
	$nome = mysql_result($sql,0,"nome");
	$nome_art = mysql_result($sql,0,"nome_art");
	$cpf = mysql_result($sql,0,"cpf");
	$rg = mysql_result($sql,0,"rg");
	$pis = mysql_result($sql,0,"pis");
	$endereco = mysql_result($sql,0,"end");
	$cidade = mysql_result($sql,0,"cidade");
	$uf = mysql_result($sql,0,"uf");
	$bairro = mysql_result($sql,0,"bairro");
	$ddd1 = mysql_result($sql,0,"ddd1");
	$tel1 = mysql_result($sql,0,"tel1");
	$ddd2 = mysql_result($sql,0,"ddd2");
	$tel2 = mysql_result($sql,0,"tel2");
	$ddd3 = mysql_result($sql,0,"ddd3");
	$tel3 = mysql_result($sql,0,"tel3");
	$tel3_id = mysql_result($sql,0,"tel3_id");
	$nasc = mysql_result($sql,0,"nasc");
	$sexo = mysql_result($sql,0,"sexo");
	$altura = explode(".",mysql_result($sql,0,"altura"));
	$altura_m = $altura[0];
	$altura_cm = $altura[1];
	$uniforme = mysql_result($sql,0,"uniforme");
	$pele = mysql_result($sql,0,"pele");
	$olhos = mysql_result($sql,0,"olhos");
	$oculos = mysql_result($sql,0,"oculos");
	$cabelo = mysql_result($sql,0,"cabelo");
	$cabelo_t = mysql_result($sql,0,"cabelo_t");
	$tatuagem = mysql_result($sql,0,"tatuagem");
	$piercing = mysql_result($sql,0,"piercing");
	$escolaridade = mysql_result($sql,0,"escolaridade");
	$curso = mysql_result($sql,0,"curso");
	$ingles = mysql_result($sql,0,"ingles");
	$espanhol = mysql_result($sql,0,"espanhol");
	$frances = mysql_result($sql,0,"frances");
	$alemao = mysql_result($sql,0,"alemao");
	$japones = mysql_result($sql,0,"japones");
	$horario = explode("-",mysql_result($sql,0,"horario"));
	$viagem = explode("-",mysql_result($sql,0,"viagem"));
	$restricao = explode("-",mysql_result($sql,0,"restricao"));
	$atuacao = explode("-",mysql_result($sql,0,"atuacao"));
	$habilitacao = explode("-",mysql_result($sql,0,"habilitacao"));
	$cache = mysql_result($sql,0,"cache");

	
}

function promotores_fotos($promotor) {
		
	include '../conn.inc';
	
	$sql = mysql_query("SELECT id, url FROM promotores_fotos WHERE promotor='$promotor'");
	
	$dados .= '<ul class="fotos">';
	
	if(mysql_num_rows($sql)!=0) {
		while($reg=mysql_fetch_array($sql)){
			$dados .= '<li><a href="../upload/'.$reg["url"].'" class="foto thickbox"" style="background-image:url(../upload/'.str_replace(".jpg","_mini.jpg",$reg["url"]).')"></a>';
			$dados .= '<a href="promotores-acoes.php?a=exf&amp;f='.$reg["id"].'"  onclick="return confirm(\'Deseja deletar a foto permanentemente?\')">Excluir</a></li>';
		}
	}
	else { $dados .= 'Nenhuma foto cadastrada'; }
	$dados .= '</ul>';
	
	echo $dados;
	
}

/*FOTOS*/
function fotos() {
		
	include '../conn.inc';
	
	$cor1 = "cor1";  
	$cor2 = "cor2";  
	$row_count = 0;
	
	$sql = mysql_query("SELECT
					   fotos.id AS fotoid, fotos.titulo AS foto_tit, fotos.url, fotos.formato, DATE_FORMAT(fotos.datahora, '%d/%m/%Y %H:%i:%s') AS datafoto,
					   posts.titulo AS post_tit FROM fotos
					   LEFT JOIN posts ON posts.id = fotos.album
					   ORDER BY fotos.datahora DESC");
	
	while($reg=mysql_fetch_array($sql)){
		
		switch($reg["formato"]){
			case 0: $tipo_txt = "Original"; break;
			case 1: $tipo_txt = "Home Grande"; break;
			case 2: $tipo_txt = "Destaque Menor"; break;
			case 3: $tipo_txt = "Destaque Maior"; break;
		}
		
		$acoes = '<a href="fotos-editar.php?a=ed&amp;f='.$reg["fotoid"].'">Editar</a>';
		if($reg["formato"]==0) { $acoes .= ' | <a onclick="corta_foto('.str_replace(".jpg","",$reg["url"]).')" class="corta_foto")">Recortar foto</a>'; }
		$tmp = '| <a href="post-acoes.php?a=li&amp;p='.$reg["id"].'" onclick="return confirm(\'Deseja enviar o post pra lixeira?\')">Lixeira</a>';
		
		$cor = ($row_count % 2) ? $cor1 : $cor2;
		$dados .= '<tr class="'.$cor.'"><td class="mini"><span style="background-image:url(../upload/'.str_replace(".jpg","_mini.jpg",$reg["url"]).')"><!--//--></span>'.$acoes.'</td></td><td>'.$tipo_txt.'</td><td>'.$reg["post_tit"].'</td><td class="center">'.$reg["datafoto"].'</td></tr>';
		$row_count++; 
	}
	
	if(empty($dados)) { echo '<tr><td colspan="4">Nenhum post encontrado</td></tr>'; } else { echo $dados; }
}

function fotos_edita($foto) {
		
	include '../conn.inc';
	
	$sql = mysql_query("SELECT titulo FROM fotos WHERE id='$foto'");
	
	global $legenda;
	
	$legenda = mysql_result($sql,0,"titulo");
	
}

function fotos_edita_upload($num) {
		
	include '../../conn.inc';
	
	$sql = mysql_query("SELECT id,titulo,url,original FROM fotos ORDER BY datahora DESC LIMIT ".$num);
	
	while($reg=mysql_fetch_array($sql)) {
		$mostra ='<tr><td class="mini"><span style="background-image:url(../upload/'.str_replace(".jpg","_mini.jpg",$reg["url"]).')"><!--//--></span></td><td><b>Arquivo</b> '.$reg["original"].'<br /><b>URL</b> '.$reg["url"].'<br /><b>Legenda</b><br /><textarea rows="2" cols="1" name="legenda['.$reg["id"].']">'.$reg["titulo"].'</textarea></td></tr>';
		echo $mostra;
	}
	
}

//DESTAQUES//
function destaques_rel($dest) {
		
	include '../conn.inc';
	
	$sql = mysql_query("SELECT posts.id AS id, posts.titulo, posts_cat.categoria AS categoria FROM posts INNER JOIN posts_cat ON posts_cat.id = posts.categoria WHERE posts.tipo='1' ORDER BY categoria, titulo ASC");
	
	while($reg=mysql_fetch_array($sql)){
		$dados .= '<option value="'.$reg["id"].'"';
		if($reg["id"]==$dest) { $dados .= ' selected="selected"'; }
		$dados .= '>('.$reg["categoria"].') '.$reg["titulo"].'</option>';
	}
	
	echo $dados;
}

function destaques() {
		
	include '../conn.inc';
	
	$cor1 = "cor1";  
	$cor2 = "cor2";  
	$row_count = 0;
	
	$sql = mysql_query("SELECT id, gde1, gde2, peq1, peq2, peq3, peq4, atual, DATE_FORMAT(datahora, '%d/%m/%Y às %H:%i') AS datahora1 FROM destaques ORDER BY atual DESC, datahora DESC");
	
	while($reg=mysql_fetch_array($sql)){
		
		$ordem = $reg["gde1"]." ".$reg["gde2"]." ".$reg["peq1"]." ".$reg["peq2"]." ".$reg["peq3"]." ".$reg["peq4"];
		$acoes = '<br /><a href="destaques-editar.php?a=ed&amp;d='.$reg["id"].'">Editar</a> | <a href="../_new/index.php?preview=sim&amp;o='.$ordem.'" target="_blank">Visualizar</a>';
		if($reg["atual"] !="S") { $acoes .= ' | <a href="destaques-acoes.php?a=ex&amp;d='.$reg["id"].'" onclick="return confirm(\'Deseja excluir o destaque permanentemente?\')">Excluir</a>'; } 
		
		switch($reg["atual"]){
			case "S": $atual_txt = "Sim"; break;
			case "N": $atual_txt = "Não"; break;
		}
		
		$cor = ($row_count % 2) ? $cor1 : $cor2;
		$dados .= '<tr class="'.$cor.'"><td>'.$reg["datahora1"].$acoes.'</td><td>'.$atual_txt.'</td></tr>';
		$row_count++; 
	}
	
	if(empty($dados)) { echo '<tr><td colspan="4">Nenhum destaque cadastrado</td></tr>'; } else { echo $dados; }
}

function destaques_edita($destaque) {
		
	include '../conn.inc';
	
	$sql = mysql_query("SELECT id, gde1, gde2, peq1, peq2, peq3, peq4, atual, DATE_FORMAT(datahora, '%d/%m/%Y às %H:%i') AS datahora FROM destaques WHERE id='$destaque'");
	
	global $gde1, $gde2, $peq1, $peq2, $peq3, $peq4, $atual;
	
	$gde1 = mysql_result($sql,0,"gde1");
	$gde2 = mysql_result($sql,0,"gde2");
	$peq1 = mysql_result($sql,0,"peq1");
	$peq2 = mysql_result($sql,0,"peq2");
	$peq3 = mysql_result($sql,0,"peq3");
	$peq4 = mysql_result($sql,0,"peq4");
	$atual = mysql_result($sql,0,"atual");
	
}

//CURRÍCULOS//

function curriculos() {
		
	include '../conn.inc';
	
	$cor1 = "cor1";  
	$cor2 = "cor2";  
	$row_count = 0;
	
	$sql = mysql_query("SELECT id, arquivo, DATE_FORMAT(datahora, '%d/%m/%Y %H:%i') AS data1 FROM curriculos ORDER BY datahora DESC");
	
	while($reg=mysql_fetch_array($sql)){
		
		switch($reg["tipo"]){
			case 1: $tipo_txt = "Publicado"; break;
			case 2: $tipo_txt = "Não publicado"; break;
			case 3: $tipo_txt = "Deletar"; break;
		}
		
		$acoes = '<br /><a href="../upload/'.$reg["arquivo"].'" target="cv">Download</a> | <a href="curriculo-acoes.php?a=ex&amp;c='.$reg["id"].'" onclick="return confirm(\'Deseja excluir o post permanentemente?\')">Lixeira</a>';

		
		$cor = ($row_count % 2) ? $cor1 : $cor2;
		$dados .= '<tr class="'.$cor.'"><td>'.$reg["arquivo"].$acoes.'</td><td class="center">'.$reg["data1"].'</td></tr>';
		$row_count++; 
	}
	
	if(empty($dados)) { echo '<tr><td colspan="4">Nenhum post encontrado</td></tr>'; } else { echo $dados; }
}


?>