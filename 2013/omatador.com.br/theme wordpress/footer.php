</div>

<!--./#wrap   -->
<div id="footer">
<?php 
			$args = array(
				  'theme_location'  => 'menu_footer',
				  'menu'            => 'menu-bottom', 
				  'container'       => 'nav', 
				  'container_class' => 'container_24 clearfix', 
				  'container_id'    => '',
				  'menu_class'      => 'grid_24',
				  'menu_id'         => '', 
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				  'depth'           => 0,
				);
				
				wp_nav_menu( $args );
	?>
  <figure class="bgbr">
      <div class="patrocinio"> <img src="<?php echo bloginfo('template_url');?>/assets/img/patrocinio.jpg" width="960"> </div>
  </figure>
  <div class="container_24 clearfix">
  	<div class="grid_12 prefix_6 suffix_6">
    	<div class="box1">
        <span>SIGA</span>
        <a href="http://www.facebook.com/matadorteatro" class="facebook ir" target="_blank">Facebook</a>
        <!--<a href="#" class="youtube ir">Youtube</a>-->
        </div>
        <div class="box2">© 2012 TODOS OS DIREITOS RESERVADOS</div>
        <div class="box3">
        	<span>Agência Digital</span>
            <a href="http://conectedesign.com.br/" target="_blank" class="conecte ir">Conecte Estúdio Design</a>
        </div>
    </div>
  </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/jquery-1.7.1.min.js"><\/script>')</script> 
<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/assets/media_element/build/mediaelement-and-player.min.js"></script>
<script src="<?php echo bloginfo('template_url');?>/assets/js/plugins.js"></script> 
<script src="<?php echo bloginfo('template_url');?>/assets/js/tinyscrollbar.js"></script> 
<script src="<?php echo bloginfo('template_url');?>/assets/js/main.js"></script> 

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --> 
<script>
/*var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));*/
</script>
</body>
</html>
