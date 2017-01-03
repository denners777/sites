<?php

include '../conn.inc';
if(isset($_GET["a"])) {
$acao = $_GET["a"];}
extract($_POST,EXTR_SKIP);

session_start();

$_SESSION["nome"] = $nome;
$_SESSION["nome_art"] = $nome_art;
$_SESSION["cpf"] = $cpf;
$_SESSION["rg"] = $rg;
$_SESSION["pis"] = $pis;
$_SESSION["endereco"] = $endereco;
$_SESSION["cidade"] = $cidade;
$_SESSION["bairro"] = $bairro;
$_SESSION["tel1_ddd"] = $tel1_ddd;
$_SESSION["tel1"] = $tel1;
$_SESSION["tel2_ddd"] = $tel2_ddd;
$_SESSION["tel2"] = $tel2;
$_SESSION["tel3_ddd"] = $tel3_ddd;
$_SESSION["tel3"] = $tel3;
$_SESSION["tel3_id"] = $tel3_id;
$_SESSION["dia_nasc"] = $dia_nasc;
$_SESSION["mes_nasc"] = $mes_nasc;
$_SESSION["ano_nasc"] = $ano_nasc;
$_SESSION["sexo"] = $sexo;
$_SESSION["altura_m"] = $altura_m;
$_SESSION["altura_cm"] = $altura_cm;
$_SESSION["uniforme"] = $uniforme;
$_SESSION["pele"] = $pele;
$_SESSION["olhos"] = $olhos;
$_SESSION["cabelo"] = $cabelo;
$_SESSION["cabelo_t"] = $cabelo_t;
$_SESSION["tatuagem"] = $tatuagem;
$_SESSION["piercing"] = $piercing;
$_SESSION["escolaridade"] = $escolaridade;
$_SESSION["curso"] = $curso;
$_SESSION["ingles"] = $ingles;
$_SESSION["espanhol"] = $espanhol;
$_SESSION["frances"] = $frances;
$_SESSION["alemao"] = $alemao;
$_SESSION["japones"] = $japones;
$_SESSION["horario"] = $horario;
$_SESSION["viagem"] = $viagem;
$_SESSION["restricao"] = $restricao;
$_SESSION["atuacao"] = $atuacao;
$_SESSION["habilitacao"] = $habilitacao;
$_SESSION["cache"] = $cache;

$nasc = $ano_nasc.'-'.$mes_nasc.'-'.$dia_nasc;

$query = "INSERT INTO promotores (nome,email,nasc,cpf,ddd1,tel1,ddd2,tel2,end,cidade,bairro,cabelo,pele,altura,sapato,ingles,espanhol,frances,alemao,carro,datacad) VALUES ('$nome','$email','$nasc','$cpf','$tel1_ddd','$tel1','$tel2_ddd','$tel2','$endereco','$cidade','$bairro','$cabelo','$pele','$altura','$sapato','$ingles','$espanhol','$frances','$alemao','$carro',now())";
mysql_query($query);

$af = mysql_affected_rows();
if($af==1) { header("Location: ../index.php?a=s"); } else { header("Location: ./index.php?a=e"); }

?>
