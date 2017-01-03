<?php
session_save_path('./temp');
session_start();
setlocale(LC_ALL, 'pt_BR'); 
include './painel/funcs.php';
include './funcs.php';
include './conn.inc';

$BaseURL = 'http://mellomadruga.com.br';

$acao = $_GET["a"];
$preview = $_GET["preview"];
$ordem_get = trim($_GET["o"]);

$horario = $_SESSION["horario"];
$viagem = $_SESSION["viagem"];
$restricao = $_SESSION["restricao"];
$atuacao = $_SESSION["atuacao"];
$habilitacao = $_SESSION["habilitacao"];

if($preview=="sim"){ $ordem = explode(" ",$ordem_get); } else { portfolio_ordem("home",''); }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Mello&amp;Madruga - Soluções de Marketing</title>
<link href="../wp-content/themes/FuelWP/style.css" rel="stylesheet" type="text/css" />
<link href="css/site.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.2.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript"> 

$().ready(function() {
				   
	// mascara			   			   
	$('#cpf').mask('999.999.999-99');
	$('#rg').mask('99.999.999-9');
	$('#tel1').mask('9999-9999');
	$('#tel2').mask('9999-9999');
	$('#tel3').mask('9999-9999');
	
	$('#tel1_ct').mask('9999-9999');
	$('#tel2_ct').mask('9999-9999');
	
	$.validator.setDefaults({
		highlight: function(element) {
			$("#"+element.id).addClass("erro");
			
		},
		unhighlight: function(element) {
			$("#"+element.id).removeClass("erro");
		}
	});
	
	// validate signup form on keyup and submit
	$("#cad_promotores").validate({
		rules: {
			nome: {
				required: true,
				minlength: 6
			},
			nome_art: {
				required: true,
				minlength: 3
			},
			cpf: {
				required: true,
				minlength: 13
			},
			rg: {
				required: true,
				minlength: 12
			},
			cidade: {
				required: true,
				minlength: 6
			},
			tel1_ddd: {
				required: true,
				minlength: 2
			},
			tel1: {
				required: true,
				minlength: 9
			},
			
		},
		messages: {
			nome: '',
			nome_art: '',
			cpf: '',
			rg: '',
			cidade: '',
			tel1_ddd: '',
			tel1: '',
		}
	});

});
</script>
</head>

<body>
<div id="corpo">
  <div id="contato" class="header">
    <div class="bg">
      <div class="transp">
        <div class="celula">
          <blockquote>
            <h1 class="logo"><a href="http://mellomadruga.com.br/" title="Mello&amp;Madruga - Soluções de Marketing">Mello&amp;Madruga - Soluções de Marketing</a></h1>
          </blockquote>
          <div class="box_dir">
            <div class="recado">
              <blockquote>Preencha seu cadastro!</blockquote>
            </div>
            <blockquote>
              <!--<p class="voltar"> <a href="http://mellomadruga.com.br/" title="Mello & Madruga" class="topo">Voltar para o site</a> </p>-->
            </blockquote>
          </div>
          <div class="clear"><!--//--></div>
        </div>
      </div>
    </div>
    <div class="bg2">
      <div class="linha" id="cadastro"><!--//--></div>
      <div class="celula">
        <div class="box_esq box_esq_cv">
          <h3>Trabalhe com a gente</h3>
          <p class="cv">Se voce quer fazer parte de nossa equipe, envie o seu CV para nós e aguarde um contato.</p>
          <form action="forms_acoes.php" method="post" class="cv" target="cv_form" enctype="multipart/form-data">
            <input type="hidden" name="modo" value="cv" />
            <ul>
              <li>
                <label for="arquivo_cv">Enviar CV:</label>
                <input type="file" name="arquivo_cv" class="file" id="arquivo_cv" />
                <input type="submit" value="Enviar" class="botao" id="bt_cv" />
                <label id="retorno_cv" class="retorno">&nbsp;</label>
              </li>
            </ul>
            <iframe src="forms_acoes.php" name="cv_form" id="cv_form"></iframe>
          </form>
        </div>
        <div class="box_dir box_dir_cv"> </div>
        <div class="clear"><!--//--></div>
        <div id="promotores" class="tracos_bco"><!--//--></div>
        <h3>Seja um promotor</h3>
        <p class="cv">Para trabalhar em nossos eventos e promoções como supervisor, promotor ou outras funções, preencha o cadastro abaixo e envie suas fotos.</p>
        <?php include 'promotores_form.php'; ?>
        <iframe src="forms_acoes.php" name="promo_form" id="promo_form"></iframe>
      </div>
	  <p style="font-family:'Josefin Slab'; text-transform:uppercase; color:#CCC; font-size:14px; padding: 10px 0px 10px 165px; border-top: white 1px solid;"> <img src="http://mellomadruga.com.br/teste/wp-content/uploads/2012/06/local.png" />&nbsp;&nbsp;&nbsp;Rua Xavier da Silveira, 45  sala 604 - copacabana - Rio de Janeiro, RJ &nbsp;&nbsp;&nbsp;  <img src="http://mellomadruga.com.br/teste/wp-content/uploads/2012/06/tel.png" />&nbsp;&nbsp;+55 21 2235 7838 &nbsp;&nbsp;&nbsp; <img src="http://mellomadruga.com.br/teste/wp-content/uploads/2012/06/mail.png" />&nbsp;&nbsp; <a href="mailto:contato@mellomadruga.com" style="color:#CCC;">contato@mellomadruga.com</a></p>
      <div class="clear"><!--//--></div>
    </div>
  </div>
</div>
</body>
</html>