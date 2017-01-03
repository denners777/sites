<?php

session_start();
include './painel/funcs.php';
include './funcs.php';
include './conn.inc';

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
<link href="/css/site.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput-1.2.2.min.js"></script>
<script type="text/javascript" src="/js/jquery.validate.js"></script>
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
    	<div id="empresa" class="slide">
        	<div class="celula">
            	<p class="item">
                    <a title="Fechar Empresa" onclick="exibe('empresa')" class="fechar">Fechar</a>
                </p>
            	<h4>A empresa mello &amp; Madruga</h4>
                <div class="box_esq">
                    <p>Com quase 20 anos de experiência em diversas áreas do Marketing, sempre com vivência em multinacionais, os sócios da Mello&amp;Madruga oferecem ao mercado uma nova opção de trabalho.</p>
                    <p>Aliando a juventude e o novo ao conhecimento e experiência, a Mello&amp;Madruga – Soluções de Marketing propõem uma nova fórmula de pensar as estratégias de Marketing de sua empresa: soluções integradas de Comunicação, maximizando 
o alcance de cada atividade de Marketing.
</p>
                    </div>
                    <div class="box_dir">
                    <p>Com a experiência profissional dos sócios, a Mello&amp;Madruga – Soluções de Marketing está apta a desenvolver e implementar atividades em cada um dos segmentos da Comunicação. Isoladamente ou integradas, as soluções que propomos baseiam-se em descobrir e aproveitar oportunidades de forma criativa.</p>
                    <p>O novo é uma marca registrada de nossas propostas.</p>
                    <p>A qualidade e a excelência são o nosso referencial.</p>
                </div>
                <div class="clear"><!--//--></div>
                <p class="cite">“A maioria das estratégias de Marketing é boa, mas o Marketing normalmente falha no estágio de implementação.” <cite>- Thomas V. Bonoma</cite></p>
            </div>
        </div>
        <div id="incentivo" class="slide">
        	<div class="celula">
            	<p class="item">
                    <a title="Fechar Empresa" onclick="exibe('incentivo')" class="fechar">Fechar</a>
                </p>
            	<h4>Viabilizando Patrocínios</h4>
                <div class="box_esq">
                    <p>Atualmente, há algumas opções para viabilizar um patrocínio através da utilização de dispositivos legais que permitem a renúncia de algum tipo de imposto. Seja através da renúncia de IR, ICMS, etc. podemos desenvolver um projeto que atenda ás suas necessidades de marca, viabilizando um patrocínio cultural ou esportivo.</p>
                    <p>Estes projetos podem envolver a titularidade (ou seja, o nome da sua marca apresentando o projeto, seja um evento, equipe ou time esportivo, etc.) ou não.</p>
                    </div>
                    <div class="box_dir">
                    <p>O nível de investimento direto pode variar, dependendo destas opções.</p>
                    <p>Sujeitos aos trâmites das esferas governamentais, estes projetos devem ser planejados com antecedência, para se otimizar ao máximo a utilização desta ferramenta.</p>
                    <p>Fale conosco através da opção “Contato”, neste site, para avaliarmos seu projeto.</p>
                </div>
                <div class="clear"><!--//--></div>
            </div>
        </div>
        <div id="header_home" class="header">
        	<div class="celula">
                <h1><a href="/" title="Mello&amp;Madruga - Soluções de Marketing">Mello&amp;Madruga - Soluções de Marketing</a></h1>
                <p id="menu" class="item">
                    <a title="Empresa" onclick="exibe('empresa')">Empresa</a>
                    <a href="#contato" title="Contato">Contato</a>
                    <a href="#cadastro" title="Cadastro">Cadastro</a>
                </p>
                <div class="clear"><!--//--></div>
                <ul id="m_portfolio">
                    <li class="prim"><a href="portfolio.php?i=eventos" title="Eventos">Eventos</a></li>
                    <li><a href="portfolio.php?i=promocoes" title="Promoções">Promoções</a></li>
                    <li><a href="portfolio.php?i=merchandising" title="Merchandising">Merchandising</a></li>
                    <li><a href="portfolio.php?i=festas" title="Festas">Festas</a></li>
                    <li><a onclick="exibe('incentivo')" title="Incentivo Cultural e Esportivo">Incentivo<br /><small>Cultural e Esportivo</small></a></li>
                </ul>
            </div>
        </div>
        <div id="miolo_home" class="miolo">
        	<?php portfolio($ordem[0],1,"gde1"); ?>
        	<div class="dest_gde">
            	<a href="portfolio.php?i=<?php echo $cat_url."&p=".$idurl; ?>" title="<?php echo $titulo; ?>"><img src="/upload/<?php echo $foto_dest; ?>" alt="<?php echo $titulo; ?>"/></a>
                <p><span>Cliente:</span> <?php echo $cliente; ?></p>
                <p><span>Data:</span> <?php echo strftime("%B de %Y", mktime(0, 0, 0, $data1_mes, 1, $data1_ano))?></strong>  / <strong><?php echo strftime("%B de %Y", mktime(0, 0, 0, $data2_mes, 1, $data2_ano))?></strong>.</p>
                <a href="portfolio.php?i=<?php echo $cat_url."&p=".$idurl; ?>" title="Leia mais" class="mais">Leia mais</a>
            </div>
            <?php portfolio($ordem[1],1,"gde2"); ?>
            <div class="dest_gde dir">
            	<a href="portfolio.php?i=<?php echo $cat_url."&p=".$idurl; ?>" title="<?php echo $titulo; ?>"><img src="/upload/<?php echo $foto_dest; ?>" alt="<?php echo $titulo; ?>"/></a>
                <p><span>Cliente:</span> <?php echo $cliente; ?></p>
                <p><span>Data:</span> <?php echo strftime("%B de %Y", mktime(0, 0, 0, $data1_mes, 1, $data1_ano))?></strong>  / <strong><?php echo strftime("%B de %Y", mktime(0, 0, 0, $data2_mes, 1, $data2_ano))?></strong>.</p>
                <a href="portfolio.php?i=<?php echo $cat_url."&p=".$idurl; ?>" title="Leia mais" class="mais">Leia mais</a>
            </div>
            <div class="clear"><!--//--></div>
        	<h4><span>Outros Trabalhos</span></h4>
        	<?php $j=1; for($i=2;$i<count($ordem);$i++) { portfolio($ordem[$i],2,"peq".$j); ?>
            <div class="dest_peq <?php if ($i==5) { echo ' ult'; } ?>">
                <a href="portfolio.php?i=<?php echo $cat_url."&p=".$idurl; ?>" title="<?php echo $titulo; ?>"><img src="/upload/<?php echo $foto_dest; ?>" alt="<?php echo $titulo; ?>"/></a>
                <p><?php echo $titulo; ?><br /><span><?php echo strftime("%b de %Y", mktime(0, 0, 0, $data1_mes, 1, $data1_ano))?>  / <?php echo strftime("%b de %Y", mktime(0, 0, 0, $data2_mes, 1, $data2_ano))?></span></p>
                <a href="portfolio.php?i=<?php echo $cat_url."&p=".$idurl; ?>" title="Leia mais" class="mais">Leia mais</a>
            </div>
            <?php $j++; }?>
            <div class="clear"><!--//--></div>
            <div class="twitter">
            	<p class="item">
                   <a title="Siga o Twitter" href="http://www.twitter.com/mellomadruga" target="_blank">Siga</a>
                </p>
                <h4><span>Últimas Notícias Via Twitter</span></h4>
                <ul id="news">
					<?php
                      $updates = get_twitter_feed('mellomadruga');
					  $i=1;
                      foreach($updates as $update) {
                          $text = utf8_decode(htmlspecialchars($update['text'],ENT_QUOTES));
                          $time = date('m/d/y H:i', $update['time']);
                      ?>
                      <li <?php if($i=="4") { echo 'class="ult"'; } ?>><?php echo $text; ?><br /><small><?php echo $time; ?></small></li>
                      <?php $i++; } ?>
                </ul>
            </div>
            <div class="clear"><!--//--></div>
        </div>
        <div id="contato" class="header">
        	<div class="celula">
                <h1><a href="/" title="Mello&amp;Madruga - Soluções de Marketing">Mello&amp;Madruga - Soluções de Marketing</a></h1>
                <div class="box_dir">
                    <p class="item">
                        <a href="#corpo" title="Topo" class="topo">Topo</a>
                    </p>
                    <div class="redes">
                        <h3>Acompanhe nas redes sociais</h3>
                        <a href="http://www.twitter.com/mellomadruga" class="twitter" target="_blank">Twitter</a>
                        <a href="http://www.facebook.com/home.php?#%21/profile.php?id=100001067028555&amp;ref=profile" class="facebook" target="_blank">Facebook</a>
                        <a href="http://www.orkut.com.br/Main#Profile?uid=9810267227581216753&amp;rl=t" class="orkut" target="_blank">Orkut</a>
                        <a href="http://www.youtube.com/user/MelloMadruga" class="youtube" target="_blank">YouTube</a>
                        <a href="http://www.flickr.com/photos/mellomadruga/" class="flickr" target="_blank">Flickr</a>
                    </div>
                </div>
                <div class="clear"><!--//--></div>
             </div>
             <div class="linha"><!--//--></div>
             <div class="celula">
                <div class="box_esq">
                	<p class="quote">"Existem três tipos de empresas: as que fazem acontecer, as que ficam observando o que acontece e as que ficam se perguntando o que aconteceu."<br /><cite>- Anônimo</cite></p>
                    <div class="tracos_bco"><!--//--></div>
                    <p>Nosso objetivo é o de propor soluções integradas: desde a criação de uma marca até o estabelecimento da mesma junto ao target. Optando por um plano completo ou por ações independentes, com  a Mello&amp;Madruga, sua empresa terá escolhido a melhor solução de Marketing. Faça acontecer!</p>
                    <div class="tracos_bco"><!--//--></div>
                    <ul class="telmail">
                    	<li><small>Telefone:</small><br />21. 2235-7838</li>
                        <li><small>E-mail:</small><br /><a href="mailto:contato@mellomadruga.com.br?Subject=Contato Via Site" title="E-mail de Contato Mello &amp; Madruga">contato@mellomadruga.com.br</a></li>
                    </ul>
                </div>
                <div class="box_dir">
                	<h3>Envie uma mensagem</h3>
                    <p>Entre em contato conosco, agora.</p>
                    <form method="post" id="contato_form">
                    	<ul>
                            <li><label for="nome_ct">Nome:</label><input type="text" name="nome_ct" id="nome_ct" class="cl" /></li>
                            <li><label for="empresa_ct">Empresa:</label><input type="text" name="empresa_ct" id="empresa_ct" class="cl" /></li>
                            <li><label for="email_ct">E-mail:</label><input type="text" name="email_ct" id="email_ct" class="cl" /></li>
                            <li><label for="ddd1_ct">Telefone:</label><input type="text" name="ddd1_ct" id="ddd1_ct" maxlength="2" class="cl" /><input type="text" name="tel1_ct" id="tel1_ct" class="cl" /><label for="ddd2_ct" class="nowd">Celular:</label><input type="text" name="ddd2_ct" id="ddd2_ct" maxlength="2" class="cl" /><input type="text" name="te12_ct" id="tel2_ct" class="cl" /></li>
                            <li><label for="msg_ct">Mensagem:</label><textarea name="msg_ct" id="msg_ct" rows="1" cols="1" class="cl"></textarea></li>
                            <li class="dir"><label id="retorno_ct" class="retorno">&nbsp;</label><input type="submit" value="Enviar" class="botao" id="bt_ct"/></li>
                        </ul>
                    </form>
                </div>
                <div class="clear"><!--//--></div>
             </div>
             <div class="linha" id="cadastro"><!--//--></div>
             <div class="celula">
                <div class="box_esq box_esq_cv">
                	<h3>Trabalhe com a gente</h3>
                    <p class="cv">Se voce quer fazer parte de nossa equipe, envie o seu CV para nós e aguarde um contato.</p>
                    <form action="forms_acoes2.php" method="post" class="cv" target="cv_form" enctype="multipart/form-data">
                    <input type="hidden" name="modo" value="cv" />
                    	<ul>
                        	<li><label for="arquivo_cv">Enviar CV:</label><input type="file" name="arquivo_cv" class="file" id="arquivo_cv" /><input type="submit" value="Enviar" class="botao" id="bt_cv" /><label id="retorno_cv" class="retorno">&nbsp;</label></li>
                        </ul>
                        <iframe src="forms_acoes2.php" name="cv_form" id="cv_form"></iframe>
                    </form>
                </div>
                <div class="box_dir box_dir_cv">
                <p class="item">
                        <a href="#corpo" title="Topo" class="topo">Topo</a>
                    </p>
                </div>
                <div class="clear"><!--//--></div>
                <div id="promotores" class="tracos_bco"><!--//--></div>
                <h3>Seja um promotor</h3>
                <p class="cv">Para trabalhar em nossos eventos e promoções como supervisor, promotor ou outras funções, preencha o cadastro abaixo e envie suas fotos.</p>
                <?php include 'promotores_form2.php'; ?>
                <iframe src="forms_acoes2.php" name="promo_form" id="promo_form"></iframe>
                <p class="item">
                	<a href="#corpo" title="Topo" class="topo">Topo</a>
                </p>
             </div>
             <div class="clear"><!--//--></div>
        </div>
    </div>
</body>
</html>
