<?php 
$header = 'header-matricula.php';
$footer = 'footer.php';
include "$header";
?>

<div role="main" class="matricula meu_carrinho">
  <div class="container_24 clearfix">
    <h3>Meu Carrinho</h3>
    <!-- Cabecario -->
    <div class="linha linha-b clearfix cab">
      <div class="grid_5 cabec first">Curso</div>
      <div class="grid_3 cabec">Data</div>
      <div class="grid_5 cabec">Local</div>
      <div class="grid_5 cabec">Valor do Curso</div>
      <div class="grid_5 cabec">Taxa de Inscrição</div>
    </div>
    <!-- /Cabecario -->
    <div class="clear"></div>
    <div class="content linha-b"> 
      <!-- linha -->
      <div class="linha clearfix ">
        <div class="impar clearfix">
          <div class="grid_5"> <span><strong>Nome do Curso</strong></span> </div>
          <div class="grid_3"> <span>12/12/2012</span> </div>
          <div class="grid_5"> <span>Rio de Janeiro</span> </div>
          <div class="grid_5"> <span>xxx</span> </div>
          <div class="grid_5"> <span>xxx</span> </div>
          <div class="grid_1"><a href="#" class="erase">X</a></div>
        </div>
      </div>
      <!-- /linha -->
      <div class="clear"></div>
      <!-- linha -->
      <div class="linha clearfix">
        <div class="par clearfix">
          <div class="grid_5"> <span><strong>Nome do Curso</strong></span> </div>
          <div class="grid_3"> <span>12/12/2012</span> </div>
          <div class="grid_5"> <span>Rio de Janeiro</span> </div>
          <div class="grid_5"> <span>xxx</span> </div>
          <div class="grid_5"> <span>xxx</span> </div>
          <div class="grid_1"><a href="#" class="erase">X</a></div>
        </div>
      </div>
      <!-- /linha -->
      <div class="clear"></div>
    </div>
    <!-- linha -->
    <div class="linha linha-b clearfix">
      <div class="grid_5 suffix_13"> <span><strong>Taxa de Inscrição</strong></span> </div>
      <div class="grid_5"> <span>XXX</span> </div>
    </div>
    <!-- /linha -->
    <div class="clear"></div>
    <!-- linha -->
    <div class="linha linha-b clearfix">
      <div class="grid_10 prefix_14"> 
      	<a href="#" class="botao sombra">Adicionar mais cursos</a> 
        <a href="#" class="botao sombra vermelho">Finalizar a compra</a> 
      </div>
    </div>
    <!-- /linha -->
    <div class="clear"></div>
    <p>Se increva em 3 diferentes cursos ou mais e ganhe 5% de desconto no valor total dos cursos e parcele em 8 vezes sem juros. As Taxas de Inscrição são pagas Integralmente.</p>
    <p> Esta promoção não é válida para o curso Anatomia Intuitiva. Entre em contato conosco para saber das promoções do curso Anatomia Intuitiva.</p>
    <hr class="grid_10" />
    <figure class="grid_4"><img src="../assets/img/pagseguro.png" /></figure>
    <hr class="grid_10" />
  </div>
</div>
<?php include "$footer"; ?>
