<section class="reservas" id="reservas">
  <form action="" method="post" class="clearfix">
    <h1 id="form_title">
      <?php echo (isset($_POST['tipo_form'])) ? $_POST['tipo_form'] : 'Exactt Tour' ;  //(true ou false) ? true : false?>
    </h1>
    <input name="nome_function" type="hidden" id="nome_function" value="<?php isset($_POST['nome_function']) ? $_POST['nome_function'] : NULL;  ?>" />
    <?php dynamic_sidebar('form');?>
  </form>
</section>
