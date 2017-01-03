<?php

include '../val.inc';
include 'funcs.php';
$acao = $_GET["a"];
$promotor = $_GET["p"];

promotores_edita($promotor);
$nasc_x = explode("-",$nasc);

function switch_idiomas($nivel) {	
	switch($nivel){
		case 41: echo 'básico'; break;
		case 42: echo 'intermediário'; break;
		case 43: echo 'fluente'; break;
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Visualizar promotor | Painel &#8250; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />
<link href="../css/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
<script type="text/javascript" src="../js/thickbox.js"></script>
<script type="text/javascript">
$(function() {
	$('a[rel^=lightbox]').lightBox({
	imageLoading: '../images/loading.gif',
	imageBtnClose: '../images/close.gif',
	imageBtnPrev: '../images/prev.gif',
	imageBtnNext: '../images/next.gif'	   
	});
});
</script>
</head>

<body onload="menu_ctrl('promotores','visualizar')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Visualizar promotor</h2>
            <p class="promotores_voltar"><a href="javascript:history.go(-1)">&#8249; Voltar para a relação de promotores/busca de promotores</a></p>
            <table class="promotor">
                <tr>
                    <td class="tit">Nome</td><td><?php echo $nome; ?></td>
                </tr>
                <tr>
                    <td class="tit">Nome artístico</td><td><?php echo $nome_art; ?></td>
                </tr>
                <tr>
                    <td class="tit">CPF</td><td><?php echo $cpf; ?></td>
                </tr>
                <tr>
                    <td class="tit">RG</td><td><?php echo $rg; ?></td>
                </tr>
                <tr>
                    <td class="tit">PIS</td><td><?php if(!empty($pis)) { echo $pis; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Endereço</td><td><?php if(!empty($endereco)) { echo $endereco; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Cidade/UF</td><td><?php echo $cidade."/".$uf; ?></td>
                </tr>
                <tr>
                    <td class="tit">Bairro</td><td><?php if(!empty($bairro)) { echo $bairro; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Telefone fixo</td><td><?php if(!empty($tel1)) { echo '('.$ddd1.') '.$tel1; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Celular</td><td><?php if(!empty($tel2)) { echo '('.$ddd2.') '.$tel2; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Nextel</td><td><?php if(!empty($tel3)) { echo '('.$ddd3.') '.$tel3.' / Código '.$tel3_id; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit"><label for="dia_nasc">Data de Nascimento</label></td>
                    <td><?php echo $nasc_x[2]; ?> de
                        <?php
                            $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                            $i = $nasc_x[1]-1;
                            echo $meses[$i];
                        ?>
                        de
                        <?php echo $nasc_x[0]; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tit">Sexo</td><td><?php if(!empty($sexo)) { echo $sexo; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Altura</td><td><?php echo $altura_m.'.'.$altura_cm; ?> m</td>
                </tr>
                <tr>
                    <td class="tit">Uniforme</td><td><?php if(!empty($uniforme)) { echo $uniforme; } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Pele</td><td><?php if(!empty($pele)) { echo promotores_opt_nome($pele); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Olhos</td><td><?php if(!empty($olhos)) { echo promotores_opt_nome($olhos); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Óculos</td><td><?php echo $oculos; ?></td>
                </tr>
                <tr>
                    <td class="tit">Cor do cabelo</td><td><?php if(!empty($cabelo)) { echo promotores_opt_nome($cabelo); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Tipo do cabelo</td><td><?php if(!empty($cabelo_t)) { echo promotores_opt_nome($cabelo_t); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Tatuagem</td><td><?php if(!empty($tatuagem)) { echo promotores_opt_nome($tatuagem); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Piercing</td><td><?php if(!empty($piercing)) { echo promotores_opt_nome($piercing); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Escolaridade</td><td><?php if(!empty($escolaridade)) { echo promotores_opt_nome($escolaridade); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Curso</td><td><?php if(!empty($curso)) { echo promotores_opt_nome($curso); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit"><label>Idiomas</label></td>
                    <td>
                        <ul>
                            
                            <li>Inglês: <?php if($ingles !=0) { switch_idiomas($ingles); } else { echo "Não informado"; } ?></li>
                            <li>Espanhol: <?php if($espanhol !=0) { switch_idiomas($espanhol); } else { echo "Não informado"; } ?></li>
                            <li>Francês: <?php if($frances !=0) { switch_idiomas($frances); } else { echo "Não informado"; } ?></li>
                            <li>Alemão: <?php if($alemao !=0) { switch_idiomas($alemao); } else { echo "Não informado"; } ?></li>
                            <li>Japonês: <?php if($japones !=0) { switch_idiomas($japones); } else { echo "Não informado"; } ?></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="tit">Disponibilidade de Horário</td>
                    <td>
					<?php
                    $horario_arr = array(51=>'Manhã',52=>'Tarde',53=>'Noite',54=>'Final de semana e feriado',55=>'Qualquer horário');
					if(!empty($horario)) {
						foreach($horario as $horario_f){ echo $horario_arr[$horario_f].", "; } 
					} else { echo "Não informado"; } ?>
                    </td>
                </tr>
                <tr>
                    <td class="tit">Disponibilidade para Viagem</td>
                    <td>
					<?php
                    $viagem_arr = array(61=>'Sim',62=>'Não',63=>'Só final de semana e feriado');
					if(!empty($viagem)) {
						foreach($viagem as $viagem_f){ echo $viagem_arr[$viagem_f].", "; } 
					} else { echo "Não informado"; } ?>
                    </td>
                </tr>
                <tr>
                    <td class="tit">Restrição de uso de</td>
                    <td>
					<?php
                    $restricao_arr = array(71=>'Tabaco',72=>'Açúcar',73=>'Bebida alcoólica');
					if(!empty($restricao)) {
						foreach($restricao as $restricao_f){ echo $restricao_arr[$restricao_f].", "; } 
					} else { echo "Não informado"; } ?>
                    </td>
                </tr>
                <tr>
                    <td class="tit">Possibilidade de atuação</td>
                    <td>
					<?php
                    $atuacao_arr = array(81=>'Promotor(a)',82=>'Apoio',83=>'Supervisor(a)',84=>'Sampling',85=>'Receptivo',86=>'Recreação',87=>'Segurança',88=>'Desfile',89=>'Bilheteria',90=>'Garçom',91=>'Art. Circense',92=>'Barman',93=>'Barwoman',94=>'Troca de brindes',95=>'Garçonete',96=>'Motorista',97=>'Dançarino');
					if(!empty($atuacao)) {
						foreach($atuacao as $atuacao_f){ echo $atuacao_arr[$atuacao_f].", "; } 
					} else { echo "Não informado"; } ?>
                    </td>
                </tr>
                <tr>
                    <td class="tit">Habilitação</td>
                    <td>
					<?php
                    $habilitacao_arr = array(101=>'Categoria A',102=>'Categoria B',103=>'Categoria C',104=>'Categoria D',105=>'Aeronave',106=>'Embarcação');
					if(!empty($habilitacao)) {
						foreach($habilitacao as $habilitacao_f){ echo $habilitacao_arr[$habilitacao_f].", "; } 
					} else { echo "Não informado"; } ?>
                    </td>
                </tr>
                <tr>
                    <td class="tit">Pagamento de Cachê</td><td><?php if(!empty($cache)) { echo promotores_opt_nome($cache); } else { echo "Não informado"; } ?></td>
                </tr>
                <tr>
                    <td class="tit">Fotos</td><td><?php promotores_fotos($promotor); ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
