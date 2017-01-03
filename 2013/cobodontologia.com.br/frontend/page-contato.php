<?php 
	$header = 'header.php';
	$footer = 'footer.php';
	include($header); 
?>

<div role="main" id="main">
  <div class="container_24 clearfix paginas">
    <div class="grid_7 suffix_17">
      <hgroup>
        <h2>Contato</h2>
      </hgroup>
    </div>
    <div class="grid_12 prefix_1 suffix_1 form"> 
      <span>Para contato via e-mail preencha os campos abaixo:</span>
      <ul>
        <li>
          <input name="nome" type="text" placeholder="Nome" />
        </li>
        <li>
          <input name="email" type="email" placeholder="E-mail" />
        </li>
        <li>
          <textarea name="msg" cols="" rows="" placeholder="Mensagem"></textarea>
        </li>
        <li>
          <input name="" type="submit" value="enviar" />
        </li>
      </ul>
    </div>
    <div class="grid_9 prefix_1 contato">
    	<div class="title">Clínica Odontológica Botafogo</div>
        <address>Rua Assis Bueno, nº 1 - Casa - Botafogo<br />Rio de Janeiro - RJ</address>
        <span class="icon-tel"></span><span class="tel tel-barra">(21) 2542-4548</span><span class="tel">(21) 8855-4548</span>
        <figure> <img src="http://flickholdr.com/311/197/sea"> </figure>
    </div>
  </div>
</div>
<?php 
	include($footer); 
?>
