<?php

//obtendo os valores digitados
$usr = $_POST["usr"];
$pass = $_POST["pass"];

//acessando o banco de dados
include "../conn.inc";
$sql = mysql_query("SELECT * FROM usrs WHERE usuario='$usr' AND ativo='S'");

if($usr != @mysql_result($sql,0,"usuario")) // teste para verificar resultado
{
	header("Location: index.php?e=u&u=".$usr);
}
else
{
	if(md5($pass) != @mysql_result($sql,0,"senha")) // confere a senha
	{ 
		header("Location: index.php?e=s&u=".$usr);
	}
	else // usuário e senha corretos - criando a sessão
	{
		session_start();
		$_SESSION['usr'] = $usr;
		$_SESSION['pass'] = $pass;
		$_SESSION['nivel'] = mysql_result($sql,0,"nivel");
		$_SESSION['usrid'] = mysql_result($sql,0,"id");
		// direciona para a página correta
		header ("Location: inicio.php");
		exit;
	}
}
mysql_close($conexao);

?>