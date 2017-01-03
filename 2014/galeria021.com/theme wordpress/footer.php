<!-- FOOTER -->
<footer id="footer">
  <!-- SOMBRA -->
  <div class="sombra">
    <div class="container">
      <div class="row">
        <!-- BOX -->
        <div class="col-md-3 col-xs-4 address box">
          <div class="icon"></div>
          <?php dynamic_sidebar('endereco');?>
        </div>
        <!-- !BOX -->
        <!-- BOX -->
        <div class="col-md-3 col-xs-4 horario box">
          <div class="icon"></div>
          <?php dynamic_sidebar('horario');?>
        </div>
        <!-- !BOX -->
        <!-- BOX -->
        <div class="col-md-3 col-xs-4 contato box">
          <div class="icon"></div>
          <?php dynamic_sidebar('tel');?>
        </div>
        <!-- !BOX -->
        <div class="clearfix visible-xs"></div>
        <!-- BOX -->
        <div class="col-md-3 col-xs-12 newsletter box">
          <div class="icon"></div>
          <span>Receba nossas newsletters.</span>
          <?php dynamic_sidebar('newsletter');?>
        </div>
        <!-- !BOX -->
      </div>
    </div>
  </div>
  <!-- !SOMBRA -->
  <!-- BOTTOM -->
  <div class="bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">©2012 - 021 - Todos os direitos reservados - <a href="http://www.galeria021.com">Galeria 021</a></div>
      </div>
    </div>
  </div>
  <!-- !BOTTOM -->
</footer>
<!-- !FOOTER -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="<?php echo bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_url');?>/assets/js/plugins.js"></script>
<script src="<?php echo bloginfo('template_url');?>/assets/js/main.js"></script>
</body>
</html>