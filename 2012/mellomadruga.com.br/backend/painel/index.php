<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Painel // Mello&amp;Madruga</title>
<script type="text/javascript" src="http://mellomadruga.com.br/cadastro/js/jquery.js"></script>
<script type="text/javascript" src="http://mellomadruga.com.br/cadastro/js/painel.js"></script>
<link rel="stylesheet" href="http://mellomadruga.com.br/cadastro/css/painel.css" type="text/css" />
</head>
<?php

$erro = $_GET["e"];
$usr = $_GET["u"];

switch($erro){
	case "u": $msg = "Usuário não encontrado."; $class1 = "err"; break;
	case "s": $msg = "Senha inválida."; $class2 = "err"; break;
}
?>
<body>
	<div id="login">
        <h1><small>Painel //</small> Mello&amp;Madruga</h1>
        <?php if(!empty($erro)) { echo '<p class="erro" id="erro">'.$msg.'</p>'; } ?>
        <form action="login.php" method="post">
            <fieldset>
                <label>Nome de usuário
                <input type="text" name="usr" id="usr" class="info <?php echo $class1; ?>" value="<?php echo $usr; ?>" /></label>
                <label>Senha
                <input type="password" name="pass" id="pass" class="info  <?php echo $class2; ?>" /></label>
                <input type="submit" value="Entrar" class="botao" />
            </fieldset>
        </form>
        <p class="voltar">&#8249; <a href="/">voltar ao site</a></p>
    </div>
</body>
</html>
