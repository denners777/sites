<?php

include '../val.inc';
include 'funcs.php';
include '../conn.inc';
$acao = $_GET["a"];

switch($acao){
	case 's-edita': $msg = "Promotor alterado com sucesso."; $class = "sucesso"; break;
	case 'e-edita': $msg = "Ocorreu um erro. Tente alterar novamente."; $class = "erro"; break;
	case 's-exclui': $msg = "Promotor deletado com sucesso."; $class = "sucesso"; break;
	case 'e-exclui': $msg = "Ocorreu um erro. Tente deletar novamente."; $class = "erro"; break;
	case 's-excluif': $msg = "Foto do promotor deletada com sucesso."; $class = "sucesso"; break;
	case 'e-excluif': $msg = "Ocorreu um erro. Tente deletar novamente."; $class = "erro"; break;
}

//BUSCA//
$busca = $_GET["b"];
$cidade = $_GET["cidade"];
$bairro = $_GET["bairro"];
$sexo = $_GET["sexo"];
$idade1 = $_GET["idade1"];
$idade2 = $_GET["idade2"];
$pele = $_GET["pele"];
$olhos = $_GET["olhos"];
$oculos = $_GET["oculos"];
$altura1 = $_GET["altura1"];
$altura2 = $_GET["altura2"];
$tatuagem = $_GET["tatuagem"];
$piercing = $_GET["piercing"];
$uniforme = $_GET["uniforme"];
$escolaridade = $_GET["escolaridade"];
$curso = $_GET["curso"];
$cabelo = $_GET["cabelo"];
$cabelo_t = $_GET["cabelo_t"];
$ingles = $_GET["ingles"];
$espanhol = $_GET["espanhol"];
$frances = $_GET["frances"];
$alemao = $_GET["alemao"];
$japones = $_GET["japones"];
$horario = $_GET["horario"];
$restricao = $_GET["restricao"];
$viagem = $_GET["viagem"];
$atuacao = $_GET["atuacao"];
$habilitacao = $_GET["habilitacao"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Promotores | Painel &#8250; Mello&amp;Madruga</title>
<link rel="stylesheet" href="../css/painel.css" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/painel.js"></script>
</head>

<body onload="menu_ctrl('promotores','visualizar')">
	<div id="painel">
        <h1><small>Painel </small>Mello&amp;Madruga</h1>
        <?php include 'menu.php'; ?>
        <div id="cont">
        	<h2>Promotores</h2>
            <?php if(!empty($acao)) { echo '<p class="'.$class.'" id="erro">'.$msg.'</p>'; } ?>
            <p id="p_busca"><a title="Buscar Promotor">Buscar +</a></p>
            <form action="promotores.php" method="get">
            <input type="hidden" name="b" value="s" />
                <fieldset class="promotor">
                    <table class="busca" id="busca" <?php if($busca=="s") { echo ' style="display:block"'; } ?>>
                    <tr class="cor2"><td class="tit">Cidade</td><td><input type="text" name="cidade" id="cidade" class="w200" value="<?php echo $cidade; ?>" /></td></tr>
                    <tr class="cor1"><td class="tit">Bairro</td><td><input type="text" name="bairro" id="bairro" class="w200" value="<?php echo $bairro; ?>" /></td></tr>
                    <tr class="cor2"><td class="tit">Idade</td><td><input type="text" name="idade1" id="idade1" class="w20" value="<?php echo $idade1; ?>" /> a  <input type="text" name="idade2" id="idade2" class="w20" value="<?php echo $idade2; ?>" /></td></tr>
                    <tr class="cor1"><td class="tit">Sexo</td><td><input type="radio" name="sexo" id="sexo" value="0" <?php if($sexo =="0") { echo 'checked="checked"'; } ?> /> Indiferente <input type="radio" name="sexo" id="sexo" value="M" <?php if($sexo =="M") { echo 'checked="checked"'; } ?> /> M <input type="radio" name="sexo" id="sexo" value="F" <?php if($sexo =="F") { echo 'checked="checked"'; } ?> /> F</td></tr>
                    <tr>
                        <td class="tit"><label for="altura">Altura</label></td>
                        <td>
                            <input type="text" name="altura1" id="altura1" class="w30" value="<?php echo $altura1; ?>" /> a <input type="text" name="altura2" id="altura2" class="w30" value="<?php echo $altura2; ?>" /> cm
                        </td>
                    </tr>
                    <tr class="cor1">
                        <td class="tit"><label for="cabelo">Cor da pele</label></td>
                        <td>
                        <select name="pele" id="pele">
                            <option value="0">Escolha</option>
                            <?php promotores_opt(1,$pele); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor2">
                        <td class="tit"><label for="olhos">Olhos</label></td>
                        <td>
                        <select name="olhos" id="olhos">
                            <option value="0">Escolha</option>
                            <?php promotores_opt(2,$olhos); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor1">
                        <td class="tit"><label for="oculos">Óculos</label></td>
                        <td>
                        <select name="oculos" id="oculos">
                            <option value="0">Escolha</option>
                            <option value="S" <?php if($oculos=="S") { echo 'selected="selected"'; } ?>>Sim</option>
                            <option value="N" <?php if($oculos=="N") { echo 'selected="selected"'; } ?>>Não</option>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor2">
                        <td class="tit"><label for="cabelo">Cabelo</label></td>
                        <td>
                        <select name="cabelo" id="cabelo">
                            <option value="0">Escolha</option>
                            <?php promotores_opt(3,$cabelo); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor1">
                        <td class="tit"><label for="cabelo_t">Tipo de Cabelo</label></td>
                        <td>
                        <select name="cabelo_t" id="cabelo_t">
                            <option value="0">Escolha</option>
                            <?php promotores_opt(4,$cabelo_t); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor2">
                        <td class="tit"><label for="tatuagem">Tatuagem</label></td>
                        <td>
                        <select name="tatuagem" id="tatuagem">
                            <option value="0">Escolha</option>
                            <?php promotores_opt(5,$tatuagem); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor1">
                        <td class="tit"><label for="piercing">Piercing</label></td>
                        <td>
                        <select name="piercing" id="piercing">
                            <option value="0">Escolha</option>
                            <?php promotores_opt(6,$piercing); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor2">
                        <td class="tit"><label for="uniforme">Uniforme</label></td>
                        <td>
                        <select name="uniforme" id="uniforme">
                            <option value="0">escolha</option>
                            <option value="PP" <?php if($uniforme == "PP") { echo 'selected="selected"'; } ?>>PP</option>
                            <option value="P" <?php if($uniforme == "P") { echo 'selected="selected"'; } ?>>P</option>
                            <option value="M" <?php if($uniforme == "M") { echo 'selected="selected"'; } ?>>M</option>
                            <option value="G" <?php if($uniforme == "G") { echo 'selected="selected"'; } ?>>G</option>
                            <option value="GG" <?php if($uniforme == "GG") { echo 'selected="selected"'; } ?>>GG</option>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor1">
                        <td class="tit"><label for="escolaridade">Escolaridade</label></td>
                        <td>
                        <select name="escolaridade" id="escolaridade">
                            <option value="0">escolha</option>
                            <?php promotores_opt(7,$escolaridade); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor2">
                        <td class="tit"><label for="curso">Curso</label></td>
                        <td>
                        <select name="curso" id="curso">
                            <option value="0">escolha</option>
                            <?php promotores_opt(8,$curso); ?>
                        </select>
                        </td>
                    </tr>
                    <tr class="cor1">
                        <td class="tit"><label>Idiomas</label></td>
                        <td>
                            <ul>
                                <li>inglês
                                <select name="ingles" id="ingles">
                                    <option value="0">Escolha</option>
                                    <?php promotores_opt(10,$ingles); ?>
                                </select></li>
                                <li>espanhol 
                                <select name="espanhol" id="espanhol">
                                    <option value="0">Escolha</option>
                                    <?php promotores_opt(10,$espanhol); ?>
                                </select></li>
                                <li>frances 
                                <select name="frances" id="frances">
                                    <option value="0">Escolha</option>
                                    <?php promotores_opt(10,$frances); ?>
                                </select></li>
                                <li>alemão 
                                <select name="alemao" id="alemao">
                                    <option value="0">Escolha</option>
                                    <?php promotores_opt(10,$alemao); ?>
                                </select></li>
                                <li>japonês 
                                <select name="japones" id="japones">
                                    <option value="0">Escolha</option>
                                    <?php promotores_opt(10,$japones); ?>
                                </select></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="cor2"><td class="tit">Características</td>
                    	<td>
                        <ul>
                        <li>
                          <strong>Disponibilidade de Horário:</strong><br />
                          <input type="checkbox" name="horario[]" id="horario_manha" value="51" /><label for="horario_manha">Manhã</label>
                          <input type="checkbox" name="horario[]" id="horario_tarde" value="52" /><label for="horario_tarde">Tarde</label>
                          <input type="checkbox" name="horario[]" id="horario_noite" value="53" /><label for="horario_noite">Noite</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="horario[]" id="horario_fds" value="54" /><label for="horario_fds" class="duplo">Final de semana e feriado</label>
                          <input type="checkbox" name="horario[]" id="horario_todos" value="55" /><label for="horario_todos" class="auto">Qualquer horário</label>
                        </li>
                        <li>
                          <strong>Disponibilidade para Viagem:</strong><br />
                          <input type="checkbox" name="viagem[]" id="viagem_sim" value="61" /><label for="viagem_sim">Sim</label>
                          <input type="checkbox" name="viagem[]" id="viagem_nao" value="62" /><label for="viagem_nao">Não</label>
                          <input type="checkbox" name="viagem[]" id="viagem_fds" value="63" /><label for="viagem_fds" class="auto">Só fim de semana e feriado</label>
                        </li>
                        <li>
                          <strong>Restrição ao uso de:</strong><br />
                          <input type="checkbox" name="restricao[]" id="restricao_tabaco" value="71" /><label for="restricao_tabaco">Tabaco</label>
                          <input type="checkbox" name="restricao[]" id="restricao_acucar" value="72" /><label for="restricao_acucar">Açucar</label>
                          <input type="checkbox" name="restricao[]" id="restricao_bebida" value="73" /><label for="restricao_bebida" class="auto">Bebida alcoólica</label>
                        </li>
                        <li>
                          <strong>Possibilidade de atuação:</strong><br />
                          <input type="checkbox" name="atuacao[]" id="atuacao_promotor" value="81" /><label for="atuacao_promotor">Promotor(a)</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_apoio" value="82" /><label for="atuacao_apoio">Apoio</label>         
                          <input type="checkbox" name="atuacao[]" id="atuacao_supervisor" value="83" /><label for="atuacao_supervisor" class="duplo">Supervisor(a)</label>
                        </li>
                        <li class="notit">        
                          <input type="checkbox" name="atuacao[]" id="atuacao_sampling" value="84" /><label for="atuacao_sampling">Sampling</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_receptivo" value="85" /><label for="atuacao_receptivo">Receptivo</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_recreacao" value="86" /><label for="atuacao_recreacao">Recreação</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_seguranca" value="87" /><label for="atuacao_seguranca">Segurança</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="atuacao[]" id="atuacao_desfile" value="88" /><label for="atuacao_desfile">Desfile</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_bilheteria" value="89" /><label for="atuacao_bilheteria">Bilheteria</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_garcon" value="90" /><label for="atuacao_garcon">Garçon</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_circo" value="91" /><label for="atuacao_circo" class="auto">Art. Circense</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="atuacao[]" id="atuacao_barman" value="92" /><label for="atuacao_barman">Barman</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_barwoman" value="93" /><label for="atuacao_barwoman">Barwoman</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_troca" value="94" /><label for="atuacao_troca" class="auto">Troca de Brindes</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="atuacao[]" id="atuacao_garconete" value="95" /><label for="atuacao_garconete">Garçonete</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_motorista" value="96" /><label for="atuacao_motorista">Motorista</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_danca" value="97" /><label for="atuacao_danca">Dançarino(a)</label>
                        </li>
                        <li>
                          <strong>Habilitação para veículo:</strong><br />     
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_a" value="101" /><label for="habilitacao_a">Categoria A</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_b" value="102" /><label for="habilitacao_b">Categoria B</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_c" value="103" /><label for="habilitacao_c">Categoria C</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_d" value="104" /><label for="habilitacao_d">Categoria D</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_nave" value="105" /><label for="habilitacao_nave">Aeronave</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_embarca" value="106" /><label for="habilitacao_embarca">Embarcação</label>
                        </li>
                        </ul>
                        </td>
                    </tr>
                    <tr class="cor1"><td>&nbsp;</td><td><input type="submit" value="Buscar" class="botao" /></td></tr>
                    </table>
                </fieldset>
            </form>
            <table class="tbl usr">
            	<tr class="tit"><td class="w150">&nbsp;</td><td class="w250">Nome</td><td class="w150">Nascimento</td><td class="center">Cadastro</td></tr>
                <?php promotores($cidade,$bairro,$sexo,$idade1,$idade2,$olhos,$oculos,$altura1,$altura2,$tatuagem,$piercing,$uniforme,$escolaridade,$curso,$cabelo,$cabelo_t,$pele,$ingles,$espanhol,$frances,$alemao,$japones,$horario,$viagem,$atuacao,$restricao,$habilitacao); ?>
            </table>
        </div>
    </div>
</body>
</html>
