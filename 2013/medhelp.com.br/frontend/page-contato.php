<?php include('header.php'); ?>
  <!-- MAIN -->
  <div id="main" role="main"> 
    <!-- SECTION1 -->
    <section class="quem_somos container_24 clearfix">
      <div class="grid_22 prefix_1 suffix_1" >
        <h2 class="grid_7 alpha suffix_6">Contato</h2>
        <div class="grid_9 omega">
          <form class="quest" action="" method="post">
            <input name="quest" type="text">
            <input name="" type="button" value="Buscar" class="button">
          </form>
        </div>
        <div class="traco alpha grid_22 omega"></div>
        <div class="clear"></div>
        <article class="artigo alpha grid_10 suffix_2">
          <span>Entre em contato conosco preenchendo o formulário abaixo:</span>
          <ul class="contato">
          	<li><input name="nome" type="text" placeholder="Nome"></li>
            <li><input name="email" type="email" placeholder="E-mail"></li>
            <li><input name="tel" type="tel" placeholder="Telefone"></li>
            <li><textarea name="msg" cols="" rows="" placeholder="Mensagem"></textarea></li>
            <li><input name="" type="submit" value="Enviar"></li>
          </ul>
        </article>
        <aside class="aside grid_10 omega">
        	<span>Atendimento</span>
            <span class="tel"><small>21</small> 2215 - 6097 &bull; <small>21</small> 2224 - 5086</span>
            <span>Fax</span>
            <span class="tel"><small>21</small> 2283 - 5164</span>
            <address><h1>MedHelp</h1> - Av. Almirante Barroso 06<br>
            Sala 2009 /Centro / Rio de Janeiro - RJ</address> 
            <figure class="maps">
            <a href="http://goo.gl/maps/px8mW" target="_blank">
            <?php

			function getMap($address, $size = '354x344',$zoom = '15') {
			
				//Target Url
				$target = "http://maps.google.com/maps/api/staticmap?center={$address}&zoom={$zoom}&size={$size}&sensor=false&markers=color:green|{$address}";
			
				//run curl
				$curl_instance = curl_init($target);
				curl_setopt($curl_instance, CURLOPT_RETURNTRANSFER, true);
				curl_exec($curl_instance);
			
				//if the img did not come back
				if (curl_errno($curl_instance))
					return '<p class="error">Map Error: ' . curl_error($ch) . '</p>';
				else
					return "<img src=\"{$target}\" alt=\"Map\" />";
			
				//kill curl
				curl_close($curl_instance);
			}
			echo getMap('Av. Alm. Barroso, 6 - Centro Rio de Janeiro - RJ, 20031-000');
            ?>
         </a>
            </figure>
        </aside>
      </div>
      <div class="sombra"></div>
    </section>
    <!-- /SECTION1 --> 
  </div>
  <!-- /MAIN -->
  <?php include('footer.php'); ?>