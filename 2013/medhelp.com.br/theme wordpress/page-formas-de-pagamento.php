<?php include('header.php'); ?>

  <!-- MAIN -->

  <div id="main" role="main"> 

    <!-- SECTION1 -->

    <section class="quem_somos container_24 clearfix">

      <div class="grid_22 prefix_1 suffix_1" >

        <h2 class="grid_8 alpha suffix_5">Cadastre-se</h2>

        <div class="grid_9 omega">

          <form class="quest" action="" method="post">

            <input name="quest" type="text">

            <input name="" type="button" value="Buscar" class="button">

          </form>

        </div>

        <div class="traco alpha grid_22 omega esp"></div>

        <div class="clear"></div>
        
        <form class="cadastre" action="" method="post">
        	<input name="nome" type="text" placeholder="Nome*" class="grid_7">
            <input name="sobrenome" type="text" placeholder="Sobrenome*" class="grid_7">
            <input name="email" type="email" placeholder="E-mail" class="grid_7">
            <input name="tel" type="tel" placeholder="Telefone com DDD*" class="grid_7">
            <input name="end" type="text" placeholder="Endereço" class="grid_7">
            <input name="complemento" type="text" placeholder="Complemento" class="grid_7">
            <input name="cep" type="text" placeholder="CEP" class="grid_5">
            <input name="cidade" type="text" placeholder="Cidade" class="grid_7">
            <select name="uf" class="grid_2"></select>
            <input name="medico" type="text" placeholder="Nome do Médico" class="grid_7">
            <input name="crn" type="text" placeholder="CRN do Médico" class="grid_5">
            <input name="conheceu" type="text" placeholder="Onde conheceu a Medhelp?" class="grid_7">
            <input name="" type="button" value="Enviar">
        </form>
        
      </div>

      <div class="sombra"></div>

    </section>

    <!-- /SECTION1 --> 

  </div>

  <!-- /MAIN -->

  <?php include('footer.php'); ?>