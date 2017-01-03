</div>
<footer id="footer">
  <div class="hide_footer">
    <div class="container_12"> <span><?php echo lang('footer_mas'); ?></span> <a class="button ir">Menu</a>
      <nav class="menu_botton_hide container_12">
        <?php echo ul($MenuFooter); ?>
      </nav>
    </div>
  </div>
  <div class="container_12">
    <div class="grid_2 copy"> Copyright © OneShot Hotels </div>
    <nav class="grid_7 menu_botton">
      <?php echo ul($MenuFooter); ?>
    </nav>
    <div class="grid_1 redes"> <a class="twitter"> <img src="<?php echo $BASEASSETS ?>/img/twitter.png"> </a> <a class="facebook"> <img src="<?php echo $BASEASSETS ?>/img/facebook.png"> </a> </div>
    <div class="grid_2 logo_artwork"> <a href="#"> <img src="<?php echo $BASEASSETS ?>/img/logo_artwork.jpg"> </a> </div>
  </div>
</footer>

<!-- JavaScript at the bottom for fast page loading --> 

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $BASEASSETS ?>/js/vendor/jquery-1.7.1.min.js"><\/script>')</script>
<script src="<?php echo $BASEASSETS ?>/js/libs/jquery.isotope.min.js"></script>
<script src="<?php echo $BASEASSETS ?>/js/libs/mousewheel.js"></script>

<script src="<?php echo $BASEASSETS ?>/js/libs/jScrollPane.js"></script>
<!-- scripts concatenated and minified via build script --> 
<script src="<?php echo $BASEASSETS ?>/js/plugins.js"></script> 
<script src="<?php echo $BASEASSETS ?>/js/script.js"></script> 
<!-- end scripts --> 
<?php foreach ($FooterAdd as $ADD){ echo $ADD; }  ?>
<?php //echo $GOOGLEANALYTICS; ?>
<!--<script>
 var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
 </script> -->
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31871683-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 
</body>
</html>