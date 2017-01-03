<?php 
$header = 'header.php';
$footer = 'footer.php';
$banner = 'banner-interno.php';

include "$header";
include "$banner";
?>

<div role="main" class="contato">
  <div class="container_24 clearfix">
    <div class="grid_14 suffix_2">
      <h3>Para contato via e-mail preencha os campos abaixo:</h3>
      <div class="grid_3 alpha">
        <ul class="label">
          <li>Nome</li>
          <li>Telefone</li>
          <li>Celular</li>
          <li>E-mail</li>
          <li>Mensagem</li>
        </ul>
      </div>
      <div class="grid_11 omega">
        <ul class="inputs">
          <li>
            <input name="nome" type="text" />
          </li>
          <li>
            <input name="telefone" type="tel" />
          </li>
          <li>
            <input name="celular" type="tel" />
          </li>
          <li>
            <input name="email" type="email" />
          </li>
          <li>
            <textarea name="msg" cols="" rows=""></textarea>
          </li>
          <li>
            <input name="newsletter" type="checkbox" class="checked" value="" />
            Desejo receber newsletter e informações sobre os cursos e eventos.</li>
          <li>
            <input name="" type="submit" value="Enviar" />
          </li>
        </ul>
      </div>
    </div>
    <aside class="grid_7 suffix_1">
      <figure>
      	<iframe width="255" height="160" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Travessa+Carlos+de+S%C3%A1+n%C2%B010+-+Catete&amp;aq=&amp;sll=-22.916032,-43.447416&amp;sspn=0.526833,1.056747&amp;ie=UTF8&amp;hq=&amp;hnear=Travessa+Carlos+de+S%C3%A1+-+Catete,+Rio+de+Janeiro,+22220-020&amp;t=m&amp;z=14&amp;ll=-22.925336,-43.178561&amp;output=embed"></iframe>
      </figure>
      <h6>Theta Healing</h6>
      <address>
      Travessa Carlos de Sá n°10 - Catete <br />
      Rio de Janeiro - RJ
      <div class="marco"></div>
      </address>
      <a href="assets/img/catete.jpg" class="saibamais lightbox">Saiba mais sobre o Catete</a>
      <div class="tels">
        <div class="icon-tel"></div>
        <div class="tel"><span>21</span> 3071- 5533</div>
        <div class="tel"><span>21</span> 3071- 4055</div>
        <div class="tel"><span>21</span> 8871- 8972</div>
        <div class="tel"><span>21</span> 8871- 8913</div>
      </div>
    </aside>
  </div>
</div>
<?php include "$footer"; ?>
