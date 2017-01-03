<?php

function portfolio_ordem($cat,$post){
	
	include './conn.inc';
	
	global $ordem; 
	
	$ordem = array();
	
	if($post!="") { $where = " AND id != '$post'"; }
	
	if($cat == "home") { $query = "SELECT * FROM destaques WHERE atual='S' ORDER BY datahora DESC LIMIT 1"; }
	else { $query = "SELECT * FROM posts WHERE categoria='$cat' ".$where." AND tipo='1' ORDER BY ordem ASC"; } 
	
	$sql = mysql_query($query);
	
	while($reg=mysql_fetch_array($sql)) {
		
		if($cat=="home") { array_push($ordem,$reg["gde1"],$reg["gde2"],$reg["peq1"],$reg["peq2"],$reg["peq3"],$reg["peq4"]); }
		else { array_push($ordem,$reg["id"]); }
		
	}
	
}
	
function portfolio($post,$formato,$pag) {
		
	include './conn.inc';
	
	$sql = mysql_query("SELECT cliente, titulo,texto,resultado,midia,data1,data2,categoria,tipo FROM posts WHERE id='$post'");
	
	global $idurl, $cliente, $titulo, $texto, $resultado, $midia, $data1_mes, $data1_ano, $data2_mes, $data2_ano, $categoria, $cat_url, $tipo, $extra, $extra_tit, $foto, $foto_dest, $original, $total_galeria, $fotos, $originais;
	
	$idurl = $post;
	$cliente = @mysql_result($sql,0,"cliente");
	$titulo = @mysql_result($sql,0,"titulo");
	$texto = @mysql_result($sql,0,"texto");
	$resultado = @mysql_result($sql,0,"resultado");
	$midia = @mysql_result($sql,0,"midia");
	$data1 = @explode("-",mysql_result($sql,0,"data1"));
	$data1_ano = $data1[0];
	$data1_mes = $data1[1];
	$data2 = @explode("-",mysql_result($sql,0,"data2"));
	$data2_ano = $data2[0];
	$data2_mes = $data2[1];
	$categoria = @mysql_result($sql,0,"categoria");
	$tipo = @mysql_result($sql,0,"tipo");
	
	$sql_extra = mysql_query("SELECT id,campo,texto FROM posts_extra WHERE post='$post' ORDER BY id");
	while($reg=mysql_fetch_array($sql_extra)) {
		if(!empty($reg["texto"])){
			$i=$reg["id"];
			$extra[$i] = $reg["texto"];
			$extra_tit[$i] = $reg["campo"];
		}
	}
	
	$query_foto_dest = 'SELECT destaques.id, fotos.url FROM destaques
	INNER JOIN fotos ON destaques.foto_'.$pag.' = fotos.id
	WHERE destaques.atual = "S"';
	
	$sql_foto_dest = mysql_query($query_foto_dest);
	$foto_dest = @mysql_result($sql_foto_dest,0,"url");
	
	$sql_foto = mysql_query("SELECT url,original FROM fotos WHERE album='$post' AND formato='$formato' AND sel ='S'");
	
	if(mysql_num_rows($sql_foto)!=0){
		$foto = mysql_result($sql_foto,0,"url");
		$original = mysql_result($sql_foto,0,"original");
	}
	
	$sql_galeria = mysql_query("SELECT id, url,original FROM fotos WHERE album='$post' AND formato='$formato' AND sel !='S'");
	$total_galeria = mysql_num_rows($sql_galeria)+1;
	
	while($reg=mysql_fetch_array($sql_galeria)) {
		$i=$reg["id"];
		$fotos[$i] = $reg["url"];
		$originais[$i] = $reg["original"];
	}
	
	
	switch($categoria) {
		case 1: $cat_url = 'festas'; break;
		case 2: $cat_url = 'incentivo'; break;
		case 3: $cat_url = 'merchandising'; break;
		case 4: $cat_url = 'promocoes'; break;
		case 5: $cat_url = 'eventos'; break;
	}
}

function fetch_twitter_feed($user, $since = 0) {
 //   $url = 'https://api.twitter.com/1/statuses/user_timeline.xml?screen_name=' . $user . '&page=1';	
 $url ='https://api.twitter.com/1/statuses/user_timeline/mellomadruga.xml';
    /*if($since > 0) {
        $url .= '&page=1';// . $since;
    }*/
	
	ini_set("allow_url_fopen", 1); 
    ini_set("allow_url_include", 1); 
    $updates = array();
	/*
	@$data = file_get_contents($url);
	
    @$xmlDoc = DOMDocument::loadXML($data);
    @$statuses = $xmlDoc->getElementsByTagName('status');
    
    if(($statuses->length > 0) && $data) {
        foreach($statuses as $status) {
            $id = $status->getElementsByTagName('id')->item(0)->nodeValue;
            $text = $status->getElementsByTagName('text')->item(0)->nodeValue;
            $date = strtotime($status->getElementsByTagName('created_at')->item(0)->nodeValue);
            $updates[] = array($id, $text, $date);
        }
    }*/
    return $updates;
}

function get_twitter_feed($user, $reverse = true, $limit = 4) {
	include './conn.inc';
    $db = new MySQLi($server, $u, $p, $b);
    if($result = $db->query("SELECT * FROM `twitter_status`")) {
        $row = $result->fetch_assoc();
        $result->close();
        if(time()-$row['time'] >= 300) {
            $updates = fetch_twitter_feed($user, $row['twid']);
            if(count($updates) > 0){
                krsort($updates);
                foreach($updates as $update) {
                    $id = $db->escape_string($update[0]);
                    $text = $db->escape_string($update[1]);
                    $time = $db->escape_string($update[2]);
                    $db->query("INSERT INTO `twitter` VALUES ('', '" . $id . "', '" . $text . "', '" . $time . "')");
                }
                $db->query("UPDATE `twitter_status` SET `twid` = '" . $id . "', `time` = '" . time() . "'");
            }
            else {
                $db->query("UPDATE `twitter_status` SET `time` = '" . time() . "'");
            }
        }
    }
    $limit = $db->escape_string($limit);
    $updates = array();
    if($result = $db->query("SELECT * FROM `twitter` ORDER BY `id` DESC LIMIT " . $limit)) {
        while($row = $result->fetch_assoc()) {
            $updates[] = array('id' => $row['id'], 'twid' => $row['twid'], 'text' => $row['text'], 'time' => $row['time']);
        }
        $result->close();
        if(!$reverse) {
            krsort($updates);
        }
        return $updates;
    }
    return false;
}

?>