</div>
<footer id="footer">
  <div class="container_16 clearfix">
    <nav class="grid_5 nav_footer">
      <h2 class="alpha grid_4"><?php echo $text_inst; ?></h2>
      <div class="clear">
      </div>
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="index.php?route=information/information&information_id=7"><?php echo $text_a_marca; ?></a>
        </li>
        <li>
          <a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a>
        </li>
      </ul>
    </nav>
    <nav class="grid_6 nav_footer">
      <h2 class="alpha grid_5">E.SHOP</h2>
      <div class="clear">
      </div>
      
      
      <?php if ($categories) { ?>
    <ul class="alpha grid_3">
      <?php 
        $ir = count($categories);
        $er = $ir / 2;
        $i = 0;
        foreach ($categories as $category) {
            if($er < $i):
                $i = 0;
        ?>
    </ul>
    <ul class="grid_3 omega">
      <?php endif; $i++; ?>
      <li>
        <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
    </nav>
    <nav class="grid_5 nav_footer">
      <h2 class="alpha grid_5"><?php echo $text_forma_pag; ?></h2>
      <div class="clear">
      </div>
      <span class="formaspag"></span>
    </nav>
  </div>
  <div class="footer">
    <div class=" container_16 clearfix">
      <div class="social grid_3 suffix_3">
        <a href="#" class="facebook ir" target="_blank">Facebook</a>
        <a href="#" class="twitter ir" target="_blank">Twitter</a>
        <a href="#" class="pinterest ir" target="_blank">Pinterest</a>
      </div>
      <div class="copy grid_4">
        <strong>©Margot Mix 2013</strong> Todos os direitos reservados.
      </div>
      <div class="prefix_2 grid_3 suffix_1">
        <a href="#" class="logoconecte ir" target="_blank">Conecte Estúdio Design</a>
      </div>
    </div>
  </div>
</footer>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="catalog/view/theme/margaux/assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>-->
<script src="catalog/view/theme/margaux/assets/js/plugins.js"></script>
<script src="catalog/view/theme/margaux/assets/js/main.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
</body></html>