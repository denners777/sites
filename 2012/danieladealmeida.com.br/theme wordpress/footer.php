<div class="clear"></div>
<div id="prePooter" class=""> &nbsp; </div>
<footer class="clearfix">
  <div class="container_16">
    <?php   dynamic_sidebar('widget-blog-footer');?>
    <div style="z-index:99999;"> <a href="http://conectedesign.com.br/" target="new"><img style=" margin-left:-50px; margin-top:243px;" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo_conecte.png" longdesc="http://conectedesign.com.br/"></a> </div>
  </div>
</footer>

<!-- JavaScript at the bottom for fast page loading --> 

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline --> 
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/libs/jquery.tools.min.js"></script> 
<!-- scripts concatenated and minified via build script --> 
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/plugins.js"></script> 
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/script.js"></script> 
<!-- end scripts -->
<?php wp_footer(); ?>
<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
mathiasbynens.be/notes/async-analytics-snippet --> 
<script>
	var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; ( function(d, t) {
			var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
			g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s)
		}(document, 'script')); 
</script>
</body></html>