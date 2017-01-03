<?php include("header.php"); ?>
<section class="reservas">
  <form action="" method="post" class="clearfix">
    <h1>Faça seu Pacote de Viagem</h1>
    <fieldset class="coluna">
      <input name="nome" type="text" id="nome" placeholder="Nome" class="gradient">
      <input name="telefone" type="text" id="telefone" placeholder="Telefone" class="gradient">
      <input name="email" type="text" id="email" placeholder="E-mail" class="gradient">
      <input name="assunto" type="text" id="assunto" placeholder="Assunto" class="gradient">
      <input name="dat-in" type="text" id="dat-in" placeholder="Data Início" class="gradient" value="12/08/2012">
      <input name="dat-fim" type="text" id="dat-fim" placeholder="Data Final" class="gradient" value="19/08/2012">
      <span class="clearfix"></span>
      <textarea name="msg" cols="" rows="" placeholder="Mensagem" class="gradient"></textarea>
    </fieldset>
    <fieldset class="col02">
      <legend>Serviços incluídos</legend>
      <ul>
        <li> Reserva de Hotel </li>
        <li> Tradutor </li>
        <li> Reserva de Passagem </li>
        <li> Transfer </li>
        <li> Guia </li>
        <li> Recepcionista </li>
        <li> Motorista </li>
        <li> Segurança </li>
        <li> Aluguel de veículo </li>
      </ul>
    </fieldset>
    <input name="" type="submit" value="Enviar!" class="clearfix">
  </form>
</section>
<?php include("footer.php"); ?>
